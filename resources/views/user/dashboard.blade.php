@extends('layouts.mainNavbar')

@section('main')

{{-- Hero --}}
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="border-l-8 border-primary pl-2 rounded-sm  text-4xl  font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-start">Biro Administrasi Perencanaan dan <br> Sistem Informasi Universitas <br>Gunadarma</h1>
  </div>
</section>

{{-- Cards --}}
<div class="flex justify-center items-center flex-col md:flex-row mx-auto gap-y-4 md:gap-x-6 -mt-20">


<div class="max-w-sm">
  <div class="flex flex-col justify-center items-center hover:min-w-[20%] bg-white py-20 px-2 rounded-xl shadow-lg"> 
    <img src="/img/server.png" alt="" class=" text-primary">
    <h1 class="text-center mb-4 text-2xl md:text-4xl text-primary font-bold tracking-wide mt-5">24/7 Server</h1>
    <p class="text-center text-md font-medium  md:text-xl text-[#504f4f] md:leading-loose">Server di Universitas Gunadarma beroperasi 24 jam, selama tidak ada gangguan</p>
  </div>
</div>

<div class="max-w-sm">
  <div class="flex flex-col justify-center items-center hover:min-w-[20%] bg-white py-20 px-2 rounded-xl shadow-lg"> 
    <img src="/img/location.png" alt="" class=" text-primary">
    <h1 class="text-center mb-4 text-2xl md:text-4xl text-primary font-bold tracking-wide mt-5">Ruangan</h1>
    <p class="text-center text-md font-medium  md:text-xl text-[#504f4f] md:leading-loose">Ruangan BAPSI berada di Universitas Gunadarma Depok gedung 2 <br> lantai 3
    </p>
  </div>
</div>

<div class="max-w-sm">
  <div class="flex flex-col justify-center items-center hover:min-w-[20%] bg-white py-20 px-2 rounded-xl shadow-lg"> 
    <img src="/img/signal.png" alt="" class=" text-primary">
    <h1 class="text-center mb-4 text-2xl md:text-4xl text-primary font-bold tracking-wide mt-5">Internet</h1>
    <p class="text-center text-md font-medium  md:text-xl text-[#504f4f] md:leading-loose">Internet di Universitas Gunadarma beroperasi 24 jam, selama tidak ada gangguan
    </p>
  </div>
</div>



</div>

{{-- About Us --}}
<div class="mt-20 mb-10 flex sm:w-[80%] mx-auto">
  <div class="container flex flex-col-reverse md:flex md:flex-row mx-auto">
    <div class="text space-y-6 basis-1/2 pt-20">
      <p class="text-4xl md:text-4xl font-bold text-center md:text-start" id="section2">Tentang</p>
      <hr class="border-4 w-28 mx-auto md:mx-0 border-primary">
      <p class="text-md md:text-xl text-start md:text-start leading-loose md:leading-loose text-[#626f80] px-10 md:px-0 ">
        <span class="font-bold">BAPSI</span>, yang merupakan singkatan dari Biro Administrasi Perencanaan dan Sistem Informasi di Universitas Gunadarma, bertanggung jawab atas pengaturan 
        dan pengembangan sistem informasi universitas. BAPSI bekerja di bawah pengawasan Rektor melalui Wakil Rektor 
        dan memiliki peran penting dalam pengembangan serta pemeliharaan teknologi informasi yang mendukung layanan akademik dan pembelajaran berbasis teknologi informasi.
      </p>

      <div class="flex justify-center md:justify-start ">
        <button type="button" class="text-white bg-primary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 btn hover:bg-primary  md:mx-0">
          <a href="/tentang-kami">Selengkapnya &rarr;</a>
        </button>
      </div>
    </div>
    <div class="md:basis-1/2 flex justify-center md:justify-start">
      <img src="/img/aboutUs.png" alt="About BAPSI" class="w-[90%] mx-auto md:mx-0 mb-10">
    </div>
  </div>
</div>


