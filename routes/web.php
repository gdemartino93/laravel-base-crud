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

// ritorna home
Route::get('/', [MainController::class,'home'])
        -> name('saint.home');

// cerca saint per id
Route::get('/saint/single/{id}', [MainController::class,'saint']);

// dopo aver cercato il santo per id lo eliminata
Route::get('/saint/delete/{id}', [MainController::class,'delete'])
        -> name('saint.delete');

// ti porta alla rotta del form
Route::get('/saint/new', [MainController::class,'addNew'])
        -> name('saint.new');

// inserisce i dati inseriti nel form all'interno del db
Route::post('/saint/new' , [MainController::class, 'saintStore'])
        -> name('saint.store');

// cancella tutti i dati dal db
Route::get('/saint/delete', [MainController::class , 'saintDelete'])
        ->name('saint.delete');
