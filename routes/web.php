<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rt', [App\Http\Controllers\RtController::class, 'index'])->name('rt');
Route::get('/warga', [App\Http\Controllers\WargaController::class, 'index'])->name('warga');
Route::get('/anggota', [App\Http\Controllers\AnggotaController::class, 'index'])->name('angggota');
