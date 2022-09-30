@props(['triger'])
{{-- Trigger --}}


<div x-data="{ show: false }" @click.away="show=false" class="relative"
>
    {{-- Trigger --}}
    <div @click="show=!show">
        {{ $trigger }}

    </div>


    {{-- Links --}}
    <div x-show="show" class="py2 absolute mt-2 rounded-xl w-full z-50 overflow-auto max-h-51">
        {{ $slot }}

    </div>
</div>
