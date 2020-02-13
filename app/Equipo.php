<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function image(){
        return $this->belongsToMany(Image::class);
    }

    public function mantenimiento(){
        return $this->belongsToMany(Mantenimiento::class);
    }

}
