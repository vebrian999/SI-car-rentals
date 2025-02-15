<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/tailwind.css" />
    <link rel="stylesheet" href="./assets/css/input.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
  </head>
  <body>
    <header class="">
      <div>
        <!-- NAVIGASI -->
        <nav class="h-[80px] w-full fixed top-0 left-0 z-[100] bg-white border-b">
          <div class="container h-full flex items-center justify-between">
            <!-- NAVIGASI KIRI -->
            <div>
              <a href="./index.html">
                <img src="./assets/images/logos/logoipsum-260.svg" class="object-cover w-[140px] h-auto" height="60" width="80" alt="260" />
              </a>
            </div>
            <!-- NAVIGASI KANAN -->
            <div class="hidden font-medium text-base text-gray-800 md:flex items-center gap-x-6">
              <a href="./index.html" class="pb-1.5 border-b-2 border-transparent hover:border-orange-500 hover:text-orange-500">Home</a>
              <a href="./daftar-paket.php" class="pb-1.5 border-b-2 border-transparent hover:border-orange-500 hover:text-orange-500">Daftar Paket</a>
              <a href="./wisata.php" class="pb-1.5 border-b-2 border-transparent hover:border-orange-500 hover:text-orange-500">Wisata</a>
              <a href="./galeri.php" class="pb-1.5 border-b-2 border-transparent hover:border-orange-500 hover:text-orange-500">Galeri</a>
              <a href="./profil.php" class="pb-1.5 border-b-2 border-transparent border-orange-500 text-orange-500">Profil</a>
              <a href="./kontak.php" class="pb-1.5 border-b-2 border-transparent hover:border-orange-500 hover:text-orange-500">Kontak</a>
              <a href="./faq.html" class="pb-1.5 border-b-2 border-transparent hover:border-orange-500 hover:text-orange-500">FAQ</a>
              <a href="./index.html" class="pb-1.5 border-b-2 border-transparent">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
              </a>
            </div>
            <!-- NAVIGASI MOBILE MUNCUL -->
            <div class="flex md:hidden">
              <button type="button" class="navigasi-mobile-open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
          </div>
        </nav>
        <!-- NAVIGASI MOBILE -->
        <aside id="navigasi-mobile" class="block md:hidden h-full w-full bg-white fixed top-0 right-0 z-[120] transition-all duration-300 transform translate-x-[120%]">
          <div class="relative h-full w-full py-8 px-5">
            <div class="text-center mb-8">
              <a href="./index.html">
                <img src="./assets/images/logos/logoipsum-260.svg" class="object-cover w-[180px] h-auto mx-auto" height="60" width="80" alt="260" />
              </a>
            </div>
            <div>
              <h3 class="font-medium text-lg text-gray-900">Menu</h3>
              <div class="flex flex-col gap-y-3.5 font-medium text-base text-gray-800 mt-5">
                <a href="./index.html" class="text-orange-500">Home</a>
                <a href="./daftar-paket.php">Daftar Paket</a>
                <a href="./wisata.php">Wisata</a>
                <a href="./faq.html">FAQ</a>
                <a href="./index.html"
                  ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                  </svg>
                </a>
              </div>
            </div>
            <!-- CLOSE NAVIGASI MOBILE -->
            <button type="button" class="navigasi-mobile-close h-10 w-10 absolute bottom-14 left-1/2 transform -translate-x-1/2 flex items-center justify-center bg-black text-white rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </aside>
      </div>
      <div class="jumbotron">
        <div class="w-full flex flex-wrap pt-[80px]">
          <!-- HEADER KIRI -->
          <div class="w-full md:w-1/2 absolute md:static flex items-center justify-center flex-col md:bg-gray-800 pt-[80px] md:pt-[0px] px-5 md:px-4 lg:px-8 z-10">
            <h2 class="w-full md:w-10/12 font-semibold text-2xl md:text-3xl lg:text-5xl text-white mb-5">Tentang <span class="text-orange-500">Profile</span> Kami</h2>
            <p class="w-full md:w-10/12 text-white">
              Pada bagian ini <span class="text-orange-500 font-medium">Profil perusahan</span> adalah gambaran umum tentang identitas, sejarah, visi, misi, dan Penghargaan yang diraih oleh perusahan kami. Kami memberikan informasi kepada
              pelanggan, mitra bisnis, dan pemangku kepentingan lainnya mengenai siapa perusahaan itu dan apa yang mereka lakukan.
            </p>
            <!-- <div class="flex gap-x-5 w-full px-14 mt-7">
              <a class="bg-blue-500 py-3 px-7 rounded-lg font-medium text-base text-white hover:bg-blue-600" href=""> Post Photo </a>
              <a class="bg-yellow-500 py-3 px-7 rounded-lg font-medium text-base text-white hover:bg-yellow-600" href="">Edit Photo</a>
              <a class="bg-red-500 py-3 px-7 rounded-lg font-medium text-base text-white hover:bg-red-600" href="">Delete Photo</a>
            </div> -->
          </div>
          <!-- HEADER KANAN -->
          <div class="w-full md:w-1/2 bg-gray-800">
            <!-- HEADER GAMBAR -->
            <img class="w-full h-[400px] md:h-[auto] object-cover contrast-50 md:contrast-100" src="./assets/images/images/company.jpg" alt="City" />
          </div>
        </div>
      </div>
    </header>

    <main>
      <div id="content" class="content bg-white">
        <article class="">
          <section class="bg-gray-100 my-10">
            <div class="text-center mx-10">
              <h1 class="text-3xl pt-10 font-semibold">Pemilik</h1>
            </div>
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
              <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                <div class="text-center text-gray-500 dark:text-gray-400">
                  <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar" />
                  <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">
                    <a href="#">Jese Leos</a>
                  </h3>
                  <p>SEO & Marketing</p>
                  <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                  <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="Joseph Avatar" />
                  <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">
                    <a href="#">Joseph Mcfall</a>
                  </h3>
                  <p>Sales</p>
                  <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="text-center text-gray-500 dark:text-gray-400">
                  <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Michael Avatar" />
                  <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">
                    <a href="#">Michael Gough</a>
                  </h3>
                  <p>Web Developer</p>
                  <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </article>

        <article class="bg-white">
          <div class="mx-36">
            <section class="flex justify-between items-center my-10">
              <div class="text-center mx-10">
                <h1 class="text-3xl font-semibold mb-5">Sejarah Kami</h1>
                <p class="">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores totam ipsam suscipit in earum repellendus adipisci maiores nulla accusantium commodi provident a distinctio, aliquid accusamus? Rem quam voluptas non
                  nesciunt sed dolorum totam alias dolor unde sit quaerat dignissimos expedita dolorem iste quasi, eum id inventore, doloribus nobis? Obcaecati, illo?
                </p>
              </div>
            </section>
            <section class="flex justify-between items-center my-10">
              <div class="text-center mx-10">
                <h1 class="text-3xl font-semibold mb-5">Tugas dan Fungsi</h1>
                <p class="">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores totam ipsam suscipit in earum repellendus adipisci maiores nulla accusantium commodi provident a distinctio, aliquid accusamus? Rem quam voluptas non
                  nesciunt sed dolorum totam alias dolor unde sit quaerat dignissimos expedita dolorem iste quasi, eum id inventore, doloribus nobis? Obcaecati, illo?
                </p>
              </div>
            </section>
          </div>
        </article>

        <article class="bg-gray-100 my-10">
          <div>
            <h1 class="text-3xl font-semibold balck pt-10 text-center">Timeline</h1>
          </div>
          <section class="p-20 flex items-center justify-center">
            <ol class="items-center sm:flex mx-32">
              <li class="relative mb-6 sm:mb-0">
                <div class="flex items-center">
                  <div class="absolute -top-6 sm:-top-9 left-3 transform -translate-x-1/2 text-orange-600 font-bold">2021</div>
                  <div class="z-10 flex items-center justify-center w-2 h-2 bg-orange-500 rounded-full ring-0 ring-orange-500 sm:ring-8 shrink-0"></div>
                  <div class="hidden sm:flex w-full bg-orange-500 h-0.5"></div>
                </div>
                <div class="mt-3 sm:pe-8 bg-white p-5 mx-5 rounded-lg">
                  <p class="text-base font-normal text-gray-900">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <button class="pt-2 text-orange-500">
                    selengkapnya <span><i class="fa-solid fa-chevron-down"></i></span>
                  </button>
                </div>
              </li>
              <li class="relative mb-6 sm:mb-0">
                <div class="flex items-center">
                  <div class="absolute -top-6 sm:-top-9 left-3 transform -translate-x-1/2 text-orange-600 font-bold">2022</div>
                  <div class="z-10 flex items-center justify-center w-2 h-2 bg-orange-500 rounded-full ring-0 ring-orange-500 sm:ring-8 shrink-0"></div>
                  <div class="hidden sm:flex w-full bg-orange-500 h-0.5"></div>
                </div>
                <div class="mt-3 sm:pe-8 bg-white p-5 mx-5 rounded-lg">
                  <p class="text-base font-normal text-gray-900">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <button class="pt-2 text-orange-500">
                    selengkapnya <span><i class="fa-solid fa-chevron-down"></i></span>
                  </button>
                </div>
              </li>
              <li class="relative mb-6 sm:mb-0">
                <div class="flex items-center">
                  <div class="absolute -top-6 sm:-top-9 left-3 transform -translate-x-1/2 text-orange-600 font-bold">2023</div>
                  <div class="z-10 flex items-center justify-center w-2 h-2 bg-orange-500 rounded-full ring-0 ring-orange-500 sm:ring-8 shrink-0"></div>
                  <div class="hidden sm:flex w-full bg-orange-500 h-0.5"></div>
                </div>
                <div class="mt-3 sm:pe-8 bg-white p-5 mx-5 rounded-lg">
                  <p class="text-base font-normal text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <button class="pt-2 text-orange-500">
                    selengkapnya <span><i class="fa-solid fa-chevron-down"></i></span>
                  </button>
                </div>
              </li>
            </ol>
          </section>
        </article>

        <article class="mx-32">
          <section class="my-10">
            <div class="mx-20">
              <h1 class="text-3xl font-semibold text-center my-5">Visi</h1>
              <blockquote class="text-xl font-normal text-gray-900 italic border-l-4 border-green-500 pl-4 py-2">
                <span class="font-medium text-3xl">"</span>Menjadi mitra terpercaya dalam menyediakan solusi transportasi yang nyaman dan aman bagi setiap perjalanan Anda. Kami berkomitmen untuk memberikan layanan yang terbaik, dengan
                armada mobil yang berkualitas, harga yang kompetitif, dan pengalaman pelanggan yang memuaskan.<span class="font-medium text-3xl">"</span>
              </blockquote>
            </div>
            <div>
              <h1 class="text-3xl font-semibold text-center my-5">Misi</h1>
              <div class="flex justify-center">
                <ul class="space-y-5 text-gray-900 text-xl">
                  <li class="flex items-center">
                    <svg class="w-10 h-10 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    Menyediakan armada mobil yang berkualitas dan terawat untuk memastikan kenyamanan dan keamanan pelanggan.
                  </li>
                  <li class="flex items-center">
                    <svg class="w-10 h-10 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    Menawarkan harga yang kompetitif dan transparan untuk memenuhi kebutuhan berbagai segmen pasar.
                  </li>
                  <li class="flex items-center">
                    <svg class="w-10 h-10 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    Memberikan layanan pelanggan yang ramah, responsif, dan profesional untuk pengalaman sewa mobil yang memuaskan.
                  </li>
                  <li class="flex items-center">
                    <svg class="w-10 h-10 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    Mengembangkan inovasi dalam layanan penyewaan mobil untuk memenuhi kebutuhan mobilitas masa kini.
                  </li>
                  <li class="flex items-center">
                    <svg class="w-10 h-10 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    Berkomitmen pada keberlanjutan dengan pengelolaan armada mobil yang ramah lingkungan dan berkelanjutan.
                  </li>
                </ul>
              </div>
            </div>
          </section>
        </article>

        <article class="py-10 bg-gray-100">
          <section class="mx-32">
            <div class="">
              <h1 class="text-3xl font-semibold text-center mb-5">Lokasi</h1>
              <div class="flex justify-center">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31627.603187935987!2d110.3754031743164!3d-7.741956999999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c85d387c23%3A0x3fadb7762cc897e9!2sEasee%20Rental%20%26%20Trip!5e0!3m2!1sen!2sid!4v1720105510950!5m2!1sen!2sid"
                  width="1200"
                  height="300"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </section>
        </article>
      </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-white">
      <!-- FOOTER PERTAMA -->
      <div class="py-12 md:py-12 lg:py-14 border-y border-slate-200">
        <div class="container flex flex-wrap md:flex-nowrap items-start justify-between gap-x-[120px]">
          <!-- FOOTER PERTAMA KIRI -->
          <div class="w-full md:w-auto mb-6 md:mb-0">
            <h2 class="font-semibold text-base md:text-base lg:text-lg text-[#20202C]">ManggaDua Transport</h2>
            <div class="flex flex-col gap-y-3 text-sm md:text-sm lg:text-base text-gray-700 mt-2 md:mt-4">
              <a href="./index.html" rel="noreferrer noopener" class="hover:text-orange-600">Tentang Kami</a>
              <a href="./daftar-paket.php" rel="noreferrer noopener" class="hover:text-orange-600">Daftar Paket</a>
              <a href="./wisata.php" rel="noreferrer noopener" class="hover:text-orange-600">Wisata</a>
              <a href="./faq.html" rel="noreferrer noopener" class="hover:text-orange-600">FAQ</a>
            </div>
          </div>
          <!-- FOOTER PERTAMA TENGAH -->
          <div class="w-full md:w-auto mb-6 md:mb-0">
            <h3 class="font-semibold text-base md:text-base lg:text-lg text-[#20202C]">PERTANYAAN?</h3>
            <div class="flex flex-col gap-y-4 text-base md:text-base lg:text-lg mt-2 md:mt-4">
              <a href="mailto:tanya@traave.com" class="flex items-center gap-x-2.5 text-gray-800 hover:text-orange-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <span class="inline-block -mt-px text-sm md:text-sm lg:text-base">tanya@manggaduatransport.com</span>
              </a>
              <a href="tel:08123456789" class="flex items-center gap-x-2.5 text-gray-800 hover:text-orange-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
                <span class="inline-block -mt-px text-sm md:text-sm lg:text-base">08123456789</span>
              </a>
            </div>
          </div>
          <!-- FOOTER PERTAMA KANAN -->
          <div class="w-full md:w-[300px]">
            <div class="mb-6 md:mb-12">
              <h3 class="font-semibold text-base md:text-base lg:text-lg text-[#20202C]">PEMBAYARAN</h3>
              <!-- FOOTER PEMBAYARAN ICON -->
              <div class="w-full flex flex-wrap md:flex-nowrap gap-1 md:gap-2.5 text-sm text-gray-500 mt-2 md:mt-4">
                <div class="h-[36px] w-3/12 flex items-center justify-center border border-slate-200 rounded">
                  <img src="./assets/images/logos/logoipsum-259.svg" class="object-cover w-[80%] h-auto" height="60" width="80" alt="259" />
                </div>
                <div class="h-[36px] w-3/12 flex items-center justify-center border border-slate-200 rounded">
                  <img src="./assets/images/logos/logoipsum-260.svg" class="object-cover w-[80%] h-auto" height="60" width="80" alt="260" />
                </div>
                <div class="h-[36px] w-3/12 flex items-center justify-center border border-slate-200 rounded">
                  <img src="./assets/images/logos/logoipsum-261.svg" class="object-cover w-[80%] h-auto" height="60" width="80" alt="261" />
                </div>
                <div class="h-[36px] w-3/12 flex items-center justify-center border border-slate-200 rounded">
                  <img src="./assets/images/logos/logoipsum-262.svg" class="object-cover w-[80%] h-auto" height="60" width="80" alt="262" />
                </div>
              </div>
            </div>
            <div>
              <h3 class="font-semibold text-base md:text-base lg:text-lg text-[#20202C] uppercase mb-5 md:mb-0">PASANG APP ManggaDua Transport</h3>
              <div class="flex flex-wrap md:flex-nowrap gap-x-1 md:gap-x-3 gap-y-5 mt-2 md:mt-4">
                <div class="w-full md:w-1/2">
                  <img src="./assets/images/logos/logoipsum-263.svg" class="w-full h-[50px]" height="50" width="150" alt="263" />
                </div>
                <div class="w-full md:w-1/2">
                  <img src="./assets/images/logos/logoipsum-264.svg" class="w-full h-[50px]" height="50" width="150" alt="264" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- FOOTER: KEDUA -->
      <div class="py-5">
        <div class="container flex flex-wrap md:flex-nowrap justify-between items-center">
          <div class="w-full md:w-auto flex items-center justify-between md:justify-start md:gap-x-10 lg:gap-x-14">
            <!-- LOGO SOCIAL MEDIA -->
            <div class="w-full md:w-auto flex justify-center md:justify-start items-center gap-x-3">
              <a href="https://www.facebook.com/" target="_blank" rel="noreferrer noopener" aria-label="Facebook" class="h-[40px] w-[40px] flex items-center justify-center text-slate-600 hover:text-orange-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook h-6 w-6" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
              </a>
              <a href="https://twitter.com/" target="_blank" rel="noreferrer noopener" aria-label="Twitter" class="h-[40px] w-[40px] flex items-center justify-center text-slate-600 hover:text-orange-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter h-6 w-6" viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                </svg>
              </a>
              <a href="https://www.instagram.com/" target="_blank" rel="noreferrer noopener" aria-label="Instagram" class="h-[40px] w-[40px] flex items-center justify-center text-slate-600 hover:text-orange-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram h-6 w-6" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
              </a>
            </div>
          </div>
          <div class="w-full md:w-auto mt-5 md:mt-0">
            <!-- COPYRIGHT FOOTER -->
            <h4 class="font-medium text-sm text-[#20202C] text-center">© 2024 <strong>ManggaDua Transport</strong> Semua hak dilindungi undang-undang.</h4>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  </body>
</html>
