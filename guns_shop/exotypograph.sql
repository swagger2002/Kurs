-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2020 г., 14:20
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `exotypograph`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `date`, `service_id`, `user_id`) VALUES
(6, 'обычный комментарий к обычной услуге', '2020-05-20', 2, 3),
(7, 'Я календарь переверну, и снова третье сентября...', '2020-05-20', 3, 3),
(8, 'Хороший сервис, всем советую :)', '2020-05-20', 6, 3),
(9, 'Заказал на этом сайте приглашения на свадьбу, результатом доволен! Рекомендую всем!', '2020-05-20', 8, 2),
(10, 'На фото я твое взгляну, и снова третье сентября...', '2020-05-20', 3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `short_description`, `description`, `image_path`) VALUES
(1, 'Буклеты', 'Some quick example text to build on the card title and make up the bulk of the card content. (буклеты)', 'Some quick example text to build on the card title and make up the bulk of the card content. (буклеты полное)', 'images/buklet.jpg'),
(2, 'Визитки', 'Some quick example text to build on the card title and make up the bulk of the card content. (визитки)', 'Some quick example text to build on the card title and make up the bulk of the card content. (визитки полное)', 'images/visitka.jpg'),
(3, 'Календари', 'Some quick example text to build on the card title and make up the bulk of the card content. (календари)', '<p>\r\n<b>Календари</b> – популярная рекламная полиграфическая продукция. На календаре можно разместить рекламируемые товары и услуги, такой рекламный носитель может стать приятным подарком для ваших клиентов, сотрудников и партнеров по бизнесу. Оперативная типография ЭкзоТипограф оказывает услуги печати календарей на заказ в Москве с лояльной ценовой политикой и бесплатной доставкой.\r\n</p>\r\n<p>\r\nНаша компания осуществляет цифровую печать на современном оборудовании. Офсетная печать предполагает большие затраты времени на предпечатную подготовку, поэтому цифровая печать календарей более эффективна для срочных заказов малого тиража, отличается оперативностью и точной цветопередачей.\r\n</p>\r\n<hr>\r\n<p>\r\nСамым распространенным видом календарной продукции является квартальный календарь (трио). Он состоит из следующих частей:\r\n<ul>\r\n<li>Верхний элемент – топ (панно). Это привлекающая внимание часть продукта, на которой размещается основное изображение и логотип. Плотность бумаги должна быть не менее 300 г/м2.</li>\r\n<li>Подложки для блоков – на них принято размещать слоган, адреса и контактные данные. Используется мелованная бумага немного меньшей плотности.</li><li>Календарные блоки (подбираются по цвету, макету и размеру календаря).</li>\r\n<li>Люверс – держатель календаря.</li>\r\n<li>Металлическая пружина для скрепления блоков, обычно белого, черного или серебристого цвета.</li>\r\n<li>Передвижное окошко, предназначенное для указания даты.</li>\r\n</ul>\r\n</p>\r\n<p>\r\nПечать карманных календарей является бюджетной и высокоэффективной составляющей в популяризации вашего бренда. С большой долей вероятности такой сувенир оставят в кошельке или сумке, за счет компактности и привлекательного внешнего вида.\r\n</p>\r\n<p>\r\nНастенные календари принято дарить бизнес-партнерам. Такой продукт в сочетании с современным дизайном обязательно станет приятным подарком и украсит интерьер офиса на целый год, поэтому печать настенных перекидных календарей пользуется большим спросом.\r\n</p>\r\n<p>\r\nПечать настольных календарей и календарей-домиков заказывают обычно для использования сотрудниками офисов по прямому назначению. Но в силу особенностей конструкции и места размещения такие изделия являются эффективными носителями рекламы.\r\n</p>\r\n<hr>\r\nМы предлагаем Вам воспользоваться услугами нашей типографии ЭкзоТипограф в Москве. Квалифицированные сотрудники помогут в реализации всех ваших идей. А высококачественное печатное оборудование и постпечатная обработка позволят создать максимально привлекательные и эксклюзивные рекламные сувениры.', 'images/kalendar.jpg'),
(4, 'Каталоги', 'Some quick example text to build on the card title and make up the bulk of the card content. (каталоги)', 'Some quick example text to build on the card title and make up the bulk of the card content. (каталоги полное)', 'images/katalog.jpg'),
(5, 'Листовки', 'Some quick example text to build on the card title and make up the bulk of the card content. (листовки)', 'Some quick example text to build on the card title and make up the bulk of the card content. (листовки полное)', 'images/listovka.jpg'),
(6, 'Открытки', 'Some quick example text to build on the card title and make up the bulk of the card content. (открытки)', 'Some quick example text to build on the card title and make up the bulk of the card content. (открытки полное)', 'images/otkrytka.jpg'),
(7, 'Печать книг', 'Some quick example text to build on the card title and make up the bulk of the card content. (печать книг)', 'Some quick example text to build on the card title and make up the bulk of the card content. (печать книг полное)', 'images/kniga.jpg'),
(8, 'Приглашения', 'Some quick example text to build on the card title and make up the bulk of the card content. (приглашения)', 'Some quick example text to build on the card title and make up the bulk of the card content. (приглашения полное)', 'images/priglashenie.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathername` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `surname`, `name`, `fathername`, `phone_number`, `email`, `password`, `role_id`) VALUES
(1, 'Admin', 'Цыбин', 'Андрей', 'Алексеевич', '89267985742', 'admin@admin.com', '$2y$10$S.s6t4mwCKTRhdkrgfxLn.Bt58MEyUSmy7md8nuLfq8M1a0bRspL.', 2),
(2, 'Иван123', 'Иванов', 'Иван', 'Иванович', '34534534512', 'ivanov@example.com', '$2y$10$joHE.7qjTaWtc9ACaOUtleRMuE0r/g34aOs1orR1m6XYzQGEfCvnC', 1),
(3, 'New user 1', 'Зощенко', 'Александр', 'Степанович', '89005554433', 'zoshchenko1986@yandex.ru', '$2y$10$s.YJsC86NRGHSnE3Aqv/meSG9iitTYc8sXRM.GozGmlmtAB.Eluoi', 1),
(4, 'Anonymo123', 'as', 'a', 'a', '12312345678', 'a@a', '$2y$10$xToYexbmardfut4tYUfFv.Rq6eyiyHVWvUJkXoeJFBzn94bRFAfPS', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users_services`
--

CREATE TABLE `users_services` (
  `id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_services`
--

INSERT INTO `users_services` (`id`, `order_date`, `user_id`, `service_id`) VALUES
(5, '2020-05-19', 2, 4),
(8, '2020-05-19', 3, 1),
(9, '2020-05-19', 3, 5),
(10, '2020-05-19', 3, 2),
(11, '2020-05-19', 2, 5),
(12, '2020-05-19', 2, 4),
(16, '2020-05-19', 2, 6),
(17, '2020-05-20', 2, 8);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Индексы таблицы `users_services`
--
ALTER TABLE `users_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `service_id` (`service_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users_services`
--
ALTER TABLE `users_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_services`
--
ALTER TABLE `users_services`
  ADD CONSTRAINT `users_services_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_services_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
