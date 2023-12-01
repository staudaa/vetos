-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 22 Nov 2023 pada 14.23
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int NOT NULL,
  `id_kandidat` int NOT NULL,
  `id_pemilih` int NOT NULL,
  `tanggal_jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_kandidat`, `id_pemilih`, `tanggal_jam`) VALUES
(3, 2, 2, '2023-11-22 10:55:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int NOT NULL,
  `nama_ketos` varchar(100) NOT NULL,
  `nama_waketos` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `visi` varchar(100) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_ketos`, `nama_waketos`, `image`, `visi`, `misi`) VALUES
(2, 'Siti Qomariatul Maulidia', 'Tabina Faisa Pribadi', 'Kandidat 1.png', 'Memajukan SMKN 1 Bondowoso', 'Smakensa Jaya!'),
(3, 'Zaskia Afrina Khaliq', 'Ananta Widayani', 'Kandidat 2.png', 'Berbangsa dan Bernegara', 'SMAKENSA jaya jaya jaya!'),
(4, 'Arif Hidayatullah', 'Achmad Abdillah', 'Kandidat 3.png', 'Bertaqwa kepada Tuhan yang maha esa', 'Beribadah sepanjang waktu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int NOT NULL,
  `username` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `NISN` varchar(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `username`, `nama`, `password`, `NISN`, `alamat`) VALUES
(1, 'rauda', 'Siti Raudatul Jannah', '12a6abda1fbda0472ebf929debb0ac29a6197293', '0212457845', 'Sukowiryo, Bondowoso'),
(2, 'ananta', 'Ananta Widayani', '6e025a7033791d6963297eb51aeb502140f2bb00', '0312457845', 'Tamanan, Bondowoso'),
(4, 'zaskia', 'Zaskia Afrina Khaliq', '1fbfad569b8bc5c95a87a25124eb0eda9f167965', '0312457845', 'Kajar, Bondowoso'),
(5, 'tabina', 'Tabina', '006c456c8920e6c660a278d87f4d9d08a452906e', '02147483647', 'Tamansari'),
(6, 'maulidia', 'Maulidia', 'dba97f5d524cf2c7d0a66fd51116f092fc397f82', '0312457845', 'Kademangan'),
(7, 'ina', 'ina', 'fe01c3c89f2fb24960a9902fcbd1d8429323df5c', '0312457845', 'Tamansari'),
(8, 'dia', 'dia', '4967e07bc327c714541206122152ddfcfdb5b27c', '0312457845', 'Kademangan'),
(9, 'abdil', 'abdil', '4ca7758edf734de3cce5c8f763413bf34620ca90', '0345781689', 'Dabasah'),
(10, 'arif', 'arif', 'bb6113797d13f9451665a7591e5943986f546dfa', '0369874512', 'Sekar putih'),
(11, 'vina', 'vina', '52ad0ba3fab9a65d95e77fae3a4bb5b02f309f85', '0312568978', 'Tapen, Bondowoso'),
(12, 'maida', 'maida', 'e9668513d400cea82c23e596491d015f6141fd69', '02147483647', 'Kembang, Bondowoso');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int NOT NULL COMMENT '1:admin,2:siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(1, 'rauda', 'rauda@gmail.com', '12a6abda1fbda0472ebf929debb0ac29a6197293', 1),
(2, 'ananta', 'ananta@gmail.com', 'feb4ee1caf81d7491d4bab29ebc039ac1b12e60a', 2),
(4, 'zaskia', 'zaskia@gmail.com', '1fbfad569b8bc5c95a87a25124eb0eda9f167965', 2),
(5, 'tabina', 'tabina@gmail.com', 'a7f8baff932c059f4badd4887b16bf25fa6dca7e', 0),
(6, 'maulidia', 'maulidia@gmail.com', 'dba97f5d524cf2c7d0a66fd51116f092fc397f82', 0),
(7, 'ina', 'ina@gmail.com', 'ccc4b284d5a328798bee23673513f427cfd56b77', 0),
(8, 'dia', 'dia@gmail.com', '4967e07bc327c714541206122152ddfcfdb5b27c', 0),
(9, 'abdil', 'abdil@gmail.com', '4ca7758edf734de3cce5c8f763413bf34620ca90', 0),
(10, 'arif', 'arif@gmail.com', 'bb6113797d13f9451665a7591e5943986f546dfa', 0),
(11, 'vina', 'vina@gmail.com', '9dd2e37f8284b26ffdaffe001e4f6ffa7891e370', 0),
(12, 'maida', 'maida@gmail.com', '51bdd402507020504743dd5d484a808b1107016f', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_kandidat` (`id_kandidat`),
  ADD KEY `id_pemilih` (`id_pemilih`);

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`),
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`id_pemilih`) REFERENCES `pemilih` (`id_pemilih`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
