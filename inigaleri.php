<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galery | ManggaDua Transport</title>
    <link rel="stylesheet" href="./assets/css/tailwind.css" />
    <link rel="stylesheet" href="./assets/css/input.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
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
              <a href="./daftar-paket.html" class="pb-1.5 border-b-[2px] border-transparent border-orange-500 hover:border-orange-500 hover:text-orange-500">Daftar Paket</a>
              <a href="./wisata.html" class="pb-1.5 border-b-2 border-transparent hover:border-orange-500 hover:text-orange-500">Wisata</a>
              <a href="./galeri.html" class="pb-1.5 border-b-2 border-transparent border-orange-500 text-orange-500">Galeri</a>
              <a href="./profil.html" class="pb-1.5 border-b-2 border-transparent hover:border-orange-500 hover:text-orange-500">Profil</a>
              <a href="./kontak.html" class="pb-1.5 border-b-2 border-transparent hover:border-orange-500 hover:text-orange-500">Kontak</a>
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
                <a href="./daftar-paket.html">Daftar Paket</a>
                <a href="./wisata.html">Wisata</a>
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
          <div class="w-full md:w-1/2 absolute md:static flex items-center flex-col md:bg-gray-800 pt-[80px] md:pt-[100px] px-5 md:px-4 lg:px-8 z-10">
            <h2 class="w-full md:w-10/12 font-semibold text-2xl md:text-3xl lg:text-5xl text-white mb-5">Temukan <span class="text-orange-500">keindahan</span> Yogyakarta melalui koleksi foto dan video kami</h2>
            <p class="w-full md:w-10/12 text-white">
              Abadikan momen-momen <span class="text-orange-500 font-medium">Perjalanan Terbaik</span> anda dengan kendaraan kami, baik saat perjalanan pribadi maupun bersama sopir. Lihat berbagai destinasi menakjubkan dengan harga terbaik.
              Mari berbagi keindahan dan kenangan bersama.
            </p>
            <div class="flex gap-x-5 w-full px-14 mt-7">
<a class="bg-blue-500 py-3 px-7 rounded-lg font-medium text-base text-white hover:bg-blue-600" href="javascript:void(0)" onclick="document.getElementById('uploadForm').style.display='block'">Post Photo</a>



              <a class="bg-yellow-500 py-3 px-7 rounded-lg font-medium text-base text-white hover:bg-yellow-600" href="">Edit Photo</a>
              <a class="bg-red-500 py-3 px-7 rounded-lg font-medium text-base text-white hover:bg-red-600" href="">Delete Photo</a>
            </div>
            <div id="uploadForm" style="display:none;">
  <form action="upload_photo.php" method="post" enctype="multipart/form-data" class="bg-white p-5 rounded-lg shadow-lg">
    <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Select photo to upload:</label>
    <input type="file" name="photo" id="photo" class="block w-full mb-4">
    <input type="submit" value="Upload Photo" name="submit" class="bg-blue-500 py-2 px-4 rounded text-white hover:bg-blue-600">
  </form>
</div>
          </div>
          <!-- HEADER KANAN -->
          <div class="w-full md:w-1/2 bg-gray-800">
            <!-- HEADER GAMBAR -->
            <img class="w-full h-[400px] md:h-[auto] object-cover contrast-50 md:contrast-100" src="./assets/images/images/galery-jumbotron.jpg" alt="City" />
          </div>
        </div>
      </div>
    </header>

    <main>
      <div id="content" class="content container">



        <hr class="my-5 border-orange-500" />

        <article>
          <section class="flex justify-between items-center my-10">
            <div>
              <h1 class="text-5xl font-semibold my-5">Moment yang terabadikan</h1>
              <p class="text-base font-normal">
                Bersama-sama, kita menciptakan kenangan indah yang akan dikenang selamanya. Keceriaan dalam setiap momen di Kota Yogyakarta takkan pernah pudar. Dari keindahan alamnya yang mempesona hingga keramahan penduduknya yang hangat,
                setiap sudut kota ini menyimpan cerita yang menunggu untuk dijelajahi.
              </p>
            </div>
          </section>
        </article>



        <article>
          <section class="flex justify-between items-center my-10">
            <div>
              <h1 class="text-5xl font-semibold my-5">Beberapa foto lainya</h1>
              <p class="text-base font-normal">berikut ini adalah berisi foto foto pengalaman customer kami yang lainya.</p>
            </div>
          </section>
        </article>

