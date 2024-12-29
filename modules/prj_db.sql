-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220822.84e30c2c86
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 07:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prj_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `description` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food_list`
--

CREATE TABLE `food_list` (
  `id` int(2) NOT NULL,
  `cat_id` int(1) NOT NULL,
  `Category` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Price` double NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_list`
--

INSERT INTO `food_list` (`id`, `cat_id`, `Category`, `Name`, `Price`, `description`, `image`, `status`) VALUES
(1, 1, 'veg soup starter', 'Lentil Soup', 100, 'Hearty lentils with huge variety of seasonings\r\nand pair beautifully with a host of other ingredients, from soya to tomatoes.', './images/lentilsoup.jpg', 'enable'),
(2, 1, 'veg soup starter', 'Tomato Soup', 90, 'The sweet and silky tomato soup, a classic comfort food.', './images/tomato-soup.jpg', 'enable'),
(3, 1, 'nveg soup starter', 'Chicken and Rice Soup', 120, 'a mirepoix of celery, carrots and onion, alongside chicken in chicken broth. This classic replaces pasta with rice for a healthier and more flavorful result.', './images/chicken-and-rice soup.jpg', 'enable'),
(4, 1, 'veg salad starter', 'Beet and Citrus Salad', 90, 'Chalk the salad’s vibrant appearance up to red beets, golden beets and Valencia oranges', './images/beet-and-citrus-salad.jpg', 'enable'),
(5, 1, 'salad starter nveg', 'Cream and Spice Chicken s', 130, 'The dukkah spice blend, a combo of cumin, sesame seeds, coriander and peanuts.', './images/Cream n Spice Chicken_Salad.jpg', 'enable'),
(6, 1, 'salad starter nveg', 'Indonesian Chicken salad', 130, 'A delicious combo of peanut butter, soy sauce, sriracha, ginger and rice wine vinegar.', './images/Indonesian_Chicken_Salad.jpg', 'enable'),
(7, 2, 'cutlet sides veg', 'Veg Cutlet', 100, 'A choice of boiled and mushy vegetables making it nutritional. The colour and texture make it irresistible.', './images/veg-cutlet.jpg', 'enable'),
(8, 2, 'cutlet sides veg', 'Paneer Cutlet', 130, 'Juicy and tender paneer with right amount of twists in taste', './images/Paneer-Cutlet.jpg', 'enable'),
(9, 2, 'cutlet sides veg', 'Soya Cutlets', 125, 'Nutritious soyabean with perfect crispy texture- healthy protein rich snack.', './images/soya-cutlet.jpg', 'enable'),
(10, 2, 'cutlet sides nveg', 'Chicken Cutlets', 135, 'Loaded crispy Chicken cutlet', './images/chicken-cutlet.jpg', 'enable'),
(11, 2, 'cutlet sides nveg', 'Prawn Cutlets', 140, 'A deliciously crunchy starter or snack, served alongside a tangy dipping sauce', './images/prawn-cutlet.jpg', 'enable'),
(12, 2, 'fry sides veg', 'Gobi Manchurian', 120, 'Crispy cauliflower florets coated in the spicy, sweet, and tangy Manchurian.', './images/Gobi-Manchuri.jpg', 'enable'),
(13, 2, 'fry sides veg', 'Paneer Manchurian', 135, 'Crispy paneer cubes coated in the spicy, sweet, and tangy Manchurian sauce!', './images/paneer manchurian.jpg', 'enable'),
(14, 2, 'fry sides nveg', 'Chicken Manchurian', 140, 'Tender chicken coated in the spicy, sweet, and tangy Manchurian sauce!', './images/chicken_manchurian.jpg', 'enable'),
(15, 2, 'fry sides nveg', 'Chicken Kabab', 130, 'Fresh, tender and spicy chicken kabab', './images/chicken-kabab.jpg', 'enable'),
(16, 2, 'fry sides nveg', 'Chicken Sheek kabab', 140, 'Arabian style of kabab with a tangy taste of pepper !!', './images/Seekh-Kebab.jpg', 'enable'),
(17, 3, 'wrap mcourse veg', 'Paneer Roll', 90, 'Classic kolkata Paneer Kati Roll', './images/paneer roll.jpg', 'enable'),
(18, 3, 'wrap veg mcourse', 'Veg Roll', 80, 'Classic kolkata Veg Kati Roll', './images/veg-roll.jpg', 'enable'),
(19, 3, 'wrap nveg mcourse', 'Chicken Roll', 100, 'Classic kolkata Chicken Kati Roll', './images/chicken-kathi-roll.jpg', 'enable'),
(20, 3, 'wrap nveg mcourse', 'Chicken Wrap', 140, 'Arabian style of fusion taste !!', './images/chicken-wrap.jpg', 'enable'),
(21, 3, 'wrap mcourse veg', 'Veg Wrap', 130, 'The hummus and fresh herbs add tons of flavor for a delicious, satisfying, and healthy meal', './images/veg-wrap.jpg', 'enable'),
(22, 3, 'lsg mcourse veg', 'Veg Lasagna', 160, 'Made with whole wheat noodles and all the fresh Spring veggies to get your hands on!', './images/veg-lasagna.jpg', 'enable'),
(23, 3, 'lsg mcourse veg', 'Chicken Lasagna', 180, 'Tender chicken layered with veggies, cheese, and lasagna noodles in rich creamy alfredo inspired sauce', './images/Chicken-Lasagna.jpg', 'enable'),
(24, 3, 'sushi mcourse nveg', 'Makezushi', 180, 'a strip of fresh tuna, cucumber, or pickled daikon', './images/makezushi.jpg', 'enable'),
(25, 3, 'sushi mcourse nveg', 'Nigiri Sushi', 180, 'A thin slice of raw or cooked seafood like salmon atop a mound of vinegary rice.', './images/nigri-sushi.jpg', 'enable'),
(26, 3, 'tand bred mcourse veg', 'Tandoori Roti', 15, 'An Indian bread that was traditionally made in Tandoor.', './images/Tandoori-Roti.jpg', 'enable'),
(27, 2, 'tand sides nveg', 'Tandoori Chicken', 160, 'Spicy, flavourful, with a unique smoky aroma', './images/Tandoori-Chicken.jpg', 'enable'),
(28, 2, 'tand sides veg', 'Tandoori Paneer', 140, 'Juicy chunks of paneer marinated in a punchy hot and sour tandoori masala', './images/Tandoori-Paneer.jpg', 'enable'),
(29, 2, 'bbq sides nveg', 'BBQ Chicken', 170, 'BBQ-ed until juicy and tender, then coated in BBQ sauce and cooked until caramelized.', './images/bbq-chicken.jpg', 'enable'),
(30, 3, 'bbq mcourse nveg piz', 'BBQ Chicken Pizza', 180, 'Jam-packed with onions, cilantro, cheese, BBQ sauce, and chicken.', './images/bbqchickenpizza.jpg', 'enable'),
(31, 3, 'nood mcourse nveg', 'Chicken Noodles', 170, 'Noodles tossed with chicken and veggies and sauces on high flame to make this delicacy', './images/chicken noodles.jpg', 'enable'),
(32, 3, 'nood mcourse veg', 'Veg Noodles', 150, 'Noodles tossed with veggies and sauces on high flame to make this delicacy.', './images/Veg-Noodles.jpg', 'enable'),
(33, 3, 'nood mcourse veg', 'Hibachi Noodles', 180, 'Noodles stir-fried in butter along with a few sauces and brown sugar.', './images/Hibachi-Noodles.jpg', 'enable'),
(34, 3, 'nood mcourse veg', 'Cheese ramen', 160, 'Classic Korean comfort food that\'s hearty, filling, and super delicious.', './images/Cheese-Ramen.jpg', 'enable'),
(35, 3, 'gravi mcourse nveg', 'Butter Chicken', 150, 'Most Popular for its sweet and spicyness.', './images/Butter-Chicken.jpg', 'enable'),
(36, 3, 'gravi mcourse nveg', 'Chicken tikka Masala', 140, 'Creamy onion tomato gravy, infused with smoke flavor', './images/Chicken-Tikka-Masala.jpg', 'enable'),
(37, 3, 'gravi mcourse nveg', 'Chettinad Pepper Chicken', 165, 'Spicy, full of flavors, and hearty', './images/Chettinad-pepper-Chicken.jpg', 'enable'),
(38, 3, 'gravi mcourse veg', 'Kashmiri Lal Paneer', 140, 'Simple and flavorful paneer gravy', './images/Kashmiri-Laal-Paneer.jpg', 'enable'),
(39, 3, 'gravi mcourse veg', 'Paneer Butter Masala', 150, 'Rich and creamy paneer simmered in an onion tomato gravy', './images/Paneer-Butter-Masala.jpg', 'enable'),
(40, 3, 'gravi mcourse veg', 'Jaisalmeri Channa gravy', 130, 'Rajasthani style of black chickpeas cooked in a yogurt-based curry.', './images/Jaisalmeri-Chana.jpg', 'enable'),
(41, 3, 'gravi mcourse veg', 'Kala Chana Curry', 135, 'Brings together varied spices and can be enjoyed as is', './images/Kala-Chana-Curry.jpg', 'enable'),
(42, 3, 'rice mcourse veg', 'Ghee Rice', 125, 'Rice cooked with lots of ghee and spices.', './images/Ghee-Rice.jpg', 'enable'),
(43, 3, 'rice mcourse veg', 'Pudhina Rice', 130, 'Made using rice, mint, veggies, and a few spices.', './images/Pudina-Rice.jpg', 'enable'),
(44, 3, 'rice mcourse veg', 'Jeera Rice', 125, 'Made with rice, cumin seeds, and a few other spices.', './images/Jeera-Rice.jpg', 'enable'),
(45, 3, 'rice mcourse nveg', 'Chicken Biriyani', 170, 'Delicious medley of chicken, spices, ghee, saffron, and flavourful basmati rice.', './images/Chicken-Biryani.jpg', 'enable'),
(46, 3, 'rice mcourse veg', 'Pulao', 150, 'Delicious medley of succulent vegetables, spices, ghee, saffron, and flavourful basmati rice.', './images/Veg-Pulao.jpg', 'enable'),
(47, 3, 'rice mcourse nveg', 'Prawn Biriyani', 180, 'Delicious medley of tender prawns, spices, and flavourful basmati rice', './images/Prawn-Biryani.jpg', 'enable'),
(48, 3, 'rice mcourse veg', 'Veg Fried Rice', 140, 'Classic chinese veg fried rice.', './images/VegFried-Rice.jpg', 'enable'),
(49, 3, 'rice mcourse nveg', 'Chicken Fried Rice', 155, 'Classic chinese chicken fried rice.', './images/chicken-Fried-Rice.jpg', 'enable'),
(50, 3, 'piz mcourse veg', 'Margherita', 150, 'Plain and cheesy Pizza', './images/Margherita.jpg', 'enable'),
(51, 3, 'piz mcourse nveg', 'Pepper Chicken Pizza', 180, 'Chicken Pizza with a smoky flavour', './images/pepper-Chicken-Pizza.jpg', 'enable'),
(52, 3, 'piz mcourse veg', 'Paneer Tikka Pizza', 165, 'Tangy Paneer Tikka along with the taste of the pizza', './images/paneer-pizza.jpg', 'enable'),
(53, 3, 'burg mcourse nveg', 'Louisana chicken Burger', 160, 'Largest Burger you can have', './images/Louisana chickenburg.jpg', 'enable'),
(54, 3, 'burg mcourse veg', 'Louisana Veg Burger', 140, 'Largest Burger you can have', './images/veg burger.jpg', 'enable'),
(55, 3, 'bred mcourse veg', 'Chapathi', 10, 'Rolled Indian bread made using whole wheat flour.', './images/chapathi.jpg', 'enable'),
(56, 3, 'bred mcourse veg', 'Kerala Parota', 15, 'Layered Indian flatbread that goes great with curries.', './images/Kerala-Parotta.jpg', 'enable'),
(57, 3, 'bred mcourse veg', 'Roti', 10, 'Classic North Indian Bread', './images/roti.jpg', 'enable'),
(58, 3, 'past mcourse veg', 'White Sauce Pasta', 170, 'Juicy and Mayo-ee pasta', './images/White-Sauce-Pasta.jpg', 'enable'),
(59, 3, 'past mcourse nveg', 'Chicken Flourentine Pasta', 180, 'Pungent flavour of garlic with the lovely charred flavour of the red bell peppers', './images/Chicken-Florentine-Pasta.jpg', 'enable'),
(60, 3, 'past mcourse veg', 'Cheese Macaroni', 155, 'Cheesiest Pasta you can ask for !', './images/mac n cheese.jpg', 'enable'),
(61, 3, 'past mcourse nveg', 'Tuscan Chicken Pasta', 170, 'Get the smoky flavoured one-pot pasta.', './images/TuscanPasta.jpg', 'enable'),
(62, 4, 'dest ic veg', 'Trio Split', 130, '3 Flavours, with all the sundae toppings', './images/trio-split.jpg', 'enable'),
(63, 4, 'dest ic veg', 'Death By Chocolate', 160, 'Its nice to go to heaven cus of chocolate', './images/dbc.jpg', 'enable'),
(64, 4, 'dest ic veg', 'Hot Chocolate Fudge', 145, 'Vanilla with a mixture of chocolate', './images/hot chocolate fudge.jpg', 'enable'),
(65, 4, 'dest ic veg', 'Strawberry fudge', 155, 'Blend Ice-cream with Strawberries', './images/Strawberry-sundae.jpg', 'enable'),
(66, 0, 'pstry dest veg', 'Chocolate Pastry', 75, 'Classic Chocolate Pastry', './images/Chocolate-Truffle-Pastry.jpg', 'enable'),
(67, 4, 'pstry dest veg', 'Pineapple Pastry', 70, 'Pineapple flavoured Pastry, an unforgettable taste !', './images/Pineapple-pastry.jpg', 'enable'),
(68, 4, 'sweet dest veg', 'Kaju Katli (100gms)', 70, 'Most preferred indian sweet', './images/kaju-katli.jpg', 'enable'),
(69, 4, 'sweet dest veg', 'Gulab jamun (100gms)', 70, 'Taste the balls of sweetness.', './images/jamun.jpg', 'enable'),
(71, 4, 'sweet dest veg', 'Ladoo (100gms)', 60, 'The most common festive sweet.', './images/ladoo.jpg', 'enable'),
(72, 5, 'juice bvg veg', 'Sweet Lime Juice', 55, 'Quench your thirst with pulpy sweet lime', './images/mosambi-juice.jpg', 'enable'),
(73, 5, 'juice bvg veg', 'Watermelon Juice', 40, 'Quench your thirst with pulpy watermelon juice', './images/Watermelon-Juice.jpg', 'enable'),
(74, 5, 'juice bvg veg', 'Orange Juice', 50, 'Quench your thirst with pulpy orange juice', './images/orange-juice.jpg', 'enable'),
(75, 5, 'juice bvg veg', 'Mango Juice', 55, 'Quench your thirst with pulpy Mango juice', './images/mango-juice.jpg', 'enable'),
(76, 5, 'mojito bvg veg', 'Strawberry Lemonade', 60, 'Freshly squeezed lemons team up with juicy strawberries.', './images/strawberry-lemonade.jpg', 'enable'),
(77, 5, 'mojito bvg veg', 'Arnold Palmer', 60, 'Half iced tea, half lemonade—100% refreshing.', './images/arnold-palmer.jpg', 'enable'),
(78, 5, 'mojito bvg veg', 'Pineapple-Mint Mocktail', 75, ' Mojito-inspired drink. Bonus: it\'s sugar-free too!', './images/pineapple-mojito.jpg', 'enable');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(4) NOT NULL,
  `order_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` int(6) DEFAULT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `item_id` int(4) DEFAULT NULL,
  `item_name` varchar(25) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `order_total` int(6) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_booking`
--

CREATE TABLE `table_booking` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Cust_count` int(1) NOT NULL,
  `Timing` time NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phono` varchar(10) NOT NULL,
  `passwrd` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `phono`, `passwrd`, `email`, `address`) VALUES
(9, 'Sagar', 'male', '1234234', '1234', 'p@gmail.com', 'Hennur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_list`
--
ALTER TABLE `food_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_booking`
--
ALTER TABLE `table_booking`
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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food_list`
--
ALTER TABLE `food_list`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `table_booking`
--
ALTER TABLE `table_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
