<?php

namespace App\Providers;

use App\Events\CarInfoPage\CarInfoPageDeleted;
use App\Events\CarInfoPage\CarInfoPageUpdated;
use App\Events\Image\ImageDeleted;
use App\Events\NavBarElement\NavBarElementUpdated;
use App\Events\Order\OrderCreated;
use App\Events\Post\PostCreated;
use App\Listeners\CarInfoPage\CarInfoPageDeletedListener;
use App\Listeners\CarInfoPage\CarInfoPageUpdatedListener;
use App\Listeners\Image\ImageDeletedListener;
use App\Listeners\NavBarElement\NavBarElementUpdatedListener;
use App\Listeners\Order\OrderCratedListener;
use App\Listeners\Post\PostCreatedListener;
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
        ],
        CarInfoPageUpdated::class => [
            CarInfoPageUpdatedListener::class
        ],
        CarInfoPageDeleted::class => [
            CarInfoPageDeletedListener::class
        ],
        PostCreated::class => [
            PostCreatedListener::class
        ],
        OrderCreated::class => [
            OrderCratedListener::class
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
