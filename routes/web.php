<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminMiddleware;
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

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/signup', 'signup')->name('signup');
    Route::get('/signin', 'signin')->name('signin');
});

Route::controller(ProductController::class)->prefix('/products')->as('product.')->group(function () {
    Route::middleware(['auth', AdminMiddleware::class])->group(function () {
       Route::get('/create', 'createForm')->name('createForm');
       Route::post('/create', 'store')->name('create');
       Route::get('/{product:id}/delete', 'delete')->name('delete');
       Route::get('/{product:id}/update', 'updateForm')->name('updateForm');
       Route::post('/{product:id}/update', 'update')->name('update');
    });

    Route::get('/{product:id}', 'single')->name('single');
});

