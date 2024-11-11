<x-app-layout>
    <div class="p-4 sm:ml-72 mt-4">
        <div class="py-12 p-8 mx-10 my-5 bg-white h-full z-50 border border-gray-300 flex flex-col rounded-xl shadow-lg ">
            
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Edit Name Category</h1>
            
            <form action="{{ route('makecompetition.update', $category->id) }}" method="POST" class="space-y-6 px-8">
                @csrf
                @method('PATCH')
                <div>
                    <label for="category_name" class="block text-sm font-medium text-gray-700">Category Name</label>
                    <input type="text" id="category_name" name="category_name" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div id="stages-container" class="space-y-4"></div>
                
                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-grey-800 bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit !
                    </button>
                </div>
            </form>
            
        </div>
    </div>


</x-app-layout>
