<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/katalog', [\App\Http\Controllers\LibraryController::class, 'katalog'])->name('katalog');

Route::get('/sirkulasi', function () {
    return view('sirkulasi');
})->name('sirkulasi');

Route::get('/statistik', function () {
    // 1. Kunjungan Hari Ini (Simulasi kunjungan harian + peminjaman hari ini)
    $kunjunganHariIni = \App\Models\Borrowing::whereDate('borrowed_at', now()->format('Y-m-d'))->count() * 5 + 342; 
    
    // 2. Buku Terpinjam (Status borrowed)
    $bukuTerpinjam = \App\Models\Borrowing::where('status', 'borrowed')->count();
    
    // 3. Terlambat Kembali (Lewat dari due_date)
    $terlambatKembali = \App\Models\Borrowing::where('status', 'borrowed')->where('due_date', '<', now())->count();
    
    // 4. Stok Koleksi Siap
    $stokKoleksiSiap = \App\Models\Book::sum('stock');
    
    // 5. Buku Terpopuler (Berdasarkan popularity_score atau yang terbanyak dipinjam)
    $bukuTerpopuler = \App\Models\Book::orderByDesc('popularity_score')->take(3)->get();

    return view('statistik', compact('kunjunganHariIni', 'bukuTerpinjam', 'terlambatKembali', 'stokKoleksiSiap', 'bukuTerpopuler'));
})->name('statistik');

Route::get('/akun', function (\Illuminate\Http\Request $request) {
    $tokenUser = null;
    $bearer = $request->bearerToken();
    if ($bearer) {
        $pat = \Laravel\Sanctum\PersonalAccessToken::findToken($bearer);
        if ($pat) $tokenUser = $pat->tokenable;
    }
    
    $user = $tokenUser ?? auth()->user();
    
    // Jika session sedang login sebagai admin perpustakaan, arahkan halaman akun siswa ke data siswa aktif
    if (!$user || session('is_admin') || in_array(strtolower($user->role ?? ''), ['admin', 'pustakawan', 'kepala perpus', 'admin it', 'petugas'])) {
        $studentUser = \App\Models\User::whereNotIn('role', ['admin', 'pustakawan', 'kepala perpus', 'admin it', 'petugas'])->latest('updated_at')->first();
        if ($studentUser) {
            $user = $studentUser;
        }
    }

    if (!$user) {
        $user = \App\Models\User::first();
    }
    
    // Fetch real borrowing history
    $borrowings = \App\Models\Borrowing::where('user_id', $user->id)
                    ->with('book')
                    ->orderBy('borrowed_at', 'desc')
                    ->get();

    return view('akun', compact('user', 'borrowings'));
})->name('akun');

Route::get('/baca-ebook/{id}', function ($id) {
    $book = \App\Models\Book::find((int)$id);
    if (!$book) abort(404);
    $user = auth()->user() ?? \App\Models\User::first();
    
    if ($user && $book->type != 'physical') {
        $user->increment('xp', 15);
        $user->increment('reading_hours', 0.5); // Add 30 mins
        $user->increment('read_count');
        
        // Streak Logic
        $today = now()->format('Y-m-d');
        if ($user->last_read_date != $today) {
            $yesterday = now()->subDay()->format('Y-m-d');
            if ($user->last_read_date == $yesterday) {
                $user->increment('current_streak');
            } else {
                $user->update(['current_streak' => 1]);
            }
            if ($user->current_streak > $user->highest_streak) {
                $user->update(['highest_streak' => $user->current_streak]);
            }
            $user->update(['last_read_date' => $today]);
        }
        
        // Level up
        $nextLevelXp = $user->level * 100;
        if ($user->xp >= $nextLevelXp) {
            $user->increment('level');
            $user->decrement('xp', $nextLevelXp);
        }
        
        // Ensure a borrowing record exists to show up in "Riwayat Sirkulasi"
        \App\Models\Borrowing::firstOrCreate([
            'user_id' => $user->id,
            'book_id' => $book->id,
            'status' => 'returned'
        ], [
            'borrowed_at' => now(),
            'due_date' => now(),
            'returned_at' => now()
        ]);
    }
    
    // Check if file exists locally in public folder
    $localPath = public_path($book->pdf_path);
    if (!file_exists($localPath)) {
        return back()->with('error', 'Maaf, file E-Book ini (' . basename($book->pdf_path) . ') belum ter-download di laptop ini. Silakan lakukan Git Pull terlebih dahulu.');
    }

    return redirect(asset($book->pdf_path));
})->name('baca.ebook');

