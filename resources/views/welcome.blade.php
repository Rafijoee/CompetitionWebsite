<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Convert</title>
    <link rel="stylesheet" href="../../css/app.css">
    <!-- Scripts -->

    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <link rel="stylesheet" href="{{asset('build/assets/app-Bvkupbkq.css')}}">
    <script src="{{asset('build/assets/app-Bvkupbkq.js')}}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>IT Convert 2024</title>
    <style>
        header {
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
        }

        header iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }

        body {
            background-image: url("{{asset('assets/bg.png')}}");
            background-repeat: repeat;
            background-size: auto;
        }

        .navbar-transparent {
            background: transparent;
            transition: background 0.3s;
        }

        .navbar-white {
            background: white;
            transition: background 0.3s;
        }

        .text-white {
            color: white;
        }

        .text-black {
            color: black;
        }

        .text-blue-700 {
            color: #3B82F6 !important;
        }
    </style>
</head>

<body class="bg-image">
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




    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.remove('navbar-transparent');
                navbar.classList.add('navbar-white');
            } else {
                navbar.classList.remove('navbar-white');
                navbar.classList.add('navbar-transparent');
            }
        });
    </script>

    <header id="home" class="relative flex items-center justify-center" style="margin-bottom: 50px;">
        <div class="overlay absolute inset-0 bg-black opacity-50"></div>
        <div class="aspect-w-16 aspect-h-9">
            <iframe id="ytplayer" src="https://www.youtube.com/embed/sefSrrtFm7Y?autoplay=1&mute=1&enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="w-full h-full"></iframe>
        </div>
        <div class="relative z-10 text-center max-w-lg mx-auto">
            <h1 class="text-3xl font-semibold text-white" style="font-family: 'Press Start 2P'">IT Convert 2024</h1>
            <p class="text-sm text-gray-300 mt-2">
                Welcome to IT Convert 2024, the premier competition showcasing innovation in technology and creativity.
                Join us in exploring new frontiers and pushing boundaries in the digital world.
            </p>
            <div class="mt-4 space-x-4 flex justify-center">
                <a href="/register" class="text-white bg-[#61C6ED] hover:bg-[#2BBCEE] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Register</a>
                <a href="/login" class="text-white bg-[#61C6ED] hover:bg-[#2BBCEE] focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2">Login</a>
            </div>
        </div>
    </header>

    <script>
        // Ambil elemen iframe
        var iframe = document.getElementById('ytplayer');

        // Fungsi untuk memulai ulang video saat selesai
        function onYouTubePlayerReady(playerId) {
            var player = new YT.Player(playerId, {
                events: {
                    'onStateChange': function(event) {
                        if (event.data === YT.PlayerState.ENDED) {
                            player.playVideo(); // Memulai ulang video setelah selesai
                        }
                    }
                }
            });
        }
    </script>

    <script src="https://www.youtube.com/iframe_api"></script>


    <div id="default-carousel" class="relative w-full mx-auto max-w-screen-lg" data-carousel="slide" style="margin-bottom: 50px;">
        <h1 class="text-3xl font-bold text-gray-900 mb-8 text-center">Bidang Lomba</h1>
        <div class="relative w-full pb-[50%] md:w-[95%] md:pb-[50%] mx-auto overflow-hidden rounded-lg">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="/detailsscience">
                    <img src="{{asset('assets/kti.png')}}" class="absolute block w-full h-full object-cover" alt="...">
                </a>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="/detailsbusplan">
                    <img src="{{asset('assets/bistik.png')}}" class="absolute block w-full h-full object-cover" alt="...">
                </a>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="/detailsppl">
                    <img src="{{asset('assets/ppl.png')}}" class="absolute block w-full h-full object-cover" alt="...">
                </a>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="/detailsux">
                    <img src="{{asset('assets/ux.png')}}" class="absolute block w-full h-full object-cover" alt="...">
                </a>
            </div>
        </div>
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-[110%] w-[20%] px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-[110%] w-[20%] px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="flex justify-center flex-wrap">
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                <a href="#">
                    <div class="relative mx-16 mt-6">
                        <img class="w-full h-auto rounded-t-lg object-cover" src="{{asset('assets/itc.png')}}" alt="IT Convert 2024" style="max-height: 300px;" />
                    </div>
                </a>
                <div class="p-4 mt-auto">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">IT Convert 2024</h5>
                    </a>
                    <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-white text-sm font-medium text-center text-whitef rounded-lg bg-[#61C6ED] hover:bg-[#2BBCEE] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  h-full">
                <a href="#">
                    <div class="relative m-10">
                        <img class="my-[10vh] h-full rounded-t-lg object-cover" src="{{asset('assets/picture.png')}}" alt="Picture 2024" style="max-height: 300px;" />
                    </div>
                </a>
                <div class="p-4 mt-auto">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Picture 2024</h5>
                    </a>
                    <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#61C6ED] hover:bg-[#2BBCEE] rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Coming Soon !
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="flex justify-center items-center my-10" style="margin-top: 50px;">
        <div class="timeline-container w-full max-w-4xl bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold text-gray-900 mb-8 text-center">Timeline</h1>
            <ol class="relative border-l border-gray-200">
                <li class="mb-10 ml-6">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">29 Juni - 29 Juli 2024</time>
                    <h3 class="text-lg font-semibold text-gray-900">Tahap 1: Gelombang 1</h3>
                    <p class="text-base font-normal text-gray-500 mb-4">
                        ICT Scientific Paper: proposal (pdf), orisinil (pdf) <br>
                        ICT Business Plan: bmc (pdf), orisinil (pdf) <br>
                        Software Development: proposal (pdf), orisinil (pdf) <br>
                        UX Design: proposal (pdf), orisinil (pdf)
                    </p>
                    <a href="/dashboard" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-[#61C6ED] rounded-lg hover:bg-[#2BBCEE] focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Submit now
                        <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </li>
                <li class="mb-10 ml-6">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">30 Juli - 10 Agustus 2024</time>
                    <h3 class="text-lg font-semibold text-gray-900">Tahap 1: Gelombang 2</h3>
                    <p class="text-base font-normal text-gray-500 mb-4">
                        ICT Scientific Paper: proposal (pdf), orisinil (pdf) <br>
                        ICT Business Plan: bmc (pdf), orisinil (pdf) <br>
                        Software Development: proposal (pdf), orisinil (pdf) <br>
                        UX Design: proposal (pdf), orisinil (pdf)
                    </p>
                    <a href="/dashboard" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-[#61C6ED] rounded-lg hover:bg-[#2BBCEE] focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Submit now
                        <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </li>
                <li class="mb-10 ml-6">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">17 - 21 Agustus 2024</time>
                    <h3 class="text-lg font-semibold text-gray-900">Penjurian Tahap 1</h3>
                </li>
                <li class="mb-10 ml-6">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">22 Agustus 2024</time>
                    <h3 class="text-lg font-semibold text-gray-900">Pengumuman Tahap 1</h3>
                </li>
                <li class="mb-10 ml-6">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">23 Agustus - 3 September 2024</time>
                    <h3 class="text-lg font-semibold text-gray-900">Tahap 2</h3>
                    <p class="text-base font-normal text-gray-500 mb-4">
                        ICT Scientific Paper: full paper (pdf), poster (pdf) <br>
                        ICT Business Plan: proposal (pdf), poster (pdf) <br>
                        Software Development: prototype, video, poster (pdf) <br>
                        UX Design: prototype, video, poster (pdf)
                    </p>
                    <a href="/dashboard" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-[#61C6ED] rounded-lg hover:bg-[#2BBCEE] focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Submit now
                        <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </li>
                <li class="mb-10 ml-6">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">8 - 12 September 2024</time>
                    <h3 class="text-lg font-semibold text-gray-900">Penjurian Tahap 2</h3>
                </li>
                <li class="mb-10 ml-6">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">13 September 2024</time>
                    <h3 class="text-lg font-semibold text-gray-900">Pengumuman Tahap 2</h3>
                </li>
                <li class="mb-10 ml-6">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">14 - 23 September 2024</time>
                    <h3 class="text-lg font-semibold text-gray-900">Pengumpulan PPT untuk presentasi (dalam bentuk pdf)</h3>
                </li>
                <li class="ml-6">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">28 September 2024</time>
                    <h3 class="text-lg font-semibold text-gray-900">Tahap Final (Presentasi)</h3>
                </li>
            </ol>

        </div>
    </div>

    <div class="box-event w-full mx-auto items-center" style="margin-top: 50px;">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4" style="margin-left: 20px; text-align: center; margin-bottom:20px;">Supported by:</h1>
        <div class="slider relative overflow-hidden w-full items-center">
            <div class="slider-bg-gradient absolute top-0 left-0 right-0 bottom-0 z-10 pointer-events-none"></div>
            <div class="slide-track flex space-x-4 items-center" id="slider-track">
            </div>
        </div>
    </div>

    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        .box-event .slider {
            height: auto;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .box-event .slider:before,
        .box-event .slider:after {
            content: "";
            height: 100px;
            position: absolute;
            width: 200px;
            z-index: 2;
        }

        .box-event .slider:after {
            right: 0;
            top: 0;
            transform: rotateZ(180deg);
        }

        .box-event .slider:before {
            left: 0;
            top: 0;
        }

        .box-event .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 500);
            /*ini yang 50 itu sesuaikan dengan jumlah duplikasi*/
        }

        .box-event div.slide {
            padding: 0 12px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>

    <script>
        const sponsorImages = [
            "{{asset('images/DevOps Powered By Logo_warna-02.png')}}",
            "{{asset('images/SE_new_logo-01.png')}}",
            "{{asset('images/Logo 2x.png')}}"
        ];
        const sliderTrack = document.getElementById('slider-track');

        // Duplikasi gambar
        const duplicateTimes = 500; // Ubah sa akeh2 e
        for (let i = 0; i < duplicateTimes; i++) {
            sponsorImages.forEach(image => {
                const slideDiv = document.createElement('div');
                slideDiv.className = 'slide';
                const img = document.createElement('img');
                img.src = image;
                img.alt = 'Sponsor';
                img.className = 'h-16';
                slideDiv.appendChild(img);
                sliderTrack.appendChild(slideDiv);
            });
        }
    </script>
</body>

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