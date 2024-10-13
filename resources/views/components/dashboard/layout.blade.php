<x-app-layout>
    {{-- <x-slot name="header">
        
    </x-slot> --}}


    <!-- CONTENT -->
    <div class="p-4 sm:ml-64 bg-gray-100">
        {{$slot}}
    </div>

    <footer class="bg-white dark:bg-gray-900 mt-10">
        <hr class="my-2 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-2" />
        <div class="max-w-screen-xl mx-auto px-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 sm:mx-20">
                    <a href="#" class="flex items-center">
                        <img src="{{asset('images/logo-itc.png')}}" class="h-8 me-3" alt="" />
                    </a>
                </div>
                <div class="grid grid-cols-2 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">Contact</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li>
                                <p class="hover:underline">itchimasif23@gmail.com</p>
                            </li>
                            <li>
                                <a href="https://wa.me/6281914757810" target="_blank" class="hover:underline">+62 819-1475-7810 (Ila)</a>
                            </li>
                            <li>
                                <a href="https://wa.me/6281249494460" target="_blank" class="hover:underline">+62 812-4949-4460 (Rendy)</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">Address</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-2">
                                <span>Jl. Kalimantan No.37, Krajan Timur, <br> Sumbersari, Kabupaten Jember,<br> Jawa Timur 68121</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">Powered By</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-2">
                                <a href="https://himasif.id" target="_blank" class="hover:underline">Himpunan Mahasiswa Sistem Informasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-5" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 IT Convert 2024 </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="https://www.instagram.com/itconvert_unej/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="https://www.tiktok.com/@himasifuj" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                        <span class="sr-only">TikTok page</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


</x-app-layout>