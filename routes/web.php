<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
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
Route::get('/', [IndexController::class, 'index'])->name('index');

// * Videos Routers
Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');

Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');

Route::get('/videos/{video}',[VideoController::class,'show'])->name('videos.show');

Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('videos.edit');

Route::post('/video/{video}',[videoController::class, 'update'])->name('videos.update');


