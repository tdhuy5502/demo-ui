<?php

namespace App\Providers;

use App\Models\Donation;
use App\Models\Volunteer;
use App\Observers\DonationObserver;
use App\Observers\ProjectMemObserver;
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
        //
        Donation::observe(DonationObserver::class);
        Volunteer::observe(ProjectMemObserver::class);
    }
}
