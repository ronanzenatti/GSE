--
-- Estrutura para tabela `audit`
--

CREATE TABLE IF NOT EXISTS `audit` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model` varchar(50) NOT NULL,
  `tipo` char(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `antes` text,
  `depois` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Apagar tabela `composicao_familiar`
--

DROP TABLE `composicao_familiar`;

--
-- Nova estrutura da tabela `composicao_familiar`
--

CREATE TABLE IF NOT EXISTS `composicao_familiar` (
  `idcf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idendereco` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) NOT NULL,
  `parentesco` tinyint(4) NOT NULL COMMENT '(Própria / Mãe / Pai / Madastra / Padastro / Irmã(o) / Avó(Avo) / Tia(o) / Prima(o) / Outros)',
  `dt_nasc` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `escolaridade` tinyint(4) DEFAULT NULL COMMENT '(Sem idade escolar, Creche, Pré-Escola, Ensino Fundamental, Ensino Médio, Ensino Fundamental EJA, Ensino Médio EJA, Alfabetização para Adultos, Superior/Aperfeiçoamento/Especialização/Doutorado, Nunca Frequentou mas le e escreve, Não sabe ler e escrever)',
  `formacao_profissional` varchar(191) DEFAULT NULL,
  `ocupacao` tinyint(4) DEFAULT NULL COMMENT '(Não Trabalha, Autônomo Formal, Autônomo Informal, Rural, Empregado sem Carteira, Empregado com Carteira, Doméstico, Trabalhador não remunerado, Militar ou Servidor Público)',
  `renda` decimal(12,2) DEFAULT NULL,
  `telefones` varchar(191) DEFAULT NULL,
  `obs` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estrutura para tabela `historico_logins`
--

CREATE TABLE IF NOT EXISTS `historico_logins` (
  `idhl` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `navegador` varchar(30) NOT NULL,
  `so` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idhl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Remover a tabela `pessoa_familia`
--

DROP TABLE `pessoa_familia`;

--
-- Ajustes na tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional` MODIFY `qtde_comodos` tinyint(4) DEFAULT NULL;
ALTER TABLE `situacao_habitacional` MODIFY `espaco` decimal(10,2) UNSIGNED DEFAULT NULL;
ALTER TABLE `situacao_habitacional` MODIFY `qtde_pessoas` tinyint(4) DEFAULT NULL;



