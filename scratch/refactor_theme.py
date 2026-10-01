import json
import re
import os
import glob

# The original light theme colors
light_colors_hex = {
    "on-primary-fixed": "#1e0060", "on-primary-fixed-variant": "#4c00d3", "surface-container-highest": "#e5e1e8",
    "on-error": "#ffffff", "on-error-container": "#93000a", "surface-container": "#f1ecf4", "surface-container-high": "#ebe6ee",
    "on-tertiary-fixed": "#40000f", "on-secondary-fixed": "#002112", "secondary-fixed": "#4dffb2", "on-tertiary": "#ffffff",
    "on-surface": "#1c1b20", "surface-variant": "#e5e1e8", "surface-container-low": "#f7f2f9", "on-primary-container": "#cfc1ff",
    "on-surface-variant": "#484456", "background": "#fdf8ff", "inverse-primary": "#ccbeff", "inverse-on-surface": "#f4eff6",
    "tertiary-container": "#ac0036", "error-container": "#ffdad6", "primary": "#4300bb", "on-secondary-container": "#007149",
    "surface-tint": "#6531f0", "secondary-fixed-dim": "#00e296", "secondary": "#006c46", "surface-dim": "#ddd8e0",
    "tertiary-fixed-dim": "#ffb2b8", "tertiary-fixed": "#ffdadb", "on-background": "#1c1b20", "secondary-container": "#43fcae",
    "tertiary": "#800026", "inverse-surface": "#313035", "primary-fixed-dim": "#ccbeff", "primary-fixed": "#e7deff",
    "on-secondary": "#ffffff", "error": "#ba1a1a", "surface-container-lowest": "#ffffff", "primary-container": "#5b21e6",
    "surface": "#fdf8ff", "outline": "#797488", "surface-bright": "#fdf8ff", "on-secondary-fixed-variant": "#005234",
    "on-primary": "#ffffff", "on-tertiary-fixed-variant": "#91002c", "outline-variant": "#cac3d9", "on-tertiary-container": "#ffb7bc"
}

# The dark theme colors (Aesthetic Gen Z dark theme)
dark_colors_hex = {
    "background": "#0B0914",
    "on-background": "#E5E1E8",
    "surface": "#0B0914",
    "surface-bright": "#1F1A2F",
    "surface-dim": "#05040A",
    "surface-container-lowest": "#06050C",
    "surface-container-low": "#0F0C1B",
    "surface-container": "#151124",
    "surface-container-high": "#1A152E",
    "surface-container-highest": "#211C3A",
    "on-surface": "#E5E1E8",
    "on-surface-variant": "#C4C0CE",
    "outline": "#8D879C",
    "outline-variant": "#403A52",
    "primary": "#B28CFF",
    "on-primary": "#2D0087",
    "primary-container": "#4500CD",
    "on-primary-container": "#E7DEFF",
    "inverse-primary": "#4300BB",
    "secondary": "#00E296",
    "on-secondary": "#003823",
    "secondary-container": "#005234",
    "on-secondary-container": "#43FCAE",
    "tertiary": "#FFB2B8",
    "on-tertiary": "#68001C",
    "tertiary-container": "#91002C",
    "on-tertiary-container": "#FFDADB",
    "error": "#FFB4AB",
    "on-error": "#690005",
    "error-container": "#93000A",
    "on-error-container": "#FFDAD6"
}

# Fill in missing dark colors using light ones as fallback
for k, v in light_colors_hex.items():
    if k not in dark_colors_hex:
        dark_colors_hex[k] = v

def hex_to_rgb(h):
    h = h.lstrip('#')
    return f"{int(h[0:2], 16)} {int(h[2:4], 16)} {int(h[4:6], 16)}"

def rgb_var_name(k):
    return f"--color-{k}"

# Build tailwind colors object
tw_colors = {}
for k in light_colors_hex:
    tw_colors[k] = f"rgb(var({rgb_var_name(k)}) / <alpha-value>)"

