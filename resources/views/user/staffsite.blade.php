@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-48  my-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="border-l-8 h-[200px] pt-16 border-primary pl-2 rounded-sm  text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-start">{{$title}}</h1>
  </div>
</section>

<div class="my-16 mb-2 flex sm:w-[80%] mx-auto">
  <div>
    <p class="text-4xl md:text-4xl font-bold md:text-start my-2" id="section2">Staffsite</p>
    <hr class="border-4 w-28 mx-auto md:mx-0 border-primary">

    <div class="my-10 text-justify text-base md:text-lg font-sans">
      <p>
        Bagi Dosen/Staff Universitas Gunadarma yang ingin mengaktifkan Staffsite daapt mengajukan permohonan pembuatan
        e-mail yang ditujukan kepada Kepala Biro Administrasi Umum (BAU) melalui Media and Information Center (MIC) dengan
        terlebih dahulu dapat men-download formulir Staffsite
        
        <br>
        <br>

        <a href="http://bapsi.gunadarma.ac.id/wp-content/uploads/2014/05/Formulir-Staffsite.pdf" class="text-blue-500">
          Formulir Staffsite
        </a>

        <br>
        <br>

        Dengan mengaktifkan staffsite, dosen/staff akan mendapatkan fasilitas sebagai berikut: 

        <div class="pl-10">
          <ul class="list-disc">
            <li>Email (@staff.gunadarma.ac.id)</li>
            <li>Personal Site (https://staffsite.gunadarma.ac.id)</li>
            <li>Personal Blog (http:nustaffsite.gunadarma.ac.id/blog)</li>
            <li>Akses UG Hotzone</li>
          </ul>
        </div>

        
        
        
        Setelah melakukan pengisian formulis Staffsite, silahkan kirimkan formulir tersebut ke : <span><a href="">mediacenter@gunadarma.ac.id</a></span>
        sehingga bagian terkait dapat memproses permohonan tersebut.
        
        <br>
        <br>
        
        BAPSI
      </p>
    </div>
  </div>

  
</div>


@endsection