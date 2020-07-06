<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
	protected $fillable = [
        'name'
    ];

	public function actividads(){
    	return $this->belongsToMany('App\Models\Actividad')->withTimesTamps();
    }

    public function cursos(){
    	return $this->belongsToMany('App\Models\Curso')->withTimesTamps();
    }

    public function Recursos(){
    	return $this->belongsToMany('App\Models\Recurso')->withTimesTamps();
    }
}
