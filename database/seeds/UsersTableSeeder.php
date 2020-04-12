<?php

use App\Role;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

      $admin=  User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);


     $auteur=   User::create([
            'name' => 'auteur',
            'email' => 'auteur@auteur.com',
            'password' => Hash::make('password'),
        ]);

       $utilisateur= User::create([
            'name' => 'admin',
            'email' => 'utilisateur@utilisateur.com',
            'password' => Hash::make('password'),
        ]);


//on recupere les valeur des roles 
$adminRole = Role::where('name','admin')->first();
$auteurRole = Role::where('name','auteur')->first();
$utilisateurRole = Role::where('name','utilisateur')->first();


        //on atache a chaque personne un role respectif
      $admin ->roles()->attach($adminRole);
      $auteur ->roles()->attach($auteurRole);
      $utilisateur ->roles()->attach($utilisateurRole);
    }
}
