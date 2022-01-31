<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostCommentsController extends Controller
{
    //
    public function store(Post $post, Request $request)
    {
        //dd(request()->all());
        
        //////////validação
        
        request()->validate([
            'body' => 'required'
        ]);

        ////////////acção

        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body'=> $request->input('body')
        ]);

        ////////redireciona

        return back();
    }
}
