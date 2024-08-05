@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-10 md:px-48 my-auto max-w-screen-xl text-center py-24 lg:py-56">
    <h1 class="h-[120px] md:h-[200px] pt-16 border-b-8 md:border-b-0 md:border-l-8 border-primary pl-2 rounded-sm text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-center md:text-start">
      Tentang Kami
    </h1>
  </div>
</section>


{{-- main --}}
<div class="my-16 mb-2 flex sm:w-[80%] mx-auto">
  <div>
    <p class="text-4xl md:text-4xl font-bold text-center md:text-start my-2" id="section2">Tentang</p>
    <hr class="border-4 w-28 mx-auto md:mx-0 border-primary">

    <div class="my-10 text-justify text-base md:text-lg font-sans px-7">
      <p class="prose">
        Sesuai dengan kebijakan umum pada UG Good University Governance yang menyatakan bahwa Pengelolaan Sistem Informasi menjadi wewenang dan tanggung jawab Biro Administrasi Perencanaan dan Sistem Informasi,
        yang berada di tingkat Universitas dan bertanggung jawab ke Rektor Universitas Gunadarma melalui Wakil Rektor sesuai dengan lingkup kerjanya, 
        Biro Administrasi Perencanaan dan Sistem Informasi (BAPSI) merupakan salah satu unit struktural yang ikut mempunyai kontribusi dalam perencanaan, pengembangan, implementasi dan 
        pemeliharaan fasilitas teknologi informasi di Universitas Gunadarma.  Fungsi dan wewenang BAPSI secara umum bersifat koordinatif bersama unit pelaksana dan unit terkait lainnya 
        dalam peningkatan layanan informasi akademik dan pembelajaran berbasis teknologi informasi dan komunikasi.
    
        Bapsi merupakan unit kerja di tingkat universitas yang berada di bawah Rektor serta jajaran Wakil Rektor, sesuai dengan struktur organisasi Universitas Gunadarma. Struktur organisasi BAPSI secara keseluruhan selengkapnya dapat dilihat pada gambar di bawah ini.
      </p>

      <div class="my-4 flex justify-center">
        <img src="/img/baganBapsi.png" alt="Bagan BAPSI">
      </div>

      <p>
        Fungsi dan wewenang BAPSI secara umum bersifat koordinatif bersama unit pelaksana dan unit terkait lainnya dalam
        peningkatan layanan informasi akademik dan pembelajaran berbasis teknologi informasi dan komunikasi. 
        Pada tahun 2007 ini, BAPSI membentuk unit kerja khusus yaitu Network Operation Center (UG-NOC), System Development Center (UG-SDC), Media and Information Center (UG-MIC), E-Learning Center (UG-ELC), dan Research Information Center (UG-RIC). 
        Kelima unit baru tersebut melengkapi struktur BAPSI sebelumnya, khususnya yang terkait dengan layanan Sistem Informasi.
      </p>
    </div>
  </div>
</div>
@endsection