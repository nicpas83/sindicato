<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sindicato extends AppModel {

    protected $fillable = [
        'nombre',
        'tipo_actividad',
    ];

//    public function mutuales() {
//        return $this->belongsToMany('App\Mutual', 'sindicato_mutuales', 'sindicato_id');
//    }

    public function estatutos() {
        return $this->hasMany('App\Estatuto');
    }

}
