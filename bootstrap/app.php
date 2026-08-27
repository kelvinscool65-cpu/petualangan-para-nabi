<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void { // ->withMiddleware(function (Middleware $middleware): void {
        // Menambahkan middleware Inertia dan preload assets ke grup 'web' //     $middleware->web(append: [
        $middleware->web(append: [//         \App\Http\Middleware\HandleInertiaRequests::class,
            \App\Http\Middleware\HandleInertiaRequests::class,//         \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,//     ]);
        ]);// })
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Konfigurasi agar response JSON otomatis untuk request API atau yang meminta JSON
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();