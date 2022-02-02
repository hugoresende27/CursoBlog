<x-layout>
    <div  class="max-w-md mx-auto">
    <section class="px-6 py-8">

        <h1 class="text-lg font-bold mb-4 text-center">
            Publish New Post
        </h1>

        <x-panel>
            
            <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                @csrf

               <x-form.input name="title" />
               <x-form.input name="slug" />
               <x-form.input name="image" type="file"/>


               <x-form.textarea txt="excerpt" />
               <x-form.textarea txt="body" />

            
            
                <x-form.field>
                    <x-form.label name="category" />
               

                   <select name="category_id" id="category" class="text-black">

                    @php

                        $categories = \App\Models\Category::all();

                    @endphp

                    @foreach ($categories as $c)
                  
                            <option  value="{{$c->id}}" {{old('category_id') == $c->id ? 'selected' : ' '}}>
                                {{ucwords( $c->name)}}
                            </option>
                    
                    @endforeach

                       
                   </select>

                   <x-form.error name="category" />
                </x-form.field>


                <div class="text-center">
                    <x-submit-button >
                        Publish
                    </x-submit-button>
                </div>

           
            </form>
        
        </x-panel>
    </section>

</x-layout>