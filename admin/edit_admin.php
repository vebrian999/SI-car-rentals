<?php
// Include file for database connection
include 'db_connection.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Query untuk mengambil data mobil berdasarkan ID
$query = "SELECT * FROM mobil WHERE id_mobil = $id";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $jenis_mobil = $row['jenis_mobil'];
    $harga_mobil = $row['harga_mobil'];
    $supir = $row['supir'];
    $lama_pinjaman = $row['lama_pinjaman'];
    $bank = $row['bank'];
    $jumlah_pintu = $row['jumlah_pintu'];
    $persneling = $row['persneling'];
    $deskripsi_mobil = $row['deskripsi_mobil'];
    $hanya_supir = $row['hanya_supir'];
    $gambar_mobil = $row['gambar_mobil'];
} else {
    echo "Data tidak ditemukan.";
    exit;
}

// Fungsi untuk menampilkan dropdown enum
function showSupirDropdown($current) {
    $options = ['Ya', 'Tidak'];
    foreach($options as $option) {
        echo "<option value='$option' " . ($option == $current ? 'selected' : '') . ">$option</option>";
    }
}

// Fungsi untuk menampilkan form edit mobil
function showEditForm($id, $jenis_mobil, $harga_mobil, $supir, $lama_pinjaman, $bank, $jumlah_pintu, $persneling, $deskripsi_mobil, $hanya_supir, $gambar_mobil) {
    echo "
    <form action='update.php' method='POST'>
        <input type='hidden' name='id' value='$id'>
        <label>Jenis Mobil:</label><br>
        <input type='text' name='jenis_mobil' value='$jenis_mobil'><br><br>
        <label>Harga Mobil:</label><br>
        <input type='text' name='harga_mobil' value='$harga_mobil'><br><br>
        <label>Supir:</label><br>
        <select name='supir'>
            " . showSupirDropdown($supir) . "
        </select><br><br>
        <label>Lama Pinjaman:</label><br>
        <input type='text' name='lama_pinjaman' value='$lama_pinjaman'><br><br>
        <label>Bank:</label><br>
        <input type='text' name='bank' value='$bank'><br><br>
        <label>Jumlah Pintu:</label><br>
        <input type='number' name='jumlah_pintu' value='$jumlah_pintu'><br><br>
        <label>Persneling:</label><br>
        <input type='text' name='persneling' value='$persneling'><br><br>
        <label>Deskripsi Mobil:</label><br>
        <textarea name='deskripsi_mobil'>$deskripsi_mobil</textarea><br><br>
        <label>Hanya Supir:</label><br>
        <select name='hanya_supir'>
            " . showSupirDropdown($hanya_supir) . "
        </select><br><br>
        <label>Gambar Mobil:</label><br>
        <input type='text' name='gambar_mobil' value='$gambar_mobil'><br><br>
        <input type='submit' value='Update'>
    </form>
    ";
}

// Menampilkan form edit
showEditForm($id, $jenis_mobil, $harga_mobil, $supir, $lama_pinjaman, $bank, $jumlah_pintu, $persneling, $deskripsi_mobil, $hanya_supir, $gambar_mobil);

?>
