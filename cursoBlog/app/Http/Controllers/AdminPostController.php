<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
 {
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        Post::create(array_merge($this->validatePost(), [
            'user_id' => request()->user()->id,
            'xxx' => request()->file('xxx')->store('imgsposts')
        ]));

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['p' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);

        if ($attributes['xxx'] ?? false) {
            $attributes['xxx'] = request()->file('xxx')->store('imgsposts');
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post Deleted!');
    }

    protected function validatePost(?Post $post = null): array
    {
        $post ??= new Post();
        
        return request()->validate([
            'title' => 'required',
            'xxx' => $post->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
        
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////
//     ////////////////////////MOSTRAR TODOS OS POSTS
//     public function index()
//     {
//         return view('admin.posts.index', [
//             'posts' => Post::paginate(50)
//         ]);
//     }


//     ////////////////////////CRIAR UM POST
//     public function create()
//     {

//         return view ('admin.posts.create');
//     }

//     ////////////////////////GUARDAR UM NOVO POST
//     function store()
//     {

//         //$post = new Post();
//         //validar request

//         //$attributes = $this->validatePost(new Post());
   
//         // $attributes=request()->validate([
//         //     'title'=> 'required',
//         //     'xxx'=> $post->exists ? ['image'] : ['required|image'],
//         //     'slug'=>['required', Rule::unique('posts','slug')->ignore($post)],//verifica se slug na BD
//         //     'excerpt'=>'required',
//         //     'body'=>'required',
//         //     'category_id'=>['required', Rule::exists('categories','id')],//verificar de category_id na BD
//         //     'published_at'=> 'required'
//         // ]);

//         //se request for valido
//         // $attributes['user_id'] = auth()->id();
//         // $attributes['xxx'] = request()->file('xxx')->store('imgsposts');
        
        
//         ddd($this);
//         $attributes = array_merge($this->validatePost(), [
//             'user_id' => request()->user()->id,
//             'xxx' => request()->file('xxx')->store('imgspost')
//         ]);
        
//         //request()->user()->posts()->create();
//         Post::create($attributes);

//         //depois redirect
//         return redirect('/');
//     }


//     public function edit(Post $post)
//     {
//         return view('admin.posts.edit', ['p' => $post]);
//     }

//     public function update(Post $post)
//     {
        
//         // $attributes=request()->validate([
//         //     'title'=> 'required',
//         //     'xxx'=> $post->exists ? ['image'] : ['required|image'],
//         //     'slug'=>['required', Rule::unique('posts','slug')->ignore($post->id)],//AQUI DIFERENTE PORQUE POST JÁ EXISTE
//         //     'excerpt'=>'required',
//         //     'body'=>'required',
//         //     'category_id'=>['required', Rule::exists('categories','id')],//verificar de category_id na BD
//         //     'published_at'=> 'required'
//         // ]);

//         $attributes = $this->validatePost($post);

//         if($attributes['xxx'] ?? false)
//         {
//             $attributes['xxx'] = request()->file('xxx')->store('xxx');
//         }

//         $post->update($attributes);

//         return back()->with('success', 'Post Updated!');
//     }

//     public function destroy(Post $post)
//     {
//         $post->delete();

//         return back()->with('success','Post Deleted!');
//     }


//     //protected public function validatePost(?Post $post = null): array
//     public function validatePost(?Post $post = null): array
//     {
//         $post ??= new Post();
        
//         return request()->validate([
//             'title'=> 'required',
//             'xxx'=> $post->exists ? ['image'] : ['required','image'],
//             'slug'=>['required', Rule::unique('posts','slug')->ignore($post->id)],//verifica se slug na BD
//             'excerpt'=>'required',
//             'body'=>'required',
//             'category_id'=>['required', Rule::exists('categories','id')],//verificar de category_id na BD
//             // 'published_at'=> 'required'
//         ]);

//         //ddd($post);


        
//     }
}
