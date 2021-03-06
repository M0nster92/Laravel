<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (request('tag')) {
            $posts = Tag::where('name', request('tag'))->firstOrFail()->posts;
        } else {
            $posts = Post::latest()->get();
        }


        //die($posts);

        return view('posts', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());
        $this->validateArticle();

        $post = new Post(request(['title', 'slug', 'body']));

        //$post->title = request('title');
        //$post->body = request('body');
        //$post->slug = request('slug');
        $post->user_id = 1;

        $post->save();

        $post->tags()->attach(request('tags'));

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        //$post = Post::where('slug', $slug)->firstOrFail();
        //$post = \DB::table('posts')->where('slug', $slug)->first();
        return view('post', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        //$post = Post::where('slug', $slug)->firstOrFail();
        return view('edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        //
        //$post = Post::where('slug', $slug)->firstOrFail();

        $post->title = request('title');
        $post->slug = request('slug');
        $post->body = request('body');

        $post->save();

        return redirect('/posts/' . $post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'slug' =>  'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
