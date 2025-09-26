<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.welcome');
});


Route::get('/about', function () {
    return view('app.about');
});
