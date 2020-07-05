<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    public function cursos(){
    	return $this->belongsToMany('App\Models\Curso')->withTimesTamps();
    }

     public function Recursos(){
    	return $this->belongsToMany('App\Models\Recurso')->withTimesTamps();
    }
}
