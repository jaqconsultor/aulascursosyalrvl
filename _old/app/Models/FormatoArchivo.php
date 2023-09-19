<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatoArchivo extends Model
{
    use HasFactory;
    protected $table = "formato_archivo";
    protected $fillable = [
        'nombre'
    ];

    public function actividades()
    {
      return $this->hasMany('App\Models\Actividades');
    }

}
