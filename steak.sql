-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 04.Dec 2022, 20:30
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `steak`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `chefs`
--

CREATE TABLE `chefs` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `chefs`
--

INSERT INTO `chefs` (`id`, `image`, `name`, `position`) VALUES
(1, 'images/chef1.jpg', 'Andre Rush', 'CEO'),
(2, 'images/chef2.jpg', 'Jozef Kuchár', 'Šéf kuchár'),
(3, 'images/chef3.jpg', 'Anna Martinská', 'Kuchárka');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `class` varchar(20) COLLATE utf8mb4_slovak_ci NOT NULL,
  `header` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL,
  `text` text COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `features`
--

INSERT INTO `features` (`id`, `class`, `header`, `text`) VALUES
(1, 'fa-cutlery', 'Špeciálne jedlá', 'Ponúkame široký výber exkluzívnych steakov, pizze a burgerov. Príďte a nebudete ľutovať.'),
(2, 'fa-coffee', 'Káva', 'Dajte si pauzu a vychutnajte si vašu obľúbenú kávu u nás v Steak-house v Bratislave. Každý si u nás nájde to svoje.'),
(3, 'fa-bell-o', 'Otváracie hodiny', 'Počas týždňa sme otvorení od 10:00 do 22:00 a cez víkend od 11:00 do 20:00. Po celú dobu sme tu pre Vás.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `food_menu`
--

CREATE TABLE `food_menu` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL,
  `text` text COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `food_menu`
--

INSERT INTO `food_menu` (`id`, `image`, `price`, `name`, `text`) VALUES
(1, 'images/flank-steak.jpg', 20, 'Flank Steak', '250g'),
(2, 'images/gallery-img1.jpg', 22, 'Rib Eye Steak', '300g'),
(3, 'images/pizza-hawai.jpg', 7, 'Pizza Hawai', '450g'),
(5, 'images/pizza-quattro.jpg', 7, 'Pizza Quattro formaggi', '500g'),
(6, 'images/beef-burger.jpg', 5, 'Beef Burger', '380g'),
(8, 'images/cheeseburger.jpg', 6, 'Cheeseburger', '400g');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `filter` varchar(100) COLLATE utf8mb4_slovak_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_slovak_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `gallery`
--

INSERT INTO `gallery` (`id`, `filter`, `image`, `name`) VALUES
(1, 'breakfast', 'images/gallery-img1.jpg', ''),
(2, 'breakfast', 'images/gallery-img2.jpg', ''),
(3, 'pizza', 'images/gallery-img3.jpg', ''),
(4, 'pizza', 'images/gallery-img4.jpg', ''),
(5, 'lunch', 'images/gallery-img5.jpg', ''),
(6, 'lunch', 'images/gallery-img6.jpg', ''),
(7, 'breakfast', 'images/flank-steak.jpg\r\n', ''),
(8, 'pizza', 'images/pizza-quattro.jpg\r\n', ''),
(9, 'lunch', 'images/cheeseburger.jpg\r\n', '');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `odkaz` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL,
  `polozka` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `odkaz`, `polozka`) VALUES
(1, '#top', 'Domov'),
(2, '#feature', 'Prečo My?'),
(3, '#about', 'O Nás'),
(4, '#menu', 'Menu'),
(5, '#team', 'Tím'),
(6, '#gallery', 'Galéria'),
(7, '#contact', 'Kontakt');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_slovak_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'simon', 'heslo');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pre tabuľku `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
