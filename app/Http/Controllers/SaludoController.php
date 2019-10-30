<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludo(){
    	return view('saludo');
    }
    public function saludo2($nombre){
    	return view('saludo2',['nombre'=>$nombre]);
    }
    public function saludo3(){
    	return view('saludo3',['nombre'=>$nombre,'color'=>$color]);
    }
}
