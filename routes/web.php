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
    return view('akun');
})->name('akun');

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

Route::post('/borrow', [BorrowController::class, 'store'])->name('borrow.store');

