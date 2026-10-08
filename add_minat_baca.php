<?php
$file = __DIR__ . '/resources/views/akun.blade.php';
$content = file_get_contents($file);

$search = <<<HTML
          <div class="mt-4 flex flex-col items-center md:items-start gap-3">
            @if(!empty(\$user->email))
HTML;

$replace = <<<HTML
          <div class="mt-4 flex flex-col md:flex-row items-center md:items-stretch gap-4 w-full">
            <div class="flex flex-col items-center md:items-start gap-3 w-full md:w-auto shrink-0">
            @if(!empty(\$user->email))
HTML;

$search2 = <<<HTML
            @endif
          </div>
        </div>
      </div>

      <!-- XP & Gamification Widget -->
HTML;

$replace2 = <<<HTML
            @endif
            </div>
            
            <!-- Minat Baca & FYP Widget -->
            <div class="relative overflow-hidden bg-gradient-to-br from-white/50 to-white/10 dark:from-slate-800/40 dark:to-slate-900/10 backdrop-blur-md p-3.5 md:p-4 rounded-[16px] border border-white/60 dark:border-white/10 shadow-sm w-full md:w-56 lg:w-64 flex flex-col justify-between group transition-all hover:bg-white/60 dark:hover:bg-slate-800/60">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[10px] font-black text-slate-500 dark:text-slate-400 uppercase tracking-widest">Minat Baca & FYP</span>
                    <span class="material-symbols-outlined text-[16px] text-primary animate-pulse">auto_awesome</span>
                </div>
                
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="px-2 py-1 bg-blue-100/80 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 rounded-lg text-[10px] font-bold border border-blue-200/50">Sci-Fi</span>
                    <span class="px-2 py-1 bg-emerald-100/80 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-300 rounded-lg text-[10px] font-bold border border-emerald-200/50">Misteri</span>
                    <span class="px-2 py-1 bg-rose-100/80 dark:bg-rose-900/40 text-rose-700 dark:text-rose-300 rounded-lg text-[10px] font-bold border border-rose-200/50">Sejarah</span>
                    <span class="px-2 py-1 bg-amber-100/80 dark:bg-amber-900/40 text-amber-700 dark:text-amber-300 rounded-lg text-[10px] font-bold border border-amber-200/50">Psikologi</span>
                    <span class="px-2 py-1 bg-purple-100/80 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 rounded-lg text-[10px] font-bold border border-purple-200/50 cursor-pointer hover:bg-purple-200 transition-colors">+ Edit</span>
                </div>
                
                <div class="flex items-center gap-2 mt-auto pt-3 border-t border-slate-200/50 dark:border-white/10">
                    <div class="w-8 h-4 bg-primary/20 rounded-full relative shadow-inner cursor-pointer hover:bg-primary/30 transition-colors">
                        <div class="absolute right-0.5 top-0.5 w-3 h-3 bg-primary rounded-full shadow-sm"></div>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[10px] font-bold text-slate-700 dark:text-slate-300 leading-tight">Algoritma FYP Aktif</span>
                        <span class="text-[9px] text-slate-500 font-medium">Buku disesuaikan minat</span>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <!-- XP & Gamification Widget -->
HTML;

$content = str_replace($search, $replace, $content);
$content = str_replace($search2, $replace2, $content);

file_put_contents($file, $content);
echo "Minat baca added.";
