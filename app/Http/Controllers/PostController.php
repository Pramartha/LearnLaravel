<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show(){
        return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()]);
    }

    public function showSinglePost(Post $post){
        return view('post', ['title' => 'Single Post', 'post' => $post]);
    }
}
