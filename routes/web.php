<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/', [HomeController::class, 'index'])
        ->name('home');
Route::get('/', [DetailController::class, 'index'])
        ->name('detail');

Route::prefix('admin')
    //->namespace('admin')
    //->middleware(['admin'])
    ->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');
});
