<?php

use Illuminate\Support\Facades\Route;
//Primero se invoca la clase con su ruta
use App\Http\Controllers\MiControlador;
use App\Http\Controllers\HeladeriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;

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
    return view('cursos.bienvenido');
});

Route::get('/cursos/sobrenosotros', function () {
    return view('cursos.sobrenosotros');
});

Route::get('minombre/{nombre}', function($nombre) {
    return 'Hola soy: ' . $nombre;
});
// los parametros van entre llaves
Route::get('suma/{a}/{b}', function($a, $b) {
    $sum = $a + $b;
    return 'La suma de a + b es: ' . $sum;
});
// menciono la clase y el método como un array
//debo usar la palabra reservada class, el método va entre comilla simple
Route::get('/rutamulti/{a}/{b}',[MiControlador::class,'multipli']);
Route::get('/heladeria/{a}', [HeladeriaController::class,'totalHelado']);
Route::resource('cursos', CursoController::class);
Route::resource('docente', DocenteController::class);
Route::resource('estudiantes',EstudianteController::class);



