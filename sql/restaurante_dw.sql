-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 06:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
(7, '2021-10-23', 'Jorge Elizondo', 8341125089, 'jorge_elizondo@mail.com', '2 pizza peperoni', '');

-- --------------------------------------------------------

--
-- Table structure for table `platillos`
--

CREATE TABLE `platillos` (
  `id` int(32) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `descripcion` varchar(64) NOT NULL,
  `ingredientes` varchar(64) NOT NULL,
  `imagen_path` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `platillos`
--
ALTER TABLE `platillos`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
