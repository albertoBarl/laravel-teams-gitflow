<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MoviesController as MoviesController;
use App\Http\Controllers\Admin\PagesController as PagesController;
use App\Http\Controllers\Admin\ActorController as ActorController;

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

Route::get('/', function () {
    return view('homepage');
});

Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('dashboard');
    Route::resource('/movies', MoviesController::class)->parameters(['movies' => 'movie:id']);
    Route::resource('/actors', ActorController::class)->parameters(['actors'=>'actor:slug']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
