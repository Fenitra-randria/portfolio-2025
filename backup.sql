/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.6.18-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: portfoliofenitra
-- ------------------------------------------------------
-- Server version	10.6.18-MariaDB-0ubuntu0.22.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Web','web','2025-01-22 09:47:07','2025-01-23 08:14:17'),(2,NULL,1,'Mobile','mobile','2025-01-22 09:47:07','2025-01-23 08:14:27'),(3,NULL,1,'Redaction','redaction','2025-01-23 08:14:40','2025-01-23 08:14:40'),(4,NULL,1,'Referencement','referencement','2025-01-23 08:14:51','2025-01-23 08:14:51');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(22,4,'id','number','ID',1,0,0,0,0,0,NULL,1),(23,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(24,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(25,4,'name','text','Name',1,1,1,1,1,1,NULL,4),(26,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(27,4,'created_at','timestamp','Created At',0,0,1,0,0,0,NULL,6),(28,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(29,5,'id','number','ID',1,0,0,0,0,0,NULL,1),(30,5,'author_id','text','Author',1,0,1,1,0,1,NULL,2),(31,5,'category_id','text','Category',1,0,1,1,1,0,NULL,3),(32,5,'title','text','Title',1,1,1,1,1,1,NULL,4),(33,5,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,5),(34,5,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,6),(35,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(36,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(37,5,'meta_description','text_area','Meta Description',1,0,1,1,1,1,NULL,9),(38,5,'meta_keywords','text_area','Meta Keywords',1,0,1,1,1,1,NULL,10),(39,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(40,5,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,12),(41,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,13),(42,5,'seo_title','text','SEO Title',0,1,1,1,1,1,NULL,14),(43,5,'featured','checkbox','Featured',1,1,1,1,1,1,NULL,15),(44,6,'id','number','ID',1,0,0,0,0,0,NULL,1),(45,6,'author_id','text','Author',1,0,0,0,0,0,NULL,2),(46,6,'title','text','Title',1,1,1,1,1,1,NULL,3),(47,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,4),(48,6,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,5),(49,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),(50,6,'meta_description','text','Meta Description',1,0,1,1,1,1,NULL,7),(51,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,NULL,8),(52,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(53,6,'created_at','timestamp','Created At',1,1,1,0,0,0,NULL,10),(54,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,NULL,11),(55,6,'image','image','Page Image',0,1,1,1,1,1,NULL,12),(56,7,'id','text','Id',1,0,0,0,0,0,'{}',1),(57,7,'title','text','Title',1,1,1,1,1,1,'{}',2),(58,7,'seo_title','text','Seo Title',1,1,1,1,1,1,'{}',3),(59,7,'excerpt','text_area','Excerpt',0,1,1,1,1,1,'{}',4),(60,7,'body','rich_text_box','Body',1,1,1,1,1,1,'{}',5),(61,7,'image','image','Image',1,1,1,1,1,1,'{}',6),(62,7,'slug','text','Slug',1,1,1,1,1,1,'{}',7),(63,7,'meta_description','text_area','Meta Description',0,1,1,1,1,1,'{}',8),(64,7,'meta_keywords','text_area','Meta Keywords',0,1,1,1,1,1,'{}',9),(65,7,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',10),(66,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',11);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_name_singular` varchar(255) NOT NULL,
  `display_name_plural` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `policy_name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2025-01-22 09:46:57','2025-01-22 09:46:57'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2025-01-22 09:46:57','2025-01-22 09:46:57'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2025-01-22 09:46:57','2025-01-22 09:46:57'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,NULL,'2025-01-22 09:47:07','2025-01-22 09:47:07'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,NULL,'2025-01-22 09:47:07','2025-01-22 09:47:07'),(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2025-01-22 09:47:07','2025-01-22 09:47:07'),(7,'services','services','Service','Services','voyager-logbook','App\\Models\\Service',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2025-01-23 08:30:06','2025-01-23 08:30:06');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
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
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `parameters` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2025-01-22 09:46:57','2025-01-22 09:46:57','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,4,'2025-01-22 09:46:57','2025-01-23 08:30:34','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2025-01-22 09:46:57','2025-01-22 09:46:57','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2025-01-22 09:46:57','2025-01-22 09:46:57','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2025-01-22 09:46:57','2025-01-22 09:46:57',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2025-01-22 09:46:57','2025-01-23 08:30:34','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2025-01-22 09:46:57','2025-01-23 08:30:34','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2025-01-22 09:46:57','2025-01-23 08:30:34','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2025-01-22 09:46:57','2025-01-23 08:30:34','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,10,'2025-01-22 09:46:57','2025-01-23 08:30:34','voyager.settings.index',NULL),(11,1,'Categories','','_self','voyager-categories',NULL,NULL,8,'2025-01-22 09:47:07','2025-01-22 09:47:07','voyager.categories.index',NULL),(12,1,'Posts','','_self','voyager-news',NULL,NULL,5,'2025-01-22 09:47:07','2025-01-23 08:30:34','voyager.posts.index',NULL),(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,7,'2025-01-22 09:47:08','2025-01-23 08:30:37','voyager.pages.index',NULL),(14,1,'Services','','_self','voyager-logbook',NULL,NULL,6,'2025-01-23 08:30:06','2025-01-23 08:30:37','voyager.services.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2025-01-22 09:46:57','2025-01-22 09:46:57');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2016_01_01_000000_add_voyager_user_fields',2),(6,'2016_01_01_000000_create_data_types_table',2),(7,'2016_05_19_173453_create_menu_table',2),(8,'2016_10_21_190000_create_roles_table',2),(9,'2016_10_21_190000_create_settings_table',2),(10,'2016_11_30_135954_create_permission_table',2),(11,'2016_11_30_141208_create_permission_role_table',2),(12,'2016_12_26_201236_data_types__add__server_side',2),(13,'2017_01_13_000000_add_route_to_menu_items_table',2),(14,'2017_01_14_005015_create_translations_table',2),(15,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',2),(16,'2017_03_06_000000_add_controller_to_data_types_table',2),(17,'2017_04_21_000000_add_order_to_data_rows_table',2),(18,'2017_07_05_210000_add_policyname_to_data_types_table',2),(19,'2017_08_05_000000_add_group_to_settings_table',2),(20,'2017_11_26_013050_add_user_role_relationship',2),(21,'2017_11_26_015000_create_user_roles_table',2),(22,'2018_03_11_000000_add_user_settings',2),(23,'2018_03_14_000000_add_details_to_data_types_table',2),(24,'2018_03_16_000000_make_settings_value_nullable',2),(25,'2016_01_01_000000_create_pages_table',3),(26,'2016_01_01_000000_create_posts_table',3),(27,'2016_02_15_204651_create_categories_table',3),(28,'2017_04_11_000000_alter_post_nullable_fields_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,0,'Hello World','Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','pages/page1.jpg','hello-world','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2025-01-22 09:47:08','2025-01-22 09:47:08');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2025-01-22 09:46:57','2025-01-22 09:46:57'),(2,'browse_bread',NULL,'2025-01-22 09:46:57','2025-01-22 09:46:57'),(3,'browse_database',NULL,'2025-01-22 09:46:57','2025-01-22 09:46:57'),(4,'browse_media',NULL,'2025-01-22 09:46:57','2025-01-22 09:46:57'),(5,'browse_compass',NULL,'2025-01-22 09:46:57','2025-01-22 09:46:57'),(6,'browse_menus','menus','2025-01-22 09:46:57','2025-01-22 09:46:57'),(7,'read_menus','menus','2025-01-22 09:46:57','2025-01-22 09:46:57'),(8,'edit_menus','menus','2025-01-22 09:46:57','2025-01-22 09:46:57'),(9,'add_menus','menus','2025-01-22 09:46:57','2025-01-22 09:46:57'),(10,'delete_menus','menus','2025-01-22 09:46:57','2025-01-22 09:46:57'),(11,'browse_roles','roles','2025-01-22 09:46:57','2025-01-22 09:46:57'),(12,'read_roles','roles','2025-01-22 09:46:57','2025-01-22 09:46:57'),(13,'edit_roles','roles','2025-01-22 09:46:57','2025-01-22 09:46:57'),(14,'add_roles','roles','2025-01-22 09:46:57','2025-01-22 09:46:57'),(15,'delete_roles','roles','2025-01-22 09:46:57','2025-01-22 09:46:57'),(16,'browse_users','users','2025-01-22 09:46:57','2025-01-22 09:46:57'),(17,'read_users','users','2025-01-22 09:46:57','2025-01-22 09:46:57'),(18,'edit_users','users','2025-01-22 09:46:57','2025-01-22 09:46:57'),(19,'add_users','users','2025-01-22 09:46:57','2025-01-22 09:46:57'),(20,'delete_users','users','2025-01-22 09:46:57','2025-01-22 09:46:57'),(21,'browse_settings','settings','2025-01-22 09:46:57','2025-01-22 09:46:57'),(22,'read_settings','settings','2025-01-22 09:46:57','2025-01-22 09:46:57'),(23,'edit_settings','settings','2025-01-22 09:46:57','2025-01-22 09:46:57'),(24,'add_settings','settings','2025-01-22 09:46:57','2025-01-22 09:46:57'),(25,'delete_settings','settings','2025-01-22 09:46:57','2025-01-22 09:46:57'),(26,'browse_categories','categories','2025-01-22 09:47:07','2025-01-22 09:47:07'),(27,'read_categories','categories','2025-01-22 09:47:07','2025-01-22 09:47:07'),(28,'edit_categories','categories','2025-01-22 09:47:07','2025-01-22 09:47:07'),(29,'add_categories','categories','2025-01-22 09:47:07','2025-01-22 09:47:07'),(30,'delete_categories','categories','2025-01-22 09:47:07','2025-01-22 09:47:07'),(31,'browse_posts','posts','2025-01-22 09:47:07','2025-01-22 09:47:07'),(32,'read_posts','posts','2025-01-22 09:47:07','2025-01-22 09:47:07'),(33,'edit_posts','posts','2025-01-22 09:47:07','2025-01-22 09:47:07'),(34,'add_posts','posts','2025-01-22 09:47:07','2025-01-22 09:47:07'),(35,'delete_posts','posts','2025-01-22 09:47:07','2025-01-22 09:47:07'),(36,'browse_pages','pages','2025-01-22 09:47:08','2025-01-22 09:47:08'),(37,'read_pages','pages','2025-01-22 09:47:08','2025-01-22 09:47:08'),(38,'edit_pages','pages','2025-01-22 09:47:08','2025-01-22 09:47:08'),(39,'add_pages','pages','2025-01-22 09:47:08','2025-01-22 09:47:08'),(40,'delete_pages','pages','2025-01-22 09:47:08','2025-01-22 09:47:08'),(41,'browse_services','services','2025-01-23 08:30:06','2025-01-23 08:30:06'),(42,'read_services','services','2025-01-23 08:30:06','2025-01-23 08:30:06'),(43,'edit_services','services','2025-01-23 08:30:06','2025-01-23 08:30:06'),(44,'add_services','services','2025-01-23 08:30:06','2025-01-23 08:30:06'),(45,'delete_services','services','2025-01-23 08:30:06','2025-01-23 08:30:06');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,4,'Comment Améliorer le Temps de Chargement pour un Meilleur SEO ?','Wave Tech Team | Comment Améliorer le Temps de Chargement pour un Meilleur SEO ?','Découvrez comment améliorer la vitesse de votre site pour un meilleur référencement et une meilleure expérience utilisateur.','<p>Le temps de chargement de votre site a un impact direct sur votre SEO. Google privil&eacute;gie les sites rapides, car cela am&eacute;liore l\'exp&eacute;rience utilisateur. Un site lent peut entra&icirc;ner une baisse de votre classement, car les utilisateurs quittent rapidement un site qui met trop de temps &agrave; se charger.</p>\r\n<p>Pour am&eacute;liorer le temps de chargement, commencez par optimiser vos images en r&eacute;duisant leur taille sans perdre en qualit&eacute;. Utilisez &eacute;galement des outils de mise en cache et de compression de fichiers pour acc&eacute;l&eacute;rer le processus.</p>\r\n<p>L\'utilisation d\'un CDN (Content Delivery Network) permet &eacute;galement de distribuer le contenu plus rapidement aux utilisateurs, peu importe o&ugrave; ils se trouvent. Enfin, assurez-vous que votre site est h&eacute;berg&eacute; sur un serveur rapide et fiable.</p>\r\n<h4>&nbsp;</h4>','posts/January2025/2ukvjqfSRecVFvFJoBkf.jpg','ameliorer-temps-chargement-site-seo','Optimisez la vitesse de votre site pour améliorer son référencement et offrir une meilleure expérience aux utilisateurs.','temps de chargement, SEO, vitesse de site, optimisation performance, CDN','PUBLISHED',1,'2025-01-22 09:47:07','2025-01-24 07:48:32'),(2,1,3,'Comment Rédiger des Articles de Blog Optimisés pour le SEO ?','Wave Tech Team | Comment Rédiger des Articles de Blog Optimisés pour le SEO ?','Apprenez à rédiger des articles de blog qui sont non seulement engageants pour vos lecteurs, mais aussi optimisés pour le SEO.','<p>R&eacute;diger un article de blog optimis&eacute; pour le SEO n\'est pas une t&acirc;che simple. Il faut trouver le bon &eacute;quilibre entre l\'optimisation pour les moteurs de recherche et l\'engagement de l\'audience. Tout commence par une recherche approfondie des mots-cl&eacute;s pertinents pour votre sujet.</p>\r\n<p>Ensuite, il est essentiel d\'int&eacute;grer ces mots-cl&eacute;s de mani&egrave;re naturelle dans le texte, en veillant &agrave; ce que l\'article reste fluide et agr&eacute;able &agrave; lire. N\'oubliez pas d\'ajouter des liens internes et externes pour am&eacute;liorer la cr&eacute;dibilit&eacute; de votre contenu.</p>\r\n<p>La structure de l\'article joue &eacute;galement un r&ocirc;le cl&eacute;. Utilisez des titres et sous-titres pour bien organiser le contenu et faciliter la lecture. Enfin, la qualit&eacute; du contenu prime : il doit r&eacute;pondre aux attentes des lecteurs et leur apporter une v&eacute;ritable valeur ajout&eacute;e.</p>\r\n<h4>&nbsp;</h4>','posts/January2025/z1wlZ3A8zV459HKqRxKO.jpg','rediger-articles-blog-optimises-seo','Découvrez comment rédiger des articles de blog qui attirent les lecteurs et améliorent votre SEO.','rédaction blog, optimisation SEO, articles SEO, rédaction web, mots-clés','PUBLISHED',1,'2025-01-22 09:47:07','2025-01-24 07:49:29'),(3,1,1,'Comment Optimiser la Sécurité d\'un Site Web ?','Wave Tech Team | Comment Optimiser la Sécurité d\'un Site Web ?','Apprenez comment protéger votre site web contre les attaques et garantir la sécurité des données utilisateurs.','<p>La s&eacute;curit&eacute; d\'un site web est primordiale pour prot&eacute;ger les donn&eacute;es des utilisateurs et garantir la confiance envers votre entreprise. Les cyberattaques sont de plus en plus fr&eacute;quentes, il est donc crucial de prendre des mesures pr&eacute;ventives pour prot&eacute;ger votre site.</p>\r\n<p>La premi&egrave;re &eacute;tape consiste &agrave; installer un certificat SSL, afin de crypter les donn&eacute;es &eacute;chang&eacute;es entre l\'utilisateur et le site. Ensuite, il est essentiel de mettre &agrave; jour r&eacute;guli&egrave;rement vos plugins, frameworks et autres outils pour &eacute;viter les failles de s&eacute;curit&eacute;.</p>\r\n<p>Les mots de passe doivent &ecirc;tre complexes et diff&eacute;rents pour chaque partie du site. Il est aussi important de sauvegarder r&eacute;guli&egrave;rement vos donn&eacute;es et de mettre en place une authentification &agrave; deux facteurs pour renforcer la s&eacute;curit&eacute;.</p>\r\n<h4>&nbsp;</h4>','posts/January2025/cV6bVCcuviAjtO7dRxcA.webp','optimiser-securite-site-web','Protégez votre site web contre les cyberattaques grâce à ces astuces simples mais efficaces.','sécurité web, protection site, cyberattaque, certificat SSL, sécurité données','PUBLISHED',1,'2025-01-22 09:47:07','2025-01-24 07:35:04'),(4,1,4,'Les Meilleures Pratiques pour un SEO Local Réussi','Wave Tech Team | Les Meilleures Pratiques pour un SEO Local Réussi','Découvrez les meilleures pratiques pour optimiser votre SEO local et attirer plus de clients près de chez vous.','<p>Le SEO local est un &eacute;l&eacute;ment cl&eacute; pour attirer des clients proches de votre entreprise. Il commence par l\'optimisation de votre profil Google My Business, qui doit &ecirc;tre complet et &agrave; jour. Il est &eacute;galement important de recueillir des avis clients positifs, car cela am&eacute;liore votre cr&eacute;dibilit&eacute; et votre classement local.</p>\r\n<p>L\'utilisation de mots-cl&eacute;s g&eacute;olocalis&eacute;s dans vos titres, descriptions et contenus est essentielle pour capter les recherches locales. De plus, l\'int&eacute;gration de votre adresse et de votre num&eacute;ro de t&eacute;l&eacute;phone sur toutes les pages du site contribue &agrave; renforcer votre pr&eacute;sence locale.</p>\r\n<p>Enfin, assurez-vous que votre site est responsive et optimis&eacute; pour les appareils mobiles, car une grande partie des recherches locales est effectu&eacute;e depuis des smartphones.</p>\r\n<h4>&nbsp;</h4>','posts/January2025/kg11lcLkDUbemCoC1FUF.jpg','meilleures-pratiques-seo-local','Apprenez comment optimiser votre SEO local pour attirer davantage de clients dans votre région.','SEO local, référencement local, Google My Business, optimisation locale','PUBLISHED',1,'2025-01-22 09:47:07','2025-01-24 07:57:43'),(5,1,2,'Les Tendances du Développement Mobile en 2025','Wave Tech Team | Les Tendances du Développement Mobile en 2025','Découvrez les tendances à suivre dans le développement mobile en 2025, pour rester à la pointe de la technologie.','<p>Le d&eacute;veloppement mobile est un secteur en pleine croissance, avec de nouvelles tendances qui &eacute;mergent chaque ann&eacute;e. En 2025, certaines tendances cl&eacute;s red&eacute;finiront l\'avenir du d&eacute;veloppement mobile.</p>\r\n<p>Les applications multiplateformes seront de plus en plus populaires, gr&acirc;ce &agrave; des outils comme Flutter et React Native, qui permettent de cr&eacute;er des applications pour iOS et Android &agrave; partir d\'une seule base de code.</p>\r\n<p>L\'intelligence artificielle (IA) continuera &eacute;galement &agrave; transformer le d&eacute;veloppement mobile, en permettant des exp&eacute;riences plus personnalis&eacute;es pour les utilisateurs. En outre, la 5G ouvrira la voie &agrave; des applications encore plus performantes, avec des vitesses de t&eacute;l&eacute;chargement et de streaming consid&eacute;rablement am&eacute;lior&eacute;es.</p>\r\n<h4>&nbsp;</h4>','posts/January2025/eNW97huBwCcj24Rlg8gU.jpg','tendances-developpement-mobile-2025','Restez à jour avec les tendances du développement mobile en 2025, de l\'intelligence artificielle à la 5G.','développement mobile, tendances 2025, Flutter, React Native, IA, 5G','PUBLISHED',1,'2025-01-23 04:35:04','2025-01-24 07:28:44'),(6,1,3,'L\'Importance du Contenu de Qualité pour Votre Stratégie SEO','Wave Tech Team | L\'Importance du Contenu de Qualité pour Votre Stratégie SEO','Découvrez pourquoi un contenu de qualité est crucial pour améliorer votre visibilité en ligne et réussir votre stratégie SEO.','<p>Un contenu de qualit&eacute; est essentiel pour une strat&eacute;gie SEO r&eacute;ussie. Google accorde une grande importance &agrave; la pertinence et &agrave; l\'originalit&eacute; des contenus. Cela signifie que votre contenu doit &ecirc;tre informatif, bien structur&eacute; et r&eacute;pondre aux questions que se posent les utilisateurs.</p>\r\n<p>En plus de cela, le contenu doit &ecirc;tre optimis&eacute; pour les moteurs de recherche. Cela inclut l\'utilisation de mots-cl&eacute;s pertinents, l\'optimisation des balises meta et l\'inclusion de liens internes et externes.</p>\r\n<p>Enfin, la r&eacute;gularit&eacute; est cruciale. Publier r&eacute;guli&egrave;rement des contenus frais et int&eacute;ressants peut grandement am&eacute;liorer votre classement dans les r&eacute;sultats de recherche.</p>\r\n<h4>&nbsp;</h4>','posts/January2025/kj6IdkhYnUQ2PQoL6Jm9.jpg','importance-contenu-qualite-strategie-seo','Apprenez comment un contenu de qualité peut booster votre SEO et améliorer votre classement sur Google.','contenu de qualité, stratégie SEO, optimisation SEO, référencement naturel, contenu web','PUBLISHED',1,'2025-01-24 07:38:31','2025-01-24 07:47:55'),(7,1,2,'Pourquoi Choisir le Développement Mobile Natifs ?','Wave Tech Team | Pourquoi Choisir le Développement Mobile Natifs ?','Découvrez les avantages du développement mobile natif et pourquoi il peut être la meilleure option pour votre application.','<p>Le d&eacute;veloppement mobile natif offre plusieurs avantages par rapport aux applications hybrides ou multiplateformes. Lorsque vous optez pour une application native, vous b&eacute;n&eacute;ficiez de meilleures performances, car elles sont directement optimis&eacute;es pour une plateforme sp&eacute;cifique (iOS ou Android).</p>\r\n<p>Les applications natives permettent &eacute;galement un meilleur acc&egrave;s aux fonctionnalit&eacute;s du t&eacute;l&eacute;phone, comme la cam&eacute;ra, le GPS ou les capteurs, ce qui garantit une exp&eacute;rience utilisateur plus fluide et plus riche.</p>\r\n<p>En outre, les mises &agrave; jour et la maintenance d\'une application native sont plus simples, car elles sont con&ccedil;ues sp&eacute;cifiquement pour une plateforme.</p>\r\n<h4>&nbsp;</h4>','posts/January2025/ljUBunpczb2Or0pZ60yr.jpg','avantages-developpement-mobile-natif','Apprenez pourquoi le développement mobile natif est souvent la meilleure option pour une application performante et optimisée.','développement mobile natif, avantages natif, performance mobile, application native','PUBLISHED',1,'2025-01-24 07:40:07','2025-01-24 07:47:14'),(8,1,1,'Les Meilleures Pratiques pour un Développement Web Réussi','Wave Tech Team | Les Meilleures Pratiques pour un Développement Web Réussi','Apprenez les meilleures pratiques de développement web pour créer un site performant, rapide et agréable à utiliser.','<p>Le d&eacute;veloppement web est un domaine en constante &eacute;volution, o&ugrave; la technologie et les pratiques changent rapidement. Pour garantir le succ&egrave;s de votre site ou application web, il est essentiel de suivre certaines bonnes pratiques. Tout commence par une planification minutieuse, qui permet de bien d&eacute;finir les objectifs du projet. Ensuite, l\'optimisation de l\'exp&eacute;rience utilisateur (UX) et la conception responsive sont incontournables. L\'int&eacute;gration d\'un design attrayant et fonctionnel est &eacute;galement un point cl&eacute; pour attirer et fid&eacute;liser les utilisateurs.</p>\r\n<p>Un autre aspect crucial est la performance du site. Les sites lents nuisent non seulement &agrave; l\'exp&eacute;rience utilisateur mais &eacute;galement au classement SEO. Il est donc important de veiller &agrave; ce que votre code soit propre et que votre site soit rapide.</p>\r\n<p>Le d&eacute;veloppement web ne s&rsquo;arr&ecirc;te pas &agrave; la cr&eacute;ation du site, il faut &eacute;galement penser &agrave; sa maintenance r&eacute;guli&egrave;re pour s\'assurer qu\'il reste fonctionnel et s&eacute;curis&eacute;.</p>\r\n<h4>&nbsp;</h4>','posts/January2025/cCPV8AERyxx2UWn6JYSn.webp','meilleures-pratiques-de-developpement-web','Découvrez les meilleures pratiques de développement web pour créer un site efficace et bien optimisé.','développement web, bonnes pratiques, optimisation UX, performance site, création web','PUBLISHED',1,'2025-01-24 07:41:37','2025-01-24 07:42:25');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2025-01-22 09:46:57','2025-01-22 09:46:57'),(2,'user','Normal User','2025-01-22 09:46:57','2025-01-22 09:46:57');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Services de Développement Web','Wave Tech Team | Développement Web','Wave Tech Team propose des solutions de développement web sur-mesure, alliant performance, design innovant et optimisation SEO...','<h2>Services de D&eacute;veloppement Web - Wave Tech Team</h2>\r\n<p>Chez <strong>Wave Tech Team</strong>, nous transformons votre pr&eacute;sence en ligne en cr&eacute;ant des sites web sur mesure, visuellement attractifs, performants et adapt&eacute;s aux besoins sp&eacute;cifiques de votre entreprise. Nous nous engageons &agrave; offrir des solutions web innovantes, scalables et optimis&eacute;es, en mettant l\'accent sur une exp&eacute;rience utilisateur fluide, une conception responsive et une fonctionnalit&eacute; sans faille. Notre objectif est de permettre aux entreprises de se d&eacute;marquer et de prosp&eacute;rer dans l\'univers num&eacute;rique.</p>\r\n<div class=\"features mt-40 mt-xs-30 mb-30 mb-xs-20\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-5 col-md-6\">\r\n<div class=\"content\">\r\n<h3>Services Inclus</h3>\r\n<ul class=\"feature-list-item\">\r\n<li><strong>D&eacute;veloppement Web Sur-Mesure</strong> : Cr&eacute;ation de sites et applications web personnalis&eacute;s en fonction de votre image de marque et de vos objectifs d\'affaires.</li>\r\n<li><strong>Design Responsive</strong> : Nous assurons une exp&eacute;rience utilisateur optimale sur tous les appareils, garantissant un affichage impeccable sur desktop, tablette et mobile.</li>\r\n<li><strong>D&eacute;veloppement d\'Applications Web</strong> : Cr&eacute;ation d\'applications robustes et &eacute;volutives, adapt&eacute;es aux besoins sp&eacute;cifiques de votre entreprise.</li>\r\n<li><strong>Optimisation SEO</strong> : Nous int&eacute;grons des pratiques SEO avanc&eacute;es afin d\'am&eacute;liorer la visibilit&eacute; de votre site sur les moteurs de recherche, g&eacute;n&eacute;rant ainsi plus de trafic et d\'engagement.</li>\r\n<li><strong>Support 24/7</strong> : Nous vous offrons une assistance continue, vous garantissant une solution rapide &agrave; toute question ou probl&egrave;me technique.</li>\r\n<li><strong>&Eacute;quipe d\'Experts</strong> : Une &eacute;quipe de d&eacute;veloppeurs, designers et strat&egrave;ges exp&eacute;riment&eacute;s, d&eacute;di&eacute;s &agrave; la r&eacute;ussite de votre projet.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-7 col-md-6 mt-xs-30\">\r\n<div class=\"content\">\r\n<h3>&nbsp;</h3>\r\n<h3>Le D&eacute;fi</h3>\r\n<p>Le monde num&eacute;rique &eacute;volue rapidement, et de nombreuses entreprises font face &agrave; des d&eacute;fis comme des sites web obsol&egrave;tes, des performances lentes et des interfaces non optimis&eacute;es pour les mobiles. Chez Wave Tech Team, nous comprenons l\'importance de rester &agrave; la pointe de la technologie et d\'optimiser chaque aspect de votre pr&eacute;sence en ligne. Notre mission est de vous accompagner dans la transformation de vos d&eacute;fis num&eacute;riques en opportunit&eacute;s en livrant des solutions modernes, performantes et innovantes.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<h3>Ce que Nous Faisons</h3>\r\n<p>Chez <strong>Wave Tech Team</strong>, nous abordons chaque projet de mani&egrave;re strat&eacute;gique et avec une attention particuli&egrave;re aux d&eacute;tails. Nous croyons que chaque client m&eacute;rite une solution unique, adapt&eacute;e &agrave; ses besoins sp&eacute;cifiques. Voici ce que nous proposons :</p>\r\n<ol>\r\n<li><strong>Analyse des Besoins</strong> : Nous commen&ccedil;ons par une analyse approfondie de votre entreprise et de vos objectifs afin de cr&eacute;er une solution qui vous propulse en avant dans votre domaine.</li>\r\n<li><strong>Design Innovant</strong> : Nous concevons des interfaces utilisateurs intuitives, modernes et attrayantes, en nous assurant qu&rsquo;elles soient &agrave; la fois esth&eacute;tiques et fonctionnelles.</li>\r\n<li><strong>D&eacute;veloppement Technique</strong> : Nous mettons en &oelig;uvre des architectures backend solides et &eacute;volutives, assurant une performance optimale m&ecirc;me avec des volumes &eacute;lev&eacute;s de trafic.</li>\r\n<li><strong>Optimisation Continue</strong> : Nous nous assurons que votre site reste performant, rapide et optimis&eacute; pour les moteurs de recherche, en int&eacute;grant des pratiques SEO d&egrave;s la phase de d&eacute;veloppement.</li>\r\n<li><strong>S&eacute;curit&eacute; et Maintenance</strong> : Nous int&eacute;grons des solutions de s&eacute;curit&eacute; robustes et offrons une maintenance continue pour garantir la p&eacute;rennit&eacute; de votre site.</li>\r\n</ol>\r\n<p>Nous rejetons les solutions temporaires et privil&eacute;gions des choix r&eacute;fl&eacute;chis qui assurent un succ&egrave;s durable. Nous veillons &agrave; ce que chaque projet que nous r&eacute;alisons soit &agrave; la hauteur des attentes de nos clients et au-del&agrave;.</p>\r\n<p>Chez Wave Tech Team, nous mettons un point d\'honneur &agrave; vous offrir une exp&eacute;rience num&eacute;rique fluide et sans faille. Ensemble, nous ferons cro&icirc;tre votre pr&eacute;sence en ligne et propulserons votre entreprise vers de nouveaux horizons.</p>','services/January2025/yX2iyovGxBMh4uotXQyH.jpg','developpement-web','Wave Tech Team propose des solutions de développement web sur-mesure, alliant performance, design innovant et optimisation SEO...','developpement, web, responsive, sur mesure','2025-01-23 08:38:00','2025-01-24 05:32:48'),(2,'Service Développement Mobile','Wave Tech Team | Développement Mobile','Wave Tech Team propose des solutions de développement mobile sur-mesure, alliant performance, design intuitif et expérience utilisateur fluide...','<h2>Services de D&eacute;veloppement Mobile - Wave Tech Team</h2>\r\n<p>Chez <strong>Wave Tech Team</strong>, nous transformons votre pr&eacute;sence mobile en cr&eacute;ant des applications mobiles sur-mesure, performantes, intuitives et adapt&eacute;es aux besoins sp&eacute;cifiques de votre entreprise. Nous nous engageons &agrave; offrir des solutions mobiles innovantes, scalables et optimis&eacute;es, en mettant l\'accent sur une exp&eacute;rience utilisateur fluide, une interface design et une fonctionnalit&eacute; sans faille. Notre objectif est de permettre aux entreprises de se d&eacute;marquer et de prosp&eacute;rer dans l\'univers mobile.</p>\r\n<div class=\"features mt-40 mt-xs-30 mb-30 mb-xs-20\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-5 col-md-6\">\r\n<div class=\"content\">\r\n<h3>Services Inclus</h3>\r\n<ul class=\"feature-list-item\">\r\n<li><strong>D&eacute;veloppement Mobile Sur-Mesure</strong> : Cr&eacute;ation d\'applications mobiles personnalis&eacute;es en fonction de vos besoins et de l\'image de votre marque.</li>\r\n<li><strong>Design Intuitif et Responsive</strong> : Nous garantissons une exp&eacute;rience optimale sur tous les appareils mobiles, en assurant une interface fluide et agr&eacute;able.</li>\r\n<li><strong>Applications Performantes et &Eacute;volutives</strong> : D&eacute;veloppement d\'applications robustes, &eacute;volutives et adapt&eacute;es aux sp&eacute;cificit&eacute;s de votre activit&eacute;.</li>\r\n<li><strong>Optimisation des Performances</strong> : Nous nous assurons que votre application fonctionne &agrave; son meilleur niveau, avec des temps de r&eacute;ponse rapides et une utilisation minimale des ressources.</li>\r\n<li><strong>Support 24/7</strong>&nbsp;: Nous vous offrons une assistance continue, vous garantissant une solution rapide &agrave; toute question ou probl&egrave;me technique.</li>\r\n<li><strong>&Eacute;quipe d\'Experts</strong> : Une &eacute;quipe de d&eacute;veloppeurs, designers et sp&eacute;cialistes d&eacute;di&eacute;e &agrave; la r&eacute;ussite de votre projet mobile.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-7 col-md-6 mt-xs-30\">\r\n<div class=\"content\">\r\n<h3>&nbsp;</h3>\r\n<h3>Le D&eacute;fi</h3>\r\n<p>Dans un monde mobile en constante &eacute;volution, de nombreuses entreprises se retrouvent confront&eacute;es &agrave; des applications lentes, mal optimis&eacute;es ou non adapt&eacute;es &agrave; tous les appareils. Chez <strong>Wave Tech Team</strong>, nous comprenons l\'importance de livrer une application mobile fluide, rapide et qui engage vos utilisateurs. Notre mission est de vous fournir des solutions mobiles innovantes, performantes et adapt&eacute;es aux nouvelles attentes des consommateurs.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<h3>Ce que Nous Faisons</h3>\r\n<div class=\"flex max-w-full flex-col flex-grow\">\r\n<div class=\"min-h-8 text-message flex w-full flex-col items-end gap-2 whitespace-normal break-words text-start [.text-message+&amp;]:mt-5\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"f046f667-57b8-46d1-89ea-cf423d7f44e0\" data-message-model-slug=\"gpt-4o-mini\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<p>Chez <strong>Wave Tech Team</strong>, chaque projet mobile est abord&eacute; avec une attention particuli&egrave;re aux d&eacute;tails. Nous croyons que chaque application mobile doit refl&eacute;ter l\'unicit&eacute; de votre entreprise. Voici ce que nous vous proposons :</p>\r\n<ol>\r\n<li><strong>Analyse des Besoins</strong> : Nous commen&ccedil;ons par analyser en profondeur votre entreprise et vos objectifs pour concevoir une solution mobile qui correspond &agrave; vos attentes.</li>\r\n<li><strong>Design Innovant</strong> : Nous cr&eacute;ons des interfaces utilisateurs modernes et intuitives, offrant une exp&eacute;rience agr&eacute;able et facile &agrave; naviguer.</li>\r\n<li><strong>D&eacute;veloppement Technique</strong> : Nous mettons en place des architectures backend solides et performantes pour garantir une exp&eacute;rience mobile optimale et &eacute;volutive.</li>\r\n<li><strong>Optimisation Continue</strong> : Nous garantissons une application mobile rapide et bien optimis&eacute;e, en tenant compte des bonnes pratiques de performance et de SEO mobile.</li>\r\n<li><strong>S&eacute;curit&eacute; et Maintenance</strong> : Nous int&eacute;grons des solutions de s&eacute;curit&eacute; robustes et assurons la maintenance continue de l\'application pour garantir sa p&eacute;rennit&eacute;.</li>\r\n</ol>\r\n<p>Nous rejetons les solutions temporaires et nous privil&eacute;gions des choix durables pour garantir le succ&egrave;s &agrave; long terme de vos applications mobiles. Chaque projet est con&ccedil;u pour d&eacute;passer vos attentes.</p>\r\n<p>Chez <strong>Wave Tech Team</strong>, nous mettons un point d\'honneur &agrave; vous fournir une application mobile fluide, fonctionnelle et sans faille, pour propulser votre entreprise dans l\'univers mobile.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>','services/January2025/hasJwRzabWVxphnF6asZ.jpg','developpement-mobile','Wave Tech Team propose des solutions de développement mobile sur-mesure, alliant performance, design intuitif et expérience utilisateur fluide...','developpement, mobile, flutter, react-native','2025-01-24 05:42:13','2025-01-24 05:42:13'),(3,'Services de Rédaction','Wave Tech Team | Services de Rédaction Professionnelle','Wave Tech Team propose des services de rédaction professionnelle sur-mesure, incluant la création de contenus web, articles, blogs, et descriptions de produits, optimisés pour le SEO et adaptés à vos objectifs de communication...','<h2>Services de R&eacute;daction - Wave Tech Team</h2>\r\n<p>Chez <strong>Wave Tech Team</strong>, nous offrons des services de r&eacute;daction professionnels, cr&eacute;atifs et adapt&eacute;s &agrave; vos besoins sp&eacute;cifiques. Que vous ayez besoin de contenus web, de blogs, d\'articles, de fiches produits ou de tout autre type de r&eacute;daction, nous mettons notre expertise au service de votre communication. Nous nous engageons &agrave; produire des textes captivants, optimis&eacute;s pour le SEO, tout en refl&eacute;tant fid&egrave;lement votre image de marque. Notre objectif est de vous aider &agrave; transmettre votre message de mani&egrave;re claire, engageante et efficace.</p>\r\n<div class=\"features mt-40 mt-xs-30 mb-30 mb-xs-20\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-5 col-md-6\">\r\n<div class=\"content\">\r\n<h3>Services Inclus</h3>\r\n<ul class=\"feature-list-item\">\r\n<li><strong>R&eacute;daction Web Sur-Mesure</strong> : Cr&eacute;ation de contenus optimis&eacute;s pour le web, adapt&eacute;s &agrave; votre audience et &agrave; vos objectifs.</li>\r\n<li><strong>R&eacute;daction SEO</strong> : R&eacute;daction de textes optimis&eacute;s pour am&eacute;liorer votre visibilit&eacute; sur les moteurs de recherche.</li>\r\n<li><strong>Articles de Blog</strong> : Cr&eacute;ation de contenus r&eacute;guliers pour maintenir l\'engagement de vos utilisateurs.</li>\r\n<li><strong>Fiches Produits</strong> : R&eacute;daction de descriptions de produits claires, attractives et optimis&eacute;es pour la conversion.</li>\r\n<li><strong>R&eacute;daction d\'Emails Marketing</strong> : Cr&eacute;ation de campagnes d\'emails captivantes et efficaces pour engager votre audience.</li>\r\n<li><strong>R&eacute;vision et Correction</strong> : Relecture et am&eacute;lioration de vos contenus existants pour garantir leur clart&eacute; et leur impact.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-7 col-md-6 mt-xs-30\">\r\n<div class=\"content\">\r\n<h3>&nbsp;</h3>\r\n<h3>Le D&eacute;fi</h3>\r\n<p>Chez <strong>Wave Tech Team</strong>, nous abordons chaque projet de r&eacute;daction avec une strat&eacute;gie claire et un objectif pr&eacute;cis : fournir un contenu de qualit&eacute; qui attire et engage votre public. Voici ce que nous offrons :</p>\r\n<ol>\r\n<li><strong>Analyse des Besoins</strong> : Nous commen&ccedil;ons par comprendre votre audience, vos objectifs et votre marque pour cr&eacute;er un contenu qui vous repr&eacute;sente.</li>\r\n<li><strong>R&eacute;daction Cr&eacute;ative</strong> : Nous r&eacute;digeons des textes originaux, engageants et adapt&eacute;s &agrave; votre ton de voix, tout en restant fid&egrave;le &agrave; votre message.</li>\r\n<li><strong>Optimisation SEO</strong> : Nous int&eacute;grons des mots-cl&eacute;s et des techniques de r&eacute;daction SEO pour am&eacute;liorer la visibilit&eacute; de vos contenus sur les moteurs de recherche.</li>\r\n<li><strong>R&eacute;vision et Perfectionnement</strong> : Nous r&eacute;visons et am&eacute;liorons tous les textes pour garantir leur qualit&eacute; et leur impact.</li>\r\n<li><strong>Suivi et Mise &agrave; Jour</strong> : Nous vous accompagnons dans la mise &agrave; jour r&eacute;guli&egrave;re de vos contenus pour maintenir leur pertinence.</li>\r\n</ol>\r\n<p>Nous rejetons les contenus g&eacute;n&eacute;riques et privil&eacute;gions une approche sur mesure, ax&eacute;e sur la qualit&eacute;, la pertinence et l\'efficacit&eacute;. Nous nous assurons que chaque texte contribue &agrave; renforcer votre positionnement et &agrave; atteindre vos objectifs.</p>\r\n<p>Chez <strong>Wave Tech Team</strong>, nous nous engageons &agrave; fournir des contenus r&eacute;dactionnels qui captivent, informent et transforment vos visiteurs en clients fid&egrave;les.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>','services/January2025/TVJIvj5qnHtEYsQwFDaa.jpg','service-redaction','Wave Tech Team propose des services de rédaction professionnelle sur-mesure, incluant la création de contenus web, articles, blogs, et descriptions de produits, optimisés pour le SEO et adaptés à vos objectifs de communication...','rédaction web, rédaction SEO, création de contenu, rédaction blog, rédaction articles, optimisation SEO, révision de contenu, rédaction marketing, description de produits, rédaction professionnelle','2025-01-24 05:50:00','2025-01-24 05:52:40'),(4,'Services de Référencement (SEO)','Wave Tech Team | Services de Référencement (SEO)','Wave Tech Team propose des services SEO sur-mesure pour améliorer votre visibilité en ligne, optimiser votre site et augmenter votre trafic organique...','<h2>Services de R&eacute;f&eacute;rencement (SEO) - Wave Tech Team</h2>\r\n<p>Chez <strong>Wave Tech Team</strong>, nous vous aidons &agrave; am&eacute;liorer votre visibilit&eacute; en ligne gr&acirc;ce &agrave; des strat&eacute;gies de r&eacute;f&eacute;rencement naturel (SEO) adapt&eacute;es &agrave; vos besoins sp&eacute;cifiques. Nous mettons en &oelig;uvre des techniques avanc&eacute;es pour optimiser votre site web et am&eacute;liorer son classement sur les moteurs de recherche, g&eacute;n&eacute;rant ainsi plus de trafic organique et d&rsquo;opportunit&eacute;s commerciales. Notre objectif est de vous positionner parmi les premiers r&eacute;sultats de recherche, en assurant une croissance continue et durable de votre pr&eacute;sence en ligne.</p>\r\n<div class=\"features mt-40 mt-xs-30 mb-30 mb-xs-20\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-5 col-md-6\">\r\n<div class=\"content\">\r\n<h3>Services Inclus</h3>\r\n<ul class=\"feature-list-item\">\r\n<li><strong>Audit SEO</strong> : Analyse compl&egrave;te de votre site web pour identifier les points d\'am&eacute;lioration et les opportunit&eacute;s de croissance.</li>\r\n<li><strong>Optimisation On-Page</strong> : Optimisation des &eacute;l&eacute;ments internes de votre site (titres, balises, contenu) pour am&eacute;liorer son classement.</li>\r\n<li><strong>Optimisation Off-Page</strong> : Strat&eacute;gies de netlinking et cr&eacute;ation de backlinks pour augmenter l\'autorit&eacute; de votre site.</li>\r\n<li><strong>SEO Local</strong> : Optimisation de votre pr&eacute;sence en ligne pour attirer des clients locaux et am&eacute;liorer votre visibilit&eacute; sur les recherches g&eacute;olocalis&eacute;es.</li>\r\n<li><strong>Suivi et Reporting</strong> : Surveillance continue de vos performances SEO, avec des rapports d&eacute;taill&eacute;s sur les progr&egrave;s et les r&eacute;sultats.</li>\r\n<li><strong>Strat&eacute;gie de Contenu SEO</strong> : Cr&eacute;ation de contenus optimis&eacute;s pour les moteurs de recherche, visant &agrave; g&eacute;n&eacute;rer du trafic et &agrave; am&eacute;liorer le positionnement de votre site.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-7 col-md-6 mt-xs-30\">\r\n<div class=\"content\">\r\n<h3>&nbsp;</h3>\r\n<h3>Le D&eacute;fi</h3>\r\n<p>Le r&eacute;f&eacute;rencement naturel (SEO) est un domaine en constante &eacute;volution, et se maintenir dans les premiers r&eacute;sultats de recherche demande une expertise technique et une strat&eacute;gie &agrave; long terme. Beaucoup d\'entreprises luttent pour comprendre et mettre en &oelig;uvre les meilleures pratiques SEO, ce qui peut les emp&ecirc;cher de maximiser leur visibilit&eacute;. Chez <strong>Wave Tech Team</strong>, nous vous aidons &agrave; naviguer dans ces d&eacute;fis en vous fournissant des solutions SEO personnalis&eacute;es et efficaces.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<h3>Ce que Nous Faisons</h3>\r\n<p>Chez <strong>Wave Tech Team</strong>, chaque projet SEO est abord&eacute; avec rigueur et strat&eacute;gie. Nous croyons que chaque entreprise m&eacute;rite une strat&eacute;gie SEO unique, bas&eacute;e sur ses besoins sp&eacute;cifiques et ses objectifs commerciaux. Voici ce que nous proposons :</p>\r\n<ol>\r\n<li><strong>Audit SEO</strong> : Nous commen&ccedil;ons par une analyse compl&egrave;te de votre site pour identifier les points faibles et optimiser les &eacute;l&eacute;ments cl&eacute;s pour am&eacute;liorer votre classement.</li>\r\n<li><strong>Optimisation Technique</strong> : Nous am&eacute;liorons la structure de votre site, la vitesse de chargement et la compatibilit&eacute; mobile pour garantir une exp&eacute;rience utilisateur optimale.</li>\r\n<li><strong>Optimisation de Contenu</strong> : Nous cr&eacute;ons et optimisons des contenus sp&eacute;cifiques pour maximiser leur impact SEO et attirer plus de visiteurs.</li>\r\n<li><strong>Netlinking et Strat&eacute;gie Off-Page</strong> : Nous mettons en &oelig;uvre des techniques de cr&eacute;ation de liens pour renforcer l\'autorit&eacute; de votre site et am&eacute;liorer sa cr&eacute;dibilit&eacute;.</li>\r\n<li><strong>Suivi et Adaptation</strong> : Nous surveillons les performances SEO de votre site et apportons les ajustements n&eacute;cessaires pour garantir une croissance continue.</li>\r\n</ol>\r\n<p>Nous rejetons les solutions de r&eacute;f&eacute;rencement &agrave; court terme et privil&eacute;gions des strat&eacute;gies durables qui g&eacute;n&egrave;rent un trafic de qualit&eacute;. Nous nous assurons que chaque action men&eacute;e am&eacute;liore v&eacute;ritablement votre positionnement et vos r&eacute;sultats.</p>\r\n<p>Chez <strong>Wave Tech Team</strong>, nous nous engageons &agrave; am&eacute;liorer votre visibilit&eacute; sur les moteurs de recherche et &agrave; g&eacute;n&eacute;rer un flux de trafic constant, pour propulser votre entreprise au sommet.</p>','services/January2025/bjgwdyfUnbgY1ACxmmLA.jpg','services-referencement','Wave Tech Team propose des services SEO sur-mesure pour améliorer votre visibilité en ligne, optimiser votre site et augmenter votre trafic organique...','référencement SEO, optimisation SEO, audit SEO, SEO local, stratégie de contenu SEO, netlinking, suivi SEO, amélioration classement Google, SEO on-page, SEO off-page','2025-01-24 05:57:47','2025-01-24 05:57:47');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Wave Tech Team','','text',1,'Admin'),(7,'admin.description','Admin Description','Crafting Innovative Digital','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','settings/January2025/QA93UwCQfFfc3vDIanF1.png','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) NOT NULL,
  `column_name` varchar(255) NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2025-01-22 09:47:08','2025-01-22 09:47:08'),(2,'data_types','display_name_singular',6,'pt','Página','2025-01-22 09:47:08','2025-01-22 09:47:08'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2025-01-22 09:47:08','2025-01-22 09:47:08'),(4,'data_types','display_name_singular',4,'pt','Categoria','2025-01-22 09:47:08','2025-01-22 09:47:08'),(5,'data_types','display_name_singular',2,'pt','Menu','2025-01-22 09:47:08','2025-01-22 09:47:08'),(6,'data_types','display_name_singular',3,'pt','Função','2025-01-22 09:47:08','2025-01-22 09:47:08'),(7,'data_types','display_name_plural',5,'pt','Posts','2025-01-22 09:47:08','2025-01-22 09:47:08'),(8,'data_types','display_name_plural',6,'pt','Páginas','2025-01-22 09:47:08','2025-01-22 09:47:08'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2025-01-22 09:47:08','2025-01-22 09:47:08'),(10,'data_types','display_name_plural',4,'pt','Categorias','2025-01-22 09:47:08','2025-01-22 09:47:08'),(11,'data_types','display_name_plural',2,'pt','Menus','2025-01-22 09:47:08','2025-01-22 09:47:08'),(12,'data_types','display_name_plural',3,'pt','Funções','2025-01-22 09:47:08','2025-01-22 09:47:08'),(13,'categories','slug',1,'pt','categoria-1','2025-01-22 09:47:08','2025-01-22 09:47:08'),(14,'categories','name',1,'pt','Categoria 1','2025-01-22 09:47:08','2025-01-22 09:47:08'),(15,'categories','slug',2,'pt','categoria-2','2025-01-22 09:47:08','2025-01-22 09:47:08'),(16,'categories','name',2,'pt','Categoria 2','2025-01-22 09:47:08','2025-01-22 09:47:08'),(17,'pages','title',1,'pt','Olá Mundo','2025-01-22 09:47:08','2025-01-22 09:47:08'),(18,'pages','slug',1,'pt','ola-mundo','2025-01-22 09:47:08','2025-01-22 09:47:08'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2025-01-22 09:47:08','2025-01-22 09:47:08'),(20,'menu_items','title',1,'pt','Painel de Controle','2025-01-22 09:47:08','2025-01-22 09:47:08'),(21,'menu_items','title',2,'pt','Media','2025-01-22 09:47:08','2025-01-22 09:47:08'),(22,'menu_items','title',12,'pt','Publicações','2025-01-22 09:47:08','2025-01-22 09:47:08'),(23,'menu_items','title',3,'pt','Utilizadores','2025-01-22 09:47:08','2025-01-22 09:47:08'),(24,'menu_items','title',11,'pt','Categorias','2025-01-22 09:47:08','2025-01-22 09:47:08'),(25,'menu_items','title',13,'pt','Páginas','2025-01-22 09:47:08','2025-01-22 09:47:08'),(26,'menu_items','title',4,'pt','Funções','2025-01-22 09:47:08','2025-01-22 09:47:08'),(27,'menu_items','title',5,'pt','Ferramentas','2025-01-22 09:47:08','2025-01-22 09:47:08'),(28,'menu_items','title',6,'pt','Menus','2025-01-22 09:47:08','2025-01-22 09:47:08'),(29,'menu_items','title',7,'pt','Base de dados','2025-01-22 09:47:08','2025-01-22 09:47:08'),(30,'menu_items','title',10,'pt','Configurações','2025-01-22 09:47:08','2025-01-22 09:47:08');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png',NULL,'$2y$12$ZHd2DiZgHPXrcOk.gaIkJOZ4WXVaVOcIIChRa7bW5lLEs8usqZtMW','tWSWcnnzA6PMqNYvVKwPDcUQqc5Nbw2kmPdKHAj0TvZbiXIsl4q9m3uTPIdk',NULL,'2025-01-22 09:47:07','2025-01-22 09:47:07');
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

-- Dump completed on 2025-01-24 15:05:19
