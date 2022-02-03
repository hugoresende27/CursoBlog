<x-layout>

    <x-setting :heading="'Edit Post: ' .$p->title">

        <form action="/admin/posts/{{$p->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

{{--            {!! $p->xxx !!}--}}
            <x-form.input name="title" :value="$p->title"/>

{{--            o value pode ser preenchido de 2 maneiras--}}

            <x-form.input name="slug" :value="old('slug',$p->slug)"/>

            <div>
                <x-form.input name="image" type="file" :value="old('xxx',$p->xxx)"/>

                <img src="{{ asset('storage/' . $p->xxx)}}" alt="imgposts" class="rounded-xl" width="100">
            </div>

            <x-form.textarea txt="excerpt"> {{old('excerpt', $p->excerpt)}} </x-form.textarea>
            <x-form.textarea txt="body"> {{old('body', $p->body)}} </x-form.textarea>


            <div class="text-center">
                <x-form.field>
                    <x-form.label name="category"/>


                    <select name="category_id" id="category" class="text-black">

                        @php

                            $categories = \App\Models\Category::all();

                        @endphp

                        @foreach ($categories as $c)

                            <option value="{{$c->id}}"
                                {{old('category_id',$p->category_id) == $c->id ? 'selected' : ' '}}>
                                {{ucwords( $c->name)}}
                            </option>

                        @endforeach


                    </select>

                    <x-form.error name="category"/>
                </x-form.field>
            </div>

            <div class="text-center">
                <x-form.button>
                    Update
                </x-form.button>
            </div>


        </form>
    </x-setting>




</x-layout>
