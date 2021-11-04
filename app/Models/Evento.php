<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model{
    protected $fillable=[
        'nombre',
        'descripcion',
        'activo',
        'fecha_inicio',
        'fecha_fin'
    ];
    public function acreditados(){
        return $this->belongsToMany(Persona::class,'eventos_personas')->withTimestamps();
    }
}