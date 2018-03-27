-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2018 г., 13:22
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Processors', 'Processors', '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(2, 'Video Cards', 'Video', '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(3, 'Motherboards', 'Motherboards', '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(4, 'Hard Disks', 'Hard', '2018-03-26 11:29:59', '2018-03-26 11:29:59');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_26_091248_create_categories_table', 1),
(4, '2018_03_26_091313_create_products_table', 1),
(5, '2018_03_26_101314_create_relations_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `image`, `brand`, `name`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'img/amd_sempron.jpg', 'AMD', 'AMD Sempron 2650 BOX', 'Kabini, 2 ядра, частота 1.45 ГГц, кэш 1 МБ, техпроцесс 28 нм, сокет AM1, TDP 25W', 1, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(2, 'img/amd_athlon.jpg', 'AMD', 'AMD Athlon X2 340 (AD340XOKA23HJ)', 'Trinity, 2 ядра, частота 3.2 ГГц, кэш 1 МБ, техпроцесс 32 нм, сокет FM2, TDP 65W', 1, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(3, 'img/intel_pentium.jpg', 'Intel', 'Intel Pentium G4400', 'Skylake, 2 ядра, частота 3.3 ГГц + 3 МБ, техпроцесс 14 нм, сокет LGA1151, TDP 54W', 1, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(4, 'img/intel_core.jpg', 'Intel', 'Intel Core i3-7100', 'Kaby Lake, 2 ядра, частота 3.9 ГГц + 3 МБ, техпроцесс 14 нм, сокет LGA1151, TDP 51W', 1, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(5, 'img/gtx_1050.jpg', 'Gigabyte', 'Gigabyte GeForce GTX 1050 Windforce OC 2GB GDDR5 [GV-N1050WF2OC-2GD]', 'GPU 1392 МГц, RAM 1752 МГц 128 бит, DirectX 12, DVI, HDMI, DisplayPort', 2, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(6, 'img/rx_550.jpg', 'Sapphire', 'Sapphire RX 550 4G 11268-09-20G', 'DVI: 1, HDMI: 1, Охлаждение: активное, Ширина шины памяти: 128 бит, Тип видеопамяти: DDR5, Видеопамять: 4 Гб', 2, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(7, 'img/gtx_750.jpg', 'Gigabyte', 'Gigabyte GeForce GTX 750 Ti 4GB GDDR5 (GV-N75TWF2OC-4GI)', 'GPU 1059 МГц (640sp), RAM 1350 МГц 128 бит, DirectX 12, DVI, HDMI', 2, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(8, 'img/rx_560.jpg', 'Sapphire', 'Sapphire RX 560 4G 11267-20-20G', 'DVI: 1, HDMI: 1, Охлаждение: активное, Ширина шины памяти: 128 бит, Тип видеопамяти: GDDR5 , Видеопамять: 4 Гб', 2, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(9, 'img/h110.jpg', 'Asus', 'ASUS H110M-R / C / SI', 'mATX, сокет Intel LGA1151, чипсет Intel H110, память 2xDDR4, слоты: 1xPCIe x16, 2xPCIe x1', 3, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(10, 'img/a320.jpg', 'Asus', 'ASUS Prime A320M-A', 'mATX, сокет AMD AM4, чипсет AMD A320, память 4xDDR4, слоты: 1xPCIe x16, 1xPCIe x8, 2xPCIe x1', 3, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(11, 'img/b250.jpg', 'MSI', 'MSI B250M PRO-VDH', 'mATX, сокет Intel LGA1151, чипсет Intel B250, память 4xDDR4, слоты: 1xPCIe x16, 2xPCIe x1', 3, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(12, 'img/b350.jpg', 'MSI', 'MSI B350M Gaming PRO', 'mATX, сокет AMD AM4, чипсет AMD B350, память 2xDDR4, слоты: 1xPCIe x16, 2xPCIe x1', 3, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(13, 'img/wd500.jpg', 'WD', 'WD 500GB (WD5000LPCX-24C6HT0)', '2.5\", SATA 3.0 (6Gbps), 5400 об/мин', 4, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(14, 'img/s500.jpg', 'Seagate', 'Seagate Barracuda 500GB [ST500LM030]', '2.5\", SATA 3.0 (6Gbps), 5400 об/мин, буфер 128 МБ, время доступа 13 мс', 4, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(15, 'img/wd2000.jpg', 'WD', 'WD Purple 2TB [WD20PURZ]', '3.5\", SATA 3.0 (6Gbps), 5400 об/мин, буфер 64 МБ', 4, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(16, 'img/s2000.jpg', 'Seagate', 'Seagate BarraCuda 2TB [ST2000DM006]', '3.5\", SATA 3.0 (6Gbps), 7200 об/мин, буфер 64 МБ, время доступа 4.2 мс', 4, '2018-03-26 11:29:59', '2018-03-26 11:29:59');

-- --------------------------------------------------------

--
-- Структура таблицы `relations`
--

CREATE TABLE `relations` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `recommended_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `relations`
--

INSERT INTO `relations` (`id`, `product_id`, `recommended_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(2, 1, 3, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(3, 1, 4, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(4, 2, 1, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(5, 2, 3, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(6, 2, 4, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(7, 3, 1, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(8, 3, 2, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(9, 3, 4, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(10, 4, 1, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(11, 4, 2, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(12, 4, 3, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(13, 5, 6, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(14, 5, 7, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(15, 5, 8, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(16, 6, 5, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(17, 6, 7, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(18, 6, 8, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(19, 7, 5, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(20, 7, 6, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(21, 7, 8, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(22, 8, 5, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(23, 8, 6, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(24, 8, 7, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(25, 9, 10, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(26, 9, 11, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(27, 9, 12, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(28, 10, 9, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(29, 10, 11, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(30, 10, 12, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(31, 11, 9, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(32, 11, 10, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(33, 11, 12, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(34, 12, 9, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(35, 12, 10, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(36, 12, 11, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(37, 13, 14, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(38, 13, 15, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(39, 13, 16, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(40, 14, 13, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(41, 14, 15, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(42, 14, 16, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(43, 15, 13, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(44, 15, 14, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(45, 15, 16, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(46, 16, 13, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(47, 16, 14, '2018-03-26 11:29:59', '2018-03-26 11:29:59'),
(48, 16, 15, '2018-03-26 11:29:59', '2018-03-26 11:29:59');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
