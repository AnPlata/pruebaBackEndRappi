ALTER TABLE `sia`.`usuarios` 
ADD COLUMN `programa_fk` INT NULL AFTER `usuario`;


CREATE TABLE `sia`.`configuracion` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `empresa_fk` VARCHAR(45) NULL,
  `sede_fk` VARCHAR(45) NULL,
  `periodo` VARCHAR(45) NULL,
  `anoperiodo` VARCHAR(45) NULL,
  PRIMARY KEY (`codigo`));

CREATE TABLE `sia`.`configuracion_encuesta` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `encuesta_fk` INT(11) NULL,
  `configuracion_fk` INT(45) NULL,
  PRIMARY KEY (`codigo`));


INSERT INTO `sia`.`configuracion` (`empresa_fk`, `sede_fk`, `periodo`, `anoperiodo`) VALUES ('1', '1', '2', '2015');

ALTER TABLE `sia`.`configuracion_encuesta` 
ADD COLUMN `estado_fk` INT(11) NULL AFTER `confitguracion_fk`;



ALTER TABLE `sia`.`perfiles` 
ADD COLUMN `estamento_fk` INT(11) NULL AFTER `empresa_fk`;





UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='1';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='2';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='3';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='4';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='5';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='6';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='7';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='8';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='9';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='10';
UPDATE `sia`.`perfiles` SET `estamento_fk`='2' WHERE `codigo`='11';

/*verde ubatuba
(57)316 828 3848 - (7) 605 33 04
www.publigraf.com.co - info@publigraf.com.co
Cra 9A No. 109A - 14  -  Bucaramanga  -  Colombia
*/