Route::get('/scanner', function () {
    return view('scanner');
})->name('scanner');

Route::get('/notifikasi', function () {
    $user = auth()->user() ?? \App\Models\User::first();
    if (!$user) return redirect('/login');

    $borrowings = \App\Models\Borrowing::with('book')->where('user_id', $user->id)->get();
    $notifications = [];
    $today = \Carbon\Carbon::now()->startOfDay();
    
    // Set locale to Indonesian for carbon
    \Carbon\Carbon::setLocale('id');

    foreach ($borrowings as $b) {
        $bookTitle = $b->book ? $b->book->title : 'Buku';
        
        // 1. Borrowed
        if ($b->borrowed_at) {
            $dateStr = \Carbon\Carbon::parse($b->borrowed_at)->timezone('Asia/Jakarta')->translatedFormat('d M Y, H:i');
            $timeDiff = \Carbon\Carbon::parse($b->borrowed_at)->timezone('Asia/Jakarta')->diffForHumans();
            $notifications[] = [
                'id' => 'borrow_' . $b->id,
                'type' => 'success',
                'title' => 'Buku Berhasil Dipinjam',
                'message' => 'Kamu meminjam buku "' . $bookTitle . '". Selamat membaca!',
                'time' => $dateStr . ' WIB (' . $timeDiff . ')',
                'icon' => 'menu_book',
                'color' => 'emerald',
                'raw_time' => \Carbon\Carbon::parse($b->borrowed_at)
            ];
        }

        // 2. Returned
        if ($b->returned_at) {
            $dateStr = \Carbon\Carbon::parse($b->returned_at)->timezone('Asia/Jakarta')->translatedFormat('d M Y, H:i');
            $timeDiff = \Carbon\Carbon::parse($b->returned_at)->timezone('Asia/Jakarta')->diffForHumans();
            $notifications[] = [
                'id' => 'return_' . $b->id,
                'type' => 'info',
                'title' => 'Buku Dikembalikan',
                'message' => 'Terima kasih telah mengembalikan "' . $bookTitle . '" tepat waktu.',
                'time' => $dateStr . ' WIB (' . $timeDiff . ')',
                'icon' => 'task_alt',
                'color' => 'blue',
                'raw_time' => \Carbon\Carbon::parse($b->returned_at)
            ];
        }

        // 3. Overdue & Reminders
        if (is_null($b->returned_at) && $b->due_date) {
            $dueDate = \Carbon\Carbon::parse($b->due_date)->startOfDay();
            
            if ($dueDate->isPast()) {
                // Overdue
                $daysLate = $dueDate->diffInDays($today);
                $fine = $daysLate * 1000;
                $notifications[] = [
                    'id' => 'overdue_' . $b->id,
                    'type' => 'danger',
                    'title' => 'Keterlambatan Pengembalian!',
                    'message' => 'Buku "' . $bookTitle . '" sudah lewat tenggat (' . $daysLate . ' hari). Denda saat ini: Rp ' . number_format($fine, 0, ',', '.') . '.',
                    'time' => 'Terlambat ' . $daysLate . ' Hari',
                    'icon' => 'warning',
                    'color' => 'rose',
                    'urgent' => true,
                    'raw_time' => \Carbon\Carbon::now() // Show at top
                ];
            } else {
                // Not overdue yet, show countdown (H-X)
                $daysLeft = $today->diffInDays($dueDate, false);
                if ($daysLeft >= 0 && $daysLeft <= 3) { // Show reminders for H-0, H-1, H-2, H-3
                    $urgencyText = $daysLeft == 0 ? 'Hari Ini!' : 'H-' . $daysLeft;
                    $notifications[] = [
                        'id' => 'reminder_' . $b->id,
                        'type' => 'warning',
                        'title' => 'Tenggat Pengembalian Hampir Tiba!',
                        'message' => 'Tenggat pengembalian buku "' . $bookTitle . '" adalah tanggal ' . $dueDate->translatedFormat('d M Y') . '.',
                        'time' => 'Sisa ' . $daysLeft . ' Hari (' . $urgencyText . ')',
                        'icon' => 'schedule',
                        'color' => 'amber',
                        'urgent' => $daysLeft <= 1,
                        'raw_time' => \Carbon\Carbon::now() // Show at top
                    ];
                }
            }
        }
    }
    
    usort($notifications, function($a, $b) {
        if (($a['urgent'] ?? false) !== ($b['urgent'] ?? false)) {
            return ($b['urgent'] ?? false) <=> ($a['urgent'] ?? false);
        }
        return $b['raw_time'] <=> $a['raw_time'];
    });

    return view('notifikasi', compact('notifications'));
})->name('notifikasi');

