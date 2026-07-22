<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Artisan;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return 'Cleared!';
});
//auto save option 
Route::get('/migrate', function () {
    return Artisan::call('migrate', ['--force' => true]);
});


