<?php

use Illuminate\Database\Seeder;

class insertarUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'username' => 'alexis',
          'password' => Hash::make('alexis'),
          'remember_token' => str_random(10)
        ]);
        DB::table('users')->insert([
          'username' => 'carlos',
          'password' => Hash::make('carlos'),
          'remember_token' => str_random(10)
        ]);
        DB::table('users')->insert([
          'username' => 'tomas',
          'password' => Hash::make('tomas'),
          'remember_token' => str_random(10)
        ]);
    }
}
