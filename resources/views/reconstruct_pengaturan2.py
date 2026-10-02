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
header_match = re.search(r'(.*?</header>)', sirk_content, re.DOTALL)
header_html = header_match.group(1)

# Modify the <header> title to say "Pengaturan Aplikasi ⚙️"
header_html = re.sub(r'(<span class="font-title-md text-title-md text-on-surface truncate">)(.*?)(</span>)', r'\g<1>Pengaturan Aplikasi ⚙️\g<3>', header_html)

# Add <main> start tag
header_html += '\n<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-16 pb-24 md:pb-8 bg-surface min-h-screen items-center">\n<div class="flex flex-col lg:grid lg:grid-cols-12 w-full max-w-5xl px-margin pb-space-xl gap-space-lg lg:items-start">\n<div class="lg:col-span-12 flex flex-col gap-space-lg w-full">\n'


# 2. Get Pengaturan content
peng_section_match = re.search(r'(<div id="section-pengaturan"[^>]+>.*?</div>\s*</div>)', peng_content, re.DOTALL)
peng_section_html = peng_section_match.group(1) if peng_section_match else ""

# Remove hidden from section-pengaturan
peng_section_html = peng_section_html.replace('id="section-pengaturan" class="hidden ', 'id="section-pengaturan" class="')

# 3. Get Logout modal and script
footer_scripts = ""
logout_match = re.search(r'(<!-- Logout Confirmation Modal -->.*?)$', peng_content, re.DOTALL)
if logout_match:
    footer_scripts = logout_match.group(1)
    footer_scripts = re.sub(r'// Elements for Tabs.*?// 4\. Tombol Logout', '// 4. Tombol Logout', footer_scripts, flags=re.DOTALL)

# 4. Get bottom nav from sirkulasi
nav_match = re.search(r'(<nav class="fixed bottom-0.*?</nav>)', sirk_content, re.DOTALL)
nav_html = nav_match.group(1) if nav_match else ""

# We need to set active class for Pengaturan nav
nav_html = nav_html.replace('aria-current="page"', '')
nav_html = re.sub(r'class="flex flex-col items-center justify-center min-w-\[64px\] min-h-\[44px\] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-\[3px_3px_0px_#1c1b20\]"', r'class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary"', nav_html)
# set pengaturan as active
nav_html = re.sub(r'<a([^>]+href="{{ route\(\'akun.pengaturan\'\) }}"[^>]*)>', r'<a aria-current="page" \1>', nav_html)
nav_html = re.sub(r'<a aria-current="page" class="flex flex-col items-center justify-center min-w-\[64px\] min-h-\[44px\] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary"', r'<a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]"', nav_html)

# Also set active class for sidebar in header_html
header_html = header_html.replace('bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]', 'text-on-surface-variant hover:bg-surface-container hover:text-primary')
header_html = re.sub(r'<a href="{{ route\(\'akun.pengaturan\'\) }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">', r'<a href="{{ route(\'akun.pengaturan\') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">', header_html)

# 5. Assemble and write
new_content = header_html + peng_section_html + '\n</div>\n</div>\n</main>\n' + nav_html + '\n' + footer_scripts + '\n</body></html>'

with open(peng_path, 'w', encoding='utf-8') as f:
    f.write(new_content)
    
print("Done reconstructing akun_pengaturan")
