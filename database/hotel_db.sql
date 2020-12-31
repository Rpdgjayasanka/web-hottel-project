-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 05:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `checked`
--

CREATE TABLE `checked` (
  `id` int(30) NOT NULL,
  `ref_no` varchar(100) NOT NULL,
  `room_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `date_in` datetime NOT NULL,
  `date_out` datetime NOT NULL,
  `booked_cid` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1=checked in , 2 = checked out',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checked`
--

INSERT INTO `checked` (`id`, `ref_no`, `room_id`, `name`, `contact_no`, `date_in`, `date_out`, `booked_cid`, `status`, `date_updated`) VALUES
(47, '1267985522\n', 4, 'Mr. R R Akmeemana', '0773697070', '2020-12-23 07:45:00', '2020-12-24 07:45:00', 0, 2, '2020-12-23 13:09:36'),
(50, '578030417\n', 5, 'Mr. G G Akmeemana', '+94 22-444-8555', '2020-12-23 08:27:00', '2020-12-26 08:27:00', 7, 1, '2020-12-23 14:16:23'),
(51, '4537899593\n', 0, 'Nilesh', '0773697070', '2020-12-23 09:25:00', '2020-12-26 09:25:00', 8, 0, '2020-12-23 13:55:41'),
(52, '8420109720\n', 0, 'Ridmal', '0773697070', '2020-12-23 09:28:00', '2020-12-26 09:28:00', 7, 0, '2020-12-23 13:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `tel` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `discription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `tel`, `email`, `discription`) VALUES
(3, 'Ridmal', 'Akmeemana', '0773697070', 'rajeewaakmeemana@gmail.com', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Available , 1= Unvailables'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `category_id`, `status`) VALUES
(4, 'Room-001', 7, 0),
(5, 'Room-002', 7, 1),
(6, 'Room-101', 8, 0),
(7, 'Room-102', 8, 0),
(8, 'Room-201', 9, 0),
(9, 'Room-202', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

CREATE TABLE `room_categories` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`id`, `name`, `price`, `cover_img`) VALUES
(7, 'Single Room', 100, '1608660960_1600480680_2.jpg'),
(8, 'Double Room', 200, '1608663540_1600480740_3.jpg'),
(9, 'Family Room', 400, '1608663540_1600480260_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `hotel_name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `hotel_name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'booking.com', 'info@sample.com', '+94 22-444-8555', '1608709860_theater-bg.jpg', '&lt;h1 style=&quot;text-align: center; margin-bottom:10px;&quot;&gt;&lt;span style=&quot;text-align: center; font-size: 26px;&quot;&gt;&lt;span style=&quot;font-size:30px;text-align: center;&quot;&gt;&amp;nbsp;Booking.com&lt;/span&gt;&lt;br&gt;&lt;div&gt;&lt;image src =&quot;assets/img/1608663240_1608663180_2 CE LA VI Colombo 2c Outside View Edited.jpg&quot;&lt;/div&gt;&lt;br style=&quot;text-align: center;&quot;&gt;&lt;/span&gt;&lt;/h1&gt;&lt;h1 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:15px;text-align: center;&quot;&gt;We started our journey drawing inspiration from our country&rsquo;s most valuable spice, cinnamon. Just like its pleasant flavour and warm aroma, we infuse a rejuvenating spirit into every experience the world discovers with us.Today, with each property we present a new Sri Lanka that houses a contemporary outlook and a genial atmosphere. Together, they put us on the world map beyond the boundaries of hospitality. They make us a group passionate about living the true essence of each moment.&lt;/span&gt;&lt;/h1&gt;&lt;h1&gt;&lt;p&gt;&lt;/p&gt;&lt;/h1&gt;&lt;br&gt;\r\n&lt;h1 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;text-align: center; font-size: 26px;&quot;&gt;&lt;span style=&quot;font-size:30px;text-align: center;&quot;&gt;&amp;nbsp;Our Vistion&lt;/span&gt;&lt;br style=&quot;text-align: center;&quot;&gt;&lt;/span&gt;&lt;/h1&gt;&lt;h1 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:15px;text-align: center;&quot;&gt;We&rsquo;re committed to creating a safe and relaxing experience, including delivering an even cleaner stay from check-in to check-out. By offering continued travel flexibility and putting the health and safety of our guest and team members front and center, we will provide complete peace of mind when you stay with any of our 18 brands across the world.&lt;/span&gt;&lt;/h1&gt;&lt;h1&gt;&lt;p&gt;&lt;/p&gt;&lt;/h1&gt;&lt;br&gt;\r\n&lt;h1 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;text-align: center; font-size: 26px;&quot;&gt;&lt;span style=&quot;font-size:30px;text-align: center;&quot;&gt;&amp;nbsp;Our Mission&lt;/span&gt;&lt;br style=&quot;text-align: center;&quot;&gt;&lt;/span&gt;&lt;/h1&gt;&lt;h1 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:15px;text-align: center;&quot;&gt;We&rsquo;re committed to creating a safe and relaxing experience, including delivering an even cleaner stay from check-in to check-out. By offering continued travel flexibility and putting the health and safety of our guest and team members front and center, we will provide complete peace of mind when you stay with any of our 18 brands across the world.&lt;/span&gt;&lt;/h1&gt;&lt;h1&gt;&lt;p&gt;&lt;/p&gt;&lt;/h1&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checked`
--
ALTER TABLE `checked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_categories`
--
ALTER TABLE `room_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checked`
--
ALTER TABLE `checked`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room_categories`
--
ALTER TABLE `room_categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
