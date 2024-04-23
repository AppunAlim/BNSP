<?php

use App\Http\Controllers\HasilController;
use App\Http\Controllers\WelcomeController;
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




Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::post('/daftar', [WelcomeController::class, 'create'])->name('beasiswa.create');
Route::get('/daftar/hasil', [HasilController::class, 'index'])->name('hasil');
