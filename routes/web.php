<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\SzavakController;
use Illuminate\Support\Facades\Route;

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
// SzavakController routes
Route::get('/api/szavak', [SzavakController::class, 'index']);
Route::get('/api/szavak/new', [SzavakController::class, 'newview']);
Route::get('/api/szavak/edit/{id}', [SzavakController::class, 'editview']);
Route::get('/api/szavak/list', [SzavakController::class, 'listview']);
Route::delete('/api/szavak/delete/{id}', [SzavakController::class, 'destroy']);
Route::get('/api/szavak/{id}/delete', [SzavakController::class, 'deleteView'])->name('szavak.delete');
Route::get('/api/szavak/{id}', [SzavakController::class, 'show']); 
Route::post('/api/szavak', [SzavakController::class, 'store']);
Route::put('/api/szavak/{id}', [SzavakController::class, 'update']); 
Route::get('/api/szavak/list/{kivalasztottId}', [SzavakController::class, 'listKategoria']);




// KategoriaController routes
Route::get('/api/kategoriak', [KategoriaController::class, 'index']);
Route::get('/api/kategoria/new', [KategoriaController::class, 'newview']);
Route::get('/api/kategoria/edit/{id}', [KategoriaController::class, 'editview']);
Route::get('/api/kategoria/list', [KategoriaController::class, 'listview']);
Route::delete('/api/kategoria/delete/{id}', [KategoriaController::class, 'destroy']);
Route::get('/api/kategoria/{id}', [KategoriaController::class, 'show']);
Route::get('/api/kategoria', [KategoriaController::class, 'index']);

