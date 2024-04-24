<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function posts() {
        $post = Post::all();
        return view('posts',[
            'post' => $post
        ]);
    }

    public function post(Post $post) {
    // Menggunakan findOrFail untuk mendapatkan post berdasarkan slug
    $rawr = Post::where('slug', $post->slug)->firstOrFail();

    return view('post', [
        'rawr' => $rawr
    ]);
}
}