{{-- visi misi --}}
<div class="w-full md:w-screen h-auto bg-[#F3F4F6]">
  <div class="py-20">
    <h1 class="text-center text-4xl  md:text-5xl font-bold" id="fitur">Visi & Misi</h1>
    <hr class="border-4 border-primary w-[10rem] mx-auto">
    <div class="bg-white p-6 shadow-lg w-[70%] mx-auto rounded-xl mt-5">
      <div class="mb-4">
        <h2 class="text-3xl font-bold">Visi</h2>
        <hr class="border-primary border-2 w-12">
      </div>
      <ol class="list-decimal ml-6 mb-6 text-base font-sans">
          <li>Menjadi pusat unggulan dalam pengelolaan teknologi informasi di lingkungan akademik Universitas Gunadarma.</li>
          <li>Mengoptimalkan penggunaan teknologi informasi untuk mendukung efisiensi layanan akademik dan administrasi.</li>
          <li>Mewujudkan inovasi teknologi yang berkelanjutan guna mendukung transformasi digital di bidang pendidikan</li>
      </ol>

      <div class="mb-4">
        <h2 class="text-3xl font-bold">Misi</h2>
        <hr class="border-primary border-2 w-12">
      </div>
      <ol class="list-decimal ml-6 font-sans">
          <li>Mengembangkan dan memeliharan infrastruktur teknologi informasi yang handal dan aman.</li>
          <li>Meningkatkan kualitas layanan akademik berbasis teknologi melalui kolaborasi dengan unit-unit terkait.</li>
          <li>Mendorong inovasi dalam pengelolaan sistem informasi dan pembelajaran berbasis teknologi di Universitas Gunadarma.</li>
      </ol>
    </div>

  </div>
</div>

