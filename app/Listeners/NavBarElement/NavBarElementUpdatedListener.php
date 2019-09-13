<?php

namespace App\Listeners\NavBarElement;

use App\Events\NavBarElement\NavBarElementUpdated;
use App\Models\NavBarElement\NavBarElement;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NavBarElementUpdatedListener
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
     * @param  NavBarElementUpdated  $event
     * @return void
     */
    public function handle(NavBarElementUpdated $event)
    {
        if ($event->navBarElement->getParentId() !== 0) {
            /**
             * @var $parentNavBarElement NavBarElement
             */
            $parentNavBarElement = NavBarElement::query()->find($event->navBarElement->getParentId());
            if ($parentNavBarElement->getParentId() !== 0 && $event->navBarElement->getParentId() !== $parentNavBarElement->getParentId()) {
                $event->navBarElement->setParentId($parentNavBarElement->getParentId());
                $event->navBarElement->save();
                /**
                 * @var $superParentNavBarElement NavBarElement
                 */
                $superParentNavBarElement = NavBarElement::query()->find($parentNavBarElement->getParentId());
                if ($superParentNavBarElement->getParentId() !== 0) {
                    $superParentNavBarElement->setParentId(0);
                    $superParentNavBarElement->save();
                }
            }
        }
    }
}
