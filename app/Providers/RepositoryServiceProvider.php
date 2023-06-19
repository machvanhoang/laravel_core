<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Admin\AdminRepository;
use App\Repositories\Admin\AdminRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            AdminRepositoryInterface::class,
            AdminRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
