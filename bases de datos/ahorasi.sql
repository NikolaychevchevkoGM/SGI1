-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 01:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahorasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `encargo`
--

CREATE TABLE `encargo` (
  `id_En` int(200) NOT NULL,
  `nomProduc` varchar(200) NOT NULL,
  `cantL` int(250) NOT NULL,
  `cantXl` int(255) NOT NULL,
  `DescripE` varchar(255) NOT NULL,
  `usuC_id` int(11) NOT NULL,
  `fecha_Realizado` datetime NOT NULL,
  `fecha_De_Llegada` datetime NOT NULL,
  `persona_R` varchar(250) NOT NULL,
  `proces_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form_empresas`
--

CREATE TABLE `form_empresas` (
  `id_Nit` int(200) NOT NULL,
  `nombreE` varchar(250) NOT NULL,
  `direc` varchar(250) NOT NULL,
  `emailEmp` varchar(300) NOT NULL,
  `representL` varchar(250) NOT NULL,
  `fecha_ultimo_Ped` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id_pross` varchar(200) NOT NULL,
  `fecha_Tentativa_Entrega` datetime NOT NULL,
  `fecha_Finaliz_proces` datetime NOT NULL,
  `fecha_Entregado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_R` int(11) NOT NULL,
  `nombre_Rol` varchar(250) NOT NULL,
  `estadoUsu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usu`
--

CREATE TABLE `usu` (
  `id_cc` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellidos` varchar(300) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(300) NOT NULL,
  `contra` varchar(250) NOT NULL,
  `nit_id` int(200) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encargo`
--
ALTER TABLE `encargo`
  ADD PRIMARY KEY (`id_En`),
  ADD KEY `usuC_id` (`usuC_id`),
  ADD KEY `proces_id` (`proces_id`);

--
-- Indexes for table `form_empresas`
--
ALTER TABLE `form_empresas`
  ADD PRIMARY KEY (`id_Nit`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id_pross`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_R`);

--
-- Indexes for table `usu`
--
ALTER TABLE `usu`
  ADD PRIMARY KEY (`id_cc`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `nit_id` (`nit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encargo`
--
ALTER TABLE `encargo`
  MODIFY `id_En` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usu`
--
ALTER TABLE `usu`
  MODIFY `id_cc` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `encargo`
--
ALTER TABLE `encargo`
  ADD CONSTRAINT `encargo_ibfk_1` FOREIGN KEY (`usuC_id`) REFERENCES `usu` (`id_cc`),
  ADD CONSTRAINT `encargo_ibfk_2` FOREIGN KEY (`proces_id`) REFERENCES `process` (`id_pross`);

--
-- Constraints for table `usu`
--
ALTER TABLE `usu`
  ADD CONSTRAINT `usu_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_R`),
  ADD CONSTRAINT `usu_ibfk_2` FOREIGN KEY (`nit_id`) REFERENCES `form_empresas` (`id_Nit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
