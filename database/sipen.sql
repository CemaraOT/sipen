-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2016 pada 12.39
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('123', '123'),
('admin', 'adminweb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `id_kategori`, `judul`, `deskripsi`, `sumber`, `gambar`, `tgl_post`) VALUES
(3, 1, 'Diterjang Banjir, Aceh Tetap Jalankan Program Tanam Padi', 'Pemerintah terus mendorong terwujudnya swasembada beras. Meskipun terjadi musibah gempa di Pidie Jaya, Biereun dan Pidie serta banjir di Singkil, Aceh Barat, Aceh Jaya, pemerintah tetap menjalankan program percepatan tanam padi di Aceh. <br/><br/>\r\n\r\nStaf Ahli Menteri Pertanian Mukti Sardjono menjelaskan, Aceh Jaya merupakan salah satu kabupaten yang luas tanamnya berhasil melebihi target pada musim tanam tahun ini. Melihat kenyataan tersebut Kementerian Pertanian pun semakin berkomitmen untuk terus membantu dengan memberikan bantuan baik berupa alat mesin pertanian dan sarana produksi lainnya.<br/><br/>\r\n\r\nSejauh ini, Aceh Jaya telah mendapat bantuan traktor roda dua 49 unit, traktor roda empat 1 unit, pompa air 7 unit, hands prayer, dan bantuan benih. “Saya mengharapkan bantuan yang diberikan dapat menjadi pendorong peningkatan luas tanam dan produksi padi sehingga dapat meningkatkan pendapatan petani,” kata Mukti seperti dikutip dari keterangan tertulis, Jumat (16/12/2016).', 'liputan6.com', 'gambar_3.jpg', '2016-12-16'),
(6, 2, 'Berita Bencana Hari Ini: Tanah Longsor di Lebak – Banten Dua Warga Tewas Tertimpa Bangunan !', 'Dari kabar yang banyak beredar, peristiwa tanah longsor tersebut terjadi setelah para korban sedang berada di dalam rumah mereka. Dengan tiba-tiba tanah yang berada di tebing depan rumah salah seorang warga yang bernama Muchtar dan Sanan mengalami longsor dan menimpa kedua bangunan rumah tersebut, sehingga para korban tidak sempat untuk menyelamatkan diri mereka.<br/><br/>\r\n\r\nTanah longsor itu sendiri terjadi sekitar pukul 13.15 WIB, pada saat itu juga sedang terjadi hujan deras. Alhasil, membuat Muchtar 54 tahun dan Rika 16 tahun (anak keduanya), meninggal akibat tertimpa reruntuhan bangunan dan tanah longsor.<br/><br/>\r\n\r\nSedangkan Ali (28), anak pertama Muchtar mengalami patah tulang dibagian punggung. Sementara  Mintarsih, 48, alias Mimin isteri Muchtar ditemukan dalam kondisi kritis dengan luka disekujur tubuhnya. Dua korban kritis langsung dilarikan ke Puskesmas Kecamatan Cilograng.', 'smeaker.com', 'gambar_6.jpg', '2016-12-16'),
(7, 1, 'Banjir Melanda Kota Mataram ', 'REPUBLIKA.CO.ID, MATARAM -- Hujan deras yang terjadi di Kota Mataram sejak sore mengakibatkan sejumlah banjir di beberapa titik. Berdasarkan laporan dari Badan Penanggulangan Bencana Daerah (BPBD) Provinsi NTB, kondisi banjir meliputi sejumlah lokasi seperti Wilayah Kekalik Jaya, Monjok, perempatan Bank Indonesia, depan SMA 5. Banjir juga membuat satu rumah di Karang Sukun terendam.<br/><br/>\r\n\r\nJalan Panji Tilar karena saluran macet irigasi dan tanggul jebol, air sudah masuk ke rumah penduduk ketinggian air sepinggang orang dewasa, 40 rumah terendam. bunyi laporan BPBD NTB yang diterima Republika.co.id,  Rabu (14/12) malam.<br/><br/>\r\n\r\nPerumahan BTN sweta indah di Jalan Adelweis, Anggrek, Cempaka, Sakura juga mengalami banjir dengan ketinggian air sepinggang orang dewasa. Pantauan Republika, jalan masuk ke Kekalik Jaya ditutup untuk kendaraan roda empat. Hingga pukul 22.47 Wita, banjir juga masih nampak terlihat di Kekalik Jaya seperti Jalan Swadaya, dan Jalan Swasembada.', 'republika.co.id', 'gambar_7.jpg', '2016-12-16'),
(8, 3, 'Gempa dini hari, Aceh dibangunkan dalam kepanikan', 'Rabu (7/12/2016) dini hari, wilayah Kabupaten Pidie Jaya, Aceh diguncang gempa bumi tektonik. Laporan Badan Meteorologi, Klimatologi, dan Geofisika (BMKG) menyebut gempa terjadi sekitar pukul 05.03 WIB dengan kekuatan Magnitudo 6,4 dengan kedalaman 10 kilometer.<br/><br/>\r\n\r\nKepala BMKG Aceh, Eridawati, mengatakan gempa terjadi dengan kekuatan yang cukup besar. Namun, gempa terjadi di daratan, bukan lautan, sehingga potensi tsunami menjadi sangat kecil.<br/><br/>\r\n\r\nMeski tak berpotensi tsunami, gempa mengakibatkan belasan bangunan roboh, termasuk masjid. Dan bukan hanya di Pidie Jaya, sejumlah bangunan di Kabupaten Bieruen juga roboh akibat gempa.', 'beritagar.id', 'gambar_8.jpg', '2016-12-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_forum`
--

CREATE TABLE `tbl_forum` (
  `id_forum` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_forum`
--

INSERT INTO `tbl_forum` (`id_forum`, `id_kategori`, `judul`, `deskripsi`, `tgl_post`) VALUES
(1, 2, 'Tanah Longsor Terjang Blitar, Tukinun Hanya Bisa Lihat Rumahnya Terseret Tanah ke Dasar Jurang', 'Hujan deras yang mengguyur Kabupaten Blitar mengakibatkan tanah longsor di Dusun Sumberjo, Desa Olak-alen, Kecamatan Selorejo, Kabupaten Blitar, Jumat (2/12/2016) dini hari. Dua terseret tanah longsor dan ambruk ke jurang sedalam 12 meter.<br/><br/>\r\n\r\nTidak ada korban jiwa dalam kejadian itu. Seluruh penghuni sudah mengungsi sehari sebelum kejadian. Sebab, saat itu tanah di lokasi sudah bergerak.<br/><br/>\r\n\r\nGerakan tanah itu mengakibatkan banyak tembok rumah warga retak. Warga yang ketakutan memilih mengungsi.<br/><br/>\r\n\r\nTanah longsor itu melanda rumah milik Tukinun (42), Samuri (52), Diki (22), Solikin (45), Yanto (60), Katinem (55), Endang (55), Ratemi (70), dan Sri Minten (47). Bahkan rumah Tukinun dan Samuri terseret tanah longsor hingga ambruk ke dasar jurang.<br/><br/>\r\n\r\nSampai saat ini dua rumah itu masih ada di dasar jurang. Warga belum berani membersihkan akibat hujan masih mengguyurnya. Namun dua warga itu sudah mengemasi perabotan rumahnya.<br/><br/>\r\n\r\n“Kejadian itu bersamaan hujan deras selama tiga hari dan tiga malam,” ujar Tukinun.<br/><br/>\r\n\r\nMenurutnya, warga sudah mengungsi sejak Kamis (1/12/2016) siang. Rencananya para warga akan menurunkan genteng rumah pada Jumat siang.<br/><br/>\r\n\r\n“Untung kami dan keluarga sudah mengungsi. Kalau tidak, mungkin kami kena bencana juga,” paparnya.<br/><br/>\r\n\r\nTukinun masih belum tidur saat rumahnya dilanda tanah longsor. Dia hanya bisa melihat rumahnya terseret tanah longsor. Awalnya tanah longsor di pekarangan rumah. Tidak lama kemudian rumahnya ambruk ke jurang.<br/><br/>\r\n\r\nBencana itu juga menyebabkan jalan desa terputus. Kini jalan menuju jalan raya Blitar-Malang itu tak bisa dilewati karena hanya tersisa sekitar 1 meter.<br/><br/>\r\n\r\n“Itu juga terkena tanah gerak, kemudian tergerus air hujan sehingga longsor,” kata Saifudin Zuhri, Kades Olak-alen.<br/><br/>', '2016-12-16'),
(3, 6, 'Kalau Gunung Ini Meletus, Tsunami Setinggi 100 Meter Akan Menyapu Bumi', 'Terletak di pulau 80 mil dari Tenerife, pulau terbesar di Canary Islands, para ahli sudah lama mengkhawatirkan letusan berikutnya dari Cumbre Vieja dapat menyebabkan gunung berapi itu runtuh.\r\n\r\nRuntuhnya gunung merapi itu akan mengirimkan miliaran ton bebatuan ke laut di bawahnya. Bahkan mampu menciptakan mega tsunami setinggi 100 meter dengan kecepatan daya terjang setara dengan pesawat jet tempur, kira-kira 800 kilometer per jam.\r\n\r\nPada saat gunung itu runtuh, gelombang tsunami yang ditimbulkannya akan mencapai pantai timur Amerika dan bagian selatan Inggris. Bukan cuma itu saja, pantai Amerika Selatan, Afrika Barat dan Eropa Barat juga akan mengalami nasib yang sama.<br/><br/>\r\n\r\nGunung setinggi 2.000 meter itu terakhir kali meletus pada tahun 1949, dan sampai saat ini gunung ini dapat meletus kapan saja.<br/><br/>\r\n\r\nProfesor McGuire dari Benfield Grieg Hazard Research Centre mengatakan kepada BBC, " Pasalnya, seluruh gunung akan runtuh ke dalam laut, dan runtuhan itu akan menghancurkan margin Samudera Atlantik.<br/><br/>\r\n\r\nPara ahli tidak dapat mengatakan dengan pasti kapan letusan berikutnya akan terjadi. Namun banyak yang setuju bahwa letusan itu hampir dipastikan akan terjadi dalam beberapa ribu tahun ke depan.<br/><br/>', '2016-12-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_forum_komentar`
--

CREATE TABLE `tbl_forum_komentar` (
  `id_forum_komentar` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_forum_komentar`
--

INSERT INTO `tbl_forum_komentar` (`id_forum_komentar`, `id_forum`, `id_member`, `komentar`, `tgl_komentar`) VALUES
(1, 1, 1, 'Semoga tidak terjadi hal hal yang tidak diinginkan disana .. Amin..', '2016-12-06'),
(6, 3, 5, 'Wow, menakjubkan !', '2016-12-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Banjir'),
(2, 'Tanah Longsor'),
(3, 'Gempa Bumi'),
(4, 'Angin Puting Beliung'),
(5, 'Kebakaran'),
(6, 'Gunung Meletus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `jenis_kelamin` enum('0','1') NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama`, `alamat`, `email`, `password`, `no_telp`, `jenis_kelamin`, `tgl_lahir`) VALUES
(1, 'Luki Rahayu', 'Jl. Jeruk No 11, Bogor', 'luki@mail.com', 'pengguna', '087888283821', '0', '1995-02-25'),
(5, 'Teguh', 'Jl. Mawar no 11 bogor', 'teguh@mail.com', 'pengguna', '08786625341', '1', '2012-09-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peta`
--

CREATE TABLE `tbl_peta` (
  `id_peta` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peta`
--

INSERT INTO `tbl_peta` (`id_peta`, `id_kategori`, `judul`, `deskripsi`, `sumber`, `gambar`) VALUES
(3, 1, 'Potensi Banjir Kalimantan Barat', 'PONTIANAK - Badan Meteorologi, Klimatologi dan Geofisika (BMKG) Pontianak memetakan sejumlah daerah di Kalimantan Barat (Kalbar) yang rawan banjir selama bulan November. Hal ini perlu guna mengantisipasi terjadinya bencana yang lebih besar.<br/><br/>\r\n\r\n"Sampai tiga hari kedepan, wilayah Kalbar masih berpotensi hujan dengan intensitas ringan hingga sedang, yang terjadi merata di seluruh Kalbar. Bahkan ada beberapa daerah yang berpotensi terjadinya banjir, berdasarkan pemetaan potensi banjir yang dilakukan BMKG Siantan," kata prakirawan BMKG Pontianak, Deby, Kamis (24/11/2016).', 'BMKG Kalimantan Barat', 'gambar_3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_relawan`
--

CREATE TABLE `tbl_relawan` (
  `id_relawan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `jenis_kelamin` enum('0','1') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_relawan`
--

INSERT INTO `tbl_relawan` (`id_relawan`, `nama`, `alamat`, `email`, `no_telp`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `kota`) VALUES
(1, 'Budi Nugraha', 'Jl. Manggis No 3, Bekasi', 'budi@mail.com', '089972636212', '1', 'Bekasi', '2015-12-13', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tips`
--

CREATE TABLE `tbl_tips` (
  `id_tips` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tips`
--

INSERT INTO `tbl_tips` (`id_tips`, `id_kategori`, `judul`, `deskripsi`, `sumber`, `gambar`, `tgl_post`) VALUES
(3, 1, 'Antisipasi Bencana BPBD Sekadau Siaga', 'Sekadau – Penetapan status siaga darurat bencana oleh pemerintah daerah Kabupaten Sekadau telah diberlakukan mulai 28 November 2016 hingga 31 Maret 2017 mendatang melalui SK Bupati Nomor 360/375/BPBD-PB/2016. Berbagai upaya dilakukan pemerintah untuk mengantisipasi dini terjadinya bencana banjir, angin puting beliung dan longsor (Bantingsor).<br/><br/>\r\n\r\nKepala Pelaksana Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten Sekadau Akhmad Suryadi mengatakan, upaya-upaya yang dilakukan setelah penetapan status siaga darurat bencana bantingsor diantaranya memetakan daerah potensi bencana banjir, angin puting beliung dan longsor (Bantingsor). Selain itu, kata dia, menginformasikan kepada masyarakat mengenai potensi bencana yang ada di daerahnya.<br/><br/>\r\n\r\nLangkah lain yang dilakukan, kata dia, Bupati juga mengintruksikan tim satgas kabupaten hingga kecamatan untuk melakukan antisipasi dini bencana. Pihak BPBD, lanjut Akhmad, menyiapkan buffer stok yang disiagakan dan jika dalam kondisi darurat siap disalurkan.<br/><br/>\r\n\r\n“Dinas teknis ikut serta untuk melakukan upaya pencegahan dan tanggap darurat bencana,” ujarnya pada deliknews.com,kemarin. “Buffer stok saat ini full,” sambungnya.<br/><br/>\r\n\r\nUntuk pemetaan daerah bencana, kata Akhmad, banjir berpotensi terjadi diseluruh kecamatan yang ada di Kabupaten Sekadau. Ia mengatakan, sedangkan untuk angin puting beliung tidak bisa diprediksi. “Puting beliung itu tergantung, tapi bisa dilihat melalui arah angin,” kata dia.<br/><br/>\r\n\r\nAkhmad mengatakan, untuk bencana longsor pontensi besar bisa terjadi di sepanjang aliran Sungai Sekadau dan Sungai Kapuas. Apalagi, kata dia, Kecamatan Sekadau Hilir kondisi di daerah aliran sungai Sekadau dan Sungai Kapuas terjadi penurunan tanah.<br/><br/>\r\n\r\n“Hampir sepanjang jalan tepian Sekadau dan Sungai Kapuas berpotensi terjadinya longsor,” ungkapnya.<br/><br/>\r\n\r\nUntuk itu, kata Akhmad, pihaknya terus mensosialisasikan kepada masyarakat mengenai bahaya bencana. Ia pun mengimbau agar masyarakat selalu waspada terhadap kemungkinan terjadinya bencana, terutama didaerah yang berpotensi bencana.<br/><br/>\r\n\r\n“Bila terjadi bencana, sedini mungkin masyarakat melaporkan kepada kami. Kontak BPBD standby 24 jam,” pungkasnya.<br/><br/>\r\n\r\nSementara itu, Wakil Ketua DPRD Kabupaten Sekadau Handi berharap, status siaga darurat bantingsor tersebut harus diperhatikan oleh intansi terakit. Selain itu, kata dia, kewaspadaan pun harus ditingkatkan.<br/><br/>\r\n\r\n“Mengenali dan memetakan daerah yang berpotensi besar terjadi bencana, seperti banjir, longsor dan angin puting beliung harus dilakukan,” kata Politisi Partai Gerindra itu.<br/><br/>\r\n\r\nSelain itu, kata dia, kesiapan personel serta peralatan yang dibutuhkan untuk penanganan bencana juga harus disiapkan. “Personel BPBD, Tagana serta personel lainnya harus standby. Pastikan buffer stok siap sehingga jika terjadi sewaktu-waktu terjadi bencana langsung disalurkan,” tukasnya. ', 'detiknews.com', 'gambar_3.jpg', '2016-12-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_forum_komentar`
--
ALTER TABLE `tbl_forum_komentar`
  ADD PRIMARY KEY (`id_forum_komentar`),
  ADD KEY `id_forum` (`id_forum`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_peta`
--
ALTER TABLE `tbl_peta`
  ADD PRIMARY KEY (`id_peta`);

--
-- Indexes for table `tbl_relawan`
--
ALTER TABLE `tbl_relawan`
  ADD PRIMARY KEY (`id_relawan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  ADD PRIMARY KEY (`id_tips`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_forum_komentar`
--
ALTER TABLE `tbl_forum_komentar`
  MODIFY `id_forum_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_peta`
--
ALTER TABLE `tbl_peta`
  MODIFY `id_peta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_relawan`
--
ALTER TABLE `tbl_relawan`
  MODIFY `id_relawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  MODIFY `id_tips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
