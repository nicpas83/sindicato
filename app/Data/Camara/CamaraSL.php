<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class CamaraSL extends AbstractData {

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
            'label' => 'Nombre',
            'presentation' => 'text',
        ),
        1 => 
        array (
            'name' => 'tipo_actividad',
            'label' => 'Actividad',
            'presentation' => 'text',
        ),
        2 => 
        array (
            'name' => 'fecha_constitucion',
            'label' => 'Fecha Constitución',
            'presentation' => 'date',
        ),
        3 => 
        array (
            'name' => 'cuit',
            'label' => 'CUIT',
            'presentation' => 'active',
        ),
        4 => 
        array (
            'name' => 'telefono',
            'label' => 'Teléfono',
            'presentation' => 'active',
        ),
        5 => 
        array (
            'name' => 'domicilio_real',
            'label' => 'Domicilio',
            'presentation' => 'active',
        ),
        6 => 
        array (
            'name' => 'localidad',
            'label' => 'Localidad',
            'presentation' => 'active',
        ),
        7 => 
        array (
            'name' => 'provincia',
            'label' => 'Provincia',
            'presentation' => 'active',
        ),
        8 => 
        array (
            'name' => 'grado',
            'label' => 'Grado',
            'presentation' => 'active',
        ),
        9 => 
        array (
            'name' => 'estado',
            'label' => 'Estado',
            'presentation' => 'active',
        ),
        10 => 
        array (
            'name' => 'q_afiliados',
            'label' => 'Afiliados',
            'presentation' => 'active',
        ),
        11 => 
        array (
            'name' => 'legajo',
            'label' => 'Legajo',
            'presentation' => 'text',
        ),
    ),
);

}
