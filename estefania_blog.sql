-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-03-2019 a las 23:14:37
-- Versión del servidor: 5.7.24-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estefania_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `ide_abo` int(11) NOT NULL,
  `tit_abo` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `des_abo` text COLLATE utf8_spanish2_ci NOT NULL,
  `tel_abo` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `dir_abo` text COLLATE utf8_spanish2_ci NOT NULL,
  `ema_abo` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `fb_abo` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `ig_abo` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `ide_blog` int(11) NOT NULL,
  `tit_blog` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `des_blog` text COLLATE utf8_spanish2_ci NOT NULL,
  `fech_blog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img_blog` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ide_usu` int(11) NOT NULL,
  `tags_blog` text COLLATE utf8_spanish2_ci NOT NULL,
  `seo_blog` text COLLATE utf8_spanish2_ci NOT NULL,
  `min_des_blog` text COLLATE utf8_spanish2_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `ide_est_blog` int(11) NOT NULL DEFAULT '1',
  `url_blog` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`ide_blog`, `tit_blog`, `des_blog`, `fech_blog`, `img_blog`, `ide_usu`, `tags_blog`, `seo_blog`, `min_des_blog`, `is_active`, `ide_est_blog`, `url_blog`) VALUES
(1, 'mi novio que vive en Francia me llegó un día de repente a la universidad en Bogotá', '', '0000-00-00 00:00:00', 'a3932-descarga.jpeg', 1, '', '', '<p>\n	La linda historia de cuando sin saber, mi novio hab&iacute;a volado 10,000 km solo para sorprenderme llegando con flores a mi lugar de trabajo en Bogot&aacute;.</p>\n', 1, 1, ''),
(2, 'Pasando la tusa en el taxi', '<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>\n	&nbsp;</p>\n<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n', '0000-00-00 00:00:00', '74815-taxi-1024x683.jpg', 1, '<p>\n	#wtf, #no, #taxi,</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n', '<p>\n	Fue una &eacute;poca de tusa mal, mal, donde sal&iacute;a y SIEMPRE terminaba cont&aacute;ndole mi historia al taxista de regreso a mi casa. Lleg&oacute; a tal punto, que un taxista termin&oacute; cogiendome de la mano con un rosario y rezando por mi para que me fuera mejor en el amor.&nbsp;</p>\n', 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_cat`
--

