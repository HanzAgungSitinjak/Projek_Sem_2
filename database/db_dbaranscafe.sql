-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 29, 2022 at 12:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dbaranscafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama_user`, `komentar`, `tanggal`) VALUES
(1, 'Hans agung', 'Website ini sangat membantu!!', '2022-06-15'),
(2, 'Admin', 'Terimakasih banyak :))', '2022-06-16'),
(3, 'Admin', 'silahkan datang kembali !!!', '2022-06-16'),
(4, 'Hans agung', 'Iya minnn', '2022-06-16'),
(6, 'Hans', 'Baguss', '2022-06-16'),
(7, 'Hans agung', 'wow', '2022-06-21'),
(8, 'Admin', 'sama sama', '2022-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(50) NOT NULL,
  `pemesan` varchar(100) NOT NULL,
  `total_belanja` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nomor_meja` int(50) NOT NULL,
  `catatan` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `pemesan`, `total_belanja`, `tanggal`, `nomor_meja`, `catatan`, `keterangan`) VALUES
(1, 'Hans agung', '60000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(2, 'Hans agung', '90000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(3, 'Hans agung', '60000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(4, 'Hans agung', '35000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(5, 'yosafat', '25000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(6, 'marintansinaga', '65000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(7, 'Hans agung', '25000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(8, 'Hans agung', '25000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(9, 'Hans agung', '25000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(10, 'Hans agung', '25000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(11, 'Hans agung', '25000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(12, 'Hans agung', '25000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(13, 'Hans agung', '85000', '2022-06-27 06:44:56', 0, '', 'pembayaran selesai'),
(14, 'Hans agung', '85000', '2022-06-27 06:44:56', 14, 'wow', 'pembayaran selesai'),
(15, 'Hans agung', '85000', '2022-06-27 06:44:56', 18, 'yang mantaoppp', 'pembayaran selesai'),
(16, 'Hans agung', '85000', '2022-06-27 06:44:56', 18, 'yang mantaoppp', 'pembayaran selesai'),
(17, 'marintansinaga', '35000', '2022-06-27 06:44:56', 16, 'loolooo', 'pembayaran selesai'),
(18, 'Hans agung', '25000', '2022-06-27 06:44:56', 13, 'ppp', 'pembayaran selesai'),
(19, 'diva', '35000', '2022-06-27 06:44:56', 15, 'jgn pakai lada hitam', 'pembayaran selesai'),
(20, 'Ribka', '35000', '2022-06-27 06:44:56', 9, 'tidak ada', 'pembayaran selesai'),
(21, 'Hans agung', '35000', '2022-06-27 06:44:56', 16, 'Kosongkan jika tidak perlu', 'pembayaran selesai'),
(22, 'Zuklifiki', '60000', '2022-06-27 06:44:56', 23, 'Kosongkan jika tidak perlu', 'pembayaran selesai'),
(23, 'roki', '25000', '2022-06-27 15:43:39', 5, 'Kosongkan jika tidak perlu', 'pembayaran selesai'),
(24, 'Bataknese', '40000', '2022-06-27 07:07:30', 19, 'Kosongkan jika tidak perlu', 'pembayaran selesai'),
(25, 'Kelompokbataknese', '82000', '2022-06-27 07:06:34', 17, 'Kosongkan jika tidak perlu', 'pembayaran selesai'),
(26, 'Hans agung', '35000', '2022-06-27 15:33:57', 25, 'Janji', 'pembayaran selesai'),
(27, 'marintansinaga', '35000', '2022-06-28 03:23:57', 16, 'Kosongkan jika tidak perlu', 'pembayaran selesai');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_produk`
--

CREATE TABLE `pemesanan_produk` (
  `id_pemesanan_produk` int(50) NOT NULL,
  `id_pemesanan` int(50) NOT NULL,
  `pemesan` varchar(100) NOT NULL,
  `id_menu` int(50) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `nomor_meja` int(50) NOT NULL,
  `catatan` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan_produk`
--

INSERT INTO `pemesanan_produk` (`id_pemesanan_produk`, `id_pemesanan`, `pemesan`, `id_menu`, `jumlah`, `nomor_meja`, `catatan`, `keterangan`) VALUES
(1, 1, 'Hans agung', 3, '1', 0, '', ''),
(2, 1, 'Hans agung', 2, '1', 0, '', ''),
(3, 2, 'Hans agung', 8, '1', 0, '', ''),
(4, 2, 'Hans agung', 6, '1', 0, '', ''),
(5, 3, 'Hans agung', 2, '1', 0, '', ''),
(6, 3, 'Hans agung', 3, '1', 0, '', ''),
(7, 4, 'Hans agung', 3, '1', 0, '', ''),
(8, 5, 'yosafat', 2, '1', 0, '', ''),
(9, 6, 'marintansinaga', 5, '1', 0, '', ''),
(10, 6, 'marintansinaga', 2, '1', 0, '', ''),
(11, 16, 'Hans agung', 2, '2', 0, '', ''),
(12, 16, 'Hans agung', 3, '1', 0, '', ''),
(13, 17, 'marintansinaga', 3, '1', 0, '', ''),
(14, 18, 'Hans agung', 2, '1', 13, 'ppp', ''),
(15, 19, 'diva', 3, '1', 15, 'jgn pakai lada hitam', ''),
(16, 20, 'Ribka', 3, '1', 9, 'tidak ada', ''),
(17, 21, 'Hans agung', 3, '1', 16, 'Kosongkan jika tidak perlu', 'Belum bayar'),
(18, 22, 'Zuklifiki', 2, '1', 23, 'Kosongkan jika tidak perlu', 'Belum bayar'),
(19, 22, 'Zuklifiki', 3, '1', 23, 'Kosongkan jika tidak perlu', 'Belum bayar'),
(20, 23, 'roki', 2, '1', 5, 'Kosongkan jika tidak perlu', 'Belum bayar'),
(21, 24, 'Bataknese', 5, '1', 19, 'Kosongkan jika tidak perlu', 'Belum bayar'),
(22, 25, 'Kelompokbataknese', 6, '1', 17, 'Kosongkan jika tidak perlu', 'Belum bayar'),
(23, 25, 'Kelompokbataknese', 5, '1', 17, 'Kosongkan jika tidak perlu', 'Belum bayar'),
(24, 25, 'Kelompokbataknese', 7, '1', 17, 'Kosongkan jika tidak perlu', 'Belum bayar'),
(25, 26, 'Hans agung', 3, '1', 25, 'Janji', 'Belum bayar'),
(26, 27, 'marintansinaga', 3, '1', 16, 'Kosongkan jika tidak perlu', 'Belum bayar');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_menu` int(50) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jenis_menu` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_menu`, `nama_menu`, `jenis_menu`, `stok`, `harga`, `gambar`) VALUES
(2, 'Capcay', 'Makanan', 10, 25000, 'capcay.jpg'),
(3, 'Udang Saos Tiram', 'Makanan', 15, 35000, 'udangtiram.jpg'),
(5, 'Rendang', 'Makanan', 6, 40000, 'ren.jpg'),
(6, 'Babi panggang', 'Makanan', 2, 30000, 'babi panggang.jpg'),
(7, 'Ayam bumbu', 'Makanan', 3, 12000, 'Ayam bumbu.jpg'),
(8, 'Ikan mas arsik', 'Makanan', 2, 60000, 'arsik.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(50) NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_event` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `media_sosial` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(50) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `tanggal_pemesanan`, `tanggal_event`, `username`, `media_sosial`, `alamat`, `hp`, `event`) VALUES
(1, '2022-06-15 20:25:17', '2050-03-04', 'Hans agung', 'hans23', 'Laguboti 14', '898', 'Ulang Tahun'),
(2, '2022-06-15 20:45:42', '2022-06-17', 'Hans agung', 'hans23', 'Sidikalang', '0898-98999876', 'Kumpul keluarga besar'),
(3, '2022-06-16 04:11:14', '2023-06-06', 'Hans agung', 'hans23', 'Sidikalang', '0898-98999876', 'Kumpul keluarga besar'),
(4, '2022-06-23 05:52:34', '2023-08-08', 'Hans agung', 'hans23', 'Sidikalang', '0898-98999876', 'Ulang Tahun'),
(5, '2022-06-23 05:53:07', '2023-08-08', 'Hans agung', 'hans23', 'Sidikalang', '0898-98999876', 'Ulang Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `gambar`) VALUES
(25, 'serviceBg.jpg'),
(33, 'gambar-1.jpeg'),
(34, 'gambar-2.jpeg'),
(35, 'gambar-3.jpeg'),
(37, 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `jenis_kelamin`, `alamat`, `hp`, `status`) VALUES
(1, 'Hans agung', 'hansagung19@gmail.com', 'hansagg11', 'Pria', 'Laguboti', '0898-98999876', 'user'),
(2, 'Admin', 'dbaranscafe@gmail.com', 'Admin', 'Wanita', 'Sidikalang', '0898-98999876', 'admin'),
(3, 'Jesika situmeang', 'jesika7@gmail.com', 'jess123', 'Wanita', 'Sidikalang', '0898-98999876', 'user'),
(4, 'Hans agung', 'hansagung19@gmail.com', 'divatheresia01', 'Pria', 'Sidikalang', '0898-98999876', 'user'),
(5, 'Hans agung', 'hansagung19@gmail.com', 'koko89', 'Pria', 'Sidikalang', '0898-98999876', 'user'),
(6, 'Hans agung', 'hansagung19@gmail.com', 'ayam11', 'Pria', 'Sidikalang', '0898-98999876', 'user'),
(7, 'marintansinaga', 'marintansinaga01@gmail.com', 'marintan', 'Pria', 'Sidikalang', '0898-98999876', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD PRIMARY KEY (`id_pemesanan_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  MODIFY `id_pemesanan_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_menu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
