CREATE TABLE `barang` (
  `id_barang` int(5) PRIMARY KEY AUTO_INCREMENT,
  `nama_barang` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_input_barang` datetime DEFAULT NULL
);

CREATE TABLE `identitas` (
  `id_identitas` int(5) PRIMARY KEY AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tgl_input_identitas` datetime DEFAULT NULL
);

CREATE TABLE `kupon` (
  `id_kupon` int(5) PRIMARY KEY AUTO_INCREMENT,
  `id_identitas` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `kode_kupon` varchar(100) NOT NULL,
  `tgl_input_kupon` datetime DEFAULT NULL
);

CREATE TABLE `pemenang` (
  `id_pemenang` int(5) PRIMARY KEY AUTO_INCREMENT,
  `id_kupon` int(5) NOT NULL,
  `tgl_input_pemenang` datetime DEFAULT NULL
);

ALTER TABLE `kupon` ADD FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

ALTER TABLE `kupon` ADD FOREIGN KEY (`id_identitas`) REFERENCES `identitas` (`id_identitas`);

ALTER TABLE `pemenang` ADD FOREIGN KEY (`id_kupon`) REFERENCES `kupon` (`id_kupon`);
