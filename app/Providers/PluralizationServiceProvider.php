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
            ]
        ]);
        Inflector::rules('singular', [
        ]);
    }
}
