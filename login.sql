-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2021 a las 02:37:44
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(2) NOT NULL,
  `nombreArea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `nombreArea`) VALUES
(2, 'Biblioteca'),
(10, 'direccion'),
(8, 'psicologia'),
(3, 'Rectoria'),
(9, 'secretaria'),
(7, 'sistemas'),
(1, 'Tesoreria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controla`
--

CREATE TABLE `controla` (
  `id` int(3) NOT NULL,
  `lider` varchar(50) NOT NULL,
  `nombreArea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `controla`
--

INSERT INTO `controla` (`id`, `lider`, `nombreArea`) VALUES
(13, 'alvarez', 'secretaria'),
(14, 'kevin', 'biblioteca'),
(15, 'deyber', 'rectoría'),
(17, 'jorge', 'sistemas'),
(18, 'andres', 'psicologia'),
(23, 'pruebaEdit', 'tesoreria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE `pqrs` (
  `id` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `area` varchar(50) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `adjunto` text DEFAULT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pqrs`
--

INSERT INTO `pqrs` (`id`, `nombre`, `identificacion`, `telefono`, `email`, `area`, `asunto`, `adjunto`, `descripcion`) VALUES
(7, 'prueba', '87654321', '1234567890', 'jimenezjair2005@gmail.com', 'biblioteca', 'prueba', 'img/adjuntos/87654321.doc', 'probando'),
(8, 'alberto', '2233449911', '3205552341', 'inventado@gmail.com', 'rectoría', 'libros perdidos', 'img/adjuntos/2233449911.txt', 'algunos libros no se encuentran en la sección etc '),
(11, 'arnaldo', '1122334455', '3112233445', 'prueba1@gmail.com', 'rectoría', 'no atienden bien', 'Prueba.txt', 'no me atendieron etc'),
(13, 'paula', '9988776655', '3445566778', 'prueba3@gmail.com', 'rectoría', 'problema', 'Prueba.txt', 'rectoria problemas etc'),
(16, 'luisa', '3355779900', '3149871243', 'prueba4@gmail.com', 'sistemas', 'sistema caido', 'Prueba.txt', 'el sistema esta caido etc'),
(20, 'albert', '1029384756', '3149871254', 'prueba7@gmail.com', 'secretaria', 'problemas', 'Prueba.txt', 'descripcion del problema etc'),
(21, 'john', '0912756435', '3221092384', 'prueba8@gmail.com', 'secretaria', 'problemas de secretaria', 'Prueba.txt', 'muchos problemas'),
(22, 'marlene', '9238483921', '3158273829', 'prueba9@gmail.com', 'rectoría', 'problemas ', '', 'problemas con rectoria'),
(23, 'susan', '2158273829', '3158273821', 'prueba10@gmail.com', 'sistemas', 'problema', 'Prueba.txt', 'problemas con el sistema'),
(24, 'henry', '109473821', '3105671294', 'prueba12@hotmail.com', 'rectoría', 'problemas legal', 'Prueba.txt', 'aqui se ingresaria la descripcion de la pqr'),
(25, 'alsira', '1096255222', '3201347213', 'prueba14@gmail.com', 'sistemas', 'problemas con el sistema', 'Prueba.txt', 'ingresa la descripcion del problema'),
(26, 'mary', '1096253333', '3223471876', 'prueba22@gmail.com', 'sistemas', 'un problema con el sistema', 'Prueba.txt', 'descripcion del problema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` int(4) NOT NULL,
  `id_pqr` int(4) NOT NULL,
  `documento` text NOT NULL,
  `respuesta` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id`, `id_pqr`, `documento`, `respuesta`) VALUES
(10, 2, 'formato_ejemplo_para_documentar_el_uso_de_scrum_en_un_proyecto.doc', 'prueba'),
(16, 7, 'Prueba.txt', 'respuesta a pqrs'),
(17, 13, 'Prueba.txt', 'no moleste, buen dia'),
(18, 11, 'Prueba.txt', 'ingresar respuesta'),
(19, 13, 'Prueba.txt', 'aqui ingresamos respuesta'),
(20, 13, 'Prueba.txt', 'ingresar la respuesta aqui');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(2) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(2) NOT NULL,
  `avatar` text DEFAULT NULL,
  `lidera` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `identificacion`, `nombre`, `email`, `password`, `level`, `avatar`, `lidera`) VALUES
(1, '1096255219', 'supervisor', 'deybersbh-1999@hotmail.es', '$2y$10$Mpdp6wtsRQlO1SC3vxuiQuAZ4FWhZe8b26mWilI9w9lHbCevLv4Le', '2', 'img/usuarios/1096255219.png', NULL),
(3, '1096255220', 'admin', 'deybersbh1999@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$c2NodnNKRWxJZTFkekhEUA$AsBLsLfNR3KEZhYZyJMAuUrc9c/AYHKZ+cpggZIZXZ4', '3', 'img/usuarios/1096255220.jpg', NULL),
(4, '92345678', 'alvarez', 'L1@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VVBIR2ZRc2FqQmxHcjZ4UA$3b0rMIcdqAu7VA4twEfugRsNo4Jak8rTmNo86+xON2U', '1', 'img/usuarios/default.png', 'secretaria'),
(6, '12345678', 'kevin', 'L2@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$V2hTbm9xQi4xdlAwcUwuWA$R/kHR5Zg1KkLjMRlQKJZdZIl/1tve/omRCV7LPqw2+c', '1', 'img/usuarios/default.png', 'biblioteca'),
(7, '87654321', 'deyber', 'L3@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$SWE4QmpEM1pLZkZTbWp5Qw$8Zht7l5/wX5sGLCKBKF5A+f13oUe4oWivhnvPAjMpLs', '1', 'img/usuarios/default.png', 'rectoría'),
(8, '82345678', 'jorge', 'L4@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RnR1TjdpNU5HRWNhVlBDdA$Ah9iCWuRtMnnR2C5AmlLUUkvMShtd5LIYZvhxQ8fAOw', '1', 'img/usuarios/default.png', 'sistemas'),
(9, '72345678', 'andres', 'L5@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NUtoek9sQy9qRWwwY2JhTQ$gdUsAWbxID3WJvEIigkSCgG1wBH6IP8q/cGYybV7YTA', '1', 'img/usuarios/default.png', 'psicologia'),
(10, '62345678', 'sergio', 'L6@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZUhRU0duQkx4VXdNM05ISA$fB7cOzhbg0TQ62WTsmzFBBFoctWCrEsz4suSy4ouhVU', '1', 'img/usuarios/default.png', NULL),
(11, '1096255221', 'tester', 'millosj2@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$dDRJcDVaRi55dTcwQ0dBNg$niGJQLT3gaUFLf2x9Lk0jumlx/px39JkFcLp+mGAWMg', '3', 'img/usuarios/1096255221.jfif', NULL),
(13, '1096255522', 'pruebaEdit', 'prueba25@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ckh1emJmSG5FVzI1RUZ2NQ$k3WQ1bIERuhMlnO+68d4+Rk+yogxoibUcgzeuj/CUHo', '2', 'img/usuarios/1096255555.jpg', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `nombreArea` (`nombreArea`);

--
-- Indices de la tabla `controla`
--
ALTER TABLE `controla`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombreArea_2` (`nombreArea`),
  ADD UNIQUE KEY `lider` (`lider`),
  ADD KEY `nombreArea` (`nombreArea`),
  ADD KEY `lider2` (`lider`) USING BTREE;

--
-- Indices de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `controla`
--
ALTER TABLE `controla`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `controla`
--
ALTER TABLE `controla`
  ADD CONSTRAINT `controla_ibfk_2` FOREIGN KEY (`nombreArea`) REFERENCES `areas` (`nombreArea`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `controla_usuario` FOREIGN KEY (`lider`) REFERENCES `usuarios` (`nombre`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
