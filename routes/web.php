<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\videoController;
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
// * Main Route
Route::get('/',[indexController::class, 'index'])->name('index');


//* Videos Route

Route::get('/videos/create',[videoController::class,'create'])->name('videos.create');

Route::post('/videos',[videoController::class,'store'])->name('videos.store');

Route::get('/videos/{video}', [videoController::class,'show'])->name('videos.show');

Route::get('/videos/{video}/edit', [VideoController::class,'edit'])->name('videos.edit');

Route::post('/video/{video}',[videoController::class, 'update'])->name('videos.update');