

<x-layout>

    @foreach ($posts as $post)

        {{-- @dd($loop) --}}

        <article class="{{ $loop->even ? 'foobar' : ' '}}">
            <h1>
                <a href="/posts/{{ $post->id;  }}">

                    {!!   $post->title; !!}
                </a>
            </h1>

            <h2><?= $post->date; ?></h2>

            <div>
                {{ $post->excerpt; }}
            </div>

        </article>

    @endforeach

</x-layout>




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


