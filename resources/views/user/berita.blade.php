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
    @foreach ($berita as $item)
    <a href="/berita/{{$item->slug}}" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
        @if ($item->image)
          <img src="{{ asset('storage/' . $item->image) }}" alt="News Image" class="w-full h-48 object-cover">
          @else
          <img src="https://via.placeholder.com/400x200" alt="News Image" class="w-full h-48 object-cove">
          @endif
        <div class="p-4">
            <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, j F Y') }}</p>
                <h3 class="text-lg font-semibold mt-2">{{$item->title}}</h3>
        </div>
    </a>
    @endforeach

</div>
<div class="mt-6">
        {{ $berita->links('vendor.pagination.tailwind') }}
    </div>
</div>
@endsection