<?php

$light_colors_hex = [
    "on-primary-fixed" => "#1e0060", "on-primary-fixed-variant" => "#4c00d3", "surface-container-highest" => "#e5e1e8",
    "on-error" => "#ffffff", "on-error-container" => "#93000a", "surface-container" => "#f1ecf4", "surface-container-high" => "#ebe6ee",
    "on-tertiary-fixed" => "#40000f", "on-secondary-fixed" => "#002112", "secondary-fixed" => "#4dffb2", "on-tertiary" => "#ffffff",
    "on-surface" => "#1c1b20", "surface-variant" => "#e5e1e8", "surface-container-low" => "#f7f2f9", "on-primary-container" => "#cfc1ff",
    "on-surface-variant" => "#484456", "background" => "#fdf8ff", "inverse-primary" => "#ccbeff", "inverse-on-surface" => "#f4eff6",
    "tertiary-container" => "#ac0036", "error-container" => "#ffdad6", "primary" => "#4300bb", "on-secondary-container" => "#007149",
    "surface-tint" => "#6531f0", "secondary-fixed-dim" => "#00e296", "secondary" => "#006c46", "surface-dim" => "#ddd8e0",
    "tertiary-fixed-dim" => "#ffb2b8", "tertiary-fixed" => "#ffdadb", "on-background" => "#1c1b20", "secondary-container" => "#43fcae",
    "tertiary" => "#800026", "inverse-surface" => "#313035", "primary-fixed-dim" => "#ccbeff", "primary-fixed" => "#e7deff",
    "on-secondary" => "#ffffff", "error" => "#ba1a1a", "surface-container-lowest" => "#ffffff", "primary-container" => "#5b21e6",
    "surface" => "#fdf8ff", "outline" => "#797488", "surface-bright" => "#fdf8ff", "on-secondary-fixed-variant" => "#005234",
    "on-primary" => "#ffffff", "on-tertiary-fixed-variant" => "#91002c", "outline-variant" => "#cac3d9", "on-tertiary-container" => "#ffb7bc"
];

$dark_colors_hex = [
    "background" => "#0B0914",
    "on-background" => "#E5E1E8",
    "surface" => "#0B0914",
    "surface-bright" => "#1F1A2F",
    "surface-dim" => "#05040A",
    "surface-container-lowest" => "#06050C",
    "surface-container-low" => "#0F0C1B",
    "surface-container" => "#151124",
    "surface-container-high" => "#1A152E",
    "surface-container-highest" => "#211C3A",
    "on-surface" => "#E5E1E8",
    "on-surface-variant" => "#C4C0CE",
    "outline" => "#8D879C",
    "outline-variant" => "#403A52",
    "primary" => "#B28CFF",
    "on-primary" => "#2D0087",
    "primary-container" => "#4500CD",
    "on-primary-container" => "#E7DEFF",
    "inverse-primary" => "#4300BB",
    "secondary" => "#00E296",
    "on-secondary" => "#003823",
    "secondary-container" => "#005234",
    "on-secondary-container" => "#43FCAE",
    "tertiary" => "#FFB2B8",
    "on-tertiary" => "#68001C",
    "tertiary-container" => "#91002C",
    "on-tertiary-container" => "#FFDADB",
    "error" => "#FFB4AB",
    "on-error" => "#690005",
    "error-container" => "#93000A",
    "on-error-container" => "#FFDAD6"
];

// Fill in missing dark colors
foreach ($light_colors_hex as $k => $v) {
    if (!isset($dark_colors_hex[$k])) {
        $dark_colors_hex[$k] = $v;
    }
}

function hex_to_rgb($hex) {
    $hex = ltrim($hex, '#');
    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));
    return "$r $g $b";
}

$tw_colors = [];
$root_vars_arr = [];
$dark_vars_arr = [];

foreach ($light_colors_hex as $k => $v) {
    $tw_colors[$k] = "rgb(var(--color-$k) / <alpha-value>)";
    $root_vars_arr[] = "--color-$k: " . hex_to_rgb($v) . ";";
    $dark_vars_arr[] = "--color-$k: " . hex_to_rgb($dark_colors_hex[$k]) . ";";
}

$root_vars = implode("\n  ", $root_vars_arr);
$dark_vars = implode("\n  ", $dark_vars_arr);

