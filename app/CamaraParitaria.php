<?php

namespace App;

class CamaraParitaria extends AppModel {

    protected $table = "camaras_paritarias";
    protected $fillable = [
        'camara_id',
        'rubro',
        'fecha',
        'detalle',
    ];

    public function camara() {
        return $this->belongsTo('App\Camara');
    }

}
