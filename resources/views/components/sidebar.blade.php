    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-[#B1E1F0] focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <!-- SIDEBAR Benar -->
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 font-sans" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <a href="/" class="flex items-center ps-2.5 mb-5">
                <img src="{{ asset('images/logo-itc.png') }}" alt="logo ITC" title="Logo ITC" class="h-10 w-full p-2">
            </a>

            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                    </a>
                </li>
                @if (auth()->user()->hasRole('admin'))
                <li>
                    <a href="/checkstage" class="{{ Request::is('checkstage') || Request::is('checkstages-kti') || Request::is('checkstages-ppl') || Request::is('checkstages-busplan') || Request::is('checkstages-ux') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Check Stage</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->hasRole('admin'))
                <li>
                    <a href="{{ route('makecompetition.index') }}" class="{{ Request::is('makecompetition') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Make Competition</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->hasRole('admin'))

                <li>
                    <a href="/download" class="{{ Request::is('download') || Request::is('download-path1') || Request::is('download-path2') || Request::is('download-path3') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Download Proposal</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->hasRole('admin'))

                <li>
                    <a href="/download-pembayaran" class="{{ Request::is('download-pembayaran') || Request::is('download-pembayaran-2') || Request::is('download-pembayaran-final') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Download Pembayaran</span>
                    </a>
                </li>
                @endif
                @if (!auth()->user()->hasRole('admin'))
                <li>
                    <a href="{{route('profile.index')}}" class="{{ Request::is('profile') || Request::is('profile/create') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group ">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Team Data</span>
                    </a>
                </li>
                @endif
                @if (!auth()->user()->hasRole('admin'))
                <li>
                    <a href="{{route('profile.index')}}" class="{{ Request::is('profile') || Request::is('profile/create') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group ">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Buat Lomba</span>
                    </a>
                </li>
                @endif
                @auth
                @if (optional(auth()->user()->teams)->verified_status != 'unverified' && auth()->user()->teams != null)
                @if (auth()->user()->teams->stage_id == 2 || auth()->user()->teams->stage_id == 5 || auth()->user()->teams->stage_id == 8 || auth()->user()->teams->stage_id == 11)
                <li>
                    <a href="{{ route('submissions2.index') }}" class="{{ Request::is('submission') || Request::is('submissions1') || Request::is('submissions2') || Request::is('final-submission') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Submission</span>
                    </a>
                </li>
                @elseif (auth()->user()->teams->stage_id == 3 || auth()->user()->teams->stage_id == 6 || auth()->user()->teams->stage_id == 9 || auth()->user()->teams->stage_id == 12)
                <li>
                <a href="/final-submission" class="{{ Request::is('submission') || Request::is('submissions1') || Request::is('submissions2') || Request::is('final-submission') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Submission</span>
                    </a>
                </li>
                @elseif(auth()->user()->teams->stage_id == 1 || auth()->user()->teams->stage_id == 4 || auth()->user()->teams->stage_id == 7 || auth()->user()->teams->stage_id == 10)
                <li>
                <a href="/submissions1" class="{{ Request::is('submission') || Request::is('submissions1') || Request::is('submissions2') || Request::is('final-submission') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Submission</span>
                    </a>
                </li>
                @endif
                @endif
                @endauth
                @if (auth()->user()?->teams?->stage_id !== 1 && auth()?->user()?->teams?->stage_id !== null && auth()?->user()?->teams?->stage_id !== 4 && auth()?->user()?->teams?->stage_id !== 7 && auth()?->user()?->teams?->stage_id !== 10 && auth()?->user()?->teams?->stage_id !== null)
                <li>
                    <a href="{{route('payment.index')}}" class="{{ Request::is('payment') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 4c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4zm2 0v12h12V4H4zm2 3h8v1H6V7zm0 3h8v1H6v-1zm0 3h8v1H6v-1z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Payment</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->hasRole('admin'))

                <li>
                    <a href="/checkpayment" class="{{ Request::is('checkpayment') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Check Payment</span>
                    </a>
                </li>
                @endif

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#B1E1F0] dark:bg-[#B1E1F0] group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4Zm0 2a6 6 0 100-12 6 6 0 000 12Zm0-10a4 4 0 110 8 4 4 0 010-8Z" />
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16Zm0-2a6 6 0 100-12 6 6 0 000 12Z" clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </aside>