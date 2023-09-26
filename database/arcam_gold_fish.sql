-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jun-2023 às 19:35
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arcam_gold_fish`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `email` varchar(110) NOT NULL,
  `assunto` varchar(110) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contacto`
--

INSERT INTO `contacto` (`id`, `email`, `assunto`, `mensagem`) VALUES
(1, 'clemente@00gmail.com', 'Assunto muito delicado ', 'necessito de uma assistência médica '),
(2, 'clemente@gmail.com', 'Mensagem', 'Boa terde!'),
(3, 'clemente@gmail.com', 'Assunto muito delicado ', 'ola mundo!'),
(5, 'clemente@gmail.com', 'Assunto muito delicado ', 'ola mundo!'),
(6, 'emanuel@gmail.com', 'Assunto muito delicado ', 'Ola mundo dos vivos'),
(7, 'clemente@gmail.com', 'Assunto muito delicado ', 'ssss'),
(8, 'clemente@gmail.com', 'Assunto muito delicado ', 'aaaa'),
(9, 'clemente@gmail.com', 'Assunto muito delicado ', 'a'),
(10, 'clemente@gmail.com', 'Assunto muito delicado ', 'aaa'),
(11, 'clemente@gmail.com', 'Assunto muito delicado ', 'mnn'),
(12, 'clemente@gmail.com', 'Assunto muito delicado ', 'nnn'),
(13, 'clemente@gmail.com', 'Assunto muito delicado ', 'www'),
(14, 'clemente@gmail.com', 'Assunto muito delicado ', 'aaa'),
(15, 'clemente@gmail.com', 'Assunto Muito Delicado', 'O meu cachorro apresenta uma marca amarela nos olhos não sei o que fazer!'),
(16, 'ajbcompany4881@gmail.com', 'Pedido de Transferência', 'Peço aos senhores que realizem uma transferência para o meu cachorro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
