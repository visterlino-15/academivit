<?php

use Illuminate\Support\Facades\Route;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Actividad;
use App\Models\curso;
use App\Models\Recurso;
use App\User;

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
    return view('home');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
	//Roles
	Route::resource('role', 'RoleController');
	Route::resource('aula', 'AulaController');

	Route::resource('/user', 'UserController', ['except'=>['create','store']]);

	Route::resource('curso','cursoController');
	Route::resource('activida','ActividaController');
});
	
	Route::resource('leccion','LeccionController');
	Route::resource('nota','NotaController');
	Route::resource('participante','ParticipanteController');
	Route::resource('archivo','ArchivoController');
	Route::resource('multimedia','MultimediaController');
	Route::resource('debate','DebateController');
	Route::resource('tarea','TareaController');
	Route::resource('examen','ExamenController');

Route::get('/test', function () {
	/*
	return   Recurso::create([
        'name' => 'ing'


    ]);

    $actividad = Actividad::find(3);

    $actividad->cursos()->sync([1,2,3]);

    return $actividad->cursos;
	*/	
});
