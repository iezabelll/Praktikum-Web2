-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 08:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(1, 'sneakers'),
(2, 'baju'),
(3, 'celana');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(9, '2023-05-10', 'muhammad gusion', 'parung', '084324536573', 'gusion@gmail.com', 5, '', 19),
(10, '0000-00-00', 'kagura', 'yamamoto', '086876467967', 'kagura@gmail.com', 1, '', 18),
(11, '2023-05-12', 'Siti Miya', 'Kepaon', '08424354565', 'miya@gmail.com', 1, '', 21);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_beli` double NOT NULL,
  `stock` int(11) NOT NULL,
  `min_stock` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `code`, `nama`, `harga_jual`, `harga_beli`, `stock`, `min_stock`, `deskripsi`, `kategori_produk_id`) VALUES
(2, 'SP1', 'Warrior Boots', 800000, 300000, 1001, 1, 'Sepatu ini lebih cocok dipakai ketika lawan kalian adalah hero dengan tipikal physical damage. Sepatu ini sifatnya fleksibel, bisa dipakai oleh hero apapun yang memang memerlukan pertahanan dari physical damage di awal game.', 1),
(3, 'BJ1', 'Shadow of Obscurity', 1200000, 75000, 500, 20, 'Shadow of Obsurity memiliki tampilan dengan gradasi warna merah hitam dengan sedikit keputihan.', 2),
(4, 'CL1', 'Celana Jeans', 120000, 80000, 75, 25, 'Celana ', 3),
(16, 'SP2', 'Tough Boots', 500000, 50000, 100, 6, 'Sepatu ini lebih cocok dipakai untuk melawan line up hero lawan yang memiliki Crowd Control atau efek Stun kuat seperti Selena, Tigreal, Julian dan lain-lainnya. Serta hero yang bisa memberikan efek slow kepada kalian seperti Lylia ataupun Hero-hero magic damage yang menggunakan item Ice Queen Wand.', 1),
(17, 'BJ2', 'Sentinel', 1200000, 330000, 800, 3, 'Skin sentinel satu ini memiiki gabungan warna putih dan emas dengan desainnya seperti power ranger yang cukup keren.\r\nMemiliki tampilan animasi terbaru yang sangat cocok dengan gaya khas Gatotkaca menjadikan skin sentinel masuk dalam daftar skin keren kali ini. Tak hanya itu saja. efek skin yang dimilikinya juga tak kalah keren untuk kalian miliki.', 2),
(18, 'BJ3', 'Soryu Maiden', 1100000, 2000000, 100, 1, 'Mulai dari tampilan animasi dan skill efek yang berhubungan erat dengan air seolah menyebutkan bahwa kagura merupakan ratu air. Skin ini cukup mirip dengan skin epic dari Karrie dan juga Odette yang sama-sama memiliki tema lautan.', 2),
(19, 'SP3', 'Magic Shoes', 500000, 200000, 100, 2, 'Item ini lebih cocok digunakan oleh hero-hero dengan tipikal spam skill dan hero yang memiliki cooldown skill lama. Dengan memakai Magic Shoes ini, durasi skill yang dimiliki hero yang memakainya dapat berkurang. Contohnya seperti hero Khaleed, Gatotkaca, Granger, dan lain-lainnya.', 1),
(20, 'BJ4', 'Child of the Fall', 1200000, 300000, 100, 3, 'Skin satu ini memiliki tampilan yang sangat mirip dengan final fantasy. Tentu saja kalian pasti kenal dengan franchise tersebut. Dengan tampilan yang sangat keren Skin Alucard satu ini merupakan favorit banyak gamer Mobile Legends.\r\nSkin Alucard Child of the Fall bisa kalian dapatkan pada event Lucky Box tahun lalu, skin satu ini bisa kalian dapatkan dengan harga Rp 1,2 jutaan. Untuk mendapatkannya kembali, kalian harus menunggu event terbaru di Mobile Legends.', 2),
(21, 'SP4', 'Arcane Boots', 800000, 500000, 100, 2, 'Sepatu ini lebih cocok digunakan oleh hero-hero mage dengan spesialisasi Poke atau istilahnya yang suka mencicil damage seperti Gord, Lylia, Nana, Yve, dan lain-lainnya. Dengan menggunakan sepatu ini, Hero tadi akan memperoleh keuntungan berupa bisa menembus Magical Defense lawan sebesar +10 poin di awal-awal game.', 1),
(22, 'SP5', 'Swift Boots', 800000, 100000, 100, 1, 'Swift Boots ini lebih cocok digunakan oleh Hero-hero yang mengandalkan kecepatan pada basic attacknya. Umumnya sepatu ini lebih sering digunakan oleh para hero Marksman seperti Layla, Bruno, Lesley, Beatrix, dan lain-lainnya. Hero Fighter seperti Zilong yang juga mengandalkan kecepatan basic attack juga cocok memakai item sepatu ini.', 1),
(23, 'SP6', 'Rapid Boots', 800000, 300000, 400, 2, 'Sepatu ini lebih cocok digunakan oleh Hero-hero yang biasa dimainkan sebagai roamer dalam game. Dengan menggunakan Rapid Boots ini, Mobilitas bergerak hero roamer akan semakin tinggi. Hero yang cocok menggunakan sepatu ini contohnya seperti Natalia dan Franco.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_produk_id` (`kategori_produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
