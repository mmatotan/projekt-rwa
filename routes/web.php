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
});

Route::get('/kontakt', function() {
    return view('kontakt');
});

Route::get('/novosti', [NewsController::class, 'show']);

Route::get('/novosti/create', [NewsController::class, 'showCreate']);

Route::post('/novosti/create', [NewsController::class, 'create']);

Route::get('/novosti/{slug}', [NewsController::class, 'showSpecific']);

Route::get('/jela', [MealsController::class, 'show']);

Route::get('/jela/create', [MealsController::class, 'showCreate']);

Route::post('/jela/create', [MealsController::class, 'create']);

Route::get('/jela/{slug}', [MealsController::class, 'showSpecific']);

