<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController as CharacterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FilterCharacterTypeController;
use App\Http\Controllers\BarbarianController;
use App\Http\Controllers\BardController;
use App\Http\Controllers\ClericController;
use App\Http\Controllers\DruidController;
use App\Http\Controllers\FighterController;
use App\Http\Controllers\MonkController;
use App\Http\Controllers\PaladinController;
use App\Http\Controllers\RangerController;
use App\Http\Controllers\RogueController;
use App\Http\Controllers\SorcererController;
use App\Http\Controllers\WarlockController;
use App\Http\Controllers\WizardController;
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
Route::get('/characters/type/{type}', [FilterCharacterTypeController::class, 'index'])->name('characters.indexByType');
Route::resource('characters', CharacterController::class);
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/{character}/edit', [CharacterController::class, 'edit'])->name('edit');
Route::get('/items', [ItemController::class, 'index'])->name('items');
