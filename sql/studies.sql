-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Gru 2017, 13:35
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `studies`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `backoffice`
--

CREATE TABLE `backoffice` (
  `idd` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `passw` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `backoffice`
--

INSERT INTO `backoffice` (`idd`, `user`, `passw`) VALUES
(1, 'admin', '$2y$10$VUNR.nFFbJ2eVaAkJw4fKORtGNir0V5nFiv5Wwnk3Eq1bw/4Q9qXK');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `surname` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `city` text COLLATE utf8_polish_ci NOT NULL,
  `street` text COLLATE utf8_polish_ci NOT NULL,
  `no_house` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `no_premises` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `postal_code` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `telephone` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `e_mail` text COLLATE utf8_polish_ci NOT NULL,
  `high_school` text COLLATE utf8_polish_ci NOT NULL,
  `amount_of_points` int(11) NOT NULL,
  `field_of_study` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci ROW_FORMAT=DYNAMIC;

--
-- Zrzut danych tabeli `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `surname`, `pass`, `date_of_birth`, `city`, `street`, `no_house`, `no_premises`, `postal_code`, `telephone`, `e_mail`, `high_school`, `amount_of_points`, `field_of_study`) VALUES
(16, 'dfsfds', 'fsfsf', '$2y$10$DIwBQfc4DBxhOMR8I1HuHuXvfcTRYQfkvDPwe3i0VoPEApltt3.E.', '2017-11-04', 'łąłąłą', 'ąłłąłąłą', '23', '23', '44-444', '444-444-444', 'aaaaaaaad@wp.pl', 'łąłą', 23, 'Informatyka'),
(20, 'dfsfds', 'fsfsf', '$2y$10$oYHAsoRP1vtylt5gDoPMWOvSbLV61KdmLQ59yZOeKWhB7/DX9u3le', '2017-11-04', 'łąłąłą', 'ąłąłąłą', '23', '23', '44-444', '444-444-444', 'a4444d@wp.pl', 'dsfsfsf', 23, 'Informatyka'),
(24, 'sddsf', 'sdfdsf', '$2y$10$tXD6G0ZqESG4xbM9Zk1IKeioNoYYy7K6LKIb3QTYN6iZmLmLz2SAa', '2017-12-02', 'dfgdfg', 'fdgdgfd', '23', '23', '44-444', '444-444-444', 'sddssd@wp.pl', 'sdsf fsdsfsfs', 44, 'Matematyka'),
(27, 'sad asdasd', 'sadasdasd', '$2y$10$dZK82G64mpoes.90lPETSel0TR7rJGUBJWvjzFyMwX3EB8FojFpye', '2017-12-02', 'sfd sdf', 'dsfsf', '33', '23', '44-444', '444-444-444', 'asa@wp.pl', 'sf sf sf sf', 23, 'Zarządzanie projektami'),
(28, 'Dominik', 'sdfdsf', '$2y$10$uQ2WUsrtlfJu6zbKUN4Bpu6LWexJcmWNtVCGazdEG6aL9kiIIawyS', '2017-12-03', 'we c', 'sdf ', '2', 'd', '44-444', '444-444-444', 'qqq@wp.pl', 'sf sf sf', 23, 'Zarządzanie'),
(29, 'Mirek', 'Nowak', '$2y$10$1c3R7KgfCTC3Ynda5fWm.e33NpXk9CnnGXkTcNApv0LZKBQsWiCVa', '2017-12-01', 'kraków', 'wąska', '2', '4', '30-811', '543-222-222', 'mi@wp.pl', 'ZSE nr 1 kraków', 55, 'Elektronika'),
(30, 'askdjkajk', 'jkdksjfk', '$2y$10$rnmjnjSSEivH/MEziRCa1e2CdXj6.xMT99izIME2ltATkvNU8d9/6', '2017-12-02', 'sfds', 'sfds', '23', '23', '44-444', '444-444-444', 'ss@wp.pl', 'dsfk knfk k sf ', 23, 'Zarządzanie'),
(31, 'fsj', 'jsdkfj', '$2y$10$Dmw.Ie2otI0S6IOXbHxJN.L7U4GEdcEz64or74oPRB4Yog/EpS9OK', '2017-12-09', 'sdf', 'sdf', '32', '32', '44-444', '444-444-444', 'dd@wp.pl', 'sf sfs dsd', 32, 'Matematyka'),
(32, 'sfds', 'fdsf', '$2y$10$Qrwne4TCWPEp.tTbOTiBsOwYlmK905zQQtaa.3BsIPGDEWL072rQG', '2017-12-02', 'sdfsf', 'sdfs', '32', '23', '44-444', '444-444-444', 'qq@wp.pl', 'sfd sd  fsf', 32, 'Elektrotechnika');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `backoffice`
--
ALTER TABLE `backoffice`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `backoffice`
--
ALTER TABLE `backoffice`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
