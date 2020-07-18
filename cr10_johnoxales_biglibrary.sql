-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 02:55
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_johnoxales_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_johnoxales_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_johnoxales_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `all_media`
--

CREATE TABLE `all_media` (
  `all_isbn` int(11) NOT NULL,
  `all_media_type` enum('book','cd','dvd') DEFAULT NULL,
  `all_title` varchar(80) DEFAULT NULL,
  `all_publish_date` date DEFAULT NULL,
  `all_image` varchar(100) DEFAULT NULL,
  `all_synopsis` longtext DEFAULT NULL,
  `all_status` enum('available','reserved') DEFAULT NULL,
  `publisher_size` enum('big','medium','small') DEFAULT NULL,
  `publisher_name` varchar(55) DEFAULT NULL,
  `publisher_address` varchar(100) DEFAULT NULL,
  `author_fName` varchar(55) DEFAULT NULL,
  `author_lName` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `all_media`
--

INSERT INTO `all_media` (`all_isbn`, `all_media_type`, `all_title`, `all_publish_date`, `all_image`, `all_synopsis`, `all_status`, `publisher_size`, `publisher_name`, `publisher_address`, `author_fName`, `author_lName`) VALUES
(1, 'dvd', 'The Matrix 2', '2016-09-03', 'https://cdn.pixabay.com/photo/2017/11/16/09/32/matrix-2953869_960_720.jpg', 'JavaScript lies at the heart of almost every modern web application, from social apps to the newest browser-based games.', 'reserved', 'medium', 'Matrix AG', 'Publisher Street 1', 'Peter Peter', 'Enis'),
(3, 'book', 'Eloquent JavaScript, Second Edition', '2014-10-14', 'https://cdn.pixabay.com/photo/2018/02/23/09/23/binary-3175073_960_720.jpg', 'With Learning JavaScript Design Patterns, you\'ll learn how to write beautiful, structured, and maintainable JavaScript by applying classical and modern design patterns to the language. If you want to keep your code efficient, more manageable, and up-to-date with the latest best practices, this book is for you.', 'available', 'big', 'No Starch Press', 'PubStreet 10', 'Marijn', 'Haverbeke'),
(4, 'book', 'Programming JavaScript Applications', '2014-07-01', 'https://cdn.pixabay.com/photo/2020/06/08/03/11/laptop-5272766_960_720.jpg', 'Like it or not, JavaScript is everywhere these days-from browser to server to mobile-and now you, too, need to learn the language or dive deeper than you have. This concise book guides you into and through JavaScript, written by a veteran programmer who once found himself in the same position.', 'available', 'small', 'Reilly Media', 'Publisher Strada 1023-23', 'Eric', 'Elliott'),
(5, 'book', 'Speaking JavaScript', '2016-09-03', 'https://cdn.pixabay.com/photo/2020/04/14/14/16/digital-art-5042881_960_720.jpg', 'Take advantage of JavaScript\'s power to build robust web-scale or enterprise applications that are easy to extend and maintain. By applying the design patterns outlined in this practical book, experienced JavaScript developers will learn how to write flexible and resilient code that\'s easier-yes, easier-to work with as your code base grows.', 'available', 'big', 'Pocket Guide', 'PStreet 15', 'Axel', 'Rauschmayer'),
(10, 'dvd', 'Do You Do Know JS?', '2015-12-27', 'https://cdn.pixabay.com/photo/2018/05/17/01/28/popart-3407594_960_720.jpg', 'ECMAScript 6 represents the biggest update to the core of JavaScript in the history of the language. In Understanding ECMAScript 6, expert developer Nicholas C. Zakas provides a complete guide to the object types, syntax, and other exciting changes that ECMAScript 6 brings to JavaScript.', 'available', 'medium', 'Crown Publish Ltd', 'Rue publisher 123', 'Kyle', 'Simpson'),
(11, 'book', 'Git Pocket Guide', '2013-08-02', 'https://cdn.pixabay.com/photo/2014/03/26/22/47/volhoofd-299095_960_720.jpg', 'No matter how much experience you have with JavaScript, odds are you don’t fully understand the language. As part of the \"You Don’t Know JS\" series, this compact guide focuses on new features available in ECMAScript 6 (ES6), the latest version of the standard upon which JavaScript is built.', 'available', 'small', 'Harnessing', 'Medil paratu 789-56', 'Richard E.', 'Silverman'),
(12, 'cd', 'Understanding ECMAScript 6', '2016-09-03', 'https://cdn.pixabay.com/photo/2017/11/30/02/59/binary-code-2987483_960_720.jpg', 'Design and build Web APIs for a broad range of clients—including browsers and mobile devices—that can adapt to change over time. This practical, hands-on guide takes you through the theory and tools you need to build evolvable HTTP services with Microsoft’s ASP.NET Web API framework. In the process, you’ll learn how design and implement a real-world Web API.', 'reserved', 'big', 'Starch Press and Sons', 'Crown-str 555', 'Nicholas C.', 'Zakas'),
(13, 'book', 'Robust Web Architecture with Node', '2020-01-01', 'https://cdn.pixabay.com/photo/2020/04/20/10/52/code-5067826_960_720.jpg', 'JavaScript lies at the heart of almost every modern web application, from social apps to the newest browser-based games.', 'reserved', 'big', 'Modern JS Libraries', 'Mock-up str 24', 'Axel', 'Elliott'),
(14, 'dvd', 'Power to build robust web-scale', '2015-12-27', 'https://cdn.pixabay.com/photo/2020/04/14/19/13/infected-5043969_960_720.jpg', 'Though simple for beginners to pick up and play with, JavaScript is a flexible, complex language that you can use to build full-scale applications.', 'available', 'medium', 'English Pub', 'Block du prat 14563', 'John', 'Stockton'),
(15, 'book', 'Mickey, Donald & Co.', '1950-03-09', 'https://cdn.pixabay.com/photo/2020/04/13/18/10/vape-5039608_960_720.jpg', 'This concise book guides you into and through JavaScript, written by a veteran programmer who once found himself in the same position.', 'available', 'small', 'Walt Disney', 'Holly Rd W 123', 'Walter', 'Herold');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `fk_ISBN` int(11) DEFAULT NULL,
  `fk_publisher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `ISBN` int(11) NOT NULL,
  `media_type` enum('book','cd','dvd') DEFAULT NULL,
  `title` varchar(55) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `synopsis` blob DEFAULT NULL,
  `media_status` enum('available','reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `company_size` enum('big','medium','large') DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `all_media`
--
ALTER TABLE `all_media`
  ADD PRIMARY KEY (`all_isbn`);

--
-- Indizes für die Tabelle `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `all_media`
--
ALTER TABLE `all_media`
  MODIFY `all_isbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT für Tabelle `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `ISBN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