CREATE TABLE `blog_cat` (
  `ide_blg_cat` int(11) NOT NULL,
  `ide_blog` int(11) NOT NULL,
  `ide_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `blog_cat`
--

INSERT INTO `blog_cat` (`ide_blg_cat`, `ide_blog`, `ide_cat`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `ide_cat` int(11) NOT NULL,
  `nom_cat` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `des_cat` text COLLATE utf8_spanish2_ci NOT NULL,
  `fech_cat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img_cat` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `tags_cat` text COLLATE utf8_spanish2_ci NOT NULL,
  `seo_cat` text COLLATE utf8_spanish2_ci NOT NULL,
  `url_cat` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `ide_est_cat` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`ide_cat`, `nom_cat`, `des_cat`, `fech_cat`, `img_cat`, `tags_cat`, `seo_cat`, `url_cat`, `is_active`, `ide_est_cat`) VALUES
(2, 'Amor', '<p>\n	loremddsdddsdsdsdsd</p>\n', '0000-00-00 00:00:00', '1a6e9-sabes-cuando-es-amor-o-solo-carino.png', '<p>\n	#love, #amor</p>\n', '<p>\n	el amor</p>\n', '', 1, 1),
(3, 'Fiesta', '<p>\n	Fiesta</p>\n', '2019-03-23 05:00:00', '44fe4-fiesta.png', '<p>\n	dsad</p>\n', '<p>\n	asdsadsa</p>\n', '', 1, 1),
(4, 'En la u o colegio', '<p>\n	De la U</p>\n', '2019-03-24 05:00:00', 'cbdad-547533_1.png', '<p>\n	adsadad</p>\n', '', '', 1, 1),
(5, 'Taxi', '<p>\n	sadsad</p>\n', '2019-03-23 05:00:00', '6d42f-descarga.png', '<p>\n	adsdsasdasd</p>\n', '<p>\n	asdsa</p>\n', '', 1, 1),
(6, 'Problemas familiares', '<p>\n	dsadsa</p>\n', '2019-03-24 05:00:00', 'ee274-445348_194730_5.png', '<p>\n	ad</p>\n', '<p>\n	asd</p>\n', '', 1, 1),
(7, 'Trabajo', '<p>\n	wwqqqwwqw</p>\n', '2019-03-23 05:00:00', '30c14-5c8bfb3c6a2e2.png', '<p>\n	asdsa</p>\n', '<p>\n	asdsa</p>\n', '', 1, 1),
(8, 'Otros', '<p>\n	asdsad</p>\n', '2019-03-24 05:00:00', '3285e-201803171291columnasshutterstock286372787-210101.png', '<p>\n	sa</p>\n', '<p>\n	asd</p>\n', '', 1, 1),
(9, 'Desamor', '<p>\n	q</p>\n', '2019-03-23 05:00:00', '3cc07-descarga-1-.png', '<p>\n	qw</p>\n', '<p>\n	qw</p>\n', '', 1, 1),
(10, 'WTF', '', '2019-03-24 05:00:00', 'da9b3-wtf.png', '', '', '', 1, 1),
(11, 'Amores Flash', '', '2019-03-24 05:00:00', '46983-amores-flash.png', '<p>\n	d</p>\n', '', '', 1, 1),
(12, 'Salud', '', '2019-03-24 05:00:00', 'f3c77-salud.png', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commets`
--

CREATE TABLE `commets` (
  `ide_com` int(11) NOT NULL,
  `ide_usu` int(11) NOT NULL,
  `fech_com` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `des_com` text COLLATE utf8_spanish2_ci NOT NULL,
  `ide_blog` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `commets`
--

INSERT INTO `commets` (`ide_com`, `ide_usu`, `fech_com`, `des_com`, `ide_blog`, `is_active`) VALUES
(1, 1, '2019-03-24 18:37:08', 's', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `ide_like` int(11) NOT NULL,
  `ide_usu` int(11) NOT NULL,
  `ide_blog` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`ide_like`, `ide_usu`, `ide_blog`, `is_active`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `ide_new` int(11) NOT NULL,
  `tit_new` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `des_new` text COLLATE utf8_spanish2_ci NOT NULL,
  `fech_new` date NOT NULL,
  `url_new` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `tags_new` text COLLATE utf8_spanish2_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `img_new` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`ide_new`, `tit_new`, `des_new`, `fech_new`, `url_new`, `tags_new`, `is_active`, `img_new`) VALUES
(1, 'Este es el line up oficial del Baum Festival 2019', '<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n', '2019-03-24', 'https://www.elespectador.com/entretenimiento/musica/este-es-el-line-oficial-del-baum-festival-2019-articulo-840524', '', 1, 'cb99c-002_0.jpg'),
(2, 'Confirmado: Underworld reemplazará a The Prodigy en el Estéreo Picnic', '<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n', '2019-03-01', 'https://m.eltiempo.com/cultura/musica-y-libros/underworld-reemplazara-a-the-prodigy-en-el-estereo-picnic-338592', '', 1, '96215-5c8ed5b545a38.jpeg'),
(3, 'JEAN-PIERRE BEKOLO', '<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n', '2019-03-09', 'http://ficcifestival.com/noticia.php?c=1$$-edEZPxyXCdnX0tyPnwA09MBXG3C6fwm', '', 1, 'e045f-5c7ebc616f0c6__bekolo_noticia.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requests`
--

CREATE TABLE `requests` (
  `ide_req` int(11) NOT NULL,
  `ide_blog` int(11) NOT NULL,
  `ide_usu_req` int(11) NOT NULL,
  `ide_usu_rec` int(11) NOT NULL,
  `des_req` text COLLATE utf8_spanish2_ci NOT NULL,
  `ema_req` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `tel_req` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ide_est_req` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscriptions`
--

CREATE TABLE `subscriptions` (
  `ide_sub` int(11) NOT NULL,
  `ema_sub` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `fech_sub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_users`
--

CREATE TABLE `tip_users` (
  `ide_tip_usu` int(11) NOT NULL,
  `des_tip_usu` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ide_usu` int(11) NOT NULL,
  `nom_usu` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `pss_usu` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ema_usu` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `ide_tip_usu` int(11) NOT NULL,
  `img_usu` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `fb_usu` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `ig_usu` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `tw_usu` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `tel_usu` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `ide_est_usu` int(11) NOT NULL,
  `fech_nac_usu` date NOT NULL,
  `dir_usu` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ide_usu`, `nom_usu`, `pss_usu`, `ema_usu`, `is_active`, `ide_tip_usu`, `img_usu`, `fb_usu`, `ig_usu`, `tw_usu`, `tel_usu`, `ide_est_usu`, `fech_nac_usu`, `dir_usu`) VALUES
(1, 'admin', 'd93a5def7511da3d0f2d171d9c344e91', '', 1, 1, '', '', '', '', '', 1, '2019-03-14', ''),
(2, 'JESUS', 'd93a5def7511da3d0f2d171d9c344e91', 'jesuscontreras102@hotmail.com', 1, 2, 'avatar.png', '', '', '', '8282828282', 1, '2019-03-11', 'a'),
(3, 'GENE', '123456', 'genelsalazar@gmail.com', 1, 2, '', '', '', '', '', 0, '0000-00-00', ''),
(4, 'GENE', '123456', 'genelsalazar@gmail.com', 1, 2, '', '', '', '', '', 0, '0000-00-00', ''),
(5, 'GENE', '123456', 'genelsalazar@gmail.com', 1, 2, '', '', '', '', '', 0, '0000-00-00', ''),
(6, 'CON', '123456', 'jesuscontreras102@hotmail.com', 1, 2, '', '', '', '', '4140204533', 0, '0000-00-00', ''),
(7, 'HEY', '700c8b805a3e2a265b01c77614cd8b21', 'jesuscontreras102@hotmail.com', 1, 2, '', '', '', '', '4140204533', 0, '0000-00-00', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ide_abo`);

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ide_blog`);

--
-- Indices de la tabla `blog_cat`
--
ALTER TABLE `blog_cat`
  ADD PRIMARY KEY (`ide_blg_cat`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ide_cat`);

--
-- Indices de la tabla `commets`
--
ALTER TABLE `commets`
  ADD PRIMARY KEY (`ide_com`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`ide_like`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ide_new`);

--
-- Indices de la tabla `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`ide_req`);

--
-- Indices de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`ide_sub`);

--
-- Indices de la tabla `tip_users`
--
ALTER TABLE `tip_users`
  ADD PRIMARY KEY (`ide_tip_usu`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ide_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `ide_abo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `ide_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `blog_cat`
--
ALTER TABLE `blog_cat`
  MODIFY `ide_blg_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `ide_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `commets`
--
ALTER TABLE `commets`
  MODIFY `ide_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `ide_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `ide_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `requests`
--
ALTER TABLE `requests`
  MODIFY `ide_req` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `ide_sub` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tip_users`
--
ALTER TABLE `tip_users`
  MODIFY `ide_tip_usu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ide_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
