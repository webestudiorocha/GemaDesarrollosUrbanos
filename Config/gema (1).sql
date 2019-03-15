-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2019 a las 16:49:54
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'facundo@estudiorochayasoc.com.ar', 'faAr2010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `vistas` int(11) NOT NULL DEFAULT '0',
  `link` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `cod`, `titulo`, `area`) VALUES
(1, '0b5ab47da0', 'Servicio1', 'servicios'),
(2, '677529cf09', 'Novedades1', 'novedades'),
(3, '04029b6b06', 'Productos1', 'productos'),
(4, '803eefade4', 'Poducto2', 'productos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(11) NOT NULL,
  `contenido` longtext COLLATE utf8mb4_spanish_ci,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `contenido`, `cod`) VALUES
(2, '<div class=\"btgrid\">\r\n<div class=\"row row-1\">\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<p><a href=\"http://192.168.0.22/lasilleria/assets/archivos/images/arms-care-check-905874.jpg\"><img alt=\"\" src=\"http://192.168.0.22/lasilleria/assets/archivos/images/arms-care-check-905874.jpg\" style=\"width:100%\" /></a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<p><a data-lightbox=\"9p5gis1nqv\" data-lightbox-saved=\"\" href=\"http://192.168.0.22/lasilleria/assets/archivos/images/arms-care-check-905874.jpg\"><img alt=\"\" src=\"http://192.168.0.22/lasilleria/assets/archivos/images/arms-care-check-905874.jpg\" style=\"width:100%\" /></a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<p><a data-lightbox=\"dc9orod7rn\" data-lightbox-saved=\"\" href=\"http://192.168.0.22/lasilleria/assets/archivos/images/arms-care-check-905874.jpg\"><img alt=\"\" src=\"http://192.168.0.22/lasilleria/assets/archivos/images/arms-care-check-905874.jpg\" style=\"width:100%\" /></a></p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row row-2\">\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<p style=\"text-align:center\"><span style=\"font-family:Georgia,serif\"><strong>Excelente Calidad</strong></span></p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<p style=\"text-align:center\"><span style=\"font-family:Georgia,serif\"><strong>Excelente Calidad</strong></span></p>\r\n\r\n<hr /></div>\r\n</div>\r\n\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<p style=\"text-align:center\"><span style=\"font-family:Georgia,serif\"><strong>Excelente Calidad</strong></span></p>\r\n\r\n<hr /></div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', 'Empresa'),
(3, '<p>gjhgjgjhg</p>\r\n', 'Footer'),
(4, '<p>&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;</p>\r\n', 'DESCRIPCION'),
(5, '', 'CONTACTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci,
  `desarrollo` text COLLATE utf8mb4_spanish_ci,
  `categoria` text COLLATE utf8mb4_spanish_ci,
  `keywords` text COLLATE utf8mb4_spanish_ci,
  `description` text COLLATE utf8mb4_spanish_ci,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `ruta`, `cod`) VALUES
(70, 'assets/archivos/recortadas/a_4e521429ca.jpg', 'f51cf4218a'),
(71, 'assets/archivos/recortadas/a_54aed85342.jpg', '4c5b330616'),
(72, 'assets/archivos/recortadas/a_7e5115f8af.jpg', 'a1f392fcd9'),
(73, 'assets/archivos/recortadas/a_546bdf68de.jpg', 'dc7d7ea3fa'),
(75, 'assets/archivos/recortadas/a_d13ae3ac19.jpg', '71031f3292'),
(76, 'assets/archivos/recortadas/a_a5ff1e8ff8.jpg', '018995175f'),
(77, 'assets/archivos/recortadas/a_cf2564a72f.jpg', '107098c0ae'),
(78, 'assets/archivos/recortadas/a_1c13339f67.jpg', '9e41853706'),
(79, 'assets/archivos/recortadas/a_527cd4dfa1.jpg', '2759897731'),
(80, 'assets/archivos/recortadas/a_305d12fd10.jpg', 'f038a29a86'),
(81, 'assets/archivos/recortadas/e3ccc29dc2.png', '7f57ae91ff'),
(82, 'assets/archivos/recortadas/5c51d2e703.jpg', '54cdd55c1a'),
(83, 'assets/archivos/recortadas/8139f634fe.jpg', '42fb682408');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `landing`
--

