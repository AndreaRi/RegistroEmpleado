CREATE DATABASE `USERCREATOR`;
USE USERCREATOR;
DROP table empleado;
CREATE TABLE `empleado` (
  `IdEmpleado` INT(10) NOT NULL AUTO_INCREMENT,
  `Rolempleado` CHAR(13) NOT NULL,
  `Nombreempleado` CHAR(50) NOT NULL,
  `Apellidoempleado` CHAR(50) NOT NULL,
  `Celularempleado` bigint(13) NOT NULL,
  `Cedulaempleado` bigint(15) NOT NULL,
  `Estadoempleado` CHAR(9) NOT NULL,
  `img` longblob NOT NULL,
  `Email` varchar(50)NOT NULL,
  `Contrasena` varchar(20)NOT NULL,
  `ConfirmContrasena` varchar(30)NOT NULL,
  
  
  
  
--  `Sede_IdSede` INT NOT NULL,
--  `Rolempleado_Idrol` INT(10) NOT NULL,
  PRIMARY KEY (`IdEmpleado`))
ENGINE = InnoDB;
truncate empleado;


select  *from empleado where IdEmpleado=1;
truncate empleado;
