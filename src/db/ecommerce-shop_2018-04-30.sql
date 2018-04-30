# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.39)
# Database: ecommerce-shop
# Generation Time: 2018-04-30 14:19:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  `defaultImageFilepath` varchar(255) NOT NULL DEFAULT '',
  `defaultImageAlt` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `categoryName`, `deleted`, `defaultImageFilepath`, `defaultImageAlt`)
VALUES
	(1,'Hats',0,'/src/assets/img/cat1.jpg',''),
	(2,'Socks',0,'/src/assets/img/cat1.jpg',''),
	(3,'Sportswear',0,'/src/assets/img/cat1.jpg',''),
	(4,'Dungarees',0,'/src/assets/img/cat1.jpg',''),
	(5,'Evening Wear',0,'/src/assets/img/cat1.jpg',''),
	(6,'Fancy Dress',0,'/src/assets/img/cat1.jpg','');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productId` int(11) DEFAULT NULL,
  `imageFilePath` varchar(255) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  `alt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `productId`, `imageFilePath`, `deleted`, `alt`)
VALUES
	(1,1,'/src/assets/img/cat1.jpg',0,NULL),
	(2,2,'/src/assets/img/cat1.jpg',0,NULL),
	(3,3,'/src/assets/img/cat1.jpg',0,NULL),
	(4,4,'/src/assets/img/cat1.jpg',0,NULL),
	(5,5,'/src/assets/img/cat1.jpg',0,NULL),
	(6,6,'/src/assets/img/cat1.jpg',0,NULL),
	(7,7,'/src/assets/img/cat1.jpg',0,NULL),
	(8,8,'/src/assets/img/cat1.jpg',0,NULL),
	(9,9,'/src/assets/img/cat1.jpg',0,NULL),
	(10,10,'/src/assets/img/cat1.jpg',0,NULL),
	(11,11,'/src/assets/img/cat1.jpg',0,NULL),
	(12,12,'/src/assets/img/cat1.jpg',0,NULL),
	(13,13,'/src/assets/img/cat1.jpg',0,NULL),
	(14,14,'/src/assets/img/cat1.jpg',0,NULL),
	(15,15,'/src/assets/img/cat1.jpg',0,NULL),
	(16,16,'/src/assets/img/cat1.jpg',0,NULL),
	(17,17,'/src/assets/img/cat1.jpg',0,NULL),
	(18,18,'/src/assets/img/cat1.jpg',0,NULL),
	(19,19,'/src/assets/img/cat1.jpg',0,NULL),
	(20,20,'/src/assets/img/cat1.jpg',0,NULL),
	(21,21,'/src/assets/img/cat1.jpg',0,NULL),
	(22,22,'/src/assets/img/cat1.jpg',0,NULL),
	(23,23,'/src/assets/img/cat1.jpg',0,NULL),
	(24,24,'/src/assets/img/cat1.jpg',0,NULL),
	(25,25,'/src/assets/img/cat1.jpg',0,NULL),
	(26,26,'/src/assets/img/cat1.jpg',0,NULL),
	(27,27,'/src/assets/img/cat1.jpg',0,NULL),
	(28,28,'/src/assets/img/cat1.jpg',0,NULL),
	(29,29,'/src/assets/img/cat1.jpg',0,NULL),
	(30,30,'/src/assets/img/cat1.jpg',0,NULL),
	(31,31,'/src/assets/img/cat1.jpg',0,NULL),
	(32,32,'/src/assets/img/cat1.jpg',0,NULL),
	(33,33,'/src/assets/img/cat1.jpg',0,NULL),
	(34,34,'/src/assets/img/cat1.jpg',0,NULL),
	(35,35,'/src/assets/img/cat1.jpg',0,NULL),
	(36,36,'/src/assets/img/cat1.jpg',0,NULL),
	(37,37,'/src/assets/img/cat1.jpg',0,NULL),
	(38,38,'/src/assets/img/cat1.jpg',0,NULL),
	(39,39,'/src/assets/img/cat1.jpg',0,NULL),
	(40,40,'/src/assets/img/cat1.jpg',0,NULL);

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `categoryId` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productPrice` float DEFAULT NULL,
  `productDescription` varchar(1000) DEFAULT NULL,
  `availableSizes` enum('XS','S','M','L','XL','2XL','3XL') DEFAULT NULL,
  `availableColors` enum('Red','Blue','Green') DEFAULT 'Red',
  `deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `categoryId`, `productName`, `productPrice`, `productDescription`, `availableSizes`, `availableColors`, `deleted`)
