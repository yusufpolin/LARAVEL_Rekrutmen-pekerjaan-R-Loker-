<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;
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

Route::get('/lowongan-cetak', [LowonganController::class, 'cetak'])->name('lowongan.cetak');
Route::resource('lowongan', LowonganController::class);
Route::get('/', function () {
    return view('welcome');
});
