<?php

use App\Http\Controllers\CourController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Define the route for the home page
    // When a GET request is made to the root URL '/'
    // Return the 'welcome' view
    return view('pages.home');
})->name('home');


Route::
    name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::resource('users', UserController::class)->except('show');
        Route::resource('cours', CourController::class);
        Route::resource('lessons', LessonController::class);
        Route::resource('modules', ModuleController::class);
        Route::resource('subscriptions', SubscriptionController::class);
        Route::resource('video', VideoController::class);
    });


Route::get('/login', [\App\Http\Controllers\Auth\AuthContoller::class, 'login'])->name('login');
