@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-48  my-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="border-l-8 h-[200px] pt-16 border-primary pl-2 rounded-sm  text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-start">{{$title}}</h1>
  </div>
</section>

<div class="container mx-auto p-4 my-16">
  <div class="mb-10">
    <p class="text-4xl md:text-4xl font-bold md:text-start my-2" id="section2">Fasilitas TIK</p>
    <hr class="border-4 w-32 mx-auto md:mx-0 border-primary">
  </div>

  <div class="my-10 text-justify text-base md:text-lg font-sans">
    <ul class="list-decimal pl-3">
      <li><a href="http://bapsi.gunadarma.ac.id/sistem-aplikasi-sistem-informasi-akademik-dan-portofolio-layanan-informasi-berbasis-web/" class="text-secondary">Sistem Aplikasi Sistem Informasi Akademik dan Portofolio Layanan Informasi Berbasis Web</a></li>
      <li>Portofolio Layanan Berbasis Web
        <ul class="list-disc pl-10">
          <li>Situs Resmi Universitas Gunadarma</li>
          <li>Website Program Studi</li>
          <li>Staffsite dan Studentsite</li>
          <li>BAAK Online</li>
          <li>Career Center</li>
        </ul>
      </li>
      <li>Fasilitas Pembelajaran Berbasis ICT
        <ul class="list-disc pl-10">
          <li>UG Learning Center</li>
          <li>UG Staffsite</li>
          <li>UG Studentsite</li>
          <li>UG Integrated Lab/Remote Lab</li>
          <li>UG HotZone</li>
          <li>UG Internet Lounge</li>
          <li>Student Digital Portofolio</li>
        </ul>
      </li>
      </li>
    </ul>
  </div>

</div>
@endsection