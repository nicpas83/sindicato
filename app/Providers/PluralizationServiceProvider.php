<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Doctrine\Common\Inflector\Inflector;

class PluralizationServiceProvider extends ServiceProvider
{
    public function register()
    {
        Inflector::rules('plural', [
            'irregular' => [
                'mutual' => 'mutuales',
                'sindicato_estatuto' => 'sindicatos_estatutos',
                'sindicato_mutual' => 'sindicatos_mutuales',
                'sindicato_adhesion' => 'sindicatos_adhesiones',
            ],
        ]);
        Inflector::rules('singular', [
            'irregular' => [
                'mutuales' => 'mutual',
                'sindicatos_estatutos' => 'sindicato_estatuto',
                'sindicatos_mutuales' => 'sindicato_mutual',
                'sindicatos_adhesiones' => 'sindicatoa_dhesion',
            ],
        ]);
    }
}
