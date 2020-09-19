DROP DATABASE marketlupe;

CREATE DATABASE marketlupe DEFAULT CHARACTER SET utf8mb4;
USE marketlupe;


CREATE TABLE categoria (
  idCate int(11) NOT NULL AUTO_INCREMENT,
  NomCate varchar(35) NOT NULL,
  PRIMARY KEY(idCate)
);

INSERT INTO categoria (idCate, NomCate) VALUES 
(1, 'Grano'),
(2, 'Frutas'),
(3, 'Dulces'),
(4, 'Cereales'),
(5, 'Bebidas'),
(6, 'Lacteos y huevos'),
(7, 'Comida enlatada y salsas'),
(8, 'Aseo'),
(9, 'Cuidado personal'),
(10, 'Galletas y confitería'),
(11, 'Pasabocas'),
(12, 'Hogar, descechables y miscelanea');


CREATE TABLE cliente (
  IdCli int(11) NOT NULL AUTO_INCREMENT,
  NomCli varchar(15) NOT NULL,
  ApelCli varchar(15) NOT NULL,
  TelCli varchar(10) NOT NULL,
  CorCli varchar(35) NOT NULL,
  PRIMARY KEY(IdCli)
);

INSERT INTO cliente (IdCli, NomCli, ApelCli, TelCli, CorCli) VALUES
(1, 'Andres', 'Torres', '74836492', 'andythor1@gmail.com'),
(2, 'Maria', 'Acuña', '7984798', 'acunama23@gmail.com'),
(3, 'Marcos', 'Demichelis', '8943349', 'dema64@gmail.com');


CREATE TABLE compra (
  IdComp int(11) NOT NULL AUTO_INCREMENT,
  FechaComp datetime NOT NULL,
  IdEmpl int(11) NOT NULL,
  IdProve int(11) NOT NULL,
  ValTotalEnt int(11) NOT NULL,
  PRIMARY KEY(IdComp)
);

CREATE TABLE detallecompra (
  IdComp int(11) NOT NULL,
  IdProd int(11) NOT NULL,
  CantProdComp int(11) NOT NULL,
  SubTotalComp int(11) NOT NULL
);

CREATE TABLE detallefactura (
  IdVenta int(11) NOT NULL,
  IdProd int(11) NOT NULL,
  CantProdVen int(11) NOT NULL,
  SubTotalProd int(11) NOT NULL
);

CREATE TABLE empleados (
  IdEmpl int(11) NOT NULL AUTO_INCREMENT,
  NomEmpl varchar(15) NOT NULL,
  ApelEmpl varchar(15) NOT NULL,
  Edad varchar(3) NOT NULL,
  NumTel varchar(10) NOT NULL,
  Passw varchar(100) NOT NULL,
  IdRol int(11) NOT NULL,
  linkFoto varchar(50) NOT NULL DEFAULT 'assets/uploads/photos/user.png',
  PRIMARY KEY(IdEmpl)
);

INSERT INTO empleados (IdEmpl, NomEmpl, ApelEmpl, Edad, NumTel, Passw, IdRol, linkFoto) VALUES
(1, 'Marcos', 'Solis', '25', '7385624', '$2y$10$dFypjUFisktklbzWgu8pKOeiu7SvnMbXR0vZtwjfUV0BFeCCMhy32', 1, 'assets/uploads/photos/marco-male.png'),
(2, 'Andre', 'Gomes', '29', '7371295', '$2y$10$bEFv2d5ORDrhl/VX4TBfJeDAr4ngOdg05XkBRuRoB7a97H9tGjcrq', 2, 'assets/uploads/photos/user.png');


CREATE TABLE productos (
  IdProd int(11) NOT NULL AUTO_INCREMENT,
  NomProd varchar(30) NOT NULL,
  idCate int(11) NOT NULL,
  PrecEnt double NOT NULL,
  PrecSal double NOT NULL,
  Cant int(11) NOT NULL,
  linkImg varchar(50) NOT NULL DEFAULT 'assets/uploads/pictures/unknow.png',
  PRIMARY KEY(IdProd)
);

