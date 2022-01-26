<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/', function () {

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

    
    $posts = Post::all();
    
    return view('posts', [
        'posts' => $posts
    ]);
});



Route::get('posts/{post}', function($slug){

    return view('post', [
        'post' => Post::find($slug)
    ]);

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

})->where('post', '[A-z_\-]+');
