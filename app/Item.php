<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['nombre','estado','comentarios','ejecucion','vacio','carga','lista_id'];

    public function lista(){
        return $this->belongsToMany(Lista::class);
    }
}
