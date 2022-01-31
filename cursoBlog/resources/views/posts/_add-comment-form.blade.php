@auth
<x-panel>
   
    <form method="POST" action="/posts/{{ $post->slug }}/comments">
        @csrf

        <header class="flex items-center">

            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="pravatar" width="60" height="40" class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>

        </header>

        <div class="mt-6">
            <textarea 
            name="body" 
            class="w-full text-sm focus:outline-none focus:ring" 
            placeholder="Leave your comment here" id="" 
            cols="30" rows="10" required> </textarea>

            @error('body')
                <span class="text-red-500 text-xs   ">{{ $message }}</span>
            @enderror
        
       
        </div>

        <div class="flex justify-end  border-gray-200 pt-6">
           <x-submit-button>Post</x-submit-button>
        </div>

    </form>

</x-panel>

@else
<p class="text-white ">
    <a href="/register" class="hover:underline font-semibold">Register</a> 
    or <a href="/login" class="hover:underline font-semibold">Log in </a>to leave a comment
</p>

@endauth