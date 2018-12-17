<?php

namespace App;

class SindicatoEstatuto extends AppModel {

    protected $table = "sindicatos_estatutos";
    
    protected $fillable = [
        'sindicato_id',
        'resolucion',
        'fecha',
        'tipo',
        'publicacion',
        'actualizacion',
    ];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

}
