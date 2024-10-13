<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITC | Detail Lomba</title>
    <link rel="stylesheet" href="../../css/app.css">
    <!-- Scripts -->
    <link rel="stylesheet" href="{{asset('build/assets/app-Bvkupbkq.css')}}"> 
    <script src="{{asset('build/assets/app-Bvkupbkq.js')}}" defer></script>

</head>

<body class="bg-blue-200">
    <nav id="navbar" class="fixed top-0 z-50 w-full border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 flex items-center justify-between p-4 ">
        <!-- Left side: Logo -->
        <div class="flex items-center flex-grow-0 ml-20">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('images/logo-itc.png')}}" class="h-10" alt="Flowbite Logo">
            </a>
        </div>

        <!-- Center: Navigation items -->
        <div class="hidden md:flex md:flex-grow md:justify-center" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Bidang Lomba
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/detailsscience" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ICT Scientific Paper</a>
                            </li>
                            <li>
                                <a href="/detailsbusplan" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ICT Business Plan</a>
                            </li>
                            <li>
                                <a href="/detailsppl" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Software Development</a>
                            </li>
                            <li>
                                <a href="/detailsux" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UX Design</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/faq" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                </li>
            </ul>
        </div>

        <!-- Right side: Dashboard button -->
        <div class="flex items-center space-x-3 rtl:space-x-reverse mr-20">
            <a href="/dashboard" type="button" class="text-white bg-[#61C6ED] hover:bg-[#2BBCEE] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#61C6ED] dark:hover:bg-[#61C6ED] dark:focus:ring-blue-800">Dashboard</a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            </div>
    </nav>
    <div class="awan">
        <img src="{{ asset('images/Awan 6.png') }}" alt="" class="-z-10 fixed ml-[2000px] -mt-20 scale-50 md:transform-none" id="awan-1">
        <img src="{{ asset('images/Awan 4.png') }}" alt="" class="-z-20 fixed mt-[100px] scale-50 ml-[2000px] md:transform-none" id="awan-2">
    </div>
    <div class="container  mx-auto mt-20 flex justify-center">
        <div class="container-main bg-slate-50 w-2/3 relative justify-center mb-10 rounded-md">
            <div class="content-atas mb-6 text-center mt-10">
                <a href="/register" class="px-3 py-1 text-[10px] text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 absolute top-0 right-0 mt-2 mr-2">‎ REGISTER ‎</a>
                <a href="/" class="px-3 py-1 text-[10px] text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 absolute top-0 left-0 mt-2 ml-2">‎ KEMBALI ‎</a>
                <p class="text-lg mb-4 font-medium">ICT UX DESIGN</p>

            </div>
            <p class="mt-10 mb-4 mx-auto text-sm font-light text-justify w-3/5 text-gray-400">User Experience Design (UX DESIGN) merupakan kategori perlombaan dalam
IT CONVERT 2024 yang menuntut peserta lomba agar dapat merancang suatu aplikasi
dengan desain antarmuka pengguna yang baik menggunakan metode-metode yang
berfokus pada kenyamanan, kepuasan, dan kemudahan bagi pengguna. Sehingga,
nantinya dapat menghasilkan desain aplikasi yang memiliki desain antarmuka pengguna
berkualitas.</p>
            <div class="flex justify-center gap-4">
                <a href="https://drive.google.com/drive/folders/1QXvWfYcCY9U-Z2njj48n8LeUHdmR60Vm?usp=drive_link" class="text-white rounded-md bg-[#61C6ED] hover:bg-[#2BBCEE] px-3 py-2">RULEBOOK</a>
                <a href="{{ route('proposal', ['filename' => 'RULE BOOK USER EXPERIENCE DESIGN ITC 2024.docx']) }}" class="text-white rounded-md bg-[#61C6ED] hover:bg-[#2BBCEE] px-3 py-2">PROPOSAL</a>
            </div>
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700 flex justify-center">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-[#2BBCEE] hover:text-[#2BBCEE] dark:text-[#2BBCEE] dark:hover:text-[#2BBCEE] border-[#2BBCEE] dark:border-[#2BBCEE]" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="block p-4 border-b-2 rounded-t-lg " id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Schedules</button>
                    </li>
                </ul>
            </div>
            <div id="default-styled-tab-content" class="flex justify-center z-20 mt-10 mb-10">
                <div class="hidden p-8 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div>
                        <ol class="relative border-s p-3 border-gray-200 dark:border-gray-700">
                            <li class="mb-10 ms-6">
                                <div class="">
                                    <span class="absolute flex items-center justify-center w-10 h-10 -ml-2 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Tahap 1</h3>
                                <p class="block mb-2 text-sm font-normal leading-none text-gray-600 dark:text-gray-500">Gelombang 1</p>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">June 29th, 2024 - July 29th, 2024</time>
                                <br>
                                <p class="block mb-2 text-sm font-normal leading-none text-gray-600 dark:text-gray-500">Gelombang 2</p>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">July 30th, 2024 - August 10th, 2024</time>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">1. Proposal (PDF)</p>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">2. Orisinil (PDF)</p>
                            </li>
                            <li class="mb-10 ms-6">
                                <div class="">
                                    <span class="absolute flex items-center justify-center w-10 h-10 -ml-2 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Penjurian tahap 1</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">August 17th, 2024 - August 21st, 2024</time>
                            </li>
                            <li class="mb-10 ms-6">
                                <div class="">
                                    <span class="absolute flex items-center justify-center w-10 h-10 -ml-2 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Pengumuman tahap 1</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">August 22nd, 2024</time>
                            </li>
                            <li class="mb-10 ms-6">
                                <div class="">
                                    <span class="absolute flex items-center justify-center w-10 h-10 -ml-2 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Tahap 2</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">August 23rd, 2024 - September 3rd, 2024</time>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">1. Prototype</p>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">2. Video</p>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">3. Poster (PDF)</p>
                            </li>
                            <li class="mb-10 ms-6">
                                <div class="">
                                    <span class="absolute flex items-center justify-center w-10 h-10 -ml-2 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Penjurian Tahap 2</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"> September 8th, 2024 - September 12th, 2024</time>
                            </li>
                            <li class="mb-10 ms-6">
                                <div class="">
                                    <span class="absolute flex items-center justify-center w-10 h-10 -ml-2 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Pengumuman tahap 2</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">September 13th, 2024</time>
                            </li>
                            <li class="mb-10 ms-6">
                                <div class="">
                                    <span class="absolute flex items-center justify-center w-10 h-10 -ml-2 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Pengumpulan PPT untuk presentasi (dalam bentuk pdf)</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">September 14th, 2024 - September 23rd, 2024</time>
                            </li>
                            <li class="mb-10 ms-6">
                                <div class="">
                                    <span class="absolute flex items-center justify-center w-10 h-10 -ml-2 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Tahap Final (Presentasi)</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">September 28th, 2024</time>
                            </li>
                        </ol>
                    </div>

                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>