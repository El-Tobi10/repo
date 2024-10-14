-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2024 a las 23:14:13
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bestgamer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(20) NOT NULL,
  `genero` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `genero`) VALUES
(1, '2D'),
(2, 'Accion'),
(3, 'Aventura'),
(4, 'Carreras'),
(5, 'Deportes'),
(6, 'Estrategia'),
(7, 'Shooter'),
(8, 'Guerra'),
(9, 'Lucha'),
(10, 'Multijugador'),
(11, 'Mundo Abierto'),
(12, 'Rol'),
(13, 'Simulacion'),
(14, 'Supervivencia'),
(15, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_juegos`
--

CREATE TABLE `genero_juegos` (
  `id_gen_juego` int(50) NOT NULL,
  `id_juego` int(30) NOT NULL,
  `id_genero` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `genero_juegos`
--

INSERT INTO `genero_juegos` (`id_gen_juego`, `id_juego`, `id_genero`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 10),
(4, 1, 11),
(5, 2, 2),
(6, 2, 3),
(7, 2, 11),
(8, 3, 2),
(9, 3, 3),
(10, 3, 11),
(11, 4, 2),
(12, 4, 3),
(13, 4, 10),
(14, 4, 11),
(15, 5, 2),
(16, 5, 3),
(17, 5, 7),
(18, 5, 10),
(19, 5, 11),
(20, 5, 12),
(21, 5, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(30) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `lanzamiento` date NOT NULL,
  `desarrollador` varchar(60) NOT NULL,
  `img_portada` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `id_ReqMin` int(60) NOT NULL,
  `id_ReqRec` int(60) NOT NULL,
  `link_trailer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `titulo`, `lanzamiento`, `desarrollador`, `img_portada`, `descripcion`, `id_ReqMin`, `id_ReqRec`, `link_trailer`) VALUES
