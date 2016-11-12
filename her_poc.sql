-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12. Nov, 2016 11:47 a.m.
-- Server-versjon: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petthar_her`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_danish_ci NOT NULL,
  `class_time` time NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `class_time`, `teacher_id`) VALUES
  (1, 'Introduksjon til entreprenørskap', '08:00:00', 1),
  (2, 'Oppstart av bedrift', '11:00:00', 1),
  (3, 'Vekststrategi for oppstartsbedrifter', '14:00:00', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `registration`
--

CREATE TABLE `registration` (
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `lastname`, `password`) VALUES
  (1, 'Gudrun', 'Mikkelsen', '1111'),
  (2, 'Kurt', 'Guttorm', '2222'),
  (3, 'Vegard', 'Tenold', '3333'),
  (4, 'Gro', 'Aakre', '4444'),
  (5, 'Roger', 'Antonsen', '5555'),
  (6, 'Anita', 'Vik', '6666'),
  (7, 'Knut', 'Bjørseth', '7777'),
  (8, 'Linda', 'Larsen', '8888'),
  (9, 'Svein', 'Worren', '9999');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `firstname`, `lastname`, `password`) VALUES
  (1, 'Nils', 'Nilsen', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `fk_classes_teachers_idx` (`teacher_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`student_id`,`class_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Begrensninger for dumpede tabeller
--

--
-- Begrensninger for tabell `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `fk_classes_teachers` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`teacher_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
