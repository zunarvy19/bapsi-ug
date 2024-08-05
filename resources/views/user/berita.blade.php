@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
    <div class="px-10 md:px-48 my-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="h-[120px] md:h-[200px] pt-16 border-b-8 md:border-b-0 md:border-l-8 border-primary pl-2 rounded-sm text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-center md:text-start">
        Berita
      </h1>
    </div>
  </section>

<div class="container mx-auto p-4 my-16">
    <div class="flex justify-center flex-col mx-auto mb-10">
      <h1 class="text-4xl font-bold text-center my-2">{{$title}}</h1>
      <hr class="border-4 w-32 mx-auto border-primary">
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Image 1">
          <div class="p-4">
              <p class="text-sm text-gray-600">March 29, 2024</p>
              <h3 class="text-lg font-semibold mt-2">Peneliti Universitas Gunadarma Memamerkan Terobosan Baru dalam Pengembangan Baterai Ramah Lingkungan</h3>
          </div>
      </a>
      <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Image 2">
          <div class="p-4">
              <p class="text-sm text-gray-600">March 22, 2024</p>
              <h3 class="text-lg font-semibold mt-2">Merintis Era Baru Kolaborasi Antara Pendidikan dan Industri</h3>
          </div>
      </a>
      <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Image 3">
          <div class="p-4">
              <p class="text-sm text-gray-600">March 30, 2024</p>
              <h3 class="text-lg font-semibold mt-2">Membangun Masyarakat Melalui Aksi Amal yang Berkelanjutan</h3>
          </div>
      </a>
      <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Image 4">
          <div class="p-4">
              <p class="text-sm text-gray-600">March 19, 2024</p>
              <h3 class="text-lg font-semibold mt-2">Pemulihan Lingkungan: Langkah-Langkah Menuju Keberlanjutan dan Keseimbangan</h3>
          </div>
      </a>
      <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Image 5">
          <div class="p-4">
              <p class="text-sm text-gray-600">March 19, 2024</p>
              <h3 class="text-lg font-semibold mt-2">Transformasi Pendidikan: Membuka Peluang dan Membentuk Masa Depan yang Cerah</h3>
          </div>
      </a>
      <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Image 6">
          <div class="p-4">
              <p class="text-sm text-gray-600">March 17, 2024</p>
              <h3 class="text-lg font-semibold mt-2">Vaksin Massal untuk Masyarakat di Sekitar Kampus D Gunadarma</h3>
          </div>
      </a>
      <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Image 7">
          <div class="p-4">
              <p class="text-sm text-gray-600">March 16, 2024</p>
              <h3 class="text-lg font-semibold mt-2">Server Gunadarma: Pondasi Digital untuk Inovasi Pendidikan dan Penelitian Unggul</h3>
          </div>
      </a>
      <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Image 8">
          <div class="p-4">
              <p class="text-sm text-gray-600">March 15, 2024</p>
              <h3 class="text-lg font-semibold mt-2">Memperdalam Koneksi Spiritual Sambil Merangkul Kebaikan untuk Menyambut Bulan Ramadhan</h3>
          </div>
      </a>
      <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Image 9">
          <div class="p-4">
              <p class="text-sm text-gray-600">March 14, 2024</p>
              <h3 class="text-lg font-semibold mt-2">Gunadarma dalam Kemajuan Ekonomi: Inovasi Pendidikan dan Penelitian Unggul untuk Pertumbuhan Berkelanjutan</h3>
          </div>
      </a>
  </div>
</div>
@endsection