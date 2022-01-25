<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <title>O meu blog</title>
</head>
<body>

    <?php foreach ($posts as $post) : ?>

        <article>
            <h1>
                <a href="/posts/<?= $post->slug;  ?>">
                    <?= $post->title; ?>
                </a>
            </h1>

            <h2><?= $post->date; ?></h2>
            
            <div>
                <p><?= $post->excerpt; ?></p>
            </div>
            
        </article>
    
    <?php endforeach; ?>


    {{-- <article>

        <h1> <a href="/posts/my-first-post">My First Post</a></h1>
        <p>PRIMEIRO POST -- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus nam accusantium consequuntur. Fuga id facilis veniam beatae. Voluptatem expedita ratione quos explicabo accusamus, voluptates omnis voluptate consequatur, eius ea deserunt?</p>
    
    </article>

    <article>

        <h1> <a  href="/posts/my-second-post">My Second Post</a></h1>
        <p>SEGUNDO POST -- LLorem, ipsum dolor sit amet consectetur adipisicing elit. Natus nam accusantium consequuntur. Fuga id facilis veniam beatae. Voluptatem expedita ratione quos explicabo accusamus, voluptates omnis voluptate consequatur, eius ea deserunt?</p>
    
    </article>
    
    <article>

        <h1> <a  href="/posts/my-third-post">My Third Post</a></h1>
        <p>TERCEIRO POST -- LLorem, ipsum dolor sit amet consectetur adipisicing elit. Natus nam accusantium consequuntur. Fuga id facilis veniam beatae. Voluptatem expedita ratione quos explicabo accusamus, voluptates omnis voluptate consequatur, eius ea deserunt?</p>
    
    </article> --}}
    

   
</body>
</html>