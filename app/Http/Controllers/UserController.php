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
    public function show(User $user) //$slug)
    {
        //$post = Post::whereSlug( $slug )->firstOrFail();

        //dd( $blog->user->email );

        //return $blog->created_at;

        return view('post.index')
        	->with('title', $user->name )
        	->with('posts', $user->posts);
    }
}
