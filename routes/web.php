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


Route::get('/', function () {
    $posts = DB::table('posts');


    echo '<pre>';
    print_r( $posts->first() );
    echo '</pre>'; 
    
    //return view('welcome');
});
*/

Route::redirect('/', '/blog', 301);

Auth::routes();

Route::resource('/blog','PostController');

Route::get('/blog', 'PostController@index')->name('home');

Route::get('/tag/{tag}', 'TagController@show');
Route::get('/user/{user}', 'UserController@show');
