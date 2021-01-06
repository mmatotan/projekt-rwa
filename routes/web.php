<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MealsController;


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

Route::get('/o-nama', function() {
    return view('o-nama');
})->name('o-nama');

Route::get('/kontakt', function() {
    return view('kontakt');
})->name('kontakt');

Route::get('/novosti', [NewsController::class, 'show'])->name('novosti');
Route::get('/novosti/create', [NewsController::class, 'showCreate'])->name('novosti.showcreate');
Route::post('/novosti/create', [NewsController::class, 'create'])->name('novosti.create');
Route::get('/novosti/{slug}', [NewsController::class, 'showSpecific']);
Route::get('/novosti/{slug}/delete', [NewsController::class, 'destroy'])->name('novosti.destroy');

Route::get('/jela', [MealsController::class, 'show'])->name('jela');
Route::get('/jela/create', [MealsController::class, 'showCreate'])->name('jela.showcreate');
Route::post('/jela/create', [MealsController::class, 'create'])->name('jelo.create');
Route::get('/jela/{slug}', [MealsController::class, 'showSpecific']);

