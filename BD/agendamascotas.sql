CREATE TABLE IF NOT EXISTS `mascota` (
  `idmascota` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(45) NOT NULL COMMENT '',
  `tipo` VARCHAR(45) NOT NULL COMMENT '',
  `raza` VARCHAR(45) NOT NULL COMMENT '',
  `fecha_nac` DATE NOT NULL COMMENT '',
  `descripcion` VARCHAR(45) NULL COMMENT '',
  `urlimagen` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idmascota`)  COMMENT '')
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `evento` (
  `idevento` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `idmascota` VARCHAR(45) NOT NULL COMMENT '',
  `titulo` VARCHAR(45) NULL COMMENT '',
  `descripcion` VARCHAR(45) NULL COMMENT '',
  `fecha` DATE NOT NULL COMMENT '',
  `peso` INT(11) NULL COMMENT '',
  `url_imagen` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idevento`)  COMMENT '')
ENGINE = InnoDB
