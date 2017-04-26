<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->update(
        array(
          'password' => Hash::make('alexis'),
          'remember_token' => str_random(10)
        )
      );
    }
}
