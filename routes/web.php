<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConnectionController;

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
Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('connection')->name('connection.')->group(function(){
    Route::get('/', [ConnectionController::class, 'index'])->name('index');
    Route::post('/store', [ConnectionController::class, 'store'])->name('store');
    Route::get('/connection-tracker', [ConnectionController::class, 'getConnectionTracker'])->name('connection-tracker');
});
