-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2021 г., 01:49
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hw15_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `slogan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `title`, `img`, `slogan`) VALUES
(1, 'Adidas', 'img/adidas.jpg', 'Невозможное возможно!'),
(2, 'Nike', 'img/nike.jpg', 'Here I Am!'),
(3, 'Puma', 'img/puma.jpg', 'Все меняется – Puma остается'),
(4, 'Mida', 'img/mida.jpg', 'Ходи себе в удовольствие'),
(5, 'Four Seasons', 'img/four_seasons.jpg', 'Четыре сезона удовольствия!'),
(6, 'Intertop', 'img/intertop.jpg', 'ИнтерТОПчик');

-- --------------------------------------------------------

--
-- Структура таблицы `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `model` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shoes`
--

INSERT INTO `shoes` (`id`, `brand_id`, `type_id`, `price`, `model`, `img`, `about`, `color`) VALUES
(1, 1, 1, 2549.99, 'Super Hero Run', 'img/adidas/super_hero_run_black.jpg', 'Лучшие кроссовки для бега', 'Черный'),
(2, 1, 1, 2549.99, 'Super Hero Run', 'img/adidas/super_hero_run_blue.jpg', 'Лучшие кроссовки для бега', 'Синий'),
(3, 1, 1, 1899.99, 'Speed Back', 'img/adidas/speed_back.jpg', 'Кроссовки для прогулки и легкой атлетики', 'Желтый'),
(4, 3, 1, 3999.99, 'ZX 700 D', 'img/puma/zx_700_d.jpg', 'Для активного отдыха', 'Красный'),
(5, 3, 2, 4879.89, 'Skate this 3000', 'img/puma/sk3000.jpg', 'Макасины для уличного спорта', 'Белый'),
(6, 2, 2, 7899.25, 'Back to Future', 'img/nike/btf.jpg', 'Кроссовки будущего', 'Серый'),
(7, 2, 1, 1829.99, 'Unlim speed', 'img/nike/uspeed.jpg', 'Кроссовки для скоростного бега. Сочетают в себе стильный дизайн, легкий вес, а также дышащий слой Usoft, способный отводить тепло', 'Черный'),
(8, 5, 3, 3700, 'Alberto black', 'img/four_seasons/alberto_black.jpg', 'Стильные туфли из замши, выполнены по лекалам туфлей Le grant фирмы DeOnix 1965 года.', 'Черный'),
(9, 6, 5, 4325.29, 'Autumn delay', 'img/intertop/autd.jpg', 'Сапоги из натуральной кожи имеют анатомическую стельку и технологию Gore-Tex', 'Черный'),
(10, 6, 3, 1999.99, 'Eco-light', 'img/intertop/ecko_light.jpg', 'Кожаные туфли с пяткой из 12 слойного полиуретана различной плотности', 'Серый'),
(11, 6, 4, 2199.2, 'C-came', 'img/intertop/c-came.jpg', 'Легкие летние босоножки в стиле Urban позволяют комфортно и уверенно себя чувствовать', 'Серый'),
(12, 4, 3, 4800.7, 'N-base', 'img/mida/n_base.jpg', 'Туфли из замши ', 'Черный'),
(13, 4, 6, 799.99, 'Beach-sunny', 'img/mida/beach_sunny.jpg', 'Отличные шлепанцы на каждый день', 'Зеленый'),
(14, 4, 6, 855.35, 'SwimX', 'img/mida/swimx.jpg', 'Пляжные шлепанцы чтоб чувствовать себя лучше других', 'Белый');

-- --------------------------------------------------------

--
-- Структура таблицы `type_products`
--

CREATE TABLE `type_products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_products`
--

INSERT INTO `type_products` (`id`, `title`, `about`, `img`) VALUES
(1, 'Кроссовки', 'Кроссовки - наиболее удобная обувь для занятия спортом или просто прогулки', 'img/type/cross.jpg'),
(2, 'Макасины', 'Мокасины (или как их иначе называют кеды) альтернатива кроссовкам, но с более жесткой и износостойкой подошвой', 'img/type/makas.jpg'),
(3, 'Туфли', 'Классический тип обуви', 'img/type/shoes.jpg'),
(4, 'Босоножки', 'Летний вариант обуви', 'img/type/bsn.jpg'),
(5, 'Сапоги', 'Классическая обувь с высоким охватом ноги', 'img/type/sapog.jpg'),
(6, 'Шлепанцы', 'Пляжная обувь', 'img/type/sleeps.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_idbrand_fk_brand` (`brand_id`),
  ADD KEY `products_idcategory_fk_categories` (`type_id`);

--
-- Индексы таблицы `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `products_idbrand_fk_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `products_idcategory_fk_categories` FOREIGN KEY (`type_id`) REFERENCES `type_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
