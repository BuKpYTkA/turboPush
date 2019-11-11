<?php

namespace App\Listeners\CarInfoPage;

use App\Events\CarInfoPage\CarInfoPageUpdated;
use App\Services\StorageService\AdminStorageService;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CarInfoPageUpdatedListener
 * @package App\Listeners\CarInfoPage
 */
class CarInfoPageUpdatedListener
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
        $this->storageService = $storageService;
    }

    /**
     * Handle the event.
     *
     * @param  CarInfoPageUpdated  $event
     * @return void
     */
    public function handle(CarInfoPageUpdated $event)
    {
        return;
        $carInfoPage = $event->carInfoPage;
        $originalImagePath = $carInfoPage->getOriginal('image_path');
        if ($carInfoPage->getImagePath() !== $originalImagePath) {
            $this->storageService->delete($originalImagePath);
        }
    }
}
