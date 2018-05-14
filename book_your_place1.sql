-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2018 pada 04.42
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_your_place`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `id_meja` int(2) DEFAULT NULL,
  `id_pesanan` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `book`
--

INSERT INTO `book` (`id_book`, `id_meja`, `id_pesanan`) VALUES
(6, 1, 28),
(7, 2, 28),
(8, 1, 29),
(9, 2, 29),
(10, 1, 30),
(11, 2, 31),
(12, 1, 32),
(13, 2, 33),
(14, 1, 35),
(16, 4, 37),
(18, 3, 38),
(20, 19, 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(3) NOT NULL,
  `jenis_kategori` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis_kategori`) VALUES
('1', 'Japanese Healthy Food'),
('2', 'Sate Gerugok'),
('3', 'Mie dan Nasi Goreng Reubee'),
('4', 'Espresso and Espresso Based'),
('5', 'Dimsum'),
('6', 'Milkshake and Soda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_access`
--

CREATE TABLE `level_access` (
  `id_level_access` int(1) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_access`
--

INSERT INTO `level_access` (`id_level_access`, `keterangan`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'user_tamu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `id_meja` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`id_meja`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(3) NOT NULL,
  `nama_menu` varchar(30) DEFAULT NULL,
  `id_kategori` varchar(3) DEFAULT NULL,
  `harga` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `id_kategori`, `harga`) VALUES
(110, 'Curry Rice', '1', 20000),
(111, 'Beef Soup Rice', '1', 30000),
(112, 'Oyakodon', '1', 30000),
(113, 'Bento', '1', 30000),
(114, 'Yasai Itame Seafood', '1', 20000),
(115, 'Nasu Miso Ayam', '1', 20000),
(116, 'Tuna Katsu', '1', 20000),
(117, 'Tori Katsu', '1', 23000),
(118, 'Tuna Kusikatsu', '1', 20000),
(119, 'Tori Kusikatsu', '1', 23000),
(210, 'Sate Daging', '2', 40000),
(211, 'Soto Tulang', '2', 30000),
(212, 'Nasi Putih', '2', 6000),
(310, 'Mie Aceh', '3', 16000),
(311, 'Mie Aceh Telur', '3', 19000),
(312, 'Mie Aceh Daging', '3', 32000),
(313, 'Mie Aceh Udang', '3', 32000),
(314, 'Mie Aceh Kepiting', '3', 37000),
(315, 'Mia Aceh Ayam', '3', 27000),
(316, 'Indomie', '3', 16000),
(317, 'Indomier Telur', '3', 19000),
(318, 'Indomie Daging', '3', 32000),
(319, 'Indomie Udang', '3', 32000),
(321, 'Mie Hun Goreng Telur', '3', 16000),
(322, 'Mie Hun Goreng Udang', '3', 32000),
(323, 'Mie Hun Goreng Daging', '3', 32000),
(324, 'Mie Tiaw Telur', '3', 16000),
(325, 'Mie Tiaw Daging', '3', 32000),
(326, 'Nasi Goreng Telur', '3', 17000),
(327, 'Nasi Goreng Ayam', '3', 25000),
(328, 'Nasi Goreng Seafood (udang)', '3', 30000),
(329, 'Nasi Goreng Seafood (cumi)', '3', 30000),
(410, 'Espresso', '4', 10000),
(411, 'Doppio', '4', 16000),
(412, 'Ristretrrto', '4', 10000),
(413, 'D Ristrettro', '4', 16000),
(414, 'Long Black Coffee', '4', 15000),
(415, 'Marshmallow Hot Coffee', '4', 23000),
(416, 'Cappuccino', '4', 17000),
(417, 'Coffe Latte', '4', 18000),
(418, 'Hot Espresso Macchiato', '4', 13000),
(419, 'Latte Machiato', '4', 23000),
(421, 'Hot Espresso and Cream', '4', 15000),
(422, 'Whipfiedpresso', '4', 18000),
(423, 'Coffe Mocca', '4', 18000),
(424, 'Sanger Arabica Coffe', '4', 17000),
(425, 'Kopi Susu Arabica', '4', 18000),
(426, 'Grand Aceh Affogato', '4', 25000),
(510, 'Dimsum Ayam', '5', 17000),
(511, 'Dimsum Udang', '5', 17000),
(512, 'Dimsum Kepiting', '5', 17000),
(513, 'Bola-Bola Udang', '5', 16000),
(514, 'Lumpia Udang', '5', 16000),
(515, 'Dimsum Mix', '5', 22000),
(610, 'Vanilla', '6', 20000),
(611, 'Mango', '6', 25000),
(612, 'Avocado', '6', 25000),
(613, 'Fizzy Orange Squash', '6', 20000),
(614, 'Fizzy Espresso', '6', 15000),
(615, 'Fizzy Doppio', '6', 8000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_pesanan`
--

CREATE TABLE `menu_pesanan` (
  `id_pesanan` int(6) DEFAULT NULL,
  `id_menu` int(3) DEFAULT NULL,
  `quant` int(2) DEFAULT NULL,
  `harga_pesanan_persatuan` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_pesanan`
--

INSERT INTO `menu_pesanan` (`id_pesanan`, `id_menu`, `quant`, `harga_pesanan_persatuan`) VALUES
(29, 110, 2, 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `username` varchar(30) NOT NULL,
  `id_pesanan` int(6) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(5) NOT NULL,
  `people` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`username`, `id_pesanan`, `date`, `time`, `people`) VALUES
('maulidan', 27, '2018-05-10', '10:00', 2),
('maulidan', 28, '2018-05-10', '10:00', 2),
('maulidan', 29, '2018-05-10', '10:00', 2),
('andika', 30, '2018-05-11', '11:00', 5),
('andika', 31, '2018-05-10', '11:00', 4),
('lutfi', 32, '2018-05-10', '10:00', 2),
('lija', 33, '2018-05-14', '10:30', 5),
('lija', 35, '2018-05-10', '12:00', 10),
('farhanal', 36, '2018-05-01', '11:00', 20),
('farhanal', 37, '2018-05-01', '11:00', 20),
('farhanal', 38, '2018-05-07', '10:30', 20),
('iindj', 39, '2018-05-17', '11:00', 2),
('iindj', 40, '2018-05-17', '11:00', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id_review`, `username`, `comment`) VALUES
(1, 'muammar zikri', 'makanannya sangat lezat dan pelayanannya pun baik sekali.'),
(2, 'iindj', 'tempatnya sangat nyaman dan cock untuk seluruh kalangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_level_access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `email`, `no_hp`, `password`, `id_level_access`) VALUES
('admin', 'byp@gmail.com', '082277368817', '8cdbaaeece079ecf0bb7e95a9684818e', 1),
('andika', 'dika@gmail.com', '08134564789', 'db04eb4b07e0aaf8d1d477ae342bdff9', 2),
('aprik', 'aprik@gmail.com', '081360022', '202cb962ac59075b964b07152d234b70', 2),
('asfds', 'asfd@gmail.com', '', '69ce29da8d02ed500ea74ee3d6500ed4', 2),
('baru', 'baru@gmail.com', '798897977', '5ef035d11d74713fcb36f2df26aa7c3d', 2),
('farhanal', 'farhan123@yahoo.com', '082245678912', 'd1bbb2af69fd350b6d6bd88655757b47', 2),
('iindj', 'djamiliin@gmail.com', '085277368817', '2fd1c63f744f8b08b5dbb42eb3180a64', 2),
('lija', 'lija@gmail.com', '0912344', '7815696ecbf1c96e6894b779456d330e', 2),
('lutfi', 'lut@gmail.com', '081360055528', '202cb962ac59075b964b07152d234b70', 2),
('maulidan', 'maulidanms@gmail.com', '08678678767', '597e2626a4056bfeb7fd91999a7db5d4', 2),
('Muammar Zikri', 'zikriaksana@gmail.com', '081360055527', '70d70567e6d253e5046d6593652b3d2b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `fq_book1` (`id_meja`),
  ADD KEY `fq_book2` (`id_pesanan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `level_access`
--
ALTER TABLE `level_access`
  ADD PRIMARY KEY (`id_level_access`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `fq_menu` (`id_kategori`);

--
-- Indexes for table `menu_pesanan`
--
ALTER TABLE `menu_pesanan`
  ADD KEY `fq_menupes1` (`id_pesanan`),
  ADD KEY `fq_menupes2` (`id_menu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fk_username` (`username`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `fq_rev` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`),
  ADD KEY `fq_user1` (`id_level_access`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `level_access`
--
ALTER TABLE `level_access`
  MODIFY `id_level_access` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=616;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fq_book1` FOREIGN KEY (`id_meja`) REFERENCES `meja` (`id_meja`),
  ADD CONSTRAINT `fq_book2` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fq_menu` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `menu_pesanan`
--
ALTER TABLE `menu_pesanan`
  ADD CONSTRAINT `fq_menupes1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`),
  ADD CONSTRAINT `fq_menupes2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fq_rev` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fq_user1` FOREIGN KEY (`id_level_access`) REFERENCES `level_access` (`id_level_access`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
