<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class SindicatoSL extends AbstractData {

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
    ),
    'listfields' => 
    array (
        0 => 
        array (
            'name' => 'nombre',
            'label' => 'Nombre o Sindicato',
            'presentation' => 'text',
        ),
        1 => 
        array (
            'name' => 'legajo',
            'label' => 'Apellido',
            'presentation' => 'text',
        ),
        2 => 
        array (
            'name' => 'fecha_constitucion',
            'label' => 'Email',
            'presentation' => 'date',
        ),
        3 => 
        array (
            'name' => 'localidad',
            'label' => 'Activo',
            'presentation' => 'active',
        ),
        4 => 
        array (
            'name' => 'provincia',
            'label' => 'Activo',
            'presentation' => 'active',
        ),
        5 => 
        array (
            'name' => 'domicilio_real',
            'label' => 'Activo',
            'presentation' => 'active',
        ),
        6 => 
        array (
            'name' => 'telefono',
            'label' => 'Activo',
            'presentation' => 'active',
        ),
        7 => 
        array (
            'name' => 'cuit',
            'label' => 'Activo',
            'presentation' => 'active',
        ),
        8 => 
        array (
            'name' => 'grado',
            'label' => 'Activo',
            'presentation' => 'active',
        ),
        9 => 
        array (
            'name' => 'estado',
            'label' => 'Activo',
            'presentation' => 'active',
        ),
    ),
);

}
