<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cont extends Controller
{
   

    public function principal(){
        return view('principal');
    }

    public function registro(){
        return view('registro');
    }

    public function autores(){
        return view('autores');
    }
    public function Libros(){
        return view('Libros');
    }

    public function registrar(Request $req){
        
        $req->validate([
            'isbn' => 'required | min:13 | numeric',
            'titulo' => 'required' ,
            'autor' => 'required' ,
            'titulo' => 'required' ,
            'pagina' => 'required | numeric' ,
            'editorial' => 'required' ,
            'email' => 'required | email' ,

        ]);
        
        return redirect('1')->with('success',$req -> titulo);

        
    }

    public function regis(Request $req){
        
        $req->validate([
            'nombre' => 'required | min:4',
            'fecha' => 'required ' ,
            'numero' => 'required | max:4 ' 

        ]);
        
        return redirect('2')->with('success','Autor Guardado');

        
    }

}
