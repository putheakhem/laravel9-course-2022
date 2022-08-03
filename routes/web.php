<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('contact', function() {
    return view('contact');
});

Route::get('service', function(){
    return view('service');
});

Route::get('service', ServiceController::class);

//Route::get('/posts', [PostController::class, 'index']);
//Route::get('/posts/create', [PostController::class, 'create']);
//Route::post('/posts/store', [PostController::class, 'store']);

Route::resource('posts', PostController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
