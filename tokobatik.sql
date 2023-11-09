-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 06:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobatik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` varchar(20) NOT NULL,
  `nama_adm` varchar(20) NOT NULL,
  `username_adm` varchar(20) NOT NULL,
  `email_adm` varchar(30) NOT NULL,
  `password_adm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nama_adm`, `username_adm`, `email_adm`, `password_adm`) VALUES
('adm-01', 'Kahfi Aulia', 'kahfi', 'kahfiaulia50@yahoo.com', 'aulia'),
('adm-02', 'Haikal Hanafi', 'haikal', 'haikal.h@yahoo.com', 'hanafi');

-- --------------------------------------------------------

--
-- Table structure for table `belanja`
--

CREATE TABLE `belanja` (
  `id_belanja` varchar(20) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `id_jenis` varchar(20) NOT NULL,
  `id_ukuran` varchar(10) NOT NULL,
  `id_adm` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` longblob,
  `stok` int(11) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jml_transaksi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belanja`
--

INSERT INTO `belanja` (`id_belanja`, `id_produk`, `id_jenis`, `id_ukuran`, `id_adm`, `harga`, `deskripsi`, `gambar`, `stok`, `ts`, `jml_transaksi`) VALUES
('b-01', 'pro-01', 'j-01', 'u-01', 'adm-01', 200000, 'Baju Batik Tulis Pria Lengan Pendek Ukuran S\r\n', 0x62373234342d626174696b707269616c656e67616e70656e64656b2e6a7067, 48, '2020-06-16 10:18:52', 2),
('b-02', 'pro-01', 'j-01', 'u-01', 'adm-01', 220000, 'Baju Batik Tulis Pria Lengan Panjang Ukuran S', 0x63366539662d626174696b707269616c656e67616e70616e6a616e672e6a7067, 49, '2020-06-24 03:34:11', 1),
('b-03', 'pro-01', 'j-01', 'u-02', 'adm-01', 200000, 'Baju Batik Tulis Pria Lengan Pendek Ukuran M', 0x33663665332d626174696b707269616c656e67616e70656e64656b2e6a7067, 48, '2020-06-15 02:20:24', 2),
('b-04', 'pro-01', 'j-01', 'u-02', 'adm-01', 220000, 'Baju Batik Tulis Pria Lengan Panjang Ukuran M', 0x66336537392d626174696b707269616c656e67616e70616e6a616e672e6a7067, 50, '2020-06-15 03:10:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama_plg` varchar(56) NOT NULL,
  `alamat_plg` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `nama_plg`, `alamat_plg`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Ahmad', 'Semarang', '2020-06-15 21:41:22', '2020-06-16 21:41:22'),
(2, 'Ahmad', 'Semarang', '2020-06-15 21:41:51', '2020-06-16 21:41:51'),
(3, 'Joyo', 'Jepara', '2020-06-15 22:45:19', '2020-06-16 22:45:19'),
(4, 'Joko', 'Jepara', '2020-06-15 22:46:42', '2020-06-16 22:46:42'),
(5, 'Raden', 'Yogya', '2020-06-16 07:05:11', '2020-06-17 07:05:11'),
(6, 'Raden', 'Jepara', '2020-06-16 07:13:49', '2020-06-17 07:13:49'),
(7, 'Joyo', 'Jepara', '2020-06-16 07:22:34', '2020-06-17 07:22:34'),
(8, 'Budi', 'Yogya', '2020-06-16 17:50:12', '2020-06-17 17:50:12'),
(9, 'Budi Daya', 'Semarang', '2020-06-24 10:26:16', '2020-06-25 10:26:16'),
(10, 'Rudi', 'Jepara', '2020-06-24 10:34:11', '2020-06-25 10:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` varchar(20) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
('j-01', 'Batik Tulis'),
('j-02', 'Batik Cap');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` varchar(20) NOT NULL,
  `id_belanja` varchar(20) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_belanja`, `jumlah`, `harga`) VALUES
