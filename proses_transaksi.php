<?php
// proses_transaksi.php

// Pastikan untuk memeriksa apakah $_POST['id_transaksi'] sudah didefinisikan sebelum digunakan
if (isset($_POST['id_transaksi'])) {
    try {
        // Ambil id_transaksi dari $_POST
        $id_transaksi = $_POST['id_transaksi'];
        
        // Validasi apakah total_harga sudah ada dan tidak kosong
        if (!isset($_POST['total_harga']) || empty($_POST['total_harga'])) {
            throw new Exception("Total harga tidak boleh kosong.");
        }
        
        // Ambil data lainnya dari $_POST
        $total_harga = $_POST['total_harga'];
        $full_name = $_POST['full_name'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $pickup_location = $_POST['pickup_location'];
        $pickup_time = $_POST['pickup_time'];
        $message = $_POST['message'];
        $promo_code = $_POST['promo_code'];
        
        // Lakukan koneksi ke database menggunakan PDO
        $pdo = new PDO('mysql:host=localhost;dbname=rental_mobil', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Query update untuk tabel transaksi
        $sql = "UPDATE transaksi SET 
                total_harga = :total_harga, 
                full_name = :full_name, 
                telephone = :telephone, 
                email = :email, 
                pickup_location = :pickup_location, 
                pickup_time = :pickup_time, 
                message = :message, 
                promo_code = :promo_code 
                WHERE id_transaksi = :id_transaksi";
        
        // Cek apakah promo_code yang dimasukkan adalah "QWERTY321"
        if ($promo_code === "QWERTY321") {
            // Kurangi total harga sebesar 50% jika promo code valid
            $total_harga = $total_harga * 0.5;
        }
        
        $stmt = $pdo->prepare($sql);
        
        // Bind parameter ke dalam statement
        $stmt->bindParam(':total_harga', $total_harga);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pickup_location', $pickup_location);
        $stmt->bindParam(':pickup_time', $pickup_time);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':promo_code', $promo_code);
        $stmt->bindParam(':id_transaksi', $id_transaksi);
        
        // Eksekusi statement
        $stmt->execute();
        
        // Setelah berhasil, arahkan ke halaman tiket.html
        header('Location: tiket.php?id_transaksi=' . $id_transaksi);
        exit(); // Pastikan tidak ada output lain sebelum header

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Error: ID Transaksi tidak didefinisikan.";
}
?>
