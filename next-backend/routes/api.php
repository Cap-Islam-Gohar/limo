<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::name('api.')->group(function () {

    require __DIR__.'/auth.php';

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        
        
        Route::get('/user', function (Request $request) {
            return $request->user();
        });

    });
    
});

