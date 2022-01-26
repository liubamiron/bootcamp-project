<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Services\RequestActivityLoggerInterface;
use App\Services\ProductionRequestActivityLogger;
use App\Services\DebugRequestActivityLogger;
use App\Services\DummyRequestActivityLogger;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    if (config('app.env')==='production')  { 
        
     return   $this->app->bind(RequestActivityLoggerInterface::class, ProductionRequestActivityLogger::class);
       }
       else   {
        return $this->app->bind(RequestActivityLoggerInterface::class, DebugRequestActivityLogger::class);
       }
     
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        //Paginator::defaultView('my-paginator');

    }
}
