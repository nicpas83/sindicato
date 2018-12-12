<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ["id" => 1, 'firstname' => "Test", 'lastname' => "Eideos", 'email' => 'test@eideos.com', 'password' => bcrypt('1234'), 'active' => 1],
        ]);
        $this->command->info('Users table seeded!');
    }
}
