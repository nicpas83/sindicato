<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class UserMaint extends AbstractData {

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
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'lastname',
                            'label' => 'Apellido',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'email',
                            'label' => 'Email',
                            'presentation' => 'text',
                            'cols' => 10,
                        ),
                        3 => 
                        array (
                            'name' => 'active',
                            'label' => 'Activo',
                            'presentation' => 'active',
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
        'roles' => 
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
            'id' => 'roles',
            'label' => 'Roles',
        ),
    ),
);

}
