<?php

use App\Http\Controllers\dashboardController;
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

Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/about', [dashboardController::class, 'about']);
Route::get('/profile/kampus', [dashboardController::class, 'kampus'])->name('kampus');
