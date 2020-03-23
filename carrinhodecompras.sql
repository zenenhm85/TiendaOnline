-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2018 a las 06:38:50
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrinhodecompras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `produtos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `total` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefone` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `endereco` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `obs` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `data` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `hora` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `pronto` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `produtos`, `total`, `nome`, `telefone`, `endereco`, `obs`, `data`, `hora`, `pronto`) VALUES
(55, 'SANDES MISTA->3->Total = 2100\nGORDONÂ´S->1->Total = 350', 2450, 'dfadsdf', '453345345', 'fsdfsd', '', '15/11/2018', '23:00', '1'),
(56, 'SANDES MISTA->3->Total = 2100\nGASOSA LATA->3->Total = 600\nSUMO PEQUENO->2->Total = 500\nEKA->5->Total = 1000', 4200, 'csda', '453345345', 'dsvxcvcxv', '', '16/11/2018', '05:16', '1'),
(57, 'SANDES SIMPLES->2->Total = 1000', 1000, 'sadas', '323266324', 'xzczx', '', '16/11/2018', '05:51', '1'),
(58, 'AMECHICANA->1->Total = 700', 700, 'asdas', '234242342', 'zxcxzc', 'as', '16/11/2018', '05:52', '1'),
(59, 'SANDES SIMPLES->1->Total = 500\nEKA->10->Total = 2000', 2500, 'David', '111111111', 'dfsdfdsfsdfsd', '', '16/11/2018', '22:18', '1'),
(60, 'HAMBÃšRGUER->10->Total = 10000\nWHITE HORSE->8->Total = 4000', 14000, 'David', '111111111', 'scsadasdda  dasd', '', '16/11/2018', '22:19', '1'),
(61, 'SANDES SIMPLES->6->Total = 3000\nCUCA LATA->25->Total = 5000\nHAMBÃšRGUER->20->Total = 20000', 28000, 'David2', '222222222', 'dfdfsdfsdf', '', '16/11/2018', '22:22', '0'),
(62, 'SANDES SIMPLES->3\nCUCA GARRAFA->4\nRUSSIAN BEAR->6', 4400, 'sdasdas', '222222222', 'sdasd', '', '17/11/2018', '07:13', '0'),
(63, 'JB->1\nGASOSA LATA->3\nHAMBÃšRGUER->4', 5100, 'fdsf', '453443534', 'dsfsdfsdsfd', '', '19/11/2018', '06:27', '1'),
(64, 'SANDES MISTA->1', 700, 'dfs', '333333333', 'dsfsdfsd', '', '19/11/2018', '17:20', '0'),
(65, 'SANDES MISTA->7\nRUSSIAN BEAR->8', 7700, 'kjhÃ§flskjfsd', '938015667', 'xzczxczxcz', 'Sim verduras', '17/12/2018', '22:18', '1'),
(66, 'SANDES SIMPLES->13\nSUMO GRANDE->19', 16000, 'xczxczxcx', '938015667', 'sczxczxczx', '', '17/12/2018', '22:20', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `preco` double NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `img` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `quantidade` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `produto`
--

INSERT INTO `produto` (`id`, `nome`, `preco`, `tipo`, `img`, `descripcao`, `quantidade`) VALUES
(1, 'SANDES MISTA', 700, 'Comida', 'sandesm.jpg', 'Pão, mayonese, ketchup, salada de cenoura, batata, ovo, fiambre, queijo e chouriçao', 22),
(2, 'SANDES SIMPLES', 500, 'Comida', 'sandess.jpg', 'Pão, fiambre, queijo e chouriçao', 26),
(3, 'CACHORRO(HOT GOG)', 550, 'Comida', 'hotdog.jpg', 'Pão, mayonese, ketchup, cenoura, batata, ovo e salsicha', 2),
(4, 'HAMBÚRGUER', 1000, 'Comida', 'hamburguer.jpg', 'Pão, mayonese, ketchup, carne de vaca, salada de cenoura, batata, ovo, fiambre, queijo e chouriça', 35),
(5, 'AMECHICANA', 700, 'Comida', 'amechicana.jpg', 'Carne em pedaços', 1),
(9, 'KFC', 1000, 'Comida', 'kfc.jpg', 'Frango e batata', 0),
(10, 'JB', 500, 'Wisky', 'jb.jpg', 'Este preço é por calice', 2),
(11, 'WHITE HORSE', 500, 'Wisky', 'wh.jpg', 'Este preço é por calice', 8),
(12, 'RED LABEL', 500, 'Wisky', 'rl.jpg', 'Este preço é por calice', 0),
(13, 'CONSTANTINO', 500, 'Wisky', 'constantino.jpg', 'Este preço é por calice', 0),
(14, 'BALLANTINES', 500, 'Wisky', 'ballantines.jpg', 'Este preço é por calice', 0),
(15, 'PASSPORT SCOTCH', 500, 'Wisky', 'passport.jpg', 'Este preço é por calice', 0),
(16, 'MONKEY SHOULDER', 500, 'Wisky', 'mch.jpg', 'Este preço é por calice', 0),
(17, 'LOGAN HERITAGE BLEND', 500, 'Wisky', 'lhb.jpg', 'Este preço é por calice', 0),
(18, 'GLENFIDDICH', 500, 'Wisky', 'gf.jpg', 'Este preço é por calice', 0),
(19, 'CUCA LATA', 200, 'Cerveja', 'cuca-lata.jpg', '', 25),
(20, 'CUCA GARRAFA', 200, 'Cerveja', 'cuca-garrafa.jpg', '', 5),
(21, 'TIGRA LATA', 200, 'Cerveja', 'tigra-lata.jpg', '', 0),
(22, 'TIGRA GARRAFA', 200, 'Cerveja', 'tigra-garrafa.jpg', '', 0),
(23, 'EKA', 200, 'Cerveja', 'eka.jpg', '', 15),
(24, 'NOCAL', 200, 'Cerveja', 'nocal.jpg', '', 0),
(25, 'N´GOLA', 200, 'Cerveja', 'ngola.jpg', '', 0),
(26, 'N´GOLA PEQUENA', 150, 'Cerveja', 'ngolap.jpg', '', 0),
(27, 'SMANOFF', 250, 'Cerveja', 'smanoff.jpg', '', 0),
(28, 'FINO GRANDE', 200, 'Cerveja', 'finog.jpg', '', 0),
(29, 'FINO PEQUENO', 150, 'Cerveja', 'finop.jpg', '', 0),
(30, 'EKA LATA', 250, 'Cerveja', 'eka-lata.jpg', '', 0),
(31, 'GIN', 350, 'Vodka', 'gin.jpg', '', 0),
(32, 'CACHAÇA', 350, 'Vodka', 'cachaca.jpg', '', 2),
(33, 'RUSSIAN BEAR', 350, 'Vodka', 'rb.jpg', '', 24),
(34, 'ROSKOFF', 350, 'Vodka', 'roskoff.jpg', '', 0),
(35, 'GORDON´S ', 350, 'Vodka', 'gordons.jpg', '', 5),
(36, 'LARIOS', 350, 'Vodka', 'larios.jpg', '', 0),
(37, 'SUMO PEQUENO', 250, 'Refrigerante', 'compal.jpg', '', 5),
(38, 'SUMO GRANDE', 500, 'Refrigerante', 'compal2.jpg', '', 19),
(39, 'GASOSA LATA', 200, 'Refrigerante', 'gososa lata.jpg', '', 17),
(40, 'GASOSA GARRAFA', 125, 'Refrigerante', 'fanta.jpg', '', 0),
(41, 'ÁGUA GRANDE', 250, 'Refrigerante', 'aguag.jpg', '', 0),
(42, 'ÁGUA PEQUENA', 150, 'Refrigerante', 'aguap.jpg', '', 3),
(43, 'TONICA', 150, 'Refrigerante', 'tonica.jpg', '', 0),
(44, 'SPEED', 250, 'Refrigerante', 'speed.jpg', '', 0),
(45, 'XXL', 250, 'Refrigerante', 'xxl.jpg', '', 0),
(46, 'BOOSTER', 250, 'Refrigerante', 'booster.jpg', '', 0),
(47, 'SALDO UNITEL 50 UTT', 500, 'Saldos', 'u500.jpg', '', 0),
(48, 'SALDO UNITEL 100 UTT', 1000, 'Saldos', 'u1000.jpg', '', 0),
(49, 'SALDO UNITEL 125 UTT', 1250, 'Saldos', 'u1250.jpg', '', 0),
(50, 'SALDO MOVICEL', 500, 'Saldos', 'movicel500.jpg', '', 0),
(51, 'SALDO MOVICEL', 700, 'Saldos', 'movicel700.jpg', '', 0),
(52, 'SALDO MOVICEL', 900, 'Saldos', 'movicel900.jpg', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nome`, `senha`) VALUES
('david', '1234567');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nome`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
