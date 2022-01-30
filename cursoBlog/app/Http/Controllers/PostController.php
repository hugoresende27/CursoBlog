<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
///////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {
        //dd(request(['search']));
        return view('posts', [          //category e author para fazer apenas um query de busca
            'posts' => Post::latest()->filter(request(['search']))->get(),//->with('category','author')->get()  //latest('published_at') para mostrar posts ultimo em primeiro
                              //protected $with = ['category', 'author']; no models Post vai limitar as querys
            'categories' => Category::all()
            ]);  
    }
///////////////////////////////////////////////////////////////////////////////////////
    public function show(Post $post)
    
    {
        return view('post', [
            'post' => $post
        ]);
    }
///////////////////////////////////////////////////////////////////////////////////////
    // protected function getPosts()
    // {
    //     return Post::latest()->filter()->get();

        // $post =  Post::latest();//->get();

        // if(request('search')){
        //     //query com wildcars % query like de pesquisa
        //     $post
        //         ->where('title','like','%'.request('search').'%')
        //         ->orWhere('body','like','%'.request('search').'%');
        // }

        // return $post->get();
//     }
 }
