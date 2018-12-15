<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutual extends AppModel {

    protected $table = "mutuales";
    protected $fillable = ['nombre'];

    public function sindicato() {
        return $this->belongsTo('App\Sindicato');
    }

}
