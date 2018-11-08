-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2018 a las 17:35:23
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `medisys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiares`
--

CREATE TABLE `familiares` (
  `cedula` int(15) NOT NULL,
  `p_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `s_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `p_apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `s_apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fec_nac` date NOT NULL,
  `edad` int(3) NOT NULL,
  `parentesco` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estudiante` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `funcionario` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `inf_med` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `familiares`
--

INSERT INTO `familiares` (`cedula`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `fec_nac`, `edad`, `parentesco`, `estudiante`, `funcionario`, `inf_med`) VALUES
(26435880, 'darly', 'naiduth', 'martinez', 'barreto', '2017-05-24', 20, 'Hija', 'Si', 'Si', 'Ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `codigo` varchar(7) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p_nombre` varchar(50) NOT NULL,
  `cedula` int(10) NOT NULL,
  `credencial` int(20) NOT NULL,
  `p_apellido` varchar(50) NOT NULL,
  `fec_nac` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `s_nombre` varchar(50) NOT NULL,
  `s_apellido` varchar(50) NOT NULL,
  `rif` int(15) NOT NULL,
  `genero` int(11) NOT NULL,
  `tel_cel` int(11) NOT NULL,
  `tel_hab` int(11) NOT NULL,
  `tel_emerg` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `casa` varchar(50) NOT NULL,
  `parroquia` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `avenida` varchar(50) NOT NULL,
  `codigo_cp` int(20) NOT NULL,
  `serial_cp` int(20) NOT NULL,
  `estado_c` varchar(50) NOT NULL,
  `lugar_nac` varchar(50) NOT NULL,
  `correo_e` varchar(50) NOT NULL,
  `grado_inst` varchar(50) NOT NULL,
  `correo_i` varchar(50) NOT NULL,
  `tipo_s` varchar(50) NOT NULL,
  `medicamen` varchar(100) NOT NULL,
  `discapacidad` varchar(100) NOT NULL,
  `alergias` varchar(100) NOT NULL,
  `nota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`codigo`, `nombre`, `precio_compra`, `precio_venta`, `unidad`, `stock`, `created_user`, `created_date`, `updated_user`, `updated_date`, `p_nombre`, `cedula`, `credencial`, `p_apellido`, `fec_nac`, `edad`, `s_nombre`, `s_apellido`, `rif`, `genero`, `tel_cel`, `tel_hab`, `tel_emerg`, `municipio`, `calle`, `casa`, `parroquia`, `estado`, `ciudad`, `avenida`, `codigo_cp`, `serial_cp`, `estado_c`, `lugar_nac`, `correo_e`, `grado_inst`, `correo_i`, `tipo_s`, `medicamen`, `discapacidad`, `alergias`, `nota`) VALUES
('B000001', '', 0, 0, '', 0, 1, '2018-11-08 15:01:11', 1, '2018-11-08 15:01:11', 'Dalry', 26435880, 26435, 'Martinez', '29/10/1998', 20, 'Naiduth', 'Barreto', 264358801, 0, 2147483647, 2124170277, 2147483647, 'Libertador', 'callejon pinto salina', '88', 'Antimano', 'Distrito Capital', 'Caracas', 'Primera entrada de carapita', 295959, 2595959, 'Soltero/a', 'Amazonas', 'darlynmartinezb@gmail.com', 'Primaria', '', '', '', '', '', ''),
('B000002', '', 0, 0, '', 0, 1, '2018-11-08 15:19:17', 1, '2018-11-08 15:19:17', '5', 659, 59, '498', '45', 9845, '985', '98', 59, 0, 489, 8, 89, 'jhk', '8', '98', '78', '4789', '889', 'yjt', 8, 798, 'Soltero/a', 'Amazonas', '89', 'Primaria', '', 'bd', '', '', '', ''),
('B000003', '', 0, 0, '', 0, 1, '2018-11-08 15:22:58', 1, '2018-11-08 15:22:58', 'fsdfsdfsd', 0, 0, 'sdfdsfsdf', 'sdfsd', 0, 'sfsd', 'fsdf', 0, 0, 0, 0, 0, 'fsdfds', 'fds', 'fdsf', 'sdfsd', 'f', 'sdfsd', 'dsff', 0, 0, 'Soltero/a', 'Amazonas', 'sdf', 'Primaria', '', 'nb', 'ffsdfsd', '', '', ''),
('B000004', '', 0, 0, '', 0, 1, '2018-11-08 15:26:25', 1, '2018-11-08 15:26:25', '165', 56, 156, '1', '56', 1, '156', '651', 165, 0, 561, 51, 561, '156', '1', '561', '51', '56', '1', '5', 561, 61, 'Soltero/a', 'Amazonas', '61', 'Primaria', '', 'bd', 'pastillas', 'silla de ruedas', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_medicamentos`
--

CREATE TABLE `transaccion_medicamentos` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(7) NOT NULL,
  `numero` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `correo_i` varchar(50) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `permisos_acceso` enum('Super Admin','Gerente','Almacen') NOT NULL,
  `status` enum('activo','bloqueado') NOT NULL DEFAULT 'activo',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `username`, `name_user`, `password`, `correo_i`, `telefono`, `foto`, `permisos_acceso`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrador', '21232f297a57a5a743894a0e4a801fc3', 'darly@sist.com', '04140272330', 'Desert.jpg', 'Super Admin', 'activo', '2017-04-01 08:15:15', '2018-10-30 15:11:13'),
(2, 'juan', 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'juab@juan.com', '12000', NULL, 'Almacen', 'activo', '2017-07-25 22:34:03', '2018-11-01 13:58:46'),
(3, 'Darly', 'Darly Martinez', 'f1fd75612dfa7dc86f07398fb9145fbf', '', '', NULL, 'Almacen', 'activo', '2018-10-30 13:42:24', '2018-11-01 13:58:12'),
(4, 'vanesa', 'vanesa', 'f1fd75612dfa7dc86f07398fb9145fbf', NULL, NULL, NULL, 'Gerente', 'activo', '2018-11-01 13:59:01', '2018-11-01 13:59:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `transaccion_medicamentos`
--
ALTER TABLE `transaccion_medicamentos`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`permisos_acceso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD CONSTRAINT `medicamentos_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicamentos_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transaccion_medicamentos`
--
ALTER TABLE `transaccion_medicamentos`
  ADD CONSTRAINT `transaccion_medicamentos_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `medicamentos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaccion_medicamentos_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
