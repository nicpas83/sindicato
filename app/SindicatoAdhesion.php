<?php

namespace App;

class SindicatoAdhesion extends AppModel {

    protected $table = "sindicatos_adhesiones";
    protected $fillable = [
        'nombre',
        'legajo',
        'grado',
        'sindicato_id',
        'mutual_id'
    ];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

}
