<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $user = User::whereName( urldecode($name) )->firstOrFail();

        return view('post.index')
        	->with('title', $user->name )
        	->with('posts', $user->posts);
    }
}
