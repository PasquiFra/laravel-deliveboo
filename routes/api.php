<?php

use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\CategoryRestaurantController;
use App\Http\Controllers\Api\Orders\OrderController;
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

//Rotta per il singolo ristorante
Route::get('/restaurants/{slug}', [RestaurantController::class, 'show']);
//Rotta per tutti i ristoranti
Route::get('/restaurants', [RestaurantController::class, 'index']);
//Rotta per il piatto
Route::get('/restaurants/{restaurantSlug}/dishes/{dishSlug}', [RestaurantController::class, 'showDish']);
//Rotta per i ristoranti appartenenti ad una categoria
Route::get('categories/{slug}/restaurants', CategoryRestaurantController::class);


//Rotte della Orders API

Route::get('orders/generate', [OrderController::class, 'generate']);
Route::post('orders/make/payment', [OrderController::class, 'makePayment']);
