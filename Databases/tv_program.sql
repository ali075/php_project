# Host: localhost  (Version: 5.6.12-log)
# Date: 2016-05-03 11:08:10
# Generator: MySQL-Front 5.3  (Build 5.11)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "tv_program"
#

CREATE TABLE `tv_program` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `program_name` varchar(255) DEFAULT NULL,
  `channel_name_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'default-book.jpg',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "tv_program"
#

REPLACE INTO `tv_program` VALUES (1,1,'08:00:00','ice age',1,3,'Ice_Age_Collision_Course_poster.jpg'),(2,1,'09:00:00','ice-cream',3,5,'12991011_10207417483728829_8553940553600429964_n.jpg'),(3,2,'08:00:00','dead pool',6,3,'deadpool-poster-8.jpg'),(4,1,'10:00:00','superman',2,3,'batmanvsuperman.jpg'),(5,3,'09:00:00','x men',5,3,'_1450048116.jpg'),(6,4,'07:00:00','banor modhu',3,1,'banor-modhu-bangla-natok-chanchal.jpg'),(7,4,'08:00:00','angry bird',4,1,'Angry-Bird-ft-TahsanTisha-Bangla-Eid-Natok-2015.jpg'),(8,4,'09:00:00','furious-8',6,3,'furious-8-poster-full.jpg'),(9,4,'10:00:00','jangle book',2,1,'JB_Triptych_1-Sht_Center_Online_v4_lg.jpg'),(10,4,'09:00:00','dory',7,1,'Finding-Dory-France-International-Poster_Pixar-Post.jpg'),(11,4,'08:30:00','travel to cera dip',1,9,'20160325_173440.jpg'),(12,4,'10:00:00','Travel to saint-martin',5,1,'12417755_666862600121896_1993595102536163960_n.jpg');
