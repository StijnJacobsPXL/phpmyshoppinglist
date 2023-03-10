<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shopItemController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// show all items
Route::get('/items',[shopItemController::class, 'index']);


// show all shops
Route::get('/shops',[shopItemController::class, 'getallshops']);

Route::post('/add/shop', [shopItemController::class, 'addshopwithparams']);
Route::post('/add/item', [shopItemController::class, 'additemswithparams']);

