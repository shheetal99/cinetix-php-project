-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 06:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieName` varchar(100) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieName`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`) VALUES
(19, 'Captain Marvel', 'main-hall', '3d', '13-3', '15-00', 'Ahmed', 'Ismael', '010152658930'),
(22, 'The Lego Movie', 'vip-hall', 'imax', '13-3', '18-00', 'Kareem', 'Ahmed', '01589965'),
(23, 'Captain Marvel', 'private-hall', 'imax', '14-3', '15-00', 'dittu', 'vitthani', '9825222042'),
(24, 'Bhoot: Part I', 'main-hall', '2d', '16-3', '15-00', 'Sheetal', 'Verma', '7369520105'),
(26, 'Angrezi Medium', 'main-hall', '3d', '13-3', '21-00', 'sgd', 'hlbl', '34362');

-- --------------------------------------------------------

--
-- Table structure for table `coming_soon`
--

CREATE TABLE `coming_soon` (
  `id` int(11) NOT NULL,
  `movieImg` varchar(255) NOT NULL,
  `movieName` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coming_soon`
--

INSERT INTO `coming_soon` (`id`, `movieImg`, `movieName`, `language`) VALUES
(1, 'img/soon1.jpg', 'Fast & Furious 9', 'English/ Hindi'),
(2, 'img/soon2.jpg', 'Black Widow', 'English/ Hindi'),
(3, 'img/soon3.jpg', 'Wonder Women 1984', 'English'),
(4, 'img/soon4.jpg', 'Sooryavanshi', 'Hindi'),
(5, 'img/soon5.jpg', 'Coolie No. 1', 'Hindi'),
(6, 'img/soon6.jpg', 'Disney\'s Mulan', 'English'),
(7, 'img/soon7.jpg', '83', 'Hindi'),
(8, 'img/soon8.jpg', 'Trolls World Tour', 'English'),
(9, 'img/soon9.jpg', 'The Woman in the window', 'English'),
(10, 'img/soon10.jpeg', 'Scoob', 'English'),
(11, 'img/soon11.jpeg', 'Zoond', 'Hindi'),
(12, 'img/soon12.jpeg', 'The Secret:Dare to Dream', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(80) NOT NULL,
  `movieDuration` int(11) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`) VALUES
(1, 'img/now1.jpg', 'Bhoot: Part I', 'Horror, Action', 150, '2020-02-21', 'Bhanu Pratap Sinh', 'Vicky Kaushal, Bhumi Padnekar, Ashutosh Rana, Siddhant Kapoor'),
(2, 'img/now2.jpg', 'Disney Onward', 'Comedy, Animation, Adventure, Family, Drama, Fantasy', 112, '2020-03-06', 'Dan Scanlon', 'Tom Holland, Chris Pratt, Lena Waithe, Ali Wong, Octavia Spencer'),
(3, 'img/now3.jpg', 'A Quiet Place 2', 'Horror, Thriller, Mystery', 98, '2020-03-18', 'John Krasinski', 'Emily Blunt, John Krasinski, Cillian Murphy, Noah Jupe, Milicent Simmonds'),
(4, 'img/now7.jpg', 'No Time to Die', 'Action, Adventure, Mystery, Thriller, Spy', 163, '2020-04-08', 'Cary Joji Fukunaga', 'Rami Malek, Daniel Craig, Lashana Lynch, Ana de Armas, Ben Whishaw, Naomie Harris'),
(5, 'img/now4.jpg', 'Thappad', 'Drama', 144, '2020-02-28', 'Anubhav Sinha', 'Taapsee Pannu, Ram Kapoor, Dia Mirza, Pavail Gulati, Siddhant Karnick, Kumud Mishra'),
(6, 'img/now5.jpg', 'Gunjan Saxena', 'Biographical', 120, '2020-03-13', 'Sharan Sharma', 'Janhvi Kapoor, Pankaj Tripathi, Angad Bedi, Vineet Kumar Sinh, Manav Vij'),
(7, 'img/now6.jpg', 'Baaghi 3', 'Action, Thriller, Romance, Adventure', 180, '2020-03-06', 'Ahemad Khan', 'Tiger Shroff, Shraddha Kapoor, Ankita Lokhande, Riteish Deshmukh, Chunky Pandey, Ashutosh Rana'),
(8, 'img/now8.jpg', 'Fantasy Island', 'Horror, Thriller, Mystery, Comedy, Suspense, Supernatural', 156, '2020-02-14', 'Jeff Wadlow', 'Lucy Hale, Maggie Q, Michael Pena, Portia Doubleday, Ryan Hansen,'),
(9, 'img/now9.jpg', 'Captain Marvel', 'Action, Superhero, Science fiction, Fantasy', 125, '2020-03-08', 'Anna Boden, Ryan Fleck', 'Brie Larson, Samuel Jackson, Gemma Chan, Jude Law, Lashana Lynch, Lee Pace, Annette Bening'),
(10, 'img/now10.jpg', 'The Lego Movie', 'Action, Animation, Family, Comedy, Adventure', 101, '2020-02-07', 'Chris Miller,Phil Lord', 'Will Arnett, Chris Pratt, Elizabeth Banks, Charlie Day, Jonah Hill, Jadon Sand, Will Fort '),
(11, 'img/now11.jpg', 'Jawaani Jaaneman', 'Comedy, Romance, Drama', 130, '2020-01-31', 'Nitin Kakkar', 'Saif Ali Khan, Alaya Furniturevala, Kubbra Sait, Tabu, Chunky Pandey, Tea Wagner, Sonia Goswami'),
(12, 'img/now12.jpg', 'Angrezi Medium', 'Comedy, Drama', 150, '2020-03-13', 'Homi Adajania', 'Radhika Madan, Irrfan Khan, Kareena Kapoor Khan, Pankaj Tripathi, Poorvi Jain');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `f_name`, `l_name`, `mobile`, `email`, `password`) VALUES
(1, 'dittu', 'vitthani', '9825222042', 'vitthanidisha@gmail.com', '000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`);

--
-- Indexes for table `coming_soon`
--
ALTER TABLE `coming_soon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `coming_soon`
--
ALTER TABLE `coming_soon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
