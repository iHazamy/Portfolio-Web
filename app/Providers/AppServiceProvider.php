<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // FORCE HTTPS ALWAYS (safe for Render, fixes mixed content)
        URL::forceScheme('https');
    }
}