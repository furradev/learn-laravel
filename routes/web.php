<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\CustomController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CustomController::class)->group(function() {
    Route::get('/perkalian', 'perkalian');
    Route::get('/penjumlahan', 'penjumlahan');
    Route::get('/berita/{idBerita}', 'berita');
    Route::post('/kali', 'kali');
    Route::post('/jumlah', 'jumlah');
    Route::get('/inputmhs', 'inputmhs');
    Route::post('/tampildata', 'tampildata');
    Route::get('/inputmatkul', 'inputmatkul');
    Route::post('/tambahmatkul', 'tambahmatkul');
});

Route::controller(CRUDController::class)->group(function() {
    Route::resource('mahasiswa', CRUDController::class);
    Route::resource('create', CRUDController::class);
    Route::post('simpanstore', 'store');
});

Route::controller(DosenController::class)->group(function() {
    Route::resource('dosen', DosenController::class);
    Route::resource('create', DosenController::class);
    Route::post('simpandosen', 'store');
});