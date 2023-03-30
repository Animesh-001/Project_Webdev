-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 07:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_question`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(55) NOT NULL,
  `email` varchar(99) NOT NULL,
  `pass` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `email`, `pass`) VALUES
(1, 'krishna', 'kri@gmail.com', '123'),
(2, 'Admin', 'admin@gmail.com', '321'),
(4, 'Fanibhushan', 'fani@gmail.com', '567'),
(5, 'rakesh', 'rakesh@gmail.com', '123'),
(6, 'suman', 'suman@gmail.com', '1234'),
(7, 'Asit', 'asit@gmail.com', '987'),
(8, 'Animesh', 'ani@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Sub` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  `QUESTION` varchar(5000) DEFAULT NULL,
  `A` varchar(500) NOT NULL,
  `B` varchar(500) NOT NULL,
  `C` varchar(500) NOT NULL,
  `D` varchar(500) NOT NULL,
  `ANS` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Sub`, `id`, `QUESTION`, `A`, `B`, `C`, `D`, `ANS`) VALUES
('HTML', 1, 'what is full form of HTML', 'Hyper Table Man Language', 'Hyper Text Markup Language', 'Happy Table Markup Language', 'Hyper Touch Markup Language', 'B'),
('HTML', 2, 'There are ___ levels of heading in HTML?', 'Three\r\n', 'Four\r\n', 'Five', 'six', 'D'),
('HTML', 3, 'HTML is a ___ language?', 'procedural', 'Markup', 'object-oriented', 'object based', 'B'),
('HTML', 4, 'HTML Documents stored in the file in the form ____?', '.hxm', '.html or .htm.', '.hm.', '.hml.', 'B'),
('PHP', 8, 'PHP stands for-', 'Hypertext Preprocessor', 'Pretext Hypertext Preprocessor', 'Personal Home Processor', 'None of the above', 'A'),
('PHP', 9, 'who is known as father of PHP', 'Drek Kolkevi', 'List Barely', 'Rasmus Lerdrof', 'None of the above', 'C'),
('PHP', 10, 'which of the following is used to display the output in php', 'echo', 'write', 'print', 'Both(a) and (c)', 'A'),
('Java', 12, 'which of the following is not a java features?', 'dynamic', 'architecture meutral', 'use of pointers', 'object-oriented', 'C'),
('Java', 13, '---is used to find and fix bugs in the java programs.', 'JVM', 'JRE', 'JDK', 'JDB', 'D'),
('Java', 14, 'what is the return type of the hashCode() method in the object class', 'Object', 'int', 'long', 'void', 'B'),
('Java', 15, 'which of the following is a reserved keyword in java?', 'object', 'strictfp', 'main', 'system', 'B'),
('Java', 16, 'which keyword is used for accessing the featurs of package?', 'package', 'import', 'extends', 'export', 'B'),
('Java', 17, 'in java,jar stands for ____', 'Java Archive Runner', 'Java Application Resource', 'Java Application Runner', 'None of the above', 'D'),
('Java', 18, 'what is the intial quantity of the ArrayList list?', '5', '10', '0', '100', 'B'),
('Java', 19, 'who is invented java programming', 'Guido van Rossum', 'James Gosling', 'Dennis Ritchie', 'Bjarne Stroustrup', 'B'),
('Python', 20, 'who developed the python language?', 'Zim Den', 'Guido van Rossum', 'Niene Stom', 'Wick van Rossum', 'B'),
('Python', 21, 'In which year was the python language developed?', '1995', '1972', '1981', '1989', 'D'),
('Python', 22, 'In which language is python written?', 'English', 'PHP', 'C', 'All of the above', 'C'),
('python', 23, 'which one of the following is the correct extension of the python file?', '.py', '.python', '.p', 'None of these', 'A'),
('python', 24, 'what do we use to define a block of code in python language?', 'key', 'Brackets', 'indention', 'None of these', 'C'),
('python', 25, 'what is the method inside the class in python language?', 'object', 'function', 'attribute', 'argument', 'B'),
('php', 26, 'which of the following is the default file extension of php?', '.php', '.hphp', '.xml', '.html', 'A'),
('php', 27, 'which of the following is not a variable scope in php?', 'extern', 'local', 'static', 'global', 'A'),
('HTML', 28, 'which of the following attribute is used to provide a unique name at an element?', 'class', 'id', 'type', 'None of these', 'B'),
('HTML', 29, 'HTML is a subset of ____', 'SGMD', 'SGML', 'SGMH', 'None of the these', 'B'),
('HTML', 30, 'To create HTML page,you need____', 'web browser', 'text editor', 'Both [A] and [B]', 'None of these', 'C'),
('HTML', 31, 'A webpage displays a picture. What﻿﻿﻿ ﻿﻿tag ﻿﻿﻿﻿﻿was used to display that picture?\r\n', 'picture', 'image', 'img', 'src', 'C'),
('HTML', 32, 'which of the following attribute is used to provide a unique name at an element?', 'style ', 'type', 'class', 'None of these', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `user` varchar(500) NOT NULL,
  `total_mark` int(10) NOT NULL,
  `mark` int(10) NOT NULL,
  `percentage` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `user`, `total_mark`, `mark`, `percentage`) VALUES
(5, 'krishna', 6, 5, '83.3333333'),
(6, 'Fanibhushan', 4, 2, '50'),
(9, 'Animesh', 8, 8, '100'),
(10, 'krishna', 5, 2, '40'),
(12, 'krishna', 8, 6, '75'),
(13, 'suman', 8, 7, '87.5'),
(14, 'rakesh', 6, 5, '83.3333333');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'Python'),
(6, 'HTML'),
(27, 'c++');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
