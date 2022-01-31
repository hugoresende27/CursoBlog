
@props(['comment'])

<x-panel2 class="bg-gray-300">
    <article >
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="pravatar" width="60" class="rounded-xl">
        </div>

        <div>

            <header class="mb-4">

                <h3 class="font-bold">{{ $comment->author->username }}</h3>
                <p class="text-xs">Posted <time> {{ $comment->created_at->format("F j, Y, g:i a") }} </time></p>

            </header>

            <p>{{ $comment->body}}</p>

        </div>


    </article> 
</x-panel2>