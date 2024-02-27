<?php

use App\Http\Controllers\CatsController;
use App\Http\Controllers\DogsController;
use App\Http\Controllers\BirdController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Models\Kucing;

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


Route::get('/cats', [CatsController::class, 'index'])->name('cats.index');
Route::get('/dogs', [DogsController::class, 'index']);
Route::get('/birds', [BirdController::class, 'index']);
Route::get('/cats/detail/{id}', [CatsController::class, 'showDetail'])->name('cats.detail');
Route::get('/dogs/detail/{id}', [DogsController::class, 'showDetail'])->name('dogs.detail');
Route::get('/birds/detail/{id}', [BirdController::class, 'showDetail'])->name('birds.detail');
Route::get('/create',[CatsController::class, 'create'])->name('cats.create');
Route::post('/cats/add', [CatsController::class, 'store'])->name('cats.store');
Route::delete('/cats/delete/{id}', [CatsController::class, 'destroy'])->name('cats.destroy');
Route::get('/cats/edit/{id}', [CatsController::class, 'edit'])->name('cats.edit');
Route::put('/cats/update/{id}', [CatsController::class, 'update'])->name('cats.update');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

