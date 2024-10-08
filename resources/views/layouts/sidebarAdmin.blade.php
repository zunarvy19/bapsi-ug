<!doctype html>
<html class="scroll-smooth">
<head>
   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>{{$title}}</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      {{-- trix --}}
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
      <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
      <!-- flowbite -->
      @vite(['resources/css/app.css','resources/js/app.js'])
      <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">
</head>
<body>



<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
   <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
         <div class="flex items-center justify-start rtl:justify-end">
         <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
         <span class="sr-only">Open sidebar</span>
         <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
         </svg>
         </button>
      <a href="/dashboard" class="flex ms-2 md:me-24">
         <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Admin Panel BAPSI</span>
      </a>
      </div>
      <div class="flex items-center">
         <div class="flex items-center ms-3 ">
            <div>
            <button type="button" class="flex  focus:ring-4 focus:ring-gray-300 " aria-expanded="false" data-dropdown-toggle="dropdown-user">
            <span class="sr-only">Open user menu</span>
               <span class="font-semibold">{{Auth::user()->name}} </span>
            </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
            <div class="px-4 py-3" role="none">
               <p class="text-sm text-gray-900 dark:text-white" role="none">
                  {{Auth::user()->name}}
               </p>
               <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  {{Auth::user()->email}}
               </p>
            </div>
            </div>
         </div>
      </div>
   </div>
</div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">

         <li>
            <a href="/admin/dashboard-admin" class="flex items-center p-2 text-gray-900 rounded-lg  {{($title === 'Dashboard Admin') ? 'bg-primary text-white font-bold' : 'bg-white' }}">
               <svg class="w-5 h-5 {{($title === 'Dashboard Admin') ? 'bg-primary text-white font-bold' : 'bg-white' }} transition duration-75 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>

         <li>
            <a href="/admin/berita" class="flex items-center p-2 text-gray-900 rounded-lg {{ request()->is('admin/berita*') ? 'bg-primary text-white font-bold' : 'bg-white' }}">
               <svg class="w-6 h-6 {{ request()->is('admin/berita*') ? 'text-white' : 'text-gray-900' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Berita</span>
            </a>
         </li>

         <li>
            <a href="/admin/artikel" class="flex items-center p-2 text-gray-900 rounded-lg {{ request()->is('admin/artikel*') ? 'bg-primary text-white font-bold' : 'bg-white' }}">
               <svg class="w-6 h-6 {{ request()->is('admin/artikel*') ? 'text-white' : 'text-gray-900' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Artikel</span>
            </a>
      </li>

         <li>
            <form method="POST" action="{{ route('logout') }}" id="logoutForm" class="flex items-center">
               @csrf
               <x-dropdown-link href="#" id="logoutLink" class="flex items-center -ml-2">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                   </svg> 
                   <span class="text-gray-900">
                       {{ __('Log Out') }}
                   </span>
               </x-dropdown-link>
           </form>
           
           
           
           </li>
   
         </ul>
     </div>
   </aside>
   

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
        const logoutForm = document.getElementById('logoutForm');
        const logoutLink = document.getElementById('logoutLink');
        logoutLink.addEventListener('click', function(event) {
            event.preventDefault();
            
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#1F2937',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Logout',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                     logoutForm.submit(); // Submit form if user confirms
                }
            });
        });
    });
</script>


<div class="">
  @yield('main')  
</div>
</body>
</html>