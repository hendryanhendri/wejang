CREATE DATABASE  IF NOT EXISTS `wejang` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `wejang`;
-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: localhost    Database: wejang
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_category`
--

DROP TABLE IF EXISTS `t_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_category` (
  `id_category` varchar(15) NOT NULL,
  `category_name` varchar(45) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `createdby` varchar(45) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_category`
--

LOCK TABLES `t_category` WRITE;
/*!40000 ALTER TABLE `t_category` DISABLE KEYS */;
INSERT INTO `t_category` VALUES ('CTG0000001','Installation & Activation',NULL,NULL,NULL,NULL,NULL),('CTG0000002','Import & Export',NULL,NULL,NULL,NULL,NULL),('CTG0000003','Setting & Configuration',NULL,NULL,NULL,NULL,NULL),('CTG0000004','Product Information',NULL,NULL,NULL,NULL,NULL),('CTG0000005','Issues',NULL,NULL,NULL,NULL,NULL),('CTG0000006','Other',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `t_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_users`
--

DROP TABLE IF EXISTS `t_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_users` (
  `id_users` varchar(17) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` decimal(15,0) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `subdistrict` varchar(100) DEFAULT NULL,
  `photo` blob,
  `level` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_users`
--

LOCK TABLES `t_users` WRITE;
/*!40000 ALTER TABLE `t_users` DISABLE KEYS */;
INSERT INTO `t_users` VALUES ('USR00005','hendryanhendri','7488e331b8b64e5794da3fa4eb10ad5d','Hendri','Sudianto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('USR00006','ahmadsanusi','21232f297a57a5a743894a0e4a801fc3','Ahmad','Sanusi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('USR00007','ibrahimwijaya','21232f297a57a5a743894a0e4a801fc3','Ibrahim','Wijaya',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `t_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_article`
--

DROP TABLE IF EXISTS `tbl_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` varchar(45) DEFAULT NULL,
  `id_category` varchar(15) DEFAULT NULL,
  `article_title` varchar(200) DEFAULT NULL,
  `article_content` text,
  `article_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `article_updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_article`
--

LOCK TABLES `tbl_article` WRITE;
/*!40000 ALTER TABLE `tbl_article` DISABLE KEYS */;
INSERT INTO `tbl_article` VALUES (26,'USR00005','CTG0000001','Begini Cara Menggunakan Printer Epson L565 Series','<p><strong>Ingin memiliki printer yang memiliki kinerja tinggi yang digunakan di perkantoran, rumah, atau untuk bisnis kecil maupun besar? Coba gunakan Printer Epson L565 Series WiFi. Printer Epson L565 benar-benar printer multi fungsi dengan fitur utamanya yaitu percetakan, copy, fax dan scanning. Maka dengan ketiga fitur tersebut, pengguna bisa menghemat biaya untuk pengadaan perangkat perkantoran. Cukup dengan menggunakan printer multifungsi ini saja, maka seluruh operasional perkantoran bisa dijalankan.</strong></p>\r\n\r\n<p> </p>\r\n\r\n<blockquote>\r\n<p>Ingin memiliki printer yang memiliki kinerja tinggi yang digunakan di perkantoran, rumah, atau untuk bisnis kecil maupun besar? Coba gunakan <strong>Printer Epson L565 Series WiFi</strong>. Printer Epson L565 benar-benar printer multi fungsi dengan fitur utamanya yaitu percetakan, copy, fax dan scanning. Maka dengan ketiga fitur tersebut, pengguna bisa menghemat biaya untuk pengadaan perangkat perkantoran. Cukup dengan menggunakan printer multifungsi ini saja, maka seluruh operasional perkantoran bisa dijalankan.</p>\r\n</blockquote>\r\n\r\n<p>Ingin memiliki printer yang memiliki kinerja tinggi yang digunakan di perkantoran, rumah, atau untuk bisnis kecil maupun besar? Coba gunakan <strong>Printer Epson L565 Series WiFi</strong>. Printer Epson L565 benar-benar printer multi fungsi dengan fitur utamanya yaitu percetakan, copy, fax dan scanning. Maka dengan ketiga fitur tersebut, pengguna bisa menghemat biaya untuk pengadaan perangkat perkantoran. Cukup dengan menggunakan printer multifungsi ini saja, maka seluruh operasional perkantoran bisa dijalankan.</p>\r\n\r\n<p><em>Ingin memiliki printer yang memiliki kinerja tinggi yang digunakan di perkantoran, rumah, atau untuk bisnis kecil maupun besar? Coba gunakan <strong>Printer Epson L565 Series WiFi</strong>. Printer Epson L565 benar-benar printer multi fungsi dengan fitur utamanya yaitu percetakan, copy, fax dan scanning. Maka dengan ketiga fitur tersebut, pengguna bisa menghemat biaya untuk pengadaan perangkat perkantoran. Cukup dengan menggunakan printer multifungsi ini saja, maka seluruh operasional perkantoran bisa dijalankan.</em></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n','2019-12-23 03:05:45','2019-12-23 03:05:45'),(27,'USR00005','CTG0000005','Problem Mirkotik','<h1>Begini Cara Menggunakan WiFi Printer Epson L565 Series</h1>\r\n\r\n<p><a href=\"https://www.hanyapedia.com/2017/07/begini-cara-menggunakan-wifi-printer-epson-L565-series.html\">Hanyapedia</a> <a href=\"https://www.hanyapedia.com/search/label/Tutorial?&max-results=5\">Tutorial</a></p>\r\n\r\n<p><strong><a href=\"https://www.hanyapedia.com/2017/07/begini-cara-menggunakan-wifi-printer-epson-L565-series.html\"><img alt=\"\" src=\"/wejang/assets/kcfinder/upload/files/business_working_laptop_macbook_ipad_tablet_computer_desk-860214.jpg!d.jpg\" xss=removed>Mencetak Via Android</a></strong> - Ingin memiliki printer yang memiliki kinerja tinggi yang digunakan di perkantoran, rumah, atau untuk bisnis kecil maupun besar? Coba gunakan <strong>Printer Epson L565 Series WiFi</strong>. Printer Epson L565 benar-benar printer multi fungsi dengan fitur utamanya yaitu percetakan, copy, fax dan scanning. Maka dengan ketiga fitur tersebut, pengguna bisa menghemat biaya untuk pengadaan perangkat perkantoran. Cukup dengan menggunakan printer multifungsi ini saja, maka seluruh operasional perkantoran bisa dijalankan.</p>\r\n\r\n<p> </p>\r\n\r\n<p><br>\r\nKemampuan pengisian kertas secara otomatis sampai dengan 30 lembar kertas sehingga membuat kegiatan scanning, copying dan faxing lebih cepat tanpa pengawasan dari pengguna ditambah lagi dengan tersedianya <a href=\"https://www.hanyapedia.com/2016/06/mengenal-teknologi-pemindai-gambar-adf.html\">fitur ADF (Automatic Document Feeder)</a>.</p>\r\n','2019-12-23 03:28:30','2019-12-23 03:28:30'),(28,'USR00005','CTG0000003','Perkenalan','<p><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></p>\r\n\r\n<p><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></p>\r\n\r\n<p><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></p>\r\n\r\n<ol>\r\n <li>\r\n <h4><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></h4>\r\n\r\n <h4><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></h4>\r\n\r\n <h4><span xss=removed><span xss=removed>Hallo nama saya hendri<img alt=\"\" src=\"/wejang/assets/kcfinder/upload/files/business_working_laptop_macbook_ipad_tablet_computer_desk-860214.jpg!d.jpg\" xss=removed></span></span></h4>\r\n </li>\r\n</ol>\r\n\r\n<ul>\r\n <li>\r\n <p xss=removed><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></p>\r\n\r\n <p xss=removed><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></p>\r\n\r\n <p xss=removed><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></p>\r\n </li>\r\n</ul>\r\n\r\n<p><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></p>\r\n\r\n<p><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></p>\r\n\r\n<p><span xss=removed><span xss=removed>Hallo nama saya hendri</span></span></p>\r\n\r\n<p> </p>\r\n','2019-12-24 12:42:24','2019-12-24 12:42:24'),(29,'USR00005','CTG0000006','Dongeng Anak Sebelum Tidur ','<p><span xss=removed><strong>Seiring dengan perkembangan teknologi, kegiatan mendongeng untuk anak banyak ditinggalkan orang tua. Padahal membaca cerita dongeng anak sebelum tidur seperti yang akan kami bahas di sini memiliki banyak manfaat.</strong></span></p>\r\n\r\n<ul>\r\n <li><span xss=removed>Di antaranya, kegiatan ini bisa mendekatkan hubungan antara orang tua dan buah hati. Anak jadi merasa diperhatikan dan memiliki waktu khusus yang dicurahkan untuknya.</span></li>\r\n</ul>\r\n\r\n<p><span xss=removed>Dari segi kognitif, kosa kata dan kemampuan berimajinasi anak akan meningkat. Anda pun bisa melatih daya ingat anak dengan menanyakan inti dari kisah yang Anda bacakan sebelumnya.</span></p>\r\n\r\n<p>Seiring dengan perkembangan teknologi, kegiatan mendongeng untuk anak banyak ditinggalkan orang tua. Padahal membaca cerita dongeng anak sebelum tidur seperti yang akan kami bahas di sini memiliki banyak manfaat.</p>\r\n\r\n<p><img alt=\"\" src=\"/wejang/assets/kcfinder/upload/files/blockchain-1.jpg\" xss=removed></p>\r\n\r\n<p>Di antaranya, kegiatan ini bisa mendekatkan hubungan antara orang tua dan buah hati. Anak jadi merasa diperhatikan dan memiliki waktu khusus yang dicurahkan untuknya.</p>\r\n\r\n<p>Dari segi kognitif, kosa kata dan kemampuan berimajinasi anak akan meningkat. Anda pun bisa melatih daya ingat anak dengan menanyakan inti dari kisah yang Anda bacakan sebelumnya.</p>\r\n','2019-12-24 12:57:34','2019-12-24 12:57:34');
/*!40000 ALTER TABLE `tbl_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `view_article`
--

DROP TABLE IF EXISTS `view_article`;
/*!50001 DROP VIEW IF EXISTS `view_article`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view_article` AS SELECT 
 1 AS `article_id`,
 1 AS `username`,
 1 AS `firstname`,
 1 AS `lastname`,
 1 AS `category_name`,
 1 AS `article_title`,
 1 AS `article_content`,
 1 AS `createddate`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_distinc_category_article`
--

DROP TABLE IF EXISTS `view_distinc_category_article`;
/*!50001 DROP VIEW IF EXISTS `view_distinc_category_article`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view_distinc_category_article` AS SELECT 
 1 AS `category`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'wejang'
--

--
-- Dumping routines for database 'wejang'
--

--
-- Final view structure for view `view_article`
--

/*!50001 DROP VIEW IF EXISTS `view_article`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_article` AS select `a`.`article_id` AS `article_id`,`b`.`username` AS `username`,`b`.`firstname` AS `firstname`,`b`.`lastname` AS `lastname`,`c`.`category_name` AS `category_name`,`a`.`article_title` AS `article_title`,`a`.`article_content` AS `article_content`,date_format(`a`.`article_created_at`,'%Y-%m-%d') AS `createddate` from ((`tbl_article` `a` join `t_users` `b` on((convert(`a`.`id_users` using utf8) = `b`.`id_users`))) join `t_category` `c` on((convert(`a`.`id_category` using utf8) = `c`.`id_category`))) order by `a`.`article_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_distinc_category_article`
--

/*!50001 DROP VIEW IF EXISTS `view_distinc_category_article`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_distinc_category_article` AS select distinct `view_article`.`category_name` AS `category` from `view_article` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-08 10:12:10
