/* Membuat data tabel */
create database barang_db;

use barang_db;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL auto_increment,
  `kode` varchar(8),
  `nama` varchar(50),
  `deskripsi` text,
  `stok` numeric(5, 2),
  `harga` numeric(12, 2),
  `berat` numeric(5, 2),
  PRIMARY KEY  (`id`)
);