<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Office\AuthController;
use App\Http\Controllers\Office\DashboardController;
use App\Http\Controllers\Office\Sppd\SubController;

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

Route::get('/', [AuthController::class, 'index'])->name('auth');
Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::get('/subsppd', [SubController::class, 'index'])->name('subsppd');