@props(['name'])

<label class="block mb-2 uppercase font-bold test-xs test-gray-700"
            for="{{ $name }}">
            {{ ucwords($name) }}
    </label>