INSERT INTO productos (IdProd, NomProd, idCate, PrecEnt, PrecSal, Cant, linkImg) VALUES
(1, 'Arroz Diana', 1, 1500, 1600, 18, 'assets/uploads/pictures/arroz.jpg'),
(2, 'Aceite Gourmet', 1, 2000, 2150, 9, 'assets/uploads/pictures/aceite.jpg'),
(3, 'Galletas Ducales', 10, 1900, 2000, 10, 'assets/uploads/pictures/ducales.jpg'),
(4, 'Mantequilla Colanta', 10, 1600, 1750, 11, 'assets/uploads/pictures/mantequilla.jpg'),
(5, 'Combo frutas 4X3', 2, 2800, 3000, 10, 'assets/uploads/pictures/frutas.jpg'),
(6, 'Huevos AA 30', 6, 8500, 8600, 9, 'assets/uploads/pictures/huevos AA.jpg'),
(7, 'Pasta Doria', 1, 1500, 1600, 14, 'assets/uploads/pictures/pasta.jpg'),
(8, 'Salchichas zenu', 7, 1900, 2000, 19, 'assets/uploads/pictures/salchichas.jpg'),
(9, 'Sardinas La soberana', 7, 2400, 2550, 18, 'assets/uploads/pictures/sardinas.jpg');


CREATE TABLE proveedor (
  IdProve int(11) NOT NULL AUTO_INCREMENT,
  NomProve varchar(15) NOT NULL,
  ApelProve varchar(15) NOT NULL,
  TelProve varchar(11) NOT NULL,
  EmailProve varchar(35) NOT NULL,
  PRIMARY KEY(IdProve)
);

INSERT INTO proveedor (IdProve, NomProve, ApelProve, TelProve, EmailProve) VALUES
(1, 'Maria', 'Sanchez', '7293452', 'mari.sans5@gmail.com'),
(2, 'Alexander', 'Duarte', '7129382', 'alex.dun67@gmail.com'),
(3, 'Duvan', 'Zapata', '7299345', 'zap.duan44@gmail.com'),
(4, 'John', 'Arboleda', '7134934', 'john4rbol3@gmail.com'),
(5, 'Luis', 'Murillo', '7432955', 'luis.men1@hotmail.com');


CREATE TABLE roles (
  IdRol int(11) NOT NULL AUTO_INCREMENT,
  NomRol varchar(25) NOT NULL,
  PRIMARY KEY(IdRol)
);

INSERT INTO roles (IdRol, NomRol) VALUES
(1, 'Administrador'),
(2, 'Almacenista'),
(3, 'Vendedor');


CREATE TABLE ventas (
  IdVenta int(11) NOT NULL AUTO_INCREMENT,
  IdEmpl int(11) NOT NULL,
  FechaVen date NOT NULL,
  PrecTotal int(11) NOT NULL,
  IdCli int(11) NOT NULL,
  PRIMARY KEY(IdVenta)
);

INSERT INTO ventas (IdVenta, IdEmpl, FechaVen, PrecTotal, IdCli) VALUES
(1, 1, '2019-05-24', 16000, 2);


ALTER TABLE compra
  ADD FOREIGN KEY (IdProve) REFERENCES proveedor (IdProve),
  ADD FOREIGN KEY (IdEmpl) REFERENCES empleados (IdEmpl);

ALTER TABLE detallecompra
  ADD FOREIGN KEY (IdProd) REFERENCES productos (IdProd),
  ADD FOREIGN KEY (IdComp) REFERENCES compra (IdComp);

ALTER TABLE detallefactura
  ADD FOREIGN KEY (IdVenta) REFERENCES ventas (IdVenta),
  ADD FOREIGN KEY (IdProd) REFERENCES productos (IdProd);

ALTER TABLE empleados
  ADD FOREIGN KEY (IdRol) REFERENCES roles (IdRol);

ALTER TABLE productos
  ADD FOREIGN KEY (idCate) REFERENCES categoria (idCate);

ALTER TABLE ventas
  ADD FOREIGN KEY (IdEmpl) REFERENCES empleados (IdEmpl),
  ADD FOREIGN KEY (IdCli) REFERENCES cliente (IdCli);