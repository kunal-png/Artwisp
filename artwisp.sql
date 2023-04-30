-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 10:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artwisp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`email`, `password`) VALUES
('kunalx0072@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `Artist_id` int(11) NOT NULL,
  `Artist_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(18, '127.0.0.1', 1),
(32, '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'original'),
(2, 'print'),
(3, 'digital'),
(4, 'sculpture');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 11, 191680619, 41, 0, 'pending'),
(2, 12, 1528006482, 40, 0, 'pending'),
(3, 12, 1567699190, 34, 0, 'pending'),
(4, 12, 364328657, 49, 0, 'pending'),
(5, 12, 1485110213, 45, 0, 'pending'),
(6, 12, 555741987, 20, 0, 'pending'),
(7, 12, 1524910850, 42, 0, 'pending'),
(8, 12, 1897883839, 42, 0, 'pending'),
(9, 12, 542265567, 49, 0, 'pending'),
(10, 12, 1489814048, 38, 0, 'pending'),
(11, 12, 2096969643, 47, 0, 'pending'),
(12, 12, 172751852, 34, 0, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `Artist_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `product_img`, `product_price`, `Artist_name`, `quantity`) VALUES
(17, 'Cat mcDonalds', 'Painting, Acrylic on Canvas  Size: 91.4 W x 61 H x 2.5 D cm  Ships in a Box', '', 2, 'Array', '5000', 'Bob Ross', 0),
(19, 'Catty Night', 'Fun spin on the world famous Starry night, 6\"\" x 12\"\" printed on 20gsm thick canvas', 'cat, painting, print,funny', 2, 'cattynight.jpg', '1500', 'Micheal', 0),
(20, 'Big Cat', 'Painting, Acrylic on Canvas  Size: 91.4 W x 61 H x 2.5 D cm  Ships in a Box', 'cat, painting, vintage, water, oil, cool', 1, 'catcat.jpg', '8000', 'poopy Harlow', 0),
(21, 'Catto Lisa', 'Oil on canvas, 6\' x 8\' , purrfect addition for you room', 'cat, painting, print, funny, meow', 1, 'catto_lisa.jpg', '12000', 'David', 0),
(22, 'global Cattering', 'High Quality digital print, on 300 gsm cotton blend paper, lasts over a 100 years just like your debt', 'cat, meow, painting, ', 2, 'classical-paintings-zarathustra-fat-cat-art-svetlana-petrova-thumb640.jpg', '5000', 'Funsuk Wangdoo', 0),
(23, 'Sub chahiye', 'perfect addition for your bathroom wall, or on your toilet roll', 'hip-hop, rap, funny, poster', 2, 'sub chahiye.png', '200', 'Kunal', 0),
(24, '27.04.23', 'Digital asset, no you cannot screenshot this, you must buy plese :(', 'cover, black & white, monochrome', 3, 'print.png', '500', 'Kunal', 0),
(25, 'seedhe maut babyy', 'seedhemaut poster printed on metal yuh', 'tbsm4l', 2, 'Instagram post - 16.png', '1500', 'Kunal', 0),
(26, 'prabhdeep kon??', 'lau fer!!', 'tbsm4l', 2, 'praa_final_final.png', '200', 'Kunal', 0),
(27, 'Seedhemaut metal', 'digital asset, 1/1', 'tbsm4l', 3, 'sm.png', '2000', 'Kunal', 0),
(28, 'Gun control', 'perfect for your school decor, buy it before the next event!!!', 'poster, gun, ', 2, 'test-renderpng.png', '200', 'Kunal', 0),
(29, 'nayaab GA', 'seedhemaut poster printed on metal yuh', 'tbsm4l', 2, 'sm_gandi_aulaad.png', '200', 'Kunal', 0),
(30, 'orange cat', 'digital asset, puurfect for prints and stuff', 'cat, doodle, digital', 3, 'catprint.png', '200', 'Kunal', 0),
(31, 'masterpiece', 'Crayons , water colors on paper. crafted with perfection', 'funny, art, very nice', 1, 'welcome-1640082138.jpg', '100000', 'Majnu Bhai', 0),
(32, 'Hoarse', 'Words much', 'very nice, horse', 1, 'horse-1.jpg', '50000', 'Tom', 0),
(33, 'Kaguya Wave', 'own the classic Kaguya wave,  and copyright everyone else like a boss', 'japanese', 3, 'great-wave-of-kanagawa-wallpaper-safari_2163645_20220209104301.jpg', '100000', 'Juun ni huun', 0),
(34, 'The Meow', 'who wants the original when you can have the best', 'cat, painting, vintage, water, oil', 1, 'cat painting.jpg', '50000', 'shreck', 0),
(35, 'CAT? cat', 'put it in your room, put it in you car, put it in your mouth, nooo dont eat it ', 'cat, poster', 2, 'poster cat.jpg', '200', 'Pinterest Sharma', 0),
(36, 'tall slim fellow', 'perfect gift for your neighbors', 'metal', 4, 'gen-press_giacometti_walkingman_custom-f5cfe0492ce7b7e785e80a811ace9d21965a74ea-s1100-c50.jpg', '15000', 'bhindu Gonzalves', 0),
(37, 'Mummy', 'Lost your mom? dont worry buy this mummy to fill the void', 'egypt', 4, 'image.jpg', '30000', 'Rob c', 0),
(38, 'Hand', 'wooden hand perfect if you wanna hold someone you lonely fcuk', 'wood, hand', 4, '16612510_img-20230301-134803.jpg', '600000', 'mijipukulo', 0),
(39, 'Batman', 'clay sculpt, baked to perfection, keep away from joker', 'batman', 4, 'aa54e5cb48004ed5e91f7d6ef96cc9da.jpg', '25000', 'Bruce Wayne', 0),
(40, 'Seedhemaut fan art', 'seedhemaut poster printed on metal yuh', 'tbsm4l', 2, 'seedhemaut_final.png', '200', 'Kunal', 0),
(41, 'cement city', 'cement the aesthetic of the city, painted on cement with actual cement', 'mm, painting, gray', 1, 'image 3.png', '5000', 'jeff', 0),
(42, 'Scarface', 'its all in the eyes rico, painted by the late artist tarantine. one of the timeless classics presented at the met', 'mm, painting, gray', 1, 'image 4.png', '15000', 'tarantine', 0),
(43, 'Midnight forest', 'a walk on a rainy night, lost in the woods down on my mind', 'mm, painting, gray', 1, 'leslie-reyes-494e5256-73ea-4a43-bc8b-bc9f62ee5743.jpg', '8000', 'Karun', 0),
(44, 'Light II', 'Painting, Acrylic on Canvas  Size: 91.4 W x 61 H x 2.5 D cm  Ships in a Box', 'mm, painting, gray', 1, '04-Expanded-Levi-van-Veluw-Black-and-White-Monochromatic-Charcoal-Drawings-www-designstack-co.jpg', '6000', 'Cardi B', 0),
(45, 'Prententious Fukc', 'Poster Print, ', 'mm, digital, gray', 3, 'white.jpg', '500', 'Kunal', 0),
(46, 'Mexican Cat', 'Painting, Acrylic on Canvas  Size: 91.4 W x 61 H x 2.5 D cm  Ships in a Box', 'cat, painting, farm, vintage', 1, 'Group 17.png', '2500', 'Niaski', 0),
(47, 'Blue tide', 'Painting, Acrylic on Canvas  Size: 91.4 W x 61 H x 2.5 D cm  Ships in a Box', 'painting, blue', 1, 'Group 16.png', '3000', 'Ren Benjamin', 0),
(48, 'Superorganism', 'Be apart or be aparted', 'painting, weird, cool', 2, 'Group 15.png', '8500', 'Miyazaki', 0),
(49, 'Northern Lights', 'Painting, Acrylic on Canvas  Size: 91.4 W x 61 H x 2.5 D cm  Ships in a Box', 'painting, blue', 1, 'Group 13.png', '35000', 'Moist Cr1tikal', 0),
(50, 'summer at Mars', 'Painting, Acrylic on Canvas  Size: 91.4 W x 61 H x 2.5 D cm  Ships in a Box', 'red, mars, space, ', 1, 'Group 14.png', '6500', 'Elon Musk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amaount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amaount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 11, 0, 836624236, 2, '2023-04-05 20:04:33', 'Complete'),
(2, 11, 6500, 1289792, 2, '2023-04-05 19:56:45', 'Complete'),
(3, 11, 6500, 569843466, 2, '2023-04-05 20:04:39', 'Complete'),
(4, 11, 5200, 191680619, 2, '2023-04-05 20:04:45', 'Complete'),
(5, 12, 3700, 1528006482, 3, '2023-04-05 20:42:26', 'Complete'),
(6, 12, 50200, 1567699190, 2, '2023-04-05 21:18:57', 'Complete'),
(7, 12, 40000, 364328657, 2, '2023-04-05 21:32:26', 'Complete'),
(8, 12, 900, 1485110213, 3, '2023-04-05 21:32:45', 'Complete'),
(9, 12, 8000, 555741987, 1, '2023-04-05 21:32:31', 'Complete'),
(10, 12, 15500, 1524910850, 2, '2023-04-05 21:32:36', 'Complete'),
(11, 12, 15000, 1897883839, 1, '2023-04-05 21:32:41', 'Complete'),
(12, 12, 148200, 542265567, 6, '2023-04-07 10:27:40', 'Complete'),
(13, 12, 600200, 1489814048, 2, '2023-04-07 10:37:32', 'Complete'),
(14, 12, 3000, 2096969643, 1, '2023-04-09 19:40:34', 'Complete'),
(15, 12, 52000, 172751852, 2, '2023-04-09 20:26:02', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(2, 2, 1289792, 6500, '', '2023-04-05 19:56:45'),
(4, 1, 836624236, 0, '', '2023-04-05 20:04:33'),
(5, 3, 569843466, 6500, '', '2023-04-05 20:04:39'),
(6, 4, 191680619, 5200, '', '2023-04-05 20:04:45'),
(7, 5, 1528006482, 3700, '', '2023-04-05 20:42:26'),
(8, 6, 1567699190, 50200, '', '2023-04-05 21:18:57'),
(9, 7, 364328657, 40000, '', '2023-04-05 21:32:26'),
(10, 9, 555741987, 8000, '', '2023-04-05 21:32:31'),
(11, 10, 1524910850, 15500, '', '2023-04-05 21:32:36'),
(12, 11, 1897883839, 15000, '', '2023-04-05 21:32:41'),
(13, 8, 1485110213, 900, '', '2023-04-05 21:32:45'),
(14, 12, 542265567, 148200, '', '2023-04-07 10:27:40'),
(15, 13, 1489814048, 600200, '', '2023-04-07 10:37:32'),
(16, 14, 2096969643, 3000, '', '2023-04-09 19:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `User_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `User_mobile`) VALUES
(12, 'kunal', 'kunalx0072@gmail.com', '1234', '', '::1', '123, pkl, india etc', '7018032571');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`Artist_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `Artist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
