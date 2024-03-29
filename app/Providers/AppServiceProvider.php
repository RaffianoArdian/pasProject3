<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory as FakerFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $fakerLocale = env('FAKER_LOCALE', 'en_US'); // Default to en_US if not set
    FakerFactory::create($fakerLocale);
    }
}
