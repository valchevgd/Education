
CREATE DATABASE IF NOT EXISTS `exap_prep`;
USE `exap_prep`;

CREATE TABLE IF NOT EXISTS `categories` (
  `CAT_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `CAT_NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`CAT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


INSERT INTO `categories` (`CAT_ID`, `CAT_NAME`) VALUES
	(1, 'Anniversary'),
	(2, 'Birthday'),
	(3, 'Business');


	CREATE TABLE IF NOT EXISTS `users` (
  `USER_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  PRIMARY KEY (`USER_ID`),
  UNIQUE KEY `USERNAME` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `tasks` (
  `TASK_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `LOCATION` varchar(100) NOT NULL,
  `AUTHOR_ID` int(11) unsigned NOT NULL,
  `CAT_ID` int(11) unsigned NOT NULL,
  `STARTED_ON` datetime DEFAULT NULL,
  `DUE_DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`TASK_ID`),
  KEY `FK_tasks_users` (`AUTHOR_ID`),
  KEY `FK_tasks_categories` (`CAT_ID`),
  CONSTRAINT `FK_tasks_categories` FOREIGN KEY (`CAT_ID`) REFERENCES `categories` (`CAT_ID`),
  CONSTRAINT `FK_tasks_users` FOREIGN KEY (`AUTHOR_ID`) REFERENCES `users` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



