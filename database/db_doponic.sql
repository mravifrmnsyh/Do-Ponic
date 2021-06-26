-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2021 pada 02.45
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_doponic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `date`, `judul`, `tag`, `deskripsi`, `gambar`) VALUES
(1, '2021-06-23', 'Trend Bertanam Akan Turun Setelah Pandemi?', 'Berkebun', 'Banyak orang memulai bertanam karena kondisi pandemi COVID-19 mengharuskan kita bekerja di rumah sehingga memiliki banyak waktu di rumah. Sialnya selama ini rumah kita sudah lama tidak terurus dengan baik karena hanya dipakai untuk tidur. Sebagian besar waktu ada di tempat kerja. Dari sini mulai muncullah satu kegiatan yang bisa mempercantik rumah, produktif dan mengisi kegiatan agar terhindar dari stres karena terlalu sering di rumah. Komunitas menjadi sangat penting untuk mempertahankan animo bertanam. Mereka yang sudah sehobi akan saling bertukar ilmu dan bertukar pendapat, saling berkenalan dan bercanda. Bahasan mereka akan seputar bertanam yang bermacam macam. Nah dengan masuk ke dalam komunitas, tiap hari informasi yang masuk akan tentang bertanam dan bertanam, membuat kita akan merasa aneh kalau tidak bertanam. Masalah-masalah yang kita dapatkan saat bertanam juga akan terselesaikan jika ditanyakan ke komunitas.\r\n\r\nNah turun atau tidaknya trend bertanam, tergantung kamu semua loh. Yuk berkebun di rumah!', '1.jpg'),
(2, '2021-06-23', 'Tanaman yang Cocok jika Rumahmu di Kota', 'Berkebun', 'Ngomong-ngomong tentang berkebun, sayur dan tanaman obat juga cocok dan tetep cantik kok kalau ditanam di perkotaan. Sekalipun di kebun komplek, depan rumah, belakang rumah kamu bisa menumbuhkan sayur di semua tempat. Dengan ukurannya yang mungil, kamu tidak terlalu membutuhkan tempat yang luas untuk bertanam. Tomat, terong, melon dan timun juga bisa menjadi pilihanmu karena makanan ini sudah biasa kita konsumsi sehari-hari.\r\n\r\nTapi dengan keberadaan kota yang cukup banyak masalah lingkungan, polusi, sampah dan hama tikus, kamu perlu memperhatikan kondisi dan menyesuaikan tanaman apa saja yang cocok dan bertahan sampai panen tanpa gangguan. Penggunaan perangkap tikus, yellow trap, dan petrogenol dan perangkap lain akan membantu tanamanmu lebih aman. Ketersediaan cahaya juga perlu diperhatikan, karena akan menentukan posisi dan jenis tanaman yang kita tanam. Jika tersedia 3 jam penyinaran, maka sayuran bisa ditumbuhkan, jika bisa lebih dari 5 jam, tomat dan terong cocok dan bisa lebat. Jika kurang dari 3 jam, maka menanam tanaman obat seperti jahe, kunyit, lidah buaya dan basil akan lebih cocok.', '11.jpg'),
(3, '2021-06-23', 'Teknik Pembiakan secara Vegetatif', 'Berkebun', 'Ada lima macam teknik pembiakan secara vegetatif untuk tanaman yaitu penyetekan,pencangkokan, penyambungan, okulasi,dan penyusuan. Untuk penyambungan, okulasi dan penyusuan dikenal adanya istilah batang bawah dan batang atas.  Batang bawah berupa tanaman yang biasanya berasal dari biji. Tanaman dari biji sengaja dipilih karena mempunyai keunggulan dari segi perakarannya, yakni tahan terhadap penyakit akar dan mempunyai perakaran yang banyak serta dalam, sehingga tahan terhadap kekeringan dan kondisi tanah yang kurang aerasi.  Batang atas berupa ranting atau mata tunas dari pohon induk yang mempunyai sifat unggul terutama dalam produksi dan kualitasnya. Dari hasil penggabungan sifat batang bawah dan batang atas ini diperoleh bibit tanaman yang disebut bibit enten, okulasi dan susuan.  Pada perbanyakan dengan cara mencangkok batang bawah tidak diperlukan karena pada cara ini perakaran keluar langsung dari cabang pohon induk yang dicangkok. Cara perbanyakan vegetatif dengan stek pada prinsipnya menumbuhkan bagian atau potongan tanaman, sehingga menjadi tanaman baru.', '21.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Wortel', 'Wortel Segar 1pcs/kg', 'buah', '15000', 9, 'produk-2.jpg'),
(2, 'Kentang ', 'Kentang Segar 1 pcs/kg', 'buah', '100000', 7, 'produk-01.jpg'),
(3, 'Kol Putih', 'Kol Putih Segar 1 pcs/kg', 'buah', '15000', 7, 'produk-1.jpg'),
(4, 'Tomat', 'Tomat Segar 1pcs/kg', 'buah', '100000', 5, 'produk-02.jpg'),
(5, 'Brokoli', 'Brokoli Segar 1pcs/kg', 'buah', '100000', 8, 'product-6.jpg'),
(6, 'Bawang Putih', 'Bawang Putih 1pcs/kg', 'buah', '40000', 20, 'product-11.jpg'),
(7, 'Cabe Merah', 'Cabe Merah Segar 1pcs/kg', 'buah', '75000', 35, 'product-12.jpg'),
(8, 'Kol Ungu', 'Kol Ungu Segar 1pcs/kg', 'buah', '35000', 50, 'product-4.jpg'),
(10, 'Net Pot', 'Pot bersih adalah bahan pokok bagi setiap penanam hidroponik. Jaring yang lebih rapat di pot jaring Anda memungkinkan pilihan media tanam yang lebih luas, karena Anda dapat menggunakan media kecil.', 'alat', '7000', 156, 'alat-01.jpg'),
(11, 'Net Pot Tray Insert 32 Lubang', 'Nampan jaring jaring kami dibuat dengan plastik polipropilena yang kuat untuk membantu memberi ketenangan pada pertanian Anda dengan umur panjang peralatan Anda. Dirancang agar sesuai dengan pot jaring 32, baki ini sangat cocok. Mereka juga berjarak sekitar ½ inci untuk memungkinkan ruang tumbuh yang cukup.', 'alat', '15000', 543, 'alat-02.jpg'),
(12, 'Plastik Green House', 'Harga per Meter Perlindungan anti-debu - Mengurangi penyerapan debu untuk transmisi yang tahan lama Peringkat & Garansi 4 Tahun Transmisi cahaya > 90% Difusi Cahaya 20?itif Anti Kabut dan Anti Tetes Garansi 4 Tahun menjadikan NRCS plastik ini Lebih disukai Sebagian besar potongan dipotong sesuai spesifikasi.', 'alat', '15000', 1513, 'alat-03.jpg'),
(13, 'Jaring 30%', 'Jaring pelindung rumah kaca kami tahan UV, tahan busuk dan jamur, dan memiliki garansi 8 tahun dengan harapan hidup 16 tahun. Jaring pelindung adalah komponen penting dari rumah kaca Anda untuk menjaga tanaman Anda aman selama musim panas yang intens. Harga adalah harga per-Meter.', 'alat', '15000', 1234, 'alat-04.jpg'),
(14, 'Benih Timun', 'Lama pertumbuhan sekitar 3 bulan untuk siap berbuah dan 2 bulan untuk berbuah', 'benih', '35000', 34, 'Benih_Timun-min.png'),
(15, 'Benih Tomat', 'Paket benih dalam bentuk polybag', 'benih', '50000', 999, 'Benih_Tomat-min.png'),
(16, 'Benih Wortel', 'Paket benih dalam bentuk polybag', 'benih', '50000', 999, 'Benih_Wortel-min.png'),
(17, 'Benih Kentang', 'Paket benih dalam bentuk polybag', 'benih', '65000', 999, 'Benih_Kentang-min.png'),
(18, 'Benih Lemon', 'Paket benih dalam bentuk polybag', 'benih', '75000', 999, 'Benih_Lemon-min.png'),
(19, 'Benih Cabai', 'Paket benih dalam bentuk polybag', 'benih', '65000', 999, 'Benih_Cabai-min.png'),
(20, 'Benih Mangga', 'Paket benih dalam bentuk polybag', 'benih', '95000', 999, 'Benih_Mangga-min.png'),
(21, 'Benih Mint', 'Paket benih dalam bentuk polybag', 'benih', '65000', 999, 'Benih_Mint-min.png'),
(22, 'Benih Stroberi', 'Paket benih dalam bentuk polybag', 'benih', '75000', 999, 'Benih_Stroberi-min.png'),
(23, 'Benih Terong', 'Paket benih dalam bentuk polybag', 'benih', '50000', 999, 'Benih_Terong-min.png'),
(24, 'Gunting Taman', 'Gunting untuk tanaman', 'alat', '75000', 34, 'Gunting_taman.jpg'),
(25, 'Alat siram tanaman', 'Alat untuk menyiram', 'alat', '35000', 12, 'penyiram.jpg'),
(26, 'Sarung tangan', 'Sarung tangan untuk bercocok tanam', 'alat', '65000', 17, 'Sarung_tangan.jpg'),
(27, 'Sprayer', 'Alat untuk menyemprotkan disinfektan', 'alat', '50000', 11, 'Sprayer.jpg'),
(28, 'Set cocok tanam', 'Set alat bercocok tanam', 'alat', '95000', 11, 'Sekop.JPG'),
(29, 'Polybag', 'Polybag dengan 4 ukuran (1 paket berisi 100 polybag)', 'alat', '50000', 76, 'polybag.jpg'),
(30, 'Pupuk cair dan fertilizer', '1,5 liter pupupk cair dan fertilizer', 'alat', '125000', 36, 'PH_Fertilizer_Pupuk_Organik_Cair.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_inv` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `via` varchar(50) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_byr` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_inv`, `nama`, `alamat`, `no`, `email`, `via`, `tgl_pesan`, `batas_byr`) VALUES
(1, 'M Ilyas Arman S', 'Sukoharjo ', '0', '', '', '2021-06-23 06:41:44', '2021-06-24 06:41:44'),
(2, 'Muhammad Ravi Firmansyah', 'Kriyan Rt:09/02 Kalinyamatan Jepara', '08986583928', 'ravi@gmail', 'bri', '2021-06-24 17:39:04', '2021-06-25 17:39:04'),
(4, 'AdminDPC', 'Sidoarjo', '08986583928', 'wewe@gmail', 'bni', '2021-06-25 21:32:21', '2021-06-26 21:32:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:user',
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_user`, `username`, `password`, `nama`, `alamat`, `level`, `foto`) VALUES
(1, 'admin', 'admin123', 'AdminDPC', 'Sidoarjo', 1, 'avatar04.png'),
(2, 'ravi25', 'ravi123', 'ravi', 'jepara', 2, NULL),
(3, 'mhmmdilyas', 'ilyas', 'M Ilyas Arman S', 'Sukoharjo', 2, '2.jpg'),
(5, 'ravi11', 'ravi123', 'ravi', 'Jepara', 2, 'user2-160x160.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(250) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `id_user`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 1, 'Deni', 'dewa@gmail', 'iseng', 'hai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`) VALUES
(1, 1, 2, 'Kentang ', 1, 100000),
(2, 1, 3, 'Kol Putih', 1, 15000),
(3, 1, 4, 'Tomat', 2, 100000),
(4, 2, 25, 'Alat siram tanaman', 1, 35000),
(5, 2, 15, 'Benih Tomat', 1, 50000),
(6, 3, 1, 'Wortel', 2, 15000),
(7, 3, 2, 'Kentang ', 2, 100000),
(8, 3, 12, 'Plastik Green House', 1, 15000),
(9, 4, 2, 'Kentang ', 1, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama`, `alamat`, `telepon`, `deskripsi`) VALUES
(1, 'Andri Sukmajaya', 'Surabaya', '08974829472', 'Menghasilkan Cabai segar berkualitas tinggi, menjaga konsistensi kualitas '),
(2, 'Komunitas Tani Desa', 'Sukoharjo', '08537294829', 'Menjadi supplier Sayur dan Buah segar di do Ponic'),
(3, 'Petani Kol Ungu', 'Jawa Tengah', '081343237683', 'Menjadi bagian do Ponic dengan menghasilkan Kol Ungu ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_inv`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `tb_pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_pengguna` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
