<?php

namespace App\Presentations;

use Eideos\Framework\Presentations\pst_selectarray;

class pst_rubros_actividad extends pst_selectarray {

    protected $values = [
        'MAESTRANZA' => 'MAESTRANZA',
        'ADMINISTRATIVO' => 'ADMINISTRATIVO',
        'CAJEROS' => 'CAJEROS',
        'AUXILIAR' => 'AUXILIAR',
        'AUXILIAR ESPECIALIZADO' => 'AUXILIAR ESPECIALIZADO',
        'VENDEDORES' => 'VENDEDORES',
    ];

}
