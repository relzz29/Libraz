# Dokumentasi QA & Tracker (Libraz / Perpustakaan)

Dokumen ini berfungsi sebagai panduan standar untuk Quality Assurance (QA) dan pencatatan riwayat pengembangan (Update & Bug Tracking) untuk proyek **Libraz**. Tujuannya adalah untuk memudahkan pelacakan perubahan, penemuan bug, dan memastikan standar kualitas terjaga di setiap rilis.

---

## 📋 1. Template Laporan Bug (Bug Report)

Gunakan format di bawah ini saat menemukan bug agar pengembang (developer) dapat dengan mudah mereproduksi dan memperbaiki masalah tersebut.

**[ID BUG] - [Judul Singkat Bug]**
*Contoh: BUG-001 - Tombol Simpan di Pengaturan Akun Tidak Berfungsi*

- **Status:** [Open / In Progress / Resolved / Closed]
- **Dilaporkan Oleh:** [Nama QA]
- **Tanggal Lapor:** [YYYY-MM-DD]
- **Prioritas:** [Low / Medium / High / Critical]
- **Lingkungan (Environment):** [Local / Staging / Production - Browser/OS]
- **URL / Halaman:** [Misal: `/akun/pengaturan`]
- **Langkah untuk Mereproduksi (Steps to Reproduce):**
  1. Buka halaman ...
  2. Klik tombol ...
  3. Masukkan data ...
  4. ...
- **Ekspektasi (Expected Result):** Data berhasil disimpan dan muncul notifikasi sukses.
- **Hasil Aktual (Actual Result):** Halaman memuat ulang tapi data tidak berubah dan tidak ada pesan error.
- **Lampiran:** [Link ke Screenshot / Video Screen Record jika ada]

---

## 🚀 2. Template Catatan Pembaruan (Changelog / Update Notes)

