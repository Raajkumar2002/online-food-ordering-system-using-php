CREATE DATABASE IF NOT EXISTS `foodorder` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `foodorder`;


-- Dumping structure for table foodorder.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `Name` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `PhoneNo` varchar(10) NOT NULL,
  `MailID` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table foodorder.customer: ~2 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`Name`, `UserName`, `Password`, `Gender`, `PhoneNo`, `MailID`, `Address`) VALUES
	('rajakumar', 'raja123', '123', 'Male', '9876543210', 'raja123@gmail.com', 'cbe'),
	('vimal', 'vimal123', '123', 'Male', '9876543210', 'vimal@gmail.com', 'coimbatore\r\ntry\r\nsd');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;


-- Dumping structure for table foodorder.employee
CREATE TABLE IF NOT EXISTS `employee` (
  `Name` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `ContactNo` varchar(50) DEFAULT NULL,
  `Experience` varchar(50) DEFAULT NULL,
  `Address` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table foodorder.employee: ~1 rows (approximately)
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` (`Name`, `Gender`, `ContactNo`, `Experience`, `Address`) VALUES
	('rrr', 'Male', '923792349', '2', 'sdkfjks');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;


-- Dumping structure for table foodorder.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `UserName` varchar(20) NOT NULL,
  `PhoneNo` varchar(20) NOT NULL,
  `MailID` varchar(20) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `Response` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table foodorder.feedback: ~3 rows (approximately)
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`UserName`, `PhoneNo`, `MailID`, `Feedback`, `Response`) VALUES
	('raja123', '9912345678', 'raja123@gmail.com', 'nice', 'ok'),
	('vimal123', '9876543210', 'vimal@gmail.com', 'good', 'ok tanq'),
	('raja123', 'sdf', 'sfksdk', 'ssfdks', 'ok');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;


-- Dumping structure for table foodorder.food
CREATE TABLE IF NOT EXISTS `food` (
  `FoodID` int(10) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Ingredients` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table foodorder.food: ~3 rows (approximately)
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
INSERT INTO `food` (`FoodID`, `Type`, `Name`, `Quantity`, `Price`, `Ingredients`) VALUES
	(1, 'Veg', 'Dosa', 'Full', '50', 'Rice\r\nDhal\r\nchatni'),
	(2, 'Veg', 'poori', 'Full', '30', 'poorimasal'),
	(3, 'Veg', 'roti', 'Mini', '300', 'ds');
/*!40000 ALTER TABLE `food` ENABLE KEYS */;


-- Dumping structure for table foodorder.order1
CREATE TABLE IF NOT EXISTS `order1` (
  `OrderID` int(10) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `FoodID` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `UserQuantity` varchar(10) NOT NULL,
  `TotalPrice` varchar(10) NOT NULL,
  `CreditCard` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Empname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table foodorder.order1: ~4 rows (approximately)
/*!40000 ALTER TABLE `order1` DISABLE KEYS */;
INSERT INTO `order1` (`OrderID`, `Date`, `UserName`, `FoodID`, `Type`, `Name`, `Quantity`, `Price`, `UserQuantity`, `TotalPrice`, `CreditCard`, `Status`, `Empname`) VALUES
	(3, '28-Mar-22', 'raja123', '1', 'Veg', 'Dosa', 'Full', '50', '4', '200', '48343943898', 'Delivered', 'rrr');
/*!40000 ALTER TABLE `order1` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
