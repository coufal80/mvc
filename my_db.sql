-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 09. kvě 2023, 09:48
-- Verze serveru: 10.4.24-MariaDB
-- Verze PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `my_db`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `first_name` varchar(20) COLLATE utf8mb4_czech_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8mb4_czech_ci NOT NULL,
  `date` datetime NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_czech_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_czech_ci NOT NULL,
  `zip` varchar(20) COLLATE utf8mb4_czech_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `date`, `phone`, `address`, `zip`, `admin`) VALUES
(1, 'email@email.eml', '123', '', '', '0000-00-00 00:00:00', '', '', '', 0),
(2, 'tutu@tutu.tut', 'tutu', '', '', '0000-00-00 00:00:00', '', '', '', 0),
(3, 'admin@admin.cz', 'admin', '', '', '0000-00-00 00:00:00', '', '', '', 1),
(4, 'pokus@pokus.com', '', 'Pokus', 'Pokuston', '0000-00-00 00:00:00', '+420111222333', 'Nemá 1, Nevím', '44332', 0),
(5, 'pokus@pokus.com', '', 'Pokus', 'Pokuston', '0000-00-00 00:00:00', '', '', '', 0),
(6, 'mutul@tutul.tut', '', 'Mutulu', 'Tutulu', '0000-00-00 00:00:00', '777555333', 'Tutulová 23, Jupin', '444 44', 0),
(7, 'pokus@pokus.com', '', 'Pokus', 'Pokuston', '0000-00-00 00:00:00', '+420111222333', 'Nemá 1, Nevím', '44332', 0);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
