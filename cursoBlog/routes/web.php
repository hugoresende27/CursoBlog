<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
use Symfony\Component\Translation\Dumper\YamlFileDumper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//vou substituir a route para index pelo controlador PostController

//Route::get('/', function () { })->name('home');
Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
//Route::get('/posts/{post:slug}', function(Post $post){  //Post::where('slug',$post)->firstOrFail();

    // return view('post', [
    //     'post' => $post
    // ]);
// });
    //dd(request('search'));

    // $post =  Post::latest();//->get();

    // if(request('search')){
    //     //query com wildcars % query like de pesquisa
    //     $post
    //         ->where('title','like','%'.request('search').'%')
    //         ->orWhere('body','like','%'.request('search').'%');
    // }

    // return view('posts', [          //category e author para fazer apenas um query de busca
    //     'posts' => $post->get(),//->with('category','author')->get()  //latest('published_at') para mostrar posts ultimo em primeiro
    //                       //protected $with = ['category', 'author']; no models Post vai limitar as querys
    //     'categories' => Category::all()
    //     ]);   




//    DB::listen(function ($query){
//        //Log::info('foo');
//        logger($query->sql, $query->bindings);
//    });

    //$files = File::files(resource_path("posts"));
    // $posts = [];

    // $posts = collect($files)

    //             ->map(function($file){
    //                 return YamlFrontMatter::parseFile($file);
    //             })

    //             -> map(function ($document){
    //                 //$document = YamlFrontMatter::parseFile($file);
    //                 return new Post(
    //                     $document->title,
    //                     $document->excerpt,
    //                     $document->date,
    //                     $document->body(),
    //                     $document->slug);
    // });

    // $posts = array_map(function ($file){
    //     $document = YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );
    // }, $files);

    // foreach ($files as $file) {
    //     $document = YamlFrontMatter::parseFile($file);
    //     $posts[] = new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );
    // }

    //ddd($posts);

    //ddd($documents);
    //return view ('posts', ['posts' => $documents]);


    // $document = YamlFrontMatter::parseFile(
    //     resource_path("posts/my-fourth-post.html")
    // );
    //ddd($document->body());
    //ddd($document->matter('title'));
    //ddd($document->title);
    //ddd($document->date);


    //return Post::find('my-first-post');
    //ddd($posts[0]->getContents());


//    $posts = Post::all();
//
//    return view('posts', [
//        'posts' => $posts
//    ]);


    //ENCONTRAR UM POST PELO SEU $SLUG E PASSA-LO PARA A VIEW CHAMADA POST
    // //return $slug;
    // $path = __DIR__ . "/../resources/posts/{$slug}.html";

    // if (! file_exists($path)){
    //     //ddd('file does not exist');
    //     //dd('file does not exist');
    //     //abort(404);
    //     return redirect('/');
    // }

    // $post = cache()->remember("posts.{$slug}", now()->addMinutes(20), function () use ($path) {
    //     // var_dump('file_get_contents');
    //     return file_get_contents($path);
    // });

    // return view('post', ['post' => $post]);


//->where('post', '[A-z_\-]+');

Route::get('categories/{category:slug}', function (Category $category){
    return view('posts', [
        'posts' => $category->posts,//->load(['category', 'author']) //para não fazer várias querys
        //24QUERIES 24SELECTS 30ms para 4QUERIES 4SELECTS 28ms
        'categories' => Category::all(),
        'currentCategory' => $category
    ]);
})->name('category');

Route::get('authors/{author:username}', function (User $author){
    // dd($author);
    return view('posts', [
        'posts' => $author->posts//->load(['category', 'author']) //para não fazer várias querys
    ]);
});
