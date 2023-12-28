<?php

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

use Modules\Movie\Http\Controllers\Admin\MovieController as AdminMovieController;
use Modules\Movie\Http\Controllers\MovieController;

Route::resource('movies', MovieController::class);

Route::middleware(['isAdmin'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('movies', AdminMovieController::class)->except(['create', 'store', 'show']);
    });
});
