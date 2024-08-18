@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-10 md:px-48 my-auto max-w-screen-xl text-center py-24 lg:py-56">
    <h1 class="h-[120px] md:h-[200px] pt-16 border-b-8 md:border-b-0 md:border-l-8 border-primary pl-2 rounded-sm text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-center md:text-start">
      Artikel UG
    </h1>
  </div>
</section>

<div class="container mx-auto p-4 my-16">
    <div class="flex justify-center flex-col mx-auto mb-10">
      <h1 class="text-4xl font-bold text-center my-2">{{$title}}</h1>
      <hr class="border-4 w-32 mx-auto border-primary">   
    </div>

    <div class="my-10">
      
      <div class= "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($artikel as $item)
        <div class="card card-compact bg-base-100 w-full md:w-96 shadow-lg">
            <div class="p-4">
                <p class="card-title pt-5">
                    {{$item->title}}
                </p>
                <hr class="">
            </div>
            <div class="card-body -mt-3">
                <div class="flex flex-row text-primary ">
                    <p class="text-primary">by <span class="font-bold">Admin</span> || </p>
                    <p class="-ml-32">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, j F Y') }}</p>
                </div>
                <p>{!! Str::limit($item->excerpt, 200) !!}</p>
                <div class="card-actions justify-end">
                    <button class="btn bg-primary border-none text-white hover:!bg-primary"><a href="/artikel/{{$item->slug}}">Baca Selengkapnya</a></button>
                </div>
            </div>
        </div>
        @empty
        <p class="text-gray-500 text-center text-xl">Tidak ada Artikel saat ini.</p>
        @endforelse
    </div>
    
    
    </div>

    <div class="mt-6">
      {{ $artikel->links('vendor.pagination.tailwind') }}
  </div>
</div>

</div>


@endsection