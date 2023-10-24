-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-10-2023 a las 02:14:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `disqueria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `ruta`, `descripcion`) VALUES
(1, 'fotos-local/galeria-01.png', 'La vidriera del local'),
(2, 'fotos-local/galeria-02.png', 'Una pared con discos en display'),
(3, 'fotos-local/galeria-03.png', 'La estación para escuchar el disco recomendado'),
(4, 'fotos-local/galeria-04.png', 'Escaleras al primer piso'),
(5, 'fotos-local/galeria-05.png', 'El pasillo de las bateas'),
(6, 'fotos-local/galeria-06.png', 'Un disco en display'),
(7, 'fotos-local/galeria-07.png', 'Una mano sosteniendo dos LP'),
(8, 'fotos-local/galeria-08.png', 'Vista de las bateas'),
(9, 'fotos-local/galeria-09.png', 'La pared de discos del primer piso'),
(10, 'fotos-local/galeria-10.png', 'Un sillón con un grabador a cinta'),
(11, 'fotos-local/galeria-11.png', 'Un rincón con un poster de Bob Dylan'),
(12, 'fotos-local/galeria-12.png', 'Un combinado de los años setenta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `alt` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `artista` varchar(200) NOT NULL,
  `precio` float DEFAULT NULL,
  `descripcion` varchar(500) NOT NULL,
  `disco` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `alt`, `titulo`, `artista`, `precio`, `descripcion`, `disco`) VALUES
(1, 'Tapa del disco Folklore de Taylor Swift', 'Folklore', 'Taylor Swift', 12000, 'Octavo álbum de estudio, se aparta de los sonidos mainstream y más comerciales de los últimos trabajos de la cantante y se destaca por melodías armónicas e introspectivas, una interpretación lírica más trabajada y una utilización más consistente de la instrumentalización (principalmente piano, guitarra, violín y batería).', 'cards/folklore-ts.jpeg'),
(2, 'Tapa del disco Jack in the Box de J-Hope', 'Jack in the Box', 'J-Hope', 15700, 'Debut álbum del rapero surcoreano J-Hope cuyo concepto se basa en la historia de la Caja de Pandora, se discuten temáticas de pasión, ambición, humanidad, insguridad, sexualidad, éxito y ansiedad sobre el futuro. Principalmente influenciado por sonidos de old-school hip-hop, el album también contiene sonidos de pop, grunge y R&B.', 'cards/jitb-jhope.jpg'),
(3, 'Tapa del disco If you are feeling sinister de Belle and Sebastian', 'If you are feeling sinister', 'Belle & Sebastian', 19200, 'El álbum es ampliamente considerado como un clásico del género indie pop, y ha obtenido un culto entre los aficionados del grupo siendo el punto más alto de la carrera de Belle and Sebastian. El líder del grupo, Stuart Murdoch, ha declarado en entrevistas que este es probablemente su mejor colección de canciones.', 'cards/sinister-bs.jpg'),
(4, 'Tapa del disco This is Why de Paramore', 'This is Why', 'Paramore', 13100, 'Es el primer álbum de la banda en casi seis años. “Desde el primer día, Bloc Party fue la referencia número uno porque había tanta urgencia en su sonido que era diferente al fast punk o al pop punk. o similares, un fuerte muro de sonido de bandas emo que estaban sucediendo a principios de la década de 2000”.', 'cards/thisiswhy-paramore.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
