-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 05:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamanagementapplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(100) NOT NULL,
  `sip` varchar(100) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `sip`, `nama_dokter`, `ttl`, `jenis_kelamin`, `alamat`, `no_telp`, `spesialis`) VALUES
('17c564a1-bdcc-4eea-8092-31c3b64ad5d4', '000014', 'Dr. Isfan', 'Jakarta, 25 September 2002', 'Laki-Laki', 'Jakarta', '81807111876', 'Dokter Umum'),
('2459479d-0ca2-47d9-a16d-eca4257767db', '000008', 'Dr. Dandy', 'Jakarta, 25 September 2009', 'Laki-Laki', 'Jakarta', '81807111876', 'Dokter Umum'),
('3643e55d-fdea-4e22-b0c8-d30859b930bf', '000006', 'Dr. Camilla', 'Jakarta, 25 September 1996', 'Perempuan', 'Jakarta', '81807111876', 'Dokter Umum'),
('5df43a2b-7451-4af5-8cc1-af258b9abba3', '000016', 'Dr. Jumar', 'Jakarta, 25 September 2006', 'Laki-Laki', 'Jakarta', '81807111876', 'Dokter Umum'),
('6312b324-b179-4ff4-a77b-e8e0e9e5bd1b', '000011', 'Dr. Fadwa', 'Jakarta, 25 September 2008', 'Laki-Laki', 'Jakarta', '81807111876', 'Dokter Umum'),
('7b63750d-2e26-4f9c-bae8-110a9f87cd05', '000017', 'Dr. Marsya', 'Jakarta, 25 September 1995', 'Perempuan', 'Jakarta', '81865348764', 'Dokter Umum'),
('8404f510-005b-43fd-adeb-1368027ffb1a', '000004', 'Dr. Anjas', 'Jakarta, 25 September 2003', 'Laki-Laki', 'Jakarta', '081876261672', 'Dokter Umum'),
('8a3cdd11-824a-46bd-9441-da85334f5031', '000005', 'Dr. Bima', 'Jakarta, 25 September 1990', 'Laki-Laki', 'Jakarta', '81807111876', 'Dokter Umum'),
('94de5409-d010-48ca-8d31-d26f4be1280d', '000013', 'Dr. Imron', 'Jakarta, 25 September 1993', 'Laki-Laki', 'Jakarta', '81807111876', 'Dokter Umum'),
('9a92d31e-bdcc-4fb4-9850-9785b7fcc4dc', '000003', 'Dr. Aldi', 'Jakarta, 25 September 1997', 'Laki-Laki', 'Jakarta', '081876261672', 'Dokter Umum'),
('b0c02161-2529-41ab-aa51-7e0d9ab6544f', '000012', 'Dr. Fahri', 'Jakarta, 25 September 2001', 'Laki-Laki', 'Jakarta', '81865348764', 'Dokter Umum'),
('b86a29b2-9124-4d18-bfd2-d573eb7b2a20', '000019', 'Dr. Saddam', 'Bekasi, 25 September 1991', 'Laki-Laki', 'Jakarta', '081865348764', 'Dokter Umum'),
('bc57acfb-5b49-452e-9973-3543218aad49', '000007', 'Dr. Citra', 'Jakarta, 25 September 1994', 'Perempuan', 'Jakarta', '081876261672', 'Dokter Umum'),
('bfe85e3c-5a5f-4e0a-9f6e-dade9590b40e', '000020', 'Dr. Syarif', 'Jakarta, 25 September 2000', 'Laki-Laki', 'Jakarta', '081876261672', 'Dokter Umum'),
('ca99e397-a854-4d34-8772-4ff54e3ef429', '000001', 'Dr. Agung', '<p>Jakarta, 25 September 1980</p>\r\n', 'Laki-Laki', '<p>Bekasi</p>\r\n', '081876261672', 'Dokter Umum'),
('dbdb8102-04cc-4073-ba5c-e9c520bcc8c7', '000022', 'Dr. Velia', 'Jakarta, 25 September 1998', 'Perempuan', '<p>Jakarta</p>\r\n', '081865348764', 'Dokter Umum'),
('e421fad7-f17d-486e-9103-c59e6dd7d1a8', '000021', 'Dr. Syifa', 'Bekasi, 25 September 1988', 'Perempuan', 'Jakarta', '81807111876', 'Dokter Umum'),
('e5cfb84b-f911-475c-9638-e38e7fc2ac6c', '000010', 'Dr. Dinastiara', 'Bekasi, 25 September 1998', 'Perempuan', 'Jakarta', '081876261672', 'Dokter Umum'),
('e9e3e6e3-217d-4bf8-ae72-1f9496db4d99', '000009', 'Dr. Deden', 'Jakarta, 25 September 1992', 'Laki-Laki', 'Jakarta', '81865348764', 'Dokter Umum'),
('eb2f9c89-654f-4490-801c-2ba81f08b8ee', '000018', 'Dr. Rama', 'Jakarta, 25 September 2007', 'Laki-Laki', 'Jakarta', '81807111876', 'Dokter Umum'),
('ed82102f-2624-4f63-bd4f-5543467a84ec', '000002', 'Dr. Ahmad', 'Jakarta, 25 September 1999', 'Laki-Laki', 'Jakarta', '81807111876', 'Dokter Umum');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(100) NOT NULL,
  `no_rm` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_rm`, `nama_pasien`, `ttl`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('020dd923-68b7-4814-9746-aa94f48543e6', '000032', 'Agam', 'Jakarta, 25 September 2001', 'Laki-Laki', 'Jakarta', '081876261672'),
('035ec80e-c743-4edb-920e-dfd8b23a5874', '000019', 'Rust', 'Jakarta, 25 September 1980', 'Laki-Laki', 'Jakarta', '0992817290'),
('0601acd4-b557-4e8b-adbb-45708dcadbac', '000004', 'Bima', 'Jakarta, 25 September 1990', 'Laki-Laki', 'Jakarta', '081876261672'),
('063b0531-5950-45d6-9e5b-0df865007910', '000018', 'Susy', 'Jakarta, 25 September 2004', 'Perempuan', 'Jakarta', '081876261672'),
('06feb923-de81-43a4-9fc0-7f6cf71af5f9', '000002', 'Dinastiara', 'Bekasi, 25 September 1998', 'Perempuan', 'Jakarta', '081876261672'),
('08a0a1e1-19f0-4d4d-ab38-761276d52b76', '000025', 'Adam', 'Jakarta, 25 September 1990', 'Laki-Laki', 'Jakarta', '081876261672'),
('14a96ce0-1303-4610-8521-4ff7bf2731ca', '000031', 'Adya', 'Jakarta, 25 September 2008', 'Laki-Laki', 'Jakarta', '081876261672'),
('15e9181f-85be-4a40-858c-b4f4631af0be', '000016', 'Isfan', 'Jakarta, 25 September 2002', 'Laki-Laki', 'Jakarta', '081876261672'),
('1752b646-7efa-4277-b8a2-8efc0596693e', '000017', 'Anjas', 'Jakarta, 25 September 2003', 'Laki-Laki', 'Jakarta', '081876261672'),
('1a4a3ed9-ff74-4cf3-aa3f-da5bd0bb6891', '000022', 'Abian', 'Jakarta, 25 September 1999', 'Laki-Laki', 'Jakarta', '81807111876'),
('1bee3d68-e306-4750-9e27-b4434f2e9b07', '000024', 'Aciel', 'Jakarta, 25 September 2003', 'Laki-Laki', 'Jakarta', '081876261672'),
('24a5a875-b9dc-4985-b33b-d06ca08922f3', '000012', 'Velia', 'Jakarta, 25 September 1998', 'Perempuan', 'Jakarta', '081876261672'),
('2fe0ee08-a788-4e42-af55-d3a9b805aca2', '000014', 'Syarif', 'Jakarta, 25 September 2000', 'Laki-Laki', 'Jakarta', '081876261672'),
('34c79df4-79e9-435a-a989-ebb5a650a6bc', '000040', 'Candra', 'Jakarta, 25 September 2000', 'Laki-Laki', 'Jakarta', '081876261672'),
('34e0e5c4-3e07-415e-908a-ba93b7ed4e74', '000036', 'Bagas', 'Jakarta, 25 September 2006', 'Laki-Laki', 'Jakarta', '081876261672'),
('3c55a9a7-3380-4317-9a84-06789303005e', '000041', 'Cakra', 'Bekasi, 25 September 1988', 'Perempuan', 'Jakarta', '081876261672'),
('3d2ab5db-5506-4441-aa31-d4254b22c204', '000037', 'Bastian', 'Jakarta, 25 September 1995', 'Perempuan', 'Jakarta', '081876261672'),
('44323a4a-72d4-430e-b95c-1e7b9bcc4bcf', '000007', 'Imron', 'Jakarta, 25 September 1993', 'Laki-Laki', 'Jakarta', '081876261672'),
('4df9c5d1-8b6a-4d4d-adc6-813f60983f82', '000030', 'Adrian', 'Bekasi, 25 September 1998', 'Perempuan', 'Jakarta', '081876261672'),
('54b7318f-bd1c-4e89-b3a7-763c94629532', '000003', 'Saddam', 'Bekasi, 25 September 1998', 'Laki-Laki', 'Jakarta', '081876261672'),
('7bf8c7b1-4277-4a5b-b888-70780d5cb854', '000008', 'Citra', 'Jakarta, 25 September 1994', 'Perempuan', 'Jakarta', '081876261672'),
('7cae57d0-8d6a-4f62-ad70-6c3a8131851c', '000027', 'Adelio', 'Jakarta, 25 September 1994', 'Perempuan', 'Jakarta', '081876261672'),
('80ca5bd1-93b4-4e37-9077-82fc020adf6a', '000038', 'Baron', 'Jakarta, 25 September 2007', 'Laki-Laki', 'Jakarta', '081876261672'),
('88619e39-2411-46a3-8d7e-e7c8d92958a0', '000011', 'Aldi', 'Jakarta, 25 September 1997', 'Laki-Laki', 'Jakarta', '081876261672'),
('9a7352e3-5aff-4c01-99d7-7439afc912c3', '000034', 'Ainsley', 'Jakarta, 25 September 2002', 'Laki-Laki', 'Jakarta', '081876261672'),
('9b18cc50-18c4-40f4-bae2-b3fefb6e91dd', '000026', 'Adelard', 'Jakarta, 25 September 1996', 'Perempuan', 'Jakarta', '081876261672'),
('a0015bcd-9f54-43d0-a052-ec2492412d46', '000005', 'Agung', 'Jakarta, 25 September 1991', 'Laki-Laki', 'Jakarta', '081876261672'),
('a5f61b86-4b82-4e57-9eb2-381b4672da27', '000023', 'Abraham', 'Jakarta, 25 September 1997', 'Laki-Laki', 'Jakarta', '081876261672'),
('aaa19e07-c015-4a9a-a3f3-9fe2e640bc0e', '000039', 'Brian', 'Bekasi, 25 September 1998', 'Laki-Laki', 'Jakarta', '081876261672'),
('ada9eab9-ba1c-4376-b49f-9674659c883d', '000001', 'Syifa', '<p>Jakarta, 23 September 1985</p>\r\n', 'Perempuan', '<p>Bekasi</p>\r\n', '0897661890'),
('ae4f0c05-a012-4bcd-a1ae-cb06ede3d9d7', '000042', 'Syifa', '<p>dfdfd</p>\r\n', 'Perempuan', '<p>fdfdf</p>\r\n', '4343'),
('bda9832c-4d1b-4bcc-ad47-5b147f453b0e', '000009', 'Marsya', '<p>Jakarta, 25 September 1995</p>\r\n', 'Perempuan', '<p>Jakarta</p>\r\n', '081876261672'),
('be0c49bc-046d-4f4c-8b9c-36c2f9036116', '000033', 'Agler', 'Jakarta, 25 September 1993', 'Laki-Laki', 'Jakarta', '081876261672'),
('c0682ac9-7878-4544-ac30-717823f616db', '000010', 'Camilla', 'Jakarta, 25 September 1996', 'Perempuan', 'Jakarta', '081876261672'),
('c72fad82-f47d-49db-8a3b-1764049710b8', '000028', 'Aditya', 'Jakarta, 25 September 2009', 'Laki-Laki', 'Jakarta', '081876261672'),
('cdfafc91-608e-4637-bb3e-47c3c4f50cc8', '000013', 'Ahmad', 'Jakarta, 25 September 1999', 'Laki-Laki', 'Jakarta', '81807111876'),
('d3d879cb-8f01-4a88-9d46-b090dde7273a', '000006', 'Deden', 'Jakarta, 25 September 1992', 'Laki-Laki', 'Jakarta', '081876261672'),
('d594a36d-3205-4b5b-8119-1062f0e8a5c8', '000029', 'Adnan', 'Jakarta, 25 September 1992', 'Laki-Laki', 'Jakarta', '081876261672'),
('d6bb0c2f-4e07-44b6-b355-f6676554c133', '000020', 'Jumar', 'Jakarta, 25 September 2006', 'Laki-Laki', 'Jakarta', '081876261672'),
('d74b1929-5784-4dec-b5ef-bc7cbb14a9bd', '000015', 'Fahri', 'Jakarta, 25 September 2001', 'Laki-Laki', 'Jakarta', '081876261672'),
('df68d9fb-1251-4242-b646-71acc5140420', '000021', 'Aarav', 'Jakarta, 25 September 1991', 'Laki-Laki', 'Jakarta', '081876261672'),
('ef5311c5-712a-452d-b305-4d8b52751cc5', '000035', 'Arlo', 'Jakarta, 25 September 2004', 'Perempuan', 'Jakarta', '081876261672');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rm` varchar(100) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `no_rm` varchar(100) NOT NULL,
  `id_pasien` varchar(100) NOT NULL,
  `id_dokter` varchar(100) NOT NULL,
  `jenis_patologi` varchar(1000) NOT NULL,
  `diagnosis` varchar(1000) NOT NULL,
  `hasil_pembayaran` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rm`, `tgl_periksa`, `no_rm`, `id_pasien`, `id_dokter`, `jenis_patologi`, `diagnosis`, `hasil_pembayaran`) VALUES
('316ea8a7-692d-49e4-a29b-180865862edf', '2023-03-12', '000003', '54b7318f-bd1c-4e89-b3a7-763c94629532', 'ca99e397-a854-4d34-8772-4ff54e3ef429', '<p>FLU</p>\r\n', '<p>Pilex Ringan</p>\r\n', '200.000'),
('51cb7ebe-f9db-45e0-869b-2f7c3853afb8', '2023-12-29', '000002', '06feb923-de81-43a4-9fc0-7f6cf71af5f9', 'ca99e397-a854-4d34-8772-4ff54e3ef429', '<h3>Histopatologi</h3>\r\n', '<p>1. Diagnosis: Suspek</p>\r\n\r\n<p>2. Makroskopik: Jaringan compang campingbla bla bla</p>\r\n\r\n<p>3. Mikroskopik: Sediaan menunjukkan keping jaringan tumor ganas bla bla bla</p>\r\n\r\n<p>4. Kesimpulan: Histologis sesuai dengan Karsinoma sel</p>\r\n', '200.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`) VALUES
('03deb3b3-41bc-11ee-b037-088fc343e999', 'Bima Sanjaya', 'bimasanjaya', '10a87fe821ee147bfb43ae63369bdd7f3c67c7b1'),
('83847570-41bb-11ee-b037-088fc343e999', 'Admin Klinik Prima Utama Medika', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
