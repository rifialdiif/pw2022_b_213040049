-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_213040049`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `produser` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `total_episode` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `studio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `judul`, `produser`, `kondisi`, `total_episode`, `genre`, `foto`, `studio`) VALUES
(1, 'Go-toubun no Hanayome', 'DAX Production, Nichion', 'Completed', '13 Episode', 'Comedy, Romance, School, Shounen', 'go.jpg', 'Bibury Animation Studios'),
(2, 'Jujutsu Kaisen', 'TOHO animation, Shueisha, dugout', 'Completed', '24 Episode', 'Action, Demons, Horror, School', '60a34136c4ae7.jpeg', 'MAPPA'),
(3, 'Tonikaku Kawaii', 'Shogakukan-Shueisha Productions', 'Completed', '12 Episode', 'Comedy, Romance, Shounen', 'to.jpg', 'Seven Arcs'),
(4, 'Shingeki no Kyoujin Season 4', 'Pony Canyon, Techno Sound', 'Completed', '12 Episode', 'Action, Drama, Fantasy, Millitary', 'shi.jpg', 'MAPPA'),
(14, 'Horimiya', 'Aniplex', 'Completed', '12 Episode', 'Comedy, Romance, School, Shounen', 'hori.jpg', 'CloverWorks'),
(15, 'Yakusoku no Neverland Season 2', 'Aniplex, Shueisha', 'Completed', '12 Episode', 'Mystery, Psychological, Sci-Fi, Shounen', 'ya.jpg', 'CloverWorks'),
(16, 'Dr. Stone Season 2', 'Shueisha', 'Completed', '12 Episode', 'Adventure, Sci-Fi, Shounen', 'sto.jpg', 'TMS Entertainment'),
(17, 'Mushoku Tensei: Isekai Ittara Honki Dasu', 'Egg Firm', 'Completed', '24 Episode', 'Drama, Fantasy, Magic', 'mus.jpg', 'Winter 2021'),
(18, 'Black Clover', 'TV Tokyo, Avex Pictures, Shueisha', 'On Going', '-', 'Action, Comedy, Fantasy, Magic, Shounen', 'bla.jpg', 'Studio Pierrot'),
(19, 'Re:Zero Kara Hajimeru Isekai Seikatsu Season 2', 'AT-X, Memory-Tech', 'Completed', '25 Episode', 'Drama, Fantasy, Psychological, Thriller', 're.jpg', 'White Fox'),
(20, 'Osananajimi ga Zettai ni Makenai Love Comedy', 'Delfi Sound, Kadokawa', 'Completed', '12 Episode', 'Comedy, Harem, Romance, School,', 'osa.jpg', 'Doga Kobo'),
(23, 'Wonder Egg Priority', 'Aniplex, D.N. Dream Partners', 'Completed', '12 Episode', 'Drama, Fantasy, Psychological', 'won.jpg', 'CloverWorks'),
(29, 'Ookami shoujo to kuro ouji', 'VAP, Yomiuri Telecasting, Nippon Television Network', 'Completed', '12 Episode', 'Comedy, Romance', '62a366ccd1ccd.jpg', 'TYO Animations'),
(30, 'Ao Haru Ride', 'Mainichi Broadcasting System, Movic, Sony Music Entertainment, TOHO animation, Shueisha, BS11, Anima', 'Completed', '12 Episode', 'Drama, Romance, Slice of Life', '62a367771f9b0.jpg', 'Production I.G'),
(32, 'Classroom Elite', 'Studio Hibari, Lantis, Media Factory, AT-X, Sony Music Communications, Toranoana, Kadokawa Media Hou', 'Completed', '24 Episode', 'Psychological, School', '62a36aa48e2cd.jpg', 'Lerche');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$q1SsUA5JCFyLdqf1l3qX5OVnYIJoI/DwBNigPPBnwNz1/kUtuejB.'),
(4, 'admin', '$2y$10$EaJqEgbSO6aybBvE.copguX7oBDfK/zumk.Tio0qD/e.Xta98rIOa'),
(5, 'rifialdi1', 'rifialdi1'),
(6, 'rifialdi2', '$2y$10$nKhh0pq9GJWEj8rZcozFm.ogINXDycd/Y6QwXf35R/wjct2OfMl8a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
