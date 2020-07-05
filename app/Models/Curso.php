<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'name','token_key'
    ];

    public function tareas(){
    	return $this->belongsToMany('App\Models\Tarea')->withTimesTamps();
    }

}
