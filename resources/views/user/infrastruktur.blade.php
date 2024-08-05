@extends('layouts.mainNavbar')


@section('main')
<section class="bg-center bg-[url('/public/img/home.jpg')] bg-gray-600 bg-blend-multiply">
  <div class="px-10 md:px-48 my-auto max-w-screen-xl text-center py-24 lg:py-56">
    <h1 class="h-[120px] md:h-[200px] pt-16 border-b-8 md:border-b-0 md:border-l-8 border-primary pl-2 rounded-sm text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-center md:text-start">
      {{$title}}
    </h1>
  </div>
</section>

<div class="container mx-auto p-4 my-16">
    <div class="flex justify-center flex-col mx-auto mb-10">
      <h1 class="text-4xl font-bold text-center my-2">{{$title}}</h1>
      <hr class="border-4 w-32 mx-auto border-primary">
    </div>

    <div class="font-sans">
      <div class="my-16"> 
        <img src="/img/infra1.png" alt="Infrastruktur TIK Gunadarma" class="mx-auto">
      </div>
    
    <div class="text-justify text-base md:text-lg font-sans px-6">
      <p>
        Pada gambar di atas, keterhubungan masing-masing lokasi infrastruktur jaringan komputer dikembangkan untuk  menghubungkan seluruh kampus
        sebagai satu sistem yang terintegrasi sehingga mempermudah dan mempercepat operasional akademik maupun pengakuan sumber bahan ajar,
        sedangkan Data Center UG terlihat pada gambar di bawah
      </p>

      <div class="my-16"> 
        <img src="/img/infra2.png" alt="Data Center UG" class="mx-auto">
      </div>

      <p>
        Infrastruktur perangkat lunak yang ada merupakan aplikasi dalam kesatuan sistem infromasi Universitas Gunadarma. Sistem tersebut terbagi dalam
        tiga golongan, yaitu:
        <ul class="list-disc pl-10 ">
          <li>Sistem Korporasi : Otomoasi Perkantoran (Staffsite atau Mailstaff), sistem kepagawaian dan sistem keuangan.</li>
          <li>Sistem Akademik: Sistem penerimaan mahasiswa baru, sistem administrasi akademik (registrasi mata kuliah, nilai, absensi kuliah), e-Learning, 
            perangkat lunak laboratorium, digital library, career center dan e-journal.
          </li>
          <li>Sistem Komunitas: Forum, studentsite maupun jaringan penelitian.</li>
        </ul>
        <br>
        Sistem informasi dikembangkan dengan model sistem terpusat, seperti terlihat pada gambar di atas. Sistem tersebut dapat dijalankan maupun 
        diperbaharui informasinya secara terdistribusi dan berbagai lokasi, sehingga meningkatkan usabilitas (ketergunaan) sistem dan mempercepat 
        pembaruan informasi yang disediakan. Pembentukan sistem infromasi terpusat ditujukan untuk memudahkan dalam perawatan dan kendali sistem
        infromasi, sehingga jaminan keamanan dan integritas informasi tercapai,
      </p>
      <br>
      <p>
        Dalam gambar di bawah ini, seluruh sumber data aplikasi sistem ditempatkan secara terpusat dan dapat diperbaharui dari beberapa lokasi pada 
        setiap saat. Aplikasi sistem yang disediakan bersifat terpusat terdiri dari sistem administrasi akademik, sumber ajar elektronik dalam bentuk aplikasi 
        virtual class (<span><a href="https://v-class.gunadarma.ac.id/" class="text-secondary">https://v-class.gunadarma.ac.id</a></span>), virtual laboratory (<span><a href="http://praktikum.gunadarma.ac.id/" class="text-secondary">http://praktikum.gunadarma.ac.id/</a></span>), sistem informasi manajemen keuangan yang 
        terkoneksi dengan perbankan, sistem kolaborasi sebagai otomasi perkantoran (<span><a href="https://apps.staffsite.gunadarma.ac.id/go/" class="text-secondary">https://apps.staffsite.gunadarma.ac.id</a></span>) termasuk elektronik mail, 
        career center (<span><a href="http://career.gunadarma.ac.id/" class="text-secondary">http://career.gunadarma.ac.id/</a></span>), studentsite (<span><a href="https://studentsite.gunadarma.ac.id/" class="text-secondary">https://studentsite.gunadarma.ac.id/</a></span>),
        digital library (<span><a href="https://library.gunadarma.ac.id/" class="text-secondary">https://library.gunadarma.ac.id/</a></span>), 
        electronic journal (<span><a href="https://ejournal.gunadarma.ac.id/" class="text-secondary">https://ejournal.gunadarma.ac.id/</a></span>),
        dan situs resmi Universitas Gunadarma (<span><a href="https://www.gunadarma.ac.id/" class="text-secondary">https://www.gunadarma.ac.id/</a></span>).
      </p>

      <p>
        Universitas Gunadarma sudah menerapkan proses belajar mengajar dengan pendekatan yang lebih inovatof dan interactive.  
        pertimbangan bahwa proses belajar-mengajar tidak hanya sebatas tatap muka di kelas atau laboratorium dengan tempot dan waktu yang terbatas.
        Dengan fasilitas ini, peserta pelatihan diharapkan akan tetap melakukan kegiatan pembelajaran secara mandiri, lebih bersifat personal dan 
        berkesinambungan sehingga pemahaman, cakupan, kedalaman materi bisa lebih ditingkatkan.
      </p>

      <div class="w-[80%] border-gray-500 border-x-2 mx-auto my-5">
        <p class="p-5">
          <span class="font-bold">E-learning (electronic learning)</span> adalah fasilitas pembelajaran elektronik yang digunakan untuk membantu mahasiswa memahami suatu 
          materi ajar. E-learning menyedikan materi pembelajaran yang dilengkapi dengan audio visual yang dapat memberikan gambaran suatu 
          konsep lebih jelas (dilengkapi dengan contoh visual yang lebih komunikatif). Pemanfaatan e-learning akan memberikan manfaat pada
          peningkatan daya kognintif mahasiswa dalam memahami konsep materi ajar. Semakin banyak fasilitas e-learning yang disediakan maka
          semakin besar kemungkinan mahasiswa dapot memahami konsep materi ajar yang lebih cepat dan efektif, Materi e-learning terdiri dari
          CD interaktif, maupun virtual class (yaitu pembelajaran secara online melalui internet) serta electronic journal. Penerapan E-learning dalam
          proses belajar-mengajar di Universitas Gunadarma merupakan salah satu tugas dari E-learning Center, yang mulai aktif sebagai unit baru
          mulai 25 Maret 2007 Implementasi E-learning  tersebut dapat dilihat pada portal e-learning dengan alamat <span><a href="https://v-class.gunadarma.ac.id/" class="text-secondary">https://v-class.gunadarma.ac.id/</a></span>.
        </p>
      </div>

      <p class="text-xl block font-bold">
        Staffsite Dosen
      </p>

      <p class="block">
        Setiap dosen pengajar di Universitas Gunadarma perlu memanfaatkan digital locker untuk dosen- dikenal sebagai situs staffsite yang merupakan 
        homepage resmi dosen, untuk media informasi dan komunikasi dari dosen yang bersangkutan ke civitas academica atau masyarakat. User ID dan 
        password dari staffsite tersebut merupakan kode akses ke semua layanan informasi dan pembelajaran berbasis web atau disebut juga 
        single identity policy.
      </p>

      <br>

      <p>
        Situs dosen dapat digunakan sebagai fasilitas diseminasi sumber ajar kepada mahasiswa, di mana dosen dapat menyediakan sumber ajar maupun 
        sumber ilmu pengetahuan lainnya yang dapat diakses oleh mahasiswa. Hal ini akan mempermudah dan mempercepat pemberian materi ajar 
        sehingga mahasiswa dimungkinkan dapat memahami materi kuliah sebelum kuliah diberikan.
      </p>

      <br>

      <p>
        Homepage resmi staff Universitas Gunadarma tersebut memberikan berbagai layanan yaitu (a) Biodata pribadi, (b) latar belakang pendidikan, 
        (c) pengalaman dalam bidang pengajaran, penelitian, dan pengabdian masyarakat, (c) informasi untuk mahasiswa, (d) upload bahan ajar untuk 
        mahasiswa, (e) informasi dari insitusi, (f) forum diskusi, (g) pengelolaan jadwal kegiatan, (h) informasi homepage, emailm dan blog dari dosen lain, 
        serta (i) blog.
      </p>

      <div class="w-[80%] border-gray-500 border-x-2 mx-auto my-5">
        <p class="p-5">
          <span class="font-bold">PSMA Online. </span> Akses Informasi Akademik Berbasis TIK, yang diwujudkan dengan adanya Pengembangan Sistem Manajemen Akademik 
          (PSMA) Online. Mahasiswa bisa mengisi KRS sendiri secara langsung ke Terminal Komputer, yang dipandu oleh Pembimbing Akademik dan
          Penasehat Akademik yang ditunjukan untuk masing-masing kelas. Selain itu, PSMA online mencetak KRS dan kartu mahasiswa yang 
          sudah dilengkapi dengan teknologi smartcard, RFID, dan alat pembayaran elektronik yang implementasinya bekerja sama dengan pihak 
          Bank.
        </p>
      </div>

      <p class="text-xl block font-bold">
        Student Digital Locker (Studentsite)
      </p>

      <p class="block">
        Setiap mahasiswa Universitas Gunadarma wajib menggunakan digital locker yang disebut situs studentsite, untuk mengakses layanan informasi dan 
        pembelajaran secara elektronik. User ID dan password dari studentsite tersebut merupakan kode akses ke semua layanan informasi dan pembelajaran 
        berbasis web atau disebut juga single identity policy.        
      </p>

      <br>

      <p>
        Situs mahasiswa (studentsite) disediakan untuk memperoleh informasi dari dosen maupun program studi yang dapat secara langsung diketahui melalui
        situs mahasiswa tersebut. Situs ini dapat digunakan untuk mendukung proses belajar-mengajar yaitu melalui (a) informasi jadwal kuliah dan ujian, 
        (b) informasi atau tugas dari dosen, dan (c) Daftar Nilai Sementara (DNS). Selain itu, USER ID dan password pada studentsite ini dapat digunakan untuk 
        mengakses layanan ICT lainnya yaitu UG-Hotzone, Internet Lounge, Integrated Lab, Career Center, dan E-Learning Center.
      </p>

      <div class="w-[80%] border-gray-500 border-x-2 mx-auto my-5">
        <p class="p-5">
          <span class="font-bold">Career Center. </span>  Fitur layanan career center mencakup (1) basis data electronik- Alumni bisa mengakses dan mengupdate biodata atau 
          profilnya melalui internet; (2) Electronic job maching – Perusahaan dapat memiliki account dan mengisi profil usahanya serta 
          mengirimkan lowongan kerja yang dapat diakses oleh alumni Universitas Gunadarma; (3) E-Magazine – Media pembelajaran dan sharing 
          pengalaman antar alumni yang rubriknya meliputi tips and trick, technology update, cerita sukses alumni, konsultasi; serta (4) Electronic 
          tracer study – Salah satu metode untuk mengetahui kompetensi alumni di dunia kerja sekaligus memperoleh umpan balik untuk 
          perbaikan kurikulum. Berbentuk kuisoner elektronik yang diisi oleh alumni dan perusahan pengguna alumni Gunadarma
        </p>
      </div>

      <p>
        Layanan Career center dapat dilihat di <span><a href="http://career.gunadarma.ac.id" class="text-secondary">http://career.gunadarma.ac.id</a></span>. Sampai saat ini jumlah alumni Universitas Gunadarma sudah mencapai lebih 
        dari 53.176 orang, yang basis data elektronic-nyab dapat dimutakhirkan secara online di career center. Jumlah perusahaan- yang mencari lulusan yang 
        siap bekerja, yang sudah teregistrasi di career center tercatat sebanyak 2058 perusahaan. Selain fasilitas dalam bentuk aplikasi berbasis web, 
        Universitas Gunadarma juga telah memiliki stasiun TV(UG-TV) dan stasiun radio (UG-RADIO) untuk komunitas dan tabloid (UG-NEWS) sebagai media 
        penyebaran Informasi Kampus.
      </p>
        <br>
        <p>
          Sebagai penunjang kompetensi mahasiswa dan dosen, Univeristas Gunadarma juga menjadi tempat pelatihan bersertifikasi, yaitu Oracle, CCNA (Cisco), 
          dan Sun Microsystem. Selain itu fasilitas uji sertifikasi tingkat nasional dan internasional seperti Internet Based Test TOEFL (IBT) dan uji ahli manajemen 
          asuransi (bekerjasama dengan Asosiasi Ahli Manajemen Asuransi Indonesia AAMAI) juga telah tersedia.
        </p>
        <br>
        <p>
          Berbagai fasilitas pembelajaran dan akses informasi berbasis teknologi informasi dan komunikasi tersebut telah menjadikan Universitas Gunadarma 
          sebagai perguruan tinggi terdepan di Indonesia, dan telah diakui di tingkat internasional. Pengakuan tersebut terlihat dari peringkat 
          Universitas Gunadarma yang menempati peringkat ke 3738 dunia dan ke-81 se ASEAN berdasarkan laporan Webometric Ranking of World University. 
          Universitas Gunadarma merupakan satu dari 17 Perguruan Tingggi Negeri dan Swasta di Indonesia yang masuk dalam Top 5000 di tingkat dunia dalam 
          penerapan dan pemanfaatan teknologi informasi dan komunikasi dalam proses belajar-mengajar dan pengelolaan perguruan tinggi.
        </p>

    </div>
    </div>  
</div>
@endsection
