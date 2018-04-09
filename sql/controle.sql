-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 09-Abr-2018 às 20:37
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `cd_cargo` int(10) UNSIGNED NOT NULL,
  `ds_cargo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`cd_cargo`, `ds_cargo`, `created_at`, `updated_at`) VALUES
(1, 'Developer', '2018-04-06 19:23:10', '2018-04-06 19:23:10'),
(2, 'Analyst', '2018-04-06 19:23:10', '2018-04-06 19:23:10'),
(3, 'Manager Project', '2018-04-06 19:23:10', '2018-04-06 19:23:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `cd_empresa` int(10) UNSIGNED NOT NULL,
  `nm_empresa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`cd_empresa`, `nm_empresa`, `created_at`, `updated_at`) VALUES
(1, 'Digiboard', '2018-04-06 19:23:10', '2018-04-06 19:23:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2018_04_06_120816_create_empresas_table', 1),
(16, '2018_04_06_120831_create_cargos_table', 1),
(17, '2018_04_06_120840_create_setors_table', 1),
(18, '2018_04_06_120847_create_pessoas_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `cd_pessoa` int(10) UNSIGNED NOT NULL,
  `nm_pessoa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cd_empresa` int(10) UNSIGNED NOT NULL,
  `cd_setor` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cd_cargo` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`cd_pessoa`, `nm_pessoa`, `telefone`, `cd_empresa`, `cd_setor`, `email`, `cd_cargo`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Bruno Brito....', '9295105867', 1, 3, 'cbcarlos07@gmail.com', 2, '2018-04-06 19:23:10', '2018-04-09 17:14:34'),
(2, 'Charles Hercules', '9295158866', 1, 3, 'charles.h@gmail.com', 3, '2018-04-06 19:23:10', '2018-04-06 19:23:10'),
(3, 'Angela Maria', '9236389053', 1, 3, 'angela@gmail.com', 3, '2018-04-06 19:23:10', '2018-04-09 17:14:00'),
(4, 'Maria Ana', '923638810', 1, 3, 'maria@gmail.com', 3, '2018-04-06 19:23:10', '2018-04-06 19:23:10'),
(5, 'Paulo Sérgio', '923535885', 1, 3, 'paulo@gmail.com', 2, '2018-04-06 19:23:10', '2018-04-06 19:23:10'),
(6, 'Carla Teste', '090999', 1, 1, 'maiç@emil', 1, '2018-04-09 16:53:32', '2018-04-09 16:53:32'),
(7, 'Luiza', '0909090', 1, 1, 'mail@luiz', 1, '2018-04-09 17:04:23', '2018-04-09 17:04:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `cd_setor` int(10) UNSIGNED NOT NULL,
  `nm_setor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`cd_setor`, `nm_setor`, `created_at`, `updated_at`) VALUES
(1, 'Tecnologia de Informação', '2018-04-06 19:23:10', '2018-04-06 19:23:10'),
(2, 'Central de Monitoramento', '2018-04-06 19:23:10', '2018-04-06 19:23:10'),
(3, 'Gerencia', '2018-04-06 19:23:10', '2018-04-06 19:23:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`cd_cargo`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cd_empresa`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`cd_pessoa`),
  ADD KEY `pessoas_cd_empresa_foreign` (`cd_empresa`),
  ADD KEY `pessoas_cd_setor_foreign` (`cd_setor`),
  ADD KEY `pessoas_cd_cargo_foreign` (`cd_cargo`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`cd_setor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `cd_cargo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cd_empresa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `cd_pessoa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `cd_setor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD CONSTRAINT `pessoas_cd_cargo_foreign` FOREIGN KEY (`cd_cargo`) REFERENCES `cargo` (`cd_cargo`),
  ADD CONSTRAINT `pessoas_cd_empresa_foreign` FOREIGN KEY (`cd_empresa`) REFERENCES `empresa` (`cd_empresa`),
  ADD CONSTRAINT `pessoas_cd_setor_foreign` FOREIGN KEY (`cd_setor`) REFERENCES `setor` (`cd_setor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
