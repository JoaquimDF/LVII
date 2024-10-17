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
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(255) DEFAULT NULL,
  `ativo` int(11) DEFAULT '1' COMMENT '1=ativo\\n0=inativo',
  PRIMARY KEY (`idcurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `curso`, `ativo`) VALUES
(1, 'teste1', NULL),
(2, 'teste2', NULL),
(3, 'teste3', NULL),
(4, 'TEC-Informatica', NULL),
(5, 'TEC-Administração', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario`
--

CREATE TABLE IF NOT EXISTS `diario` (
  `id_diario` int(11) NOT NULL AUTO_INCREMENT,
  `frequencia` int(11) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  PRIMARY KEY (`id_diario`),
  KEY `fk_diario_usuario1_idx` (`idusuario`),
  KEY `fk_diario_disciplina1_idx` (`id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `disciplina` varchar(255) DEFAULT NULL,
  `ativo` int(11) DEFAULT '1' COMMENT '1=ativo\\n0=inativo',
  `idcurso` int(11) NOT NULL,
  PRIMARY KEY (`id_disciplina`),
  KEY `fk_disciplina_curso1_idx` (`idcurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `disciplina`, `ativo`, `idcurso`) VALUES
(1, 'teste1', NULL, 1),
(2, 'teste2', NULL, 2),
(3, 'LVII', NULL, 4),
(4, 'Organização empresarial ', NULL, 5),
(5, 'RHT', NULL, 5),
(6, 'Design Web', NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_has_usuario`
--

CREATE TABLE IF NOT EXISTS `disciplina_has_usuario` (
  `id_disciplina` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `datacadastro` timestamp NULL DEFAULT NULL,
  `ativo` int(11) DEFAULT '1',
  PRIMARY KEY (`id_disciplina`,`idusuario`),
  KEY `fk_disciplina_has_usuario_usuario1_idx` (`idusuario`),
  KEY `fk_disciplina_has_usuario_disciplina1_idx` (`id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `idnotas` int(11) NOT NULL AUTO_INCREMENT,
  `notas` decimal(10,0) DEFAULT NULL,
  `datacadastro` timestamp NULL DEFAULT NULL,
  `ativo` int(11) DEFAULT '1',
  `idusuario` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  PRIMARY KEY (`idnotas`),
  KEY `fk_notas_usuario1_idx` (`idusuario`),
  KEY `fk_notas_disciplina1_idx` (`id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT COMMENT '1=professor\\n2=aluno',
  `perfil` varchar(120) DEFAULT NULL,
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
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `matricula` int(11) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `nomeresponsavel` varchar(255) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(120) DEFAULT NULL,
  `ativo` int(11) DEFAULT '1' COMMENT '1=ativo\\n0=inativo',
  `idperfil` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_perfil_idx` (`idperfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `matricula`, `datanascimento`, `endereco`, `email`, `cpf`, `nomeresponsavel`, `login`, `senha`, `ativo`, `idperfil`) VALUES
(1, 'admin', 0, '1990-01-01', 'admin', 'email@email.com', 'admin', 'admin', 'admin', 'admin', 1, 1),
(2, 'Danilo', 0, '2000-03-12', 'teste1', 'teste1@teste1', 'teste1', 'teste1', 'Danilo', 'Danilo', NULL, 2),
(3, 'Alberto', 1234, '2000-03-12', 'teste2', 'teste2@teste2', 'teste2', 'teste2', 'Alberto', 'Alberto', NULL, 3),
(4, 'Danilo Carlos ', 202301, '1998-05-13', 'QNN 21 Conjunto E casa 17', 'danilo@email.com', '05700843188', 'Danilo', 'profDanilo', '123456', NULL, 2),
(5, 'Jose Silva', 202302, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Jose Silva', 'alunoJose', '123456', NULL, 3);

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
