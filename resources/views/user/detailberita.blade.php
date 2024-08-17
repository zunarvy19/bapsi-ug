@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-10 md:px-48 my-auto max-w-screen-xl text-center py-24 lg:py-56">
    <h1 class="h-[120px] md:h-[200px] pt-16 border-b-8 md:border-b-0 md:border-l-8 border-primary pl-2 rounded-sm text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-center md:text-start">
      Berita
    </h1>
  </div>
</section>

<div class="my-16 mb-2 flex sm:w-[80%] mx-auto">
  <div>
    <p class="text-4xl md:text-4xl font-bold md:text-start my-2 text-center" id="section2">Berita</p>
    <hr class="border-4 w-28 mx-auto md:mx-0 border-primary">

    <div class="my-10 text-justify text-base md:text-lg font-sans px-8">
      <h1 class="text-4xl font-bold capitalize">{{$berita->title}}</h1>
      <div class="mb-10 text-xl">
        <p>Ditulis oleh <span class="font-semibold">Admin</span> || <span class="font-semibold">{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, j F Y') }}</span></p>
      </div>
      <div class="my-5">
        @if ($berita->image)
          <img src="{{ asset('storage/' . $berita->image)}}" alt="Berita" class="w-full max-w-3xl mx-auto">
        @else
          <img src="{{ asset('img/infra1.png')}}" alt="Berita" class="w-full max-w-3xl mx-auto">
        @endif
      </div>
      <div class="my-10 prose lg:prose-sm max-w-none font-sans">
        {!! str_replace('<a ', '<a style="color: #2563eb;" ', $berita->body) !!}
      </div>

      <a href="/berita">
        <button class="btn bg-primary text-white hover:bg-primary">
            Kembali
        </button>
      </a>
    </div>
  </div>

  
</div>
@endsection