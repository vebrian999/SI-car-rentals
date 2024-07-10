<?php
include '../db_connection.php'; // Sertakan file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query DELETE
    $sql = "DELETE FROM artikel WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Artikel berhasil dihapus.";
        header("Location: artikel_admin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Akses tidak sah untuk halaman ini.";
}

// Tutup koneksi database
mysqli_close($conn);
?>
