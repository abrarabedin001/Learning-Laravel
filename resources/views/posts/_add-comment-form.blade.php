@auth
                        <x-panel>
                            <form method="POST" action="/posts/{{ $post->slug }}" class="">
                                @csrf
                                <header class="flex items-center">
                                    <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width='60' height='60' class='rounded-xl m-2 rounded-full'>
                                    <h2>Want to participate?</h2>
                                </header>
                                <div class="mt-8 border-black-500">
                                    <textarea name="body"
                                    class="w-full text-sm focus:outline-none focus:ring border-black"
                                    id=""
                                    placeholder="What's in your nogging?"
                                    required
                                    >
                                </textarea>
                                @error('body')
                                    <span class="text-xs test-red-500"> {{ $message }}</span>
                                @enderror
                                </div>
                                <div class="flex justify-end mt-5 border-g border-gray-200">
                                    <button type="submit" class=" bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-5 rounded-xl">Submit</button>
                                </div>
                            </form>
                        </x-panel>
                    @else
                        <p class="font-semibold">
                            <a href="/register" class="hover:underline">Register</a> Or<a href="/login" class="hover:underline"> Login </a>to leave a comment.
                        </p>

                    @endauth
