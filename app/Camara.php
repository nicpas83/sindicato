<?php

namespace App;

class Camara extends AppModel {

    protected $fillable = [
        'nombre',
        'tipo_actividad',
        'cuit',
        'fecha_constitucion',
        'telefono',
        'email_principal',
        'email_secundario',
        'pagina_web',
        'redes_sociales',
        'otros_contactos',
        'domicilio_real',
        'domicilio_legal',
        'provincia',
        'localidad',
    ];

    public function camarasautoridades() {
        return $this->hasMany('App\CamaraAutoridad');
    }

    public function camarasdelegaciones() {
        return $this->hasMany('App\CamaraDelegacion');
    }

    public function camarasparitarias() {
        return $this->hasMany('App\CamaraParitaria');
    }

}
