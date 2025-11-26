<?php

use Illuminate\Support\Facades\Route;
use App\Models\PortfolioFactory;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\SessionController;


// Route::get('/', [FrontController::class, 'index']);

// Route::get('/about', [FrontController::class, 'about']);

// Route::get('/PortoDummy', [FrontController::class, 'dummySave']); 

// Route::get('/PortoDummyUpdate/{id}', [FrontController::class, 'dummyUpdate']);

// Route::get('/PortoDummyDelete/{id}', [FrontController::class, 'dummyDelete']);

// Route::get('/portofolio', [FrontController::class, 'portofolio']);

Route::get('/portofolios', [PortofolioController::class, 'index'])->name('portofolios.index');

Route::get('portofolios/create', [PortofolioController::class, 'create'])->name('portofolios.create');

Route::post('portofolios', [PortofolioController::class, 'store'])->name('portofolios.store');
Route::get('/portofolio', [FrontController::class, 'portofolio']);

Route::get('/session/set', [SessionController::class, 'index']);
Route::get('/session/get', [SessionController::class, 'getSession']);
