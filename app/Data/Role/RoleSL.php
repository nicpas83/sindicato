<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

class RoleSL extends AbstractData {

protected $data = array (
    'title' => '',
    'info' => '',
    'warning' => '',
    'actions' => 
    array (
        0 => 
        array (
            'action' => 'show',
            'op' => 'V',
            'icon' => 'eye',
            'label' => 'Visualizar',
        ),
        1 => 
        array (
            'action' => 'edit',
            'op' => 'E',
            'icon' => 'edit',
            'label' => '',
        ),
        2 => 
        array (
            'action' => 'destroy',
            'op' => 'D',
            'icon' => 'trash',
            'label' => 'Eliminar',
            'post' => true,
        ),
        3 => 
        array (
            'action' => 'create',
            'op' => 'A',
            'icon' => 'plus',
            'label' => 'Agregar',
            'global' => true,
        ),
    ),
    'searchfields' => 
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
            'label' => 'Descripción',
            'presentation' => 'text',
            'cols' => 6,
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
            'name' => 'name',
            'label' => 'Nombre',
            'presentation' => 'text',
        ),
        2 => 
        array (
            'name' => 'description',
            'label' => 'Descripción',
            'presentation' => 'text',
        ),
    ),
);

}
