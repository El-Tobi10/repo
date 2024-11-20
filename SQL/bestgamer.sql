-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2024 a las 20:10:53
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
-- Estructura de tabla para la tabla `capturas`
--

CREATE TABLE `capturas` (
  `id_captura` int(11) NOT NULL,
  `cap1` varchar(200) NOT NULL,
  `cap2` varchar(200) NOT NULL,
  `cap3` varchar(200) NOT NULL,
  `cap4` varchar(200) NOT NULL,
  `id_juego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `capturas`
--

INSERT INTO `capturas` (`id_captura`, `cap1`, `cap2`, `cap3`, `cap4`, `id_juego`) VALUES
(1, 'Posible_Tatuaje.png', 'Posible_Tatuaje2.png', 'Ryan_Gosling.webp', 'Screenshot_20240126-134624-631.png', 0),
(2, 'ayudame.jpg', 'b33d6c0e88fbd11972c92c6953e6918f.jpg', 'Captura de pantalla 2024-03-23 011220.png', 'descarga.webp', 0),
(3, 'Posible_Tatuaje.png', 'Posible_Tatuaje2.png', 'Ryan_Gosling.webp', 'Screenshot_20240126-134624-631.png', 0),
(4, 'Screenshot_20240126-134624-631.png', 'SilvioMinecraft.jpeg', 'tomy fierro.jpeg', 'UltimaVision.jpg', 0),
(5, 'LoUltimoDelOjoDerecho.png', 'Posible_Tatuaje.png', 'Posible_Tatuaje2.png', 'Ryan_Gosling.webp', 7),
(6, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 10);

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
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(30) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `lanzamiento` date NOT NULL,
  `desarrollador` varchar(60) NOT NULL,
  `img_portada` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `generos` varchar(150) NOT NULL,
  `id_reqMin` int(60) NOT NULL,
  `id_reqRec` int(60) NOT NULL,
  `link_trailer` varchar(200) NOT NULL,
  `id_links` int(11) NOT NULL,
  `id_critic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `titulo`, `lanzamiento`, `desarrollador`, `img_portada`, `descripcion`, `generos`, `id_reqMin`, `id_reqRec`, `link_trailer`, `id_links`, `id_critic`) VALUES
