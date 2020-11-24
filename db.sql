/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 5.7.9 : Database - videomanagement
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`videomanagement` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `videomanagement`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `category_id` int(20) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(40) NOT NULL,
  `category_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`category_id`,`category_name`,`category_desc`) values 
(1,'movies','watch cool movies'),
(2,'academics','learn new things'),
(3,'Comedy','Bliss Your Mind'),
(4,'Drama','Dramas For you'),
(5,'fun','Enjoy Your videos'),
(6,'Family','Watch Drama'),
(7,'','');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `comments_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `video_id` int(20) DEFAULT NULL,
  `comment_cont` varchar(300) DEFAULT NULL,
  `comment_date` date DEFAULT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`comments_id`,`user_id`,`video_id`,`comment_cont`,`comment_date`) values 
(14,3,29,'Nice Dance','2020-03-03'),
(13,3,29,'Cool','2020-03-03'),
(24,3,29,'Crazy members','2020-03-03'),
(26,2,10,'hiii','2020-04-07'),
(27,2,9,'nice','2020-04-07'),
(28,2,20,'nice','2020-04-07'),
(29,4,12,'Nice Video','2020-04-13'),
(30,4,22,'Nice Video','2020-04-13'),
(31,4,19,'','2020-04-13');

/*Table structure for table `history` */

DROP TABLE IF EXISTS `history`;

