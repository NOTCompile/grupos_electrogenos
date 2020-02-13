<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    public function equipo(){
        return $this->belongsToMany(Equipo::class);
    }
}
