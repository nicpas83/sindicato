<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class ButtonMaint extends AbstractData {

protected $data = array (
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'data' => 
    array (
        'user' => 
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
                            'name' => 'name',
                            'label' => 'Nombre',
                            'presentation' => 'text',
                            'cols' => 9,
                        ),
                        1 => 
                        array (
                            'name' => 'active',
                            'label' => 'Activo',
                            'presentation' => 'active',
                            'cols' => 3,
                        ),
                        2 => 
                        array (
                            'name' => 'controller',
                            'label' => 'Controller',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        3 => 
                        array (
                            'name' => 'action',
                            'label' => 'Acción',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        4 => 
                        array (
                            'name' => 'color',
                            'label' => 'Color',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        5 => 
                        array (
                            'name' => 'icon',
                            'label' => 'Icono',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        6 => 
                        array (
                            'name' => 'order',
                            'label' => 'Orden',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        7 => 
                        array (
                            'name' => 'refresh',
                            'label' => 'Refresco',
                            'presentation' => 'active',
                            'cols' => 3,
                        ),
                        8 => 
                        array (
                            'name' => 'query',
                            'label' => 'Query',
                            'presentation' => 'textarea',
                            'rows' => 3,
                            'cols' => 9,
                        ),
                    ),
                    'label' => 'Botón',
                ),
            ),
            'id' => 'user',
            'label' => 'Botón',
        ),
    ),
);

}
