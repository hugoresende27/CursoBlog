@props(['active' => false])

@php

    $classes = 'text-black block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-black focus:text-black';

    //if ($active) $classes .= 'bg-blue-500 text-white';
    if($active){ $classes=$classes.' bg-blue-500 text-black text-left'; }

@endphp

<a {{ $attributes(['class'=>$classes])}}>
    
    {{ $slot}}

</a>