CREATE DATABASE campustwo;
USE campustwo;

CREATE TABLE `students` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(15),
  `gender` varchar(8),
  `specialty` text,
  PRIMARY KEY  (`id`)
);