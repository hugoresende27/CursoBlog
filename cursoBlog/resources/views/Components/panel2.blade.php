
{{-- 
<div class="flex bg-gray-100 p-6 border border border-gray-200 rounded-xl space-x-4">
    {{ $slot }}
    EM BAIXO COM $attributes(['class'=>''])
</div> --}}


<div {{$attributes(['class'=>"flex p-6 border border border-gray-200 rounded-xl space-x-4"])}}>
    {{ $slot }}
</div>