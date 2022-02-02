@props(['txt'])

<x-form.field>

    <x-form.label name={{$txt}}  />

    <textarea class="text-black border border-gray-400 p-2 w-full"
        type="text"
        name="{{$txt}}"
        id="{{$txt}}" 
        required
    > {{ old($txt) }}</textarea>

    <x-form.error name="{{ $txt}}" />

</x-form.field>