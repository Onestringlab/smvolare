-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tb_absen`;
CREATE TABLE `tb_absen` (
  `idabsen` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `idprogram` int(11) NOT NULL,
  `sebagai` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktumulai` time NOT NULL,
  `waktuselesai` time DEFAULT NULL,
  `siaran` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `ipaddress1` varchar(50) NOT NULL,
  `ipaddress2` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`idabsen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `insertedby` varchar(30) DEFAULT NULL,
  `insertedon` datetime DEFAULT NULL,
  `updatedby` varchar(30) DEFAULT NULL,
  `updatedon` datetime DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_chart`;
CREATE TABLE `tb_chart` (
  `idchart` int(11) NOT NULL AUTO_INCREMENT,
  `chart` varchar(10) NOT NULL,
  `program` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `tw1` varchar(5) NOT NULL,
  `song1` varchar(100) NOT NULL,
  `artis1` varchar(100) NOT NULL,
  `tw2` varchar(5) NOT NULL,
  `song2` varchar(100) NOT NULL,
  `artis2` varchar(100) NOT NULL,
  `tw3` varchar(5) NOT NULL,
  `song3` varchar(100) NOT NULL,
  `artis3` varchar(100) NOT NULL,
  `tw4` varchar(5) NOT NULL,
  `song4` varchar(100) NOT NULL,
  `artis4` varchar(100) NOT NULL,
  `tw5` varchar(5) NOT NULL,
  `song5` varchar(100) NOT NULL,
  `artis5` varchar(100) NOT NULL,
  `tw6` varchar(5) NOT NULL,
  `song6` varchar(100) NOT NULL,
  `artis6` varchar(100) NOT NULL,
  `tw7` varchar(5) NOT NULL,
  `song7` varchar(100) NOT NULL,
  `artis7` varchar(100) NOT NULL,
  `tw8` varchar(5) NOT NULL,
  `song8` varchar(100) NOT NULL,
  `artis8` varchar(100) NOT NULL,
  `tw9` varchar(5) NOT NULL,
  `song9` varchar(100) NOT NULL,
  `artis9` varchar(100) NOT NULL,
  `tw10` varchar(5) NOT NULL,
  `song10` varchar(100) NOT NULL,
  `artis10` varchar(100) NOT NULL,
  `updatedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedBy` varchar(50) NOT NULL,
  PRIMARY KEY (`idchart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tb_iklan`;
CREATE TABLE `tb_iklan` (
  `idiklan` int(11) NOT NULL AUTO_INCREMENT,
  `tipe` varchar(50) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `namafile` varchar(100) DEFAULT NULL,
  `isiiklan` text,
  `status` int(11) NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedbby` varchar(100) NOT NULL,
  `updatedon` datetime NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  PRIMARY KEY (`idiklan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_jadwal`;
CREATE TABLE `tb_jadwal` (
  `idjadwal` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(50) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `program` int(11) NOT NULL,
  `petugas1` int(11) NOT NULL,
  `petugas2` int(11) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedby` varchar(100) NOT NULL,
  `updatedon` datetime NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  PRIMARY KEY (`idjadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_jadwaliklan`;
CREATE TABLE `tb_jadwaliklan` (
  `idjadwaliklan` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `iklan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `jarak` int(11) NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedby` varchar(100) NOT NULL,
  `updatedon` datetime NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  PRIMARY KEY (`idjadwaliklan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_logiklan`;
CREATE TABLE `tb_logiklan` (
  `idlogiklan` int(11) NOT NULL AUTO_INCREMENT,
  `idiklan` int(11) NOT NULL,
  `juduliklan` varchar(100) NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedby` varchar(50) NOT NULL,
  PRIMARY KEY (`idlogiklan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_logkerja`;
CREATE TABLE `tb_logkerja` (
  `idlogkerja` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `kerja` varchar(1000) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedby` varchar(50) DEFAULT NULL,
  `updatedon` datetime NOT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idlogkerja`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_naskah`;
CREATE TABLE `tb_naskah` (
  `idnaskah` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `program` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isinaskah` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedby` varchar(100) NOT NULL,
  `updatedon` datetime NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  PRIMARY KEY (`idnaskah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_papanpesan`;
CREATE TABLE `tb_papanpesan` (
  `idpapanpesan` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedby` varchar(100) NOT NULL,
  `updatedon` datetime NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  PRIMARY KEY (`idpapanpesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_pemenang`;
CREATE TABLE `tb_pemenang` (
  `idpemenang` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `idprogram` int(11) NOT NULL,
  `pemenang` varchar(300) NOT NULL,
  `sponsor` varchar(300) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedby` varchar(50) NOT NULL,
  `updatedon` datetime NOT NULL,
  `updatedby` varchar(50) NOT NULL,
  PRIMARY KEY (`idpemenang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_pengumuman`;
CREATE TABLE `tb_pengumuman` (
  `idpengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `pengumuman` text NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedby` varchar(100) NOT NULL,
  `updatedon` datetime NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  PRIMARY KEY (`idpengumuman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_program`;
CREATE TABLE `tb_program` (
  `idprogram` int(11) NOT NULL AUTO_INCREMENT,
  `namaprogram` varchar(100) NOT NULL,
  `statusprogram` tinyint(1) NOT NULL,
  `insertedby` varchar(100) NOT NULL,
  `insertedon` datetime NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  `updatedon` datetime NOT NULL,
  PRIMARY KEY (`idprogram`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_rotw`;
CREATE TABLE `tb_rotw` (
  `idrotw` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `judullagu` varchar(100) NOT NULL,
  `artis` varchar(100) NOT NULL,
  `alasan` varchar(250) NOT NULL,
  `insertedon` datetime NOT NULL,
  `insertedby` varchar(100) NOT NULL,
  `updatedon` datetime NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  PRIMARY KEY (`idrotw`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_topik`;
CREATE TABLE `tb_topik` (
  `idtopik` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `program` int(11) NOT NULL,
  `topik` varchar(300) NOT NULL,
  `narasumber` varchar(300) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `insertedby` varchar(100) NOT NULL,
  `insertedon` datetime NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  `updatedon` datetime NOT NULL,
  PRIMARY KEY (`idtopik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2021-10-01 22:25:43