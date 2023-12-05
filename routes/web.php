<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\ServicioController;

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
Route::get('reserva/index',[ReservasController::class,'index'])->name('reservas.index');
Route::delete('/clientes/{cliente}',[CuentasController::class,'destroy'])->name('clientes.destroy');
Route::delete('/mascota/{mascota}',[MascotaController::class,'destroy'])->name('mascota.destroy');

Route::get('mascota/index',[MascotaController::class,'index'])->name('clientes.mascota');
Route::get('/clientes/{cliente}/edit',[CuentasController::class,'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}',[CuentasController::class,'update'])->name('clientes.update');
Route::post('/clientes',[CuentasController::class,'store'])->name('clientes.store');

Route::post('clientes/login',[CuentasController::class,'login'])->name('clientes.login');

Route::get('clientes/logout',[CuentasController::class,'logout'])->name('clientes.logout');
Route::get('admin/index',[AdminController::class,'index'])->name('administrador.index');
Route::get('admin/mostrarM',[AdminController::class,'mostrarM'])->name('admin.mostrarM');
Route::get('admin/horas',[AdminController::class,'horas'])->name('administrador.horas');
Route::post('mascota/store',[MascotaController::class,'store'])->name('mascota.store');

Route::get('reservas/show',[ReservasController::class,'show'])->name('reservas.show');
Route::post('reserva/store',[ReservasController::class,'store'])->name('reservas.store');
Route::delete('/reserva/{reservas}',[ReservasController::class,'destroy'])->name('reservas.destroy');
Route::patch('reserva/{reserva}/cambiar-estado', [ReservasController::class,'cambiarEstado'])->name('cambiarEstado');
Route::get('/mascota/{mascota}/edit',[MascotaController::class,'edit'])->name('clientes.mascotaE');
Route::put('/mascota/{mascota}',[MascotaController::class,'update'])->name('mascotas.update');
Route::get('servicio/index',[ServicioController::class,'index'])->name('servicios.index');
Route::post('servicio/store',[ServicioController::class,'store'])->name('servicios.store');
Route::get('servicio/show',[ServicioController::class,'show'])->name('servicios.show');
Route::delete('servicio/{servicio}/destroy',[ServicioController::class,'destroy'])->name('servicios.destroy');
Route::get('serivcio/{servicios}/edit',[ServicioController::class,'edit'])->name('servicios.edit');
Route::put('servicio/{servicios}',[ServicioController::class,'update'])->name('servicios.update');
Route::get('servicio/mostrarS',[ServicioController::class,'mostrarS'])->name('servicios.mostrarS');
Route::get('admin/buscarH',[AdminController::class,'buscarH'])->name('admin.buscarH');