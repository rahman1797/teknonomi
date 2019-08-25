-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 04:17 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(200) NOT NULL,
  `id_subkategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `viewers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `penulis`, `tanggal_dibuat`, `foto`, `id_subkategori`, `id_kategori`, `viewers`) VALUES
(1, 'Hino Perkenalkan Fitur Ban dan Transmisi Baru Untuk Bus', '<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nJakarta --PT Hino Motors Sales Indonesia, memperkenalkan fitur atau pengembangan terbaru dari FC Bus Hino. Fitur perubahan dari sebelumnya menggunakan ban dan pelek 8.25 R16 kini FC Bus menggunakan ban dan pelek 9.5 dan R 17.5.							</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nDengan perubahan ban dan pelek ini maka gap antara brake drum dan velg menjadi lebih besar sehingga sirkulasi udara panas pada ban menjadi lebih baik. Hal ini dapat mengurangi kejadian ban pecah saat di kendarai. Tidak hanya itu, dengan saat ini menggunakan ban radial tubeless FC Bus menjadi mudah dalam perawatan dan lebih hemat biaya karena tidak harus mengganti ban dalam.\r\nSelain ban, diperkenalkan juga transmisi baru dari Hino Bus RN 285 yang saat ini menggunakan tipe ZF6S1010B0 over drive yang lebih bertenaga dan hemat bahan bakar dalam pengoperasian. \r\n							</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nHino Bus RN 285 saat ini juga memiliki Retarder Transmission yang membantu proses pengereman menjadi lebih aman dan nyaman bagi penumpang dan juga pengemudi. Keuntungan lainnya dengan penggunaan retarder ini adalah mengurangi lelah pengemudi karena frekuensi mengijak pedal rem yang berkurang sehingga berdampak juga terhadap penghematan penggunaan kanvas rem untuk menghemat biaya operasional pengusaha bus.  \r\n						</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nBaik Hino Bus RN 285 dan FC Bus menggunakan mesin common rail yang sudah terjamin ketangguhan dan kemudahan perawatannya. FC Bus sendiri memiliki kapasitas 40 penumpang, yang sekaligus melengkapi jajaran produk bus Hino yang sebelumnya hanya terdapat bus besar seperti RN 285 dan R260 dengan kapasitas 59 penumpang dan bus kecil dengan kapasitas 30 penumpang. Penjualannya pada tahun 2018 lalu mencapai 1.387 unit dan menguasai pasar hingga 96%. (W2).							</p>\r\n\r\n\r\n\r\n', 'Admin', '2019-02-07 01:48:49', 'FiturbaruHino.JPG', 12, 2, 500),
(2, 'Pertamina dan OPPINET ITB Luncurkan PertafloSIM, Apa itu?', '<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nJakarta -- PT Pertamina (Persero) meluncurkan PertafloSIM, sebuah software penghitung aliran minyak dan gas (migas) dalam pipa sejak dari dasar sumur hingga ke permukaan dan titik serah atau titik jual (sales point), di Jakarta, Senin (15/4). Software ini merupakan hasil inovasi para teknisi perminyakan Pertamina bersama dengan Research Consortium OPPINET Institut Teknologi Bandung (ITB).						</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nDirektur Perencanaan, Investasi, dan Manajemen Risiko (PIMR) Pertamina, Heru Setiawan menyatakan, inovasi software ini merupakan bagian dari upaya Pertamina untuk melakukan efisiensi khususnya di sektor hulu, karena biayanya jauh lebih hemat dibanding software komersial dengan sistem sewa lisensi yang sebelumnya digunakan Pertamina.						</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\n\r\n“Pertamina saat ini sedang mengembangkan jaringan perpipaan yang luas pada blok-blok terminasi, sehingga software ini sangat mendukung efisiensi di sektor hulu,” ujar Heru, di sela-sela pada peluncuran PertafloSIM, Senin (15/04).							</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nPertafloSIM, lanjut Heru, merupakan kebanggaan karena hasil inovasi anak negeri sendiri. Kinerjanya sudah divalidasi dengan data lapangan-lapangan di Indonesia, dan berhasil memberikan solusi terhadap masalah operasi yang ada.							</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\n“Software ini sudah diterapkan pada ujicoba di Lapangan Tambun yang memiliki jaringan lengkap mulai dari dry gas, black oil, dan model multiphase compositional,\" imbuh Heru.\r\n\r\nPertafloSIM juga telah dipresentasikan kepada SKK Migas dan Direktorat Hulu yang akan menjadi potensi pengguna paling besar mulai dari Upstream Technical Center, Eksploitasi Pertamina EP, Asset-1, Asset-2, Asset-3, Asset-4, dan Asset-5 Pertamina EP, Pertamina Hulu Energi, dan Pertamina Hulu Mahakam.\r\n							</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nPertafloSIM merupakan hasil riset dan kajian yang panjang antara Pertamina dengan ITB. Awalnya, software ini dikembangkan di sebuah mesin pemrograman, kemudian sejak tahun 2016 muncul ide untuk membuat software dalam sebuah Graphical User Interface yang lengkap berisi modul-modul yang dibutuhkan yang akan menjadi alat kerja engineer sehari-sehari. Pada tahun 2016, usulan nama software adalah Pertaflo, dan di awal tahun 2019 disepakati seluruh pihak nama software ini menjadi PertafloSIM.\r\n						</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\n“Sejak 18 tahun lalu Pertamina bekerjasama dengan ITB mengembangkan software perhitungan aliran minyak dan gas dalam pipa. Motivasinya adalah bagaimana memecahkan permasalahan-permasalahan di lapangan melalui model matematika dan simulasi,” ujar Heru.\r\n\r\nKe depan, PertafloSIM rencananya akan digunakan secara intensif di lingkungan Pertamina sehingga terwujud efisiensi biaya produksi dan terciptanya potensi perusahaan dalam mengembangkan teknologi sendiri. \r\n\r\n						</p>\r\n\r\n\r\n\r\n', 'Admin', '2019-08-20 01:48:49', 'pertaflo.JPG', 1, 1, 450),
(3, 'Tren Sistem T&D dalam Pembangkit Listrik Sedang Terjadi', '<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nJakarta -- Studi terbaru oleh GE menunjukkan, dunia sedang bertransisi dari sistem kelistrikan berdasarkan teknologi pusat pembangkitan, transmisi dan distribusi (T & D) generasi tradisional, ke sistem yang merangkul teknologi baru, berbasis digital dan ramah lingkungan. Sistem energi global berkembang menuju jaringan terpadu dan hibridisasi yang memadukan unsur-unsur teknologi lama dan baru yang bekerja secara sinergis untuk menyediakan tenaga listrik yang dapat diandalkan, terjangkau, dan berkelanjutan untuk pabrik, bisnis, dan masyarakat di seluruh dunia.\r\n						</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\n\"Selama beberapa dekade ke depan, pembangkit listrik yang besar dan berada di pusat akan menjadi semakin efisien. Selain itu, mereka akan dilengkapi dengan sistem perangkat keras dan perangkat lunak baru, yang sering kali lebih kecil, yang didistribusikan ke seluruh sistem T & D,\" kata David \r\nDavid Hutagalung, Country Director GE Power Indonesia,dalam suata kesempatan di kantor GE Indonesia.\r\n						</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nPada saat yang sama, alat digital akan semakin terintegrasi dengan teknologi di seluruh jaringan listrik. Adopsi teknologi digital terbaru akan meningkatkan dan mengoptimalkan aset dan jaringan energi Indonesia, dikombinasikan dengan penerapan turbin gas paling efisien atau menggunakan teknologi batu bara ultra-super critical, atau mengupgrade pembangkit listrik yang sudah ada berikut jaringan transmisi dan distribusinya. Nantinya Indonesia dapat melakukan penghematan atau efisiensi substansial sekaligus pengurangan emisi karbon besar-besaran. (W3)\r\n							</p>\r\n\r\n\r\n\r\n', 'Admin', '2019-08-25 02:16:46', 'listrik.JPG', 4, 1, 400),
(4, 'Canggih, Elnusa Gunakan Teknologi NODAL untuk Data Seismik Migas', '<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nJakarta --Saat ini, Elnusa mulai mengembangkan akuisisi data seismik dengan menggunakan teknologi Ocean Bottom Nodes (Nodal). Direktur Operasi Elnusa, Arief Riyanto mempaparkan bahwa, “Penemuan cadangan migas bergantung pada kualitas data seismik yang dihasilkan. Akuisisi data seismik dengan menggunakan nodal akan mendukung hasil data yang lebih kaya. Hal ini tentunya baik untuk mendapatkan gambaran struktur bawah bumi yang lebih akurat dan karakter reservoir yang lebih baik.”\r\n							</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nNodal memiliki empat komponen sensor dengan kelebihan mampu menangkap jenis gelombang seismik yang lebih banyak. Penambahan teknologi ini adalah untuk melengkapi kapabilitas Elnusa dalam jasa akuisisi data seismik baik di darat, zona transisi maupun laut, sesuai kebutuhan data yang diperlukan. Keunggulan lain nodal dalam eksplorasi migas adalah dapat digunakan secara independen, tidak memerlukan alat perekaman tambahan (autonomous recording), serta dapat disesuaikan dengan berbagai kebutuhan eksplorasi.\r\n							</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\n“Pengembangan kapabilitas ini tentunya melengkapi kemampuan Elnusa dalam jasa akuisisi data seismik. Dengan peningkatan kapabilitas dan pengalaman lebih dari 45 tahun,  kami yakin mampu mendukung peningkatan kapasitas nasional”, imbuh Arief.						</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nElnusa telah memulai menggunakan nodal pada survei seismik zona transisi di Blok South West Matindok dan South East Senoro. Aktivitas survei untuk kedua blok telah selesai tepat waktu pada Desember 2018 dan Maret 2019.  Dengan berbagai keunggulan yang dimiliki nodal, survei eksplorasi migas terbukti dapat lebih efektif dan efisien. \r\n							</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\n\r\n“Akuisisi data seismik dengan nodal belum banyak dilakukan di Indonesia. Elnusa merupakan salah satu pioneer dalam penggunaan teknologi ini. Dengan kemampuan baru ini, Elnusa merupakan salah satu perusahaan jasa akuisisi data seismik darat dan laut dengan kapabilitas terlengkap di Indonesia dan Asia Tenggara.” Tutup Arief. (W2)					</p>\r\n\r\n', 'Admin', '2019-06-10 01:48:49', 'NODAL1.JPG', 1, 1, 200),
(5, 'Pemadaman Listrik Bisa Diatasi Dengan Solusi Self-Healing ', '<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nJakarta– Insiden listrik padam di sejumlah wilayah Jawa termasuk Jakarta pada awal Agustus 2019 yang lalu merupakan peristiwa yang tidak terduga dan terjadi secara tiba-tiba. Pemadaman listrik yang terjadi akibat adanya gangguan pada transmisi SUTET 500kv PLN di Jawa Barat, gas turbin 1 hingga 6 Suryalaya mengalami trip dan gas turbin 7 yang mengalami off menyebabkan aktivitas di seluruh wilayah yang terkena dampak terhenti dan menimbulkan chaos. Rumah tangga, dunia usaha hingga pelayanan publik mengalami kerugian besar tidak hanya kerugian material namun juga immaterial. Kamar Dagang dan Industri (KADIN) menyampaikan pemadaman lampu yang mencapai lebih dari 12 jam itu diperkirakan menimbulkan kerugian hingga mencapai triliunan rupiah untuk sektor usaha dan layanan publik. \r\n \r\nPertanyaan publik yang kemudian muncul adalah apakah insiden seperti ini tidak dapat diprediksi sebelumnya? Apakah ada solusi yang dapat dilakukan untuk dapat mengantisipasi kejadian pemadaman seperti ini agar tidak terulang di kemudian hari? 						</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nDi era digitalisasi seperti saat ini, keberlangsungan ketersediaan listrik menjadi kebutuhan yang sangat penting lebih dari sebelumnya. Layanan transportasi publik seperti MRT dan KRL, layanan komunikasi, layanan pembayaran digital, semuanya membutuhkan listrik untuk pengoperasiannya. Namun harus diakui, sebagian besar jaringan listrik yang ada saat ini di hampir seluruh dunia sudah berusia puluhan tahun dan dibangun dengan spesifikasi ketika kebutuhan akan listrik masih sederhana. Tuntutan energi listrik yang terus berubah dan meningkat mengharuskan dilakukannya modernisasi di jaringan listrik agar menjadi lebih pintar (smart grid).					</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nCountry President Schneider Electric Indonesia, Xavier Denoly menjelaskan “Salah satu karakteristik utama dari smart grid adalah self-healing capabilities atau kemampuan sistem jaringan listrik untuk mengidentifikasi gangguan dan melakukan perbaikan secara otomatis sehingga meminimalkan terjadinya pemadaman. Hal ini dimungkinkan dengan penyebaran sensor, perangkat cerdas serta kontrol otomatis termasuk pemanfaatan teknologi baru seperti Advanced Distribution Management Systems (ADMS) dan Fault location, isolation, and service restoration (FLISR).” \r\n \r\nADMS memungkinkan jaringan listrik melakukan pemantauan komprehensif, analisis, kontrol, optimisasi, perencanaan dan evaluasi status dan kondisi jaringan untuk mengidentifikasi potensi gangguan dalam satu platform. FLISR memungkinkan sistem jaringan listrik menyalakan kembali dalam waktu singkat dengan mendeteksi lokasi gangguan dengan cepat menggunakan informasi yang real-time, mengkonfigurasi ulang aliran listrik untuk memasok daya ke bagian-bagian yang tidak aktif dari jaringan distribusi, dan mengurangi terjadinya pemadaman.\r\n 						</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nOtomatisasi cerdas ini memungkinkan pemantauan dan pengambilan keputusan yang lebih efektif tanpa campur tangan manusia. Hasil keseluruhannya adalah jaringan listrik yang lebih andal yang memaksimalkan waktu kerja dan meningkatkan efisiensi dan keamanan sistem jaringan.\r\n \r\nBeberapa negara di Eropa dan Amerika telah mengadopsi teknologi smart grid ini untuk sistem distribusi jaringan listriknya. ENEL, perusahaan listrik terbesar di Eropa, lebih dari 110.000 gardu induknya dilengkapi dengan menggunakan EcoStruxure™ Grid dari Schneider Electric yang dapat melakukan isolasi kesalahan dengan cara yang sepenuhnya otomatis dan terdesentralisasi. Tidak hanya itu ENEL dapat mengurangi kehilangan energi listrik sekitar 144 GWh per tahun, setara dengan listrik yang dikonsumsi oleh sekitar 50.000 rumah tangga di Italia setiap tahunnya. \r\n 						</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nRepublik Ekuador di Amerika Selatan, dengan permukaan tanah hampir 110.000 mil persegi dan lanskap yang beragam termasuk hutan Amazon, dataran tinggi Andean, Kepulauan Galápagos yang kaya margasatwa serta populasi lebih dari 16,6 juta orang, stabilitas daya listrik telah lama menjadi masalah. Modernisasi jaringan listrik yang dilakukan oleh Pemerintah Republik Ekuador dengan memanfaatkan EcoStruxure™ Grid meningkatkan visibilitas ke jaringan distribusi dari 5% menjadi 94% dan menjadi pondasi dalam strategi pengelolaan energi yang lebih maju, keandalan jaringan dan efisiensi. Tidak hanya itu, Republik Ekuador juga dapat memadukan energi terbarukan dengan lebih mudah.\r\n \r\nTata Power, perusahaan listrik dari India mengadopsi pendekatan kontrol yang didesentralisasi untuk mengelola pemadaman listrik dengan teknologi smart grid dari Schneider Electric yang mengotomatisasi pemulihan daya dalam waktu kurang dari 20 detik. \r\n							</p>\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\n“Teknologi smart grid seperti EcoStruxure™ Grid dapat memaksimalkan potensi penuh dari jaringan listrik dan memberikan pengawasan yang lebih baik dengan kemampuan perbaikan diri secara otomatis sehingga insiden pemadaman listrik dapat diminimalisir. Ke depannya, teknologi smart grid juga dapat mengakomodasi kebutuhan pengelolaan energi masa depan yang mengintegrasikan energi terbarukan dan mendukung pengembangan kendaraan listrik dalam skala besar”. Tutup Xavier.							</p>', 'Admin', '2019-04-27 01:48:49', 'xavier.JPG', 4, 1, 250),
(6, 'Digital Loft, Smart Building Sebagai Pusat Inovasi dan Kreativitas Dengan Spirit Millennial', '<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nBSD City – Seperti diketahui generasi millennial kini terus mendominasi angkatan kerja, menurut proyeksi penduduk Indonesia dari Badan Pusat Statistik (BPS), mereka yang berusia 20-34 tahun akan disebut secara sederhana sebagai kelompok milenial. Laporan memperlihatkan bahwa kelompok usia itu, setidaknya akan menyumbang 23,95 persen dari total populasi Indonesia pada 2018. Pada 2018, BPS mendata jumlah penduduk Indonesia mencapai 265 juta jiwa. Pada 2019, jumlah mereka diproyeksi sebanyak 23,77 persen dari total populasi Indonesia yang mencapai 268 juta jiwa. Artinya, hampir seperlima penduduk di Indonesia adalah kelompok milenial.  Untuk menghadapi hal tersebut, Sinar Mas Land berinovasi meluncurkan produk komersialnya di BSD City yaitu Digital Loft yang terletak di Kawasan Digital Hub. Digital loft adalah produk komersial yang memiliki banyak outdoor working space, lahan hijau serta Internet of Things (IOT).							</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nHongky J. Nantung - CEO Commercial Sinar Mas Land, menjelaskan dalam siaran persnya hari ini “Kami berupaya untuk terus memberikan konsep terbaru sesuai dengan kebutuhan masyarakat saat ini dengan fasilitas IOT ready (smart building system). Digital Loft terdiri dari 18 unit bangunan dengan ketinggian 3-4 lantai dan 1 basement, serta memiliki double deck parking untuk menambah kenyamanan pengguna/user. Adapun masing-masing unit Digital Loft memiliki luas tanah mulai dari 187 meter persegi sampai dengan 288 meter persegi, dan luas bangunan mulai dari 600 meter persegi sampai dengan 825 meter persegi. Uniknya bangunan ini didesain dengan konsep pixelation sebagai salah satu elemen digital visual yang akan menjadi wajah yang eksentrik bagi Digital Hub BSD City. Digital Loft dilengkapi dengan fasilitas Code Base, sebuah Community Park sebagai tempat penghubung pengguna/user Digital Loft untuk bekerja sama, diskusi dan berkolaborasi.\r\nDesainnya yang unik bertujuan untuk merefleksikan karakteristik modern kaum millennial yang merupakan target pengguna/user Digital Loft, dimana mereka bisa bekerja dengan fasilitas yang sangat high tech dengan atmosfir outdoor working space dan komunitas bisnis yang baik.						</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nPerkantoran Kekinian di Kawasan Digital Hub BSD City\r\n\r\nDigital Loft didesain sedemikian rupa untuk menjadi tempat kerja para millennials. Digital Loft juga dilengkapi dengan beragam fasilitas smart building / IOT seperti high flexibility and productivity data port, 24 hour-CCTV, facial recognition Door Security, door sensor alarm, video intercom & office monitor, light motion sensor, automatic roller shutter door dan electronic delivery box yang dapat terhubung dengan ponsel pemilik unit. Tidak hanya itu, infrastruktur di dalam Digital Loft juga sudah siap untuk dipasangkan fasilitas tambahan seperti Voice Control System, Energy Monitoring System, Automatic Power Switch, Smart Curtain hingga lift dengan Private Elevator Access Card. Untuk kebutuhan jaringan internet, pemilik unit dapat secara bebas menggunakan provider yang sesuai dengan kebutuhannya. “Setiap lantai di masing-masing unit Digital Loft dapat digunakan secara independen/berbeda bisnis usahanya. Hal ini dikarenakan setiap lantai dapat diakses secara terpisah” Tambah Hongky J. Nantung.					</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nDigital Loft berada di Kawasan Digital Hub BSD City. Kawasan Digital Hub seluas 25,86 hektar saat ini sudah terintegrasi dengan kawasan business district yakni BSD Green Office Park. Digital Hub akan dihuni oleh sejumlah tenant mulai dari startup company, enterprises, tech leader company hingga perusahaan multinasional bahkan menjadi area untuk talent development. Saat ini, Kawasan BSD Green Office Park telah menjadi rumah dari Binar Academy, Techpolitan, Purwadhika, Grab Innovation Lab, Creative Nest Indonesia, Geeks Farm, Amikom, Sale Stock, 99.co, Qlue, Orami, v Office, Cohive, Go Work, Sirclo, Apple Developer Academy, Huawei, Dimension Data, dan HP. Kedepannya tech institution serta tech companies tersebut akan direlokasi ke Kawasan Digital Hub di kuartal ke 4 tahun 2020. 						</p>\r\n\r\n<p class=\"f1-s-11 cl6 p-b-25\" style=\"text-align: justify;\">\r\nTransportasi sebagai Bagian dari Transformasi BSD City menjadi The First Integrated Smart City\r\n\r\nDalam transformasinya sebagai the first integrated smart digital city, BSD City telah dilengkapi dengan fasilitas yang lengkap, mulai dari rumah sakit berstandar internasional Eka Hospital, berbagai sekolah dan perguruan tinggi bergengsi, hingga kawasan bisnis dan perkantoran, AEON Mall BSD City dan Indonesia Convention Exhibition (ICE). \r\n\r\nLalu lintas di BSD City diawasi dengan surveillance system yang dipantau dari Command Centre. Hal ini membantu meminimalisir kemacetan sehingga konduktifitas lalu lintas dapat selalu terjaga. Sinar Mas Land juga memiliki BSD Link, shuttle bus gratis yang menghubungkan berbagai landmarks dan fasilitas utama di BSD City. \r\n\r\nKemudahan berkendara dari/ke BSD City juga dapat dinikmati dengan beragam akses seperti tol JORR dan tol Kebon Jeruk. Kedua akses tol ini terhubung dengan berbagai jalan tol di Pulau Jawa. Oleh seab itu, warga dapat dengan mudah mengakses Bandara internasional Soekarno-Hatta, beraktifitas di Jakarta dan sekitarnya, juga bepergian ke luar kota. Selain itu, menuju BSD City juga dapat diakses melalui jalur commuter line yaitu stasiun Rawa Buntu, Serpong, dan Cisauk.					</p>', 'Admin', '2019-08-25 02:14:27', 'foto2.jpeg', 3, 1, 120);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Energi'),
(2, 'Jasa'),
(3, 'Industri');

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
-- Dumping data for table `subkategori`
--

