-- VERSAO PARA PORTFOLIO: dados removidos das tabelas:
-- usuarioadmin, curriculo, cv_idioma e solicitacaodevagas.
-- Estrutura (CREATE TABLE / ALTER TABLE) preservada.
-- ATENCAO: outras tabelas do dump podem conter dados pessoais ou comerciais;
-- revise-as antes de publicar este arquivo em um repositorio publico.

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 31/10/2026 às 19:17
-- Versão do servidor: 8.0.46-cll-lve
-- Versão do PHP: 8.2.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `essencia_humano`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `album`
--

CREATE TABLE `album` (
  `id` int NOT NULL,
  `ds_album` varchar(100) DEFAULT NULL,
  `dt_album` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `album`
--

INSERT INTO `album` (`id`, `ds_album`, `dt_album`) VALUES
(1, 'album 1', '2016-01-10'),
(2, 'album 2', '1991-09-11'),
(3, 'album 3', '1998-10-30'),
(4, 'teste', '2023-07-19');

-- --------------------------------------------------------

--
-- Estrutura para tabela `base_ano`
--

CREATE TABLE `base_ano` (
  `id_ano` int NOT NULL,
  `ativo` int NOT NULL DEFAULT '1' COMMENT '1=Sim 0=Não'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `base_ano`
--

INSERT INTO `base_ano` (`id_ano`, `ativo`) VALUES
(2014, 1),
(2013, 1),
(2012, 1),
(2011, 1),
(2010, 1),
(2009, 1),
(2008, 1),
(2007, 1),
(2006, 1),
(2005, 1),
(2004, 1),
(2003, 1),
(2002, 1),
(2001, 1),
(2000, 1),
(1999, 1),
(1998, 1),
(1997, 1),
(1996, 1),
(1995, 1),
(1994, 1),
(1993, 1),
(1992, 1),
(1991, 1),
(1990, 1),
(1989, 1),
(1988, 1),
(1987, 1),
(1986, 1),
(1985, 1),
(1984, 1),
(1983, 1),
(1982, 1),
(1981, 1),
(1980, 1),
(1979, 1),
(1978, 1),
(1977, 1),
(1976, 1),
(1975, 1),
(1974, 1),
(1973, 1),
(1972, 1),
(1971, 1),
(1970, 1),
(1969, 1),
(1968, 1),
(1967, 1),
(1966, 1),
(1965, 1),
(1964, 1),
(1963, 1),
(1962, 1),
(1961, 1),
(1960, 1),
(1959, 1),
(1958, 1),
(1957, 1),
(1956, 1),
(1955, 1),
(2015, 1),
(2016, 1),
(2017, 1),
(2018, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `boletim`
--

CREATE TABLE `boletim` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `tipo` char(1) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int NOT NULL,
  `cargo` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ativo` int NOT NULL DEFAULT '1' COMMENT '1=Ativo 0=Inativo'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `cargo`, `ativo`) VALUES
(1, 'Consultor de Vendas', 1),
(2, 'Encarregado de Almoxarifado', 1),
(3, 'Encarregado de Cobrança', 1),
(4, 'Encarregado de CPD', 1),
(5, 'Encarregado de Departamento Pessoal', 1),
(6, 'Encarregado de Licitações', 1),
(7, 'Encarregado de Segurança do Trabalho', 1),
(8, 'Engenheiro Civil', 1),
(9, 'Engenheiro de Alimentos', 1),
(10, 'Engenheiro Mecânico', 1),
(11, 'Estágio em geral', 1),
(12, 'Estoquista', 1),
(13, 'Gerente Financeiro', 1),
(14, 'Gerente Comercial', 1),
(15, 'Gerente de Contas', 1),
(16, 'Gerente de Logística', 1),
(17, 'Gerente de Loja', 1),
(18, 'Gerente de Manutenção', 1),
(19, 'Gerente de Marketing', 1),
(20, 'Gerente de Meio Ambiente', 1),
(22, 'Gerente Geral', 1),
(23, 'Moto Boy', 1),
(24, 'Operador de Caixa', 1),
(25, 'Operador de Caldeira', 1),
(26, 'Operador de Máquinas', 1),
(27, 'Recepcionista', 1),
(28, 'Secretária', 1),
(29, 'Secretária Executiva', 1),
(30, 'Serviços Gerais', 1),
(31, 'Supervisor de Manutenção', 1),
(32, 'Supervisor de Packaging', 1),
(33, 'Supervisor de TMK', 1),
(34, 'Supervisor de Vendas', 1),
(35, 'Técnico Elétrico', 1),
(36, 'Técnico em Elétrica', 1),
(37, 'Técnico em Informática', 1),
(38, 'Técnico Mecânico', 1),
(39, 'Técnico Químico', 1),
(40, 'TMK Receptivo/ Ativo', 1),
(41, 'Vendedor Externo', 1),
(42, 'Vendedor Interno', 1),
(43, 'Advogado (a)', 1),
(44, 'Analista Administrativo ', 1),
(45, 'Analista Contábil', 1),
(46, 'Analista de cobrança', 1),
(47, 'Analista de Compras', 1),
(48, 'Analista de Controladoria e Custo', 1),
(49, 'Analista de Crédito', 1),
(357, 'Analista de Departamento Pessoal', 1),
(51, 'Analista de Escrita Fiscal', 1),
(52, 'Analista de faturamento', 1),
(53, 'Analista de Implementação (Analista de banco de dados)', 1),
(54, 'Analista de Laboratório', 1),
(55, 'Analista de Logística', 1),
(56, 'Analista de Marketing', 1),
(57, 'Analista de Perdas (Estoque)', 1),
(58, 'Analista de Recursos Humanos', 1),
(59, 'Analista de T.I.', 1),
(60, 'Analista Financeiro', 1),
(62, 'Analista RH', 1),
(251, 'Assistente de Marketing\r\n', 1),
(64, 'Assistente Administrativo', 1),
(65, 'Assistente Comercial', 1),
(356, 'Assistente Contábil Fiscal', 1),
(250, 'Assistente de Compras\r\n', 1),
(68, 'Assistente de Cobrança', 1),
(69, 'Assistente de Crédito', 1),
(70, 'Assistente de Departamento Pessoal', 1),
(71, 'Assistente de Manutenção Predial', 1),
(72, 'Assistente Jurídico', 1),
(73, 'Assistente Social', 1),
(74, 'Atendente', 1),
(256, 'Cadista\r\n', 1),
(254, 'Auxiliar de Fotografia\r\n', 1),
(78, 'Auxiliar Administrativo', 1),
(253, 'Auxiliar Contábil\r\n', 1),
(80, 'Auxiliar de Almoxerifado', 1),
(81, 'Auxiliar de Cobrança', 1),
(82, 'Auxiliar de Dentista', 1),
(83, 'Auxiliar de DP', 1),
(84, 'Auxiliar de Enfermagem', 1),
(85, 'Auxiliar de Escrita Fiscal', 1),
(86, 'Auxiliar de Estoque', 1),
(87, 'Auxiliar de Expedição', 1),
(88, 'Auxiliar de faturamento', 1),
(89, 'Auxiliar de laboratório', 1),
(90, 'Auxiliar de Produção', 1),
(91, 'Auxiliar de Vendas', 1),
(92, 'Auxiliar Comercial', 1),
(93, 'Auxiliar Expedição', 1),
(94, 'Auxiliar Financeiro', 1),
(255, 'Biomédico\r\n', 1),
(96, 'Auxiliar Técnico', 1),
(97, 'Auxiliar Técnico (Eletro técnico)', 1),
(98, 'Cobrador', 1),
(99, 'Comercial', 1),
(100, 'Comércio Exterior', 1),
(101, 'Comprador/ Avaliador', 1),
(102, 'Conferente', 1),
(104, 'Consultor Comercial', 1),
(105, 'Consultor Comercial - Laboratório', 1),
(257, 'Coordenador Contábil\r\n', 1),
(107, 'Consultora em Vendas (Turismo)', 1),
(108, 'Coordenador de Loja', 1),
(109, 'Coordenador de DP', 1),
(110, 'Coordenador de Escrita Fiscal', 1),
(111, 'Coordenador de inteligência de mercado', 1),
(112, 'Coordenador de manutenção', 1),
(113, 'Coordenador de Marketing', 1),
(114, 'Coordenador de Meio Ambiente', 1),
(115, 'Coordenador de Música', 1),
(116, 'Coordenador de Papelaria', 1),
(117, 'Coordenador de RH', 1),
(118, 'Coordenador DP', 1),
(119, 'Coordenador Farmâceutico', 1),
(259, 'Designer de Interior\r\n', 1),
(121, 'Copeira', 1),
(122, 'Criador Publicitário', 1),
(123, 'Diretor Técnico', 1),
(124, 'Divulgador', 1),
(125, 'Eletricista  de Máquinas Agrícolas', 1),
(126, 'Encarregado Adm/ Financeiro', 1),
(365, 'Supervisor Comercial', 1),
(128, 'Encarregado de logística', 1),
(129, 'Encarregado de Manutenção', 1),
(130, 'Encarregado de Tesouraria', 1),
(131, 'Encarregado de Transporte', 1),
(132, 'Encarregado de Vendas', 1),
(364, 'Encarregado Financeiro', 1),
(134, 'Enfermeiro ', 1),
(135, 'Enfermeiro CME ', 1),
(136, 'Engenharia de Segurança do Trabalho', 1),
(137, 'Engenheiro de Orçamento', 1),
(138, 'Engenheiro de Segurança do Trabalho', 1),
(139, 'Engenheiro Mecânico (Gerente Manutenção)', 1),
(140, 'Estagiário', 1),
(141, 'Estagiario - cadastro', 1),
(142, 'Estagiario - Vendas', 1),
(143, 'Estagiário de Psicologia', 1),
(299, 'Diretor Financeiro', 1),
(145, 'Estágio Controladoria', 1),
(146, 'Estágio de Administração', 1),
(147, 'Estágio em Administração', 1),
(148, 'Estágio em Contabilidade', 1),
(149, 'Estágio em Engenharia', 1),
(150, 'Estágio Nível Técnico', 1),
(151, 'Estágio Qualidade', 1),
(152, 'Estágio RH  ', 1),
(153, 'Estágio Técnico (mecânico/elétrico) (APS)', 1),
(154, 'Estágio Técnico de Segurança do Trabalho', 1),
(155, 'Estágio TI', 1),
(156, 'Faturamento Hospitalar ', 1),
(157, 'Faturista', 1),
(158, 'Faturista Hospitalar', 1),
(159, 'Fiscal de Obras', 1),
(160, 'Frentista', 1),
(161, 'Gerente', 1),
(162, 'Gerente Administrativo', 1),
(163, 'Gerente Administrativo Financeiro', 1),
(164, 'Gerente Agrícola Regional ', 1),
(165, 'Gerente Comercial e Marketing', 1),
(166, 'Gerente Comercial Nacional ', 1),
(167, 'Gerente Contábil', 1),
(168, 'Gerente de Cobrança', 1),
(169, 'Gerente de Controladoria', 1),
(170, 'Gerente de Crédito', 1),
(171, 'Gerente de Hotel', 1),
(172, 'Gerente de Lanchonete', 1),
(175, 'Gerente de Peças', 1),
(176, 'Gerente de Produção', 1),
(177, 'Gerente de Recursos Humanos', 1),
(178, 'Gerente de RH', 1),
(179, 'Gerente de Vendas', 1),
(180, 'Gerente Industrial', 1),
(314, 'Coordenador Jurídico', 1),
(182, 'Gestor de Campanhas', 1),
(183, 'Gestor de Recursos Humanos', 1),
(184, 'Instrumentista Industrial', 1),
(185, 'Lanterneiro/ Funileiro', 1),
(186, 'Mecânico de Manutenção ', 1),
(187, 'Mecânico de manutenção de Máquinas Agrícolas', 1),
(188, 'Mecânico Eletricista', 1),
(189, 'Mecânico Geral', 1),
(190, 'Médico do Trabalho', 1),
(191, 'Montador', 1),
(192, 'Motoboy', 1),
(193, 'Motorista	de carro', 1),
(194, 'Operador de caixas', 1),
(195, 'Operador de Caldeiras', 1),
(196, 'Operador de Empilhadeira', 1),
(197, 'Operador de Máquina', 1),
(198, 'Packaging (Estágio em Engenharia APS)', 1),
(199, 'Piloto de Testes', 1),
(200, 'Pintor de Autos', 1),
(201, 'Porteiro', 1),
(202, 'Professor de Inglês', 1),
(203, 'Programador (Analista de Desenvolvimento de Sistemas)', 1),
(204, 'Programador Delphi ', 1),
(205, 'Promotor ', 1),
(206, 'Químico Responsável', 1),
(298, 'Diretor Administrativo', 1),
(208, 'Repositor', 1),
(297, 'Controller', 1),
(211, 'Separador de Mercadorias', 1),
(212, 'Supervisor de Atendimento', 1),
(213, 'Supervisor de Call Center', 1),
(214, 'Supervisor de Eletromecânica', 1),
(215, 'Supervisor de Engenharia', 1),
(216, 'Supervisor de Limpeza', 1),
(217, 'Supervisor de logística', 1),
(218, 'Supervisor de Manutenção Industrial', 1),
(219, 'Supervisor de Merchandising', 1),
(220, 'Supervisor Técnico de Vendas', 1),
(221, 'Supervisor Tecnologia e Desenvolvimento', 1),
(222, 'Técnico Administrativo', 1),
(223, 'Técnico de manutenção', 1),
(224, 'Técnico de Segurança do Trabalho', 1),
(225, 'Técnico Eletricista', 1),
(226, 'Técnico em Edificações', 1),
(227, 'Técnico em Elétricas ', 1),
(228, 'Técnico em Elétrica (Tetra Pak)', 1),
(229, 'Técnico em Eletroeletrônica', 1),
(230, 'Técnico em Enfermagem ', 1),
(231, 'Técnico em Enfermagem Instrumentador', 1),
(232, 'Técnico em Mecânica', 1),
(233, 'Técnico em Meio Ambiente ', 1),
(234, 'Técnico em Planejamento', 1),
(235, 'Técnico Instrumentista', 1),
(236, 'Técnico Operador', 1),
(237, 'Telemarketing', 1),
(238, 'Televendas', 1),
(239, 'Trocador de Óleo', 1),
(240, 'Vendedor  de Veículos', 1),
(241, 'Vendedor de Papelaria', 1),
(242, 'Vendedor de Veículos', 1),
(243, 'Vendedor Externos', 1),
(244, 'Vendedor Técnico', 1),
(245, 'Vendedor(a) Externo', 1),
(246, ' OUTROS', 1),
(247, 'Analista Comercial \r\n', 1),
(248, 'Analista de Licitação \r\n', 1),
(249, 'Analista de qualidade', 1),
(252, 'Assistente de RH\r\n', 1),
(258, 'Coordenador Financeiro', 1),
(260, 'Eletricista\r\n', 1),
(261, 'Engenheiro Mecatrônico\r\n', 1),
(262, 'Engenheiro Ambiental\r\n', 1),
(263, 'Engenheiro Naval\r\n', 1),
(264, 'Estágio em Arquitetura\r\n', 1),
(265, 'Fisioterapeuta\r\n', 1),
(266, 'Gerente de Compras\r\n', 1),
(267, 'Gerente de DP\r\n', 1),
(268, 'Jornalista\r\n', 1),
(269, 'Motorista de caminhão\r\n', 1),
(270, 'Projetista\r\n', 1),
(271, 'Psicólogo', 1),
(272, 'Publicitário', 1),
(273, 'Vigilante\r\n', 1),
(274, 'Web designer', 1),
(275, 'Auxiliar de Limpeza\r\n', 1),
(276, 'Zelador\r\n', 1),
(277, 'Padeiro\r\n', 1),
(278, 'Técnico de Saúde Bucal\r\n', 1),
(279, 'Desenvolvedor Gestão de Produtos\r\n', 1),
(280, 'Desenvolvedor FPW Reports\r\n', 1),
(281, 'Desenvolvedor WEB\r\n', 1),
(282, 'Analista de Suporte\r\n', 1),
(283, 'Estagiário Web Desing / Publicidade e Propaganda\r\n', 1),
(284, 'Auxiliar Operacional\r\n', 1),
(285, 'Ajudante Geral\r\n', 1),
(286, 'Montador Industrial\r\n', 1),
(287, 'Jatista\r\n', 1),
(288, 'Auxiliar de Cozinha\r\n', 1),
(289, 'Garçom\r\n', 1),
(290, 'Promotor de Vendas', 1),
(291, 'Auxiliar de Serviços Gerais\r\n', 1),
(292, 'Auxiliar Financeiro\r\n', 1),
(293, 'Auxiliar de Logística\r\n', 1),
(294, 'Fiscal de Caixa\r\n', 1),
(295, 'Líder de Serviços Gerais\r\n', 1),
(296, 'Auxiliar de carga e descarga\r\n', 1),
(300, 'Diretor Administrativo/Financeiro', 1),
(301, 'Diretor Comercial', 1),
(302, 'Diretor de Logística', 1),
(303, 'Diretor de Compras', 1),
(304, 'Diretor de Contabilidade', 1),
(305, 'Consultor Contábil', 1),
(306, 'Propagandista', 1),
(307, 'Administrativo de Obras', 1),
(308, 'Técnico de Estradas', 1),
(309, 'Assistente Executiva', 1),
(310, 'Analista de Pós Venda', 1),
(311, 'Farmacêutico', 1),
(312, 'Assistente de Loja', 1),
(313, 'Representante Comercial', 1),
(315, 'Assistente Administrativo de Obra', 1),
(316, 'Técnico de Obra', 1),
(317, 'Encarregado de Assistência Técnica', 1),
(318, 'Assistente de Relacionamento', 1),
(319, 'Assistente de Pós Venda', 1),
(320, 'Assistente de atendimento ao cliente', 1),
(321, 'Analista de Projetos', 1),
(447, 'Engenheiro de Instalações', 1),
(323, 'Analista de Requisitos', 1),
(324, 'Gerente de Projetos', 1),
(325, 'Gerente de Suporte', 1),
(326, 'Encarregado Administrativo', 1),
(329, 'Engenheiro de Projetos', 1),
(330, 'Contador', 1),
(331, 'Gestor de Custos (controller)', 1),
(332, 'Comprador', 1),
(333, 'Doméstica', 1),
(334, 'Diretor de RH', 1),
(335, 'Analista de Sistemas', 1),
(343, 'Supervisor Administrativo Financeiro', 1),
(344, 'Auxiliar de Relacionamento', 1),
(345, 'Assistente de Stand de Vendas', 1),
(346, 'Engenheiro Civil Pleno', 1),
(347, 'Advogado Pleno', 1),
(348, 'Analista de Projeto Técnico', 1),
(349, 'Técnico em Paisagismo', 1),
(351, 'Trainee Jurídico', 1),
(353, 'Jardineiro', 1),
(355, 'Vendedor Bilíngue', 1),
(358, 'Analista de Novos Negócios', 1),
(359, 'Auxiliar de Departamento Pessoal', 1),
(360, 'Técnico em Prótese Dentária', 1),
(361, 'Técnico em Segurança do Trabalho', 1),
(362, 'Analista de Marketing e Vendas Júnior', 1),
(363, 'Analista de Marketing e Vendas Pleno', 1),
(366, 'Coordenador(a) Pedagógico(a)', 1),
(367, 'Auxiliar Administrativo de Obras', 1),
(368, 'Gerente de Unidade Trainee', 1),
(369, 'Gerente de Clínica', 1),
(370, 'Coordenador(a) Administrativo(a)', 1),
(371, 'Desenvolvedor', 1),
(372, 'Promotora de Serviços', 1),
(373, 'Encarregado(a) de Estoque', 1),
(374, 'Coordenador(a) Comercial', 1),
(375, 'Gestor Administrativo', 1),
(380, 'Consultora de R&S Júnior', 1),
(377, 'Gerente de fábrica', 1),
(378, 'Estágio Financeiro', 1),
(379, 'Auxiliar de realização de casamento', 1),
(381, 'Vendedor', 1),
(382, 'Auxiliar de Cartório', 1),
(383, 'Assessor(a) Comercial', 1),
(384, 'Social Media', 1),
(385, 'Analista de Marketing Digital', 1),
(386, 'Promotora de Vendas', 1),
(387, 'Assistente de Atendimento', 1),
(388, 'Recepcionista Cartório', 1),
(389, 'Auxiliar de Atendimento ao Cliente', 1),
(390, 'Auxiliar de Manutenção de Máquinas Pesadas', 1),
(391, 'Estágio em Manutenção de Máquinas Pesadas', 1),
(392, 'Auxiliar Administrativo Financeiro', 1),
(393, 'Coordenador Comercial BackOffice', 1),
(394, 'Auxiliar de Compras', 1),
(395, 'Escrevente', 1),
(396, 'Auxiliar de Registro Civil', 1),
(397, 'Gerente de Condomínio Horizontal', 1),
(398, 'Consultor de imagem', 1),
(400, 'Designer Grafico', 1),
(401, 'Almoxarifado', 1),
(402, 'Diretor de Supplay Chain', 1),
(403, 'Diretor de Logística/Compras', 1),
(404, 'Secretária de Clínica Oftalmologica', 1),
(405, 'Diretor(a) Administrativo Financeiro', 1),
(411, 'Agente de Relacionamento', 1),
(412, 'Operador(a) de Caixa', 1),
(414, 'Coordenador(a) de Atividades Físicas', 1),
(413, 'Auxiliar de Cartório Registro Civil', 1),
(415, 'Encarregado de Equipamentos ', 1),
(416, 'Supervisor(a) de Produção ', 1),
(417, 'Analista de Controladoria Pleno', 1),
(419, 'Analista de Controladoria ', 1),
(420, 'Supervisor(a) de Segurança do Trabalho ', 1),
(421, 'ANALISTA DE TI', 1),
(422, 'AGENTE ADMINISTRATIVO ', 1),
(423, 'AUXILIAR DE SAUDE BUCAL ', 1),
(424, 'EMPREGADA DOMESTICA ', 1),
(425, 'ANALISTA ADMINISTRATIVO FINANCEIRO', 1),
(426, 'ASSISTENTE DE RELACIONAMENTO COM CLIENTE ', 1),
(427, 'ESTAGIO ENGENHARIA CIVIL ', 1),
(428, 'ESTAGIO TECNICO EM SEGURANCA DO TRABALHO ', 1),
(446, 'Analista de PCP', 1),
(430, 'COORDENADOR(A) DE RH ', 1),
(433, 'Supervisor (a) de Contratos e Licitações', 1),
(434, 'Coordenador (a) de Engenharia', 1),
(435, 'Analista de Finanças Corporativas', 1),
(436, 'Consultor de Finanças Corporativas', 1),
(437, 'Coordenador de Finanças Corporativas', 1),
(439, 'Mestre de Obras', 1),
(442, 'Encarregado de Obra', 1),
(443, 'Atendente de Cartório', 1),
(444, 'Analista de Planejamento - Controller de Obra', 1),
(445, 'Auxiliar de logística', 1),
(448, 'Engenheiro Eletricista', 1),
(449, 'Almoxarife', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_tipo` int NOT NULL,
  `categoria` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nome_categoria` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `subcategoria` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pagina` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `arquivo` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `mensagem` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_tipo`, `categoria`, `nome_categoria`, `subcategoria`, `pagina`, `arquivo`, `mensagem`) VALUES
(1, 'Sobre nós', 'Sobre nós', '', 'quem-somos', '', ''),
(2, 'Consultores', 'Consultores', 'Nossa Equipe', 'consultores', '', ''),
(3, 'Vagas', 'Vagas', '', 'vagas', '', ''),
(4, 'Banco de Currículos', 'Envia CV', '', 'envia-cv', '', ''),
(5, 'Nossos Serviços', 'Nossos Serviços', '', 'nossos-servicos', '', ''),
(6, 'Depoimentos', 'Depoimentos', '', 'depoimentos', '', ''),
(7, 'Contato', 'Contato', '', 'contato', '', ''),
(8, 'Nossos Clientes', 'Clientes', '', 'clientes', '', ''),
(11, 'Blog', 'Blog', '', 'blog', '', ''),
(10, 'Empresas Parceiras', 'Empresas Parceiras', 'Nossa Equipe', 'empresas-parceiras', '', ''),
(15, 'Slides', '', '', '', '', ''),
(13, 'Gerar nova senha', 'Gerar nova senha', '', '', '', ''),
(16, 'Política de Privacidade ', 'Política de Privacidade ', '', 'politica-de-privacidade ', '', ''),
(17, 'Cargos', 'Cargos', '', '', '', ''),
(18, 'Vagas', 'Solicitação de Vagas', '', 'solicitacao-de-vagas', '', ''),
(19, 'Vagas', 'Alteração de Vagas', '', 'alteracao-de-vagas', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculo`
--

CREATE TABLE `curriculo` (
  `id_curriculo` int NOT NULL,
  `id_cargo_pretendido` int NOT NULL,
  `id_vaga_pretendido` int NOT NULL,
  `deficiencia` int NOT NULL COMMENT 'Valores: 1=Sim 0=Não',
  `salario_pretendido` float NOT NULL,
  `id_horario` int NOT NULL,
  `nome` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `estado_civil` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sexo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `naturalidade` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `profissao_conjuge` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_renda_familia` int NOT NULL,
  `tem_carro` int NOT NULL COMMENT '1=Sim 0=Não',
  `disp_mudanca` int NOT NULL COMMENT '1=Sim 0=Não',
  `tem_moto` int NOT NULL COMMENT '1=Sim 0=Não',
  `disp_viagem` int NOT NULL COMMENT '1=Sim 0=Não',
  `id_tipo_residencia` int NOT NULL,
  `endereco` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `bairro` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cidade` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uf` varchar(2) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `telefone` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `telefone_recado` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `celular` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(400) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email2` varchar(400) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `rg` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cpf` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_escolaridade1` int NOT NULL,
  `id_escolaridade2` int NOT NULL,
  `id_escolaridade3` int NOT NULL,
  `id_idioma1` int NOT NULL,
  `nivel_idioma1` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_idioma2` int NOT NULL,
  `nivel_idioma2` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_idioma3` int NOT NULL,
  `nivel_idioma3` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `outras_idioma` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instituicao_esc1` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instituicao_esc2` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instituicao_esc3` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `curso_esc1` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `curso_esc2` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `curso_esc3` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `curso_extra1` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `curso_extra2` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `curso_extra3` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instit_extra1` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instit_extra2` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instit_extra3` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ano_extra1` int NOT NULL,
  `ano_extra2` int NOT NULL,
  `ano_extra3` int NOT NULL,
  `id_situacao` int NOT NULL,
  `nome_empresa1` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nome_empresa2` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nome_empresa3` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cargo_empresa1` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cargo_empresa2` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cargo_empresa3` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `admissao_empresa1` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `admissao_empresa2` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `admissao_empresa3` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `demissao_empresa1` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `demissao_empresa2` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `demissao_empresa3` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `endereco_empresa1` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `endereco_empresa2` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `endereco_empresa3` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fone_empresa1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fone_empresa2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fone_empresa3` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `superior_empresa1` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `superior_empresa2` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `superior_empresa3` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ultsalario_empresa1` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ultsalario_empresa2` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ultsalario_empresa3` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desliga_empresa1` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desliga_empresa2` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desliga_empresa3` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `atividades_empresa1` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `atividades_empresa2` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `atividades_empresa3` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dt_cadastro` date NOT NULL,
  `hora_cadastro` time NOT NULL,
  `arquivo_curriculo` varchar(400) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `arquivo_foto` varchar(400) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senha` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ativo` int NOT NULL DEFAULT '0',
  `ativo1` int NOT NULL DEFAULT '0',
  `salario22` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT 'pretenção salarial'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `curriculo`
--

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.
onalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.
 Divulgação; Planejamento e Organização de eventos.\r\nCaptação de Clientes para futuros eventos e até mesmo divulgação da marca proposta; Exposição do produto diante de eventos e clientes. ', 'Emissão de documentos para vendas de produtos, atualização de sistemas para cadastro de clientes, atendimento a fornecedores, captação de novos parceiros.', 'Atendimento ao público cidadão, serviços realizados: planilhas, montagem de processos administrativos, cadastramento biométrico. Serviço realizado juntamente com o condômino DETRAN. ', '2017-09-05', '13:52:00', 'curriculo-05-09-2017-01-50.docx', 'foto-05-09-2017-01-50.jpg', 'fec7712004ed7139884c930ac8397622', 1, 0, '1300,00'),
(5373, 70, 163, 0, 0, 1, 'Gabrielly Silva Corrêia', '1998-04-10', 'Solteiro', 'Feminino', 'Jandaia - GO', '', 0, 0, 0, 0, 0, 2, 'Rua Hedberto Dias Q.60 L.10 ', 'Bairro Goia 2', 'Goiânia', 'GO', '(62) 32590-520', '', '(62) 98155-6858', 'gabriellycorreia98@hotmail.com', 'gaby_gsc33@hotmail.com', '5360601', '042.692.671-43', 6, 0, 0, 1, '', 0, '', 0, '', '', 'Colegio Estadual Luis Perillo', '', '', 'ensino médio completo', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 'AMB Incorp. Const. e Investimentos LTDA', '', '', 'Auxiliar Administrativo', '', '', '09/2014', '', '', '', '', '', 'Rua C137 esq C149 Q.323 L.3/4 Jardim America', '', '', '(62) 3259-0520', '', '', '', '', '', '1783,24', '', '', '', '', '', 'Recepcionista, auxiliar de RH e Departamento Pessoal', '', '', '2017-09-05', '17:51:00', '', '', '8b4eaec26bbf9e4d73150475173696f0', 1, 0, ''),
(5374, 78, 163, 0, 0, 1, 'ALEFE MILLER RODRIGUES CUNHA', '1993-10-28', 'Casado', 'Masculino', 'NEROPOLIS', '', 0, 0, 0, 0, 0, 2, 'rua itumbiara qd 145 lt 25', 'Cidade Jardim', 'Goiânia', 'GO', '(62) 99368-8299', '6239963162', '(62) 99974-2588', 'alefegyn@hotmail.com', 'alefegyn@hotmail.com', '5718176', '751.580.351-72', 5, 0, 0, 1, '', 0, '', 0, '', '', 'NOVA ESCOLA BRASIL', '', '', 'ENSINO MEDIO', '', '', 'Montagem e Manutenção de Computadores', 'Assistente Administrativo', '', 'cebrac', 'cebrac', '', 2012, 2013, 0, 4, 'Iunes GVT', 'Expresso Novato Encomendas e Cargas LTDA', '', 'Consultor de Vendas', 'Auxiliar Administrativo', '', '09/2015', '092014', '', '02/2017', '032015', '', 'praça civica Setor Central', 'Avenida T-2 nº 3.710 setor Sudoeste', '', '', '(62) 3233-7462', '', 'Wanessa', 'Maximo', '', '2.000,00', '787,00', '', 'FALTA DE PAGAMENTO', 'Não informaram', '', 'consultar coberturas, realizar atendimento pessoal e telefone, fazer fechamento quinzenal e mensal.', 'atender clientes pessoal e telefone, rastrear mercadorias, emitir comprovante de transporte, receber fretes e prestar contas ao financeiro, fazer cotação de fretes.', '', '2017-09-06', '11:43:00', 'curriculo-06-09-2017-11-43.docx', 'foto-06-09-2017-11-43.jpg', '032acb0b7760c5840c989f602914347e', 1, 0, '1.000,00'),
(15074, 43, 436, 0, 0, 1, 'Daniella Segati Lopes', '1983-10-10', 'Divorciado', 'Feminino', '', '', 0, 1, 1, 0, 1, 0, 'Rua 21 de Abril', 'Parque Flamboyant', 'Aparecida de Goiânia', 'GO', '(62) 98566-2794', '', '(62) 98566-2794', 'danisegati@hotmail.com', '', '', '005.370.511-47', 12, 13, 13, 1, '', 0, '', 0, '', '', 'Unifan', 'Faculdade Legale', 'Proordem', 'Direito', 'Direito Constitucional- previdência- Carto', 'Penal e processo penal', '', '', '', '', '', '', 0, 0, 0, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-07', '09:10:00', 'curriculo-07-07-2021-09-10.pdf', '', 'c2475310551f9480ebff5dc42e3b8cf5', 1, 0, '2.000,00'),
(5375, 44, 161, 0, 0, 1, 'ROSIRIS LOBO PEREZ', '1991-04-14', 'Solteiro', 'Feminino', 'COLOMBIANA', '', 0, 0, 1, 0, 1, 2, 'Rua 2 Quadra 19a Lote 8 Residencial Triunfo 1 Goianira', 'Goianira', 'Goiania', 'GO', '(11) 98035-8645', '', '(11) 98035-8645', 'rosylobosud@gmail.com', '', '', '239.992.648-02', 11, 11, 0, 1, '', 0, '', 0, '', 'Portugez Fluente', 'SENA', 'SENA', '', 'Tecnologia em Recursos Humanos', 'Tecnico em Contabilidade', '', '', '', '', '', '', '', 0, 0, 0, 4, 'YEPES ORGANIZACION IMOBILIARIA', '', '', 'Assistente administrativa e contavel', '', '', 'SEPTEMBRO 2016', '', '', 'AGOSTO 2017', '', '', 'BOLOMBIA ; BOGOTA', '', '', '(91) 4857-530', '', '', 'GLORIA YEPES', '', '', '1500', '', '', 'VIAGEM PRA BRASIL', '', '', 'Responsável pelas planilhas, cobraças, faturamento,  reformas das residencias e  inventário do escritorio. Pagamentos dos proprietário e funcionários,  atendimento aos representantes comerciais por telefone  e pessoas no  geral, apoio a vendas por telefone, afiliação  a funcionario  ao convenio médico, manipulação de arquivos, elaboração de contratos e habilidade na utilização de programas contaveis.', '', '', '2017-09-06', '19:37:00', 'curriculo-06-09-2017-07-37.docx', '', '48c414047f818510df475cc0aa4060a0', 1, 0, 'Ate 1.500'),
(5376, 44, 165, 0, 0, 1, 'DIEGO ANTONIO ALVES DE FARIA ', '1983-08-07', 'Casado', 'Masculino', 'Goiânia ', '', 0, 1, 1, 1, 1, 1, 'Rua Palmares Qd 229 Lt23 casa 2', 'Jardim Buriti Sereno', 'Aparecida de Goiânia', 'GO', '(62) 99152-5052', '', '(62) 98283-9913', 'diego_faria09@hotmail.com', '', '4159942', '939.710.281-87', 12, 0, 0, 1, '', 0, '', 0, '', '', 'Faculdade Padrão', '', '', 'Administração de Empresas', '', '', '', '', '', '', '', '', 0, 0, 0, 4, 'Df Agile services do Brasil', '', '', 'Agente de serviços sênior', '', '', '14/04/2014', '', '', '25/05/2017', '', '', '', '', '', '(62) 3954-1400', '', '', 'Diviane ', '', '', '2347,50', '', '', 'Redução de Custos ', '', '', 'Administrativas, financeiras, operacional, dos condomínios comerciais Aton Business, New York Square e Lozandes Live Tower', '', '', '2017-09-08', '10:00:00', 'curriculo-08-09-2017-09-58.pdf', '', 'f7cf07a60e07c276e442d6935d9aa25c', 1, 0, '2000'),
(5377, 78, 164, 0, 0, 2, 'Sarah Ferreira Dourado', '1994-01-09', 'Casado', 'Feminino', 'Brasileira', '', 0, 1, 1, 1, 1, 1, 'RUA NOVA DELHI DQ 16 LT 09', 'COLONIAL SUL', 'APARECIDA DE GOIÂNIA', 'GO', '(62) 99287-0696', '62 99227-0828', '(62) 99287-0696', 'sarah.avivamento@hotmail.com', 'sarah.avivamento@hotmail.com', '', '751.375.691-00', 10, 0, 0, 1, '', 0, '', 0, '', '', 'FACULDADE OBJETIVO', '', '', 'RECURSOS HUMANOS', '', '', '', '', '', '', '', '', 0, 0, 0, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-08', '12:53:00', 'curriculo-08-09-2017-12-53.docx', '', 'db1b3a4b40a3954e9446a0462b9ae80d', 1, 0, '1200,00'),
(5378, 307, 162, 0, 0, 3, 'Wellington Borges da Silva Jun', '1995-04-06', 'Solteiro', 'Masculino', 'Brasileiro', '', 0, 0, 0, 0, 0, 2, 'Avenida: Araxa; condominio bela vita.', 'JARDIM ANA LUCIA', 'Goiânia', 'GO', '(62) 98436-3483', '(62) 98436-3483', '(62) 98436-3483', 'wellingtonborgesjunior@hotmail.com', '', '5993935', '754.835.991-87', 11, 0, 0, 1, '', 0, '', 0, '', '', 'Estácio de Sá', '', '', 'Engenharia de produção', '', '', 'Informatica, pacote office', '', '', 'RMC informatica', '', '', 2014, 0, 0, 4, 'São Salvador Alimentos', '', '', 'Auxiliar de produção', '', '', '02/2016', '', '', '08/2017', '', '', 'Itaberaí Goias', '', '', '(62) 3375-7000', '', '', 'Gislaine', '', '', '', '', '', 'Mudança de cidade e ganho de bolsa em faculdade.', '', '', 'Abastecimento das linhas de produção e com 6 meses de trabalho conquistei o cargo de operador de maquinas. ', '', '', '2017-09-08', '13:53:00', 'curriculo-08-09-2017-01-53.pdf', '', '62f39642aa08135347371d1aa3aea439', 1, 0, ''),
(5379, 78, 164, 0, 0, 5, 'Genisio Mariano da Silva Neto', '1993-10-13', 'Solteiro', 'Masculino', 'jussara-Go', '', 0, 0, 1, 1, 1, 1, 'rua cp 58 QD 63 LT 29', 'conjunto primavera', 'goiania', 'GO', '(62) 99277-1206', '994266710', '(62) 99277-1206', 'genisio007@gmail.com', '', '5657993', '022.914.181-14', 11, 0, 0, 1, '', 0, '', 0, '', '', 'UNIALFA', '', '', 'administração', '', '', '', '', '', '', '', '', 0, 0, 0, 4, 'TSV Transportes', '', '', 'auxiliar administrativo', '', '', '02/2011', '', '', '03/2017', '', '', 'avenisa serra dourada N400 setor empresarial', '', '', '(62) 4012-5353', '', '', 'Carlos Roberto Borges', '', '', '1300,00', '', '', 'sem justa causa', '', '', 'Contas a pagar, Atendimento ao cliente, controle de frota,', '', '', '2017-09-08', '14:41:00', 'curriculo-08-09-2017-02-39.pdf', 'foto-08-09-2017-02-39.jpg', '8879dc593ee31333d3d93385ddb96fa6', 1, 0, ''),
(5380, 247, 165, 0, 0, 5, 'Valbeniza Tomazini de Oliveira', '1985-06-20', 'Solteiro', 'Feminino', 'Itupiranga ', '', 0, 1, 0, 1, 1, 2, 'Rua Minuano', 'vila Brasilia ', 'Aparecida de Goiânia ', 'GO', '(62) 98545-9980', '62985392233', '(62) 98545-9980', 'val_tomazini@hotmail.com', '', '4828019', '868.292.202-97', 15, 12, 10, 1, '', 0, '', 0, '', '', 'Unicamps', 'Unicamps', 'Objetivo', 'Gestão financeira e controladoria ', 'Ciências Contábeis', 'Administração de empresas', 'Excel avançado', 'Coaching em liderança executiva', 'Rotinas de departamento Pessoal', 'senac', 'Performance', 'IVS Cursos', 2014, 2014, 2013, 4, 'AGP URBANISMO', 'AGDA ELAINE LEÃO DOMINGUES ', 'SANTOS SAMPAIO', 'Analista administrativo e financeiro', 'Analista adm. e financeiro', 'Analista Financeiro', 'setembro 2016', 'janeiro de 2016', 'Julho 2013', 'junho 2017', 'setembro de 2016', 'mar?o 2015', 'cidade empresarial', 'Alto da Gloria', 'setor sul', '', '(62) 3434-6624', '(62) 3434-6674', 'Fernando Fonseca', 'alaide', 'Paula', '3.000,00', '2.000,00', '2.000,00', 'corte de custos', 'salario baixo', 'Mudança de estrutura e cargos', 'Gestão de equipe.\r\nSuprir a diretoria com informações gerenciais, Gerenciar informações\r\nde planejamento através dos dados de faturamento, fluxo de caixa,\r\ncustos e despesas, para controle dos recursos financeiros da empresa,\r\ncoordenar movimentação financeira diária de pagamentos e\r\nrecebimentos, conciliações bancarias, sistema UAU e SIENGE,\r\nTransações financeiras junto aos bancos: Aplicação, empréstimos com\r\nregistro de cédulas bancárias e alienação de bens, troca de garantia,\r\nconta penhor, credito rotativo, processo de securitização de carteira,\r\nConferir r relatórios contábeis, Balancete, DRE, Apuração de impostos,\r\nfolha de pagamento, admissão e demissão, conferencia de encargos,\r\nRAIS e confecções de planilhas para apresentação de resultados.', 'Gestão de equipe.\r\nSuprir a diretoria com informações gerenciais, gerenciar informações\r\nde planejamento através dos dados de faturamento, fluxo de caixa,\r\ncustos e despesas, para controle dos recursos financeiros da empresa,\r\ncoordenar movimentação financeira diária de pagamentos e\r\nrecebimentos, desconto de títulos, registro de cédulas bancárias, gerar\r\nrelatórios mensais, DRE, balancete financeiro para os sócios e\r\nconfecções de planilhas para apresentação de resultados.', 'Gestão de equipe.\r\nSuprir a diretoria com informações gerenciais, gerenciar informações\r\nde planejamento através dos dados de faturamento, fluxo de caixa,\r\ncustos e despesas, para controle dos recursos financeiros da empresa,\r\ncoordenar movimentação financeira diária de pagamentos e\r\nrecebimentos, gerar relatórios mensais balancete financeiro para os\r\nsócios e confecções de planilhas para apresentação de resultados.\r\n? Acompanhar procedimentos contábeis: guias de impostos (Federais,\r\nestaduais e municipais.) A empresa que trabalhei pertencia ao Lucro\r\nPresumido, também conferia guia de substituição tributária, folha de\r\npagamento, registro de funcionários, demissão e férias, analise de\r\nDRE, verificação de balanço, declaração de ITR.', '2017-09-14', '23:39:00', 'curriculo-14-09-2017-11-39.pdf', '', 'e829570fda113d83bfe238c1791469ac', 1, 0, '2.000,00'),
(5381, 247, 165, 0, 0, 5, 'Helen Franco de Menezes', '1983-04-27', 'Solteiro', 'Feminino', 'ITUIUTABA - MG', '', 0, 0, 0, 0, 1, 1, 'AVENIDA CIRCULAR N 1117 EDIFICIO DOM THIAGO', 'PEDRO LUDOVICO', 'Goiânia', 'GO', '(62) 98215-1636', '62 981770798', '(62) 32034-703', 'hfrancomenezes@gmail.com', '', '4162250', '006.960.261-12', 12, 14, 0, 1, '', 0, '', 0, '', '', 'PUC', 'IPOG', '', 'TERAPIA OCUPACIONAL', 'GESTAO EMPRESARIAL ', '', 'EXCEL', '', '', 'SENAC', '', '', 2012, 0, 0, 4, 'Construtora Queiroz Silveira', 'Toctao Rossi Construtora e Rossi Residencial ', 'Vivara Joalheria ? ', 'Analista comercial   ', 'Supervisora de Gestão de Recebíveis e Cobranç', 'AUXILIAR ADMINISTRATIVO E ESTOQUISTA', '10/2014 a 03/2016', 'ABRIL/2011 A OUTUBRO', 'JANEIRO/2009 A MARÇO', '03/2016', 'OUTUBRO/2014', 'MARÇO/2011', ' PARQUE LOZANDES', 'AV. CHUCRI ZAIDAN SAO PAULO - SP', 'Flamboyant Shopping e Goiânia Shopping', '(62) 9199-4440', '', '', 'JACKELYNE', '', 'FERNANDA', '2000', '', '1300', 'ACORDO', '', 'PEDIDO DE DEMISSAO', '?	Atendimento ao cliente: negociação, autorização de escritura, liberação de chaves de unidades, cobrança dos inadimplentes, cessão de direitos ,rescisão contratual, retenção.\r\n?	Cálculos de comissão da equipe comercial, suporte aos corretores no atendimento ao cliente, fechamento de vendas ,suporte financeiro e backoffice das imobiliárias parceiras em Goiânia, confecção de contratos de compra e venda nos sistema UAU, pagamento de notas fiscais no sistema UAU.\r\n?	Cadastro de Novos Clientes e Prospecção. Realizar Pós Venda, para analisar a qualidade do atendimento;\r\n?	Baixa no sistema das parcelas pagas pelo cliente através do sistema UAU e extrato bancário, recebimento e lançamento de notas fiscais de fornecedores.\r\n', '?	Relacionamento com os clientes através dos multicanais de atendimento (atendimento pessoalmente, atendimento através da central 0800 e e-mail), recebendo chamados sobre cessão de direitos, rescisão contratual, negociação de dividas e escritura)\r\n?	Gestão e execução de todo o processo de cobrança dos clientes inadimplentes, através do     CRM, sistema SAP e escritório de cobrança terceirizado;\r\n?	Foco na redução do índice de inadimplência sobre a carteira;\r\n?	Atendimento aos clientes, que desejam informações e /ou alterações em seu contrato de compra e venda na parte financeira;\r\n?	Gerar informações gerenciais de toda a carteira inadimplente / adimplente;\r\n?	Realimentar a área comercial sobre os problemas ocorridos na venda/concessão do crédito com intuito de melhoria de processos;\r\n?	Analisar razões de inadimplência e rescisões dos contratos;\r\n?	Supervisão do escritório de cobrança terceirizado, que atua no estado de Goiás e suporte aos escritórios de outras regionais.\r\n', '?	Manutenção da loja; \r\n?	Emissão de Notas Fiscais de Entrada e Saída;\r\n?	Abertura e Fechamento de Caixa;\r\n?	Atendimento aos clientes, que solicitam manutenção de suas peças;\r\n?	Controle da verba mensal para manutenção da loja;\r\n?	Relacionamento com o cliente, pós venda, através de multicanais (e-mail, telefone etc.), para avaliar a satisfação com o produto e atendimento da loja.\r\n?	Auxilio nas vendas quando necessário.\r\n', '2017-09-08', '17:25:00', 'curriculo-08-09-2017-05-25.doc', '', '5155b93ca83b985b4466813570b3bebd', 1, 0, 'acima de 1500,00'),
(5382, 44, 165, 0, 0, 1, 'CAMILA MIRELLY ALVES', '1991-07-09', 'Solteiro', 'Feminino', 'sÃO pAULO', '', 0, 0, 1, 1, 1, 3, 'av pedro alvares cabral, numero 9c', 'JD Novo mundo', 'Goiânia', 'GO', '(62) 98209-9295', '', '(62) 98119-5292', 'camilla.mrv@gmail.com', '', '247275704', '134.705.277-17', 12, 14, 0, 1, '', 0, '', 0, '', '', 'Faculdade internacional Signorelli', 'Faculdade Internacional Signorelli', '', 'Administração', 'Gestão Hospitalar', '', '', '', '', '', '', '', 0, 0, 0, 4, 'Joule Engenharia', 'Madeireira Tobias', 'Cirúrgica Ipanema', 'Auxiliar Administrativo de Almoxarifado', 'Auxiliar Administrativo', 'Analista Administrativo de Compras', '01/2017', '04/2016', '09/2014', '04/2017', '09/2016', '10/2015', 'Av Maracá, nº 306 - Setor Santa Genoveva', 'rua 12, s/n Polo Empresarial de Goiás', 'Av das Americas, 19019', '(62) 3269-1661', '(62) 3209-9200', '(12) 3122-6006', 'André Gomes / Priscila ', 'Magna Silva', 'Paulo Henrique', '1200', '1500', '1400', 'desacordo de contrato', '', '', 'Entrada de nota fiscal em sistema Protheus, atendimento e suporte á contabilidade, atendimento a fornecedores e clientes, organizaçao de estoque via sistema, envio de materiais para as obras de acordo com pedido dos engenheiros, etc.', 'Entrada de mercadorias em estoque fisico e em sistema ERP, relacionamento com fornecedores, apoio á Contabilidade e ao setor comercial, organização de arquivos, etc; ', 'Contato e parceria com fornecedores, coleta e análise de editais para participação em licitações públicas, apoio á área de vendas externas, recebimento de notas fiscais, atendimento a hospitais e clínicas para orçamento de materiais, digitação de documentos, cotação de materiais médico cirurgicos em geral, para fins de revenda, etc. ', '2017-09-24', '18:23:00', 'curriculo-24-09-2017-06-23.docx', '', '6d4e54a65a470f55974f9d9ba4455975', 1, 0, '1600'),
(5383, 78, 163, 0, 0, 1, 'JORDANA RODRIGUES LOPES', '1989-12-27', 'Casado', 'Feminino', 'GOIANIA', '', 0, 0, 1, 0, 1, 2, 'AV. 24 DE OUTUBRO N.3714', 'ESPLANADA DO ANICUNS', 'GOIANIA', 'GO', '(62) 98513-0105', '32101238', '(62) 98448-9262', 'jordana_rlopes@hotmail.com', '', '5156654', '018.440.011-21', 6, 0, 0, 1, '', 0, '', 0, '', '', 'Colegio Estadual Aecio Olireira de Andrade', '', '', 'Regugular', '', '', '', '', '', 'Informática Básica ', 'Técnicas de Vendas ? SEBRAE ', 'Curso básico de cabelereira ? Instituto Ávila', 2009, 2011, 2014, 4, 'R7 AUTO PEÇAS', 'Orlex Óptica LTDA ', 'Tellus Telecomunicações SA', 'AUXILIAR ADMINISTRATIVO', 'CAIXA', 'Telemarketing receptivo ', '21/02/2017', '01/11/2013', '01/08/2011', '29/08/2017', '02/08/2015', '01/08/2013', 'RUA 09 QD. 09 LT.16 ESPLANADA DO ANICUNS GOIA', 'PORTAL SHOPPING', 'AV. ANHANGUERA ', '(62) 3576-0776', '(62) 9935-0108', '', 'CARLOS', 'MARCIA', 'ISABELA', '937,00', '788,00', '', 'PROCURA POR OPORTUNIDADE MELHOR', 'FECHAMENTO DA LOJA', 'A PROCURA DE UM OPORTUNIDADE MELHOR', 'Secretária, atendimento ao publico e telefônico,  cotação e compras de mercadoria, vendedora, fazer e organizar documentação para licitações, emissão de notas fiscais, limpeza e organização da loja.', 'Registrar saída de mercadoria, receber valores e documentos, emitir notas fiscais, telefonista, atendente, vendedora, repor e limpa mercadorias.', 'Call Center receptivo, presta serviço a saneago, passando informações e tirando duvidas dos clientes. ', '2017-09-09', '17:59:00', 'curriculo-09-09-2017-05-55.docx', '', 'a5cc614b7eaed1223b7d864a72743cd8', 1, 0, '1200'),
(6665, 226, 178, 0, 0, 1, 'Cleidiane Candida Leonel', '1990-11-30', 'Solteiro', 'Feminino', '', '', 0, 0, 1, 0, 1, 0, 'Rua Goiânia, 701', 'Centro', 'Iporá', 'GO', '(65) 99909-3011', '', '(65) 99909-3011', 'leonelcleidiane@gmail.com', '', '', '022.834.181-78', 9, 0, 0, 1, '', 0, '', 0, '', '', 'Senai Vila Canaã - Goiânia/GO', '', '', 'Técnico em Edificações', '', '', '', '', '', '', '', '', 0, 0, 0, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-03-14', '16:47:00', 'curriculo-14-03-2018-04-47.pdf', '', '26faa2b9d118967bd8be8175daaf1646', 1, 0, '');
-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.
00', '3.600', '2;800;00', 'REDUÇÃO', 'PROPOSTA HYDRO', 'PROPOSTA POSTO RODA VIVA', '?	Gestão de T&D , E-learning e EAD;\r\n?	Consultoria Interna BP de Recursos Humanos e acompanhamento de processos junto aos gestores.\r\n?	Implantação da cultura de gestão de pessoas e suas práticas.\r\n?	Aplicação da ferramenta DISC\r\n?	Coordenação do Programa Jovem Aprendiz, Estágio e PCD.\r\n?	Analista de Seleção e Recrutamento Sênior em cargos Operacionais (grandes volumes) e/ou Estratégicos.\r\n?	Programa Multiplicador Interno,\r\n?	Programa de Líderes;\r\n?	Implantação e acompanhamento do Programa de Avaliação e Feedback,\r\n?	Implantação e Acompanhamento de Cargos e Salários\r\n?	Participação em reuniões de gestores, diretoria e Setor de Segurança.\r\n?	Gestão Setor de Segurança do Trabalho.\r\n?	Fiscal de Contrato com Instituições Terceirizadas.\r\n?	Relacionamento com as comunidades e eventos sociais.\r\n?	Desenvolvimento e Gerenciamento de projetos na área de Recursos Humanos.\r\n?	Sistema SAP\r\n?	Coordenação do Programa de Ambientação\r\n?	Gestão Orçamentária de Patrimônio.\r\n?	Gestão Participativa\r\n?	Certificação em COACHING\r\n?	Certificação THOMAS INTERNATIONAL PPA\r\n?	Entrevista por Competência\r\n?	Relações Trabalhistas e Sindicatos.\r\n', '?	Elaboração de Instrumentos e implantação de Recursos Humanos\r\n?	Diagnóstico Pesquisa de Cultura e Clima.\r\n?	Elaboração e Aplicação de Instrumentos para Levantamento das Necessidades de Treinamento.\r\n?	Gestão de T&D , E-learning e EAD;\r\n?	Coordenação de RH Coorporativo.\r\n?	Coordenação dos subsistemas de RH (DP, Remuneração e Benefício, SESMET, SG, etc.).\r\n?	Análise e levantamento das rotinas internas de DP (folha de pagamento, férias, licenças, remunerações, banco de horas, etc..).\r\n?	Acompanhamento e análise de métricas per capta alimentação, tour over, orçamentos, etc.\r\n?	Apoio à abertura de novas unidades, implantando a cultura organizacional.\r\n?	Elaboração e Aplicação de Instrumentos para Avaliação e Desempenho e acompanhamento do prazo de experiência.\r\n?	Consultoria Interna BP de Recursos Humanos e acompanhamento de processos junto aos gestores.\r\n?	Implantação da cultura de gestão de pessoas e suas práticas.\r\n?	Avaliação de consultorias externas (contratos e projetos)\r\n?	Auditoria interna em processos de certificação.\r\n?	Gestão de Talentos.\r\n?	Mapeamento de Sucessores.\r\n?	Análise de indicadores.\r\n?	Aplicação da ferramenta DISC\r\n?	Coordenação do Programa Jovem Aprendiz, Estágio e PCD.\r\n?	Analista de Seleção e Recrutamento Sênior em cargos Operacionais (grandes volumes) e/ou Estratégicos.\r\n?	Supervisora de estágio Psicologia Organizacional ? Universidade da Amazônia\r\n?	Programa Multiplicador Interno,\r\n?	Programa de Líderes;\r\n?	Implantação e acompanhamento do Programa de Avaliação e Feedback,\r\n?	Implantação e Acompanhamento de Cargos e Salários\r\n?	Participação em reuniões de gestores, diretoria e Setor de Segurança.\r\n?	Gestão Setor de Segurança do Trabalho.\r\n?	Fiscal de Contrato com Instituições Terceirizadas.\r\n?	Relacionamento com as comunidades e eventos sociais.\r\n?	Desenvolvimento e Gerenciamento de projetos na área de Recursos Humanos.\r\n?	Perícia /Auditoria em processos de avaliação psicológica\r\n?	Sistema SAP\r\n?	Coordenação do Programa de Ambientação\r\n?	Gestão Orçamentária de Patrimônio.\r\n?	Acompanhamento e Auditoria Certificação ISO 2001\r\n', '?	Elaboração de Instrumentos e implantação de Recursos Humanos\r\n?	Diagnóstico Pesquisa de Cultura e Clima.\r\n?	Elaboração e Aplicação de Instrumentos para Levantamento das Necessidades de Treinamento.\r\n?	Gestão de T&D , E-learning e EAD;\r\n?	Coordenação de RH Coorporativo.\r\n?	Coordenação dos subsistemas de RH (DP, Remuneração e Benefício, SESMET, SG, etc.).\r\n?	Análise e levantamento das rotinas internas de DP (folha de pagamento, férias, licenças, remunerações, banco de horas, etc..).\r\n?	Acompanhamento e análise de métricas per capta alimentação, tour over, orçamentos, etc.\r\n?	Apoio à abertura de novas unidades, implantando a cultura organizacional.\r\n?	Elaboração e Aplicação de Instrumentos para Avaliação e Desempenho e acompanhamento do prazo de experiência.\r\n?	Consultoria Interna BP de Recursos Humanos e acompanhamento de processos junto aos gestores.\r\n?	Implantação da cultura de gestão de pessoas e suas práticas.\r\n?	Avaliação de consultorias externas (contratos e projetos)\r\n?	Auditoria interna em processos de certificação.\r\n?	Gestão de Talentos.\r\n?	Mapeamento de Sucessores.\r\n?	Análise de indicadores.\r\n?	Aplicação da ferramenta DISC\r\n?	Coordenação do Programa Jovem Aprendiz, Estágio e PCD.\r\n?	Analista de Seleção e Recrutamento Sênior em cargos Operacionais (grandes volumes) e/ou Estratégicos.\r\n?	Supervisora de estágio Psicologia Organizacional ? Universidade da Amazônia\r\n?	Programa Multiplicador Interno,\r\n?	Programa de Líderes;\r\n?	Implantação e acompanhamento do Programa de Avaliação e Feedback,\r\n?	Implantação e Acompanhamento de Cargos e Salários\r\n?	Participação em reuniões de gestores, diretoria e Setor de Segurança.\r\n?	Gestão Setor de Segurança do Trabalho.\r\n?	Fiscal de Contrato com Instituições Terceirizadas.\r\n?	Relacionamento com as comunidades e eventos sociais.\r\n?	Desenvolvimento e Gerenciamento de projetos na área de Recursos Humanos.\r\n?	Perícia /Auditoria em processos de avaliação psicológica\r\n?	Sistema SAP\r\n?	Coordenação do Programa de Ambientação\r\n?	Gestão Orçamentária de Patrimônio.\r\n?	Acompanhamento e Auditoria Certificação ISO 2001\r\n', '2017-10-27', '17:31:00', 'curriculo-27-10-2017-05-30.docx', 'foto-27-10-2017-05-30.jpg', '26cd6e36e503ced7228e2e4a5c8b43a3', 1, 0, '7.000;00'),
(5994, 24, 0, 0, 0, 5, 'Myrian Gonçalves Gomes', '1986-07-14', 'Solteiro', 'Feminino', 'Brasília ', '', 0, 0, 0, 0, 1, 1, 'Qnp 28 conjunto v casa 36', 'PSul', 'Ceilândia Sul', 'DF', '(61) 33766-678', '', '(61) 98151-9248', 'myriangomes010914@gmail.com', '', '2376168', '014.292.041-09', 12, 0, 0, 1, '', 0, '', 0, '', '', 'Centro Universitário Uniprojeção', '', '', 'Tecnologia em Gestão de Recursos Humanos', '', '', 'Auxiliar administrativo', 'Operador de micro', '', 'Senac', 'Senac', '', 2012, 2012, 0, 4, 'Lojas Leal Cama Mesa e Banho', 'Supermercado Dona de Casa', '', 'Operadora de caixa', 'Operador de supermercado ', '', '12/2014', '11/2014', '', '03/2017', '12/2014', '', 'CNG 01 lotes 8,9,19 e 20', '', '', '(61) 3354-4342', '', '', 'Deusângela ', '', '', '1040,00', '836,00', '', 'Dispensa sem justa causa', 'Pedido de demissão', '', 'Abertura de chamados, apoio a gerência a nas rotinas administrativas de loja, atendimento ao público, atendimento telefônico, cadastramento de clientes, confecção de preços, emissão de nota fiscal, envio de email, fechamento de caixa e recebimento de valores.', 'Atendimento ao público, recebimento de valores, reposição e organização da loja.', '', '2017-10-27', '17:41:00', 'curriculo-27-10-2017-05-41.docx', 'foto-27-10-2017-05-41.gif', 'f21ed23aee0f2e63545f15b2def2112c', 0, 0, '1200'),
(5995, 177, 182, 0, 0, 1, 'Emilia Leitão de Matos Vieira ', '1960-12-31', 'Casado', 'Feminino', '', '', 0, 1, 1, 0, 1, 0, 'Rua Barão de Antonina', 'São Francisco', 'Curitiba', 'PR', '(71) 98894-8594', '', '(41) 99671-4286', 'eguerra.mila@gmail.com', '', '', '248.156.085-04', 15, 12, 0, 1, '', 0, '', 0, '', '', 'Universidade Federal da Bahia', 'Univeridade Católica do Salvador', '', 'Gestão Estratégica de Recursos Humanos', 'Administração de Empresas', '', '', '', '', '', '', '', 0, 0, 0, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-04-19', '19:08:00', 'curriculo-19-04-2018-07-08.doc', 'foto-19-04-2018-07-08.jpg', '27d056fab79291d4b7b5b4e6bc051803', 1, 0, '5.000,00'),
(6918, 308, 179, 0, 0, 5, 'Ailton Trindade Paniago ', '1965-07-01', 'Casado', 'Masculino', '', '', 0, 1, 1, 1, 1, 0, 'Rua AB-22 Q-3 L-19 casa-2 ', 'Res. Alice Barbosa', 'Goi', 'GO', '(62) 32051-1516', '', '(62) 99701-8653', 'atpaniago@hotmail.com', '', '', '355.830.881-68', 9, 0, 0, 1, '', 0, '', 0, '', '', 'Esc. Técnica Federal de Goiás ', '', '', 'Técnico em Estradas ', '', '', '', '', '', '', '', '', 0, 0, 0, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-04-20', '13:30:00', 'curriculo-20-04-2018-01-30.pdf', '', '53966b7b5fcd8ea3209ddf7a0049fc3f', 1, 0, '0,');
-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.

-- Dados removidos intencionalmente da tabela `curriculo` para versão de portfólio.
