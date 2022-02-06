-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2021 at 08:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_ice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_blog` varchar(64) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug_title` varchar(255) NOT NULL,
  `meta` text NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` enum('draft','post','delete','') NOT NULL,
  `create_ad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_ad` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id_blog`, `title`, `slug_title`, `meta`, `description`, `tags`, `id_kategori`, `id_sub`, `id_user`, `status`, `create_ad`, `update_ad`, `image`) VALUES
('608ef58acf166', 'cara membuat blog', 'cara-membuat-blog', 'abstrak dari blog', '<div class=\"app-sidebar__user\">\r\n<div>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n\r\n<ul>\r\n	<li><a class=\"app-menu__item active\" href=\"http://localhost/blog_ice/blog/dashboard.html\">Dashboard</a></li>\r\n	<li><a class=\"app-menu__item\" href=\"http://localhost/blog_ice/blog/add#\">Master Data</a>\r\n	<ul>\r\n		<li><a class=\"treeview-item\" href=\"http://localhost/blog_ice/kategori\">Kategori</a></li>\r\n		<li><a class=\"treeview-item\" href=\"http://localhost/blog_ice/sub\" rel=\"noopener\">Sub Kategori</a></li>\r\n		<li><a class=\"treeview-item\" href=\"http://localhost/blog_ice/slide\">Slide</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a class=\"app-menu__item\" href=\"http://localhost/blog_ice/kontent\">POST</a></li>\r\n	<li><a class=\"app-menu__item\" href=\"http://localhost/blog_ice/transaksi\">Transaksi</a></li>\r\n</ul>\r\n\r\n<div class=\"app-title\">\r\n<div>\r\n<h1>Data Table</h1>\r\n\r\n<p>Table to display analytical data effectively</p>\r\n</div>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>Tables</li>\r\n	<li><a href=\"http://localhost/blog_ice/blog\">Data Table</a></li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"tile\">\r\n<div class=\"tile-body\">\r\n<div class=\"table-responsive\">&nbsp;\r\n<div class=\"card mb-3\">\r\n<div class=\"card-header\">&nbsp;</div>\r\n\r\n<div class=\"card-body\">\r\n<form action=\"\" enctype=\"multipart/form-data\" method=\"post\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"form-group\">title <input name=\"title\" type=\"text\" /></div>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<div class=\"form-group\">meta <input name=\"meta\" type=\"text\" /></div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"form-group\">Deskripsi</div>\r\n</form>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 'tags', 1, 1, 2, 'draft', '2021-05-02 18:56:10', '2021-05-02 01:56:10', 'default.jpg'),
('60a7583049f89', 'Visi & Misi ICE-Institute', 'visi-misi-ice-institute', 'Visi & Misi ICE-Institute', '<p>Visi dan Misi</p>\r\n', 'Visi-Misi,VisiICE,ICE,IceInstitute', 6, 7, 2, 'post', '2021-05-21 06:50:28', '2021-05-21 06:50:28', '60a7583049f89.png'),
('60a758d6e439f', 'Tentang ICE Institute', 'tentang-ice-institute', 'Tentang ICE Institute', '<p>Tentang ICE Institute</p>\r\n', 'TentangICE,ICE,IceInstitute', 6, 8, 2, 'post', '2021-05-21 06:53:16', '2021-05-21 06:53:16', '60a758d6e439f.png'),
('60a759cae2c64', 'Penandatanganan Perjanjian Kerja Sama Universitas Terbuka dengan Perguruan Tinggi Mitra untuk Pengembangan ICE Institute', 'penandatanganan-perjanjian-kerja-sama-universitas-terbuka-dengan-perguruan-tinggi-mitra-untuk-pengembangan-ice-institute', 'Penandatanganan Perjanjian Kerja Sama Universitas Terbuka dengan Perguruan Tinggi Mitra untuk Pengembangan ICE Institute', '<p>Jakarta &ndash; Universitas Terbuka menggelar acara penandatanganan perjanjian kerja sama antara Universitas Terbuka dengan perguruan tinggi mitra dalam rangka pengembangan Indonesia Cyber Education (ICE) Institute, Kamis (6/5). ICE Institute merupakan program Direktorat Jenderal Pendidikan Tinggi Kementerian Pendidikan dan Kebudayaan yang dititipkan kepada Universitas Terbuka yang telah dipercaya selama lebih dari 30 tahun sebagai pionir pendidikan tinggi jarak jauh. ICE Institute dibentuk sebagai marketplace pembelajaran daring di Indonesia dengan harapan mahasiswa dari berbagai perguruan tinggi dapat menempuh mata kuliah yang ditawarkan dan dapat diimplementasikan pada pendidikan di lingkungan sekitar.</p>\r\n\r\n<p>Berdasarkan data kerja sama yang sudah berjalan saat ini, ICE Institute bekerja sama dengan 12 perguruan tinggi berkualitas di Indonesia, diantaranya Universitas Indonesia, Universitas Gadjah Mada, Institut Pertanian Bogor, Institut Teknologi Sepuluh Nopember, Universitas Padjajaran, Universitas Diponegoro, Universitas Negeri Jakarta, Universitas Sebelas Maret, Universitas Pradita, Universitas Bina Nusantara, Universitas Pelita Harapan dan Universitas Katolik Indonesia Atma Jaya.</p>\r\n\r\n<p>Direktur Jenderal Pendidikan Tinggi Nizam mengatakan bahwa saat ini pada era revolusi industri 4.0 seiring dengan merebaknya pandemi Covid-19 tidak menghalangi kita sebagai insan pendidik untuk terus maju dan berinovasi dalam pendidikan di tanah air, terutama dalam pemanfaatan teknologi terkini.</p>\r\n\r\n<div style=\"clear:both; margin-bottom:1em; margin-top:0em\">\r\n<div style=\"padding-left:1em; padding-right:1em\"><a class=\"u878da074c59fbce2af8aedc7e932e1cf\" href=\"https://www.dikti.kemdikbud.go.id/kabar-dikti/fisipol-uml-adakan-workshop-redesain-dan-formulasi-kurikulum-merdeka-belajar-kampus-merdeka-mbkm/\" rel=\"nofollow\" target=\"_blank\">Baca Juga :&nbsp; FISIPOL UML adakan workshop Redesain dan Formulasi Kurikulum Merdeka Belajar-Kampus Merdeka (MBKM)</a></div>\r\n</div>\r\n\r\n<p>Untuk itu, Nizam berpesan agar kerja sama yang telah disepakati hari ini antara Universitas Terbuka dengan perguruan tinggi mitra perlu terus dikembangkan dan diharapkan semakin banyak perguruan tinggi ataupun instansi pemerintah yang terlibat dalam marketplace ICE Institute ini, baik sebagai sumber ataupun pengguna materi pembelajaran.</p>\r\n\r\n<p>Nizam berharap, perjanjian kerja sama ini telah memposisikan ICE Institute sebagai wadah para praktisi dan pemerhati pembelajaran dari di perguruan tinggi. &ldquo;Harapan di masa mendatang, ICE Institute bisa menjadi marketplace pembelajar yang tidak terbatas di tingkat nasional saja. Namun dapat berkembang di tingkat regional hingga Internasional sehingga dapat memfasilitasi seluruh mahasiswa Indonesia tanpa adanya batesan tertentu,&rdquo; harapnya.</p>\r\n\r\n<p>Pada kesempatan yang sama, Rektor Universitas Terbuka Ojat Darojat menekankan bahwa hadirnya ICE Institute di dunia pendidikan saat ini sebagai solusi dan jawaban untuk pemerintah agar dapat memfasilitasi murid belajar dimanapun berada.</p>\r\n\r\n<div style=\"clear:both; margin-bottom:1em; margin-top:0em\">\r\n<div style=\"padding-left:1em; padding-right:1em\"><a class=\"uaa681de948804a688f8935817bcb420e\" href=\"https://www.dikti.kemdikbud.go.id/kabar-dikti/kabar/bantu-tangani-covid-19-its-kirimkan-disinfection-chamber-ke-rsua/\" rel=\"nofollow\" target=\"_blank\">Baca Juga :&nbsp; Bantu Tangani Covid-19, ITS Kirimkan Disinfection Chamber ke RSUA</a></div>\r\n</div>\r\n\r\n<p>&ldquo;ICE Institute juga sebagai jawaban bagi program Kementerian Pendidikan dan Kebudayaan yaitu Kampus Merdeka, yang mana ICE Institute akan menjadi contoh bagi perguruan tinggi lain dalam menerapkan program Kampus Merdeka di perguruan tinggi Indonesia,&rdquo; terangnya.</p>\r\n\r\n<p>Kepala ICE Institute Paulina Pannen turut menjelaskan terkait data mata kuliah yang sudah tercantum dan akan di luncurkan di ICE Institute. Sudah ada 10 mata kuliah yang dapat diakses oleh seluruh mahasiswa di perguruan tinggi Indonesia. Ke depannya akan diluncurkan sekitar 120 mata kuliah dengan jurusan berbeda dan universitas yang berbeda.</p>\r\n\r\n<p>&ldquo;Tujuan dari adanya ini agar mahasiswa yang tinggal di pedesaan dan mahasiswa yang belajar di universitas menengah ke bawah, dapat mendapatkan pelajaran secara gratis dari perguruan-perguruan tinggi yang lebih unggul,&rdquo; ujarnya.</p>\r\n', 'PKS,ICE-I,PerjanjianKerjaSama', 8, 9, 2, 'post', '2021-05-21 08:38:01', '2021-05-21 08:38:01', '60a759cae2c64.jpg'),
('60a75dee7d7e9', 'Webinar ICE-Institute', 'webinar-ice-institute', 'Webinar ICE-Institute', '<p>Webinar ICE-Institute</p>\r\n', 'webinar', 7, 10, 2, 'post', '2021-05-21 08:32:57', '2021-05-21 08:32:57', '60a75dee7d7e9.jpg'),
('60a76a03c943f', 'Prof. Dr. Paulina Pannen, M.Ls.', 'prof-dr-paulina-pannen-mls', 'Prof. Dr. Paulina Pannen, M.Ls.', '<p>Tujuan dari adanya ini agar mahasiswa yang tinggal di pedesaan dan mahasiswa yang belajar di universitas menengah ke bawah, dapat mendapatkan pelajaran secara gratis dari perguruan-perguruan tinggi yang lebih unggul</p>\r\n\r\n<p><strong>Kepala ICE Institute</strong></p>\r\n', 'Prof. Dr. Paulina Pannen, M.Ls.', 9, 11, 2, 'post', '2021-05-21 08:06:44', '2021-05-21 08:06:44', '60a76a03c943f.JPG'),
('60a76b29e5a5b', 'Prof. Ojat Darojat, Dip. Mgt., M.Bus., Ph.D.', 'prof-ojat-darojat-dip-mgt-mbus-phd', 'Prof. Ojat Darojat, Dip. Mgt., M.Bus., Ph.D.', '<p>&ldquo;ICE Institute juga sebagai jawaban bagi program Kementerian Pendidikan dan Kebudayaan yaitu Kampus Merdeka, yang mana ICE Institute akan menjadi contoh bagi perguruan tinggi lain dalam menerapkan program Kampus Merdeka di perguruan tinggi Indonesia,&rdquo;</p>\r\n\r\n<p><strong>Rektor Universitas Terbuka</strong></p>\r\n', 'Prof. Ojat Darojat, Dip. Mgt., M.Bus., Ph.D.,ICEI', 9, 11, 2, 'post', '2021-05-21 08:11:26', '2021-05-21 08:11:26', '60a76b29e5a5b.JPG'),
('60a76c9cc1ea2', ' Prof. Ir. Nizam, M.Sc., DIC, Ph.D., IPU, Asean Eng.', 'prof-ir-nizam-msc-dic-phd-ipu-asean-eng', ' Prof. Ir. Nizam, M.Sc., DIC, Ph.D., IPU, Asean Eng.', '<p>&ldquo;Harapan di masa mendatang, ICE Institute bisa menjadi marketplace pembelajar yang tidak terbatas di tingkat nasional saja. Namun dapat berkembang di tingkat regional hingga Internasional sehingga dapat memfasilitasi seluruh mahasiswa Indonesia tanpa adanya batesan tertentu,&rdquo;</p>\r\n\r\n<p><strong>Direktur Jenderal Pendidikan Tinggi</strong></p>\r\n', 'nizam,dirjenDikti,ICEI', 9, 11, 2, 'post', '2021-05-21 08:17:37', '2021-05-21 08:17:37', '60a76c9cc1ea2.JPG'),
('60a76dc339a41', 'Nadiem Anwar Makarim, B.A., M.B.A', 'nadiem-anwar-makarim-ba-mba', 'Nadiem Anwar Makarim, B.A., M.B.A', '<p>Ubah Sistem Pendidikan dengan Teknologi</p>\r\n\r\n<p><strong>Menteri Pendidikan dan Kebudayaan</strong></p>\r\n', 'Nadiem Anwar Makarim, B.A., M.B.A,ICE,ICEI', 9, 11, 2, 'post', '2021-05-21 08:22:33', '2021-05-21 08:22:33', '60a76dc339a41.jpg'),
('60a76f2a25c91', 'Universitas Terbuka', 'universitas-terbuka', 'Universitas Terbuka Merupakan Partner dari ICE-Institute', '<p><strong>Universitas Terbuka</strong> <strong>(UT)</strong> adalah Perguruan Tinggi Negeri (PTN) ke-45 di Indonesia yang menerapkan sistem belajar terbuka dan jarak jauh. Sistem belajar ini terbukti efektif untuk meningkatkan daya jangkau dan pemerataan kesempatan pendidikan tinggi yang berkualitas bagi semua warga negara Indonesia, termasuk mereka yang tinggal di daerah-daerah terpencil, baik di seluruh nusantara maupun di berbagai belahan dunia.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/blog_ice/upload/ICON_UT.jpg\" /></p>\r\n\r\n<h2>Sistem Terbuka &amp; Fleksibel</h2>\r\n\r\n<p>Perkembangan ilmu pengetahuan dan teknologi yang demikian cepat menuntut kita untuk terus meningkatkan potensi sumber daya manusia (SDM) yang menunjang produktivitas. Namun, keterbatasan tempat dan waktu menjadi kendala utama bagi banyak orang dalam mengembangkan diri dan meningkatkan karier.</p>\r\n\r\n<p>Sejak diresmikan pada tahun 1984, UT mendapatkan mandat dari pemerintah untuk memberikan kesempatan yang sangat luas kepada semua warga negara Indonesia, baik yang baru lulus SLTA maupun yang sudah bekerja untuk mengikuti pendidikan tinggi tanpa memandang latar belakang sosial, ekonomi, umur, dan tempat tinggal mereka. Sistem pembelajaran UT memungkinkan belajar yang fleksibel kepada mereka yang menginginkan untuk mengikuti sistem pendidikan tinggi dengan metode jarak jauh.</p>\r\n\r\n<p>Tanpa memandang kondisi mahasiswa, sistem belajar terbuka dan jarak jauh yang diterapkan UT membantu pencapaian tujuan belajar karena;</p>\r\n\r\n<ul>\r\n	<li>tidak ada pembatasan jangka waktu penyelesaian studi dan tidak memberlakukan sistem drop out</li>\r\n	<li>tidak ada pembatasan, baik tahun kelulusan ijazah SLTA maupun umur</li>\r\n	<li>waktu pendaftaran (registrasi) leluasa sepanjang tahun</li>\r\n	<li>ruang, waktu, dan tempat belajar yang fleksibel sesuai dengan kondisi mahasiswa</li>\r\n	<li>penggunaan materi belajar multimedia, termasuk bahan belajar cetak baik yang dilengkapi dengan kaset audio dan video/CD, CD-ROM, siaran radio dan TV, maupun bahan belajar berbasis komputer dan internet.</li>\r\n</ul>\r\n\r\n<p>Dengan jumlah mahasiswa aktif lebih dari 350.000, UT tergolong dalam &ldquo;The Top Ten Mega University of the World&rdquo; dan salah satu anggota sekaligus pendiri &ldquo;The Global Mega-University Network (GMUNET). GMUNET didirikan pada tahun 2003 merupakan jaringan universitas terbuka seluruh dunia dengan jumlah mahasiswa yang terdaftar lebih dari 100.000 orang.</p>\r\n', 'UT,ICEI,ICE,Partner', 10, 12, 2, 'post', '2021-05-21 08:28:50', '2021-05-21 08:28:50', '60a76f2a25c91.png'),
('60a8a3424b2aa', 'Struktur ICE-Institute', 'struktur-ice-institute', 'Struktur ICE-Institute', '<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/blog_ice/upload/struktur_ICE.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/blog_ice/upload/Anggota_ICE.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'strukturICE,ICE-I', 6, 13, 2, 'post', '2021-05-22 06:23:05', '2021-05-22 06:23:05', '60a8a3424b2aa.png'),
('60a8a5fd695e5', 'Universitas Indonesia', 'universitas-indonesia', 'Universitas Indonesia, ICE-I', '<p>Universitas Indonesia disingkat sebagai UI, adalah sebuah perguruan tinggi di Indonesia. Kampus utamanya terletak di bagian Utara dari Depok, Jawa Barat tepat di perbatasan antara Depok dengan wilayah Jakarta Selatan, sementara kampus utama lainnya terdapat di Salemba, Jakarta Pusat.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/blog_ice/upload/universidad_indonesia_edificio_administrativo_434945-800x600.jpg\" /></p>\r\n', 'ice,universitasIndonesia', 10, 12, 2, 'post', '2021-05-22 06:34:42', '2021-05-22 06:34:42', '60a8a5fd695e5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id_galery` int(11) NOT NULL,
  `nama_galery` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galery`
--

INSERT INTO `tb_galery` (`id_galery`, `nama_galery`, `image`, `id_user`) VALUES
(4, '', 'ICON_UT.jpg', 2),
(5, '', 'struktur_ICE.png', 2),
(6, '', 'Anggota_ICE.png', 2),
(7, '', 'universidad_indonesia_edificio_administrativo_434945-800x600.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama_karyawan`, `no_hp`, `alamat`) VALUES
(2, 'suryaaaaaaa', '1234', 'Alamat Karyawan'),
(3, 'jokowi', '086767', 'solo'),
(4, 'prabowo', '3423423', 'karang asem'),
(5, 'mega wati', '305345', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `slug_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `slug_kategori`) VALUES
(1, 'Teknologi', 'teknologi'),
(2, 'Ekonomi', 'ekonomi'),
(3, 'Hukum', 'hukum'),
(4, 'Olahraga', 'olahraga'),
(5, 'Page', 'page'),
(6, 'Profil', 'profil'),
(7, 'Kegiatan', 'kegiatan'),
(8, 'Berita', 'berita'),
(9, 'Tentang ICE', 'tentang-ice'),
(10, 'Partner', 'partner');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontent`
--

CREATE TABLE `tb_kontent` (
  `id_kontent` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug_title` varchar(200) NOT NULL,
  `meta` text NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(200) NOT NULL,
  `image` tinytext NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `create_ad` datetime NOT NULL,
  `update_ad` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `status` enum('draft','post','delete','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_hp`, `alamat`) VALUES
(1, 'Jhoni', '0877777777', 'jakarta'),
(2, 'raisa', '08782432', 'depok'),
(3, 'ariel tatum', '09435345', 'jakarta'),
(4, 'dian sastro', '978979879', 'jakarta'),
(5, 'nicolas', '86276826', 'jerman'),
(6, 'ahmad dani', '678637837', 'jakarta'),
(7, 'tukul', '8798797', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `keterangan_produk` text NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `kode_produk`, `nama_produk`, `slug`, `jenis`, `keterangan_produk`, `satuan`, `harga`) VALUES
(1, '1-12-04-2021', 'Perawatan Rambut', 'perawatan-rambut', '', 'Facial Mustika Ratu', 'unit', 100000),
(2, '2-12-04-2021', 'Perawatan Mata', 'perawatan-mata', '', 'wwwwwwwwwww', 'unit', 500000),
(3, '5-13-04-2021', 'Perawatan Kaki', 'perawatan-kaki', '', 'uuuuuuuuuuu', 'kg', 1000000),
(4, '6-15-04-2021', 'Cuci Blow', 'cuci-blow', '', 'cuci blow', 'on', 250000),
(5, '7-15-04-2021', 'Gunting Cuci Blow', 'gunting-cuci-blow', '', 'Gunting Cuci Blow', 'on', 300000),
(6, '8-15-04-2021', 'Catok', 'catok', '', 'catok', 'on', 450000),
(7, '9-15-04-2021', 'Cheyi Treatment Creambath', 'cheyi-treatment-creambath', '', 'Cheyi Treatment Creambath', 'on', 7300000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `id_slide` varchar(64) NOT NULL,
  `nama_slide` varchar(200) NOT NULL,
  `deskripsi_slide` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_slide`
--

INSERT INTO `tb_slide` (`id_slide`, `nama_slide`, `deskripsi_slide`, `image`, `id_kategori`) VALUES
('60a7567391dd6', '-', '-', '60a7567391dd6.jpg', 5),
('60a756f9e0950', '-', '-', '60a756f9e0950.jpg', 5),
('60a77053ed63e', '-', '-', '60a77053ed63e.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_kategori`
--

CREATE TABLE `tb_sub_kategori` (
  `id_sub` int(11) NOT NULL,
  `nama_sub` varchar(200) NOT NULL,
  `slug_sub` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sub_kategori`
--

INSERT INTO `tb_sub_kategori` (`id_sub`, `nama_sub`, `slug_sub`, `id_kategori`) VALUES
(1, 'Sistem Pakar', 'sistem-pakar', 1),
(2, 'Bola Voli', 'bola-voli', 4),
(3, 'Devisit', 'devisit', 2),
(4, 'Hukum Internasional', 'hukum-internasional', 3),
(5, 'About', 'about', 5),
(6, 'Visi-misi', 'visi-misi', 5),
(7, 'Visi-Misi', 'visi-misi', 6),
(8, 'Tentang ICE', 'tentang-ice', 6),
(9, 'Perjanjian Kerja Sama ICE-I', 'perjanjian-kerja-sama-ice-i', 8),
(10, 'Webinar', 'webinar', 7),
(11, 'Kata Mereka', 'kata-mereka', 9),
(12, 'ICE-I Pratner', 'ice-i-pratner', 10),
(13, 'Struktur', 'struktur', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `id_token` int(11) NOT NULL,
  `token` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_token`
--

INSERT INTO `tb_token` (`id_token`, `token`, `id_user`, `created`) VALUES
(0, '712af5269d92b0788342351779fe46', 2, '2021-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `point_karyawan` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `total_diskon` int(11) NOT NULL,
  `total_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `kode_transaksi`, `id_pelanggan`, `total_bayar`, `tgl_transaksi`, `point_karyawan`, `bayar`, `kembali`, `total_diskon`, `total_transaksi`) VALUES
(2, 'TRS0000', 1, 0, '2021-04-18 00:00:00', 0, 0, 0, 0, 0),
(14, 'TRS0001', 3, 5575000, '2021-04-26 00:00:00', 0, 5000000, 261250, 15, 4738750);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_detail`
--

CREATE TABLE `tb_transaksi_detail` (
  `id_trans` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_karyawanA` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `point_save` int(11) NOT NULL,
  `bagi_satu` int(11) NOT NULL,
  `bagi_dua` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `bagi_kapster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi_detail`
--

INSERT INTO `tb_transaksi_detail` (`id_trans`, `id_produk`, `kode_transaksi`, `id_karyawan`, `id_karyawanA`, `diskon`, `total`, `created`, `id_user`, `point_save`, `bagi_satu`, `bagi_dua`, `point`, `bagi_kapster`) VALUES
(176, 1, 'TRS0001', 3, 0, 0, 100000, '2021-04-26', 2, 0, 0, 0, 0, 0),
(177, 7, 'TRS0001', 4, 2, 25, 5475000, '2021-04-26', 2, 1825000, 219000, 219000, 8, 438000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `status` enum('tolak','terima','','') NOT NULL,
  `level` enum('member','admin','super','') NOT NULL,
  `tgl_daftar` date NOT NULL,
  `terakhir_masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email`, `password`, `status`, `level`, `tgl_daftar`, `terakhir_masuk`) VALUES
(2, 'test', 'test@gmail.com', '$2y$10$6.AnyLrTkALpQxY19TJCTOIhL1hjn9n4l1lHKn18MupUINjMj2w42', 'terima', 'member', '0000-00-00', '2021-04-11 21:16:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kontent`
--
ALTER TABLE `tb_kontent`
  ADD PRIMARY KEY (`id_kontent`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `tb_sub_kategori`
--
ALTER TABLE `tb_sub_kategori`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_transaksi_detail`
--
ALTER TABLE `tb_transaksi_detail`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_kontent`
--
ALTER TABLE `tb_kontent`
  MODIFY `id_kontent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_sub_kategori`
--
ALTER TABLE `tb_sub_kategori`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_transaksi_detail`
--
ALTER TABLE `tb_transaksi_detail`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
