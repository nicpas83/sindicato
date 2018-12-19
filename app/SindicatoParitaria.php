<?php

namespace App;

class SindicatoParitaria extends AppModel {

    protected $table = "sindicatos_paritarias";
    protected $fillable = [
        'sindicato_id',
        'rubro',
        'fecha',
        'detalle',
        
    ];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

}

