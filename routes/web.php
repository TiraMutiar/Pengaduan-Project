<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'index']);
Route::get('/dash-mas', [LoginController::class, 'dash_mas']);

