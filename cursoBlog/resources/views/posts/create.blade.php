<x-layout>

    <x-setting heading="Publish New Post">

        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="image" type="file"/>
            <x-form.textarea txt="excerpt"/>
            <x-form.textarea txt="body"/>


            <div class="text-center">
                <x-form.field>
                    <x-form.label name="category"/>


                    <select name="category_id" id="category" class="text-black">

                        @php

                            $categories = \App\Models\Category::all();

                        @endphp

                        @foreach ($categories as $c)

                            <option value="{{$c->id}}" {{old('category_id') == $c->id ? 'selected' : ' '}}>
                                {{ucwords( $c->name)}}
                            </option>

                        @endforeach


                    </select>

                    <x-form.error name="category"/>
                </x-form.field>
            </div>

            <div class="text-center">
                <x-form.button>
                    Publish
                </x-form.button>
            </div>


        </form>
    </x-setting>




</x-layout>
