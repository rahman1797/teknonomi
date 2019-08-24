-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 08:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknonomi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `admin_password` varchar(25) NOT NULL,
  `admin_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_nama`) VALUES
(1, 'mrahman', '123', 'Maulana Rahman Nur');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tanggal_dibuat` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `subkategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `penulis`, `tanggal_dibuat`, `foto`, `kategori`, `subkategori`) VALUES
(1, 'Hino Perkenalkan Fitur Ban dan Transmisi Baru Untuk Bus', 'Jakarta --PT Hino Motors Sales Indonesia, memperkenalkan fitur atau pengembangan terbaru dari FC Bus Hino. Fitur perubahan dari sebelumnya menggunakan ban dan pelek 8.25 R16 kini FC Bus menggunakan ban dan pelek 9.5 dan R 17.5.\r\n\r\nDengan perubahan ban dan pelek ini maka gap antara brake drum dan velg menjadi lebih besar sehingga sirkulasi udara panas pada ban menjadi lebih baik. Hal ini dapat mengurangi kejadian ban pecah saat di kendarai. Tidak hanya itu, dengan saat ini menggunakan ban radial tubeless FC Bus menjadi mudah dalam perawatan dan lebih hemat biaya karena tidak harus mengganti ban dalam.\r\nSelain ban, diperkenalkan juga transmisi baru dari Hino Bus RN 285 yang saat ini menggunakan tipe ZF6S1010B0 over drive yang lebih bertenaga dan hemat bahan bakar dalam pengoperasian. \r\n\r\nHino Bus RN 285 saat ini juga memiliki Retarder Transmission yang membantu proses pengereman menjadi lebih aman dan nyaman bagi penumpang dan juga pengemudi. Keuntungan lainnya dengan penggunaan retarder ini adalah mengurangi lelah pengemudi karena frekuensi mengijak pedal rem yang berkurang sehingga berdampak juga terhadap penghematan penggunaan kanvas rem untuk menghemat biaya operasional pengusaha bus.  \r\n\r\nDalam keterangpers yang diterima RN, Prasetyo Adhiyudo, Product Division Head HMSI mengatakan, “Hino bus saat ini memiliki peran besar sebagai penghubung setiap kota di Indonesia. Untuk itu kami terus melakukan improvement untuk bus ini agar semakin ekonomis dan efisien“.\r\n\r\nBaik Hino Bus RN 285 dan FC Bus menggunakan mesin common rail yang sudah terjamin ketangguhan dan kemudahan perawatannya. FC Bus sendiri memiliki kapasitas 40 penumpang, yang sekaligus melengkapi jajaran produk bus Hino yang sebelumnya hanya terdapat bus besar seperti RN 285 dan R260 dengan kapasitas 59 penumpang dan bus kecil dengan kapasitas 30 penumpang. Penjualannya pada tahun 2018 lalu mencapai 1.387 unit dan menguasai pasar hingga 96%. (W2).', 'Admin', 'Maret 31, 2019', 'FiturbaruHino.JPG', 'Jasa', 'Transportasi'),
(2, 'Pertamina dan OPPINET ITB Luncurkan PertafloSIM, Apa itu?', 'Jakarta -- PT Pertamina (Persero) meluncurkan PertafloSIM, sebuah software penghitung aliran minyak dan gas (migas) dalam pipa sejak dari dasar sumur hingga ke permukaan dan titik serah atau titik jual (sales point), di Jakarta, Senin (15/4). Software ini merupakan hasil inovasi para teknisi perminyakan Pertamina bersama dengan Research Consortium OPPINET Institut Teknologi Bandung (ITB).\r\n\r\nDirektur Perencanaan, Investasi, dan Manajemen Risiko (PIMR) Pertamina, Heru Setiawan menyatakan, inovasi software ini merupakan bagian dari upaya Pertamina untuk melakukan efisiensi khususnya di sektor hulu, karena biayanya jauh lebih hemat dibanding software komersial dengan sistem sewa lisensi yang sebelumnya digunakan Pertamina.\r\n\r\n“Pertamina saat ini sedang mengembangkan jaringan perpipaan yang luas pada blok-blok terminasi, sehingga software ini sangat mendukung efisiensi di sektor hulu,” ujar Heru, di sela-sela pada peluncuran PertafloSIM, Senin (15/04).\r\n\r\nPertafloSIM, lanjut Heru, merupakan kebanggaan karena hasil inovasi anak negeri sendiri. Kinerjanya sudah divalidasi dengan data lapangan-lapangan di Indonesia, dan berhasil memberikan solusi terhadap masalah operasi yang ada.\r\n\r\n“Software ini sudah diterapkan pada ujicoba di Lapangan Tambun yang memiliki jaringan lengkap mulai dari dry gas, black oil, dan model multiphase compositional,\" imbuh Heru.\r\n\r\nPertafloSIM juga telah dipresentasikan kepada SKK Migas dan Direktorat Hulu yang akan menjadi potensi pengguna paling besar mulai dari Upstream Technical Center, Eksploitasi Pertamina EP, Asset-1, Asset-2, Asset-3, Asset-4, dan Asset-5 Pertamina EP, Pertamina Hulu Energi, dan Pertamina Hulu Mahakam.\r\n\r\nPertafloSIM merupakan hasil riset dan kajian yang panjang antara Pertamina dengan ITB. Awalnya, software ini dikembangkan di sebuah mesin pemrograman, kemudian sejak tahun 2016 muncul ide untuk membuat software dalam sebuah Graphical User Interface yang lengkap berisi modul-modul yang dibutuhkan yang akan menjadi alat kerja engineer sehari-sehari. Pada tahun 2016, usulan nama software adalah Pertaflo, dan di awal tahun 2019 disepakati seluruh pihak nama software ini menjadi PertafloSIM.\r\n\r\n“Sejak 18 tahun lalu Pertamina bekerjasama dengan ITB mengembangkan software perhitungan aliran minyak dan gas dalam pipa. Motivasinya adalah bagaimana memecahkan permasalahan-permasalahan di lapangan melalui model matematika dan simulasi,” ujar Heru.\r\n\r\nKe depan, PertafloSIM rencananya akan digunakan secara intensif di lingkungan Pertamina sehingga terwujud efisiensi biaya produksi dan terciptanya potensi perusahaan dalam mengembangkan teknologi sendiri. \r\n\r\n', 'Admin', 'April 20, 2019', 'pertaflo.JPG', 'Energi', 'Migas'),
(3, 'Tren Sistem T&D dalam Pembangkit Listrik Sedang Terjadi', 'Jakarta -- Studi terbaru oleh GE menunjukkan, dunia sedang bertransisi dari sistem kelistrikan berdasarkan teknologi pusat pembangkitan, transmisi dan distribusi (T & D) generasi tradisional, ke sistem yang merangkul teknologi baru, berbasis digital dan ramah lingkungan. Sistem energi global berkembang menuju jaringan terpadu dan hibridisasi yang memadukan unsur-unsur teknologi lama dan baru yang bekerja secara sinergis untuk menyediakan tenaga listrik yang dapat diandalkan, terjangkau, dan berkelanjutan untuk pabrik, bisnis, dan masyarakat di seluruh dunia.\r\n\r\n\"Selama beberapa dekade ke depan, pembangkit listrik yang besar dan berada di pusat akan menjadi semakin efisien. Selain itu, mereka akan dilengkapi dengan sistem perangkat keras dan perangkat lunak baru, yang sering kali lebih kecil, yang didistribusikan ke seluruh sistem T & D,\" kata David \r\nDavid Hutagalung, Country Director GE Power Indonesia,dalam suata kesempatan di kantor GE Indonesia.\r\n\r\nPada saat yang sama, alat digital akan semakin terintegrasi dengan teknologi di seluruh jaringan listrik. Adopsi teknologi digital terbaru akan meningkatkan dan mengoptimalkan aset dan jaringan energi Indonesia, dikombinasikan dengan penerapan turbin gas paling efisien atau menggunakan teknologi batu bara ultra-super critical, atau mengupgrade pembangkit listrik yang sudah ada berikut jaringan transmisi dan distribusinya. Nantinya Indonesia dapat melakukan penghematan atau efisiensi substansial sekaligus pengurangan emisi karbon besar-besaran. (W3)\r\n', 'Admin', 'April 19, 2019', 'putra1.JPG', 'Energi', 'Listrik'),
(4, 'Canggih, Elnusa Gunakan Teknologi NODAL untuk Data Seismik Migas', 'Jakarta --Saat ini, Elnusa mulai mengembangkan akuisisi data seismik dengan menggunakan teknologi Ocean Bottom Nodes (Nodal). Direktur Operasi Elnusa, Arief Riyanto mempaparkan bahwa, “Penemuan cadangan migas bergantung pada kualitas data seismik yang dihasilkan. Akuisisi data seismik dengan menggunakan nodal akan mendukung hasil data yang lebih kaya. Hal ini tentunya baik untuk mendapatkan gambaran struktur bawah bumi yang lebih akurat dan karakter reservoir yang lebih baik.”\r\n\r\nNodal memiliki empat komponen sensor dengan kelebihan mampu menangkap jenis gelombang seismik yang lebih banyak. Penambahan teknologi ini adalah untuk melengkapi kapabilitas Elnusa dalam jasa akuisisi data seismik baik di darat, zona transisi maupun laut, sesuai kebutuhan data yang diperlukan. Keunggulan lain nodal dalam eksplorasi migas adalah dapat digunakan secara independen, tidak memerlukan alat perekaman tambahan (autonomous recording), serta dapat disesuaikan dengan berbagai kebutuhan eksplorasi.\r\n\r\n“Pengembangan kapabilitas ini tentunya melengkapi kemampuan Elnusa dalam jasa akuisisi data seismik. Dengan peningkatan kapabilitas dan pengalaman lebih dari 45 tahun,  kami yakin mampu mendukung peningkatan kapasitas nasional”, imbuh Arief.\r\n\r\nElnusa telah memulai menggunakan nodal pada survei seismik zona transisi di Blok South West Matindok dan South East Senoro. Aktivitas survei untuk kedua blok telah selesai tepat waktu pada Desember 2018 dan Maret 2019.  Dengan berbagai keunggulan yang dimiliki nodal, survei eksplorasi migas terbukti dapat lebih efektif dan efisien. \r\n\r\n“Akuisisi data seismik dengan nodal belum banyak dilakukan di Indonesia. Elnusa merupakan salah satu pioneer dalam penggunaan teknologi ini. Dengan kemampuan baru ini, Elnusa merupakan salah satu perusahaan jasa akuisisi data seismik darat dan laut dengan kapabilitas terlengkap di Indonesia dan Asia Tenggara.” Tutup Arief. (W2)', 'Admin', 'April 22, 2019', 'NODAL1.JPG', 'Energi', 'Migas');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subkategori`
--

CREATE TABLE `subkategori` (
  `subkategori_id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `subkategori_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`subkategori_id`),
  ADD KEY `getKategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `subkategori_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD CONSTRAINT `getKategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
