<?php

use App\Http\Controllers\autobusesController;
use App\Http\Controllers\DepartamentosController;
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

//Route::get('/departamentos', function () {
    //return view('departamentos.index');
//});
Route::resource('/departamentos', DepartamentosController::class);

Route::get('/autobuses', [autobusesController::class, 'index']);
