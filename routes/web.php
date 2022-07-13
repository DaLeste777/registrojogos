<?php

use App\Http\Controllers\JogosController;
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

Route::prefix('jogos')->group(function(){
    //Route::get('/home', [App\Http\Controllers\JogosController::class, 'index'])->name('home');
    //Route::get('/create', [App\Http\Controllers\JogosController::class, 'create'])->name('create');
    //Route::get('/create', [App\Http\Controllers\JogosController::class, 'create'])->name('jogos-create');
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('home/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('home/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});


Auth::routes();
Route::get('/auth/logout', 'Auth\AuthController@logout');


Route::get('/home', [App\Http\Controllers\JogosController::class, 'index'])->name('home');
Route::get('/home/create', [App\Http\Controllers\JogosController::class, 'create'])->name('create');
Route::get('/home/{id}/edit', [App\Http\Controllers\JogosController::class, 'edit'])->where('id', '[0-9]+')->name('edit');

