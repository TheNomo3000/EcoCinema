<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    protected $fillable = [
        'asunto','contenido','nombre','apellido','poblacion','cp',
    ];
}
