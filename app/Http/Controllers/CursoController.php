<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    ///Metodo para mostrar pagina principal del controlador 
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }
    ///Metodo para mostrar el formulario para crear algo  
    public function create(){
        return view('cursos.create');
    }

    //metodo encargado de actualizar un regirtro con nueva informacion
    //creando el objeto request permite recuperar todo lo que se envio desde el formulario 
    public function store(Request $request){
        $curso = new Curso;
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        //De esta forma le pedimos al controlador que redireccione a una pagina en especifico
        //Laravel entiendo que al pasarle la variable curso tiene que llamar la proiedad id
        return redirect()->route('cursos.show',$curso);
        
    }

    ///Metodo para mostrar un curso o algo en particular
    public function show($id){
        //de esta forma recibe el id y todo las propiedades asociadas como nombre imagen etc.
        $curso = Curso::find($id);
        //mandando la variable a la vista
        return view('cursos.show', compact('curso'));
    }

    //este metodo permite la gestion de editar un registro
    //en este metodo se crea una nueva forma de recuperar todas las propiedades del objeto curso
    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    //Este metodo permite como tal editar el registro y mandarlo a la base de datos
    public function update(Request $request, Curso $curso){
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show',$curso);
    }
}
