<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts=Post::paginate(6);
        $categories=Category::paginate(3);
        return view('front.posts.index', compact('posts', 'categories'));
    }
    //
}
