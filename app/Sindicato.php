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
        'empleador_tipo',
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
        'dn_designante',
        'dn_nombre',
        'dn_cuit',
        'dn_nro_doc',
        'dn_sexo',
        'dn_fecha_nac',
        'dn_fecha_venc',
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

    public function sindicatosautoridades() {
        return $this->hasMany('App\SindicatoAutoridad');
    }

    public function sindicatosfiliales() {
        return $this->hasMany('App\SindicatoFilial');
    }

    public function sindicatosprestaciones() {
        return $this->hasMany('App\SindicatoPrestacion');
    }

    public function sindicatosbeneficios() {
        return $this->hasMany('App\SindicatoBeneficio');
    }
    
    public function sindicatosparitarias() {
        return $this->hasMany('App\SindicatoParitaria');
    }

}
