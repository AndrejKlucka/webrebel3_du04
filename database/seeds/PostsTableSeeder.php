<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\Tag::truncate();
        // App\Post::truncate();

	    factory(App\Tag::class, 5)->create()->each(function ($t) {
	    	for ($i=0; $i < mt_rand(3,12); $i++) { 
	        	$t->posts()->save(factory(App\Post::class)->make());
	    	}
	    });
    }
}
