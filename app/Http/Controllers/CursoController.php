<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Al metodo encargado de mostrar la pagina principal se le suele llamar index
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();

         return view('cursos.index', compact('cursos')) ;
    }

    //create para una extension del main como un curso o wth
    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){


        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        // $curso = Curso::create([
        //     'name' => $request->name,
        //     'descripcion'=> $request->descripcion,
        //     'categoria'=> $request->categoria
        // ]);

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
        
    }

    //show se usa para un curso o metodo el particular
    public function show(Curso $curso){

        
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));


    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required|unique:cursos,slug,'.$curso->id,
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);



        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria; 

        // $curso->save();
        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    // public function show2($curso,$categoria = null){
    //     return view('cursos.show2',['curso' => $curso,'categoria'=>$categoria]);
    // }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }


}
