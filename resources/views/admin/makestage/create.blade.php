<x-app-layout>
    <div class="p-4 sm:ml-72 mt-4">
        <div class="py-12 p-8 mx-10 my-5 bg-white h-full z-50 border border-gray-300 flex flex-col rounded-xl shadow-lg ">
            
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Create Category with Stages</h1>
            
            <form action="{{ route('make') }}" method="POST" class="space-y-6 px-8">
                @csrf                
                <!-- Input untuk Jumlah Stages -->
                <div>
                    <label for="stage_count" class="block text-sm font-medium text-gray-700">Number of Stages</label>
                    <input type="number" id="stage_count" name="stage_count" min="1" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                
                <!-- Container untuk dynamic stages -->
                <div id="stages-container" class="space-y-4"></div>
                
                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Create Category with Stages
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Event listener untuk mendeteksi perubahan input jumlah stage
        document.getElementById('stage_count').addEventListener('input', function() {
            let stageCount = parseInt(this.value);  // Mengambil nilai input stage_count
            let container = document.getElementById('stages-container');  // Container untuk stage form
            container.innerHTML = '';  // Reset isi container
            
            // Loop untuk menambahkan form stage sesuai jumlah input
            for (let i = 0; i < stageCount; i++) {
                let stageForm = `
                <div class="stage border border-gray-200 p-4 rounded-md bg-gray-50">
                    <h4 class="text-lg font-medium text-gray-700 mb-2">Stage ${i + 1}</h4>
                    <div class="mb-4">
                        <label for="stages[${i}][name]" class="block text-sm font-medium text-gray-700">Stage Name</label>
                        <input type="text" name="stages[${i}][name]" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    
                    <div class="mb-4">
                        <label for="stages[${i}][description]" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="stages[${i}][description]" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="stages[${i}][closed_at]" class="block text-sm font-medium text-gray-700">Closed At</label>
                        <input type="datetime-local" name="stages[${i}][closed_at]" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="mb-4">
                        <label for="stages[${i}][file_type]" class="block text-sm font-medium text-gray-700">File Type</label>
                        <select name="stages[${i}][file_type]" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="pdf">PDF</option>
                            <option value="zip">ZIP</option>
                            <option value="txt">TXT</option>
                            <option value="img">Image</option>
                        </select>
                    </div>
                </div>
                `;
                container.insertAdjacentHTML('beforeend', stageForm);  // Menambahkan form stage ke container
            }
        });
    </script>
</x-app-layout>
