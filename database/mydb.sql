CREATE DATABASE mydb;
USE mydb;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `deporte` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `to_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `deporte`, `to_date`) VALUES
(3, 'xd', '$2y$10$luixSNTLUMdeZQ.h94IVvuqPX2EeClaF0tZHEe/FMFLzTjVsV0bHW', 'xd@xd.com', 'futbol', '2021-03-07 08:50:11'),
(6, 'a', '$2y$10$deM4atfl3DECfbcW7fM.0OJtvaXIgszOud83eg7TEEle2Twu6tzOa', 'a@a.com', 'basquet', '2021-03-09 10:38:06'),
(7, 'b', '$2y$10$TMeUpxeJ7YueBj.BP8VZCOHNM3m5Saa9kcV2zjUkxr/mPHMr0Zee6', 'b@a.com', 'basquet', '2021-03-09 10:45:36'),
(8, 'c', '$2y$10$Gcs7MOf32sXLrpsSSwdzLefyq5hYQNHmpEaSe3iaORgOvf8.0jaa.', 'c@c.com', 'ultimate', '2021-03-09 11:29:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;


