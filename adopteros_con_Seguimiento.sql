-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2018 a las 13:57:02
-- Versión del servidor: 5.7.22-0ubuntu0.16.04.1
-- Versión de PHP: 7.2.6-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adopteros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopters`
--

CREATE TABLE `adopters` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` varchar(20) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `datos` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adopters`
--

INSERT INTO `adopters` (`id`, `created_at`, `updated_at`, `nombre`, `apellido`, `dni`, `direccion`, `telefono`, `datos`) VALUES
(1, '2018-07-16 01:31:38', '2018-07-16 04:31:38', 'Guadalupe', 'Gutierrez', '32267275', 'Córdoba 4752 8vo 68 - Villa Crespo - CABA', '1126462950', 'Ama a Diego, muchisimo...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `nombreadopteros` varchar(100) NOT NULL DEFAULT 'Pichicho Nuevo',
  `nombrenuevo` varchar(100) DEFAULT NULL,
  `chapita` int(6) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `castrado` tinyint(1) DEFAULT NULL,
  `extra` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dogs`
--

INSERT INTO `dogs` (`id`, `nombreadopteros`, `nombrenuevo`, `chapita`, `foto`, `fecha_nac`, `castrado`, `extra`, `created_at`, `updated_at`) VALUES
(2, 'Peter', NULL, 121, 'diego.jpg', NULL, 0, 'Soy chapita, vendo del chaco, tengo hambre y pulgas. SOy sucio y no me baño.', '2018-07-14 03:00:00', '2018-07-14 03:00:00'),
(3, 'Pedro', 'Peter', 555, 'otros.jpg', NULL, 1, 'Soy flaquito y tengo rabia, pero no muerdo, por lo tanto ladro, porque pedro que ladra, no muerde.', '2018-07-16 00:55:00', '2018-07-16 03:55:00'),
(6, 'Guada', 'juaco', 454, 'guadita.jpg', NULL, 0, 'jajaEstoy con Diego', '2018-12-01 20:53:42', '2018-12-01 23:53:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dog_adopter`
--

CREATE TABLE `dog_adopter` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dog_id` int(11) NOT NULL,
  `adopter_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dog_adopter`
--

INSERT INTO `dog_adopter` (`id`, `created_at`, `updated_at`, `dog_id`, `adopter_id`, `fecha`) VALUES
(0, '2018-07-17 00:55:25', '0000-00-00 00:00:00', 3, 1, '0000-00-00 00:00:00'),
(0, '2018-07-17 01:19:26', '0000-00-00 00:00:00', 6, 3, '0000-00-00 00:00:00'),
(1, '2018-07-17 01:22:14', '0000-00-00 00:00:00', 6, 3, '0000-00-00 00:00:00'),
(2, '2018-07-17 01:24:35', '0000-00-00 00:00:00', 3, 3, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dog_followup`
--

CREATE TABLE `dog_followup` (
  `id` int(10) UNSIGNED NOT NULL,
  `dog_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dog_vaccine`
--

CREATE TABLE `dog_vaccine` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dog_id` int(11) NOT NULL,
  `vaccine_id` int(11) NOT NULL,
  `ultima_fecha` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `proxima_fecha` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dog_vaccine`
--

INSERT INTO `dog_vaccine` (`id`, `created_at`, `updated_at`, `dog_id`, `vaccine_id`, `ultima_fecha`, `proxima_fecha`) VALUES
(1, '2018-07-16 02:07:40', '0000-00-00 00:00:00', 3, 1, '2018-07-01 03:00:00', '2019-07-09 03:00:00'),
(2, '2018-07-16 02:08:13', '0000-00-00 00:00:00', 3, 4, '2018-04-01 03:00:00', '2019-04-09 03:00:00'),
(3, '2018-07-16 06:45:20', '2018-07-16 06:45:20', 3, 3, '2018-07-02 03:00:00', '2018-07-03 03:00:00'),
(4, '2018-07-16 06:45:50', '2018-07-16 06:45:50', 3, 1, '2018-07-16 03:00:00', '2018-07-17 03:00:00'),
(5, '2018-12-01 23:53:17', '2018-12-01 23:53:17', 6, 3, '2018-12-05 03:00:00', '2018-12-29 03:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Guadalupe Gutierrez', 'guada2703@gmail.com', '$2y$10$yTw2oQk6cH9JfQINHxEJk.eM706O..FiqlmVCJQ5TML05VDuKHo8C', '4yN4Ms7pRd2GXcYOOGMkWmkxQlEP7tj8zoiayrVv1OVCkJdK7mRi6gh7muci', '2018-07-27 18:55:45', '2018-07-27 18:55:45'),
(2, 'Diego', 'caplan.diego@gmail.com', '$2y$10$31.ATKvDtyAfrXUWZ3ycZ.6S.fVD35ycFFdB3lu9LSX8OddHy1Zw.', NULL, '2018-12-14 18:52:31', '2018-12-14 18:52:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vaccinations`
--

CREATE TABLE `vaccinations` (
  `id` int(11) NOT NULL,
  `vacuna` varchar(150) NOT NULL,
  `datos` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vaccinations`
--

INSERT INTO `vaccinations` (`id`, `vacuna`, `datos`, `created_at`, `updated_at`) VALUES
(1, 'Antirrabica', 'Contra la rabia. Es obligatoria.', '2018-07-16 01:32:49', '2018-07-16 04:32:49'),
(3, 'Sextuple', 'Para que tenga 6 cachorritos.', '2018-07-16 01:36:36', '2018-07-16 04:36:36'),
(4, 'Tos de las perreras', 'Para que el perro no haga cof cof.', '2018-07-16 01:41:15', '2018-07-16 04:41:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopters`
--
ALTER TABLE `adopters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dog_followup`
--
ALTER TABLE `dog_followup`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dog_vaccine`
--
ALTER TABLE `dog_vaccine`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vaccinations`
--
ALTER TABLE `vaccinations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adopters`
--
ALTER TABLE `adopters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dog_vaccine`
--
ALTER TABLE `dog_vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vaccinations`
--
ALTER TABLE `vaccinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
