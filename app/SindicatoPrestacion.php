<?php

namespace App;

class SindicatoPrestacion extends AppModel {

    protected $table = "sindicatos_prestaciones";
    protected $fillable = [
        'sindicato_id',
        'categoria',
        'prestacion',
        
    ];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

}

