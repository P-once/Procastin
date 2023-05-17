-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2023 a las 08:09:00
-- Versión del servidor: 8.0.33
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `procastin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `IdContacto` int NOT NULL,
  `NombreContacto` varchar(30) NOT NULL,
  `DescContacto` text NOT NULL,
  `IdUsuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`IdContacto`, `NombreContacto`, `DescContacto`, `IdUsuario`) VALUES
(1, 'Andres', 'Buscando trabajo como desarrollador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logros`
--

CREATE TABLE `logros` (
  `IdLogro` int NOT NULL,
  `NomLogro` varchar(30) NOT NULL,
  `DescLogro` text NOT NULL,
  `DifiLogro` int NOT NULL,
  `ExpLogro` int NOT NULL,
  `ImgLogro` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `logros`
--

INSERT INTO `logros` (`IdLogro`, `NomLogro`, `DescLogro`, `DifiLogro`, `ExpLogro`, `ImgLogro`) VALUES
(1, 'Principiante', 'Completa 10 tarea', 1, 150, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logrosdeusuario`
--

CREATE TABLE `logrosdeusuario` (
  `IdUsuario` int NOT NULL,
  `IdLogro` int NOT NULL,
  `NomUsuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NomLogro` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `FechaObtencionLogro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `logrosdeusuario`
--

INSERT INTO `logrosdeusuario` (`IdUsuario`, `IdLogro`, `NomUsuario`, `NomLogro`, `FechaObtencionLogro`) VALUES
(1, 1, 'Daniel', 'Principiante', '2023-05-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medallas`
--

CREATE TABLE `medallas` (
  `IdMedalla` int NOT NULL,
  `NomMedalla` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DescMedalla` text NOT NULL,
  `DifiMedalla` int NOT NULL,
  `ImgMedalla` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `medallas`
--

INSERT INTO `medallas` (`IdMedalla`, `NomMedalla`, `DescMedalla`, `DifiMedalla`, `ImgMedalla`) VALUES
(1, 'Buen Trabajo', 'Completa 10 logros', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medallasdeusuario`
--

CREATE TABLE `medallasdeusuario` (
  `IdUsuario` int NOT NULL,
  `IdMedalla` int NOT NULL,
  `NomUsuario` varchar(30) NOT NULL,
  `NomMedalla` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `FechaObtencionMedalla` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `medallasdeusuario`
--

INSERT INTO `medallasdeusuario` (`IdUsuario`, `IdMedalla`, `NomUsuario`, `NomMedalla`, `FechaObtencionMedalla`) VALUES
(1, 1, 'Andres', 'Buen Trabajo', '2023-05-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `IdTareas` int NOT NULL,
  `NomTarea` varchar(30) NOT NULL,
  `ExpTarea` int NOT NULL,
  `DescTarea` text NOT NULL,
  `FechaIniTarea` date NOT NULL,
  `DifiTarea` int NOT NULL,
  `TipoTarea` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `IdUsuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`IdTareas`, `NomTarea`, `ExpTarea`, `DescTarea`, `FechaIniTarea`, `DifiTarea`, `TipoTarea`, `IdUsuario`) VALUES
(1, 'Paseo', 50, 'Sacar a pasear al perro', '2023-05-07', 1, 'Daily', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int NOT NULL,
  `NomUsuario` varchar(30) NOT NULL,
  `ContraseniaUsuario` varchar(20) NOT NULL,
  `CorreoUsuario` varchar(50) NOT NULL,
  `ImgUsuario` blob,
  `DescUsuario` text NOT NULL,
  `TareasRealizadas` int NOT NULL,
  `ExpUsuario` bigint NOT NULL,
  `RangoUsuario` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `NomUsuario`, `ContraseniaUsuario`, `CorreoUsuario`, `ImgUsuario`, `DescUsuario`, `TareasRealizadas`, `ExpUsuario`, `RangoUsuario`) VALUES
(1, 'Daniel', 'abc123', 'correo1@gmail.com', NULL, 'Ing en Sistemas', 0, 0, 1),
(2, 'Andres', 'def456', 'correo2@gmail.com', NULL, 'Buscando trabajo como desarrollador', 0, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`IdContacto`),
  ADD KEY `FK_Contacto_Usuario` (`IdUsuario`);

--
-- Indices de la tabla `logros`
--
ALTER TABLE `logros`
  ADD PRIMARY KEY (`IdLogro`),
  ADD UNIQUE KEY `NomLogro` (`NomLogro`);

--
-- Indices de la tabla `logrosdeusuario`
--
ALTER TABLE `logrosdeusuario`
  ADD KEY `FK_LDU_Usuario` (`IdUsuario`),
  ADD KEY `FK_LDU_Logro` (`IdLogro`);

--
-- Indices de la tabla `medallas`
--
ALTER TABLE `medallas`
  ADD PRIMARY KEY (`IdMedalla`),
  ADD UNIQUE KEY `NomMedalla` (`NomMedalla`);

--
-- Indices de la tabla `medallasdeusuario`
--
ALTER TABLE `medallasdeusuario`
  ADD KEY `FK_MDU_Usuario` (`IdUsuario`),
  ADD KEY `FK_MDU_Medalla` (`IdMedalla`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`IdTareas`),
  ADD UNIQUE KEY `NomTarea` (`NomTarea`),
  ADD KEY `FK_Tarea_Usuario` (`IdUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `NomUsuario` (`NomUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `IdContacto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `logros`
--
ALTER TABLE `logros`
  MODIFY `IdLogro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medallas`
--
ALTER TABLE `medallas`
  MODIFY `IdMedalla` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `IdTareas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `FK_Contacto_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `logrosdeusuario`
--
ALTER TABLE `logrosdeusuario`
  ADD CONSTRAINT `FK_LDU_Logro` FOREIGN KEY (`IdLogro`) REFERENCES `logros` (`IdLogro`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_LDU_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `medallasdeusuario`
--
ALTER TABLE `medallasdeusuario`
  ADD CONSTRAINT `FK_MDU_Medalla` FOREIGN KEY (`IdMedalla`) REFERENCES `medallas` (`IdMedalla`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_MDU_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `FK_Tarea_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