CREATE TABLE `landing` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `desarrollo` text,
  `categoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id` int(20) NOT NULL,
  `codigo` int(20) DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci,
  `desarrollo` text COLLATE utf8mb4_spanish_ci,
  `categoria` text COLLATE utf8mb4_spanish_ci,
  `keywords` text COLLATE utf8mb4_spanish_ci,
  `description` text COLLATE utf8mb4_spanish_ci,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES
(12, 'dc7d7ea3fa', 'En febrero volvió a caer la venta de insumos para la construcción', '<p>La&nbsp;venta&nbsp;de insumos para la construcci&oacute;n cay&oacute;&nbsp;13,2% en febrero pasado&nbsp;con&nbsp;relaci&oacute;n al mismo&nbsp;mes del 2018, de acuerdo con el &Iacute;ndice Construya. En cambio, al comparar con enero, los vol&uacute;menes despachados en febrero registraron un aumento de 5,33% desestacionalizado. En el primer bimestre del a&ntilde;o el &Iacute;ndice Construya acumul&oacute;&nbsp;un descenso de 16,8%&nbsp;en comparaci&oacute;n con el mismo per&iacute;odo del a&ntilde;o anterior.&nbsp;En un comunicado, Construya&nbsp;destac&oacute; que &quot;es el momento para aprovechar la&nbsp;fuerte reducci&oacute;n en d&oacute;lares del costo de construcci&oacute;n&nbsp;y obtener beneficios a lo largo del tiempo&quot;. Este &iacute;ndice mide la evoluci&oacute;n de los vol&uacute;menes vendidos al sector privado de los productos que fabrican las empresas que conforman el Grupo Construya.&nbsp;Lo integran ladrillos cer&aacute;micos, cemento portland, cal, aceros largos, carpinter&iacute;a de aluminio; pisos y revestimientos cer&aacute;micos, adhesivos y pastinas; pinturas impermeabilizantes, sanitarios, grifer&iacute;a y ca&ntilde;os de conducci&oacute;n de agua.</p>\r\n', '677529cf09', '', '                                                        ', '2019-03-01'),
(14, '71031f3292', 'El Consejo profesional de los arquitectos teme que se frenen los trámites para obras nuevas', '<p>A dos meses de su&nbsp;entrada en vigencia, la demora en la reglamentaci&oacute;n del nuevo C&oacute;digo de Edificaci&oacute;n paraliza la presentaci&oacute;n de nuevos proyectos. &quot;Somos enteramente conscientes de la enorme preocupaci&oacute;n de nuestros matriculados ante las dudas e incertidumbres que ha causado la sanci&oacute;n, publicaci&oacute;n y&nbsp;vigencia del nuevo C&oacute;digo de Edificaci&oacute;n sin la existencia de la debida Reglamentaci&oacute;n. Esta situaci&oacute;n causa una real paralizaci&oacute;n en la actividad de los arquitectos, para quienes han transcurridos dos meses sin poder ejercer su profesi&oacute;n con seguridad y certeza&quot;, describe la carta enviada por el Consejo Profesional de Arquitectura y Urbanismo (CPAU) al Subsecretario de Registros, Interpretaci&oacute;n y Catastro, Arq. Rodrigo Cruz.El pasado 20 de febrero, Cruz entreg&oacute; al CPAU un&nbsp;borrador del&nbsp;Reglamento del C&oacute;digo de Edificaci&oacute;n&nbsp;para su revisi&oacute;n, en el &aacute;mbito de uno de los encuentros realizados entre&nbsp;funcionarios del Gobierno de la Ciudad&nbsp;y matriculados interesados en el tema, en el auditorio del Banco Hipotecario.&nbsp;La entrega consisti&oacute; en tres tomos (978 carillas) cuyo contenido abarca&nbsp;aspectos reglamentarios relacionados con todos los rubros que componen una edificaci&oacute;n y todo aquello que se vincula con los profesionales, los t&eacute;cnicos y distintos procedimientos ante las diferentes direcciones y divisiones del Gobierno de la Ciudad. &quot;La revisi&oacute;n de todo ello ha de requerir un tiempo que es dif&iacute;cil de determinar a-priori ya que la gran trascendencia e importancia que tendr&aacute; para el&nbsp;ejercicio profesional&nbsp;de la arquitectura en la Cuidad de Buenos Aires es incuestionable, y ello nos obliga a un minucioso estudio de lo all&iacute; normado, lo que adem&aacute;s requiere consultas con especialistas&quot;, explica la carta. Y sigue: &quot;En el entendimiento que ser&aacute;n necesarios l&oacute;gicos y variados ajustes que son habituales cuando se aplican nuevas normas, cuya revisi&oacute;n demandar&aacute; sin duda un&nbsp;tiempo m&aacute;s prolongado que el deseado, solicitamos al Se&ntilde;or Subsecretario que disponga a la brevedad de las medidas que estime m&aacute;s convenientes para&nbsp;permitir que la actividad de los profesionales de la arquitectura y de la construcci&oacute;n en general, pueda ser desarrollada con normalidad&nbsp;en el &aacute;mbito de la Cuidad de Buenos Aires.</p>\r\n', '677529cf09', '', '', '2019-03-01'),
(15, '018995175f', 'Cómo pedir hormigón elaborado', '<p>La Asociaci&oacute;n Argentina del Hormig&oacute;n Elaborado ofrece un documento con una serie de pautas para realizar el encargo, la recepci&oacute;n y la puesta en obra.</p>\r\n\r\n<p>La&nbsp;<strong>Asociaci&oacute;n Argentina del Hormig&oacute;n Elaborado</strong>&nbsp;(AAHE) public&oacute; un manual basado en el trabajo de la Asociaci&oacute;n Espa&ntilde;ola de Fabricantes de Hormig&oacute;n Preparado (ANEFHOP), adaptado a las experiencias propias, la terminolog&iacute;a, usos y costumbres de obra locales; a la normativa IRAM y a las reglamentaciones del CIRSOC.</p>\r\n\r\n<p>El documento, disponible en su p&aacute;gina web, ofrece informaci&oacute;n t&eacute;cnica precisa y recomendaciones orientadas a facilitar la tarea de directores de obra, constructores y proveedores de hormig&oacute;n elaborado.</p>\r\n\r\n<p>Dedica un cap&iacute;tulo al&nbsp;<strong>pedido del material</strong>, en el que se considera fundamental ser muy preciso al realizarlo; y establecer todas las pautas como corresponde a cualquier contrato. Antes de emitir una orden de compra, es muy importante asegurar que la cantidad y velocidad de despacho pueda ser verificada por el proveedor y que el hormig&oacute;n pueda ser manipulado correctamente por el comprador. Las &oacute;rdenes deben ser siempre claras y las notificaciones sobre cancelaciones o cambios en las mismas se deben acordar de antemano. Es recomendable enviar tanto los pedidos, modificaciones o cancelaciones por correo electr&oacute;nico.</p>\r\n\r\n<p>La descarga de un motohormigonero debe cumplirse dentro del tiempo establecido, debi&eacute;ndose anotar claramente ese dato en el remito correspondiente al viaje del mencionado cami&oacute;n. Los&nbsp;<strong>datos b&aacute;sicos</strong>&nbsp;de la obra que se deben suministrar al productor de hormig&oacute;n son los siguientes:</p>\r\n\r\n<p>1.&nbsp;<strong>Tipo de estructura</strong>, total de hormig&oacute;n en m3 que llevar&aacute; toda la obra, tiempo estimado de ejecuci&oacute;n.</p>\r\n\r\n<p>2.&nbsp;<strong>Resistencia</strong>&nbsp;caracter&iacute;stica a compresi&oacute;n del hormig&oacute;n en MPa o en kg/cm2.</p>\r\n\r\n<p>3. Tipo y cantidad m&iacute;nima de<strong>&nbsp;cemento por metro c&uacute;bico</strong>&nbsp;de hormig&oacute;n que pueda ser necesario por exigencias de durabilidad u otros que no sean la condici&oacute;n de resistencia a compresi&oacute;n (como relaci&oacute;n agua/cemento).</p>\r\n\r\n<p>4. Tipo y tama&ntilde;o m&aacute;ximo de los&nbsp;<strong>agregados</strong>.</p>\r\n\r\n<p>5.&nbsp;<strong>Consistencia de la mezcla fresca</strong>&nbsp;en cent&iacute;metros en el momento de la descarga, medida en el tronco de Cono de Abrams.</p>\r\n\r\n<p>6.&nbsp;<strong>Aditivos</strong>&nbsp;qu&iacute;micos a incorporar al hormig&oacute;n.</p>\r\n\r\n<p>7.&nbsp;<strong>Contenido de aire</strong>&nbsp;intencionalmente incorporado en porcentaje, en las mezclas que lo especifiquen.</p>\r\n\r\n<p>8.&nbsp;<strong>Caracter&iacute;sticas especiales</strong>&nbsp;que requiere ese hormig&oacute;n: por ejemplo, hormig&oacute;n a la vista, resistente al desgaste, resistente al ataque por sulfatos, etc&eacute;tera.</p>\r\n\r\n<p>9. Si ser&aacute;&nbsp;<strong>hormig&oacute;n bombeado</strong>&nbsp;o el transporte interno se har&aacute; por medios tradicionales.</p>\r\n\r\n<p>10.<strong>&nbsp;Capacidad de recepci&oacute;n</strong>&nbsp;del hormig&oacute;n en la obra, en lo posible en m3 /hora, y toda otra informaci&oacute;n pertinente que surja del cambio de ideas entre el usuario y productor.</p>\r\n\r\n<p>En caso de ser necesario, el productor debe completar informaci&oacute;n sobre la obra, enviando un inspector a la misma con el objeto de verificar la ubicaci&oacute;n, accesos y posibilidades de maniobra para los motohormigoneros, posible lugar de descarga o de colocaci&oacute;n de la bomba de hormig&oacute;n, y pasajes o rampas que puedan representar un riesgo al desplazamiento de personas o veh&iacute;culos.</p>\r\n\r\n<p>En lo que respecta a la obra en s&iacute;, se recomienda al encargado verificar en las&nbsp;<strong>armaduras</strong>&nbsp;colocadas la relaci&oacute;n entre la separaci&oacute;n de las barras con el tama&ntilde;o m&aacute;ximo del agregado solicitado.</p>\r\n\r\n<p>Al recibir el hormig&oacute;n, se deben realizar en la obra algunas tareas para facilitar la operaci&oacute;n de los camiones, tales como las siguientes:</p>\r\n\r\n<p>1. Preparar los&nbsp;<strong>accesos y recorridos</strong>&nbsp;para los motohormigoneros dentro de la obra, para que puedan entrar, maniobrar, descargar y salir sin impedimentos y en el menor tiempo posible. Y que esos accesos y recorridos no se deterioren con el paso de los primeros camiones y haya que detener el hormigonado por un veh&iacute;culo atascado.</p>\r\n\r\n<p>2. Debe haber&nbsp;<strong>colaboraci&oacute;n de la obra</strong>, con los conductores de los motohormigoneros y viceversa. Y eso se consigue pensando durante cinco minutos y no discutiendo durante cinco horas.</p>\r\n\r\n<p>3. Se debe tener todo dispuesto antes que llegue el primer cami&oacute;n y no esperar a que &eacute;ste llegue y reci&eacute;n empezar con los&nbsp;<strong>preparativos para recibir el material</strong>.</p>\r\n\r\n<p>4. No ejecutar&nbsp;<strong>per&iacute;odos de descanso</strong>&nbsp;o comidas mientras se est&aacute; descargando un cami&oacute;n. En caso de tomarse un lapso largo a tales efectos, hac&eacute;rselo saber a la planta de elaboraci&oacute;n para que disminuya o suspenda provisoriamente el ritmo de los despachos.</p>\r\n\r\n<p>&quot;Durante las&nbsp;<strong>pausas de bombeo</strong>, descargar la tuber&iacute;a por un bombeo en retroceso, bombeando varias veces hacia adelante y hacia atr&aacute;s. Nunca permitir permanencia de presi&oacute;n en la tuber&iacute;a&quot;, acota Federico Lingua, Gerente General de&nbsp;TZR Bombas y Equipos para Hormig&oacute;n. Y agrega: &quot;Durante interrupciones prolongadas, parar el motor ya que las vibraciones disgregan el hormig&oacute;n. Cada 10 minutos realizar bombeo y retroceso. En bombeos de altura, evitar interrupciones&quot;.</p>\r\n\r\n<p>Por &uacute;ltimo, el manual enfatiza que, por bueno que sea el hormig&oacute;n, no ocultar&aacute; los defectos que puedan derivarse de una mala ejecuci&oacute;n del hormigonado. Por ejemplo: encofrados sucios o muy secos, agregado de agua en exceso, demoras en la descarga y/o una deficiente colocaci&oacute;n, compactaci&oacute;n o terminaci&oacute;n.</p>\r\n', '677529cf09', '', '                            ', '2019-03-01'),
(16, '107098c0ae', 'Aclaran dudas sobre los nuevos Códigos', '<p>El CPAU organiz&oacute; dos&nbsp;encuentros con funcionarios del Gobierno porte&ntilde;o, quienes respondieron las consultas de los matriculados.</p>\r\n\r\n<p>Apenas entraron en vigencia los nuevos C&oacute;digos, el&nbsp;Consejo Profesional de Arquitectura y Urbanismo&nbsp;(CPAU) invit&oacute; a los matriculados a varios&nbsp;encuentros con funcionarios del Gobierno de la Ciudad con el objetivo de aclarar dudas. La avalancha de solicitudes excedi&oacute; r&aacute;pidamente la capacidad del auditorio. Entonces, pidieron prestado un sal&oacute;n en el Banco Hipotecario para celebrar las tres charlas referidas a&nbsp;C&oacute;digo Urban&iacute;stico&nbsp;(CU),&nbsp;C&oacute;digo de Edificaci&oacute;n&nbsp;(CE), ya realizadas,&nbsp;y la&nbsp;Ley de Plusval&iacute;a&nbsp;(mi&eacute;rcoles 27/2).</p>\r\n\r\n<p>Para cumplir el objetivo de aclarar dudas sobre la implementaci&oacute;n de las nuevas normas para construir en la Ciudad, y presumiendo que los &aacute;nimos estar&iacute;an caldeados, se advirti&oacute; que la instancia de debate conceptual ya estaba superada (el CU est&aacute; vigente desde el 27 de diciembre de 2018 y el CE desde el 1 de enero de este a&ntilde;o) y que las presentaciones ser&iacute;an exclusivamente sobre la aplicaci&oacute;n de la nueva normativa.</p>\r\n\r\n<p>La&nbsp;obligatoriedad de mancomunar patios&nbsp;tambi&eacute;n fue explicada.Se debe considerar al menos un patio de los linderos, y los vac&iacute;os deben coincidir al menos en un 50%. Si el proyecto tuviera como lindero una torre, el retiro de tres metros desde la medianera es obligatorio siempre. Tanto para estos casos como para establecer enrases y retiros, se considera que el lindero est&aacute; consolidado si alcanza un 75% de la altura del distrito.</p>\r\n\r\n<p>La charla referida al CE transcurri&oacute; con algunos momentos de alta tensi&oacute;n. La decisi&oacute;n de separar un&nbsp;reglamento t&eacute;cnico&nbsp;de la Ley para simplificar las futuras actualizaciones implica que ciertas especificaciones, imprescindibles para entender los requerimientos que se exigen, no est&eacute;n disponibles. Con lo cual,&nbsp;la presentaci&oacute;n de nuevos tr&aacute;mites est&aacute; virtualmente frenada&nbsp;hasta que el equipo que encabeza Cruz defina la reglamentaci&oacute;n de la ley.</p>\r\n\r\n<p>Ese mismo d&iacute;a (20 de febrero) Cruz entreg&oacute; a las autoridades del CPAU un borrador de la reglamentaci&oacute;n. Su presidente, Valeria del Puerto, asegur&oacute; que ser&aacute; revisado con prioridad. Y aprovech&oacute; para insistir en la necesidad de constituir una&nbsp;mesa de ayuda en la DGROC&nbsp;que asista a los profesionales en el per&iacute;odo de transici&oacute;n.</p>\r\n\r\n<p>En tanto, Hertel anunci&oacute; que en estos d&iacute;as ya estar&aacute; disponible la&nbsp;nueva car&aacute;tula para presentaci&oacute;n de planos. En ella se plasmar&aacute;n los cambios introducidos en relaci&oacute;n a la nueva clasificaci&oacute;n de avisos por tipo de obra, y las firmas de los responsables (algunas se pueden posponer hasta el inicio de obra).</p>\r\n\r\n<p>Todos los encuentros fueron grabados para que la informaci&oacute;n tenga mayor difusi&oacute;n y estar&aacute;n disponibles en la p&aacute;gina del CPAU.</p>\r\n', '677529cf09', '', '', '2019-02-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT '1',
  `precio` float NOT NULL DEFAULT '0',
  `estado` int(11) DEFAULT '0',
  `tipo` int(11) DEFAULT '0',
  `usuario` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `detalle` text COLLATE utf8mb4_spanish_ci,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci,
  `desarrollo` text COLLATE utf8mb4_spanish_ci,
  `categoria` text COLLATE utf8mb4_spanish_ci,
  `keywords` text COLLATE utf8mb4_spanish_ci,
  `description` text COLLATE utf8mb4_spanish_ci,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci,
  `precio` float DEFAULT NULL,
  `precio_mayorista` float DEFAULT NULL,
  `precio_descuento` float DEFAULT NULL,
  `stock` int(11) DEFAULT '0',
  `desarrollo` text COLLATE utf8mb4_spanish_ci,
  `categoria` text COLLATE utf8mb4_spanish_ci,
  `subcategoria` text COLLATE utf8mb4_spanish_ci,
  `keywords` text COLLATE utf8mb4_spanish_ci,
  `description` text COLLATE utf8mb4_spanish_ci,
  `fecha` date DEFAULT NULL,
  `meli` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_spanish_ci,
  `cod_producto` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `var1` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Material',
  `var2` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Medidas',
  `var3` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `var4` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `var5` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `var6` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `var7` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `var8` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `cod`, `titulo`, `precio`, `precio_mayorista`, `precio_descuento`, `stock`, `desarrollo`, `categoria`, `subcategoria`, `keywords`, `description`, `fecha`, `meli`, `url`, `cod_producto`, `var1`, `var2`, `var3`, `var4`, `var5`, `var6`, `var7`, `var8`) VALUES
