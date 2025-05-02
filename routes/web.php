<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\CursoController;



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

Route::get('/', HomeController::class);
    


Route::get('cursos', CursoController);

Route::get('cursos',[CursoController::class, 'index']);
Route::get('cursos/create',[CursoController::class, 'create']);
Route::get('cursos/{curso}',[CursoController::class, 'show']);


//GRUPOS DE RUTAS EN LARAVEL
//Route::controller(CursoController::class)->group(function () {
    //Route::get('cursos', 'index');
    //Route::get('cursos/create', 'create');
  //  Route::get('cursos/{curso}', 'show');
//});




Route::get('/', function () {
    return ('Bienvendido a la pagina principal');
});


Route::get('/cursos', function () {
    return ('Bienvenido a la pagina de cursos');
});


//Ruta para formulario de nuevo registro

Route::get('/cursos/create', function () {
    return ('Bienvenido a la pagina de crear nuevo cursos');
});

// Es necesario que este tipo de ruta se trabaja con variables

Route::get('/cursos/{curso}', function ($curso) {
    return ('Bienvenido a la pagina del curso: ' . $curso);
});


Route::get('/cursos/{curso}/{categoria}', function ($curso, $categoria = null) {
    
    if ($categoria) {
        return ('Bienvenido al curso: ' . $curso . ' de la categoria: ' . $categoria);
    } else {
        return ('Bienvenido al curso: ' . $curso);
    }

});