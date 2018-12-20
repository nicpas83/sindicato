<?php

namespace App;

class SindicatoPrestacion extends AppModel {

    protected $table = "sindicatos_prestaciones";
    protected $fillable = [
        'sindicato_id',
        'categoria',
        'prestacion',
    ];
    protected $rules = [
        'categoria' => 'required',
        'prestacion' => 'required',
    ];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

}

