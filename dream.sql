-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 03:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `date_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_user`, `id_vendor`, `date_time`) VALUES
(23, 44, 7, 1575873697),
(24, 46, 4, 1576130770),
(25, 49, 14, 1576130862),
(26, 50, 4, 1576130935),
(27, 51, 5, 1576131001),
(28, 52, 9, 1576131068),
(29, 53, 10, 1576131140),
(30, 54, 16, 1576131188),
(31, 55, 17, 1576131239),
(32, 56, 21, 1576131312);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `id_user`, `id_vendor`, `nilai`) VALUES
(24, 35, 5, 5),
(25, 35, 7, 5),
(26, 36, 5, 4),
(30, 46, 4, 4),
(31, 46, 4, 5),
(32, 46, 6, 5),
(33, 46, 9, 4),
(34, 46, 7, 3),
(35, 46, 8, 5),
(36, 46, 8, 4),
(37, 46, 8, 4),
(38, 46, 8, 5),
(39, 46, 18, 5),
(40, 44, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `phone_user` varchar(14) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `phone_user`, `password`, `profile`, `role`) VALUES
(34, 'Admin Dream', 'ad.dream@mail', '123456', '$2y$10$q.3WEF.h8qjNf1MJDRJd8ey0hFQtxZMa4ZecFbaB24puSCrG8/1O.', 'user.png', 1),
(35, 'Arsika', 'arsika@mail', '1547896', '$2y$10$GBXzBZ1qEJM4DcOBAHzRgOpTv4x/XJPJs0aGLumpHnMpgsKQ3teh2', 'user.png', 2),
(36, 'Winarta', 'winarta@mail', '25497999', '$2y$10$t13cgbXQDjcKcq.mZ5xuY.Y3kT3DlCEwqzx5b1HUa0Q7fFLRvsCmO', 'user.png', 2),
(37, 'citra', 'citrapelangi@gmail.com', '08227565', '$2y$10$pl/a6TzdTjt5LktE9mCQ8epyerzZpJIspBaLIGkbNGaVeDHWnntk6', 'user.png', 2),
(38, 'cristin', 'cristinnesa@gmail.com', '021591', '$2y$10$5pHEBOzv5Ex.pDoPzR.yVeoEiu8ym001gq.BnNUr7M96tlt3XLPom', 'user.png', 2),
(41, 'akio', 'akioooo@gmail.com', '12345', '$2y$10$2jp6AP4NhmeN/SJHBFbk1Ovb8dN5SVBmH0inbQxYFYk0ovdP/ff8S', 'user.png', 2),
(42, 'dhia', 'mimasha@gmail.com', '123456', '$2y$10$.OjIJjUbx/OtEYdGfWNsJ.d4mIiDbKY1LhZKOsgofwxQPKk/KpHMO', 'user.png', 2),
(44, 'Arsike', 'chike15@gmail.com', '12442322', '$2y$10$QmxqNqAI8BGyVH6PMrNWg.wHDWxJRt5Evj5PYLUj.uRZaxnp2y/tu', 'user.png', 2),
(45, 'nesaa', 'nesa@yahoo.com', '02554', '$2y$10$OyqD8vZzH6sSILZYEuh8eetX8EGsd/igvCzWZAWANiS1YPzQj0RUW', 'user.png', 2),
(46, 'nabilaa', 'bila@mail.com', '02541', '$2y$10$Bbqj5Sl9ph74J8y1aBDnu.XXnltsEnSfjDkdjBTnPPidA9o9F6Gia', 'user.png', 2),
(47, 'daftar', 'daftar@mail.com', '123456', '$2y$10$Cko6.oR74Eh/pUt5vPEgy.pahL/XkgyVPjsBYs8YbEvpALjFSFVjy', 'user.png', 2),
(48, 'namaqu', 'namaqu@mail.com', '025', '$2y$10$/SoO1KSS9F8vFpQx.yRT8OvPycTwEmACWQskU7S3i9gy2U/VKfm2G', 'user.png', 2),
(49, 'efsa', 'efsa2@gmail.com', '123456', '$2y$10$EhUDCS1bV/mNdFZ3yoFQ6OzivT5raUZOAqgo7fKdIC5Vvzi1DDtry', 'user.png', 2),
(50, 'chiki', 'chiki11@gmail.com', '0852', '$2y$10$pybhV69KXYBQeLVgvIwADO0a5xdypgXBESZQWDX89OOzeCN2pE4q.', 'user.png', 2),
(51, 'jimmynutron', 'jimmyoke@gmail.com', '0852', '$2y$10$nHG5ojDHMhSjKE8ILr6NDOyN1KIgidWqS.Q/f0.Y4cX6NqvejlIPW', 'user.png', 2),
(52, 'irvgur', 'gurrr@gmail.com', '159678', '$2y$10$2kB91x5r.0gN9ADGHczLpeP/C/0wyN8BfaXQx.QYjU24F2pkR9n.m', 'user.png', 2),
(53, 'ibuku', 'ibuku@gmail.com', '7532159', '$2y$10$sud3ji1CFREqSLqQtMmah.De17cKGCnTg4B2wA7BNS4WSeGjIeYA6', 'user.png', 2),
(54, 'kiko', 'kiko123@gmail.com', '15462', '$2y$10$rBD2OS2U34WvIAXHzSZ5gu4uVnJqyHya9/AwPRZM.DMrzQbgKkeMy', 'user.png', 2),
(55, 'abcde', 'abcde@gmail.com', '025861', '$2y$10$LCDI9no4SjHWch0R6TTszuGBnA61LPAb8pc/ys5z4lTnCWY3xgVL2', 'user.png', 2),
(56, 'arsiku', 'arsiku@gmail.com', '451616846', '$2y$10$yXRzD5MwvJqvNFqlozlKy.ssWVnzzF1GOWO.XSmc53v9Xq.YNKJo2', 'user.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL,
  `nama_vendor` varchar(45) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telpon_vendor` varchar(14) NOT NULL,
  `lokasi_vendor` varchar(20) NOT NULL,
  `password_vendor` varchar(100) NOT NULL,
  `deskripsi_vendor` varchar(150) NOT NULL,
  `profil_vendor` varchar(50) NOT NULL,
  `kategori_vendor` varchar(20) NOT NULL,
  `harga_vendor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `email`, `telpon_vendor`, `lokasi_vendor`, `password_vendor`, `deskripsi_vendor`, `profil_vendor`, `kategori_vendor`, `harga_vendor`) VALUES
