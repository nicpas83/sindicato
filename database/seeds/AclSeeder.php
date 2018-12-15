<?php

use Illuminate\Database\Seeder;

class AclSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'Administrador Sistema', 'description' => 'Rol de administrador general del sistema'],
        ]);
        DB::table('rights')->insert([
            ['id' => 1, 'name' => 'Módulo Administración Sistema', 'description' => 'Derecho que contiene todos los permisos del módulo de Administración del Sistema'],
        ]);
        DB::table('permissions')->insert([
            ['right_id' => 1, 'controller' => 'Eideos\Framework\Controllers\UserController', 'action' => '*'],
            ['right_id' => 1, 'controller' => 'Eideos\Framework\Controllers\BlockController', 'action' => '*'],
            ['right_id' => 1, 'controller' => 'Eideos\Framework\Controllers\AuditController', 'action' => '*'],
            ['right_id' => 1, 'controller' => 'Eideos\Framework\Controllers\RoleController', 'action' => '*'],
            ['right_id' => 1, 'controller' => 'Eideos\Framework\Controllers\RightController', 'action' => '*'],
            ['right_id' => 1, 'controller' => 'Eideos\Framework\Controllers\ButtonController', 'action' => '*'],
            ['right_id' => 1, 'controller' => 'App\Http\Controllers\SindicatoController', 'action' => '*'],
            ['right_id' => 1, 'controller' => 'App\Http\Controllers\MutualController', 'action' => '*'],
        ]);
        DB::table('roles_rights')->insert([
            ['role_id' => 1, 'right_id' => 1],
        ]);
        //Se agregan en CMModules
        DB::table('roles_users')->insert([
            ['role_id' => 1, 'user_id' => 1],
        ]);
        
        DB::table('mutuales')->insert([
            ['id' => 1, 'nombre' => 'ASOCIACIÓN MUTUAL DE EMPLEADOS DE COMERCIO Y SERVICIOS (A.M.E.C.Y.S.)'],
            ['id' => 2, 'nombre' => 'ASOCIACIÓN MUTUAL EMPLEADOS DE COMERCIO DE ROSARIO'],
        ]);
        
        
        $this->command->info('ACL tables seeded!');
    }
}
