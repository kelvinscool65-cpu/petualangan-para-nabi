<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Import facade URL

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Tidak ada binding khusus di sini
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paksa semua URL buatan Laravel (route, asset, dll) menggunakan HTTPS
        // Berlaku jika environment production atau APP_ENV=production
        if (app()->environment('production') || config('app.env') === 'production') {
            URL::forceScheme('https');

            // Opsional: Tambahkan header HSTS untuk keamanan ekstra
            // header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
        }
    }
}