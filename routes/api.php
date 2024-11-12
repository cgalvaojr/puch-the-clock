<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PlatformController;


Route::prefix('v1')->group(function () {
    Route::post('/platform', [PlatformController::class, 'store']);
});
