<?php
// Masukkan file koneksi ke database
require_once('../db_connection.php');

if (isset($_GET['id'])) {
    $id_mobil = $_GET['id'];

    // Query untuk menghapus data mobil
    $sql = "DELETE FROM mobil WHERE id_mobil = $id_mobil";

    if (mysqli_query($conn, $sql)) {
        // Redirect ke halaman dashboard atau halaman lain jika berhasil
        header("Location: dashboard_admin.php");
        exit();
    } else {
        // Jika query gagal dieksekusi
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Menutup koneksi database
    mysqli_close($conn);
}
?>
