<?php
//
//namespace App\Models;
//
//use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Illuminate\Support\Facades\File;
//use Spatie\YamlFrontMatter\YamlFrontMatter;
//
//
//class Post
//
//{
//    public $title;
//    public $excerpt;
//    public $date;
//    public $body;
//    public $slug;
//
//    /////////////////////////CONSTRUCTOR PARA POST///////////////////////////////////////////////
//    public function __construct($title, $excerpt, $date, $body, $slug)
//    {
//        $this->title = $title;
//        $this->excerpt = $excerpt;
//        $this->date = $date;
//        $this->body = $body;
//        $this->slug = $slug;
//    }
//
//    ///////////////////////////////// ALL ///////////////////////////////////////
//    public static function all ()
//    {
//       // return File::files(resource_path("/posts/"));
//    //    $files = File::files(resource_path("posts/"));
//
//    //    return array_map(function ($file) {
//    //        return $file->getContents();
//    //    }, $files);
//
//
//    //$files = File::files(resource_path("posts"));
//
//    return cache()->rememberForever('posts.all',  function () {
//        return collect(File::files(resource_path("posts")))
//
//                ->map(function($file){
//                    return YamlFrontMatter::parseFile($file);
//                })
//
//                -> map(function ($document){
//                    //$document = YamlFrontMatter::parseFile($file);
//                    return new Post(
//                        $document->title,
//                        $document->excerpt,
//                        $document->date,
//                        $document->body(),
//                        $document->slug);
//                }) ->sortByDesc('date');
//    });
//
//
//
//    }
//
//    ////////////////////////////////////// FIND //////////////////////////////////
//    public static function find ($slug)
//    {
//        return static::all()->firstWhere('slug', $slug);
//
//    }
//    ////////////////////////////////////// FIND OR FAIL //////////////////////////////////
//    public static function findOrFail ($slug)
//    {
//        $post = static::find($slug);
//
//        if (! $post) {
//            throw new ModelNotFoundException();
//        }
//
//        return $post;
//
//        //TODOS OS POSTS DEVEM ENCONTRAR UMA SLUG QUE CORRESPONDE AO REQUEST
//        // $posts = static::all();
//        // dd($posts->firstWhere('slug', $slug));
//        // return static::all()->firstWhere('slug', $slug);
//        // base_path();
//        // if (! file_exists( $path = resource_path("/posts/{$slug}.html"))){
//
//        //     throw new ModelNotFoundException();
//        // }
//
//        // return cache()->remember("posts.{$slug}", now()->addMinutes(20), fn() => file_get_contents($path));
//
//    }
//
//}
