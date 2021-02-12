<?php

use App\Http\Controllers\DirectoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesoresController; //App con a mayuscula

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/holamundo', function () {
  return view ('fecha');
});
Route::get('/clase', function () {
    return "hola";
  }); */
/* Route::get('/pelicula/{titulo?}', function ($titulo = 'pagina no seleccionada') {

    return view ('pelicula', array(
        'titulo'=>$titulo
    ));
  });
 */
/* Route::get('/pelicula/{titulo}', function ($titulo = 'pagina no seleccionada') {

    return view ('pelicula', array(
        'titulo'=>$titulo
    ));
  })->where(array(
    'titulo' => '[a-zA-Z]+' //PARAMETROS OBLIGATORIOS
  )); */
  Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});
/* Route::get('/contacto', function () {
    return view('contacto');
}); */
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/diseño', function () { //solo es para vistas
    return view('diseño');
});
/* Route::get('/prueba', function () { //solo es para vistas
    return view('prueba');
}); */
Route::get('/profesores/{clave}',[ProfesoresController::class,'index'] )->name('Rafa');// inserciones a base de datos
/* Route::get('/vicente',[ProfesoresController::class,'hola'] )->name('Rafa');
 */
Route::get('contacto', [DirectoresController::class,'create']);
//PROCESAR RUTA DEL POST
Route::post('contacto',[DirectoresController::class,'store']);
//la ruta tiene que ser la misma que le pasamos por el post


