<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
