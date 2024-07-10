<?php
include '../db_connection.php'; // Sertakan file koneksi database

// Path dasar untuk gambar
$baseImagePath = '../uploads/';

// Ambil id artikel yang akan diedit dari parameter URL
$id = $_GET['id'];

// Query untuk mengambil data artikel berdasarkan id
$sql = "SELECT * FROM artikel WHERE id = $id";
$result = mysqli_query($conn, $sql);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    die('Query Error: ' . mysqli_error($conn));
}

// Ambil data artikel
$row = mysqli_fetch_assoc($result);

// Tutup koneksi database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel | ManggaDua Transport</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
    <main class="flex justify-center mt-8">
        <div id="content" class="w-full lg:w-2/3 p-6 bg-white shadow-md rounded-lg">
            <h2 class="text-2xl font-bold mb-4">Form Edit Artikel</h2>
            <form action="proses_edit_artikel.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-bold mb-2">Judul Artikel:</label>
                    <input type="text" id="judul" name="judul" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="<?php echo $row['judul']; ?>">
                </div>

                <div class="mb-4">
                    <label for="gambar" class="block text-gray-700 font-bold mb-2">Gambar:</label>
                    <input type="file" id="gambar" name="gambar" accept="image/*" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    <p class="text-sm text-gray-500 mt-2">Current Image: <img src="<?php echo $baseImagePath . $row['judul_gambar']; ?>" alt="<?php echo $row['judul']; ?>" class="h-10 w-10 inline-block"></p>
                </div>

                <div class="mb-4">
                    <label for="about" class="block text-gray-700 font-bold mb-2">About:</label>
                    <textarea id="about" name="about" rows="4" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"><?php echo $row['about']; ?></textarea>
                </div>

                <div class="mb-4">
                    <label for="waktu_rilis" class="block text-gray-700 font-bold mb-2">Waktu Rilis:</label>
                    <div class="fb-input">
                        <input type="datetime-local" id="waktu_rilis" name="waktu_rilis" required class="px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="<?php echo date('Y-m-d\TH:i', strtotime($row['waktu_rilis'])); ?>">
                    </div>
                </div>

                <!-- Bagian 1 -->
                <h2 class="text-2xl font-bold mb-4 mt-10">Bagian Artikel 1</h2>
                <div class="mb-4">
                    <label for="subjudul1" class="block text-gray-700 font-bold mb-2">Subjudul 1:</label>
                    <input type="text" id="subjudul1" name="subjudul1" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="<?php echo $row['subjudul1']; ?>">
                </div>

                <div class="mb-4">
                    <label for="gambar1" class="block text-gray-700 font-bold mb-2">Gambar 1:</label>
                    <input type="file" id="gambar1" name="gambar1" accept="image/*" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    <p class="text-sm text-gray-500 mt-2">Current Image: <img src="<?php echo $baseImagePath . $row['gambar1']; ?>" alt="<?php echo $row['subjudul1']; ?>" class="h-10 w-10 inline-block"></p>
                </div>

                <div class="mb-4">
                    <label for="teks1" class="block text-gray-700 font-bold mb-2">Teks 1:</label>
                    <textarea id="teks1" name="teks1" rows="4" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"><?php echo $row['teks1']; ?></textarea>
                </div>

                <!-- Bagian 2 -->
                <h2 class="text-2xl font-bold mb-4">Bagian Artikel 2</h2>
                <div class="mb-4">
                    <label for="subjudul2" class="block text-gray-700 font-bold mb-2">Subjudul 2:</label>
                    <input type="text" id="subjudul2" name="subjudul2" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="<?php echo $row['subjudul2']; ?>">
                </div>

                <div class="mb-4">
                    <label for="gambar2" class="block text-gray-700 font-bold mb-2">Gambar 2:</label>
                    <input type="file" id="gambar2" name="gambar2" accept="image/*" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    <p class="text-sm text-gray-500 mt-2">Current Image: <img src="<?php echo $baseImagePath . $row['gambar2']; ?>" alt="<?php echo $row['subjudul2']; ?>" class="h-10 w-10 inline-block"></p>
                </div>

                <div class="mb-4">
                    <label for="teks2" class="block text-gray-700 font-bold mb-2">Teks 2:</label>
                    <textarea id="teks2" name="teks2" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"><?php echo $row['teks2']; ?></textarea>
                </div>

                <!-- Bagian 3 -->
                <h2 class="text-2xl font-bold mb-4">Bagian Artikel 3</h2>
                <div class="mb-4">
                    <label for="subjudul3" class="block text-gray-700 font-bold mb-2">Subjudul 3:</label>
                    <input type="text" id="subjudul3" name="subjudul3" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="<?php echo $row['subjudul3']; ?>">
                </div>

                <div class="mb-4">
                    <label for="gambar3" class="block text-gray-700 font-bold mb-2">Gambar 3:</label>
                    <input type="file" id="gambar3" name="gambar3" accept="image/*" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    <p class="text-sm text-gray-500 mt-2">Current Image: <img src="<?php echo $baseImagePath . $row['gambar3']; ?>" alt="<?php echo $row['subjudul3']; ?>" class="h-10 w-10 inline-block"></p>
                </div>

                <div class="mb-4">
                    <label for="teks3" class="block text-gray-700 font-bold mb-2">Teks 3:</label>
                    <textarea id="teks3" name="teks3" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"><?php echo $row['teks3']; ?></textarea>
                </div>

                <!-- Bagian 4 -->
                <h2 class="text-2xl font-bold mb-4">Bagian Artikel 4</h2>
                <div class="mb-4">
                    <label for="subjudul4" class="block text-gray-700 font-bold mb-2">Subjudul 4:</label>
                    <input type="text" id="subjudul4" name="subjudul4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="<?php echo $row['subjudul4']; ?>">
                </div>

                <div class="mb-4">
                    <label for="gambar4" class="block text-gray-700 font-bold mb-2">Gambar 4:</label>
                    <input type="file" id="gambar4" name="gambar4" accept="image/*" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    <p class="text-sm text-gray-500 mt-2">Current Image: <img src="<?php echo $baseImagePath . $row['gambar4']; ?>" alt="<?php echo $row['subjudul4']; ?>" class="h-10 w-10 inline-block"></p>
                </div>

                <div class="mb-4">
                    <label for="teks4" class="block text-gray-700 font-bold mb-2">Teks 4:</label>
                    <textarea id="teks4" name="teks4" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"><?php echo $row['teks4']; ?></textarea>
                </div>

                <!-- Bagian 5 -->
                <h2 class="text-2xl font-bold mb-4">Bagian Artikel 5</h2>
                <div class="mb-4">
                    <label for="subjudul5" class="block text-gray-700 font-bold mb-2">Subjudul 5:</label>
                    <input type="text" id="subjudul5" name="subjudul5" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="<?php echo $row['subjudul5']; ?>">
                </div>

                <div class="mb-4">
                    <label for="gambar5" class="block text-gray-700 font-bold mb-2">Gambar 5:</label>
                    <input type="file" id="gambar5" name="gambar5" accept="image/*" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    <p class="text-sm text-gray-500 mt-2">Current Image: <img src="<?php echo $baseImagePath . $row['gambar5']; ?>" alt="<?php echo $row['subjudul5']; ?>" class="h-10 w-10 inline-block"></p>
                </div>

                <div class="mb-4">
                    <label for="teks5" class="block text-gray-700 font-bold mb-2">Teks 5:</label>
                    <textarea id="teks5" name="teks5" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"><?php echo $row['teks5']; ?></textarea>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan Perubahan</button>
                    <a href="artikel_admin.php" class="ml-4 inline-block text-sm text-gray-500">Batal</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
