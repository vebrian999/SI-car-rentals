<?php
// Sambungkan ke database
include 'db_connection.php';

// Pastikan ada parameter yang dikirimkan melalui URL
if(isset($_GET['id_transaksi']) && isset($_GET['id_mobil'])) {
    $id_transaksi = $_GET['id_transaksi'];
    $id_mobil = $_GET['id_mobil'];

    // Query untuk mengambil informasi transaksi berdasarkan id_transaksi dan id_mobil
    $query = "SELECT * FROM transaksi WHERE id_transaksi = $id_transaksi AND id_mobil = $id_mobil";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Assign nilai-nilai dari database ke variabel untuk kemudian ditampilkan
        $tanggal_penyewaan = date('d M Y', strtotime($row['tanggal_penyewaan'])); // Format tanggal sesuai kebutuhan Anda
        $durasi_penyewaan = $row['durasi_penyewaan'] . ' Hari'; // Durasi penyewaan
        $with_driver = $row['dengan_supir'] ? 'Ya' : 'Tidak'; // Konversi boolean ke string 'Ya' atau 'Tidak'
        $total_harga = $row['total_harga']; // Total harga dari transaksi

        // Query untuk mengambil informasi mobil berdasarkan id_mobil
        $query_mobil = "SELECT * FROM mobil WHERE id_mobil = $id_mobil";
        $result_mobil = mysqli_query($conn, $query_mobil);

        if (mysqli_num_rows($result_mobil) > 0) {
            $row_mobil = mysqli_fetch_assoc($result_mobil);
            $nama_mobil = $row_mobil['nama_mobil'];
            $gambar = $row_mobil['gambar1']; // Menggunakan gambar1 dari database, sesuaikan dengan nama kolom gambar yang sesuai

            // Hitung subtotal berdasarkan harga mobil dan durasi
            $harga_mobil = $row_mobil['harga_mobil']; // Asumsi harga mobil dari database
            $subtotal = $harga_mobil * $row['durasi_penyewaan']; // Hitung subtotal berdasarkan harga mobil dan durasi penyewaan
            $biaya_admin = 5000; // Asumsi biaya admin
            $biaya_supir = $row['dengan_supir'] ? 400000 : 0; // Biaya supir jika dipilih

            $total_harga = $subtotal + $biaya_admin + $biaya_supir; // Total harga setelah ditambahkan biaya admin dan supir
        } else {
            echo "Data mobil tidak ditemukan!";
        }
    } else {
        echo "Data transaksi tidak ditemukan!";
    }
} else {
    echo "Parameter tidak lengkap atau tidak valid!";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proses Pembayaran | ManggaDua Transport</title>
    <link rel="stylesheet" href="./assets/css/tailwind.css" />
    <link rel="stylesheet" href="./assets/css/input.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <style>
      /* BUTTON ACTIVE BANK PEMBAYARAN */
      .bank-pembayaran-button-active {
        border: 2px solid #f97316;
      }
    </style>
  </head>

  <body>
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
          <a href="./index.html" class="pb-1.5 border-b-[2px] border-transparent">Home</a>
          <a href="./daftar-paket.html" class="pb-1.5 border-b-[2px] border-transparent">Daftar Paket</a>
          <a href="./wisata.html" class="pb-1.5 border-b-[2px] border-transparent">Wisata</a>
          <a href="./faq.html" class="pb-1.5 border-b-[2px] border-transparent">FAQ</a>
          <a href="./index.html" class="pb-1.5 border-b-[2px] border-transparent"
            ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
            <a href="./index.html">Home</a>
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
    <!-- MAIN -->
    <main>
      <div class="container relative pt-[110px] md:pt-[120px] lg:pt-[140px] pb-[120px] md:pb-[160px] lg:pb-[180px] w-full max-w-screen-xl mx-auto">
        <!-- JUDUL -->
        <section class="w-full relative mx-auto mb-6 md:mb-10">
          <h1 class="font-bold text-[25px] md:text-[32px] lg:text-[36px] text-[#20202C]">Proses Pembayaran Sewa</h1>
        </section>
        <div class="w-full mx-auto flex flex-wrap md:flex-nowrap gap-x-10">
          <form class="order-2 md:order-1 w-full grow">
            <!-- FORM DATA DIRI -->
            <article class="bg-white w-full flex flex-col gap-y-5 border border-slate-200 p-5 rounded-md mb-8">
              <h2 class="font-bold text-[20px] md:text-[25px] lg:text-[28px] text-gray-800">Data Diri</h2>
              <div>
                <label class="block font-semibold text-base text-gray-800 mb-2" for="lama_peminjaman">Lama Penyewaan *</label>
                <select name="lama_peminjaman" id="lama_peminjaman" class="bg-slate-100 py-3 px-4 border border-slate-200 w-full rounded-md">
                <option value="1 hari" class="text-gray-900 "><?php echo $durasi_penyewaan; ?></option>
                  <!-- <option value="6 jam">6 Jam</option>
                  <option value="12 jam">12 Jam</option>
                  <option value="2 hari">2 Hari</option>
                  <option value="3 hari">3 Hari</option>
                  <option value="4 hari">4 Hari</option>
                  <option value="5 hari">5 Hari</option>
                  <option value="6 hari">6 Hari</option>
                  <option value="7 hari">7 Hari</option>
                  <option value="14 hari">14 Hari</option>
                  <option value="30 hari">30 Hari</option> -->
                </select>
              </div>
              <div>
                <label class="block font-semibold text-base text-gray-800 mb-2" for="full_name">Nama Lengkap *</label>
                <input id="full_name" type="text" class="bg-slate-100 py-3 px-4 border border-slate-200 w-full rounded-md" placeholder="Nama Lengkap Anda" />
              </div>
              <div>
                <label class="block font-semibold text-base text-gray-800 mb-2" for="telephone">Nomor Telephone *</label>
                <input id="telephone" type="tel" class="bg-slate-100 py-3 px-4 border border-slate-200 w-full rounded-md" placeholder="Nomor Telephone Anda" pattern="\+62\s?\d{2,3}-?\d{3,4}-?\d{4}" />
              </div>
              <div>
                <label class="block font-semibold text-base text-gray-800 mb-2" for="email">Email *</label>
                <input id="email" type="text" class="bg-slate-100 py-3 px-4 border border-slate-200 w-full rounded-md" placeholder="Alamat Email Anda" />
              </div>
              <!-- Time Picker and Location Picker -->
              <div class="flex gap-4">
                <div class="flex-1">
                  <label class="block font-semibold text-base text-gray-800 mb-2" for="pickup_location">Lokasi Penjemputan *</label>
                  <select id="pickup_location" class="bg-slate-100 py-3 px-4 border border-slate-200 w-full rounded-md">
                    <option value="" disabled selected>Pilih Lokasi</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="bandung">Bandung</option>
                    <option value="surabaya">Surabaya</option>
                    <option value="bali">Bali</option>
                  </select>
                </div>
                <div class="flex-1">
                  <label class="block font-semibold text-base text-gray-800 mb-2" for="pickup_time">Waktu Penjemputan *</label>
                  <input id="pickup_time" type="time" class="bg-slate-100 py-3 px-4 border border-slate-200 w-full rounded-md" />
                </div>
              </div>
              <!-- Message Textarea -->
              <div>
                <label class="block font-semibold text-base text-gray-800 mb-2" for="message">Pesan untuk Manggadua Transport</label>
                <textarea id="message" name="message" rows="4" class="bg-slate-100 py-3 px-4 border border-slate-200 w-full rounded-md" placeholder="Tulis pesan Anda di sini..."></textarea>
              </div>

              <!-- Input untuk Kode Promo -->
              <div>
                <label class="block font-semibold text-base text-gray-800 mb-2" for="promo_code">Kode Promo</label>
                <input id="promo_code" type="text" class="bg-slate-100 py-3 px-4 border border-slate-200 w-full rounded-md" placeholder="Masukkan Kode Promo Anda" />
              </div>
            </article>

            <!-- FORM PEMILIHAN BANK -->
            <article class="bg-white flex flex-col gap-y-5 border border-slate-200 p-5 rounded-md">
              <h2 class="font-bold text-[20px] md:text-[25px] lg:text-[28px] text-gray-800">Metode Pembayaran</h2>
              <div>
                <!-- LIST BANK PEMBAYARAN -->
                <label class="block font-semibold text-base text-gray-800 mb-2" for="full_name">Pilih Bank *</label>
                <div class="flex flex-wrap md:flex-nowrap gap-3">
                  <button type="button" class="bank-pembayaran-button w-[47%] md:w-1/4 border border-slate-200 rounded py-3 px-3">
                    <img class="h-auto w-[80%] mx-auto" src="./assets/images/logos/logoipsum-259.svg" alt="BCA" />
                  </button>
                  <button type="button" class="bank-pembayaran-button w-[47%] md:w-1/4 border border-slate-200 rounded py-3 px-3">
                    <img class="h-auto w-[80%] mx-auto" src="./assets/images/logos/logoipsum-260.svg" alt="BRI" />
                  </button>
                  <button type="button" class="bank-pembayaran-button w-[47%] md:w-1/4 border border-slate-200 rounded py-3 px-3">
                    <img class="h-auto w-[80%] mx-auto" src="./assets/images/logos/logoipsum-261.svg" alt="BNI" />
                  </button>
                  <button type="button" class="bank-pembayaran-button w-[47%] md:w-1/4 border border-slate-200 rounded py-3 px-3">
                    <img class="h-auto w-[80%] mx-auto" src="./assets/images/logos/logoipsum-262.svg" alt="Mandiri" />
                  </button>
                </div>
              </div>
            </article>
            <article class="mt-10">
              <div class="flex items-start gap-x-5 mb-10">
                <div class="h-5 w-5 flex-none">
                  <input type="checkbox" class="h-5 w-5 cursor-pointer" name="setuju" />
                </div>
                <p class="md:font-medium text-sm md:text-base text-gray-700 grow -mt-1">
                  Harap pastikan bahwa semua detail pemesanan dan data diri sudah sesuai dengan yang Anda inginkan sebelum melakukan pembayaran, agar tidak terjadi hal yang tidak diinginkan.
                </p>
              </div>
              <div class="flex items-center gap-6 md:gap-x-8 lg:gap-10 mt-8">
                <a
                  href="./tiket.html"
                  class="inline-block py-3 md:py-4 px-8 md:px-12 lg:px-14 rounded-md font-medium text-base md:text-xl text-white bg-blue-500 hover:bg-blue-600 transition duration-300 ease-in-out shadow-lg transform hover:scale-105">
                  Bayar Sekarang
                </a>
                <a
                  href="./daftar-paket.html"
                  class="inline-block py-3 md:py-4 px-8 md:px-12 lg:px-14 rounded-md font-medium text-base md:text-xl text-white bg-red-500 hover:bg-red-600 transition duration-300 ease-in-out shadow-lg transform hover:scale-105">
                  Batalkan
                </a>
              </div>
            </article>
          </form>

          <script>
            document.addEventListener("DOMContentLoaded", (event) => {
              const pickupTimeInput = document.getElementById("pickup_time");
              const now = new Date();
              const hours = now.getHours().toString().padStart(2, "0");
              const minutes = now.getMinutes().toString().padStart(2, "0");
              pickupTimeInput.value = `${hours}:${minutes}`;
            });
          </script>

         <div class="order-1 md:order-2 w-full md:w-[320px] flex-none mb-8 md:mb-0">
    <div class="bg-white w-full sticky top-[80px] border border-slate-200 p-5 rounded-md shadow-lg">
        <img class="w-full h-[200px] object-cover rounded-md mb-3" src="uploads/<?php echo $gambar; ?>" alt="<?php echo $nama_mobil; ?>" />
        <hr class="border-t border-gray-300 font-semibold" />
        <div class="my-2">
            <h1 class="font-light text-xl mb-1 text-gray-900">Merk Mobil</h1>
            <h2 class="font-bold text-2xl text-gray-900"><?php echo $nama_mobil; ?></h2>
        </div>
        <hr class="border-t border-gray-300 font-semibold" />
        <div>
            <h1 class="font-light mb-1 text-xl text-gray-900">Jenis Mobil</h1>
            <h2 class="font-bold text-2xl text-gray-900">Manual</h2> <!-- Anda bisa ambil dari database jika disimpan -->
        </div>
        <hr class="border-t border-gray-300 font-semibold" />
        <div class="my-2">
            <h1 class="font-light mb-1 text-xl text-gray-900">Durasi Sewa</h1>
            <h2 class="font-bold text-2xl text-gray-900"><?php echo $durasi_penyewaan; ?></h2>
        </div>
        <hr class="border-t border-gray-300 font-semibold" />
        <div class="">
            <div class="mt-4 flex items-center justify-between">
                <strong class="font-light text-xl text-slate-700">Subtotal</strong>
                <p class="font-semibold text-xl text-gray-900">Rp. <?php echo number_format($subtotal, 0, ',', '.'); ?></p>
            </div>
            <div class="flex items-center justify-between my-1">
                <strong class="relative font-light text-xl text-slate-700 group">
                    Biaya Admin
                    <span class="cursor-pointer inline-flex items-center justify-center h-4 w-4 text-[10px] bg-gray-800 text-white rounded-full">?</span>
                    <span class="absolute top-0 bg-white rounded-md py-2.5 px-4 text-xs text-gray-900 shadow-md drop-shadow-md w-[200px] hidden group-hover:inline-block">
                        Ayo, daftar agar anda mendapatkan gratis pajak untuk setiap perjalanan.
                    </span>
                </strong>
                <p class="font-semibold text-xl text-gray-900">Rp. <?php echo number_format($biaya_admin, 0, ',', '.'); ?></p>
            </div>
            <div class="flex items-center justify-between my-1">
                <strong class="relative font-light text-xl text-slate-700 group">
                    Dengan Supir
                    <span class="cursor-pointer inline-flex items-center justify-center h-4 w-4 text-[10px] bg-gray-800 text-white rounded-full">?</span>
                    <span class="absolute top-0 bg-white rounded-md py-2.5 px-4 text-xs text-gray-900 shadow-md drop-shadow-md w-[200px] hidden group-hover:inline-block">
                        Perjalan anda kali ini bersama supir, berikut ini adalah nominal harga supir.
                    </span>
                </strong>
                <p class="font-semibold text-xl text-gray-900">Rp. <?php echo number_format($biaya_supir, 0, ',', '.'); ?></p>
            </div>
            <div class="flex items-center justify-between">
                <strong class="font-light text-xl text-slate-700">Total</strong>
                <p class="font-semibold text-xl text-gray-900">Rp. <?php echo number_format($total_harga, 0, ',', '.'); ?></p>
            </div>
        </div>
    </div>
</div>
          
        </div>
      </div>
    </main>

    <!-- PEMBAYARAN FLOAT MOBILE -->
    <aside class="fixed bottom-0 left-0 flex md:hidden items-center z-50 h-[100px] bg-white w-full border-t border-gray-200">
      <div class="w-full flex items-center gap-x-6 px-5">
        <div class="grow">
          <p class="text-base text-gray-900">Total:</p>
          <p class="font-semibold text-xl text-gray-900">Rp. 2.005.000</p>
        </div>
        <button type="button" @click="onPayment" class="h-[46px] w-[120px] rounded-md flex-none font-medium text-lg text-white bg-blue-500">Bayar</button>
      </div>
    </aside>
    <!-- FOOTER -->

    <!-- MENGGUNAKAN FILE JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JAVASCRIPT -->
    <script>
      $(document).ready(function () {
        // OPEN NAVIGASI MOBILE
        $(".navigasi-mobile-open").click(function () {
          $("#navigasi-mobile").removeClass("translate-x-[120%]");
        });
        // TUTUP NAVIGASI MOBILE
        $(".navigasi-mobile-close").click(function () {
          $("#navigasi-mobile").addClass("translate-x-[120%]");
        });

        // GANTI KATEGORI PAKET
        $(".bank-pembayaran-button").click(function () {
          $(this).siblings().removeClass("bank-pembayaran-button-active");
          $(this).addClass("bank-pembayaran-button-active");
        });
      });
    </script>
  </body>
</html>
<?php
// Tutup koneksi ke database
mysqli_close($conn);
?>