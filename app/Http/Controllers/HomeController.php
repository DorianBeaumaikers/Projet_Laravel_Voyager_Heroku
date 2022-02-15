<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Work;

class HomeController extends Controller
{
    public function index() {
        $works = Work::orderBy('created_at', 'desc')->take(6)->get();

        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        
        return view("home.index", compact("posts", "works"));
        
    }
}
