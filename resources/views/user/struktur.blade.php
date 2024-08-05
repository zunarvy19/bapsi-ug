@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
    <div class="px-10 md:px-48 my-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="h-[120px] md:h-[200px] pt-16 border-b-8 md:border-b-0 md:border-l-8 border-primary pl-2 rounded-sm text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-center md:text-start">
        Struktur BAPSI
      </h1>
    </div>
  </section>

<div class="container mx-auto p-4 my-16">
  
  <div class="flex justify-center flex-col mx-auto mb-10">
    <h1 class="text-4xl font-bold text-center my-2">Struktur Organisasi Biro <br> Sistem Informasi</h1>
    <hr class="border-4 w-96 mx-auto border-primary">
  </div>
  
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

    <div class="bg-white shadow-md rounded-lg p-6 border-gray-200 border">
      <h2 class="text-2xl font-semibold mb-4 text-center">Network Operation Center</h2>
      <ul class="space-y-2">
          <li class="flex items-center bg-gray-50 p-4 rounded border-t-4 border-primary">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">1</span>
              Instalasi, pemeliharaan, dan monitoring jaringan komputer.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">2</span>
              Layanan Akses dan koneksi internet.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">3</span>
              Bandwidth and Management Policy.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">4</span>
              Pemberdayaan layanan internet Inheritance.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">5</span>
              Pengukuran kinerja layanan intranet dan internet.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">6</span>
              Trouble Shooting, Risk Assessment, & DRP.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">7</span>
              Inventory Check List fasilitas jaringan komputer dan komunikasi data.
          </li>
      </ul>
  </div>

  <div class="bg-white shadow-md rounded-lg p-6 border-gray-200 border">
      <h2 class="text-2xl font-semibold mb-4 text-center">System Development Center</h2>
      <ul class="space-y-2">
          <li class="flex items-center bg-gray-50 p-4 rounded border-t-4 border-primary">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">1</span>
              Pengembangan sistem informasi sesuai dengan kebutuhan atau permintaan stakeholder.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">2</span>
              Pengembangan situs layanan Official Website.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">3</span>
              Dokumentasi sistem informasi.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">4</span>
              Pembuatan user guide.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">5</span>
              Pelatihan end user.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">6</span>
              Pembuatan portofolio aplikasi yang berjalan.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">7</span>
              Identifikasi kebutuhan sistem yang akan datang bersama-sama dengan calon pengguna sistem.
          </li>
      </ul>
  </div>

  <div class="bg-white shadow-md rounded-lg p-6 border-gray-200 border">
      <h2 class="text-2xl font-semibold mb-4 text-center">Media & Information Center</h2>
      <ul class="space-y-2">
          <li class="flex items-center bg-gray-50 p-4 rounded border-t-4 border-primary">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">1</span>
              Content provider untuk website gunadarma.ac.id, UG-News, UG-TV, UG-Radio.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">2</span>
              Helpdesk untuk media informasi gunadarma.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">3</span>
              Monitoring Website yang content-updating-nya disentralisasi.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">4</span>
              Layanan data untuk pihak eksternal.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">5</span>
              Public education berbasis TIK.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">6</span>
              Bantuan layanan promosi publik.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">7</span>
              Survey kepuasan pengguna akhir dan feedback mechanism.
          </li>
      </ul>
  </div>

  <div class="bg-white shadow-md rounded-lg p-6 border-gray-200 border">
      <h2 class="text-2xl font-semibold mb-4 text-center">E-Learning Center</h2>
      <ul class="space-y-2">
          <li class="flex items-center bg-gray-50 p-4 rounded border-t-4 border-primary">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">1</span>
              Koordinasi pengembangan materi e-learning dengan unit terkait.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">2</span>
              Pemeliharaan dan monitoring portal e-learning.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">3</span>
              Pengembangan content management & SOP implementasi e-learning.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">4</span>
              Diseminasi/pelatihan e-learning ke dosen dan mahasiswa.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">5</span>
              Monitoring pemanfaatan e-learning oleh dosen dan mahasiswa.
          </li>
      </ul>
  </div>

  <div class="bg-white shadow-md rounded-lg p-6 border-gray-200 border">
      <h2 class="text-2xl font-semibold mb-4 text-center">Research Information Center</h2>
      <ul class="space-y-2">
          <li class="flex items-center bg-gray-50 p-4 rounded border-t-4 border-primary">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">1</span>
              Penanggung jawab content management untuk e-journal dan repository system.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">2</span>
              Koordinasi dengan content provider untuk content-updating ke e-journal dan repository system.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">3</span>
              Diseminasi dan sosialisasi e-journal dan repository system.
          </li>
          <li class="flex items-center bg-gray-50 p-4 rounded-lg">
              <span class="text-primary font-bold rounded-full h-8 w-8 flex items-center justify-center mr-3 text-2xl">4</span>
              Kerjasama dengan pihak eksternal dalam penyediaan materi untuk e-journal dan repository system.
          </li>
      </ul>
  </div>

</div>
</div>
@endsection