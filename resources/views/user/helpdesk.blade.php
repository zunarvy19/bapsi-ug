@extends('layouts.mainNavbar')

@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-10 md:px-48 my-auto max-w-screen-xl text-center py-24 lg:py-56">
    <h1 class="h-[120px] md:h-[200px] pt-16 border-b-8 md:border-b-0 md:border-l-8 border-primary pl-2 rounded-sm text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-center md:text-start">
      Helpdesk
    </h1>
  </div>
</section>

<div class="my-16 mb-2 flex sm:w-[80%] mx-auto">
  <div>
    <p class="text-4xl md:text-4xl font-bold md:text-start my-2 text-center" id="section2">Helpdesk</p>
    <hr class="border-4 w-28 mx-auto md:mx-0 border-primary">

    <div class="my-10 text-justify text-base md:text-lg font-sans px-8">

      <p>
        Apabila Anda mempunyai pertanyaan, keluhan atau kritik terhadap BAPSI, Anda dapat mengakses sistem helpdesk pada url berikut:
        <span><a href="http://helpdesk.gunadarma.ac.id/" class="text-secondary">helpdesk.gunadarma.ac.id</a></span>

        <br>
        <p>Silahkan baca file <span><a href="https://bapsi.gunadarma.ac.id/wp-content/uploads/2014/09/Tata-Cara-Penggunaan-Helpdesk-Gunadarma.pdf" class="text-secondary">tata cara penggunaan helpdesk gunadarma</a></span> sebagai tuntunan dalam penggunaan sistem Helpdesk</p>
      </p>
    </div>
  </div>

  
</div>
@endsection