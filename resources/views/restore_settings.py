import os, re

# Read old content
with open(r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\temp_akun_pengaturan_old.blade.php', 'r', encoding='utf-16') as f:
    old_content = f.read()

# Read new content
with open(r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\resources\views\akun_pengaturan.blade.php', 'r', encoding='utf-8') as f:
    new_content = f.read()

# Extract old settings section
m = re.search(r'<div id="section-pengaturan"(.*?)>(.*?)</div>\s*</main>', old_content, re.DOTALL)
if m:
    pengaturan_content = m.group(2).strip()
    
    # Replace content inside new main
    m_new = re.search(r'(<main class="flex flex-col relative w-full pt-16 pb-24 min-h-screen z-10 md:ml-64">\s*<div class="flex flex-col w-full max-w-2xl mx-auto px-margin space-y-space-lg pb-space-xl">).*?(</main>)', new_content, re.DOTALL)
    if m_new:
        final_content = new_content[:m_new.start(1)] + m_new.group(1) + '\n' + pengaturan_content + '\n</div>\n' + m_new.group(2) + new_content[m_new.end(2):]
        with open(r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\resources\views\akun_pengaturan.blade.php', 'w', encoding='utf-8') as f3:
            f3.write(final_content)
        print('Restored the whole section')
    else:
        print('Could not find new target in main')
else:
    print('Could not find old section')
