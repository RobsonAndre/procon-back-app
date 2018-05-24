-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Servidor: 200.203.183.35
-- Tempo de Geração: 22/05/2018 às 21:12
-- Versão do servidor: 5.5.59-log
-- Versão do PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de dados: `papiroweb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_acesso_log_error`
--

CREATE TABLE IF NOT EXISTS `integra_acesso_log_error` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(512) NOT NULL,
  `senha` varchar(512) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Fazendo dump de dados para tabela `integra_acesso_log_error`
--

INSERT INTO `integra_acesso_log_error` (`indice`, `email`, `senha`, `time`) VALUES
(1, 'user@user.com', '123senha', 1525447413),
(2, 'user@user.com', 'senha@12', 1525465494),
(3, 'user@user.com', 'senha@12', 1525626285),
(4, 'user@user.com', 'senha@12', 1525652331),
(5, 'user@user.com', 'senha@12', 1525652914),
(6, 'user@user.com', 'senha@12', 1525653847),
(7, 'user@user.com', 'senha@12', 1525653862),
(8, '', '', 1525777221),
(9, 'user@user.com', 'senha@12', 1525777222),
(10, 'user@user.com', 'senha@12', 1525818095),
(11, 'user@user.com', 'senha@12', 1525819001),
(12, 'robson_x@yahoo.com.br', '', 1525819206),
(13, '', '', 1525873829),
(14, 'robson_x@yahoo.com.br', 'senha@12', 1525913130),
(15, 'robson_x@yahoo.com.br', 'senha@12', 1525913134),
(16, '', '', 1525980970),
(17, 'user@user.com', 'senha@12', 1525989098),
(18, 'user@user.com', 'senha@12', 1526087604),
(19, 'user@user.com', 'senha@12', 1526094741),
(20, 'user@user.com', 'senha@12', 1526095513),
(21, 'user@user.com', 'senha@12', 1526095892),
(22, '', '', 1526133595),
(23, '', '', 1526224960),
(24, '', '', 1526394806),
(25, '', '', 1526468088),
(26, '', '', 1526561696),
(27, '', '', 1526673297),
(28, '', '', 1526824456),
(29, '', '', 1526850833),
(30, 'user@user.com', 'senha@12', 1526942658),
(31, '', 'senha@12', 1526942665),
(32, '', 'senha@12', 1526942716),
(33, 'Robson_x@yahoo.com.br', 'senha@123', 1526942755),
(34, 'robson_x@yaho.com.br', 'senha@12', 1526942894),
(35, 'robson_x@yahoo.com.br', 'senha@', 1526946085),
(36, 'robson_x@yahoo.com.br', 'senha@', 1526946087),
(37, 'robson_x@yahoo.com.br', 'senha@', 1526946090),
(38, 'robson_x@yahoo.com.br', 'senha@', 1526946093),
(39, 'robson_x@yahoo.com.br', 'senha@', 1526946460),
(40, 'robson_x@yahoo.com.br', 'senha@', 1526946471),
(41, 'robson_x@yahoo.com.br', 'senha@', 1526946475),
(42, 'robson_x@yahoo.com.br', 'senha@', 1526946477),
(43, 'robson_x@yahoo.com.br', 'senha@', 1526946480),
(44, 'robson_x@yahoo.com.br', 'senha@', 1526946482),
(45, 'robson_x@yahoo.com.br', 'senha@', 1526946483),
(46, 'robson_x@yahoo.com.br', 'senha@', 1526946484),
(47, 'robson_x@yahoo.com.br', 'senha@', 1526946486),
(48, 'robson_x@yahoo.com.br', 'senha@', 1526946486),
(49, 'user@user.com', 'senha@12', 1526947266),
(50, 'robson_x@yahoo.com', 'senha@12', 1527012482),
(51, '', 'senha@12', 1527012495),
(52, '', 'senha@12', 1527012546),
(53, '', '', 1527016255);

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_base_reclamacao_estabelecimento`
--

CREATE TABLE IF NOT EXISTS `integra_base_reclamacao_estabelecimento` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `estabelecimento` varchar(64) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `integra_base_reclamacao_estabelecimento`
--

INSERT INTO `integra_base_reclamacao_estabelecimento` (`indice`, `estabelecimento`, `status`, `time`) VALUES
(1, 'Estabelecimento Finaceiro/Bancos', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_base_reclamacao_tipo`
--

CREATE TABLE IF NOT EXISTS `integra_base_reclamacao_tipo` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(512) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `integra_base_reclamacao_tipo`
--

