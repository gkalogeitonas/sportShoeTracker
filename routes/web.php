<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\SportShoeController;
Route::get('/', [SportShoeController::class, 'index'])->name('home');
Route::get('/sportshoes', [SportShoeController::class, 'index'])->name('sportshoes.index');
Route::match(['get', 'post'], '/add-shoe', [SportShoeController::class, 'addShoe'])->name('sportshoes.add');
Route::get('/sportshoes/{sportshoe}', [SportShoeController::class, 'show'])->name('sportshoes.show');
Route::get('/sportshoes/{sportshoe}/edit', [SportShoeController::class, 'edit'])->name('sportshoes.edit');
Route::put('/sportshoes/{sportshoe}', [SportShoeController::class, 'update'])->name('sportshoes.update');
Route::delete('/sportshoes/{sportshoe}', [SportShoeController::class, 'destroy'])->name('sportshoes.destroy');
Route::post('/sportshoes/{sportshoe}/add-kilometers', [SportShoeController::class, 'addKilometers'])->name('sportshoes.add-kilometers');
