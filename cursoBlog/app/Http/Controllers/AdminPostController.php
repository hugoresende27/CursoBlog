<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    ////////////////////////MOSTRAR TODOS OS POSTS
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }


    ////////////////////////CRIAR UM POST
    public function create()
    {

        return view ('admin.posts.create');
    }

    ////////////////////////GUARDAR UM NOVO POST
    function store()
    {

        //validar request
        $attributes=request()->validate([
            'title'=> 'required',
            'xxx'=>'required|image',
            'slug'=>['required', Rule::unique('posts','slug')],//verifica se slug na BD
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>['required', Rule::exists('categories','id')]//verificar de category_id na BD
        ]);

        //se request for valido
        $attributes['user_id'] = auth()->id();
        $attributes['xxx'] = request()->file('xxx')->store('imgsposts');
        //ddd($attributes);
        Post::create($attributes);

        //depois redirect
        return redirect('/');
    }


    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['p' => $post]);
    }

    public function update(Post $post)
    {
        $attributes=request()->validate([
            'title'=> 'required',
            'xxx'=>'image',
            'slug'=>['required', Rule::unique('posts','slug')->ignore($post->id)],//AQUI DIFERENTE PORQUE POST JÁ EXISTE
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>['required', Rule::exists('categories','id')]//verificar de category_id na BD
        ]);

        if(isset($attributes['xxx']))
        {
            $attributes['xxx'] = request()->file('xxx')->store('xxx');
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }
}
