<?php

use App\Http\Controllers\Admin\CreationController;
use App\Http\Controllers\Admin\HistoriController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\GaleryController;
use App\Http\Controllers\Frontend\HistoriController as FrontendHistoriController;
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
Route::get('/about', [AboutController::class, 'show'])->name('about');
Route::get('/galery', [GaleryController::class, 'show'])->name('galery');
Route::get('/history', [FrontendHistoriController::class, 'show'])->name('sejarah');

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
Route::get('karya/tambah/{id}', [CreationController::class, 'edit'])->name('edit-karya');
Route::put('karya/tambah/{id}', [CreationController::class, 'update'])->name('update-karya');
Route::delete('karya/tambah/{id}', [CreationController::class, 'destroy'])->name('destroy-karya');


// route hitorty
Route::get('sejarah', [HistoriController::class, 'show'])->name('show-history');
Route::post('sejarah', [HistoriController::class, 'store'])->name('store-history');
Route::get('sejarah/tambah', [HistoriController::class, 'create'])->name('create-history');
Route::get('sejarah/tambah/{id}', [HistoriController::class, 'edit'])->name('edit-history');
Route::put('sejarah/tambah/{id}', [HistoriController::class, 'update'])->name('update-history');
Route::delete('sejarah/tambah/{id}', [HistoriController::class, 'destroy'])->name('destroy-history');
