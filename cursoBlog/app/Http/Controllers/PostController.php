<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Response;


class PostController extends Controller
{

    //RECOMENDADO AQUI APENAS ----> INDEX, SHOW, CREATE, STORE, EDIT, UPDATE, DESTROY
///////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {

        // return Post::latest()->filter(
        //     request(['search','category','author']))
        //     ->paginate();


        //dd(request(['search']));

        return view('posts.index', [          //category e author para fazer apenas um query de busca
            'posts' => Post::latest()->filter(
                request(['search','category','author']))
                ->paginate(6)->withQueryString()//->with('category','author')->get()  //latest('published_at') para mostrar posts ultimo em primeiro
                              //protected $with = ['category', 'author']; no models Post vai limitar as querys
            //'categories' => Category::all(),
            //'currentCategory' => Category::firstWhere('slug', request('category'))//passou para CategoryDropdown
            ]);  
    }
///////////////////////////////////////////////////////////////////////////////////////
    public function show(Post $post)
    
    {
        return view('posts.show', [
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


///////////////////////////////////////////////////////////////////////////////////////

        public function create()
        {

            /// protecao admin
            // if (auth()->guest()) {
            //     abort(403);
            //     //abort(Response::HTTP_FORBIDDEN);
            // }
            // //var_dump(auth()->user()->username);
            // if (auth()->user()->username != 'Admin') {
            //     abort(403);
            //     //abort(Response::HTTP_FORBIDDEN);
            // }
            // if (auth()->user()?->username != 'Admin'){
            //         abort(403);
            // }PASSOU PARA O MIDDLEWARE AdminsOnly


            return view ('posts.create');
        }
 }