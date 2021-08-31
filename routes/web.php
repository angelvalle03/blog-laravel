<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomerController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', HomerController::class)->name('home');

// Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.create');
// //no importa si hay dos rutas con el mismo nombre siemrpe y mcuando el metodo de envio (get, post) sean diferente y se le indique en la vista
// Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

// Route::get("cursos/{id}", [CursoController::class, 'show'])->name('cursos.show');
// Route::get("cursos/{curso}/edit", [CursoController::class, 'edit'])->name('cursos.edit');

// Route::put("cursos/{curso}", [CursoController::class, 'update'])->name('cursos.update');


// Route::delete('cusos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

/****DEFINIENDO LAS RUTAS CON ROUTE RESOURCE */
Route::resource('cursos', CursoController::class);

//modificando la url
//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::view('nosotros', 'nosotros')->name('nosotros');


Route::get('contactanos', function () {
    $correo = new ContactanosMailable;
    Mail::to('angelvalle172@gmail.com')->send($correo);
    return "Mensaje enviado con exito!!";
});
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



