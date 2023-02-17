<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;

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

Route::get("roles",'App\Http\Controllers\Roles@index')->name("roles")->middleware("auth");;
Route::post("asigna_roles",'App\Http\Controllers\Roles@asigna_roles')->name("asigna_roles");
//Route::view("a","a");
Route::get('/', function () {
    return view('acceso');
})->name("main");

Route::resource('factura',FacturaController::class);
Route::resource('cliente',ClienteController::class);
Route::resource('empleado',EmpleadoController::class);
Route::resource('mnaolo',\App\Http\Controllers\ManoloController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
