import re
import os

filepath = r'c:\Users\aryan\OneDrive\Documents\Tugas_PPLG\Mapel_pak_didin\Libraz\resources\views\edit_profil.blade.php'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# Remove Tabs
content = re.sub(r'<!-- Tab Navigation -->.*?</div>\s*</div>', '', content, flags=re.DOTALL)

# Remove section-pengaturan
match = re.search(r'(<!-- SECTION: PENGATURAN -->.*?)</div>\s*</div></main>', content, re.DOTALL)
if match:
    content = content.replace(match.group(1), '')

# Remove JS for tabs
js_pattern = r'const tabSlider = document\.getElementById\(\'tab-slider\'\);.*?// 1\. Fetch data dari API'
content = re.sub(js_pattern, '// 1. Fetch data dari API', content, flags=re.DOTALL)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)
print('Done edit_profil')
