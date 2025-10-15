<?php

use Illuminate\Support\Facades\Route;
use App\Models\PortfolioFactory;

Route::get('/', function () {
    return view('app.welcome');
});


Route::get('/about', function () {
    return view('app.about');
});

Route::get('/portfolio', function (PortfolioFactory $portfolioFactory) {
    $portfolios = $portfolioFactory->create();
    return view('app.portfolio', ['portfolio' => $portfolios]);
});