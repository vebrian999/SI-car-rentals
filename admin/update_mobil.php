<?php
// Masukkan file koneksi ke database
require_once('../db_connection.php');

// Memeriksa apakah form telah dikirimkan
if (isset($_POST['submit'])) {
    // Mengambil data dari formulir edit mobil
    $id_mobil = $_POST['id_mobil'];
    $nama_mobil = $_POST['nama_mobil'];
    $harga_mobil = $_POST['harga_mobil'];
    $deskripsi_p1 = $_POST['deskripsi_p1'];
    $deskripsi_p2 = $_POST['deskripsi_p2'];
    $deskripsi_p3 = $_POST['deskripsi_p3'];
    $deskripsi_p4 = $_POST['deskripsi_p4'];

    // Query untuk update data mobil berdasarkan id_mobil
    $sql = "UPDATE mobil SET 
            nama_mobil = '$nama_mobil', 
            harga_mobil = '$harga_mobil', 
            deskripsi_p1 = '$deskripsi_p1', 
            deskripsi_p2 = '$deskripsi_p2', 
            deskripsi_p3 = '$deskripsi_p3', 
            deskripsi_p4 = '$deskripsi_p4'
            WHERE id_mobil = $id_mobil";

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
