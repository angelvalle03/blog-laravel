<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomerController extends Controller
{
    // se utiliza __invoke cuando solo se devuelve un metodo o vista
    public function __invoke(){
        return view('home');
    }
    
}
