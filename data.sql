
CREATE TABLE IF NOT EXISTS `phonebook` (

  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB;

INSERT INTO `phonebook` (`id`, `name`,`email`,`mobile`) VALUES

(1, 'Zeus' ,'zeus@gmail.com','35425623'),

(2, 'Anthena','anthena@gmail.com','24532576'),

(3, 'Jupiter','jupiter@gmail.com','56454387'),

(4, 'Venus','venus@gmail.com','45321267');
