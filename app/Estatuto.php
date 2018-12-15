<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatuto extends AppModel
{
    protected $fillable = [
        'resolucion',
        'fecha',
        'tipo',
        'publicacion',
        'actualizacion',
    ];
}