(1, 'Grand Theft Auto V', '2014-11-18', 'Rockstar Games', '', 'Grand Theft Auto V o GTA V es un juego de acción-aventura de mundo abierto desarrollado por la compañía británica Rockstar North y distribuido por Rockstar Games.\r\n\r\nNueve años después de un atraco frustrado en Ludendorff (North Yankton), que dejó a uno de sus perpetrantes muerto, otro bajo arresto y obligó a un tercero a la clandestinidad, el ex ladrón de bancos, Michael Townley, fue tomado como muerto en North Yankton y ha sido puesto bajo protección de testigos por el agente corrupto del FIB Dave Norton, amigo íntimo del mismo, trasladándolo así con su familia a Los Santos (San Andreas) con una nueva identidad: Michael De Santa.', 1, 1, ''),
(2, 'Red Dead Redemption 2', '2018-10-26', 'Rockstar Games', '', 'Con más de 175 premios al Juego del año y más de 250 valoraciones\r\nRed Dead Redemption 2 en la America de 1899 contando la épica historia de Arthur Morgan y la banda de Van der Linde se ven obligados a huir. Con agentes federales y los mejores cazarrecompensas de la nación pisándoles los talones, la banda deberá atracar, robar y luchar para sobrevivir en su camino por el escabroso territorio del corazón de América. Mientras las divisiones internas aumentan y amenazan con separarlos a todos, Arthur deberá elegir entre sus propios ideales y la lealtad a la banda que lo vio crecer.', 2, 2, ''),
(3, 'The Elder Scrolls V: Skyrim', '2011-11-11', 'Bethesda Game Studios', '', 'The Elder Scrolls V Skyrim es un videojuego de rol de acción del tipo mundo abierto desarrollado por Bethesda Game Studios.\r\nLa historia de Skyrim se centra en los esfuerzos del personaje del jugador para derrotar a Alduin, un dragón que, según la profecía, destruirá el mundo. La trama está fechada doscientos años después de los sucesos de Obliviony tiene lugar en la provincia ficticia de Skyrim. En el transcurso de la partida, el jugador completa misiones y hace evolucionar a su personaje gracias a la mejora de sus habilidades. A diferencia de los juegos anteriores de Elder Scrolls, en Skyrim no se requiere que el usuario seleccione un tipo de personaje al inicio del juego, resolviendo así el problema que el equipo de desarrolladores veía desde versiones anteriores.', 3, 3, ''),
(4, 'Borderlands 2', '2012-09-18', 'Gearbox Software', '', 'Una nueva era de disparos y saqueos está a punto de comenzar. Juega como uno de los cuatro nuevos buscadores de la Cámara y enfréntate a legiones de nuevas criaturas, psicópatas y al villano que las controla, Jack el Guapo. Haz nuevos amigos, equípalos con un cillón de armas y pelea a su lado en partidas cooperativas de 4 jugadores, en una implacable búsqueda de venganza y redención a través de un desconocido e impredecible planeta.', 4, 4, ''),
(5, 'Cyberpunk 2077', '2020-12-10', 'CD Projekt Red', '', 'Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto ambientado en la megalópolis de Night City, donde te pondrás en la piel de un mercenario o una mercenaria ciberpunk y vivirás su lucha a vida o muerte por la supervivencia. Mejorado y con contenido nuevo adicional gratuito. Personaliza tu personaje y tu estilo de juego a medida que aceptas trabajos, te labras una reputación y desbloqueas mejoras. Las relaciones que forjes y las decisiones que tomes darán forma al mundo que te rodea. Aquí nacen las leyendas. ¿Cuál será la tuya?', 5, 5, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos_minimos`
--

CREATE TABLE `requisitos_minimos` (
  `id_reqMin` int(60) NOT NULL,
  `so` varchar(60) NOT NULL,
  `proce` varchar(60) NOT NULL,
  `ram` int(20) NOT NULL,
  `video` varchar(60) NOT NULL,
  `audio` varchar(60) NOT NULL,
  `espacio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `requisitos_minimos`
--

INSERT INTO `requisitos_minimos` (`id_reqMin`, `so`, `proce`, `ram`, `video`, `audio`, `espacio`) VALUES
(1, 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Servi', ' Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom', 4, 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)', 'DirectX 10', 65),
(2, 'Windows 10 - 64-bit', 'Intel® Core™ i5-2500K / AMD FX-6300', 8, 'Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB', 'Direct X Compatible', 150),
(3, 'Windows 7/8.1/10 (requiere versión de 64 bits)', 'Intel Core i5-750/AMD Phenom II X4-945', 8, 'NVIDIA GTX 470 de 1 GB/AMD HD 7870 de 2 GB', 'Direct X Compatible', 12),
(4, 'Windows XP SP3', 'Dual Core a 2.4 GHz', 2, 'Nvidia GeForce 8500 / ATI Radeon HD 2600', 'DirectX 9.0c', 13),
(5, '64-bit Windows 10', 'Core i7-6700 or Ryzen 5 1600', 12, 'GeForce GTX 1060 6GB or Radeon RX 580 8GB or Arc A380', 'DirectX Version 12', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos_recomendados`
--

CREATE TABLE `requisitos_recomendados` (
  `id_reqRec` int(60) NOT NULL,
  `so` varchar(60) NOT NULL,
  `proce` varchar(60) NOT NULL,
  `ram` int(20) NOT NULL,
  `video` varchar(60) NOT NULL,
  `audio` varchar(60) NOT NULL,
  `espacio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `requisitos_recomendados`
--

INSERT INTO `requisitos_recomendados` (`id_reqRec`, `so`, `proce`, `ram`, `video`, `audio`, `espacio`) VALUES
(1, 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Servi', 'Intel Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ', 8, 'NVIDIA GTX 660 2GB / AMD HD7870 2GB', 'DirectX 10 compatible', 65),
(2, 'Windows 10 - 64-bit', 'Intel® Core™ i7-4770K / AMD Ryzen 5 1500X', 12, 'Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB', 'Direct X Compatible', 150),
(3, 'Windows 7/8.1/10 (requiere versión de 64 bits)', 'Intel Core i5-2400/AMD FX-8320', 8, 'NVIDIA GTX 780 de 3 GB/AMD R9 290 de 4 GB', 'DirectX Compatible', 12),
(4, 'Windows XP SP3 / Vista / Win 7', 'Nvidia GeForce GTX 560 / ATI Radeon HD 5850', 2, 'Nvidia GeForce GTX 560 / ATI Radeon HD 5850', 'DirectX 9.0c', 20),
(5, '64-bit Windows 10', 'Core i7-12700 or Ryzen 7 7800X3D', 16, 'GeForce RTX 2060 SUPER or Radeon RX 5700 XT or Arc A770', 'DirectX Version 12', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(10) NOT NULL,
  `rol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(30) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `contrasenia` varchar(60) NOT NULL,
  `id_rol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `mail`, `usuario`, `contrasenia`, `id_rol`) VALUES
(1, 'tobias@123.com', 'tobi', '123', 2),
(2, 'tobias@hotmail.com', 'el-tobi123', '123', 2),
(3, 'agus@123.com', 'agusLame', 'si123', 2),
(4, 'tobiasalfonso@outlook.com', 'El_Tobi10', '230110', 2),
(8, 'tobias@bestgamer.com', 'elpibardo', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero_juegos`
--
ALTER TABLE `genero_juegos`
  ADD PRIMARY KEY (`id_gen_juego`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`),
  ADD KEY `id_ReqMin` (`id_ReqMin`),
  ADD KEY `id_ReqRec` (`id_ReqRec`);

--
-- Indices de la tabla `requisitos_minimos`
--
ALTER TABLE `requisitos_minimos`
  ADD PRIMARY KEY (`id_reqMin`);

--
-- Indices de la tabla `requisitos_recomendados`
--
ALTER TABLE `requisitos_recomendados`
  ADD PRIMARY KEY (`id_reqRec`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero_juegos`
--
ALTER TABLE `genero_juegos`
  MODIFY `id_gen_juego` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `requisitos_minimos`
--
ALTER TABLE `requisitos_minimos`
  MODIFY `id_reqMin` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `requisitos_recomendados`
--
ALTER TABLE `requisitos_recomendados`
  MODIFY `id_reqRec` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
