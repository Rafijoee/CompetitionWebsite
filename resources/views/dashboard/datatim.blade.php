<x-app-layout>

    <div class="p-4 sm:ml-72 mt-16">
        <div class="py-12 mx-10 my-5 bg-white h-full z-50 border flex flex-col rounded-xl">
            <div class="m-5 ml-5 my-5 flex justify-center">
                <img class="h-full px-20 pb-20" src="{{asset('images/logo-itc.png')}}" alt="">
            </div>
            <hr class="border-3 bg-black">

            <div class="m-5">
                <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                    @foreach ($categories as $category) 
                    <div class="flex flex-wrap -mx-2">
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <h2 id="accordion-color-heading-1">
                                <a href="{{ route('category.teams', $category->category_name) }}" type="button" 
                                   class="flex items-center justify-center w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rounded-t-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 relative">
                                   {{ $category->category_name }}
                                </a>
                            </h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

</x-app-layout>