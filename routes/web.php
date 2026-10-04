<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/katalog', function () {
    $books = App\Models\Book::latest()->get();
    return view('katalog', compact('books'));
})->name('katalog');

Route::get('/sirkulasi', function () {
    return view('sirkulasi');
})->name('sirkulasi');

Route::get('/statistik', function () {
    return view('statistik');
})->name('statistik');

Route::get('/akun', function () {
    $user = auth()->user() ?? \App\Models\User::first();
    if (!$user) {
        $user = \App\Models\User::create([
            'name' => 'Nama Siswa',
            'email' => 'siswa@example.com',
            'password' => bcrypt('password'),
            'xp' => 120, // initial xp for demo
            'level' => 2,
            'read_count' => 1,
        ]);
    }
    
    // Fetch real borrowing history
    $borrowings = \App\Models\Borrowing::where('user_id', $user->id)
                    ->with('book')
                    ->orderBy('borrowed_at', 'desc')
                    ->get();

    return view('akun', compact('user', 'borrowings'));
})->name('akun');

Route::get('/baca-ebook/{id}', function ($id) {
    $book = \App\Models\Book::findOrFail($id);
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
    
    return redirect(asset($book->pdf_path));
})->name('baca.ebook');

Route::get('/scanner', function () {
    return view('scanner');
})->name('scanner');

Route::get('/notifikasi', function () {
    return view('notifikasi');
})->name('notifikasi');

Route::get('/sirkulasi-sukses', function () {
    return view('sirkulasi_sukses');
})->name('sirkulasi.sukses');

Route::get('/akun-pengaturan', function () {
    return view('akun_pengaturan');
})->name('akun.pengaturan');

Route::get('/bantuan', function () {
    return view('bantuan');
})->name('bantuan');

require __DIR__.'/auth.php';

use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\AdminAuthController;

Route::get('/edit-profil', function () {
    return view('edit_profil');
})->name('edit.profil');

// Admin Auth Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Dashboard Routes
Route::get('/admin', [AdminBookController::class, 'index'])->name('admin');
Route::get('/admin/tambah-buku', [AdminBookController::class, 'create'])->name('admin.books.create');
Route::post('/admin/books', [AdminBookController::class, 'store'])->name('admin.books.store');
Route::get('/admin/books/{id}/edit', [AdminBookController::class, 'edit'])->name('admin.books.edit');
Route::put('/admin/books/{id}', [AdminBookController::class, 'update'])->name('admin.books.update');
Route::delete('/admin/books/{id}', [AdminBookController::class, 'destroy'])->name('admin.books.destroy');
Route::get('/admin/laporan', [AdminBookController::class, 'laporan'])->name('admin.laporan');
Route::get('/admin/persetujuan', [App\Http\Controllers\AdminApprovalController::class, 'index'])->name('admin.persetujuan');
Route::post('/admin/persetujuan/{id}/approve', [App\Http\Controllers\AdminApprovalController::class, 'approve'])->name('admin.persetujuan.approve');
Route::post('/admin/persetujuan/{id}/reject', [App\Http\Controllers\AdminApprovalController::class, 'reject'])->name('admin.persetujuan.reject');
Route::post('/borrow', [BorrowController::class, 'store'])->name('borrow.store');