Route::get('/sirkulasi-sukses', function (\Illuminate\Http\Request $request) {
    $borrowing = null;
    if ($request->has('id') && is_numeric($request->id)) {
        $borrowing = \App\Models\Borrowing::with('book')->find($request->id);
    }
    
    if (!$borrowing) {
        $user = auth()->user() ?? \App\Models\User::first();
        $borrowing = \App\Models\Borrowing::where('user_id', $user->id)
                        ->with('book')
                        ->latest('borrowed_at')
                        ->first();
    }
                    
    if (!$borrowing) {
        $book = \App\Models\Book::first();
        $borrowing = new \App\Models\Borrowing([
            'borrowed_at' => now(),
            'due_date' => now()->addDays(14),
            'status' => 'borrowed',
        ]);
        $borrowing->book = $book;
        $borrowing->id = rand(1000, 9999);
    }
    
    return view('sirkulasi_sukses', compact('borrowing'));
})->name('sirkulasi.sukses');

Route::get('/akun-pengaturan', function () {
    $user = auth()->user();
    if (!$user || session('is_admin') || in_array(strtolower($user->role ?? ''), ['admin', 'pustakawan', 'kepala perpus', 'admin it', 'petugas'])) {
        $studentUser = \App\Models\User::whereNotIn('role', ['admin', 'pustakawan', 'kepala perpus', 'admin it', 'petugas'])->latest('updated_at')->first();
        if ($studentUser) $user = $studentUser;
    }
    $user = $user ?? \App\Models\User::first();
    return view('akun_pengaturan', compact('user'));
})->name('akun.pengaturan');

Route::get('/bantuan', function () {
    return view('bantuan');
})->name('bantuan');

Route::get('/selesai-baca/{borrow_id}', function (\Illuminate\Http\Request $request, $borrow_id) {
    $bearerToken = $request->bearerToken();
    $tokenUser = null;
    if ($bearerToken) {
        $tokenModel = \Laravel\Sanctum\PersonalAccessToken::findToken($bearerToken);
        if ($tokenModel) {
            $tokenUser = $tokenModel->tokenable;
        }
    }

    $user = $tokenUser ?? auth('sanctum')->user() ?? auth()->user();

    if (!$user) {
        return response()->json(['success' => false, 'message' => 'Silakan login terlebih dahulu.']);
    }

    $borrow = \App\Models\Borrowing::where('id', $borrow_id)->whereNull('returned_at')->first();

    if (!$borrow) {
        return response()->json(['success' => false, 'message' => 'Data peminjaman tidak ditemukan atau buku sudah dikembalikan.']);
    }

    $isAdmin = session('is_admin') || in_array(strtolower($user->role ?? ''), ['admin', 'pustakawan', 'kepala perpus', 'admin it', 'petugas']);

    if (!$isAdmin && $borrow->user_id != $user->id) {
        return response()->json(['success' => false, 'message' => 'Anda tidak memiliki hak untuk mengembalikan buku ini.']);
    }

    // Tandai buku sebagai dikembalikan
    $borrow->update([
        'returned_at' => now(),
        'status' => 'returned'
    ]);
    
    // Kembalikan stok buku
    \App\Models\Book::where('id', $borrow->book_id)->increment('stock');

    // ==== LOGIKA GAMIFIKASI (TAMBAH XP) ====
    $borrower = $borrow->user ?? $user;
    $xp_tambahan = 50; 
    $borrower->increment('xp', $xp_tambahan);
    $borrower->increment('read_count', 1);

    // Cek apakah level naik
    $batas_xp = $borrower->level * 100;
    if ($borrower->xp >= $batas_xp) {
        $borrower->increment('level', 1);
        $borrower->decrement('xp', $batas_xp);
    }

    // ==== LOGIKA STREAK ====
    $today = now()->format('Y-m-d');
    if ($borrower->last_read_date !== $today) {
        if ($borrower->last_read_date === now()->subDay()->format('Y-m-d')) {
            $borrower->current_streak += 1;
        } else {
            $borrower->current_streak = 1;
        }
        
        if ($borrower->current_streak > $borrower->highest_streak) {
            $borrower->highest_streak = $borrower->current_streak;
        }
        
        $borrower->last_read_date = $today;
        $borrower->save();
    }
    
    return response()->json(['success' => true, 'message' => 'Buku selesai dibaca, kamu dapat '.$xp_tambahan.' XP!']);
});

