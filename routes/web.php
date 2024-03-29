<?php

use App\Http\Controllers\Employe;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TacheController;
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

Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'admin')->group(function () {
  Route::resource('projets', ProjetController::class);
  Route::resource('taches', TacheController::class);
});

Route::match(['get', 'post'], '/inscription', [Employe::class, 'Inscription'])->name('inscription');


Route::get('/user-taches', [Employe::class, 'userTaches'])->name('usertaches');

require __DIR__ . '/auth.php';
