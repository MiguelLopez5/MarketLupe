SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS `sordmark` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `sordmark`;


CREATE TABLE `asignacion` (
  `IdAsig` int(11) NOT NULL,
  `IdEmpl` int(11) NOT NULL,
  `IdRol` int(11) NOT NULL,
  `FechaAsig` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cliente` (
  `IdCli` int(11) NOT NULL,
  `NomCli` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApelCli` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelCli` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DirCli` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `cliente` (`IdCli`, `NomCli`, `ApelCli`, `TelCli`, `DirCli`) VALUES
(1, 'Andres', 'Torres', '74836492', 'Cra 30 No 5-7'),
(2, 'Maria', 'Acuña', '7984798', 'Cll 55 No 6-2'),
(3, 'Marcos', 'Demichelis', '8943349', 'Cra 45 No 8-9');


CREATE TABLE `compra` (
  `IdComp` int(11) NOT NULL,
  `FechaComp` datetime NOT NULL,
  `IdEmpl` int(11) NOT NULL,
  `IdProve` int(11) NOT NULL,
  `ValTotalEnt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `detallecompra` (
  `IdComp` int(11) NOT NULL,
  `IdProd` int(11) NOT NULL,
  `CantProdComp` int(11) NOT NULL,
  `SubTotalComp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `detallefactura` (
  `IdVenta` int(11) NOT NULL,
  `IdProd` int(11) NOT NULL,
  `CantProdVen` int(11) NOT NULL,
  `SubTotalProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `empleados` (
  `IdEmpl` int(11) NOT NULL,
  `NomEmpl` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApelEmpl` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edad` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumTel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `productos` (
  `IdProd` int(11) NOT NULL,
  `NomProd` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TipoProd` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrecEnt` double NOT NULL,
  `PrecSal` double NOT NULL,
  `Cant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `proveedor` (
  `IdProve` int(11) NOT NULL,
  `NomProve` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApelProve` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelProve` int(10) NOT NULL,
  `EmailProve` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `roles` (
  `IdRol` int(11) NOT NULL,
  `NomRol` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `roles` (`IdRol`, `NomRol`) VALUES
(1, 'Administrador'),
(2, 'Almacenista'),
(3, 'Vendedor');


CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `IdEmpl` int(11) NOT NULL,
  `Passw` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FotoUser` varbinary(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `ventas` (
  `IdVenta` int(11) NOT NULL,
  `IdEmpl` int(11) NOT NULL,
  `FechaVen` datetime NOT NULL,
  `PrecTotal` int(11) NOT NULL,
  `IdCli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`IdAsig`),
  ADD KEY `IdEmpl` (`IdEmpl`),
  ADD KEY `asignacion_ibfk_1` (`IdRol`);

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCli`);

ALTER TABLE `compra`
  ADD PRIMARY KEY (`IdComp`),
  ADD KEY `IdEmpl` (`IdEmpl`),
  ADD KEY `compra_ibfk_1` (`IdProve`);

ALTER TABLE `detallecompra`
  ADD KEY `IdComp` (`IdComp`),
  ADD KEY `detallecompra_ibfk_1` (`IdProd`);

ALTER TABLE `detallefactura`
  ADD KEY `IdVenta` (`IdVenta`),
  ADD KEY `detallefactura_ibfk_1` (`IdProd`);

ALTER TABLE `empleados`
  ADD PRIMARY KEY (`IdEmpl`);

ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProd`);

ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`IdProve`);

ALTER TABLE `roles`
  ADD PRIMARY KEY (`IdRol`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`),
  ADD KEY `IdEmpl` (`IdEmpl`);

ALTER TABLE `ventas`
  ADD PRIMARY KEY (`IdVenta`),
  ADD KEY `IdEmpl` (`IdEmpl`),
  ADD KEY `ventas_ibfk_1` (`IdCli`);


ALTER TABLE `asignacion`
  MODIFY `IdAsig` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `cliente`
  MODIFY `IdCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `compra`
  MODIFY `IdComp` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `empleados`
  MODIFY `IdEmpl` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `productos`
  MODIFY `IdProd` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `proveedor`
  MODIFY `IdProve` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `roles`
  MODIFY `IdRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `ventas`
  MODIFY `IdVenta` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `asignacion`
  ADD CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`IdRol`) REFERENCES `roles` (`IdRol`);

ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`IdProve`) REFERENCES `proveedor` (`IdProve`);

ALTER TABLE `detallecompra`
  ADD CONSTRAINT `detallecompra_ibfk_1` FOREIGN KEY (`IdProd`) REFERENCES `productos` (`IdProd`);

ALTER TABLE `detallefactura`
  ADD CONSTRAINT `detallefactura_ibfk_1` FOREIGN KEY (`IdProd`) REFERENCES `productos` (`IdProd`);

ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`IdEmpl`) REFERENCES `empleados` (`IdEmpl`);

ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`IdCli`) REFERENCES `cliente` (`IdCli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
