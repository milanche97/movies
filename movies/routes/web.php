<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

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

Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('single-post');

Route::get('/create', [MoviesController::class, 'create']);
Route::post('/movies', [MoviesController::class, 'store']);

// Route::get('/movies/{id}/comments', [MoviesController::class , 'show']);
Route::post('/comments/add/{id}', [CommentController::class, 'store']);



// Route::get('/movies/create', [MoviesController::class, 'create']);
// Route::post('/movies', [MoviesController::class, 'store']);