Setiap kali ada fitur baru atau perbaikan yang diunggah (deploy) atau diselesaikan, catat di bagian ini. Format ini mengikuti standar [Keep a Changelog](https://keepachangelog.com/).

### [Versi / Tanggal Rilis] - YYYY-MM-DD
**[Added] (Fitur Baru)**
- Penambahan fitur X pada halaman Y.
- Modul laporan baru untuk Z.

**[Changed] (Perubahan pada fitur yang sudah ada)**
- Perubahan alur pada proses peminjaman buku.
- Optimasi query database untuk pencarian.

**[Fixed] (Perbaikan Bug)**
- Memperbaiki masalah [BUG-001] tombol simpan tidak berfungsi.
- Memperbaiki tampilan responsive di layar mobile.

**[Removed] (Penghapusan fitur/kode yang tidak dipakai)**
- Menghapus view `temp_akun_pengaturan_old.blade.php` yang sudah usang.

---

## ✅ 3. Standar Pengecekan QA (QA Checklist)

Sebelum merilis update baru, QA harus memastikan poin-poin berikut telah terpenuhi:

### Fungsionalitas
- [ ] Fitur utama berjalan sesuai *Requirement*.
- [ ] Validasi form (input kosong, email tidak valid, dsb) berfungsi dengan baik.
- [ ] Fungsi CRUD (Create, Read, Update, Delete) berjalan tanpa error database.
- [ ] Hak akses (Role/Permission) user sesuai (Admin vs User biasa).

### Tampilan & Pengalaman Pengguna (UI/UX)
- [ ] Tampilan responsif di berbagai perangkat (Desktop, Tablet, Mobile).
- [ ] Tidak ada teks yang terpotong atau desain yang berantakan (*broken layout*).
- [ ] Pesan error dan sukses (Flash messages) muncul dengan jelas.

### Performa & Keamanan
- [ ] Waktu muat halaman (*page load*) wajar dan tidak terlalu lama.
- [ ] Tidak ada error 500 atau pesan debug Laravel yang muncul di mode Production.
- [ ] Form terlindungi dari serangan CSRF.

---

## 🛠 4. Daftar Bug Aktif (Active Bug Log)
*(Silakan tambahkan bug yang sedang berlangsung di bawah ini)*

| ID Bug | Deskripsi Singkat | Prioritas | Status | Assignee |
| :--- | :--- | :--- | :--- | :--- |
| BUG-001 | *Contoh: Error 500 saat export PDF* | High | Open | - |
| | | | | |

---

## 📝 5. Riwayat Pembaruan (Update Log)
*(Silakan catat riwayat rilis / update di bawah ini)*

### [v1.0.1] - *Draft*
- **Fixed:** Penyesuaian layout di pengaturan akun.

### [v1.0.0] - *Initial Release*
- Setup awal proyek Laravel (Libraz).
- Konfigurasi database perpustakaan.

---

## 📁 6. Dokumentasi File View (Blade)

Berikut adalah daftar file antarmuka (`resources/views/*.blade.php`) beserta penjelasan fitur, alur kerja (*workflow*), dan status datanya saat ini.

**Status Keseluruhan Sistem Saat Ini:** 🟡 **Sebagian Besar DUMMY / Mockup**  
*(Mayoritas file view masih berisi HTML statis (menggunakan Tailwind) untuk keperluan desain antarmuka, belum terhubung penuh dengan Controller atau Real Database, kecuali halaman login yang sudah memiliki logika penangkap error dasar).*

### Daftar File & Keterangan:

1. **`layout.blade.php`**
   - **Fitur:** Layout utama / kerangka dasar aplikasi (navbar, sidebar, header, footer).
   - **Workflow:** File ini di-`extend` oleh halaman-halaman lain sebagai kerangka (template).
   - **Sistem:** Dummy (Struktur UI dasar statis).

2. **`login.blade.php`**
   - **Fitur:** Halaman otentikasi/masuk pengguna dan pustakawan.
   - **Workflow:** Menerima input form (email & password) lalu diproses menuju sistem otentikasi.
   - **Sistem:** Mengarah ke Real DB (Sudah ada implementasi `{{ $errors->first() }}` untuk validasi error dari server).

3. **`katalog.blade.php`**
   - **Fitur:** Halaman pencarian dan daftar buku koleksi perpustakaan.
   - **Workflow:** User dapat melihat daftar buku, melakukan pencarian, atau filter kategori.
   - **Sistem:** Dummy (Data kartu buku dan daftar buku masih menggunakan hardcode HTML).

4. **`akun.blade.php`**
   - **Fitur:** Halaman dashboard akun pengguna.
   - **Workflow:** Halaman yang diakses setelah login. Menampilkan ringkasan profil, status peminjaman aktif, dan riwayat.
   - **Sistem:** Dummy (Nama user dan riwayat peminjaman masih berupa teks statis).

5. **`edit_profil.blade.php`**
   - **Fitur:** Halaman untuk mengubah data profil (Nama, foto, email, kata sandi).
   - **Workflow:** Form input data profil yang siap dikirim/disimpan.
   - **Sistem:** Dummy (Hanya antarmuka form, belum ada *Action* form ke database).

6. **`akun_pengaturan.blade.php`**
   - **Fitur:** Halaman pengaturan spesifik akun atau preferensi aplikasi pengguna.
   - **Workflow:** User mengatur notifikasi, tema warna, atau preferensi keamanan/privasi.
   - **Sistem:** Dummy.

7. **`notifikasi.blade.php`**
   - **Fitur:** Halaman pusat pemberitahuan (Buku jatuh tempo, pesan denda, dll).
   - **Workflow:** Menampilkan daftar notifikasi berupa list pesan peringatan.
   - **Sistem:** Dummy (List notifikasi belum dimuat dinamis dari database).

8. **`scanner.blade.php`**
   - **Fitur:** Halaman pemindai Barcode / QR Code.
   - **Workflow:** Untuk mempercepat pencarian detail buku atau memproses peminjaman secara otomatis melalui input kamera.
   - **Sistem:** Dummy UI (Antarmuka kamera pemindai sudah ada, namun integrasi *logic Javascript* ke database backend belum selesai diimplementasikan).

9. **`sirkulasi.blade.php`**
   - **Fitur:** Halaman proses transaksi sirkulasi (peminjaman atau pengembalian buku).
   - **Workflow:** Admin/Pustakawan memasukkan data peminjam dan data buku untuk diproses ke sistem.
   - **Sistem:** Dummy (UI keranjang sirkulasi dan form pengisian).

10. **`sirkulasi_sukses.blade.php`**
    - **Fitur:** Halaman konfirmasi sukses transaksi.
    - **Workflow:** Ditampilkan setelah proses sirkulasi peminjaman/pengembalian berhasil. Biasa digunakan sebagai struk digital.
    - **Sistem:** Dummy.

11. **`statistik.blade.php`**
    - **Fitur:** Halaman laporan & grafik (Jumlah peminjam, buku terpopuler, rekap denda).
    - **Workflow:** Digunakan oleh pengelola/Admin untuk memonitor aktivitas perpustakaan.
    - **Sistem:** Dummy (Bagan/Chart dan angka-angka laporan masih direkayasa langsung di HTML, belum dari olahan query DB).

12. **`bantuan.blade.php`**
    - **Fitur:** Halaman FAQ atau panduan penggunaan aplikasi Libraz.
    - **Workflow:** Tempat user membaca tata tertib atau cara penggunaan sistem.
    - **Sistem:** Dummy (Teks bacaan statis).

13. **`library/home.blade.php`**
    - **Fitur:** Landing page atau beranda versi publik untuk modul "Library".
    - **Workflow:** Halaman depan yang dilihat oleh publik tanpa perlu login.
    - **Sistem:** Dummy.

---

## ⚠️ 7. Riwayat Error & Kendala Sistem (Error Logs)
*(Bagian ini berisi rekam jejak error yang terjadi di server, terminal, atau database. Data lama **JANGAN DIHAPUS**, cukup tambahkan error baru di baris paling atas agar menjadi referensi bagi pengembang dalam mengatasi bug berulang).*

### [2026-10-02 04:14:38] - Syntax Error di View Pengaturan
- **Waktu:** 04:14:38 (Berulang sejak 04:14:17) (Ditemukan di `storage/logs/laravel.log`)
- **Tipe Error:** `Illuminate\View\ViewException`
- **Pesan Log:**
  ```text
  syntax error, unexpected token "\" (View: C:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\resources\views\akun_pengaturan.blade.php)
  ```
- **Catatan Pengembang:**
  - Terjadi kesalahan *syntax* (salah ketik) berupa karakter backslash `\` yang tidak disengaja atau salah penempatan di dalam file `akun_pengaturan.blade.php`.
  - **Tindakan Lanjutan:** Cek baris kode yang baru saja diubah di `akun_pengaturan.blade.php` dan hapus karakter `\` yang bermasalah.

### [2026-10-02 03:36:22] - Null Property Access "id"
- **Waktu:** 03:36:22 (Berulang sejak 03:36:11) (Ditemukan di `storage/logs/laravel.log`)
- **Tipe Error:** `ErrorException`
- **Pesan Log:**
  ```text
  Attempt to read property "id" on null
  ```
- **Catatan Pengembang:**
  - Kode mencoba mengakses properti `->id` pada suatu variabel/object yang datanya tidak ditemukan di database atau bernilai `null`. Kemungkinan besar variabel seperti `$user->id` atau `$book->id` dipanggil saat `$user` atau `$book` belum didefinisikan (misal: user belum login atau buku tidak ada).
  - **Tindakan Lanjutan:** Tambahkan pengecekan null (`if($data) ...` atau optional chaining `$data?->id`) pada baris kode yang bermasalah.

### [2026-10-02] - Error PHP CLI & Module
- **Waktu:** ~ (Ditemukan di `last_error.txt`)
- **Tipe Error:** `Parse error` & `Warning`
- **Pesan Log:**
  ```text
  Warning: Module "openssl" is already loaded in Unknown on line 0
  Parse error: syntax error, unexpected token "=", expecting end of file in Command line code on line 1
  ```
- **Catatan Pengembang:**
  - Terjadi kesalahan saat menjalankan perintah (command) PHP via terminal/CLI. Terdapat module `openssl` yang bentrok (loaded dua kali) di konfigurasi `php.ini`, serta adanya kesalahan *syntax* pada saat menjalankan `php -r` atau *script inline*.
  - **Tindakan Lanjutan:** Cek konfigurasi `php.ini` dan perbaiki command CLI yang dieksekusi.

### [2026-09-17 05:55:44] - Missing Application Encryption Key
- **Waktu:** 05:55:44 (Ditemukan di `storage/logs/laravel.log`)
- **Tipe Error:** `production.ERROR` -> `Illuminate\Encryption\MissingAppKeyException`
- **Pesan Log:**
  ```text
  No application encryption key has been specified.
  ```
- **Catatan Pengembang:**
  - Aplikasi Laravel dijalankan tanpa `APP_KEY` yang valid di file `.env`. Laravel membutuhkan `APP_KEY` untuk mengamankan sesi (session) dan enkripsi data lainnya.
  - **Tindakan Lanjutan:** Jalankan perintah `php artisan key:generate` di terminal untuk menghasilkan key baru di file `.env`.

---
> **Catatan untuk Developer/QA:** Dokumen ini harus selalu diperbarui (Update) setiap kali ada sesi pengujian atau rilis baru. Jika diperlukan, buat file terpisah (seperti `BUGS.md` atau `CHANGELOG.md`) jika isi dokumen ini sudah terlalu panjang.
