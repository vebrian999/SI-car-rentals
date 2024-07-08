-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2024 at 10:39 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `harga_mobil` decimal(10,2) NOT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL,
  `deskripsi_p1` text NOT NULL,
  `deskripsi_p2` text NOT NULL,
  `deskripsi_p3` text NOT NULL,
  `deskripsi_p4` text,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `gambar4` varchar(255) NOT NULL,
  `supir` decimal(10,2) DEFAULT '0.00',
  `tanggal_sewa` date DEFAULT NULL,
  `durasi` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `harga_mobil`, `total_harga`, `deskripsi_p1`, `deskripsi_p2`, `deskripsi_p3`, `deskripsi_p4`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `supir`, `tanggal_sewa`, `durasi`) VALUES
(1, 'Nama Mobil Anda', '500000.00', NULL, 'Deskripsi paragraf 1', 'Deskripsi paragraf 2', 'Deskripsi paragraf 3', NULL, 'detail_product (1).jpg', 'detail_product (2).jpg', 'detail_product (3).jpg', 'detail_product (4).jpg', '200.00', NULL, NULL),
(2, 'Avanjay', '500000.00', NULL, 'Jenis Mobil : Mini Cooper S 2023', 'Jumlah Pintu : 2 Pintu', 'persneling : Manual', NULL, 'detail_product (1).jpg', 'detail_product (2).jpg', 'detail_product (3).jpg', 'detail_product (4).jpg', '0.00', NULL, NULL),
(3, 'Mobil A', '500000.00', NULL, 'Deskripsi paragraf 1', 'Deskripsi paragraf 2', 'Deskripsi paragraf 3', NULL, 'detail_product (1).jpg', 'detail_product (2).jpg', 'detail_product (3).jpg', 'detail_product (4).jpg', NULL, NULL, NULL),
(4, 'Mobil Kodok', '700000.00', NULL, 'Jenis Mobil : Mini Cooper S 2023', 'Jumlah Pintu : 2 Pintu', 'persneling : Manual', ' Mini Cooper S 2023 adalah mobil sport kompak yang menawarkan kombinasi sempurna antara gaya dan performa. Dengan mesin yang bertenaga, desain yang ikonik, dan kabin yang stylish, mobil ini cocok untuk pengemudi yang\n                  menginginkan pengalaman mengemudi yang dinamis dan menyenangkan.Nikmati kebebasan berkendara dengan Mini Cooper kami yang selalu terjaga kualitasnya, siap menemani perjalanan Anda dengan gaya dan kenyamanan.', 'detail_product (1).jpg', 'detail_product (2).jpg', 'detail_product (3).jpg', 'detail_product (4).jpg', NULL, NULL, NULL),
(5, 'Mobil C', '500000.00', NULL, 'Deskripsi paragraf 1', 'Deskripsi paragraf 2', 'Deskripsi paragraf 3', NULL, 'detail_product (1).jpg', 'detail_product (2).jpg', 'detail_product (3).jpg', 'detail_product (4).jpg', NULL, NULL, NULL),
(6, 'Mobil D', '500000.00', NULL, 'Deskripsi paragraf 1', 'Deskripsi paragraf 2', 'Deskripsi paragraf 3', NULL, 'detail_product (1).jpg', 'detail_product (2).jpg', 'detail_product (3).jpg', 'detail_product (4).jpg', NULL, NULL, NULL),
(7, 'Mobil E', '500000.00', NULL, 'Deskripsi paragraf 1', 'Deskripsi paragraf 2', 'Deskripsi paragraf 3', NULL, 'detail_product (1).jpg', 'detail_product (2).jpg', 'detail_product (3).jpg', 'detail_product (4).jpg', NULL, NULL, NULL),
(8, 'Mobil F', '500000.00', NULL, 'Deskripsi paragraf 1', 'Deskripsi paragraf 2', 'Deskripsi paragraf 3', NULL, 'detail_product (1).jpg', 'detail_product (2).jpg', 'detail_product (3).jpg', 'detail_product (4).jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int NOT NULL,
  `filename` varchar(255) NOT NULL,
  `uploaded_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `filename`, `uploaded_at`) VALUES
(1, 'detail_product (1).jpg', '2024-07-05 09:16:08'),
(2, 'galery-rental (2).jpg', '2024-07-05 09:16:48'),
(8, 'galery-rental (4).jpg', '2024-07-05 11:22:49'),
(9, 'fast-car.jpg', '2024-07-07 04:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rating` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `title`, `description`, `rating`, `created_at`) VALUES
(14, 'febfeb', 'febfeb@gmail.com', 'Sopir nya  keren', 'gokil sopirnya bisa oleng oleng gitu hihih', 5, '2024-07-05 08:43:08'),
(16, 'kocakgaming', 'kg@gmail.com', 'sopir tidak rama dia malah mabok', 'ini sungguh meresahkan di karenakan supir tersebut mabuk saya tidak terima dan ingin ganti rugi bangsat', 5, '2024-07-05 08:48:25'),
(17, 'febfeb', 'febfeb@gmail.com', 'Mobil menarik', 'mobil sangat nyaman sekali apa lagi saat perjalanan jauh', 5, '2024-07-05 11:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `id_mobil` int NOT NULL,
  `tanggal_penyewaan` date NOT NULL,
  `durasi_penyewaan` int NOT NULL,
  `dengan_supir` tinyint(1) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_mobil`, `tanggal_penyewaan`, `durasi_penyewaan`, `dengan_supir`, `total_harga`) VALUES
(48, 8, '2024-07-08', 30, 1, '905000.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'qwerty', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
