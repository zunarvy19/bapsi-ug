@extends('layouts.mainNavbar')

@section('main')

{{-- Hero --}}
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="border-l-8 border-primary pl-2 rounded-sm  text-3xl  font-extrabold tracking-tight text-white md:text-6xl text-start">Biro Administrasi Perencanaan dan <br> Sistem Informasi Universitas <br>Gunadarma</h1>
  </div>
</section>

{{-- Cards --}}
<div class="flex justify-center items-center flex-col md:flex-row mx-auto gap-y-4 md:gap-x-6 -mt-16 md:-mt-20">


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
    <div class="text space-y-6 basis-1/2 pt-0 md:pt-20">
      <p class="text-4xl font-bold text-center md:text-start" id="section2">Tentang</p>
      <hr class="border-4 w-28 mx-auto md:mx-0 border-primary">
      <p class="text-md md:text-xl text-justify md:text-justify leading-loose md:leading-loose text-[#626f80] px-10 md:px-0 ">
        <span class="font-bold">BAPSI</span>, yang merupakan singkatan dari Biro Administrasi Perencanaan dan Sistem Informasi di Universitas Gunadarma, bertanggung jawab atas pengaturan 
        dan pengembangan sistem informasi universitas. BAPSI bekerja di bawah pengawasan Rektor melalui Wakil Rektor 
        dan memiliki peran penting dalam pengembangan serta pemeliharaan teknologi informasi yang mendukung layanan akademik dan pembelajaran berbasis teknologi informasi.
      </p>

      <div class="flex justify-center md:justify-start ">
        <button type="button" class="text-white bg-primary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 btn hover:bg-primary  md:mx-0">
          <a href="/tentang-kami" class="text-base">Selengkapnya &rarr;</a>
        </button>
      </div>
    </div>
    <div class="md:basis-1/2 flex justify-center md:justify-start">
      <img src="/img/aboutUs.png" alt="About BAPSI" class="w-[90%] mx-auto md:mx-0 mb-10">
    </div>
  </div>
</div>


{{-- visi misi --}}
<div class="w-full mx-auto md:w-screen h-auto bg-[#F3F4F6]">
  <div class="py-10 md:py-20">
    <h1 class="text-center text-4xl  md:text-5xl font-bold">Visi & Misi</h1>
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
          <h2 class="text-4xl md:text-5xl font-bold mb-2">Berita Terbaru</h2>
          <div class="border-t-4 border-primary w-32 mb-4"></div>
      </div>
      @if($berita)
      <div class="bg-white p-4 rounded-lg flex flex-col space-y-4">
          <div class="flex flex-col sm:flex-col md:flex-row md:space-x-4">
              @if ($berita->image)
              <a href="/berita/{{$berita->slug}}" class="relative md:flex gap-x-2">
                  <img src="{{ asset('storage/' . $berita->image) }}" alt="News Image" class="w-full md:w-1/2 rounded-lg">
              @else
                  <img src="https://via.placeholder.com/150" alt="News Image" class="w-full md:w-1/2 rounded-lg">
              @endif
              <div class="mt-2 sm:mt-4 md:mt-0">
                  <p class="text-gray-500 text-xs mb-2">{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, j F Y') }}</p>
                  <h3 class="font-bold mb-2">{{ $berita->title }}</h3>
              </div>
              </a>
          </div>
      </div>    
      @else
      <p class="text-gray-500 text-center"></p>
      @endif
  </div>
  
  <!-- Section Other News -->
  <div class="flex-1 space-y-4 pt-10">
      @if($news->isNotEmpty())
      @foreach ($news as $data)
      <div class="flex items-start  space-x-4">
          @if ($data->image)
          <a href="/berita/{{$data->slug}}"  class="flex gap-x-2">
            <img src="{{ asset('storage/' . $data->image) }}" alt="News Image" class="w-20 h-20 rounded-lg">
            @else
            <img src="https://via.placeholder.com/75" alt="News Image" class="w-20 h-20 rounded-lg">
            @endif
            <div>
                <p class="text-gray-500 text-xs mb-2">{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, j F Y') }}</p>
                <h4 class="font-bold">{{ $data->title }}</h4>
            </div>
          </a>
      </div>
      @endforeach
      <div class="mx-auto md:mx-0 flex justify-center md:justify-start">
        <button class="self-start bg-primary text-white px-4 py-2 btn hover:bg-primary">
          <a href="/berita">Berita Lainnya &rarr;</a>
      </button>
      </div>
      @else
      <p class="text-gray-500 text-center text-xl">Tidak ada berita saat ini.</p>
      @endif
  </div>
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


  <div class="flex justify-center flex-col md:flex-row mx-auto">

    <div class="flex justify-center flex-col md:flex-row gap-x-10 mx-auto px-10">


      @forelse ($artikel as $item)
      <div class="card card-compact bg-base-100 w-96 shadow-lg">
        <div class="p-4">
          <p class="card-title pt-5 text-2xl">
            {{$item->title}}
          </p>
          <hr class="">
        </div>
        <div class="card-body -mt-3">
          <div class="flex flex-row text-primary pb-5">
            <p class="text-primary">by <span class="font-bold">Admin</span> || </p>
            <p class="-ml-32">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, j F Y') }}</p>
          </div>
          <p class="text-lg text-justify">{!! Str::limit($item->excerpt, 200) !!}</p>
          <div class="card-actions justify-end pt-8">
            <button class="btn bg-primary border-none text-white hover:!bg-primary"><a href="/artikel/{{$item->slug}}">Baca Selengkapnya</a></button>
          </div>
        </div>
      </div>
      @empty
      <p class="text-gray-500 text-center text-xl">Tidak ada Artikel saat ini.</p>
      @endforelse

    

    


 
  </div>
</div>

<div class="mx-auto my-20" id="section2">
  <img src="/img/section.png" alt="section" class="max-w-sm mx-auto">
</div>

{{-- Detail Ask --}}
<div class="w-full  bg-primary p-10 md:p-32">
  <h1 class="prose text-lg text-justify md:text-start md:text-4xl text-white font-bold">JIKA ANDA BELUM MENEMUKAN INFORMASI YANG ANDA BUTUHKAN, 
    SILAKAN SEGERA HUBUNGI HELPDESK UNTUK MENDAPATKAN BANTUAN 
    DAN SOLUSI.</h1>
    
    <button type="button" class="mt-4 bg-white text-primary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 btn hover:bg-white"><a href="/helpdesk">
      <span class="font-semibold text-2xl">Helpdesk</span>  
    </a></button>
</div>

<div class="mx-auto mt-20" id="section2">
  <img src="/img/section.png" alt="section" class="max-w-sm mx-auto">
</div>

<div class="container mx-auto my-20 md:my-40 px-10">
  <div class="flex flex-col md:flex-row justify-between gap-x-52 gap-y-10">
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