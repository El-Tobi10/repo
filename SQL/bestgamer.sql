-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2024 a las 06:10:35
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
(14, 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 'cap5.jpg', 14),
(15, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jfif', 17),
(16, 'cap1.jfif', 'cap2.jfif', 'cap3.jfif', 'cap4.jfif', 18),
(17, 'cap1.jfif', 'cap2.jfif', 'cap3.jfif', 'cap4.jfif', 19),
(18, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 20),
(20, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 21),
(21, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 22),
(22, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 23),
(23, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 24),
(24, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 25),
(25, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 26),
(26, 'cap1.jpg', 'cap2.jpg', 'cap3.jpg', 'cap4.jpg', 27),
(27, 'cap4.jpg', 'cap3.jpg', 'cap2.jpg', 'cap1.jpg', 28),
(28, 'cap4.jpg', 'cap3.jpg', 'cap2.jpg', 'cap1.jpg', 29),
(29, 'cap4.jpg', 'cap3.jpg', 'cap2.jpg', 'cap1.jpg', 30),
(30, 'cap4.jpg', 'cap3.jpg', 'cap2.jpg', 'cap1.jpg', 31),
(31, 'cap4.jpg', 'cap3.jpg', 'cap2.jpg', 'cap1.jpg', 32),
(32, 'cap4.jpg', 'cap3.jpg', 'cap2.jpg', 'cap1.jpg', 33),
(33, 'cap4.jpg', 'cap3.jpg', 'cap2.jpg', 'cap1.jpg', 34);

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
(15, 'Terror'),
(16, 'Hack and Slash'),
(17, 'Soulslike');

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
(11, 'Grand Theft Auto V', '2014-11-18', 'Rockstar Games', 'grand-theft-auto-v.jpg', 'Grand Theft Auto V o GTA V es un juego de acción-aventura de mundo abierto desarrollado por la compañía británica\r\n        Rockstar North y distribuido por Rockstar Games.\r\n    Nueve años después de un atraco frustrado en Ludendorff (North Yankton), que dejó a uno de sus perpetrantes\r\n        muerto, otro bajo arresto y obligó a un tercero a la clandestinidad, el ex ladrón de bancos, Michael Townley,\r\n        fue tomado como muerto en North Yankton y ha sido puesto bajo protección de testigos por el agente corrupto del\r\n        FIB Dave Norton, amigo íntimo del mismo, trasladándolo así con su familia a Los Santos (San Andreas) con una\r\n        nueva identidad: Michael De Santa.', 'Accion/Aventura/Multijugador/Mundo Abierto', 13, 13, 'https://www.youtube.com/embed/QkkoHAzjnUs', 4, 4),
(12, 'Cyberpunk 2077', '2020-12-10', 'CD Projekt Red', 'cyberpunk-2077-horizontal.jpg', 'Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto ambientado en la megalópolis de Night City, donde te pondrás en la piel de un mercenario o una mercenaria ciberpunk y vivirás su lucha a vida o muerte por la supervivencia. Mejorado y con contenido nuevo adicional gratuito. Personaliza tu personaje y tu estilo de juego a medida que aceptas trabajos, te labras una reputación y desbloqueas mejoras. Las relaciones que forjes y las decisiones que tomes darán forma al mundo que te rodea. Aquí nacen las leyendas. ¿Cuál será la tuya?', 'Accion/Aventura/Shooter/Mundo Abierto', 14, 14, 'https://www.youtube.com/embed/8X2kIfS6fb8', 5, 5),
(14, 'Red Dead Redemption 2', '2018-10-26', 'Rockstar Games', 'red-dead-redemption-2-horizontal.jpg', 'Con más de 175 premios al Juego del año y más de 250 valoraciones\r\n        Red Dead Redemption 2 en la America de 1899 contando la épica historia de Arthur Morgan y la banda de Van der Linde se ven obligados a huir. Con agentes federales y los mejores cazarrecompensas de la nación pisándoles los talones, la banda deberá atracar, robar y luchar para sobrevivir en su camino por el escabroso territorio del corazón de América. Mientras las divisiones internas aumentan y amenazan con separarlos a todos, Arthur deberá elegir entre sus propios ideales y la lealtad a la banda que lo vio crecer.', 'Accion/Aventura/Shooter/Mundo Abierto/Simulacion', 16, 16, 'https://www.youtube.com/embed/F63h3v9QV7w', 7, 7),
(17, 'The Elder Scrolls V Skyrim', '2011-11-11', 'Bethesda Game Studios', 'portada_Skyrim.jpg', 'The Elder Scrolls V Skyrim es un videojuego de rol de acción del tipo mundo abierto desarrollado por Bethesda Game Studios.\r\n    La historia de Skyrim se centra en los esfuerzos del personaje del jugador para derrotar a Alduin, un dragón que, según la profecía, destruirá el mundo. La trama está fechada doscientos años después de los sucesos de Obliviony tiene lugar en la provincia ficticia de Skyrim. En el transcurso de la partida, el jugador completa misiones y hace evolucionar a su personaje gracias a la mejora de sus habilidades. A diferencia de los juegos anteriores de Elder Scrolls, en Skyrim no se requiere que el usuario seleccione un tipo de personaje al inicio del juego, resolviendo así el problema que el equipo de desarrolladores veía desde versiones anteriores.', 'Accion/Aventura/Mundo Abierto', 19, 19, 'https://www.youtube.com/embed/lTjRZ__-278', 10, 10),
(18, 'Borderlands 2', '2012-09-18', 'Gearbox Software', 'horizontal.jpg', 'Una nueva era de disparos y saqueos está a punto de comenzar. Juega como uno de los cuatro nuevos buscadores de la Cámara y enfréntate a legiones de nuevas criaturas, psicópatas y al villano que las controla, Jack el Guapo. Haz nuevos amigos, equípalos con un cillón de armas y pelea a su lado en partidas cooperativas de 4 jugadores, en una implacable búsqueda de venganza y redención a través de un desconocido e impredecible planeta.', 'Accion/Aventura/Shooter/Multijugador/Mundo Abierto', 20, 20, 'https://www.youtube.com/embed/5TW0wJTFLiw', 11, 11),
(19, 'Black Myth Wukong', '2024-08-19', 'Game Science', 'Black-Myth-Wukong-title-logo.jpg', 'Black Myth: Wukong es un RPG de acción inspirado en la mitología china. La historia está basada en «Viaje al Oeste», una de las cuatro grandes novelas clásicas de la literatura china. Encarnarás al Predestinado, que ha de embarcarse en un viaje repleto de peligros y maravillas para descubrir la verdad oculta acerca de una gloriosa leyenda del pasado.\r\n¡Sumérgete en un reino fascinante lleno de maravillas y descubre la mitología de la antigua china!\r\nEn el papel del Predestinado, recorrerás una amplia variedad de paisajes espectaculares e inconfundibles basados en la novela clásica «Viaje al Oeste», y vivirás una épica aventura desde una nueva perspectiva.', 'Accion/Aventura/Lucha/Rol/Hack and Slash/Soulslike', 21, 21, 'https://www.youtube.com/watch?v=pnSsgRJmsCc', 12, 12),
(20, 'Elden Ring', '2022-02-24', 'From Software', 'elden_horizontal.jfif', 'EL NUEVO JUEGO DE ROL Y ACCIÓN DE AMBIENTACIÓN FANTÁSTICA. Álzate, Sinluz, y que la gracia te guíe para abrazar el poder del Círculo de Elden y encumbrarte como señor del Círculo en las Tierras Intermedias.Las Tierras Intermedias forman parte de un extenso continente donde magníficos campos abiertos y gigantescas mazmorras con diseños tridimensionales complejos se conectan. Mientras exploras, te espera la emoción de descubrir amenazas desconocidas y abrumadoras.\r\nEl dominio del terreno y conocer sus secretos pueden ayudarte a superar enemigos y a derrotar jefes formidables, o a conducir a los jugadores invasores hasta trampas.', 'Accion/Multijugador/Mundo Abierto/Rol/Soulslike', 22, 22, 'https://www.youtube.com/watch?v=E3Huy2cdih0', 13, 13),
(21, 'Tom Clancys Rainbow Six Siege', '2015-12-01', 'Ubisoft', 'rainbow.jpg', 'Tom Clancys Rainbow Six Siege es un shooter táctico realista por equipos donde una cuidadosa planificación y ejecución son claves para la victoria.\r\nEmbárcate en un nuevo tipo de asalto usando un nivel de destrucción y unos dispositivos nunca vistos.\r\nEn defensa, coordina tus acciones con tu equipo para transformar tu entorno en una fortaleza. Pon trampas, refuerza lugares y crea sistemas de defensa para evitar que el enemigo abra brecha.\r\nEn ataque, lidera tu grupo a través de estrechos pasillos, pasos de puerta reforzados y paredes con barricadas. Combina mapas tácticos, drones de vigilancia, acciones de rápel y otros movimientos para planificar, atacar y dominar cualquier situación.', 'Accion/Estrategia/Shooter/Multijugador/Simulacion', 25, 25, 'https://www.youtube.com/watch?v=6wlvYh0h63k', 16, 16),
(22, 'The Last of Us ', '2013-06-14', 'Naughty Dog', 'thelastofus.jpg', 'En una civilización asolada, plagada de infectados y crueles supervivientes, Joel, nuestro exhausto protagonista, es contratado para sacar a escondidas a una chica de 14 años, Ellie, de una zona militar en cuarentena. Pero lo que comienza siendo una simple tarea, pronto se transforma en un brutal viaje por el país.\r\nGuía a Joel y Ellie por unos Estados Unidos postapocalípticos y encuentra aliados y enemigos inolvidables en The Last of Us.', 'Accion/Aventura/Shooter/Supervivencia/Terror', 26, 26, 'https://www.youtube.com/watch?v=46ohP30YA_Y', 17, 17),
(23, 'Dark Soul III', '2016-04-11', 'From Software', 'DS_horizontal.jpg', 'Adéntrate en un universo lleno de enemigos y entornos descomunales, un mundo en ruinas en el que las llamas se están apagando. Los jugadores se sumergirán en la atmósfera épica de un mundo de oscuridad gracias a un juego más rápido y una intensidad de combate ampliada. Tanto fans como recién llegados disfrutarán de una acción gratificante y gráficos absorbentes.\r\nSolo quedan las ascuas... ¡Prepárate una vez más para sumergirte en la oscuridad!', 'Accion/Aventura/Multijugador/Mundo Abierto/Rol/Soulslike', 27, 27, 'https://www.youtube.com/watch?v=cWBwFhUv1-8', 18, 18),
(24, 'Assassins Creed Valhalla', '2020-11-10', 'Ubisoft', 'ac_horizontal.jfif', 'En Assassins Creed Valhalla eres Eivor, una feroz leyenda vikinga que creció escuchando historias de batallas y gloria. Explora un mundo abierto bello y misterioso con el salvaje telón de fondo de los oscuros años de la Alta Edad Media inglesa.\r\nLas avanzadas mecánicas de RPG te permiten modelar el crecimiento de tu personaje e influir en el mundo que te rodea. Cada una de tus elecciones, desde las alianzas políticas hasta las estrategias de combate, pasando por los diálogos y la progresión del equipo, forjarán tu camino hacia la gloria en este mundo abierto.', 'Accion/Aventura/Mundo Abierto/Rol', 29, 29, 'https://www.youtube.com/watch?v=ssrNcwxALS4', 20, 20),
(25, 'Sekiro Shadows Die Twice', '2019-03-22', 'From Software', 'sekiro_horizontal.jpg', 'En Sekiro Shadows Die Twice encarnas al lobo manco, un guerrero desfigurado y caído en desgracia que ha sido rescatado al borde de la muerte. Tras jurar proteger a un joven señor descendiente de un antiguo linaje, te conviertes en el objetivo de despiadados enemigos, entre ellos el peligroso clan Ashina. Cuando el joven señor sea capturado, nada te detendrá en tu peligrosa aventura por restituir tu honor, ni siquiera la muerte.\r\n\r\nExplora el Japón de la era Sengoku de finales del siglo XVI, un brutal periodo de constante conflicto, mientras te enfrentas a inconmensurables enemigos en un mundo oscuro y tortuoso. Despliega un arsenal de instrumentos protésicos letales y poderosas habilidades ninja, al mismo tiempo que combinas el sigilo, la verticalidad y transversalidad, y los viscerales combates cara a cara en una sangrienta confrontación.', 'Accion/Aventura/Mundo Abierto/Rol/Hack and Slash/Soulslike', 30, 30, 'https://youtu.be/4OgoTZXPACo?si=QUC7f_VB4K4-OWVb', 21, 21),
(26, 'Fallout 4', '2015-11-10', 'Bethesda Game Studios', 'fallout_horizontal.jpg', 'Bethesda Game Studios, el galardonado creador de Fallout 3 y The Elder Scrolls V Skyrim, os da la bienvenida al mundo de Fallout 4, su juego más ambicioso hasta la fecha y la siguiente generación de mundos abiertos. Eres el único superviviente del Refugio 111 en un mundo destruido por la guerra nuclear. Cada segundo es una lucha por la supervivencia, y en tus manos estarán todas las decisiones. Solo tú puedes reconstruir el yermo y decidir su futuro. Bienvenido a casa.', 'Accion/Aventura/Shooter/Mundo Abierto/Rol/Supervivencia', 31, 31, 'https://youtu.be/XW7Of3g2JME?si=JMsi-rYuORhb50J4', 22, 22),
(27, 'Dragon Ball Sparking! Zero', '2022-10-11', 'Bandai Namco Entertainment', 'dbz_horizontal.jpg', 'DRAGON BALL Sparking! ZERO lleva a un nuevo nivel el legendario estilo de juego de la serie Budokai Tenkaichi. ¡Domina el poder destructivo de los luchadores más fuertes que han aparecido en Dragon Ball! ibera el poder de más de 180 combatientes de Dragon Ball Z, Dragon Ball SUPER, Dragon Ball GT y algunas películas de Dragon Ball, ¡todos incluidos en el juego base! Cada personaje tiene sus habilidades, transformaciones y técnicas propias.\r\n\r\n¡Domina el poder destructivo de los luchadores más fuertes que han aparecido en Dragon Ball!', 'Accion/Lucha/Multijugador', 32, 32, 'https://youtu.be/HQ_oDzl7D78?si=vhkf0zSbvlozLbbC', 23, 23),
(28, 'Star Wars Outlaws', '2024-11-21', 'Ubisoft', 'swo-portada.jfif', 'Disfruta del primer juego de mundo abierto de Star Wars y explora distintos lugares por toda la galaxia, tanto nuevos como emblemáticos. Arriésgalo todo como la buscavidas Kay Vess, una sinvergüenza que anhela la libertad y comenzar una vida nueva. La galaxia está llena de posibilidades para todos aquellos que se arriesgan. Explora lugares únicos, con ciudades y cantinas bulliciosas. Recorre enormes paisajes en tu speeder. Cada ubicación trae nuevas aventuras, desafíos únicos y recompensas atractivas, si te atreves a arriesgarte…', 'Accion/Aventura/Shooter/Mundo Abierto/Rol', 33, 33, 'https://www.youtube.com/watch?v=ymcpwq1ltQc', 24, 24),
(29, 'Metaphor ReFantazio', '2024-10-11', 'SEGA', 'portada.jpg', 'De los creadores de Persona 3, 4 y 5 llega Metaphor: ReFantazio, un original mundo de fantasía donde el protagonista emprenderá un viaje en compañía del hada Gallica para disipar la maldición que recae sobre el príncipe. Decide tu destino, afronta tus miedos y despierta los poderes del arquetipo que yace en tu interior. Despertar un arquetipo te otorgará la capacidad de canalizar y combinar las destrezas de clases únicas. Fortalece tus vínculos y forma un grupo para derrotar a poderosos enemigos y desvelar la verdadera naturaleza del reino.', 'Aventura/Estrategia/Rol/Hack and Slash', 34, 34, 'https://youtu.be/SjbgJaYi4NE?si=b1SP5aiWZrUUSo_z', 25, 25),
(30, 'Like a Dragon Infinite Wealth', '2024-01-26', 'SEGA', 'like-a-dragon-infinite-wealth.jpg', 'Dos héroes más grandes que la vida misma se unen guiados por el destino, o quizás, por algo más siniestro… Ichiban Kasuga, un perdedor imparable que sabe lo que es tener que recuperarse después de tocar fondo, y Kazuma Kiryu, un hombre roto que debe enfrentar los últimos días de su vida. Experimenta un sistema de combate único con batallas dinámicas y frenéticas de RPG donde el campo de batalla se convierte en tu arma, y en el que todo vale.\r\n\r\nAdapta las habilidades de tu grupo a la situación con trabajos y personalizaciones esperpénticos para someter estratégicamente a tus enemigos con movimientos excéntricos. Disfruta de la vida en Japón y explora todo lo que ofrece Hawái en una aventura tan grande que abarca todo el Pacífico.', 'Accion/Aventura/Rol', 35, 35, 'https://youtu.be/ZcYdoEju54c?si=jmX-dPK9-M9uDPlh', 26, 26),
(31, 'S.T.A.L.K.E.R. 2 Heart of Chornobyl', '2024-11-20', 'SEGA', 'STALKER-2-Heart-of-Chornobyl-Review-PC.jpg', 'Descubre la Zona de Exclusión de Chornóbil, un lugar repleto de enemigos peligrosos, anomalías letales y poderosos artefactos. Descubre tu propia historia épica y ábrete paso hasta el corazón de Chornóbil. \r\nLa Zona de Exclusión de Chornóbil cambió radicalmente tras la segunda explosión en 2006. Los mutantes violentos, las anomalías letales y las facciones enfrentadas hacen de la Zona un lugar en el que sobrevivir es todo un reto. Sin embargo, los valiosísimos artefactos atraen a gente de todo el mundo. Apodados Stalkers, se adentran en la zona por su cuenta y riesgo en busca de fortuna o posiblemente de la verdad que esconde el Corazón de Chornóbil.', 'Accion/Shooter/Mundo Abierto/Supervivencia', 36, 36, 'https://youtu.be/xf5leG0NNag?si=Jmy1vW0uFICDMqTB', 27, 27),
(32, 'Warhammer 40,000 Space Marine 2', '2024-09-09', 'Saber Interactive', 'portada.jfif', 'Usa las habilidades y brutalidad sobrehumanas de los marines espaciales. Usa habilidades letales y armamento devastador para aniquilar a los incesantes enjambres tiránidos. Defiende el Imperium en el modo solitario o multijugador en tercera persona.', 'Accion/Aventura/Multijugador', 37, 37, 'https://youtu.be/mJntSVa4OBE?si=2ojjPs8OI2PGl4mq', 28, 28),
(33, 'Heavy Rain', '2010-02-23', 'Quantic Dream', 'Heavy_Rain_portada.jpg', 'Experimenta una apasionante historia psicológica de suspense llena de innumerables giros. A lo largo de cuatro días de misterio y suspense, se abre la veda para dar caza a un asesino conocido únicamente como el Asesino del Origami, llamado así por su macabra carta de presentación: una figura de papel doblado en cada escena del crimen. Cuatro personajes, cada uno con sus propias pesquisas y motivos, han de formar parte de un desesperado intento de prevenir que el asesino se cobre una nueva víctima.\r\n\r\nDeberás pensar rápido y actuar aún más rápido, pues cada acción y movimiento pueden desencadenar consecuencias dramáticas que cambiarán el juego e incluso determinar quién vive... y quién muere.\r\n\r\nEl final de esta historia depende únicamente de ti.', 'Aventura', 38, 38, 'https://youtu.be/YVYiJ3VSp60?si=GtDOThGrFekNfTuI', 29, 29),
(34, 'Dishonored', '2012-10-09', 'Bethesda Game Studios', 'Dishonored.jpg', 'Dishonored es un juego de acción en primera persona al que te entregarás por completo encarnando a un asesino sobrenatural movido por la sed de venganza. Un sistema de combate flexible te permitirá combinar una gran variedad de poderes sobrenaturales, armas y enrevesados artilugios para eliminar a tus enemigos desplegando toda tu creatividad. Tú decides si quieres perseguir a tus víctimas ocultándote en las sombras o si quieres acabar con ellas a cara descubierta y mostrando tus armas. Da igual lo que hagas: las decisiones que tomes tendrán consecuencias en el resultado de las misiones.', 'Accion/Aventura/Shooter/Mundo Abierto/Rol', 39, 39, 'https://youtu.be/-XbQgdSlsd0?si=DJTMdAIEbBegPBHN', 30, 30);

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
(4, 'https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/', 39.98, 'https://store.epicgames.com/es-ES/p/grand-theft-auto-v', 29.99, 'https://www.xbox.com/es-ar/games/store/grand-theft-auto-v-edicion-premium/c496clvxmjp8', 29.99),
(5, 'https://store.steampowered.com/app/1091500/Cyberpunk_2077/', 59.99, 'https://store.epicgames.com/es-ES/p/cyberpunk-2077', 49.99, 'https://www.xbox.com/en-us/games/store/cyberpunk-2077/bx3m8l83bbrw', 59.99),
(7, 'https://store.steampowered.com/app/1174180/Red_Dead_Redemption_2/', 59.99, 'https://store.epicgames.com/es-ES/p/red-dead-redemption-2', 59.99, 'https://www.xbox.com/en-US/games/store/red-dead-redemption-2/9N2ZDN7NWQKV/0010', 59.99),
(10, 'https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/', 39.99, 'https://store.epicgames.com/es-ES/p/skyrim', 24.99, 'https://www.xbox.com/en-US/games/store/the-elder-scrolls-v-skyrim-special-edition-pc/9P03JGQ4S1GC/00', 39.99),
(11, 'https://store.steampowered.com/app/49520/Borderlands_2/', 19.99, 'https://store.epicgames.com/es-ES/bundles/borderlands-the-handsome-collection', 59.99, 'https://www.xbox.com/en-us/games/store/borderlands-the-handsome-collection/c4dqhrnn1zn5', 39.99),
(12, 'https://store.steampowered.com/app/2358720/Black_Myth_Wukong/', 59.99, 'https://store.epicgames.com/es-ES/p/black-myth-wukong-87a72b', 59.99, 'https://www.playstation.com/es-ar/games/black-myth-wukong/', 59.99),
(13, 'https://store.steampowered.com/app/1245620/ELDEN_RING/', 47.99, 'https://store.epicgames.com/es-ES/', 0, 'https://www.xbox.com/es-ar/games/store/elden-ring/9p3j32ctxlrz', 59.99),
(16, 'https://store.steampowered.com/app/359550/Tom_Clancys_Rainbow_Six_Siege/', 19.99, 'https://store.epicgames.com/es-ES/p/rainbow-six-siege', 15.99, 'https://www.xbox.com/en-us/games/store/tom-clancys-rainbow-six-siege/c12t09dsvp8j', 39.99),
(17, 'https://store.steampowered.com/app/1888930/The_Last_of_Us_Parte_I/', 59.99, 'https://store.epicgames.com/es-ES/p/the-last-of-us-part-1', 59.99, 'https://www.playstation.com/es-ar/games/the-last-of-us-part-i/', 69.99),
(18, 'https://store.steampowered.com/app/374320/DARK_SOULS_III/', 59.99, 'https://www.playstation.com/es-ar/games/dark-souls-iii/', 59.99, 'https://www.xbox.com/en-us/games/store/dark-souls-iii/bw2xdrnsccpz', 59.99),
(20, 'https://store.steampowered.com/app/2208920/Assassins_Creed_Valhalla/', 59.99, 'https://store.epicgames.com/es-ES/p/assassins-creed-valhalla', 47.99, 'https://www.xbox.com/en-us/games/store/assassins-creed-valhalla/9p4njfh17mrt', 59.99),
(21, 'https://store.steampowered.com/app/814380/Sekiro_Shadows_Die_Twice__GOTY_Edition/', 59.99, 'https://www.playstation.com/es-ar/games/sekiro-shadows-die-twice/', 59.99, 'https://www.xbox.com/en-us/games/store/sekiro-shadows-die-twice-goty-edition/bqd5wrrp2d6q', 59.99),
(22, 'https://store.steampowered.com/app/377160/Fallout_4/', 19.99, 'https://store.epicgames.com/es-ES/p/fallout-4', 12.99, 'https://www.xbox.com/en-us/games/store/fallout-4/c3kldkzbhncz', 19.99),
(23, 'https://store.steampowered.com/app/1790600/DRAGON_BALL_Sparking_ZERO/', 69.99, 'https://www.playstation.com/es-ar/games/dragon-ball-sparking-zero/', 69.99, 'https://www.xbox.com/en-us/games/store/dragon-ball-sparking-zero/9n7xmjjhnfc3', 69.99),
(24, 'https://store.steampowered.com/app/2842040/Star_Wars_Outlaws/', 55.99, 'https://store.epicgames.com/es-ES/p/star-wars-outlaws', 55.99, 'https://www.xbox.com/en-us/games/store/star-wars-outlaws/9nlhvwsfb0fc', 69.99),
(25, 'https://store.steampowered.com/app/2679460/Metaphor_ReFantazio/', 69.99, 'https://www.playstation.com/es-ar/games/metaphor-refantazio/', 69.99, 'https://www.xbox.com/en-us/games/store/metaphor-refantazio/9n5dv8310xp7', 69.99),
(26, 'https://store.steampowered.com/app/2072450/Like_a_Dragon_Infinite_Wealth/', 69.99, 'https://www.playstation.com/es-ar/games/like-a-dragon-infinite-wealth/', 69.99, 'https://www.xbox.com/en-us/games/store/like-a-dragon-infinite-wealth/9p00svgwdjcp', 69.99),
(27, 'https://store.steampowered.com/app/1643320/STALKER_2_Heart_of_Chornobyl/', 42.99, 'https://store.epicgames.com/es-ES/p/stalker-2-heart-of-chornobyl', 42.99, 'https://www.xbox.com/en-us/games/store/stalker-2-heart-of-chornobyl-windows-edition/9n3d6v4n58jr', 59.99),
(28, 'https://store.steampowered.com/app/2183900/Warhammer_40000_Space_Marine_2/', 34.99, 'https://store.epicgames.com/es-ES/p/warhammer-40000-space-marine-2', 34.99, 'https://www.xbox.com/en-us/games/store/warhammer-40-000-space-marine-2/9n9pczwhvp2l', 69.99),
(29, 'https://store.steampowered.com/app/960910/Heavy_Rain/', 15.99, 'https://store.epicgames.com/es-ES/p/heavy-rain', 11.99, 'https://www.playstation.com/es-ar/games/heavy-rain/', 29.99),
(30, 'https://store.steampowered.com/app/205100/Dishonored/', 5.99, 'https://store.epicgames.com/es-ES/p/dishonored-definitive-edition', 12.99, 'https://www.xbox.com/en-us/games/store/dishonored-definitive-edition/c299qvc2bsjf', 19.99);

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
(4, 97, 'https://www.metacritic.com/game/grand-theft-auto-v/'),
(5, 86, 'https://www.metacritic.com/game/cyberpunk-2077/'),
(7, 97, 'https://www.metacritic.com/game/red-dead-redemption-2/'),
(10, 96, 'https://www.metacritic.com/game/the-elder-scrolls-v-skyrim/'),
(11, 89, 'https://www.metacritic.com/game/borderlands-2/'),
(12, 81, 'https://www.metacritic.com/game/black-myth-wukong/'),
(13, 96, 'https://www.metacritic.com/game/elden-ring/'),
(16, 73, 'https://www.metacritic.com/game/tom-clancys-rainbow-six-siege/'),
(17, 95, 'https://www.metacritic.com/game/the-last-of-us/'),
(18, 89, 'https://www.metacritic.com/game/dark-souls-iii/'),
(19, 80, 'https://www.metacritic.com/game/assassins-creed-valhalla/'),
(20, 80, 'https://www.metacritic.com/game/assassins-creed-valhalla/'),
(21, 90, 'https://www.metacritic.com/game/sekiro-shadows-die-twice/'),
(22, 87, 'https://www.metacritic.com/game/fallout-4/'),
(23, 81, 'https://www.metacritic.com/game/dragon-ball-sparking-zero/'),
(24, 75, 'https://www.metacritic.com/game/star-wars-outlaws/'),
(25, 94, 'https://www.metacritic.com/game/metaphor-refantazio/'),
(26, 89, 'https://www.metacritic.com/game/like-a-dragon-infinite-wealth/'),
(27, 74, 'https://www.metacritic.com/game/stalker-2-heart-of-chornobyl/'),
(28, 82, 'https://www.metacritic.com/game/warhammer-40000-space-marine-ii/'),
(29, 87, 'https://www.metacritic.com/game/heavy-rain/'),
(30, 88, 'https://www.metacritic.com/game/dishonored/');

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
(13, 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Servi', 'Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom ', 4, 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB(DX 10, 10.1, 11)', 'DirectX 10', 65),
(14, '64-bit Windows 10', 'Core i7-6700 or Ryzen 5 1600', 12, 'GeForce GTX 1060 6GB or Radeon RX 580 8GB or Arc A380', 'DirectX Version 12', 70),
(16, 'Windows 10 - 64-bit', 'Intel® Core™ i5-2500K / AMD FX-6300', 8, 'Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB', 'Direct X Compatible', 150),
(19, 'Windows 7/8.1/10 (requiere versión de 64 bits)', 'Intel Core i5-750/AMD Phenom II X4-945', 8, 'NVIDIA GTX 470 de 1 GB/AMD HD 7870 de 2 GB', 'Direct X Compatible', 12),
(20, 'Windows XP SP3', 'Dual Core a 2.4 GHz', 2, 'NVidia GeForce 8500 / ATI Radeon HD 2600', 'DirectX 9.0c', 13),
(21, 'Windows 10 64-bit', 'Intel Core i5-8400 / AMD Ryzen 5 1600', 16, 'NVIDIA GeForce GTX 1060 6GB / AMD Radeon RX 580 8GB', 'Directx 11', 130),
(22, 'Windows 10', 'INTEL CORE I5-8400 or AMD RYZEN 3 3300X', 12, 'NVIDIA GEFORCE GTX 1060 3 GB or AMD RADEON RX 580 4 GB', 'Directx 12', 60),
(25, 'Windows 10, Windows 11 (64-bit versions)', 'AMD Ryzen 3 1200 @ 3.1 GHz, Intel Core i5-4590 @ 3.3 GHz, or', 8, 'AMD RX 460 (2 GB), NVIDIA GeForce GTX 750 Ti (2 GB), or bett', 'Directx 12', 86),
(26, 'Windows 10 (Version 1909 or Newer)', ' AMD Ryzen 5 1500X, Intel Core i7-4770K', 16, 'AMD Radeon RX 470 (4 GB), AMD Radeon RX 6500 XT (4 GB), NVID', 'Direct X Compatible', 100),
(27, 'Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit', 'Intel Core i3-2100 / AMD® FX-6300', 4, 'NVIDIA® GeForce GTX 750 Ti / ATI Radeon HD 7950', 'Directx 11', 25),
(29, 'Windows 10 (versions 64 bits uniquement)', 'AMD Ryzen 3 1200 3.1 GHz / Intel Core i5-4460 3.2 GHz', 8, 'AMD R9 380 /NVIDIA GeForce GTX 960', 'Directx 12', 160),
(30, 'Windows 7 64-bit | Windows 8 64-bit | Windows 10 64-bit', 'Intel Core i3-2100 | AMD FX-6300', 4, 'NVIDIA GeForce GTX 760 | AMD Radeon HD 7950', 'Directx 11', 25),
(31, 'Windows 7/8/10 (64-bit OS required)', 'Intel Core i5-2300 2.8 GHz/AMD Phenom II X4 945 3.0 GHz or e', 8, 'NVIDIA GTX 550 Ti 2GB/AMD Radeon HD 7870 2GB or equivalent', 'Direct X Compatible', 30),
(32, 'Windows 10', 'Intel Core i5-9600K / AMD Ryzen 5 2600', 8, 'Nvidia GeForce GTX 980 / AMD Radeon RX 590 / Intel Arc A750', 'Directx 12', 29),
(33, 'Windows 10, Windows 11 (64-bit versions)', 'AMD Ryzen 5 3600 @ 3.6 GHz, Intel Core i7-8700K @ 3.70 GHz, ', 16, 'NVIDIA GeForce GTX 1660 (6 GB), AMD RX 5600XT (6 GB), Intel ', 'Directx 12', 65),
(34, 'Windows 10', 'Intel Core i5-3470 or AMD FX-6300', 6, 'NVIDIA GeForce GTX 750 Ti, 4GB or AMD Radeon R7 360, 4GB or ', 'Directx 11', 93),
(35, 'Windows 10 1903 (OS Build 18362)', 'Intel Core i5-3470, 3.2 GHz or AMD Ryzen 3 1200, 3.1 GHz', 8, 'NVIDIA GeForce GTX 960, 4 GB or AMD Radeon RX 460, 4 GB or I', 'Directx 12', 82),
(36, 'Windows 10 x64 / Windows 11 x64', 'Intel Core i7-7700K / AMD Ryzen 5 1600X', 16, 'Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 580 8GB / Intel ', 'Direct X Compatible', 160),
(37, 'Windows 10 (1903 min)/11 64-bit', 'AMD Ryzen 5 2600X / Intel Core i5-8600K', 8, '6 GB VRAM, AMD Radeon RX 580 / Nvidia GeForce GTX 1060', 'Directx 12', 75),
(38, 'Windows 7 or later (64 bit)', 'Intel Core i5-4430 @ 3.0 GHz or AMD FX-6300 @ 3.5 GHz', 4, 'Nvidia GeForce GTX 660 with 2GB VRAM or AMD Radeon HD 7870 w', 'Directx 11', 35),
(39, 'Windows Vista / Windows 7', 'Dual Core a 3.0 GHz o superior', 4, '512 MB de VRAM, compatible con DirectX 9 o superior (nVidia ', 'Direct X Compatible', 9);

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
(13, 'Windows 8.1 64 Bit, Windows 8 64 Bit,Windows 7 64 Bit Servic', 'Intel Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ', 8, 'NVIDIA GTX 660 2GB / AMD HD7870 2GB', 'DirectX 10 compatible', 65),
(14, '64-bit Windows 10', 'Core i7-12700 or Ryzen 7 7800X3D', 16, 'GeForce RTX 2060 SUPER or Radeon RX 5700 XT or Arc A770', 'DirectX Version 12', 70),
(16, 'Windows 10 - 64-bit', 'Intel® Core™ i7-4770K / AMD Ryzen 5 1500X', 12, 'Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB', 'Direct X Compatible', 150),
(19, 'Windows 7/8.1/10 (requiere versión de 64 bits)', 'Intel Core i5-2400/AMD FX-8320', 8, 'NVIDIA GTX 780 de 3 GB/AMD R9 290 de 4 GB', 'Direct X Compatible', 12),
(20, 'Windows XP SP3 / Vista / Win 7', 'Quad Core a 2.3 GHz', 2, 'NVidia GeForce GTX 560 / ATI Radeon HD 5850', 'DirectX 9.0c', 20),
(21, 'Windows 10 64-bit', 'Intel Core i7-9700 / AMD Ryzen 5 5500', 16, ' NVIDIA GeForce RTX 2060 / AMD Radeon RX 5700 XT / INTEL Arc', 'Directx 12', 130),
(22, 'Windows 10/11', 'INTEL CORE I7-8700K or AMD RYZEN 5 3600X', 16, 'NVIDIA GEFORCE GTX 1070 8 GB or AMD RADEON RX VEGA 56 8 GB', 'Directx 12', 60),
(25, 'Windows 10, Windows 11 (64-bit versions)', 'AMD Ryzen 3 1200 @ 3.1 GHz, Intel Core i5-4590 @ 3.3 GHz, or', 8, ' AMD RX 560 (4 GB), Intel ARC A380 (6 GB), NVIDIA GeForce GT', 'Directx 12', 86),
(26, 'Windows 10 (Version 1909 or Newer)', 'AMD Ryzen 5 3600X, Intel Core i7-8700', 16, 'AMD Radeon RX 5700 XT (8 GB), AMD Radeon RX 6600 XT (8 GB), ', 'Direct X Compatible', 100),
(27, 'Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit', 'Intel Core i7-3770 / AMD® FX-8350', 8, 'NVIDIA® GeForce GTX 970 / ATI Radeon R9 series', 'Directx 11', 25),
(29, 'Windows 10 (versions 64 bits uniquement)', 'AMD Ryzen 5 1600 3.2 GHz / Intel Core i7-4790 3.6 GHz', 8, 'AMD R9 380 /NVIDIA GeForce GTX 960', 'Directx 12', 160),
(30, 'Windows 7 64-bit | Windows 8 64-bit | Windows 10 64-bit', 'Intel Core i5-2500K | AMD Ryzen 5 1400', 8, 'NVIDIA GeForce GTX 970 | AMD Radeon RX 570', 'Directx 11', 25),
(31, 'Windows 7/8/10 (64-bit OS required)', 'Intel Core i7 4790 3.6 GHz/AMD FX-9590 4.7 GHz or equivalent', 8, 'NVIDIA GTX 780 3GB/AMD Radeon R9 290X 4GB or equivalent', 'Direct X Compatible', 30),
(32, 'Windows 10 / Windows 11', 'Intel Core i7-9700K / AMD Ryzen 5 3600', 16, 'Nvidia GeForce RTX 2060 / AMD Radeon RX Vega 64', 'Directx 12', 29),
(33, 'Windows 10, Windows 11 (64-bit versions)', 'AMD Ryzen 5 5600X @ 3.7 GHz, Intel Core i5-10400 @ 2.9 GHz, ', 16, 'NVIDIA GeForce RTX 3060 Ti (8 GB), AMD Radeon RX 6700 XT (12', 'Directx 12', 65),
(34, 'Windows 10', 'Intel Core i5-7600 or Ryzen 5 2600', 8, 'NVIDIA GeForce GTX 970, 4GB or AMD Radeon RX 480, 4GB or Int', 'Directx 11', 93),
(35, 'Windows 10 1903 (OS Build 18362)', 'Intel Core i7-4790, 3.6 GHz or AMD Ryzen 5 1600, 3.2 GHz', 16, 'NVIDIA GeForce RTX 2060, 6 GB or AMD Radeon RX 5700, 8 GB or', 'Directx 12', 82),
(36, 'Windows 10 x64 / Windows 11 x64', 'Intel Core i7-11700 / AMD Ryzen 7 5800X', 32, 'Nvidia GeForce RTX 3070 Ti / Nvidia GeForce RTX 4070 / AMD R', 'Direct X Compatible', 160),
(37, 'Windows 10 (1903 min)/11 64-bit', 'AMD Ryzen 7 5800X / Intel Core i7-12700', 16, '8 GB VRAM, AMD Radeon RX 6800 XT / Nvidia GeForce RTX 3070', 'Directx 12', 75),
(38, 'Windows 7 or later (64 bit)', 'Intel Core i5-6600K @ 3.5GHz or AMD Ryzen 3 1300X @ 3.4GHz', 8, 'Nvidia GeForce GTX 970 with 4GB VRAM or AMD Radeon R9 390 wi', 'Directx 11', 35),
(39, 'Windows Vista / Windows 7 (mejorado para sistemas de 64 bits', 'Quad Core a 2.4 GHz o superior (mejorado para procesadores m', 4, '768 MB de VRAM, compatible con DirectX 9 o superior (nVidia ', 'Direct X Compatible', 9);

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
(2, 'tobias@hotmail.com', 'gaby', '123', 2),
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
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

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
  MODIFY `id_captura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `linkcompra`
--
ALTER TABLE `linkcompra`
  MODIFY `id_links` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `metacritic`
--
ALTER TABLE `metacritic`
  MODIFY `id_critic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `requisitos_minimos`
--
ALTER TABLE `requisitos_minimos`
  MODIFY `id_reqMin` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `requisitos_recomendados`
--
ALTER TABLE `requisitos_recomendados`
  MODIFY `id_reqRec` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
