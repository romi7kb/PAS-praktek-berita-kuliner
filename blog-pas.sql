-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2019 at 06:06 PM
-- Server version: 10.1.41-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.20-2+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog-pas`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `konten` text NOT NULL,
  `foto` varchar(191) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `slug` varchar(191) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `konten`, `foto`, `tgl_dibuat`, `slug`, `id_kategori`, `id_user`) VALUES
(4, 'Nasi Liwet', '<p>Nasi Liwet ini merupakan makanan yang sangat sering disajikan saat acara kumpul-kumpul. Makanan ini juga biasa disajikan dengan tambahan ikan teri, daun serai, tahu, dan juga ayam goreng. Nasi liwet ini memiliki keunikan dari rasa nasinya yang sedikit manis dan kental dengan wangi santen kelapa kental. Nasi liwet ini memiliki rasa yang gurih meskipun tidak menggunakan santan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>1 cup beras</li>\r\n	<li>100 gram cumi</li>\r\n	<li>1 ruas jari lengkuas</li>\r\n	<li>1 batang serai</li>\r\n	<li>1 lembar daun salam</li>\r\n	<li>1 lembar daun jeruk</li>\r\n	<li>4 buah bawang merah, iris</li>\r\n	<li>2 buah bawang putih, iris</li>\r\n	<li>2 buah cabai merah keriting, iris</li>\r\n	<li>3 buah cabai rawit domba</li>\r\n	<li>secukupnya minyak goreng</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span>&nbsp;1&nbsp;</span>Siapkan semua bahan, cuci bersih.</li>\r\n	<li><span>&nbsp;2&nbsp;</span>Masak beras dengan serai, daun jeruk, daun salam dan lengkuas.</li>\r\n	<li><span>&nbsp;3&nbsp;</span>Sementara itu, tumis sisa bumbu dan cumi hingga matang.</li>\r\n	<li><span>&nbsp;4&nbsp;</span>Setelah nasi setengah matang, masukan tumisan bumbu dan cumi.</li>\r\n	<li><span>&nbsp;5&nbsp;</span>Sajikan dengan lauk pauk lainnya.</li>\r\n</ul>\r\n', '5deb3359eaa55.jpeg', '2019-12-09', 'nasi-liwet', 5, 1),
(5, 'Bakakak Hayam', '<p>dwaderwa</p>\r\n', '5deb3380c4cf2.jpeg', '2019-12-09', 'bakakak-hayam', 5, 1),
(6, ' Lotek', '<p>Makanan yang satu ini hampir sama dengan Karedok.memili kesamaan bumbu kacang dan kerupuk, Lotek lebih menyajikan sayur-sayuran rebus seperti bayam, kapri, dan kacang panjang. Karedok dan lotek adalah makanan ciri khas Sunda yang mempunyai kemiripan dengan makanan yang ada di jakarta yakni gado-gado. Hal ini bisa kita lihat dengan tampilan lotek lebih cenderung mirip dengan pecel khas Jawa. Di Sunda, lotek menjadi makanan yang digemari banyak masyarakat sekitar.</p>\r\n\r\n<p>Untuk bahan-bahan yang dibutuhkan lotek ini tidak jauh dari gado-gado contohnya, kangkung, kembang kol, dan tauge.nanti akan digabungkan dengan bumbu kacang dan sayur yang sudah dipisah,lalu ditambahkan dengan kentang rebus yang sudah diahaluskan dan nanti rasanya akan lebih spesial.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>1 siung bawang putih,</li>\r\n	<li>3 btr cabe rawit,</li>\r\n	<li>seruas kecil kencur,</li>\r\n	<li>1 sdm kacang tanah goreng,</li>\r\n	<li>seruas jari gula merah</li>\r\n	<li>Terasi,</li>\r\n	<li>5 sdm air asam jawa</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span>1</span> Ulek bumbu bertahap sampai halus. Tambahkan terasi, kacang tanah, ulek lagi. Masukkan gula merah, kalo sudah halus tuang air, boleh lebih kalo dirasa kurang encer.</li>\r\n	<li><span>2</span> Masukkan semua sayuran dan timun. Aduk rata. Sajikan dg pelengkap kerupuk</li>\r\n</ul>\r\n', '5deb339039d6b.jpeg', '2019-12-09', 'lotek', 5, 1),
(7, 'Kadedemes', '<p>fewfjiajdoihiowhidhaiohsiohdiahaiohdisahidhioawhioa</p>\r\n\r\n<p>djiwajipjfijipajipfjipajfipjisfjkljskljfkla</p>\r\n\r\n<p>fkopawjfpojojaofjopajwopfjojfaj</p>\r\n\r\n<p>aldowjkdojwodjoafjopjaopjfopdaj;kfl;ja;f;lkd</p>\r\n', '5deb365b90da9.jpeg', '2019-12-09', 'kadedemes', 5, 1),
(9, 'Mie Kocok', '<p>Mie kocok ini sama dengan mie soto namun untuk bahannya sedikit ada yang berbeda. Mie kocok ini menggunakan bahan dasar mie kuning yang dihidangkan bersama kuah yang terbuat dari kaldu sapi. Makanan ini banyak ditemukan di kawasan bandung.</p>\r\n\r\n<p>Mie kocok biasanya terlihat bersama tauge yang sudah direbus, bakso, irisan kikil, jerk nipis, dan dilengkapi daun seledri, daun bawang, dan bawang goreng. Tak jarang orang sering menambahkan rempah-rempah lain agar lebih nikmat.</p>\r\n\r\n<p>Disebut mie kocok karena pada proses memasaknya yaitu dengan mengocok-ngocok mie di tempat yang istimewa. Mie kuning yang digunakan memiliki ukuran yang pipih dengan tekstur yang lembut. Agar jika kita ingin memakan mie kocok lebih istimewa.</p>\r\n', '5ded39c115f8e.jpeg', '2019-12-09', 'mie-kocok', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `slug`) VALUES
(2, 'kuliner to', 'kuliner-to'),
(5, 'khas sunda', 'khas-sunda');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Romi', 'romiramdhani84@gmail.com', '4f78625cd2d2251472af996a2ba1f7cc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
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
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
