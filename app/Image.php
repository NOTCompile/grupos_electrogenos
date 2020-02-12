<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Equipo(){
        return $this->belongsTo(Equipo::class);
    }
}
