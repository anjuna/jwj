<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Observers\ExportReviewDataOfType;
use App\Type;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Make sure any changes to reviews are propagated to json files in public directory
     * @return void
     */
    public function boot()
    {
        Type::observe(ExportReviewDataOfType::class);
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
