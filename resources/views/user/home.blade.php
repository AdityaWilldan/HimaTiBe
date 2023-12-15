<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">
    <title>HimaTI UM</title>
    
</head>
<body class="bg-slate-950 overflow-x-hidden">
    <!-- Header start -->
    <header class="sticky top-0 z-50">
        
<nav class="backdrop-blur-sm rounded p-2">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto ">
      <a href="https://www.instagram.com/hima_teknikinformatika/" class="flex items-center">
          <img src="{{asset('/img/logo-removebg-preview.png')}}" class="h-7 mr-3 " alt="Will Dev" />
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
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-900 md:dark:bg-transparent" aria-current="page">Home</a>
          </li>
          <li>
            <a href="{{url('/gallery')}}" class="block py-2 pl-3 pr-5 text-gray-100 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Gallery</a>
          </li>
          <li>
            <a href="{{url('/sejarah')}}" class="block py-2 pl-3 pr-4 text-gray-100 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Sejarah</a>
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
  
    </header>
    <!-- Headaer end -->
      
<div id="controls-carousel" class="relative w-full slide-up" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/img/carousel.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img src="{{asset('/img/carousel2.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/img/carousel3.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

    
        <!-- //hero section -->
        <section class="bg-gray-900 dark:text-gray-100">
          <div class="container flex flex-col lg:flex-row justify-center items-center p-6 mx-auto sm:py-12 lg:py-24">
            <div class="lg:w-1/2 p-6 lg:p-0">
              <div class="h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128 relative" data-aos="fade-right" data-aos-offset="300">
                <img width="200px" src="{{asset('/img/logo-removebg-preview.png')}}" alt="" class="object-contain w-full h-full">
              </div>
            </div>
            <div class="lg:w-1/2 flex flex-col justify-center p-6 text-center lg:text-left" data-aos="fade-left">
              <h1 class="text-5xl font-bold leading-tight sm:text-6xl text-slate-400">Welcome To
                <span class="text-blue-400">Hima</span><span class="text-sky-500">TI</span>
              </h1>
              <p class="mt-6 mb-8 text-lg sm:mb-12 text-gray-300 font-medium">Wadah Ekspresi & kreativitas Himpunan Mahasiswa Teknik informatika Universitas Mandiri Subang.
                <br>
                <span class="text-lg font-normal text-blue-400 dark:text-blue-400 poppins">✨berfikir cerdas bertindak jelas!✨</span>
              </p>
              <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                <button></button>
                <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded hover:text-gray-300 bg-blue-500 hover:bg-blue-800 dark:text-gray-900" data-aos="fade-right">Gallery Berita</a>
              </button>
                <a rel="noopener noreferrer" href="/sejarah.html" class="px-8 py-3 text-lg font-semibold border rounded dark:border-gray-100 hover:bg-blue-800 text-slate-100" data-aos="fade-left">Profile Ormawa</a>
              </div>
            </div>
          </div>
          <div class="py-8  mx-auto max-w-screen-xl text-center  ">
            <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
              <span class="font-semibold text-sky-400 uppercase text-bold" data-aos="zoom-in">OUR SOCIALMEDIA</span>
              <div class="flex flex-wrap justify-center items-center mt-8 text-gray-500 sm:justify-between">
                  <div class="w-full px-4">
                      <div class="flex flex-wrap items-center justify-center">
                          <a href="https://www.instagram.com/hima_teknikinformatika/"
                              class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="zoom-in-right">
                              <img width="40" src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="IG">
                          </a>
                          <a href="https://www.youtube.com/@HIMATIUM"
                              class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="zoom-in-up">
                              <img width="70" src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Logo_of_YouTube_%282015-2017%29.svg" alt="YT">
                          </a>
                          <a href="#"
                              class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="zoom-in-down">
                              <img width="80" src="https://upload.wikimedia.org/wikipedia/id/a/a9/TikTok_logo.svg" alt="tiktok">
                          </a>
                          <a href="#"
                              class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="zoom-in-left">
                              <img width="40" src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt="fb">
                          </a>
                      </div>
                  </div>
              </div>
          </div> 
          </div>
        </section>
        

        <!-- team section -->
        <div class="flex items-center justify-center min-h-screen bg-gray-950 py-30">
          <div class="flex flex-col">
              <div class="flex flex-col mt-8">
                  <!-- Meet the Team -->
                  <div class="container max-w-7xl px-4">
                      <!-- Section Header -->
                      <div class="flex flex-wrap justify-center text-center mb-24" data-aos="fade-up">
                          <div class="w-full lg:w-6/12 px-4">
                              <!-- Header -->
                              <h1 class="text-gray-400 text-4xl font-bold mb-8">
                                  Our Leader And secretary
                              </h1>
      
                              <!-- Description -->
                              <p class="text-sky-700 text-lg font-medium">
                                  Kepengurusan Hima Teknik Informatika Universitas Mandiri (HanomanTiran)
                              </p>
                          </div>
                      </div>
      
                      <!-- Team Members -->
                      <div class="flex flex-wrap">
                          <!-- Member #1 -->
                          <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4" data-aos="fade-up">
                              <div class="flex flex-col">
                                  <!-- Avatar -->
                                  <a href="#" class="mx-auto">
                                      <img width="300px" class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                          src="{{asset('/img/adas-fotor-bg-remover-20231109204128.png')}}">
                                  </a>
      
                                  <!-- Details -->
                                  <div class="text-center mt-6">
                                      <!-- Name -->
                                      <h1 class="text-gray-400 text-xl font-bold mb-1">
                                         ahmad muqodas
                                      </h1>
      
                                      <!-- Title -->
                                      <div class="text-primary font-medium mb-2">
                                        Ketua Himpunan Teknik Informatika
                                      </div>
      
                                      <!-- Social Icons -->
                                      <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                      transition-opacity duration-300">
                                          <!-- Linkedin -->
                                          <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                              <i class="mdi mdi-linkedin text-indigo-500 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Twitter -->
                                          <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                              <i class="mdi mdi-twitter text-blue-300 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Instagram -->
                                          <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                              <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
      
                          <!-- Member #2 -->
                          <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4" data-aos="fade-up">
                              <div class="flex flex-col">
                                  <!-- Avatar -->
                                  <a href="#" class="mx-auto">
                                      <img width="300px" class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                          src="{{asset('/img/dhea-fotor-bg-remover-2023110921829.png')}}">
                                  </a>
      
                                  <!-- Details -->
                                  <div class="text-center mt-6">
                                      <!-- Name -->
                                      <h1 class="text-gray-400 text-xl font-bold mb-1">
                                          Dhea
                                      </h1>
      
                                      <!-- Title -->
                                      <div class="text-primary font-medium mb-2">
                                        Wakil Ketua Himpunan Teknik Informatika
                                      </div>
      
                                      <!-- Social Icons -->
                                      <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                      transition-opacity duration-300">
                                          <!-- Linkedin -->
                                          <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                              <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Twitter -->
                                          <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                              <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Instagram -->
                                          <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                              <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
      
                          <!-- Member #3 -->
                          <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4" data-aos="fade-up">
                              <div class="flex flex-col">
                                  <!-- Avatar -->
                                  <a href="#" class="mx-auto">
                                      <img width="300px" class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                          src="{{asset('/img/salma3-fotor-bg-remover-2023110921110.png')}}">
                                  </a>
      
                                  <!-- Details -->
                                  <div class="text-center mt-6">
                                      <!-- Name -->
                                      <h1 class="text-gray-400 text-xl font-bold mb-1">
                                          Salma
                                      </h1>
      
                                      <!-- Title -->
                                      <div class="text-primary font-medium mb-2">
                                          Sekertaris Umum Himpunan Teknik Informatika
                                      </div>
      
                                      <!-- Social Icons -->
                                      <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                      transition-opacity duration-300">
                                          <!-- Linkedin -->
                                          <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                              <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Twitter -->
                                          <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                              <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Instagram -->
                                          <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                              <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
      
                          <!-- Member #4 -->
                          <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4" data-aos="fade-up">
                              <div class="flex flex-col">
                                  <!-- Avatar -->
                                  <a href="#" class="mx-auto">
                                      <img width="300px" class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                          src="{{('/img/regina-fotor-bg-remover-2023110921163.png')}}">
                                  </a>
      
                                  <!-- Details -->
                                  <div class="text-center mt-6">
                                      <!-- Name -->
                                      <h1 class="text-gray-400 text-xl font-bold mb-1">
                                          Regina Maydilla
                                      </h1>
      
                                      <!-- Title -->
                                      <div class="text-primary font-medium mb-2">
                                          Bendahara Umum Himpunan Teknik Informatika
                                      </div>
      
                                      <!-- Social Icons -->
                                      <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                      transition-opacity duration-300">
                                          <!-- Linkedin -->
                                          <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                              <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Twitter -->
                                          <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                              <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Instagram -->
                                          <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                              <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    
        <section class="mt-10 fade-in">
            <div class="w-full px-4">
            <div class="mx-auto text-center mb-16"  data-aos="fade-up" data-aos-offset="300">
                <h4 class="font-semibold text-lg text-blue-500 mb-2">Departemen</h4>
                <h2 class="font-bold text-slate-400 text-3xl mb-4 sm:text-4xl lg:text-5xl">Departemen HimaTI</h2>
                <p class="font-medium text-md text-sky-600 md:text-lg">Himpunan Mahasiswa Teknik Informatika mempunyai Departemen tersendiri 
                    <P class="font-medium text-md text-sky-600 md:text-lg">untuk setiap keanggotaan sesuai kemampuan masing-masing anggota.</P>
                </p>
            </div>


    <div data-aos="zoom-in">
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
            
              <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{('/img/LOGO LITBANG.png')}}" alt="" srcset="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
            LITBANG
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Litbang (penelitian Dan Pengembangan):</span> menjembatani Mahasiswa dengan perkembangan teknologi khusunya bidang programming. Kami mengejar inovasi melalui riset, 
            menciptakan solusi berkelanjutan, dan menginspirasi anggota kami untuk menggali lebih dalam dalam dunia teknologi.
          </p>
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/litbang/litbang.html"
          >
            <button
            class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
            data-ripple-dark="true"
          >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>

    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
          <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{asset('/img/LOGO KOMPUB.png')}}" alt="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
            KOMPUB
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Kompub (Komunikasi Publik):</span>
            Departemen Kompub HIMA Teknik Informatika berdedikasi untuk membangun jembatan komunikasi yang kuat antara kami dan seluruh anggota, masyarakat, dan pihak terkait.
            Kami membawa berita, informasi, dan ide-ide segar kepada Anda.
          </p>
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/kompub/kompub.html"
          >
            <button
              class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
              data-ripple-dark="true"
            >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>

    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
         <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{('/img/LOGO MEDFO.png')}}" alt="" srcset="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
           MEDFO
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Departemen Medfo (Media Informasi):</span>
            Kami adalah suara HIMA Teknik Informatika. Departemen Medfo bertugas menyampaikan informasi, berita, 
            dan kegiatan kami melalui berbagai media. Kami berusaha untuk selalu memberikan informasi terkini dan berkualitas kepada Anda."
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/medfo/medfo.html"
          >
            <button
              class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
              data-ripple-dark="true"
            >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>

    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
          <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{('/img/LOGO PSDM.png')}}" alt="" srcset="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
            PSDM
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Departemen PSDM (Pengembangan Sumber Daya Mahasiswa):</span>
            kami berkomitmen untuk mengembangkan potensi setiap anggota, 
            memberikan pelatihan, pengembangan diri, dan mendukung pertumbuhan pribadi mereka agar siap menghadapi masa depan.
          </p>
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/psdm/psdm.html"
          >
            <button
              class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
              data-ripple-dark="true"
            >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>

    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
          <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{('/img/LOGO SOSPOL.png')}}" alt="" srcset="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
            SOSPOL
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Departemen Sospol (Sosial Politik):</span>
            Kami berperan dalam menggali isu-isu sosial dan politik yang relevan dengan dunia teknik informatika. 
            Departemen Sospol HIMA Teknik Informatika menginspirasi anggota kami untuk terlibat dalam pembentukan masa depan dan ikut serta dalam perubahan yang positif.
          </p>
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/sospol/sospol.html"
          >
            <button
              class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
              data-ripple-dark="true"
            >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>


          </div>
        </div>
    </section> 

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
                        <a href="#" class="inline-block text-base hover:text-indigo-500 mb-3">Himpunan Mahasiswa</a>
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

    <script src="/script.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>