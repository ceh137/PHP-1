-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Дек 15 2020 г., 11:43
-- Версия сервера: 5.7.30
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geekbrains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `more_info` text NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`ID`, `name`, `info`, `more_info`, `img`, `price`, `count`) VALUES
(1, 'Rolls-Royce Phantom', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '1.png', 40000000, 15),
(2, 'Rolls-Royce Ghost', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '2.png', 30000000, 0),
(3, 'Tesla Model 3', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '3.png', 6000000, 0),
(4, 'Ferrari 488', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '4.png', 25000000, 0),
(5, 'Tesla Model S', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '5.png', 9000000, 2),
(6, 'Mercedes GLS', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '6.png', 12000000, 0),
(7, 'Audi A6', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '7.png', 5000000, 0),
(8, 'Bentley Continental GT', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '8.png', 28000000, 0),
(9, 'BMW i8', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '0Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '9.png', 10000000, 0),
(10, 'BMW X5', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '10.png', 7000000, 0),
(11, 'Lexus LC', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '11.png', 8000000, 3),
(12, 'Tesla Model X', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '12.png', 15000000, 1),
(13, 'Ferrari (Concept)', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '13.png', 70000000, 1),
(14, 'Lexus RX', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', 'Vestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla acVestibulum malesuada faucibus lorem sit amet tempus. Praesent convallis est vestibulum lectus aliquam molestie. Vestibulum bibendum sapien vel viverra imperdiet. Aliquam interdum pharetra dui, vitae commodo enim fringilla ac', '14.png', 3000000, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `reports`
--

CREATE TABLE `reports` (
  `ID` int(11) NOT NULL,
  `FIO` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reports`
--

INSERT INTO `reports` (`ID`, `FIO`, `text`, `date`) VALUES
(1, 'Алексей Анатольевич', 'Donec porta sed libero quis rutrum. Nam aliquet consectetur orci id euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam faucibus elit non lectus mollis vulputate. Pellentesque pellentesque ultrices nisl. Duis quis ligula ac sem gravida scelerisque id ac ex. Nullam congue lobortis dictum. Nulla quam nulla, tempor at viverra a, lobortis et sem. Sed ante felis, feugiat nec consequat tempor, sollicitudin vel ipsum.', '2020-12-12 21:00:25'),
(6, 'Арсений', 'Sed et cursus massa. Vestibulum dapibus facilisis leo eu aliquam. Vivamus ac arcu a risus sollicitudin tristique non quis risus. Maecenas feugiat fermentum nulla, sed venenatis nulla lacinia nec. Nam vel diam lobortis, molestie turpis sed, rhoncus ante. Aenean ipsum odio, eleifend eu velit vel, blandit tristique diam. Aliquam commodo purus sit amet tellus tristique venenatis. Proin convallis semper finibus. Praesent lacinia venenatis dignissim. Morbi laoreet risus ut accumsan luctus. Curabitur efficitur laoreet eros et tempor. Nulla porttitor enim felis.\r\n\r\n', '2020-12-12 23:50:33'),
(7, 'Артем', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget posuere ex. Fusce euismod dui vitae turpis vehicula auctor. Pellentesque sagittis, diam et volutpat consequat, eros nisl congue urna, et convallis tellus enim vitae ex. Curabitur ligula ante, convallis non viverra non, laoreet in massa. Nullam vestibulum eu magna nec auctor. Donec nunc urna, sodales in sem gravida, volutpat pulvinar nisi. Duis eget elementum risus, eu posuere risus. Maecenas nulla ex, ultricies at odio at, aliquam consectetur ex. Duis non libero cursus, lobortis purus quis, tristique lacus. Donec magna odio, tincidunt eget porta facilisis, aliquam eget dui. Praesent vulputate risus ante, id faucibus est tincidunt ac. Sed ante est, gravida vitae metus non, vehicula aliquam velit.', '2020-12-12 23:52:50'),
(8, 'Настя', 'Магазин отличный, дайте контакты дизайнера!', '2020-12-13 12:54:24'),
(9, '', '', '2020-12-14 19:36:18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `reports`
--
ALTER TABLE `reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
