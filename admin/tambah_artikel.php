<?php
include '../db_connection.php'; // Sertakan file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    $waktu_rilis = mysqli_real_escape_string($conn, $_POST['waktu_rilis']);
    $subjudul1 = mysqli_real_escape_string($conn, $_POST['subjudul1']);
    $teks1 = mysqli_real_escape_string($conn, $_POST['teks1']);
    $subjudul2 = mysqli_real_escape_string($conn, $_POST['subjudul2']);
    $teks2 = mysqli_real_escape_string($conn, $_POST['teks2']);
    $subjudul3 = mysqli_real_escape_string($conn, $_POST['subjudul3']);
    $teks3 = mysqli_real_escape_string($conn, $_POST['teks3']);
    $subjudul4 = mysqli_real_escape_string($conn, $_POST['subjudul4']);
    $teks4 = mysqli_real_escape_string($conn, $_POST['teks4']);
    $subjudul5 = mysqli_real_escape_string($conn, $_POST['subjudul5']);
    $teks5 = mysqli_real_escape_string($conn, $_POST['teks5']);

    // Handle file uploads
    $targetDir = "../uploads/";

    // Helper function to handle file upload
    function handleFileUpload($file, $targetDir) {
        $fileName = uniqid() . '_' . basename($file["name"]); // Mengubah nama file dengan uniqid
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'jpeg', 'png', 'gif');

        if (!empty($fileName)) {
            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
                    return $fileName;
                } else {
                    echo "Maaf, terjadi kesalahan saat mengunggah file $fileName.<br>";
                }
            } else {
                echo "Maaf, hanya file dengan format JPG, JPEG, PNG, dan GIF yang diperbolehkan.<br>";
            }
        }
        return null;
    }

    $judul_gambar = handleFileUpload($_FILES["judul_gambar"], $targetDir);
    $gambar1 = handleFileUpload($_FILES["gambar1"], $targetDir);
    $gambar2 = handleFileUpload($_FILES["gambar2"], $targetDir);
    $gambar3 = handleFileUpload($_FILES["gambar3"], $targetDir);
    $gambar4 = handleFileUpload($_FILES["gambar4"], $targetDir);
    $gambar5 = handleFileUpload($_FILES["gambar5"], $targetDir);

    // Setelah semua file diunggah, masukkan data ke dalam database
    $sql = "INSERT INTO artikel (judul, judul_gambar, gambar1, gambar2, gambar3, gambar4, gambar5, about, waktu_rilis, subjudul1, teks1, subjudul2, teks2, subjudul3, teks3, subjudul4, teks4, subjudul5, teks5)
            VALUES ('$judul', '$judul_gambar', '$gambar1', '$gambar2', '$gambar3', '$gambar4', '$gambar5', '$about', '$waktu_rilis', '$subjudul1', '$teks1', '$subjudul2', '$teks2', '$subjudul3', '$teks3', '$subjudul4', '$teks4', '$subjudul5', '$teks5')";

    if (mysqli_query($conn, $sql)) {
        echo "Artikel berhasil ditambahkan.<br>";
        header("Location: artikel_admin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
}

// Tutup koneksi database
mysqli_close($conn);
?>
