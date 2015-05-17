/*
SQLyog Ultimate v11.25 (64 bit)
MySQL - 5.5.40 : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `test`;

/*Table structure for table `t_comment` */

DROP TABLE IF EXISTS `t_comment`;

CREATE TABLE `t_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `parent_id` int(11) NOT NULL COMMENT '上级评论id,若是一级评论则为0',
  `nickname` varchar(100) DEFAULT NULL COMMENT '评论人昵称',
  `head_pic` varchar(400) DEFAULT NULL COMMENT '评论人头像',
  `content` text COMMENT '评论内容',
  `create_time` datetime DEFAULT NULL COMMENT '评论或回复发表时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=utf8;

/*Data for the table `t_comment` */

insert  into `t_comment`(`id`,`parent_id`,`nickname`,`head_pic`,`content`,`create_time`) values (138,0,'游客','/Public/images/default.jpg','今天天气好好哦!','2015-05-17 17:36:12'),(139,138,'游客','/Public/images/default.jpg','很适合出去游玩','2015-05-17 17:39:20'),(140,138,'游客','/Public/images/default.jpg','难得一见的一天呢','2015-05-17 17:40:07'),(141,140,'游客','/Public/images/default.jpg','雾霾不见了 哈哈','2015-05-17 17:58:45'),(142,0,'游客','/Public/images/default.jpg','今天适合去哪里玩呢','2015-05-17 18:34:07'),(143,0,'游客','/Public/images/default.jpg','今天心情不错','2015-05-17 20:17:37'),(144,0,'游客','/Public/images/default.jpg','哈哈哈','2015-05-17 20:34:55'),(145,144,'游客','/Public/images/default.jpg','太棒了','2015-05-17 20:35:09'),(146,144,'游客','/Public/images/default.jpg','好好的','2015-05-17 20:35:15'),(147,146,'游客','/Public/images/default.jpg','哈哈哈','2015-05-17 20:35:21');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
