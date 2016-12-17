-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2016 at 05:34 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmacysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblinventory`
--

CREATE TABLE IF NOT EXISTS `tblinventory` (
  `ItemID` int(11) NOT NULL,
  `AddedDate` datetime DEFAULT NULL,
  `AddedBy` int(11) DEFAULT NULL,
  `ItemQuantity` int(11) DEFAULT NULL,
  `UpdatedBy` int(11) DEFAULT NULL,
  `UpdatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblinventoryitems`
--

CREATE TABLE IF NOT EXISTS `tblinventoryitems` (
  `ItemId` int(11) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(50) DEFAULT NULL,
  `ItemType` int(11) DEFAULT NULL,
  `ItemCategory` int(11) DEFAULT NULL,
  `ItemPrice` decimal(10,2) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `CreatedAt` datetime DEFAULT NULL,
  `IsActive` bit(1) DEFAULT NULL,
  PRIMARY KEY (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE IF NOT EXISTS `tblpatient` (
  `PatientId` int(11) NOT NULL AUTO_INCREMENT,
  `PatientName` varchar(50) DEFAULT NULL,
  `PatientCNIC` varchar(20) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `CellNo` varchar(12) DEFAULT NULL,
  `RegistrationDate` datetime DEFAULT NULL,
  `Age` int(11) NOT NULL,
  PRIMARY KEY (`PatientId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatientadmission`
--

CREATE TABLE IF NOT EXISTS `tblpatientadmission` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PatientId` int(11) DEFAULT NULL,
  `AdmissionDate` datetime DEFAULT NULL,
  `AdmitReason` varchar(50) DEFAULT NULL,
  `RefferedBy` int(11) DEFAULT NULL,
  `IsDischarged` bit(1) DEFAULT NULL,
  `DischargeDate` datetime DEFAULT NULL,
  `DischargeReason` varchar(50) NOT NULL,
  `DischargedBy` int(11) NOT NULL,
  `RoomNo` int(11) DEFAULT NULL,
  `BedNo` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatientcharges`
--

CREATE TABLE IF NOT EXISTS `tblpatientcharges` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `AdmissionID` int(11) DEFAULT NULL,
  `AdvanceFee` int(11) DEFAULT NULL,
  `RemainingFee` int(11) DEFAULT NULL,
  `TotalFee` int(11) DEFAULT NULL,
  `Refunded` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatienttests`
--

CREATE TABLE IF NOT EXISTS `tblpatienttests` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PatientID` int(11) DEFAULT NULL,
  `TestDate` datetime DEFAULT NULL,
  `DeliveryDate` datetime DEFAULT NULL,
  `RecommendedBy` int(11) DEFAULT NULL,
  `TestID` int(11) DEFAULT NULL,
  `TokenID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblproductbatch`
--

CREATE TABLE IF NOT EXISTS `tblproductbatch` (
  `BatchId` int(11) NOT NULL AUTO_INCREMENT,
  `BatchNo` varchar(50) DEFAULT NULL,
  `BatchQuantity` int(11) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `CreatedAt` datetime DEFAULT NULL,
  `ExpiryDate` datetime DEFAULT NULL,
  `ItemId` int(11) DEFAULT NULL,
  `IsDeleted` bit(1) DEFAULT NULL,
  `BatchRecalled` bit(1) DEFAULT NULL,
  PRIMARY KEY (`BatchId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbltests`
--

CREATE TABLE IF NOT EXISTS `tbltests` (
  `TestID` int(11) NOT NULL AUTO_INCREMENT,
  `TestName` varchar(100) DEFAULT NULL,
  `TestType` int(11) DEFAULT NULL,
  `TestFee` int(11) DEFAULT NULL,
  `IsDeleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`TestID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbltesttypes`
--

CREATE TABLE IF NOT EXISTS `tbltesttypes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TestType` varchar(100) DEFAULT NULL,
  `IsDeleted` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbltoken`
--

CREATE TABLE IF NOT EXISTS `tbltoken` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PatientName` varchar(50) DEFAULT NULL,
  `TotalFee` int(11) DEFAULT NULL,
  `TokenDate` datetime NOT NULL,
  `TokenID` int(11) NOT NULL,
  `GeneratedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbluserprofile`
--

CREATE TABLE IF NOT EXISTS `tbluserprofile` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `DepartmentID` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserId`,`DepartmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `IsActive` bit(1) DEFAULT NULL,
  `UserRole` int(11) DEFAULT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
