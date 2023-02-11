<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create($postData)
    {
        Post::create($postData);
    }

    public function update($id, $postData)
    {
        $post = Post::find($id);
        $post->update($postData);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if(!is_null($post)){
            $post->delete();
        }
    }

    public function read($id)
    {
        $post = Post::find($id);
        return view('postView', ['post'=>$post]);
    }

    public function getPostsList()
    {
        $posts = Post::all();
        return view('postsList', ['posts'=>$posts]);
    }

}
