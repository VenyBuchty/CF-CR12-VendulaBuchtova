-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 08. Mai 2021 um 13:28
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr12_mount_everest_VendulaBuchtova`
--
CREATE DATABASE IF NOT EXISTS `cr12_mount_everest_VendulaBuchtova` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr12_mount_everest_VendulaBuchtova`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `dateStart` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  `moreInfo` text DEFAULT NULL,
  `picture` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `offers`
--

INSERT INTO `offers` (`id`, `locationName`, `price`, `description`, `longitude`, `latitude`, `dateStart`, `dateEnd`, `moreInfo`, `picture`) VALUES
(1, 'Moscow', '120.00', 'Theaters, museums, and historic sites highlight some notable features of Moscow City Centre.', '37.61842300', '55.75124400', '2021-06-04', '2021-06-12', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus rhoncus. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Cras elementum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Fusce wisi. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Fusce tellus. Morbi leo mi, nonummy eget tristique non, rhoncus non leo.', 'https://cdn.turkishairlines.com/m/3c10acf9daab18e6/original/Travel-Guide-of-Moscow-via-Turkish-Airlines.jpg'),
(2, 'Prague', '110.00', 'The capital and largest city of the Czech Republic, Prague is known for its rich history and culture', '14.41854000', '50.07365800', '2021-07-01', '2021-07-04', 'Fusce tellus. Vivamus luctus egestas leo. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Nulla non arcu lacinia neque faucibus fringilla. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Curabitur bibendum justo non orci. Integer pellentesque quam vel velit. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Aliquam erat volutpat.', 'https://images.pexels.com/photos/126292/pexels-photo-126292.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(3, 'Barcelona', '150.00', 'There\'s nothing like a Barcelona holiday to give yourself a little boost.', '2.15400700', '41.39020500', '2021-06-21', '2021-06-28', 'Nulla est. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Ut tempus purus at lorem. Praesent in mauris eu tortor porttitor accumsan. Suspendisse sagittis ultrices augue. Nunc auctor. Duis risus. Proin mattis lacinia justo. Praesent in mauris eu tortor porttitor accumsan.', 'https://www.voucherwonderland.com/reisemagazin/wp-content/uploads/2018/04/Barcelona-Sehenswürdigkeiten.jpeg'),
(4, 'Rome', '165.00', 'Rome, the “Eternal City,” brims with ancient history, from the Colosseum to the port of Ostia Antica to majestic Vatican City and the Sistine Chapel. ', '12.49636600', '41.90278200', '2021-09-08', '2021-09-12', 'Integer tempor. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Quisque tincidunt scelerisque libero. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Nunc tincidunt ante vitae massa.', 'https://images.pexels.com/photos/753639/pexels-photo-753639.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(5, 'Bucharest', '90.00', 'Bucharest is a charming city with magnificent buildings, wide boulevards and lots of stories waiting to be discovered.', '26.09630600', '44.43966300', '2021-08-29', '2021-09-04', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Duis viverra diam non justo. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Etiam neque. Fusce suscipit libero eget elit. In sem justo, commodo ut, suscipit at, pharetra vitae, orci.', 'https://thenomadvisor.com/wp-content/uploads/2019/03/wheretostayinbucharest.jpg'),
(6, 'Bratislava', '99.00', 'Bratislava belongs to the youngest capitals in Europe, it has the rich history tracing to the age of 2000 ago.', '17.10774800', '48.14859800', '2021-07-18', '2021-07-28', 'Morbi scelerisque luctus velit. Sed ac dolor sit amet purus malesuada congue. Fusce nibh. Mauris dictum facilisis augue. Ut tempus purus at lorem. Praesent in mauris eu tortor porttitor accumsan. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Duis risus. ', 'https://images.pexels.com/photos/280173/pexels-photo-280173.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
