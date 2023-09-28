<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\MascotaController;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',[InicioController::class,'login'])->name('home.login');

Route::get('/show',[InicioController::class,'show'])->name('home.show');
Route::get('/index',[CuentasController::class,'index'])->name('clientes.index');

Route::post('/clientes',[CuentasController::class,'store'])->name('clientes.store');

Route::post('clientes/login',[CuentasController::class,'login'])->name('clientes.login');
Route::get('clientes/logout',[CuentasController::class,'logout'])->name('clientes.logout');
Route::get('clientes/logout',[CuentasController::class,'logout'])->name('clientes.logout');
Route::get('mascota/index',[MascotaController::class,'index'])->name('clientes.mascota');
Route::post('mascota/store',[MascotaController::class,'store'])->name('mascota.store');




