<?php

namespace App\Presentations;

use Eideos\Framework\Presentations\pst_selectarray;

class pst_sexo extends pst_selectarray {

    protected $values = [
        'M' => "Masculino",
        'F' => "Femenino",
    ];

}
