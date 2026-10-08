<?php
$file = __DIR__ . '/resources/views/katalog.blade.php';
$content = file_get_contents($file);

// 1. Remove Brutalist Shadows
$content = str_replace('shadow-[3px_3px_0px_#1c1b20]', 'shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-surface-container-highest hover:shadow-[0_8px_40px_rgba(100,50,255,0.08)] transition-all duration-300', $content);
$content = str_replace('shadow-[2px_2px_0px_#1c1b20]', 'shadow-sm border border-surface-container hover:shadow-md transition-all duration-300', $content);

// 2. Enhance Cards with Glassmorphism
$content = str_replace('bg-surface-container-lowest rounded-xl', 'bg-white/60 dark:bg-black/40 backdrop-blur-xl rounded-[2rem]', $content);
$content = str_replace('rounded-xl', 'rounded-2xl', $content);
$content = preg_replace('/<article class="book-card (.*?)"/', '<article class="book-card $1 group"', $content);

// 3. Make Search Bar Softer and More Premium
$content = str_replace('class="w-full h-12 pl-11 pr-14', 'class="w-full h-14 pl-12 pr-16 rounded-[1.5rem] bg-white/70 dark:bg-black/40 backdrop-blur-lg border border-surface-container-highest', $content);

// 4. Improve Badges (E-book, Physical)
$content = str_replace('bg-emerald-100 text-emerald-900', 'bg-emerald-500/10 text-emerald-600', $content);
$content = str_replace('bg-blue-100 text-blue-900', 'bg-blue-500/10 text-blue-600', $content);

// 5. Add Background Orbs (Inject after <main...>)
$orbs = <<<HTML
<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-16 pb-24 md:pb-8 bg-surface min-h-screen overflow-hidden">
  <!-- Animated Background Orbs -->
  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0 fixed">
    <div class="absolute -top-[10%] -left-[10%] w-[50%] h-[50%] rounded-full bg-primary/10 blur-[120px] animate-pulse" style="animation-duration: 8s;"></div>
    <div class="absolute top-[30%] -right-[10%] w-[40%] h-[60%] rounded-full bg-secondary-fixed/10 blur-[100px] animate-pulse" style="animation-duration: 12s; animation-delay: 2s;"></div>
  </div>
  <div class="flex flex-col w-full px-margin pb-space-xl gap-space-lg relative z-10">
HTML;
$content = preg_replace('/<main[^>]*><div class="flex flex-col w-full px-margin pb-space-xl gap-space-lg">/', $orbs, $content);

// 6. Update Primary Buttons to have Gradients
$content = str_replace('bg-primary text-on-primary', 'bg-gradient-to-r from-primary to-primary-container text-white shadow-lg shadow-primary/30 hover:scale-[1.02]', $content);

// 7. Update Category Pills
$content = str_replace('bg-surface-container-lowest text-on-surface', 'bg-white/50 dark:bg-black/30 backdrop-blur-md text-on-surface border border-white/20', $content);

file_put_contents($file, $content);
echo "Katalog updated to Premium UI";
