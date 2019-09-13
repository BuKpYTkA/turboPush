<?php

namespace App\Providers;

use App\Events\Image\ImageDeleted;
use App\Events\NavBarElement\NavBarElementUpdated;
use App\Listeners\Image\ImageDeletedListener;
use App\Listeners\NavBarElement\NavBarElementUpdatedListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ImageDeleted::class => [
            ImageDeletedListener::class
        ],
        NavBarElementUpdated::class => [
            NavBarElementUpdatedListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
