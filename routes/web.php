<?php

use App\Http\Controllers\Admin\RestauranController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin')->group(function () {

        // Rotte Admin Restaurant CRUD
        Route::get('/restaurants/create', [RestauranController::class, 'create'])->name('restaurants.create');
        Route::get('/restaurants', [RestauranController::class, 'store'])->name('restaurants.store');
        Route::get('/restaurants/{restaurant}', [RestauranController::class, 'show'])->name('restaurants.show');
        Route::get('/restaurants/{restaurant}/edit', [RestauranController::class, 'edit'])->name('restaurants.edit');
        Route::get('/restaurants/{restaurant}', [RestauranController::class, 'update'])->name('restaurants.update');
    });
});

require __DIR__ . '/auth.php';
