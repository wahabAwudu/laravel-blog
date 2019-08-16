<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts/home')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('posts/home');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.detail')->with('post', $post);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts/home', compact('post'));
    }

    public function update($id)
    {
        // Create Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('posts/home');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('posts/home');
    }

}
