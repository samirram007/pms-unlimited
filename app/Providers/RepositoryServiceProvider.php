<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind( App\Repositories\Interfaces\CompanyRepositoryInterface::class,App\Repositories\CompanyRepository::class);
        $this->app->bind(App\Services\Interfaces\CompanyServiceInterface::class, App\Services\CompanyService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


    }
}
