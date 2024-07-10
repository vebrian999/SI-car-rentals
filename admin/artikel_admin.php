<?php
include '../db_connection.php'; // Sertakan file koneksi database

// Path dasar untuk gambar
$baseImagePath = '../uploads/';

// Query untuk mengambil data artikel dari tabel yang sesuai
$sql = "SELECT id, judul_gambar, judul, waktu_rilis, about FROM artikel";

$result = mysqli_query($conn, $sql);

// Periksa apakah query berhasil dieksekusi
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artikel | ManggaDua Transport</title>
    <link rel="stylesheet" href="./assets/css/tailwind.css" />
    <link rel="stylesheet" href="./assets/css/input.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <!-- awal header -->
    <header>
      <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
              <button
                data-drawer-target="logo-sidebar"
                data-drawer-toggle="logo-sidebar"
                aria-controls="logo-sidebar"
                type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
              </button>
            <div>
              <a href="../admin/dashboard_product.php">
                <img src="../assets/images/logos/logoipsum-260.svg" class="object-cover w-[140px] h-auto" height="60" width="80" alt="260" />
              </a>
            </div>
            </div>
            <div class="flex items-center">
              <div class="flex items-center ms-3">
                <div>
                  <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-12 h-12 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo" />
                  </button>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
                  <div class="px-4 py-3" role="none">
                    <p class="text-sm text-gray-900" role="none">Admin</p>
                    <p class="text-sm font-medium text-gray-900 truncate">admin@gmail.com</p>
                  </div>
                  <ul class="py-1" role="none">
                    <li>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profil</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- akhir header -->
    <main class="flex justify-center mx-32">
        <div id="content" class="content w-2/3">
            <div class="mt-20 pt-2">
                <div class="my-5 flex justify-end"> 
                       <a href="tambah_artikel_admin.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tambah Artikel Baru</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Loop through articles -->
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Limit about text to 10 words
                            $aboutWords = explode(' ', $row['about']);
                            $shortAbout = implode(' ', array_slice($aboutWords, 0, 10)) . '...';
                    ?>
                    <article class="relative md:w-auto overflow-hidden  group border border-slate-200 rounded-md bg-white">
                        <!-- ARTIKEL CARD HEAD -->
                        <div class="relative overflow-hidden w-full h-[200px] md:h-[220px] lg:h-[250px] rounded-t">
                            <!-- BUTTON LOVE -->
                            <button type="button" class="h-10 w-10 flex items-center justify-center absolute top-2.5 right-2.5 z-10 text-gray-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="rgba(0, 0, 0, 0.85)" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </button>
                            <!-- GAMBAR ARTIKEL -->
                            <a href="../detail_artikel.php?id=<?php echo $row['id']; ?>">
                                <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110" src="<?php echo $baseImagePath . $row['judul_gambar']; ?>" alt="<?php echo $row['judul']; ?>" />
                            </a>
                        </div>
                        <!-- ARTIKEL CARD BODY -->
                        <section class="p-4">
                            <div class="flex items-center justify-between mb-1.5">
                                <p class="font-semibold text-[13px] text-[#fd9704]">
                                    <a href="#">Wisata</a>
                                </p>
                                <div class="flex items-center gap-x-1 text-[#fd9704]">
                                    <strong class="font-normal text-gray-800 text-sm"><?php echo $row['waktu_rilis']; ?></strong>
                                </div>
                            </div>
                            <!-- JUDUL ARTIKEL -->
                            <h3 class="font-semibold text-lg text-gray-900">
                                <a href="../detail_artikel.php?id=<?php echo $row['id']; ?>"><?php echo $row['judul']; ?></a>
                            </h3>
                            <p class="text-sm text-gray-700"><?php echo $shortAbout; ?></p>
                                    <div class="flex justify-between items-center mt-3">
                                        <a href="edit_artikel.php?id=<?php echo $row['id']; ?>" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                                        <a href="delete_artikel.php?id=<?php echo $row['id']; ?>" class="text-red-500 hover:text-red-700">Delete</a>
                                    </div>
                        </section>
                    </article>
                    <?php
                        }
                    } else {
                        echo "Tidak ada artikel yang ditemukan.";
                    }
                    ?>
                </div>
            </div>
        </div>
              <!-- awal sidebar (aside) -->
      <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 mt-10 h-screen pt-20 transition-transform -translate-x-full bg-blue-600 border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-blue-600">
          <ul class="space-y-2 font-medium">
            <!-- dashbord -->
            <li>
              <a href="../admin/dashboard_home.php" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-black ">
                <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path
                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                </svg>
                <span class="ms-3">Dashboard</span>
              </a>
            </li>

            <!-- product -->
            <li>
              <a href="../admin/dashboard_product.php" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-black">
                <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
              </a>
            </li>

            <!-- users -->
            <li>
              <a href="./artikel_admin.php" class="flex items-center p-2 text-black bg-white rounded-lg">
                <i class="fa-solid fa-newspaper text-xl"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">Articles</span>
              </a>
            </li>

            <!-- notifikasi -->
            <li>
              <a href="../admin/pesan_admin.php" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-black">
                <i class="fa-solid fa-bell text-xl font-semibold"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-600 bg-white rounded-full">3</span>
              </a>
            </li>
          </ul>

          <ul class="space-y-2 mt-4 border-t border-gray-200 pt-4">
            <!-- log out -->
            <li class="">
              <a href="logout_admin.php" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-red-600">
                <i class="fa-solid fa-power-off text-2xl"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">Log out</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- akhir sidebar (aside) -->
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>
<?php
// Tutup koneksi database
mysqli_close($conn);
?>
