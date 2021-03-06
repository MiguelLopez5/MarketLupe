use master;
GO

IF DB_ID (N'MERCADO') IS NOT NULL
DROP DATABASE MERCADO
GO
CREATE DATABASE MERCADO
GO

use MERCADO
GO

CREATE TABLE USERS(
IdUser int Identity(1,1) NOT NULL,
IdEmpl int NOT NULL,
Passw varchar(20) NOT NULL,
FotoUser varbinary(2000) NULL
)
CREATE TABLE EMPLEADOS(
IdEmpl int Identity(1,1) NOT NULL,
NomEmpl varchar(15) NOT NULL,
ApelEmpl varchar(15) NOT NULL,
Edad varchar(3) NOT NULL,
NumTel varchar(10) NULL DEFAULT 'Desconocido'
)
CREATE TABLE ASIGNACION(
IdAsig int Identity(1,1) NOT NULL,
IdEmpl int NOT NULL,
IdRol int NOT NULL,
FechaAsig datetime NOT NULL
)
CREATE TABLE ROLES(
IdRol int Identity(1,1) NOT NULL,
NomRol varchar(25) NOT NULL
)
CREATE TABLE VENTAS(
IdVenta int Identity(1,1) NOT NULL,
IdEmpl int NOT NULL,
FechaVen datetime NOT NULL,
PrecTotal money NOT NULL,
IdDetFact int NOT NULL,
IdCli int NOT NULL
)
CREATE TABLE CLIENTE(
IdCli int Identity(1,1) NOT NULL,
NomCli varchar(15) NOT NULL,
ApelCli varchar(15) NOT NULL,
TelCli varchar(10) NULL DEFAULT 'Desconocido',
DirCli varchar(30) NULL DEFAULT 'Desconocido'
)
CREATE TABLE DETALLEFACTURA(
IdVenta int NOT NULL,
IdProd int NOT NULL,
CantProdVen int NOT NULL,
SubTotalProd int NOT NULL
)
CREATE TABLE PRODUCTOS(
IdProd int Identity(1,1) NOT NULL,
NomProd varchar(15) NOT NULL,
TipoProd varchar(15) NOT NULL,
PrecEnt real NOT NULL,
PrecSal real NOT NULL,
Cant int NOT NULL
)
CREATE TABLE DETALLECOMPRA(
IdComp int NOT NULL,
IdProd int NOT NULL,
CantProdComp int NOT NULL,
SubTotalComp int NOT NULL
)
CREATE TABLE COMPRA(
IdComp int Identity(1,1) NOT NULL,
FechaComp datetime NOT NULL,
IdEmpl int NOT NULL,
IdProve int NOT NULL,
ValTotalEnt int NOT NULL
)
CREATE TABLE PROVEEDOR(
IdProve int Identity(1,1) NOT NULL,
NomProve varchar(15) NOT NULL,
ApelProve varchar(15) NOT NULL,
TelProve varchar(10) NOT NULL,
EmailProve varchar(25) NOT NULL
)

ALTER TABLE USERS
ADD PRIMARY KEY NONCLUSTERED(IdUser)
ALTER TABLE EMPLEADOS
ADD PRIMARY KEY NONCLUSTERED(IdEmpl)
ALTER TABLE ASIGNACION
ADD PRIMARY KEY NONCLUSTERED(IdAsig)
ALTER TABLE ROLES
ADD PRIMARY KEY NONCLUSTERED(IdRol)
ALTER TABLE VENTAS
ADD PRIMARY KEY NONCLUSTERED(IdVenta)
ALTER TABLE CLIENTE
ADD PRIMARY KEY NONCLUSTERED(IdCli)
ALTER TABLE DETALLEFACTURA
ADD PRIMARY KEY (IdVenta,IdProd)
ALTER TABLE PRODUCTOS
ADD PRIMARY KEY NONCLUSTERED(IdProd)
ALTER TABLE DETALLECOMPRA
ADD PRIMARY KEY (IdComp,IdProd)
ALTER TABLE COMPRA
ADD PRIMARY KEY NONCLUSTERED(IdComp)
ALTER TABLE PROVEEDOR
ADD PRIMARY KEY NONCLUSTERED(IdProve)

ALTER TABLE USERS
ADD FOREIGN KEY (IdEmpl) REFERENCES EMPLEADOS
ALTER TABLE ASIGNACION
ADD FOREIGN KEY (IdEmpl) REFERENCES EMPLEADOS, 
FOREIGN KEY (IdRol) REFERENCES ROLES
ALTER TABLE VENTAS
ADD FOREIGN KEY (IdEmpl) REFERENCES EMPLEADOS,
FOREIGN KEY (IdCli) REFERENCES CLIENTE
ALTER TABLE DETALLEFACTURA
ADD FOREIGN KEY (IdVenta) REFERENCES VENTAS,
FOREIGN KEY (IdProd) REFERENCES PRODUCTOS
ALTER TABLE DETALLECOMPRA
ADD FOREIGN KEY (IdComp) REFERENCES COMPRA,
FOREIGN KEY (IdProd) REFERENCES PRODUCTOS
ALTER TABLE COMPRA
ADD FOREIGN KEY (IdEmpl) REFERENCES EMPLEADOS,
FOREIGN KEY (IdProve) REFERENCES PROVEEDOR

INSERT INTO ROLES (IdRol,NomRol)
VALUES ('1','Administrador')

INSERT INTO ROLES (IdRol,NomRol)
VALUES ('2','Almacenista')

INSERT INTO ROLES (IdRol,NomRol)
VALUES ('3','Vendedor')