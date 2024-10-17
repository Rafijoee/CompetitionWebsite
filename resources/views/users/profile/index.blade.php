<x-dashboard.layout>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="space-y-6 bg-white p-6 rounded-lg shadow-md">
                <div class="space-y-6">
                    <label for="team_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Team</label>
                    <input disabled value="{{$team->team_name}}" name="team_name" type="text" id="team_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
                    <input disabled value="{{$team->phone}}" name="phone" type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                </div>
                <div class="mb-6">
                    <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">Kategori Lomba</label>
                    <select name="category_id" id="category_id" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        <option selected>{{$team->category->category_name}}</option>
                    </select>
                </div>
                @foreach($members as $index => $member)
                <div class="mb-6 p-4 border border-gray-200 rounded-lg">
                    <h1 class="mb-4 text-lg font-semibold text-gray-900">Data {{$member->member_role}}
                        @if($index != 2)
                        <span class="text-red-600">*</span>
                        @endif
                    </h1>
                    <div class="my-10">
                        <label for="name_{{$index}}" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input disabled value="{{$member->full_name}}" type="text" id="name_{{$index}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>
                </div>
                @endforeach
                <h1 class="text-red-600 text-sm font-medium">
                    *Kamu tidak bisa mengubah data anggota tim, jika sudah mengupload file submission1
                </h1>
                @if (is_null(auth()?->user()?->teams?->team_submission?->first()?->path_1))
                <div class="my-10">
                    <a href="{{route('profile.edit', Crypt::encryptString($team->id))}}" class="text-white bg-[#61C6ED] hover:bg-[#2BBCEE] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-10 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                </div>
                @endif 
            </div>
        </div>
    </div>
</x-dashboard.layout>