('k-01', 'b-01', 2, 400000),
('k-02', 'b-02', 1, 220000),
('k-03', 'b-01', 1, 200000),
('k-04', 'b-02', 2, 440000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_plg` varchar(20) NOT NULL,
  `id_reward` varchar(20) DEFAULT NULL,
  `nama_plg` varchar(20) NOT NULL,
  `username_plg` varchar(20) NOT NULL,
  `email_plg` varchar(20) NOT NULL,
  `password_plg` varchar(20) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `jml_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_plg`, `id_reward`, `nama_plg`, `username_plg`, `email_plg`, `password_plg`, `kontak`, `alamat`, `provinsi`, `kota`, `kode_pos`, `jml_transaksi`) VALUES
('plg-01', 'r-02', 'Ajik Surya', 'ajik001', 'ajik001@gmail.com', 'surya', '081243435454', 'Gang Mangga No. 11 Sekaran Gunungpati', 'Jawa Tengah', 'Kota Semarang', '24444', 1),
('plg-02', NULL, 'Putri Mulyani', 'putri', 'putri001@gmail.com', 'mulyani', '082143435999', 'Gang Pisang No. 1 Sekaran Gunungpati', 'Jawa Tengah', 'Kota Semarang', '24444', 2);

--
-- Triggers `pelanggan`
--
DELIMITER $$
CREATE TRIGGER `beri_reward` AFTER INSERT ON `pelanggan` FOR EACH ROW BEGIN
	IF jml_transaksi > 150 THEN
    	UPDATE pelanggan SET id_reward = r-03;
    ELSEIF jml_transaksi > 100 THEN
    	UPDATE pelanggan SET id_reward = r-02;
    ELSEIF jml_transaksi > 50 THEN
    	UPDATE pelanggan SET id_reward = r-01;
    ELSE
    	UPDATE pelanggan SET id_reward = NULL;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_belanja` varchar(11) NOT NULL,
  `nama_belanja` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_belanja`, `nama_belanja`, `jumlah`, `harga`, `pilihan`) VALUES
(6, 7, 'b-04', 'Baju Batik Tulis Pria Lengan Panjang Ukuran M', 1, 220000, ''),
(7, 7, 'b-01', 'Baju Batik Tulis Pria Lengan Pendek Ukuran S', 1, 200000, ''),
(8, 8, 'b-03', 'Baju Batik Tulis Pria Lengan Pendek Ukuran M', 1, 200000, ''),
(9, 8, 'b-04', 'Baju Batik Tulis Pria Lengan Panjang Ukuran M', 1, 220000, ''),
(10, 9, 'b-02', 'Baju Batik Tulis Pria Lengan Panjang Ukuran S', 1, 220000, ''),
(11, 10, 'b-02', 'Baju Batik Tulis Pria Lengan Panjang Ukuran S', 1, 220000, '');

--
-- Triggers `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE belanja SET stok = stok-NEW.jumlah
    WHERE id_belanja = NEW.id_belanja;
    
    UPDATE belanja SET jml_transaksi = jml_transaksi+NEW.jumlah
    WHERE id_belanja = NEW.id_belanja;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`) VALUES
('pro-01', 'Baju Batik Pria Lengan Pendek'),
('pro-02', 'Baju Batik Wanita'),
('pro-03', 'Baju Batik Anak-Anak');

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `id_reward` varchar(20) NOT NULL,
  `nama_reward` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`id_reward`, `nama_reward`) VALUES
('r-01', 'Bronze Member'),
('r-02', 'Silver Member'),
('r-03', 'Gold Member');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `no_riwayat` varchar(20) NOT NULL,
  `id_plg` varchar(20) NOT NULL,
  `no_transaksi` varchar(20) NOT NULL,
  `jml_barang_dibeli` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`no_riwayat`, `id_plg`, `no_transaksi`, `jml_barang_dibeli`) VALUES
('riwayat-01', 'plg-01', 't-01', 2),
('riwayat-02', 'plg-02', 't-02', 1),
('riwayat-03', 'plg-01', 't-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(20) NOT NULL,
  `id_plg` varchar(20) NOT NULL,
  `id_keranjang` varchar(20) NOT NULL,
  `total_harga` int(10) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `valid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `id_plg`, `id_keranjang`, `total_harga`, `tgl_transaksi`, `valid`) VALUES
('t-01', 'plg-01', 'k-01, k-02', 620000, '2020-04-17', 1),
('t-02', 'plg-02', 'k-03', 200000, '2020-05-03', 1),
('t-03', 'plg-01', 'k-04', 440000, '2020-05-04', 1),
('t-04', 'plg-01', 'k-02', 400000, '2020-06-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ukuran`
--

CREATE TABLE `ukuran` (
  `id_ukuran` varchar(10) NOT NULL,
  `nama_ukuran` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukuran`
--

INSERT INTO `ukuran` (`id_ukuran`, `nama_ukuran`) VALUES
('u-01', 'S'),
('u-02', 'M'),
('u-03', 'L'),
('u-04', 'XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `belanja`
--
ALTER TABLE `belanja`
  ADD PRIMARY KEY (`id_belanja`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_ukuran` (`id_ukuran`),
  ADD KEY `id_adm` (`id_adm`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_belanja` (`id_belanja`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_plg`),
  ADD KEY `id_reward` (`id_reward`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id_reward`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`no_riwayat`),
  ADD KEY `id_plg` (`id_plg`),
  ADD KEY `id_transaksi` (`no_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_plg` (`id_plg`),
  ADD KEY `id_keranjang` (`id_keranjang`);

--
-- Indexes for table `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`id_ukuran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `belanja`
--
ALTER TABLE `belanja`
  ADD CONSTRAINT `fk_id_admin` FOREIGN KEY (`id_adm`) REFERENCES `admin` (`id_adm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_ukuran` FOREIGN KEY (`id_ukuran`) REFERENCES `ukuran` (`id_ukuran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `fk_id_reward` FOREIGN KEY (`id_reward`) REFERENCES `reward` (`id_reward`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `fk_id_plg` FOREIGN KEY (`id_plg`) REFERENCES `pelanggan` (`id_plg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_no_transaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_ik_plg` FOREIGN KEY (`id_plg`) REFERENCES `pelanggan` (`id_plg`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
