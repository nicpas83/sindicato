<?php

namespace App;

class SindicatoFilial extends AppModel {

    protected $table = "sindicatos_filiales";
    protected $fillable = [
        'sindicato_id',
        'provincia',
        'localidad',
        'referente',
        'telefono',
        'direccion',
        'email',
        'web',
    ];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

}
