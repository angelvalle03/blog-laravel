<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    // procesa el formulario y manda el correo electronico
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'correo'=>'required|email',
            'mensaje'=>'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('angelvalle172@gmail.com')->send($correo);
        //ene este codigo se redirecciona a la pagina index y con el with se manda un mensaje de sesion
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado con exito!!');
    }
}
