<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomerController;
use App\Http\Controllers\CursoController;
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

Route::get('/', HomerController::class);

route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.create');
//no importa si hay dos rutas con el mismo nombre siemrpe y mcuando el metodo de envio (get, post) sean diferente y se le indique en la vista
Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

route::get("cursos/{id}", [CursoController::class, 'show'])->name('cursos.show');
route::get("cursos/{curso}/edit", [CursoController::class, 'edit'])->name('cursos.edit');

route::put("cursos/{curso}", [CursoController::class, 'update'])->name('cursos.update');

/**Incluir dos variables por la url */
// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
//     return "Bienvenido al curso $curso de la categoria $categoria";
// });

/**Incluir dos variables donde una sera opcional */
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria){
//         return "Bienvenido al curso $curso de la categoria $categoria";
//     }else{
//         return "Bienvenido al curso $curso";
//     }
    
// });


//LLAMADA A CONTROLADORES CON LARAVEL 7
//llamada a conrolador de una sola ruta
// Route::get('/', 'HomerController');

// //llamada a controlador de varias rutas
// Route::get('/', 'HomerController@index');



