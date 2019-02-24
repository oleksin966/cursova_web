-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 24 2019 г., 21:20
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bee-family`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(1, 'Олексин Іван', '898e4641ff2beb1c66477396c9735286', ''),
(3, 'u18068_XYBDN', '898e4641ff2beb1c66477396c9735286', ''),
(8, 'fdgdfgfgf', '2e3a0048f47b81425105ef9bf5fa1721', ''),
(9, 'oleksin.966@gmail.com', '898e4641ff2beb1c66477396c9735286', ''),
(13, 'oleksin.966@mail.ru', '898e4641ff2beb1c66477396c9735286', ''),
(21, 'oleksi22n.966@mail.ru', 'e5e641ef443cb35bea96aa0cd4b888c7', ''),
(28, 'Таджик', '47f0ad4f7a211d978c0ff170837ab5f0', ''),
(34, 'Роман Бойчук', 'stoner45', 'oleksin.966@mail.ru'),
(36, 'цууцйуйцуцйу', 'ddfdfsf', 'йцуцйуйуцйуцйуйуу'),
(56, 'qweqsasdsdwdsw', 'stoner45', 'oleksin.966@mail.ru'),
(57, 'awdwaawdadad', 'ddfdfsf', 'oleksin.966@mail.ru'),
(59, 'hfhhfgfhf', 'wewqegfgdg', 'oleksin.966@mail.ru'),
(60, 'testuser1', '123456', 'oleksin.966@mail.ru'),
(62, 'qwewqewqeqwe', 'ddfdfsf', 'qdwdd@dwwdd'),
(69, 'ghjgjyjgjyjyjjyy', 'stoner45', 'oleksin.966@mail.ru'),
(70, 'fthftthththhfht', 'dwdwdwwdw', 'fthfthfth@ddfdwddwd'),
(71, 'awdwadwadadawwadawdawd', 'stoner45', 'oleksin.966@mail.ru'),
(73, 'awdwadwawadw', 'sdfdsf', 'awdwwdw@ffd'),
(75, 'dddddddddddddd', 'dwdwawd', 'oleksin.966@mail.ru'),
(82, 'awdwadawdawadaawwdwawwa', 'asdsadsadsadas', 'dwdwdddwawd@dsadasd'),
(83, 'ghjghjhgjhgjhg', 'stoner45', 'oleksin.966@mail.ru'),
(84, 'fhgghfhghghfhfgh', 'wewqegfgdg', 'oleksin.966@mail.ru'),
(85, 'regrddgdrgkgokdrg', 'rgrgrgrgrgdgrdg', 'drgddrdrgdrgdrgrg@'),
(87, 'bnhbnbvvbnbvnbvn', 'stoner45', 'oleksin.966@mail.ru'),
(88, 'awdawdawddadadwda', 'wewqegfgdg', 'oleksin.966@mail.ru'),
(89, 'dwadawawdawdaaw', 'stoner45', 'oleksin.966@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
