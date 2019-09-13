<?php

namespace App\Events\NavBarElement;

use App\Models\NavBarElement\NavBarElement;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NavBarElementUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var NavBarElement
     */
    public $navBarElement;

    /**
     * Create a new event instance.
     *
     * @param NavBarElement $navBarElement
     */
    public function __construct(NavBarElement $navBarElement)
    {
        $this->navBarElement = $navBarElement;
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
