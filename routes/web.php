<?php

use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainPageController::class, "index"])->middleware('auth');
Route::get('/create',[MainPageController::class, "create"])->middleware('auth');
Route::get('/profiles/{id}',[MainPageController::class, "show"])->middleware('auth');
Route::post('/thelions', [MainPageController::class, "store"])->middleware('auth');
Route::delete('/profiles/{id}',[MainPageController::class, "destroy"])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
