-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: web-kekerasan
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kasuses`
--

DROP TABLE IF EXISTS `kasuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kasuses` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lembaga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `tgl_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kasuses`
--

LOCK TABLES `kasuses` WRITE;
/*!40000 ALTER TABLE `kasuses` DISABLE KEYS */;
INSERT INTO `kasuses` VALUES (6,'Hak Asuh anak','Cilacap',NULL,'2022-03-12',NULL,'2022-03-12 01:23:47','2022-03-12 02:32:27'),(12,'Cilacap Berbahaya 222','Cilacap',NULL,'2022-03-13',NULL,'2022-03-13 00:02:26','2022-03-14 07:56:37'),(15,'Cilacap Berbahaya','Cilacap',NULL,'2022-03-13',NULL,'2022-03-13 00:11:07','2022-03-13 00:11:07'),(16,'Pemerkosaan Dibawah','Cilacap Melindungi',NULL,'2022-03-13',NULL,'2022-03-13 06:48:52','2022-03-13 06:48:52'),(17,'Penculikan','Cilacap No Culik',NULL,'2022-03-09',NULL,'2022-03-13 06:49:08','2022-03-13 06:49:08'),(18,'Pelecehan sasuke','Cilacap',NULL,'2022-02-20',NULL,'2022-03-13 06:49:46','2022-03-13 06:49:46'),(19,'Pencemaran','Cilacap yes',NULL,'2022-03-26',NULL,'2022-03-14 00:14:35','2022-03-14 00:14:35');
/*!40000 ALTER TABLE `kasuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `korbans`
--

DROP TABLE IF EXISTS `korbans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `korbans` (
  `id_korban` int(11) NOT NULL AUTO_INCREMENT,
  `nama_korban` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` varchar(5) NOT NULL,
  `hubungan` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_korban`),
  KEY `id` (`id`),
  CONSTRAINT `korbans_ibfk_1` FOREIGN KEY (`id`) REFERENCES `kasuses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `korbans`
--

LOCK TABLES `korbans` WRITE;
/*!40000 ALTER TABLE `korbans` DISABLE KEYS */;
INSERT INTO `korbans` VALUES (1,'Auliya','JALAN','kesugihan','cilacap','2022-03-02','21','Teman','SMK','Perempuan',6),(2,'Bela','Cilacap Selatan','cilacap','KABUPATEN CILACAP','2022-03-14','21','Teman','SMK','Laki-Laki',6),(3,'Belaciaw','Cilacap Selatan','Kesugihan','Cilacap','2022-03-14','25','Kaka','Perguruan Tinggi','Perempuan',6);
/*!40000 ALTER TABLE `korbans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelakus`
--

DROP TABLE IF EXISTS `pelakus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelakus` (
  `id_pelaku` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelaku` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_pelaku`),
  KEY `id` (`id`),
  CONSTRAINT `pelakus_ibfk_1` FOREIGN KEY (`id`) REFERENCES `kasuses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelakus`
--

LOCK TABLES `pelakus` WRITE;
/*!40000 ALTER TABLE `pelakus` DISABLE KEYS */;
INSERT INTO `pelakus` VALUES (1,'Keroja','jalan',6),(2,'reymon','jakal',6),(3,'Setiono','Jalan kenari',6);
/*!40000 ALTER TABLE `pelakus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelayanans`
--

DROP TABLE IF EXISTS `pelayanans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelayanans` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `lembaga` varchar(250) NOT NULL,
  `pelayanan` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `tgl_pelayanan` date NOT NULL,
  `id_korban` int(11) NOT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelayanans`
--

LOCK TABLES `pelayanans` WRITE;
/*!40000 ALTER TABLE `pelayanans` DISABLE KEYS */;
INSERT INTO `pelayanans` VALUES (2,'Cilacap Okes','Rehabilitasi','Memperbaiki','2022-03-31',1);
/*!40000 ALTER TABLE `pelayanans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ini akun Admin','admin','admin@example.com',NULL,'$2y$10$DXYhlXTS1n9zWU/ZfP/YqedeqoUWqF4LM.nQGcq8GH09t5LaHw3RC','admin',NULL,'2022-03-30 01:06:43','2022-03-30 01:06:43'),(2,'ini akun User (non admin)','user','user@example.com',NULL,'$2y$10$.HB/n4h1a8vnKzpArXnFz.d4EZaefQ6uXKL3gcdy7BLi6bJQPiQK.','editor',NULL,'2022-03-30 01:06:43','2022-03-30 01:06:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-31 13:44:59
