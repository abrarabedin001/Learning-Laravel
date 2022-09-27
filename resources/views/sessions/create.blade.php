<x-layout>

    <section class="px-6 py-8">
        <section class="h-screen">
            <div class="px-6 h-full text-gray-800">
              <div
                class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
              >
                <div
                  class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
                >
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="w-full"
                    alt="Sample image"
                  />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                  <form method="POST" action="/login" class="mt-10" >

                    @csrf



                    <!-- Email input -->

                    <div class="mb-6">
                      <input
                        type="email"
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="email"
                        value = "{{ old('email') }}"
                        name="email"

                        placeholder="Email address"
                      />
                      @error('email')
                            {{ $message }}
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="mb-6">
                      <input
                        type="password"
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="password"
                        name="password"
                        value = "{{ old('password') }}"
                        placeholder="Password"
                      />
                      @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                    <button type="submit" class="text-center bg-blue-500 rounded-l px-6 bold">
                        Login
                    </button>


                  </form>
                </div>
              </div>
            </div>
          </section>
    </section>

</x-layout>
