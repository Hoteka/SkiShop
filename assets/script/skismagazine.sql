-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 21 2021 г., 20:36
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `skismagazine`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `id_product` int NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float(10,0) NOT NULL,
  `image` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_series` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `id_series`) VALUES
(1, 'desirelive 104\r\n', 53000, 'img/product/Deathwish-104.jpg', 1),
(2, 'desirelive', 54000, 'img/product/Deathwish.jpg', 1),
(3, 'wildcat 101', 53000, 'img/product/wildcat-101.jpg', 2),
(4, 'wildcat 108', 54000, 'img/product/wildcat-108.jpg', 2),
(5, 'wildcat ', 54000, 'img/product/wildcat.jpg', 2),
(6, 'commander 98', 55000, 'img/product/Commander-98.jpg', 3),
(7, 'commander 108', 55000, 'img/product/Commander-108.jpg', 3),
(8, 'commander tour', 57000, 'img/product/CommanderTour.jpg', 4),
(9, 'desirelive tour', 57000, 'img/product/deathwishTour.jpg', 4),
(10, 'wildcat tour 108', 57000, 'img/product/wildcatTour108.jpg', 4),
(11, 'wildcat tour', 57000, 'img/product/wildcatTour.jpg', 4),
(12, 'hot mess', 50000, 'img/product/HotMess.jpg', 5),
(13, 'sierra', 53000, 'img/product/Sierra.jpg', 5),
(14, 'bella', 53000, 'img/product/bella.jpg', 5),
(15, 'sierra tour', 55000, 'img/product/SierraTour.jpg', 6),
(16, 'bella tour', 55000, 'img/product/BellaTour.jpg', 6),
(17, 'park', 46000, 'img/product/frankenski.jpg', 7),
(18, 'carson sierra', 28000, 'img/product/carsonsierra.jpg', 8),
(19, 'carson wildcat', 28000, 'img/product/carsonwildcat.jpg', 8),
(20, 'frankenblade', 14000, 'img/product/frankenblade.jpg', 9),
(21, 'meridian tour', 55000, 'img/product/meridiantour.jpg', 9),
(22, 'chipotle banana', 57000, 'img/product/chipotlebanana.jpg', 9),
(45, 'chipotle banana', 60000, 'img/product/wildcatTour.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `series`
--

CREATE TABLE `series` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `series`
--

INSERT INTO `series` (`id`, `name`, `description`) VALUES
(1, 'desirelive ', 'Гибкие. Стабильные. Быстрые. Посаженые. Резные. Серия Desirelive - это живое противоречие обычным лыжным традициям. Превосходное сцепление с кромкой и беспрецедентная подвеска на такой игровой платформе. Кто сказал, что невозможно иметь все сразу?'),
(2, 'wildcat ', 'Определите свои границы, а затем снова разрушьте стены. Серия Wildcat делает возможным все: от \"подушек\" до парковых кругов. Двойные наконечники, глубокие рокерные линии. Режьте, серфите и катайтесь в свое удовольствие.'),
(3, 'commander ', 'Направленные профили, более длинные эффективные кромки и металл. Очень много металла. Все это идеально подходит для жесткого и быстрого движения с мощным удержанием кромки, максимальной скоростью и непревзойденным самообладанием на скорости.'),
(4, 'men\'s tour', 'Облегченные для подъемов, но с той же мощью, которую вы привыкли ожидать на спусках, во всех формах, которые вы полюбили. Работайте умнее, играйте сильнее. Коллекция tour создана для того, чтобы проходить повороты было легко.'),
(5, 'women\'s', 'Разработаны под строгим надзором самых умных людей, которых мы знаем.'),
(6, 'womens tour', 'Те же формы, в которые вы влюбились, облегченные для подъемов, чтобы вы могли ехать дальше, подниматься выше и иметь достаточно сил, чтобы показать себя на спуске.'),
(7, 'park', 'Дополнительные демпферы, дополнительное усиление и полностью симметричная геометрия идеально подходят для набора нового вращения на свежей губе, слэминга на городском бетоне или шнуровки переднего свайпа на трубе заднего двора. Серия park создана для этого.'),
(8, 'youth', 'Резиновые кости, никакого страха, все, что нужно доказать, и ничего, что можно потерять. О, снова быть молодым.'),
(9, 'reserve', 'Ограниченный выпуск лыж для особых клиентов, поклонников прошлых дизайнов и тех, у кого есть пропуск за кулисы вечеринки лазерного будущего.');

-- --------------------------------------------------------

--
-- Структура таблицы `skibinding`
--

CREATE TABLE `skibinding` (
  `id` int NOT NULL,
  `binding` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `id_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `skibinding`
