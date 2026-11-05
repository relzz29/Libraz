<?php

/**
 * ==============================================================================
 * VERCEL SERVERLESS ENTRYPOINT FOR LARAVEL
 * ==============================================================================
 */

// Arahkan view yang dicompile ke /tmp yang selalu tersedia dan writable di Linux
putenv('VIEW_COMPILED_PATH=/tmp');

// Teruskan penanganan permintaan ke file utama public/index.php
require __DIR__ . '/../public/index.php';
