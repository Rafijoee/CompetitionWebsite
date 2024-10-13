<x-dashboard.layout>
    <div class="p-4 sm:ml-8 mt-16 mb-60">
        <div class="bg-[#F2FBFF] rounded-lg border-2 w-full h-auto">
            <h1 class="text-4xl font-bold justify-center flex m-10">Data Tim {{ $team->team_name }}</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-5">
                <form action="{{ route('checkstage.update', $team->id) }}" method="POST">
                    @method('patch')
                    @csrf
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-[#40C6A1] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Team Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Verification Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stage
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 capitalize">
                                    {{ $team->team_name }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($team->category_id == 1)
                                    <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-yellow-200 rounded-lg text-gray-900">
                                        ICT Scientific Paper
                                    </div>
                                    @elseif ($team->category_id == 2)
                                    <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-lime-300 rounded-lg text-gray-900">
                                        ICT Business Plan
                                    </div>
                                    @elseif ($team->category_id == 3)
                                    <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-red-300 rounded-lg text-gray-900">
                                        Software Development
                                    </div>
                                    @else
                                    <div class="w-1/2 px-2 text-center max-[1500px]:w-28 bg-sky-300 rounded-lg text-gray-900">
                                        UX Design
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    <select name="verification" class="w-40 border-none bg-transparent focus:outline-none">
                                        <option value="verified" {{ $team->verified_status == 'verified' ? 'selected' : '' }}>verified</option>
                                        <option value="unverified" {{ $team->verified_status == 'unverified'  ? 'selected' : '' }}>unverified</option>
                                    </select>
                                </td>
                                <td class="px-6 py-4">
                                    <select name="stage" class="w-40 border-none bg-transparent focus:outline-none">
                                        <option value="1" {{ $team->stages_id == 1 ? 'selected' : '' }}>Stages 1</option>
                                        <option value="2" {{ $team->stages_id == 2  ? 'selected' : '' }}>Stages 2</option>
                                        <option value="3" {{ $team->stages_id == 3  ? 'selected' : '' }}>Stage 3</option>
                                    </select>
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
                <br>
                @if ($path1 != null)
                <div class="file-preview flex items-center mt-3">
                    <i class="fas fa-file-archive text-blue-500 mr-2"></i>
                    <a href="{{ route('download', ['filename' => urlencode($path1)]) }}" class="btn btn-primary">Download File</a>
                </div>
                <br>
                @endif
                @if ($path2 != null)
                <div class="file-preview flex items-center mt-3">
                    <i class="fas fa-file-archive text-blue-500 mr-2"></i>
                    <a href="{{ route('download', ['filename' => urlencode($path2)]) }}" class="btn btn-primary">Path 2</a>
                </div>
                <br>
                @endif
                @if ($path3 != null)
                <div class="file-preview flex items-center mt-3">
                    <i class="fas fa-file-archive text-blue-500 mr-2"></i>
                    <a href="{{ route('download', ['filename' => urlencode($path3)]) }}" class="btn btn-primary">Path 3</a>
                </div>
                <br>
                @endif
                @foreach ($members as $member)
                <div class="file-preview flex items-center mt-3">
                    <i class="fas fa-file-archive text-blue-500 mr-2"></i>
                    <a href="{{ asset($member->active_certificate) }}" download class="text-blue-500 hover:underline">KTM</a>
                </div>
                <br>
                @endforeach
            </div>
        </div>
    </div>
</x-dashboard.layout>
