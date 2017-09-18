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

+--------+----------------------------------------+------------------------+------------------+------------------------------------------------------------------------+--------------+
| Domain | Method                                 | URI                    | Name             | Action                                                                 | Middleware   |
+--------+----------------------------------------+------------------------+------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD|POST|PUT|PATCH|DELETE|OPTIONS | /                      |                  | \Illuminate\Routing\RedirectController                                 | web          |
|        | GET|HEAD                               | api/user               |                  | Closure                                                                | api,auth:api |
|        | GET|HEAD                               | blog                   | home             | App\Http\Controllers\PostController@index                              | web,auth     |
|        | POST                                   | blog                   | blog.store       | App\Http\Controllers\PostController@store                              | web,auth     |
|        | GET|HEAD                               | blog/create            | blog.create      | App\Http\Controllers\PostController@create                             | web,auth     |
|        | GET|HEAD                               | blog/{blog}            | blog.show        | App\Http\Controllers\PostController@show                               | web,auth     |
|        | PUT|PATCH                              | blog/{blog}            | blog.update      | App\Http\Controllers\PostController@update                             | web,auth     |
|        | DELETE                                 | blog/{blog}            | blog.destroy     | App\Http\Controllers\PostController@destroy                            | web,auth     |
|        | GET|HEAD                               | blog/{blog}/edit       | blog.edit        | App\Http\Controllers\PostController@edit                               | web,auth     |
|        | GET|HEAD                               | blog/{post}            | blog.show        | App\Http\Controllers\PostController@show                               | web,auth     |
|        | GET|HEAD                               | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST                                   | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | POST                                   | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | POST                                   | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest    |
|        | GET|HEAD                               | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest    |
|        | POST                                   | password/reset         |                  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest    |
|        | GET|HEAD                               | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest    |
|        | GET|HEAD                               | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
|        | POST                                   | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
+--------+----------------------------------------+------------------------+------------------+------------------------------------------------------------------------+--------------+
*/

Route::redirect('/', '/blog', 301);

Route::resource('/blog','PostController');

Route::get('/blog', 'PostController@index')->name('home');

Auth::routes();
