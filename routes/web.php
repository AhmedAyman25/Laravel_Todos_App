<?php

use App\Http\Controllers\todosController;
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


Route::get('/',[todosController::class,'index']);
Route::get('/view/{id}',[todosController::class,'show']);
Route::get('/delete/{id}',[todosController::class,'delete'])->name('delete');
Route::get('/create-todos',[todosController::class,'create']);
Route::post('/store-todos',[todosController::class,'store']);
Route::get('update/{id}',[todosController::class,'updatePage']);
Route::post('update/{id}',[todosController::class,'update'])->name('update');
