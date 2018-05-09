-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mei 2018 pada 05.26
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
  `id_pesanan` int(6) DEFAULT NULL,
  `people` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(110, 'Curry Rice', '1', 0),
(111, 'Beef Soup Rice', '1', 0),
(112, 'Oyakodon', '1', 0),
(113, 'Bento', '1', 0),
(114, 'Yasai Itame Seafood', '1', 0),
(115, 'Nasu Miso Ayam', '1', 0),
(116, 'Tuna Katsu', '1', 0),
(117, 'Tori Katsu', '1', 0),
(118, 'Tuna Kusikatsu', '1', 0),
(119, 'Tori Kusikatsu', '1', 0),
(210, 'Sate Daging', '2', 0),
(211, 'Soto Tulang', '2', 0),
(212, 'Nasi Putih', '2', 0),
(310, 'Mie Aceh', '3', 0),
(311, 'Mie Aceh Telur', '3', 0),
(312, 'Mie Aceh Daging', '3', 0),
(313, 'Mie Aceh Udang', '3', 0),
(314, 'Mie Aceh Kepiting', '3', 0),
(315, 'Mia Aceh Ayam', '3', 0),
(316, 'Indomie', '3', 0),
(317, 'Indomier Telur', '3', 0),
(318, 'Indomie Daging', '3', 0),
(319, 'Indomie Udang', '3', 0),
(321, 'Mie Hun Goreng Telur', '3', 0),
(322, 'Mie Hun Goreng Udang', '3', 0),
(323, 'Mie Hun Goreng Daging', '3', 0),
(324, 'Mie Tiaw Telur', '3', 0),
(325, 'Mie Tiaw Daging', '3', 0),
(326, 'Nasi Goreng Telur', '3', 0),
(327, 'Nasi Goreng Ayam', '3', 0),
(328, 'Nasi Goreng Seafood (udang)', '3', 0),
(329, 'Nasi Goreng Seafood (cumi)', '3', 0),
(410, 'Espresso', '4', 0),
(411, 'Doppio', '4', 0),
(412, 'Ristretrrto', '4', 0),
(413, 'D Ristrettro', '4', 0),
(414, 'Long Black Coffee', '4', 0),
(415, 'Marshmallow Hot Coffee', '4', 0),
(416, 'Cappuccino', '4', 0),
(417, 'Coffe Latte', '4', 0),
(418, 'Hot Espresso Macchiato', '4', 0),
(419, 'Latte Machiato', '4', 0),
(421, 'Hot Espresso and Cream', '4', 0),
(422, 'Whipfiedpresso', '4', 0),
(423, 'Coffe Mocca', '4', 0),
(424, 'Sanger Arabica Coffe', '4', 0),
(425, 'Kopi Susu Arabica', '4', 0),
(426, 'Grand Aceh Affogato', '4', 0),
(510, 'Dimsum Ayam', '5', 0),
(511, 'Dimsum Udang', '5', 0),
(512, 'Dimsum Kepiting', '5', 0),
(513, 'Bola-Bola Udang', '5', 0),
(514, 'Lumpia Udang', '5', 0),
(515, 'Dimsum Mix', '5', 0),
(610, 'Vanilla', '6', 0),
(611, 'Mango', '6', 0),
(612, 'Avocado', '6', 0),
(613, 'Fizzy Orange Squash', '6', 0),
(614, 'Fizzy Espresso', '6', 0),
(615, 'Fizzy Doppio', '6', 0);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `username` varchar(30) NOT NULL,
  `id_pesanan` int(6) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `desc_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('aprik', 'aprik@gmail.com', '081360022', '202cb962ac59075b964b07152d234b70', 2),
('asfds', 'asfd@gmail.com', '', '69ce29da8d02ed500ea74ee3d6500ed4', 2),
('baru', 'baru@gmail.com', '798897977', '5ef035d11d74713fcb36f2df26aa7c3d', 2),
('iindj', 'djamiliin@gmail.com', '085277368817', '2fd1c63f744f8b08b5dbb42eb3180a64', 2),
('maulidan', 'maulidanms@gmail.com', '08678678767', '597e2626a4056bfeb7fd91999a7db5d4', 2);

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
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_pesanan` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(3) NOT NULL AUTO_INCREMENT;
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
