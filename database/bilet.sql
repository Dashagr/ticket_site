-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 20 2017 г., 22:02
-- Версия сервера: 5.5.53
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bilet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Artist`
--

CREATE TABLE `Artist` (
  `artist_name` varchar(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `processing` varchar(20) DEFAULT NULL,
  `translation` varchar(20) DEFAULT NULL,
  `album_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Artist`
--

INSERT INTO `Artist` (`artist_name`, `image`, `processing`, `translation`, `album_title`) VALUES
('30 Seconds To Mars', NULL, 'Hans Zemmer', 'Григорій Сковорода', 'Hurricane'),
('Arctic Monkeys', 'actic.jpg', NULL, NULL, 'Humbug'),
('Beyoncé', NULL, '', 'Andrew Gomenyuk', 'Lemonade'),
('Depeche Mode', NULL, NULL, NULL, 'Spirit'),
('Evanescence', NULL, NULL, NULL, 'Together again'),
('Marilyn Manson', NULL, NULL, NULL, 'Pale Emperor'),
('Скрябін', NULL, NULL, NULL, 'Дякую люди…');

-- --------------------------------------------------------

--
-- Структура таблицы `Artist_On_Event`
--

CREATE TABLE `Artist_On_Event` (
  `artist_name` varchar(20) NOT NULL,
  `event_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Artist_On_Event`
--

INSERT INTO `Artist_On_Event` (`artist_name`, `event_code`) VALUES
('Arctic Monkeys', 1),
('Depeche Mode', 1),
('Evanescence', 1),
('Скрябін', 1),
('Arctic Monkeys', 2),
('Depeche Mode', 2),
('30 Seconds To Mars', 3),
('Arctic Monkeys', 3),
('Depeche Mode', 3),
('Evanescence', 3),
('Marilyn Manson', 3),
('Arctic Monkeys', 4),
('Depeche Mode', 4),
('Evanescence', 4),
('Marilyn Manson', 4),
('Arctic Monkeys', 5),
('Depeche Mode', 5),
('Marilyn Manson', 5),
('Скрябін', 5),
('Arctic Monkeys', 6),
('Depeche Mode', 6),
('Arctic Monkeys', 7),
('Depeche Mode', 7),
('Arctic Monkeys', 8),
('Depeche Mode', 8),
('Evanescence', 17),
('Arctic Monkeys', 18),
('30 Seconds To Mars', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `Buyer`
--

CREATE TABLE `Buyer` (
  `buyer_phone` varchar(13) NOT NULL,
  `buyer_surname` varchar(20) NOT NULL,
  `buyer_name` varchar(20) NOT NULL,
  `buyer_sec_name` varchar(20) DEFAULT NULL,
  `buyer_email` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Buyer`
--

