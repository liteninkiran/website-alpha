SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

DROP DATABASE `portal`;

CREATE DATABASE portal;
USE portal;
-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE IF NOT EXISTS `ci_session`
(
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('af56bfb724a535cf9c09d560d6303f59dcb3393a', '::1', 1448803411, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434383830333332363b757365725f69647c733a323a223138223b757365726e616d657c733a343a227269636f223b6c6f676765645f696e7c623a313b6c6f67696e5f737563636573737c733a32313a22596f7520617265206e6f77206c6f6767656420696e223b5f5f63695f766172737c613a313a7b733a31333a226c6f67696e5f73756363657373223b733a333a226f6c64223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user`
(
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_user` int NOT NULL,
  `change_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `change_user` int NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `create_date`, `create_user`, `change_date`, `change_user`) VALUES
(18, 'rico', '123', 'Edwin', 'Diaz', 'rico@domain.com', '2015-11-29 13:23:24', 18, '2015-11-29 13:23:24', 18);
-- (18, 'rico', '$2y$12$SGEA7g4H8K4xxBMEWoDLQuQL5m0LVTFHGOd3gHdeh66w/c926Erky', 'Edwin', 'Diaz', 'rico@domain.com', '2015-11-29 13:23:24', 18, '2015-11-29 13:23:24', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_session_timestamp` (`timestamp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user`
ADD UNIQUE (`username`);


ALTER TABLE `user`
ADD UNIQUE (`email`);


ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
