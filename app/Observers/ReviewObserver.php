<?php

namespace App\Observers;

use App\Models\Review;
use App\Services\LibraryCacheService;

class ReviewObserver
{
    public function created(Review $review): void
    {
        LibraryCacheService::flushReviewCache();
    }

    public function updated(Review $review): void
    {
        LibraryCacheService::flushReviewCache();
    }

    public function deleted(Review $review): void
    {
        LibraryCacheService::flushReviewCache();
    }
}

