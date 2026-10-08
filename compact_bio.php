<?php
$file = __DIR__ . '/resources/views/akun.blade.php';
$content = file_get_contents($file);

$search = <<<HTML
          <div class="mt-6 flex flex-col items-center md:items-start gap-4">
            @if(!empty(\$user->email))
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-50/80 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 shadow-sm border border-indigo-200/50 dark:border-indigo-800/50 w-max backdrop-blur-md hover:bg-indigo-100/80 transition-colors cursor-default">
                <span class="material-symbols-outlined text-[18px]">mail</span>
                <span class="font-bold text-sm tracking-wide">{{ \$user->email }}</span>
            </div>
            @endif
            
            @if(!empty(\$user->bio))
            <div class="relative overflow-hidden bg-gradient-to-br from-white/70 to-white/30 dark:from-slate-800/60 dark:to-slate-900/30 backdrop-blur-xl p-5 md:p-6 rounded-[24px] border border-white/80 dark:border-white/10 shadow-[0_8px_32px_rgba(0,0,0,0.05)] max-w-xl transition-transform hover:-translate-y-1 duration-300 group">
                <div class="absolute -top-6 -left-4 text-indigo-200/60 dark:text-indigo-900/40 transform -rotate-12 group-hover:scale-110 transition-transform duration-500 pointer-events-none">
                    <span class="material-symbols-outlined text-[100px]" style="font-variation-settings: 'FILL' 1;">format_quote</span>
                </div>
                <p class="relative z-10 font-body-lg text-base md:text-lg text-slate-700 dark:text-slate-300 font-medium italic leading-relaxed pl-4 md:pl-6 border-l-2 border-indigo-300/50">
                    {{ \$user->bio }}
                </p>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-purple-300/20 dark:bg-purple-900/30 rounded-full blur-2xl group-hover:bg-purple-400/30 transition-colors duration-500 pointer-events-none"></div>
            </div>
            @else
            <div class="relative overflow-hidden bg-white/40 dark:bg-slate-800/40 backdrop-blur-md p-5 rounded-[24px] border border-white/50 dark:border-white/10 shadow-sm max-w-xl opacity-70 border-dashed border-2">
                <div class="flex items-center gap-3 text-slate-500">
                    <span class="material-symbols-outlined text-[24px]">edit_note</span>
                    <p class="font-body-md text-sm italic">Belum ada bio yang ditulis. Tambahkan sedikit cerita tentang dirimu di halaman Edit Profil.</p>
                </div>
            </div>
            @endif
          </div>
HTML;

$replace = <<<HTML
          <div class="mt-4 flex flex-col items-center md:items-start gap-3">
            @if(!empty(\$user->email))
            <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-indigo-50/80 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 shadow-sm border border-indigo-200/50 dark:border-indigo-800/50 w-max backdrop-blur-md cursor-default">
                <span class="material-symbols-outlined text-[16px]">mail</span>
                <span class="font-bold text-xs tracking-wide">{{ \$user->email }}</span>
            </div>
            @endif
            
            @if(!empty(\$user->bio))
            <div class="relative overflow-hidden bg-gradient-to-br from-white/60 to-white/20 dark:from-slate-800/50 dark:to-slate-900/20 backdrop-blur-lg p-3.5 md:p-4 rounded-[16px] border border-white/60 dark:border-white/10 shadow-sm max-w-sm md:max-w-md group">
                <div class="absolute -top-3 -left-2 text-indigo-200/40 dark:text-indigo-900/30 transform -rotate-12 pointer-events-none">
                    <span class="material-symbols-outlined text-[60px]" style="font-variation-settings: 'FILL' 1;">format_quote</span>
                </div>
                <p class="relative z-10 font-body-md text-sm text-slate-700 dark:text-slate-300 font-medium italic leading-relaxed pl-3 border-l-2 border-indigo-300/40">
                    {{ \$user->bio }}
                </p>
                <div class="absolute -bottom-8 -right-8 w-24 h-24 bg-purple-300/10 dark:bg-purple-900/20 rounded-full blur-xl pointer-events-none"></div>
            </div>
            @else
            <div class="relative overflow-hidden bg-white/30 dark:bg-slate-800/30 backdrop-blur-md p-3.5 rounded-[16px] border border-white/40 dark:border-white/5 shadow-sm max-w-sm opacity-60 border-dashed border-2">
                <div class="flex items-center gap-2 text-slate-500">
                    <span class="material-symbols-outlined text-[18px]">edit_note</span>
                    <p class="font-body-sm text-xs italic">Belum ada bio. Tambahkan di Edit Profil.</p>
                </div>
            </div>
            @endif
          </div>
HTML;

$content = str_replace($search, $replace, $content);
file_put_contents($file, $content);
echo "Compact bio added.";