INSERT INTO `subkategori` (`subkategori_id`, `id_kategori`, `subkategori_nama`) VALUES
(1, 1, 'Migas'),
(2, 1, 'EBT'),
(3, 1, 'Konservasi'),
(4, 1, 'Listrik'),
(5, 3, 'Aviasi'),
(6, 2, 'Medis'),
(7, 3, 'Kapal'),
(8, 3, 'Militer'),
(9, 3, 'Pertanian'),
(10, 3, 'Makanan'),
(11, 2, 'Keuangan'),
(12, 2, 'Transportasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(225) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_posisi` varchar(255) NOT NULL,
  `user_jeniskelamin` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_posisi`, `user_jeniskelamin`, `user_role`) VALUES
(1, 'Khairul Rizal', '', '', 'Pembina', 'Laki-laki', ''),
(2, 'Abdul Gafar', '', '', 'Pembina', 'Laki-laki', ''),
(3, 'Ifnaldi Sikumbang', '', '', 'Pimpinan Umum', 'Laki-laki', ''),
(4, 'Adi Wicaksono', '', '', 'Redaksi', 'Laki-laki', ''),
(5, 'Devi R Ayu', '', '', 'Redaksi', 'Perempuan', ''),
(6, 'Dhany Tantri', '', '', 'Redaksi', 'Perempuan', ''),
(7, 'Galuh Firdaus', '', '', 'Redaksi', 'Laki-laki', ''),
(8, 'Meidella Syahni', '', '', 'Redaksi', 'Perempuan', ''),
(9, 'Denny', '', '', 'Foto', 'Laki-laki', ''),
(10, 'Siti Marfuah', '', '', 'Finance', 'Perempuan', ''),
(11, 'Husnul Tambunan', '', '', 'Marketing', 'Laki-laki', ''),
(12, 'Arlin', '', '', 'Marketing', 'Perempuan', ''),
(13, 'Euis', '', '', 'Marketing', 'Perempuan', ''),
(14, 'Hanida', '', '', 'Marketing', 'Perempuan', ''),
(15, 'Saulia Karina', '', '', 'Pengembang TI', 'Perempuan', ''),
(16, 'Maulana Rahman Nur', 'mrahman', '123', 'Pengembang TI', 'Laki-laki', 'admin'),
(17, 'MD Iskandar', '', '', 'Desain Grafis', 'Laki-laki', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_fk1` (`id_subkategori`),
  ADD KEY `artikel_fk2` (`id_kategori`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `subkategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_fk1` FOREIGN KEY (`id_subkategori`) REFERENCES `subkategori` (`subkategori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_fk2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD CONSTRAINT `getKategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
