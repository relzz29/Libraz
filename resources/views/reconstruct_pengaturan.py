import re
import os

views_dir = r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\resources\views'
sirk_path = os.path.join(views_dir, 'sirkulasi.blade.php')
peng_path = os.path.join(views_dir, 'akun_pengaturan.blade.php')

with open(sirk_path, 'r', encoding='utf-8') as f:
    sirk_content = f.read()

with open(peng_path, 'r', encoding='utf-8') as f:
    peng_content = f.read()

# 1. Get header from sirkulasi
header_match = re.search(r'(.*?<main [^>]+>)\s*<div', sirk_content, re.DOTALL)
header_html = header_match.group(1)

# Modify the <header> title to say "Pengaturan Aplikasi ⚙️"
# <span class="font-title-md text-title-md text-on-surface truncate">Sirkulasi</span>
header_html = re.sub(r'(<span class="font-title-md text-title-md text-on-surface truncate">)(.*?)(</span>)', r'\g<1>Pengaturan Aplikasi ⚙️\g<3>', header_html)

# 2. Get Pengaturan content
# We want the content inside <div id="section-pengaturan"...>
peng_section_match = re.search(r'<!-- SECTION: PENGATURAN -->\s*<div id="section-pengaturan"[^>]+>(.*?)\s*</div>\s*</div>\s*</main>', peng_content, re.DOTALL)
peng_section_html = peng_section_match.group(1) if peng_section_match else ""

# 3. Get Logout modal and script
footer_scripts = ""
logout_match = re.search(r'(<!-- Logout Confirmation Modal -->.*?)$', peng_content, re.DOTALL)
if logout_match:
    footer_scripts = logout_match.group(1)
    
    # Clean up the JS in footer_scripts: remove the Tabs code since it's not needed anymore
    # The script has "// Elements for Tabs" ... up to "// 4. Tombol Logout"
    footer_scripts = re.sub(r'// Elements for Tabs.*?// 4\. Tombol Logout', '// 4. Tombol Logout', footer_scripts, flags=re.DOTALL)

# 4. Get bottom nav from sirkulasi
# (We already updated sirkulasi to have the Pengaturan nav)
nav_match = re.search(r'(<nav class="fixed bottom-0.*?</nav>)', sirk_content, re.DOTALL)
nav_html = nav_match.group(1) if nav_match else ""

# We need to set active class for Pengaturan nav
nav_html = nav_html.replace('aria-current="page"', '')
nav_html = re.sub(r'class="flex flex-col items-center justify-center min-w-\[64px\] min-h-\[44px\] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-\[3px_3px_0px_#1c1b20\]"', r'class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary"', nav_html)
# set pengaturan as active
nav_html = re.sub(r'<a([^>]+href="{{ route\(\'akun.pengaturan\'\) }}"[^>]*)>', r'<a aria-current="page" \1>', nav_html)
# swap classes for active
nav_html = re.sub(r'<a aria-current="page" class="flex flex-col items-center justify-center min-w-\[64px\] min-h-\[44px\] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary"', r'<a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]"', nav_html)

# Also set active class for sidebar in header_html
header_html = header_html.replace('bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]', 'text-on-surface-variant hover:bg-surface-container hover:text-primary')
# Find the pengaturan aside link and make it active
header_html = re.sub(r'<a href="{{ route\(\'akun.pengaturan\'\) }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">', r'<a href="{{ route(\'akun.pengaturan\') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">', header_html)

# 5. Assemble and write
new_content = header_html + '\n<div class="flex flex-col w-full px-margin pb-space-xl gap-space-lg">\n' + peng_section_html + '\n</div>\n</main>\n' + nav_html + '\n' + footer_scripts

with open(peng_path, 'w', encoding='utf-8') as f:
    f.write(new_content)
    
print("Done reconstructing akun_pengaturan")
