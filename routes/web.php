<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientListController;
use App\Http\Controllers\DeadListController;

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

Route::get('/client', [clientListController::class, 'index'])->name('clientList');
Route::get('/dead', [DeadListController::class, 'index'])->name('deadList');
