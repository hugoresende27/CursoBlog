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
        User::truncate();
        Category::truncate();
        Post::truncate();

         $user = \App\Models\User::factory()->create();

         $personal = Category::create([
             'name'=>'Personal',
             'slug'=>'personal'
         ]);

        $family = Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);

        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);

        Post::create([
            'user_id'=>$user->id,//vai buscar a id do $user, var criada acima
            'category_id'=>$family->id,//mesmo para id da category
            'title'=>'My Family Post',
            'slug'=>'my-first-post',
            'excerpt'=>'<p>Zzzzzzzzzzzzxxxx</p>',
            'body'=>'<p>dsasdfsfgfbdc7yc23n 2937r93rcyeb bhvsfdis f97 fsdhfsdf hfn </p>'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$work->id,
            'title'=>'My Work Post',
            'slug'=>'my-second-post',
            'excerpt'=>"<p>TTTTTTTTTTTTTTTTTTTT</p>",
            'body'=>'<p>dddddddddddddddddddwwwwwwwwwwwwwdasssdsasdfsfgfbdc7yc23n 2937r93rcyeb bhvsfdis f97 fsdhfsdf hfn </p>'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title'=>'My Personal Post',
            'slug'=>'my-third-post',
            'excerpt'=>'<p>UUUUUUUUUUUUUUUU</p>',
            'body'=>'<p>3333333333333333122312312321312312312312313dsasdfsfgfbdc7yc23n 2937r93rcyeb bhvsfdis f97 fsdhfsdf hfn </p>'
        ]);


    }
}
