@extends('layouts.sidebarAdmin');

@section('main')
<section class="w-full">
  <div id="mainbar" class="left-0 top-0 pt-16 w-full md:pl-64">
    <div class="p-5">
      <div>
        <h1 class="text-start capitalize text-4xl">Detail Berita</h1>
        <hr class="border border-gray-200 my-5">
      </div>
  
      <div class="mt-10">
        <h1 class="text-4xl font-bold capitalize">{{$berita->title}}</h1>
        <div class="text-gray-600 text-sm mt-2">
          <p>Ditulis oleh: <span class="font-semibold capitalize">{{Auth()->user()->name}}</span></p>
          <p>{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, j F Y') }}</p>
        </div>
        <div class="my-5">
          <img src="/img/infra1.png" alt="" class="w-full max-w-3xl mx-auto">
        </div>
      </div>
      <div class="my-10 prose max-w-none font-sans">
        {!! $berita->body !!}
      </div>
      <button class="btn bg-primary text-white hover:bg-primary hover:opacity-70"><a href="/admin/berita">Kembali</a></button>
    </div>
  </div>
</section>

@endsection