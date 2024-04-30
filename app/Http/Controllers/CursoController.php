<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Al metodo encargado de mostrar la pagina principal se le suele llamar index
    public function index(){
        return view('cursos.index') ;
    }

    //create para una extension del main como un curso o wth
    public function create(){
        return view('cursos.create');
    }

    //show se usa para un curso o metodo el particular
    public function show($curso){
        return view('cursos.show', compact('curso'));
    }

    public function show2($curso,$categoria = null){
        return view('cursos.show2',['curso' => $curso,'categoria'=>$categoria]);
    }


}
