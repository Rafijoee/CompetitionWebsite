<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Convert</title>
    <link rel="stylesheet" href="../../css/app.css">
    <!-- Scripts -->
    <link rel="stylesheet" href="{{asset('build/assets/app-Bvkupbkq.css')}}"> 
    <script src="{{asset('build/assets/app-Bvkupbkq.js')}}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>IT Convert 2024</title>
    <style>
    </style>

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
                    <a href="/" class="block py-2 px-3 text-white bg-[#61C6ED] rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
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
    <div class="flex justify-center mt-32 mx-96 bg-gray-100 rounded py-10 rounded-2xl">
        <div class="w-full max-w-xl">
            @foreach($faqs as $faq)
            <div class="border border-gray-200 rounded-xl mb-4">
                <button type="button" class="w-full p-5 flex rounded rounded-lg justify-between items-center border-b border-gray-200 text-left focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 bg-[#61C6ED] hover:bg-[#2BBCEE]" onclick="toggleAccordion({{ $loop->index }})" aria-expanded="false" aria-controls="accordion-body-{{ $loop->index }}">
                    <span class="font-medium text-white">{{ $faq->question }}</span>
                    <svg class="w-5 h-5 transform rotate-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 12a1 1 0 0 1-1-1V6a1 1 0 0 1 2 0v5a1 1 0 0 1-1 1zM9 14a1 1 0 0 1 2 0v1a1 1 0 1 1-2 0v-1zm11-9a1 1 0 0 0-1-1h-5a1 1 0 1 0 0 2h3.586l-9.293 9.293a1 1 0 1 0 1.414 1.414L18 7.414V11a1 1 0 1 0 2 0V5z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="accordion-body-{{ $loop->index }}" class="hidden p-5 border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="text-gray-500 dark:text-gray-400">{{ $faq->answer }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleAccordion(index) {
            const accordionBody = document.getElementById('accordion-body-' + index);
            const expanded = accordionBody.getAttribute('aria-expanded') === 'true' || false;
            accordionBody.setAttribute('aria-expanded', !expanded);
            accordionBody.classList.toggle('hidden');
        }
    </script>


    <script>
        function toggleAccordion(index) {
            const accordionBody = document.getElementById('accordion-body-' + index);
            const expanded = accordionBody.getAttribute('aria-expanded') === 'true' || false;
            accordionBody.setAttribute('aria-expanded', !expanded);
            accordionBody.classList.toggle('hidden');
        }
    </script>





</body>
</head>