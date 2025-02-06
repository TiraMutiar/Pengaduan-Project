<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;

Route::get('/', [LoginController::class, 'index'])->name('landing');
Route::get('/dash-mas', [LoginController::class, 'dash_mas'])->name('dash');

Route::get('/akun', [LoginController::class, 'masuk'])->name('login');
Route::get('/formulir', [LoginController::class, 'form']);
Route::get('/datapengaduan', [PegawaiController::class, 'datapengaduan']);
Route::get('/datamasyarakat', [PegawaiController::class, 'datamasyarakat']);
Route::get('/datatanggapan', [PegawaiController::class, 'datamasyarakat']);
