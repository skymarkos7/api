<?php

use App\Http\Controllers\Core\StoreContrller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('store', [StoreContrller::class, 'index']);
Route::post('store', [StoreContrller::class, 'store']);
Route::put('store/{id}', [StoreContrller::class, 'update']);
Route::delete('store/{id}', [StoreContrller::class, 'destroy']);
