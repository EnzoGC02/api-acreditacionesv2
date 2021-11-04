<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model{
    use SoftDeletes;
    
    protected $fillable=[
        'dni',
        'nombre_apellido',
        'medio',
        'ISO2_pais',
        'fecha_nacimiento',
        'email',
        'numero_telefono',
        'created_at',
        'updated_at'
    ];
    // public function eventos()
    // {
    //     return $this->belongsToMany(Evento::class, 'eventos_personas')->withTimestamps();
    // }

    // public static function findByDni($dni)
    // {
    //     return Persona::where('dni', $dni)
    //     ->first();
    // }
}