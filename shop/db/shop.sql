-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 07 2022 г., 14:24
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
  `item_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `item_id`, `item_price`, `quantity`, `user_id`) VALUES
(156, 'jf0tqnfp5n0lf2vqe2ah8aboa8', 11, 2300, 1, NULL),
(157, 'jf0tqnfp5n0lf2vqe2ah8aboa8', 2, 500, 1, NULL),
(158, '3j96bu4fc68eo8vv0u0poj7abq', 5, 800, 2, NULL),
(159, '3j96bu4fc68eo8vv0u0poj7abq', 1, 200, 1, NULL),
(160, '3j96bu4fc68eo8vv0u0poj7abq', 2, 500, 1, NULL),
(161, 'bhgelgnf8g6uts5oac8aqal2i9', 1, 200, 1, 2),
(162, 'bhgelgnf8g6uts5oac8aqal2i9', 2, 500, 1, 2),
(163, '1jgvmafvi7qrps358v8b9eaejg', 3, 400, 1, 1),
(164, '1jgvmafvi7qrps358v8b9eaejg', 1, 200, 1, 1),
(165, '1jgvmafvi7qrps358v8b9eaejg', 10, 700, 2, 1),
(166, 'puokchujkblhcdbi2or5137vj9', 1, 200, 2, 2),
(176, 'akrncaib92tvqi8sgh0ka348t0', 3, 400, 1, 1),
(177, 'akrncaib92tvqi8sgh0ka348t0', 1, 200, 1, 1),
(178, 'akrncaib92tvqi8sgh0ka348t0', 4, 600, 1, 1),
(179, 'qe3efvrgfjplnbd0f2pe76b5vg', 3, 400, 2, NULL),
(180, 'qe3efvrgfjplnbd0f2pe76b5vg', 1, 200, 2, NULL),
(181, 'qe3efvrgfjplnbd0f2pe76b5vg', 4, 600, 1, NULL),
(182, 'ne9a8il51c3qab1ji5ifvk6h97', 1, 200, 1, 1),
(183, 'g2c39ojhd2jrtntt96vgslqdi7', 11, 2300, 1, NULL),
(184, 'g2c39ojhd2jrtntt96vgslqdi7', 7, 900, 1, NULL),
(185, 'guseu3ajg56uj70alr9di7nqo3', 3, 400, 1, 2),
(186, 'guseu3ajg56uj70alr9di7nqo3', 1, 200, 1, 2),
(187, 'guseu3ajg56uj70alr9di7nqo3', 6, 400, 1, 2);

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
(45, 'test', 'test'),
(46, 'Marina', 'Hello!!!');

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
(1, '01.jpg', 20),
(2, '02.jpg', 19),
(3, '03.jpg', 2),
(4, '04.jpg', 0),
(5, '05.jpg', 29),
(6, '06.jpg', 1),
(7, '07.jpg', 2),
(8, '08.jpg', 2),
(9, '09.jpg', 3),
(10, '10.jpg', 0);

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
(1, 'Rucksack', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 200, '01.jpg', 75),
(2, 'Suit', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 500, '02.jpg', 43),
(3, 'Pullover', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 400, '03.jpg', 76),
(4, 'Trousers', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 600, '04.jpg', 8),
(5, 'Jacket', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 800, '05.jpg', 20),
(6, 'Blouse', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 400, '06.jpg', 12),
(7, 'Jacket', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 900, '07.jpg', 2),
(8, 'Pullover', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 500, '08.jpg', 15),
(9, 'Cap', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 300, '09.jpg', 1),
(10, 'Shirt', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 700, '10.jpg', 0),
(11, 'Leather jacket', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 2300, '11.jpg', 7),
(12, 'Shorts', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio est, veniam pariatur excepturi illo et distinctio itaque quibusdam laudantium voluptatum consequatur facere, earum quaerat magni dolores corporis repellendus. Voluptatum, facere.', 600, '12.jpg', 14);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `phone` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `status` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `surname`, `phone`, `session_id`, `status`) VALUES
(38, NULL, 'John', 'Doe', 1111, 'jf0tqnfp5n0lf2vqe2ah8aboa8', 'awaiting payment'),
(39, NULL, 'Jane', 'Doe', 121212, '3j96bu4fc68eo8vv0u0poj7abq', 'pending'),
(40, 2, 'Marina', 'Grigoreva', 123123, 'bhgelgnf8g6uts5oac8aqal2i9', 'awaiting payment'),
(41, 1, 'Admin', 'Admin', 999, '1jgvmafvi7qrps358v8b9eaejg', 'shipped'),
(42, 2, 'Marina', 'Grigoreva', 123123, 'puokchujkblhcdbi2or5137vj9', 'refunded'),
(43, 1, 'Admin', 'Admin', 11111, 'akrncaib92tvqi8sgh0ka348t0', 'completed'),
(44, NULL, 'Test', 'TEST', 0, 'qe3efvrgfjplnbd0f2pe76b5vg', 'cancelled'),
(45, NULL, 'Ivan', 'Ivanov', 989898, 'g2c39ojhd2jrtntt96vgslqdi7', 'pending'),
(46, 2, 'Test', 'test', 555, 'guseu3ajg56uj70alr9di7nqo3', 'awaiting payment');

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
(1, 'admin', '$2y$10$CamQWcWLNlFr5KGsi3FV5OB8iHa6Yu5GWF6mK7k70raXC06Go7Yse', '111318309625c52f0d38294.37420083'),
(2, 'user', '$2y$10$pIjkDo5GwEQBlwsY7eoZS.T22RPQg4MWKS5InqVk94MKSej7TLQFC', '674694379624adf8e7ed7f1.99660189');

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
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
