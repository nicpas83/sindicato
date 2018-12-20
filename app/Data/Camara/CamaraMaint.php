<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class CamaraMaint extends AbstractData {

protected $data = array (
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'data' => 
    array (
        'institucional' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'nombre',
                            'label' => 'Nombre o Camara',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'tipo_actividad',
                            'label' => 'Tipo Actividad',
                            'presentation' => 'tipo_actividad',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'cuit',
                            'label' => 'CUIT',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'fecha_constitucion',
                            'label' => 'Fecha Constitución',
                            'presentation' => 'date',
                            'cols' => 4,
                        ),
                    ),
                    'label' => 'Datos Principales',
                ),
                1 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'telefono',
                            'label' => 'Teléfono',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'email_principal',
                            'label' => 'Email Principal',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'email_secundario',
                            'label' => 'Email Secundario',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'pagina_web',
                            'label' => 'Página WEB',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        4 => 
                        array (
                            'name' => 'redes_sociales',
                            'label' => 'Redes Sociales',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        5 => 
                        array (
                            'name' => 'otros_contactos',
                            'label' => 'Otros',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                    ),
                    'label' => 'Contacto',
                ),
                2 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'domicilio_real',
                            'label' => 'Domicilio Real',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'domicilio_legal',
                            'label' => 'Domicilio Legal',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'provincia',
                            'label' => 'Provincia',
                            'presentation' => 'provincias',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        3 => 
                        array (
                            'name' => 'localidad',
                            'label' => 'Localidad',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                    ),
                    'label' => 'Ubicación',
                ),
            ),
            'id' => 'institucional',
            'label' => 'Institucional',
        ),
        'otros_datos' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'fortalezas',
                            'label' => 'Fortalezas',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'cols' => 12,
                        ),
                        1 => 
                        array (
                            'name' => 'debilidades',
                            'label' => 'Debilidades',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'cols' => 12,
                        ),
                    ),
                    'label' => 'Fortalezas y Debilidades',
                ),
                1 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'indicador_gremial',
                            'label' => 'Indicadores',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'rows' => 3,
                            'cols' => 12,
                        ),
                    ),
                    'label' => 'Indicador de Representación Gremial',
                ),
                2 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'dia_gremio',
                            'label' => 'Día del Gremio',
                            'presentation' => 'date',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'elecciones',
                            'label' => 'Elecciones',
                            'presentation' => 'date',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'mandato_actual',
                            'label' => 'Mandato',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'cupo_femenino',
                            'label' => 'Cupo Femenino',
                            'presentation' => 'int',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                    ),
                    'label' => 'General',
                ),
            ),
            'id' => 'otros_datos',
            'label' => 'Otros datos',
        ),
        'comision' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'nombre',
                            'label' => 'Nombre',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'apellido',
                            'label' => 'Apellido',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'cargo',
                            'label' => 'Cargo',
                            'presentation' => 'cargos_sindicato',
                            'cols' => 6,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Autoridades',
                    'popup' => true,
                    'model' => 'CamaraAutoridad',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'comision',
            'label' => 'Consejo Ejecutivo',
        ),
        'delegaciones' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'provincia',
                            'label' => 'Provincia',
                            'presentation' => 'provincias',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'localidad',
                            'label' => 'Localidad',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'presidente',
                            'label' => 'Presidente',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        3 => 
                        array (
                            'name' => 'telefono',
                            'label' => 'Telefono',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        4 => 
                        array (
                            'name' => 'direccion',
                            'label' => 'Direccion',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        5 => 
                        array (
                            'name' => 'email',
                            'label' => 'Email',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        6 => 
                        array (
                            'name' => 'web',
                            'label' => 'Web',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Delegaciones',
                    'popup' => true,
                    'model' => 'CamaraDelegacion',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'delegaciones',
            'label' => 'Delegaciones',
        ),
        'paritarias' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'acuerdo_salarial',
                            'label' => 'Acuerdos Salariales',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'cols' => 12,
                        ),
                    ),
                ),
                1 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'rubro',
                            'label' => 'Rubro',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'fecha',
                            'label' => 'Fecha',
                            'presentation' => 'date',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'detalle',
                            'label' => 'Detalle',
                            'presentation' => 'text',
                            'cols' => 12,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Trayectoria de Paritarias',
                    'popup' => true,
                    'model' => 'CamaraParitaria',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'paritarias',
            'label' => 'Paritarias',
        ),
    ),
);

}
