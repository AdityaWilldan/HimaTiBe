<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medfo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-950 overflow-x-hidden">
        <!-- Header start -->
        <header class="sticky-top ">
        
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
            
              </header>
                <!-- Headaer end -->

                
                <!-- <div class="lg:flex lg:justify-between lg:items-center lg:w-full">
                    <div class="lg:w-2/6 xl:w-2/4 mt-20 lg:mt-40 lg:ml-16 text-center lg:text-left">
                      <div class="text-6xl font-semibold text-gray-200 leading-none">Welcome To HimaTI</div>
                      <div class="mt-6 text-xl font-medium text-sky-500 antialiased">Wadah Ekspresi & kreativitas Mahasiswa Teknik informatika di Universitas Mandiri Subang.</div>
                      <button class="mt-6 px-8 py-4 rounded-full font-normal tracking-wide bg-gradient-to-b from-blue-600 to-blue-700 text-white outline-none focus:outline-none hover:shadow-lg hover:from-blue-700 transition duration-200 ease-in-out">
                        Profile Ormawa
                      </button>
                    </div>
                    <div class="lg:w-3/6 ml-5 lg:ml-12 mb-11 py-5 text-center lg:text-left">
                      <img width="350px" src="/img/logo-removebg-preview.png" alt="Your Image" class=" mx-auto lg:mx-0 mr-2" />
                    </div>
                  </div>
                  <div class="mt-12 lg:mt-32 lg:ml-20 text-center lg:text-left">
                    <button type="button" class="flex items-center justify-center w-12 h-12 rounded-full bg-cool-gray-100 text-gray-800 animate-bounce hover:text-gray-900 hover:bg-cool-gray-50 transition duration-300 ease-in-out cursor-pointer">

                    </button>
                  </div> -->

            <section class="bg-slate-950 pt-30">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7" role="alert" data-aos="zoom-in">
                  <img width="200px" src="/img/LOGO MEDFO.png" alt="" class="fade-in">
                </a>
                <h1 class="typing-animation-text mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-400 text-bold md:text-5xl lg:text-5xl dark:text-slate fade-in-right" data-aos="fade-right">MEDFO<br></h1>
                <p class="mb-8 text-lg font-bold text-gray-500 lg:text-xl sm:px-16 xl:px-48 text-sky-800 slide-in2" data-aos="fade-left">
                    Departemen Media Informas
                    <br>
                <span class="mb-8 text-lg text-center font-normal text-gray-500  dark:text-slate-400 poppins">Departemen Media Informasi (Medfo) adalah pilar informasi yang memastikan semua kegiatan HIMA dan berita terkini tersampaikan kepada seluruh mahasiswa. Kami merancang konten kreatif,
                     mengelola platform media sosial, dan menyebarkan informasi penting kepada semua anggota.</span>
                </p>
                <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    
                </div>
                <!-- <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
                    <span class="font-semibold text-sky-400 uppercase text-bold">OUR SOCIALMEDIA</span>
                    <div class="flex flex-wrap justify-center items-center mt-8 text-gray-500 sm:justify-between">
                        <div class="w-full px-4">
                            <div class="flex flex-wrap items-center justify-center">
                                <a href="#"
                                    class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                                    <img width="40" src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="IG">
                                </a>
                                <a href="#"
                                    class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                                    <img width="70" src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Logo_of_YouTube_%282015-2017%29.svg" alt="YT">
                                </a>
                                <a href="#"
                                    class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                                    <img width="80" src="https://upload.wikimedia.org/wikipedia/id/a/a9/TikTok_logo.svg" alt="tiktok">
                                </a>
                                <a href="#"
                                    class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                                    <img width="40" src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt="fb">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>  -->
            </div>
        </section>
                  


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