-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 18:20:15
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferreteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(5) NOT NULL,
  `referencia` double NOT NULL,
  `nombre` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `caracteristica` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `precio` decimal(50,2) NOT NULL,
  `familia` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `enlace` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `imagen` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `referencia`, `nombre`, `caracteristica`, `marca`, `modelo`, `precio`, `familia`, `enlace`, `imagen`) VALUES
(1, 6255605731, 'Amoladora', '2200W 230mm', 'Makita', 'GA9020R', '162.50', 'electricas', '/amoladora.php', 'amoladora.jpg'),
(2, 5004364292, 'Asiento', 'Jardín 4 Piezas', 'Profer Green', 'C2-0168', '805.71', 'jardin', '/asiento.php', 'asientos.jpg'),
(3, 6255890878, 'Atornillador', 'Impacto 18V LXT 155Nm', 'Makita', 'DTD156Z', '119.30', 'electricas', '/atornillador.php', 'atornillador.jpg'),
(4, 5102100204, 'Azada', 'de acero para jardín', 'Bellota', '1-B', '18.92', 'manuales', '/azada.php', 'azada.jpg'),
(5, 5004036933, 'Banco', 'Jardín madera 122x68x81', 'Profer Green', 'BJ45', '67.59', 'jardin', '/banco.php\r\n', 'banco.jpg'),
(6, 43086280, 'Casco', 'para Obra Seguridad reforzado', 'Profer', '5RG', '7.71', 'epis', '/casco.php', 'casco.jpg'),
(7, 5004961057, 'Caseta', 'Acero Jardín 3x3', 'Profer Green', 'CH24', '352.85', 'jardin', '/cenador.php', 'caseta.jpg'),
(8, 43084900, 'Chaleco', 'Alta visibilidad', 'Starte', 'Profer', '3.56', 'epis', '/chaleco.php', 'chaleco.jpg'),
(9, 5533277940, 'Destornillador', 'Punta plana 4x150', 'Bahco', 'B194', '4.97', 'manuales', '/destornillador.php', 'destornillador.jpg'),
(10, 43080315, 'Gafas', 'Seguridad Transparente', 'Profer', 'GAF-401', '1.75', 'epis', '/gafas.php', 'gafas.jpg'),
(11, 1903977500, 'Guantes', 'Seguridad nitril', 'Showa', 'T-10', '4.32', 'epis', '/guantes.php', 'guantes.jpg'),
(12, 5004644241, 'Hacha', 'con mango', 'Bellota', '8130-1500N', '47.46', 'manuales', '/hacha.php', 'hacha.jpg'),
(13, 5102156201, 'Horca', 'tubo', 'Bellota', '901-5', '25.20', 'manuales', '/horca.php\r\n', 'horca.jpg'),
(14, 5004607308, 'Lijadora', 'Excentrica 125mm', 'Makita', 'BO5041', '183.07', 'electricas', '/lijadora.php', 'lijadora.jpg'),
(15, 6702832094, 'Llave', 'Fija plana', 'Bahco', '6M', '10.75', 'manuales', '/llavefija.php', 'llavefija.jpg'),
(16, 5102634174, 'Martillo', 'con mango de madera', 'Bellota', '8011D', '30.73', 'manuales', '/martillo.php', 'martillo.jpg'),
(17, 6255081658, 'Martillo', 'Ligero 780W 24mm', 'Makita', 'HR2470', '213.92', 'electricas', '/martilloligero.php', 'martilloligero.jpg'),
(18, 3086214, 'Mascara', 'protectora con filtro', 'Profer', '756A', '29.26', 'epis', '/mascara.php', 'mascara.jpg'),
(19, 5004213492, 'Mascarilla', 'FFP2 doble capa', 'Climax', 'PLEG', '3.24', 'epis', '/mascarilla.php', 'mascarilla.jpg'),
(20, 5004999203, 'Mesa Plegable', 'Resina 182x70', 'Profer Green', 'TY540', '63.86', 'jardin', '/mesa-plegable.php', 'mesa-plegable.jpg'),
(21, 6255808507, 'Mini Amoladora', '115mm 720W SAR', 'Makita', 'GA4530R', '80.23', 'electricas', '/miniamoladora.php', 'miniamoladora.jpg'),
(22, 5102501605, 'Pala', 'Cuadrada ', 'Bellota', '5502-4 MA', '35.87', 'manuales', '/pala.php', 'pala.jpg'),
(23, 5004154967, 'Protector Auditivo', 'para obra', 'Venitex', 'SNR21', '5.71', 'epis', '/protector.php', 'protector.jpg'),
(24, 625562037, 'Sierra', 'de Calar 650W 23mm', 'Makita', 'JV600V', '174.85', 'electricas', '/sierra.php', 'sierra.jpg'),
(25, 6255804622, 'Taladro', 'Combinado 18V LXT 62Nm', 'Makita', 'DHP482RME', '413.57', 'electricas', '/taladrocomb.php', 'taladrocomb.jpg'),
(26, 6255043212, 'Taladro', 'percutor 720W 13mm', 'Makita', 'HP2050', '174.85', 'electricas', '/taladroperc.php', 'taladroperc.jpg'),
(27, 5533327522, 'Tijera', 'Electrica Poda Recargable', 'Bahco', 'BCL22', '1361.25', 'tijeras', '/bahco.php', 'tijerabahco.jpg'),
(28, 5102690750, 'Tijera', 'Electrica Poda Recargable', 'Bellota', 'EPR137P', '789.89', 'tijeras', '/bellota.php', 'tijerabellota.jpg'),
(29, 1284000001, 'Tijera', 'Electrica Poda Recargable', 'Infaco', 'F3015', '1660.94', 'tijeras', '/infaco.php', 'tijerainfaco.jpg'),
(30, 6255699976, 'Tijera', 'Electrica Poda Recargable', 'Makita', 'DUP361P', '1252.35', 'tijeras', '/makita.php', 'tijeramakita.jpg'),
(31, 6702301156, 'Tijera', 'Poda 2 Manos', 'Bahco', 'P114-SL-50', '68.89', 'manuales', '/tijerapoda.php', 'tijerapoda.jpg'),
(32, 5872025856, 'Zapatilla', 'para obra', 'Diamante PLUS', 'PU/TPU', '55.64', 'epis', '/zapatillas.php', 'zapatillas.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `referencia` (`referencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
