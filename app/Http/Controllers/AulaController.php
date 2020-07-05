<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Models\Aula;
class AulaController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $data['aulas'] = $user->aulas;
        return view('admin.aula.index', $data);
    }

     public function create(){
        return view('admin.aula.create');
    }

    public function store(Request $request){

        $aula                 = new Aula;
        $aula->name         = ucwords($request->nombreAula);
        $aula->save();
        
        if (!empty($request->nombreUser)) {
            $user                   = new User;
            $user->name           = ucwords($request->nombreUser);
            $user->email            = $request->email;
            $user->password         = Hash::make($request->pass);
            $user->save();
        }
        $aulas = User::find(Auth::user()->id);
        $aulas->aulas()->attach([$aula->id]);

        return redirect()->route('aula.index');
    }

    public function show(Aula $aula){

        $cursos = $aula->cursos;

        return view('admin.aula.show', compact('cursos','aula'));
    }

}
