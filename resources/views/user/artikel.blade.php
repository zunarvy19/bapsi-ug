@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-12 my-12 py-20 md:px-48 md:my-auto max-w-screen-xl text-start md:text-center md:py-24 lg:py-56">
      <h1 class="md:border-l-8 md:h-[200px] py-8 md:pt-16 border-primary border-b-2 md:border-primary pl-2 rounded-sm text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl text-center">{{$title}}</h1>
  </div>
</section>

<div class="container mx-auto p-4 my-16">
    <div class="flex justify-center flex-col mx-auto mb-10">
      <h1 class="text-4xl font-bold text-center my-2">{{$title}}</h1>
      <hr class="border-4 w-32 mx-auto border-primary">   
    </div>

    <div class="my-10">
      
      <div class="grid-cols-1 sm:grid md:grid-cols-3 ">

        <div
          class="mx-3 mt-6 flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0 border border-gray-100 shadow-lg">
          <a href="#!">
            <img
              class="rounded-t-lg"
              src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp"
              alt="Hollywood Sign on The Hill" />
          </a>
          <div class="p-6">
            <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
            <p class="mb-4 text-base text-gray-400">
              January 29, 2016
            </p>
            <p class="mb-4 text-base">
              This is a longer card with supporting text below as a natural
              lead-in to additional content. This content is a little bit
              longer.
            </p>
            <div class="flex justify-end">
              <button
              type="button"
              class="inline-block  rounded bg-primary px-4 pb-[5px] pt-[6px] text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out">
              <a href="#">Baca</a>
            </button>
            </div>

          </div>
        </div>
      </div>
    </div>


</div>
@endsection