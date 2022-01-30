<x-dropdown >

    <x-slot name="trigger">
{{-- TRIGGER  --}}
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
        
        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

        {{-- <x-down-arrow class="absolute pointer-events-none" style="right: 12px;"/> --}}
        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>

    
    </button>

</x-slot>
        
{{-- LINKS --}}
 
<x-dropdown-item href="/?{{ http_build_query(request()->except('category','page')) }}" 
            :active="request()->routeIs('home')">Todos</x-dropdown-item>



            @foreach ($categories as $c)

            <x-dropdown-item

           {{-- href="/categories/{{ $c->slug }}" --}}
                href="/?category={{ $c->slug }}&{{ http_build_query(request()->except('category','page')) }}"
                :active="request()->is('categories/'. $c->slug)">
                {{ ucwords($c->name)}}
            
            </x-dropdown-item>


            @endforeach


</x-dropdown >
