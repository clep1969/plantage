# phpMyAdmin MySQL-Dump# version 2.3.0# http://phpwizard.net/phpMyAdmin/# http://www.phpmyadmin.net/ (download page)## Host: localhost# Generation Time: Nov 08, 2002 at 01:17 PM# Server version: 3.23.51# PHP Version: 4.1.2# Database : `plantage`# --------------------------------------------------------## Table structure for table `new_pics`#DROP TABLE IF EXISTS `new_pics`;CREATE TABLE `new_pics` (  `picID` int(2) unsigned zerofill NOT NULL auto_increment,  `name` varchar(50) NOT NULL default '',  `imgURL` varchar(6) NOT NULL default '',  PRIMARY KEY  (`picID`)) TYPE=MyISAM;## Dumping data for table `new_pics`#INSERT INTO `new_pics` VALUES (01, 'Aster \'Harrington\'s Pink\'', '1.jpg'),(02, 'Aster frikarti \'Monch\'', '2.jpg'),(03, 'Chrysanthemum \'White Bomb\'', '3.jpg'),(04, 'Chrysanthemum \'White Bomb\'', '4.jpg'),(05, 'Chrysanthemum \'White Bomb\'', '5.jpg'),(06, 'Chrysanthemum \'White Bomb\'', '6.jpg');