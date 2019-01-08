create database combos1;
use combos1;

--
-- Table structure for table `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `idpais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idpais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `paises`
--

INSERT INTO `paises` (`idpais`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'Espanya'),
(3, 'Mexico'),
(4, 'Colombia');

--
-- Table structure for table `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `idciudad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `idpais` int(11) NOT NULL,
  PRIMARY KEY (`idciudad`),
  KEY `idpais` (`idpais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- RELATIONS FOR TABLE `ciudades`:
--   `idpais`
--       `paises` -> `idpais`
--

--
-- Dumping data for table `ciudades`
--

INSERT INTO `ciudades` (`idciudad`, `nombre`, `idpais`) VALUES
(1, 'Buenos Aires', 1),
(2, 'Rosario', 1),
(3, 'Mendoza', 1),
(4, 'Madrid', 2),
(5, 'Barcelona', 2),
(6, 'Valencia', 2),
(7, 'Puebla', 3),
(8, 'Guadalajara', 3),
(9, 'Monterrey', 3),
(10, 'Barranquilla', 4),
(12, 'Cali', 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `paises_ciudades` FOREIGN KEY (`idpais`) REFERENCES `paises` (`idpais`);
  