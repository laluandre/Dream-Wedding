-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 07:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `profile` varchar(128) NOT NULL,
  `fav` int(11) NOT NULL,
  `lastseen` varchar(128) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `phone`, `password`, `profile`, `fav`, `lastseen`, `role`) VALUES
(1, 'Winarta', 'wina@mail.com', '087760313747', '$2y$10$cUZVovHJyuWUEXeCSn06kelE55DhzTQqUj8LWcsnXF1DXE2GNxQ6W', 'profile.jpg', 0, '', 2),
(2, 'nabila', 'nabilalya2@gmail.com', '081254948815', '$2y$10$I1pWuszyHNPIRCBkAbgU8.uVrsRPNUk1k7akwH8vprznRJxuxS7cS', 'profile.jpg', 0, '', 2),
(4, 'Chika', 'arsikapelangi15@gmail.com', '08776543212', '$2y$10$sxvfUFwJL7j5zkIPwGjXjeOSAwQgiNxgqjP5QjUbM6V.8176PqxtG', 'profile.jpg', 0, '', 2),
(5, 'nesacristin', 'nesacristin67@gmail.com', '082165034791', '$2y$10$9sRx8.Sr4h7Tdg1/./JQnOBLbeBloB./yrfB.q4eFdxuIM..AS/7u', 'profile.jpg', 0, '', 2),
(6, 'dhiashafa', 'dhiashafa123@gmail.com', '081312277869', '$2y$10$D4opBmge5brFxWjzTcZb2elvBr/yE8RCWQTdN7hJ5jKjMQfPRP6tu', 'profile.jpg', 0, '', 2),
(7, 'dhiashafa', 'dhiashafa123@gmail.com', '081312277869', '$2y$10$LYC.gMC/1N8S3sijWAnHKOBh9efvc5LNR4SsvxSwb5Ie3fWtomVki', 'profile.jpg', 0, '', 2),
(8, 'dhiashafa', 'dhiashafa123@gmail.com', '081312277869', '$2y$10$8PKejLTz33YcGL7Q3sW1wOluCRmVkoB8R4YTdhHJzRQ.2ST0ZcHei', 'profile.jpg', 0, '', 2),
(9, 'Dhias', 'dhiashafa123@gmail.com', '081312277869', '$2y$10$an0RGNzkc9OgJd9Jy9jiv.pYjVboiZSGVgkt4qF2Kh2ygrI630zxK', 'profile.jpg', 0, '', 2),
(10, 'Dhias', 'dhiashafa123@gmail.com', '081312277869', '$2y$10$N8eDR0SAKAaL/0m8YJ3RAOlHdOcl7a/UhiZnwVS4Rj.wL5bTU6rDq', 'profile.jpg', 0, '', 2),
(11, 'Dhias', 'dhiashafa123@gmail.com', '081312277869', '$2y$10$GQIHLaJJLH.eDfUdtXaAsePa88o1/vM6CcIHgkqxZYa/W7MUcCsnW', 'profile.jpg', 0, '', 2),
(12, 'Dhias', 'dhiashafa123@gmail.com', '081312277869', '$2y$10$RyIpyhdRRzHrhxmfGraC9ex7GL.oDhXrz7w42AaaFBWeUR9KbRo1e', 'profile.jpg', 0, '', 2),
(13, 'Dhias', 'dhiashafa123@gmail.com', '081312277869', '$2y$10$pk/pD6Um7HF2n56YRNnzwO0jHV5bt8bWbYYEx4.6abfTvC8A3kGVm', 'profile.jpg', 0, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `favourite` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `rating` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `telepon` int(11) NOT NULL,
  `profile` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `nama`, `email`, `lokasi`, `deskripsi`, `favourite`, `kategori`, `rating`, `gambar`, `telepon`, `profile`, `password`) VALUES
(5, 'Dream Wedding', 'dream@mail.com', 'lombok', '', 0, 'accessories', 0, 'gambar.jpg', 87868, 'profile.jpg', '$2y$10$gJ.escS9WZSn5aToSrIqZORBvLCElsTc3amcD/6UNiktEVhMWvXUK'),
(6, 'ajinomoto', 'aji123@gmail.com', 'sandung', '', 0, 'food', 0, 'gambar.jpg', 812345, 'profile.jpg', '$2y$10$j3YVOsNQH572YXV0VnuCVuAXyc6T6QnCr7VByz/AXrHgxn67fygdK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
