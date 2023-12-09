<?php

use App\Http\Controllers\CatsController;
use App\Http\Controllers\DogsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/cats', [CatsController::class, 'index']);
Route::get('/dogs', [DogsController::class, 'index']);
Route::get('/cats/detail/{id}', [CatsController::class, 'showDetail'])->name('cats.detail');
Route::get('/dogs/detail/{id}', [DogsController::class, 'showDetail'])->name('dogs.detail');








