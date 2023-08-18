<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;
    protected $table = "actividades";
    protected $fillable = [
        'numero',
        'nombre',
        'curso_id',
        'tema_id',
        'tipo_actividad_id',
        'formato_archivo_id',
        'nombre_recurso',
        'activo',
    ];

    public function tema()
    {
     return $this->belongsTo('App\Models\Temas');
    }

    public function tipo_actividad()
    {
     return $this->belongsTo('App\Models\TipoActividad');
    }

    public function formato_archivo()
    {
     return $this->belongsTo('App\Models\FormatoArchivo');
    }

}
