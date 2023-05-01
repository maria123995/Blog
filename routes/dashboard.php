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
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// middleware(['auth', 'isAdmin'])->

Route::prefix('dashboard')->namespace('Admin')->as('dashboard.')->group(function () {
    // Route::group(['namespace'=>'Admin', 'middleware'=>'gust:admin'], function () {
    // -> middleware('gust:admin')

    // Route::get('/', 'DashboardController@index')->name('dashboard');
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // admin
    Route::prefix('admins')->controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin');
        Route::get('/create', 'create')->name('create-admin');
        Route::post('/', 'store')->name('store-admin');
        Route::get('/{admin}', 'show')->name('show-admin');
        Route::get('/{admin}/edit', 'edit')->name('edit-admin');
        Route::put('/{admin}/update', 'update')->name('update-admin');
        Route::delete('/{admin}/delete', 'destroy')->name('delete-admin');
    });


    //user
    // Route::resource('user', 'UserController');
    Route::prefix('user')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('user');
        Route::get('/create', 'create')->name('create-user');
        Route::post('/', 'store')->name('store-user');
        Route::get('/{user}', 'show')->name('show-user');
        Route::get('/{user}/edit', 'edit')->name('edit-user');
        Route::put('/{user}/update', 'update')->name('update-user');
        Route::delete('/{user}/delete', 'destroy')->name('delete-user');
    });


        //comment
    // Route::resource('comment', 'CommentController');
    Route::prefix('comment')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name('comment');
        Route::get('/create', 'create')->name('create-comment');
        Route::post('/', 'store')->name('store-comment');
        Route::get('/{comment}', 'show')->name('show-comment');
        Route::get('/{comment}/edit', 'edit')->name('edit-comment');
        Route::put('/{comment}/update', 'update')->name('update-comment');
        Route::delete('/{comment}/delete', 'destroy')->name('delete-comment');
    });

    
});
