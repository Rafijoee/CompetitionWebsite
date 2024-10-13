<x-dashboard.layout>
   <div class="flex items-center justify-center h-48 mb-4 rounded">
      <img src="{{ asset('images/sample-header-form.png') }}" alt="itc-banner" class="w-full">
   </div>

   <div class="logos">
      <div class="logos-slide">
         <img src="{{asset('assets/itc.png')}}" alt="itc.png" class="scale-75">
         <img src="{{asset('assets/picture.png')}}" alt="itc.png" class="scale-50 -mb-2">
         <img src="{{asset('images/DevOps Powered By Logo_warna-02.png')}}" alt="itc.png" class="scale-150">
         <img src="{{asset('images/SE_new_logo-01.png')}}" alt="itc.png">
         <img src="{{asset('images/Logo 2x.png')}}" alt="itc.png" class="scale-125">
         <img src="{{asset('assets/itc.png')}}" alt="itc.png" class="scale-75">
         <img src="{{asset('assets/picture.png')}}" alt="itc.png" class="scale-50 -mb-2">
         <img src="{{asset('images/DevOps Powered By Logo_warna-02.png')}}" alt="itc.png" class="scale-150">
         <img src="{{asset('images/SE_new_logo-01.png')}}" alt="itc.png">
         <img src="{{asset('images/Logo 2x.png')}}" alt="itc.png" class="scale-125">
         <img src="{{asset('assets/itc.png')}}" alt="itc.png" class="scale-75">
         <img src="{{asset('assets/picture.png')}}" alt="itc.png" class="scale-50 -mb-2">
         <img src="{{asset('images/DevOps Powered By Logo_warna-02.png')}}" alt="itc.png" class="scale-150">
         <img src="{{asset('images/SE_new_logo-01.png')}}" alt="itc.png">
         <img src="{{asset('images/Logo 2x.png')}}" alt="itc.png" class="scale-125">
         <img src="{{asset('assets/itc.png')}}" alt="itc.png" class="scale-75">
         <img src="{{asset('assets/picture.png')}}" alt="itc.png" class="scale-50 -mb-2">
         <img src="{{asset('images/DevOps Powered By Logo_warna-02.png')}}" alt="itc.png" class="scale-150">
         <img src="{{asset('images/SE_new_logo-01.png')}}" alt="itc.png">
         <img src="{{asset('images/Logo 2x.png')}}" alt="itc.png" class="scale-125">
      </div>
   </div>
   <div class="grid grid-cols-3 gap-4 mb-4 mt-4">
      <div class="flex items-center justify-center rounded bg-white border border-gray-200 dark:bg-gray-800 h-36">
         <p class="text-black dark:text-white text-center">
            @if($team_name)
            <span class="font-black text-xl">{{ $team_name }}</span><br>
            @else
            <span class="font-black text-xl">No Information Yet</span><br>
            @endif
            @if(is_null($category))
            <span>No Information Yet</span>
            @else
            <span>{{ $category }}</span>
            @endif
         </p>
      </div>
      <div class="flex items-center justify-center rounded bg-white border border-gray-200 dark:bg-gray-800 h-36">
         <p class="text-black dark:text-white text-center">
            @if($team?->phone)
            <span class="font-black text-xl">{{ $team?->phone }}</span><br>
            @else
            <span class="font-black text-xl">No Information Yet</span><br>
            @endif
            <span class="text-sm font-normal">Captain's Number</span>
         </p>
      </div>
      <div class="flex items-center justify-center rounded bg-white border border-gray-200 dark:bg-gray-800 h-36">
         <p class="text-black dark:text-white text-center">
            @if(is_null($university))
            <span class="font-black text-xl">No Information Yet</span><br>
            @else
            <span class="font-black text-xl">{{$university}}</span><br>
            @endif
            <span class="text-sm font-normal">College</span>
         </p>
      </div>
   </div>

   <!-- NOTIF -->
   <div>
      @if (session()->has('success'))
      <div id="alert-border-3" class="flex items-center mt-5 p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
         <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
         </svg>
         <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
         </div>
         <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
         </button>
      </div>
      @endif
      @if (is_null($verif))

      <div class="bg-red-300 my-10 flex items-center">
         <svg class="flex-shrink-0 w-4 h-4 mx-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
         </svg>
         <span class="p-4">To proceed with uploading your submission, please ensure that you complete your team's data in the sidebar menu.</span>
      </div>
      @endif
      @if ($verif == 'unverified')
      <div class="bg-lime-400 my-10 flex items-center">
         <svg class="flex-shrink-0 w-4 h-4 mx-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
         </svg>
         <span class="p-4">You have successfully uploaded your Team Data. Please wait for admin verification. Once your Team Data is verified, you can proceed to upload Submission 1.</span>
      </div>
      @endif
      @if ($stage?->id == 2 && is_null($payment) || $stage?->id == 5 && is_null($payment) || $stage?->id == 8 && is_null($payment) || $stage?->id == 11 && is_null($payment))
      <div class="bg-red-300 my-10 flex items-center">
         <svg class="flex-shrink-0 w-4 h-4 mx-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
         </svg>
         <span class="p-4">To proceed with uploading Submission 2, please ensure you have uploaded the payment proof available in the sidebar. This step is necessary to complete your submission process.</span>
      </div>
      @endif
      @if ($stage?->id == 2 && $payment?->status == 'unverified' || $stage?->id == 5 && $payment?->status == 'unverified' || $stage?->id == 8 && $payment?->status == 'unverified' || $stage?->id == 11 && $payment?->status == 'unverified')
      <div class="bg-lime-400 my-10 flex items-center">
         <svg class="flex-shrink-0 w-4 h-4 mx-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
         </svg>
         <span class="p-4">You have successfully uploaded your payments files. Please wait for admin verification. Once your files are verified, you can proceed to upload Submission 2.</span>
      </div>
      @endif
      @if ($stage?->id == 3 && is_null($payment2) || $stage?->id == 6 && is_null($payment2) || $stage?->id == 9 && is_null($payment2) || $stage?->id == 12 && is_null($payment2))
      <div class="bg-red-300 my-10 flex items-center">
         <svg class="flex-shrink-0 w-4 h-4 mx-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
         </svg>
         <span class="p-4">To proceed with uploading Submission 2, please ensure you have uploaded the payment proof available in the sidebar. This step is necessary to complete your submission process.</span>
      </div>
      @endif
      @if ($stage?->id == 3 && $payment2?->status == 'unverified' || $stage?->id == 6 && $payment2?->status == 'unverified' || $stage?->id == 9 && $payment2?->status == 'unverified' || $stage?->id == 12 && $payment2?->status == 'unverified')
      <div class="bg-red-300 my-10 flex items-center">
         <svg class="flex-shrink-0 w-4 h-4 mx-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
         </svg>
         <span class="p-4">You have successfully uploaded your team data files. Please wait for admin verification. Once your files are verified, you can proceed to upload Submission 1.</span>
      </div>
      @endif
      <!-- BAWAH KIRI -->
      <div class="grid grid-cols-2 gap-5">
         <div class="w-full text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-200">
            <div class="mb-5 flex flex-col"> <!-- JUMLAH MEMBER -->
               @if ($anggotas)
               <h5 class="text-5xl font-bold text-gray-900 dark:text-white mb-10">Members</h5>
               @foreach ($anggotas as $anggota)
               <h5 class="text-3xl font-bold text-gray-900 dark:text-white mb-1">{{ $anggota?->full_name }}</h5>
               <p class="text-gray-500">{{ $anggota->universitas }}</p>
               @endforeach
               @elseif ($anggotas == null)
               <div class="flex flex-col items-center mt-[5dvh]">
                  <h5 class="text-3xl font-bold text-gray-900 dark:text-white mb-[3dvh]">No Member Yet</h5>
                  <p class="text-gray-500 mb-[3dvh]">You need to fulfill your team data.</p>
                  <a href="{{route('profile.index')}}" class="w-full sm:w-auto bg-sky-400 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-500">
                     <div class="text-left rtl:text-right">
                        <div class="mb-1 text-sm">Team Data</div>
                     </div>
                  </a>
               </div>
               @endif
            </div>
         </div>

         <!-- BAWAH KANAN -->
         <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-200">
            <div class="w-full p-4 text-center">
               <div class="mb-5 mt-[2vh]"> <!-- JUMLAH MEMBER -->
                  @if ($member)
                  <h5 class="text-3xl font-bold text-gray-900 dark:text-white mb-1">{{ count($member) }}</h5>

                  @else
                  <h5 class="text-3xl font-bold text-gray-900 dark:text-white mb-1">No Member Yet</h5>
                  @endif
                  <p class="text-gray-500">Members</p>
               </div>
               <div class="mb-5"> <!-- JUMLAH STAGE -->
                  <h5 class="text-3xl font-bold text-gray-900 dark:text-white mb-1">{{ $stage?->name }}</h5>
                  <p class="text-gray-500">{{ $stage?->description }}</p>
               </div>
               <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse font-bold">
                  <a href="{{route('profile.index')}}" class="w-full sm:w-auto bg-sky-400 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-500">
                     @if(is_null($status) || $status == 'unverified')
                     <p>unverified</p>
                     @elseif($status == 'verified')
                     <p>{{ $status }}</p>
                     @else
                     <p>Status tidak diketahui</p>
                     @endif
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div id="default-carousel" class="relative w-full mx-auto max-w-screen-lg mt-20" data-carousel="slide" style="margin-bottom: 50px;">
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
</x-dashboard.layout>

<style>
   @keyframes slide {
      from {
         transform: translateX(0);
      }
      to {
         transform: translateX(-90%);
      }
   }

   .logos {
      overflow: hidden;
      background-color: white;
      padding: 20px 0;
      white-space: nowrap;
      position: relative;
   }

   .logos:before,
   .logos:after {
      position: absolute;
      top: 0;
      width: 250px;
      height: 100%;
      content: "";
      z-index: 2;
   }

   .logos:before {
      left: 0;
      background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
   }

   .logos:after {
      right: 0;
      background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
   }

   .logos-slide {
      display: inline-flex;
      animation: 20s slide infinite linear;
   }

   .logos-slide img {
      height: 50px;
      margin: 0 60px; /* Perbesar margin horizontal untuk menambah jarak antar gambar */
   }
</style>