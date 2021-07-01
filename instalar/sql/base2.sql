-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2019 a las 10:39:20
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nuevabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidad`
--

CREATE TABLE `discapacidad` (
  `id_discapacidad` int(3) NOT NULL,
  `discapacidad` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` mediumint(4) NOT NULL,
  `cedula` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombres` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechanac` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `indigena` text COLLATE utf8_spanish_ci NOT NULL,
  `etnia` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `discapacitado` text COLLATE utf8_spanish_ci NOT NULL,
  `discapacidad` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `pnf` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `anno` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `cedula`, `nombres`, `apellidos`, `direccion`, `fechanac`, `email`, `telefono`, `indigena`, `etnia`, `discapacitado`, `discapacidad`, `pnf`, `anno`) VALUES
(1, '22954899', 'Zahir Kenyon', 'Spears Fry', 'Apdo.:986-2551 In Ctra.', '03/27/1985', 'ut.ipsum@ullamcorper.org', '0205-5050021', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2015'),
(2, '10205834', 'Hayes Aaron', 'Wilcox Washington', '261-8957 Quisque Avda.', '03/11/2004', 'sit.amet@enim.com', '7079-6024783', 'si', 'ninguna', 'si', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2015'),
(3, '19745493', 'Stewart Brennan', 'Porter Daniels', '4210 Lorem Calle', '05/19/1991', 'vestibulum.nec@amet.net', '9575-7073261', 'no', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2017'),
(4, '14212394', 'Paul Thor', 'Vincent Blake', '8748 Ridiculus C/', '12/01/1995', 'aliquet.lobortis.nisi@Duismi.org', '3802-5433810', 'no', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2017'),
(5, '14112382', 'Keaton Gary', 'Hall Hart', '240-124 Erat, ', '12/11/1982', 'libero.Donec@loremloremluctus.com', '2846-4055275', 'no', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2013'),
(6, '22310282', 'Phelan Murphy', 'Holder Cox', '117-8999 Ac Avda.', '04/18/2009', 'est.Mauris@Maurisblanditenim.org', '5121-2203151', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2017'),
(7, '10711057', 'Sawyer Jordan', 'Herman Cooke', '7518 Dui, C.', '10/16/1991', 'ligula.Aenean@SedmolestieSed.edu', '3194-4292796', 'no', 'ninguna', 'si', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2018'),
(8, '23821048', 'Murphy Bruce', 'May Calhoun', '8509 Mauris ', '04/15/1978', 'mattis.ornare.lectus@tortoratrisus.ca', '2092-4594278', 'no', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2018'),
(9, '16961859', 'Elijah Jason', 'Kane Johns', '690-9178 Amet Carretera', '01/26/1994', 'mollis.vitae.posuere@tortorInteger.com', '5373-4580460', 'no', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2017'),
(10, '13893218', 'Christian Sebastian', 'Ramos Rhodes', '7876 Donec Carretera', '04/26/2003', 'interdum@ametornare.net', '8796-8297264', 'no', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2017'),
(11, '23388739', 'Talon Hunter', 'Rutledge Velazquez', '7453 Eu, ', '02/07/1978', 'at@luctusetultrices.edu', '6740-2804338', 'si', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2014'),
(12, '22390604', 'Graiden Rogan', 'Battle Marquez', 'Apdo.:458-8211 Suspendisse Calle', '04/01/1994', 'Cum@mollisduiin.com', '6129-2122519', 'si', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2016'),
(13, '20817066', 'Dante Kirk', 'Gillespie Hatfield', '366-8740 Tincidunt Calle', '02/17/1996', 'orci.lobortis@et.ca', '7496-4091820', 'no', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2015'),
(14, '22923850', 'Jakeem Phillip', 'Murray Chen', '1828 Donec Av.', '08/07/2006', 'id@semper.net', '3042-3670824', 'si', 'ninguna', 'si', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2013'),
(15, '24700547', 'Malcolm Peter', 'Bradley Pacheco', 'Apartado núm.: 328, 4857 Porttitor C/', '09/15/1981', 'vehicula@metus.ca', '5182-5567985', 'no', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2017'),
(16, '24139151', 'Merritt Jack', 'Mendoza Campos', '8861 Fringilla Ctra.', '03/15/1987', 'malesuada.malesuada@hendrerit.edu', '6205-8874194', 'si', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2013'),
(17, '18955668', 'Brent Brandon', 'Bridges Hardy', '428-5400 Eget Avenida', '08/26/1979', 'nisi.a@velitduisemper.edu', '7144-3998556', 'no', 'ninguna', 'si', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2015'),
(18, '15838516', 'Burke Rudyard', 'Medina Stanley', '3765 Inceptos ', '07/31/1995', 'Quisque.libero@aliquameu.ca', '4346-9376749', 'si', 'ninguna', 'si', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2013'),
(19, '20096360', 'Wallace Stuart', 'Albert Juarez', '6131 Erat Calle', '06/28/1982', 'conubia@ultriciesadipiscing.co.uk', '6235-7755892', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2013'),
(20, '12792154', 'Michael Orlando', 'Cain Castaneda', 'Apdo.:739-2978 Cursus C/', '12/05/1994', 'a@Aliquam.net', '1471-9163921', 'si', 'ninguna', 'si', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2014'),
(21, '14457833', 'Ezekiel Garrett', 'Miles Gay', '213-5275 Nulla Av.', '03/23/2002', 'non@sitametrisus.com', '1972-0459519', 'no', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2017'),
(22, '18074512', 'Thor Wesley', 'Black Leach', '980-3871 Sed Carretera', '05/27/2006', 'nec.metus.facilisis@tristique.edu', '6637-6128376', 'no', 'ninguna', 'no', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2012'),
(23, '21972296', 'Gage Sean', 'Miles Levine', '6418 Convallis C/', '10/22/1993', 'id@urnaNunc.ca', '1071-2946553', 'no', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2017'),
(24, '20354007', 'Acton Emery', 'Mccray Henry', '150-1795 Nulla ', '03/02/1995', 'auctor.Mauris@amagna.edu', '8273-7879449', 'si', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2012'),
(25, '22489931', 'Stone Carl', 'Atkins Rowland', '520-9016 Id ', '11/28/2005', 'Cras.eu.tellus@urnaNullam.org', '3296-9505531', 'si', 'ninguna', 'si', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2015'),
(26, '22890814', 'Brody Amery', 'Jennings Holcomb', '834-9884 Consectetuer Avda.', '06/29/1989', 'Cum@Namconsequat.net', '5395-2352209', 'no', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2016'),
(27, '13942166', 'Marvin Herman', 'Eaton Bright', '4525 Amet C/', '05/15/2001', 'Donec.egestas@Namporttitor.org', '2310-1623850', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2014'),
(28, '14110822', 'Alfonso Cyrus', 'Mullen Briggs', 'Apartado núm.: 286, 2081 Ac Avenida', '11/01/1988', 'ullamcorper.Duis.at@Nullamvelit.net', '4884-8308564', 'si', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2018'),
(29, '20684174', 'Barclay Merrill', 'Wagner Harding', 'Apartado núm.: 130, 8569 Ullamcorper Avenida', '04/08/1985', 'vel.faucibus@nunc.edu', '7371-8418962', 'si', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011', '2016'),
(30, '22053249', 'Kirk Jared', 'Puckett Armstrong', '2036 Nisl. ', '03/08/2006', 'Vivamus@et.net', '9171-8583153', 'si', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2017'),
(31, '11523894', 'Nasim Kaseem', 'Lopez Chen', '8658 Hendrerit Ctra.', '10/14/1985', 'ac@et.com', '0010-2925166', 'no', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2012'),
(32, '10173506', 'Jonas Hector', 'Hudson Rivera', 'Apdo.:360-6102 Cras Av.', '01/16/1978', 'dui.augue.eu@etlacinia.edu', '8358-4640105', 'no', 'ninguna', 'si', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2014'),
(33, '20588938', 'Thor Griffin', 'Stuart Franks', '985-6545 Dolor. Carretera', '12/27/2008', 'lorem.vitae@sagittisNullam.net', '9152-3128263', 'si', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2018'),
(34, '17666975', 'Abel Elvis', 'Lewis Gill', '268 Aliquam Carretera', '03/22/2007', 'Quisque.nonummy@semperpretium.com', '2424-2125165', 'no', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2015'),
(35, '12710708', 'Flynn Stuart', 'Allison Osborn', '221-5059 Nam Av.', '05/23/1986', 'Donec.sollicitudin@massaSuspendisseeleifend.org', '7245-2381365', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2018'),
(36, '21383848', 'Alden Nigel', 'Cooley Cook', 'Apdo.:102-243 Varius. ', '11/11/2009', 'eu@euismod.org', '2821-1521141', 'si', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2013'),
(37, '24623225', 'Joseph Hiram', 'Brennan Snider', 'Apartado núm.: 169, 9134 Facilisis Av.', '06/17/2009', 'Vestibulum.ut.eros@nonummyultriciesornare.net', '2202-9025450', 'si', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011', '2013'),
(38, '24099757', 'Trevor Amal', 'Fischer Bruce', '3298 Tristique Av.', '05/11/1977', 'ut.aliquam@vitaeposuere.ca', '3632-0455119', 'no', 'ninguna', 'si', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011', '2015'),
(39, '19754269', 'Marshall Jordan', 'Alvarez Carrillo', '5700 Quisque Calle', '06/01/2002', 'tincidunt@Cras.net', '3163-3770914', 'no', 'ninguna', 'si', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2013'),
(40, '21251763', 'Beck Kareem', 'Hurley Waller', 'Apdo.:185-8548 Ut, Av.', '08/18/1981', 'tempus.eu@ametultricies.edu', '8519-1695081', 'no', 'ninguna', 'si', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2015'),
(41, '12749243', 'Blaze Keane', 'Dunn Alvarez', 'Apdo.:782-5989 Donec C/', '09/12/1996', 'a.dui.Cras@Vivamus.ca', '8514-3640644', 'si', 'ninguna', 'no', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2017'),
(42, '21576435', 'Fulton Bruce', 'Sellers Myers', 'Apdo.:229-5379 Ac Calle', '08/10/1977', 'convallis.ligula.Donec@dui.org', '8859-4317000', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2013'),
(43, '20386883', 'Yoshio Carter', 'Camacho Francis', '8666 Lorem C.', '12/10/2008', 'quis@leo.edu', '2370-5633246', 'si', 'ninguna', 'no', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2017'),
(44, '10874383', 'Aquila Mannix', 'Meyers Kerr', '650-1606 Phasellus C.', '10/05/1989', 'Nulla.semper.tellus@iaculisaliquet.com', '1190-6153671', 'no', 'ninguna', 'si', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2012'),
(45, '13672777', 'John Reece', 'Castillo Poole', '211 Nunc Ctra.', '04/01/1981', 'Aliquam@Donectincidunt.net', '3473-3650177', 'no', 'ninguna', 'si', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011', '2014'),
(46, '11571287', 'Rashad Adrian', 'Munoz Duran', 'Apdo.:700-6062 Interdum Av.', '11/08/1998', 'aliquet.lobortis.nisi@dignissim.org', '0715-4754417', 'si', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2015'),
(47, '23356456', 'Nissim Upton', 'Hammond Haney', 'Apartado núm.: 667, 756 Nam Avda.', '03/28/2009', 'Cras.lorem.lorem@In.com', '0798-1186495', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2017'),
(48, '22981811', 'Nero Coby', 'Mcfadden Rivers', '414-1434 Ut, ', '12/03/1989', 'cursus.purus.Nullam@orci.org', '9376-0084333', 'si', 'ninguna', 'si', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2013'),
(49, '12433710', 'Thomas Kamal', 'Young Kirby', '5634 A C/', '07/30/2002', 'Suspendisse@inhendreritconsectetuer.co.uk', '9862-2434624', 'si', 'ninguna', 'si', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2018'),
(50, '21434375', 'Simon Ferris', 'Gill Nielsen', '3940 Fringilla Avenida', '06/15/2008', 'non.hendrerit.id@volutpat.org', '6693-9691725', 'no', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2012'),
(51, '22705494', 'Sean Perry', 'Newman Aguilar', 'Apartado núm.: 196, 7201 Euismod Ctra.', '07/26/1984', 'congue.In.scelerisque@congueelitsed.edu', '1478-9243781', 'si', 'ninguna', 'no', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2017'),
(52, '12690919', 'Kareem Ashton', 'Fletcher Lloyd', '7795 Nam C.', '02/26/1985', 'lacus.Aliquam@inaliquetlobortis.edu', '8513-2271852', 'no', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2016'),
(53, '23085642', 'Allen Reuben', 'Huber Oconnor', '2307 Nunc ', '02/01/1987', 'enim.Curabitur@euismodacfermentum.co.uk', '6201-2234841', 'no', 'ninguna', 'si', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2017'),
(54, '18841282', 'Boris Macon', 'Nixon Cruz', 'Apdo.:236-9944 Enim, Av.', '04/15/1994', 'lacinia.Sed.congue@Sednecmetus.org', '3978-4219121', 'no', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2016'),
(55, '23947203', 'Sebastian Zane', 'Bullock Parker', '9815 Dictum ', '10/11/1981', 'enim.gravida.sit@tempor.com', '2731-2688675', 'si', 'ninguna', 'si', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2018'),
(56, '16546974', 'Denton Price', 'Branch Hood', 'Apartado núm.: 254, 8028 Quisque C/', '04/12/1993', 'Vivamus.non.lorem@Phasellus.edu', '4633-0768974', 'no', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2015'),
(57, '11199904', 'Fletcher Moses', 'Dudley Thomas', 'Apartado núm.: 811, 9803 Placerat, Avda.', '11/17/1977', 'Integer.eu.lacus@nequeet.edu', '5179-6231890', 'si', 'ninguna', 'si', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2016'),
(58, '14424207', 'Zahir Tucker', 'Mills Hendricks', 'Apartado núm.: 874, 7055 Vehicula ', '07/13/1997', 'penatibus.et.magnis@risusInmi.net', '4764-7559060', 'si', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2015'),
(59, '20643720', 'Rigel Yasir', 'Salas Rush', '748-4275 Amet Av.', '01/07/1995', 'Quisque@posuereenimnisl.net', '3297-8299704', 'no', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2016'),
(60, '11753934', 'Gil Yoshio', 'Kirk Erickson', 'Apartado núm.: 538, 5404 Orci Carretera', '03/05/1983', 'ultrices@tempusrisus.com', '2740-1524022', 'no', 'ninguna', 'si', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2015'),
(61, '10613182', 'Beau Travis', 'Wilder Gould', 'Apartado núm.: 467, 5315 Eget, Calle', '07/08/1981', 'enim@duiFuscealiquam.com', '1020-5690483', 'no', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2013'),
(62, '16929620', 'Demetrius Tanner', 'Dean Carey', '5885 Nisi. C.', '01/17/2008', 'ornare@sociosqu.com', '6650-2976650', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2017'),
(63, '24144274', 'Tad Cade', 'Tran Brooks', '918-9636 Nunc C.', '12/04/1997', 'ipsum.leo@Namporttitor.org', '1362-7284031', 'no', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2014'),
(64, '20222319', 'Roth Neil', 'Huber Yang', 'Apdo.:482-3527 Cras Calle', '03/22/1978', 'mauris@faucibus.org', '2594-4307584', 'si', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2017'),
(65, '22967129', 'Kirk Hop', 'Mays Gould', 'Apdo.:251-4349 Etiam C.', '02/23/1999', 'sed@nonarcu.com', '1681-8081590', 'si', 'ninguna', 'si', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2016'),
(66, '18554936', 'Otto Zeus', 'Conner Baxter', 'Apartado núm.: 145, 2225 Sociis C/', '06/23/2005', 'quam.vel.sapien@Duis.ca', '8323-5649429', 'no', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2016'),
(67, '11885195', 'Driscoll Dalton', 'Keith Booth', 'Apdo.:940-3196 Maecenas Carretera', '09/09/1984', 'dictum.mi.ac@Duisvolutpatnunc.net', '0661-8919464', 'no', 'ninguna', 'no', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2016'),
(68, '17589594', 'Elvis Cadman', 'Irwin Cantu', 'Apdo.:966-465 Nisl. C.', '02/27/2001', 'eget@ligula.com', '2584-3120083', 'no', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2016'),
(69, '15153821', 'August Hashim', 'Jefferson Sykes', '614-9851 Ligula Calle', '08/19/1996', 'nec.tellus.Nunc@Inornare.ca', '2679-8577282', 'no', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2013'),
(70, '22249815', 'Hammett Steven', 'Alexander Woods', '706-3910 Et, Avenida', '05/07/1985', 'ac.eleifend.vitae@est.net', '7672-1757208', 'si', 'ninguna', 'si', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2016'),
(71, '11352566', 'Oleg Orlando', 'Burton Roy', 'Apartado núm.: 872, 9623 Tincidunt ', '04/18/1997', 'risus.varius@neque.com', '8946-1744726', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2015'),
(72, '14376909', 'Gannon Neil', 'Small Boone', 'Apdo.:398-4330 Suspendisse C/', '06/18/1982', 'magna.a.neque@sapienAeneanmassa.co.uk', '6055-1424888', 'si', 'ninguna', 'si', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2015'),
(73, '13782924', 'Elijah Trevor', 'Parsons Giles', 'Apartado núm.: 713, 4369 Pede. ', '07/17/1997', 'elit.pede@felisadipiscing.co.uk', '2258-4801258', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2013'),
(74, '23543951', 'Thaddeus Leo', 'Mercer Snyder', 'Apdo.:454-6756 Lectus. Carretera', '06/14/1978', 'cursus.a.enim@nasceturridiculusmus.net', '4155-5903127', 'si', 'ninguna', 'si', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2017'),
(75, '11510824', 'Cain Barrett', 'Roach Bridges', 'Apdo.:782-8194 Metus Avda.', '10/01/2003', 'vulputate@commodoatlibero.ca', '2968-2492607', 'si', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2017'),
(76, '12768318', 'Reese Dolan', 'Battle Carney', 'Apartado núm.: 172, 2025 Magna. Carretera', '10/20/1996', 'diam@commodotincidunt.edu', '8273-8689233', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2014'),
(77, '23073075', 'Jakeem Laith', 'Valenzuela Joyce', 'Apartado núm.: 424, 6671 Vivamus C.', '06/13/1981', 'malesuada@eliterat.com', '2141-9323611', 'si', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2015'),
(78, '14528295', 'Dale William', 'Espinoza Knowles', '598-8143 Aliquet Ctra.', '12/28/1998', 'risus.Nulla.eget@ullamcorper.org', '7417-1085967', 'si', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011', '2016'),
(79, '15131119', 'Amos Holmes', 'Vaughan Bean', '654-7655 Purus. Avda.', '07/22/1996', 'nec.tempus.mauris@nonenimcommodo.ca', '2010-6719795', 'no', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2016'),
(80, '19063849', 'Garrison Justin', 'Leon Hale', 'Apdo.:574-1114 Purus, Avenida', '08/12/1981', 'elit.elit.fermentum@magnaSedeu.ca', '6852-8028744', 'no', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2013'),
(81, '14416763', 'Charles Xavier', 'Parker Maldonado', '9670 Penatibus Av.', '10/13/2005', 'augue.eu@necenimNunc.co.uk', '9717-6575913', 'no', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011', '2014'),
(82, '20180619', 'Carson Kaseem', 'Dominguez Hensley', '4063 Eu, ', '01/02/1992', 'sollicitudin.commodo@etpede.co.uk', '4087-4485357', 'no', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2015'),
(83, '16837892', 'Allistair Reese', 'Mullins Snow', 'Apdo.:919-3046 Sed Carretera', '01/03/2001', 'nisi.Mauris@orci.ca', '7289-8547032', 'si', 'ninguna', 'no', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2017'),
(84, '21584192', 'Nasim Theodore', 'Suarez Gilliam', '122-1949 Convallis, C.', '05/02/1990', 'ultrices.posuere.cubilia@enimSed.edu', '5801-0255908', 'si', 'ninguna', 'si', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2013'),
(85, '22247539', 'Abel Grant', 'Knowles Vang', 'Apdo.:834-2823 Vitae ', '11/26/1982', 'magna@ipsumdolorsit.edu', '4750-2973375', 'no', 'ninguna', 'no', 'ninguna', 'PNF Informatica Diseño Curricular 2008', '2013'),
(86, '11287281', 'Barry Lev', 'Donovan Gross', 'Apartado núm.: 535, 4109 Euismod Avenida', '01/27/2004', 'sed.orci.lobortis@tempusscelerisque.org', '0837-4461085', 'si', 'ninguna', 'si', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2015'),
(87, '20302277', 'Christopher Graham', 'Richmond Sargent', '7507 Gravida C/', '05/13/1989', 'vel.pede@ullamcorper.ca', '0669-6027792', 'si', 'ninguna', 'no', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2016'),
(88, '22761080', 'Galvin Kadeem', 'Mcclain Armstrong', 'Apartado núm.: 731, 1311 Lorem Calle', '10/27/1984', 'velit.eget@eratnonummy.co.uk', '5736-4783178', 'no', 'ninguna', 'no', 'ninguna', 'PNF Mantenimiento Diseño Curricular 2008', '2016'),
(89, '20703587', 'Phillip Reed', 'Pruitt Anthony', '852-3947 Quam Avda.', '08/04/1991', 'Cum@dictumcursus.ca', '3364-8094882', 'no', 'ninguna', 'si', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2017'),
(90, '22741984', 'Brady Grady', 'Moss Harding', '3058 At, Calle', '04/17/1985', 'In.ornare.sagittis@cursusdiam.com', '1447-4313309', 'si', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2014'),
(91, '16810010', 'Blaze Gil', 'Hatfield Morris', 'Apdo.:710-8892 Leo, C.', '08/14/1984', 'sollicitudin.a.malesuada@suscipitnonummy.edu', '1599-2707583', 'no', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011', '2014'),
(92, '24406917', 'Brian Baker', 'Maddox Morales', 'Apdo.:986-4425 Dolor, C.', '04/14/2000', 'Pellentesque.ultricies@bibendumsed.co.uk', '8886-9620971', 'no', 'ninguna', 'no', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011', '2014'),
(93, '11595820', 'Nash Kasimir', 'Walter Dunlap', '787-2244 Mattis Avda.', '05/02/1994', 'ligula@eleifendnecmalesuada.edu', '5688-0941905', 'si', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2015'),
(94, '24830486', 'Peter Forrest', 'Irwin Roman', '848-9771 Torquent Calle', '08/17/2007', 'inceptos@sapiengravidanon.co.uk', '4951-6975801', 'no', 'ninguna', 'si', 'ninguna', 'PNF Electricidad Diseño Curricular 2013', '2015'),
(95, '13671953', 'Jerome Brandon', 'Patrick Parks', 'Apartado núm.: 900, 6256 Sem Ctra.', '01/30/1981', 'malesuada.augue.ut@Aliquamauctorvelit.ca', '6133-0519427', 'si', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2011', '2016'),
(96, '14428377', 'Bevis Arsenio', 'Roberson Coleman', '8247 Et, C.', '04/16/1998', 'sem.semper@ipsumSuspendissesagittis.org', '0205-9214709', 'si', 'ninguna', 'si', 'ninguna', 'PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013', '2014'),
(97, '22762216', 'Ryan Bevis', 'Thomas Bridges', 'Apartado núm.: 869, 339 Non, C/', '12/25/1983', 'iaculis.aliquet.diam@penatibusetmagnis.edu', '0608-5774524', 'si', 'ninguna', 'no', 'ninguna', 'PNF Electricidad Diseño Curricular 2008', '2017'),
(98, '16253464', 'Kasper Blaze', 'Hess Kent', '587-1472 Purus, Avda.', '11/04/1992', 'tortor.at.risus@vitae.co.uk', '1651-4924165', 'no', 'ninguna', 'si', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2016'),
(99, '19860582', 'Dane Laith', 'Coleman Buckley', 'Apartado núm.: 737, 6073 A Avenida', '04/10/1979', 'Nunc.mauris.elit@hymenaeosMaurisut.com', '9252-8684920', 'si', 'ninguna', 'si', 'ninguna', 'PNF Mecanica Diseño Curricular 2008', '2015'),
(100, '18873698', 'Keefe Ciaran', 'Bates Reilly', 'Apartado núm.: 898, 521 Quis, C/', '02/18/1982', 'erat.semper.rutrum@Sed.net', '7523-2199169', 'no', 'ninguna', 'no', 'ninguna', 'PNF Geociencias Diseño Curricular 2013', '2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etnias`
--

CREATE TABLE `etnias` (
  `id_etnia` int(3) NOT NULL,
  `etnia` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pnf`
--

CREATE TABLE `pnf` (
  `id` int(2) NOT NULL,
  `pnf` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pnf`
--

INSERT INTO `pnf` (`id`, `pnf`) VALUES
(1, 'informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(130) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `last_session`, `id_tipo`) VALUES
(1, 'administrador', '$2y$10$08IJzb8J.k.4IVyuUHYWcOCl2TgAGf6W1SiYbOi9PP/cRQLGcnq9K', 'Administrador', '2019-11-13 17:55:50', 1),
(2, 'usuario', '$2y$10$i.SCzohK0aL6lftSFaAbRO560jZqr.rzQzYmYpQQ8KPKTNUYp1ohe', 'Usuario', '2019-11-13 18:04:44', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  ADD PRIMARY KEY (`id_discapacidad`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`cedula`);

--
-- Indices de la tabla `etnias`
--
ALTER TABLE `etnias`
  ADD PRIMARY KEY (`id_etnia`);

--
-- Indices de la tabla `pnf`
--
ALTER TABLE `pnf`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `pnf` (`pnf`) USING BTREE;

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  MODIFY `id_discapacidad` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` mediumint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `etnias`
--
ALTER TABLE `etnias`
  MODIFY `id_etnia` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pnf`
--
ALTER TABLE `pnf`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
