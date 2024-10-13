<x-dashboard.layout>
    <div class="p-4 sm:ml-8 mt-16 mb-60">
        <div class="bg-[#F2FBFF] rounded-lg border-2 w-full h-auto">
            <h1 class="text-4xl font-bold justify-center flex m-10">Data Tim {{$teams->team_name}}</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-5">
                <form action="{{ route('checkpayment3.update', $payments->id) }}" method="POST">
                    @method('patch')
                    @csrf
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Team Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Team Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Payment_path
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 capitalize">
                                    {{ $teams->team_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{$teams->id}}
                                </td>
                                <td>
                                    <select name="status" class="w-40 border-none bg-transparent focus:outline-none">
                                        <option value="verified" {{ $payments->status == 'verified' ? 'selected' : '' }}>verified</option>
                                        <option value="unverified" {{ $payments->status == 'unverified'  ? 'selected' : '' }}>unverified</option>
                                    </select>
                                </td>
                                <td class="px-6 py-4">
                                    {{$payments->payment_path}}
                                </td>
                                <td>
                                    <button type="submit" class="w-40 border rounded-lg text-white bg-blue-500 p-2  focus:outline-none">
                                        Kirim
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div>
                <img src="{{asset('storage/'.$payments->payment_path)}}" alt="" class="w-60 h-60">
            </div>
</x-dashboard.layout>