# Build root and dark styles
root_vars = "\\n  ".join([f"{rgb_var_name(k)}: {hex_to_rgb(v)};" for k, v in light_colors_hex.items()])
dark_vars = "\\n  ".join([f"{rgb_var_name(k)}: {hex_to_rgb(v)};" for k, v in dark_colors_hex.items()])

css_style = f"""
<style>
:root {{
  {root_vars}
}}
html.dark {{
  {dark_vars}
}}
</style>
"""

tailwind_config_json = json.dumps({
    "darkMode": "class",
    "theme": {
        "extend": {
            "colors": tw_colors,
            "borderRadius": {
                "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"
            },
            "spacing": {
                "space-xs": "0.25rem", "gutter-sm": "0.75rem", "space-lg": "1.25rem", "margin": "1.25rem", 
                "gutter": "1rem", "margin-desktop": "2.5rem", "space-md": "0.875rem", "space-sm": "0.5rem", 
                "space-xl": "2rem"
            },
            "fontFamily": {
                "title-md": ["Plus Jakarta Sans"], "headline-lg-mobile": ["Plus Jakarta Sans"], 
                "headline-md": ["Plus Jakarta Sans"], "display-lg": ["Plus Jakarta Sans"], 
                "body-sm": ["Plus Jakarta Sans"], "label-sm": ["Space Grotesk"], 
                "headline-sm": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], 
                "label-lg": ["Space Grotesk"], "body-lg": ["Plus Jakarta Sans"], 
                "body-md": ["Plus Jakarta Sans"], "label-md": ["Space Grotesk"]
            },
            "fontSize": {
                "title-md": ["16px", {"lineHeight": "22px", "fontWeight": "700"}], 
                "headline-lg-mobile": ["26px", {"lineHeight": "32px", "fontWeight": "800"}], 
                "headline-md": ["22px", {"lineHeight": "28px", "fontWeight": "700"}], 
                "display-lg": ["38px", {"lineHeight": "44px", "fontWeight": "800"}], 
                "body-sm": ["12px", {"lineHeight": "18px", "fontWeight": "400"}], 
                "label-sm": ["10px", {"lineHeight": "12px", "fontWeight": "700"}], 
                "headline-sm": ["18px", {"lineHeight": "24px", "fontWeight": "700"}], 
                "headline-lg": ["30px", {"lineHeight": "36px", "fontWeight": "800"}], 
                "label-lg": ["13px", {"lineHeight": "16px", "fontWeight": "700"}], 
                "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "500"}], 
                "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "500"}], 
                "label-md": ["11px", {"lineHeight": "14px", "fontWeight": "700"}]
            }
        }
    }
})

tailwind_config_script = f'<script id="tailwind-config">tailwind.config = {tailwind_config_json}</script>'

theme_init_script = """
<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage.theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
</script>
"""

new_head_block = f'{css_style.strip()}\\n{tailwind_config_script}\\n{theme_init_script.strip()}'

# Also replace the old dark mode overrides I added
old_overrides_pattern = re.compile(r'<style id="dark-mode-overrides">.*?</style>', re.DOTALL)
old_script_pattern = re.compile(r'<script>\\s*if \\(localStorage\\.theme === \'dark\'.*?</script>', re.DOTALL)

for file_path in glob.glob('resources/views/*.blade.php'):
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    if '<script id="tailwind-config">' in content:
        # Extract everything before and after the tailwind config block
        parts = re.split(r'<script id="tailwind-config">.*?</script>', content, flags=re.DOTALL)
        if len(parts) >= 2:
            before = parts[0]
            after = parts[1]
            
            # Remove any old <style id="dark-mode-overrides">
            after = old_overrides_pattern.sub('', after)
            after = old_script_pattern.sub('', after)
            before = old_script_pattern.sub('', before)
            
            new_content = before + '\\n' + new_head_block + '\\n' + after
            
            # Write back
            with open(file_path, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Updated {file_path}")