Route::get('/perpanjang/{borrow_id}', function (\Illuminate\Http\Request $request, $borrow_id) {
    $bearerToken = $request->bearerToken();
    $tokenUser = null;
    if ($bearerToken) {
        $tokenModel = \Laravel\Sanctum\PersonalAccessToken::findToken($bearerToken);
        if ($tokenModel) {
            $tokenUser = $tokenModel->tokenable;
        }
    }

    $user = $tokenUser ?? auth('sanctum')->user() ?? auth()->user();

    if (!$user) {
        return response()->json(['success' => false, 'message' => 'Silakan login terlebih dahulu.']);
    }

    $borrow = \App\Models\Borrowing::where('id', $borrow_id)->whereNull('returned_at')->first();

    if (!$borrow) {
        return response()->json(['success' => false, 'message' => 'Data peminjaman tidak ditemukan atau buku sudah dikembalikan.']);
    }

    $isAdmin = session('is_admin') || in_array(strtolower($user->role ?? ''), ['admin', 'pustakawan', 'kepala perpus', 'admin it', 'petugas']);

    if (!$isAdmin && $borrow->user_id != $user->id) {
        return response()->json(['success' => false, 'message' => 'Anda tidak memiliki hak untuk memperpanjang buku ini.']);
    }

    if ($borrow->renew_count >= 1) {
        return response()->json(['success' => false, 'message' => 'Buku ini sudah pernah diperpanjang sebelumnya.']);
    }
    
    $borrow->due_date = \Carbon\Carbon::parse($borrow->due_date)->addDays(7);
    $borrow->increment('renew_count', 1);
    $borrow->save();

    return response()->json(['success' => true, 'message' => 'Waktu peminjaman berhasil diperpanjang 7 hari!']);
});

require __DIR__.'/auth.php';

use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\AdminAuthController;

Route::get('/edit-profil', function () {
    $user = auth()->user();
    if (!$user || session('is_admin') || in_array(strtolower($user->role ?? ''), ['admin', 'pustakawan', 'kepala perpus', 'admin it', 'petugas'])) {
        $studentUser = \App\Models\User::whereNotIn('role', ['admin', 'pustakawan', 'kepala perpus', 'admin it', 'petugas'])->latest('updated_at')->first();
        if ($studentUser) $user = $studentUser;
    }
    $user = $user ?? \App\Models\User::first();
    return view('edit_profil', compact('user'));
})->name('edit.profil');

// Admin Auth Routes
Route::get('/csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
})->name('csrf.token');
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::match(['get', 'post'], '/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Dashboard Routes (Protected by admin & RBAC middleware)
Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminBookController::class, 'index'])->name('admin');
    Route::get('/admin/search', [AdminBookController::class, 'search'])->name('admin.search');

    // 1. Modul Manajemen Buku (Pustakawan & Admin IT)
    Route::middleware('role:pustakawan,admin it')->group(function () {
        Route::get('/admin/tambah-buku', [AdminBookController::class, 'create'])->name('admin.books.create');
        Route::post('/admin/books', [AdminBookController::class, 'store'])->name('admin.books.store');
        Route::get('/admin/books/{id}/edit', [AdminBookController::class, 'edit'])->name('admin.books.edit');
        Route::put('/admin/books/{id}', [AdminBookController::class, 'update'])->name('admin.books.update');
        Route::delete('/admin/books/{id}', [AdminBookController::class, 'destroy'])->name('admin.books.destroy');
    });

    // 2. Modul Persetujuan & Peminjaman (Pustakawan, Kepala Perpus, & Admin IT)
    Route::middleware('role:pustakawan,kepala perpus,admin it')->group(function () {
        Route::get('/admin/persetujuan', [App\Http\Controllers\AdminApprovalController::class, 'index'])->name('admin.persetujuan');
        Route::post('/admin/persetujuan/{id}/approve', [App\Http\Controllers\AdminApprovalController::class, 'approve'])->name('admin.persetujuan.approve');
        Route::post('/admin/persetujuan/{id}/reject', [App\Http\Controllers\AdminApprovalController::class, 'reject'])->name('admin.persetujuan.reject');
    });

    // 3. Modul Laporan Eksekutif & Statistik (Kepala Perpus & Admin IT)
    Route::middleware('role:kepala perpus,admin it')->group(function () {
        Route::get('/admin/laporan', [AdminBookController::class, 'laporan'])->name('admin.laporan');
    });
});

Route::post('/borrow', [BorrowController::class, 'store'])->name('borrow.store');
