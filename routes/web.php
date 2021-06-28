<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartshopController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/daftarpartshop', [PartshopController::class, 'daftarpartshop'])->name('partshop');
Route::get('/inputpartshop', [PartshopController::class, 'inputpartshop']);
Route::post('/partshop/inputdatapartshop', [PartshopController::class, 'inputdatapartshop']);
