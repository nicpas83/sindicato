<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class AuditSL extends AbstractData {

protected $data = array (
    'title' => '',
    'info' => '',
    'warning' => '',
    'actions' => 
    array (
    ),
    'searchfields' => 
    array (
        0 => 
        array (
            'name' => 'created_at',
            'label' => 'Fecha',
            'presentation' => 'date',
            'cols' => 4,
        ),
        1 => 
        array (
            'name' => 'user_id',
            'label' => 'Usuario',
            'presentation' => 'select',
            'cols' => 4,
            'model' => 'Eideos__Framework__User',
            'displayField' => 'firstname',
        ),
        2 => 
        array (
            'name' => 'ip_address',
            'label' => 'IP',
            'presentation' => 'text',
            'cols' => 4,
        ),
        3 => 
        array (
            'name' => 'event',
            'label' => 'Evento',
            'presentation' => 'text',
            'cols' => 4,
        ),
        4 => 
        array (
            'name' => 'auditable_type',
            'label' => 'Modelo',
            'presentation' => 'text',
            'cols' => 4,
        ),
        5 => 
        array (
            'name' => 'auditable_id',
            'label' => 'Modelo ID',
            'presentation' => 'text',
            'cols' => 4,
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
            'name' => 'created_at',
            'label' => 'Usuario',
            'presentation' => 'date',
        ),
        2 => 
        array (
            'name' => 'user__email',
            'label' => 'Usuario',
            'presentation' => 'text',
        ),
        3 => 
        array (
            'name' => 'user_id',
            'label' => 'Usuario ID',
            'presentation' => 'text',
        ),
        4 => 
        array (
            'name' => 'ip_address',
            'label' => 'IP',
            'presentation' => 'text',
        ),
        5 => 
        array (
            'name' => 'event',
            'label' => 'Evento',
            'presentation' => 'text',
        ),
        6 => 
        array (
            'name' => 'auditable_type',
            'label' => 'Modelo',
            'presentation' => 'text',
        ),
        7 => 
        array (
            'name' => 'auditable_id',
            'label' => 'Modelo ID',
            'presentation' => 'text',
        ),
    ),
);

}
