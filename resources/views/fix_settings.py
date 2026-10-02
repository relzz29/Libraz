import os, re

try:
    with open(r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\temp_akun_pengaturan_old.blade.php', 'r', encoding='utf-16') as f:
        old_content = f.read()
except UnicodeError:
    with open(r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\temp_akun_pengaturan_old.blade.php', 'r', encoding='utf-8') as f:
        old_content = f.read()

# Try to find section-pengaturan in old content
m = re.search(r'<div id="section-pengaturan"[^>]*>(.*?)</div>\s*</main>', old_content, re.DOTALL)
if m:
    pengaturan_content = m.group(1).strip()
    
    with open(r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\resources\views\akun_pengaturan.blade.php', 'r', encoding='utf-8') as f:
        new_content = f.read()
        
    m_new = re.search(r'(<main[^>]*>\s*<div[^>]*>\s*<div[^>]*>).*?(</main>)', new_content, re.DOTALL)
    if m_new:
        final_content = new_content[:m_new.start(1)] + m_new.group(1) + '\n<div id="section-pengaturan" class="flex flex-col space-y-space-lg w-full">\n' + pengaturan_content + '\n</div>\n</div>\n</div>\n' + m_new.group(2) + new_content[m_new.end(2):]
        with open(r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\resources\views\akun_pengaturan.blade.php', 'w', encoding='utf-8') as f:
            f.write(final_content)
        print("Success")
    else:
        print("Could not find new target in main")
else:
    print("Could not find section in old file")