<!-- awal portofolio -->
  <article id="featured-gallery" class="mx-3 md:my-10 bg-cover bg-center flex items-center justify-center">
    <button id="prevButton" class="px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-md md:mb-48 mr-2">&lt;</button>
    <div class="grid gap-4">
      <div>
        <img id="mainImage" class="h-auto max-w-full rounded-lg" src="" alt="" style="width: 1196px; height: 660px;" />
      </div>
      <div class="flex items-center mt-4 overflow-x-auto" style="width: 1196px; height: auto;">
        <div class="grid grid-cols-5 gap-4" id="gallery-thumbnails-container">
          <div id="gallery-thumbnails" class="flex gap-x-10">
            <?php
            // $conn = new mysqli("localhost", "root", "", "rental_mobil");
            // if ($conn->connect_error) {
            //   die("Connection failed: " . $conn->connect_error);
            // }
  include_once "db_connection.php";

            $sql = "SELECT filename FROM photos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '<div class="thumbnail-container">';
                echo '<img class="h-auto max-w-full rounded-lg object-cover object-center thumbnail cursor-pointer" src="uploads/' . $row["filename"] . '" alt="" style="width: 200px; height: 150px;"  onclick="thumbnailClick(this)" />';
                echo '</div>';
              }
            } else {
              echo "No photos found.";
            }

            $conn->close();
            ?>
          </div>
        </div>
      </div>
    </div>
    <button id="nextButton" class="px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-md md:mb-48 ml-2">&gt;</button>
  </article>

  <script>
    const mainImage = document.getElementById("mainImage");
    const thumbnails = document.querySelectorAll(".thumbnail");
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");

    let currentIndex = 0;
    const numThumbnails = thumbnails.length;

    // Tampilkan gambar pertama saat halaman dimuat
    displayImage(currentIndex);

    // Fungsi untuk menampilkan gambar berdasarkan indeks
    function displayImage(index) {
      // Hapus border dari thumbnail sebelumnya
      thumbnails[currentIndex].classList.remove("border-orange-500");
      thumbnails[currentIndex].classList.add("border-transparent");

      // Tambahkan border ke thumbnail yang dipilih
      thumbnails[index].classList.remove("border-transparent");
      thumbnails[index].classList.add("border-orange-500");

      const selectedImageSrc = thumbnails[index].getAttribute("src");
      mainImage.setAttribute("src", selectedImageSrc);
      currentIndex = index;
    }

    // Event listener untuk tombol sebelumnya
    prevButton.addEventListener("click", function () {
      if (currentIndex > 0) {
        currentIndex--;
        displayImage(currentIndex);
        scrollThumbnails();
      }
    });

    // Event listener untuk tombol selanjutnya
    nextButton.addEventListener("click", function () {
      if (currentIndex < numThumbnails - 1) {
        currentIndex++;
        displayImage(currentIndex);
        scrollThumbnails();
      }
    });

    // Fungsi untuk mengatur posisi scroll thumbnails
    function scrollThumbnails() {
      thumbnails[currentIndex].scrollIntoView({
        behavior: "smooth",
        block: "nearest",
        inline: "center",
      });
    }

    // Fungsi untuk menangani klik pada thumbnail
    function thumbnailClick(thumbnail) {
      const index = Array.from(thumbnails).indexOf(thumbnail);
      displayImage(index);
    }
  </script>
  <!-- akhir portofolio -->
      </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  </body>
</html>
