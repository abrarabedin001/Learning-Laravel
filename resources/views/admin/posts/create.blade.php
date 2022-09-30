
<x-layout >

    <section class="max-w-sm mx-auto py-8">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <x-panel class="max-w-sm mx-auto">
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title"/>
                <x-form.input name="slug"/>
                <x-form.input name="thumbnail" type="file"/>



                <x-form.textarea name="excerpt"/>
                <x-form.textarea name="body"/>

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



                <x-form.button>Submit</x-form.button>





            </form>
        </x-panel>

    </section>

</x-layout>
