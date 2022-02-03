<x-layout>
    <x-setting heading="Manage Posts" >

        <!-- component -->
        <div class="bg-white p-8 rounded-md w-full flex flex-col">
            <div class=" flex items-center justify-between pb-6">


            </div>
            <div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal divide-y" style="width: 100%">

                            <tbody>

                            @foreach($posts as $pt)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">

                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    <a href="/posts/{{$pt->slug}}">
                                                        {{$pt->title}}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>


                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                              class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
									<span class="relative">
                                        Publish
                                    </span>
									</span>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="/admin/posts/{{ $pt->id }}/edit" class="text-blue-500 hover:text-indigo-900 whitespace-no-wrap">
                                            Edit
                                        </a>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                      <form action="/admin/posts/{{$pt->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="text-xs text-red-500 font-bold">DELETE</button>
                                      </form>
                                        
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </x-setting>

</x-layout>
