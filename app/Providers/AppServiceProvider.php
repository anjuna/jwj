<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Observers\ReviewObserver;
use App\Review;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Make sure any changes to reviews are propagated to json files in public directory
     * @return void
     */
    public function boot()
    {
        Review::observe(ReviewObserver::class);
    }

    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        //
    }
}
