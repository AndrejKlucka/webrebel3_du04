<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //->except(['index','show']);
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
        $post = new Post;

        return view('post.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\SavePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePostRequest $request)
    {

        $post = auth()->user()->posts()->create(
            request(['title','text'])
        );

        $post->tags()->sync($request->get('tags') ?: []);

        message('Ďakujem veľmo pekne za pridanie noveho, kreativneho, nšpirativneho obsahu. Yeah !!!', 'success');

        return view('post.show')->with('post', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Post $blog)
    {
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
        $blog->tags;

        return view('post.edit')->with('post', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\SavePostRequest  $request
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(SavePostRequest $request, Post $blog)
    {

        $blog->update(
            request(['title','text'])
        );

        $blog->tags()->sync($request->get('tags') ?: []);

        message('Yeah !!! Asi sa to upravilo teda dúfam ... ;)', 'success');

        return view('post.show')->with('post', $blog);
    }

    /**
     * Show form for removing specified resource.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function delete(Post $blog)
    {
        // only owner can see the edit for
        //$this->authorize('edit-post', $post);

        return view('post.delete')
            ->with('post', $blog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $blog)
    {
        // if authorized, delete
        // $this->authorize('edit-post', $blog);
        $blog->delete();

        message($blog->title. ' - DELETED !!!','success');

        return redirect('/');
    }
}
