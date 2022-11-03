-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 01:24 PM
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
-- Database: `proyecf2`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividades`
--

CREATE TABLE `actividades` (
  `id_Act` int(11) NOT NULL,
  `decrip_Ac` varchar(235) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id_Nit_Em` int(11) NOT NULL,
  `nom_E` varchar(235) NOT NULL,
  `direcc` varchar(200) NOT NULL,
  `email_Empr` varchar(235) NOT NULL,
  `legal_Repr` varchar(230) NOT NULL,
  `sin_empresa` int(1) NOT NULL,
  `estado` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `estado_proceso`
--

CREATE TABLE `estado_proceso` (
  `id_codPP` varchar(11) NOT NULL,
  `pedido_id` varchar(11) NOT NULL,
  `preceso_id` int(11) NOT NULL,
  `activdad_id` int(11) NOT NULL,
  `estadoPrc` int(4) NOT NULL,
  `estado` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `id_CodP` varchar(11) NOT NULL,
  `cliente_id` varchar(11) NOT NULL,
  `producto_id` varchar(11) NOT NULL,
  `fecha_realizado` date NOT NULL,
  `fecha_llego` date NOT NULL,
  `persona_recibe` varchar(230) NOT NULL,
  `descripcion_ped` varchar(235) NOT NULL,
  `estado` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proceso`
--

CREATE TABLE `proceso` (
  `id_Proce` int(11) NOT NULL,
  `nombre_Porce` varchar(235) NOT NULL,
  `descrip` varchar(235) NOT NULL,
  `fecha_debe_entregar` date DEFAULT NULL,
  `fecha_terminado` date DEFAULT NULL,
  `fecha_Se_Entrego` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_codP` varchar(11) NOT NULL,
  `nombre` varchar(235) NOT NULL,
  `color` varchar(200) NOT NULL,
  `tip_Material` varchar(200) NOT NULL,
  `descripcion` varchar(235) NOT NULL,
  `cant_Lotes` int(11) NOT NULL,
  `cantXlot` int(11) NOT NULL,
  `estado` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipus`
--

CREATE TABLE `tipus` (
  `id_TipU` int(11) NOT NULL,
  `tipo_de_usu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_cc` varchar(11) NOT NULL,
  `nombre` varchar(230) NOT NULL,
  `apellidos` varchar(230) NOT NULL,
  `nom_Usu` varchar(230) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `email` varchar(230) NOT NULL,
  `info_Empr` int(11) NOT NULL,
  `contr` varchar(230) NOT NULL,
  `rol_id` int(4) NOT NULL,
  `estado` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_Act`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_Nit_Em`);

--
-- Indexes for table `estado_proceso`
--
ALTER TABLE `estado_proceso`
  ADD PRIMARY KEY (`id_codPP`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_CodP`);

--
-- Indexes for table `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`id_Proce`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_codP`);

--
-- Indexes for table `tipus`
--
ALTER TABLE `tipus`
  ADD PRIMARY KEY (`id_TipU`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_cc`),
  ADD KEY `info_Empr` (`info_Empr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_Act` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proceso`
--
ALTER TABLE `proceso`
  MODIFY `id_Proce` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipus`
--
ALTER TABLE `tipus`
  MODIFY `id_TipU` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`info_Empr`) REFERENCES `empresas` (`id_Nit_Em`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
