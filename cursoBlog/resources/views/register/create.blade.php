<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-black text-center font-bold text-xl">Register!</h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf

                <x-form.input name="name" />
                <x-form.input name="username" />
                <x-form.input name="email" />
                <x-form.input name="password" type="password" />


                <x-form.button>
                    Submit
                </x-form.button>



                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $e)
                            <li class="text-red-500 text-xs"> {{$e }}</li>
                        @endforeach
                    </ul>
                @endif

            </form>
        </main>
    </section>
</x-layout>
