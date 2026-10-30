<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\Review;
use App\Observers\BookObserver;
use App\Observers\ReviewObserver;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Mencegah N+1 query problem secara ketat di environment lokal/testing
        Model::preventLazyLoading(! $this->app->isProduction());

        // Model Observers untuk otomatisasi invalidasi cache
        Book::observe(BookObserver::class);
        Review::observe(ReviewObserver::class);

        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
    }
}
