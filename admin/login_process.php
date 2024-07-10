<?php
session_start();
include '../db_connection.php'; // Sesuaikan dengan file koneksi database Anda

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencocokkan username dan password dengan data admin di database
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Jika login berhasil, set session untuk admin
    $_SESSION['admin_logged_in'] = true;
    header("Location: dashboard_product.php"); // Redirect ke halaman admin dashboard
} else {
    // Jika login gagal, kembalikan ke halaman login
    echo "Login failed. Invalid username or password.";
}

$conn->close();
?>
