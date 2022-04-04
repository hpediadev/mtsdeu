-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2021 pada 05.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tartikel_md`
--

CREATE TABLE `tartikel_md` (
  `IDARTIKEL` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `KATEGORI` char(100) NOT NULL,
  `JUDUL` char(100) DEFAULT NULL,
  `GAMBAR` char(100) DEFAULT NULL,
  `SUB` char(200) NOT NULL,
  `URAIAN` text DEFAULT NULL,
  `TANGGALARTIKEL` datetime DEFAULT NULL,
  `STATUSARTIKEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tartikel_md`
--
-- --------------------------------------------------------

--
-- Struktur dari tabel `textra_md`
--

CREATE TABLE `textra_md` (
  `IDEXTRA` char(110) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `NAMAEXTRA` char(100) DEFAULT NULL,
  `URAIANEXTRA` text DEFAULT NULL,
  `MOTOEXTRA` text DEFAULT NULL,
  `GAMBAREXTRA` char(100) DEFAULT NULL,
  `STATUSEXTRA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `textra_md`
--
-- --------------------------------------------------------

--
-- Struktur dari tabel `tfakultas_md`
--

CREATE TABLE `tfakultas_md` (
  `IDFAKULTAS` char(50) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `NAMAFAKULTAS` char(10) DEFAULT NULL,
  `GAMBAR` char(100) DEFAULT NULL,
  `STATUSFAKULTAS` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tfakultas_md`
--

INSERT INTO `tfakultas_md` (`IDFAKULTAS`, `USERNAME`, `NAMAFAKULTAS`, `GAMBAR`, `STATUSFAKULTAS`) VALUES
('1', 'admin', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tguru_md`
--

CREATE TABLE `tguru_md` (
  `IDGURU` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `NIG` char(100) DEFAULT NULL,
  `NIK` char(100) DEFAULT NULL,
  `NAMAGURU` char(100) DEFAULT NULL,
  `JKGURU` char(100) DEFAULT NULL,
  `GAMBARGURU` char(100) DEFAULT NULL,
  `STATUSGURU` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tinfo_md`
--

CREATE TABLE `tinfo_md` (
  `IDINFO` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `JUDULINFO` char(100) DEFAULT NULL,
  `TANGGALINFO` datetime DEFAULT NULL,
  `JENISINFO` int(11) DEFAULT NULL,
  `URAIANINFO` text DEFAULT NULL,
  `STATUSINFO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkomentar_md`
--

CREATE TABLE `tkomentar_md` (
  `IDKOMENTAR` int(11) NOT NULL,
  `IDARTIKEL` int(11) DEFAULT NULL,
  `NAMA` char(100) DEFAULT NULL,
  `KOMENTAR` text DEFAULT NULL,
  `BINTANG` int(11) DEFAULT NULL,
  `GAMBARKOMENTAR` char(100) DEFAULT NULL,
  `TANGGALKOMENTAR` datetime DEFAULT NULL,
  `STATUSKOMENTAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tlembaga_md`
--

CREATE TABLE `tlembaga_md` (
  `NPSN` char(100) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `NAMALEMBAGA` char(100) DEFAULT NULL,
  `JENISLEMBAGA` char(100) DEFAULT NULL,
  `EMAILLEMBAGA` char(100) DEFAULT NULL,
  `ALAMATLEMBAGA` char(100) DEFAULT NULL,
  `TELP` char(100) DEFAULT NULL,
  `FAX` char(100) DEFAULT NULL,
  `HP` char(100) DEFAULT NULL,
  `FACEBOOK` char(100) DEFAULT NULL,
  `TWITTER` char(100) DEFAULT NULL,
  `INSTAGRAM` char(100) DEFAULT NULL,
  `YOUTUBE` char(100) DEFAULT NULL,
  `KEPALA` char(100) DEFAULT NULL,
  `LOGO` char(100) DEFAULT NULL,
  `WARNA1` varchar(10) NOT NULL,
  `WARNA2` varchar(10) NOT NULL,
  `STATUSLEMBAGA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tlembaga_md`
--

INSERT INTO `tlembaga_md` (`NPSN`, `USERNAME`, `NAMALEMBAGA`, `JENISLEMBAGA`, `EMAILLEMBAGA`, `ALAMATLEMBAGA`, `TELP`, `FAX`, `HP`, `FACEBOOK`, `TWITTER`, `INSTAGRAM`, `YOUTUBE`, `KEPALA`, `LOGO`, `WARNA1`, `WARNA2`, `STATUSLEMBAGA`) VALUES
('8994897', 'admin', 'MA Al-Hasanah', 'SMA', 'smkmediadigital@gmail.com', 'Jalan Sumber Taman Waru Pamekasan', '(0324) 11093822', '-', '08774664442', 'https://facebook.com/smkputrabangsawaru', 'http//:twitter.com/mediadigital', 'http//:instagram.com/mediadigital', 'http//:youtube.com/mediadigital', 'HASIN, M.Kom', '20210317143251-logo-sekolah.png', '', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tprodi_md`
--

CREATE TABLE `tprodi_md` (
  `IDPRODI` char(50) NOT NULL,
  `IDFAKULTAS` char(50) DEFAULT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `NAMAPRODI` char(100) DEFAULT NULL,
  `URAIAN` text NOT NULL,
  `KOMPETENSI` text NOT NULL,
  `PROFESI` text NOT NULL,
  `PRESTASI` text NOT NULL,
  `GAMBAR` char(100) DEFAULT NULL,
  `STATUSPRODI` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tprodi_md`
--

INSERT INTO `tprodi_md` (`IDPRODI`, `IDFAKULTAS`, `USERNAME`, `NAMAPRODI`, `URAIAN`, `KOMPETENSI`, `PROFESI`, `PRESTASI`, `GAMBAR`, `STATUSPRODI`) VALUES
('IPS', '1', NULL, 'ILMU PENGETAHUAN SOSIAL', '<table cellpadding=\"10px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Nama Sekolah</td>\r\n			<td>SMK Putra Bangsa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>No. Statistik Sekolah</td>\r\n			<td>321052003011</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>Tipe Sekolah</td>\r\n			<td>Swasta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td>Alamat Sekolah</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>Desa</td>\r\n			<td>Waru Barat</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>Kecamatan</td>\r\n			<td>Waru</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7</td>\r\n			<td>Kabupaten</td>\r\n			<td>Pamekasan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8</td>\r\n			<td>Provinsi</td>\r\n			<td>Jawa Timur</td>\r\n		</tr>\r\n		<tr>\r\n			<td>9</td>\r\n			<td>Telepon/HP/Fax</td>\r\n			<td>0324 435952</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10</td>\r\n			<td>Nilai Akreditasi Sekolah</td>\r\n			<td>Terakreditasi B</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11</td>\r\n			<td>Luas Lahan, dan jumlah rombel</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>12</td>\r\n			<td>Luas Lahan</td>\r\n			<td>9000m2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>13</td>\r\n			<td>jumlah ruang pada lantai 1</td>\r\n			<td>7</td>\r\n		</tr>\r\n		<tr>\r\n			<td>14</td>\r\n			<td>jumlah ruang pada lantai 2</td>\r\n			<td>5</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', '', '2021-03-14 03-36-30-foto-slide.jpg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tprofil_md`
--

CREATE TABLE `tprofil_md` (
  `IDPROFIL` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `NAMAPROFIL` char(100) DEFAULT NULL,
  `DATAPROFIL` char(100) DEFAULT NULL,
  `STATUSPROFIL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tprofil_md`
--

INSERT INTO `tprofil_md` (`IDPROFIL`, `USERNAME`, `NAMAPROFIL`, `DATAPROFIL`, `STATUSPROFIL`) VALUES
(1, NULL, 'Nama Sekolah', 'SMK Putra Bangsa', 1),
(2, NULL, 'No. Statistik Sekolah', '321052003011', 1),
(3, NULL, 'Tipe Sekolah', 'Swasta', 1),
(4, NULL, 'Alamat Sekolah', '', 1),
(5, NULL, 'Desa', 'Waru Barat', 1),
(6, NULL, 'Kecamatan', 'Waru', 1),
(7, NULL, 'Kabupaten', 'Pamekasan', 1),
(8, NULL, 'Provinsi', 'Jawa Timur', 1),
(9, NULL, 'Telepon/HP/Fax', '0324 435952', 1),
(10, NULL, 'Nilai Akreditasi Sekolah', 'Terakreditasi B', 1),
(11, NULL, 'Luas Lahan, dan jumlah rombel', '', 1),
(12, NULL, 'Luas Lahan', '9000m2', 1),
(13, NULL, 'jumlah ruang pada lantai 1', '7', 1),
(14, NULL, 'jumlah ruang pada lantai 2', '5', 1),
(15, NULL, 'jumlah ruang pada lantai 3', '5', 1),

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsaran_md`
--

CREATE TABLE `tsaran_md` (
  `IDSARAN` int(11) NOT NULL,
  `NAMA` char(100) DEFAULT NULL,
  `EMAIL` text DEFAULT NULL,
  `SUBJECT` char(100) DEFAULT NULL,
  `SARAN` text DEFAULT NULL,
  `TANGGALSARAN` datetime DEFAULT NULL,
  `STATUSSARAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tsaran_md`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tsejarah_md`
--

CREATE TABLE `tsejarah_md` (
  `IDSEJARAH` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `JUDUL` char(100) DEFAULT NULL,
  `GAMBARSEJARAH` char(100) DEFAULT NULL,
  `URAIANSEJARAH` text DEFAULT NULL,
  `STATUSSEJARAH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tsejarah_md`
--
-- --------------------------------------------------------

--
-- Struktur dari tabel `tslide_md`
--

CREATE TABLE `tslide_md` (
  `IDSLIDE` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `JUDUL` char(100) DEFAULT NULL,
  `GAMBAR` char(100) DEFAULT NULL,
  `URAIAN` text DEFAULT NULL,
  `TANGGALSLIDE` datetime DEFAULT NULL,
  `STATUSSLIDE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tslide_md`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tstruktur_md`
--

CREATE TABLE `tstruktur_md` (
  `IDSTRUKTUR` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `STRUKTUR` char(100) DEFAULT NULL,
  `PERIODE` char(100) DEFAULT NULL,
  `STATUSSTRUKTUR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tstruktur_md`
--
-- --------------------------------------------------------

--
-- Struktur dari tabel `ttags_md`
--

CREATE TABLE `ttags_md` (
  `IDTAG` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `JUDULLINK` char(100) DEFAULT NULL,
  `TAMPILLINK` char(100) DEFAULT NULL,
  `LINK` char(200) DEFAULT NULL,
  `STATUSLINK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ttags_md`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttransaksi_md`
--

CREATE TABLE `ttransaksi_md` (
  `ID` int(11) NOT NULL,
  `TANGGAL` datetime DEFAULT NULL,
  `ASAL` text DEFAULT NULL,
  `BARU` text DEFAULT NULL,
  `STATUSTR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tusr_md`
--

CREATE TABLE `tusr_md` (
  `USERNAME` char(100) NOT NULL,
  `PASSWORD` char(100) DEFAULT NULL,
  `NAMA` char(100) DEFAULT NULL,
  `LEVEL` int(11) DEFAULT NULL,
  `STATUSLOGIN` datetime DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tusr_md`
--

INSERT INTO `tusr_md` (`USERNAME`, `PASSWORD`, `NAMA`, `LEVEL`, `STATUSLOGIN`, `STATUS`) VALUES
('admin', '$2y$10$RH0MvwBC7JhlxG0Kqj0k1eXnID6szkMWqY3fpVbinFcWtqkAHfG1S', 'PKBM PUTRA BALAWA', 1, '2021-03-18 10:43:37', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tvisimisi_md`
--

CREATE TABLE `tvisimisi_md` (
  `IDVISIMISI` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `VISIMISI` text DEFAULT NULL,
  `STATUSVISIMISI` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tvisimisi_md`
--

INSERT INTO `tvisimisi_md` (`IDVISIMISI`, `USERNAME`, `VISIMISI`, `STATUSVISIMISI`) VALUES
(1, NULL, '<p align=\"justify\"><strong>VISI</strong></p><br>\r\n\r\n<p align=\"justify\">Menjadi Perguruan Tinggi Unggul dan berdaya saing di Tingkat Asia Tahun 2045 yang berkarakter Islam Ahlus Sunnah Wal-jamaah</p><br>\r\n\r\n<p align=\"justify\"><strong>MISI</strong></p><br>\r\n\r\n<ol>\r\n	<li>Menyelenggarakan pendidikan akademik, pendidikan vokasi, pendidikan profesi dan pendidikan spesialis serta mengembangkan program-program studi yang bermutu dan menjadi rujukan masyarakat Asia dengan tata kelola pendidikan yang amanah, baik dan terbuka&nbsp;<em>(open and good governance university)</em>.</li>\r\n	<li>Melaksanakan penelitian dan pengabdian masyarakat yang unggul dan bereputasi Asia;</li>\r\n	<li>Meningkatkan kualitas tenaga pendidik dan tenaga kependidikan yang kompeten sesuai dengan kebutuhan dan pengembangan kelembagaan;</li>\r\n	<li>Mencetak lulusan yang memiliki kemantapan aqidah, keagungan akhlak, profesional dan kemampuan teknopreneur berkarakter Islam Ahulussunnah Wal-Jamaah.</li>\r\n	<li>Melakukan pengembangan dan penyebarluasan ilmu pengetahuan, teknologi,seni, dan budaya serta meningkatkan taraf kehidupan masyarakat.</li>\r\n	<li>Terwujudnya perguruan tinggi yang memiliki tata kelola yang baik, bersih, dan akuntabel dalam pelaksanaan otonomi perguruan tinggi.</li>\r\n	<li>Menghasilkan sumber daya manusia yang beriman dan bertaqwa kepada Allah SWT, berahlak mulia, memiliki wawasan luas, memiliki kompetensi, dan berpartisipasi dalam pembangunan dan hidup ditengah-tengah masyarakat dengan menerapkan nilai-nilai islam ahlussunnah wal jamaah;</li>\r\n	<li>Terwujudnya kualitas tenaga pendidik dan tenaga kependidikan yang kompeten sesuai dengan kebutuhan dan pengembangan kelembagaan;</li>\r\n	<li>Menghasilkan lulusan berkualitas, professional, bersikap ilmiah, menguasai ilmu dan teknologi, berakhlakul karimah, beriman dan bertakwa, serta berprilaku Islam Ahlussunnah Wal-Jama&rsquo;ah.</li>\r\n	<li>Menerapkan ilmu pengetahuan, penemuan, teknologi yang mutakhir, seni, budaya yang dapat dipertanggungjawabkan&nbsp; untuk meningkatkan taraf hidup masyarakat</li>\r\n</ol>\r\n\r\n<p align=\"justify\"><strong>Tujuan UIM</strong></p><br>\r\n\r\n<p align=\"justify\">Berdasarkan visi dan misi yang telah disebutkan, pada tahun 2020 Universitas Islam Madura bertekad:</p><br>\r\n\r\n<ol>\r\n	<li>Terwujudnya perguruan tinggi yang memiliki tata kelola yang baik, bersih, dan akuntabel dalam pelaksanaan otonomi perguruan tinggi.</li>\r\n	<li>Menghasilkan sumber daya manusia yang beriman dan bertaqwa kepada Allah SWT, berahlak mulia, memiliki wawasan luas, memiliki kompetensi, dan berpartisipasi dalam pembangunan dan hidup ditengah-tengah masyarakat dengan menerapkan nilai-nilai islam ahlussunnah wal jamaah;</li>\r\n	<li>Terwujudnya kualitas tenaga pendidik dan tenaga kependidikan yang kompeten sesuai dengan kebutuhan dan pengembangan kelembagaan;</li>\r\n	<li>Menghasilkan lulusan berkualitas, professional, bersikap ilmiah, menguasai ilmu dan teknologi, berakhlakul karimah, beriman dan bertakwa, serta berprilaku Islam Ahlussunnah Wal-Jama&rsquo;ah.</li>\r\n	<li>Menerapkan ilmu pengetahuan, penemuan, teknologi yang mutakhir, seni, budaya yang dapat dipertanggungjawabkan untuk meningkatkan taraf hidup masyarakat</li>\r\n</ol>\r\n', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `twalikelas_md`
--

CREATE TABLE `twalikelas_md` (
  `IDWALIKELAS` int(11) NOT NULL,
  `USERNAME` char(100) DEFAULT NULL,
  `IDGURU` int(11) DEFAULT NULL,
  `URAIAN` text DEFAULT NULL,
  `STATUSWALIKELAS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tartikel_md`
--
ALTER TABLE `tartikel_md`
  ADD PRIMARY KEY (`IDARTIKEL`),
  ADD KEY `FK_RELATIONSHIP_1` (`USERNAME`);

--
-- Indeks untuk tabel `textra_md`
--
ALTER TABLE `textra_md`
  ADD PRIMARY KEY (`IDEXTRA`),
  ADD KEY `FK_RELATIONSHIP_2` (`USERNAME`);

--
-- Indeks untuk tabel `tfakultas_md`
--
ALTER TABLE `tfakultas_md`
  ADD PRIMARY KEY (`IDFAKULTAS`),
  ADD KEY `FK_RELATIONSHIP_3` (`USERNAME`),

--
-- Indeks untuk tabel `tguru_md`
--
ALTER TABLE `tguru_md`
  ADD PRIMARY KEY (`IDGURU`),
  ADD KEY `FK_RELATIONSHIP_4` (`USERNAME`);

--
-- Indeks untuk tabel `tinfo_md`
--
ALTER TABLE `tinfo_md`
  ADD PRIMARY KEY (`IDINFO`),
  ADD KEY `FK_RELATIONSHIP_5` (`USERNAME`);

--
-- Indeks untuk tabel `tkomentar_md`
--
ALTER TABLE `tkomentar_md`
  ADD PRIMARY KEY (`IDKOMENTAR`),
  ADD KEY `FK_RELATIONSHIP_6` (`IDARTIKEL`);

--
-- Indeks untuk tabel `tlembaga_md`
--
ALTER TABLE `tlembaga_md`
  ADD PRIMARY KEY (`NPSN`),
  ADD KEY `FK_RELATIONSHIP_7` (`USERNAME`);

--
-- Indeks untuk tabel `tprodi_md`
--
ALTER TABLE `tprodi_md`
  ADD PRIMARY KEY (`IDPRODI`),
  ADD KEY `IDFAKULTAS` (`IDFAKULTAS`);

--
-- Indeks untuk tabel `tprofil_md`
--
ALTER TABLE `tprofil_md`
  ADD PRIMARY KEY (`IDPROFIL`),
  ADD KEY `FK_RELATIONSHIP_8` (`USERNAME`);

--
-- Indeks untuk tabel `tsaran_md`
--
ALTER TABLE `tsaran_md`
  ADD PRIMARY KEY (`IDSARAN`);

--
-- Indeks untuk tabel `tsejarah_md`
--
ALTER TABLE `tsejarah_md`
  ADD PRIMARY KEY (`IDSEJARAH`),
  ADD KEY `FK_RELATIONSHIP_9` (`USERNAME`);

--
-- Indeks untuk tabel `tslide_md`
--
ALTER TABLE `tslide_md`
  ADD PRIMARY KEY (`IDSLIDE`);

--
-- Indeks untuk tabel `tstruktur_md`
--
ALTER TABLE `tstruktur_md`
  ADD PRIMARY KEY (`IDSTRUKTUR`),
  ADD KEY `FK_RELATIONSHIP_10` (`USERNAME`);

--
-- Indeks untuk tabel `ttags_md`
--
ALTER TABLE `ttags_md`
  ADD PRIMARY KEY (`IDTAG`),
  ADD KEY `FK_RELATIONSHIP_11` (`USERNAME`);

--
-- Indeks untuk tabel `tusr_md`
--
ALTER TABLE `tusr_md`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indeks untuk tabel `tvisimisi_md`
--
ALTER TABLE `tvisimisi_md`
  ADD PRIMARY KEY (`IDVISIMISI`),
  ADD KEY `FK_RELATIONSHIP_12` (`USERNAME`);

--
-- Indeks untuk tabel `twalikelas_md`
--
ALTER TABLE `twalikelas_md`
  ADD PRIMARY KEY (`IDWALIKELAS`),
  ADD KEY `FK_RELATIONSHIP_14` (`IDGURU`),
  ADD KEY `FK_RELATIONSHIP_13` (`USERNAME`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tinfo_md`
--
ALTER TABLE `tinfo_md`
  MODIFY `IDINFO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tkomentar_md`
--
ALTER TABLE `tkomentar_md`
  MODIFY `IDKOMENTAR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tprofil_md`
--
ALTER TABLE `tprofil_md`
  MODIFY `IDPROFIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tsaran_md`
--
ALTER TABLE `tsaran_md`
  MODIFY `IDSARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tsejarah_md`
--
ALTER TABLE `tsejarah_md`
  MODIFY `IDSEJARAH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tslide_md`
--
ALTER TABLE `tslide_md`
  MODIFY `IDSLIDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tstruktur_md`
--
ALTER TABLE `tstruktur_md`
  MODIFY `IDSTRUKTUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ttags_md`
--
ALTER TABLE `ttags_md`
  MODIFY `IDTAG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tvisimisi_md`
--
ALTER TABLE `tvisimisi_md`
  MODIFY `IDVISIMISI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tartikel_md`
--
ALTER TABLE `tartikel_md`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`USERNAME`) REFERENCES `tusr_md` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `textra_md`
--
ALTER TABLE `textra_md`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`USERNAME`) REFERENCES `tusr_md` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `tguru_md`
--
ALTER TABLE `tguru_md`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`USERNAME`) REFERENCES `tusr_md` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `tinfo_md`
--
ALTER TABLE `tinfo_md`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`USERNAME`) REFERENCES `tusr_md` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `tkomentar_md`
--
ALTER TABLE `tkomentar_md`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`IDARTIKEL`) REFERENCES `tartikel_md` (`IDARTIKEL`);

--
-- Ketidakleluasaan untuk tabel `tlembaga_md`
--
ALTER TABLE `tlembaga_md`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`USERNAME`) REFERENCES `tusr_md` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `tprodi_md`
--
ALTER TABLE `tprodi_md`
  ADD CONSTRAINT `tprodi_md_ibfk_1` FOREIGN KEY (`IDFAKULTAS`) REFERENCES `tfakultas_md` (`IDFAKULTAS`);

--
-- Ketidakleluasaan untuk tabel `tsejarah_md`
--
ALTER TABLE `tsejarah_md`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`USERNAME`) REFERENCES `tusr_md` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `ttags_md`
--
ALTER TABLE `ttags_md`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`USERNAME`) REFERENCES `tusr_md` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `twalikelas_md`
--
ALTER TABLE `twalikelas_md`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`IDGURU`) REFERENCES `tguru_md` (`IDGURU`),
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`USERNAME`) REFERENCES `tusr_md` (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
