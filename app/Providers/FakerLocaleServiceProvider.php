<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory as FakerFactory;

class FakerLocaleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $fakerLocale = env('FAKER_LOCALE', 'en_US'); // Default to en_US if not set
        FakerFactory::create($fakerLocale);
    }
}
