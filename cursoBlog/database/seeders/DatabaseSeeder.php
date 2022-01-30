<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    //usado em factory mode, para simular a criação de registo na DB
    public function run()
    {
        // \App\Models\User::factory(10)->create();//criar 10 users

        //truncar as tabelas
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        
        $user = User::factory()->create([
            'name'=>'Hugo Resende'
        ]);

        Post::factory()->create([
            'user_id'=>$user->id    //associar o post feito na factory com o user_id
        ]);

        //  $user = \App\Models\User::factory()->create();

        //  $personal = Category::create([
        //      'name'=>'Personal',
        //      'slug'=>'personal'
        //  ]);

        // $family = Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'
        // ]);

        // $work = Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,//vai buscar a id do $user, var criada acima
        //     'category_id'=>$family->id,//mesmo para id da category
        //     'title'=>'My Family Post',
        //     'slug'=>'my-first-post',
        //     'excerpt'=>'<p>The PHP Framework for Web Artisans</p>',
        //     'body'=>'<p>Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title'=>'My Work Post',
        //     'slug'=>'my-second-post',
        //     'excerpt'=>"<p>Laravel Partners</p>",
        //     'body'=>'<p>Find a Laravel-endorsed development partner to help with your next project. Find an expert based on your needs and reach out to start a conversation. </p>'
        // ]);




    }
}
