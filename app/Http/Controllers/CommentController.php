<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function post(Request $request, Post $post) {

        $validated = $request->validate([
            'content'=>'required|min:3'
        ]);

        $comment = new Comment($validated);
        $comment->user_id = auth()->id() ;
        $comment->post_id = $post->id;

        $comment->save();
        return redirect()->back();

        // dd($request);

    }
}
