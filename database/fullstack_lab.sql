-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/02/2026 às 15:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fullstack_lab`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `ajuda` text NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `leads`
--

INSERT INTO `leads` (`id`, `nome`, `telefone`, `email`, `ajuda`, `ip`, `user_agent`, `created_at`) VALUES
(40, 'Teste de Banco de dados', '(11) 91999-9999', 'TesteemailFalso@gmail.com', 'Testando apenas', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', '2026-02-06 11:01:07'),
(41, 'Leo Nilio', '(11) 99999-9999', 'nilioleo4@gmail.com', 'Teste com email valido', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', '2026-02-06 11:01:44'),
(42, 'Usuario Aleatorio', '(00) 00000-0000', 'AlgumaCoisaadmin@gmail.com', 'Fazer mais teste de aparencia', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', '2026-02-06 11:03:09'),
(43, 'Teste de Tempo de resposta', '(00) 00000-0000', 'nilioleo4@gmail.com', 'Teste de Tempo de resposta', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', '2026-02-06 11:03:38');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `estrelas` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `reviews`
--

INSERT INTO `reviews` (`id`, `nome`, `estrelas`, `comentario`, `criado_em`) VALUES
(2, 'Carlos M.', 5, 'Equipe extremamente profissional. Entenderam exatamente o que eu precisava \r\n      e entregaram além do esperado. Recomendo fortemente para quem busca qualidade \r\n      e comprometimento.', '2026-02-05 18:53:30'),
(3, 'Ana Paula R.', 4, 'Desde o primeiro contato demonstraram organização, clareza e domínio técnico. \r\n      O projeto ficou exatamente como imaginávamos e superou nossas expectativas', '2026-02-05 18:53:53'),
(4, 'Ricardo S.', 4, 'Excelente comunicação, prazos cumpridos e um resultado final impecável. \r\n      Com certeza voltarei a contratar para novos projetos.', '2026-02-05 18:54:16'),
(5, 'Juliana F.', 5, 'Transformaram uma ideia simples em uma solução moderna e profissional. \r\n      Hoje nosso site transmite muito mais credibilidade.', '2026-02-05 18:54:38'),
(15, 'Leonardo Nilio dos Santos', 5, 'O site transmite muita credibilidade desde o primeiro acesso. Design moderno, navegação simples e informações claras. Consegui entrar em contato rapidamente e fui muito bem atendido. Recomendo fortemente.', '2026-02-05 20:56:45');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
