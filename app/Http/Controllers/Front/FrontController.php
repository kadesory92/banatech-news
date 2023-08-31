<?php

namespace App\Http\Controllers\Front;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        $latestPost = Post::orderBy('id','desc')->first();

        // var_dump($latestPost);

        $posts=Post::paginate(4);

        $categories=Category::paginate(3);

        return view('pages.home',[
            'latestPost'=>$latestPost,
            'posts'=>$posts,
            'categories'=>$categories,
        ]);
    }

    public function show(Post $post)
    {
        $comments=Comment::where('post_id', $post->id)->get();
        $categories=Category::paginate(5);
        return view('front.posts.show', compact('post', 'comments', 'categories'));
    }

    public function redirectUser()
    {
        if(auth()->user()->role===UserRole::User){
            return view('dashboard');
        }else{
            return view('dashboardadmin');
        }
    }
    //
}
