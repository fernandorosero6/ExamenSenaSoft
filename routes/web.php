<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Menu2Controller;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\OrdeneController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/menu', MenuController::class);
Route::resource('/menu2', Menu2Controller::class);
Route::resource('/orden', OrdeneController::class);
Route::resource('/mesa', MesaController::class);
Route::resource('/plato', PlatoController ::class);
Route::resource('/categoria', CategoriaController ::class);
// Route::resource('/', ::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
