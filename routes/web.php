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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin',], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', IndexController::class)->name('admin.main.index');
    });
    Route::group(['namespace' => 'News', 'prefix' => 'news'], function () {
        Route::get('/', IndexController::class)->name('admin.news.index');
        Route::get('/create', CreateController::class)->name('admin.news.create');
        Route::post('/', StoreController::class)->name('admin.news.store');
        Route::get('/{news}', ShowController::class)->name('admin.news.show');
        Route::get('/{news}/edit', EditController::class)->name('admin.news.edit');
        Route::patch('/{news}/edit', UpdateController::class)->name('admin.news.update');
        Route::delete('/{news}', DeleteController::class)->name('admin.news.delete');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', IndexController::class)->name('admin.user.index');
        Route::get('/create', CreateController::class)->name('admin.user.create');
        Route::post('/', StoreController::class)->name('admin.user.store');
        Route::get('/{user}', ShowController::class)->name('admin.user.show');
        Route::get('/{user}/edit', EditController::class)->name('admin.user.edit');
        Route::patch('/{user}/edit', UpdateController::class)->name('admin.user.update');
        Route::delete('/{user}', DeleteController::class)->name('admin.user.delete');
    });
    Route::group(['namespace' => 'Expenditure', 'prefix' => 'expenditures'], function () {
        Route::get('/', IndexController::class)->name('admin.expenditure.index');
        Route::get('/create', CreateController::class)->name('admin.expenditure.create');
        Route::post('/', StoreController::class)->name('admin.expenditure.store');
        Route::get('/{expenditure}', ShowController::class)->name('admin.expenditure.show');
        Route::get('/{expenditure}/edit', EditController::class)->name('admin.expenditure.edit');
        Route::patch('/{expenditure}/edit', UpdateController::class)->name('admin.expenditure.update');
        Route::delete('/{expenditure}', DeleteController::class)->name('admin.user.delete');
    });
});
