<?php

use App\Http\Controllers\Admin\CreationController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\GaleryController;
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
Route::view('/galery', 'frontend.partial.galery')->name('galery');
Route::view('/history', 'frontend.partial.history')->name('history');

Route::get('/about', [AboutController::class, 'show'])->name('about');
Route::get('/galery', [GaleryController::class, 'show'])->name('galery');

// route beckend
Route::view('/home', 'backend.layout.index');
Auth::routes();
Route::get('/admin-ceotech', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route position
Route::get('kepengurusan', [PositionController::class, 'show'])->name('show-pengurus');
Route::get('kepengurusan/tambah', [PositionController::class, 'create'])->name('create-pengurus');
Route::post('kepengurusan', [PositionController::class, 'store'])->name('store-pengurus');
Route::get('kepengurusan/tambah/{id}', [PositionController::class, 'edit'])->name('edit-pengurus');
Route::put('kepengurusan/tambah/{id}', [PositionController::class, 'update'])->name('update-pengurus');
Route::delete('kepengurusan/tambah/{id}', [PositionController::class, 'destroy'])->name('destroy-pengurus');

// route creation
Route::get('karya/tambah', [CreationController::class, 'create'])->name('tabel-karya');
Route::get('karya', [CreationController::class, 'show'])->name('tampilan-karya');
Route::post('karya', [CreationController::class, 'store'])->name('tambah-karya');