VALUES
	(1,6,'Swanston',23.26,'congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut','L','Green',0),
	(2,4,'Kohlert',4.44,'lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis','2XL','Red',0),
	(3,3,'Corness',3.98,'at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam','3XL','Red',1),
	(4,4,'Pilkington',1.39,'eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum','3XL','Red',0),
	(5,6,'Coggen',20.63,'lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi','3XL','Green',0),
	(6,6,'Gouly',17.9,'congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat','M','Red',0),
	(7,5,'Etchells',12.08,'odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis','M','Blue',1),
	(8,1,'Filliskirk',29.62,'nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet','XL','Green',0),
	(9,6,'De Antoni',16.37,'praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi','2XL','Red',0),
	(10,1,'Phizacklea',26.95,'volutpat dui maecenas tristique est et tempus semper est quam pharetra','XL','Red',1),
	(11,6,'Barents',20.72,'enim blandit mi in porttitor pede justo eu massa donec dapibus duis','XS','Red',1),
	(12,6,'Pusill',4.17,'amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere','M','Blue',1),
	(13,6,'Hinge',13.13,'in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim','S','Blue',1),
	(14,5,'Ambler',10.97,'mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis','3XL','Red',1),
	(15,1,'Mourbey',15.24,'massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum','3XL','Red',0),
	(16,3,'Crocken',28.09,'condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar','3XL','Blue',0),
	(17,6,'Bentz',18.17,'non mauris morbi non lectus aliquam sit amet diam in magna bibendum','M','Red',0),
	(18,5,'Finker',29.61,'integer non velit donec diam neque vestibulum eget vulputate ut','3XL','Green',0),
	(19,5,'Haddick',16.69,'aenean sit amet justo morbi ut odio cras mi pede malesuada','3XL','Red',1),
	(20,4,'Raggatt',23.73,'metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci','M','Blue',1),
	(21,4,'Linning',10.33,'nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit','L','Red',0),
	(22,2,'Tomsa',23.45,'fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis','XS','Red',1),
	(23,4,'Darby',19.7,'lorem quisque ut erat curabitur gravida nisi at nibh in','XS','Blue',1),
	(24,2,'Eastup',23.84,'suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus','M','Blue',0),
	(25,5,'Alfuso',12.47,'sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non','L','Red',1),
	(26,3,'Paquet',11.93,'primis in faucibus orci luctus et ultrices posuere cubilia curae donec','2XL','Red',0),
	(27,5,'Patman',29.33,'lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque','XL','Red',0),
	(28,5,'Lincoln',20.12,'sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc','S','Red',0),
	(29,3,'Jikovsky',26.77,'orci luctus et ultrices posuere cubilia curae duis faucibus accumsan','S','Red',0),
	(30,6,'Bowie',25.51,'vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel','3XL','Green',0),
	(31,5,'Papis',28.08,'sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis','M','Red',1),
	(32,2,'Scorah',5.61,'erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea','3XL','Red',0),
	(33,2,'Lumpkin',28.84,'hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam','L','Red',0),
	(34,4,'Keesman',23.4,'cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam','S','Green',0),
	(35,4,'Passo',18.3,'cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac','3XL','Red',1),
	(36,1,'Whorall',25.52,'aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan','S','Red',0),
	(37,1,'Rosenshine',6.6,'nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel','2XL','Green',0),
	(38,5,'Brahams',2.25,'dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes','M','Red',1),
	(39,4,'Penzer',7.66,'integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante','XL','Red',1),
	(40,1,'Ibbison',1.86,'amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis','2XL','Red',1);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
