<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->enum('type', ['physical', 'ebook', 'both'])->default('physical')->after('rack');
            $table->string('isbn')->nullable()->after('type');
            $table->string('pdf_path')->nullable()->after('cover_image_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn(['type', 'isbn', 'pdf_path']);
        });
    }
};
