<?php

namespace App;

class SindicatoMutual extends AppModel {

    protected $table = "sindicatos_mutuales";
    protected $fillable = ['sindicato_id', 'nombre'];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

    
}
