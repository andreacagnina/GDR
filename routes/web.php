<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController as CharacterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::resource('characters', CharacterController::class);
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/{character}/edit', [CharacterController::class, 'edit'])->name('edit');
