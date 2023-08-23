<?php

use App\Http\Controllers\HomeController;
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

Route::view('/', 'dashboard')->name('dashboard');
Route::group(['controller' => HomeController::class], function () {

    Route::get('/users', 'users')->name('users');
    Route::get('/alert', 'alert')->name('alert');
    Route::get('/table', 'table')->name('table');
    Route::get('/rows', 'rows')->name('rows');
    Route::get('/include', 'include')->name('include');
});

Route::view('/authenticated', 'authenticated')->name('authenticated');
Route::view('/layout', 'layout')->name('layout');
require __DIR__ . '/auth.php';
