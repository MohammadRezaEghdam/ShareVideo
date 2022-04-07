<?php

use App\Models\User;
use App\Models\Video;
use App\Jobs\ProcessVideo;
use App\Mail\VertifyEmail;
use App\Events\VideoCreated;
use App\Notifications\VideoProcessed;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CategoryVideoController;


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

Route::get('/', function () {
    return view('welcome');
});
// * Main Route
Route::get('/', [IndexController::class, 'index'])->name('index');

// * Videos Route
Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');
Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('videos.edit');
Route::post('/videos/{video}', [VideoController::class, 'update'])->name('videos.update');

// * Categories Route
Route::get('/categories/{category:slug}/videos', [CategoryVideoController::class, 'index'])->name('categories.videos.index');


// * Auth Routes 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/email', function(){
    $user = User::first();
    return Mail::to('ashkan.eghdam73@gmail.com')->send(new VertifyEmail($user));
});

// * Jobs Route

Route::get('/jobs', function(){
    ProcessVideo::dispatch();
});

// * Events Route

Route::get('/event', function(){
    $video = Video::first();
    VideoCreated::dispatch($video);
});

// * Notify Route

Route::get('/notify' , function(){
    $user = User::first();
    $user->notify(new VideoProcessed);
});