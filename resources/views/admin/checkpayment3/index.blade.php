<x-dashboard.layout>
    <div class="p-4 sm:ml-8 mb-60">
        @if (session()->has('success'))
        <div id="alert-border-3" class="flex items-center sm:mt-5 sm:p-4 sm:mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="sm:ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        @endif
        <div class="bg-[#F2FBFF] rounded-lg border-2 w-full h-auto">
            <h1 class="text-4xl font-bold justify-center flex m-10">Data Pembayaran Tims</h1>
            <hr class="border-2 ">
            <div class="flex flex-col bg-white m-10">
                <h1 class="text-2xl font-bold mx-10 mt-10 mb-6">Scientific Paper</h1>
                <hr class="border-2 mb-3 ">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No.
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
                            @foreach ($ktis as $index => $kti)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{ $index + 1 }}
                                </td>
                                <td class="px-6 py-4 capitalize">
                                    {{ $kti->team_id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $kti->status }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $kti->payment_path }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('checkpayment2.edit', $kti->id) }}" class="font-medium text-[#40C6A1] hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col bg-white m-10">
                <h1 class="text-2xl font-bold mx-10 mt-10 mb-6">Bussines Plan</h1>
                <hr class="border-2 mb-8">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
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
                        @foreach ($busplans as $index => $busplan)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                {{ $busplan->team_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $busplan->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $busplan->payment_path }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('checkpayment2.edit', $busplan->id) }}" class="font-medium text-[#40C6A1] hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col bg-white m-10">
                <h1 class="text-2xl font-bold mx-10 mt-10 mb-6">UX Design</h1>
                <hr class="border-2 mb-8 ">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
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
                        @foreach ($uxs as $index => $ux)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                {{ $ux->team_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ux->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ux->payment_path }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('checkpayment2.edit', $ux->id) }}" class="font-medium text-[#40C6A1] hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col bg-white m-10">
                <h1 class="text-2xl font-bold mx-10 mt-10 mb-6">Software Development</h1>
                <hr class="border-2 mb-8 ">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
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
                        @foreach ($ppls as $index => $ppl)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                {{ $ppl->team_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ppl->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ppl->payment_path }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('checkpayment2.edit', $ppl->id) }}" class="font-medium text-[#40C6A1] hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</x-dashboard.layout>