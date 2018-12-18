<?php

namespace App;

class SindicatoAutoridad extends AppModel {

    protected $table = "sindicatos_autoridades";
    protected $fillable = ['nombre', 'apellido', 'cargo'];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

}
