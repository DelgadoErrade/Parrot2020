-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2020 at 05:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parrot2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `asig_dedu`
--

CREATE TABLE `asig_dedu` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `formula` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bancos`
--

CREATE TABLE `bancos` (
  `id` int(10) UNSIGNED NOT NULL,
  `banco` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_cuenta` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `numero_cuenta` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comprobantes`
--

CREATE TABLE `comprobantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `n_comprobante` int(11) NOT NULL,
  `factura` varchar(8) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_factura` date NOT NULL,
  `beneficiario` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cancela` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_cancela` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` bigint(20) UNSIGNED NOT NULL,
  `apellidos` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `telefono` char(12) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `zona_postal` char(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`id`, `cedula`, `apellidos`, `nombre`, `fecha_nacimiento`, `fecha_ingreso`, `telefono`, `email`, `direccion`, `ciudad`, `zona_postal`, `created_at`, `updated_at`) VALUES
(1, 5549847, 'DELGADO', 'JOSE', '1958-05-12', '2010-10-10', '7867020158', 'DELGADOERRADE@GMAIL.COM', '1236 DIXIE AV', 'Miami', '33139', '2020-06-16 00:47:39', '2020-06-16 00:47:39'),
(4, 4288690, 'RODRIGUEZ', 'MERCEDES', '1957-10-01', '2010-10-10', '7866603649', 'mercedesvioleta@gmail.com', '1236 Drexel Av. ap. 1', 'Miami Beach', '33139', '2020-06-16 20:48:14', '2020-06-16 20:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `icono` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_id`, `nombre`, `url`, `orden`, `icono`, `created_at`, `updated_at`) VALUES
(1, 6, 'Menu', 'admin/menu', 2, 'fas fa-bars', '2020-06-12 19:25:32', '2020-06-15 19:04:04'),
(6, 0, 'Administrador', '#', 1, 'fa fa-cog', '2020-06-12 20:21:58', '2020-06-15 19:04:04'),
(7, 6, 'Roles', 'admin/rol', 6, 'fa fa-registered', '2020-06-12 20:31:03', '2020-06-15 19:04:05'),
(8, 6, 'Permisos', 'admin/permiso', 4, 'fa-hand-paper', '2020-06-12 20:33:12', '2020-06-15 19:04:05'),
(9, 6, 'Menu-Rol', 'admin/menu-rol', 3, 'fa fa-server', '2020-06-12 20:35:32', '2020-06-15 19:04:05'),
(10, 6, 'Permiso Rol', 'admin/permiso-rol', 5, 'fa fa-ban', '2020-06-12 20:40:09', '2020-06-15 19:04:05'),
(11, 6, 'Usuarios', 'admin/usuario', 1, 'fa fa-users', '2020-06-12 23:22:40', '2020-06-15 19:04:04'),
(12, 0, 'Empleados', 'empleado', 2, 'fa fa-user', '2020-06-14 19:06:23', '2020-06-15 21:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `menu_rol`
--

CREATE TABLE `menu_rol` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `menu_rol`
--

INSERT INTO `menu_rol` (`rol_id`, `menu_id`) VALUES
(1, 1),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(2, 12),
(1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_04_28_173845_crear_tabla_usuario', 1),
(2, '2019_11_17_204902_crear_tabla_rol', 1),
(3, '2019_11_17_210159_crear_tabla_permiso', 1),
(4, '2019_11_17_211117_crear_tabla_usuario_rol', 1),
(5, '2019_11_17_222432_crear_tabla_permiso_rol', 1),
(6, '2019_11_22_155231_crear_tabla_menu', 1),
(7, '2019_11_22_161230_crear_tabla_menu_rol', 1),
(8, '2020_04_28_173840_crear_tabla_bancos', 1),
(9, '2020_04_28_173850_crear__tabla_tip_movimientos', 1),
(10, '2020_04_28_173940_crear_tabla_unidad_tributaria', 1),
(11, '2020_04_28_174040_crear_tabla_asigdedu', 1),
(12, '2020_04_28_175057_crear_tabla_empleados', 1),
(13, '2020_04_28_175124_crear_tabla_sueldos', 1),
(14, '2020_04_28_175329_create_quincenas_table', 1),
(15, '2020_04_28_175406_create_comprobantes_table', 1),
(16, '2020_04_28_205334_create_pagos_table', 1),
(17, '2020_04_28_205402_create_movimientos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movimientos`
--

CREATE TABLE `movimientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_banco` int(10) UNSIGNED NOT NULL,
  `id_tipo_mov` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `referencia` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `monto` decimal(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
--

CREATE TABLE `pagos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_comprobantes` int(10) UNSIGNED NOT NULL,
  `id_banco` int(10) UNSIGNED NOT NULL,
  `forma_pago` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `referencia` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `monto_pago` decimal(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permiso`
--

CREATE TABLE `permiso` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `permiso`
--

INSERT INTO `permiso` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(12, 'Crear Empleado', 'crear-empleado', '2020-06-14 04:24:11', '2020-06-14 04:24:11'),
(13, 'Modificar Empleado', 'modificar-empleado', '2020-06-14 04:24:30', '2020-06-14 04:24:30'),
(14, 'Eliminar Empleado', 'eliminar-empleado', '2020-06-14 04:24:46', '2020-06-14 04:24:46'),
(15, 'Pagar Facturas', 'pagar-facturas', '2020-06-14 04:25:00', '2020-06-14 04:25:00'),
(16, 'Listar empleados', 'listar-empleados', '2020-06-14 19:36:19', '2020-06-14 19:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `permiso_rol`
--

CREATE TABLE `permiso_rol` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `permiso_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `permiso_rol`
--

INSERT INTO `permiso_rol` (`rol_id`, `permiso_id`) VALUES
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(2, 16),
(2, 12),
(1, 16),
(2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `quincenas`
--

CREATE TABLE `quincenas` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` bigint(20) UNSIGNED NOT NULL,
  `asig_dedu` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `id_comprobante` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'administrador', '2020-06-11 22:43:30', NULL),
(2, 'Empleado', '2020-06-11 22:43:30', '2020-06-13 23:07:13'),
(3, 'Invitado', '2020-06-11 22:43:30', '2020-06-13 23:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `sueldos`
--

CREATE TABLE `sueldos` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` bigint(20) UNSIGNED NOT NULL,
  `cargo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sueldo_mensual` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tip_movimientos`
--

CREATE TABLE `tip_movimientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_movimiento` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `abreviatura` char(3) COLLATE utf8mb4_spanish_ci NOT NULL,
  `operacion` char(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unidad_tributaria`
--

CREATE TABLE `unidad_tributaria` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `unidad_tributaria` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `password`, `email`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'Administrador', '$2y$10$HiLwCZwWrIp3IgUqN4CKse7tdJ5E/jgFWfdsQlvL4KHqlCbqlE1MS', 'parrot.system@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'rat', 'Roosvelt', '$2y$10$4WFt.Pq2h56Bdx3wACESTuusqbe0lzLERVnF4mOtIzWE2vUB/dJyW', 'nojodas@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'susana', 'Claudia Susana', '$2y$10$xiOrYBm7EsZO1BjVujzTp./nI7VCrb8PmDY2PlTOq0NCpT7QKBaUW', 'susana@gmail.com', '2020-06-13 18:59:58', '2020-06-13 18:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_rol`
--

CREATE TABLE `usuario_rol` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `usuario_rol`
--

INSERT INTO `usuario_rol` (`rol_id`, `usuario_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(1, 4, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asig_dedu`
--
ALTER TABLE `asig_dedu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comprobantes`
--
ALTER TABLE `comprobantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empleados_cedula_unique` (`cedula`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_rol`
--
ALTER TABLE `menu_rol`
  ADD KEY `fk_menurol_rol` (`rol_id`),
  ADD KEY `fk_menurol_menu` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movimientos_id_banco_foreign` (`id_banco`),
  ADD KEY `movimientos_id_tipo_mov_foreign` (`id_tipo_mov`);

--
-- Indexes for table `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagos_id_comprobantes_foreign` (`id_comprobantes`),
  ADD KEY `pagos_id_banco_foreign` (`id_banco`);

--
-- Indexes for table `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permiso_rol`
--
ALTER TABLE `permiso_rol`
  ADD KEY `fk_permisorol_rol` (`rol_id`),
  ADD KEY `fk_permisorol_permiso` (`permiso_id`);

--
-- Indexes for table `quincenas`
--
ALTER TABLE `quincenas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `quincenas_id_comprobante_unique` (`id_comprobante`),
  ADD KEY `quincenas_cedula_foreign` (`cedula`),
  ADD KEY `quincenas_asig_dedu_foreign` (`asig_dedu`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rol_nombre_unique` (`nombre`);

--
-- Indexes for table `sueldos`
--
ALTER TABLE `sueldos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sueldos_cedula_foreign` (`cedula`);

--
-- Indexes for table `tip_movimientos`
--
ALTER TABLE `tip_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unidad_tributaria`
--
ALTER TABLE `unidad_tributaria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_usuario_unique` (`usuario`),
  ADD UNIQUE KEY `usuario_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `usuario_email_unique` (`email`);

--
-- Indexes for table `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD KEY `fk_usuariorol_rol` (`rol_id`),
  ADD KEY `fk_usuariorol_usuario` (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asig_dedu`
--
ALTER TABLE `asig_dedu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comprobantes`
--
ALTER TABLE `comprobantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quincenas`
--
ALTER TABLE `quincenas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sueldos`
--
ALTER TABLE `sueldos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tip_movimientos`
--
ALTER TABLE `tip_movimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unidad_tributaria`
--
ALTER TABLE `unidad_tributaria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_rol`
--
ALTER TABLE `menu_rol`
  ADD CONSTRAINT `fk_menurol_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_menurol_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_id_banco_foreign` FOREIGN KEY (`id_banco`) REFERENCES `bancos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movimientos_id_tipo_mov_foreign` FOREIGN KEY (`id_tipo_mov`) REFERENCES `tip_movimientos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_id_banco_foreign` FOREIGN KEY (`id_banco`) REFERENCES `bancos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pagos_id_comprobantes_foreign` FOREIGN KEY (`id_comprobantes`) REFERENCES `comprobantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permiso_rol`
--
ALTER TABLE `permiso_rol`
  ADD CONSTRAINT `fk_permisorol_permiso` FOREIGN KEY (`permiso_id`) REFERENCES `permiso` (`id`),
  ADD CONSTRAINT `fk_permisorol_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);

--
-- Constraints for table `quincenas`
--
ALTER TABLE `quincenas`
  ADD CONSTRAINT `quincenas_asig_dedu_foreign` FOREIGN KEY (`asig_dedu`) REFERENCES `asig_dedu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quincenas_cedula_foreign` FOREIGN KEY (`cedula`) REFERENCES `empleados` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sueldos`
--
ALTER TABLE `sueldos`
  ADD CONSTRAINT `sueldos_cedula_foreign` FOREIGN KEY (`cedula`) REFERENCES `empleados` (`cedula`) ON UPDATE CASCADE;

--
-- Constraints for table `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `fk_usuariorol_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`),
  ADD CONSTRAINT `fk_usuariorol_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
