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

        

      </div>
    </div>
  </div>
</section>
@endsection