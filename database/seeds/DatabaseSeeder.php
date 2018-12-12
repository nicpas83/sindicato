<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $seeders = [
            UsersSeeder::class,
            ButtonsSeeder::class,
            AclSeeder::class,
        ];
        $this->call($seeders);
    }

}
