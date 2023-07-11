<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranMahasiswaController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [PendaftaranMahasiswaController::class, 'welcome'])->name('home');

Route::get('/login_admin', [PendaftaranMahasiswaController::class, 'admin'])->name('direct_admin');

Route::resource('pmb', PendaftaranMahasiswaController::class);
Route::post('login', [AuthController::class, 'loginProcess'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [PendaftaranMahasiswaController::class, 'index'])->name('direct_dashboard');
Route::post('/dashboard', [PendaftaranMahasiswaController::class, 'filter'])->name('search');