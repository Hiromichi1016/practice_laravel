<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class Postcontroller extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index',['posts' => $posts]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $id = Auth::id();
        
        $post = new Post();
        
        $post->body = $request->body;
        $post->user_id = $id;

        $post->save();

       return redirect()->to('/posts');
    }

    public function show(Post $post){

        return view('posts.detail',['post' => $post]);

    }

    public function edit($id){
        $post = Post::findOrFail($id);

        return view('posts.edit',['post' => $post]);
    }

    public function update(REQUEST $request){
        $id = $request->post_id;

        $post = Post::findOrFail($id);

        $post->body = $request->body;
        $post->save();

        return redirect('/posts');
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts');

    }
}
