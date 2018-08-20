-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 20 2018 г., 04:06
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `21vektest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `patronymic` varchar(32) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `surname`, `name`, `patronymic`, `birthday`) VALUES
(3, 'Иванов', 'Андрей', 'Иванович', '2012-01-17'),
(4, 'Петров', 'Пётр', 'Петрович', '2014-01-17'),
(6, 'Покало', 'Дмитрий', 'Алексеевич', '1992-12-31'),
(7, 'Чичерина', 'Юлия', 'Сергеевна', '1962-11-11'),
(8, 'Борзов', 'Найк', 'Алексеевич', '1977-09-17'),
(9, 'Летов', 'Егор', 'Андреевич', '1932-03-02'),
(10, 'Кинчев', 'Сергей', 'Юрьевич', '2002-01-05'),
(11, 'Шевчук', 'Дмитрий', 'Аркадьевич', '2005-10-10'),
(12, 'Макарова', 'Мария', 'Егоровна', '1992-04-04'),
(13, 'Агузарова', 'Антонина', 'Эдуардовна', '1951-06-08'),
(14, 'Летова', 'Инна', 'Петровна', '2015-05-04'),
(15, 'Антонов', 'Дмитрий', 'Алексеевич', '1892-10-11'),
(17, 'Иванов', 'Антон', 'Львович', '2011-08-25');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
