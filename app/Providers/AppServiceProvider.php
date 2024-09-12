<?php

namespace App\Providers;

use App\Repositories\Registration\IRegistrationRepository;
use App\Repositories\Registration\RegistrationRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IRegistrationRepository::class, RegistrationRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
