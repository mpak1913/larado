<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [\App\Http\Controllers\TodoController::class,'index']);
Route::post('/', [\App\Http\Controllers\TodoController::class,'store']);
Route::patch('/{todo}', [\App\Http\Controllers\TodoController::class,'update']);
Route::delete('/{todo}', [\App\Http\Controllers\TodoController::class,'delete']);
