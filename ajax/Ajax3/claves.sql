CREATE DATABASE IF NOT EXISTS BDUsuarios;
USE BDUsuarios;

CREATE TABLE claves
(
    usuario varchar(40) PRIMARY KEY,
    password varchar(25)
);

INSERT claves VALUES('Juan',12345)