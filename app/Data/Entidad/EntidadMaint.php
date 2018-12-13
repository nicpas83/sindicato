<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class EntidadMaint extends AbstractData {

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
                            'label' => 'Nombre o Sindicato',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'tipo_actividad',
                            'label' => 'Tipo Actividad',
                            'presentation' => 'select',
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
                            'name' => 'legajo',
                            'label' => 'Legajo',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        4 => 
                        array (
                            'name' => 'fecha_constitucion',
                            'label' => 'Fecha Constitución',
                            'presentation' => 'date',
                            'cols' => 4,
                        ),
                        5 => 
                        array (
                            'name' => 'cuota_sindical',
                            'label' => 'Cuota Sindical',
                            'presentation' => 'text',
                            'actions' => 'A|E',
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
                            'name' => 'registro',
                            'label' => 'Registro',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'registro_nro',
                            'label' => 'Número',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'resolucion',
                            'label' => 'Resolución',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'resolucion_fecha',
                            'label' => 'Fecha',
                            'presentation' => 'date',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        4 => 
                        array (
                            'name' => 'resolucion_tipo',
                            'label' => 'Resolución Tipo',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        5 => 
                        array (
                            'name' => 'boletin_oficial',
                            'label' => 'Boletín Oficial',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                    ),
                    'label' => 'Registo',
                ),
                2 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'grado',
                            'label' => 'Grado',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'estado',
                            'label' => 'Estado',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'conciliaciones',
                            'label' => 'Conciliaciones',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        3 => 
                        array (
                            'name' => 'legalizacion',
                            'label' => 'Legalizacion',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                    ),
                    'label' => 'Estado',
                ),
            ),
            'id' => 'institucional',
            'label' => 'Institucional',
        ),
        'general' => 
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
                    'label' => 'General',
                ),
                1 => 
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
                    ),
                    'label' => 'Ubicación',
                ),
            ),
            'id' => 'general',
            'label' => 'Contacto',
        ),
        'salud' => 
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
                            'name' => 'obra_social',
                            'label' => 'Obra Social',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 12,
                        ),
                    ),
                    'label' => 'Obra Social',
                ),
                1 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'id',
                            'label' => 'Nombre',
                            'presentation' => 'select',
                            'model' => 'App__Mutual',
                            'displayField' => 'nombre',
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Mutuales',
                    'popup' => true,
                    'model' => 'Mutual',
                    'orderby' => 'Mutual.name ASC',
                    'assoc' => true,
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'salud',
            'label' => 'Salud',
        ),
        'estatutos_aprobados' => 
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
                            'name' => 'resolucion',
                            'label' => 'Rol',
                            'presentation' => 'text',
                        ),
                        1 => 
                        array (
                            'name' => 'fecha',
                            'label' => 'Rol',
                            'presentation' => 'date',
                        ),
                        2 => 
                        array (
                            'name' => 'tipo',
                            'label' => 'Rol',
                            'presentation' => 'select',
                        ),
                        3 => 
                        array (
                            'name' => 'publicacion',
                            'label' => 'Publicación B.O.',
                            'presentation' => 'date',
                        ),
                        4 => 
                        array (
                            'name' => 'actualizacion',
                            'label' => 'Actualizacion',
                            'presentation' => 'select',
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Estatutos',
                    'popup' => true,
                    'model' => 'Estatuto',
                    'orderby' => 'Estatuto.fecha DESC',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'estatutos_aprobados',
            'label' => 'Estatutos Aprobados',
        ),
        'in' => 
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
                            'name' => 'id',
                            'label' => 'Rol',
                            'presentation' => 'select',
                            'model' => 'Eideos__Framework__Role',
                            'displayField' => 'name',
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Roles',
                    'popup' => true,
                    'model' => 'Role',
                    'orderby' => 'Role.name ASC',
                    'assoc' => true,
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'in',
            'label' => 'Más información',
        ),
    ),
);

}