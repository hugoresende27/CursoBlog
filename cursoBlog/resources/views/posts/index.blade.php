<x-layout>

    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        {{-- if em baixo para verificar se existem posts, se o array nao tiver elementos dá erro --}}
    @if ($posts->count())

         <x-posts-grid :posts="$posts" />

         {{ $posts->links() }}
  
    @else
        <p class="text-center">No posts yet... come back later</p>
    @endif
    </main>

</x-layout>