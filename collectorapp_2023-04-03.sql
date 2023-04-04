# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.11.2-MariaDB-1:10.11.2+maria~ubu2204)
# Database: collectorapp
# Generation Time: 2023-04-03 14:18:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table archetype
# ------------------------------------------------------------

CREATE OR REPLACE DATABASE collectorapp;
USE collectorapp;

DROP TABLE IF EXISTS `archetype`;

CREATE TABLE `archetype` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gameplaystyle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `archetype` WRITE;
/*!40000 ALTER TABLE `archetype` DISABLE KEYS */;

INSERT INTO `archetype` (`id`, `gameplaystyle`)
VALUES
	(1,'Enchantments'),
	(2,'Equipment'),
	(3,'Big Beaters'),
	(4,'Tribal'),
	(5,'+1/+1 Counters'),
	(6,'Cycling'),
	(7,'Artifacts'),
	(8,'Spellslinger'),
	(9,'Sacrifice'),
	(10,'Group Hug'),
	(11,'Good stuff'),
	(12,'Burn'),
	(13,'Discard'),
	(14,'Control'),
	(15,'Graveyard Recursion'),
	(16,'Chaos'),
	(17,'Cheerios'),
	(18,'Infect'),
	(19,'Flicker'),
	(20,'Pod'),
	(21,'Lands Matter'),
	(22,'Wheels'),
	(23,'Mill'),
	(24,'Tokens'),
	(25,'Voltron'),
	(26,'Superfriends'),
	(27,'Aristocrats'),
	(28,'Lifegain');

/*!40000 ALTER TABLE `archetype` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table colourid
# ------------------------------------------------------------

DROP TABLE IF EXISTS `colourid`;

CREATE TABLE `colourid` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `colourid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `colourid` WRITE;
/*!40000 ALTER TABLE `colourid` DISABLE KEYS */;

INSERT INTO `colourid` (`id`, `colourid`)
VALUES
	(1,'Mono White'),
	(2,'Mono Blue'),
	(3,'Mono Black'),
	(4,'Mono Red'),
	(5,'Mono Green'),
	(6,'Colourless'),
	(7,'Azorius'),
	(8,'Dimir'),
	(9,'Rakdos'),
	(10,'Gruul'),
	(11,'Selesnya'),
	(12,'Orzhov'),
	(13,'Izzet'),
	(14,'Golgari'),
	(15,'Boros'),
	(16,'Simic'),
	(17,'Bant'),
	(18,'Esper'),
	(19,'Grixis'),
	(20,'Jund'),
	(21,'Naya'),
	(22,'Abzan'),
	(23,'Jeskai'),
	(24,'Sultai'),
	(25,'Mardu'),
	(26,'Temur'),
	(27,'Glint'),
	(28,'Dune'),
	(29,'Ink'),
	(30,'Witch'),
	(31,'Yore'),
	(32,'5 Colour');

/*!40000 ALTER TABLE `colourid` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table decks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `decks`;

CREATE TABLE `decks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_of_deck` varchar(255) NOT NULL,
  `format` int(11) unsigned NOT NULL,
  `colourid` int(11) unsigned DEFAULT NULL,
  `archetype` int(11) unsigned DEFAULT NULL,
  `last_updated` date NOT NULL,
  `primer` varchar(255) NOT NULL,
  `image` varchar(511) DEFAULT NULL,
  `moxfield_link` varchar(511) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_archetype` (`archetype`),
  KEY `fk_colourid` (`colourid`),
  KEY `fk_formats` (`format`),
  CONSTRAINT `fk_archetype` FOREIGN KEY (`archetype`) REFERENCES `archetype` (`id`),
  CONSTRAINT `fk_colourid` FOREIGN KEY (`colourid`) REFERENCES `colourid` (`id`),
  CONSTRAINT `fk_formats` FOREIGN KEY (`format`) REFERENCES `formats` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `decks` WRITE;
/*!40000 ALTER TABLE `decks` DISABLE KEYS */;

