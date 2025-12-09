<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\GalleryRepository;
use App\Repositories\GalleryRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->bind(
        GalleryRepositoryInterface::class,
        GalleryRepository::class
    );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
