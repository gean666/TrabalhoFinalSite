CREATE DATABASE `cadastro`
    CHARACTER SET 'utf8'
    COLLATE 'utf8_general_ci';



CREATE TABLE `usuarios` (
  `id`       INTEGER(11)  NOT NULL AUTO_INCREMENT,
  `email`    VARCHAR(100) NOT NULL UNIQUE,
  `senha` VARCHAR(40)  NOT NULL,
  `login`  varchar(40),
  PRIMARY KEY (`id`)
   
)
  


