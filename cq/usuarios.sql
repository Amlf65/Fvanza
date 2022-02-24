CREATE DATABASE  IF NOT EXISTS BDUsuarios;
USE BDUsuarios;
CREATE TABLE usuarios
(ID_Usuario int AUTO_INCREMENT PRIMARY KEY, nombreUsuario varchar(25));
INSERT usuarios VALUES(NULL,'Juan'),(NULL,'Carlos'),(NULL,'Luis'),(NULL,'Claudia')
