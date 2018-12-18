<?php

namespace App;

class Sindicato extends AppModel {

    protected $fillable = [
        'nombre',
        'tipo_actividad',
        'cuit',
        'legajo',
        'fecha_constitucion',
        'cuota_sindical',
        'registro',
        'registro_nro',
        'resolucion',
        'resolucion_fecha',
        'resolucion_tipo',
        'boletin_oficial',
        'grado',
        'estado',
        'conciliaciones',
        'legalizacion',
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
        'obra_social',
    ];

    public function sindicatosestatutos() {
        return $this->hasMany('App\SindicatoEstatuto');
    }
    
    public function sindicatosmutuales() {
        return $this->hasMany('App\SindicatoMutual');
    }
    
    public function sindicatosadhesiones() {
        return $this->hasMany('App\SindicatoAdhesion');
    }

}
