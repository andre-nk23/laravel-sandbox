<?php

use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainPageController::class, "index"]);
Route::get('/create',[MainPageController::class, "create"]);
Route::get('/profiles/{id}',[MainPageController::class, "show"]);


