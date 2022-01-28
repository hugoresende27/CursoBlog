-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jan-2022 às 22:56
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES
(1, 'my-first-post', 'Tempestades de granizo e neve raras cobrem o deserto saudita\r\n', 'Para a maioria das pessoas, pensar no deserto da Arábia Saudita evoca, provavelmente, imagens de dunas de areia sob o sol implacável. Contudo, mais recentemente, essas dunas têm estado cobertas de neve.', 'Para a maioria das pessoas, pensar no deserto da Arábia Saudita evoca, provavelmente, imagens de dunas de areia sob o sol implacável. Contudo, mais recentemente, essas dunas têm estado cobertas de neve.\r\n\r\nVárias tempestades recentes de neve e granizo na região transformaram a paisagem na Arábia Saudita e nas redondezas, despertando agitação nos locais e causando sensação nas redes sociais.\r\n\r\nNo início do mês, o fotógrafo saudita Osama Al-Habri captou imagens aéreas da província de Badr, a sudoeste da cidade de peregrinação islâmica de Medina, “vestida” de branco, com os habitantes reunidos para desfrutarem da rara visão.\r\n\r\nAl-Harbi contou à CNN que o clima de inverno com tanta intensidade na área do deserto de Badr era um fenómeno raro que não ocorria há anos. Descreveu-a como uma “tempestade de granizo histórica”.\r\n\r\nO fotógrafo saudita, que documentou o evento a 11 de Janeiro, disse que o local estava cheio de visitantes, muitos que viajaram muitos quilómetros para terem um vislumbre da paisagem gelada.\r\n\r\nNa altura da visita de Al-Harbi, o Centro Nacional de Meteorologia da Arábia Saudita tinha previsto chuva forte a moderada na região de Medina, juntamente com vento, baixa visibilidade e granizo, segundo a Agência de Imprensa Saudita.\r\n\r\nNesta semana, voltaram as temperaturas de inverno, com a neve a cair no noroeste da Arábia Saudita, cobrindo a cidade de Tabuk, perto da fronteira com a Jordânia, e as montanhas vizinhas, segundo a Reuters.', NULL, NULL, NULL),
(2, 'my-second-post', 'Este software Bitcoin é a maneira mais fácil de ganhar 750€ por dia sem fazer nada', 'A bitcoin está outra vez a bater todos os recordes e criou mais de mil novos milionários em Portugal nos últimos 30 dias.', 'As plataformas de negociação automática estão a proporcionar, de longe, os maiores lucros porque compram e vendem automaticamente bitcoins com base na análise de milhares de indicadores de mercado a cada minuto.\r\n\r\nA forma como isto funciona para si é depositar o investimento inicial (por exemplo, 250 euros) e a plataforma utilizará automaticamente esse investimento para comprar e vender bitcoin por si.\r\n\r\nPoderá sempre ver o seu saldo e levantar o seu dinheiro a qualquer momento. Por exemplo, se investiu 250 euros no primeiro dia e o seu saldo cresceu para 750 euros no dia seguinte, pode manter os 250 euros na plataforma para continuar a gerar novos lucros e retirar 500 euros de lucro e repetir esse processo todos os dias.\r\n\r\nO único problema destas plataformas costuma ser o custo muito elevado do registo de uma conta – muitas vezes acima dos 25.000 euros por pessoa.\r\n\r\nA grande notícia é que uma das maiores plataformas de negociação automática, The Crypto Genius, vai abrir 25 novos lugares, completamente gratuitos. As inscrições ficarão abertas durante dois dias, naquinta-feira dia 27-01-2022 e na sexta-feira dia 28-01-2022.\r\n\r\nPara verificar se se pode inscrever, por favor selecione a sua idade abaixo. Se ainda houver lugares gratuitos disponíveis, poderá candidatar-se a uma conta gratuita. Um representante da plataforma irá então ligar-lhe para confirmar a sua conta e fornecer mais informações e orientação:', NULL, NULL, NULL),
(3, 'my-third-post', 'Mais 5 arguidos no processo que investiga a queda do BES e do Grupo Espírito Santo', 'Maria Beatriz Páscoa, Frederico Ferreira, Luís Miguel Neves e Rui Santos, estão indiciados pelos crimes de abuso de confiança e burla qualificada. Alexandre Casado Monteiro responde só por burla.', 'Votómetro do Observador. Responda ao questionário e descubra quais os partidos mais próximos de si\r\nO Observador lança uma ferramenta interativa que lhe permite, em minutos, descobrir com que partidos se identifica mais nestas legislativas. Não é uma recomendação de voto, é uma ajuda à reflexão.', NULL, NULL, NULL),
(4, 'my-fourth-post', 'Votómetro do Observador. ', 'Responda ao questionário e descubra quais os partidos mais próximos de si\r\n', '\"Concordo com a OMS. Esta é a evolução normal dos vírus e das pandemias. É isso que a ciência nos diz ao longo dos últimos 100 anos\", referiu Pedro Simas, para quem as assimetrias de vacinação ainda existentes entre vários países europeus está a fazer com que se demore a declarar a transição de pandemia para endemia.O Observador lança uma ferramenta interativa que lhe permite, em minutos, descobrir com que partidos se identifica mais nestas legislativas. Não é uma recomendação de voto, é uma ajuda à reflexão.', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
