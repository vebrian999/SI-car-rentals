<?php
include '../db_connection.php'; // Sertakan file koneksi database

// Pastikan request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    $waktu_rilis = mysqli_real_escape_string($conn, $_POST['waktu_rilis']);

    // Update data artikel di database
    $sql = "UPDATE artikel SET 
                judul='$judul', 
                about='$about', 
                waktu_rilis='$waktu_rilis',
                subjudul1='" . mysqli_real_escape_string($conn, $_POST['subjudul1']) . "',
                teks1='" . mysqli_real_escape_string($conn, $_POST['teks1']) . "',
                subjudul2='" . mysqli_real_escape_string($conn, $_POST['subjudul2']) . "',
                teks2='" . mysqli_real_escape_string($conn, $_POST['teks2']) . "',
                subjudul3='" . mysqli_real_escape_string($conn, $_POST['subjudul3']) . "',
                teks3='" . mysqli_real_escape_string($conn, $_POST['teks3']) . "',
                subjudul4='" . mysqli_real_escape_string($conn, $_POST['subjudul4']) . "',
                teks4='" . mysqli_real_escape_string($conn, $_POST['teks4']) . "',
                subjudul5='" . mysqli_real_escape_string($conn, $_POST['subjudul5']) . "',
                teks5='" . mysqli_real_escape_string($conn, $_POST['teks5']) . "'";

    // Mengatur ulang nama gambar yang sudah ada jika tidak ada gambar baru diunggah
    for ($i = 1; $i <= 5; $i++) {
        $gambar_field = 'gambar' . $i;
        // Periksa apakah ada file yang diupload untuk field gambar
        if ($_FILES[$gambar_field]['size'] > 0) {
            $gambar_name = $_FILES[$gambar_field]['name'];
            $gambar_tmp_name = $_FILES[$gambar_field]['tmp_name'];
            $gambar_extension = pathinfo($gambar_name, PATHINFO_EXTENSION);
            $new_gambar_name = uniqid() . '.' . $gambar_extension;
            $upload_dir = '../uploads/';
            $target_file = $upload_dir . $new_gambar_name;

            // Simpan file jika upload berhasil
            if (move_uploaded_file($gambar_tmp_name, $target_file)) {
                $sql .= ", $gambar_field='$new_gambar_name'";
            } else {
                echo "Gagal mengupload file $gambar_field.<br>";
            }
        } else {
            // Jika tidak ada file baru diunggah, pertahankan gambar yang sudah ada di database
            if (isset($_POST[$gambar_field . '_current'])) {
                $sql .= ", $gambar_field='" . mysqli_real_escape_string($conn, $_POST[$gambar_field . '_current']) . "'";
            }
        }
    }

    // Tambahkan kondisi WHERE untuk ID artikel yang akan diupdate
    $sql .= " WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        // Jika berhasil diupdate, redirect ke halaman admin
        header("Location: artikel_admin.php");
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // Jika bukan POST request, redirect ke halaman lain atau tampilkan pesan sesuai kebutuhan
    echo "Permintaan tidak valid.";
}

// Tutup koneksi database
mysqli_close($conn);
?>
