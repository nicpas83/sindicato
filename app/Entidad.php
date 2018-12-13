<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends AppModel {
    
    protected $table = 'entidades';

    protected $fillable = [
        'nombre',
        'legajo',
        'fecha_constitucion',
        'localidad',
        'domicilio_real ',
        'domicilio_legal',
        'tipo_empleador',
        'cuit',
        'grado',
        'provincia',
        'telefono',
        'estado',
        'conciliaciones',
        'legalizacion',
        'registro',
        'adhesiones',
        'entidades_aderentes',
        'cuota_sindical',
        'estatutos_aprobados',
        'delegado_normalizador',
        'obra_social',
        'mutuales',
        'sitio_web',
        'email',
        'redes_sociales',
        'convenios',
        'tipo_actividad',
    ];

}
