-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2018 a las 21:09:17
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
  `correo_i` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`codigo`, `nombre`, `precio_compra`, `precio_venta`, `unidad`, `stock`, `created_user`, `created_date`, `updated_user`, `updated_date`, `p_nombre`, `cedula`, `credencial`, `p_apellido`, `fec_nac`, `edad`, `s_nombre`, `s_apellido`, `rif`, `genero`, `tel_cel`, `tel_hab`, `tel_emerg`, `municipio`, `calle`, `casa`, `parroquia`, `estado`, `ciudad`, `avenida`, `codigo_cp`, `serial_cp`, `estado_c`, `lugar_nac`, `correo_e`, `grado_inst`, `correo_i`) VALUES
('141', '', 0, 0, '', 10, 1, '2018-10-29 14:30:10', 1, '2018-10-29 16:09:35', 'darly', 26435880, 10254, 'masrtinez', '29/10/1998', 20, 'naiduth', 'barreto', 2965956, 0, 2147483647, 2123174277, 2147483647, 'libertador', 'callejon', '88', 'antimano', 'distrito capital', 'caracas', 'primer carapot', 29659459, 4949, '', '', '', '', ''),
('B000142', '', 0, 0, '', -10, 1, '2018-10-29 14:51:43', 1, '2018-10-29 15:34:47', 'fdfn', 15841949, 49049, 'fjgf', '19/140', 11, 'gg', 'tjfj', 4949, 0, 2147483647, 29292, 929, 'sfdsdf', 'fds', '22', 'fsaf', 'fsdf', 'fsfd', 'dfs', 29529, 295, '', '', '', '', ''),
('B000143', '', 0, 0, '', 0, 1, '2018-10-29 16:09:15', 1, '2018-10-30 16:24:48', '523523', 582, 85232, '27', '5272', 3274, '523532', '2745', 5237, 0, 5, 581281, 587, '75', '587', '528', '57', 'Amazonas', '875', '58', 0, 8750, 'Soltero/a', 'Amazonas', 'darly@gmail.com', 'Primaria', '');

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

--
-- Volcado de datos para la tabla `transaccion_medicamentos`
--

INSERT INTO `transaccion_medicamentos` (`codigo_transaccion`, `fecha`, `codigo`, `numero`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2018-0000001', '2018-10-29', 'B000142', 10, 1, '2018-10-29 15:34:46', 'Salida'),
('TM-2018-0000002', '2018-10-29', '141', 10, 1, '2018-10-29 16:09:35', 'Entrada');

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
(2, 'juan', 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'juab@juan.com', '12000', NULL, 'Almacen', 'bloqueado', '2017-07-25 22:34:03', '2018-10-30 14:09:16'),
(3, 'Darly', 'Darly Martinez', 'f1fd75612dfa7dc86f07398fb9145fbf', NULL, NULL, NULL, 'Almacen', 'activo', '2018-10-30 13:42:24', '2018-10-30 13:42:24');

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
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
