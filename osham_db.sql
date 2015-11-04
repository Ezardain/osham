CREATE DATABASE `osham`
CREATE TABLE `usuario` (
	`nombre` VARCHAR(50) NOT NULL,
	`correo` VARCHAR(50) NOT NULL,
	`edad` INT(10) UNSIGNED NOT NULL,
	`genero` CHAR(1) NOT NULL,
	`hashPassword` TEXT NOT NULL,
	`imagenPerfil` BLOB NULL,
	`imagenPortada` BLOB NULL,
	`bio` VARCHAR(1000) NOT NULL,
	`confirmado` CHAR(1) NOT NULL,
	`codigoConfirmacion` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`correo`)
)