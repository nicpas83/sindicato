<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Doctrine\Common\Inflector\Inflector;

class PluralizationServiceProvider extends ServiceProvider {

    public function register() {
        Inflector::rules('plural', [
            'irregular' => [
                'mutual' => 'mutuales',
                'sindicatoestatuto' => 'sindicatosestatutos',
                'sindicatomutual' => 'sindicatosmutuales',
                'sindicatoadhesion' => 'sindicatosadhesiones',
                'sindicatoautoridad' => 'sindicatosautoridades',
                'sindicatofilial' => 'sindicatosfiliales',
                'sindicatoprestacion' => 'sindicatosprestaciones',
                'sindicatobeneficio' => 'sindicatosbeneficios',
                'sindicatoparitaria' => 'sindicatosparitarias',
            ],
        ]);
        Inflector::rules('singular', [
            'irregular' => [
                'mutuales' => 'mutual',
                'sindicatosestatutos' => 'sindicatoestatuto',
                'sindicatosmutuales' => 'sindicatomutual',
                'sindicatosadhesiones' => 'sindicatoadhesion',
                'sindicatosautoridades' => 'sindicatoautoridad',
                'sindicatosfiliales' => 'sindicatofilial',
                'sindicatosprestaciones' => 'sindicatoprestacion',
                'sindicatosbeneficios' => 'sindicatobeneficio',
                'sindicatosparitarias' => 'sindicatoparitaria',
            ],
        ]);
    }

}
