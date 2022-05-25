-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2022 a las 09:23:34
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerceartesanias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artesania`
--

CREATE TABLE `artesania` (
  `id_artesania` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `material` varchar(25) NOT NULL,
  `color_predominante` varchar(25) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad_vender` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `img` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `oferta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artesano`
--

CREATE TABLE `artesano` (
  `id_artesano` int(11) NOT NULL,
  `nombre_artesano` varchar(50) NOT NULL,
  `apellidos_artesano` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `contrasenia_artesano` varchar(50) NOT NULL,
  `id_direccion` int(11) NOT NULL,
  `id_tarjeta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente_usuario` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellidos_cliente` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `contrasenia_usuario` varchar(200) NOT NULL,
  `id_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente_usuario`, `nombre_cliente`, `apellidos_cliente`, `correo_electronico`, `img`, `contrasenia_usuario`, `id_direccion`) VALUES
(1, 'luis daniel', 'solano vargaz', 'mludan95@gmai.com', 'sin/Img', '1e62df357576d6d53f3dcdca02ce93da', 1),
(12, 'l', 'l', 'l@l.com', '../img/imgPerfiles_Usuarios//d71e2a577b.jpg', '$2y$10$pLU59toPSZkvXYnTeXkI/OPWeFkvLw.JxszMFScLNauNANbPyOItu', 1),
(13, 'd', 'd', 'd@d.com', '../img/imgPerfiles_Usuarios//2691f5da63.jpg', '$2y$10$tP2Ua3V7CjAdDUK8ZWDY.eGw.MMFo3celesl/3Zt7Rlqv6X.62ezS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_artesania`
--

CREATE TABLE `detalle_artesania` (
  `id_artesano` int(11) NOT NULL,
  `id_artesania` int(11) NOT NULL,
  `cantidad_agregar` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_venta` int(11) NOT NULL,
  `id_artesania` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `codigo_postal` varchar(5) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id_direccion`, `estado`, `municipio`, `localidad`, `calle`, `numero`, `codigo_postal`, `telefono`) VALUES
(1, 'Oaxaca', 'Villa de Zaachila', 'Col. Guillermo Gonzalez Guardado', 'Emiliano Zapata', 'S/n', '71318', '9515444485'),
(2, 'oax', 'etla', 'villa', 'zapata', '23', '12345', '1234567890'),
(7, 'Oaxaca', 'Asunción Cacalotepec', 'Villa De Zaachila', 'zapata', '14', '71318', '9515444485'),
(8, 'Chihuahua', 'Aldama', 'Villa De Zaachila', 'zap', '11', '71318', '9515444485'),
(9, 'Oaxaca', 'Asunción Cuyotepeji', 'Villa De Zaachila', 'sabino', '99', '71318', '9515444485'),
(10, 'Morelos', 'Mazatepec', 'Villa De Zaachila', 'paz', '78', '71318', '9515444485'),
(11, 'Morelos', 'Mazatepec', 'Villa De Zaachila', 'paz', '78', '71318', '9515444485'),
(12, 'Michoacan', 'Cherán', 'Villa De Zaachila', 'enero', '78', '71389', '9515444485');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `id_tarjeta` int(11) NOT NULL,
  `numero_tarjeta` varchar(16) NOT NULL,
  `nombre_titular` varchar(50) NOT NULL,
  `fecha_caducidad_mes` varchar(2) NOT NULL,
  `fecha_caducidad_anio` varchar(4) NOT NULL,
  `numero_seguridad` varchar(50) NOT NULL,
  `entidad_bancaria` varchar(50) NOT NULL,
  `tipo_tarjeta` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`id_tarjeta`, `numero_tarjeta`, `nombre_titular`, `fecha_caducidad_mes`, `fecha_caducidad_anio`, `numero_seguridad`, `entidad_bancaria`, `tipo_tarjeta`) VALUES
(1, '5522448899776655', 'luis daniel', '02', '2022', '0a113ef6b61820daa5611c870ed8d5ee', 'Banamex', 'debito'),
(6, '465465465465564', 'luisdaniels8', '04', '2026', '698d51a19d8a121ce581499d7b701668', 'BBVA', 'Debito'),
(7, '3232333322332', 'luisdaniels8', '06', '2033', '698d51a19d8a121ce581499d7b701668', 'HSBC', 'Credito'),
(8, '1245789632145678', 'luisdaniels8', '06', '2033', 'c15da1f2b5e5ed6e6837a3802f0d1593', 'HSBC', 'Credito'),
(9, '525727527525727', 'luisdaniels8', '04', '2031', 'f1c1592588411002af340cbaedd6fc33', 'Inbursa', 'Debito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_cliente_usuario` int(11) NOT NULL,
  `id_tarjeta` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artesania`
--
ALTER TABLE `artesania`
  ADD PRIMARY KEY (`id_artesania`);

--
-- Indices de la tabla `artesano`
--
ALTER TABLE `artesano`
  ADD PRIMARY KEY (`id_artesano`),
  ADD KEY `id_direccion` (`id_direccion`),
  ADD KEY `id_tarjeta` (`id_tarjeta`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente_usuario`),
  ADD KEY `id_direccion` (`id_direccion`);

--
-- Indices de la tabla `detalle_artesania`
--
ALTER TABLE `detalle_artesania`
  ADD KEY `id_artesano` (`id_artesano`),
  ADD KEY `id_artesania` (`id_artesania`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_artesania` (`id_artesania`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`id_tarjeta`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_tarjeta` (`id_tarjeta`),
  ADD KEY `id_cliente_usuario` (`id_cliente_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artesania`
--
ALTER TABLE `artesania`
  MODIFY `id_artesania` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `artesano`
--
ALTER TABLE `artesano`
  MODIFY `id_artesano` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id_tarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artesano`
--
ALTER TABLE `artesano`
  ADD CONSTRAINT `artesano_ibfk_1` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id_direccion`),
  ADD CONSTRAINT `artesano_ibfk_2` FOREIGN KEY (`id_tarjeta`) REFERENCES `tarjeta` (`id_tarjeta`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id_direccion`);

--
-- Filtros para la tabla `detalle_artesania`
--
ALTER TABLE `detalle_artesania`
  ADD CONSTRAINT `detalle_artesania_ibfk_1` FOREIGN KEY (`id_artesano`) REFERENCES `artesano` (`id_artesano`),
  ADD CONSTRAINT `detalle_artesania_ibfk_2` FOREIGN KEY (`id_artesania`) REFERENCES `artesania` (`id_artesania`);

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_artesania`) REFERENCES `artesania` (`id_artesania`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_tarjeta`) REFERENCES `tarjeta` (`id_tarjeta`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_cliente_usuario`) REFERENCES `cliente` (`id_cliente_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
