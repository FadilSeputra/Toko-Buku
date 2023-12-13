-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2023 pada 17.33
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `card_buku`
--

CREATE TABLE `card_buku` (
  `id_buku` int(11) NOT NULL,
  `gambar_buku` varchar(32) NOT NULL,
  `judul_buku` varchar(32) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(32) DEFAULT NULL,
  `penerbit` varchar(32) DEFAULT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga_satuan` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `card_buku`
--

INSERT INTO `card_buku` (`id_buku`, `gambar_buku`, `judul_buku`, `deskripsi`, `penulis`, `penerbit`, `tahun_terbit`, `stok`, `harga_satuan`) VALUES
(2, 'card.png', 'Rich Dad Poor Dad', 'Menunjukan kepada orangtua kenapa mereka tidak bisa mengandalkan sistem pendidikan untuk mengajari anak mereka tentang uang', 'Robert Kiyosaki', 'Gramedia  Pustaka Utama', 2016, 99, '51000'),
(3, 'card.png', 'Mata di Tanah Melus', 'Pesawat kecil kami mendarat di negeri antah-berantah. Saat pesawat itu mulai merendah, aku bisa melihat hamparan hijau yang tak terlalu lebat, juga tak benar-benar hijau. Hijau yang kering dan lesu, namun justru terlihat ramah dan tak menakutkan untukku. Perjalanan ke salah satu wilayah terluar Indonesia mengantarkan Matara, gadis berusia dua belas tahun, pada petualangan menakjubkan yang belum pernah ia bayangkan. Dunia yang serba ganjil pun menjadi sebuah kenyataan baru untuknya.', 'Okky Madasari', 'Gramedia Pustaka Utama', 2018, 99, '45.000'),
(4, 'card.png', 'Garis Waktu', 'Pada sebuah garis waktu yang merangkak maju, akan ada saatnya kau bertemu dengan satu orang yang mengubah hidupmu untuk selamanya.\r\nPada sebuah garis waktu yang merangkak maju, akan ada saatnya kau terbuka dan kehilangan pegangan.\r\nPada sebuah garis waktu yang merangkak maju, akan ada saatnya kau ingin melompat mundur pada titik-titik kenangan tertentu.\r\nMaka, ikhlaskan saja kalau begitu.Karena sesungguhnya,yang lebih menyakitkan dari melepaskan sesuatu adalah berpegangan pada sesuatu yang menyakitimu secara perlahan. \r\n', 'Fiersa Besari', 'Media Kita', 2016, 99, '70.000'),
(5, 'card.png', 'Disforia Inersia', 'Disforia adalah keadaan tidak tenang/gelisah/ketidak puasan yang mendalam. Sedangkan Inersia adalah kecenderungan semua benda fisik untuk menolak perubahan terhadap keadaan geraknya. Maka Disforia Inersia adalah tentang kegelisahan seseorang yang masih menolak untuk menerima dan melanjutkan hidupnya setelah berbagai hal yang menyiksa batinnya; yang pada akhirnya harus dia terima. \r\n', 'Wira Setianagara', 'Media Kita', 2018, 99, '55.000'),
(10, 'card.png', 'Pyschology Money', '', 'Nenda', NULL, NULL, 99, '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku_fantasi`
--

CREATE TABLE `data_buku_fantasi` (
  `id_buku` int(11) NOT NULL,
  `gambar_buku` varchar(32) NOT NULL,
  `judul_buku` varchar(32) NOT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(32) NOT NULL,
  `penerbit` varchar(32) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_buku_fantasi`
--

INSERT INTO `data_buku_fantasi` (`id_buku`, `gambar_buku`, `judul_buku`, `deskripsi`, `penulis`, `penerbit`, `tahun_terbit`, `stok`, `harga_satuan`) VALUES
(1, 'card.png', 'Bumi', '', 'Tere Liye', '', 0000, 99, 25000),
(2, 'card.png', 'Tujuh Kelana', '', 'Nellaneva', '', 0000, 99, 98000),
(3, 'card.png', 'Hujan', 'Novel Hujan merupakan novel yang mengisahkan kisah cinta serta perjuangan hidup Lail. Saat usianya baru menginjak 13 tahun, Lail menjadi seorang yatim piatu akibat ayah dan ibu Lail yang terkena letusan Gunung Api Purba dan gempa yang membuat kota tempat mereka tinggal hancur. \r\n\r\n\r\n\r\nLail yang pada saat itu juga termasuk korban bencana berhasil diselamatkan oleh anak laki-laki bernama Esok. Lail dan Esok akhirnya menjadi sepasang yang tak terpisahkan sampai akhirnya mereka harus berpisah karena tempat pengungsian yang mereka tinggali tutup. Lail akhirnya menetap di sebuah panti sosial dan Esok diangkat menjadi anak salah satu keluarga. \r\n\r\n\r\n\r\nMereka menjalani kehidupannya masing-masing. Pertemuan mereka untuk melepas rindu dilakukan rutin sebulan sekali meski akhirnya jadwal pertemuan harus diubah akibat Esok yang harus meneruskan pendidikan di Ibu Kota. Pertemuan mereka berubah menjadi setiap Esok berlibur semester. Frekuensi pertemuan keduanya semakin jarang. \r\n\r\n\r\n\r\nSampai suatu ketika, ayah angkat Esok, wali kota, menemui Lail dan memohon agar Lail menolak tiket yang akan diberikan esok agar tiket tersebut dapat diberikan ke anaknya. Kesalahpahaman pun terjadi. Lail tak kunjung mendapatkan kabar dari Esok. Akhirnya, Lail memutuskan untuk masuk ke ruang modifikasi ingatan. Lail ingin semua memori dan beban yang ada di ingatannya menghilang. Lantas apa yang akan terjadi pada kisah Lail dan Esok?\r\n\r\n\r\n', 'Tere Liye', 'Sabak Grip', 2022, 99, 80000),
(4, 'card.png', 'Harry Potter dan Batu Bertuah', 'Harry Potter dan Batu Bertuah adalah novel fantasi karangan penulis Inggris J. K. Rowling yang merupakan novel pertama dalam seri Harry Potter dan novel debut Rowling. Novel ini mengisahkan mengenai Harry Potter, seorang anak yatim piatu yang mengetahui bahwa ia adalah penyihir pada ulang tahunnya yang kesebelas ketika ia menerima undangan untuk menghadiri Sekolah Sihir Hogwarts. Voldemort adalah penyihir yang membunuh orang tua Harry, tetapi gagal membunuhnya ketika ia berusia 15 bulan. Batu Bertuah memenangkan sebagian besar penghargaan buku di Inggris yang dinilai oleh anak-anak dan sejumlah penghargaan lainnya di AS.', 'J.K Rowling', 'Gramedia Pustaka Utama ', 2020, 99, 78000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_system`
--

CREATE TABLE `login_system` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `last_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_co`
--

CREATE TABLE `tb_co` (
  `id_user` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_kontak` varchar(32) NOT NULL,
  `judul_buku` varchar(32) NOT NULL,
  `harga_satuan` varchar(32) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_co`
--

INSERT INTO `tb_co` (`id_user`, `name`, `email`, `alamat`, `nomor_kontak`, `judul_buku`, `harga_satuan`, `catatan`) VALUES
(1, 'nendaseputra', 'nendaseputra@gmail.com', 'Bintang Alam Blok F no 14 B,,Jawa Barat,41361,Indonesia', '', 'Pyschology Money', '', ''),
(2, 'nendaseputra', 'nendaseputra@gmail.com', 'Jl Jend Sudirman 217, Jawa Tengah', '087899333666', 'Pyschology Money', '100000', 'dasfd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(32) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `name`, `email`, `username`, `password`, `level`, `last_login`) VALUES
(6, 'nendaseputra', 'nendaseputra@gmail.com', 'nendaseputra', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', '2023-07-18 12:21:51'),
(7, 'Fadil Seputra', 'fadilseputra99@gmail.com', 'fadilseputra99', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', '2023-07-18 14:04:44'),
(8, 'Lawlieth', 'baenenda130@gmail.com', 'Law', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', '2023-07-21 01:58:26'),
(11, 'open', 'newopen@gmail.com', 'open', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', '2023-07-21 16:38:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `card_buku`
--
ALTER TABLE `card_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `data_buku_fantasi`
--
ALTER TABLE `data_buku_fantasi`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `login_system`
--
ALTER TABLE `login_system`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_co`
--
ALTER TABLE `tb_co`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `card_buku`
--
ALTER TABLE `card_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_buku_fantasi`
--
ALTER TABLE `data_buku_fantasi`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `login_system`
--
ALTER TABLE `login_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_co`
--
ALTER TABLE `tb_co`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
