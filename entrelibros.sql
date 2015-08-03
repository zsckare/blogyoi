-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2015 a las 17:28:58
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `entrelibros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `content_post` longtext CHARACTER SET utf8 NOT NULL,
  `cover_post` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `author_book` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `name_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `visits_post` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `title_post`, `content_post`, `cover_post`, `author_book`, `id_categoria`, `name_user`, `visits_post`) VALUES
(1, 'Primer Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\n<a href="" >Descargar</a>', 'https://elgarblog.files.wordpress.com/2013/10/books1.jpg', 'YO', 1, 'zsckare', 1),
(2, 'Segundo Post', 'Beard Odd Future deep v normcore mlkshk. Leggings cray biodiesel selfies selvage lo-fi. Meggings ethical American Apparel blog cold-pressed, umami church-key mumblecore fashion axe cred. You probably haven''t heard of them Echo Park sustainable meh selvage chia. Leggings drinking vinegar Banksy, four dollar toast blog meggings readymade keytar flexitarian taxidermy photo booth iPhone quinoa. Cronut skateboard 3 wolf moon art party, brunch Helvetica locavore fap put a bird on it Williamsburg 90''s lumbersexual Pinterest. Williamsburg tattooed church-key, mlkshk cred meditation farm-to-table forage tofu migas whatever flannel wolf mustache.  Single-origin coffee stumptown +1 cliche Wes Anderson, blog XOXO Etsy kogi food truck fingerstache. Cardigan selfies four loko master cleanse forage tattooed. Cray High Life deep v, iPhone put a bird on it flannel asymmetrical wolf cold-pressed actually raw denim Carles butcher. Vice put a bird on it food truck synth meggings. Schlitz roof party Carles, tofu Intelligentsia kogi Austin 8-bit pug gentrify hoodie cray vegan migas post-ironic. Beard tofu wayfarers cray. Flannel blog migas messenger bag freegan put a bird on it meh.  Kickstarter Godard health goth, flexitarian XOXO stumptown Pinterest leggings put a bird on it Thundercats Carles gluten-free Vice lo-fi occupy. Pug mixtape kogi paleo cliche. Pour-over VHS banh mi vegan, cliche keffiyeh disrupt. Cold-pressed brunch put a bird on it, farm-to-table slow-carb deep v lo-fi Wes Anderson. Health goth squid keffiyeh, four dollar toast occupy pop-up tote bag irony kogi food truck Wes Anderson Etsy cliche Odd Future mlkshk. Art party slow-carb Godard food truck. Semiotics dreamcatcher try-hard freegan, Vice four dollar toast mlkshk selvage health goth 90''s Pitchfork Neutra Williamsburg master cleanse.  Roof party cliche Vice, 90''s farm-to-table kale chips heirloom cornhole before they sold out fap Shoreditch Helvetica you probably haven''t heard of them. Tumblr brunch biodiesel tousled gentrify sustainable. Squid forage tote bag, meditation small batch Pitchfork banjo craft beer try-hard selfies keffiyeh hella sriracha seitan. Tilde chillwave Godard actually, cred bespoke Marfa messenger bag Pitchfork butcher 8-bit Echo Park food truck post-ironic keffiyeh. Photo booth Shoreditch polaroid distillery, vinyl Pitchfork single-origin coffee Carles Wes Anderson asymmetrical art party PBR chambray. Banksy you probably haven''t heard of them 8-bit, ethical pickled sriracha four loko forage fap ennui vinyl wayfarers Williamsburg. Lomo health goth cliche ugh banh mi.  Oh. You need a little dummy text for your mockup? How quaint.  I bet you’re still using Bootstrap too…', '/assets/img/mac.jpg', '', 1, 'zsckare', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `real_name_user` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `avatar_user` varchar(255) NOT NULL,
  `type_user` varchar(55) NOT NULL,
  `twitter_user` varchar(255) NOT NULL,
  `facebook_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `real_name_user`, `name_user`, `password_user`, `avatar_user`, `type_user`, `twitter_user`, `facebook_user`, `email_user`) VALUES
(1, '', 'programminghack', '94d161f749f18733975b26771504ef69ef74533968cd0fcab720adc3beabd09c', '', 'admin', 'https://twitter.com/programminghack', 'https://www.facebook.com/programming.hack', 'programminghack@gmail.com'),
(2, 'Ernesto Valenzuela Vargas', 'admin', '94d161f749f18733975b26771504ef69ef74533968cd0fcab720adc3beabd09c', 'http://disena.dev:8888/media/img/profile/906776_316503078492701_1569587655_o.jpg', 'admin', 'https://twitter.com/programminghack', 'https://www.facebook.com/programming.hack', 'programminghack@gmail.com'),
(3, 'Antonio Alvarez Guevara', 'zsckare', '0ae98847dfc7eff7589d839e8a00510e70a8475b1172ef802d1b23e7e4ee7809', '', 'admin', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`), ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