INSERT INTO `Buyer` (`buyer_phone`, `buyer_surname`, `buyer_name`, `buyer_sec_name`, `buyer_email`, `status`, `login`, `password`) VALUES
('380971232211', 'Пруднікова', 'Ірина', NULL, NULL, 0, 'ira', '$2y$10$ZHXiVXSNxHRalY3Xz6sWa.NaRwOBBubY8A5tv4wrYznzbyuca9MiG'),
('380971232212', 'Бахмат', 'Олександра', NULL, NULL, 0, 'sasha', '$2y$10$JO2Pu.NMqLkVvbA1/KP7J.Yzw9EUktg8P.lbZO1uda8E/xTzX.cHe'),
('380971232213', 'Соколов', 'Владислав', NULL, NULL, 0, 'vlad', '$2y$10$Q9Pf2wBkTKui/m8mcg1rgecAXeH5D/7EOwlhNXW2USybo/.cmxxh.'),
('380971232214', 'Кротенко', 'Олександр', NULL, 'krot@gmail.com', 0, 'krot', '$2y$10$wJypS7WNbYvVIaExtM3sEuOcJrk3G4AvYXY3v6Qjnao/wR.p1J44K'),
('380971232215', 'Ошовський', 'Богдан', NULL, NULL, 0, 'bogdan', '$2y$10$/mjOmxTC0aa7T8.ASCg7DOLWl6fgDKlYddLBAK/alJRhBPOnb3wu6'),
('380971232216', 'Грушка', 'Оксана', '', 'ksiushka505@gmail.co', 0, 'ksiushka505', '$2y$10$7R9u/gCiyHhXPU.vobGNUOlXFMK20NwkwDxqLnnXXRuR4sKq0qYMu'),
('380971232218', 'Жиркова', 'Анастасія', '', 'nastiazh@gmail.com', 0, 'nastiazh', '$2y$10$PsIIVDFsMEL2Hetw/Hq.7ezkgp9BEAFra6QuFztcOiaaeXLOb0h5a'),
('380971232219', 'Скупа', 'Тетяна', '', 'tanya@gmail.com', 0, 'tanya', '$2y$10$XHbhC/13UDMMH223r02/A.NIIt3qrKQYJ27/0UQ6h0Hw3llDBAdPu'),
('380971232220', 'Гавриш', 'Анастасія', '', '', 0, 'ana', '$2y$10$7U0zB/GCZoLJU9EwrxmDJeV3HmjaznaXnDo1Q8LCtDnux22ej3rU2'),
('380971232221', 'Романенко', 'Софія', '', '', 0, 'son', '$2y$10$CXz1G6la2nW0tf/bbZl3e.44hzzOMaT8tDaWQwfLMdTGARAlKxL8i'),
('380971232222', 'Тищенко', 'Олександр', 'Олександрович', '', 0, 'alex', '$2y$10$DAtJjZcvT6MG6ijFbqM3h.ipvxnYcCaevlKWato4yFAO/AbBDvju.'),
('680668780', 'Единорог', '0680668780', 'NULL', 'dasha.g1917@gmail.co', 0, 'SELECT`login` FROM `Buyer`', '$2y$10$zd9jGxjCRAQLMuUEJAaBr.avEy5BuVwpW8OkSq1Dxz3LbymWQqmEa'),
('6806687806', 'Единорог', '0680668780', '0680668780', 'dasha.g1917@gmail.co', 0, 'SELECT`login` FROM `Buyer`', '$2y$10$3tOEWT9e7A/dZ56iENsCVOjrVZQEoATNa10A2w0Gfq0O6hIhaMMau'),
('85439', 'GJG', 'GJHGJH', 'HJBJHBJ', 'BHVJ', 0, 'SDFDX', '$2y$10$OUQ07/MtEBMVLEjSFxSnqO2skIgPMhU8EubWoAirqZvX38BDA70hW');

-- --------------------------------------------------------

--
-- Структура таблицы `Courier`
--

