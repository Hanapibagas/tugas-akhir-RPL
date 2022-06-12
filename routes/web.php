<?php

use Illuminate\Support\Facades\Auth;
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

// route frontend
Route::view('/', 'frontend.partial.index');
Route::view('/about', 'frontend.partial.about')->name('about');
Route::view('/galery', 'frontend.partial.galery')->name('galery');
Route::view('/history', 'frontend.partial.history')->name('history');

// route beckend
Route::view('/home', 'backend.layout.index');

Auth::routes();

Route::get('/admin-ceotech', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
