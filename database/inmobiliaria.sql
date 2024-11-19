-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 19-11-2024 a las 01:42:22
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
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `id_agente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`id_agente`, `nombre`, `apellidoP`, `apellidoM`, `sexo`, `telefono`, `contraseña`, `correo`, `estado`, `id_rol`) VALUES
(1, 'Ronald Felip', 'Trujillo', 'Trujillo', 'M', '1234567890', 'ronald', 'ro@hotmail.com', 1, 2),
(2, 'Laura Valentina', 'Rico', 'Forero', 'F', '3104061451', 'laurita', 'laura@gmail.com', 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carac_externas`
--

CREATE TABLE `carac_externas` (
  `id_caracteristica_externa` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `id_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carac_internas`
--

CREATE TABLE `carac_internas` (
  `id_caracteristica_interna` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `id_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_propiedad`
--

CREATE TABLE `categoria_propiedad` (
  `id_categoria` int(11) NOT NULL,
  `nombreCategoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_ciudad` int(11) NOT NULL,
  `nombreCiudad` varchar(45) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `id_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` int(11) NOT NULL,
  `nombreDepartamento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_propietarios_propiedades`
--

CREATE TABLE `det_propietarios_propiedades` (
  `id_propietario` int(11) NOT NULL,
  `id_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nombreEstado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_foto` int(11) NOT NULL,
  `ruta_imagen` varchar(255) NOT NULL,
  `id_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id_propiedad` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estadoPropiedad` enum('Nuevo','Usado') NOT NULL,
  `baños` int(11) NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `estrato` int(11) NOT NULL,
  `garaje` int(11) NOT NULL,
  `img_principal` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `areaContruida` int(11) NOT NULL,
  `añoConstruccion` int(11) DEFAULT NULL,
  `id_estado` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_agente` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id_propietario` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombreRol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'Agente'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `apellidoP`, `apellidoM`, `sexo`, `correo`, `contraseña`, `telefono`, `estado`, `id_rol`) VALUES
(1, 'Cristian Camilo', 'Garcia', 'Zarta', 'M', 'cristian@hotmail.com', 'admin', '3104061452', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`id_agente`),
  ADD KEY `id_rol_idx` (`id_rol`);

--
-- Indices de la tabla `carac_externas`
--
ALTER TABLE `carac_externas`
  ADD PRIMARY KEY (`id_caracteristica_externa`),
  ADD KEY `id_propiedad_idx` (`id_propiedad`);

--
-- Indices de la tabla `carac_internas`
--
ALTER TABLE `carac_internas`
  ADD PRIMARY KEY (`id_caracteristica_interna`),
  ADD KEY `id_propiedad_idx` (`id_propiedad`);

--
-- Indices de la tabla `categoria_propiedad`
--
ALTER TABLE `categoria_propiedad`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `fk_id_departamento_idx` (`id_departamento`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_id_propiedad_idx` (`id_propiedad`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `det_propietarios_propiedades`
--
ALTER TABLE `det_propietarios_propiedades`
  ADD KEY `id_usuario_idx` (`id_propietario`),
  ADD KEY `id_propiedad_idx` (`id_propiedad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `fk_id_propiedad_idx` (`id_propiedad`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id_propiedad`),
  ADD KEY `id_estado_idx` (`id_estado`),
  ADD KEY `id_ciudad_idx` (`id_ciudad`),
  ADD KEY `id_categoria_idx` (`id_categoria`),
  ADD KEY `id_agente_idx` (`id_agente`),
  ADD KEY `fk_id_departamento_idx` (`id_departamento`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id_propietario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `fk_id_rol_idx` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agentes`
--
ALTER TABLE `agentes`
  MODIFY `id_agente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carac_externas`
--
ALTER TABLE `carac_externas`
  MODIFY `id_caracteristica_externa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carac_internas`
--
ALTER TABLE `carac_internas`
  MODIFY `id_caracteristica_interna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria_propiedad`
--
ALTER TABLE `categoria_propiedad`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id_propiedad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id_propietario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD CONSTRAINT `fk_agentes_id_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `carac_externas`
--
ALTER TABLE `carac_externas`
  ADD CONSTRAINT `fk_ce_id_propiedad` FOREIGN KEY (`id_propiedad`) REFERENCES `propiedades` (`id_propiedad`);

--
-- Filtros para la tabla `carac_internas`
--
ALTER TABLE `carac_internas`
  ADD CONSTRAINT `fk_ci_id_propiedad` FOREIGN KEY (`id_propiedad`) REFERENCES `propiedades` (`id_propiedad`);

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `fk_c_id_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id_departamento`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_clientes_id_propiedad` FOREIGN KEY (`id_propiedad`) REFERENCES `propiedades` (`id_propiedad`);

--
-- Filtros para la tabla `det_propietarios_propiedades`
--
ALTER TABLE `det_propietarios_propiedades`
  ADD CONSTRAINT `fk_id_propiedad` FOREIGN KEY (`id_propiedad`) REFERENCES `propiedades` (`id_propiedad`),
  ADD CONSTRAINT `fk_id_propietario` FOREIGN KEY (`id_propietario`) REFERENCES `propietarios` (`id_propietario`);

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk_fotos_id_propiedad` FOREIGN KEY (`id_propiedad`) REFERENCES `propiedades` (`id_propiedad`);

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `fk_d_id_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id_departamento`),
  ADD CONSTRAINT `fk_id_agente` FOREIGN KEY (`id_agente`) REFERENCES `agentes` (`id_agente`),
  ADD CONSTRAINT `fk_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria_propiedad` (`id_categoria`),
  ADD CONSTRAINT `fk_id_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id_ciudad`),
  ADD CONSTRAINT `fk_id_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_id_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
