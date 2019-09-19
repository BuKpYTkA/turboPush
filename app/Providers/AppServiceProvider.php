<?php

namespace App\Providers;

use App\Services\BannerImageService\BannerImageService;
use App\Services\MetaTagService\MetaTagService;
use App\Services\StorageService\AdminStorageService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AdminStorageService::class, function () {
            return new AdminStorageService(
                config('filesystems.disks.admin.url'),
                'admin'
            );
        });
        $this->app->when(MetaTagService::class)
            ->needs('$defaultMetaTags')
            ->give(config('metatags'));
        $this->app->when(BannerImageService::class)
            ->needs('$defaultBannerImage')
            ->give(config('app.defaultBannerImage'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
