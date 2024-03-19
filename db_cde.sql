-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2024 pada 00.57
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cde`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aluno`
--

CREATE TABLE `aluno` (
  `emis` char(10) NOT NULL,
  `nie` char(8) NOT NULL,
  `naran` varchar(35) NOT NULL,
  `id_klase` int(11) NOT NULL,
  `helafatin` text NOT NULL,
  `nu_telf` varchar(13) NOT NULL,
  `id_cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aluno`
--

INSERT INTO `aluno` (`emis`, `nie`, `naran`, `id_klase`, `helafatin`, `nu_telf`, `id_cap`) VALUES
('121', '8080', 'Carlito Da Cunha ', 5, 'Behali', '75601170', 4),
('1234', '1234', 'Zelio', 4, 'Hera', '75601170', 4),
('124', '8080', 'Manuel Mendonca', 5, 'Fomento I', '74323636', 4),
('130', '8080', 'Rivaldo Assis', 5, 'Delta III', '75601170', 1),
('223', '123', 'Olito Fernandes', 4, 'Hera', '75601170', 1),
('9061279', '12345', 'Rivaldo Sancho Tilman Cardoso', 6, 'Hera', '75601170', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cap`
--

CREATE TABLE `cap` (
  `id_cap` int(11) NOT NULL,
  `tinan` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cap`
--

INSERT INTO `cap` (`id_cap`, `tinan`, `nominal`) VALUES
(1, 2023, 300),
(4, 2022, 250);

-- --------------------------------------------------------

--
-- Struktur dari tabel `klase`
--

CREATE TABLE `klase` (
  `id_klase` int(11) NOT NULL,
  `naran_klase` varchar(10) NOT NULL,
  `kompetensi_habilidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `klase`
--

INSERT INTO `klase` (`id_klase`, `naran_klase`, `kompetensi_habilidade`) VALUES
(4, 'Turma A', 'TGEI - HARDWARE'),
(5, 'Turma B', 'TGEI - HARDWARE'),
(6, 'Turma C', 'TGEI - HARDWARE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pagamento`
--

CREATE TABLE `pagamento` (
  `id_selu` int(11) NOT NULL,
  `id_staf` int(11) NOT NULL,
  `emis` varchar(10) NOT NULL,
  `data_pagamento` date NOT NULL,
  `fulan_selu` varchar(8) NOT NULL,
  `tinan_selu` varchar(4) NOT NULL,
  `id_cap` int(11) NOT NULL,
  `total_selu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pagamento`
--

INSERT INTO `pagamento` (`id_selu`, `id_staf`, `emis`, `data_pagamento`, `fulan_selu`, `tinan_selu`, `id_cap`, `total_selu`) VALUES
(33, 1, '121', '2023-12-08', 'Novembru', '2022', 4, 100),
(34, 1, '121', '2023-12-11', 'Novembru', '2019', 4, 150),
(35, 1, '124', '2023-12-16', 'Setembru', '2018', 4, 50),
(36, 1, '130', '2023-11-29', 'Outubru', '2022', 1, 200),
(37, 1, '130', '2023-12-06', 'Desembru', '2023', 1, 100),
(40, 1, '223', '2024-01-19', 'Desembru', '2024', 1, 100),
(41, 1, '9061279', '2024-01-20', 'Desembru', '2024', 1, 150),
(42, 1, '1234', '2024-01-19', 'Desembru', '2024', 4, 250);

-- --------------------------------------------------------

--
-- Struktur dari tabel `staf`
--

CREATE TABLE `staf` (
  `id_staf` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `naran_staf` varchar(35) NOT NULL,
  `level` enum('admin','staf') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staf`
--

INSERT INTO `staf` (`id_staf`, `username`, `password`, `naran_staf`, `level`) VALUES
(1, 'admin', 'admin', 'Admin', 'admin'),
(6, 'staf1', 'a', 'Staf', 'staf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`emis`),
  ADD KEY `id_cap` (`id_cap`),
  ADD KEY `id_klase` (`id_klase`);

--
-- Indeks untuk tabel `cap`
--
ALTER TABLE `cap`
  ADD PRIMARY KEY (`id_cap`);

--
-- Indeks untuk tabel `klase`
--
ALTER TABLE `klase`
  ADD PRIMARY KEY (`id_klase`);

--
-- Indeks untuk tabel `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_selu`),
  ADD KEY `id_cap` (`id_cap`),
  ADD KEY `id_staf` (`id_staf`),
  ADD KEY `emis` (`emis`);

--
-- Indeks untuk tabel `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id_staf`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cap`
--
ALTER TABLE `cap`
  MODIFY `id_cap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `klase`
--
ALTER TABLE `klase`
  MODIFY `id_klase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_selu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `staf`
--
ALTER TABLE `staf`
  MODIFY `id_staf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`id_cap`) REFERENCES `cap` (`id_cap`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aluno_ibfk_2` FOREIGN KEY (`id_klase`) REFERENCES `klase` (`id_klase`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`id_cap`) REFERENCES `cap` (`id_cap`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pagamento_ibfk_2` FOREIGN KEY (`id_staf`) REFERENCES `staf` (`id_staf`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pagamento_ibfk_3` FOREIGN KEY (`emis`) REFERENCES `aluno` (`emis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
