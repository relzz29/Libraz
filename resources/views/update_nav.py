import os
import re

views_dir = r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\resources\views'
files = ['katalog.blade.php', 'sirkulasi.blade.php', 'statistik.blade.php', 'akun.blade.php', 'scanner.blade.php', 'notifikasi.blade.php', 'sirkulasi_sukses.blade.php', 'akun_pengaturan.blade.php']

aside_inactive = '''    <a href="{{ route('akun.pengaturan') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">settings</span>
      Pengaturan
    </a>'''

aside_active = '''    <a href="{{ route('akun.pengaturan') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">
      <span class="material-symbols-outlined text-[22px]">settings</span>
      Pengaturan
    </a>'''

nav_inactive = '''<a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun-pengaturan" href="{{ route('akun.pengaturan') }}"><span class="material-symbols-outlined text-[22px]">settings</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Pengaturan</span></a>'''

nav_active = '''<a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]" data-path="akun-pengaturan" href="{{ route('akun.pengaturan') }}"><span class="material-symbols-outlined text-[22px]">settings</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Pengaturan</span></a>'''

for f in files:
    filepath = os.path.join(views_dir, f)
    if not os.path.exists(filepath): continue
    
    with open(filepath, 'r', encoding='utf-8') as file:
        content = file.read()
        
    # Update aside
    if '</nav>\n</aside>' in content:
        # Check if already added
        if 'settings' not in content.split('</nav>\n</aside>')[0]:
            is_active = f == 'akun_pengaturan.blade.php'
            new_aside = aside_active if is_active else aside_inactive
            content = content.replace('</nav>\n</aside>', f'{new_aside}\n  </nav>\n</aside>')
            
    # Update nav
    if '<nav class="fixed bottom-0' in content:
        # Replace the entire nav to insert Pengaturan
        # Find the closing </div></nav>
        nav_pattern = r'(<nav class="fixed bottom-0.*?</nav>)'
        match = re.search(nav_pattern, content)
        if match:
            nav_html = match.group(1)
            if 'data-path="akun-pengaturan"' not in nav_html:
                is_active = f == 'akun_pengaturan.blade.php'
                new_nav_item = nav_active if is_active else nav_inactive
                
                # Insert before </div></nav>
                new_nav_html = nav_html.replace('</div></nav>', f'{new_nav_item}</div></nav>')
                
                # if there is script tag right after like </div></nav><script> we should be careful, but we only replace inside the match.
                content = content.replace(nav_html, new_nav_html)
                
    with open(filepath, 'w', encoding='utf-8') as file:
        file.write(content)
print('Done!')
