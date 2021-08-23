<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    ///Metodo para mostrar pagina principal del controlador 
    public function index(){
        return view('cursos.index');
    }
    ///Metodo para mostrar el formulario para crear algo  
    public function create(){
        return view('cursos.create');
    }
    ///Metodo para mostrar un curso o algo en particular
    public function show($curso){
        //mandando la variable a la vista
        return view('cursos.show', ['curso'=>$curso]);
    }
}
