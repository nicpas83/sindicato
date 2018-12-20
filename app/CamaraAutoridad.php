<?php

namespace App;

class CamaraAutoridad extends AppModel {

    protected $table = "camaras_autoridades";
    protected $fillable = ['nombre', 'apellido', 'cargo'];

    public function camara() {
        return $this->belongsTo('App\Camara');
    }

}