CREATE TABLE `Courier` (
  `bank_details_courier` varchar(16) NOT NULL,
  `courier_name` varchar(20) NOT NULL,
  `courier_sec_name` varchar(20) NOT NULL,
  `courier_surname` varchar(20) NOT NULL,
  `courier_email` varchar(20) DEFAULT NULL,
  `courier_city` varchar(20) NOT NULL,
  `courier_street` varchar(20) NOT NULL,
  `courier_house_num` int(11) NOT NULL,
  `courier_num_of_flat` int(11) DEFAULT NULL,
  `date_of_courier enlistment` date NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `courier_bday` date NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Courier`
--

INSERT INTO `Courier` (`bank_details_courier`, `courier_name`, `courier_sec_name`, `courier_surname`, `courier_email`, `courier_city`, `courier_street`, `courier_house_num`, `courier_num_of_flat`, `date_of_courier enlistment`, `salary`, `courier_bday`, `login`, `password`) VALUES
('$bank_details', '$name', '$sec_name', '$surname', '$email', '$city', '$street', 0, 0, '0000-00-00', '0', '0000-00-00', '$login', '$hash'),
('6666777788889999', 'Віталій', 'Сергійович', 'Григоров', NULL, 'Київ', 'Бальзака', 12, NULL, '2015-04-12', '1000', '1995-03-12', 'courier1', '$2y$10$pVjLBeYMwh3D7n0C/tST6eV0Pa7PssiwJdRNiXp6RXhXo2CGRIzt.'),
('7777888899990000', 'Олексій', 'Вікторович', 'Бережний', NULL, 'Київ', 'Вишневського', 14, NULL, '2015-05-12', '1000', '1994-05-10', 'courier2', '$2y$10$XifJalRQBgHfzS6x3im/S.VtN2SKgAyvuQbyC94ZV/vSWGV44B75.'),
('8888999900001111', 'Богдан', 'Васильович', 'Волошин', NULL, 'Київ', 'Франка', 16, 45, '2016-03-04', '1000', '1994-08-06', 'courier3', '$2y$10$U.Zgx7kyq4UKDZyNjAn1/up6bzh0QNm6wvscwNLW4CwREoQBSzQ0.'),
('9999000011112222', 'Михайло', 'Михайлович', 'Квітка', NULL, 'Київ', 'Чорнобривцева', 2, NULL, '2016-09-24', '1000', '1993-01-01', 'courier4', '$2y$10$Sr.HjDrpHQNqVPCZlR3Is.Di6MU3khCWFXOM8u7DwfCCLw9NJPsXq');

-- --------------------------------------------------------

--
-- Структура таблицы `Courier_phones`
--

CREATE TABLE `Courier_phones` (
  `bank_details_courier` varchar(16) NOT NULL,
  `courier_ph` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Courier_phones`
--

INSERT INTO `Courier_phones` (`bank_details_courier`, `courier_ph`) VALUES
('6666777788889999', '+380974445566'),
('7777888899990000', '+380974445561'),
('8888999900001111', '+380974445562'),
('9999000011112222', '+380974445563');

-- --------------------------------------------------------

--
-- Структура таблицы `Delivery`
--

CREATE TABLE `Delivery` (
  `delivery_code` int(11) NOT NULL,
  `del_street` varchar(20) NOT NULL,
  `del_num_of_flat` int(11) DEFAULT NULL,
  `del_num_of_building` int(11) NOT NULL,
  `desired_date` date NOT NULL,
  `desired_time` time NOT NULL,
  `delivery_Status` tinyint(1) NOT NULL,
  `bank_details_courier` varchar(16) NOT NULL,
  `account_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Delivery`
--

INSERT INTO `Delivery` (`delivery_code`, `del_street`, `del_num_of_flat`, `del_num_of_building`, `desired_date`, `desired_time`, `delivery_Status`, `bank_details_courier`, `account_number`) VALUES
(1, 'Сковороди', NULL, 4, '2017-03-01', '19:00:00', 1, '6666777788889999', 1),
(2, 'Сковороди', 2, 5, '2017-03-01', '18:00:00', 1, '7777888899990000', 2),
(3, 'Сковороди', NULL, 10, '2017-03-02', '19:00:00', 1, '8888999900001111', 3),
(4, 'Сковороди', 2, 30, '2017-03-02', '19:00:00', 1, '9999000011112222', 4),
(5, 'Сковороди', 1, 20, '2017-03-02', '13:00:00', 1, '6666777788889999', 7),
(6, 'Сковороди', NULL, 4, '2017-03-03', '14:00:00', 1, '9999000011112222', 6),
(7, 'Сковороди', NULL, 112, '2017-03-03', '11:00:00', 0, '6666777788889999', 8),
(8, 'Марини Цветаєвої', 70, 14, '2017-06-12', '16:00:00', 0, '8888999900001111', 9),
(9, 'Сковороди', 12, 110, '0000-00-00', '12:00:00', 1, '7777888899990000', 10),
(11, 'Марини Цветаєвої', 2, 14, '2017-06-21', '16:00:00', 1, '6666777788889999', 35);

-- --------------------------------------------------------

--
-- Структура таблицы `Employee`
--

CREATE TABLE `Employee` (
  `bank_details_empl` varchar(16) NOT NULL,
  `empl_name` varchar(20) NOT NULL,
  `empl_sec_name` varchar(20) DEFAULT NULL,
  `empl_surname` varchar(20) NOT NULL,
  `empl_bday` date NOT NULL,
  `empl_email` varchar(20) DEFAULT NULL,
  `empl_city` varchar(20) NOT NULL,
  `empl_street` varchar(20) NOT NULL,
  `empl_house_num` int(11) NOT NULL,
  `empl_num_of_flat` int(11) DEFAULT NULL,
  `date_of_empl_enlistment` date NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `job` varchar(20) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Employee`
--

INSERT INTO `Employee` (`bank_details_empl`, `empl_name`, `empl_sec_name`, `empl_surname`, `empl_bday`, `empl_email`, `empl_city`, `empl_street`, `empl_house_num`, `empl_num_of_flat`, `date_of_empl_enlistment`, `salary`, `job`, `login`, `password`) VALUES
('1111111122222222', 'Володимир', 'Володимирович', 'Скрипніков', '1948-03-08', 'vova@gmail.com', 'Власівка', 'Робоча', 14, NULL, '2017-05-01', '1350', 'Адміністратор', 'admin', '$2y$10$UIXbRM1x4BDuXQCJgOTXQeSf60r/85aWyekhJjgTX/GGfxFk4YmZu'),
('1111222233334444', 'Павло', 'Олександрович', 'Жирков', '1968-10-09', 'sasha@yahoo.com', 'Київ', 'Парк Миру', 134, NULL, '2015-03-12', '1260', 'Адміністратор', 'empl5', '$2y$10$kiDWZ16BPeUBI8EHxi673uX2YeNUEwhO454EHjqe66arHHGBBi1VS'),
('1234567812345678', 'Віталій', 'Андрійович', 'Единорог', '0000-00-00', 'da7@gmail.com', 'Киев', 'вапро', 2, 12, '2017-06-20', '1260', 'продавець', 'dfjls', '$2y$10$0CbNrQBrW2DuS5RU56BDk.lTLH0zXlGA1UcBAf5Inw32w6rErxws6'),
('2222333344445555', 'Галина', 'Микитівна', 'Скрипнікова', '1952-04-11', 'galina@gmail', 'Київ', 'Шевченко', 14, NULL, '2016-07-15', '1260', 'Продавець', 'empl1', '$2y$10$PCgHuqE4cf7GSgYr5LQ4Renq6JXgmup1VeBN9ZiEIPVqMvoijPrbC'),
('3333444455556666', 'Надія', 'Василівна', 'Радюк', '1998-07-19', 'nad@eer', 'Київ', 'Чкалова', 1, NULL, '2017-02-26', '1260', 'Продавець', 'empl3', '$2y$10$AKVJbhU.jowCb3MZnH0i1u5OPlM55pkCg86isrrIeLZlzGvBj1RHG'),
('4444555566667777', 'Дмитро', 'Олексійович', 'Лисицин', '1995-12-06', 'dim@appl', 'Київ', 'Першотравнева', 7, 4, '2016-07-17', '1260', 'Продавець', 'empl4', '$2y$10$6SBX47j3fsTXK6lL5V9c6esVupkoEaLeGb4WXX9H3ErlAojxW72V6'),
('5555666677778888', 'Сергій', 'Дмитрович', 'Романенко', '1993-08-12', 'ser@jjjf', 'Київ', 'Молодіжна', 145, 2, '2015-04-12', '1260', 'Продавець', 'empl2', '$2y$10$O9Yzv3dGZG5J7/9wiS9tUeMUElEWbpTAKs9wKOtes8EVRytK3S5Yi');

-- --------------------------------------------------------

--
-- Структура таблицы `Employee_phones`
--

CREATE TABLE `Employee_phones` (
  `empl_phone` varchar(13) NOT NULL,
  `bank_details_empl` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Employee_phones`
--

INSERT INTO `Employee_phones` (`empl_phone`, `bank_details_empl`) VALUES
('+380971112233', '1111222233334444'),
('+380964911314', '2222333344445555'),
('+380974443322', '3333444455556666'),
('+380971111345', '4444555566667777'),
('+380964445656', '5555666677778888');

-- --------------------------------------------------------

--
-- Структура таблицы `Event`
--

CREATE TABLE `Event` (
  `event_code` int(11) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `time` time NOT NULL,
  `current_num_tickets` int(11) NOT NULL DEFAULT '0',
  `summary_num_tickets` int(11) NOT NULL,
  `min_price` decimal(10,0) NOT NULL,
  `institution` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Event`
--

INSERT INTO `Event` (`event_code`, `event_name`, `category`, `genre`, `data`, `time`, `current_num_tickets`, `summary_num_tickets`, `min_price`, `institution`) VALUES
(1, 'Atlas Weekend', 'фестиваль', 'мультижанр', '2017-04-21', '19:00:00', 42, 60, '1200', 'ВДНГ'),
(2, 'Файне Місто', 'фестиваль', 'електро-рок', '2017-07-19', '19:45:00', 67, 75, '890', 'НСК Олімпійский'),
(3, 'Концерт Титанів', 'концерт', 'рок', '2017-04-07', '20:00:00', 40, 40, '150', 'Atlas'),
(4, 'BigFest', 'фестиваль', 'інді-рок', '2017-05-23', '23:00:00', 60, 60, '1235', 'Stereo Plaza'),
(5, 'Благодійний концерт', 'концерт', 'альтернативна', '2017-04-17', '18:20:00', 0, 45, '300', 'Caribbean Club'),
(6, '30 Second to Mars Wo', 'концерт', 'альтернативний рок', '2017-06-05', '19:00:00', 100, 120, '1700', 'НСК Олімпійский'),
(7, 'My concert', 'концерт', 'альтернативний рок', '2017-05-05', '19:00:00', 80, 120, '1800', 'НСК Олімпійский'),
(8, 'Лекція', 'концерт', 'урок', '2017-06-05', '18:00:00', 100, 100, '50', 'НСК Олімпійский'),
(9, 'Караван музики', 'концерт', 'альтернативний рок', '2017-06-05', '19:00:00', 100, 120, '1700', 'Atlas'),
(10, 'dfgh', 'wesdrgtf', 'awszedxfcg', '2017-06-05', '19:00:00', 100, 120, '50', 'Atlas'),
(11, 'Караван музики', 'концерт', 'альтернативний рок', '2017-06-05', '19:00:00', 100, 120, '1700', 'Atlas'),
(12, '30 Second to Mars Wo', 'концерт', 'альтернативний рок', '2017-05-05', '18:00:00', 80, 120, '1700', 'Atlas'),
(13, '30 Second to Mars Wo', 'концерт', 'альтернативний рок', '2016-05-05', '18:00:00', 80, 120, '1700', 'Atlas'),
(17, '30 Second to Mars Wo', 'wesdrgtf', 'awszedxfcg', '2017-06-05', '19:00:00', 100, 120, '1700', 'ВДНГ'),
(18, '30 Second to Mars Wo', 'концерт', 'рок', '2017-06-05', '19:00:00', 80, 120, '1700', 'Stereo Plaza'),
(19, 'Лекція', 'концерт', 'урок', '2017-06-21', '19:00:00', 100, 100, '50', 'Stereo Plaza'),
(20, 'Лекція', 'концерт', 'урок', '2017-06-21', '19:00:00', 100, 100, '50', 'Stereo Plaza');

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `account_number` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `order_status` varchar(1) NOT NULL,
  `buyer_phone` varchar(13) NOT NULL,
  `bank_details_empl` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `Orders` (`account_number`, `purchase_date`, `discount`, `total_price`, `order_status`, `buyer_phone`, `bank_details_empl`) VALUES
(1, '2017-03-01', 0, '1200', 'в', '380971232211', '1111222233334444'),
(2, '2017-03-01', NULL, '400', 'в', '380971232212', '2222333344445555'),
(3, '2017-03-02', NULL, '100', 'в', '380971232213', '3333444455556666'),
(4, '2017-03-03', NULL, '25', 'в', '380971232214', '4444555566667777'),
(5, '2017-03-04', NULL, '500', 'в', '380971232215', '5555666677778888'),
(6, '2017-03-04', NULL, '2300', 'в', '380971232214', '4444555566667777'),
(7, '2017-03-05', NULL, '1200', 'в', '380971232211', '1111222233334444'),
(8, '2017-03-05', NULL, '2000', 'в', '380971232212', '2222333344445555'),
(9, '2017-06-12', 0, '1000', 'з', '380971232211', '5555666677778888'),
(10, '2017-05-12', 0, '1000', 'в', '380971232211', '1111222233334444'),
(16, '2017-06-19', 0, '24000', 'в', '380971232216', '1111111122222222'),
(17, '2017-06-19', 0, '2400', 'в', '380971232216', '1111111122222222'),
(18, '2017-06-19', 0, '16800', 'в', '380971232216', '1111111122222222'),
(19, '2017-06-19', 5, '19950', 'в', '380971232216', '1111111122222222'),
(20, '2017-06-20', 5, '9120', 'в', '380971232216', '1111111122222222'),
(21, '2017-06-20', 0, '9600', 'в', '380971232216', '1111111122222222'),
(22, '2017-06-20', 0, '2400', 'в', '380971232220', '1111111122222222'),
(23, '2017-06-20', 0, '16800', 'в', '380971232220', '1111111122222222'),
(24, '2017-06-20', 5, '15960', 'в', '380971232220', '1111111122222222'),
(25, '2017-06-20', 5, '1140', 'в', '380971232220', '1111111122222222'),
(26, '2017-06-20', 0, '0', '', '380971232220', '1111111122222222'),
(27, '2017-06-20', 5, '1140', 'в', '380971232211', '1111111122222222'),
(28, '2017-06-20', 0, '1200', 'в', '380971232211', '1111111122222222'),
(34, '2017-06-20', 0, '2400', 'в', '380971232214', '1111111122222222'),
(35, '2017-06-20', 0, '600', 'в', '380971232214', '1111111122222222'),
(36, '2017-06-20', 0, '600', 'р', '380971232214', '1111111122222222'),
(37, '2017-06-20', 0, '2800', 'в', '380971232214', '1111111122222222'),
(38, '2017-06-20', 0, '22800', 'в', '380971232214', '1111111122222222');

-- --------------------------------------------------------

--
-- Структура таблицы `Ticket`
--

CREATE TABLE `Ticket` (
  `ticket_code` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `zona` int(11) NOT NULL,
  `row` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `event_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Ticket`
--

INSERT INTO `Ticket` (`ticket_code`, `price`, `zona`, `row`, `place`, `event_code`) VALUES
(1, '2400', 1, NULL, NULL, 1),
(2, '1200', 2, NULL, NULL, 2),
(3, '1400', 7, 0, 0, 3),
(4, '600', 3, 0, 0, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `Ticket_In_Order`
--

CREATE TABLE `Ticket_In_Order` (
  `account_number` int(11) NOT NULL,
  `ticket_code` int(11) NOT NULL,
  `quantity_of_tickets` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Ticket_In_Order`
--

INSERT INTO `Ticket_In_Order` (`account_number`, `ticket_code`, `quantity_of_tickets`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 1),
(5, 1, 2),
(6, 2, 1),
(7, 2, 1),
(7, 3, 1),
(8, 1, 0),
(8, 4, 1),
(9, 2, 3),
(10, 1, 10),
(16, 1, 12),
(17, 2, 2),
(18, 3, 12),
(19, 3, 15),
(20, 1, 4),
(21, 1, 4),
(22, 1, 1),
(23, 1, 7),
(24, 1, 7),
(25, 2, 1),
(27, 2, 1),
(28, 2, 1),
(34, 1, 1),
(35, 4, 1),
(36, 4, 1),
(37, 3, 2),
(38, 4, 38);

-- --------------------------------------------------------

--
-- Структура таблицы `Venue`
--

CREATE TABLE `Venue` (
  `institution_name` varchar(100) NOT NULL,
  `internal_phone` varchar(13) NOT NULL,
  `authority_sec_name` varchar(20) NOT NULL,
  `authority_name` varchar(20) NOT NULL,
  `authority_surname` varchar(20) NOT NULL,
  `venue_street` varchar(20) NOT NULL,
  `venue_building_num` int(11) NOT NULL,
  `number_of_zones` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Venue`
--

INSERT INTO `Venue` (`institution_name`, `internal_phone`, `authority_sec_name`, `authority_name`, `authority_surname`, `venue_street`, `venue_building_num`, `number_of_zones`, `description`) VALUES
('Atlas', '+380972314112', 'Володимирівна', 'Ольга', 'Харченко', 'Марини Цвєтаєвої', 14, 3, 'Клуб великого розміру, найпопулярніший в Україні з 2015 року'),
('Caribbean Club', '+380542349586', 'Вікторович', 'Євген', 'Сіянко', 'Жовтнева', 142, 4, 'Молодий клуб з антикварними столиками та двома поверхами'),
('Stereo Plaza', '+38099578432', 'Олександрович', 'Тарас', 'Калашнік', 'Олексіївська', 56, 10, 'Чудове місце з приємною атмосферою'),
('ВДНГ', '+380661234567', 'Сергіївна', 'Марія', 'Удалова', 'Леніна', 20, 2, 'Великий майданчик для фестивалів'),
('НСК Олімпійский', '+380678989898', 'Григорівна', 'Анастасія', 'Фалілеєва', 'Ярославів Вал', 5, 1, 'Стадіон для проведення великомасштабних концертів або фестивалів');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Artist`
--
ALTER TABLE `Artist`
  ADD PRIMARY KEY (`artist_name`);

--
-- Индексы таблицы `Artist_On_Event`
--
ALTER TABLE `Artist_On_Event`
  ADD PRIMARY KEY (`artist_name`,`event_code`),
  ADD KEY `event_code` (`event_code`);

--
-- Индексы таблицы `Buyer`
--
ALTER TABLE `Buyer`
  ADD PRIMARY KEY (`buyer_phone`),
  ADD UNIQUE KEY `buyer_phone` (`buyer_phone`);

--
-- Индексы таблицы `Courier`
--
ALTER TABLE `Courier`
  ADD PRIMARY KEY (`bank_details_courier`);

--
-- Индексы таблицы `Courier_phones`
--
ALTER TABLE `Courier_phones`
  ADD PRIMARY KEY (`courier_ph`),
  ADD KEY `bank_details_courier` (`bank_details_courier`);

--
-- Индексы таблицы `Delivery`
--
ALTER TABLE `Delivery`
  ADD PRIMARY KEY (`delivery_code`),
  ADD KEY `bank_details_courier` (`bank_details_courier`),
  ADD KEY `account_number` (`account_number`);

--
-- Индексы таблицы `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`bank_details_empl`);

--
-- Индексы таблицы `Employee_phones`
--
ALTER TABLE `Employee_phones`
  ADD PRIMARY KEY (`empl_phone`),
  ADD KEY `bank_details_empl` (`bank_details_empl`);

--
-- Индексы таблицы `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`event_code`),
  ADD KEY `event_ibfk_1` (`institution`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`account_number`),
  ADD KEY `orders_ibfk_1` (`buyer_phone`),
  ADD KEY `bank_details_empl` (`bank_details_empl`);

--
-- Индексы таблицы `Ticket`
--
ALTER TABLE `Ticket`
  ADD PRIMARY KEY (`ticket_code`),
  ADD KEY `event_code` (`event_code`);

--
-- Индексы таблицы `Ticket_In_Order`
--
ALTER TABLE `Ticket_In_Order`
  ADD PRIMARY KEY (`account_number`,`ticket_code`),
  ADD KEY `ticket_code` (`ticket_code`);

--
-- Индексы таблицы `Venue`
--
ALTER TABLE `Venue`
  ADD PRIMARY KEY (`institution_name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Delivery`
--
ALTER TABLE `Delivery`
  MODIFY `delivery_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `Event`
--
ALTER TABLE `Event`
  MODIFY `event_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `account_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT для таблицы `Ticket`
--
ALTER TABLE `Ticket`
  MODIFY `ticket_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Artist_On_Event`
--
ALTER TABLE `Artist_On_Event`
  ADD CONSTRAINT `artist_on_event_ibfk_1` FOREIGN KEY (`artist_name`) REFERENCES `Artist` (`artist_name`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `artist_on_event_ibfk_2` FOREIGN KEY (`event_code`) REFERENCES `Event` (`event_code`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Courier_phones`
--
ALTER TABLE `Courier_phones`
  ADD CONSTRAINT `courier_phones_ibfk_1` FOREIGN KEY (`bank_details_courier`) REFERENCES `Courier` (`bank_details_courier`);

--
-- Ограничения внешнего ключа таблицы `Delivery`
--
ALTER TABLE `Delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`bank_details_courier`) REFERENCES `Courier` (`bank_details_courier`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`account_number`) REFERENCES `Orders` (`account_number`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Employee_phones`
--
ALTER TABLE `Employee_phones`
  ADD CONSTRAINT `employee_phones_ibfk_1` FOREIGN KEY (`bank_details_empl`) REFERENCES `Employee` (`bank_details_empl`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`institution`) REFERENCES `Venue` (`institution_name`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`buyer_phone`) REFERENCES `Buyer` (`buyer_phone`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`bank_details_empl`) REFERENCES `Employee` (`bank_details_empl`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Ticket`
--
ALTER TABLE `Ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`event_code`) REFERENCES `Event` (`event_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Ticket_In_Order`
--
ALTER TABLE `Ticket_In_Order`
  ADD CONSTRAINT `ticket_in_order_ibfk_1` FOREIGN KEY (`account_number`) REFERENCES `Orders` (`account_number`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_in_order_ibfk_2` FOREIGN KEY (`ticket_code`) REFERENCES `Ticket` (`ticket_code`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
