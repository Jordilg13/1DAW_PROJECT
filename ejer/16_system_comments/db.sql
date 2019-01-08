create database comments;
use comments;
CREATE TABLE IF NOT EXISTS `coments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `ip` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;