-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2018 pada 21.12
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillshop2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL,
  `resi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_order`
--

INSERT INTO `detail_order` (`id`, `order_id`, `produk`, `qty`, `total_harga`, `status_id`, `bukti_bayar`, `resi`) VALUES
(19, 20, 8, 1, 100000, 4, '44308803_2648_n.jpg', '1207733628172');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id`, `jenis`) VALUES
(1, 'None'),
(2, 'Newbie'),
(3, 'Supreme'),
(4, 'Sky King');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Headset'),
(2, 'Keyboard'),
(3, 'Laptop'),
(4, 'Mouse');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `tanggal`, `pelanggan`) VALUES
(20, '2018-12-23', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `iklan` varchar(30) NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `harga`, `qty`, `kategori`, `iklan`, `gambar`, `seller_id`) VALUES
(6, 'LOGITECH G103 PRODIGY', 'Fitur: - Sensor 200-8.000 DPI - Memori pada Perangkat - Pencahayaan RGB yang Dapat Diprogram (Pilih lebih dari 16,8 juta warna) - Enam tombol yang dapat diprogram - Peralihan DPI dalam sekejap mata - Memori pada Perangkat', 225000, 1, 'Mouse', 'Sky King', '2465699_a5e080.jpg', 1),
(7, 'MSI Gaming GL63 8RC', 'Tipe Prosesor : Intel Core i5     Memori Standar : 4GB DDR4     Kapasitas Penyimpanan : 1TB HDD     Sistem Operasi : Microsoft Windows 10 Home       Garansi: Garansi Resmi 1 Tahun Info     15 hari Pengembalian Produk', 12999999, 4, 'Laptop', 'Supreme', 'msi_msi-gaming-gl63-8rc.jpg', 1),
(8, 'R8 1822 Bakclight Gaming Keyboard', 'Type:Wired,illuminated,backlight Material:ABS USB port Color :Black,white waterproof & heat resistant', 100000, 2, 'Keyboard', 'Supreme', '137803_700_700.jpg', 1),
(9, 'Razer Chroma', '3500dpi Razer Precision 3.5G infrared sensor Ambidextrous design Autobots blue lights, Chan crystal black steel mirror processing Hardware switch for adjusting the dpi and polling rate', 180000, 6, 'Mouse', 'Sky King', '1602582_03885297-b1f1.jpg', 1),
(10, 'REXUS Thundervox 7.1 Surround HX2 Blue', 'Gaming Headset, 7.1 Surround Sound, Speaker : 50mm, Frekuensi : 15Hz-20000Hz, Impedance : 32ohm, Sensitivity : 120dB, Cable : 2.2m', 275000, 3, 'Headset', 'Newbie', '59b788ec69b73.jpg', 1),
(11, 'ASTRO A50 WIRELESS 7 1', 'Transducer Principle: Open Air Frequency Response: 20 21,000 Hz Distortion: THD < 1% Microphone: 6.0mm unidirectional with noise gate Nominal Impedance: 48 Ohms Headband Pressure: 2.6N', 5400000, 4, 'Headset', 'None', 'ASTRO_A50_WIRELESS_7_1_HEADSET__XBOX__.jpg', 3),
(16, 'ASUS ROG GL553VD', 'ROG Strix GL553 comes with Windows 10 pre-installed and features a 7th-generation Intel® Core™ i7 quad-core processor, NVIDIA® GeForce® GTX 1050 graphics and full Microsoft® DirectX® 12 support to give you powerful performance and flawless gaming visuals.', 13500000, 5, 'Laptop', 'Sky King', 'd2ab1076c36cf4c6dc134c957d8a940812e00d43.jpeg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_order`
--

CREATE TABLE `status_order` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_order`
--

INSERT INTO `status_order` (`id_status`, `status`) VALUES
(1, 'Konfirmasi pembayaran belum diterima'),
(2, 'Menunggu konfirmasi penjual'),
(3, 'Konfirmasi pembayaran telah diterima'),
(4, 'Pesanan telah dikirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `email`, `username`, `password`, `alamat`, `telp`) VALUES
(1, 'yusuf', 'yusufbk@student.uns.ac.id', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Solo', '085725093955'),
(3, 'budi', 'anu@anu.anu', 'ybk48', 'e807f1fcf82d132f9bb018ca6738a19f', 'Sukoharjo', '081234567890'),
(9, 'kurniawan', 'airdef@yahoo.com', 'ecom4', 'e80b5017098950fc58aad83c8c14978e', 'Boyolali', '088812332769');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `status_order`
--
ALTER TABLE `status_order`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
