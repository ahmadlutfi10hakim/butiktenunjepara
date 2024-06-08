#
# TABLE STRUCTURE FOR: detail_website
#

DROP TABLE IF EXISTS `detail_website`;

CREATE TABLE `detail_website` (
  `detail_website_id` int(255) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `site_deskripsi` text DEFAULT NULL,
  `notelp` varchar(255) DEFAULT NULL,
  `nama_kontak` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `alamat_universitas` text DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`detail_website_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `detail_website` (`detail_website_id`, `site_title`, `email`, `site_deskripsi`, `notelp`, `nama_kontak`, `facebook`, `instagram`, `youtube`, `telegram`, `alamat_universitas`, `images`, `site_favicon`) VALUES (1, 'Aplikasi Manufaktur', 'admin@gmail.com', 'Website Aplikasi Manufaktur', '6285123123123', 'Admin', 'https://www.facebook.com/link_anda/', 'https://www.instagram.com/link_anda/', 'https://www.youtube.com/c/link_anda', 'https://t.me/link_anda', 'Tokyo', 'e8a7653e2020c7aedc00a1c5bec1a50d.png', '4c4e3a3bda426555140a972e8b7ef6c6.png');


#
# TABLE STRUCTURE FOR: mp_generalentry
#

DROP TABLE IF EXISTS `mp_generalentry`;

CREATE TABLE `mp_generalentry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `naration` varchar(255) CHARACTER SET latin1 NOT NULL,
  `generated_source` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=362 DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: mp_head
#

DROP TABLE IF EXISTS `mp_head`;

CREATE TABLE `mp_head` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nature` varchar(50) CHARACTER SET latin1 NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `expense_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (47, '[1100] Kas Ditangan', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (48, '[1200] Piutang Usaha', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (49, '[1300] Perlengkapan', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (50, '[1400] Persediaan Barang Dagang', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (52, '[1502] PPN Masukan', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (54, '[1601] Tanah', 'Assets', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (57, '[1603] Peralatan Usaha', 'Assets', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (58, '[1701] Akumulasi Penyusutan Gedung', 'Assets', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (59, '[1702] Akumulasi Penyusutan Peralatans', 'Assets', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (60, '[2100] Hutang Usaha', 'Liability', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (62, '[2202] PPN Keluaran', 'Liability', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (64, '[2301] Hutang Bank', 'Liability', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (65, '[3101] Modal', 'Equity', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (66, '[4101] Pendapatan Penjualan', 'Revenue', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (67, '[4102] Pendapatan Jasa', 'Revenue', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (68, '[6101] Beban Gaji', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (69, '[6102] Beban Iklan', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (70, '[6103] Beban Listrik, Air, dan Telepon', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (71, '[6104] Beban Operasional Lainnya', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (72, '[6201] Beban Penyusutan Gedung', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (73, '[6202] Beban Penyusutan Peralatan', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (74, '[6300] Beban Sewa', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (75, '[6400] Beban Perlengkapan', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (78, '[4103] Persediaan Awal', 'HPP', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (80, '[4105] Persediaan Akhir', 'HPP', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (82, '[4104] Pembelian', 'Revenue', 'Lancar', '-');


#
# TABLE STRUCTURE FOR: mp_sub_entry
#

DROP TABLE IF EXISTS `mp_sub_entry`;

CREATE TABLE `mp_sub_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `accounthead` int(11) NOT NULL,
  `amount` int(128) NOT NULL,
  `type` int(1) NOT NULL,
  `journal_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`parent_id`),
  KEY `accounthead` (`accounthead`),
  KEY `amount` (`amount`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: tbl_absensi
#

DROP TABLE IF EXISTS `tbl_absensi`;

CREATE TABLE `tbl_absensi` (
  `id_absensi` int(255) NOT NULL AUTO_INCREMENT,
  `id_user_absensi` int(255) DEFAULT NULL,
  `ip_adress_absensi_masuk` varchar(255) DEFAULT NULL,
  `ip_adress_absensi_keluar` varchar(255) DEFAULT NULL,
  `tgl_absensi_masuk` timestamp NULL DEFAULT current_timestamp(),
  `tgl_absensi_keluar` timestamp NULL DEFAULT current_timestamp(),
  `ket_absensi` varchar(255) DEFAULT NULL,
  `kehadiran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_absensi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_add_stock
#

DROP TABLE IF EXISTS `tbl_add_stock`;

CREATE TABLE `tbl_add_stock` (
  `add_stock_id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_add_stock` varchar(255) DEFAULT NULL,
  `bahan_baku_id` int(255) DEFAULT NULL,
  `jumlah_add_stock` varchar(255) DEFAULT NULL,
  `biaya_dikeluarkan` varchar(255) DEFAULT NULL,
  `check_proses` int(10) DEFAULT 0,
  `add_stock_stock_user_id` int(255) DEFAULT NULL,
  `tgl_buat` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`add_stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_cicil
#

DROP TABLE IF EXISTS `tbl_cicil`;

CREATE TABLE `tbl_cicil` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_transaksi_cicil` varchar(255) DEFAULT NULL,
  `id_konsumen_cicil` int(255) DEFAULT NULL,
  `cicilan` varchar(255) DEFAULT NULL,
  `telah_dibayar` varchar(255) DEFAULT '0',
  `jumlah_telah_dibayar` varchar(255) DEFAULT '0',
  `jumlah_cicilan` varchar(255) DEFAULT NULL,
  `jenis_cicilan` varchar(255) DEFAULT NULL,
  `ket_cicilan` varchar(255) DEFAULT NULL,
  `id_user_cicil` int(255) DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT current_timestamp(),
  `tgl_update_bayar` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_jenis_cicilan
#

DROP TABLE IF EXISTS `tbl_jenis_cicilan`;

CREATE TABLE `tbl_jenis_cicilan` (
  `id_jenis_cicilan` int(255) NOT NULL AUTO_INCREMENT,
  `nama_cicilan` varchar(255) DEFAULT NULL,
  `tenor` varchar(255) DEFAULT NULL,
  `jumlah_tenor` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_cicilan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_jenis_harga
#

DROP TABLE IF EXISTS `tbl_jenis_harga`;

CREATE TABLE `tbl_jenis_harga` (
  `id_jenis_harga` int(255) NOT NULL AUTO_INCREMENT,
  `kode_jharga` varchar(255) DEFAULT NULL,
  `nama_jenis_harga` varchar(255) DEFAULT NULL,
  `kategori_jenis` varchar(255) DEFAULT NULL,
  `jenis_harga` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_harga`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_kategori
#

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(255) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_konsumen
#

DROP TABLE IF EXISTS `tbl_konsumen`;

CREATE TABLE `tbl_konsumen` (
  `id_konsumen` int(255) NOT NULL AUTO_INCREMENT,
  `id_cus` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `user_status` int(255) DEFAULT NULL,
  `hutang` int(255) DEFAULT NULL,
  `tgl_ubah_konsumen` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_konsumen`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_list_retur_barang
#

DROP TABLE IF EXISTS `tbl_list_retur_barang`;

CREATE TABLE `tbl_list_retur_barang` (
  `retur_id` int(255) NOT NULL AUTO_INCREMENT,
  `retur_kode_surat_jalan` varchar(255) DEFAULT NULL,
  `retur_bahan_baku_id` varchar(255) DEFAULT NULL,
  `retur_jumlah` int(255) DEFAULT NULL,
  `retur_nilai_saham` int(255) DEFAULT NULL,
  `retur_user_id` int(255) DEFAULT NULL,
  `retur_tgl_buat` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`retur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_list_surat_jalan
#

DROP TABLE IF EXISTS `tbl_list_surat_jalan`;

CREATE TABLE `tbl_list_surat_jalan` (
  `ls_surat_jalan_id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_ls_surat_jalan` varchar(255) DEFAULT NULL,
  `bahan_baku_id` varchar(255) DEFAULT NULL,
  `jumlah_ls_surat_jalan` int(255) DEFAULT NULL,
  `check_proses_ls_surat_jalan` int(10) DEFAULT 0,
  `ls_surat_jalan_user_id` int(255) DEFAULT NULL,
  `tgl_buat_ls_surat_jalan` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ls_surat_jalan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_list_transaksi
#

DROP TABLE IF EXISTS `tbl_list_transaksi`;

CREATE TABLE `tbl_list_transaksi` (
  `id_transaksi` int(255) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(255) DEFAULT NULL,
  `id_konsumen_transaksi` int(255) DEFAULT NULL,
  `jumlah_pembelian` varchar(255) DEFAULT NULL,
  `jumlah_dibayar` varchar(255) DEFAULT NULL,
  `jenis_transaksi` varchar(255) DEFAULT NULL,
  `total_belanja` varchar(255) DEFAULT NULL,
  `dapatkan_hutang` varchar(255) DEFAULT NULL,
  `tenorbulan` varchar(255) DEFAULT NULL,
  `tenorcicil` varchar(255) DEFAULT NULL,
  `id_user_transaksi` int(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `tgl_transaksi` timestamp NULL DEFAULT current_timestamp(),
  `tgl_ubah` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_log
#

DROP TABLE IF EXISTS `tbl_log`;

CREATE TABLE `tbl_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ket` varchar(255) DEFAULT NULL,
  `tgl_log` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_pengeluaran
#

DROP TABLE IF EXISTS `tbl_pengeluaran`;

CREATE TABLE `tbl_pengeluaran` (
  `id_pengeluaran` int(255) NOT NULL AUTO_INCREMENT,
  `ket_pengeluaran` text DEFAULT NULL,
  `biaya_pengeluaran` int(255) DEFAULT NULL,
  `tgl_pengeluaran` timestamp NULL DEFAULT current_timestamp(),
  `imgbukti` varchar(255) DEFAULT NULL,
  `id_user_pengeluaran` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_pengeluaran`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_produksi_selesai
#

DROP TABLE IF EXISTS `tbl_produksi_selesai`;

CREATE TABLE `tbl_produksi_selesai` (
  `produksi_selesai_id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_produksi_selesai` varchar(255) DEFAULT NULL,
  `produksi_selesai_jenis` int(255) DEFAULT NULL,
  `produksi_selesai_jumlah` varchar(255) DEFAULT NULL,
  `produksi_selesai_biaya` varchar(255) DEFAULT NULL,
  `produksi_selesai_catatan` text DEFAULT NULL,
  `produksi_selesai_tgl` timestamp NULL DEFAULT current_timestamp(),
  `produksi_selesai_user_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`produksi_selesai_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_produksi_stock
#

DROP TABLE IF EXISTS `tbl_produksi_stock`;

CREATE TABLE `tbl_produksi_stock` (
  `produksi_id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_produksi` varchar(255) DEFAULT NULL,
  `bahan_baku_id` int(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `biaya_dikeluarkan` varchar(255) DEFAULT NULL,
  `check_proses` int(10) DEFAULT 0,
  `produksi_stock_user_id` int(255) DEFAULT NULL,
  `tgl_buat` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`produksi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_rekap_cash
#

DROP TABLE IF EXISTS `tbl_rekap_cash`;

CREATE TABLE `tbl_rekap_cash` (
  `id_cash` int(255) NOT NULL AUTO_INCREMENT,
  `id_cicil_cancel` int(255) DEFAULT NULL,
  `nota_cash` varchar(255) DEFAULT NULL,
  `ket_cash` text DEFAULT NULL,
  `total_cash` varchar(255) DEFAULT NULL,
  `tgl_cash` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_cash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_rusak
#

DROP TABLE IF EXISTS `tbl_rusak`;

CREATE TABLE `tbl_rusak` (
  `produksi_id_rusak` int(255) NOT NULL AUTO_INCREMENT,
  `kode_produksi_rusak` varchar(255) DEFAULT NULL,
  `bahan_baku_id_rusak` int(255) DEFAULT NULL,
  `jumlah_rusak` int(255) DEFAULT NULL,
  `biaya_dikeluarkan_rusak` int(255) DEFAULT NULL,
  `check_proses_rusak` int(10) DEFAULT 0,
  `produksi_stock_user_id_rusak` int(255) DEFAULT NULL,
  `tgl_buat_rusak` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`produksi_id_rusak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_satuan
#

DROP TABLE IF EXISTS `tbl_satuan`;

CREATE TABLE `tbl_satuan` (
  `id_satuan` int(255) NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_selesai_add_stock
#

DROP TABLE IF EXISTS `tbl_selesai_add_stock`;

CREATE TABLE `tbl_selesai_add_stock` (
  `produksi_selesai_id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_add_stock_selesai` varchar(255) DEFAULT NULL,
  `add_stock_jumlah` varchar(255) DEFAULT NULL,
  `add_stock_selesai_biaya` varchar(255) DEFAULT NULL,
  `add_stock_catatan` text DEFAULT NULL,
  `add_stock_selesai_tgl` timestamp NULL DEFAULT current_timestamp(),
  `suplier` text DEFAULT NULL,
  `add_stock_selesai_user_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`produksi_selesai_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_stock
#

DROP TABLE IF EXISTS `tbl_stock`;

CREATE TABLE `tbl_stock` (
  `id_stock` int(255) NOT NULL AUTO_INCREMENT,
  `kode_stock` varchar(255) DEFAULT NULL,
  `nama_stock` varchar(255) DEFAULT NULL,
  `kategori_stock` int(255) DEFAULT NULL,
  `kategori_material` varchar(255) DEFAULT NULL,
  `satuan_stock` int(255) DEFAULT NULL,
  `harga_beli` int(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT '0',
  `stock_minimal` int(255) DEFAULT NULL,
  `nilai_saham` varchar(255) DEFAULT '0',
  `tgl_tambah` timestamp NULL DEFAULT current_timestamp(),
  `tgl_ubah` timestamp NULL DEFAULT current_timestamp(),
  `user_id_stock` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_stock`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_stock_produksi
#

DROP TABLE IF EXISTS `tbl_stock_produksi`;

CREATE TABLE `tbl_stock_produksi` (
  `id_stock` int(255) NOT NULL AUTO_INCREMENT,
  `kode_stock` varchar(255) DEFAULT NULL,
  `nama_stock` varchar(255) DEFAULT NULL,
  `kategori_stock` int(255) DEFAULT NULL,
  `kategori_material` varchar(255) DEFAULT NULL,
  `satuan_stock` int(255) DEFAULT NULL,
  `harga_beli` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `stock_minimal` int(255) DEFAULT NULL,
  `nilai_saham` varchar(255) DEFAULT NULL,
  `tgl_tambah` timestamp NULL DEFAULT current_timestamp(),
  `tgl_ubah` timestamp NULL DEFAULT current_timestamp(),
  `user_id_stock` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_stock`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_surat_jalan
#

DROP TABLE IF EXISTS `tbl_surat_jalan`;

CREATE TABLE `tbl_surat_jalan` (
  `surat_jalan_id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_surat_jalan` varchar(255) DEFAULT NULL,
  `jumlah_surat_jalan` varchar(255) DEFAULT NULL,
  `id_user_surat_jalan` int(255) DEFAULT NULL,
  `diserahkan_sj` varchar(255) DEFAULT NULL,
  `penerima_sj` varchar(255) DEFAULT NULL,
  `diketahui_sj` varchar(255) DEFAULT NULL,
  `catatan_surat_jalan` text DEFAULT NULL,
  `tgl_surat_jalan` timestamp NULL DEFAULT current_timestamp(),
  `tgl_ubah_surat_jalan` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`surat_jalan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_transaksi
#

DROP TABLE IF EXISTS `tbl_transaksi`;

CREATE TABLE `tbl_transaksi` (
  `transaksi_id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_transaksi_list` varchar(255) DEFAULT NULL,
  `konsumen_transaksi_id` int(255) DEFAULT NULL,
  `bahan_baku_id` varchar(255) DEFAULT NULL,
  `jumlah_transaksi` varchar(255) DEFAULT NULL,
  `harga_jual_konsumen` varchar(255) DEFAULT NULL,
  `harga_jual_transaksi` varchar(255) DEFAULT NULL,
  `harga_modal_transaksi` varchar(255) DEFAULT NULL,
  `check_proses_transaksi` int(10) DEFAULT 0,
  `transaksi_user_id` int(255) DEFAULT NULL,
  `tgl_buat_transaksi` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`transaksi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_user
#

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(10) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT '1',
  `user_photo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_status`, `user_photo`) VALUES (1, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '30c21eeca4307dfb86f6664ccb4d88e1.png');
INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_status`, `user_photo`) VALUES (2, 'Ekspedisi', 'ekspedisi@gmail.com', '928920597d85e012970304984e633a5a', '3', '1', '120c53646261f7f0e330e43bdef85aa8.png');
INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_status`, `user_photo`) VALUES (3, 'Warehouse', 'warehouse@gmail.com', '372d30dd2849813ef674855253900679', '2', '1', 'f82c6582be551f3170e4e77362f36e55.png');


#
# TABLE STRUCTURE FOR: tokens
#

DROP TABLE IF EXISTS `tokens`;

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
