@extends('layouts.sidebarAdmin')

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
          <p>Ditulis oleh: <span class="font-semibold capitalize">{{ Auth()->user()->name }}</span></p>
          <p>{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, j F Y') }}</p>
        </div>
        <div class="my-5">
          @if ($berita->image)
            <img src="{{ asset('storage/' . $berita->image)}}" alt="Berita" class="w-full max-w-3xl mx-auto">
          @else
            <img src="{{ asset('img/infra1.png')}}" alt="Berita" class="w-full max-w-3xl mx-auto">
          @endif
        </div>
      </div>
      <div class="my-10 prose lg:prose-sm max-w-none font-sans">
        {!! str_replace('<a ', '<a style="color: #2563eb;" ', $berita->body) !!}
      </div>
      <a href="/admin/berita">
      <button class="btn bg-primary text-white hover:bg-primary hover:opacity-70">
        
          Kembali
      </button>
    </a>
    </div>
  </div>
</section>

@endsection
