-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 05:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_websitewisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'tegar@gmail.com', 'tegar', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `no_telp`, `kota`, `negara`, `gambar`) VALUES
(25, 'andin@gmail.com', 'andin@gmail.com', '729035041c890a4d587fbc36c2656dbc', '', '', '', ''),
(26, 'man@gmail.com', 'Man', '25d55ad283aa400af464c76d713c07ad', '', '', '', ''),
(27, 'hadijah@gmail.com', 'Hadijah', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', ''),
(29, 'miu@gmail.com', 'miu aja', '202cb962ac59075b964b07152d234b70', '085255938568', 'kendari', 'indonesia', ''),
(30, 'inong@gmail.com', 'inong akbar hidayat', '202cb962ac59075b964b07152d234b70', '88888888', 'muna', 'indonesia', '');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tiket` varchar(100) NOT NULL,
  `tour_guide` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `makanan` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `waktu_operasional` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `gambar`, `deskripsi`, `lokasi`, `tiket`, `tour_guide`, `no_telepon`, `fasilitas`, `makanan`, `kategori`, `waktu_operasional`) VALUES
(1, 'Pantai Labengki', 'labengki.jpg', 'Labengki sendiri merupakan gugusan pulau-pulau kecil dimana di setiap sisi pulau dihiasi beberapa pa', 'Kecamatan Lasolo, Kabupaten Konawe Utara, Sulawesi Tenggara', 'Rp. 500.000', 'Ada', '085255938568', 'Penginapan, mushala', 'Sate pokea dan gogos', 'Pantai', '07.00 - 18.00'),
(2, 'Pantai Toronipa', 'toronipa.jpg', 'Pantai Toronipa berasal dari bahasa Bugis, yaitu toro nipa yang berarti pohon nipa yang turun. Beber', 'Kabupaten Konawe, Sulawesi Tenggara', 'Rp. 200.000', 'Tidak ada', '085255938568', 'Gazebo, mushola, toilet', 'Sate pokea, gogos', 'Pantai', '08.00 - 18.00'),
(3, 'Pantai Nirwana', 'nirwana.jpg', 'Pantai Nirwana merupakan pantai yang tersohor di Pulau Sulawesi Tenggara. Pantai ini termasuk pantai', 'Baubau, Sulawesi Tenggara', 'Rp. 200.000', 'Tidak ada', '085255938568', 'Gazebo, mushala', 'Sate pokea, gogos', 'Pantai', '07.00 - 18.00'),
(4, 'Pantai Napabale', 'meleura.jpeg', 'Keindahan Pantai Meleura yang terletak di Raha ini, terkenal dengan air lautnya yang jernih.  Penyaj', 'Desa Lakarinta, Kecamatan Loghia, Kabupaten Muna, Sulawesi Tenggara', 'Rp. 300.000', 'Tidak ada', '085255938568', 'Gazebo, toilet, banana boat', 'Kasoami', 'Pantai', '07.00 - 18.00'),
(5, 'Taman Nasional Wakatobi', 'wakatobi.jpeg', 'Namanya tidak asing di telinga dan kita sering mendengar nama pantai ini, pantai ini merupakan salah', 'Lagiwae, Ambeua, Kec. Kaledupa, Kab. Wakatobi, Sulawesi Tenggara', 'Rp. 400.000', 'Ada', '085255938568', 'Villa, mushala', 'Sate pokea', 'Pantai', '06.00 - 18.00'),
(6, 'Puncak Ahuawali', 'ahuawali.jpg', 'Pada mulanya Puncak Ahuawali mulai dikenal karena viral di beberapa media sosial. Keindahan savana l', 'Desa. Sonai, Kec. Puriala, Kab. Konawe, Sulawesi Tenggara', 'Rp. 100.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Pegunungan', '24 Jam'),
(7, 'Puncak Popalia', 'popalia.jpg', 'Gunung atau puncak Popalia saat ini menjadi salah satu pilihan destinasi wisata camping bagi Anda pe', 'Desa Ranowila, Kecamatan Wolasi, Kabupaten Konsel, Sulawesi Tenggara', 'Rp. 100.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Pegunungan', '06.00 - 24.00'),
(8, 'Gunung Pariama', 'pariama.jpg', 'Gunung pariama atau lebih dikenal dengan nama gunung oheo, merupakan lambang dari kabupaten konawe u', ' Linomoiyo, Kec. Oheo, Konawe Utara, Sulawesi Tenggara', 'Rp. 100.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Pegunungan', '24 jam'),
(9, 'Gunung Mekongga', 'mekongga.jpg', 'Gunung Mekongga merupakan gunung tertinggi di pegunungan Mekongga yang membentang di sisi utara wila', 'Dusun Surolako, Desa Rantebaru di Kecamatan Ranteangin, Kolaka Utara, Sulawesi Tenggara', 'Rp. 100.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Pegunungan', '24 jam'),
(10, 'Puncak Masalili', 'masalili.jpg', 'Puncak yang ada di Kabupaten Muna Sulawesi Tenggara tersebut merupakan tempat wisata yang ekstrim ka', 'Desa Masalili, Kecamatan Kontunaga, Kabupaten Muna, Sulawesi Tenggara', 'Rp. 200.000', 'Tidak ada', '085255938568', 'Lahan parkiran', 'Tidak ada', 'Pegunungan', '08.00 - 18.00'),
(11, 'Wisata Tenun Buton', 'tenun-buton.jpg', 'Kerajinan tenun dari Kabupaten Buton, Sulawesi Tenggara biasanya menggambarkan obyek alam yang merek', 'Buton, Sulawesi Tenggara', 'Rp. 300.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Budaya', '09.00 - 16.00'),
(12, 'Upacara Adat Posuo', 'posuo.jpg', 'Posuo di masyarakat Jawa disebut pingitan. Dalam tatanan masyarakat Buton, posuo diartikan sebagai s', 'Buton, Sulawesi Tenggara', 'Rp. 300.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Budaya', 'Pada hari - hari tertentu saja'),
(13, 'Upacara Adat Kabuenga', 'kabuenga.jpg', 'Kabuenga merupakan tradisi mencari pasangan hidup khas Kabupaten Wakatobi. Tradisi ini bermula ketik', 'Wakatobi, Sulawesi Tenggara', 'Rp 500.000', 'Ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Budaya', 'Pada hari - hari tertentu saja'),
(14, 'Upacara Adat Karia', 'karia.jpg', 'Upacara adat Karia’a adalah sama dengan perayaan sunatan. Upacara ini biasanya dilakukan oleh Suku B', 'Buton dan Muna, Sulawesi Tenggara', 'Rp 300.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Budaya', 'Pada hari - hari tertentu saja'),
(15, 'Gua Liangkobori', 'liangkobori.jpg', 'Kawasan situs Gua Liangkabori menjadi bukti sejarah kehidupan peradaban suku Muna pada zaman praseja', 'Desa Liangkobori, Kabupaten Muna, Sulawesi Tenggara', 'Rp 300.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Budaya', '09.00 - 17.00'),
(16, 'Masjid Agung Wolio', 'agung.jpeg', 'Masjid bersejarah yang diyakini sebagai masjid tertua di Sulawesi Tenggara. Masjid ini bernama Masji', 'Jalan Sultan Labuke, Melai, Murhum, Kota Bau-Bau, Sulawesi Tenggara.', 'Rp. 300.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Religi', '24 jam'),
(17, 'Masjid Agung Khaera Ummah ', 'liya.jpg', 'Dilansir dari telisik, Masjid Keraton Liya atau disebut juga Masjid Mubaroq ini sudah ada sejak 1546', 'Desa Liya Togo, Kecamatan Wangi-wangi Selatan, Kabupaten Wakatobi, Provinsi Sulawesi Tenggara.', 'Rp. 500.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Religi', '24 jam'),
(18, 'Masjid Agung Khaera Ummah ', 'ummah.jpg', 'Keberadaan Masjid Agung Khaera Ummah tepat berada di tepi Laut Kolaka. Masjid ini menjadi ikon Kabup', 'Jalan Pahlawan No.28, Watuliandu, Kolaka, Kabupaten Kolaka, Sulawesi Tenggara.', 'Rp. 200.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Religi', '24 jam'),
(19, 'Makam Sultan Murhum', 'makam.jpg', 'Menurut berbagai sumber, Sultan Murhum merupakan tokoh yang memerintah Kerajaan Buton selama 26 tahu', 'Melai, Murhum, Kota Bau-Bau, Sulawesi Tenggara.', 'Rp. 300.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Religi', '08.00 - 17.00'),
(20, 'Masjid Muna', 'muna.jpg', 'Bangunan masjid ini pun sudah tak asli. Menurut Sirad Imbo, saat Maola Daud menjabat sebagai Bupati ', 'Lakologou, Kec. Tongkuno, Kabupaten Muna, Sulawesi Tenggara ', 'Rp. 200.000', 'Tidak ada', '085255938568', 'Tidak ada', 'Tidak ada', 'Religi', '06.00 - 18.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
