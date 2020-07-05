<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    public function tareas(){
    	return $this->belongsToMany('App\Models\Tarea')->withTimesTamps();
    }

    public function actividads(){
    	return $this->belongsToMany('App\Models\Actividad')->withTimesTamps();
    }
}
