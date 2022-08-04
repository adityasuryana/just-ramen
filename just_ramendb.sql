-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 04:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `just_ramendb`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `nama_barang`, `jumlah`, `deskripsi`) VALUES
(1, 'Spoon', 20, 'A good spoon from Stainless Steel'),
(2, 'Forkdfssd', 190, 'just a good ol fork'),
(4, 'mop', 3, 'just a mop');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `img_menu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `harga`, `deskripsi`, `img_menu`) VALUES
(9, 'Cold Hiyasi', 40000, 'Chilled noodles topped with been sprouts, cucumber, tomatoes, chicken, ham and soft boiled egg. Served with sesame vinegar sauce and japanese hot mustard.', '595-cold-hiyasi.png'),
(10, 'Spicy Miso', 48000, 'Rich pork bone soup with Japanese spicy miso, topped with thinly sliced pork, soft boiled egg, bamboo, carrots, cabbage, mushrooms, green onions, bok choy, bean sprouts and fish cake.', '687-spicy-miso.png'),
(11, 'Vegan Ramen', 53000, 'Light clear Japanese kelp and mushroom based soup with fried tofu skin, baby corn, bamboo, carrots, cabbage, mushrooms, bok choy, bean sprouts and green onions.', '907-vegan-ramen.png'),
(12, 'Cold Tan Tan', 63000, 'Chilled noodles topped with bean sprouts, bok choy, tomatoes, ground pork and soft boiled egg. Served with spicy sesame peanut sauce', '103-cold-tan-tan-men.png');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `title_promo` varchar(225) NOT NULL,
  `desc_promo` varchar(225) NOT NULL,
  `img_promo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `title_promo`, `desc_promo`, `img_promo`) VALUES
(11, 'Promo Go-Food 25%', 'KABAR GEMBIRA buat ramen lovers dan sushi lovers sekarang makan di Ramen1 bisa bayar pakai Kartu Bank BRI dan dapatkan DISKON 25%! Yuk langsung aja merapat ke outlet terdekat atau lewat Go-Food ', '436-promo1.jpg'),
(12, 'Promo Grab Food 50%', 'KABAR GEMBIRA buat ramen lovers dan sushi lovers sekarang makan di Ramen1 bisa bayar pakai Kartu Bank BRI dan dapatkan DISKON 50%! Yuk langsung aja merapat ke outlet terdekat atau pesan lewat Grabfood', '928-promo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `nama_bahan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `nama_bahan`, `jumlah`, `deskripsi`) VALUES
(1, 'Noodle', 10, 'Noodle with High Quality'),
(2, 'Vinegar', 10, 'salty vinegar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(14, 'Aditya Suryana', 'aditya@justramen.com', 'adit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
