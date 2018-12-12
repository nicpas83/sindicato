<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class BlockSL extends AbstractData {

protected $data = array (
    'title' => '',
    'info' => '',
    'warning' => '',
    'actions' => 
    array (
        0 => 
        array (
            'op' => 'D',
            'action' => 'destroy',
            'controller' => 'Block',
            'icon' => 'trash',
            'label' => 'Eliminar',
            'class' => 'btn-danger',
        ),
    ),
    'searchfields' => 
    array (
        0 => 
        array (
            'name' => 'user_id',
            'label' => 'Usuario',
            'presentation' => 'select',
            'cols' => 4,
            'model' => 'Eideos__Framework__User',
            'displayField' => 'firstname',
        ),
        1 => 
        array (
            'name' => 'model',
            'label' => 'Modelo',
            'presentation' => 'text',
            'cols' => 4,
        ),
        2 => 
        array (
            'name' => 'model_id',
            'label' => 'ID de Modelo',
            'presentation' => 'text',
            'cols' => 2,
        ),
        3 => 
        array (
            'name' => 'session_id',
            'label' => 'ID de Sesión',
            'presentation' => 'text',
            'cols' => 12,
        ),
    ),
    'listfields' => 
    array (
        0 => 
        array (
            'name' => 'id',
            'label' => 'ID',
            'presentation' => 'text',
        ),
        1 => 
        array (
            'name' => 'user__email',
            'label' => 'Usuario',
            'presentation' => 'text',
        ),
        2 => 
        array (
            'name' => 'session_id',
            'label' => 'ID de Sesión',
            'presentation' => 'text',
        ),
        3 => 
        array (
            'name' => 'model',
            'label' => 'Modelo',
            'presentation' => 'text',
        ),
        4 => 
        array (
            'name' => 'model_id',
            'label' => 'ID de Modelo',
            'presentation' => 'text',
        ),
    ),
);

}
