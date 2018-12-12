<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

class RightMaint extends AbstractData {

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
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'description',
                            'label' => 'Apellido',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                    ),
                ),
                1 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'controller',
                            'label' => 'Controlador',
                            'presentation' => 'text',
                        ),
                        1 => 
                        array (
                            'name' => 'action',
                            'label' => 'Acción',
                            'presentation' => 'text',
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Permisos',
                    'popup' => true,
                    'model' => 'Permission',
                    'orderby' => 'Permission.name ASC',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'user',
            'label' => 'Derecho',
        ),
    ),
);

}
