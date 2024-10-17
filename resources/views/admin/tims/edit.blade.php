<x-dashboard.layout>
    <div class="p-4 sm:ml-8 mb-60">
        <div class="bg-[#F2FBFF] rounded-lg border-2 w-full h-auto">
            <h1 class="text-4xl font-bold justify-center flex m-10">Data Tim {{ $team->team_name }}</h1>
            <hr class="border-2 ">
            <form action="{{ route('team.updateStage', [$category, $team->id]) }}" method="POST">
                @csrf
                <div class="flex flex-col bg-white m-10">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Team Name</th>
                                    <th scope="col" class="px-6 py-3">Category</th>
                                    <th scope="col" class="px-6 py-3">Verification Status</th>
                                    <th scope="col" class="px-6 py-3">Stage</th>
                                    <th scope="col" class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 capitalize">{{ $team->team_name }}</td>
                                    <td class="px-6 py-4">
                                        <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-yellow-200 rounded-lg text-gray-900">
                                            {{ $team->category->category_name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <select name="verification" class="w-40 border-none bg-transparent focus:outline-none">
                                            <option value="verified" {{ $team->verified_status == 'verified' ? 'selected' : '' }}>verified</option>
                                            <option value="unverified" {{ $team->verified_status == 'unverified'  ? 'selected' : '' }}>unverified</option>
                                        </select>
                                    </td>
                                    <td class="px-6 py-4">
                                        <select name="stage_id" class="w-40 border-none bg-transparent focus:outline-none">
                                            @foreach ($stages as $stage)
                                                <option value="{{ $stage->id }}" {{ $team->stage_id == $stage->id ? 'selected' : '' }}>Stage {{  $loop->iteration }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button type="submit" class="font-medium text-[#40C6A1] hover:underline">Kirim</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
            

        </div>
    </div>
</x-dashboard.layout>
