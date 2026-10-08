<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;

try {
    DB::statement('ALTER TABLE borrowings ALTER COLUMN borrowed_at TYPE TIMESTAMP');
    DB::statement('ALTER TABLE borrowings ALTER COLUMN due_date TYPE TIMESTAMP');
    DB::statement('ALTER TABLE borrowings ALTER COLUMN returned_at TYPE TIMESTAMP');
    echo "Columns altered successfully.\n";
    
    // Postgres doesn't have TIME(), it has ::time
    DB::statement('UPDATE borrowings SET borrowed_at = NOW() WHERE CAST(borrowed_at AS time) = \'00:00:00\'');
    
    echo "Recent borrowings updated to exact time.\n";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
