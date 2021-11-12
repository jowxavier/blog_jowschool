CREATE DATABASE `blog` /*!40100 DEFAULT CHARACTER SET utf8 */;


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


CREATE TABLE `posts` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(5000) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
