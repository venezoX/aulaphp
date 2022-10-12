-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: php_lab
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.7-MariaDB-2ubuntu1.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `perfis_usuario`
--

DROP TABLE IF EXISTS `perfis_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfis_usuario` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `excluido` tinyint(1) DEFAULT NULL,
  `id_usuario_criacao` tinyint(4) NOT NULL,
  `id_usuario_alteracao` tinyint(4) NOT NULL,
  `id_usuario_exclusao` tinyint(4) DEFAULT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data_exclusao` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `perfis_usuario_nome_slug_UN` (`nome`,`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfis_usuario`
--

LOCK TABLES `perfis_usuario` WRITE;
/*!40000 ALTER TABLE `perfis_usuario` DISABLE KEYS */;
INSERT INTO `perfis_usuario` VALUES (1,'administrador','administrador','admin do sistema',0,1,1,NULL,'2022-10-11 21:11:22','2022-10-11 21:11:22','0000-00-00 00:00:00'),(2,'Gerente','gerente','gerente do setor',0,1,1,NULL,'2022-10-11 21:12:44','2022-10-11 21:12:44','0000-00-00 00:00:00'),(3,'RH','rh','setor de recursos humanos',0,1,1,NULL,'2022-10-11 21:14:05','2022-10-11 21:14:05','0000-00-00 00:00:00'),(4,'Programador','programador','programadores da instituição',0,1,1,NULL,'2022-10-11 21:14:37','2022-10-11 21:14:37','0000-00-00 00:00:00'),(5,'Contabilidade','contabilidade','setor responsavel pelas contas',0,1,1,NULL,'2022-10-11 21:15:08','2022-10-11 21:15:08','0000-00-00 00:00:00'),(6,'Suporte','suporte','setor de ajuda',0,1,1,NULL,'2022-10-11 21:15:28','2022-10-11 21:15:28','0000-00-00 00:00:00'),(7,'Direcao Geral','direcao_geral','',0,1,1,NULL,'2022-10-11 21:16:23','2022-10-11 21:16:23','0000-00-00 00:00:00'),(8,'Direcao Departamento','direcao_departamento','direção de cada setor',0,1,1,NULL,'2022-10-11 21:16:46','2022-10-11 21:16:46','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `perfis_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `id_perfil_usuario` tinyint(4) DEFAULT NULL,
  `excluido` tinyint(1) DEFAULT NULL,
  `id_usuario_criacao` tinyint(4) NOT NULL,
  `id_usuario_alteracao` tinyint(4) NOT NULL,
  `id_usuario_exclusao` tinyint(4) DEFAULT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data_exclusao` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_UN` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'otto.arru@gmail.com','minhasenha','otto',1,1,0,1,1,NULL,'2022-10-04 21:26:29','2022-10-04 21:26:29','0000-00-00 00:00:00'),(2,'ottoarrueneto@hotmail.com','123456','venezo',1,1,NULL,1,0,NULL,'2022-10-11 19:59:38','2022-10-11 20:00:08','2022-10-11 20:00:08');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'php_lab'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-11 21:19:49
