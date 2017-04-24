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
      // $user = factory(App\User::class)->make();
      // var_dump($user);
      DB::table('users')->update(
        array(
          'password' => Hash::make('alexisduarte'),
          'remember_token' => str_random(10)
        )
    );
    }
}
