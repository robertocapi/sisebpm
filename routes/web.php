<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('controlador','pruebacontroller@index');
Route::get('name/{nombre}','pruebacontroller@nombre');
Route::resource('impotlx','impotlxcontroller');

Route::get('prueba', function () {
    return "hola desde route";
});
Route::get('nombre/{nombre}', function ($nombre) {
    return "hola mi nombre es".$nombre;
});*/
Route::get('/', 'FrontControll@index');
/*Route::get('login', 'FrontControll@login');*/
Route::get('admin', 'FrontControll@admin');
Route::resource('usuario', 'usuariocontrol');



Route::resource('facturacion', 'facturacionController');
Route::resource('documentos', 'documentosController');
Route::resource('singin', 'singinController');
Route::resource('materias', 'materiasController');
Route::resource('carreras', 'carreracontroller');
Route::resource('conceptoPago', 'ConceptoPagosController');
Route::resource('grupos', 'gruposController');
Route::resource('ciclos', 'ciclosController');
Route::resource('planestudio', 'planEstudioController');
Route::resource('profesores', 'profesoresController');
Route::resource('interesados', 'interesadocontroller');
Route::resource('institucionesBecas', 'institucionesBecasController');
Route::resource('becas', 'becasController');
Route::resource('alumnos', 'alumnosController');
Route::resource('reinscripcion', 'reinscripcionController');
Route::resource('aperturamateria', 'aperturamateriaController');
Route::resource('asignarprofesor', 'asignarprofesorController');
Route::resource('asignarmateriagrupo', 'asignarMateriaGrupoController');
Route::resource('pagos','pagosController');
Route::resource('alumnoaGrupo','alumnoaGrupoController');
Route::resource('altaCalificaciones','altaCalificacionesController');
Route::resource('asignarBecaAlumno','asignarBecaAlumnoController');










Route::get('user/{id}', 'UserController@showProfile');


Route::get('logout', 'singinController@logout');
