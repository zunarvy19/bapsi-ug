@extends('layouts.sidebarAdmin')

@section('main')
<section class="w-full">
  <div id="mainbar" class=" left-0 top-0 pt-16 w-full md:pl-64">
      <div class="px-4 md:px-8">
          <h1 class="text-start capitalize text-3xl py-5">Data Artikel</h1>
          <hr class="w-full border border-gray-200">
  
      <div class="mt-20">
  
          <div class="flex justify-between items-center ">
              <div class="flex flex-col">
                  <h1 class="text-3xl" >Data Artikel</h1>
                  <hr class="w-32 border-2 border-primary my-4">
              </div>
              <div>
              <a href="/admin/data">
              <button type="button" class="text-white bg-red-600 
              focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Kembali
              </button>
              </a>
              </div>
          </div>
  
          
          <section class="bg-white border rounded-lg mb-5">
              <div class=" px-4 py-8 mx-auto">
                  <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Buat Artikel</h2>
                  <form action="/admin/berita/buat-berita" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                      <div class="flex flex-col gap-4 mb-4 sm:mb-5">
                          <div class="sm:col-span-2 w-full">
                              <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                              <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " value="{{old('title')}}" placeholder="Judul" required>
                              @error('title')<p class="peer-invalid:visible text-red-700">{{ $message }}</p>@enderror
                          </div>
                          <div class="w-full">
                              <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                              <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Slug" value="{{old('slug')}}" readonly>
                              @error('slug')<p class="peer-invalid:visible text-red-700">{{ $message }}</p>@enderror
                          </div>
                          <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Gambar</label>
                            <input accept="image/*" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file" name="image" value="{{old('gambar')}}">   
                            @error('gambar')<p class="peer-invalid:visible text-red-700">{{ $message }}</p>@enderror                         
                          </div>

                          <div>
                            <label for="body" class="block text-sm font-medium text-gray-900">Isi Artikel</label>
                            <input id="body" type="hidden" name="body" value="{{ old('body') }}" required>
                            <trix-editor input="body" class="peer bg-white border border-prime rounded py-3 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full h-[35vh] overflow-auto"></trix-editor>
                            @error('body')<p class="peer-invalid:visible text-red-700">{{ $message }}</p>@enderror
                          </div>
                          
                      </div>
                      <div class="flex items-center justify-start space-x-4">
                          <button type="submit" class="text-white bg-primary hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                              Buat Artikel
                          </button>
                      </div>
                  </form>
              </div>
            </section>
          </div>
        </section>

        <script>
          const title = document.querySelector('#title');
          const slug = document.querySelector('#slug');

          function createSlug(text) {
              return text.toString().toLowerCase()
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
          }

          title.addEventListener('input', function() {
              slug.value = createSlug(title.value);
          });

          document.addEventListener('trix-file-accept', function(e){
              e.preventDefault();
          });
      
        </script>
@endsection
