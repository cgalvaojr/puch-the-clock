<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PlatformController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example/{user}', [ExampleController::class, 'show']);
