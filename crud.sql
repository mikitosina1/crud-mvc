-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 15 2020 г., 10:20
-- Версия сервера: 10.1.34-MariaDB
-- Версия PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `automobile`
--

CREATE TABLE `automobile` (
  `id` int(6) NOT NULL,
  `dealer` text NOT NULL,
  `model` text NOT NULL,
  `year` int(4) NOT NULL,
  `gearbox` text NOT NULL,
  `horse_power` int(10) NOT NULL,
  `engine_power` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `automobile`
--

INSERT INTO `automobile` (`id`, `dealer`, `model`, `year`, `gearbox`, `horse_power`, `engine_power`) VALUES
(6, 'ВАЗ1', 'ВАЗ elinка', 2020, 'Выбор коробки передач', 666, 1),
(7, 'audi', 'krutipedali', 2020, 'автомат', 666, 2345),
(9, 'nissan', 'pussan', 2019, 'полуавтомат', 8800, 555),
(10, 'volvo', 'ласточка', 1994, 'полуавтомат', 444, 435),
(12, 'kia', 'volvo2', 2005, 'ручная', 666, 500);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `automobile`
--
ALTER TABLE `automobile`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
