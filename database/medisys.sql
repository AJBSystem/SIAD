-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2018 a las 19:56:39
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
  `tel_emerg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`codigo`, `nombre`, `precio_compra`, `precio_venta`, `unidad`, `stock`, `created_user`, `created_date`, `updated_user`, `updated_date`, `p_nombre`, `cedula`, `credencial`, `p_apellido`, `fec_nac`, `edad`, `s_nombre`, `s_apellido`, `rif`, `genero`, `tel_cel`, `tel_hab`, `tel_emerg`) VALUES
('B000377', '', 0, 0, '', 0, 1, '2018-10-22 19:21:22', 1, '2018-10-22 19:25:44', 'dsgf', 9590595, 4594094, 'dg', '20/10/2189', 26, 'as', '', 0, 0, 0, 0, 0),
('B000379', '', 0, 0, '', 0, 1, '2018-10-22 19:29:37', 1, '2018-10-22 19:30:17', 'pop', 852, 582, 'ppo', '20/10/1995', 20, 'tu', '', 0, 0, 0, 0, 0),
('B000380', '', 0, 0, '', 0, 1, '2018-10-22 19:31:26', 1, '2018-10-22 19:31:26', 'nai', 10, 20, 'dar', 'mar', 20, '20', '', 0, 0, 0, 0, 0),
('B000383', '', 0, 0, '', 0, 1, '2018-10-22 19:35:37', 1, '2018-10-22 19:35:37', 'naiduth', 252, 2785, 'martinez', '20/1/1085', 10, '', '', 0, 0, 0, 0, 0),
('B000384', '', 0, 0, '', 0, 1, '2018-10-22 19:38:06', 1, '2018-10-22 19:50:09', 'Darly', 5752, 525, 'Martinez', '20/10/1998', 20, 'Naiduth', 'Barreto', 0, 0, 0, 0, 0),
('B000385', '', 0, 0, '', 0, 1, '2018-10-22 19:50:41', 1, '2018-10-22 19:55:45', 'Agustin', 10877210, 26949, 'Martinez', '20/08/1961', 45, 'Fortunato', 'Zapata', 20, 0, 0, 0, 0),
('B000386', '', 0, 0, '', 0, 1, '2018-10-22 19:56:30', 1, '2018-10-22 19:56:30', 'bfd', 20, 20, 'fdg', '52', 1, 'dfdf', 'fdsgb', 25020, 0, 0, 0, 0),
('B000387', '', 0, 0, '', 0, 1, '2018-10-22 20:04:17', 1, '2018-10-22 20:04:17', 'mjhk', 10, 10, 'hk', '20', 155, 'kjh', 'kh', 10, 0, 0, 0, 0),
('B000388', '', 0, 0, '', 0, 1, '2018-10-24 16:13:25', 1, '2018-10-24 16:13:25', 'dwdd', 20096158, 30128, 'yfuyf', '20/10/2015', 26, 'tyff', 'yuf', 659096, 0, 0, 0, 0),
('B000389', '', 0, 0, '', 0, 1, '2018-10-24 19:12:54', 1, '2018-10-24 19:12:54', 'Yarnelly', 19753205, 46890, 'Blanco', '12/03/1990', 28, 'Vanesa', 'Carias', 197532051, 0, 0, 0, 0),
('B000390', '', 0, 0, '', 0, 1, '2018-10-26 17:45:30', 1, '2018-10-26 17:55:30', 'darly', 26435880, 2695095, 'martinez', '29/10/1998/', 20, 'naiduth', 'barreto', 49908, 0, 2147483647, 2124170277, 2147483647),
('B000391', '', 0, 0, '', 0, 1, '2018-10-26 17:55:53', 1, '2018-10-26 17:55:53', 'gdh', 252572, 5252, 'hd', '63363', 6363, 'df', 'dhfh', 258, 0, 852852, 78527, 875);

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
  `email` varchar(50) DEFAULT NULL,
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

INSERT INTO `usuarios` (`id_user`, `username`, `name_user`, `password`, `email`, `telefono`, `foto`, `permisos_acceso`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Sistemas Webs', '21232f297a57a5a743894a0e4a801fc3', 'info@sist.com', '7025', 'user-default.png', 'Super Admin', 'activo', '2017-04-01 08:15:15', '2017-07-25 23:35:23'),
(2, 'juan', 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'juab@juan.com', '12000', NULL, 'Almacen', 'activo', '2017-07-25 22:34:03', '2017-07-25 22:42:00');

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
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
