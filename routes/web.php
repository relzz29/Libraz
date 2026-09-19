<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/katalog', function () {
    return view('katalog');
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
