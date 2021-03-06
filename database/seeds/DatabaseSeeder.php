<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		// php artisan migrate:refresh --seed

        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
