<?php

namespace App\Listeners\Image;

use App\Events\Image\ImageDeleted;
use App\Services\StorageService\AdminStorageService;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class ImageDeletedListener
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
     * @param  ImageDeleted  $event
     * @return void
     */
    public function handle(ImageDeleted $event)
    {
        $this->storageService->delete($event->image->getUrl());
    }
}
