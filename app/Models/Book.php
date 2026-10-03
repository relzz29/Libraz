<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'category', 'rack', 'type', 'isbn', 'stock', 
        'cover_image_url', 'pdf_path', 'rating', 'popularity_score'
    ];
}
