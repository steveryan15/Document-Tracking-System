-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 1980 at 08:43 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `villa_dblgu`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_documents_history_log_default`
--

CREATE TABLE IF NOT EXISTS `all_documents_history_log_default` (
  `id` varchar(200) NOT NULL,
  `Document_type` varchar(200) NOT NULL,
  `Document_title` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `Date_Time` varchar(200) NOT NULL,
  `office` varchar(200) NOT NULL,
  `personnel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_documents_history_log_default`
--

INSERT INTO `all_documents_history_log_default` (`id`, `Document_type`, `Document_title`, `Status`, `Date_Time`, `office`, `personnel`) VALUES
('LGU-000072', 'Memorandum Order', 'sa', 'Received', ' 1980/01/01-01:42:42pm', 'Mayor Office', 'Randall N Alaud'),
('LGU-000072', 'Memorandum Order', 'sa', 'Forwarded', ' 2018-08-05 - 08:44:44pm', 'Admin Office', 'Roniel John A Ubalde'),
('LGU-000073', 'Voucher', 'sample', 'Received and Closed', ' 1980/01/01-02:37:07pm', 'Mayor Office', 'Randall N Alaud'),
('LGU-000073', 'Voucher', 'sample', 'Forwarded', ' 1980-01-01 - 02:36:40pm', 'Billing Office', 'Lebron James'),
('LGU-000074', 'Purchase Request/Order', 'sas', 'Declined', ' 1980/01/01-02:40:50pm', 'Billing Office', 'Lebron James'),
('LGU-000074', 'Purchase Request/Order', 'sas', 'Forwarded', ' 1980-01-01 - 02:37:17pm', 'Mayor Office', 'Randall N Alaud'),
('LGU-000075', 'Executive Order', 'sample', 'Received', ' 1980/01/02-01:10:42am', 'Admin Office', 'Roniel John A Ubalde'),
('LGU-000075', 'Executive Order', 'sample', 'Forwarded', '1980-01-02 12:13:57', 'Mayor Office', 'Randall N Alaud');

-- --------------------------------------------------------

--
-- Table structure for table `history_log_default`
--

CREATE TABLE IF NOT EXISTS `history_log_default` (
  `id` varchar(200) NOT NULL,
  `Date_Time` varchar(200) NOT NULL,
  `Office` varchar(200) NOT NULL,
  `Personnel` varchar(200) NOT NULL,
  `Action` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log_default`
--

INSERT INTO `history_log_default` (`id`, `Date_Time`, `Office`, `Personnel`, `Action`) VALUES
('LGU-000072', ' 1980/01/01-01:42:42pm', 'Mayor Office', 'Randall N Alaud', 'Received'),
('LGU-000072', ' 2018-08-05 - 08:44:44pm', 'Admin Office', 'Roniel John A Ubalde', 'Forwarded'),
('LGU-000073', ' 1980/01/01-02:37:07pm', 'Mayor Office', 'Randall N Alaud', 'Received and Closed'),
('LGU-000073', ' 1980/01/01-02:37:07pm', 'Billing Office', 'Lebron James', 'Forwarded'),
('LGU-000074', ' 1980/01/01-02:40:50pm', 'Billing Office', 'Lebron James', 'Declined'),
('LGU-000074', ' 1980-01-01 - 02:37:17pm', 'Mayor Office', 'Randall N Alaud', 'Forwarded'),
('LGU-000075', ' 1980/01/02-01:10:42am', 'Admin Office', 'Roniel John A Ubalde', 'Received'),
('LGU-000075', '1980-01-02 12:13:57', 'Mayor Office', 'Randall N Alaud', 'Forwarded');

-- --------------------------------------------------------

--
-- Table structure for table `message_box`
--

