SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
  `ID`      INT           NOT NULL  AUTO_INCREMENT,
  `Name`    VARCHAR(20)   NOT NULL,
  `Points`  INT           NOT NULL,
  `Created` TIMESTAMP     NOT NULL  DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `person` (`ID`, `Name`, `Points`) VALUES
  (1, 'William' , 100),
  (2, 'Marc'    , 42 ),
  (3, 'John'    , 300);