INSERT INTO `integra_base_reclamacao_tipo` (`indice`, `tipo`, `status`, `time`) VALUES
(1, 'Fila de Atendimento', 1, 0),
(2, 'D&eacute;bito n&atilde;o autorizado em conta corrente ou poupan&ccedil;a\n', 1, 0),
(3, 'Cobran&ccedil;a irregular de tarifa por servi&ccedil;o n&atilde;o contratado', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_reclamacao`
--

CREATE TABLE IF NOT EXISTS `integra_reclamacao` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(512) NOT NULL,
  `ind_estabelecimento` int(11) NOT NULL,
  `ind_tipo` int(11) NOT NULL,
  `tabela_reclamacao` varchar(512) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Fazendo dump de dados para tabela `integra_reclamacao`
--

INSERT INTO `integra_reclamacao` (`indice`, `uid`, `ind_estabelecimento`, `ind_tipo`, `tabela_reclamacao`, `status`, `time`) VALUES
(1, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 11, 1526161268),
(2, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526161388),
(3, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526161430),
(4, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 51, 1526161546),
(5, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526162311),
(6, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526162315),
(7, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526162322),
(8, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526169509),
(9, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526169535),
(10, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526172597),
(11, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526172711),
(12, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526172740),
(13, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526172788),
(14, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526225111),
(15, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526225438),
(16, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526337297),
(17, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526347491),
(18, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526347530),
(19, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526425421),
(20, '356a192b7913b04c54574d18c28d46e6', 1, 1, 'papiroweb.integra_reclamacao_banco', 1, 1526947398);

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_reclamacao_anexos`
--

CREATE TABLE IF NOT EXISTS `integra_reclamacao_anexos` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `ind_reclamacao` int(11) NOT NULL,
  `anexo` varchar(512) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Fazendo dump de dados para tabela `integra_reclamacao_anexos`
--

INSERT INTO `integra_reclamacao_anexos` (`indice`, `ind_reclamacao`, `anexo`, `time`) VALUES
(1, 1, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161268),
(2, 1, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161268),
(3, 1, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161268),
(4, 1, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161268),
(5, 1, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161268),
(6, 1, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161268),
(7, 2, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161388),
(8, 2, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161388),
(9, 2, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161388),
(10, 2, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161388),
(11, 2, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161388),
(12, 2, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161388),
(13, 3, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161430),
(14, 3, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161430),
(15, 3, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161430),
(16, 3, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161430),
(17, 3, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161430),
(18, 3, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161430),
(19, 4, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161546),
(20, 4, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161546),
(21, 4, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161546),
(22, 4, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161546),
(23, 4, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161546),
(24, 4, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526161546),
(25, 5, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162311),
(26, 5, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162311),
(27, 5, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162311),
(28, 5, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162311),
(29, 5, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162311),
(30, 5, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162311),
(31, 6, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162315),
(32, 6, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162315),
(33, 6, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162315),
(34, 6, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162315),
(35, 6, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162315),
(36, 6, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162315),
(37, 7, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162322),
(38, 7, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162322),
(39, 7, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162322),
(40, 7, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162322),
(41, 7, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162322),
(42, 7, 'http://www.freephotosbank.com/photographers/photos1/15/med_bb104s0516.jpg', 1526162322),
(43, 8, 'anexo0', 1526169509),
(44, 8, 'anexo1', 1526169509),
(45, 8, 'anexo2', 1526169509),
(46, 8, 'anexo3', 1526169509),
(47, 8, 'anexo4', 1526169509),
(48, 8, 'anexo6', 1526169509),
(49, 9, 'anexo0', 1526169535),
(50, 9, 'anexo1', 1526169535),
(51, 9, 'anexo2', 1526169535),
(52, 9, 'anexo3', 1526169535),
(53, 9, 'anexo4', 1526169535),
(54, 9, 'anexo6', 1526169535),
(55, 10, 'anexo0', 1526172597),
(56, 10, 'anexo1', 1526172597),
(57, 10, 'anexo2', 1526172597),
(58, 10, 'anexo3', 1526172597),
(59, 10, 'anexo4', 1526172597),
(60, 10, 'anexo6', 1526172597),
(61, 11, 'anexo0', 1526172711),
(62, 11, 'anexo1', 1526172711),
(63, 11, 'anexo2', 1526172711),
(64, 11, 'anexo3', 1526172711),
(65, 11, 'anexo4', 1526172711),
(66, 11, 'anexo6', 1526172711),
(67, 12, 'anexo0', 1526172740),
(68, 12, 'anexo1', 1526172740),
(69, 12, 'anexo2', 1526172740),
(70, 12, 'anexo3', 1526172740),
(71, 12, 'anexo4', 1526172740),
(72, 12, 'anexo6', 1526172740),
(73, 13, 'anexo0', 1526172788),
(74, 13, 'anexo1', 1526172788),
(75, 13, 'anexo2', 1526172788),
(76, 13, 'anexo3', 1526172788),
(77, 13, 'anexo4', 1526172788),
(78, 13, 'anexo6', 1526172788),
(79, 14, 'anexo0', 1526225111),
(80, 14, 'anexo1', 1526225111),
(81, 14, 'anexo2', 1526225111),
(82, 14, 'anexo3', 1526225111),
(83, 14, 'anexo4', 1526225111),
(84, 14, 'anexo6', 1526225111),
(85, 15, 'anexo0', 1526225438),
(86, 15, 'anexo1', 1526225438),
(87, 15, 'anexo2', 1526225438),
(88, 15, 'anexo3', 1526225438),
(89, 15, 'anexo4', 1526225438),
(90, 15, 'anexo6', 1526225438),
(91, 16, 'anexo0', 1526337297),
(92, 16, 'anexo1', 1526337297),
(93, 16, 'anexo2', 1526337297),
(94, 16, 'anexo3', 1526337297),
(95, 16, 'anexo4', 1526337297),
(96, 16, 'anexo6', 1526337297),
(97, 17, 'anexo0', 1526347491),
(98, 17, 'anexo1', 1526347491),
(99, 17, 'anexo2', 1526347491),
(100, 17, 'anexo3', 1526347491),
(101, 17, 'anexo4', 1526347491),
(102, 17, 'anexo6', 1526347491),
(103, 18, 'anexo0', 1526347530),
(104, 18, 'anexo1', 1526347530),
(105, 18, 'anexo2', 1526347530),
(106, 18, 'anexo3', 1526347530),
(107, 18, 'anexo4', 1526347530),
(108, 18, 'anexo6', 1526347530),
(109, 19, 'anexo0', 1526425421),
(110, 19, 'anexo1', 1526425421),
(111, 19, 'anexo2', 1526425421),
(112, 19, 'anexo3', 1526425421),
(113, 19, 'anexo4', 1526425421),
(114, 19, 'anexo6', 1526425421),
(115, 20, 'anexo0', 1526947398),
(116, 20, 'anexo1', 1526947398),
(117, 20, 'anexo2', 1526947398),
(118, 20, 'anexo3', 1526947398),
(119, 20, 'anexo4', 1526947398),
(120, 20, 'anexo6', 1526947398);

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_reclamacao_banco`
--

CREATE TABLE IF NOT EXISTS `integra_reclamacao_banco` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `ind_reclamacao` int(11) NOT NULL,
  `banco` varchar(64) NOT NULL,
  `agencia` varchar(8) NOT NULL,
  `data` int(11) NOT NULL,
  `espera` int(2) NOT NULL,
  `atendido` int(1) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Fazendo dump de dados para tabela `integra_reclamacao_banco`
--

INSERT INTO `integra_reclamacao_banco` (`indice`, `ind_reclamacao`, `banco`, `agencia`, `data`, `espera`, `atendido`, `time`) VALUES
(1, 1, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526161268),
(2, 2, 'Banco do Brasil', '0352-2', 1526146036, 35, 0, 1526161388),
(3, 3, 'Banco do Brasil', '0352-2', 1526146036, 45, 1, 1526161430),
(4, 4, 'Banco do Brasil', '0352-2', 1526146036, 52, 1, 1526161546),
(5, 5, 'Banco do Brasil', '0352-2', 1526146036, 31, 0, 1526162311),
(6, 6, 'Banco do Brasil', '0352-2', 1526146036, 42, 1, 1526162315),
(7, 7, 'Banco do Brasil', '0352-2', 1526146036, 48, 1, 1526162322),
(8, 8, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526169509),
(9, 9, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526169535),
(10, 10, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526172597),
(11, 11, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526172711),
(12, 12, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526172740),
(13, 13, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526172788),
(14, 14, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526225111),
(15, 15, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526225438),
(16, 16, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526337297),
(17, 17, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526347491),
(18, 18, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526347530),
(19, 19, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526425421),
(20, 20, 'Banco do Brasil', '0352-2', 1526146036, 37, 1, 1526947398);

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_reclamacao_queixa`
--

CREATE TABLE IF NOT EXISTS `integra_reclamacao_queixa` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `ind_reclamacao` int(11) NOT NULL,
  `queixa` varchar(512) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Fazendo dump de dados para tabela `integra_reclamacao_queixa`
--

INSERT INTO `integra_reclamacao_queixa` (`indice`, `ind_reclamacao`, `queixa`, `time`) VALUES
(1, 1, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526161268),
(2, 2, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526161388),
(3, 3, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526161430),
(4, 4, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526161546),
(5, 8, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526169509),
(6, 9, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526169535),
(7, 10, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526172597),
(8, 11, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526172711),
(9, 12, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526172740),
(10, 13, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526172788),
(11, 14, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526225111),
(12, 15, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526225438),
(13, 16, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526337297),
(14, 17, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para queixa', 1526347491),
(15, 18, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para queixa', 1526347530),
(16, 19, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526425421),
(17, 20, 'texto que deve acompanhar a reclamacao do usuario e deve ser apresentada ao procon para apreciacao', 1526947398);

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_rel_reclamacao_estabelecimento_tipo`
--

CREATE TABLE IF NOT EXISTS `integra_rel_reclamacao_estabelecimento_tipo` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `ind_estabelecimento` int(11) NOT NULL,
  `ind_tipo` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `integra_rel_reclamacao_estabelecimento_tipo`
--

INSERT INTO `integra_rel_reclamacao_estabelecimento_tipo` (`indice`, `ind_estabelecimento`, `ind_tipo`, `status`, `time`) VALUES
(1, 1, 1, 1, 0),
(2, 1, 2, 1, 0),
(3, 1, 3, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_user_log`
--

CREATE TABLE IF NOT EXISTS `integra_user_log` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(512) NOT NULL,
  `token` varchar(512) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

--
-- Fazendo dump de dados para tabela `integra_user_log`
--

INSERT INTO `integra_user_log` (`indice`, `uid`, `token`, `time`) VALUES
(1, '356a192b7913b04c54574d18c28d46e6', 'd592ecf38bfd7a73204c109068dfd1fdad72b290', 1525310654),
(2, '356a192b7913b04c54574d18c28d46e6', 'd592ecf38bfd7a73204c109068dfd1fdad72b290', 1525310896),
(3, '356a192b7913b04c54574d18c28d46e6', '', 1525312161),
(4, '356a192b7913b04c54574d18c28d46e6', '', 1525312167),
(5, '356a192b7913b04c54574d18c28d46e6', '', 1525312169),
(6, '356a192b7913b04c54574d18c28d46e6', '', 1525312171),
(7, '356a192b7913b04c54574d18c28d46e6', '', 1525312172),
(8, '356a192b7913b04c54574d18c28d46e6', '', 1525312173),
(9, '356a192b7913b04c54574d18c28d46e6', 'e0f6775905a542cc026b4bed0b0486e76176f83a', 1525312214),
(10, '356a192b7913b04c54574d18c28d46e6', '37cc14f2a092a789a256bdb501d0736e45d079a7', 1525312216),
(11, '356a192b7913b04c54574d18c28d46e6', '3d8c2494f61fb54a32f61741621b8f5a13671d89', 1525312218),
(12, '356a192b7913b04c54574d18c28d46e6', 'ac7194773dfb10ab47598746f0872423160ea1ea', 1525312220),
(13, '356a192b7913b04c54574d18c28d46e6', '8dcc3fa9d56394774eaa29bf8758ef1d5355d968', 1525312221),
(14, '356a192b7913b04c54574d18c28d46e6', 'd97e5b6545ff086672a1e8333917450ba71bf4a5', 1525312222),
(15, '356a192b7913b04c54574d18c28d46e6', '46a36ef1f65072cfa87dae5625981605a97adfaf', 1525312224),
(16, '356a192b7913b04c54574d18c28d46e6', 'cc120822b836537e1ba92fa87d7a934b9e6beed2', 1525312225),
(17, '356a192b7913b04c54574d18c28d46e6', '98f6816f86514a157b8fa59f8baa399504b1d130', 1525312226),
(18, '356a192b7913b04c54574d18c28d46e6', 'eb7ac10e5f50f83b251de8a929ef001ad8a4aab1', 1525312228),
(19, '356a192b7913b04c54574d18c28d46e6', '5e7c6bb2feafd29804bdad4295c9c4da5620c1ca', 1525312229),
(20, '356a192b7913b04c54574d18c28d46e6', '30f71c68ad3c02d7a7d8dca9d58a9197e33d0283', 1525312231),
(21, '356a192b7913b04c54574d18c28d46e6', '2458e7ca97038414c699f30779be3bfad4c2dd31', 1525313247),
(22, '356a192b7913b04c54574d18c28d46e6', '8b347100de76a6a2a4436f293560fb57e00e1894', 1525313340),
(23, '356a192b7913b04c54574d18c28d46e6', 'dc5814fac36cec2373927ea997eb0db3efbf2be6', 1525370700),
(24, '356a192b7913b04c54574d18c28d46e6', 'b41a8e53c1b87000e726822eb6c621441f23c106', 1525371958),
(25, '356a192b7913b04c54574d18c28d46e6', '0a653c50534b1fcbc3bb279e83270f407171e5a4', 1525371986),
(26, '356a192b7913b04c54574d18c28d46e6', '5170d9611eea24e5e2140faf37224e82143f2d17', 1525372172),
(27, '356a192b7913b04c54574d18c28d46e6', '4f9e41b4ff7195f9ab5d241f8398ffb90a558677', 1525372191),
(28, '356a192b7913b04c54574d18c28d46e6', 'c423dc1f449c494ade0f473ad5f04e2399af6495', 1525372251),
(29, '356a192b7913b04c54574d18c28d46e6', '7a0d58f4e2b8617cf8058c702c63702af1d2a765', 1525372327),
(30, '356a192b7913b04c54574d18c28d46e6', '16f5acef6007377e57de87b7da4cfe4f0496965e', 1525373543),
(31, '356a192b7913b04c54574d18c28d46e6', '419fa72edd5681fbd8af8a780958945365c9def4', 1525373601),
(32, '356a192b7913b04c54574d18c28d46e6', 'f8ecdcab2d8ff85eb4d84af04d2202c760446724-MTUyNTM3NDgzMg==', 1525374832),
(33, '356a192b7913b04c54574d18c28d46e6', 'a29f9867d4a749df19a4a612cc10791a55a8939e-MTUyNTM3NTE1OQ==', 1525375159),
(34, '356a192b7913b04c54574d18c28d46e6', '9370f57b9b1637d4f1f21a4719a8885738214b7f-MTUyNTM3NTE4OA==', 1525375188),
(35, '356a192b7913b04c54574d18c28d46e6', 'eb048988c0b9257c9dfc284ea198fe9791ab50fd-MTUyNTM3NTM0Ng==', 1525375346),
(36, '356a192b7913b04c54574d18c28d46e6', '821a9cee05a5e33ee33042e6195d56edf965bca0-MTUyNTM3NTQ3MQ==', 1525375471),
(37, '356a192b7913b04c54574d18c28d46e6', 'f9376f08a9d6608b85cb2d14b6ebeedf945765ff-MTUyNTM3NTg4Ng==', 1525375886),
(38, '356a192b7913b04c54574d18c28d46e6', '8cd74b15f4a7f215458c1ea557faf0b7ab0b93a8-MTUyNTM4MDQ2OQ==', 1525380469),
(39, '356a192b7913b04c54574d18c28d46e6', '31e4ef2dbe4cbadb046f39fd5994f29aecad5ddb-MTUyNTM4NDUwMQ==', 1525384501),
(40, '356a192b7913b04c54574d18c28d46e6', '208bb6615f5e7ba5806cc59a255c7ac2c50a41c2-MTUyNTM4NDY0NA==', 1525384644),
(41, '356a192b7913b04c54574d18c28d46e6', '8ab2d4bdefabe27ebba35f751413da3a559b0983-MTUyNTQ0MjUxMw==', 1525442513),
(42, '356a192b7913b04c54574d18c28d46e6', '6ebc27a55f2ad177b6c67d419bdef5902c654c4e-MTUyNTQ0NzQ0Nw==-aW50ZWdyYQ==', 1525447447),
(43, '356a192b7913b04c54574d18c28d46e6', '5aaaceaa18cd9c92ee659e858e6138dda1f328b9-MTUyNTQ0ODA3Mg==-aW50ZWdyYQ==', 1525448072),
(44, '356a192b7913b04c54574d18c28d46e6', '8e59b1ae68616cda3471cd0cdd646ad9a52d0bd5-MTUyNTQ0ODEwOA==-aW50ZWdyYQ==', 1525448108),
(45, '356a192b7913b04c54574d18c28d46e6', 'a8940785b55ce37001afad5634b0152c3d2f13a2', 1525448145),
(46, '356a192b7913b04c54574d18c28d46e6', '15700fe8aed53992b23cc1f2c6d8359803779103-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=', 1525448164),
(47, '356a192b7913b04c54574d18c28d46e6', '7f56a533fe0d20bcd39a2b6b0a06cf45a6889754-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==', 1525448202),
(48, '356a192b7913b04c54574d18c28d46e6', '4ab88cfd39e615c9b99d38114cf5de6c04e76182-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ0ODIxNQ==', 1525448215),
(49, '356a192b7913b04c54574d18c28d46e6', 'ea3ad74398f662cefdd1c9ae00c560faa68d2a4a-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ0ODIzMg==', 1525448232),
(50, '356a192b7913b04c54574d18c28d46e6', '271ca599b1a79f01f6c83d0b4e5449d8a7f26024-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ2NTUwMg==', 1525465502),
(51, '356a192b7913b04c54574d18c28d46e6', 'dc8e3f3f3048a6f1eaf094f8727e935736c781b7-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ3MDY5MQ==', 1525470691),
(52, '356a192b7913b04c54574d18c28d46e6', '616df487ec9f62c6cd4f8220a6698f3cc96935a4-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ3MDkyMw==', 1525470923),
(53, '356a192b7913b04c54574d18c28d46e6', '8c11f51b139d8454239c384f454eb82d42106ef7-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ3MTAxOQ==', 1525471019),
(54, '356a192b7913b04c54574d18c28d46e6', '6d53d3601872c71b6e8a80c0b51e2f7d173b5e16-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ3MTIxOA==', 1525471218),
(55, '356a192b7913b04c54574d18c28d46e6', '274b0cc8cdf7463ad24ede9dff455fdf46f27279-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ4Nzk3Mg==', 1525487972),
(56, '356a192b7913b04c54574d18c28d46e6', 'b7a25985ff669f15743dab6ea4cf5ffd88139078-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ4ODYyOQ==', 1525488629),
(57, '356a192b7913b04c54574d18c28d46e6', 'c5506a049b5af78420d93beca0b03961d18e200b-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTQ4ODYzMA==', 1525488630),
(58, '356a192b7913b04c54574d18c28d46e6', '7866758e0bd6f3bbe9807a7ac47e89287d0653e6-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTYyNjExMg==', 1525626112),
(59, '356a192b7913b04c54574d18c28d46e6', 'aaa9416e820bdaa0748152fce5f5947f901eb497-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTYyNjEzNg==', 1525626136),
(60, '356a192b7913b04c54574d18c28d46e6', 'e0e2503218b87975f24e5215dcc2ec8e12540100-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTYyNjE0Nw==', 1525626147),
(61, '356a192b7913b04c54574d18c28d46e6', '9fb2c74e641515b1b33fd84a1360abcb1e198567-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTYyNjMwOQ==', 1525626309),
(62, '356a192b7913b04c54574d18c28d46e6', '62eda6ac83241c54052de417a049f84b56a885a4-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTY1MjM0OA==', 1525652348),
(63, '356a192b7913b04c54574d18c28d46e6', '7de9e728eb0fb5bec3a0e494317a41612d564579-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTY1MjkyMA==', 1525652920),
(64, '356a192b7913b04c54574d18c28d46e6', 'a0de18b225dab398c7f59e437d73e79927507181-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTY1Mzg3MQ==', 1525653871),
(65, '356a192b7913b04c54574d18c28d46e6', '970f3f60cbd8264ff9a2ada32b9b0ed6773db51c-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTY1MzkzMg==', 1525653932),
(66, '356a192b7913b04c54574d18c28d46e6', 'cda9487680f15bfb2f818ddd8c51a0321340a7ae-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTY1Mzk1Nw==', 1525653957),
(67, '356a192b7913b04c54574d18c28d46e6', 'ba4117f247d3b0cc330bbcaf5cff13c9585b1ef0-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTY3MTczMA==', 1525671730),
(68, '356a192b7913b04c54574d18c28d46e6', '1f416da9532b58b2bc0db6a3958e10e01eded969-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTY3MzM5Mw==', 1525673393),
(69, '356a192b7913b04c54574d18c28d46e6', '653d9df011555ec68e03f339055b33a9f2bc1077-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTY3MzQ2Ng==', 1525673466),
(70, '356a192b7913b04c54574d18c28d46e6', 'ca93dfbd4959dee0c5ebfb308e2e8d7f3db4ac0f-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTY3Mzg1Nw==', 1525673857),
(71, '356a192b7913b04c54574d18c28d46e6', '1a237c84c34cdbfd2884bb9d9b52d079a5aa91f3-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTczMjczOA==', 1525732738),
(72, '356a192b7913b04c54574d18c28d46e6', '1ae826980c0411acfb906299ddfa8c74fdc6641a-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTczMzQ5MA==', 1525733490),
(73, '356a192b7913b04c54574d18c28d46e6', '1bf36f39f00a5623458b2701ba59527b44e86e3b-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTczNDA0Nw==', 1525734047),
(74, '356a192b7913b04c54574d18c28d46e6', '1bf36f39f00a5623458b2701ba59527b44e86e3b-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTczNDA0Nw==', 1525734047),
(75, '356a192b7913b04c54574d18c28d46e6', '6a9c55649ee2f487c7a8653a56da3658073e35af-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgxODEwMQ==', 1525818101),
(76, '356a192b7913b04c54574d18c28d46e6', '4e45e38f5a9d4a8beef45e8b612beb78869506da-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgxOTAwOQ==', 1525819009),
(77, '356a192b7913b04c54574d18c28d46e6', '5f806bd95eee2fb18c002b184f0a156c3a414aa7-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgxOTA2MA==', 1525819060),
(78, '356a192b7913b04c54574d18c28d46e6', '01d1ed9ff6cc674aaea02d4729f30c8ae3e127de-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgxOTMxOA==', 1525819318),
(79, '356a192b7913b04c54574d18c28d46e6', '31c44af509839d3bc600f0e7fd7788b5ad06f9b5-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgyMDI0OA==', 1525820248),
(80, '356a192b7913b04c54574d18c28d46e6', '8ca45e92123760d0b19322385606f5e71cea21af-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgyODAzNA==', 1525828034),
(81, '356a192b7913b04c54574d18c28d46e6', 'b689623d3a7585dadddc1f7600d398b0e1cfd040-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgyODA1Mg==', 1525828052),
(82, '356a192b7913b04c54574d18c28d46e6', '2d6cf9c66175db1666feb30d8701f6952975340d-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgyODEzMA==', 1525828130),
(83, '356a192b7913b04c54574d18c28d46e6', '88cdf7bb8910db2b3c20624809a1d91afff1aa0f-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgzMDg1NQ==', 1525830855),
(84, '356a192b7913b04c54574d18c28d46e6', '369ccb441646996d7bd6d7e3bbe44b5070db5c8e-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTgzMjM4Mw==', 1525832383),
(85, '356a192b7913b04c54574d18c28d46e6', 'e697c9de0fdb37f5d3db0c171adfb9a42982d330-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTg3MzA4NA==', 1525873084),
(86, '356a192b7913b04c54574d18c28d46e6', '356e4461afc6f459427a04e929dbf76a298f36f8-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTg3MzU3Mg==', 1525873572),
(87, '356a192b7913b04c54574d18c28d46e6', '8737872491ee66a414f52f57c23b8744414f27db-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTg5ODYzNw==', 1525898637),
(88, '356a192b7913b04c54574d18c28d46e6', '58bd53b0ee36e929b3d6ff9cf9b4bb1d32499ce4-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTg5OTEwNw==', 1525899107),
(89, '356a192b7913b04c54574d18c28d46e6', '21260beed63df3384eb989200fb5b132a2330be7-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTkwMTA5Mw==', 1525901093),
(90, '356a192b7913b04c54574d18c28d46e6', '81b2bb67260c2f469842a2e1935b6d1af2d6f181-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTkxMzEyMQ==', 1525913121),
(91, '356a192b7913b04c54574d18c28d46e6', 'a98fbfbab37d0d44a49a17b5a39b9113af312f55-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNTkxMzE2NA==', 1525913164),
(92, '356a192b7913b04c54574d18c28d46e6', 'd04bf064b5bede26ab00862cd4d87bbe05c2ae50-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjAwMjYwMw==', 1526002603),
(93, '356a192b7913b04c54574d18c28d46e6', 'c2722f15de4fdadabeeb7e711f7aaa7246c981a4-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjAwMjcwMQ==', 1526002701),
(94, '356a192b7913b04c54574d18c28d46e6', '15eced5ee23610e2c94447b93cec4fab5cd26dc6-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA1NTY3OA==', 1526055678),
(95, '356a192b7913b04c54574d18c28d46e6', '88885b2b703d018441eb1ab12c030d15eb27a6f0-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA1ODkxMw==', 1526058913),
(96, '356a192b7913b04c54574d18c28d46e6', '4361dcf3e6f9b6b4ec3a45d9e0a835ca418ad05e-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA4OTIxNA==', 1526089214),
(97, '356a192b7913b04c54574d18c28d46e6', '11f5b797376592d05ba34cc728fee3552d5d61f1-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA4OTMyMA==', 1526089320),
(98, '356a192b7913b04c54574d18c28d46e6', '6117c8736f258da9af259562ae7cdf189309a617-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA4OTM1Nw==', 1526089357),
(99, '356a192b7913b04c54574d18c28d46e6', 'cef894aed27810205320d527e990132c79e7bdaa-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA5NDc3OA==', 1526094778),
(100, '356a192b7913b04c54574d18c28d46e6', 'e12a562aa7641cecd7b53b970e4abfbac7625678-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA5NTU0Mw==', 1526095543),
(101, '356a192b7913b04c54574d18c28d46e6', 'b0fe94528cfe863cdd6f6af0f629bd9484365a42-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA5NTU2OQ==', 1526095569),
(102, '356a192b7913b04c54574d18c28d46e6', '1bd5da4be2dd53b9b0f73a4ebcfa97b45268e7d5-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA5NTg5NQ==', 1526095895),
(103, '356a192b7913b04c54574d18c28d46e6', 'f3dee9edc41bafc9072649227292fff4576cb6cb-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA5NTkwNw==', 1526095907),
(104, '356a192b7913b04c54574d18c28d46e6', '3d4dc6f87dbce4b0714311531112dee8f084534d-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA5NTkyMQ==', 1526095921),
(105, '356a192b7913b04c54574d18c28d46e6', '131b9c754444575bfa257504a094dff631fb4496-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjA5NTkyNA==', 1526095924),
(106, '356a192b7913b04c54574d18c28d46e6', '4a5f48fe784ac69acdbb9730205b21a91b92c2b2-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjMzMDgwNg==', 1526330806),
(107, '356a192b7913b04c54574d18c28d46e6', '66958ef6f2d16fb7207f83e357b5334ba87422cb-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjM0NjQ5NA==', 1526346494),
(108, '356a192b7913b04c54574d18c28d46e6', '57d118bba888e7dd1dfb14115114c2e6774b110d-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjQyMjI5MA==', 1526422290),
(109, '356a192b7913b04c54574d18c28d46e6', '18b159ecb9282c424ec22e953052de16ce50803a-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjQyMjI5OA==', 1526422298),
(110, '356a192b7913b04c54574d18c28d46e6', 'f8c8fc4ab6b84837012a42c756d2b19687823852-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjQyNTg3OA==', 1526425878),
(111, '356a192b7913b04c54574d18c28d46e6', '880496d5371674df6b79353be3fc0aa1a5a5c5a9-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjUwNDk5MA==', 1526504990),
(112, '356a192b7913b04c54574d18c28d46e6', '3ca7e32a0cbaafaaef143c18763482746af045dd-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjUwNzIyNw==', 1526507227),
(113, '356a192b7913b04c54574d18c28d46e6', '89413733e7215b19a503dfdf57880331d17d4de4-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjUwNzU3Nw==', 1526507577),
(114, '356a192b7913b04c54574d18c28d46e6', 'b83596a8507d280f7bba5fc6456fd82957aa27ea-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjUwNzY5OA==', 1526507698),
(115, '356a192b7913b04c54574d18c28d46e6', '63aa51313679daebebe1d080f22c354f1fc7b3a8-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjUyOTI4MQ==', 1526529281),
(116, '356a192b7913b04c54574d18c28d46e6', 'a438b5e880e275b00556594f665bb8cee8ba0d2f-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjU3MzkwNw==', 1526573907),
(117, '356a192b7913b04c54574d18c28d46e6', 'e84ed5c74aeae07cd1ba9b54955ef169df1710be-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjU3NjQ1Mg==', 1526576452),
(118, '356a192b7913b04c54574d18c28d46e6', '9f584e06d10a931a6f0e033dd4bafd028167c7d4-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjU3NzUzOQ==', 1526577539),
(119, '356a192b7913b04c54574d18c28d46e6', '624f1823e93e603ad7099c56d0a22590ca0a4d14-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjU3ODQzNQ==', 1526578435),
(120, '356a192b7913b04c54574d18c28d46e6', '4453b22e7786bcf66729b449a757f01e9250131c-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjU4MjA1Mw==', 1526582053),
(121, '356a192b7913b04c54574d18c28d46e6', '50a476bd01e4b39a1ae143d0e1bb0e23562105e8-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjU5NTg4Mw==', 1526595883),
(122, '356a192b7913b04c54574d18c28d46e6', '1ffab7389b22acc8efb6ee5d012fbec016b6403c-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjYwMTA5NQ==', 1526601095),
(123, '356a192b7913b04c54574d18c28d46e6', 'c93d5dc340f63634998d15b8435a117ac8dcb3a6-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjYwMTE3MA==', 1526601170),
(124, '356a192b7913b04c54574d18c28d46e6', '435d29d709c8df8ef28c4a9ecfe89ef00e2c130d-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjYxNDI4NQ==', 1526614285),
(125, '356a192b7913b04c54574d18c28d46e6', 'cd6788221c884078f17f5958c8040d54f8515540-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjY3ODM3MQ==', 1526678371),
(126, '356a192b7913b04c54574d18c28d46e6', 'e56ea948d510da11b47fafcff41c944f00197bb2-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjY4Njc0OA==', 1526686748),
(127, '356a192b7913b04c54574d18c28d46e6', 'bcf1cc9bf79df6d38fe842e1afeb3e7d0f7ca322-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjY4Njk3Mw==', 1526686973),
(128, '356a192b7913b04c54574d18c28d46e6', '492f8d4d38022a0de8e1be207712e6f3c1a260b4-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjY4OTEzOQ==', 1526689139),
(129, '356a192b7913b04c54574d18c28d46e6', '948dcb193adb24d386ffbfc9d82cd0a32b129e3d-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjY4OTMwNQ==', 1526689305),
(130, '356a192b7913b04c54574d18c28d46e6', '391fce9508c705ad99dad7b01242596d3a70d1ca-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjY4OTUyOA==', 1526689528),
(131, '356a192b7913b04c54574d18c28d46e6', '2e3d332590c1d62ac4c01d0b53562bf67740e278-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjY4OTczMA==', 1526689730),
(132, '356a192b7913b04c54574d18c28d46e6', 'dd7aaabb2baff5036333f19f3bea68a144fb83fa-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjY4OTk1OA==', 1526689958),
(133, '356a192b7913b04c54574d18c28d46e6', '2ba4026838621b3283ae63d8ecf23b22e652f096-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjgyODQ5OA==', 1526828498),
(134, '356a192b7913b04c54574d18c28d46e6', '80accc505599e35a2f769547fd282917a5c70f0f-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjgyODkxMw==', 1526828913),
(135, '356a192b7913b04c54574d18c28d46e6', '2ab690d146cb153e11dded063cb80c87614d6816-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjgyOTA2MQ==', 1526829061),
(136, '356a192b7913b04c54574d18c28d46e6', '5bb1347526aa79a624e5ed85d955d0aa0233ca9b-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjgzMzM3Ng==', 1526833376),
(137, '356a192b7913b04c54574d18c28d46e6', '96e0a997aa94c47aa8c958b4926e57d5259247c1-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjg0MzQxOQ==', 1526843419),
(138, '356a192b7913b04c54574d18c28d46e6', '5539925a82f2245986860bb31ba10d4e56f9b248-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjg1MTI2Nw==', 1526851267),
(139, '356a192b7913b04c54574d18c28d46e6', 'a2c68cd8caf82cdcdf27bb9693144a13f402295d-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjg1NTc5NA==', 1526855794),
(140, '356a192b7913b04c54574d18c28d46e6', '93676da1109a1304e8e3f71d4fecfd8a07c0da2e-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjg1NzU0Ng==', 1526857546),
(141, '356a192b7913b04c54574d18c28d46e6', '81c5a653c4999802cffa92a8e823fd90dbd27895-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjg2MTI0Ng==', 1526861246),
(142, '356a192b7913b04c54574d18c28d46e6', '5986ee52a40674a5198754c69d0bbacadb31df68-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0MjcxMA==', 1526942710),
(143, '356a192b7913b04c54574d18c28d46e6', '54ef2a3188e700eea5d716ac803809ae11752c8c-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0Mjc0Mw==', 1526942743),
(144, '356a192b7913b04c54574d18c28d46e6', 'a6db269237f12943c3ef14530843cebe333cb93d-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0Mjc1OQ==', 1526942759),
(145, '356a192b7913b04c54574d18c28d46e6', '3da18060b61ece7895c1e927bbc080ae7f97128f-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0NDA0OA==', 1526944048),
(146, '356a192b7913b04c54574d18c28d46e6', '68fd2be6b123f6db7c7205313adb49e9a1319880-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0NTM1NA==', 1526945354),
(147, '356a192b7913b04c54574d18c28d46e6', 'ea9990b8c6cf273eaf07e3444defeaaee4764bd3-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0NjA2NA==', 1526946064),
(148, '356a192b7913b04c54574d18c28d46e6', '83120f8a8aaf424d5d265445580d815610fc3c0d-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0NjQ3Ng==', 1526946476),
(149, '356a192b7913b04c54574d18c28d46e6', '2f69b399edf73cc37138be924d2e7bab627352cf-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0NjQ3OQ==', 1526946479),
(150, '356a192b7913b04c54574d18c28d46e6', 'bed546af889554b169b79178f196dbd71343e8d0-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0NjQ4MQ==', 1526946481),
(151, '356a192b7913b04c54574d18c28d46e6', '18f08bcf8fc8d79cd5d203eab589d44fce9b2a54-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNjk0NzI3Mw==', 1526947273),
(152, '356a192b7913b04c54574d18c28d46e6', '5eeb3a062eb5438a05df89bebc298474dd52dd83-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNzAxMjQ0NQ==', 1527012445),
(153, '356a192b7913b04c54574d18c28d46e6', '84cf2f8f9aa1255f64d40d09132abac7d24d2e8d-MzU2YTE5MmI3OTEzYjA0YzU0NTc0ZDE4YzI4ZDQ2ZTY=-aW50ZWdyYQ==-MTUyNzAxMjU1Mg==', 1527012552);

-- --------------------------------------------------------

--
-- Estrutura para tabela `integra_user_login`
--

CREATE TABLE IF NOT EXISTS `integra_user_login` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(512) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(512) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(512) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `integra_user_login`
--

INSERT INTO `integra_user_login` (`indice`, `uid`, `cpf`, `email`, `senha`, `time`) VALUES
(1, '356a192b7913b04c54574d18c28d46e6', '01723378950', 'robson_x@yahoo.com.br', '$2a$09$1Nt3gR4pROc0nP4p1R0w3.FeJF6l0oeoWamBGb49QtoAWOaqLcIUy', 1525306422),
(2, 'da4b9237bacccdf19c0760cab7aec4a8359010b0', '47291668093', 'user@email.com', '$2a$09$1Nt3gR4pROc0nP4p1R0w3..rwCqk8YnSiIHjJpnQvaTW0yvMHgOUu', 1525819089),
(3, '77de68daecd823babbb58edb1c8e14d7106e83bb', '64391965968', 'camile@gmail.com', '$2a$09$1Nt3gR4pROc0nP4p1R0w3.JvM69BLEdFXeYdYKHmewrK6u2kYS.gS', 1526869815);