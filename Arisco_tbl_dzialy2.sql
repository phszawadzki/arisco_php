-- --------------------------------------------------------
-- Host:                         localhost
-- Wersja serwera:               5.0.51a-24+lenny5-log - (Debian)
-- Serwer OS:                    debian-linux-gnu
-- HeidiSQL Wersja:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Zrzut struktury tabela newarisco.dzialy
CREATE TABLE IF NOT EXISTS `dzialy` (
  `d_id` bigint(20) NOT NULL auto_increment,
  `d_id_parent` bigint(20) NOT NULL default '0',
  `d_typ` enum('M','I','P','S') NOT NULL default 'M',
  `d_nazwa` text NOT NULL,
  `d_link` varchar(255) NOT NULL default '',
  `d_class` varchar(255) NOT NULL,
  `d_last` enum('N','Y') NOT NULL default 'N',
  `d_kolejnosc` bigint(20) default NULL,
  `d_aktywny` enum('Y','N') NOT NULL default 'N',
  `d_data_utworzenia` varchar(10) NOT NULL default '--.--.----',
  `d_data_modyfikacji` varchar(10) NOT NULL default '--.--.----',
  PRIMARY KEY  (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin2;

-- Zrzucanie danych dla tabeli newarisco.dzialy: 10 rows
/*!40000 ALTER TABLE `dzialy` DISABLE KEYS */;
INSERT INTO `dzialy` (`d_id`, `d_id_parent`, `d_typ`, `d_nazwa`, `d_link`, `d_class`, `d_last`, `d_kolejnosc`, `d_aktywny`, `d_data_utworzenia`, `d_data_modyfikacji`) VALUES
	(90, 0, 'M', 'pozostale elementy', 'pozostale', '', 'N', 1, 'Y', '09.07.2008', '10.07.2008'),
	(76, 0, 'M', 'główne', 'main', '', 'N', 0, 'Y', '04.02.2008', '10.07.2008'),
	(101, 76, 'P', 'Oferta', 'oferta', 'oferta', 'N', 102, 'Y', '16.09.2008', '--.--.----'),
	(102, 76, 'M', 'Pomoc techniczna', 'pomoc', 'pomoc', 'N', 103, 'Y', '16.09.2008', '--.--.----'),
	(103, 76, 'S', 'Szkolenia', 'szkolenia', 'szkolenia', 'N', 104, 'Y', '16.09.2008', '16.09.2008'),
	(100, 76, 'M', 'Aktualności', 'aktualnosci', 'aktualnosci', 'N', 100, 'Y', '16.09.2008', '--.--.----'),
	(104, 76, 'M', 'Strona główna', '', 'glowna', 'N', 101, 'Y', '16.09.2008', '16.09.2008'),
	(94, 90, 'M', 'Menu górne', 'inne', '', 'N', 91, 'Y', '10.07.2008', '10.07.2008'),
	(105, 90, 'M', 'Pozostałe treści', 'other', '', 'N', NULL, 'N', '--.--.----', '--.--.----'),
	(106, 90, 'M', 'Informacje dla użytkowników programów', 'info_prog', '', 'N', NULL, 'Y', '--.--.----', '--.--.----');
/*!40000 ALTER TABLE `dzialy` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