CREATE TABLE `history` (
  `history_id` int(20) NOT NULL AUTO_INCREMENT,
  `video_id` int(20) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `h_date` date DEFAULT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `history` */

insert  into `history`(`history_id`,`video_id`,`user_id`,`h_date`) values 
(1,30,2,'2020-04-10'),
(2,29,2,'2020-04-10'),
(3,22,2,'2020-04-07'),
(4,9,2,'2020-04-10'),
(5,20,2,'2020-04-07'),
(6,12,4,'2020-04-13'),
(7,30,4,'2020-04-13'),
(8,28,4,'2020-04-13'),
(9,17,4,'2020-04-13'),
(10,19,4,'2020-04-13'),
(11,25,4,'2020-04-13'),
(12,29,4,'2020-04-13'),
(13,20,4,'2020-04-13'),
(14,22,4,'2020-04-13'),
(15,9,4,'2020-04-14'),
(16,10,4,'2020-04-13'),
(17,10,25,'2020-04-13'),
(18,31,4,'2020-04-13'),
(19,31,25,'2020-04-13'),
(20,31,3,'2020-04-13'),
(21,31,5,'2020-04-13'),
(22,31,26,'2020-04-13'),
(23,31,24,'2020-04-13'),
(24,31,15,'2020-04-13'),
(25,31,16,'2020-04-13'),
(26,31,22,'2020-04-13'),
(27,31,20,'2020-04-13'),
(28,31,19,'2020-04-13'),
(29,31,18,'2020-04-13'),
(30,31,17,'2020-04-13'),
(31,31,14,'2020-04-13'),
(32,31,12,'2020-04-13'),
(33,31,6,'2020-04-13'),
(34,29,6,'2020-04-13'),
(35,9,6,'2020-04-13'),
(36,10,6,'2020-04-13'),
(37,26,6,'2020-04-13'),
(38,17,6,'2020-04-13'),
(39,20,25,'2020-04-14'),
(40,29,27,'2020-04-14'),
(41,9,27,'2020-04-14'),
(42,31,28,'2020-04-14'),
(43,28,28,'2020-04-14'),
(44,25,28,'2020-04-14');

/*Table structure for table `likes` */

DROP TABLE IF EXISTS `likes`;

CREATE TABLE `likes` (
  `like_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `video_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

/*Data for the table `likes` */

insert  into `likes`(`like_id`,`user_id`,`video_id`) values 
(9,4,29),
(11,6,29),
(18,3,27),
(13,6,10),
(14,3,29),
(15,3,25),
(16,3,28),
(19,2,10),
(20,2,17),
(21,2,9),
(22,2,20),
(23,2,30),
(24,2,29),
(33,4,12),
(32,4,9),
(29,4,20),
(34,4,19),
(35,25,10),
(38,4,31),
(39,3,31),
(40,5,31),
(41,26,31),
(42,24,31),
(43,15,31),
(44,16,31),
(45,22,31),
(46,20,31),
(47,19,31),
(48,18,31),
(49,17,31),
(50,14,31),
(51,12,31),
(52,6,31),
(53,6,17),
(54,25,20),
(55,27,29),
(56,27,9),
(57,28,31),
(58,28,25);

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `payment_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `payment_type` varchar(40) DEFAULT NULL,
  `p_date` date DEFAULT NULL,
  `p_amount` double DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `payments` */

insert  into `payments`(`payment_id`,`user_id`,`payment_type`,`p_date`,`p_amount`) values 
(1,4,'online','2020-03-02',15),
(2,4,'online','2020-03-03',15);

/*Table structure for table `sharedvideo` */

DROP TABLE IF EXISTS `sharedvideo`;

CREATE TABLE `sharedvideo` (
  `shared_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `video_id` int(20) DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  PRIMARY KEY (`shared_id`),
  KEY `user_id` (`user_id`),
  KEY `video_id` (`video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `sharedvideo` */

insert  into `sharedvideo`(`shared_id`,`user_id`,`video_id`,`s_date`) values 
(1,4,17,'2020-02-15'),
(2,4,10,'2020-02-20'),
(3,6,9,'2020-03-02'),
(4,6,9,'2020-03-02'),
(5,6,9,'2020-03-02'),
(6,6,9,'2020-03-02'),
(7,6,22,'2020-03-02'),
(8,4,12,'2020-04-13'),
(9,4,17,'2020-04-13'),
(10,4,19,'2020-04-13'),
(11,4,19,'2020-04-13'),
(12,4,19,'2020-04-13');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_photo` varchar(500) DEFAULT NULL,
  `user_fname` varchar(191) DEFAULT NULL,
  `user_lname` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `user_phone` varchar(191) DEFAULT NULL,
  `user_type` varchar(191) DEFAULT NULL,
  `user_email` varchar(191) NOT NULL,
  `u_pass` varchar(191) DEFAULT NULL,
  `rank` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`user_email`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`user_photo`,`user_fname`,`user_lname`,`gender`,`user_phone`,`user_type`,`user_email`,`u_pass`,`rank`) values 
(1,'photos/photo_admin.png','Admin','admin','male','','admin','admin@gmail.com','admin',NULL),
(2,'photos/photo_5e478c2523da4.jpg','corii','rodi','Female','8744577889','user','c@gmail.com','1234','BRONZE'),
(3,'photos/photo_5e477c87b53f2.jpg','corrine','rodrigues','Female','7346677889','user','corrine@gmail.com','corrine','BRONZE'),
(4,'photos/photo_5e477d4c1e03a.jpg','Fathima','Mackar','Female','9544323184','user','fathima@gmail.com','fathima','GOLD'),
(5,'photos/photo_5e478cef4fa5c.jpg','Bincy','Paul','Female','9874875321','user','bincy@gmail.com','bincy','BRONZE'),
(6,'photos/photo_5e47a10fbf075.jpg','Angel','Paul','Female','9344566987','user','angel@gmail.com','angel','BRONZE'),
(7,'photos/photo_avatar.png','Test','test','Other','8344566778','user','test@gmail.com','test','BRONZE'),
(12,'photos/photo_avatar.png','Ahalya','V A','Female','7344566778','user','ahalya@gmail.com','ahalya','BRONZE'),
(13,'photos/photo_avatar.png','Test','aa','Female','7634456788','user','ta@gmail.com','123','BRONZE'),
(14,'photos/photo_avatar.png','AkhilaMol','G','Female','9876543210','user','akhila@gmail.com','akhila','BRONZE'),
(15,'photos/photo_avatar.png','Alan','alan','Male','8746536282','user','alan@gmail.com','alan','BRONZE'),
(16,'photos/photo_avatar.png','Alfrin','Luiz','Male','7464634849','user','alfrin@gmail.com','alfrin','BRONZE'),
(17,'photos/photo_avatar.png','Anamika','Paul','Female','7635363633','user','anamika@gmail.com','anamika','BRONZE'),
(18,'photos/photo_avatar.png','Ben','Peter','Male','9487563240','user','ben@gmail.com','ben','BRONZE'),
(19,'photos/photo_avatar.png','Christeena','Thomas','Female','9487563288','user','christeena@gmail.com','christeena','BRONZE'),
(20,'photos/photo_avatar.png','Dona','Siby','Female','9876452110','user','dona@gmail.com','dona','BRONZE'),
(22,'photos/photo_avatar.png','Geo','George','Male','9876453212','user','geo@gmail.com','geo','BRONZE'),
(24,'photos/photo_avatar.png','Aryamol','Asokan','Female','3445667788','user','aryamol@gmail.com','aryamol','BRONZE'),
(25,'photos/photo_avatar.png','Nuzrin','Mackar','Female','9400098655','user','nuzrin@gmail.com','nuzrin','SILVER'),
(26,'photos/photo_avatar.png','Maria','John','Female','9383730433','user','maria@gmail.com','maria','BRONZE'),
(27,'photos/photo_avatar.png','Nadheera','Mackar','Female','9387373737','user','nadheera@gmail.com','nadheera','BRONZE'),
(28,'photos/photo_avatar.png','Mackar','P.A','Male','9384884955','user','mackar@gmail.com','mackar','BRONZE');

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `video_title` varchar(190) DEFAULT NULL,
  `video_path` varchar(190) DEFAULT NULL,
  `video_desc` varchar(190) DEFAULT NULL,
  `v_date` date DEFAULT NULL,
  `status` varchar(190) DEFAULT NULL,
  `no_of_shares` int(30) DEFAULT NULL,
  `like_count` int(30) DEFAULT NULL,
  `no_of_comments` int(30) DEFAULT NULL,
  PRIMARY KEY (`video_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `videos` */

insert  into `videos`(`video_id`,`category_id`,`user_id`,`video_title`,`video_path`,`video_desc`,`v_date`,`status`,`no_of_shares`,`like_count`,`no_of_comments`) values 
(29,6,1,'Mehendi Teaser','videos/video_5e5ca286ead7b.mp4','Teaser of Mehendi Night','2020-03-02','active',NULL,5,3),
(9,1,1,'Happy','videos/video_5e25784130f52.mp4','Be happy','2020-01-20','active',0,8,1),
(22,1,4,'Trailer','videos/video_5e47a9eccf7ee.mp4','Frozen Trailer','2020-02-15','active',0,1,1),
(28,5,1,'ChickFeeding','videos/video_5e5ca2425907b.mp4','Chick Eating the Food','2020-03-02','active',0,0,0),
(26,1,4,'Happy','videos/video_5e4e1c599e364.mp4','Chick Eating the Food','2020-02-20','active',0,3,0),
(10,2,1,'Excited','videos/video_5e2578b0393d8.mp4','Feeling Excited','2020-01-20','active',0,16,1),
(12,1,10,'happy','videos/video_5e32f528e5523.mp4','watch this','2020-01-30','active',0,1,1),
(20,1,5,'Trailer','videos/video_5e479c5073419.mp4','Trailer of Tom and Jerry','2020-02-15','active',0,3,1),
(18,1,5,'Song','videos/video_5e4795bae4139.mp4','Song of Arjit song','2020-02-15','pending',0,0,0),
(19,1,5,'Trailer','videos/video_5e479bd61b5e4.mp4','Trailer of Boss Baby','2020-02-15','pending',0,1,1),
(17,1,3,'watch this','videos/video_5e3e69d7083fb.mp4','sotthing video to calm your mind','2020-02-08','pending',0,2,0),
(25,2,1,'Rajagiri','videos/video_5e4bfb408f78a.mp4','College Video','2020-02-18','active',0,2,0),
(27,5,1,'Be Happy','videos/video_5e4e1e8cd1442.mp4','Just Watch This Video','2020-02-20','active',0,1,1),
(30,6,4,'Wedding Trailer','videos/video_5e5ca60595b5e.mp4','Teaser of Mehendi Night','2020-03-02','pending',0,1,0),
(31,1,25,'Trailer','videos/video_5e9482412a79c.mp4','Trailer of Cindrella Story','2020-04-13','active',0,16,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
