-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2025 a las 16:10:43
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
-- Base de datos: `gest_atletas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncias`
--

CREATE TABLE `denuncias` (
  `id` int(11) NOT NULL,
  `codigo_referencia` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `menu_documentos` varchar(10) DEFAULT NULL,
  `text_592` text DEFAULT NULL,
  `menu_contacto` varchar(20) DEFAULT NULL,
  `correo_electronico` varchar(255) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `menu_instituciones` varchar(100) DEFAULT NULL,
  `direccion_seccion` varchar(255) DEFAULT NULL,
  `ciudades` varchar(50) DEFAULT NULL,
  `menu_paises` varchar(50) DEFAULT NULL,
  `tipo_denuncia` varchar(100) DEFAULT NULL,
  `your_subject` varchar(255) DEFAULT NULL,
  `mensaje` text DEFAULT NULL,
  `fichero_simplecfdb7_file` varchar(255) DEFAULT NULL,
  `multilinefile_87cfdb7_file` varchar(255) DEFAULT NULL,
  `id_estado` int(11) NOT NULL DEFAULT 1,
  `status_id` int(11) DEFAULT NULL,
  `comentario` varchar(300) DEFAULT NULL,
  `assigned_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `denuncias`
--

INSERT INTO `denuncias` (`id`, `codigo_referencia`, `nombre`, `apellidos`, `menu_documentos`, `text_592`, `menu_contacto`, `correo_electronico`, `numero`, `menu_instituciones`, `direccion_seccion`, `ciudades`, `menu_paises`, `tipo_denuncia`, `your_subject`, `mensaje`, `fichero_simplecfdb7_file`, `multilinefile_87cfdb7_file`, `id_estado`, `status_id`, `comentario`, `assigned_role_id`) VALUES
(1, NULL, '', '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', NULL, NULL, NULL, NULL, 'VVFVFVF', 'VVVV', NULL, NULL, 1, NULL, NULL, 1),
(2, NULL, '', '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', NULL, NULL, NULL, NULL, 'mensaje de test', 'mensaje de prubas', NULL, NULL, 1, NULL, NULL, 1),
(3, NULL, '', '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', NULL, NULL, NULL, NULL, 'mensaje de test', 'TEST', NULL, NULL, 1, NULL, ' ', 1),
(4, NULL, ' xxacscs', 'CSSCCSCS', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', NULL, NULL, NULL, NULL, 'wqqwwc', 'cssCSSCSC', NULL, NULL, 1, NULL, NULL, 1),
(5, NULL, '', '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', NULL, NULL, NULL, NULL, 'fffFFFQqf', 'FFQfqf', NULL, NULL, 1, NULL, NULL, 1),
(6, NULL, '', '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', NULL, NULL, NULL, NULL, 'hhfhffh', 'hfhfhfhhf', NULL, NULL, 1, NULL, NULL, 1),
(7, NULL, '', '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', NULL, NULL, NULL, NULL, 'mensaje de test', 'QWFWFFWQ', NULL, NULL, 1, NULL, NULL, 1),
(8, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'La anticorrupción comprende', 'Malabo', NULL, 'Enriquecimiento ilícito', '&quot;La denuncia ha sido asignada correctamente.&quot;', 'La frase &quot;la denuncia ha sido asignada&quot; está bien escrita y es gramaticalmente correcta. Si deseas un tono más formal o añadir un contexto, podrías considerar frases como:\r\n\r\n&quot;La denuncia ha sido asignada correctamente.&quot;\r\n&quot;La denuncia ha sido asignada a un agente.&quot;\r\nPero, en general, tu frase es clara y correcta. ¿Necesitas ayuda con algo más relacionado?', NULL, NULL, 1, NULL, NULL, 1),
(9, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'Direccion Geenral de Seguridad ', 'Malabo', NULL, 'Enriquecimiento ilícito', 'fui acosado por un militar', 'me ha acosado un militar y me ha amenazado  a muerte; envio los adjuntos', NULL, NULL, 1, NULL, NULL, 1),
(10, NULL, NULL, 'mane mikue', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'Administración Pública.', 'Ebebiying', NULL, 'Tráfico de Influencia', '&quot;La denuncia ha sido asignada correctamente.&quot;', 'Únase a la reunión de Zoom\r\nhttps:&#047;&#047;us04web.zoom.us&#047;j&#047;74625479577?pwd=KCl1CWvHCXTHkazjbQSaGd1qNnp5jp.1\r\n\r\nID de reunión: 746 2547 9577\r\nCódigo de acceso: 79m7Bq\r\n\r\n\r\n\r\n', NULL, NULL, 1, NULL, NULL, 1),
(11, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'Direccion Geenral de Seguridad', 'Malabo', NULL, 'Enriquecimiento ilícito', 'Mi mujer me ha destrozado todo el coche', 'Mi mujer me ha destrozado todo el coche', NULL, NULL, 1, NULL, NULL, 1),
(12, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'Direccion Geenral de Seguridad', 'Malabo', NULL, 'Enriquecimiento ilícito', 'MUNI DEBE MEJORARA LOS SERVUCIS', 'MUNI DEBE MEJORARA LOS SERVUCIS', NULL, NULL, 1, NULL, NULL, 1),
(13, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'Direccion Geenral de Seguridad', 'Malabo', NULL, 'Tráfico de Influencia', 'MUNI DEBE MEJORARA LOS SERVUCIS', 'MUNI DEBE MEJORARA LOS SERVUCIS', NULL, NULL, 1, NULL, NULL, 1),
(14, NULL, NULL, 'osa osa', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'La anticorrupción comprende', 'Malabo', NULL, 'Enriquecimiento ilícito', '&quot;La denuncia ha sido asignada correctamente.&quot;', '&quot;La denuncia ha sido asignada correctamente.&quot;', NULL, NULL, 1, NULL, NULL, 1),
(15, NULL, NULL, 'osa osa', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'La anticorrupción comprende', 'Malabo', NULL, 'Enriquecimiento ilícito', '&quot;La denuncia ha sido asignada correctamente.&quot;', '&quot;La denuncia ha sido asignada correctamente.&quot;', NULL, NULL, 1, NULL, NULL, 1),
(16, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', '', 'Malabo', NULL, 'Enriquecimiento ilícito', 'XcCCSC', 'CSSCC', NULL, NULL, 1, NULL, NULL, 1),
(17, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'FINANZAS Y RECURSO HUMANOS', 'Ebebiying', NULL, 'Enriquecimiento ilícito', '&quot;La denuncia ha sido asignada correctamente.&quot;', '&quot;La denuncia ha sido asignada correctamente.&quot;', NULL, NULL, 1, NULL, NULL, 1),
(18, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'Atención al ciudadano', 'Malabo', NULL, 'Abuso de Funciones', '&quot;La denuncia ha sido asignada correctamente.&quot;', '&quot;La denuncia ha sido asignada correctamente.&quot;', NULL, NULL, 1, NULL, NULL, 1),
(19, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'FINANZAS Y RECURSO HUMANOS', 'Ebebiying', NULL, 'Enriquecimiento ilícito', '&quot;La denuncia ha sido asignada correctamente.&quot;', 'TMD-5004999', NULL, NULL, 1, NULL, NULL, 1),
(20, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'ENTIDADES AUTÓNOMAS', '', 'Malabo', NULL, 'Enriquecimiento ilícito', 'SEGESA DEBE MEJORAR LOS SERVICOS', 'SEGESA DEBE MEJORAR LOS SERVICOS', NULL, NULL, 1, NULL, NULL, 1),
(21, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'cniapge', 'Bata', NULL, 'Enriquecimiento ilícito', '&quot;La denuncia ha sido asignada correctamente.&quot;', 'TMD-5004999', NULL, NULL, 1, NULL, NULL, 1),
(22, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'FINANZAS Y RECURSO HUMANOS', 'Evinayong', NULL, 'Enriquecimiento ilícito', '&quot;La denuncia ha sido asignada correctamente.&quot;', 'CDT-5812137', NULL, NULL, 1, NULL, NULL, 1),
(23, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'FINANZAS Y RECURSO HUMANOS', 'Ebebiying', NULL, 'Enriquecimiento ilícito', 'La arquitectura API REST ', 'La arquitectura API REST La arquitectura API REST ', NULL, NULL, 1, NULL, NULL, 1),
(24, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'Vbvvvv', 'Mongomo', NULL, 'Obstrucción de la Justica', 'Hhhdj', 'Bjdjjjdjd', NULL, NULL, 1, NULL, NULL, 1),
(25, NULL, 'BbvbzbbvbjnnnNn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1),
(26, NULL, NULL, 'GUinea Ecuatorial', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'robo', 'Luba', NULL, 'Apropiación Indebida de Bienes en el Sector Privado', 'fm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN K', 'fm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN K´\r\nfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN Kfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN Kfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN Kfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN Kfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN Kfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN Kfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN Kfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN Kfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew LfDN Kfm,ghfj jabjsd fdsbfjdsfodsa fbdsjbfjkds bf dksbfkodsfak sdfmdskfkdlsabklbisfklbdisf jlbfj dsgfj dsbfjdsfjds fmdsfgiewhfkew804yib54kly48y5 4mds vmc vmc vb8y43v mvdsklcbd8yf ew Lf', NULL, NULL, 1, NULL, NULL, 1),
(27, NULL, NULL, '¿Usted quiere que sus datos personales se reflejen en el formulario?', 'DIP', NULL, 'TELEFONO', 'Insertar entidad', '¿Usted quiere que su', 'MINISTERIO', '¿Usted quiere que sus datos personales se reflejen en el formulario?', 'Malabo', NULL, 'Enriquecimiento ilícito', '¿Usted quiere que sus datos personales se reflejen en el formulario?', '¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario? ¿Usted quiere que sus datos personales se reflejen en el formulario?', NULL, NULL, 1, NULL, NULL, 1),
(28, NULL, NULL, 'YCW-1960856', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'YCW-1960856', 'Evinayong', NULL, 'Apropiación Indebida de Bienes en el Sector Privado', 'YCW-1960856', 'YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856YCW-1960856', NULL, NULL, 1, NULL, NULL, 1),
(29, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'ENTIDADES AUTÓNOMAS', 'FINANZAS Y RECURSO HUMANOS', 'Mongomo', NULL, 'Enriquecimiento ilícito', '¿CONOCES ALGÚN ACTO DE CORRUPCIÓN?', '¿CONOCES ALGÚN ACTO DE CORRUPCIÓN?\r\nHAZ TU DENUNCIA \r\nEste es el portal del Gobierno de Guinea Ecuatorial para denunciar actos de corrupción . Con esta herramienta , podrás denunciar de manera segura , directa e inmediata cualquier irregularidad en nuestra Administración Pública.', NULL, NULL, 1, NULL, NULL, 1),
(30, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'Delegación De Trabajo ', 'Malabo', NULL, 'Abuso de Funciones', 'VIOLACION CONSCIENTE DE LOS  ARTÍCULO  DE LGT VIGENTE', 'Muchas gracias por el portal es un avance muy grande ahora se puede hacer oír.\r\nVengo a denunciar las malas prácticas que los responsables del ministerio de trabajo en concreto en la sección de la delegación de trabajo de Malabo, juntamente con la empresa Gepsing permitiéndoles, violar los artículos  83 de LGT sobre  VACACIONES, los empleados llevan trabajando durante dos años inturruptibles sin remuneración vacacional  ni el disfrute de las mismas. Pero el delegado de trabajo compareció para intentar hacer ver que era normal dicha situación. Y en los artículos 78. Sobre Horas Extraordinarias, 79. Descansos Diarios y Semanales,  80. Excepciones, en este último artículo en su punto 3. dice: &quot;El trabajo en los días de descanso semanal o de fiesta nacional o local será remunerado con un incremento de 50% sobre el salario normal por una jornada ordinaria sin perjuicio de derecho del trabajador a disfrutar de un día de descanso compensatorio&quot; y la Empresa no hace eso, los empleados trabajan 12 horas en Alta Mar en los domingos en cambio la Empresa les computa sólo 8 horas las 4 horas se las quedan y el Ministerio está al corriente y se calla sin explicación durante más de dos años. ESAS SON LAS SOSPECHAS CORRUPTAS ENTRE EL MINISTERIO DE TRABAJO Y LA EMPRESA GEPSING. ', NULL, NULL, 1, NULL, NULL, 1),
(31, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'FINANZAS Y RECURSO HUMANOS', 'Rebola', NULL, 'Enriquecimiento ilícito', 'Enlace:www.anticorrupcion.gob.gq', '¿CONOCES ALGÚN ACTO DE CORRUPCIÓN?\r\nHAZ TU DENUNCIA \r\nEste es el portal del Gobierno de Guinea Ecuatorial para denunciar actos de corrupción . Con esta herramienta , podrás denunciar de manera segura , directa e inmediata cualquier irregularidad en nuestra Administración Pública.\r\n\r\nDenunciar Por WHATSAPP o SMS\r\n +240 222 104 010 &#047; +240 555 104 010\r\n\r\nEnlace:www.anticorrupcion.gob.gq\r\n\r\nVer Spot Publicitario', NULL, NULL, 1, NULL, NULL, 1),
(32, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', '', 'Malabo', NULL, 'Enriquecimiento ilícito', 'NO ESTOY RECIBENDO MIS INCENTIVOS', 'NO ESTOY RECIBENDO MIS INCENTIVOS', NULL, NULL, 1, NULL, NULL, 1),
(33, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'RELLENE EL CAMPO SIGUIENTE', 'Malabo', NULL, 'Enriquecimiento ilícito', 'RELLENE EL CAMPO SIGUIENTE', '¿CONOCES ALGÚN ACTO DE CORRUPCIÓN?\r\nHAZ TU DENUNCIA \r\nEste es el portal del Gobierno de Guinea Ecuatorial para denunciar actos de corrupción . Con esta herramienta , podrás denunciar de manera segura , directa e inmediata cualquier irregularidad en nuestra Administración Pública.\r\n\r\nDenunciar Por WHATSAPP o SMS\r\n +240 222 104 010 &#047; +240 555 104 010\r\n\r\nEnlace:www.anticorrupcion.gob.gq\r\n\r\nVer Spot Publicita', NULL, NULL, 1, NULL, NULL, 1),
(34, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'RELLENE EL CAMPO SIGUIENTE', 'Malabo', NULL, 'Enriquecimiento ilícito', '_WEB&#047;awws&#047;WebAPIMariano.awws?wsdl', 'http:&#047;&#047;10.4.2.22&#047;WEBAPIMARIANO_WEB&#047;awws&#047;WebAPIMariano.awws?wsdl', NULL, NULL, 1, NULL, NULL, 1),
(35, NULL, NULL, '', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'DIRECCION DE AGRICULTURA', 'Malabo', NULL, 'Enriquecimiento ilícito', 'M HAN VENDIDO UN TERRENO K SE  VENDIO A OTROS', 'M HAN VENDIDO UN TERRENO K SE  VENDIO A OTROS', NULL, NULL, 1, NULL, NULL, 1),
(36, NULL, NULL, 'NVO', 'DIP', NULL, 'EMAIL', 'Insertar entidad', '', 'MINISTERIO', 'DIRECCION DE AGRICULTURA', 'Malabo', NULL, 'Enriquecimiento ilícito', 'AYUNTAMIENTO ME DEBE TERRENOS', 'AYUNTAMIENTO ME DEBE TERRENOS', NULL, NULL, 1, NULL, NULL, 1),
(172, NULL, NULL, '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', 'FSGGFEGF', 'Malabo', NULL, 'Enriquecimiento ilícito', NULL, 'GREGR', '', '', 1, NULL, '           ', NULL),
(173, NULL, NULL, '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', 'qaqqfe', 'Malabo', NULL, 'Enriquecimiento ilícito', NULL, 'qffff', '', '', 1, NULL, ' ', 4),
(174, NULL, NULL, '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'EMBAJADAS', 'DGSAAGSGADSGDAS', 'Malabo', NULL, 'Enriquecimiento ilícito', NULL, 'GDGDSA', '', '', 1, NULL, NULL, NULL),
(175, NULL, NULL, '', 'DIP', NULL, 'EMAIL', NULL, NULL, 'MINISTERIO', 'DFHHSH', 'Malabo', NULL, 'Enriquecimiento ilícito', NULL, 'HHRSRHH', '', '', 1, NULL, '              ', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE `files` (
  `id` int(5) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `denuncia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `files`
--

INSERT INTO `files` (`id`, `file_name`, `file_path`, `created_at`, `updated_at`, `denuncia_id`) VALUES
(19, '1741703074_b41a4965801e1fc33a58.pdf', 'uploads/files/1741703074_b41a4965801e1fc33a58.pdf', NULL, NULL, 173),
(22, '1745831003_ca79b2fb43133e8c7d26.pdf', 'uploads/files/1745831003_ca79b2fb43133e8c7d26.pdf', NULL, NULL, 172),
(23, '1746182159_82425d937931f0a2f372.pdf', 'uploads/evidences/1746182159_82425d937931f0a2f372.pdf', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresias`
--

CREATE TABLE `membresias` (
  `id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `tipo` enum('Básica','Premium','Honoraria') DEFAULT 'Básica',
  `fecha_inicio` date NOT NULL,
  `fecha_expiracion` date NOT NULL,
  `estado` enum('Activa','Caducada') DEFAULT 'Activa',
  `gestionado_por` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(4, '2024-10-19-234930', 'App\\Database\\Migrations\\AddUsersToDatabase', 'default', 'App', 1730643945, 1),
(5, '2024-11-06-132538', 'App\\Database\\Migrations\\CreateFilesTable', 'default', 'App', 1730902957, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `posicion` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `fecha_emision` date DEFAULT NULL,
  `vence` date DEFAULT NULL,
  `estado_licencia` enum('Activa','Inactiva','En espera') DEFAULT 'En espera',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `players`
--

INSERT INTO `players` (`id`, `nombre`, `apellidos`, `edad`, `posicion`, `numero`, `club_id`, `ciudad`, `pais`, `fecha_emision`, `vence`, `estado_licencia`, `created_at`, `updated_at`, `email`) VALUES
(1, 'daggg', 'grqgqrg', 12, 'vwvv', 22255225, 2, 'vwvvwvv', 'wvvwvdvd', NULL, NULL, 'En espera', '2025-07-23 14:06:12', '2025-07-23 14:06:12', 'test@gmail.com'),
(2, 'Juan Tomas', 'Esono', 32, 'ereghe', 222567634, 1, 'qwdwd', 'Ecuatoguinean0', NULL, NULL, 'En espera', '2025-07-23 14:08:14', '2025-07-24 10:55:34', 'tomas@gmail.com'),
(3, 'Mariano mañe', 'Mikue', 36, 'ddd', 22236525, 2, 'gegeegge', 'Ecuatoguinean0', NULL, NULL, 'En espera', '2025-07-23 14:09:27', '2025-07-24 10:55:53', 'mar@gail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `description`) VALUES
(1, 'Entrenadores', 'funcion por definir'),
(2, 'Clubes', 'registra jugadores y adjunto sus expedietes. A  traves de un enlace de  un enlace que les envia la frederaciioon'),
(3, 'Federaciones', 'Gestiona puede crear equipos, gestionar licencias y membresías, admisnitrar correos y enlaces para equipos '),
(4, 'Admin general', 'Administra el sistema  y asigna roles, respalda la plataforma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `desc`, `created_at`) VALUES
(1, 'En proceso', 'En proceso', '2024-11-02 13:00:33'),
(2, 'denuncia falsa', 'denuncia falsa', '2024-11-02 13:00:55'),
(3, 'En tramite ', 'En tramite ', '2024-11-02 13:01:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `nombre_club` varchar(100) NOT NULL,
  `siglas` varchar(10) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `anio_fundacion` year(4) DEFAULT NULL,
  `presidente` varchar(100) DEFAULT NULL,
  `entrenador` varchar(100) DEFAULT NULL,
  `estadio` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`id`, `nombre_club`, `siglas`, `ciudad`, `pais`, `telefono`, `correo`, `anio_fundacion`, `presidente`, `entrenador`, `estadio`, `created_at`, `updated_at`) VALUES
(1, 'Jet 7 Ela Nguema', 'svvssvsvsv', 'vdsdvvsdvsdvsd', '', '252525', 'tomas@gmail.com', '2015', '', '', 'jrtjrjjrjtrjt', '2025-07-23 09:27:23', '2025-07-23 10:36:16'),
(2, 'Malabo King', 'svvssvsvsv', 'vdsdvvsdvsdvsd', '', '252525', 'ml-king@gmail.com', '2015', '', '', 'jrtjrjjrjtrjt', '2025-07-23 09:27:58', '2025-07-24 10:49:50'),
(3, 'San Antonio', 'svvssvsvsv', 'vdsdvvsdvsdvsd', '', '252525', 'tomas@gmail.com', '2015', '', '', 'jrtjrjjrjtrjt', '2025-07-23 09:30:24', '2025-07-23 10:36:29'),
(4, 'Ademy Basket', 'svvssvsvsv', 'vdsdvvsdvsdvsd', '', '252525', 'tomas@gmail.com', '2015', '', '', 'jrtjrjjrjtrjt', '2025-07-23 09:30:52', '2025-07-23 10:37:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contacto` varchar(20) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `contacto`, `role_id`, `password`, `profile_image`, `club_id`) VALUES
(12, 'jose martin mbomio', 'federacion@gmail.com', '', 3, '$2y$10$C1XpA7Gr6CFc75beZww5W.WhWjbB.Ps2mXD5R2ZiGzqd5T.3gv.g6', '1745829627_3e4fd4a9969a5cddda57.jpg', 1),
(13, 'marcelino', 'clubes@gmail.com', '', 2, '$2y$10$OfR/ds4.uBKotTRFZ2uV5uK8br11nkSxytb4NFWKx5w9ULqW4cB7W', '1753194887_f938c62bcaa23f6e9105.png', 2),
(14, 'regular_user_2', 'editor-tribunal@gmail.com', '33333333333333333333', 3, '$2y$10$WhTYN29w.PaGEgux1tmareyRofUPyGO1Sfn1PSbu7F3PMaAmTcC3.', NULL, NULL),
(17, 'Juan tomas esono', 'federacion@gob.gq', '567634', 3, '$2y$10$bi4SFLIgYSkt2IINq.iSCOs3GICC7ewqY85ZRmemq/dCJAYtPKmX.', NULL, NULL),
(20, 'Rosa akara', 'rosa.akara@gob.gq', '555820360', 4, '$2y$10$IKzzfiVQhMi489Pz8S61LOUfXbs.y92V9MB1Dk1Faa03NjcqsMzDy', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_status_id` (`status_id`);

--
-- Indices de la tabla `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_files_denucnias` (`denuncia_id`);

--
-- Indices de la tabla `membresias`
--
ALTER TABLE `membresias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_membresia_club` (`club_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT de la tabla `files`
--
ALTER TABLE `files`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `membresias`
--
ALTER TABLE `membresias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `denuncias`
--
ALTER TABLE `denuncias`
  ADD CONSTRAINT `fk_status_id` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `fk_files_denucnias` FOREIGN KEY (`denuncia_id`) REFERENCES `denuncias` (`id`);

--
-- Filtros para la tabla `membresias`
--
ALTER TABLE `membresias`
  ADD CONSTRAINT `fk_membresia_club` FOREIGN KEY (`club_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `teams` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
