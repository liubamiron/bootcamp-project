<?php

namespace App\Providers;

use App\Services\DebugRequestActivityLogger;
use App\Services\ProductionRequestActivityLogger;
use App\Services\RequestActivityLoggerInterface;
use Illuminate\Pagination\Paginator;
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

        $this->app->bind(RequestActivityLoggerInterface::class, function () {

            if (config('app.env') === 'production') {

                return $this->app->make(ProductionRequestActivityLogger::class);
            } else {
                return $this->app->make(DebugRequestActivityLogger::class);
            }

        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

    }
}
