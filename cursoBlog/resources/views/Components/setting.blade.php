
@props(['heading'])

<div class="max-w-4xl mx-auto">
    <section class="px-6 py-8 ">

        <h1 class="text-lg font-bold mb-8 pd-2 border-b text-center">
            {{ $heading }}
        </h1>

        <div class="flex">
            <aside class="w-48 flex-shrink-0">

                <h4 class="font-semibold mb-4">Links</h4>

                <ul>
                    <li>
                        <a href="/" class="{{request()->is('/')? 'text-blue-500':''}}">Home</a>
                    </li>
                    <li>
                        <a href="/admin/posts/create" class="{{request()->is('admin/posts/create')? 'text-blue-500':''}}">New Post</a>
                    </li>
                    <li>
                        <a href="/admin/posts/" class="{{request()->is('admin/posts')? 'text-blue-500':''}}">All Posts</a>
                    </li>
                </ul>
            </aside>

            <main class="flex">
                <x-panel>

                    {{$slot}}

                </x-panel>
            </main>

        </div>
    </section>
</div>
