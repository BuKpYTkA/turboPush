<?php

namespace App\Providers;

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
