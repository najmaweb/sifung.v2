-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.26-17 - Percona Server (GPL), Release '17', Revision 'd7119cd'
-- Server OS:                    Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sifung
CREATE DATABASE IF NOT EXISTS `sifung` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sifung`;

-- Dumping structure for table sifung.rincian01
CREATE TABLE IF NOT EXISTS `rincian01` (
  `id` int NOT NULL COMMENT 'id bersumber dari hasil input capaian.id',
  `urt` int NOT NULL COMMENT 'urt bersumber dari hasil input header.urt',
  `urtx` int NOT NULL AUTO_INCREMENT COMMENT 'sub indeks',
  `kdsubutir` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'kode sub butir fungsional',
  `nops` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'nomor kegiatan operasioal',
  `tgops` date DEFAULT NULL COMMENT 'tanggal kegiatan operasional',
  `jnsPPK` char(1) DEFAULT NULL COMMENT 'jenis permohonan',
  `media` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'jenis hewan',
  `jmltotal` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'jumlah hewan yang dilalulintaskan',
  `asal` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'asal negara atau kabupaten',
  `tujuan` char(10) DEFAULT NULL COMMENT 'tujuan negara atau kabupaten',
  `pemilik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'nama pemilik',
  `dok1` text COMMENT 'nama dokumen 1',
  `dok2` text COMMENT 'nama dokumen 2',
  `dok3` text COMMENT 'nama dokumen 3',
  `dok4` text COMMENT 'nama dokumen 4',
  `stat1` char(1) DEFAULT NULL COMMENT 'status nama dokumen 1',
  `stat2` char(1) DEFAULT NULL COMMENT 'status nama dokumen 2',
  `stat3` char(1) DEFAULT NULL COMMENT 'status nama dokumen 3',
  `stat4` char(1) DEFAULT NULL COMMENT 'status nama dokumen 4',
  `jmlhewan` varchar(5) DEFAULT NULL COMMENT 'jumlah hewan yang diperiksa / diisolasi',
  `kelamin` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT '1 jantan, 2 betina, 3 jantan & betina',
  `bulukulit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'warna ciri2 bulu atau kulit',
  `kondisi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'kondisi umum',
  `nafsu` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'nampung hasil pilihan dari tblnafsu.kdnafsu',
  `discharge` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'nampung hasil pilihan dari tbldischarge.kddischarge',
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'keterangan presen',
  `suhu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'hasil pemeriksaan suhu',
  `pulsus` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'hasil pemeriksaan pulsus',
  `respirasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'hasil pemeriksaan respirasi',
  `limfo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'hasil pemeriksaan limfoglandula',
  `mukosa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'hasil pemeriksaan mukosa',
  `turgor` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'hasil pemeriksaan turgor kulit',
  `lesi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'hasil pemeriksaan ada/tidaknya lesi',
  `ketklinis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'keterangan klinis',
  `nilaisuhu` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian pemeriksaan suhu',
  `nilaipulsus` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian pemeriksaan pulsus',
  `nilairespirasi` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian pemeriksaan respirasi',
  `nilailimfo` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian pemeriksaan limfoglandula',
  `nilaimukosa` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian pemeriksaan mukosa',
  `nilaiturgor` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian pemeriksaan turgor',
  `nilailesi` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian pemeriksaan lesi',
  `diagnosa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'hasil penetapan diagnosa',
  `tindaklanjut` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'penjelasan tindak lanjut',
  `jmlkemasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `jnskemasan` text,
  `kemasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'keutuhan kemasan',
  `segel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'keutuhan segel',
  `label` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'kecukupan label',
  `konsistensi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'bentukan produk',
  `warna` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'warna produk',
  `bau` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'bau produk',
  `rasa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'rasa produk',
  `temperatur` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'suhu produk',
  `ph` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'pH produk',
  `kondisiumum` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'kondisi secara umum dari produk yg diperiksa',
  `nilaikemasan` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian keutuhan kemasan',
  `nilaisegel` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian keutuhan segel',
  `nilailabel` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian kecukupan label',
  `nilaikonsistensi` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian konsistensi produk',
  `nilaiwarna` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian warna produk',
  `nilaibau` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian bau produk',
  `nilairasa` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian rasa produk',
  `nilaitemperatur` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian suhu produk',
  `nilaiph` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'hasil penilaian suhu produk',
  `tmst` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `riwayat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'x riwayat sakit atau vaksinasi',
  `raba` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'x palpasi, auskultasi, perkusi',
  `catatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'x hasil dicatat, diparaf dan diketahui oleh penyelia/supervisor',
  `rekam` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'x rekam medis',
  `kesimpulan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'x keterangan tentang diagnosa',
  `angkutan` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'x jenis alat angkut',
  `kondisiangkutan` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'x kondisi alat angkut',
  `penampakan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'x kondisi cara berdiri dan bergerak / kondisi umum',
  PRIMARY KEY (`urtx`),
  KEY `urt` (`urt`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='klinis dan organoleptik';

-- Dumping data for table sifung.rincian01: ~10 rows (approximately)
INSERT INTO `rincian01` (`id`, `urt`, `urtx`, `kdsubutir`, `nops`, `tgops`, `jnsPPK`, `media`, `jmltotal`, `asal`, `tujuan`, `pemilik`, `dok1`, `dok2`, `dok3`, `dok4`, `stat1`, `stat2`, `stat3`, `stat4`, `jmlhewan`, `kelamin`, `bulukulit`, `kondisi`, `nafsu`, `discharge`, `keterangan`, `suhu`, `pulsus`, `respirasi`, `limfo`, `mukosa`, `turgor`, `lesi`, `ketklinis`, `nilaisuhu`, `nilaipulsus`, `nilairespirasi`, `nilailimfo`, `nilaimukosa`, `nilaiturgor`, `nilailesi`, `diagnosa`, `tindaklanjut`, `jmlkemasan`, `jnskemasan`, `kemasan`, `segel`, `label`, `konsistensi`, `warna`, `bau`, `rasa`, `temperatur`, `ph`, `kondisiumum`, `nilaikemasan`, `nilaisegel`, `nilailabel`, `nilaikonsistensi`, `nilaiwarna`, `nilaibau`, `nilairasa`, `nilaitemperatur`, `nilaiph`, `tmst`, `riwayat`, `raba`, `catatan`, `rekam`, `kesimpulan`, `angkutan`, `kondisiangkutan`, `penampakan`) VALUES
	(30, 17, 8, 'a', '999', '2022-05-01', 'I', '1DA0C', '', 'AF', '16038', 'Test', '', '', '', '', '', '', '', '', '1', '1', '', '', 'a', '', '', '37', '', '', '', '', 'a', '', 'hahay', '0', '', '0', '0', '0', '0', '0', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 13:32:17', NULL, 'a', NULL, 'a', 'Restart ', '1', 'a', 'a'),
	(25, 13, 17, 'a', '9991', '2022-10-19', 'E', '1BB0A', '', '16032', 'MY', 'Jako Kintir', 'Rekomendasi', 'Health Certificate', 'SK Penetapan IKH', 'tidak tahu', '0', '0', '0', '1', '4', '1', 'putih - hitam - kuning', 'kondisi tidak menunjukkan gejala klinis penyakit HPHK', 'c', '1', 'tidak menunjukkan gejala abnormalitas yang menciri', '37', '44', '', '', '', 'a', '', '', '0', '1', '0', '1', '0', '1', '0', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-10 00:32:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(25, 13, 18, 'a', '999', '2022-10-03', 'E', '1BD0A', NULL, '16032', 'MY', 'Joko Tingkir', 'Rekomendasi', 'Health Certificate', 'SK Penetapan IKH', 'rahasia', '0', '0', '0', '1', '4', '1', 'putih - hitam - kuning', 'kondisi tidak menunjukkan gejala klinis penyakit HPHK', 'c', '1', 'tidak menunjukkan gejala abnormalitas yang menciri', '37', '41', '3', '1', '456', 'a', '64', NULL, '0', '0', '0', '0', '0', '0', '0', 'sehat', 'boleh diteruskan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-11 00:46:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(25, 13, 19, 'a', '2121', '2022-10-13', 'K', '1BC0A', '8', '16024', '18004', 'Basri R', 'SKKH Disnak', 'Buku Vaksin', 'Hasil Uji Lab ELISA Rabies', '', '0', '0', '0', '0', '2', '1', 'putih - hitam - oranye', 'kondisi tidak menunjukkan gejala klinis penyakit HPHK', 'a', '1', 'kondisi sehat secara klinis', '38', '120', '39', '1', 'merah muda', 'a', 'tidak ada lesi', NULL, '1', '1', '1', '1', '1', '1', '1', 'diag2', 'kesim2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-13 01:51:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(25, 13, 20, 'a', '1416', '2022-10-13', 'I', '1BC0A', '4', 'SG', '16020', 'Yusep RV', 'Health Certificate', 'Rekomendasi Otoritas Veteriner', 'Hasil Uji Laboratorium', '', '0', '0', '0', '0', '1', '1', 'abu-abu', 'kondisi tidak menunjukkan gejala klinis penyakit', 'a', '1', 'secara umum menunjukkan kondisi relatif stres sehingga perlu pemeriksaan lebih lanjut.', '38', '120', '38', '1', 'merah muda', 'a', 'tidak ada lesi', NULL, '1', '1', '1', '1', '1', '1', '1', 'diag1 puioyu', 'kesm1 dfhdfh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-13 04:44:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(25, 18, 21, 'a', '4545', '2022-10-15', 'K', '-', NULL, '16006', '17002', 'Made', '', '', '', '', '0', '0', '0', '0', '0', '-', '', '', 'e', '0', '', '', '', NULL, NULL, 'merah muda', NULL, NULL, NULL, '0', '', '0', '0', '0', '0', '0', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-15 01:56:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(25, 18, 22, 'a', '3434', '2022-10-14', 'M', '1AB1A', '24', '19022', '16015', 'Bram', 'KH-11', 'SV', '', '', '0', '0', '0', '0', '3', '3', 'hitam dan putih', 'hewan aktif bergerak', 'a', '0', '', '38,8', '80', '24', '1', 'merah muda', 'a', 'tidak ada lesi', 'fungsi lokomosi tidak baik', '1', '1', '1', '1', '1', '1', '1', 'Hewan sehat', 'KH-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-15 01:58:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(25, 13, 23, 'a', '3232', '2022-10-17', 'K', '1BC0A', '2', '16000', '18004', 'Lalu Martadinata', 'SKKH', 'Hasil Laboratorium Elisa Rabies', '', '', '0', '0', '0', '0', '2', '1', 'Oranye', 'kondisi umum baik', 'a', '0', 'identitas warna masing sbb:\n1. oranye\n2. hitam - putih\n3. dst', '38', '120', '21314235', '1', 'merah muda', 'a', 'tidak ada lesi', 'asdfg test', '1', '1', '1', '1', '1', '1', '1', 'oke deh', 'terserah aja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-17 03:18:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(25, 18, 24, 'a', '567', '2022-10-19', 'K', '1AE1A', '2', '16010', '16006', 'Ahmad', 'Surat Pernyataan Penggunaan', '', '', '', '0', '0', '0', '0', '2', '1', 'Hitam, hijau, oranye', 'Ayam bergerak ktif', 'a', '0', 'Terdapat laserasi pada bagian tungkai sebelah kanan', '41,5', '-', '-', '1', 'merah muda', 'a', '-', 'laserasi tungkai kanan', '1', '1', '1', '1', '1', '1', '1', 'Tidak menunjukkan gejala HPHK', 'KH-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-19 01:25:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(32, 19, 25, 'a', '987', '2022-10-19', 'I', '1AA1A', NULL, 'AU', '16036', 'santosa agrindo, PT', '', '', '', '', '0', '0', '0', '0', '', '-', '', '', 'e', '0', '', '', '', NULL, NULL, 'merah muda', NULL, NULL, '', '', '', '', '0', 'm', 'b', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-19 11:34:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
