-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Mrz 2018 um 13:52
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr14_atra_naseri_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `eventname` varchar(300) CHARACTER SET utf8 NOT NULL,
  `eventImg` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `eventtype` varchar(200) CHARACTER SET utf8 NOT NULL,
  `time_date` date NOT NULL,
  `capacity` int(11) NOT NULL,
  `contact_mail` varchar(200) CHARACTER SET utf8 NOT NULL,
  `contact_phone` int(11) NOT NULL,
  `address` varchar(300) CHARACTER SET utf8 NOT NULL,
  `city` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`event_id`, `eventname`, `eventImg`, `eventtype`, `time_date`, `capacity`, `contact_mail`, `contact_phone`, `address`, `city`, `description`) VALUES
(1, 'summer festival', 'https://www.google.at/imgres?imgurl=https%3A%2F%2Fwww.fuse.tv%2Fimage%2F5875417e92b39b8b0300003e%2F816%2F545%2Fundefined.jpg&imgrefurl=https%3A%2F%2Fwww.fuse.tv%2F2018%2F01%2Fbest-music-festivals-2018&docid=2e5kwK4wI2gxdM&tbnid=bwzgipMpY6N-DM%3A&vet=1&w=816&h=544&bih=735&biw=1517&ved=0ahUKEwj84JHwnd_ZAhUJWRQKHecCDlgQMwg2KAAwAA&iact=c&ictx=1', 'music', '2018-04-13', 300, 'summerfestival@gmail.com', 660122344, 'shÃ¶nnerbrunstrasse 11', 'Wien', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent lupiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'),
(2, 'Opera', 'https://www.google.at/imgres?imgurl=http%3A%2F%2Fwww.operaactual.com%2Fimages%2F0000OPERAACTUAL%2Fhistoria%2F210%2F2.jpg&imgrefurl=http%3A%2F%2Fwww.operaactual.com%2Findex.php%2Fcontenidos%2F82-historia-de-la-opera-cat%2Fhistoria-de-la-opera%2F967-historia-de-la-opera-xvii-la-opera-conquista-rusia&docid=7BTKtMlc87EdTM&tbnid=yFoKT8zj5vDpBM%3A&vet=1&w=1000&h=600&bih=735&biw=1517&ved=0ahUKEwio_LzdoN_ZAhXEPhQKHSYZCpEQxiAIFygF&iact=c&ictx=1', 'theater', '2018-07-18', 200, 'opera@yahoo.com', 67643256, 'Opernring 2, 1010 Wien', 'wien', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent '),
(3, 'Open Screen', 'https://www.google.at/imgres?imgurl=https%3A%2F%2F22867-presscdn-pagely.netdna-ssl.com%2Fwp-content%2Fuploads%2F2012%2F09%2F%25C2%25A9-Simon-Lebrun1.jpg&imgrefurl=https%3A%2F%2Ffreeskier.com%2Fstories%2Fnike-if3-2012-wraps-up-in-montreal-with-sunday-screenings&docid=Cdck-bwd46FzkM&tbnid=efaxdgrkYs2hqM%3A&vet=1&w=900&h=491&bih=735&biw=1517&ved=0ahUKEwiz9s-wot_ZAhUCwBQKHZSHB3gQxiAIEygB&iact=c&ictx=1', 'movie', '2018-07-17', 100, 'openscreen@gmail.com', 6653478, 'Ballhausgasse 5, 8010', 'Graz', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. '),
(4, 'winter sport', 'https://www.google.at/imgres?imgurl=https%3A%2F%2Fimage.jimcdn.com%2Fapp%2Fcms%2Fimage%2Ftransf%2Fdimension%3D1920x400%3Aformat%3Djpg%2Fpath%2Fs488495e8650ad23a%2Fimage%2Fi3b613b7a5e7c6051%2Fversion%2F1439546046%2Fimage.jpg&imgrefurl=https%3A%2F%2Fwww.inbound-services.com%2Fenglish%2Fdestinations%2Fwintersport%2F&docid=b-29pH3nFZC7PM&tbnid=cQ92ml4rMjBqjM%3A&vet=1&w=617&h=400&bih=735&biw=1517&ved=0ahUKEwiq08P9o9_ZAhUEaRQKHYBoDoMQMwhQKBMwEw&iact=c&ictx=1', 'sport', '2018-11-22', 200, 'sportq@yahoo.com', 2345654, 'S?dtiroler Pl. 4, 6020', ' Innsbruck', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. ');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8 NOT NULL,
  `user_mail` varchar(300) CHARACTER SET utf8 NOT NULL,
  `userpass` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_mail`, `userpass`) VALUES
(1, 'alex', 'alex@yahoo.com', '123456');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usermanagment`
--

CREATE TABLE `usermanagment` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `usermanagment`
--

INSERT INTO `usermanagment` (`id`, `username`, `email`, `password`, `active`) VALUES
(1, 'sara', 'sara@yahoo.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', NULL),
(2, 'admin', 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indizes für die Tabelle `usermanagment`
--
ALTER TABLE `usermanagment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `usermanagment`
--
ALTER TABLE `usermanagment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
