<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = ['nombre','mantenimiento_id'];


    public function mantenimiento(){
        return $this->belongsToMany(Mantenimiento::class);
    }

    public function item(){
        return $this->belongsToMany(Item::class);
    }
}
