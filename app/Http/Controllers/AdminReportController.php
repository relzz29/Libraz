<?php

namespace App\Http\Controllers;

use App\Exports\LaporanBulananExport;
use App\Exports\LaporanHarianExport;
use App\Models\Book;
use App\Models\Borrowing;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminReportController extends Controller
{
    /**
     * Tampilan Utama Halaman Laporan Admin (Laporan Harian & Laporan Bulanan)
     */
    public function index(Request $request)
    {
        Carbon::setLocale('id');
        $now = now();

        // 1. Tab aktif (harian atau bulanan)
        $activeTab = $request->input('tab', 'harian');
        if (!in_array($activeTab, ['harian', 'bulanan'])) {
            $activeTab = 'harian';
        }

        // ==========================================
        // 2. DATA UNTUK LAPORAN HARIAN
        // ==========================================
        $selectedDate = $request->input('date', $now->format('Y-m-d'));
        // Validasi format tanggal
        try {
            $parsedDate = Carbon::parse($selectedDate);
            $selectedDate = $parsedDate->format('Y-m-d');
        } catch (\Throwable $e) {
            $selectedDate = $now->format('Y-m-d');
            $parsedDate = $now;
        }

        $harianQuery = Borrowing::with(['user', 'book'])
            ->whereDate('borrowed_at', $selectedDate);

        // Rekapitulasi Statistik Harian
        $harianTotal = (clone $harianQuery)->count();
        $harianSiswa = (clone $harianQuery)->distinct('user_id')->count('user_id');
        $harianDipinjam = (clone $harianQuery)
            ->whereIn('status', ['approved', 'borrowed'])
            ->whereNull('returned_at')
            ->count();
        $harianKembali = (clone $harianQuery)
            ->where(function ($q) {
                $q->where('status', 'returned')->orWhereNotNull('returned_at');
            })
            ->count();
        $harianHilang = (clone $harianQuery)
            ->whereIn('status', ['lost', 'hilang'])
            ->count();

        // Data transaksi berhalaman (pagination)
        $harianBorrowings = (clone $harianQuery)
            ->orderBy('borrowed_at', 'desc')
            ->paginate(8, ['*'], 'harian_page')
            ->withQueryString();

        // Rekomendasi tanggal cepat yang memiliki transaksi sirkulasi
        $recentActiveDates = Borrowing::selectRaw('DATE(borrowed_at) as borrow_date, count(*) as count')
            ->groupBy('borrow_date')
            ->orderByDesc('borrow_date')
            ->take(6)
            ->get();

        // ==========================================
        // 3. DATA UNTUK LAPORAN BULANAN
        // ==========================================
        $selectedMonth = (int)$request->input('month', $now->month);
        $selectedYear = (int)$request->input('year', $now->year);
        $monthlyView = $request->input('view', 'books'); // 'books' atau 'transactions'

        if ($selectedMonth < 1 || $selectedMonth > 12) {
            $selectedMonth = (int)$now->month;
        }
        if ($selectedYear < 2020 || $selectedYear > 2035) {
            $selectedYear = (int)$now->year;
        }

        // Rekapitulasi Statistik Bulanan (5 Indikator Permintaan)
        // 1. Buku yang Tersedia (Stok siap saat ini)
        $bulananTersedia = Book::sum('stock');

        // 2. Buku Hilang
        $bulananHilang = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->whereIn('status', ['lost', 'hilang'])
            ->count();

        // 3. Buku Sedang Dipinjam (status approved/borrowed, belum lewat batas due_date)
        $bulananDipinjam = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->whereIn('status', ['approved', 'borrowed'])
            ->whereNull('returned_at')
            ->where('due_date', '>=', $now)
            ->count();

        // 4. Buku yang Belum Dikembalikan (Terlambat / jatuh tempo lewat)
        $bulananBelumKembali = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->whereIn('status', ['approved', 'borrowed'])
            ->whereNull('returned_at')
            ->where('due_date', '<', $now)
            ->count();

        // 5. Buku yang Sudah Dikembalikan
        $bulananKembali = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->where(function ($q) {
                $q->where('status', 'returned')->orWhereNotNull('returned_at');
            })
            ->count();

        // Total Sirkulasi
        $bulananTotalSirkulasi = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->count();

        // Tampilan 1: Tabel Inventaris per Judul Buku (Berhalaman / Paginated)
        $bulananBooks = Book::select('id', 'title', 'author', 'category', 'rack', 'isbn', 'stock')
            ->withCount([
                'borrowings as total_loans' => function ($q) use ($selectedYear, $selectedMonth) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth);
                },
                'borrowings as active_loans' => function ($q) use ($selectedYear, $selectedMonth) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth)
                      ->whereIn('status', ['approved', 'borrowed'])
                      ->whereNull('returned_at');
                },
                'borrowings as overdue_loans' => function ($q) use ($selectedYear, $selectedMonth, $now) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth)
                      ->whereIn('status', ['approved', 'borrowed'])
                      ->whereNull('returned_at')
                      ->where('due_date', '<', $now);
                },
                'borrowings as returned_loans' => function ($q) use ($selectedYear, $selectedMonth) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth)
                      ->where(function ($sub) {
                          $sub->where('status', 'returned')->orWhereNotNull('returned_at');
                      });
                },
                'borrowings as lost_loans' => function ($q) use ($selectedYear, $selectedMonth) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth)
                      ->whereIn('status', ['lost', 'hilang']);
                },
            ])
            ->orderBy('title', 'asc')
            ->paginate(8, ['*'], 'bulanan_page')
            ->withQueryString();

        // Tampilan 2: Rincian Transaksi Bulanan Siswa (Berhalaman / Paginated)
        $bulananTransactions = Borrowing::with(['user', 'book'])
            ->whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->latest('borrowed_at')
            ->paginate(8, ['*'], 'transaksi_page')
            ->withQueryString();

        return view('admin_laporan', compact(
            'activeTab',
            // Harian
            'selectedDate',
            'harianTotal',
            'harianSiswa',
            'harianDipinjam',
            'harianKembali',
            'harianHilang',
            'harianBorrowings',
            'recentActiveDates',
            // Bulanan
            'selectedMonth',
            'selectedYear',
            'monthlyView',
            'bulananTersedia',
            'bulananHilang',
            'bulananDipinjam',
            'bulananBelumKembali',
            'bulananKembali',
            'bulananTotalSirkulasi',
            'bulananBooks',
            'bulananTransactions'
        ));
    }

    /**
     * Endpoint API Data Real-Time untuk Auto-Update / Live Polling
     */
    public function realtime(Request $request)
    {
        Carbon::setLocale('id');
        $now = now();

        // 1. DATA HARIAN REAL-TIME
        $selectedDate = $request->input('date', $now->format('Y-m-d'));
        try {
            $parsedDate = Carbon::parse($selectedDate);
            $selectedDate = $parsedDate->format('Y-m-d');
        } catch (\Throwable $e) {
            $selectedDate = $now->format('Y-m-d');
            $parsedDate = $now;
        }

        $harianQuery = Borrowing::with(['user', 'book'])
            ->whereDate('borrowed_at', $selectedDate);

        $harianTotal = (clone $harianQuery)->count();
        $harianSiswa = (clone $harianQuery)->distinct('user_id')->count('user_id');
        $harianDipinjam = (clone $harianQuery)
            ->whereIn('status', ['approved', 'borrowed'])
            ->whereNull('returned_at')
            ->count();
        $harianKembali = (clone $harianQuery)
            ->where(function ($q) {
                $q->where('status', 'returned')->orWhereNotNull('returned_at');
            })
            ->count();
        $harianHilang = (clone $harianQuery)
            ->whereIn('status', ['lost', 'hilang'])
            ->count();

        $harianBorrowings = (clone $harianQuery)
            ->orderBy('borrowed_at', 'desc')
            ->paginate(8, ['*'], 'harian_page')
            ->withQueryString();

        $harianItems = collect($harianBorrowings->items())->map(function ($item) use ($now) {
            $isOverdue = ($item->status == 'approved' || $item->status == 'borrowed') && $item->due_date && Carbon::parse($item->due_date)->isPast() && is_null($item->returned_at);
            return [
                'id' => $item->id,
                'user_name' => $item->user->name ?? 'User',
                'user_nis' => $item->user->nis ?? '-',
                'user_role' => $item->user->role ?? 'Siswa',
                'book_title' => $item->book->title ?? 'Buku Tidak Diketahui',
                'book_author' => $item->book->author ?? 'Kemdikbud',
                'book_category' => $item->book->category ?? 'Umum',
                'book_rack' => $item->book->rack ?? 'Rak Utama',
                'borrowed_at_formatted' => $item->borrowed_at ? $item->borrowed_at->timezone('Asia/Jakarta')->translatedFormat('d M Y') : '-',
                'borrowed_at_time' => $item->borrowed_at ? $item->borrowed_at->timezone('Asia/Jakarta')->format('H:i') . ' WIB' : '',
                'due_date_formatted' => $item->due_date ? $item->due_date->translatedFormat('d M Y') : '-',
                'status' => $item->status,
                'is_overdue' => $isOverdue,
                'has_returned' => ($item->status === 'returned' || !is_null($item->returned_at)),
            ];
        });

        // 2. DATA BULANAN REAL-TIME
        $selectedMonth = (int)$request->input('month', $now->month);
        $selectedYear = (int)$request->input('year', $now->year);

        if ($selectedMonth < 1 || $selectedMonth > 12) $selectedMonth = (int)$now->month;
        if ($selectedYear < 2020 || $selectedYear > 2035) $selectedYear = (int)$now->year;

        $bulananTersedia = Book::sum('stock');
        $bulananHilang = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->whereIn('status', ['lost', 'hilang'])
            ->count();
        $bulananDipinjam = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->whereIn('status', ['approved', 'borrowed'])
            ->whereNull('returned_at')
            ->where('due_date', '>=', $now)
            ->count();
        $bulananBelumKembali = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->whereIn('status', ['approved', 'borrowed'])
            ->whereNull('returned_at')
            ->where('due_date', '<', $now)
            ->count();
        $bulananKembali = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->where(function ($q) {
                $q->where('status', 'returned')->orWhereNotNull('returned_at');
            })
            ->count();
        $bulananTotalSirkulasi = Borrowing::whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->count();

        $bulananBooks = Book::select('id', 'title', 'author', 'category', 'rack', 'isbn', 'stock')
            ->withCount([
                'borrowings as total_loans' => function ($q) use ($selectedYear, $selectedMonth) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth);
                },
                'borrowings as active_loans' => function ($q) use ($selectedYear, $selectedMonth) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth)
                      ->whereIn('status', ['approved', 'borrowed'])
                      ->whereNull('returned_at');
                },
                'borrowings as overdue_loans' => function ($q) use ($selectedYear, $selectedMonth, $now) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth)
                      ->whereIn('status', ['approved', 'borrowed'])
                      ->whereNull('returned_at')
                      ->where('due_date', '<', $now);
                },
                'borrowings as returned_loans' => function ($q) use ($selectedYear, $selectedMonth) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth)
                      ->where(function ($sub) {
                          $sub->where('status', 'returned')->orWhereNotNull('returned_at');
                      });
                },
                'borrowings as lost_loans' => function ($q) use ($selectedYear, $selectedMonth) {
                    $q->whereYear('borrowed_at', $selectedYear)->whereMonth('borrowed_at', $selectedMonth)
                      ->whereIn('status', ['lost', 'hilang']);
                },
            ])
            ->orderBy('title', 'asc')
            ->paginate(8, ['*'], 'bulanan_page')
            ->withQueryString();

        $bulananTransactions = Borrowing::with(['user', 'book'])
            ->whereYear('borrowed_at', $selectedYear)
            ->whereMonth('borrowed_at', $selectedMonth)
            ->latest('borrowed_at')
            ->paginate(8, ['*'], 'transaksi_page')
            ->withQueryString();

        $bulananTransactionItems = collect($bulananTransactions->items())->map(function ($item) use ($now) {
            $isOverdue = ($item->status == 'approved' || $item->status == 'borrowed') && $item->due_date && Carbon::parse($item->due_date)->isPast() && is_null($item->returned_at);
            return [
                'id' => $item->id,
                'user_name' => $item->user->name ?? 'User',
                'user_nis' => $item->user->nis ?? '-',
                'book_title' => $item->book->title ?? 'Buku Tidak Diketahui',
                'borrowed_at_formatted' => $item->borrowed_at ? $item->borrowed_at->timezone('Asia/Jakarta')->translatedFormat('d M Y') : '-',
                'due_date_formatted' => $item->due_date ? $item->due_date->translatedFormat('d M Y') : '-',
                'returned_at_formatted' => $item->returned_at ? $item->returned_at->timezone('Asia/Jakarta')->translatedFormat('d M Y') : '-',
                'status' => $item->status,
                'is_overdue' => $isOverdue,
            ];
        });

        return response()->json([
            'success' => true,
            'timestamp' => $now->timezone('Asia/Jakarta')->format('H:i:s'),
            'harian' => [
                'date' => $selectedDate,
                'total' => $harianTotal,
                'siswa' => $harianSiswa,
                'dipinjam' => $harianDipinjam,
                'kembali' => $harianKembali,
                'hilang' => $harianHilang,
                'items' => $harianItems,
                'first_item' => $harianBorrowings->firstItem() ?? 0,
                'last_item' => $harianBorrowings->lastItem() ?? 0,
                'total_items' => $harianBorrowings->total(),
            ],
            'bulanan' => [
                'month' => $selectedMonth,
                'year' => $selectedYear,
                'tersedia' => $bulananTersedia,
                'dipinjam' => $bulananDipinjam,
                'belum_kembali' => $bulananBelumKembali,
                'kembali' => $bulananKembali,
                'hilang' => $bulananHilang,
                'total_sirkulasi' => $bulananTotalSirkulasi,
                'books' => $bulananBooks->items(),
                'books_first_item' => $bulananBooks->firstItem() ?? 0,
                'books_last_item' => $bulananBooks->lastItem() ?? 0,
                'books_total_items' => $bulananBooks->total(),
                'transactions' => $bulananTransactionItems,
                'trans_first_item' => $bulananTransactions->firstItem() ?? 0,
                'trans_last_item' => $bulananTransactions->lastItem() ?? 0,
                'trans_total_items' => $bulananTransactions->total(),
            ],
        ]);
    }

    /**
     * Unduh Berkas Excel Laporan Harian (Siap Cetak / Print-Ready)
     */
    public function exportHarian(Request $request)
    {
        $date = $request->input('date', now()->format('Y-m-d'));
        try {
            $date = Carbon::parse($date)->format('Y-m-d');
        } catch (\Throwable $e) {
            $date = now()->format('Y-m-d');
        }

        $adminName = Auth::user()->name ?? session('admin_role', 'Administrator IT');
        $fileName = 'Laporan_Harian_Peminjaman_' . $date . '.xlsx';

        if (ob_get_level() > 0) {
            ob_end_clean();
        }

        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Cache-Control' => 'no-cache, private',
        ];

        return Excel::download(new LaporanHarianExport($date, $adminName), $fileName, \Maatwebsite\Excel\Excel::XLSX, $headers);
    }

    /**
     * Unduh Berkas Excel Laporan Bulanan (2 Sheet Siap Cetak: Rekap Koleksi & Rincian Transaksi)
     */
    public function exportBulanan(Request $request)
    {
        Carbon::setLocale('id');
        $month = (int)$request->input('month', now()->month);
        $year = (int)$request->input('year', now()->year);

        if ($month < 1 || $month > 12) $month = (int)now()->month;
        if ($year < 2020 || $year > 2035) $year = (int)now()->year;

        $monthName = Carbon::createFromDate($year, $month, 1)->translatedFormat('F');
        $adminName = Auth::user()->name ?? session('admin_role', 'Administrator IT');
        $fileName = 'Laporan_Bulanan_Libraz_' . $monthName . '_' . $year . '.xlsx';

        if (ob_get_level() > 0) {
            ob_end_clean();
        }

        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Cache-Control' => 'no-cache, private',
        ];

        return Excel::download(new LaporanBulananExport($month, $year, $adminName), $fileName, \Maatwebsite\Excel\Excel::XLSX, $headers);
    }

    /**
     * Aksi Cepat: Perbarui Status Peminjaman (misal: Tandai Buku Hilang, Dikembalikan, dsb)
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,returned,lost,rejected',
        ]);

        $borrowing = Borrowing::findOrFail($id);
        $oldStatus = $borrowing->status;
        $newStatus = $request->status;
        $message = 'Status berhasil diperbarui.';

        if ($newStatus === 'returned') {
            $borrowing->status = 'returned';
            $borrowing->returned_at = now();
            $borrowing->save();

            // Kembalikan stok buku
            if ($borrowing->book) {
                $borrowing->book->increment('stock');
            }

            $message = 'Buku (ID Resi #' . $borrowing->id . ') berhasil ditandai telah dikembalikan.';
        } elseif ($newStatus === 'lost') {
            $borrowing->status = 'lost';
            $borrowing->save();

            $message = 'Buku (ID Resi #' . $borrowing->id . ') telah ditandai HILANG dan masuk ke dalam pembukuan buku hilang.';
        } elseif ($newStatus === 'approved') {
            $borrowing->status = 'approved';
            $borrowing->returned_at = null;
            $borrowing->save();

            $message = 'Status peminjaman (ID Resi #' . $borrowing->id . ') telah diubah menjadi aktif dipinjam.';
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $message,
                'status' => $borrowing->status,
                'id' => $borrowing->id
            ]);
        }

        if ($newStatus === 'lost') {
            return back()->with('warning', $message);
        }

        return back()->with('success', $message);
    }
}

