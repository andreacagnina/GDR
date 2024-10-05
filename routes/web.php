<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController as CharacterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ItemController;
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
Route::get('/characters/barbarian', [BarbarianController::class, 'index'])->name('characters.barbarian');
Route::get('/characters/bard', [BardController::class, 'index'])->name('characters.bard');
Route::get('/characters/cleric', [ClericController::class, 'index'])->name('characters.cleric');
Route::get('/characters/druid', [DruidController::class, 'index'])->name('characters.druid');
Route::get('/characters/fighter', [FighterController::class, 'index'])->name('characters.fighter');
Route::get('/characters/monk', [MonkController::class, 'index'])->name('characters.monk');
Route::get('/characters/paladin', [PaladinController::class, 'index'])->name('characters.paladin');
Route::get('/characters/ranger', [RangerController::class, 'index'])->name('characters.ranger');
Route::get('/characters/rogue', [RogueController::class, 'index'])->name('characters.rogue');
Route::get('/characters/sorcerer', [SorcererController::class, 'index'])->name('characters.sorcerer');
Route::get('/characters/warlock', [WarlockController::class, 'index'])->name('characters.warlock');
Route::get('/characters/wizard', [WizardController::class, 'index'])->name('characters.wizard');
Route::resource('characters', CharacterController::class);
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/{character}/edit', [CharacterController::class, 'edit'])->name('edit');
Route::get('/items', [ItemController::class, 'index'])->name('items');