(1, 'Prueba1', '2024-01-01', 'Rockstar Games', '', 'vdsbjvbsbvks', 'Accion/Aventura/Carreras', 0, 0, 'https://www.youtube.com/watch?v=yUPwm8ZCJTQ', 0, 0),
(2, 'Prueba2', '2021-01-20', 'From Software', '', 'Hola, a gaby le gustan los hombres', '2D/Estrategia/Multijugador', 0, 0, 'https://www.youtube.com/watch?v=jPU_uZjbRV4', 0, 0),
(3, 'Prueba3', '2021-01-20', 'From Software', '', 'Hola, a gaby le gustan los hombres', '2D/Estrategia/Multijugador', 3, 3, 'https://www.youtube.com/watch?v=jPU_uZjbRV4', 0, 0),
(4, 'Prueba4', '2017-05-11', 'Rockstar Games', '', 'Chuco pelado', 'Estrategia/Guerra/Multijugador/Mundo Abierto', 4, 4, 'https://www.youtube.com/watch?v=fSHoePrnmMw', 0, 0),
(5, 'Prueba5', '2020-11-26', 'Bethesda Game Studios', 'default.png', 'Chuco pelado', 'Accion/Rol/Simulacion/Supervivencia', 5, 5, 'https://www.youtube.com/watch?v=fSHoePrnmMw', 0, 0),
(6, 'Hola Que Hace', '2021-05-11', 'Rockstar Games', 'Captura de pantalla 2024-03-23 011220.png', 'Bauti medio raro', 'Accion/Aventura/Terror', 6, 6, 'https://www.youtube.com/watch?v=jPU_uZjbRV4', 0, 0),
(7, 'Gabi Se La Come', '2018-06-20', 'Rockstar Games', 'Ryan_Gosling.webp', 'Hola buenas', 'Accion/Aventura/Deportes', 7, 7, 'https://www.youtube.com/watch?v=3qXR7dDfZWM&t=633s', 0, 0),
(8, 'Oni-Chuco (UwU)', '2018-06-20', 'Rockstar Games', 'UltimaVision.jpg', 'Guts, tambíen conocido por su epíteto del \"Espadachín Negro\", es el protagonista de Berserk. Es un antiguo mercenario marcado que viaja por el mundo en una constante lucha interna entre perseguir su venganza y proteger a sus seres queridos.', 'Accion/Aventura/Guerra/Lucha', 8, 8, 'https://www.youtube.com/watch?v=3qXR7dDfZWM&t=633s', 0, 0),
(9, 'Prueba3000', '2016-07-14', 'From Software', 'SilvioMinecraft.jpeg', 'Agus puto', 'Estrategia/Guerra/Multijugador', 9, 9, 'https://www.youtube.com/watch?v=jYM_UDKCx7U', 0, 0),
(10, 'PruebaPaginacion', '2024-11-27', 'From Software', 'guts.jpg', 'Esta es una prueba para la paginacion', 'Shooter/Guerra/Simulacion', 12, 12, 'https://www.youtube.com/watch?v=yUPwm8ZCJTQ', 3, 3),
(11, 'Grand Theft Auto V', '2014-11-18', 'Rockstar Games', 'grand-theft-auto-v.jpg', 'Grand Theft Auto V o GTA V es un juego de acción-aventura de mundo abierto desarrollado por la compañía británica\r\n        Rockstar North y distribuido por Rockstar Games.\r\n    Nueve años después de un atraco frustrado en Ludendorff (North Yankton), que dejó a uno de sus perpetrantes\r\n        muerto, otro bajo arresto y obligó a un tercero a la clandestinidad, el ex ladrón de bancos, Michael Townley,\r\n        fue tomado como muerto en North Yankton y ha sido puesto bajo protección de testigos por el agente corrupto del\r\n        FIB Dave Norton, amigo íntimo del mismo, trasladándolo así con su familia a Los Santos (San Andreas) con una\r\n        nueva identidad: Michael De Santa.', 'Accion/Aventura/Multijugador/Mundo Abierto', 13, 13, 'https://www.youtube.com/embed/QkkoHAzjnUs', 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linkcompra`
--

CREATE TABLE `linkcompra` (
  `id_links` int(11) NOT NULL,
  `steam` varchar(100) NOT NULL,
  `precio_steam` float NOT NULL,
  `epic` varchar(100) NOT NULL,
  `precio_epic` float NOT NULL,
  `xbox` varchar(100) NOT NULL,
  `precio_xbox` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `linkcompra`
--

INSERT INTO `linkcompra` (`id_links`, `steam`, `precio_steam`, `epic`, `precio_epic`, `xbox`, `precio_xbox`) VALUES
(1, 'https://store.steampowered.com/app/1144200/Ready_or_Not/', 0, 'https://store.epicgames.com/es-ES/p/the-coma-2b-catacomb-c3842a', 0, 'https://www.xbox.com/es-ar/games/store/the-bridge-curse-2-the-extrication/9NF5SCWM3MF3', 0),
(2, 'https://store.steampowered.com/app/1144200/Ready_or_Not/', 0, 'https://store.epicgames.com/es-ES/p/the-coma-2b-catacomb-c3842a', 0, 'https://www.xbox.com/es-ar/games/store/the-bridge-curse-2-the-extrication/9NF5SCWM3MF3', 0),
(3, 'https://store.steampowered.com/app/1144200/Ready_or_Not/', 0, 'https://store.epicgames.com/es-ES/p/the-coma-2b-catacomb-c3842a', 0, 'https://www.xbox.com/es-ar/games/store/the-bridge-curse-2-the-extrication/9NF5SCWM3MF3', 0),
(4, 'https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/', 39.98, 'https://store.epicgames.com/es-ES/p/grand-theft-auto-v', 29.99, 'https://www.xbox.com/es-ar/games/store/grand-theft-auto-v-edicion-premium/c496clvxmjp8', 29.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metacritic`
--

CREATE TABLE `metacritic` (
  `id_critic` int(11) NOT NULL,
  `score` smallint(6) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `metacritic`
--

INSERT INTO `metacritic` (`id_critic`, `score`, `link`) VALUES
(1, 95, 'https://www.metacritic.com/game/dragon-age-the-veilguard/'),
(2, 95, 'https://www.metacritic.com/game/dragon-age-the-veilguard/'),
(3, 95, 'https://www.metacritic.com/game/dragon-age-the-veilguard/'),
(4, 97, 'https://www.metacritic.com/game/grand-theft-auto-v/');

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
(1, 'Windows 10 or higher', 'i3 or higher', 4, 'GeForce 960', 'Directx 11', 25),
(2, 'Windows 10 or higher', 'i3 or higher', 2, 'GeForce 4060', 'Directx 12', 50),
(3, 'Windows 10 or higher', 'i3 or higher', 2, 'GeForce 4060', 'Directx 12', 50),
(4, 'Windows 11', 'Ryzen 7', 8, 'GeForce 4060', 'Directx 12', 15),
(5, 'Windows 11', 'Ryzen 7', 8, 'GeForce 4060', 'Directx 12', 15),
(6, 'Windows 11', 'i3 or higher', 4, 'GeForce 960', 'Directx 11', 26),
(7, 'Windows 10 or higher', 'i3 or higher', 4, 'GeForce 4060', 'Directx 11', 4),
(8, 'Windows 10 or higher', 'i3 or higher', 4, 'GeForce 4060', 'Directx 11', 4),
(9, 'Windows 10 or higher', 'i3 or higher', 4, 'GeForce 4060', 'Directx 11', 5),
(10, 'Windows 10 or higher', 'Ryzen 7', 4, 'GeForce 4060', 'Directx 12', 25),
(11, 'Windows 10 or higher', 'Ryzen 7', 4, 'GeForce 4060', 'Directx 12', 25),
(12, 'Windows 10 or higher', 'Ryzen 7', 4, 'GeForce 4060', 'Directx 12', 25),
(13, 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Servi', 'Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom ', 4, 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB(DX 10, 10.1, 11)', 'DirectX 10', 65);

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
(1, 'Windows 10 or higher', 'i3 or higher', 8, 'GeForce 960', 'Directx 11', 25),
(2, 'Windows 10 or higher', 'i3 or higher', 16, 'GeForce 4060', 'Directx 12', 50),
(3, 'Windows 10 or higher', 'i3 or higher', 16, 'GeForce 4060', 'Directx 12', 50),
(4, 'Windows 11', 'Ryzen 7', 16, 'GeForce 4060', 'Directx 12', 15),
(5, 'Windows 11', 'Ryzen 7', 16, 'GeForce 4060', 'Directx 12', 15),
(6, 'Windows 11', 'Ryzen 7', 8, 'GeForce 4060', 'Directx 11', 26),
(7, 'Windows 10 or higher', 'i3 or higher', 4, 'GeForce 4060', 'Directx 12', 4),
(8, 'Windows 10 or higher', 'i3 or higher', 4, 'GeForce 4060', 'Directx 12', 4),
(9, 'Windows 10 or higher', 'i3 or higher', 8, 'GeForce 4060', 'Directx 11', 56),
(10, 'Windows 11', 'Ryzen 7', 8, 'GeForce 4060', 'Directx 12', 25),
(11, 'Windows 11', 'Ryzen 7', 8, 'GeForce 4060', 'Directx 12', 25),
(12, 'Windows 11', 'Ryzen 7', 8, 'GeForce 4060', 'Directx 12', 25),
(13, 'Windows 8.1 64 Bit, Windows 8 64 Bit,Windows 7 64 Bit Servic', 'Intel Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ', 8, 'NVIDIA GTX 660 2GB / AMD HD7870 2GB', 'DirectX 10 compatible', 65);

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
(2, 'tobias@hotmail.com', 'gaby', '123', 1),
(3, 'agus@123.com', 'agusLame', 'si123', 2),
(4, 'tobiasalfonso@outlook.com', 'El_Tobi10', '230110', 2),
(8, 'tobias@bestgamer.com', 'Tobias_10', '1234', 1),
(9, 'soychuconeitor@skibidymail', 'lautiUWU', '12345678', 2),
(10, 'anana@nazi.com', 'seuz', 'agusselacome', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capturas`
--
ALTER TABLE `capturas`
  ADD PRIMARY KEY (`id_captura`),
  ADD KEY `id_juego` (`id_juego`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`),
  ADD KEY `id_ReqMin` (`id_reqMin`),
  ADD KEY `id_ReqRec` (`id_reqRec`),
  ADD KEY `id_links` (`id_links`),
  ADD KEY `id_critic` (`id_critic`);

--
-- Indices de la tabla `linkcompra`
--
ALTER TABLE `linkcompra`
  ADD PRIMARY KEY (`id_links`);

--
-- Indices de la tabla `metacritic`
--
ALTER TABLE `metacritic`
  ADD PRIMARY KEY (`id_critic`);

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
-- AUTO_INCREMENT de la tabla `capturas`
--
ALTER TABLE `capturas`
  MODIFY `id_captura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `linkcompra`
--
ALTER TABLE `linkcompra`
  MODIFY `id_links` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `metacritic`
--
ALTER TABLE `metacritic`
  MODIFY `id_critic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `requisitos_minimos`
--
ALTER TABLE `requisitos_minimos`
  MODIFY `id_reqMin` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `requisitos_recomendados`
--
ALTER TABLE `requisitos_recomendados`
  MODIFY `id_reqRec` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
