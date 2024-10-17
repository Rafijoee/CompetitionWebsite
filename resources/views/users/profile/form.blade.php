<x-dashboard.layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md space-y-6">
                @csrf
                <div class="space-y-6">
                    <label for="team_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Team</label>
                    <input value="{{$team ? $team->team_name : ''}}" name="team_name" type="text" id="team_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
                    <input value="{{$team ? $team->phone : ''}}" name="phone" type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    @error('phone')
                    <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">Kategori Lomba</label>
                    <select name="category_id" id="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                        </select>
                        <span class="text-red-300"> *Kamu tidak bisa mengubah data kategori lomba jika tim kamu sudah menggunggah file ke submission</span>
                        @error('category_id')
                        <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                <div class="mb-6">
                    <label for="univ" class="block mb-2 text-sm font-medium text-gray-900">Universitas</label>
                    <input name="univ" type="text" id="univ" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <span class="text-gray-400"> *Contoh penulisan : Universitas Jember</span>
                    @error('univ')
                    <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                @php
                $role_member = ['anggota_1', 'anggota_2', 'anggota_3'];
                @endphp
                @foreach($role_member as $index => $role)
                <div class="mb-6 p-4 border border-gray-200 rounded-lg">
                    <h1 class="mb-4 text-lg font-semibold text-gray-900">Data {{$role}}
                        @if($index != 2)
                        <span class="text-red-600">*</span>
                        @endif
                    </h1>
                    <div class="mb-6">
                        <label for="name_{{$role}}" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input name="name_{{$role}}" type="text" id="name_{{$role}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('name_{{$role}}')
                        <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="active_{{$role}}">Upload surat keterangan aktif atau kartu tanda mahasiswa</label>
                        <input name="active_{{$role}}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" accept="application/pdf" aria-describedby="file_input_help" id="active_{{$role}}" type="file">
                        @error('active_{{$role}}')
                        <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                        @enderror
                        <p class="mt-1 text-sm text-gray-500" id="file_input_help">PDF (MAX:5mb)</p>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="w-full bg-[#61C6ED] hover:bg-[#2BBCEE] text-white  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{{$team ? 'Update' : 'Submit'}}</button>
            </form>
        </div>
    </div>
</x-dashboard.layout>