$css_style = "<style>\n:root {\n  $root_vars\n}\nhtml.dark {\n  $dark_vars\n}\n</style>";

$config_obj = [
    "darkMode" => "class",
    "theme" => [
        "extend" => [
            "colors" => $tw_colors,
            "borderRadius" => ["DEFAULT" => "0.25rem", "lg" => "0.5rem", "xl" => "0.75rem", "full" => "9999px"],
            "spacing" => ["space-xs" => "0.25rem", "gutter-sm" => "0.75rem", "space-lg" => "1.25rem", "margin" => "1.25rem", "gutter" => "1rem", "margin-desktop" => "2.5rem", "space-md" => "0.875rem", "space-sm" => "0.5rem", "space-xl" => "2rem"],
            "fontFamily" => [
                "title-md" => ["Plus Jakarta Sans"], "headline-lg-mobile" => ["Plus Jakarta Sans"], 
                "headline-md" => ["Plus Jakarta Sans"], "display-lg" => ["Plus Jakarta Sans"], 
                "body-sm" => ["Plus Jakarta Sans"], "label-sm" => ["Space Grotesk"], 
                "headline-sm" => ["Plus Jakarta Sans"], "headline-lg" => ["Plus Jakarta Sans"], 
                "label-lg" => ["Space Grotesk"], "body-lg" => ["Plus Jakarta Sans"], 
                "body-md" => ["Plus Jakarta Sans"], "label-md" => ["Space Grotesk"]
            ],
            "fontSize" => [
                "title-md" => ["16px", ["lineHeight" => "22px", "fontWeight" => "700"]], 
                "headline-lg-mobile" => ["26px", ["lineHeight" => "32px", "fontWeight" => "800"]], 
                "headline-md" => ["22px", ["lineHeight" => "28px", "fontWeight" => "700"]], 
                "display-lg" => ["38px", ["lineHeight" => "44px", "fontWeight" => "800"]], 
                "body-sm" => ["12px", ["lineHeight" => "18px", "fontWeight" => "400"]], 
                "label-sm" => ["10px", ["lineHeight" => "12px", "fontWeight" => "700"]], 
                "headline-sm" => ["18px", ["lineHeight" => "24px", "fontWeight" => "700"]], 
                "headline-lg" => ["30px", ["lineHeight" => "36px", "fontWeight" => "800"]], 
                "label-lg" => ["13px", ["lineHeight" => "16px", "fontWeight" => "700"]], 
                "body-lg" => ["16px", ["lineHeight" => "24px", "fontWeight" => "500"]], 
                "body-md" => ["14px", ["lineHeight" => "20px", "fontWeight" => "500"]], 
                "label-md" => ["11px", ["lineHeight" => "14px", "fontWeight" => "700"]]
            ]
        ]
    ]
];

$tailwind_config_json = json_encode($config_obj);
$tailwind_config_script = "<script id=\"tailwind-config\">tailwind.config = $tailwind_config_json;</script>";
$theme_init_script = "<script>\n  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage.theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {\n    document.documentElement.classList.add('dark')\n  } else {\n    document.documentElement.classList.remove('dark')\n  }\n</script>";

$new_head_block = trim($css_style) . "\n" . trim($tailwind_config_script) . "\n" . trim($theme_init_script);

$files = glob(__DIR__ . '/../resources/views/*.blade.php');
foreach ($files as $file) {
    $content = file_get_contents($file);
    if (strpos($content, '<script id="tailwind-config">') !== false) {
        $parts = explode('<script id="tailwind-config">', $content);
        $before = $parts[0];
        $after = $parts[1];
        
        // Find closing script tag
        $end_script_pos = strpos($after, '</script>');
        $after = substr($after, $end_script_pos + 9);
        
        // Remove old overrides
        $after = preg_replace('/<style id="dark-mode-overrides">.*?<\/style>/s', '', $after);
        $after = preg_replace('/<script>\s*if \(localStorage\.theme === \'dark\'.*?<\/script>/s', '', $after);
        $before = preg_replace('/<script>\s*if \(localStorage\.theme === \'dark\'.*?<\/script>/s', '', $before);
        
        $new_content = $before . "\n" . $new_head_block . "\n" . $after;
        file_put_contents($file, $new_content);
        echo "Updated $file\n";
    }
}
