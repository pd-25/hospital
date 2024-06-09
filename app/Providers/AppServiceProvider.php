<?php

namespace App\Providers;

use App\Core\DoctorInterface;
use App\Core\CareerInterface;
use App\Core\CareerRepo;
use App\Core\DoctorRepo;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CareerInterface::class, CareerRepo::class);
        $this->app->bind(DoctorInterface::class, DoctorRepo::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
