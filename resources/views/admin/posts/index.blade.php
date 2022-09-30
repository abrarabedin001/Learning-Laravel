
<x-layout >

    <section class="max-w-xl mx-auto py-8">
        <h1 class="text-lg font-bold mb-4">
            Manage Posts
        </h1>

            <!-- component -->
            <div class="table w-full p-2">
                <table class="w-full border">

                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">

                                <td class="p-2 border-r"><a href="/{{ $post->slug }}">{{ $post->id }}</a></td>
                                <td class="p-2 border-r"><a href="/{{ $post->slug }}"> {{ $post->title }} </a></td>


                                <td class="flex">
                                    <a href="/admin/posts/{{ $post->id }}/edit" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin rounded-xl m-2">Edit</a>
                                    <a href="/admin/posts/{{ $post->id }}/delete" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin rounded-xl  m-2">Remove</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>


    </section>

</x-layout>
