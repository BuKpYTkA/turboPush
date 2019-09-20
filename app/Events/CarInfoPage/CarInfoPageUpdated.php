<?php

namespace App\Events\CarInfoPage;

use App\Models\CarInfoPage\CarInfoPage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CarInfoPageUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var CarInfoPage
     */
    public $carInfoPage;

    /**
     * Create a new event instance.
     *
     * @param CarInfoPage $carInfoPage
     */
    public function __construct(CarInfoPage $carInfoPage)
    {
        //
        $this->carInfoPage = $carInfoPage;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
