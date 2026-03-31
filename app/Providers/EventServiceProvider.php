<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\ServiceProvider;

use App\Events\PostCreated;
use App\Listeners\SendEmailToUser;
use App\Listeners\SendNotificationToAdmin;


class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PostCreated::class => [
            SendEmailToUser::class,
            SendNotificationToAdmin::class
        ]
    ];
}
