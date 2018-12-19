<?php

namespace App;

class SindicatoBeneficio extends AppModel {

    protected $table = "sindicatos_beneficios";
    protected $fillable = [
        'sindicato_id',
        'beneficio',
    ];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

}
