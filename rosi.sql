-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2018 at 01:30 PM
-- Server version: 10.0.36-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.5-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `foto`) VALUES
(8, 'malasngoding', '069c546d1d97fd9648d8142b3e0fd3a3', 'text.png'),
(9, 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `harga`, `jumlah`, `sisa`, `tgl_masuk`, `kadaluarsa`) VALUES
(14, 'roti unibis', 6500, 350, 20, '2018-11-01', '2018-11-06'),
(17, 'tim tam', 6000, 792, 10, '2018-11-06', '2018-11-22'),
(19, 'tic tac', 4000, 2, 24, '2018-11-01', '2018-11-23'),
(20, 'aqua sedang', 3000, 990, 1000, '2018-11-05', '2018-11-30'),
(23, 'magnum', 13000, 997, 1000, '2018-11-06', '2018-11-23'),
(24, 'santri mie', 4000, 784, 800, '2018-11-01', '2018-11-30'),
(25, 'rambut palsu', 5000, 496, 500, '2018-11-07', '2018-11-30'),
(26, 'rambut palsu', 5000, 496, 500, '2018-11-01', '2018-11-30'),
(27, 'sea foog', 60000, 598, 600, '2018-11-01', '2018-11-30'),
(28, 'mild', 17000, 192, 200, '2018-11-01', '2018-11-23'),
(29, 'dji sam soe', 15000, 145, 150, '2018-11-01', '2018-11-24'),
(31, 'nu mild', 15000, 144, 150, '2018-11-07', '2018-11-30'),
(32, 'roti', 5000, 4, 6, '2018-11-08', '2018-11-24'),
(33, 'Nutella', 20000, 2000, 10, '2018-11-12', '2019-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `barang_laku`
--

CREATE TABLE `barang_laku` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `laba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_laku`
--

INSERT INTO `barang_laku` (`id`, `tanggal`, `nama`, `jumlah`, `harga`, `total_harga`, `laba`) VALUES
(46, '2015-02-01', 'roti unibis', 2, 6000, 12000, 2000),
(47, '2015-02-02', 'makkkanan', 7, 12000, 84000, 70000),
(48, '2015-02-02', 'dji sam soe', 2, 15000, 30000, 2000),
(49, '2015-02-03', 'makkkanan', 1, 12000, 12000, 10000),
(50, '2015-02-01', 'tim tam', 2, 4000, 8000, 4000),
(51, '2015-02-02', 'mild', 2, 17000, 34000, 4000),
(52, '2015-02-03', 'magnum', 1, 18000, 18000, 6000),
(53, '2015-02-06', 'dji sam soe', 2, 19000, 38000, 10000),
(54, '2015-02-15', 'nu mild', 2, 19100, 38200, 10200),
(55, '2015-02-27', 'roti unibis', 2, 8000, 16000, 6000),
(56, '2015-02-19', 'roti unibis', 1, 7000, 7000, 2000),
(57, '2015-01-14', 'roti unibis', 1, 7000, 7000, 2000),
(58, '2015-02-01', 'pulpen', 1, 3000, 3000, 2000),
(59, '2015-02-02', 'roti', 2, 3000, 6000, 2000),
(63, '2016-01-22', 'tic tac', 8, 4000, 32000, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_toko`, `nama_toko`, `pemilik`, `alamat`, `no_tlp`) VALUES
(1, 'Mugi Berkah', 'Solihin', 'jl Ottoiskandardinata GG18', '085701344456'),
(2, 'Moro Seneng', 'Subandi', 'Jl Garuda 89 Pekalongan', '085741909'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keperluan` text NOT NULL,
  `nama` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tanggal`, `keperluan`, `nama`, `jumlah`) VALUES
(1, '2015-02-06', 'de', 'diki', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` enum('Terkirim','Pending','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pelanggan`, `nama_barang`, `jumlah`, `status`) VALUES
(1, 'Prabowo', 'DanCow', 120, 'Pending'),
(2, 'Jokowi', 'Milo', 2000, 'Terkirim');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` char(13) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','sales','gudang','helper') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `telp`, `username`, `password`, `level`) VALUES
(1, 'Sales', 'Jl. (Jalan) R.A.Kartini, Kota Pekalongan, Jawa Tengah', '(0285) 423001', 'sales', 'sales', 'sales'),
(2, 'Admin', 'Jl. (Jalan) R.A.Kartini, Kota Pekalongan, Jawa Tengah', '(0285) 423001', 'admin', 'admin', 'admin'),
(3, 'Gudang', 'Jl. (Jalan) R.A.Kartini, Kota Pekalongan, Jawa Tengah', '(0285) 423001', 'gudang', 'gudang', 'gudang'),
(4, 'Helper', 'Jl. (Jalan) R.A.Kartini, Kota Pekalongan, Jawa Tengah', '(0285) 423001', 'helper', 'helper', 'helper'),
(5, 'Robinson', 'Jl. (Jalan) R.A.Kartini, Kota Pekalongan, Jawa Tengah', '(0285) 423001', 'robin', 'robin', 'sales'),
(7, 'dol patah', 'Jl. (Jalan) R.A.Kartini, Kota Pekalongan, Jawa Tengah', '(0285) 423001', 'dol', 'dol', 'helper');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_laku`
--
ALTER TABLE `barang_laku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `barang_laku`
--
ALTER TABLE `barang_laku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;