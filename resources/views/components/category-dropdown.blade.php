<div>
    <x-dropdown>

        <x-slot name="trigger">
            <button class=" py-2 pl-3 pr-9 text-sm font-semibold lg:w-32 text-left flex lg:inline-flex">

                {{ isset($currentCategory)? ucwords($currentCategory->name):"Categories" }}

                <x-down-arrow />
            </button>
        </x-slot>


        <x-dropdown-item href="/">
            All
        </x-dropdown-item>
        @foreach ($categories as $category)
            @if (isset($currentCategory)&& $currentCategory->id==$category->id)
                <x-dropdown-item href="/?category={{ $category->slug }}"  class='bg-blue-500 text-white' >
                    {{ $category->name }}
                </x-dropdown-item>

            @else
                <x-dropdown-item href="/?category={{ $category->slug}}&{{ http_build_query(request()->except('category')) }}"  class='bg-gray-500 text-white' >
                    {{ $category->name }}
                </x-dropdown-item>
            @endif
        @endforeach

    </x-dropdown>

</div>
