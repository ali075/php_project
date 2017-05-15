# Host: localhost  (Version: 5.6.12-log)
# Date: 2016-04-30 22:43:04
# Generator: MySQL-Front 5.3  (Build 5.11)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "tv_category"
#

DROP TABLE IF EXISTS `tv_category`;
CREATE TABLE `tv_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "tv_category"
#

INSERT INTO `tv_category` VALUES (1,'natok'),(2,'natok'),(3,'cinema'),(4,'news'),(5,'short film'),(6,'magazine'),(7,'talk show');

#
# Structure for table "tv_channel"
#

DROP TABLE IF EXISTS `tv_channel`;
CREATE TABLE `tv_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_name` varchar(255) DEFAULT NULL,
  `channel_logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "tv_channel"
#

INSERT INTO `tv_channel` VALUES (1,'BTV','Bangladesh_Television_logo.jpg'),(2,'NTV','ntv-lgo.jpg'),(3,'ATN','atn.png'),(4,'ATN NEWS','ATN_News.gif'),(5,'ETV','12.jpg'),(6,'Channel i','channel i.png'),(7,'Channel 9','channel 9.png');

#
# Structure for table "tv_program"
#

DROP TABLE IF EXISTS `tv_program`;
CREATE TABLE `tv_program` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `program_name` varchar(255) DEFAULT NULL,
  `channel_name_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'default-book.jpg',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tv_program"
#

INSERT INTO `tv_program` VALUES (1,1,'08:00:00','ice age',1,3,'Ice_Age_Collision_Course_poster.jpg'),(2,1,'09:00:00','ice-cream',3,5,'12991011_10207417483728829_8553940553600429964_n.jpg'),(3,2,'08:00:00','dead pool',6,3,'deadpool-poster-8.jpg'),(4,1,'10:00:00','superman',2,3,'batmanvsuperman.jpg'),(5,3,'09:00:00','x men',5,3,'_1450048116.jpg');

#
# Structure for table "tv_program_date"
#

DROP TABLE IF EXISTS `tv_program_date`;
CREATE TABLE `tv_program_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tv_program_date"
#

INSERT INTO `tv_program_date` VALUES (1,'2016-04-30'),(2,'2016-05-01'),(3,'2016-05-02');
