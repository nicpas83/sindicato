<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class RoleMaint extends AbstractData {

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
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'description',
                            'label' => 'Descripción',
                            'presentation' => 'text',
                            'cols' => 8,
                        ),
                    ),
                ),
                1 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'id',
                            'label' => 'Derecho',
                            'presentation' => 'select',
                            'model' => 'Eideos__Framework__Right',
                            'displayField' => 'name',
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Derechos',
                    'popup' => true,
                    'model' => 'Right',
                    'orderby' => 'Right.name ASC',
                    'assoc' => true,
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'user',
            'label' => 'Rol',
        ),
    ),
);

}
