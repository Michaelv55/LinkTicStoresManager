<?php

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->prefix('store')->group(function(){
    Route::get('/products/{store}', 'StoreController@show');
});

Route::get('/unauthenticated', function(Request $request){
    return response([
        'message' => 'Api Token no válido.',
        'code' => 401
    ], 401);
})->name('api-unauthenticated');