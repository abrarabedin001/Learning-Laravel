@if (session()->has('success'))
        <div
            x-data="{ show:true }"
            x-init="setTimeout(()=>show=false,4004)"
            x-show="show"
            class="fixed right-0  bg-blue-500 text-white py-2 px-2 rounded-xl bottom-10">
            <p>{{ session('success') }}</p>
        </div>
    @endif
