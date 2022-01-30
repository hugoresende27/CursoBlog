@if (session()->has('success'))
    <div x-data = "{ show:true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="bg-green-300 fixed left-1/3 px-4 py-2 rounded-xl text-blue-900 text-lg text-white top-5">
        <p> {{session('success')}}</p>
    </div>
@endif