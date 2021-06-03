-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 06:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zodiaczone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(4) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Subject` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `Message` text NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Subject`, `Email`, `Phone`, `Message`, `Status`) VALUES
(17, 'mohammed', 'wde', 'edrf@fdef.comjn', '757', 'q3rw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(2) NOT NULL,
  `Type` varchar(225) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `Description` text NOT NULL,
  `Paragraph` text NOT NULL,
  `Button_Title` varchar(225) NOT NULL,
  `buttonlink` varchar(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Type`, `Title`, `Description`, `Paragraph`, `Button_Title`, `buttonlink`, `Image`, `Status`) VALUES
(1, 'experts', 'Love', '', '', '', '', '', 0),
(2, 'experts', 'Money', '', '', '', '', '', 0),
(4, 'experts', 'Health', '', '', '', '', '', 1),
(5, 'experts', 'Career', '', '', '', '', '', 0),
(6, 'experts', 'Business', '', '', '', '', '', 0),
(7, 'experts', 'Investment', '', '', '', '', '', 0),
(8, 'experts', 'Marriage', '', '', '', '', '', 0),
(9, 'astrologer', 'Acharya Shantanu Bhattacharjee', 'If you’re going to use async/await, you don’t need to use jQuery. Fetch API 45 is promise based already and is a native function in the same browsers where async/await is available.\r\n\r\nhttps://caniuse.com/#search=fetch 28\r\n\r\nEven if you are needing to support IE11, then there is a simple Polyfill 8 that is maintained by github. You can still use Promises without async/await.\r\n\r\nBeyond just $.ajax(), there is very little reason to use jQuery if you’re supporting IE11+.\r\nhttp://youmightnotneedjquery.com/ 55', '<p>If you&rsquo;re going to use async/await, you don&rsquo;t need to use jQuery. <a href=\"https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch\">Fetch API 45</a> is promise based already and is a native function in the same browsers where async/await is available.</p> <p><a href=\"https://caniuse.com/#search=fetch\">https://caniuse.com/#search=fetch 28</a></p> <p>Even if you are needing to support IE11, then <a href=\"https://github.github.io/fetch/\">there is a simple Polyfill 8</a> that is maintained by github. You can still use Promises without async/await.</p> <p>Beyond just <code>$.ajax()</code>, there is <strong>very little</strong> reason to use jQuery if you&rsquo;re supporting IE11+.<br /> <a href=\"http://youmightnotneedjquery.com/\" target=\"_blank\">http://youmightnotneedjquery.com/ 55</a></p>', '', '', '', 0),
(10, 'astrologer', 'Acharya Vishal Tyagi', 'MBA in Marketing , Jyotish Ratan from All India Federation of Astrologers Societies', 'Acharya Vishal Tyagi is a freelancer astrologer who is working as a part time astrologer and full time corporate employee. He is looking for an opportunity wherein he can pursue his passion for astrology as my profession.\r\n\r\nHe has dedicated 13 years of his life to astrology. He completed his Jyotish Ratna degree in the year 2008. KP astrology, Parashari, Lal kitab, Nadi, Tara Chakram, Bhrigu Chakra Paddhati are some of his areas of specialization.\r\n\r\nHindi and English are the two very languages he is comfortable in and he attempts to reach out to his clients in a very clear and approachable manner.', '', '', '', 1),
(11, 'astrologer', 'Acharya Vinay Bhatt', 'I have done my own research and study on astrology. I clear the doubts of people and solve their problems with the help of all the six Shastras. My astrological base is Bhrigu Sahita and Parashar Hora Shastra, Mansagri, Bhrudad Parashar Hora Shastra, Ashtak Varg', '\'I have perfect knowledge of the 6 main Parameters of Astrology which allows me to study the near Past and Future of a person. 1) Kundli Shastra 2) Numerology 3)Samudrik Shastra 4)Nadi Shastra 5)Swar Shastra 6)Vastu Shastra are my core expertise areas. With the help of all these Shastras, I can guide people in the right way for the best and smooth life. Astrology is an Analytical Science according to me.', '', '', '', 1),
(12, 'faq', '', 'If one has many Raja Yogas in the chart, will one become famous and rich?', 'Not necessary. Good to pursue happiness', '', '', '', 0),
(13, 'faq', '', 'What is the difference of Vedic Astrology and Jothish', 'Jothish talks about the Karma concept and the purpose of our life. Vedic Astrology is a subset of Jothish highlighting events, predictions etc', '', '', '', 0),
(14, 'faq', '', 'Which scriptures mention about Jothish?', 'Almost all the Vedic scriptures talk about Jothish – like Rig Veda and other vedas, Bhagavatham, Bhagavad Gita, Mahabharata, Ramayana etc', '', '', '', 0),
(15, 'faq', '', 'What is Panchanga?', 'Pancha Anga or five limbs is an astrological almanac based on ancient Vedic System of calculation. There are the five dimensions of time: Vara, Tithi, Nakshatra, Karana and Yoga. Panchanga is used for daily reference by Astrologers of calculation of sidereal movement of planets, muhurtha or auspicious time, festivals etc.', '', '', '', 0),
(16, 'faq', '', 'Which books do we refer for Vedic Astrology?', 'Brihat Parashara Horashastra by Sage Parashara and Jaimini Sutras. Connect with the nature to study Nakshatras.\r\n', '', '', '', 0),
(17, 'experts', 'esgf', 'sxfg', '\r\nzsdfg\r\n\r\n', 'zsrfg', 'sdg', '', 0),
(18, 'experts', 'fuiy', 'hdtug', '<p>khfgliu</p>', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `webitepage`
--

CREATE TABLE `webitepage` (
  `ID` int(11) NOT NULL,
  `Page` varchar(225) NOT NULL,
  `Topic` varchar(500) NOT NULL,
  `Description` text NOT NULL,
  `Paragraph` text NOT NULL,
  `Button_Title` varchar(225) NOT NULL,
  `Buttonlink` varchar(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webitepage`
--

INSERT INTO `webitepage` (`ID`, `Page`, `Topic`, `Description`, `Paragraph`, `Button_Title`, `Buttonlink`, `Image`, `Status`) VALUES
(1, 'header', 'Zodaic Zonee', 'Coming Soon...', '', 'Download App', '#', '', 1),
(2, 'About US', 'Zodiac Zone', '<p>Self Care Minima Adipisci Ipsum Praesentium Illo, Magni Expedita, Sed Magnam Facilis Iure Animi Recusandae Quae Quaerat Cumque, Nulla Accusantium Dolore Autem Culpa Non Rest And Sleep Drink Plenty Of Liquids Keep Warm Treatments If You Develop A Fever, Cough, And Have Difficulty Breathing, Promptly Seek Medical Care. Call In Advance And Tell Your Health Provider Of Any Recent Travel Or Recent Contact With Travelers</p>\r\n', '', '', '', '', 1),
(3, 'Aboutus', 'Our Aim And Mission', '<p>Take Rest Cumque Vitae Officia Reiciendis Suscipit Sed Natus Optio Ut Expedita Ullam Maiores Veritatis, Nobis Consequatur Impedit. Get Tips Cumque Vitae Officia Reiciendis Suscipit Sed Natus Optio Ut Expedita Ullam Maiores Veritatis, Nobis Consequatur Impedit. Checkup Heart Cumque Vitae Officia Reiciendis Suscipit Sed Natus Optio Ut Expedita Ullam Maiores Veritatis, Nobis Consequatur Impedit. Take Treatment Cumque Vitae Officia Reiciendis Suscipit Sed Natus Optio Ut Expedita Ullam Maiores Veritatis, Nobis Consequatur Impedit.</p>\r\n', '<p>Self Care Minima Adipisci Ipsum Praesentium Illo, Magni Expedita, Sed Magnam Facilis Iure Animi Recusandae Quae Quaerat Cumque, Nulla Accusantium Dolore Autem Culpa Non Rest And Sleep Drink Plenty Of Liquids Keep Warm Treatments If You Develop A Fever, Cough, And Have Difficulty Breathing, Promptly Seek Medical Care. Call In Advance And Tell Your Health Provider Of Any Recent Travel Or Recent Contact With Travelers.hello</p>', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `webitepage`
--
ALTER TABLE `webitepage`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `webitepage`
--
ALTER TABLE `webitepage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
