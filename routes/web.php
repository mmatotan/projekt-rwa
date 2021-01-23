<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\WebshopController;

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
Route::get('/novosti/{slug}/edit', [NewsController::class, 'edit'])->name('novosti.edit');
Route::put('/novosti/{slug}', [NewsController::class, 'update'])->name('novosti.update');
Route::get('/novosti/{slug}/delete', [NewsController::class, 'destroy'])->name('novosti.destroy');


Route::get('/jela', [MealsController::class, 'show'])->name('jela');
Route::get('/jela/create', [MealsController::class, 'showCreate'])->name('jela.showcreate');
Route::post('/jela/create', [MealsController::class, 'create'])->name('jela.create');
Route::get('/jela/{slug}', [MealsController::class, 'showSpecific']);
Route::get('/jela/{slug}/edit', [MealsController::class, 'edit'])->name('jela.edit');
Route::put('/jela/{slug}', [MealsController::class, 'update'])->name('jela.update');
Route::get('/jela/{slug}/delete', [MealsController::class, 'destroy'])->name('jela.destroy');

Route::post('/webshop/order', [WebshopController::class, 'order'])->name('webshop.order');
Route::get('/webshop', [WebshopController::class, 'show'])->name('webshop');

Auth::routes();

Route::get('/login', function() {
    return view('auth/login');
})->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
