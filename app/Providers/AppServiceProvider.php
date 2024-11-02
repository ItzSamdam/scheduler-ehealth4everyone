<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\ApiLogRepository;
use App\Interface\ApiLogRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ApiLogRepositoryInterface::class, ApiLogRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
