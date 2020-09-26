<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\ProductTypes;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;

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

//Route::resource('products', ProductController::class);

Route::get('/', [ClientController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('products', ProductController::class);
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
