-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 01:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurante_dw`
--

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `Id` int(11) NOT NULL,
  `Fecha` date NOT NULL DEFAULT current_timestamp(),
  `Nombre` varchar(50) NOT NULL,
  `Numero` bigint(20) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Pedido` text NOT NULL,
  `Aclaraciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`Id`, `Fecha`, `Nombre`, `Numero`, `Mail`, `Pedido`, `Aclaraciones`) VALUES
(1, '2021-10-23', 'Jesus Anaya', 8341129018, 'j.anaya@mail.com', '1 arroz chino con pollo	', 'Sin cebolla'),
(2, '2021-10-23', 'Pablo Pizaña', 8341125471, 'p.pizaña@mail.com', '1 Hamburguesa con papas', 'Sin pepinillos'),
(3, '2021-10-23', 'Kevin', 8341129102, 'kevin@mail.com', '1 Hawaiana', ''),
(4, '2021-10-23', 'Roberto Llanos', 8341123671, 'rllanos@mail.com', '3 Supremas', 'sin aceitunas'),
(5, '2021-10-23', 'Fernando Carrillo', 8341125122, 'ferca@mail.com', '1 pizza Jamon', ''),
(6, '2021-10-23', 'Paco Sanchez', 8341121234, 'psanchez@mail.com', '1 bacon jalapeño', 'Por favor no poner tantos jalapeños'),
(7, '2021-10-23', 'Jorge Elizondo', 8341125089, 'jorge_elizondo@mail.com', '2 pizza peperoni', ''),
(8, '2021-10-27', 'Test nuevo pedido', 8341234567, 'test@gmail.com', '1 hamburguesa con papas', 'SIN PEPINILLOS'),
(9, '2021-12-01', 'JARAMILLO', 83422222222, 'JARAMILLO@MAIL.COM', '1 HAWAIANA', '');

-- --------------------------------------------------------

--
-- Table structure for table `platillos`
--

CREATE TABLE `platillos` (
  `id` int(11) NOT NULL,
  `day` tinyint(4) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float NOT NULL,
  `imagen_path` varchar(64) NOT NULL,
  `visible` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `platillos`
--

INSERT INTO `platillos` (`id`, `day`, `nombre`, `descripcion`, `precio`, `imagen_path`, `visible`) VALUES
(13, 5, 'PIZZA DE PEPERONNI', 'Pizza de 12 pulgadas con queso mozzarella y peperonni.', 140, 'uploads/2021_12_01_23_29_19pizza_peperonni.jpg', 1),
(14, 5, 'PIZZA HAWAIANA', 'Pizza de 12 pulgadas con queso mozzarella, piña y jamon.', 150, 'uploads/2021_12_01_23_43_47PIZZA_HAWAINA.jpg', 1),
(16, 5, 'PIZZA SUPREMA', 'Pizza de 12 pulgadas con queso mozzarella, peperonni, cebolla, pimiento verde y tomate', 170, 'uploads/2021_12_01_23_45_33PIZZA_SUPREMA.jpg', 1),
(17, 6, 'POLLO EN SALSA DE JALAPEÑO', 'Pollo en salsa de jalapeño y bacon servido con arroz pilaf y ensalada de vegetales', 190, 'uploads/2021_12_01_23_48_04Pollo_salsa_jalapeno.jpg', 1),
(18, 6, 'SOPA DE CARACOL', 'Suave y delicioso caracol preparado en cremosa y exquisita sopa con arroz blanco', 220, 'uploads/2021_12_01_23_49_50SOPA_CARACOL.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `platillos`
--
ALTER TABLE `platillos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
