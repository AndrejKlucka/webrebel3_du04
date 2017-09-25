<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //$post = Post::whereSlug( $slug )->firstOrFail();

        //dd( $blog->user->email );

        //return $blog->created_at;

        return view('post.index')
        	->with('title', $tag->tag )
        	->with('posts', $tag->posts);
    }
}
