<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
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
    public function boot(): void
    {
        Response::macro('success', function ($data = null, $message = 'success', $statusCode = 200) {
            return response()->json([
                'success' => true,
                'data' => $data,
                'message' => $message,
            ], $statusCode);
        });

        Response::macro('failed', function ($message = 'failed', $statusCode = 500) {
            return response()->json([
                'success' => false,
                'message' => $message,
            ], $statusCode);
        });

    }
}
