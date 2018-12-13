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
                            'cols' => 12,
                        ),
                        1 => 
                        array (
                            'name' => 'legajo',
                            'label' => 'Legajo',
                            'presentation' => 'text',
                            'cols' => 3,
                        ),
                        2 => 
                        array (
                            'name' => 'fecha_constitucion',
                            'label' => 'Fecha Constitución',
                            'presentation' => 'date',
                            'cols' => 3,
                        ),
                        3 => 
                        array (
                            'name' => 'telefono',
                            'label' => 'Teléfono',
                            'presentation' => 'INT',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        4 => 
                        array (
                            'name' => 'cuit',
                            'label' => 'Confirme Contraseña',
                            'presentation' => 'PASSWORD',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                    ),
                    'label' => 'Datos Principales',
                    'cols' => '8',
                ),
                1 => 
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
                        ),
                        1 => 
                        array (
                            'name' => 'estado',
                            'label' => 'Estado',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                        ),
                    ),
                    'label' => 'Estado',
                    'cols' => '4',
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
                            'presentation' => 'PASSWORD',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'domicilio_legal',
                            'label' => 'Domicilio Legal',
                            'presentation' => 'PASSWORD',
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
        'registro' => 
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
            'id' => 'registro',
            'label' => 'Registro',
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
            'id' => 'estatutos_aprobados',
            'label' => 'Más información',
        ),
    ),
);

}
