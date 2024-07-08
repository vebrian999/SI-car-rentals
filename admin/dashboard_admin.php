<?php
// Masukkan file koneksi ke database
require_once('../db_connection.php');

// Function to limit words with handling for empty or null strings
function limit_words($string, $word_limit) {
    if (empty($string)) {
        return "";
    }
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}

// Query untuk mengambil data mobil
$sql = "SELECT * FROM mobil";
$result = mysqli_query($conn, $sql);

// Debugging untuk melihat data yang dikirimkan dari form
var_dump($_POST);

// Memeriksa apakah form telah dikirimkan
if (isset($_POST['submit'])) {
    // Mengambil data dari formulir tambah mobil
    $nama_mobil = $_POST['nama_mobil'];
    $harga_mobil = $_POST['harga_mobil'];
    $deskripsi_p1 = $_POST['deskripsi_p1'];
    $deskripsi_p2 = $_POST['deskripsi_p2'];
    $deskripsi_p3 = $_POST['deskripsi_p3'];
    $deskripsi_p4 = $_POST['deskripsi_p4'];

    // Meng-handle upload gambar mobil
    $gambar1 = $_FILES['gambar1']['name'];
    $gambar2 = $_FILES['gambar2']['name'];
    $gambar3 = $_FILES['gambar3']['name'];
    $gambar4 = $_FILES['gambar4']['name'];

    // Temporary file paths untuk upload
    $gambar1_tmp = $_FILES['gambar1']['tmp_name'];
    $gambar2_tmp = $_FILES['gambar2']['tmp_name'];
    $gambar3_tmp = $_FILES['gambar3']['tmp_name'];
    $gambar4_tmp = $_FILES['gambar4']['tmp_name'];

    // Lokasi penyimpanan gambar (disesuaikan dengan struktur folder di server)
    $upload_dir = '../uploads/';

    // Memindahkan gambar ke folder uploads
    move_uploaded_file($gambar1_tmp, $upload_dir . $gambar1);
    move_uploaded_file($gambar2_tmp, $upload_dir . $gambar2);
    move_uploaded_file($gambar3_tmp, $upload_dir . $gambar3);
    move_uploaded_file($gambar4_tmp, $upload_dir . $gambar4);

// Query untuk memasukkan data baru ke dalam tabel mobil
$sql = "INSERT INTO mobil (nama_mobil, harga_mobil, deskripsi_p1, deskripsi_p2, deskripsi_p3, deskripsi_p4, gambar1, gambar2, gambar3, gambar4) 
        VALUES ('$nama_mobil', '$harga_mobil', '$deskripsi_p1', '$deskripsi_p2', '$deskripsi_p3', '$deskripsi_p4', '$gambar1', '$gambar2', '$gambar3', '$gambar4')";

    if (mysqli_query($conn, $sql)) {
        // Redirect ke halaman dashboard atau halaman lain jika berhasil
        header("Location: dashboard_admin.php");
        exit();
    } else {
        // Jika query gagal dieksekusi
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Menutup koneksi database
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN | Manggadua Transport</title>
    <link rel="stylesheet" href="assets/app.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/your-embed-code.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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
              <a href="./index.html">
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
                    <p class="text-sm text-gray-900" role="none">Neil Sims</p>
                    <p class="text-sm font-medium text-gray-900 truncate">neil.sims@flowbite.com</p>
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

    <main>
        <div id="content" class="content">
            <div class="mt-20 p-4 sm:ml-64 md:mt-10">
                <div class="p-4 border-2 border-gray-200 rounded-lg mt-14">
                    <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50">
                        <h2 class="text-2xl font-semibold text-gray-900">Daftar Mobil</h2>
                    </div>


<!-- Tombol Tambah -->
<div class="flex justify-end mb-4">
    <button onclick="toggleForm()" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Tambah Mobil</button>
</div>

<!-- Form Tambah Mobil (dibuat tersembunyi secara default) -->
<div id="formTambahMobil" class="hidden">
    <form action="dashboard_admin.php" method="POST" enctype="multipart/form-data" class="space-y-4">
        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
          <!-- Jenis Mobil -->
          <div class="sm:col-span-3">
              <label for="nama_mobil" class="block text-sm font-medium text-gray-700">Nama Mobil</label>
              <input type="text" name="nama_mobil" id="nama_mobil" autocomplete="given-name" required class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
          </div>

            <!-- Harga Mobil -->
            <div class="sm:col-span-3">
                <label for="harga_mobil" class="block text-sm font-medium text-gray-700">Harga Mobil</label>
                <input type="text" name="harga_mobil" id="harga_mobil" autocomplete="family-name" required class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
            </div>

            <!-- Deskripsi P1 -->
            <div class="sm:col-span-3">
                <label for="deskripsi_p1" class="block text-sm font-medium text-gray-700">Deskripsi P1</label>
                <input type="text" name="deskripsi_p1" id="deskripsi_p1" autocomplete="address-line2" class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
            </div>

            <!-- Deskripsi P2 -->
            <div class="sm:col-span-3">
                <label for="deskripsi_p2" class="block text-sm font-medium text-gray-700">Deskripsi P2</label>
                <input type="text" name="deskripsi_p2" id="deskripsi_p2" autocomplete="address-level1" class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
            </div>

            <!-- Deskripsi P3 -->
            <div class="sm:col-span-3">
                <label for="deskripsi_p3" class="block text-sm font-medium text-gray-700">Deskripsi P3</label>
                <input type="text" name="deskripsi_p3" id="deskripsi_p3" autocomplete="address-level2" class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
            </div>

            <!-- Deskripsi P4 -->
            <div class="sm:col-span-6">
                <label for="deskripsi_p4" class="block text-sm font-medium text-gray-700">Deskripsi P4</label>
                <textarea id="deskripsi_p4" name="deskripsi_p4" rows="3" class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm"></textarea>
            </div>

            <!-- Gambar Mobil 1 -->
            <div class="sm:col-span-3">
                <label for="gambar1" class="block text-sm font-medium text-gray-700">Gambar Mobil 1</label>
                <input type="file" name="gambar1" id="gambar1" required class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
            </div>

            <!-- Gambar Mobil 2 -->
            <div class="sm:col-span-3">
                <label for="gambar2" class="block text-sm font-medium text-gray-700">Gambar Mobil 2</label>
                <input type="file" name="gambar2" id="gambar2" class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
            </div>

            <!-- Gambar Mobil 3 -->
            <div class="sm:col-span-3">
                <label for="gambar3" class="block text-sm font-medium text-gray-700">Gambar Mobil 3</label>
                <input type="file" name="gambar3" id="gambar3" class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
            </div>

            <!-- Gambar Mobil 4 -->
            <div class="sm:col-span-3">
                <label for="gambar4" class="block text-sm font-medium text-gray-700">Gambar Mobil 4</label>
                <input type="file" name="gambar4" id="gambar4" class="block w-full px-3 py-2 mt-1 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
            </div>

            <!-- Tombol Submit -->
            <div class="sm:col-span-3">
                <button type="submit" name="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Tambah</button>
            </div>
        </div>
    </form>
</div>
<!-- Akhir Form Tambah Mobil -->




<!-- Daftar Mobil -->
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">id_mobil</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">nama_mobil</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">harga_mobil</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">deskripsi_p1</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">deskripsi_p2</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">deskripsi_p3</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">deskripsi_p4</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">gambar1</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">gambar2</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">gambar3</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">gambar4</th>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo $row['id_mobil']; ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo $row['nama_mobil']; ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo number_format($row['harga_mobil'], 2); ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo limit_words($row['deskripsi_p1'], 5); ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo limit_words($row['deskripsi_p2'], 5); ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo limit_words($row['deskripsi_p3'], 5); ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo limit_words($row['deskripsi_p4'], 5); ?></div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo $row['gambar1']; ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo $row['gambar2']; ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo $row['gambar3']; ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo $row['gambar4']; ?></div>
                            </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                  <a href="edit_mobil.php?id=<?php echo $row['id_mobil']; ?>" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                  <a href="delete_mobil.php?id=<?php echo $row['id_mobil']; ?>" class="text-red-600 hover:text-red-900 ml-4">Delete</a>
                              </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Akhir Daftar Mobil -->
                </div>
            </div>
        </div>

        <script>
        // Function to toggle the add car form visibility
        function toggleForm() {
            var form = document.getElementById('formTambahMobil');
            form.classList.toggle('hidden');
        }
    </script>

      <!-- awal sidebar (aside) -->
      <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 mt-10 h-screen pt-20 transition-transform -translate-x-full bg-blue-600 border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-blue-600">
          <ul class="space-y-2 font-medium">
            <!-- dashbord -->
            <li>
              <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-black">
                <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path
                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                </svg>
                <span class="ms-3">Dashboard</span>
              </a>
            </li>

            <!-- product -->
            <li>
              <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-black">
                <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
              </a>
            </li>

            <!-- users -->
            <li>
              <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-black">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path
                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
              </a>
            </li>

            <!-- notifikasi -->
            <li>
              <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-black">
                <i class="fa-solid fa-bell text-xl font-semibold"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-600 bg-white rounded-full">3</span>
              </a>
            </li>

            <!-- user -->
            <li>
              <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-black">
                <i class="fa-solid fa-user text-xl"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">User</span>
              </a>
            </li>

            <!-- Appearance -->
            <li>
              <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-black">
                <i class="fa-solid fa-image text-xl"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">Appearance</span>
              </a>
            </li>
          </ul>

          <ul class="space-y-2 mt-4 border-t border-gray-200 pt-4">
            <!-- log out -->
            <li class="">
              <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-white hover:text-red-600">
                <i class="fa-solid fa-power-off text-2xl"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">Log out</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- akhir sidebar (aside) -->
    </main>
    <!-- akhir  main -->

    <!-- cdn flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </body>
</html>
