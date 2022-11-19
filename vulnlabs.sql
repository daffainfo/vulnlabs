-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 10:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vulnlabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'administrator', 'admin@gmail.com', 'administrator'),
(2, 'administrator2', 'admin2@gmail.com', 'administrator2');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_barang`
--

CREATE TABLE `daftar_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daftar_barang`
--

INSERT INTO `daftar_barang` (`id`, `nama_barang`, `kuantitas`, `created_by`) VALUES
(1, 'Test barang 1', 123, 'attacker'),
(2, 'Test barang 1', 123, 'attacker'),
(3, 'Test barang 2', 123, 'victim'),
(4, 'Test barang 2', 123, 'victim');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul`, `deskripsi`) VALUES
(1, 'Bjorka: Hero or Enemy?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum erat turpis, et euismod magna luctus sed. Pellentesque sed lorem at augue euismod accumsan. Aliquam dui neque, volutpat a interdum mattis, sollicitudin et nisi. Mauris rutrum augue a magna dignissim, ut scelerisque arcu congue. Curabitur nec maximus massa. Aliquam varius est eget venenatis dignissim. Sed metus nisl, aliquet vulputate euismod ut, pharetra sit amet orci. Aenean eros est, sodales eget nulla iaculis, accumsan ornare dui. Duis interdum ligula ac felis scelerisque varius. Maecenas ac orci imperdiet, congue nulla vel, maximus urna. Quisque faucibus est nisl, eu ultricies leo feugiat ac.\r\n\r\nAliquam semper ut nibh vitae luctus. Donec aliquam nisi quis scelerisque vulputate. Praesent eget vulputate ligula. Proin justo lorem, tincidunt quis turpis sit amet, faucibus interdum massa. Vivamus nec aliquam elit. Nullam dictum ornare lacus, a eleifend turpis pretium sed. Duis hendrerit volutpat lorem ac convallis. Cras sodales ante dui, ut v');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `telephone_number`, `email`, `password`) VALUES
(1, 'Attacker', 'attacker', '123', 'attacker@gmail.com', 'attacker'),
(2, 'Victim', 'victim', '123', 'victim@gmail.com', 'victim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
