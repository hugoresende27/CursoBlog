<x-layout>
    <div  class="max-w-sm mx-auto">
    <section class="px-6 py-8">
        <x-panel>
            
            <form action="/admin/posts" method="POST">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-black"
                        for="title"
                    >
                        Title
                    </label>

                    <input class="text-black border border-gray-400 p-2 w-full"
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old('title')}}"
                        required
                    >

                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-black"
                        for="excerpt"
                    >
                    excerpt
                    </label>

                    <textarea class="text-black border border-gray-400 p-2 w-full"
                        type="text"
                        name="excerpt"
                        id="excerpt"
                        value="{{ old('excerpt')}}"
                        required
                    ></textarea>

                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-black"
                        for="body"
                    >
                    body
                    </label>

                    <textarea class="text-black border border-gray-400 p-2 w-full h-32"
                        type="text"
                        name="body"
                        id="body"
                        
                        value="{{ old('body')}}"
                        required
                    ></textarea>

                    @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>
                
                <div class="mb-6 ">
                    <label class="block mb-2 uppercase font-bold text-xs text-black"
                        for="body"
                    >
                    Category
                    </label>

                   <select name="category" id="category" class="text-black">

                    @php

                        $categories = \App\Models\Category::all();

                    @endphp

                    @foreach ($categories as $c)
                  
                            <option  value="{{$c->id}}">
                                {{$c->name}}
                            </option>
                    
                    @endforeach

                       
                   </select>

                    @error('category')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>


                <div class="text-center">
                    <x-submit-button >Publish</x-submit-button>
                </div>

            </div>
            </form>
        
        </x-panel>
    </section>

</x-layout>