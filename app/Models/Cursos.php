<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $table = "cursos";
    protected $fillable = [
        'numero',
        'nombre',
        'nivel',
        'subnivel',
        'area',
        'imagen',
        'objetivo',
        'user_id',
        'activo',
        ];
}
