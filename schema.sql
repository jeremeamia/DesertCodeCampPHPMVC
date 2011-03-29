--
-- Database: `codecamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE IF NOT EXISTS `stories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` char(5) NOT NULL,
  `description` text NOT NULL,
  `points` int(11) unsigned NOT NULL,
  `theme` varchar(15) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
