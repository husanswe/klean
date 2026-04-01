<?php

namespace App\Providers;

use App\Events\PostCreated;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Event;

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
            Event::listen (
            PostCreated::class,
        );

        Paginator::useBootstrapFour();
    }
}
