-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 10 2016 г., 19:11
-- Версия сервера: 10.0.17-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phones`
--

-- --------------------------------------------------------

--
-- Структура таблицы `db_numbers`
--

CREATE TABLE `db_numbers` (
  `id` int(11) NOT NULL,
  `phone` text COLLATE utf8_bin NOT NULL,
  `owner` enum('individual','entity') COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin,
  `entity_name` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `db_numbers`
--

INSERT INTO `db_numbers` (`id`, `phone`, `owner`, `address`, `entity_name`) VALUES
(0, '+380955045221', 'entity', 'Украина, Николаев ', 'Иванов И.И.'),
(1, '+380955045115', 'entity', 'Украина, Николаев.', 'Бловицкий В.М.'),
(6, '+380955045116', 'individual', 'Украина, Николаев.', ''),
(7, '+380955045117', 'individual', 'Украина, Николаев.', ''),
(8, '+380955045118', 'individual', 'Украина, Николаев.', ''),
(10, '+380955045119', 'individual', 'Украина, Николаев.', ''),
(12, '+380955045120', 'individual', 'Украина, Николаев.', ''),
(13, '+380955045121', 'individual', 'Украина, Николаев.', ''),
(14, '+380955045122', 'individual', 'Украина, Николаев.', ''),
(15, '+380955045123', 'individual', 'Украина, Николаев.', ''),
(16, '+380955045124', 'individual', 'Украина, Николаев.', ''),
(17, '+380955045125', 'individual', 'Украина, Николаев.', ''),
(18, '+380955045126', 'individual', 'Украина, Николаев.', ''),
(19, '+380955045127', 'individual', 'Украина, Николаев.', ''),
(20, '+380955045128', 'individual', 'Украина, Николаев.', ''),
(21, '+380512232159', 'individual', 'Украина, Николаев.', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `db_numbers`
--
ALTER TABLE `db_numbers`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
