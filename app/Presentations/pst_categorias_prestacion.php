<?php

namespace App\Presentations;

use Eideos\Framework\Presentations\pst_selectarray;

class pst_categorias_prestacion extends pst_selectarray {

    protected $values = [
        'Capacitación' => 'Capacitación',
        'Turismo y Recreación' => 'Turismo y Recreación',
        'Oficios' => 'Oficios',
        'Asesoramiento' => 'Asesoramiento',
        'Otro' => 'Otro',
    ];

}
