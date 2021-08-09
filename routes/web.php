<?php

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
    return redirect('stores');
});

Route::get('/stores', [\App\Http\Controllers\StoreController::class, 'index'])
    ->name('stores');
Route::get('/stores/create', [\App\Http\Controllers\StoreController::class, 'create'])
    ->name('stores-create');
Route::post('/stores/store', [\App\Http\Controllers\StoreController::class, 'store'])
    ->name('stores-store');
