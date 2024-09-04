
--
-- Database: `webappsdb`
--
CREATE DATABASE IF NOT EXISTS `webappsdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `webappsdb`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` INTEGER NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
);

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `username`, `password`) VALUES
(1, 'Basil', 'secret1'),
(2, 'Hamdan', 'secret2');

-- --------------------------------------------------------
--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
`accountid` INTEGER NOT NULL,
`customerid` INTEGER NOT NULL,
`balance` DECIMAL(9, 2) NOT NULL
);

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountid`, `customerid`, `balance`) VALUES
(1, 1, 10000.00),
(2, 2, 20000.00);

-- --------------------------------------------------------

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);


