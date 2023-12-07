-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 06 2023 г., 17:05
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `SkillAscend`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `type` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direction` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `difficulity` float DEFAULT NULL,
  `question` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accelcoins` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `last_name` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_b` date DEFAULT NULL,
  `email` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `type`, `accelcoins`, `last_name`, `first_name`, `date_of_b`, `email`, `password`) VALUES
(1, 'libyVoX', 'member', '0', 'Ievlev', 'Arylkhan', '2008-07-15', 'ahbag@gmail.com', 'цурк');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