{{-- news --}}
<div class="flex flex-col md:flex-row items-start space-y-6 md:space-y-0 md:space-x-6 w-[70%] mx-auto my-10">
  <!-- Section Latest News -->
  <div class="flex-1">
    <div class="flex justify-center flex-col">
      <h2 class="text-4xl md:text-5xl font-bold mb-2 ">Berita Terbaru</h2>
      <div class="border-t-4 border-primary w-32 mb-4"></div>
    </div>
    @if($berita)
    <div class="bg-white p-4 rounded-lg flex flex-col space-y-4">
        <div class="flex flex-col md:flex-row md:space-x-4">
            <img src="https://via.placeholder.com/150" alt="News Image" class="w-full md:w-1/2 rounded-lg">
            <div>
                <p class="text-gray-500 text-xs mb-2">{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, j F Y') }}</p>
                <h3 class="font-bold mb-2">{{ $berita->title }}</h3>
            </div>
        </div>
    </div>
    @endif


  </div>
  <!-- Section Other News -->
  <div class="flex-1 space-y-4 pt-10">
      <div class="flex items-start space-x-4">
          <img src="https://via.placeholder.com/75" alt="News Image" class="w-20 h-20 rounded-lg">
          <div>
              <p class="text-gray-500 text-xs mb-2">April 24, 2024</p>
              <h4 class="font-bold">Gunadarma University Celebrates Grand Inauguration of State-of-the-Art Technology Hub</h4>
          </div>
      </div>
      <div class="flex items-start space-x-4">
          <img src="https://via.placeholder.com/75" alt="News Image" class="w-20 h-20 rounded-lg">
          <div>
              <p class="text-gray-500 text-xs mb-2">April 24, 2024</p>
              <h4 class="font-bold">Gunadarma University Celebrates Grand Inauguration of State-of-the-Art Technology Hub</h4>
          </div>
      </div>
      <div class="flex items-start space-x-4">
          <img src="https://via.placeholder.com/75" alt="News Image" class="w-20 h-20 rounded-lg">
          <div>
              <p class="text-gray-500 text-xs mb-2">April 24, 2024</p>
              <h4 class="font-bold">Gunadarma University Celebrates Grand Inauguration of State-of-the-Art Technology Hub</h4>
          </div>
      </div>
      <button class="self-start bg-primary text-white px-4 py-2 btn hover:bg-primary"><a href="/berita">Berita Lainnya &rarr;</a></button>
  </div>
</div>

<div class="mx-auto my-20">
  <img src="/img/section.png" alt="section" class="max-w-sm mx-auto">
</div>

<div class="mx-auto" id="ugonthepress">
  <div class="mx-auto text-center mb-12">
    <h2 class="text-4xl md:text-5xl font-bold mb-2">Artikel UG</h2>
    <div class="border-t-8 border-primary w-32 mb-4 mx-auto"></div>
  </div>

  <div class="flex justify-center flex-col md:flex-row">
    <div class="p-4 max-w-md">
      <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-md !rounded-br-3xl overflow-hidden">
        <img class="h-48 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
        <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
          <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          <div class="flex items-center flex-wrap">
            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
              Learn More
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>1.2K
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="p-4 max-w-md">
      <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-md !rounded-br-3xl overflow-hidden">
        <img class="h-48 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
        <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
          <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          <div class="flex items-center flex-wrap">
            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
              Learn More
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>1.2K
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="p-4 max-w-md">
      <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-md !rounded-br-3xl overflow-hidden">
        <img class="h-48 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
        <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
          <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          <div class="flex items-center flex-wrap">
            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
              Learn More
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>1.2K
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mx-auto my-20" id="section2">
  <img src="/img/section.png" alt="section" class="max-w-sm mx-auto">
</div>

{{-- Detail Ask --}}
<div class="w-full  bg-primary p-10 md:p-32">
  <h1 class="prose text-lg text-start md:text-3xl text-white font-bold">JIKA ANDA BELUM MENEMUKAN INFORMASI YANG ANDA BUTUHKAN, 
    SILAKAN SEGERA HUBUNGI HELPDESK UNTUK MENDAPATKAN BANTUAN 
    DAN SOLUSI.</h1>
    
    <button type="button" class="mt-4 bg-white text-primary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 btn hover:bg-white"><a href="/helpdesk">
      <span class="font-semibold">Helpdesk</span>  
    </a></button>
</div>

<div class="mx-auto my-20" id="section2">
  <img src="/img/section.png" alt="section" class="max-w-sm mx-auto">
</div>

<div class="container mx-auto my-10">
  <div class="grid grid-rows-2 md:grid-cols-2 md:gap-2 px-10 md:px-20p">
    <!-- Left side: Title -->
    <div class="flex flex-col justify-center">
      <h2 class="text-4xl md:text-5xl font-bold text-center md:text-start">Frequently Asked Questions</h2>
      <div class="border-b-8 border-primary w-24 mx-auto md:mx-0 md:my-3"></div>
    </div>

    <!-- Right side: Accordion -->
    <div class="join join-vertical w-full">
      <div class="collapse collapse-arrow join-item border-base-300 border">
        <input type="radio" id="accordion-item-1" name="my-accordion-4" checked="checked" />
        <label for="accordion-item-1" class="collapse-title text-xl font-medium bg-primary text-white ">Apa peran utama BAPSI?</label>
        <div class="collapse-content bg-primary text-white">
          <p>
            BAPSI (Biro Administrasi Perencanaan dan Sistem Informasi) bertanggung jawab atas perencanaan, pengembangan, implementasi, dan pemeliharaan 
            fasilitas teknologi informasi di Universitas Gunadarma. 
            BAPSI juga berkoordinasi dengan unit terkait untuk meningkatkan layanan informasi akademik dan pembelajaran berbasis teknologi.
          </p>
        </div>
      </div>
      <div class="collapse collapse-arrow join-item border-base-300 border">
        <input type="radio" id="accordion-item-2" name="my-accordion-4" />
        <label for="accordion-item-2" class="collapse-title text-xl font-medium">Bagaimana struktur organisasi BAPSI?</label>
        <div class="collapse-content">
          <p>
            BAPSI merupakan unit struktural yang berada di bawah Rektor dan jajaran Wakil Rektor Universitas Gunadarma. 
            Fungsi dan wewenangnya bersifat koordinatif bersama unit-unit lain dalam universitas.
          </p>
        </div>
      </div>
      <div class="collapse collapse-arrow join-item border-base-300 border">
        <input type="radio" id="accordion-item-3" name="my-accordion-4" />
        <label for="accordion-item-3" class="collapse-title text-xl font-medium">Apa saja unit kerja yang berada di bawah BAPSI?</label>
        <div class="collapse-content">
          <p>
            BAPSI memiliki lima unit khusus yang dibentuk pada tahun 2007: 
            Network Operation Center (UG-NOC), System Development Center (UG-SDC), 
            Media and Information Center (UG-MIC), E-Learning Center (UG-ELC), 
            dan Research Information Center (UG-RIC).
          </p>
        </div>
      </div>
    </div>
    
    
  </div>
</div>



@endsection