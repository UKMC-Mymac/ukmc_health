<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Artisan;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('courses', 'courses');
    Route::get('/programs/programs-detail', 'programs_detail');
    Route::get('why-us', 'why_us');
    Route::get('/campus', 'campus');
    Route::get('/about', 'about');
    Route::get('/privacy', 'privacy');
    Route::get('/cookie-policy', 'cookie_policy');
    Route::get('/accessibility', 'accessibility');
    Route::get('/safeguarding', 'safeguarding');
    Route::get('/complaints', 'complaints');
    Route::get('/equality-and-diversity', 'equality_and_diversity');
    Route::get('/contact', 'contact');
    Route::get('/register', 'register');
    Route::post('/contact/submit', [HomeController::class, 'submitForm'])->name('contact.submit');
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
