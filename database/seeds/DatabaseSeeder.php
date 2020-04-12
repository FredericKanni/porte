<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        $this->call(RolesTableSeeder::class);
        //role en premier car role doit exister d abaord si on veut les attacher aux utilisateurs 
        $this->call(UsersTableSeeder::class);
    }
}
