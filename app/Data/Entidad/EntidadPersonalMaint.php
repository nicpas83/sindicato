<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class EntidadPersonalMaint extends AbstractData {

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
                            'name' => 'firstname',
                            'label' => 'Nombre',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'lastname',
                            'label' => 'Apellido',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'email',
                            'label' => 'Email',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'active',
                            'label' => 'Activo',
                            'presentation' => 'active',
                            'isvisible' => false,
                            'cols' => 2,
                        ),
                        4 => 
                        array (
                            'name' => 'password',
                            'label' => 'Contraseña',
                            'presentation' => 'PASSWORD',
                            'actions' => 'A|E',
                            'note' => 'Se mantiene la actual si se deja vacío.',
                            'cols' => 6,
                        ),
                        5 => 
                        array (
                            'name' => 'password_confirmation',
                            'label' => 'Confirme Contraseña',
                            'presentation' => 'PASSWORD',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                    ),
                ),
            ),
            'id' => 'user',
            'label' => 'Usuario',
        ),
    ),
);

}
