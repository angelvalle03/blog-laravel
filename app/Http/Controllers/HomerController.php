<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomerController extends Controller
{
    public function __invoke(){
        return view('home');
    }
    
}
