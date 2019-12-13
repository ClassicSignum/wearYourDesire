-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 09:53 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wear_your_desire`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_cart`
--

CREATE TABLE `customer_cart` (
  `id` int(20) NOT NULL,
  `customermail` varchar(50) DEFAULT NULL,
  `suppliermail` varchar(50) DEFAULT NULL,
  `producttitle` varchar(70) DEFAULT NULL,
  `productsize` varchar(30) DEFAULT NULL,
  `rent_buy` varchar(20) DEFAULT NULL,
  `paid` varchar(30) DEFAULT NULL,
  `paidby` varchar(30) DEFAULT NULL,
  `receivingdate` varchar(27) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `pictures` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_cart`
--

INSERT INTO `customer_cart` (`id`, `customermail`, `suppliermail`, `producttitle`, `productsize`, `rent_buy`, `paid`, `paidby`, `receivingdate`, `status`, `pictures`) VALUES
(4, 'c@gmail.com', 's4@gmail.com', 'Black cotton shirt', 'xxl', 'buy', '2500', 'Cash-on-delivery', '14-10-2019', 'returned', 'ShirtBlack cotton shirt.jpg'),
(23, 'c2@gmail.com', 's4@gmail.com', 'Midnight Blue Tuxedo', '36', 'rent', '225', 'Cash-on-delivery', '14-11-2019', 'completed', 'Suits & TuxedoMidnight Blue Tuxedo.jpg'),
(25, 'c2@gmail.com', 's4@gmail.com', 'Midnight Shawl Tuxedo', '36', 'buy', '4500', 'Cash-on-delivery', '14-11-2019', 'pending', 'Suits & TuxedoMidnight Shawl Tuxedo.jpg'),
(26, 'c2@gmail.com', 's4@gmail.com', 'Blue Sherwani', '41', 'buy', '8000', 'Cash-on-delivery', '14-11-2019', 'completed', 'SherwaniBlue Sherwani.jpg'),
(28, 'c2@gmail.com', 's3@gmail.com', 'Cap Toe Shoes', '9', 'buy', '1200', 'Cash-on-delivery', '14-11-2019', 'completed', 'ShoeCap Toe Shoes.jpg'),
(29, 'c2@gmail.com', 's4@gmail.com', 'white Fly fron', 'm', 'rent', '120', 'Cash-on-delivery', '14-11-2019', 'pending', 'Shirtwhite Fly fron.jpg'),
(30, 'c2@gmail.com', 's@gmail.com', 'Black Leather Show', '9', 'buy', '2500', 'Cash-on-delivery', '14-11-2019', 'pending', 'ShoeBlack Leather Show.jpg'),
(31, 'c2@gmail.com', 's3@gmail.com', 'Cap Toe Shoes', '9', 'rent', '100', 'Cash-on-delivery', '14-11-2019', 'completed', 'ShoeCap Toe Shoes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_works`
--

CREATE TABLE `how_it_works` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(60000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `how_it_works`
--

INSERT INTO `how_it_works` (`id`, `title`, `description`) VALUES
(1, 'what is wear your desire?', 'like all great ideas, wear your desire was born out of a frustrating experience. omar and his groomsman pat, our founders, couldn\'t find tuxedos they could easily rent or enjoy for  bissojit\'s wedding. they decided to design and manufacture a collection of their own, and with these unique designs pair a uniquely seamless online ordering experience with the option to rent or buy. '),
(2, 'where do i place an order?', 'browse our collection of suits and tuxedos or complete outfits (includes shirt, shoes, the works) and select the look that’s right for the moment. when you go to check out, we will ask you a few sizing questions to make sure we get the right size to you.'),
(3, 'how far in advance should i place my order?', 'we recommend placing your order as soon as you know your event date to reserve the style you want, but you have up until 5 days before your event to place your order. to avoid rush fees and receive your order 14 days before your event, checkout 3 weeks before your event date. \r\n'),
(4, 'how can i get fitted?', 'just take our online fit survey. it\'s easy—you don’t need to know anything about formalwear whatsoever, and it only takes a few minutes.'),
(5, 'what is the deadline for submitting my sizes?', 'if you have placed your order 2-4 business days before your event, please follow our guidelines.'),
(6, 'how do i know my suit or tuxedo will fit?', 'first, we’ve developed a proprietary system (our fit formula) to find the right fit for you—almost always on the first try.our team of expert fit specialists will also double-check all of your sizes after you checkout to make sure everything looks right before we ship your order.'),
(7, 'how and where do i return my rental?', 'pack everything in the original delivery box and peel off the shipping label to reveal the prepaid return label underneath. make sure to return everything in your box, including hangers and garment bags. if you cannot fit everything into one box, you can use any other box for your return. '),
(8, 'can i return my order from an international country?', 'we do not ship internationally, so returns must be done in the contiguous BD. if you need more time to return your order, please contact our customer care team for an extended rental.'),
(9, 'i lost my return label. how do i get a new one?', 'if you have misplaced your pre-paid return label, you\'re able to print one from your account.'),
(10, 'your transaction will settle within 24 hours of checkout. ', 'we require all renting customers to provide their credit card information—since the groom has already paid for your order, you\'ll be checking out for $0. no actual charge will be made to your card on file unless your order is returned late, lost, or damaged.'),
(11, 'when will my credit card be charged?', 'your transaction will settle within 24 hours of checkout.'),
(12, 'do you accept international credit cards? ', 'we currently do not accept international credit cards. '),
(13, ' what do i do when my order arrives? ', 'try everything on within 24-48 hours of receiving your order to see how it fits. also be sure to keep your suit on a hanger to allow any wrinkles to fall out. if something doesn\'t fit, whether you bought or rented from us, start simply by requesting a replacement. '),
(14, 'my rental doesn\'t fit. what do i do? ', 'not to worry—we’re here to make sure you have the right sizes with time to spare before your event.if the length is off on the pants or jacket sleeves, you are welcome to visit a local tailor or dry cleaner to have the garments adjusted to your desired length (without cutting the fabric). '),
(15, 'my garments look a little wrinkled. what do i do?', 'after receiving your order, please try everything on, then hang it up immediately. light wrinkles should fall out naturally within a few hours.if you have a steamer, you can use it on the lightest setting to help remove the wrinkles a little faster.'),
(16, 'can i keep my rental?', 'we get this question a lot, and the answer is...yes! if you decide you want to keep your rental, please check with our customer support team to ensure availability, as we\'re only offering this option on select styles.'),
(17, ' can i buy new retail items?', 'yes! we now offer our suits and tuxedos for sale. view our collection to see what\'s available.'),
(18, ' how do your suits compare? ', 'instead of buying wholesale, we work with the best italian fabric mills to design modern, high-quality suits and tuxedos made of 100% merino wool, with full-canvas construction. we use natural materials, including 2-ply cotton shirts, silk ties, and real leather shoes. and our in-house design team is always working on new products that keep our style fresh.');

-- --------------------------------------------------------

--
-- Table structure for table `request_add`
--

CREATE TABLE `request_add` (
  `advertisermail` varchar(50) DEFAULT NULL,
  `producttype` varchar(30) DEFAULT NULL,
  `producttitle` varchar(100) DEFAULT NULL,
  `productsupplier` varchar(30) DEFAULT NULL,
  `productprice` varchar(20) DEFAULT NULL,
  `productrent` varchar(20) DEFAULT NULL,
  `productpic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_add`
--

INSERT INTO `request_add` (`advertisermail`, `producttype`, `producttitle`, `productsupplier`, `productprice`, `productrent`, `productpic`) VALUES
('a@gmail.com', 'Shoe', 'blackshoe', 'BATA', '2500', '500', 'Shoeblackshoe.jpg'),
('a2@gmail.com', 'Suits & Tuxedo', 'Notch Lapel Tuxedo', 'CATS EYE', '4500', '420', 'Suits & TuxedoNotch Lapel Tuxedo.jpg'),
('a2@gmail.com', 'Suits & Tuxedo', 'Peak Lapel Tuxedo', 'CATS EYE', '4000', '419', 'Suits & TuxedoPeak Lapel Tuxedo.jpg'),
('a@gmail.com', 'Shoe', 'Brown Leather Shoe', 'BATA', '5500', '400', 'ShoeBrown Leather Shoe.jpg'),
('a@gmail.com', 'Shoe', 'Black Leather Show', 'BATA', '2500', '420', 'ShoeBlack Leather Show.jpg'),
('a2@gmail.com', 'Suits & Tuxedo', 'Shawl Collar Tuxedo', 'CATS EYE', '4500', '300', 'Suits & TuxedoShawl Collar Tuxedo.jpg'),
('a@gmail.com', 'Shoe', 'Cap Toe Shoes', 'APEX', '1200', '100', 'ShoeCap Toe Shoes.jpg'),
('a@gmail.com', 'Shoe', 'Black Leather Wood Sole', 'APEX', '2500', '250', 'ShoeBlack Leather Wood Sole.jpg'),
('a@gmail.com', 'Shoe', 'Patent Leather Wood Sole', 'APEX', '7000', '350', 'ShoePatent Leather Wood Sole.jpg'),
('a2@gmail.com', 'Suits & Tuxedo', 'Midnight Blue Tuxedo', 'TOP TEN', '6000', '225', 'Suits & TuxedoMidnight Blue Tuxedo.jpg'),
('a2@gmail.com', 'Suits & Tuxedo', 'Midnight Pin Dot Tuxedo', 'TOP TEN', '2500', '425', 'Suits & TuxedoMidnight Pin Dot Tuxedo.jpg'),
('a2@gmail.com', 'Suits & Tuxedo', 'Midnight Shawl Tuxedo', 'TOP TEN', '4500', '325', 'Suits & TuxedoMidnight Shawl Tuxedo.jpg'),
('a3@gmail.com', 'Shirt', 'cotton white shirt', 'TOP TEN', '1200', '0', 'Shirtcotton white shirt.jpg'),
('a3@gmail.com', 'Shirt', 'Black cotton shirt', 'TOP TEN', '2500', '00', 'ShirtBlack cotton shirt.jpg'),
('a3@gmail.com', 'Shirt', 'white Fly fron', 'TOP TEN', '2500', '120', 'Shirtwhite Fly fron.jpg'),
('a3@gmail.com', 'Shirt', 'Cotton wing tip', 'CATS EYE', '3500', '00', 'ShirtCotton wing tip.jpg'),
('a3@gmail.com', 'Shirt', 'white ruffel', 'CATS EYE', '2500', '120', 'Shirtwhite ruffel.jpg'),
('a3@gmail.com', 'Shirt', 'Blue dress shirt', 'CATS EYE', '1000', '00', 'ShirtBlue dress shirt.jpg'),
('a3@gmail.com', 'Sherwani', 'Black sherwani', 'TOP TEN', '9000', '500', 'SherwaniBlack sherwani.jpg'),
('a3@gmail.com', 'Sherwani', 'Blue Sherwani', 'TOP TEN', '8000', '700', 'SherwaniBlue Sherwani.jpg'),
('a3@gmail.com', 'Sherwani', 'Magenta Sherwani', 'TOP TEN', '6000', '400', 'SherwaniMagenta Sherwani.jpg'),
('a@gmail.com', 'Shoe', 'blackshoe', 'BATA', '100', '5', 'Shoeblackshoe.jpg'),
('a@gmail.com', 'Shoe', 'op', 'BATA', '500', '5', 'Shoeop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_charge`
--

CREATE TABLE `service_charge` (
  `usermail` varchar(60) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT NULL,
  `paid` varchar(20) DEFAULT NULL,
  `paidmonth` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_charge`
--

INSERT INTO `service_charge` (`usermail`, `usertype`, `paid`, `paidmonth`) VALUES
('a@gmail.com', 'Advertiser', '5000', 'January'),
('a2@gmail.com', 'Advertiser', '5000', 'January'),
('a3@gmail.com', 'Advertiser', '3200', 'January');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_product`
--

CREATE TABLE `supplier_product` (
  `suppliermail` varchar(50) DEFAULT NULL,
  `brandname` varchar(20) DEFAULT NULL,
  `productpic` varchar(60) DEFAULT NULL,
  `producttype` varchar(20) DEFAULT NULL,
  `producttitle` varchar(100) DEFAULT NULL,
  `advertisermail` varchar(50) DEFAULT NULL,
  `productprice` varchar(20) DEFAULT NULL,
  `productrent` varchar(20) DEFAULT NULL,
  `productdetails` varchar(100) DEFAULT NULL,
  `productdesc` varchar(1000) DEFAULT NULL,
  `productsize` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_product`
--

INSERT INTO `supplier_product` (`suppliermail`, `brandname`, `productpic`, `producttype`, `producttitle`, `advertisermail`, `productprice`, `productrent`, `productdetails`, `productdesc`, `productsize`, `status`) VALUES
('s2@gmail.com', 'CATS EYE', 'Suits & TuxedoNotch Lapel Tuxedo.jpg', 'Suits & Tuxedo', 'Notch Lapel Tuxedo', 'a2@gmail.com', '4500', '420', 'good', 'way too good.', '36,41', 'permitted'),
('s2@gmail.com', 'CATS EYE', 'Suits & TuxedoPeak Lapel Tuxedo.jpg', 'Suits & Tuxedo', 'Peak Lapel Tuxedo', 'a2@gmail.com', '4000', '419', 'excellent', 'this is Peak Lapel Tuxedo', '36', 'permitted'),
('s@gmail.com', 'BATA', 'ShoeBlack Leather Show.jpg', 'Shoe', 'Black Leather Show', 'a@gmail.com', '2500', '420', 'excellent', 'this is Black Leather Shoe', '9', 'permitted'),
('s2@gmail.com', 'CATS EYE', 'Suits & TuxedoShawl Collar Tuxedo.jpg', 'Suits & Tuxedo', 'Shawl Collar Tuxedo', 'a2@gmail.com', '4500', '300', 'good', 'this is Shawl Collar Tuxedo', '36,41', 'permitted'),
('s3@gmail.com', 'APEX', 'ShoeCap Toe Shoes.jpg', 'Shoe', 'Cap Toe Shoes', 'a@gmail.com', '1200', '100', 'good', 'this is Cap Toe Shoe', '9', 'permitted'),
('s3@gmail.com', 'APEX', 'ShoeBlack Leather Wood Sole.jpg', 'Shoe', 'Black Leather Wood S', 'a@gmail.com', '2500', '250', 'good', 'this Black Leather Wood Shoe', '9,10', 'permitted'),
('s3@gmail.com', 'APEX', 'ShoePatent Leather Wood Sole.jpg', 'Shoe', 'Patent Leather Wood ', 'a@gmail.com', '7000', '350', 'good', 'this is Patent Leather Wood Shoe', '10,11,12', 'permitted'),
('s4@gmail.com', 'TOP TEN', 'Suits & TuxedoMidnight Blue Tuxedo.jpg', 'Suits & Tuxedo', 'Midnight Blue Tuxedo', 'a2@gmail.com', '6000', '225', 'good', 'this is Blue Tuxedo', '36', 'permitted'),
('s4@gmail.com', 'TOP TEN', 'Suits & TuxedoMidnight Pin Dot Tuxedo.jpg', 'Suits & Tuxedo', 'Midnight Pin Dot Tuxedo', 'a2@gmail.com', '2500', '425', 'excellent', 'this is pin dot tuxedo', '36,41', 'permitted'),
('s4@gmail.com', 'TOP TEN', 'Suits & TuxedoMidnight Shawl Tuxedo.jpg', 'Suits & Tuxedo', 'Midnight Shawl Tuxedo', 'a2@gmail.com', '4500', '325', 'moderate', 'this is shawl tuxedo', '36,41', 'permitted'),
('s4@gmail.com', 'TOP TEN', 'Shirtcotton white shirt.jpg', 'Shirt', 'cotton white shirt', 'a3@gmail.com', '1200', '0', 'good', 'this is cotton white shirt', 'xl', 'permitted'),
('s4@gmail.com', 'TOP TEN', 'ShirtBlack cotton shirt.jpg', 'Shirt', 'Black cotton shirt', 'a3@gmail.com', '2500', '00', 'excellent', 'this is black cotton shirt', 'xl,xxl,l', 'permitted'),
('s4@gmail.com', 'TOP TEN', 'Shirtwhite Fly fron.jpg', 'Shirt', 'white Fly fron', 'a3@gmail.com', '2500', '120', 'excellent', 'this is white fly front', 'm,l,xxl', 'permitted'),
('s2@gmail.com', 'CATS EYE', 'Shirtwhite ruffel.jpg', 'Shirt', 'white ruffel', 'a3@gmail.com', '2500', '120', 'good', 'this is white ruffel', 'l,xl,xxl', 'permitted'),
('s2@gmail.com', 'CATS EYE', 'ShirtBlue dress shirt.jpg', 'Shirt', 'Blue dress shirt', 'a3@gmail.com', '1000', '00', 'moderate', 'thsi is blue dress shirt', 'm,l,x,xl,xxl', 'permitted'),
('s4@gmail.com', 'TOP TEN', 'SherwaniBlack sherwani.jpg', 'Sherwani', 'Black sherwani', 'a3@gmail.com', '9000', '500', 'good', 'this is black sherwani', '40', 'permitted'),
('s4@gmail.com', 'TOP TEN', 'SherwaniBlue Sherwani.jpg', 'Sherwani', 'Blue Sherwani', 'a3@gmail.com', '8000', '700', 'excellent', 'this is blue sherwani', '41', 'permitted'),
('s4@gmail.com', 'TOP TEN', 'SherwaniMagenta Sherwani.jpg', 'Sherwani', 'Magenta Sherwani', 'a3@gmail.com', '6000', '400', 'excellent', 'this is magenta sherwani', '42', 'pending'),
('s5@gmail.com', 'ECB', 'Shirtmyshirt.jpg', 'Shirt', 'myshirt', 'a@gmail.com', '1254', '522', 'good', 'way too good.', '9,10,11', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `brandname` varchar(25) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `phoneno` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`firstname`, `lastname`, `email`, `brandname`, `usertype`, `address`, `phoneno`, `password`, `status`) VALUES
('adminf', 'adminl', 'admin@email.com', NULL, 'Admin', 'admin address', '01010', 'admin', 'permitted'),
('supplierf', 'supplierl', 's@gmail.com', 'BATA', 'Supplier', 'supplier address', '0101010', 'sdsdsd1', 'permitted'),
('advertiserf', 'advertiserl', 'a@gmail.com', NULL, 'Advertiser', 'advertiser address', '0147', 'asasas1', 'permitted'),
('customerf', 'customerl', 'c@gmail.com', NULL, 'Customer', 'customer address', '0159', 'cvcvcv1', 'restricted'),
('c2f', 'c2l', 'c2@gmail.com', NULL, 'Customer', 'c2 address', '0131', 'cvcvcv2', 'permitted'),
('s2f', 's2l', 's2@gmail.com', 'CATS EYE', 'Supplier', 's2 address', '010203', 'sdsdsd2', 'permitted'),
('a2f', 'a2l', 'a2@gmail.com', NULL, 'Advertiser', 'a2 address', '01478', 'asasas2', 'permitted'),
('s3f', 's3l', 's3@gmail.com', 'APEX', 'Supplier', 's3 address', '018989', 'sdsdsd3', 'permitted'),
('s4f', 's4l', 's4@gmail.com', 'TOP TEN', 'Supplier', 's4 address', '019898', 'sdsdsd4', 'permitted'),
('a3f', 'a3l', 'a3@gmail.com', NULL, 'Advertiser', 'a3 address', '012', 'asasas3', 'permitted'),
('sd', 'sd', 's5@gmail.com', 'ECB', 'Supplier', 'sadd', '01236', 'sdsdsd5', 'restricted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_cart`
--
ALTER TABLE `customer_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_works`
--
ALTER TABLE `how_it_works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_cart`
--
ALTER TABLE `customer_cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `how_it_works`
--
ALTER TABLE `how_it_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
