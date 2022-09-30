
<x-layout >

    <section class="max-w-xl mx-auto py-8">
        <h1 class="text-lg font-bold mb-4">
            Edit Post
        </h1>
        <x-panel class="max-w-xl mx-auto">
            <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <x-form.input name="title" :value="old('title',$post->title)"/>
                <x-form.input name="slug" :value="old('slug',$post->slug)"/>

                <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)"/>



                <x-form.textarea name="excerpt" > {{ $post->excerpt }} </x-form.textarea>
                <x-form.textarea name="body" > {{ $post->body }} </x-form.textarea>

                <x-form.field>
                    <x-form.label name="category"/>
                    <select name="category_id" id="category_id">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp
                        @foreach ( $categories as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                        @endforeach

                    </select>
                    <x-form.error name="category_id"/>
                </x-form.field>



                <x-form.button>Edit</x-form.button>





            </form>
        </x-panel>

    </section>

</x-layout>
