<?php
// Include file for database connection
include 'db_connection.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Query untuk menghapus data mobil berdasarkan ID
$query = "DELETE FROM mobil WHERE id_mobil = $id";

if(mysqli_query($conn, $query)) {
    echo "Data berhasil dihapus.";
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
