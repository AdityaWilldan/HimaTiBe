<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sospol</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-950 overflow-x-hidden">
        <!-- Header start -->
        <header class="sticky top-0 z-50">
        <div class="sticky-top">
          <nav class="backdrop-blur-sm rounded p-2">
              <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto ">
                <a href="https://www.instagram.com/hima_teknikinformatika/" class="flex items-center">
                    <img src="/img/logo-removebg-preview.png" class="h-7 mr-3 " alt="Will Dev" />
                    <span class="self-center text-2xl font-mono whitespace-nowrap dark:text-white text-white">HimaTI</span>
                </a>
                <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                  <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-800 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                      <a href="/index.html" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-900 md:dark:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li>
                      <a href="/gallery.html" class="block py-2 pl-3 pr-5 text-gray-100 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Gallery</a>
                    </li>
                    <li>
                      <a href="/sejarah.html" class="block py-2 pl-3 pr-4 text-gray-100 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Sejarah</a>
                    </li>
                    <li>
                      <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center block py-2 pl-3 pr-4 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-blue dark-mode:focus:bg-blue-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                          <span class="text-slate-200  text-gray-900 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Departemen</span>
                          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-gray rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/kompub')}}">KOMPUB</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/litbang')}}">LITBANG</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/medfo')}}">MEDFO</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/psdm')}}">PSDM</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/sospol')}}">SOSPOL</a>
                              </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
            
              </header>
                <!-- Headaer end -->


                  <section class="pt-50 pb-32 relative bg-slate-950">
                    <div class="absolute w-full h-4/5 top-0 left-0 bg-cover bg-center bg-no-repeat opacity-40 bg-fixed bg-contain" style="background-image:url(/img/baksos3.JPG)"></div>
                    
                    <!-- <section class="bg-slate-950 pt-30"> -->
                      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                          <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7" role="alert" data-aos="zoom-in">
                            <img width="200px" src="/img/LOGO SOSPOL.png" alt="" class="fade-in">
                          </a>
                          <h1 class="typing-animation-text mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-400 text-bold md:text-5xl lg:text-5xl dark:text-slate fade-in-right" data-aos="fade-right">SOSPOL<br></h1>
                          <p class="mb-8 text-lg font-bold text-gray-500 lg:text-xl sm:px-16 xl:px-48 text-sky-400 slide-in2" data-aos="fade-left">
                            Departemen Sosialpolitik
                            <br>
                        <span class="mb-8 text-lg text-center font-normal text-slate-100 poppins">Departemen Sosialpolitik (Sospol) berfokus pada isu-isu sosial dan politik yang relevan dengan mahasiswa Teknik Informatika. 
                            Kami mengadakan diskusi, acara sosial, dan kampanye untuk menciptakan kesadaran dan advokasi atas masalah-masalah tersebut.</span>
                        </p>
                          <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                              
                          </div>
                      </div>
                  <!-- </section> -->
                  </section>
                  <!-- <section class="h-[80px] bg-slate-950"></section> -->
                  
        <section id="portofolio" class=" pb-16 bg-slate-950">
          <div class="container">
              <div class="w-full px-4">
                  <div class="max-w xl mx-auto text-center mb-16">
                      <h2 class="font-bold text-slate-500 text-3xl mb-4 sm:text-4xl lg:text-5xl" data-aos="fade-up">Program Kerja Departemen Sospol</h2>
                      <p class="font-medium text-md text-sky-500 md:text-lg" data-aos="fade-up">Berikut Kegiatan Dan Proker Departemen Sosialpolitik.</p>
                  </div>
              </div>
  
              <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                  <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up">
                      <div class="rounded-md shadow-mb overflow-hidden">
                          <img src="/img/baksos.JPG" alt="Landing Page" width="w-full" />
                      </div>
                      <h3 class="font-semibold text-xl text-blue-900 mt-5 mb-3">Bakti Sosial</h3>
                      <p class="font-medium text-base text-slate-400">Melakukan Bakti Sosial Terhadap Desa Dan Mengabdikan Diri pada masyarakat Untuk mengembangkan Keterampilan Besosialisasi Juga Bergotong Royong.</p>
                  </div>
                  <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up">
                      <div class="rounded-md shadow-mb overflow-hidden">
                          <img src="/img/baksos4.JPG" alt="Landing Page" width="w-full" />
                      </div>
                      <h3 class="font-semibold text-xl text-blue-900 mt-5 mb-3">Bakti Sosial</h3>
                      <p class="font-medium text-base text-slate-400">Bermain Juga Berbagi Ilmu Pengetahuan Kepada Anak-Anak Desa Dan Mengenalkan Dunia Pendidikan Secara Luas Lewat Permainan Yang Menarik</p>
                  </div>
                  <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up">
                      <div class="rounded-md shadow-mb overflow-hidden">
                          <img src="/img/bukber.JPG" alt="Landing Page" width="w-full" />
                      </div>
                      <h3 class="font-semibold text-xl text-blue-900 mt-5 mb-3">Buka Bersama</h3>
                      <p class="font-medium text-base text-slate-400">Berkumpul Dan Berbuka Bersama pada Bulan Ramadhan Dengan Tujuan Menjaga Kekompakkan ,Berbagi Cerita dan Berbagi Pengalaman Antar Anggota HimaTI.</p>
                  </div>
                  <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up">
                      <div class="rounded-md shadow-mb overflow-hidden">
                          <img src="/img/bukber4.JPG" alt="Landing Page" width="w-full" />
                      </div>
                      <h3 class="font-semibold text-xl text-blue-900 mt-5 mb-3">Buka Bersama</h3>
                      <p class="font-medium text-base text-slate-400">Menjaga Dan Menjalin Tali silaturahmi Antar  Anggota Himpunan Teknik Informatika.</p>
                  </div>
              </div>
          </div>
      </section> 


      <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32 text-center">
          <h2 class="mb-12 text-3xl font-bold text-slate-400" data-aos="fade-up">
            Kepengurusan <u class="text-primary dark:text-primary-400">Sospol</u>
          </h2>
      
          <div class="lg:gap-xl-12 grid gap-x-6 md:grid-cols-2 lg:grid-cols-4" data-aos="zoom-in">
            <div class="mb-12 lg:mb-0">
              <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="/img/najwa2.JPG" alt="avatar" />
              <h5 class="mb-4 text-lg font-bold text-slate-400">Nama</h5>
              <p class="mb-6 text-primary">Ketua Departemen</p>
              <ul class="mx-auto flex list-inside justify-center">
                <a href="#!" class="px-2">
                  <!-- GitHub -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-4 w-4 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                  </svg>
                </a>
                <a href="#!" class="px-2">
                  <!-- Twitter -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-4 w-4 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                </a>
                <a href="#!" class="px-2">
                  <!-- Linkedin -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                  </svg>
                </a>
              </ul>
            </div>
            <div class="mb-12 lg:mb-0">
              <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="/img/regina.JPG" alt="avatar" />
              <h5 class="mb-4 text-lg font-bold text-slate-400">Nama</h5>
              <p class="mb-6 text-primary">Wakil</p>
              <ul class="mx-auto flex list-inside justify-center">
                <a href="#!" class="px-2">
                  <!-- GitHub -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-4 w-4 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                  </svg>
                </a>
                <a href="#!" class="px-2">
                  <!-- Twitter -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-4 w-4 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                </a>
                <a href="#!" class="px-2">
                  <!-- Linkedin -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                    </svg>
                </a>
              </ul>
            </div>
            <div class="mb-12 md:mb-0">
              <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="/img/adas.JPG" alt="avatar" />
              <h5 class="mb-4 text-lg font-bold text-slate-400">Nama</h5>
              <p class="mb-6 text-primary">Sekertaris</p>
              <ul class="mx-auto flex list-inside justify-center">
                <a href="#!" class="px-2">
                  <!-- Facebook -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary dark:text-primary-400"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                  </svg>
                </a>
                <a href="#!" class="px-2">
                  <!-- Twitter -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-4 w-4 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                </a>
                <a href="#!" class="px-2">
                  <!-- Linkedin -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                    </svg>
                </a>
              </ul>
            </div>
            <div class="mb-12 md:mb-0">
              <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="/img/salma3.JPG" alt="avatar" />
              <h5 class="mb-4 text-lg font-bold text-slate-400">Nama</h5>
              <p class="mb-6 text-primary">Bendahara</p>
              <ul class="mx-auto flex list-inside justify-center">
                <a href="#!" class="px-2">
                  <!-- Dribbble -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-4 w-4 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M12 0c-6.628 0-12 5.373-12 12s5.372 12 12 12 12-5.373 12-12-5.372-12-12-12zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073-.244-.563-.497-1.125-.767-1.68 2.31-1 4.165-2.358 5.548-4.082 1.35 1.594 2.197 3.619 2.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68-1.016-1.861-2.178-3.676-3.488-5.438.779-.197 1.591-.314 2.431-.314 2.275 0 4.368.779 6.043 2.072zm-10.516-.993c1.331 1.742 2.511 3.538 3.537 5.381-2.43.715-5.331 1.082-8.684 1.105.692-2.835 2.601-5.193 5.147-6.486zm-5.44 8.834l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48-1.432-1.719-2.296-3.927-2.296-6.334zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027.928 2.42 1.609 4.91 2.043 7.46-3.349 1.291-6.953.666-9.641-1.433zm11.586.43c-.438-2.353-1.08-4.653-1.92-6.897 1.876-.265 3.94-.196 6.199.196-.437 2.786-2.028 5.192-4.279 6.701z" />
                  </svg>
                </a>
                <a href="#!" class="px-2">
                  <!-- Linkedin -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                    </svg>
                </a>
                <a href="#!" class="px-2">
                  <!-- Instagram -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-4 w-4 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                  </svg>
                </a>
              </ul>
            </div>
          </div>
        </section>
        <!-- Section: Design Block -->
      </div>

          <!-- footer -->
    <footer class="bg-slate-900 pt-24 pb-12">
      <div class="container">

        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
              <h2 class="font-bold text-4xl text-white mb-5">Himpunan Teknik Informatika</h2>
              <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
              <p>HimaTIUM@gmail.com</p>
              <p>Jl. Marsinu No.5, Dangdeur, Tegalkalapa, Kabupaten Subang, Jawa Barat 4121</p>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
              <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
              <ul class="text-slate-300">
                  <li>
                      <a href="#" class="inline-block text-base hover:text-indigo-500 mb-3">Organisasi</a>
                  </li>
                  <li>
                      <a href="#" class="inline-block text-base hover:text-indigo-500 mb-3">Bakti masyarakat</a>
                  </li>
                  <li>
                      <a href="#" class="inline-block text-base hover:text-indigo-500 mb-3">Hardware</a>
                  </li>
              </ul>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
              <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
              <ul class="text-slate-300">
                <li>
                    <a href="#" class="inline-block text-base hover:text-indigo-500 mb-3">Beranda</a>
                </li>
                <li>
                    <a href="{{url('/kompub')}}" class="inline-block text-base hover:text-indigo-500 mb-3">Kompub</a>
                </li>
                <li>
                    <a href="{{url('/litbang')}}" class="inline-block text-base hover:text-indigo-500 mb-3">Litbang</a>
                </li>
                <li>
                    <a href="{{url('/psdm')}}" class="inline-block text-base hover:text-indigo-500 mb-3">Psdm</a>
                </li>
                <li>
                    <a href="{{url('/medfo')}}" class="inline-block text-base hover:text-indigo-500 mb-3">Medfo</a>
                </li>
                <li>
                    <a href="{{url('/sospol')}}" class="inline-block text-base hover:text-indigo-500 mb-3">Sospol</a>
                </li>
            </ul>
          </div>
      </div>

          <div class="w-full pt-10 border-t border-slate-700">
              <div class="flex items-center justify-center mb-5">
                  <!-- Facebook -->
                  <a href="https://www.facebook.com/wildan.aditya.7311" target="_blank"
                      class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-300 hover:animate-bounce">
                      <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <title>Facebook</title>
                          <path
                              d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                      </svg>
                  </a>
                  <!-- Instagram -->
                  <a href="https://www.instagram.com/w1ldan_aditya/" target="_blank"
                      class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-300 hover:animate-bounce">
                      <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <title>Instagram</title>
                          <path
                              d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                      </svg>
                  </a>
                  <!-- Pinters -->
                  <!-- <a href="https://id.pinterest.com/penyihirgamingmajo/" target="_blank"
                      class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-300 hover:animate-bounce">
                      <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <title>Pinterest</title>
                          <path
                              d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z" />
                      </svg>
                  </a> -->
                  <!-- youtube -->
                  <a href="#" target="_blank"
                      class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-300 hover:animate-bounce">
                      <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <title>YouTube</title>
                          <path
                              d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                      </svg>
                  </a>
              </div>
              <p class="font-medium text-xs text-slate-500 text-center">Creating with <span
                      class="text-pink-500">❤ </span><a href="https://www.instagram.com/w1ldan_aditya/"
                      target="_blank" class="font-bold text-teal-500">By Wildan-Aditya</a>, Using framework <a
                      href="https://tailwindcss.com/" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>
              </p>
          </div>
      </div>
  </footer>

</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="/script.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>