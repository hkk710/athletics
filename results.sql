/*
    This file contains sql queries for creating result entry tables
*/
CREATE TABLE IF NOT EXISTS `result_100M` (
  `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_100F` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_200M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_200F` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_400F` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_400M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_800F` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_800M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_1500F` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_1500M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_5000M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_10000M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_discussF` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_discussM` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_hamF` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_hamM` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_hjF` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_hjM` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_hur100M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_hur100F` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_hur400M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_javF` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_javM` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_ljF` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_ljM` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_relay100F` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_relay100M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_relay400F` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_relay400M` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_relaymedleyF` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_shortF` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_shortM` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_tjF` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `result_tjM` (
    `id` int NOT NULL AUTO_INCREMENT,
  `chest` int(11) NOT NULL DEFAULT '0',
  `time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `DEPTSCORE` (
  `DEPT` INT NOT NULL,
  `SCORE` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`DEPT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `DEPTSCORE` (`DEPT`) VALUES
(1),
(2),
(3),
(4),
(5);

CREATE TABLE IF NOT EXISTS `MARCH` (
  `DEPT` INT NOT NULL,
  `SCORE` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`DEPT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
