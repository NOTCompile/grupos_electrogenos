<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    protected $fillable = ['nombre','equipo_id'];
    
    public function equipo(){
        return $this->belongsToMany(Equipo::class);
    }

    public function lista(){
        return $this->belongsToMany(Lista::class);
    }
}