--

INSERT INTO `skibinding` (`id`, `binding`, `price`, `id_product`) VALUES
(1, 'Look Pivot 15 GW - Forza 2.0', 30000, 1),
(2, 'Look Pivot 15 GW - Raw', 30000, 1),
(3, 'Look Pivot 15 GW - Forza 2.0', 30000, 2),
(4, 'Look Pivot 15 GW - Raw ', 30000, 2),
(5, 'Look Pivot 15 GW - Forza 2.0', 30000, 3),
(6, 'Look Pivot 15 GW - Raw ', 30000, 3),
(7, 'Look Pivot 18 Brake ', 30000, 3),
(8, 'Look Pivot 15 GW - Forza 2.0', 30000, 4),
(9, 'Look Pivot 15 GW - Raw ', 30000, 4),
(10, 'Look Pivot 15 GW - Forza 2.0 ', 30000, 5),
(11, 'Look Pivot 15 GW - Raw', 30000, 5),
(12, 'Look Pivot 15 GW - Forza 2.0 ', 30000, 6),
(13, 'Look Pivot 15 GW - Raw ', 30000, 6),
(14, 'Look Pivot 18 Brake ', 30000, 6),
(15, 'Look Pivot 15 GW - Forza 2.0 ', 30000, 7),
(16, 'Look Pivot 15 GW - Raw', 30000, 7),
(17, 'Voyager 102mm', 52000, 8),
(18, 'Voyager 102mm', 56000, 8),
(19, 'Voyager 108mm ', 52000, 9),
(20, 'Voyager 108mm ', 56000, 9),
(21, 'Voyager 102mm ', 52000, 10),
(22, 'Voyager 102mm ', 56000, 10),
(23, 'Voyager 120mm ', 52000, 11),
(24, 'Voyager 120mm ', 56000, 11),
(25, 'Look NX 11 GW Brake', 13000, 12),
(26, 'Look Pivot 15 GW - Forza 2.0 ', 30000, 13),
(27, 'Look Pivot 15 GW - Raw ', 30000, 13),
(28, 'Look NX 11 GW Brake ', 13000, 13),
(29, 'Look Pivot 15 GW - Forza 2.0 ', 30000, 14),
(30, 'Look Pivot 15 GW - Raw ', 30000, 14),
(31, 'Voyager 97mm ', 52000, 15),
(32, 'Voyager 102mm ', 52000, 15),
(33, 'Voyager 102mm ', 52000, 16),
(34, 'Voyager 102mm ', 45000, 17),
(35, 'Look NX Junior 7 83mm Brake ', 7000, 18),
(36, 'Look NX Junior 7 83mm Brake ', 7000, 19),
(37, 'Voyager 77mm ', 5000, 20),
(38, 'Voyager 102mm ', 52000, 21),
(39, 'Voyager 108mm ', 52000, 21),
(40, 'Voyager 102mm ', 56000, 21),
(41, 'Voyager 108mm', 56000, 21),
(42, 'Voyager 120mm', 35000, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `skidescription`
--

CREATE TABLE `skidescription` (
  `id` int NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `skidescription`
--

INSERT INTO `skidescription` (`id`, `title`, `description`) VALUES
(1, 'Сердцевина из осины/бука', 'Полная длина, без сучков, вертикальное ламинирование на заводе. Прочный, влажный и упругий, бук обеспечивает вершину спокойствия и невозмутимости на самых высоких скоростях в самых сложных условиях.'),
(2, 'Боковая стенка abs', 'Экструдированные боковины из модифицированного акрилонитрил-бутадиен-стирола (ABS) обеспечивают жесткость, демпфирование и долговечность. Позволяют повысить ударопрочность и упростить ремонт, чтобы вы могли терпеть издевательства год за годом, сезон за сезоном.'),
(3, 'Гибридная композитная структура из углеродного волокна', 'Специальная смесь трехосного стекловолокна и углеродного волокна, обеспечивающая жесткость на кручение, а также продольный ход и устойчивость на скорости.'),
(4, 'Карбоновая база серии 7500', 'Лыжи - это инструмент, а не сокровище, и это означает, что они должны выдерживать удары, поэтому мы используем спеченный UHMWPE (полиэтилен сверхвысокой молекулярной массы) с добавлением карбона. Более жесткие, быстрые и с лучшим впитыванием и удержанием парафина, чем экструдированные основы, они являются лидером в отрасли по производительности и долговечности.'),
(5, '2.2 миллиметровые кромки из закаленной стали', 'В мире существует всего несколько производителей кромок. Мы идем прямо к источнику, чтобы найти лучших из лучших. Мы используем только 2,2-миллиметровые кромки из закаленной стали Rockwell 48. Они проходят дополнительную термическую обработку на заводе, чтобы гарантировать, что вы получите только максимальную отдачу от ваших лыж.');

-- --------------------------------------------------------

--
-- Структура таблицы `skisize`
--

CREATE TABLE `skisize` (
  `id` int NOT NULL,
  `size` int NOT NULL,
  `id_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `skisize`
--

INSERT INTO `skisize` (`id`, `size`, `id_product`) VALUES
(1, 174, 1),
(2, 179, 1),
(3, 184, 1),
(4, 190, 1),
(5, 174, 2),
(6, 179, 2),
(7, 184, 2),
(8, 190, 2),
(9, 164, 3),
(10, 174, 3),
(11, 179, 3),
(12, 184, 3),
(13, 190, 3),
(14, 174, 4),
(15, 179, 4),
(16, 184, 4),
(17, 190, 4),
(18, 164, 5),
(19, 174, 5),
(20, 179, 5),
(21, 184, 5),
(22, 190, 5),
(26, 176, 6),
(27, 182, 6),
(28, 188, 6),
(29, 176, 7),
(30, 182, 7),
(31, 188, 7),
(32, 194, 7),
(33, 176, 8),
(34, 182, 8),
(35, 188, 8),
(36, 174, 9),
(37, 179, 9),
(38, 184, 9),
(39, 190, 9),
(40, 174, 10),
(41, 179, 10),
(42, 184, 10),
(43, 190, 10),
(44, 174, 11),
(45, 179, 11),
(46, 184, 11),
(47, 190, 11),
(48, 152, 12),
(49, 162, 12),
(50, 172, 12),
(51, 152, 13),
(52, 162, 13),
(53, 172, 13),
(54, 179, 13),
(55, 152, 14),
(56, 162, 14),
(57, 172, 14),
(58, 179, 14),
(59, 162, 15),
(60, 172, 15),
(61, 179, 15),
(62, 162, 16),
(63, 172, 16),
(64, 179, 16),
(65, 172, 17),
(66, 182, 17),
(67, 136, 18),
(68, 146, 18),
(69, 136, 19),
(70, 146, 19),
(71, 99, 20),
(72, 171, 21),
(73, 181, 21),
(74, 187, 21),
(75, 186, 22),
(76, 193, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_role` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `id_role`) VALUES
(1, 'Александр', 'Бойдало', '1', '$2y$10$R5PUYFyDOWbVLlKj1s0JM.z4LKMuesPqcG3K2WlMyaH/P0MiBMSnC', 2),
(2, 'Валерий', 'Михальченко', 'valeriy1996@yandex.ru', '$2y$10$khsABurh75OjpcLjatcdzeGofMOe02ZuNf2p7Ti3njMk2ypeDRspW', 2),
(3, 'Рзаев', 'Ульян', 'ylian@gmail.com', '$2y$10$lfrcB2fzd75nmrzN6BxqCe6YPxwwkzMSp8uAuVuZn5XWbdIkCAn2C', 2),
(19, 'admin', 'admin', 'admin', '$2y$10$4D1XyI8L6lS0OadRUuhFkOlcAe4fknCbpLKcyWuHV51sObl4yPK6.', 1),
(20, '9', '9', '9', '$2y$10$ihOT6gwQ8KVMnxlNTNUuUORtXuRAMM3Ww80xeE1V7.U.Fy535xXta', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_series` (`id_series`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skibinding`
--
ALTER TABLE `skibinding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `skidescription`
--
ALTER TABLE `skidescription`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skisize`
--
ALTER TABLE `skisize`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `series`
--
ALTER TABLE `series`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `skibinding`
--
ALTER TABLE `skibinding`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `skidescription`
--
ALTER TABLE `skidescription`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `skisize`
--
ALTER TABLE `skisize`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_series`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id_role`);

--
-- Ограничения внешнего ключа таблицы `skibinding`
--
ALTER TABLE `skibinding`
  ADD CONSTRAINT `skibinding_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `skisize`
--
ALTER TABLE `skisize`
  ADD CONSTRAINT `skisize_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
