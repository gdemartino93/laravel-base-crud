<?php

use App\Http\Controllers\MainController;
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


Route::get('/', [MainController::class,'home'])
        -> name('saint.home');
Route::get('/saint/single/{id}', [MainController::class,'saint']);
Route::get('/saint/delete/{id}', [MainController::class,'delete'])
        -> name('saint.delete');
Route::get('/saint/new', [MainController::class,'addNew'])
        -> name('saint.new');
