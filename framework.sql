CREATE DATABASE IF NOT EXISTS `webshop_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webshop_db`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`) VALUES
(1, 'Pietje', 'Puk', 'male');
