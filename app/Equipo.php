<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
   protected $fillable = ['codigo','nombre','empresa','ubicacion','celular','periocidad','tipo_producto',
    'marca_motor','modelo_motor','nserie_motor','potencia_motor',
    'marca_generador','modelo_generador','nserie_generador','potencia_generador',
    'hora_inicio','hora_fin','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function image(){
        return $this->hasMany(Image::class);
    }

    public function mantenimiento(){
        return $this->hasMany(Mantenimiento::class);
    }

}
