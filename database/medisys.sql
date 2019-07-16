-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2019 a las 18:01:33
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

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
(26435880, 'darly', 'naiduth', 'martinez', 'barreto', '2017-05-24', 20, 'Hija', 'Si', 'Si', 'Ninguna'),
(26435880, 'darly', 'naiduth', 'martinez', 'barreto', '2017-05-24', 20, 'Hija', 'Si', 'Si', 'Ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionarios`
--

CREATE TABLE `funcionarios` (
  `cedula` int(13) NOT NULL,
  `codigo` int(25) NOT NULL,
  `created_date` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `created_user` int(3) NOT NULL,
  `uptated_date` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `updated_user` int(4) NOT NULL,
  `pol_act` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `pol_vac` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `pol_rep` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `adm_act` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `adm_rep` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `adm_vac` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `arm_pol` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `chalecos` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `armas_l` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `vehiculos` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `motos` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `radios_por` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `funcionarios`
--

INSERT INTO `funcionarios` (`cedula`, `codigo`, `created_date`, `created_user`, `uptated_date`, `updated_user`, `pol_act`, `pol_vac`, `pol_rep`, `adm_act`, `adm_rep`, `adm_vac`, `arm_pol`, `chalecos`, `armas_l`, `vehiculos`, `motos`, `radios_por`) VALUES
(26435880, 0, '', 1, '', 1, '', '', '', '', '', '', '', '', '', '', '', '');

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
  `edad` varchar(10) NOT NULL,
  `s_nombre` varchar(50) NOT NULL,
  `s_apellido` varchar(50) NOT NULL,
  `rif` int(15) NOT NULL,
  `genero` varchar(11) NOT NULL,
  `tel_cel` varchar(11) NOT NULL,
  `tel_hab` int(11) NOT NULL,
  `tel_emerg` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `casa` varchar(50) NOT NULL,
  `parroquia` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `avenida` varchar(50) NOT NULL,
  `codigo_cp` varchar(20) NOT NULL,
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
  `nota` varchar(200) NOT NULL,
  `notas` varchar(400) NOT NULL,
  `fec_ing` varchar(100) NOT NULL,
  `tiempo_s` varchar(50) NOT NULL,
  `ubic_fis` varchar(150) NOT NULL,
  `p_nombref` varchar(50) NOT NULL,
  `s_nombref` varchar(100) NOT NULL,
  `p_apellidof` varchar(100) NOT NULL,
  `s_apellidof` varchar(50) NOT NULL,
  `cedulaf` int(9) NOT NULL,
  `fec_nacf` varchar(100) NOT NULL,
  `edadf` varchar(10) NOT NULL,
  `generof` varchar(50) NOT NULL,
  `parentesco` varchar(50) NOT NULL,
  `estudiante` varchar(50) NOT NULL,
  `funcionario` varchar(50) NOT NULL,
  `inf_medf` varchar(200) NOT NULL,
  `tipo_v` varchar(200) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `combustible` varchar(50) NOT NULL,
  `serial_carro` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `alo` varchar(50) NOT NULL,
  `tipo_d` varchar(50) NOT NULL,
  `n_serial` varchar(50) NOT NULL,
  `marca_d` varchar(50) NOT NULL,
  `modelo_d` varchar(50) NOT NULL,
  `calibre` varchar(50) NOT NULL,
  `estatus` varchar(50) NOT NULL,
  `selec_div` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `rango` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fec_inir` varchar(15) NOT NULL,
  `fec_regr` varchar(15) NOT NULL,
  `dia_r` varchar(15) NOT NULL,
  `motivo_r` varchar(100) NOT NULL,
  `fec_iniv` varchar(15) NOT NULL,
  `fec_regv` varchar(15) NOT NULL,
  `dia_v` varchar(15) NOT NULL,
  `vac_sol` varchar(20) NOT NULL,
  `vac_ven` varchar(20) NOT NULL,
  `tipo_fun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`codigo`, `nombre`, `precio_compra`, `precio_venta`, `unidad`, `stock`, `created_user`, `created_date`, `updated_user`, `updated_date`, `p_nombre`, `cedula`, `credencial`, `p_apellido`, `fec_nac`, `edad`, `s_nombre`, `s_apellido`, `rif`, `genero`, `tel_cel`, `tel_hab`, `tel_emerg`, `municipio`, `calle`, `casa`, `parroquia`, `estado`, `ciudad`, `avenida`, `codigo_cp`, `serial_cp`, `estado_c`, `lugar_nac`, `correo_e`, `grado_inst`, `correo_i`, `tipo_s`, `medicamen`, `discapacidad`, `alergias`, `nota`, `notas`, `fec_ing`, `tiempo_s`, `ubic_fis`, `p_nombref`, `s_nombref`, `p_apellidof`, `s_apellidof`, `cedulaf`, `fec_nacf`, `edadf`, `generof`, `parentesco`, `estudiante`, `funcionario`, `inf_medf`, `tipo_v`, `placa`, `combustible`, `serial_carro`, `marca`, `modelo`, `color`, `alo`, `tipo_d`, `n_serial`, `marca_d`, `modelo_d`, `calibre`, `estatus`, `selec_div`, `cargo`, `rango`, `direccion`, `fec_inir`, `fec_regr`, `dia_r`, `motivo_r`, `fec_iniv`, `fec_regv`, `dia_v`, `vac_sol`, `vac_ven`, `tipo_fun`) VALUES
('B000001', '', 0, 0, '', 0, 1, '2019-07-10 14:40:25', 1, '2019-07-10 17:19:41', 'gdsfg', 45345, 345, 'gsd', '2019-07-16', '5', 'sgd', 'sdg', 345, '0', '5345', 435, 5435, 'df', 'sfd', 'fsdf', 'dsfsd', 'Amazonas', 'sdf', 'sdf', '', 0, 'Soltero/a', '', 'sdg@dc.com', 'Primaria', 'rfwer@c.om', '', '', '', '', '', '', '2019-07-17', '', 'fdsg', 'dsg', 'gsd', 'dg', 'sdg', 54, '2019-07-17', '43', 'Femenina', 'Hijo/a', 'Si', 'Si', 'sdg', '', '', 'Gasolina', '', '', '', '', '2023', '', '', '', '', '', 'Activo', 'Base de Datos', 'Adjunto', 'Asesor Juridico', '', '2019-07-18', '2019-07-18', '4', 'Operacion de cordales', '2019-07-25', '', '', '', '', 'Administrativo'),
('B000002', '', 0, 0, '', 0, 1, '2019-07-10 14:41:31', 1, '2019-07-10 14:41:31', 'dfg', 54, 35345, 'wet', '2019-07-16', '345', 'dfgf', '', 5345, '0', '435', 34534, 35345, 'dssa', 'sad', 'dsa', 'sadas', 'Amazonas', 'sad', 'dasd', '', 0, 'Soltero/a', '', 'ffwq@cc.om', 'Primaria', 'werew@c.com', '', '', '', '', '', '', '2019-07-15', '43', 'fsdf', 'dfs', 'dsg', 'sdg', 'gds', 21, '2019-07-11', '23', 'Femenina', 'Hijo/a', 'Si', 'Si', 'dsg', '', '', 'Gasolina', '', '', '', '', '2023', '', '', '', '', '', 'Activo', 'Base de Datos', 'Adjunto', 'Asesor Juridico', '', '', '', '', '', '2019-07-10', '', '', '', '', ''),
('B000003', '', 0, 0, '', 0, 1, '2019-07-10 14:43:53', 1, '2019-07-10 17:28:30', 'jo', 25852895, 0, 'oj', '2019-07-10', 'oj', 'j', 'oj', 0, '0', '65', 6546, 546, 'fds', 'sdf', 'dsf', 'dsf', 'Amazonas', 'dsf', 'dsf', '', 0, 'Soltero/a', '', 'ojo@ddc.com', 'Primaria', 'fsdfsd@fc.com', '', '', '', '', '', '', '2019-07-16', '', 'gdsfg', 'fsdf', 'dfsdf', 'sdfds', 'fdsf', 5435, '2019-07-11', '34', 'Femenina', 'Hijo/a', 'Si', 'Si', 'dsfsd', '', '', 'Gasolina', '', '', '', '', '2023', '', '', '', '', '', 'Activo', 'Base de Datos', 'Adjunto', 'Asesor Juridico', '', '', '', '', '', '2019-07-10', '2019-07-17', '5 dias', '', '', 'Administrativo'),
('B000004', '', 0, 0, '', 0, 1, '2019-07-10 14:45:56', 1, '2019-07-15 14:14:04', 'fsad', 234, 32432, 'asf', '2019-07-16', '20 AÃ±os', 'fsaf', 'fasd', 432, '0', '04140272330', 4534, 554, 'saf', 'fsa', 'asf', 'fsa', 'Amazonas', 'fas', 'af', '', 0, 'Soltero/a', '', 'fasasfa@dfc.om', 'Primaria', 'DMARTINEZ@CICPC.GOB.VE', '', '', '', '', '', '', '2019-07-23', '', 'Direccion de Tecnologia', 'sfd', 'dfsfds', 'fsdf', 'sdf', 3, '2019-07-11', '3', 'Femenina', 'Hijo/a', 'Si', 'Si', 'dsf', '', '', 'Gasolina', '', '', '', '', '2023', '', '', '', '', '', 'Activo', 'Base de Datos', 'Adjunto', 'Asesor Juridico', '', '', '', '', '', '2019-07-10', '2019-07-18', '3', '4', '4', 'Administrativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

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
-- Indices de la tabla `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cedula`) USING BTREE,
  ADD UNIQUE KEY `created_user` (`created_user`),
  ADD UNIQUE KEY `updated_user` (`updated_user`) USING BTREE;

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`codigo`) USING BTREE,
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

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
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

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
