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
        $this->app->bind(App\Repositories\Interfaces\TestRepositoryInterface::class, App\Repositories\TestRepository::class);
        $this->app->bind(App\Services\Interfaces\TestServiceInterface::class, App\Services\TestService::class);
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
