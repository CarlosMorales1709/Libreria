<?php

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


Route::get('/', function () {
    return view('welcome');
});

*/

use App\Http\Controllers\cont;
use App\Http\Controllers\controladorBD;

//CREATE
Route::get('Libros/create', [controladorBD::class,'create'])->name('Libros.create');

//store
Route::post('Libros', [controladorBD::class,'store'])->name('Libros.store');

//index
Route::get('Libros', [controladorBD::class,'index'])->name('Libros.index');

//edit
Route::get('Libros/{id}/edit', [controladorBD::class,'edit'])->name('Libros.edit');

//update
Route::put('Libros/{id}', [controladorBD::class,'update'])->name('Libros.update');

//Show/eliminar
Route::get('Libros/{id}/show', [controladorBD::class,'show'])->name('Libros.show');

//destroy/eliminar
Route::delete('Libros/{id}', [controladorBD::class,'destroy'])->name('Libros.destroy');



Route::get('/', [controladorVistas::class,'showWelcome']);
Route::get('/','App\Http\Controllers\cont@principal')->name('prin');
Route::get('1','App\Http\Controllers\cont@registro')->name('reg');



Route::get('2','App\Http\Controllers\cont@autores')->name('form');
Route::get('3','App\Http\Controllers\cont@Libros')->name('lib');

Route::post('guarda','App\Http\Controllers\cont@registrar');
Route::post('guardar','App\Http\Controllers\cont@regis');