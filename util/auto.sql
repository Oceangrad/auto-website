-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 18 2023 г., 12:05
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto-requests`
--

CREATE TABLE `auto-requests` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `autoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `marka` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `kuzov` varchar(255) NOT NULL,
  `V` int(11) NOT NULL,
  `tipOil` varchar(255) NOT NULL,
  `privod` varchar(255) NOT NULL,
  `boxPered` varchar(255) NOT NULL,
  `cen` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `marka`, `model`, `year`, `kuzov`, `V`, `tipOil`, `privod`, `boxPered`, `cen`, `img`) VALUES
(1, 'Toyota', 'AE86', 'май 1983', '2‑дв. купе', 2, 'Бензин', 'Задний', '4 ступ', 1000000, 'images/car1.jpeg'),
(2, 'Mercedes-Benz', 'G-Wagen', '2022', '4‑дв. пикап', 4, 'Бензин', 'Полный', '9 ступ', 26000000, 'images/car2.jpg'),
(3, 'Toyota', 'Land Cruiser', '2022', '5 дв. внедорожник', 3, 'Дизель', 'Полный', '10 ступ', 9600000, 'images/car3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender-name` varchar(120) NOT NULL,
  `email` varchar(160) NOT NULL,
  `message-name` varchar(120) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `sender-name`, `email`, `message-name`, `message`) VALUES
(11, 'Да', 'peterportal112@gmail.com', 'Сайт', 'Неплохо поработали');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `lastName` varchar(170) NOT NULL,
  `firstName` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `lastName`, `firstName`, `password`) VALUES
(1, 'Марк', 'Актер', 'cum123'),
(2, 'fdgfg', 'dsfg', '12345'),
(3, 'лох', 'абобус', '12345');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto-requests`
--
ALTER TABLE `auto-requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `autoID` (`autoID`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto-requests`
--
ALTER TABLE `auto-requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
