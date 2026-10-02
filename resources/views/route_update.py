import os
routes_file = r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\routes\web.php'

new_route = '''
Route::get('/edit-profil', function () {
    return view('edit_profil');
})->name('edit.profil');
'''
with open(routes_file, 'a', encoding='utf-8') as f:
    f.write(new_route)

# Now update akun.blade.php
akun_file = r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\resources\views\akun.blade.php'
with open(akun_file, 'r', encoding='utf-8') as f:
    akun_content = f.read()

akun_content = akun_content.replace("href=\"{{ route('akun.pengaturan') }}?tab=profil\"", "href=\"{{ route('edit.profil') }}\"")

with open(akun_file, 'w', encoding='utf-8') as f:
    f.write(akun_content)

print('Done routing')
