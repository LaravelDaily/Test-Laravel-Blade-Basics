<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/users', [HomeController::class, 'users'])->name('users');
Route::get('/alert', [HomeController::class, 'alert'])->name('alert');
Route::get('/table', [HomeController::class, 'table'])->name('table');
Route::get('/rows', [HomeController::class, 'rows'])->name('rows');
Route::view('/authenticated', 'authenticated')->name('authenticated');
Route::get('/include', [HomeController::class, 'include'])->name('include');
Route::view('/layout', 'layout')->name('layout');

require __DIR__.'/auth.php';
