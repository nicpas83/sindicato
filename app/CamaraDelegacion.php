<?php

namespace App;


class CamaraDelegacion extends AppModel {

    protected $table = "camaras_delegaciones";
    protected $fillable = [
        'camara_id',
        'provincia',
        'localidad',
        'presidente',
        'telefono',
        'direccion',
        'email',
        'web',
    ];

    public function camara() {
        return $this->belongsTo('App\Camara');
    }

}