INSERT INTO `decks` (`id`, `name_of_deck`, `format`, `colourid`, `archetype`, `last_updated`, `primer`, `image`, `moxfield_link`)
VALUES
	(1,'8-Rack',2,3,13,'2022-09-07','Make them discard their hand. Get The Rack out. They have a bad time, you have a good time!','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200298/collector-app/IMG_1219_pnhkrj.jpg','https://www.moxfield.com/decks/cfYQH5e65kOsdEU-l3DtVQ'),
	(2,'Burn',2,15,12,'2022-05-07','Get out the gate fast. Cast lots of spells. MAKE THEM BURN!','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200299/collector-app/IMG_1218_s81onn.jpg','https://www.moxfield.com/decks/QRJvcD__AUaJDz89wv6Pjw'),
	(3,'Dredge',2,32,15,'2022-12-11','Put dredge cards in the graveyard, get them to jump right back out. Win? Or probably lose to graveyard hate.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200317/collector-app/IMG_1220_rabbbv.jpg','https://www.moxfield.com/decks/SiI5bG_2s0-tABf0oCm0Ug'),
	(4,'Cycle storm',3,31,6,'2022-09-18','Cycle your creatures, play songs of the damned, then reaping the graves. ??? Win.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200323/collector-app/IMG_1223_f7kn9d.jpg','https://www.moxfield.com/decks/X1Wr8p82RkyJVrUaqNyeNg'),
	(5,'Rakdos burn',3,9,12,'2022-09-18','Play all the burn spells. Drain your opponents. Sac artifacts. Win.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200312/collector-app/IMG_1222_w4z59w.jpg','https://www.moxfield.com/decks/4XeQAHXDOEGCwrjpDGeFPg'),
	(6,'Faeries',3,2,14,'2023-03-29','You play little faeries. Counter all your opponents spells. You have fun, they don\'t. Easy!','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200320/collector-app/IMG_1221_vdomi1.jpg','https://www.moxfield.com/decks/3WcF6qJYuUqm_xJCdLfyCQ'),
	(7,'Arumi with a view',4,8,15,'2022-12-11','Discard and mill all your cards. Use Arumi to bring them back. Try and find Gary. Win.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200325/collector-app/IMG_1197_jus5jr.jpg','https://www.moxfield.com/decks/8IBd8ob_nU-RUeVuovhCUw'),
	(8,'I want to be a pirate',4,8,4,'2022-03-09','Who doesn\'t want to be a pirate? Play all the bad pirates and get all the treasure!','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200339/collector-app/IMG_1200_mqzawc.jpg','https://www.moxfield.com/decks/lqJVKVyvTUmj447eVwoyZg'),
	(9,'Ooops all burn spells',4,15,8,'2022-12-11','Play lots of burn spells, hurt your opponents, make lots of lil boys in the process.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200351/collector-app/IMG_1199_rbiu0i.jpg','https://www.moxfield.com/decks/aa-ssZjQqEefEPWALsInCQ'),
	(10,'Live laugh lich',1,30,1,'2022-12-21','Play all the enchantments, get Lich\'s Mastery out. Become a Lich. Live forever.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200370/collector-app/IMG_1209_fwkvor.jpg','https://www.moxfield.com/decks/9XERfhDKA0qidNrMH8LXAg'),
	(11,'Rograkh wears all of the pants',1,15,2,'2023-01-20','Put way too much equipment on Rograkh and beat face!','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200338/collector-app/IMG_1202_j4qhyz.jpg','https://www.moxfield.com/decks/UbFue5z5UUKsT7C4bbGfgA'),
	(12,'Belbe\'s brings big boys to the yard',1,14,3,'2022-12-21','Get Belbe out early, do little bits of damage to everyone, cast big colourless boys.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200377/collector-app/IMG_1207_nv26vn.jpg','https://www.moxfield.com/decks/Y8KAAYhpXEGwVQFp0PBR1Q'),
	(13,'Zombie nation',1,18,4,'2022-08-02','Make zombies. Discard cards (zombies). Bring zombies back from the dead!','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200364/collector-app/IMG_1206_yttm9r.jpg','https://www.moxfield.com/decks/x9PKcOFxu0iuxjn8cpweBQ'),
	(14,'Ezuri can count',1,16,5,'2022-12-10','Get out lots of elves. Put +1/+1 counters on them. Overrun the board!','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200388/collector-app/IMG_1215_yy1csd.jpg','https://www.moxfield.com/decks/FIenEPliKkmYioBqjymRAg'),
	(15,'Forgavi me for I have cycled',1,23,6,'2022-08-06','Spend a lot of the game cycling. At some point there\'s a combo and you\'ll either win or forget how it works and be sad.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200343/collector-app/IMG_1203_vnuti2.jpg','https://www.moxfield.com/decks/kssrHo_rrkC5ZZKZjxapwQ'),
	(16,'Artifacts are good in every colour',1,10,7,'2023-03-16','Cast artifacts, tap them for mana, cast more artifacts. Maybe do some KCI stuff if feelin cute.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200320/collector-app/IMG_1195_ibcjxy.jpg','https://www.moxfield.com/decks/vqapaofuMESyHu8uHF64lA'),
	(17,'Morphin time',1,24,4,'2022-08-07','Play with your cards face down. That\'s fun and not at all confusing right?','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200386/collector-app/IMG_1213_muzhtw.jpg','https://www.moxfield.com/decks/mFiiQme2KEWLlwz7H148YA'),
	(18,'Shoryu-ken',1,15,8,'2023-02-13','Hit hard with Ken, cast big sorceries for FREEEE.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200342/collector-app/IMG_1196_i51ucd.jpg','https://www.moxfield.com/decks/wHAoKzD2IU278Bb1jBzGqw'),
	(19,'Sacrifices for the dragon man',1,20,9,'2022-11-29','Jund good stuff make. Sacrifice things. Yadda yadda value.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200371/collector-app/IMG_1211_xhikbw.jpg','https://www.moxfield.com/decks/1U0bnF-u8kKGNx_AHPe-Lg'),
	(20,'Friendly rabbit',1,7,10,'2023-01-20','He\'s just a friend rabbit. Don\'t mind me, draw cards, lalala I WIN','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200379/collector-app/IMG_1210_ffnu5i.jpg','https://www.moxfield.com/decks/4dNHFH7RdkyoiOBC3UGBOg'),
	(21,'Gobby lads',1,4,4,'2023-01-20','Just want to get all of the goblins onto the battlefield.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200384/collector-app/IMG_1214_tlqycx.jpg','https://www.moxfield.com/decks/SF-XwmTV_Ey5Ive01LMPQA'),
	(22,'I would tap that big boy',1,21,3,'2023-02-18','Just a bunch of lovely big boys who tap and untap.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200308/collector-app/IMG_1217_towgxz.jpg','https://www.moxfield.com/decks/zwMhZ-lpWUmFsifeU1JYsA'),
	(23,'Combotown',1,19,7,'2023-02-13','As close as you get to cEDH without the reserved list.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200355/collector-app/IMG_1205_ldxf4p.jpg','https://www.moxfield.com/decks/HWjn7qgOnkK8yssZZRrdzw'),
	(24,'Become one with the hivemind',1,32,4,'2022-09-03','We are one we are legion. Join us.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200303/collector-app/IMG_1216_uobovj.jpg','https://www.moxfield.com/decks/C3Qi7lM3YEGD7lgTxTSOLA'),
	(25,'Tralalalala',1,11,28,'2023-01-21','Gain life, get counters, never learn how to say her name.','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200378/collector-app/IMG_1208_v5xvrr.jpg','https://www.moxfield.com/decks/L991ryjZQk6-2AAt1DK4Tg'),
	(26,'Storms a-brewin',1,13,8,'2022-09-03','Do storm stuff. Cast spells. Have fun. ','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200379/collector-app/IMG_1212_tl4wjv.jpg','https://www.moxfield.com/decks/ACbhamdBWE2CjzstDbFWKQ'),
	(27,'Race you to death',1,3,11,'2023-02-08','Life is a resource, use it all','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200354/collector-app/IMG_1204_nhzsp2.jpg','https://www.moxfield.com/decks/B3gpm7PPUkuW1A9xsp6Fsw'),
	(28,'Polymorphing spaghetti monsters',1,13,3,'2022-11-22','Steal your creatures, polymorph them into wibblywobbly monsters from the blind eternities','https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200352/collector-app/IMG_1201_oktnlq.jpg','https://www.moxfield.com/decks/9aHk6lGrY0O-1rsJjZrsJQ');

/*!40000 ALTER TABLE `decks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table formats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `formats`;

CREATE TABLE `formats` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `format` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `formats` WRITE;
/*!40000 ALTER TABLE `formats` DISABLE KEYS */;

INSERT INTO `formats` (`id`, `format`)
VALUES
	(1,'Commander'),
	(2,'Modern'),
	(3,'Pauper'),
	(4,'pEDH');

/*!40000 ALTER TABLE `formats` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
