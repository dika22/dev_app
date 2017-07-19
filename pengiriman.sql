/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.5.55-0ubuntu0.14.04.1 : Database - dev_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dev_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dev_db`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kode_barang` varchar(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `isi` int(11) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

LOCK TABLES `barang` WRITE;

insert  into `barang`(`kode_barang`,`nama_barang`,`brand`,`isi`,`harga`,`created_at`,`created_by`,`modified_at`,`modified_by`) values ('D01','Rokok','Dunhild',12,120000,'2017-05-27 20:20:52','','2017-05-28 10:56:47',''),('M01','Rokok','Malboro',16,120000,'2017-05-28 13:25:04','','0000-00-00 00:00:00','modified_by'),('SM01','Rokok','Sampoerna Mild',12,12000,'2017-05-27 20:50:56','','0000-00-00 00:00:00','modified_by');

UNLOCK TABLES;

/*Table structure for table `data_return` */

DROP TABLE IF EXISTS `data_return`;

CREATE TABLE `data_return` (
  `kode_return` varchar(20) NOT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `kode_toko` varchar(20) DEFAULT NULL,
  `tgl_return` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `total_harga` int(15) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_return`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_return` */

LOCK TABLES `data_return` WRITE;

insert  into `data_return`(`kode_return`,`kode_barang`,`kode_toko`,`tgl_return`,`jumlah`,`harga`,`total_harga`,`created_at`,`created_by`,`modified_at`,`modified_by`) values ('R-130617-1','D01','AM01','2017-06-14',10,'100000',1000000,'2017-06-13 00:05:36','created_by','0000-00-00 00:00:00',''),('R-190717-1','D01','AM01','2017-06-14',2,'',240000,'2017-07-19 09:45:51','created_by','0000-00-00 00:00:00','');

UNLOCK TABLES;

/*Table structure for table `pengiriman` */

DROP TABLE IF EXISTS `pengiriman`;

CREATE TABLE `pengiriman` (
  `kode_pengiriman` varchar(11) NOT NULL,
  `tgl_pengiriman` date DEFAULT NULL,
  `kode_barang` varchar(11) DEFAULT NULL,
  `harga_satuan` int(20) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `kode_toko` varchar(11) DEFAULT NULL,
  `kode_status_pengiriman` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_pengiriman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengiriman` */

LOCK TABLES `pengiriman` WRITE;

insert  into `pengiriman`(`kode_pengiriman`,`tgl_pengiriman`,`kode_barang`,`harga_satuan`,`jumlah_barang`,`kode_toko`,`kode_status_pengiriman`,`created_at`,`created_by`,`modified_at`,`modified_by`) values ('A-190717-1','2017-07-25','D01',120000,12,'AM01',1,'2017-07-19 07:01:43',0,'0000-00-00 00:00:00',0);

UNLOCK TABLES;

/*Table structure for table `status_barang` */

DROP TABLE IF EXISTS `status_barang`;

CREATE TABLE `status_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `status_barang` */

LOCK TABLES `status_barang` WRITE;

insert  into `status_barang`(`id`,`status`) values (1,'kirim'),(2,'pending'),(3,'cancel'),(4,'ok');

UNLOCK TABLES;

/*Table structure for table `store` */

DROP TABLE IF EXISTS `store`;

CREATE TABLE `store` (
  `kode_toko` varchar(11) NOT NULL,
  `nama_toko` varchar(100) DEFAULT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_toko`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `store` */

LOCK TABLES `store` WRITE;

insert  into `store`(`kode_toko`,`nama_toko`,`alamat`,`created_at`,`created_by`,`modified_at`,`modified_by`) values ('AM01','Alfamart','kebayoran lama utara','2017-05-27 00:00:00',0,'2017-05-28 13:27:28',0),('LM01','Lotte Mart','Kuningan Jakarta Selatan','2017-05-27 00:00:00',0,'2017-07-13 13:19:46',0);

UNLOCK TABLES;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`id`,`user_id`,`password`,`level`,`nama`) values (1,'1','1','Super Admin','super admin'),(2,'2','2','Admin','admin'),(4,'admin','admin','Admin','');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
