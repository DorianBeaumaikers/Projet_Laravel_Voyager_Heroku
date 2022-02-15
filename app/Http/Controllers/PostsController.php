<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        
        return view("posts.index", compact("posts"));
        
    }

    public function show(Post $post) {
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        $categories = Category::orderBy('name', 'asc')->get();

        return view("posts.show", compact("post", "posts", "categories"));
    }
}
