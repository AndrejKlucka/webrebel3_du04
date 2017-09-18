<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest('created_at')->get();

        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('post.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[ 
            'title' => 'required|unique:posts,title|max:255|not_in:create,edit,import', 
            'text' => 'required|string|min:60', 
        ]);

        $post = auth()->user()->posts()->create(
            request(['title','text'])
        );

        //dd($post);

        $post->tags()->sync($request->get('tags') ?: []);

        message('Ďakujem veľmo pekne za pridanie noveho, kreativneho, nšpirativneho obsahu. Yeah !!!', 'success');

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Post $blog) //$slug)
    {
        //$post = Post::whereSlug( $slug )->firstOrFail();

        //dd( $blog->user->email );

        return view('post.show')->with('post', $blog);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog)
    {
        return view('post.edit')->with('post', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $blog)
    {
        message($blog->title. ' - DELETED !!!','success');

        $blog->destroy();
    }
}
