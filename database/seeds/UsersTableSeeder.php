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
        App\User::truncate();

        App\User::create([
	        'name' => 'werdy',
	        'email' => 'werdy@example.com',
	        'password' => bcrypt('password'),
	        'remember_token' => str_random(10),
	    ]);

        factory(App\User::class, 9)->create();
    }
}