(4, 'star wedding', 'dreamwedd@mail.com', '021-4565-8201', 'Bandung', '$2y$10$Yqzgnm/VLco/lMoH9.jAyOb905uTfKmLEwfmwF6uLxNAoxw6zN0qO', 'Tunggu beberapa saat ya untuk vendor memasukan deskripsinya :D', 'vendor.png', 'Cathering', '3'),
(5, 'Pelangi\'s Vendor', 'pelangi@mail.como', '0254-4575', 'Surabaya', '$2y$10$MMJNnCn2cWtxRc127WUvLuXRtxVTIBxeAhauuGtk01pMdn4dfNdRe', 'Di vendor ini, anda akan menemukan banyak hal yang tidak terduga dan langka', 'vendor.png', 'Dress', '3'),
(6, 'Shafa Organizer', 'shaf.o@mail.com', '021-4587-45', 'Jakarta', '$2y$10$40.5m39LhfxNzVsZztyZDeM37zXUPK/rvePEwE2KCt3TdbakDX7dC', 'Mengorganizir acara pernikahan anda agar menjadi sangat meriah dan banyak kejutan di dalamnya', 'vendor.png', 'Event Organizer', '4'),
(7, 'Guarixxx Dress', 'guari@mail.com', '021-356-543', 'Yogya', '$2y$10$HeTQEc9Ga./wDJeG4B.iQu1LkgIaaxL0WYRJy3QntAvYMt./NnlyS', 'Menyediakan gaun, kemaja dan semua dresscode pernikahan yang lengkap', 'vendor1.png', 'Dress', '0'),
(8, 'NESA C.N BEVERAGE', 'nesacnbev@mail.com', '025-365-6444', 'Medan', '$2y$10$RdYAvUWJRdCPUTsEWpkTHOccswBfq5VzTIbhJN7HFRoiMb6wPFv7C', 'Menyediakan makanan untuk pernikahan anda yang rasanya tidak perlu ditanyakan lagi', 'vendor.png', 'Cathering', '2'),
(9, 'Nabila Fotografi dan Video', 'nabilfovi@mail.com', '0257-659-565', 'Bali', '$2y$10$6ZXy8EdhOqw79FdKL2SHoOqAmaKlfoCLnSnUX9Xl56.zXIg107ypK', 'Siap menjadi fotografer yang pada hari pernikahanmu', 'vendor.png', 'Fotografi', '2'),
(10, 'Lalu\'s Organizer', 'lalu@mail.com', '0256-3265-554', 'Bandung', '$2y$10$BEYzHG5PZ10YES0QyOH5hukpUAhvHrTMavmTrF0YrCWu.sCqyFq0C', 'Wedding Organizer Profesional yang siap menyiapkan acara yang meriah pada pernikahanmu', 'vendor.png', 'Event Organizer', '5'),
(12, 'Nola\'s Boutique', 'nolbout@mail', '5654-3255', 'Jakarta', '$2y$10$R4A47YHipOJZ2iUanVsj4Oke6YJ6fbz8Y8jN1i6D485gry/N8BQbO', 'Menjual busana terbaik untuk anda dengan kualitas yang tidak diragukan', 'vendor.png', 'Dress', '3'),
(13, 'Irvan\'s ROX Organizer', 'roxirv@mail', '021-234-666', 'Surabaya', '$2y$10$nIYsYzc1IiW9xgVPQuDTCuCkV8/oq7w5oX01wq8KImP30QpJQ9OUG', 'Mendekorasi dan mengatur pernikahan anda agar pernikahan lebih meriah dan elegan', 'vendor.png', 'Event Organizer', '2'),
(14, 'Faris Organiser', 'fariz9980@gmail.com', '08134569662', 'Bandung', '$2y$10$1yhHYjpYXm501IbpBhi8MONXFB6XrRrzqu2SHwOel/eXEsAkw0Hby', 'RECOMENDDED EEVENT ORGANIZER THE BEST OF THE BEST OF THE BEST WO', 'vendor.png', 'Event Organizer', '3'),
(15, 'Ashri\'s Dress', 'ashri@mail.com', '1545666', 'Bandung', '$2y$10$BPfYHbtMAN.DNak2bWKuheD2ss8j9Bybvk25GY016fVkDZgfZDj/i', 'Menjual berbagai dress yang bisa membuat pernikahanmu terlihat cerah dan berkilau', 'vendor.png', 'Event Organizer', '3'),
(16, 'SEA\'S Vendor', 'sea.lab@mail.com', '021-332-556', 'Bandung', '$2y$10$yyUutgPVh4T.e.m64IlF2uq0.y5ij03v9mh1/hBD86XnievRaNsGa', 'Membantu anda dalam membuat pernikahan anda menjadi sangat meriah dan membantu', 'vendor.png', 'Event Organizer', '5'),
(17, 'Vendor Rahasia', 'rahasia@mail.com', '0236-3215-65', 'Bandung', '$2y$10$84rTvSazac6einaX.b0/o.kHVBlfTw8yKNVJwM6FAgGbH8HhhzbbK', 'Ini hanyalah prototype atau data dummy untuk memperbanyak tampilan di website kami', 'vendor.png', 'Event Organizer', '3'),
(18, 'Renata\'s Gallery', 'Renata_102@gmail.com', '054695761', 'Medan', '$2y$10$zk8A.i7GKU2Sv5rg9M4sweBvB9LFUpfd1h6PySiB1Lvz.a/2bdxTe', 'menyediakan jasa untuk foto acara pernikahan, dan juga mempunyai jasa photobooth yang langsung jadi', 'vendor.png', 'Fotografi', '2'),
(19, 'Amar Craft', 'amar@mail', '021235', 'Bali', '$2y$10$qNQocFi2n/XOmGopQV83aOC2.FI8KZFS704tMdRJkMhYwly7OHMLC', 'INI HANYA PROTOTUPE TIOE DAIREN JBHVICHPJJPHO MBISGJVCCNOIGC', 'vendor.png', 'Accessoris', '4'),
(20, 'Legion Photo', 'legion@mail', '0213-654-456', 'Surabaya', '$2y$10$ehnJiIaQLV5gd18PjXGE6uuBj6YVvHJovUsYMc.nglHzQPJxkHcCm', 'Ini hanyalah prototype data yang ditampilkan untuk menambah dummy di web kami', 'vendor.png', 'Fotografi', '3'),
(21, 'dresss', 'dress@mail.com', '12345', 'Bandung', '$2y$10$f3N9JkSO8EcWV909fTv6m.qN4VPeSHnBlLgkGtgtq5AZdlYLAVtCG', 'Deskripsi sesuai nyata', 'vendor.png', 'Venue', '3'),
(22, 'Gyowi\'s Boutique', 'gyowi@gmail.com', '45612', 'Surabaya', '$2y$10$FDPJKHoOi8927m9aKHenk.IrQxlaITUPdecEuI5D1NfCFqT5Ac3Wu', 'menjual berbagai busana untuk pernikahan baik adat maupun modern. silahkan kunjungi butik kami', 'vendor.png', 'Dress', '2'),
(24, 'Vendor LTD IND', 'vendor@mail', '5441126666', 'Bali', '$2y$10$rYEVnfmJBXXC5SOSddZW.ediRGRFS9z7bwwx.oKIMfNbuoVycz/cO', 'bjbdcv d fvbfj bkxz iudvjisdvbfdivhifdhvihs 8dhuireuher8vfd vfd sdjvdfjvfjdvh o;sid', 'about_me.png', 'Fotografi', '4');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_vendor`, `id_user`) VALUES
(13, 8, 35),
(14, 5, 36),
(15, 4, 36),
(16, 4, 35),
(19, 5, 44),
(20, 5, 44),
(21, 5, 44),
(22, 5, 44),
(23, 5, 44),
(24, 4, 46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `id_vendor` (`id_vendor`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
