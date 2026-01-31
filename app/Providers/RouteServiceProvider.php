<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Web routes
        if (file_exists(base_path('routes/web.php'))) {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        }

        // API routes
        if (file_exists(base_path('routes/api.php'))) {
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        }
    }
}
