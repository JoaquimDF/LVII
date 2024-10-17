create database aluno_online;
use aluno_online;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2023 às 01:52
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aluno_online`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `ativo` int(11) DEFAULT 1 COMMENT '1=ativo\\n0=inativo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `diario` (
  `id_diario` int(11) NOT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `datacadastro` date NOT NULL,
  `status` int(11) DEFAULT 1,
  `idusuario` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `diario`
--

INSERT INTO `diario` (`id_diario`, `frequencia`, `datacadastro`, `status`, `idusuario`, `id_disciplina`) VALUES
(1, 1, '2023-11-14', NULL, 6, 2),
(2, 1, '2023-11-14', NULL, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `disciplina` varchar(255) DEFAULT NULL,
  `ativo` int(11) DEFAULT 1 COMMENT '1=ativo\\n0=inativo',
  `idcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `disciplina_has_usuario` (
  `id_dhu` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `datacadastro` timestamp NULL DEFAULT current_timestamp(),
  `ativo` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina_has_usuario`
--

INSERT INTO `disciplina_has_usuario` (`id_dhu`,`id_disciplina`, `idusuario`, `datacadastro`, `ativo`) VALUES
(1,1, 3, '2023-11-15 00:00:00', 1),
(2,1, 5, '2023-11-15 00:00:00', 1),
(3,2, 6, '2023-11-15 00:00:00', 1),
(4,3, 7, '2023-11-15 00:00:00', 1),
(5,3, 8, '2023-11-15 00:00:00', 1),
(6,3, 9, '2023-11-15 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `idnotas` int(11) NOT NULL,
  `notas` decimal(10,0) DEFAULT NULL,
  `datacadastro` timestamp NULL DEFAULT NULL,
  `ativo` int(11) DEFAULT 1,
  `idusuario` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL COMMENT '1=professor\\n2=aluno',
  `perfil` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `matricula` int(11) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `nomeresponsavel` varchar(255) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(120) DEFAULT NULL,
  `ativo` int(11) DEFAULT 1 COMMENT '1=ativo\\n0=inativo',
  `idperfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `matricula`, `datanascimento`, `endereco`, `email`, `cpf`, `nomeresponsavel`, `login`, `senha`, `ativo`, `idperfil`) VALUES
(1, 'admin', 0, '1990-01-01', 'admin', 'email@email.com', 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(2, 'Danilo', 0, '2000-03-12', 'teste1', 'teste1@teste1', 'teste1', 'teste1', 'Danilo', '202cb962ac59075b964b07152d234b70', NULL, 2),
(3, 'Alberto', 1234, '2000-03-12', 'teste2', 'teste2@teste2', 'teste2', 'teste2', 'Alberto', 'Alberto', NULL, 3),
(4, 'Danilo Carlos ', 202301, '1998-05-13', 'QNN 21 Conjunto E casa 17', 'danilo@email.com', '05700843188', 'Danilo', 'profDanilo', '123456', NULL, 2),
(5, 'Jose Silva', 202302, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Jose Silva', 'alunoJose', '123456', NULL, 3),
(6, 'Edimar', 123, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Danilo', 'edimar', '123', 1, 3),
(7, 'Illana', 123, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Danilo', 'illana', '123', 1, 3),
(8, 'Marcela', 123, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Danilo', 'marcela', '123', 1, 3),
(9, 'Renato', 123, '1999-05-14', 'QNN 23 Conjunto J casa 19', 'josesilva@email.com', '00000000000', 'Danilo', 'renato', '123', 1, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Índices para tabela `diario`
--
ALTER TABLE `diario`
  ADD PRIMARY KEY (`id_diario`),
  ADD KEY `fk_diario_usuario1_idx` (`idusuario`),
  ADD KEY `fk_diario_disciplina1_idx` (`id_disciplina`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`),
  ADD KEY `fk_disciplina_curso1_idx` (`idcurso`);

--
-- Índices para tabela `disciplina_has_usuario`
--
ALTER TABLE `disciplina_has_usuario`
  ADD PRIMARY KEY (`id_dhu`),
  ADD KEY `fk_disciplina_has_usuario_usuario1_idx` (`idusuario`),
  ADD KEY `fk_disciplina_has_usuario_disciplina1_idx` (`id_disciplina`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`idnotas`),
  ADD KEY `fk_notas_usuario1_idx` (`idusuario`),
  ADD KEY `fk_notas_disciplina1_idx` (`id_disciplina`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_perfil_idx` (`idperfil`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `diario`
--
ALTER TABLE `diario`
  MODIFY `id_diario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `idnotas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idperfil` int(11) NOT NULL AUTO_INCREMENT COMMENT '1=admin\2=professor\3=aluno', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `diario`
--
ALTER TABLE `diario`
  ADD CONSTRAINT `fk_diario_disciplina1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_diario_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `fk_disciplina_curso1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `disciplina_has_usuario`
--
ALTER TABLE `disciplina_has_usuario`
  ADD CONSTRAINT `fk_disciplina_has_usuario_disciplina1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_disciplina_has_usuario_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_notas_disciplina1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_notas_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
