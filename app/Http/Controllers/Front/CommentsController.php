<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function commentPost(Request $request) {

        $this->validate($request, [
            "content" => "required|string",
         ]);

         $userId = Auth::user()->id;

        //  $postId=Post::find($request->input('post_id'))->id;

        $post=Post::where('slug', $request->slug)->first();

        
        
        $comment=new Comment();

        $comment->user_id=$userId;
        $comment->post_id=$post->id;
        $comment->content=$request->content;
        $comment->created_at=now();
        $comment->updated_at=now();

        $comment->save();

        return redirect(route('home'));
    }
}
