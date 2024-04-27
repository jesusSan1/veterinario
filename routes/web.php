<?php

use App\Http\Controllers\AnimalsController;
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

Route::get('/', [AnimalsController::class, 'index'])->name('/');

Route::post('/create', [AnimalsController::class, 'create'])->name('principal.create');

Route::get('/destroy/{id}', [AnimalsController::class, 'destroy'])->name('principal.destroy');

Route::get('/show/{id}', [AnimalsController::class, 'show'])->name('principal.show');

Route::post('/update/{id}', [AnimalsController::class, 'update'])->name('principal.update');