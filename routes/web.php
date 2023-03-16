<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/signup', 'signup')->name('signup');
    Route::get('/signin', 'signin')->name('signin');
});

Route::controller(AuthController::class)->prefix('/auth')->as('auth.')->group(function () {
    Route::post('/signup', 'signup')->name('signup'); // auth.signup
    Route::post('/signin', 'signin')->name('signin'); // auth.signin
    Route::get('/logout', 'logout')->name('logout'); // auth.logout
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

