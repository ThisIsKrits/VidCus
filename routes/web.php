<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])
            ->name('home');

Route::get('/detail/{slug}', [DetailController::class, 'index'])
            ->name('detail');
Route::post('/transaction/{id}', [TransactionController::class, 'create'])
            ->name('create')
            ->middleware(['auth','verified']);

Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
   
    ->group(function(){
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('category', CategoryController::class);
        Route::resource('detail-video', DetailVideoController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('transaction', TransactionController::class);
        Route::resource('user', UserController::class);
    });
Auth::routes();

