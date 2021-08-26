<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    ///Metodo para mostrar pagina principal del controlador 
    public function index(){
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }
    ///Metodo para mostrar el formulario para crear algo  
    public function create(){
        return view('cursos.create');
    }
    ///Metodo para mostrar un curso o algo en particular
    public function show($id){
        //de esta forma recibe el id y todo las propiedades asociadas como nombre imagen etc.
        $curso = Curso::find($id);
        //mandando la variable a la vista
        return view('cursos.show', compact('curso'));
    }
}
