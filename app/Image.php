<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['nombre','url','equipo_id'];
    
    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
}
