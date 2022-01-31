@props(['posts'])

<x-post-featured-card :post="$posts[0] "/>

@if ($posts->count()>1)
    <div class="lg:grid lg:grid-cols-6">
        {{-- PARA SALTAR O PRIMEIRO POST, QUE ESTÁ EM post-featured-card --}}
        @foreach ($posts->skip(1) as $p) 
            {{-- @dd($loop) --}}
            <x-post-card 
            :post="$p" 
            class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}"/>

        @endforeach
    </div>
@endif