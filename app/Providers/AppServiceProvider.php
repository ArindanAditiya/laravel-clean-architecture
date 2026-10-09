<?php

namespace App\Providers;

use App\Interface\UserRepositoryInterface;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $bindings = [
            UserRepositoryInterface::class => UserRepository::class
        ];

        foreach ($bindings as $interface => $value){
            $this->app->bind($interface, $value);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
