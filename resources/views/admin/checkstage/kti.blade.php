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
            <h1 class="text-4xl font-bold justify-center flex m-10">Data Stage & Status Tims</h1>
            <hr class="border-2 ">
            <div class="flex flex-col bg-white m-10">
                <div class="flex-row flex justify-between">
                    <h1 class="text-2xl font-bold mx-10 mt-10 mb-6">Stage 1</h1>
                    <form method="get" class="flex flex-row justify-between items-end mb-10">
                        <div class="flex flex-row space-x-10">
                            <div>
                                <label for="search" class="text-xl font-poppins font-semibold">Team Name</label>
                                <input type="search" name="search" id="search" class="mt-1 border-2 rounded-lg focus:outline-none sm:text-sm block p-2.5">
                            </div>
                            <div>
                                <label for="category" class="block text-xl font-poppins font-semibold">Category</label>
                                <select name="category" id="category" class="mt-1 border-2 rounded-lg focus:outline-none sm:text-sm block p-2.5">
                                    <option value="">-</option>
                                    <option value="1" {{ request('category') == 'ICT Scientific Paper' ? 'selected' : '' }}>ICT Scientific Paper</option>
                                    <option value="2" {{ request('category') == 'ICT Business Plan' ? 'selected' : '' }}>ICT Business Plan</option>
                                    <option value="3" {{ request('category') == 'Software Development' ? 'selected' : '' }}>Software Development</option>
                                    <option value="4" {{ request('category') == 'UX Design' ? 'selected' : '' }}>UX Design</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 my-10 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr class="border-2 ">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">No.</th>
                                <th scope="col" class="px-6 py-3">Team Name</th>
                                <th scope="col" class="px-6 py-3">Verification Status</th>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stages1 as $stage1)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 capitalize">{{ $stage1->team_name }}</td>
                                <td class="px-6 py-4">{{ $stage1->verified_status }}</td>
                                <td class="px-6 py-4">
                                    @if ($stage1->category_id == 1)
                                    <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-yellow-200 rounded-lg text-gray-900">ICT Scientific Paper</div>
                                    @elseif ($stage1->category_id == 2)
                                    <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-lime-300 rounded-lg text-gray-900">ICT Business Plan</div>
                                    @elseif ($stage1->category_id == 3)
                                    <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-red-300 rounded-lg text-gray-900">Software Development</div>
                                    @else
                                    <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-sky-300 rounded-lg text-gray-900">UX Design</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('checkstage.edit', Crypt::encryptString($stage1->id)) }}" class="font-medium text-[#40C6A1] hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col bg-white m-10">
                <h1 class="text-2xl font-bold mx-10 mt-10 mb-6">Stage 2</h1>
                <hr class="border-2 mb-8">
                <table class="w-full text-sm text-left rtl:text-right
 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">No.</th>
                            <th scope="col" class="px-6 py-3">Team Name</th>
                            <th scope="col" class="px-6 py-3">Verification Status</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stages2 as $stage2)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 capitalize">{{ $stage2->team_name }}</td>
                            <td class="px-6 py-4">{{ $stage2->verified_status }}</td>
                            <td class="px-6 py-4">
                                @if ($stage2->category_id == 1)
                                <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-yellow-200 rounded-lg text-gray-900">ICT Scientific Paper</div>
                                @elseif ($stage2->category_id == 2)
                                <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-lime-300 rounded-lg text-gray-900">ICT Business Plan</div>
                                @elseif ($stage2->category_id == 3)
                                <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-red-300 rounded-lg text-gray-900">Software Development</div>
                                @else
                                <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-sky-300 rounded-lg text-gray-900">UX Design</div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('checkstage.edit', Crypt::encryptString($stage2->id)) }}" class="font-medium text-[#40C6A1] hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col bg-white m-10">
                <h1 class="text-2xl font-bold mx-10 mt-10 mb-6">Stage 3</h1>
                <hr class="border-2 mb-8 ">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">No.</th>
                            <th scope="col" class="px-6 py-3">Team Name</th>
                            <th scope="col" class="px-6 py-3">Verification Status</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stages3 as $stage3)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 capitalize">{{ $stage3->team_name }}</td>
                            <td class="px-6 py-4">{{ $stage3->verified_status }}</td>
                            <td class="px-6 py-4">
                                @if ($stage3->category_id == 1)
                                <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-yellow-200 rounded-lg text-gray-900">ICT Scientific Paper</div>
                                @elseif ($stage3->category_id == 2)
                                <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-lime-300 rounded-lg text-gray-900">ICT Business Plan</div>
                                @elseif ($stage3->category_id == 3)
                                <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-red-300 rounded-lg text-gray-900">Software Development</div>
                                @else
                                <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-sky-300 rounded-lg text-gray-900">UX Design</div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('checkstage.edit', Crypt::encryptString($stage3->id)) }}" class="font-medium text-[#40C6A1] hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashboard.layout>