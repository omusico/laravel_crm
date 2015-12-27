-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2015 at 05:42 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dma_crmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `activity_type` varchar(255) NOT NULL,
  `outcome` varchar(255) NOT NULL,
  `sales_person_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `customer_id`, `date`, `activity_type`, `outcome`, `sales_person_name`) VALUES
(1, 2, '2015-12-10', 'Email', 'Success', 'Andrew'),
(2, 1, '2015-12-20', 'Call', 'Penidng', 'James'),
(3, 2, '2015-12-15', 'meeting', 'success', 'James');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `customer_id`, `name`, `email`, `contact_number`) VALUES
(1, 4, 'Contact 1', 'contactttttt@mail.com', 'con1111'),
(2, 1, 'Andrew Simon', 'andresimon@mail.com', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `business_registration_number` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `company_name`, `address`, `business_registration_number`, `website`) VALUES
(1, 'Test company 1', 'Test address 1', 'Test number 1', 'Test website 1'),
(2, 'Test company 2', 'Test address 2', 'Test number 2', 'Test website 2'),
(3, 'Test company 3', 'Test address 3', 'Test number 3', 'Test website 3'),
(4, 'Test company 4', 'tttt', 'tttttjjjjjjj', 'tyyyyy'),
(5, 'Test company 5', 'No:Test', '8888', 'www.tttt.com'),
(6, 'Test company 6', 'ttt', 'ttttt', 'ttttt'),
(7, 'Test company 7', 'tttt', '8888', 'www.tttt.com'),
(8, 'Test company 8', 'ttt', '8888', 'www.tttt.com'),
(9, 'Test company 9', 'tttt', 'ttttt', 'www.tttt.com'),
(10, 'Test company 10', 'No:Test', '8888', 'www.tttt.com'),
(11, 'Test company 11', 'No:Test', 'ttttt', 'www.tttt.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
