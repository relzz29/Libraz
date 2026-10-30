<?php

namespace App\Observers;

use App\Models\Book;
use App\Services\LibraryCacheService;

class BookObserver
{
    public function created(Book $book): void
    {
        LibraryCacheService::flushBookCache();
    }

    public function updated(Book $book): void
    {
        LibraryCacheService::flushBookCache();
    }

    public function deleted(Book $book): void
    {
        LibraryCacheService::flushBookCache();
    }
}

