<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'category', 'rack', 'type', 'isbn', 'stock', 
        'cover_image_url', 'pdf_path', 'rating', 'popularity_score'
    ];

    public function getCoverImageUrlAttribute($value)
    {
        if ($value && str_starts_with($value, '/storage/')) {
            $path = str_replace('/storage/', '', $value);
            if (\Storage::disk('public')->exists($path)) {
                return $value;
            }
        }
        
        if ($value && str_starts_with($value, 'buku/')) {
            return $value;
        }
        
        if ($value && filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }

        $title = $this->title ?? 'Book';
        return 'https://ui-avatars.com/api/?name=' . urlencode($title) . '&background=random&size=400&color=fff';
    }
}
