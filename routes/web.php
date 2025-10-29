<?php

use Illuminate\Support\Facades\Route;
use App\Models\PortfolioFactory;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index']);

Route::get('/about', [FrontController::class, 'about']);

Route::get('/PortoDummy', [FrontController::class, 'dummySave']); 

Route::get('/PortoDummyUpdate/{id}', [FrontController::class, 'dummyUpdate']);

Route::get('/PortoDummyDelete/{id}', [FrontController::class, 'dummyDelete']);

Route::get('/portofolio', [FrontController::class, 'portofolio']);