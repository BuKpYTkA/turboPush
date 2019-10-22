<?php

namespace App\Listeners\Order;

use App\Events\Order\OrderCreated;
use App\Mail\OrderCreatedMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class OrderCratedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderCreated  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        $order = $event->order;
        try {
            Mail::to([config('app.commonOrdersReceiver')])->send(new OrderCreatedMail($order));
        } catch (\Exception $exception) {
            return;
        }
    }
}
