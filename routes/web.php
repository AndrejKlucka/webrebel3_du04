<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


*/
Route::get('/test/{tag}', function ($tag) {
    //$posts = DB::table('posts');

    echo '<pre>';

	$name = "Andrej Kľučka";
	echo $name;

	echo urlencode($name);

	$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $name);
	echo $slug;

	echo $tag;
	echo urldecode($tag);
    
    //print_r( $posts->first() );
    echo '</pre>'; 
    
    //return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::redirect('/', '/blog', 301);

	Route::resource('/blog','PostController');
	Route::get('/blog/{blog}/delete/', 'PostController@delete')->name('blog.delete');
	Route::get('/blog', 'PostController@index')->name('home');

	Route::get('/tag/{tag}', 'TagController@show')->name('tag.show');
	Route::get('/user/{user}', 'UserController@show')->name('user.show');
});