@extends('layouts.sidebarAdmin')

@section('main')
<section class="w-full">
  <div id="mainbar" class="fixed left-0 top-0 pt-16 w-full md:pl-64">

    <div class="p-5">
      <div>
        <h1 class="text-start capitalize text-4xl">Selamat datang, {{ Auth::user()->name }}!</h1>
        <hr class="w-screen border border-gray-200 my-5">
      </div>
  
      <div class="mt-20">

        <div class="flex justify-center flex-wrap flex-col md:flex-row gap-8">

          <div class="w-auto md:w-[20%] px-14 py-10 bg-primary rounded-lg" id="card">
            <div class="font-bold text-white">
              <h3 class="text-2xl">Jumlah Berita: </h3>
              <h3 id="datenow" class="text-lg">{{$berita}}</h3>
              <h3 id="datenow" class="text-lg">Berita</h3>
            </div>
          </div>

          <div class="w-auto md:w-[20%] p-10 bg-primary rounded-lg" id="card">
            <div class="font-bold text-white">
              <h3 class="text-2xl">Jumlah Artikel: </h3>
              <h3 class="text-lg">{{$artikel}}</h3>
              <h3 class="text-lg">Artikel</h3>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>
@endsection