<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Aula;
use App\Models\Curso;

class CursoController extends Controller
{

    public function index()
    {
        return view('admin.aula.index');
    }
    public function store(Request $request)
    {
        
        $curso               = new Curso;
        $curso->name         =    ucwords($request->nombreCurso);
        $curso->token_key    =    Str::random(8);
        $curso->save();

        $aula = Aula::find($request->aula);

        $aula->cursos()->sync([$curso->id]);

        return redirect()->route('curso.show',$curso->id);
    }
     public function create()
    {
        return view('admin.curso.create');
    }
    public function show($id)
    {
        
        $curso = Curso::find($id);

        return view('admin.curso.show',compact('curso'));
    }

}
