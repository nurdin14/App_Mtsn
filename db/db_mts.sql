-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Agu 2024 pada 01.17
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dana_saving`
--

DROP TABLE IF EXISTS `tb_dana_saving`;
CREATE TABLE `tb_dana_saving` (
  `id_saving` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(200) NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_dana_saving`
--

INSERT INTO `tb_dana_saving` (`id_saving`, `tgl`, `ket`, `pemasukan`, `pengeluaran`) VALUES
(1, '2024-08-27', 'Tes1', 111, 0),
(3, '2024-08-27', 'tes', 0, 1111),
(4, '2024-09-27', 'tes', 0, 233);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas`
--

DROP TABLE IF EXISTS `tb_kas`;
CREATE TABLE `tb_kas` (
  `id_kas` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(200) NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kas`
--

INSERT INTO `tb_kas` (`id_kas`, `tgl`, `ket`, `pemasukan`, `pengeluaran`) VALUES
(13, '2024-08-14', 'Pemasukan 1', 2000000, 0),
(14, '2024-08-14', 'Pemasukan 2', 500000, 0),
(15, '2024-09-14', 'Pemasukan 1', 1000000, 0),
(16, '2024-08-14', 'Beli Seragam', 0, 300000),
(17, '2024-09-21', 'Beli Laptop', 0, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas_makan`
--

DROP TABLE IF EXISTS `tb_kas_makan`;
CREATE TABLE `tb_kas_makan` (
  `id_kas_makan` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(200) NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kas_makan`
--

INSERT INTO `tb_kas_makan` (`id_kas_makan`, `tgl`, `ket`, `pemasukan`, `pengeluaran`) VALUES
(13, '2024-08-03', 'Service Motor', 112322, 0),
(16, '2024-08-25', 'tes1', 0, 1001),
(17, '2024-09-27', 'Tambahan', 0, 123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas_spp`
--

DROP TABLE IF EXISTS `tb_kas_spp`;
CREATE TABLE `tb_kas_spp` (
  `id_kas_spp` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(200) NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kas_spp`
--

INSERT INTO `tb_kas_spp` (`id_kas_spp`, `tgl`, `ket`, `pemasukan`, `pengeluaran`) VALUES
(1, '2024-08-27', 'Tes', 100000, 0),
(2, '2024-09-27', 'Tes1', 100000000, 0),
(4, '2024-08-27', 'Service Motor', 0, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

DROP TABLE IF EXISTS `tb_pembayaran`;
CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nama_santri` varchar(100) NOT NULL,
  `bulan` date NOT NULL,
  `spp` int(11) NOT NULL,
  `uang_makan` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `tgl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `nama_santri`, `bulan`, `spp`, `uang_makan`, `keterangan`, `tgl`) VALUES
(5, 'Azkiya', '2024-07-28', 20000, 250000, 'Lunas', '2024-07-28'),
(6, 'Azkiya', '2024-08-01', 150000, 0, 'Belum Lunas', '2024-08-14'),
(7, 'Alip', '2024-07-28', 10000, 300000, 'Belum Lunas', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajar`
--

DROP TABLE IF EXISTS `tb_pengajar`;
CREATE TABLE `tb_pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ttl` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `riwayat_pendidikan` varchar(200) NOT NULL,
  `mapel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pengajar`
--

INSERT INTO `tb_pengajar` (`id_pengajar`, `nama`, `ttl`, `alamat`, `riwayat_pendidikan`, `mapel`) VALUES
(2, 'Desar', '22 Desember 1980', 'Lampuyang', 'S1', 'B.Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengurus`
--

DROP TABLE IF EXISTS `tb_pengurus`;
CREATE TABLE `tb_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ttl` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `riwayat_pendidikan` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id_pengurus`, `nama`, `ttl`, `alamat`, `riwayat_pendidikan`, `jabatan`) VALUES
(2, 'Indra Dzikri Ansori', 'Majalengka, 14 November 2001', 'Talaga', 'S1', 'Pimpinan Asrama'),
(3, 'Asti Astarah Hayati', '23 Oktober 1999', 'Talaga', 'S1', 'Bendahara'),
(4, 'Dodo Sunandi', '22 Desember 1980', 'Talaga\r\n', 'S1', 'Penanggung Jawab Asrama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_santri`
--

DROP TABLE IF EXISTS `tb_santri`;
CREATE TABLE `tb_santri` (
  `id_santri` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_masuk` varchar(10) NOT NULL,
  `tahun_akhir` varchar(10) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `no_hp_ortu` varchar(13) NOT NULL,
  `penghasilan/bln` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_santri`
--

INSERT INTO `tb_santri` (`id_santri`, `nama`, `kelas`, `ttl`, `no_hp`, `alamat`, `tahun_masuk`, `tahun_akhir`, `anak_ke`, `status`, `nama_ibu`, `nama_ayah`, `alamat_ortu`, `no_hp_ortu`, `penghasilan/bln`) VALUES
(7, 'Azkiya', 'Ula', 'Majalengka, 14 November 2001', '+6287654544', 'x', '2024', '2028', 1, 'Aktif', 'Desar', 'Nunu', 'dss', '+6298876', 12211),
(8, 'Alip', 'Ula', 'Majalengka, 14 November 2001', '+6287654544', 'x', '2024', '2028', 1, 'Aktif', 'NN', 'DD', 'aa', '+6298876', 111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '123456', 'admin'),
(2, 'user', '123456', 'user'),
(4, 'asep', '123456', 'admin');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_rekap`
-- (Lihat di bawah untuk tampilan aktual)
--
DROP VIEW IF EXISTS `v_rekap`;
CREATE TABLE `v_rekap` (
`nama` varchar(100)
,`kelas` varchar(100)
,`bulan` date
,`spp` int(11)
,`keterangan` varchar(200)
,`tgl` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_rekap_uang_makan`
-- (Lihat di bawah untuk tampilan aktual)
--
DROP VIEW IF EXISTS `v_rekap_uang_makan`;
CREATE TABLE `v_rekap_uang_makan` (
`nama` varchar(100)
,`kelas` varchar(100)
,`bulan` date
,`uang_makan` int(11)
,`keterangan` varchar(200)
,`tgl` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_slip`
-- (Lihat di bawah untuk tampilan aktual)
--
DROP VIEW IF EXISTS `v_slip`;
CREATE TABLE `v_slip` (
`nama` varchar(100)
,`kelas` varchar(100)
,`status` varchar(50)
,`bulan` date
,`spp` int(11)
,`uang_makan` int(11)
,`keterangan` varchar(200)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_rekap`
--
DROP TABLE IF EXISTS `v_rekap`;

DROP VIEW IF EXISTS `v_rekap`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rekap`  AS SELECT `tb_santri`.`nama` AS `nama`, `tb_santri`.`kelas` AS `kelas`, `tb_pembayaran`.`bulan` AS `bulan`, `tb_pembayaran`.`spp` AS `spp`, `tb_pembayaran`.`keterangan` AS `keterangan`, `tb_pembayaran`.`tgl` AS `tgl` FROM (`tb_pembayaran` left join `tb_santri` on(`tb_santri`.`nama` = `tb_pembayaran`.`nama_santri`))  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_rekap_uang_makan`
--
DROP TABLE IF EXISTS `v_rekap_uang_makan`;

DROP VIEW IF EXISTS `v_rekap_uang_makan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rekap_uang_makan`  AS SELECT `tb_santri`.`nama` AS `nama`, `tb_santri`.`kelas` AS `kelas`, `tb_pembayaran`.`bulan` AS `bulan`, `tb_pembayaran`.`uang_makan` AS `uang_makan`, `tb_pembayaran`.`keterangan` AS `keterangan`, `tb_pembayaran`.`tgl` AS `tgl` FROM (`tb_pembayaran` left join `tb_santri` on(`tb_santri`.`nama` = `tb_pembayaran`.`nama_santri`))  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_slip`
--
DROP TABLE IF EXISTS `v_slip`;

DROP VIEW IF EXISTS `v_slip`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_slip`  AS SELECT `tb_santri`.`nama` AS `nama`, `tb_santri`.`kelas` AS `kelas`, `tb_santri`.`status` AS `status`, `tb_pembayaran`.`bulan` AS `bulan`, `tb_pembayaran`.`spp` AS `spp`, `tb_pembayaran`.`uang_makan` AS `uang_makan`, `tb_pembayaran`.`keterangan` AS `keterangan` FROM (`tb_santri` left join `tb_pembayaran` on(`tb_santri`.`nama` = `tb_pembayaran`.`nama_santri`)) WHERE `tb_pembayaran`.`bulan` is not nullnot null  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dana_saving`
--
ALTER TABLE `tb_dana_saving`
  ADD PRIMARY KEY (`id_saving`);

--
-- Indeks untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `tb_kas_makan`
--
ALTER TABLE `tb_kas_makan`
  ADD PRIMARY KEY (`id_kas_makan`);

--
-- Indeks untuk tabel `tb_kas_spp`
--
ALTER TABLE `tb_kas_spp`
  ADD PRIMARY KEY (`id_kas_spp`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indeks untuk tabel `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indeks untuk tabel `tb_santri`
--
ALTER TABLE `tb_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dana_saving`
--
ALTER TABLE `tb_dana_saving`
  MODIFY `id_saving` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_kas_makan`
--
ALTER TABLE `tb_kas_makan`
  MODIFY `id_kas_makan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_kas_spp`
--
ALTER TABLE `tb_kas_spp`
  MODIFY `id_kas_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_santri`
--
ALTER TABLE `tb_santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
