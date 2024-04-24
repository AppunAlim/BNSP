<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\DaftarController;
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
// Auth::routes();




Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar');
Route::post('/daftar', [DaftarController::class, 'create'])->name('beasiswa.create');
Route::get('/daftar/hasil/{id}', [HasilController::class, 'index'])->name('hasil');
Route::get('/daftar/hasil', [HasilController::class, 'show'])->name('pendaftar');
Route::get('/', [BeasiswaController::class, 'index'])->name('beasiswa');
Route::get('/beasiswa/akademik', [BeasiswaController::class, 'akademik'])->name('akademik');
Route::get('/beasiswa/nonakademik', [BeasiswaController::class, 'nonAkademik'])->name('nonAkademik');

