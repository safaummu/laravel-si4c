<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('fakultas', FakultasController::class);
Route::resource('Periode', PeriodeController::class);
Route::resource('/berita', BeritaController::class);
Route::get('/prodi', [ProdiController::class, 'index']);
