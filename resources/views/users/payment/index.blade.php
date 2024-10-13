<x-dashboard.layout>

    <div class="bg-gray-100">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Upload Payemnt</h1>

            @if (session('error'))
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                {{ session('error') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="paymentsub" class="block text-gray-700 font-semibold text-xl">Payment </label>
                    <p class="font-lg text-gray-500 my-2">format: image||png||jpg</p>
                    <input type="file" accept="image/png, image/jpeg" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="paymentsub" name="paymentsub" required>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Upload
                </button>
            </form>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
</x-dashboard.layout>