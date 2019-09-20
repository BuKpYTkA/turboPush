<?php

namespace App\Listeners\CarInfoPage;

use App\Events\CarInfoPage\CarInfoPageDeleted;
use App\Services\StorageService\AdminStorageService;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CarInfoPageDeletedListener
{
    /**
     * @var AdminStorageService
     */
    private $storageService;

    /**
     * Create the event listener.
     *
     * @param AdminStorageService $storageService
     */
    public function __construct(AdminStorageService $storageService)
    {
        //
        $this->storageService = $storageService;
    }

    /**
     * Handle the event.
     *
     * @param  CarInfoPageDeleted  $event
     * @return void
     */
    public function handle(CarInfoPageDeleted $event)
    {
        $this->storageService->delete($event->carInfoPage->getImagePath());
    }
}
