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
        if (!Schema::hasColumn('users', 'xp')) {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('xp')->default(0);
                $table->integer('level')->default(1);
                $table->integer('read_count')->default(0); // Buku Selesai
                $table->decimal('reading_hours', 8, 2)->default(0); // Jam Total Membaca
                $table->integer('reviews_count')->default(0); // Rating Ulasan
                $table->integer('favorites_count')->default(0); // Item Koleksi Favorit
                $table->integer('current_streak')->default(0);
                $table->integer('highest_streak')->default(0);
                $table->date('last_read_date')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'xp', 'level', 'read_count', 'reading_hours', 
                'reviews_count', 'favorites_count', 
                'current_streak', 'highest_streak', 'last_read_date'
            ]);
        });
    }
};
