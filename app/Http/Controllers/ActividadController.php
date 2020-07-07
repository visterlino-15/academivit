<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Curso;
class ActividadController extends Controller
{
    public function index()
    {
    	$actividads = Actividad::all();

        return view('admin.actividad.index', compact('actividads'));
    }

    public function create()
    {
        return view('admin.actividad.create');
    }

     public function store(Request $request)
    {
       
        $request->validate([

            'name' => 'required',
            

        ]);
        $actividad = Actividad::create($request->all());
        return redirect()->route('actividad.index')->with('status_success','registrado satisfactoriamente.');
    }

    public function show($id)
    {
        
        $actividad = Actividad::find($id);

        return view('admin.actividad.show',compact('actividad'));
    }

}
