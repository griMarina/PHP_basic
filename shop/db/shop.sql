-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Апр 04 2022 г., 11:57
-- Версия сервера: 5.7.34
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` text NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `text`) VALUES
(1, 'Alex', 'OK!'),
(2, 'Maria', 'Very good!'),
(3, 'Lilu', 'Super!'),
(4, 'John', 'Hi!'),
(5, 'Peter', 'I like it!!!'),
(6, '1111', 'NO'),
(7, 'user', 'la-la-la'),
(45, 'test', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_img` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name_img`, `views`) VALUES
(1, '01.jpg', 17),
(2, '02.jpg', 16),
(3, '03.jpg', 2),
(4, '04.jpg', 0),
(5, '05.jpg', 28),
(6, '06.jpg', 1),
(7, '07.jpg', 0),
(8, '08.jpg', 2),
(9, '09.jpg', 2),
(10, '10.jpg', 0),
(11, '11.jpg', 6),
(12, '12.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_title` varchar(255) NOT NULL,
  `item_desc` text NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_img` varchar(255) NOT NULL,
  `item_views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`item_id`, `item_title`, `item_desc`, `item_price`, `item_img`, `item_views`) VALUES
(1, 'Rucksack', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 200, '01.jpg', 61),
(2, 'Suit', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 500, '02.jpg', 38),
(3, 'Pullover', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 400, '03.jpg', 58),
(4, 'Trousers', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 600, '04.jpg', 3),
(5, 'Jacket', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 800, '05.jpg', 10),
(6, 'Blouse', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 400, '06.jpg', 5),
(7, 'Jacket', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 900, '07.jpg', 2),
(8, 'Pullover', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 500, '08.jpg', 15),
(9, 'Cap', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 300, '09.jpg', 1),
(10, 'Shirt', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 700, '10.jpg', 0),
(11, 'Leather jacket', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 2300, '11.jpg', 4),
(12, 'Shorts', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 600, '12.jpg', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$10$CamQWcWLNlFr5KGsi3FV5OB8iHa6Yu5GWF6mK7k70raXC06Go7Yse', '537247566624ad24d1a0ac1.15962202'),
(2, 'user', '$2y$10$pIjkDo5GwEQBlwsY7eoZS.T22RPQg4MWKS5InqVk94MKSej7TLQFC', '469932238624a1b02e7dc45.18957483');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

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
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
