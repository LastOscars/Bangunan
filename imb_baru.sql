-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 05:22 AM
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
-- Database: `imb_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas_izin`
--

CREATE TABLE `berkas_izin` (
  `id_pendaftaran` int(11) NOT NULL,
  `no_register` varchar(244) NOT NULL,
  `Tanggal` date NOT NULL,
  `nama_pemohon` varchar(244) NOT NULL,
  `alamat_pemohon` varchar(244) NOT NULL,
  `desa_pemohon` varchar(244) NOT NULL,
  `kecamatan_pemohon` varchar(244) NOT NULL,
  `kabupaten_pemohon` varchar(244) NOT NULL,
  `wilayah` varchar(244) NOT NULL,
  `jalan` varchar(244) NOT NULL,
  `desa` varchar(244) NOT NULL,
  `status_tanah` varchar(244) NOT NULL,
  `izin` varchar(244) NOT NULL,
  `nama_perwakilan` varchar(244) NOT NULL,
  `alamat_perwakilan` varchar(244) NOT NULL,
  `telepon_perwakilan` varchar(244) NOT NULL,
  `jabatan_perwakilan` varchar(244) NOT NULL,
  `surat_kuasa` varchar(244) NOT NULL,
  `FC_KTP` varchar(244) NOT NULL,
  `FC_APP` varchar(244) NOT NULL,
  `FC_SNP` varchar(244) NOT NULL,
  `FC_IK` varchar(244) NOT NULL,
  `gambar_teknis` varchar(244) NOT NULL,
  `FC_SPPT` varchar(244) NOT NULL,
  `status` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas_izin`
--

INSERT INTO `berkas_izin` (`id_pendaftaran`, `no_register`, `Tanggal`, `nama_pemohon`, `alamat_pemohon`, `desa_pemohon`, `kecamatan_pemohon`, `kabupaten_pemohon`, `wilayah`, `jalan`, `desa`, `status_tanah`, `izin`, `nama_perwakilan`, `alamat_perwakilan`, `telepon_perwakilan`, `jabatan_perwakilan`, `surat_kuasa`, `FC_KTP`, `FC_APP`, `FC_SNP`, `FC_IK`, `gambar_teknis`, `FC_SPPT`, `status`, `catatan`) VALUES
(35, 'B035', '2021-02-19', 'dsa', 'dsa', 'Brayo', 'Wonotunggal', 'Batang', 'sq', 'q', 'qwsq', 'qs', 'Mendirikan', 's', 'qs', 'q', 'sq', 'sq', '-akte pendririan perusahaan.pdf', '-Contoh Format Fotokopi ktp.pdf', '-ijin_lokasi.pdf', '-LAMP. PERBUP IMB 2017.pdf', 'PERMOHONAN SALINAN SPPT PBB P2.pdf', '-Contoh Format Fotokopi ktp.pdf', 'sekretariat', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_berkas`
--

CREATE TABLE `history_berkas` (
  `id_berkas` int(11) NOT NULL,
  `tno_register` varchar(244) NOT NULL,
  `ttanggal` varchar(244) NOT NULL,
  `tnama_pemohon` varchar(244) NOT NULL,
  `talamat_pemohon` varchar(244) NOT NULL,
  `tdesa_pemohon` varchar(244) NOT NULL,
  `tkecamatan_pemohon` varchar(244) NOT NULL,
  `tkabupaten_pemohon` varchar(244) NOT NULL,
  `twilayah` varchar(244) NOT NULL,
  `tjalan` varchar(244) NOT NULL,
  `tdesa` varchar(244) NOT NULL,
  `tstatus_tanah` varchar(244) NOT NULL,
  `tizin` varchar(244) NOT NULL,
  `tnama_perwakilan` varchar(244) NOT NULL,
  `talamat_perwakilan` varchar(244) NOT NULL,
  `ttelepon_perwakilan` varchar(244) NOT NULL,
  `tjabatan_perwakilan` varchar(244) NOT NULL,
  `tsurat_kuasa` varchar(244) NOT NULL,
  `tFC_KTP` varchar(244) NOT NULL,
  `tFC_APP` varchar(244) NOT NULL,
  `tFC_SNP` varchar(244) NOT NULL,
  `tFC_IK` varchar(244) NOT NULL,
  `tgambar_teknis` varchar(244) NOT NULL,
  `tFC_SPPT` varchar(244) NOT NULL,
  `tstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_berkas`
--

INSERT INTO `history_berkas` (`id_berkas`, `tno_register`, `ttanggal`, `tnama_pemohon`, `talamat_pemohon`, `tdesa_pemohon`, `tkecamatan_pemohon`, `tkabupaten_pemohon`, `twilayah`, `tjalan`, `tdesa`, `tstatus_tanah`, `tizin`, `tnama_perwakilan`, `talamat_perwakilan`, `ttelepon_perwakilan`, `tjabatan_perwakilan`, `tsurat_kuasa`, `tFC_KTP`, `tFC_APP`, `tFC_SNP`, `tFC_IK`, `tgambar_teknis`, `tFC_SPPT`, `tstatus`) VALUES
(17, 'B002', '2020-07-15', 'hsuni', 'kebrok batang', 'sambong', 'batang', 'batang', 'batang', 'jl urip somoharjo', 'sambong', 'lelang', 'bangunan baru', '-', '-', '-', '-', '-', '-SISTEM INFORMASI.pdf', '-TUGAS AKHIR7.pdf', '-TUGAS AKHIR7.pdf', '-TUGAS AKHIR7.pdf', '-TUGAS AKHIR7.pdf', '-TUGAS AKHIR7.pdf', 'Sudah diCe'),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sudah diCe'),
(19, 'B003', '2020-07-15', 'muhidin', 'simbang desa', 'simbang', 'kandeman', 'batang', 'simbang', 'jl urip sumoharjo', 'simbang', '-', '', '-', '-', '-', '-', '-', '-TUGAS AKHIR7.pdf', '-SISTEM INFORMASI.pdf', '-SISTEM INFORMASI.pdf', '-TUGAS AKHIR7.pdf', '-SISTEM INFORMASI.pdf', '-TUGAS AKHIR7.pdf', 'Sudah diCe'),
(20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sudah diCe'),
(21, 'B021', '0000-00-00', 'galang', 'batang', 'Dlimas', 'Banyuputih', 'Batang', 'batang', 'jdahks', 'ikdsj', 'dosjo', 'Mendirikan', 'dika', 'hbdsaj', 'kjsdkq', 'dikjs', 'dolkj', '-akta-dikompresi.pdf', '-SIM (1).pdf', '-TPS - 2.pdf', '-Adim-converted.pdf', '-Adim-converted.pdf', '-undangan kopi ibu.pdf', 'Sudah diCe'),
(22, 'B033', '2021-02-19', 'dfjhds', 'dfdsfdfs', 'Brayo', 'Wonotunggal', 'Batang', 'fsddef', 'dweffwe', 'wef', 'fewwef', 'Rehab / Renovasi', 'fwe', 'weewef', 'ew', 'feefw', 'ew', '-Contoh Format Fotokopi ktp.pdf', '--akte-pendirian-perusahaan-yang-berbadan-hukumbadan-usaha-anggaran-dasar.pdf', '-LAMP. PERBUP IMB 2017.pdf', '-ijin_lokasi.pdf', '-gambar teknis.pdf', '-PERMOHONAN SALINAN SPPT PBB P2.pdf', 'Sudah diCe'),
(23, '<br /><b>Notice</b>:  Undefined variable: no_regis in <b>C:\\xampp\\htdocs\\galang\\verfikasi\\pendaftaran.php</b> on line <b>51</b><br />', '2021-02-19', 'dsa', 'dqw', 'Adinuso', 'Reban', 'Batang', 'dqw', 'qdwqqdw', 'wddqw', 'dwqw', 'Rehab / Renovasi', 'dwwq', 'wqqwd', 'wddqw', 'wdwdq', 'wdqdqw', '--akte pendririan perusahaan.pdf', '--Contoh Format Fotokopi ktp.pdf', '--gambar teknis.pdf', '--ijin_lokasi.pdf', '--LAMP. PERBUP IMB 2017.pdf', '--PERMOHONAN SALINAN SPPT PBB P2.pdf', 'Sudah diCe');

-- --------------------------------------------------------

--
-- Table structure for table `history_plang_imb`
--

CREATE TABLE `history_plang_imb` (
  `id_history_plang` int(11) NOT NULL,
  `tid_imb` int(11) NOT NULL,
  `ttgl_imb` varchar(224) NOT NULL,
  `tlokasi_imb` varchar(224) NOT NULL,
  `tkegiatan` varchar(224) NOT NULL,
  `tpenggunaan` varchar(224) NOT NULL,
  `tpemilik` varchar(224) NOT NULL,
  `tjumlah_lantai` varchar(224) NOT NULL,
  `tperencanaan_bangunan` varchar(224) NOT NULL,
  `status` varchar(224) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_plang_imb`
--

INSERT INTO `history_plang_imb` (`id_history_plang`, `tid_imb`, `ttgl_imb`, `tlokasi_imb`, `tkegiatan`, `tpenggunaan`, `tpemilik`, `tjumlah_lantai`, `tperencanaan_bangunan`, `status`) VALUES
(3, 3, '2020-10-14', 'Lebo', 'Pembagunan Warung Kopi', 'Cafe', 'Galang Nugraha', '2', 'cafe', 'Sudah Tercetak'),
(4, 4, '2020-10-27', 'batang', 'pembangunan mushola', 'mushola', '', '1', 'tidak jadi', 'Sudah Tercetak'),
(5, 5, '2021-02-19', 'batang', 'pembangunan perumahan', 'satu lantai', '', 'satu', 'bangunan', 'Sudah Tercetak'),
(6, 6, '2021-02-19', 'das', 'dwqw', 'dsqw', '', 'dswq', 'dwqw', 'Sudah Tercetak');

-- --------------------------------------------------------

--
-- Table structure for table `history_sertifikat`
--

CREATE TABLE `history_sertifikat` (
  `id_history_sertifikat` int(11) NOT NULL,
  `id_tsertifikat` int(11) NOT NULL,
  `ttanggal` date NOT NULL,
  `tnama` varchar(244) NOT NULL,
  `talamat` varchar(244) NOT NULL,
  `ttingkat_bangunan` varchar(244) NOT NULL,
  `tlokasi_bangunan` varchar(244) NOT NULL,
  `tkondisi_bangunan` varchar(244) NOT NULL,
  `tukuran_bangunan` varchar(244) NOT NULL,
  `tdiatas_tanah` varchar(244) NOT NULL,
  `tstatus` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_sertifikat`
--

INSERT INTO `history_sertifikat` (`id_history_sertifikat`, `id_tsertifikat`, `ttanggal`, `tnama`, `talamat`, `ttingkat_bangunan`, `tlokasi_bangunan`, `tkondisi_bangunan`, `tukuran_bangunan`, `tdiatas_tanah`, `tstatus`) VALUES
(2, 1, '0000-00-00', 'halim', 'sdjh', 'dsa', '', 'sdkj', 'dsasa', 'dsa', 'Cetak'),
(3, 4, '0000-00-00', 'halim', 'batang', 'permanen', 'batang', 'permanen', '123', 'batang', 'Sudah diCetak'),
(4, 2, '0000-00-00', 'noki', 'a', 'ds', 'dsa', 'ds', 'dsa', 'sa', 'Sudah diCetak'),
(5, 3, '0000-00-00', 'fikri', 'batang', 'kdsjk', 'jds', 'dskjhnjk', 'dkjsjsd', 'dsknj', 'Sudah Tercetak'),
(6, 7, '0000-00-00', 'galang', 'kasepuhan', 'satu ', 'kosong', 'membangun', '2x50', 'sendiri', 'Sudah Tercetak'),
(7, 11, '2021-02-20', 'dsak', 'dfew', 'wef', 'ffe', 'few', 'fwe', 'fewef', 'Sudah Tercetak'),
(8, 13, '2021-02-24', 'DSEAFER', 'GRT', 'GTR', 'RTGRT', 'GRT', 'GTR', 'EWF', 'Sudah Tercetak');

-- --------------------------------------------------------

--
-- Table structure for table `kab`
--

CREATE TABLE `kab` (
  `id_kab` int(11) NOT NULL,
  `nama_kab` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kab`
--

INSERT INTO `kab` (`id_kab`, `nama_kab`) VALUES
(1, 'Batang');

-- --------------------------------------------------------

--
-- Table structure for table `kec`
--

CREATE TABLE `kec` (
  `id_kec` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  `nama_kec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kec`
--

INSERT INTO `kec` (`id_kec`, `id_kab`, `nama_kec`) VALUES
(1, 1, 'Bandar'),
(2, 1, 'Banyuputih'),
(3, 1, 'Batang'),
(4, 1, 'Bawang'),
(5, 1, 'Blado'),
(6, 1, 'Gringsing'),
(7, 1, 'Kandeman'),
(8, 1, 'Limpung'),
(9, 1, 'Pecalungan'),
(10, 1, 'Reban'),
(11, 1, 'Subah'),
(12, 1, 'Tersono'),
(13, 1, 'Tulis'),
(14, 1, 'Warungasem'),
(15, 1, 'Wonotunggal');

-- --------------------------------------------------------

--
-- Table structure for table `kel`
--

CREATE TABLE `kel` (
  `id_kel` int(11) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `nama_kel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kel`
--

INSERT INTO `kel` (`id_kel`, `id_kec`, `nama_kel`) VALUES
(1, 1, 'Bandar'),
(2, 1, 'Batiombo'),
(3, 1, 'Binangun'),
(4, 1, 'Candi'),
(5, 1, 'Kluwih'),
(6, 1, 'Pesalakan'),
(7, 1, 'Pucanggading'),
(8, 1, 'Sidayu'),
(9, 1, 'Simpar'),
(10, 1, 'Tambahrejo'),
(11, 1, 'Tombo'),
(12, 1, 'Toso'),
(13, 1, 'Tumbrep'),
(14, 1, 'Wonodadi'),
(15, 1, 'Wonokerto'),
(16, 1, 'Wonomerto'),
(17, 1, 'Wonosegoro'),
(18, 2, 'Banaran'),
(19, 2, 'Banyuputih'),
(20, 2, 'Bulu'),
(21, 2, 'Dlimas'),
(22, 2, 'Kalangsono'),
(23, 2, 'Kalibalik'),
(24, 2, 'Kedawung'),
(25, 2, 'Luwung'),
(26, 2, 'Penundan'),
(27, 2, 'Sembung'),
(28, 2, 'Timbang'),
(29, 3, 'Cepokokuning'),
(30, 3, 'Denasri Wetan'),
(31, 3, 'Denasri Kulon'),
(32, 3, 'Kalipucang Kulon'),
(33, 3, 'Kalipucang Wetan'),
(34, 3, 'Kalisalak'),
(35, 3, 'Karanganyar'),
(36, 3, 'Kecepak'),
(37, 3, 'Klidang Lor'),
(38, 3, 'Klidang Wetan'),
(39, 3, 'Pasekaran'),
(40, 3, 'Rowobelang'),
(41, 3, 'Karangasem Selatan'),
(42, 3, 'Karangasem Utara'),
(43, 3, 'Kasepuhan'),
(44, 3, 'Kauman'),
(45, 3, 'Proyonanggan Selatan'),
(46, 3, 'Proyonanggan Tengah'),
(47, 3, 'Proyonanggan Utara'),
(48, 3, 'Sambong'),
(49, 3, 'Watesalit'),
(50, 4, 'Bawang'),
(51, 4, 'Candigugur'),
(52, 4, 'Candirejo'),
(53, 4, 'Deles'),
(54, 4, 'Getas'),
(55, 4, 'Gunungsari'),
(56, 4, 'Jambangan'),
(57, 4, 'Jlamprang'),
(58, 4, 'Kalirejo'),
(59, 4, 'Kebaturan'),
(60, 4, 'Pangempon'),
(61, 4, 'Pasusukan'),
(62, 4, 'Pranten'),
(63, 4, 'Purbo'),
(64, 4, 'Sangubanyu'),
(65, 4, 'Sibebek'),
(66, 4, 'Sidoharjo'),
(67, 4, 'Soka'),
(68, 4, 'Surjo'),
(69, 4, 'Wonosari'),
(70, 5, 'Bawang'),
(71, 5, 'Besani'),
(72, 5, 'Bismo'),
(73, 5, 'Blado'),
(74, 5, 'Cokro'),
(75, 5, 'Gerlang'),
(76, 5, 'Gondang'),
(77, 5, 'Kalipancur'),
(78, 5, 'Kalisari'),
(79, 5, 'Kalitengah'),
(80, 5, 'Kambangan'),
(81, 5, 'Kembanglangit'),
(82, 5, 'Keputon'),
(83, 5, 'Keteleng'),
(84, 5, 'Pesantren'),
(85, 5, 'Selopajang Barat'),
(86, 5, 'Selopajang Timur'),
(87, 5, 'Wonobodro'),
(88, 6, 'Gringsing'),
(89, 6, 'Kebondalem'),
(90, 6, 'Ketanggan'),
(91, 6, 'Krengseng'),
(92, 6, 'Kutosari'),
(93, 6, 'Lebo'),
(94, 6, 'Madugowongjati'),
(95, 6, 'Mentosari'),
(96, 6, 'Plelen'),
(97, 6, 'Sawangan'),
(98, 6, 'Sentul'),
(99, 6, 'Sidorejo'),
(100, 6, 'Surodadi'),
(101, 6, 'Tedunan'),
(102, 6, 'Yosorejo'),
(103, 7, 'Bakalan'),
(104, 7, 'Botolambat'),
(105, 7, 'Cempereng'),
(106, 7, 'Depok'),
(107, 7, 'Juragan'),
(108, 7, 'Kandeman'),
(109, 7, 'Karanganom'),
(110, 7, 'Karanggeneng'),
(111, 7, 'Lawangaji'),
(112, 7, 'Tegalsari'),
(113, 7, 'Tragung'),
(114, 7, 'Ujungnegoro'),
(115, 7, 'Wonokerso'),
(116, 8, 'Amongrogo'),
(117, 8, 'Babadan'),
(118, 8, 'Dlisen'),
(119, 8, 'Donorejo'),
(120, 8, 'Kalisalak'),
(121, 8, 'Kepuh'),
(122, 8, 'Limpung'),
(123, 8, 'Lobang'),
(124, 8, 'Ngaliyan'),
(125, 8, 'Plumbon'),
(126, 8, 'Pungangan'),
(127, 8, 'Rowosari'),
(128, 8, 'Sempu'),
(129, 8, 'Sidomulyo'),
(130, 8, 'Sukorejo'),
(131, 8, 'Tembok'),
(132, 8, 'Wonokerso'),
(133, 9, 'Bandung'),
(134, 9, 'Gemuh'),
(135, 9, 'Gombong'),
(136, 9, 'Gumawang'),
(137, 9, 'Keniten'),
(138, 9, 'Pecalungan'),
(139, 9, 'Pretek'),
(140, 9, 'Randu'),
(141, 9, 'Selokarto'),
(142, 9, 'Siguci'),
(143, 10, 'Adinuso'),
(144, 10, 'Cablikan'),
(145, 10, 'Kalisari'),
(146, 10, 'Karanganyar'),
(147, 10, 'Kepundung'),
(148, 10, 'Kumesu'),
(149, 10, 'Mojotengah'),
(150, 10, 'Ngadirejo'),
(151, 10, 'Ngroto'),
(152, 10, 'Pacet'),
(153, 10, 'Padomasan'),
(154, 10, 'Polodoro'),
(155, 10, 'Reban'),
(156, 10, 'Semampir'),
(157, 10, 'Sojomerto'),
(158, 10, 'Sukomangli'),
(159, 10, 'Tambakboyo'),
(160, 10, 'Wonorejo'),
(161, 10, 'Wonosobo'),
(162, 11, 'Adinuso'),
(163, 11, 'Clapar'),
(164, 11, 'Durenombo'),
(165, 11, 'Gondang'),
(166, 11, 'Jatisari'),
(167, 11, 'Kalimanggis'),
(168, 11, 'Karangtengah'),
(169, 11, 'Keborangan'),
(170, 11, 'Kemiri Barat'),
(171, 11, 'Kemiri Timur'),
(172, 11, 'Kumejing'),
(173, 11, 'Kuripan'),
(174, 11, 'Mangunharjo'),
(175, 11, 'Menjangan'),
(176, 11, 'Sengon'),
(177, 11, 'Subah'),
(178, 11, 'Tenggulangharjo'),
(179, 12, 'Banteng'),
(180, 12, 'Boja'),
(181, 12, 'Gondo'),
(182, 12, 'Harjowinangun Barat'),
(183, 12, 'Harjowinangun Timur'),
(184, 12, 'Kebumen'),
(185, 12, 'Kranggan'),
(186, 12, 'Margosono'),
(187, 12, 'Plosowangi'),
(188, 12, 'Pujut'),
(189, 12, 'Rejosari Barat'),
(190, 12, 'Rejosari Timur'),
(191, 12, 'Satriyan'),
(192, 12, 'Sendang'),
(193, 12, 'Sidalang'),
(194, 12, 'Sumurbanger'),
(195, 12, 'Tanjungsari'),
(196, 12, 'Tegalombo'),
(197, 12, 'Tersono'),
(198, 12, 'Wanar'),
(199, 13, 'Beji'),
(200, 13, 'Cluwuk'),
(201, 13, 'Jolosekti'),
(202, 13, 'Jrakahpayung'),
(203, 13, 'Kaliboyo'),
(204, 13, 'Kebumen'),
(205, 13, 'Kedungsegog'),
(206, 13, 'Kenconorejo'),
(207, 13, 'Manggis'),
(208, 13, 'Ponowareng'),
(209, 13, 'Posong'),
(210, 13, 'Sembojo'),
(211, 13, 'Siberuk'),
(212, 13, 'Simbangdesa'),
(213, 13, 'Simbangjati'),
(214, 13, 'Tulis'),
(215, 13, 'Wringingintung'),
(216, 14, 'Banjiran'),
(217, 14, 'Candiareng'),
(218, 14, 'Cepagan'),
(219, 14, 'Gapuro'),
(220, 14, 'Kalibeluk'),
(221, 14, 'Kaliwareng'),
(222, 14, 'Lebo'),
(223, 14, 'Masin'),
(224, 14, 'Menguneng'),
(225, 14, 'Pandansari'),
(226, 14, 'Pejambon'),
(227, 14, 'Pesaren'),
(228, 14, 'Sariglagah'),
(229, 14, 'Sawahjoho'),
(230, 14, 'Sidorejo'),
(231, 14, 'Sijono'),
(232, 14, 'Terban'),
(233, 14, 'Warungasem'),
(234, 15, 'Brayo'),
(235, 15, 'Brokoh'),
(236, 15, 'Dringo'),
(237, 15, 'Gringgingsari'),
(238, 15, 'Kedungmalang'),
(239, 15, 'Kemlingi'),
(240, 15, 'Kreyo'),
(241, 15, 'Penangkan'),
(242, 15, 'Sendang'),
(243, 15, 'Sigayam'),
(244, 15, 'Silurah'),
(245, 15, 'Siwatu'),
(246, 15, 'Sodong'),
(247, 15, 'Wates'),
(248, 15, 'Wonotunggal');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_petugas`
--

CREATE TABLE `pesan_petugas` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pesan` varchar(244) NOT NULL,
  `tujuan_petugas` varchar(66) NOT NULL,
  `kesalahan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan_petugas`
--

INSERT INTO `pesan_petugas` (`id_pesan`, `id_user`, `pesan`, `tujuan_petugas`, `kesalahan`) VALUES
(18, 6, 'dsas', '3', '18022019175647651.pdf'),
(19, 3, 'SQWSQW', '6', '18022019175741651.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `plang_imb`
--

CREATE TABLE `plang_imb` (
  `id_imb` int(11) NOT NULL,
  `tgl_imb` date NOT NULL,
  `lokasi_imb` varchar(224) NOT NULL,
  `kegiatan` varchar(224) NOT NULL,
  `penggunaan` varchar(224) NOT NULL,
  `jumlah_lantai` varchar(224) NOT NULL,
  `perencanaan_bangunan` varchar(224) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plang_imb`
--

INSERT INTO `plang_imb` (`id_imb`, `tgl_imb`, `lokasi_imb`, `kegiatan`, `penggunaan`, `jumlah_lantai`, `perencanaan_bangunan`, `status`) VALUES
(3, '2020-10-24', 'BOJONG', 'REKLAME', 'MEMBANGUN', '2', 'MEMBANGUN', 'proses_dicetak'),
(4, '2021-02-13', 'kramalan', 'Pembangunan Perumahan Griya Mukti', 'Kontruksi', '1', 'Pembangunan Perumahan', 'proses_dicetak');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(244) NOT NULL,
  `alamat` varchar(244) NOT NULL,
  `penggunaan` varchar(90) NOT NULL,
  `kegiatan` varchar(96) NOT NULL,
  `lokasi_bangunan` varchar(244) NOT NULL,
  `kondisi_bangunan` varchar(244) NOT NULL,
  `tingkat_bangunan` varchar(244) NOT NULL,
  `ukuran_bangunan` varchar(244) NOT NULL,
  `perencanaan_bangunan` varchar(100) NOT NULL,
  `diatas_tanah` varchar(244) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `tanggal`, `nama`, `alamat`, `penggunaan`, `kegiatan`, `lokasi_bangunan`, `kondisi_bangunan`, `tingkat_bangunan`, `ukuran_bangunan`, `perencanaan_bangunan`, `diatas_tanah`, `status`) VALUES
(12, '2021-02-21', 'sd', 'gfgd', '', '', 'gfe', '320', '320', '3', '', '6', 'sedang_dicetak'),
(14, '2021-02-26', 'galang', 'kaspuhan', 'Pembangunan Ruko jalan permada asri', 'Pembangunan Ruko', 'Jl. permadi asri RT/RW 05/01 sleman yogyakarta', 'tanah', '1 lantai', '1036 M', 'Pembangunan Ruko', 'Pribadi', 'sedang_dicetak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `hak_akses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `hak_akses`) VALUES
(1, 'verifikasi', '123', 'kasi_verifikasi'),
(3, 'pelayanan', '123', 'pelayanan'),
(6, 'sekretariat', '123', 'sekretariat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas_izin`
--
ALTER TABLE `berkas_izin`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `history_berkas`
--
ALTER TABLE `history_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `history_plang_imb`
--
ALTER TABLE `history_plang_imb`
  ADD PRIMARY KEY (`id_history_plang`);

--
-- Indexes for table `history_sertifikat`
--
ALTER TABLE `history_sertifikat`
  ADD PRIMARY KEY (`id_history_sertifikat`);

--
-- Indexes for table `kab`
--
ALTER TABLE `kab`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `kec`
--
ALTER TABLE `kec`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `kel`
--
ALTER TABLE `kel`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indexes for table `pesan_petugas`
--
ALTER TABLE `pesan_petugas`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `plang_imb`
--
ALTER TABLE `plang_imb`
  ADD PRIMARY KEY (`id_imb`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas_izin`
--
ALTER TABLE `berkas_izin`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `history_berkas`
--
ALTER TABLE `history_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `history_plang_imb`
--
ALTER TABLE `history_plang_imb`
  MODIFY `id_history_plang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history_sertifikat`
--
ALTER TABLE `history_sertifikat`
  MODIFY `id_history_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kab`
--
ALTER TABLE `kab`
  MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kec`
--
ALTER TABLE `kec`
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kel`
--
ALTER TABLE `kel`
  MODIFY `id_kel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `pesan_petugas`
--
ALTER TABLE `pesan_petugas`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `plang_imb`
--
ALTER TABLE `plang_imb`
  MODIFY `id_imb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
