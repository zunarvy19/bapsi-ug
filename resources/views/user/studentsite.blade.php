@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-48  my-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="border-l-8 h-[200px] pt-16 border-primary pl-2 rounded-sm  text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-start">{{$title}}</h1>
  </div>
</section>

<div class="my-16 mb-2 flex sm:w-[80%] mx-auto">
  <div>
    <p class="text-4xl md:text-4xl font-bold md:text-start my-2" id="section2">Studentsite</p>
    <hr class="border-4 w-28 mx-auto md:mx-0 border-primary">

    <div class="my-10 text-justify text-base md:text-lg font-sans">
      <p>
        Seluruh mahasiswa Universitas Gunadarma berhak untuk mendapatkan account di Studentsite, fasilitas-fasilitas yang <br>
        didapatkan apabila telah mengaktifkan account Studentsite, yaitu:

        <br>
        <br>

        <div class="pl-10">
          <ul class="list-disc">
            <li>Email Account (@staff.gunadarma.ac.id)</li>
            <li>Akses ke informasi Akademik UG</li>
            <li>Rangkuman Nilai</li>
            <li>Pendaftaran Sidang</li>
            <li>Akses UG Hotzone</li>
            <li>Agenda, dsb.</li>
          </ul>
        </div>
        <br>
        Untuk mengaktifkan account Studentsite dapat dilakukan melalui link berikut: <br> <span><a href="https://studentsite.gunadarma.ac.id/aktivasi/" class="text-blue-500">https://studentsite.gunadarma.ac.id/aktivasi/</a></span>, 
        cukup dengan memasukkan NPM/Nopend, tanggal lahir dan tempat lahir. Apabila Anda menemui kesulitan dalam melakukan aktivasi, segera hubungi:
        
        <ul>
          <li>Media Information Center</li>
          <li>Telp: 021-788811112, Ext: 234</li>
          <li>Email: mediacenter@gunadarma.ac.id</a></li>
        </ul>
        
        
        <br>
        <br>
        
        BAPSI
      </p>
    </div>
  </div>

  
</div>
@endsection