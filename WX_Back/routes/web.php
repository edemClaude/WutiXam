<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Define the route for the home page
    // When a GET request is made to the root URL '/'
    // Return the 'welcome' view
    return view('welcome');
});

