<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Doctrine\Common\Inflector\Inflector;

class PluralizationServiceProvider extends ServiceProvider {

    public function register() {
        Inflector::rules('plural', [
            'irregular' => [
                'sindicatoestatuto' => 'sindicatosestatutos',
                'sindicatomutual' => 'sindicatosmutuales',
                'sindicatoadhesion' => 'sindicatosadhesiones',
                'sindicatoautoridad' => 'sindicatosautoridades',
                'sindicatofilial' => 'sindicatosfiliales',
                'sindicatoprestacion' => 'sindicatosprestaciones',
                'sindicatobeneficio' => 'sindicatosbeneficios',
                'sindicatoparitaria' => 'sindicatosparitarias',
                'camaraautoridad' => 'camarasautoridades',
                'camaradelegacion' => 'camarasdelegaciones',
                'camaraparitaria' => 'camarasparitarias',
            ],
        ]);
        Inflector::rules('singular', [
            'irregular' => [
                'sindicatosestatutos' => 'sindicatoestatuto',
                'sindicatosmutuales' => 'sindicatomutual',
                'sindicatosadhesiones' => 'sindicatoadhesion',
                'sindicatosautoridades' => 'sindicatoautoridad',
                'sindicatosfiliales' => 'sindicatofilial',
                'sindicatosprestaciones' => 'sindicatoprestacion',
                'sindicatosbeneficios' => 'sindicatobeneficio',
                'sindicatosparitarias' => 'sindicatoparitaria',
                'camarasautoridades' => 'camaraautoridad',
                'camarasdelegaciones' => 'camaradelegacion',
                'camarasparitarias' => 'camaraparitaria',
                
            ],
        ]);
    }

}
