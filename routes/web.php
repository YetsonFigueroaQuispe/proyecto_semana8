<?php

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
//CITA
Route::get('cita', 'CitaController@insertar');
Route::get('citaactualizar' , 'CitaController@actualizar');
Route::get('citaeliminar' , 'CitaController@eliminar');
Route::get('citaleer' , 'CitaController@leer');


//CITADETALLE
Route::get('citadetalle', 'CitaDetalleController@insertar');
Route::get('citadetalleactualizar' , 'CitaDetalleController@actualizar');
Route::get('citadetalleeliminar' , 'CitaDetalleController@eliminar');
Route::get('citadetalleleer' , 'CitaDetalleController@leer');

//DOCTOR
Route::get('doctor', 'DoctorController@insertar');
Route::get('doctoractualizar' , 'DoctorController@actualizar');
Route::get('doctoreliminar' , 'DoctorController@eliminar');
Route::get('doctorleer' , 'DoctorController@leer');

//PACIENTE
Route::get('paciente', 'PacienteController@insertar');
Route::get('Pacienteactualizar' , 'PacienteController@actualizar');
Route::get('pacienteeliminar' , 'PacienteController@eliminar');
Route::get('pacienteleer' , 'PacienteController@leer');


//USUARIO
Route::get('usuario', 'UsuarioController@insertar');
Route::get('usuarioactualizar' , 'UsuarioController@actualizar');
Route::get('usuarioeliminar' , 'UsuarioController@eliminar');
Route::get('usuarioleer' , 'UsuarioController@leer');
