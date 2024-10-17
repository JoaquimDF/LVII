-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `aluno_online`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave primaria do curso.',
  `curso` varchar(255) DEFAULT NULL COMMENT 'Campo que recebe o nome do curso.',
  `ativo` int(11) DEFAULT '1' COMMENT '1=ativo\\ 0=inativo',
  PRIMARY KEY (`idcurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `curso`, `ativo`) VALUES
(1, 'teste1', NULL),
(2, 'teste2', NULL),
(3, 'teste3', NULL),
(4, 'TEC-Informatica', NULL),
(5, 'TEC-Administração', NULL),
(7, 'slasla', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario`
--

CREATE TABLE IF NOT EXISTS `diario` (
  `id_diario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave primaria de diario.',
  `frequencia` int(11) DEFAULT NULL COMMENT 'Campo que recebe a frequencia do aluno.',
  `datacadastro` date NOT NULL COMMENT 'Campo que recebe a data de cadastro do diario.',
  `ativo` int(11) DEFAULT '1' COMMENT '1=ativo\\ 0=inativo',
  `idusuario` int(11) NOT NULL COMMENT 'Chave estrangeira de usuario.',
  `id_disciplina` int(11) NOT NULL COMMENT 'Chave estrangeira de disciplina.',
  PRIMARY KEY (`id_diario`),
  KEY `fk_diario_usuario1_idx` (`idusuario`),
  KEY `fk_diario_disciplina1_idx` (`id_disciplina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `diario`
--

INSERT INTO `diario` (`id_diario`, `frequencia`, `datacadastro`, `ativo`, `idusuario`, `id_disciplina`) VALUES
(1, 1, '2023-11-14', NULL, 6, 2),
(2, 1, '2023-11-14', NULL, 5, 1),
(3, 0, '2023-11-24', NULL, 3, 1),
(4, 0, '2023-11-25', NULL, 8, 3),
(5, 0, '2023-11-25', NULL, 5, 1),
(6, 0, '2023-11-25', NULL, 3, 1),
(7, 0, '2023-11-26', NULL, 3, 1),
(8, 1, '2023-11-26', NULL, 8, 1),
(9, 1, '2023-11-26', NULL, 5, 1),
(10, 0, '2023-11-27', NULL, 3, 1),
(11, 1, '2023-11-27', NULL, 6, 2),
(12, 0, '2023-11-27', NULL, 8, 2),
(13, 0, '2023-11-27', NULL, 9, 2),
(14, 1, '2023-11-27', NULL, 12, 2),
(15, 0, '2023-11-21', NULL, 9, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disciplina` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave primaria de disciplina.',
  `disciplina` varchar(255) DEFAULT NULL COMMENT 'Campo que recebe o nome da disciplina.',
  `ativo` int(11) DEFAULT '1' COMMENT '1=ativo\\ 0=inativo',
  `idcurso` int(11) NOT NULL COMMENT 'Chave estrangeira do curso.',
  PRIMARY KEY (`id_disciplina`),
  KEY `fk_disciplina_curso1_idx` (`idcurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `disciplina`, `ativo`, `idcurso`) VALUES
(1, 'teste1', NULL, 1),
(2, 'teste2', NULL, 2),
(3, 'LVII', NULL, 4),
(4, 'Organização empresarial ', NULL, 5),
(5, 'RHT', NULL, 5),
(6, 'Design Web', NULL, 4),
(8, 'slaslasla', NULL, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_has_usuario`
--

CREATE TABLE IF NOT EXISTS `disciplina_has_usuario` (
  `id_dhu` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave primaria de disciplina_has_usuario.',
  `id_disciplina` int(11) NOT NULL COMMENT 'Chave estrangeira da disciplina.',
  `idusuario` int(11) NOT NULL COMMENT 'Chave estrangeira do usuario.',
  `datacadastro` date DEFAULT NULL COMMENT 'Campo que recebe a data de cadastro.',
  `ativo` int(11) DEFAULT '1' COMMENT '1=ativo\\ 0=inativo',
  PRIMARY KEY (`id_dhu`),
  KEY `fk_disciplina_has_usuario_usuario1_idx` (`idusuario`),
  KEY `fk_disciplina_has_usuario_disciplina1_idx` (`id_disciplina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `disciplina_has_usuario`
--

INSERT INTO `disciplina_has_usuario` (`id_dhu`, `id_disciplina`, `idusuario`, `datacadastro`, `ativo`) VALUES
(1, 1, 3, '2023-11-14', 1),
(2, 1, 5, '2023-11-14', 1),
(3, 2, 6, '2023-11-14', 1),
(4, 3, 7, '2023-11-14', 1),
(5, 1, 8, '2023-11-25', 1),
(11, 2, 8, '2023-11-26', 1),
(12, 2, 9, '2023-11-26', 1),
(13, 2, 12, '2023-11-26', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `idnotas` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave primaria da tabela Notas',
  `notas` decimal(10,1) DEFAULT NULL COMMENT 'Campo que recebe as notas do usuario.',
  `datacadastro` timestamp NULL DEFAULT NULL COMMENT 'Campo que receba a data em que as notas foram cadastradas.',
  `ativo` int(11) DEFAULT '1' COMMENT '1=ativo\\ 0=inativo',
  `idusuario` int(11) NOT NULL COMMENT 'Chave estrangeira do usuario.',
  `id_disciplina` int(11) NOT NULL COMMENT 'Chave estrangeira da disciplina.',
  PRIMARY KEY (`idnotas`),
  KEY `fk_notas_usuario1_idx` (`idusuario`),
  KEY `fk_notas_disciplina1_idx` (`id_disciplina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`idnotas`, `notas`, `datacadastro`, `ativo`, `idusuario`, `id_disciplina`) VALUES
(3, 5.5, '2023-11-26 03:00:00', 1, 6, 2),
(4, 5.5, '2023-11-26 03:00:00', 1, 8, 2),
(5, 2.3, '2023-11-26 03:00:00', 1, 9, 2),
(6, 9.8, '2023-11-26 03:00:00', 1, 12, 2),
(7, 1.0, '2023-11-27 03:00:00', 1, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT COMMENT '1=administrador \\ 2=professor\\ 3=aluno',
  `perfil` varchar(120) DEFAULT NULL COMMENT 'Campo correspondente a identificacao de cada ''idPerfil''',
  PRIMARY KEY (`idperfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idperfil`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Professor'),
(3, 'Aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave Primaria da tabela Usuario.',
  `nome` varchar(255) DEFAULT NULL COMMENT 'Campo que recebe o nome do usuario.',
  `matricula` int(11) DEFAULT NULL COMMENT 'Campo que recebe a matricula do usuario.',
  `datanascimento` date DEFAULT NULL COMMENT 'Campo que recebe a data do usuario.',
  `endereco` varchar(255) DEFAULT NULL COMMENT 'Campo que recebe o endereco do usuario.',
  `email` varchar(255) DEFAULT NULL COMMENT 'Campo que recebe o email do usuario.',
  `cpf` varchar(11) DEFAULT NULL COMMENT 'Campo que recebe o cpf do usuario.',
  `nomeresponsavel` varchar(255) DEFAULT NULL COMMENT 'Campo que recebe o nome do responsavel do usuario.',
  `login` varchar(45) DEFAULT NULL COMMENT 'Campo que recebe o login do usuario.',
  `senha` varchar(120) DEFAULT NULL COMMENT 'Campo que recebe a senha do usuario.',
  `ativo` int(11) DEFAULT NULL COMMENT '1=ativo\\ 0=inativo ',
  `idperfil` int(11) NOT NULL COMMENT 'Chave estrangeira do Perfil',
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_perfil_idx` (`idperfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `matricula`, `datanascimento`, `endereco`, `email`, `cpf`, `nomeresponsavel`, `login`, `senha`, `ativo`, `idperfil`) VALUES
(1, 'admin', 0, '1990-01-01', 'admin', 'email@email.com', 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(2, 'Danilo', 0, '2000-03-12', 'teste1', 'teste1@teste1', 'teste1', 'teste1', 'Danilo', '202cb962ac59075b964b07152d234b70', 1, 2),
(3, 'Alberto', 1234, '2000-03-12', 'teste2', 'teste2@teste2', 'teste2', 'teste2', 'Alberto', '202cb962ac59075b964b07152d234b70', 1, 3),
(4, 'Danilo Carlos ', 202301, '1998-05-13', 'QNN 21 Conjunto E casa 17', 'danilo@email.com', '05700843188', 'Danilo', 'profDanilo', '123456', 1, 2),
(5, 'Jose Silva', 202302, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Jose Silva', 'alunoJose', '202cb962ac59075b964b07152d234b70', 1, 3),
(6, 'Edimar', 123, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Danilo', 'edimar', '123', 1, 3),
(7, 'Illana', 123, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Danilo', 'illana', '123', 1, 3),
(8, 'Marcela', 123, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Danilo', 'marcela', '123', 1, 3),
(9, 'Renato', 123, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Danilo', 'renato', '123', 1, 3),
(12, 'teste1123', 0, '1231-03-12', 'teste1123', 'teste1123', 'teste1123', 'teste1123', 'teste1123', 'f7d7383091fcd71fb9355e0c1398b5e9', 1, 3),
(13, 'sla', 0, '0000-00-00', 'sla', 'sla', 'sla', 'sla', 'slasla', 'e3e48b96d966dee1b5cccdbc9d6f6d43', 1, 2);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `diario`
--
ALTER TABLE `diario`
  ADD CONSTRAINT `fk_diario_disciplina1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_diario_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `fk_disciplina_curso1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `disciplina_has_usuario`
--
ALTER TABLE `disciplina_has_usuario`
  ADD CONSTRAINT `fk_disciplina_has_usuario_disciplina1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_disciplina_has_usuario_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_notas_disciplina1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_notas_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