(13, '7f57ae91ff', 'Puerta de Madera  Simple', 4000, 0, 3000, 2, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '803eefade4', '', '', '            ', '2019-03-13', '', '', '12', 'Roble', '2x2', '', '', '', '', '', ''),
(14, '54cdd55c1a', 'Puerta simple Negra', 5000, 0, 4100, 0, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '803eefade4', '', '', '            ', '2019-03-13', '', '', '4', 'Madera Masisa', '2,5x2,5 metros', '', '', '', '', '', ''),
(15, '42fb682408', 'Puerta con detalle', 6000, 0, 5000, 1, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '04029b6b06', '', '', '            ', '2019-03-13', '', '', '2', 'Algarrobo y vidrio', '3x3 metros', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubros`
--

CREATE TABLE `rubros` (
  `id` int(11) NOT NULL,
  `linea` int(20) DEFAULT NULL,
  `rubro` int(20) DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci,
  `desarrollo` text COLLATE utf8mb4_spanish_ci,
  `categoria` text COLLATE utf8mb4_spanish_ci,
  `keywords` text COLLATE utf8mb4_spanish_ci,
  `description` text COLLATE utf8mb4_spanish_ci,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES
(13, '9e41853706', 'Interiorismo', '<p>Si deseas darle una nueva imagen a tus espacios, sean dentro de tu hogar o en tu oficina, entonces contactanos, encontrar&aacute;s los mejores profesionales que puedan ayudarte a crear excelentes dise&ntilde;os.</p>\r\n\r\n<p>En muchas ocasiones perdemos mucho tiempo buscando el personal o el profesional ideal para este tipo de servicios, la pr&oacute;xima vez contactanos!</p>\r\n', '0b5ab47da0', '', '', '2019-03-01'),
(14, '2759897731', 'Dirección de obra', '<p>Te ofrecemos nuestros servicios&nbsp;para&nbsp;llevar&nbsp;a cabo alguna reforma dentro de tu oficina o de tu hogar,&nbsp; uno de los requisitos legales que debes cumplir adem&aacute;s del plano de la obra, es que tengas un equipo que la dirija, un equipo de profesionales. En nuestro estudio&nbsp;podr&aacute;s encontrar este servicio el cual te garantiza la culminaci&oacute;n y la ejecuci&oacute;n de una obra perfecta y bien elaborada.&nbsp;</p>\r\n', '0b5ab47da0', '', '                            ', '0000-00-00'),
(15, 'f038a29a86', 'Planos y presupuestos', '<p>Armamos planos y presupuestos a tu medida de la forma m&aacute;s profesional posible! No te olvides de consultarnos!&nbsp;&nbsp;</p>\r\n', '0b5ab47da0', '', '', '2019-03-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci,
  `subtitulo` text COLLATE utf8mb4_spanish_ci,
  `categoria` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `cod`, `titulo`, `subtitulo`, `categoria`, `fecha`) VALUES
(9, 'a1f392fcd9', 'ghjjhg', '', '', '2019-03-13'),
(10, '4c5b330616', 'sdadsfsd', '', '', '2019-03-13'),
(11, 'f51cf4218a', 'eter', '', '', '2019-03-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci,
  `apellido` text COLLATE utf8mb4_spanish_ci,
  `doc` text COLLATE utf8mb4_spanish_ci,
  `email` text COLLATE utf8mb4_spanish_ci,
  `password` text COLLATE utf8mb4_spanish_ci,
  `postal` text COLLATE utf8mb4_spanish_ci,
  `localidad` text COLLATE utf8mb4_spanish_ci,
  `provincia` text COLLATE utf8mb4_spanish_ci,
  `pais` text COLLATE utf8mb4_spanish_ci,
  `telefono` text COLLATE utf8mb4_spanish_ci,
  `celular` text COLLATE utf8mb4_spanish_ci,
  `invitado` int(11) NOT NULL DEFAULT '0',
  `descuento` float DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci,
  `link` text COLLATE utf8mb4_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `landing`
--
ALTER TABLE `landing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rubros`
--
ALTER TABLE `rubros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `landing`
--
ALTER TABLE `landing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `rubros`
--
ALTER TABLE `rubros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
