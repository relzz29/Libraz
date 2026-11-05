@echo off
title Libraz Online Server
echo ========================================================
echo       MENYALAKAN SERVER LIBRAZ (ONLINE PUBLIC LINK)
echo ========================================================
echo.
echo 1. Menjalankan server Laravel di background...
start /b php artisan serve --host=127.0.0.1 --port=8000 > nul 2>&1
echo.
echo 2. Menghubungkan ke Cloudflare Quick Tunnel...
echo Link publik HTTPS aktif akan muncul di bawah ini:
echo ========================================================
echo.
cloudflared.exe tunnel --url http://127.0.0.1:8000 --no-autoupdate
pause

