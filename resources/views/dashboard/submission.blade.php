<x-app-layout>

    <div class="p-4 sm:ml-72 mt-16">
        <div class="py-12 mx-10 my-5 bg-white h-full z-50 border flex flex-col rounded-xl">
            <div class="m-5 ml-5 my-5 flex justify-center">
                <img class="h-full px-20 bb-20" src="{{asset('images/logo-itc.png')}}" alt="">
            </div>

            <div class="m-5">
                @if ($category == 'ICT Business Plan')
                <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                    <h2 id="accordion-color-heading-1">
                        <button type="button" class="flex flex-col items-start justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 relative" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                            <span class="text-2xl">1 <sup>st</sup> Stage</span>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">29 Juni 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">29 Juli 2024 00:00 WIB</div>
                            </div>
                            <svg data-accordion-icon class="w-3 h-3 absolute top-5 right-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) : </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. BMC submission</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">2. Originality sheet</p>
                            <!-- IF ELSE -->
                            <div class="ml-5 bg-green-100">
                                <a href="/submissions1" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                            <!-- Else -->
                            <!-- <div> -->
                            <!-- <p class="bg-yellow-200 p-5">Saat Ini Anda Belum Dapat Mengumpulkan Proposal Pada Tahap Ini </p> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-2">
                        <button type="button" class="flex flex-col items-start w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                            <div class="flex justify-between items-center w-full">
                                <span class="text-2xl">2 <sup>nd</sup> Stage</span>
                                <svg data-accordion-icon class="w-3 h-3 transform rotate-180 shrink-0 ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">12 August 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">28 August 2024 00:00 WIB</div>
                            </div>
                        </button>
                    </h2>
                    <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) : </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. Proposal submission </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">2. Poster submission</p>
                            <!-- IF ELSE -->
                            <div class="ml-5 bg-green-100">
                                <a href="/submissions2" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                            <!-- Else -->
                            <!-- <div> -->
                            <!-- <p class="bg-yellow-200 p-5">Saat Ini Anda Belum Dapat Mengumpulkan Proposal Pada Tahap Ini </p> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button" class="flex flex-col items-start w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 rounded-b-lg" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                            <div class="flex justify-between items-center w-full">
                                <span class="text-2xl">Final Stage</span>
                                <svg data-accordion-icon class="w-3 h-3 transform rotate-180 shrink-0 ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">12 September 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">21 September 2024 00:00 WIB</div>
                            </div>
                        </button>
                    </h2>
                    <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) :</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. PowerPoint submission</p>
                            <div class="ml-5 bg-green-100">
                                <a href="/final-submission" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif ($category == 'ICT Scientific Paper')
                <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                    <h2 id="accordion-color-heading-1">
                        <button type="button" class="flex flex-col items-start justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 relative" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                            <span class="text-2xl">1 <sup>st</sup> Stage</span>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">29 Juni 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">29 Juli 2024 00:00 WIB</div>
                            </div>
                            <svg data-accordion-icon class="w-3 h-3 absolute top-5 right-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) : </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. Abstract submission</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">2. Originality sheet</p>
                            <!-- IF ELSE -->
                            <div class="ml-5 bg-green-100">
                                <a href="/submissions1" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                            <!-- Else -->
                            <!-- <div> -->
                            <!-- <p class="bg-yellow-200 p-5">Saat Ini Anda Belum Dapat Mengumpulkan Proposal Pada Tahap Ini </p> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-2">
                        <button type="button" class="flex flex-col items-start w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                            <div class="flex justify-between items-center w-full">
                                <span class="text-2xl">2 <sup>nd</sup> Stage</span>
                                <svg data-accordion-icon class="w-3 h-3 transform rotate-180 shrink-0 ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">12 August 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">28 August 2024 00:00 WIB</div>
                            </div>
                        </button>
                    </h2>
                    <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) : </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. Full paper submission </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">2. Poster submission</p>
                            <!-- IF ELSE -->
                            <div class="ml-5 bg-green-100">
                                <a href="/submissions2" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                            <!-- Else -->
                            <!-- <div> -->
                            <!-- <p class="bg-yellow-200 p-5">Saat Ini Anda Belum Dapat Mengumpulkan Proposal Pada Tahap Ini </p> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button" class="flex flex-col items-start w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 rounded-b-lg" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                            <div class="flex justify-between items-center w-full">
                                <span class="text-2xl">Final Stage</span>
                                <svg data-accordion-icon class="w-3 h-3 transform rotate-180 shrink-0 ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">12 September 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">21 September 2024 00:00 WIB</div>
                            </div>
                        </button>
                    </h2>
                    <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) :</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. PowerPoint submission</p>
                            <div class="ml-5 bg-green-100">
                                <a href="/final-submission" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif ($category == 'Software Development')
                <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                    <h2 id="accordion-color-heading-1">
                        <button type="button" class="flex flex-col items-start justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 relative" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                            <span class="text-2xl">1 <sup>st</sup> Stage</span>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">29 Juni 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">29 Juli 2024 00:00 WIB</div>
                            </div>
                            <svg data-accordion-icon class="w-3 h-3 absolute top-5 right-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) : </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. Proposal submission</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">2. Originality sheet</p>
                            <!-- IF ELSE -->
                            <div class="ml-5 bg-green-100">
                                <a href="/submissions1" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                            <!-- Else -->
                            <!-- <div> -->
                            <!-- <p class="bg-yellow-200 p-5">Saat Ini Anda Belum Dapat Mengumpulkan Proposal Pada Tahap Ini </p> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-2">
                        <button type="button" class="flex flex-col items-start w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                            <div class="flex justify-between items-center w-full">
                                <span class="text-2xl">2 <sup>nd</sup> Stage</span>
                                <svg data-accordion-icon class="w-3 h-3 transform rotate-180 shrink-0 ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">12 August 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">28 August 2024 00:00 WIB</div>
                            </div>
                        </button>
                    </h2>
                    <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) : </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. Video submission</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">2. Poster submission</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">3. Prototype submission</p>
                            <!-- IF ELSE -->
                            <div class="ml-5 bg-green-100">
                                <a href="/submissions2" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                            <!-- Else -->
                            <!-- <div> -->
                            <!-- <p class="bg-yellow-200 p-5">Saat Ini Anda Belum Dapat Mengumpulkan Proposal Pada Tahap Ini </p> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button" class="flex flex-col items-start w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 rounded-b-lg" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                            <div class="flex justify-between items-center w-full">
                                <span class="text-2xl">Final Stage</span>
                                <svg data-accordion-icon class="w-3 h-3 transform rotate-180 shrink-0 ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">12 September 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">21 September 2024 00:00 WIB</div>
                            </div>
                        </button>
                    </h2>
                    <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) :</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. PowerPoint submission</p>
                            <div class="ml-5 bg-green-100">
                                <a href="/final-submission" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif ($category == 'UX Design')
                <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                    <h2 id="accordion-color-heading-1">
                        <button type="button" class="flex flex-col items-start justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 relative" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                            <span class="text-2xl">1 <sup>st</sup> Stage</span>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">29 Juni 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">29 Juli 2024 00:00 WIB</div>
                            </div>
                            <svg data-accordion-icon class="w-3 h-3 absolute top-5 right-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) : </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. Proposal submission</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">2. Originality sheet</p>
                            <!-- IF ELSE -->
                            <div class="ml-5 bg-green-100">
                                <a href="/submissions1" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                            <!-- Else -->
                            <!-- <div> -->
                            <!-- <p class="bg-yellow-200 p-5">Saat Ini Anda Belum Dapat Mengumpulkan Proposal Pada Tahap Ini </p> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-2">
                        <button type="button" class="flex flex-col items-start w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                            <div class="flex justify-between items-center w-full">
                                <span class="text-2xl">2 <sup>nd</sup> Stage</span>
                                <svg data-accordion-icon class="w-3 h-3 transform rotate-180 shrink-0 ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">12 August 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">28 August 2024 00:00 WIB</div>
                            </div>
                        </button>
                    </h2>
                    <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) : </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. Video submission</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">2. Poster submission</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">3. Prototype submission</p>
                            <!-- IF ELSE -->
                            <div class="ml-5 bg-green-100">
                                <a href="/submissions2" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                            <!-- Else -->
                            <!-- <div> -->
                            <!-- <p class="bg-yellow-200 p-5">Saat Ini Anda Belum Dapat Mengumpulkan Proposal Pada Tahap Ini </p> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button" class="flex flex-col items-start w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 rounded-b-lg" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                            <div class="flex justify-between items-center w-full">
                                <span class="text-2xl">Final Stage</span>
                                <svg data-accordion-icon class="w-3 h-3 transform rotate-180 shrink-0 ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div class="flex flex-row gap-2 mt-2">
                                <div class="text-white font-extrabold bg-sky-400 py-0.5 px-3 rounded-2xl">12 September 2024 00:00 WIB</div>
                                <div class="text-white font-extrabold bg-red-400 py-0.5 px-3 rounded-2xl">21 September 2024 00:00 WIB</div>
                            </div>
                        </button>
                    </h2>
                    <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Documents needed for this submission (.zip) :</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">1. PowerPoint submission</p>
                            <div class="ml-5 bg-green-100">
                                <a href="/final-submission" class="block w-full p-3 text-center">Submit Your Documents Here !</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>





    <!-- AKHIR CARD -->


</x-app-layout>