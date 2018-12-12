<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ButtonsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('buttons')->insert([
            [
                'name' => "Procesos ARI",
                'controller' => "App\Http\Controllers\ProcesoAriController",
                'action' => "index",
                'icon' => "sync-alt",
                'order' => "10",
                'color' => "yellow",
                'active' => 1,
            ],
            [
                'name' => "Iniciativas",
                'controller' => "App\Http\Controllers\IniciativaController",
                'action' => "index",
                'icon' => "folder-plus",
                'order' => "15",
                'color' => "danger",
                'active' => 1,
            ],
            [
                'name' => "Instancias",
                'controller' => "App\Http\Controllers\InstanciaController",
                'action' => "index",
                'icon' => "file-import",
                'order' => "20",
                'color' => "purple",
                'active' => 1,
            ],
            [
                'name' => "Postulaciones",
                'controller' => "App\Http\Controllers\PostulacionController",
                'action' => "index",
                'icon' => "share-square",
                'order' => "25",
                'color' => "pink",
                'active' => 1,
            ],
        ]);
        $this->command->info('Buttons table seeded!');
    }

}
