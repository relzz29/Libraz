<?php
$file = __DIR__ . '/resources/views/akun.blade.php';
$content = file_get_contents($file);

$search = <<<HTML
          <div class="mt-3 flex items-center gap-3">
            <span id="profile-school-name" class="text-xs font-black text-primary tracking-widest uppercase bg-primary/10 px-4 py-1.5 rounded-full ring-1 ring-primary/20 shadow-sm">{{ \$user->school_name ?? 'SMAN 1 Garudapura' }}</span>
            <a href="{{ route('edit.profil') }}" class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/20 hover:bg-white/40 dark:bg-black/20 dark:hover:bg-black/40 text-on-surface shadow-sm border border-white/30 dark:border-white/10 transition-colors backdrop-blur-sm group/edit">
              <span class="material-symbols-outlined text-[16px] group-hover/edit:text-primary transition-colors">edit</span>
              <span class="text-xs font-bold group-hover/edit:text-primary transition-colors">Edit Profil</span>
            </a>
          </div>
HTML;

$replace = <<<HTML
          <div class="mt-3 flex items-center gap-3">
            <span id="profile-school-name" class="text-xs font-black text-primary tracking-widest uppercase bg-primary/10 px-4 py-1.5 rounded-full ring-1 ring-primary/20 shadow-sm">{{ \$user->school_name ?? 'SMAN 1 Garudapura' }}</span>
            <a href="{{ route('edit.profil') }}" class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/20 hover:bg-white/40 dark:bg-black/20 dark:hover:bg-black/40 text-on-surface shadow-sm border border-white/30 dark:border-white/10 transition-colors backdrop-blur-sm group/edit">
              <span class="material-symbols-outlined text-[16px] group-hover/edit:text-primary transition-colors">edit</span>
              <span class="text-xs font-bold group-hover/edit:text-primary transition-colors">Edit Profil</span>
            </a>
          </div>
          
          <div class="mt-4 flex flex-col gap-2">
            @if(!empty(\$user->email))
            <div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-sm">
                <span class="material-symbols-outlined text-[18px]">mail</span>
                <span>{{ \$user->email }}</span>
            </div>
            @endif
            
            @if(!empty(\$user->bio))
            <div class="mt-1 bg-white/40 dark:bg-black/20 backdrop-blur-sm p-4 rounded-2xl border border-white/50 dark:border-white/10">
                <p class="font-body-md text-sm text-on-surface-variant italic">"{{ \$user->bio }}"</p>
            </div>
            @else
            <div class="mt-1 bg-white/40 dark:bg-black/20 backdrop-blur-sm p-4 rounded-2xl border border-white/50 dark:border-white/10 opacity-70">
                <p class="font-body-md text-sm text-on-surface-variant italic">Belum ada bio yang ditulis. Tambahkan bio di Edit Profil.</p>
            </div>
            @endif
          </div>
HTML;

$content = str_replace($search, $replace, $content);
file_put_contents($file, $content);
echo "Akun info added.";
