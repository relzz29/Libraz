import os
import re

new_dark_mode = """html.dark {
  --color-on-primary-fixed: 224 231 255;
  --color-on-primary-fixed-variant: 199 210 254;
  --color-surface-container-highest: 45 45 48;
  --color-on-error: 105 0 5;
  --color-on-error-container: 255 218 214;
  --color-surface-container: 24 24 27;
  --color-surface-container-high: 39 39 42;
  --color-on-tertiary-fixed: 255 228 230;
  --color-on-secondary-fixed: 204 251 241;
  --color-secondary-fixed: 45 212 191;
  --color-on-tertiary: 254 226 226;
  --color-on-surface: 244 244 245;
  --color-surface-variant: 39 39 42;
  --color-surface-container-low: 15 15 17;
  --color-on-primary-container: 224 231 255;
  --color-on-surface-variant: 161 161 170;
  --color-background: 9 9 11;
  --color-inverse-primary: 99 102 241;
  --color-inverse-on-surface: 24 24 27;
  --color-tertiary-container: 159 18 57;
  --color-error-container: 147 0 10;
  --color-primary: 167 139 250;
  --color-on-secondary-container: 115 255 200;
  --color-surface-tint: 139 92 246;
  --color-secondary-fixed-dim: 20 184 166;
  --color-secondary: 45 212 191;
  --color-surface-dim: 9 9 11;
  --color-tertiary-fixed-dim: 251 113 133;
  --color-tertiary-fixed: 253 164 175;
  --color-on-background: 250 250 250;
  --color-secondary-container: 15 118 110;
  --color-tertiary: 244 63 94;
  --color-inverse-surface: 228 228 231;
  --color-primary-fixed-dim: 167 139 250;
  --color-primary-fixed: 196 181 253;
  --color-on-secondary: 4 47 46;
  --color-error: 255 180 171;
  --color-surface-container-lowest: 0 0 0;
  --color-primary-container: 76 29 149;
  --color-surface: 9 9 11;
  --color-outline: 82 82 91;
  --color-surface-bright: 39 39 42;
  --color-on-secondary-fixed-variant: 17 94 89;
  --color-on-primary: 255 255 255;
  --color-on-tertiary-fixed-variant: 159 18 57;
  --color-outline-variant: 63 63 70;
  --color-on-tertiary-container: 255 228 230;
}"""

views_dir = r"c:\xampp\htdocs\perpustakaan29\resources\views"
pattern = re.compile(r'html\.dark\s*\{[^}]+\}', re.DOTALL)

for root, _, files in os.walk(views_dir):
    for file in files:
        if file.endswith('.blade.php'):
            path = os.path.join(root, file)
            with open(path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            if 'html.dark' in content:
                new_content = pattern.sub(new_dark_mode, content)
                if new_content != content:
                    with open(path, 'w', encoding='utf-8') as f:
                        f.write(new_content)
                    print(f"Updated {file}")
