<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class CommentController extends Controller{
    function store(Request $request, Post $post){
        $post->comments()->create([
            'content' => $request->content,
            'user_id' => User::auth()->id()
        ]);
        return redirect()->route('posts.show', $post);
    }
}