CREATE TABLE IF NOT EXISTS `message_box` (
  `id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `sender` varchar(200) NOT NULL,
  `senders_office` varchar(200) NOT NULL,
  `receiver` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `Date_sent` varchar(200) NOT NULL,
  `notify` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `message_box`
--

INSERT INTO `message_box` (`id`, `sender`, `senders_office`, `receiver`, `comment`, `Date_sent`, `notify`) VALUES
(000009, 'Randall N Alaud', 'Mayor Office', 'Roniel John A Ubalde', 'h', ' 2018-08-05 - 06:51:39am', 0),
(000010, 'Roniel John A Ubalde', 'Admin Office', 'Randall N Alaud', 'dsd', ' 2018-08-06 - 06:50:12am', 1),
(000015, 'Lebron James', 'Billing Office', 'Randall N Alaud', 'ssas', ' 1980-01-01 - 03:49:36am', 1),
(000016, 'Lebron James', 'Billing Office', 'Randall N Alaud', 'x', ' 1980-01-01 - 04:02:46am', 1),
(000017, 'Lebron James', 'Billing Office', 'Randall N Alaud', 'sa', ' 1980-01-01 - 04:04:18am', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message_box_convo`
--

CREATE TABLE IF NOT EXISTS `message_box_convo` (
  `id` varchar(200) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `senders_office` varchar(200) NOT NULL,
  `receiver` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `Date_sent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_box_convo`
--

INSERT INTO `message_box_convo` (`id`, `sender`, `senders_office`, `receiver`, `comment`, `Date_sent`) VALUES
('000007', 'Randall N Alaud', 'Mayor Office', 'Lebron James', 'sas', ' 1980/01/01-12:33:31am'),
('000007', 'Lebron James', 'Mayor Office', 'Randall N Alaud', 'd', ' 1979/12/31-12:42:14am'),
('000007', 'Lebron James', 'Mayor Office', 'Randall N Alaud', 'd', ' 1979/12/31-12:42:14am'),
('000007', 'Randall N Alaud', 'Mayor Office', 'Lebron James', 'd', ' 1979/12/31-12:43:06am'),
('000009', 'Roniel John A Ubalde', 'Admin Office', 'Randall N Alaud', 'sa', ' 1979/12/31-12:26:21am'),
('000009', 'Randall N Alaud', 'Admin Office', 'Roniel John A Ubalde', 'h', ' 2018-08-05 - 06:51:39am'),
('000014', 'Randall N Alaud', 'Mayor Office', 'Lebron James', 'ds', ' 1980-01-01 - 03:40:05am'),
('000014', 'Lebron James', 'Mayor Office', 'Randall N Alaud', 'sample', ' 1980-01-01 - 03:40:38am'),
('000015', 'Randall N Alaud', 'Mayor Office', 'Lebron James', 'samples', ' 1980-01-01 - 03:43:09am'),
('000015', 'Lebron James', 'Mayor Office', 'Randall N Alaud', 'sample pud', ' 1980-01-01 - 03:43:37am'),
('000015', 'Lebron James', '', 'Randall N Alaud', 'sample pud', ' 1980-01-01 - 03:43:37am'),
('000015', 'Randall N Alaud', '', 'Lebron James', 'sampless', ' 1980-01-01 - 03:45:24am'),
('000015', 'Randall N Alaud', '', 'Lebron James', 'sampless', ' 1980-01-01 - 03:45:24am'),
('000015', 'Lebron James', '', 'Randall N Alaud', 'ssas', ' 1980-01-01 - 03:49:36am');

-- --------------------------------------------------------

--
-- Table structure for table `offices_document_type`
--

CREATE TABLE IF NOT EXISTS `offices_document_type` (
  `Document_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices_document_type`
--

INSERT INTO `offices_document_type` (`Document_type`) VALUES
('Bussiness Letter'),
('Request Letter'),
('Memorandum Order'),
('Statement of Account'),
('Executive Order'),
('Purchase Request/Order'),
('Voucher'),
('Request Paper'),
('Billing Statement'),
('Application Letter and Resume (Job Orders)'),
('Certificate of Employment (Job order and Regular)'),
('Business Permit'),
('alfonso'),
('Business Letter'),
('sabvadsas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_documents`
--

CREATE TABLE IF NOT EXISTS `tbl_documents` (
  `id` varchar(11) NOT NULL DEFAULT '0',
  `file` varchar(200) NOT NULL,
  `Document_type` varchar(200) NOT NULL,
  `Document_title` varchar(200) NOT NULL,
  `Content` varchar(200) NOT NULL,
  `Froms` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `Document_create` varchar(200) NOT NULL,
  `decline_message` varchar(200) NOT NULL,
  `Date_created` datetime NOT NULL,
  `msg_stat` varchar(200) NOT NULL,
  `Date_sent` datetime NOT NULL,
  `Document_sent_status` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `personnel_para_history_log` varchar(200) NOT NULL,
  `office_para_history_log` varchar(200) NOT NULL,
  `admin_notify` int(200) NOT NULL,
  `notify_user` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_documents`
--

INSERT INTO `tbl_documents` (`id`, `file`, `Document_type`, `Document_title`, `Content`, `Froms`, `Status`, `Document_create`, `decline_message`, `Date_created`, `msg_stat`, `Date_sent`, `Document_sent_status`, `size`, `personnel_para_history_log`, `office_para_history_log`, `admin_notify`, `notify_user`) VALUES
('LGU-000071', '38083-tulips.jpg', 'Executive Order', 'dsds', 'ds', 'Roniel John A Ubalde', 'Randall N Alaud', 'Roniel John A Ubalde', '', '2018-08-05 08:44:20', '1', '2018-08-05 00:00:00', 'Forwarded', '517.40666666667', 'Roniel John A Ubalde', 'Admin Office', 1, 0),
('LGU-000072', '45732-untitled.jpg', 'Memorandum Order', 'sa', 'sa', 'Roniel John A Ubalde', 'Randall N Alaud', 'Roniel John A Ubalde', '', '2018-08-05 08:44:44', '1', '2018-08-05 00:00:00', 'Closed', '3.1225', 'Roniel John A Ubalde', 'Admin Office', 1, 0),
('LGU-000073', '49935-tulips.jpg', 'Voucher', 'sample', 'sample', 'Lebron James', 'Randall N Alaud', 'Lebron James', '', '1980-01-01 02:36:40', '1', '1980-01-01 00:00:00', 'Received and Closed', '517.40666666667', 'Lebron James', 'Billing Office', 1, 0),
('LGU-000074', '7728-1.jpg', 'Purchase Request/Order', 'sas', 'sa', 'Lebron James', 'Randall N Alaud', 'Randall N Alaud', 'zx', '1980-01-01 02:37:17', '1', '1980-01-01 00:00:00', 'Declined', '213.38333333333', 'Lebron James', 'Billing Office', 1, 0),
('LGU-000075', '84779-untitled.jpg', 'Executive Order', 'sample', 'sa', 'Randall N Alaud', 'Roniel John A Ubalde', 'Randall N Alaud', '', '1980-01-02 12:13:57', '1', '1980-01-02 12:13:57', 'Received', '3.1225', 'Randall N Alaud', 'Mayor Office', 1, 0),
('LGU-000076', '55110-1.jpg', 'Memorandum Order', 'sample', 'sample', 'Roniel John A Ubalde', 'Draft', 'Roniel John A Ubalde', '', '1980-01-01 01:12:26', '0', '0000-00-00 00:00:00', 'Draft', '213.38333333333', 'Roniel John A Ubalde', 'Admin Office', 1, 0),
('LGU-000077', '77794-tulips.jpg', 'Voucher', 'sas', 'sa', 'Lebron James', 'Randall N Alaud', 'Lebron James', '', '1980-01-02 03:50:38', '0', '1980-01-02 03:50:38', 'Forwarded', '517.40666666667', 'Lebron James', 'Billing Office', 0, 0);

--
-- Triggers `tbl_documents`
--
DROP TRIGGER IF EXISTS `tg_tbl_documents_insert`;
DELIMITER //
CREATE TRIGGER `tg_tbl_documents_insert` BEFORE INSERT ON `tbl_documents`
 FOR EACH ROW BEGIN
  INSERT INTO tbl_documents_seq VALUES (NULL);
  SET NEW.id = CONCAT('LGU-', LPAD(LAST_INSERT_ID(), 6, '0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_documents_seq`
--

CREATE TABLE IF NOT EXISTS `tbl_documents_seq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `tbl_documents_seq`
--

INSERT INTO `tbl_documents_seq` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59),
(60),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75),
(76),
(77);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offices`
--

CREATE TABLE IF NOT EXISTS `tbl_offices` (
  `Offices` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_offices`
--

INSERT INTO `tbl_offices` (`Offices`) VALUES
('Casher''s Office'),
('Billing''s Office'),
('Billing''s Offic'),
('Sample');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `file` varchar(200) NOT NULL,
  `Fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `office` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `file`, `Fullname`, `username`, `email`, `office`, `position`, `password`) VALUES
(0009, '48458-lighthouse.jpg', 'Roniel John A Ubalde', 'admin', 'ronieljohn_ubalde@yahoo.com', 'Admin Office', 'Mayor', '21232f297a57a5a743894a0e4a801fc3'),
(0018, '32303-lighthouse.jpg', 'Randall N Alaud', 'Randall', 'randall@yahoo.com', 'Mayor Office', 'Mayor', 'c524ef418b2410152716900c7245677b'),
(0019, '16051-tulips.jpg', 'Lebron James', 'Steeve', 'steeve@yahoo.com', 'Billing Office', 'Secretary', '6995c3d4861fe338b0a9bebc15f427c7'),
(0020, '42025-koala.jpg', 'Roniel John Ubalde', 'badeday', 'michael_cabeltes@yahoo.com', 'Mayor Office', 'Vice Mayor', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `user_encrypt_passsword`
--

CREATE TABLE IF NOT EXISTS `user_encrypt_passsword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `user_encrypt_passsword`
--

INSERT INTO `user_encrypt_passsword` (`id`, `fullname`, `username`, `password`) VALUES
(1, '', 'roniel', 'roniel'),
(2, 'Roniel Johns', 'roniel', 'samples'),
(4, 'dsd', 'ds', 'waswas'),
(5, 'sds', 'dsa', 'sasasa'),
(6, 'samples', 'sampak', 'sawsaw'),
(7, 'samplesss', 'ssssss', 'samples'),
(8, 'King James', 'Kings', 'sampless'),
(10, 'Roniel John Ubalde', 'roniel', 'roniel'),
(39, 'sample', 'samples', 'samples'),
(40, 'roniel', 'ronieljo', 'waswas'),
(41, 'dsd', 'dsds', 'sawer'),
(42, 'mayor', 'mayor', 'mayor'),
(43, 'billing', 'billing', 'billing'),
(44, 'assestment', 'asment', 'asment'),
(45, 'billings', 'billings', 'billings'),
(46, 'lb', 'lb', 'mayors'),
(47, 'sa', 'sa', 'admins'),
(48, 'admin', 'admin', 'admin'),
(49, 'qw', 'sasassas', 'sample'),
(50, 'sample_rt', 'sa', 'sample'),
(51, 'sampless', 'sampak', 'sample'),
(52, 'Roniel Johh Z Ubalde 23', 'dale', 'dales'),
(53, 'sample_rt', 'sampak', 'sample'),
(54, 'sa', 'sampak', 'sample'),
(55, 'mayor', 'roniel', 'samples'),
(56, 'sample', 'sample', 'sampless'),
(57, 'Kings', 'randal', 'kings'),
(58, 'asa', 'sasassas', 'sample'),
(59, 'sampless', 'sad', 'sample'),
(60, 'sas', 'sampak', 'sample'),
(61, 'samples', 'sample', 'sample'),
(62, 'sa', 'sampak', 'sample'),
(63, 'sa', 'sasassas', 'sample'),
(64, 'ds', 'dsd', 'sample'),
(65, 'sa', 'sample', 'sample'),
(66, 'ds', 'sasassas', 'sample'),
(67, 'dale', 'ds', 'sample'),
(68, 'sa', 'sasassas', 'sample'),
(69, 'sampless', 'sa', 'sample'),
(70, 'ds', 'sasassas', 'sample'),
(71, 'dsdsd', 'ds', 'sample'),
(72, 'sampless', 'sa', 'sample'),
(73, 'assestment', 'adminete', 'sample'),
(74, 'dg', 'sasassas', 'samplex'),
(75, 'sample', 'sample', 'sample'),
(76, 'billing', 'billing', 'billing'),
(77, 'sample', 'basdssas', 'lamika'),
(78, '', 'sasassas', 'sampot'),
(79, '', 'iyot', 'sampaki'),
(80, '', 'sassasas', 'maria'),
(81, '', 'asasasas', 'halaka'),
(82, '', 'sasassas', 'ambots'),
(83, '', 'xcx', 'dikol'),
(84, '', 'sampak', 'sampo'),
(85, '', 'sas', 'kaons'),
(86, '', 'sasas', 'lamis'),
(87, '', 'sasassa', 'kamis'),
(88, '', 'as', 'sample'),
(89, '', 'randal', 'randal'),
(90, '', 'Dale', 'dales'),
(91, '', 'Roniel', 'roniel'),
(92, '', 'Dale', 'dales'),
(93, '', 'Steeve', 'steeve'),
(94, '', 'Michael', 'michael'),
(95, '', 'Randall', 'randall'),
(96, '', 'Roniel', 'roniel'),
(97, '', 'admin', 'admin'),
(98, '', 'roniel', 'roniel'),
(99, '', 'dale', 'dales'),
(100, '', 'Randall', 'randall'),
(101, '', 'steeve', 'steeve'),
(102, '', 'sample', 'sample'),
(103, '', 'sample', 'sample'),
(104, '', 'sample', 'loved'),
(105, '', 'sample', 'sample'),
(106, '', 'sample', 'sample'),
(107, '', 'Randall', 'randall'),
(108, '', 'Steeve', 'steeve'),
(109, '', 'user1', 'user1'),
(110, '', 'Michael', 'michael'),
(111, '', 'AB', 'abcde'),
(112, '', 'ab', 'abcde'),
(113, '', 'dsds', 'badeday');
