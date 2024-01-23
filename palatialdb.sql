-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 08:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palatialdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodations`
--

CREATE TABLE `accommodations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accommodation_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_standard` int(11) NOT NULL DEFAULT 0,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accommodation_descriptions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accommodations`
--

INSERT INTO `accommodations` (`id`, `accommodation_name`, `price`, `currency`, `category`, `national_standard`, `type`, `accommodation_descriptions`, `phone`, `email`, `url`, `seo`, `location_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Leo Glenn', 825, 'USD', 'Lodge', 3, 'Comfort', 'Libero quia voluptat', '', '', 'Sed omnis nesciunt', 'Est quis ut voluptatem voluptatem doloribus sunt non non enim autem', 1, 1, '2021-10-15 17:10:04', '2021-10-27 08:28:35'),
(2, 'Joshua Cleveland', 164, 'USD', 'Hotel', 0, 'Comfort', 'Labore non ut ab vel', '', '', 'Esse omnis est dele', 'Ipsa distinctio Atque ut modi alias soluta fugit omnis impedit', 2, 1, '2021-10-15 17:10:21', '2021-10-15 17:10:21'),
(3, 'Accasion Camp', 100, 'USD', 'Hotel', 3, 'Comfort', 'ggsa gggdsd', '', '', 'www.hyatt.com', 'sgsgdg', 3, 1, '2021-11-16 08:56:19', '2021-11-16 08:56:19'),
(6, 'National Park', 80, 'USD', 'Camp', 1, 'Basic', 'Land of elephant', '', '', NULL, 'Tarangire', 5, 1, '2021-12-01 19:06:00', '2021-12-01 19:06:00'),
(7, 'National Park', 100, 'USD', 'Hotel', 3, 'Comfort', 'Second highest mountain in Tanzania', '', '', NULL, 'Arusha', 4, 1, '2021-12-01 19:08:22', '2021-12-01 19:08:22'),
(8, 'Manyara', 56, 'USD', 'Camp', 2, 'Deluxe', 'Saadani', '', '', '#', NULL, 11, 1, '2021-12-01 19:40:30', '2021-12-01 19:40:30'),
(9, 'Tanzania Beach resort.', 250, 'USD', 'Hotel', 4, 'Comfort', 'The warm tropical sun peeks down at you from gaps in the leaves while the soft breezes scented with the unique fragrance of the spices growing on the island ...', '0673253898', 'reservation@tanzanitebeachresort.com', '#', 'Www.drongosafaris.com', 9, 1, '2021-12-06 16:24:05', '2021-12-09 22:02:42'),
(11, 'Baranco camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The Barranco Wall elevation is 257 meters (843 feet) high and is located on the side of Mount Kilimanjaro. The Barranco Wall is what climbers would refer to as a scramble, meaning it does not', '00', '#', '#', 'Drongosafaris.com', 35, 1, '2021-12-12 21:43:57', '2021-12-12 21:43:57'),
(12, 'Baranco camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The Barranco Wall elevation is 257 meters (843 feet) high and is located on the side of Mount Kilimanjaro. The Barranco Wall is what climbers would refer to as a scramble, meaning it does not', '00', '#', '#', 'Drongosafaris.com', 33, 1, '2021-12-12 22:05:33', '2021-12-12 22:05:33'),
(13, 'Baranco camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The Barranco Wall elevation is 257 meters (843 feet) high and is located on the side of Mount Kilimanjaro. The Barranco Wall is what climbers would refer to as a scramble, meaning it does not', '00', '#', '#', 'Drongosafaris.com', 37, 1, '2021-12-12 22:07:41', '2021-12-12 22:07:41'),
(14, 'Baranco camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The Barranco Wall elevation is 257 meters (843 feet) high and is located on the side of Mount Kilimanjaro. The Barranco Wall is what climbers would refer to as a scramble, meaning it does not', '00', '#', '#', 'Drongosafaris.com', 36, 1, '2021-12-12 22:10:05', '2021-12-12 22:10:05'),
(17, 'Ariana Mcclain', 306, 'EUR', 'Camp', 5, 'Deluxe', 'Quidem aliquid obcae', '+1 (814) 837-5811', 'kepuq@mailinator.com', 'Odio commodo aute et', 'Consequatur hic aut ad molestiae ea sit dolore enim maiores iste', 0, 1, '2021-12-13 12:39:54', '2021-12-13 12:39:54'),
(18, 'Karanga camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Karanga hut and campsite is located next to the Karanga valley, requiring most people to go through it, before reaching the campsite from the west (during ascent).\r\n\r\nIt is also south of Kibo', '00', '#', '#', 'Drongosafaris.com', 36, 1, '2021-12-13 12:41:10', '2021-12-13 12:41:10'),
(19, 'Karanga camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Karanga hut and campsite is located next to the Karanga valley, requiring most people to go through it, before reaching the campsite from the west (during ascent).\r\n\r\nIt is also south of Kibo', '00', '#', '#', 'Drongosafaris.com', 37, 1, '2021-12-13 12:45:22', '2021-12-13 12:45:22'),
(20, 'Karanga camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Karanga hut and campsite is located next to the Karanga valley, requiring most people to go through it, before reaching the campsite from the west (during ascent).\r\n\r\nIt is also south of Kibo', '00', '#', '#', 'Drongosafaris.com', 33, 1, '2021-12-13 12:47:13', '2021-12-13 12:47:13'),
(21, 'Karanga camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Karanga hut and campsite is located next to the Karanga valley, requiring most people to go through it, before reaching the campsite from the west (during ascent).\r\n\r\nIt is also south of Kibo', '00', '#', '#', 'Drongosafaris.com', 35, 1, '2021-12-13 12:48:19', '2021-12-13 12:48:19'),
(22, 'Barafu camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Barafu Camp is a campsite on Mount Kilimanjaro, situated at an altitude of 4,673 meters (15,330 feet). It is used as last camp before climbers attempt the final summit push on the Southern Ci', '00', '#', '#', 'Drongosafaris.com', 35, 1, '2021-12-13 13:00:53', '2021-12-13 13:00:53'),
(23, 'Barafu camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Barafu Camp is a campsite on Mount Kilimanjaro, situated at an altitude of 4,673 meters (15,330 feet). It is used as last camp before climbers attempt the final summit push on the Southern Ci', '00', '#', '#', 'Drongosafaris.com', 33, 1, '2021-12-13 13:02:06', '2021-12-13 13:02:06'),
(24, 'Barafu camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Barafu Camp is a campsite on Mount Kilimanjaro, situated at an altitude of 4,673 meters (15,330 feet). It is used as last camp before climbers attempt the final summit push on the Southern Ci', '00', '#', '#', 'Drongosafaris.com', 37, 1, '2021-12-13 13:03:20', '2021-12-13 13:03:20'),
(25, 'Barafu camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Barafu Camp is a campsite on Mount Kilimanjaro, situated at an altitude of 4,673 meters (15,330 feet). It is used as last camp before climbers attempt the final summit push on the Southern Ci', '00', '#', '#', 'Drongosafaris.com', 36, 1, '2021-12-13 13:06:19', '2021-12-13 13:06:19'),
(26, 'Mweka camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Mweka Camp is a descent-only campsite from the Shira, Lemosho, Machame and Umbwe Routes. The Camp is located on the descent route of the Shira, Lemosho, Umbwe and Machame Routes at an elevati', '00', '#', '#', 'Drongosafaris.com', 35, 1, '2021-12-13 13:56:13', '2021-12-13 13:56:13'),
(27, 'Mweka camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Mweka Camp is a descent-only campsite from the Shira, Lemosho, Machame and Umbwe Routes. The Camp is located on the descent route of the Shira, Lemosho, Umbwe and Machame Routes at an elevati', '00', '#', '#', 'Drongosafaris.com', 33, 1, '2021-12-13 13:57:39', '2021-12-13 13:57:39'),
(28, 'Mweka camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Mweka Camp is a descent-only campsite from the Shira, Lemosho, Machame and Umbwe Routes. The Camp is located on the descent route of the Shira, Lemosho, Umbwe and Machame Routes at an elevati', '00', '#', '#', 'Drongosafaris.com', 36, 1, '2021-12-13 13:59:12', '2021-12-13 13:59:12'),
(29, 'Mweka camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Mweka Camp is a descent-only campsite from the Shira, Lemosho, Machame and Umbwe Routes. The Camp is located on the descent route of the Shira, Lemosho, Umbwe and Machame Routes at an elevati', '00', '#', '#', 'Drongosafaris.com', 40, 1, '2021-12-13 14:01:13', '2021-12-13 14:01:13'),
(30, 'Horombo huts 🛖', 0, 'USD', 'Camp', 1, 'Basic', 'Location of Horombo huts campsiteHorombo huts campsite sits on the south eastern part of mount Kilmanjaro, atop one of Mawenzi\'s ridges.', '00', '#', '#', 'Drongosafaris.com', 34, 1, '2021-12-13 15:08:59', '2021-12-13 15:08:59'),
(31, 'Horombo huts 🛖', 0, 'USD', 'Camp', 1, 'Basic', 'Location of Horombo huts campsiteHorombo huts campsite sits on the south eastern part of mount Kilmanjaro, atop one of Mawenzi\'s ridges.', '00', '#', '#', 'Drongosafaris.com', 38, 1, '2021-12-13 15:10:29', '2021-12-13 15:10:29'),
(32, 'Kibo camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Altitude 4720 m a m s l A campsite and lodge at the eastern base of Kibo volcanic cone of mt Kilimanjaro It is mostly used as a resting point by climbers on ...', '00', '#', '#', 'Drongosafaris.com', 34, 1, '2021-12-13 15:20:29', '2022-01-10 13:51:37'),
(33, 'Kibo camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Altitude 4720 m a m s l A campsite and lodge at the eastern base of Kibo volcanic cone of mt Kilimanjaro It is mostly used as a resting point by climbers on ...', '00', '#', '#', 'Drongosafaris.com', 38, 1, '2021-12-13 15:22:03', '2022-01-10 13:52:19'),
(34, 'Machame camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The Machame route on Kilimanjaro is a seven day camping route which allows for excellent acclimatisation and particularly diverse scenery.', '00', '#', '#', 'Drongosafaris.com', 35, 1, '2021-12-13 15:26:44', '2021-12-13 15:26:44'),
(35, 'Shira cave camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The Shira cave is called cave because it is close to a cave that was used as accommodation in the early days of climbing Kilimanjaro.', '00', '#', '#', 'Drongosafaris.com', 35, 1, '2021-12-13 15:30:51', '2021-12-13 15:30:51'),
(36, 'Big tree camp site', 0, 'USD', 'Camp', 1, 'Basic', 'This is a easy one way trail to Big Tree Camp in Kilimanjaro National Park. This trail goes by Mti Mkubwa.', '00', '#', '#', 'Drongosafaris.com', 33, 1, '2021-12-13 15:44:23', '2021-12-13 15:44:23'),
(37, 'Shira one camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The Shira Route is the only Kilimanjaro climb route that you can follow in a car, at least for part of the way on day one', '00', '#', '#', 'Drongosafaris.com', 33, 1, '2021-12-13 15:55:21', '2021-12-13 15:55:21'),
(38, 'Shira two camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The route approaches Mount Kilimanjaro from the west, beginning with a long drive from Moshi to Shira Ridge.', '00', '#', '#', 'Drongosafaris.com', 33, 1, '2021-12-13 16:09:18', '2021-12-13 16:09:18'),
(39, 'Umbwe cave camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Umbwe cave camp is an overnight resting point and also the first campsite that is encountered by hikers on the Umbwe route of mt. Kilimanjaro. ... From here, there is still quite a considereb', '00', '#', '#', 'Drongosafaris.com', 37, 1, '2021-12-13 16:13:16', '2021-12-13 16:13:16'),
(40, 'Mandara hut 🛖', 0, 'USD', 'Camp', 1, 'Basic', 'Browse the best tours in Mandara Hut with 333 reviews visiting places like Mandara Hut and Horombo Hut. All Major Brands. Biggest selection. Best Prices.', '00', '#', '#', 'Drongosafaris.com', 34, 1, '2021-12-13 16:17:30', '2021-12-13 16:17:30'),
(41, 'Simba cave camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Location of Simba campsiteSimba campsite is located on the north eastern side of mount Kilimanjaro near Rongai gate and the Tanzania - Kenya border. The next camp from here is Second cave cam', '00', '#', '#', 'Drongosafaris.com', 38, 1, '2021-12-13 16:21:31', '2021-12-13 16:21:31'),
(42, 'Second cave camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The second cave campsite is an optional overnight resting point or campsite that is situated along the Rongai hiking route of mt. Kilimanjaro. Here we say \"optional\" because hikers have the o', '00', '#', '#', 'Drongosafaris.com', 38, 1, '2021-12-13 16:25:32', '2021-12-13 16:25:32'),
(43, 'Kilelelwa camp site', 0, 'USD', 'Camp', 1, 'Basic', 'The nights at the campsite are also very quiet, so be sure to bring a few friends along if you are not brave at heart.\r\n\r\nThe next camp after this is the Mawenzi tarn camp while the previous', '00', '#', '#', 'Drongosafaris.com', 38, 1, '2021-12-13 16:31:29', '2022-01-10 13:56:15'),
(44, 'Turn hut 🛖', 0, 'USD', 'Camp', 1, 'Basic', '#', '00', '#', '#', 'Drongosafaris.com', 38, 1, '2021-12-13 16:42:28', '2021-12-13 16:42:28'),
(45, 'School  hut 🛖', 0, 'USD', 'Camp', 1, 'Basic', 'School huts camp Elevation / Altitude: 4710 meters above sea level. School huts camp exists on Mount Kilimanjaro\'s Alpine desert region.', '00', '#', '#', 'Drongosafaris.com', 38, 1, '2021-12-13 16:54:52', '2021-12-13 16:54:52'),
(46, 'School  hut 🛖', 0, 'USD', 'Camp', 1, 'Basic', 'School huts camp Elevation / Altitude: 4710 meters above sea level. School huts camp exists on Mount Kilimanjaro\'s Alpine desert region.', '00', '#', '#', 'Drongosafaris.com', 40, 1, '2021-12-13 16:56:41', '2021-12-13 16:56:41'),
(47, 'Third cave camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Third cave campsite is an overnight resting point on mount Kilimanjaro that is used by hikers on the Rongai and Northern circuit routes. It is the third campsite on the Rongai route, after th', '00', '#', '#', 'Drongosafaris.com', 38, 1, '2021-12-13 17:02:10', '2021-12-13 17:02:10'),
(48, 'Third cave camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Third cave campsite is an overnight resting point on mount Kilimanjaro that is used by hikers on the Rongai and Northern circuit routes. It is the third campsite on the Rongai route, after th', '00', '#', '#', 'Drongosafaris.com', 40, 1, '2021-12-13 17:03:12', '2021-12-13 17:03:12'),
(49, 'Shira one camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Shira 1 campsite is located on the Shira plateau, in the western end of mount Kilimanjaro.\r\n\r\nThere are two other campsites that share the same name, namely the Shira 2, and Shira cave campsi', '00', '#', '#', 'Drongosafaris.com', 36, 1, '2021-12-13 17:08:20', '2021-12-13 17:08:20'),
(50, 'Shira one camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Shira 1 campsite is located on the Shira plateau, in the western end of mount Kilimanjaro.\r\n\r\nThere are two other campsites that share the same name, namely the Shira 2, and Shira cave campsi', '00', '#', '#', 'Drongosafaris.com', 40, 1, '2021-12-13 17:09:37', '2021-12-13 17:09:37'),
(51, 'Moir huts 🛖', 0, 'USD', 'Camp', 1, 'Basic', 'Moir\'s hut camp is an overnight resting point near the Moir\'s hut of mount Kilimanjaro, an old wooden hut. It is exclusively used by hikers on the northern circuit route as it is well off the', '00', '#', '#', 'Drongosafaris.com', 36, 1, '2021-12-13 17:17:59', '2021-12-13 17:17:59'),
(52, 'Moir huts 🛖', 0, 'USD', 'Camp', 1, 'Basic', 'Moir\'s hut camp is an overnight resting point near the Moir\'s hut of mount Kilimanjaro, an old wooden hut. It is exclusively used by hikers on the northern circuit route as it is well off the', '00', '#', '#', 'Drongosafaris.com', 40, 1, '2021-12-13 17:18:56', '2021-12-13 17:18:56'),
(53, 'Shira two camp site', 0, 'USD', 'Camp', 0, 'Basic', 'Shira Route - Ultimate Kilimanjaro\r\nshira two kilimanjaro from www.ultimatekilimanjaro.com\r\nThe Shira route crosses the entire Shira Plateau from west to east in a pleasant, relatively flat h', '00', '#', '#', 'Drongosafaris.com', 36, 1, '2021-12-13 17:26:14', '2021-12-13 17:26:14'),
(54, 'Pofu camp site', 0, 'USD', 'Camp', 1, 'Basic', 'Pofu camp is located on the lower base of the Kibo volcanic cone, the highest peak on Mount Kilimanjaro.', '00', '#', '#', 'Drongosafaris.com', 40, 1, '2021-12-13 17:30:37', '2021-12-13 17:30:37'),
(55, 'Mweka gate', 0, 'USD', 'Camp', 0, 'Basic', 'A gentle trek takes us down through the rainforest to Mweka Gate, where we complete park formalities and receive certificates, which you can hang up ...', '00', '#', '#', 'Drongosafaris.com', 33, 1, '2021-12-15 13:42:26', '2021-12-15 14:29:22'),
(56, 'Uhuru peak', 0, 'USD', 'Camp', 0, 'Basic', 'Uhuru Peak: Kilimanjaro is Africa\'s tallest mountain with Uhuru peak being its highest point.', '00', '#', '#', 'Drongosafaris.com', 9, 1, '2021-12-15 14:05:23', '2021-12-15 14:05:23'),
(57, 'Marangu  gate', 0, 'USD', 'Camp', 0, 'Basic', 'Location of Marangu gateMarangu gate lies in the south-eastern foothills of Mt. Kilimanjaro and in the suburb of Marangu. Unlike other gates into the park, ...', '00', '#', '#', 'Drongosafaris.com', 9, 1, '2021-12-15 16:09:01', '2021-12-15 16:09:01'),
(58, 'Ngngongare gate', 0, 'USD', 'Camp', 0, 'Basic', 'From the Ngongongare Gate, it is another 17 km to Momella Gate, the starting point of the Mt. Meru hike. The road to Arusha National Park is signposted ...', '00', '#', '#', 'Drongosafaris.com', 4, 1, '2021-12-16 23:59:24', '2021-12-16 23:59:24'),
(59, 'Miriakamba huts  🛖', 0, 'USD', 'Camp', 0, 'Basic', 'Miriakamba Huts campsite Facilities\r\nEach Miriakamba lodge/room can accommodate up to 4 people at a go. These rooms are not self-contained. The campsite consists of a mess hall where the crew', '00', '#', '#', 'Drongosafaris.com', 41, 1, '2021-12-17 00:06:43', '2021-12-17 00:06:43'),
(60, 'Saddle huts 🛖', 0, 'USD', 'Camp', 0, 'Basic', 'The second camp encountered along the only route to the summit of Mt. Meru, consisting of lodges/houses that are split into several dormitory', '00', '#', '#', 'Drongosafaris.com', 42, 1, '2021-12-17 00:29:23', '2021-12-17 00:29:23'),
(61, 'Miriakamba huts  🛖', 0, 'USD', 'Camp', 0, 'Basic', 'The Mount Meru Climb and Hike is the best for acclimatization prior to Mount Kilimanjaro climbing; The Mountain is the third highest peak in .', '00', '#', '#', 'Drongosafaris.com', 43, 1, '2021-12-17 00:52:46', '2021-12-17 00:52:46'),
(62, 'Fig tree lodge', 100, 'USD', 'Lodge', 3, 'Comfort', 'Fig tree lodge and camp is located in Arusha province in small village of mto wa mbu, located in the lower part of great rift Valley and Northern of Lake Manyara.', '0786804423', '#', '#', 'Drongosafaris.com', 6, 1, '2021-12-19 13:08:53', '2021-12-22 16:53:23'),
(63, 'Fakana lodge', 100, 'USD', 'Lodge', 4, 'Deluxe', 'Campsite and lodge a central gateway to major tourism destinations of the northern circuit', '0754302682', 'Fanakasariscamps.co.tz', '#', 'Drongosafaris.com', 6, 1, '2021-12-19 13:28:03', '2021-12-19 13:28:03'),
(64, 'Silale swamp', 0, 'USD', 'Camp', 0, 'Basic', 'The remote Silale Swamp is one of the top highlights of the Tarangire ecosystem. The swamp acts as a giant sponge during the green season and slowly releases water during the dry season. Huge', '00', '#', '#', 'Drongosafaris.com', 0, 1, '2021-12-20 20:56:14', '2021-12-20 20:56:14'),
(65, 'Silale swamp', 0, 'USD', 'Camp', 0, 'Basic', 'The remote Silale Swamp is one of the top highlights of the Tarangire ecosystem. The swamp acts as a giant sponge during the green season and slowly releases water during the dry season. Huge', '00', '#', '#', 'Silale swamp Drongosafaris.com', 5, 1, '2021-12-20 21:22:53', '2021-12-20 21:29:15'),
(66, 'Manyara hot springs', 0, 'USD', 'Camp', 0, 'Basic', 'There is a hot water spring on the western shores of lake Manyara called Maji Moto hot water springs.', '00', '#', '#', 'Drongosafaris.com', 6, 1, '2021-12-21 14:15:35', '2021-12-21 14:15:35'),
(67, 'Manchi logde', 95, 'USD', 'Lodge', 1, 'Comfort', 'Holiday that modernity comfort together with the wild nature you can find only in Africa. Resort in Zanzibar is a five-starred resort offering a different kind of holiday.', '00', '#', '#', 'Drongosafaris- manchi hotel', 32, 1, '2021-12-28 16:17:20', '2021-12-28 16:17:20'),
(68, 'Mrusi house logde', 80, 'USD', 'Lodge', 1, 'Comfort', 'This property advises that enhanced cleaning and guest safety measures are currently in place.\r\n\r\nDisinfectant is used to clean the property; commonly-touched surfaces are cleaned with disinf', '00', '#', '#', 'Drongosafaris - mrusi house logde', 32, 1, '2021-12-28 16:38:50', '2021-12-28 16:38:50'),
(69, 'Tukaone serengeti camp and lodge', 220, 'USD', 'Camp', 1, 'Comfort', 'Tukaone Serengeti Camp is a private safari camp perfectly located at heart of Central Serengeti with perfect view of Hembe Hills overlooking endless plains of Serengeti. Its unique location p', '#', '#', '#', 'Drongosafaris.com - Tukaone serengeti e', 8, 1, '2022-01-03 14:49:16', '2022-01-03 14:49:16'),
(70, 'Arusha city', 100, 'USD', 'Hotel', 3, 'Comfort', 'Arusha is a city in East Africa\'s Tanzania, located at the base of volcanic Mt. Meru. It\'s a gateway to safari destinations and to Africa\'s highest peak, 5,895m Mt. Kilimanjaro, lying some 10', '#', '#', '#', 'Drongosafaris.com', 0, 1, '2022-01-04 17:46:42', '2022-01-04 17:46:42'),
(71, 'Tanganyika costal campsite', 100, 'USD', 'Camp', 1, 'Comfort', 'Tanganyika coastal campsite is ideally located on Saadani National Park in Bagamoyo in 51.8 km from the centre.', '#', '#', '#', 'Drongosafaris.com', 11, 1, '2022-01-19 14:48:45', '2022-01-19 14:48:45'),
(72, 'Elephant motel', 50, 'USD', 'Lodge', 0, 'Basic', 'The Elephant Motel is ideally situated along the Moshi - Dar es Salaam road, only half a kilometer from Same town. The motel offers spectacular views of the South Pare Mountains and because o', '#', '#', '#', 'Drongosafaris.com', 10, 1, '2022-01-24 16:00:44', '2022-01-24 16:00:44'),
(73, 'Camping site', 15, 'USD', 'Camp', 0, 'Basic', 'Welcomed and camping with us spend one night with maasai people and experience new lifestyle and adventures with maasai people,', '#', '#', '#', 'Cultural tour-drongosafaris', 53, 58, '2022-01-24 18:05:46', '2022-01-24 18:05:46'),
(74, 'Mapumziko logde', 100, 'USD', 'Lodge', 0, 'Comfort', 'Selous Mapumziko lodge is a budget lodge safari located at the heart of the famous Nyerere National Park which was known as Selous game reserve in southern Tanzania. It is a local owned and m', '#', '#', '#', 'Mapumziko logde-drongosafaris.com', 15, 1, '2022-01-26 16:38:14', '2022-01-26 16:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_inclusives`
--

CREATE TABLE `accommodation_inclusives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inclusive_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accommodation_inclusives`
--

INSERT INTO `accommodation_inclusives` (`id`, `inclusive_id`, `tour_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2021-10-15 17:11:28', '2021-10-15 17:11:28'),
(2, 2, 2, 1, '2021-10-19 17:27:09', '2021-10-19 17:27:09'),
(3, 2, 3, 1, '2021-10-19 18:45:55', '2021-10-19 18:45:55'),
(4, 1, 4, 1, '2021-10-30 18:44:09', '2021-10-30 18:44:09'),
(5, 2, 5, 1, '2021-10-30 18:58:11', '2021-10-30 18:58:11'),
(6, 2, 6, 1, '2021-10-30 19:04:00', '2021-10-30 19:04:00'),
(7, 1, 7, 1, '2021-10-30 19:04:33', '2021-10-30 19:04:33'),
(8, 1, 9, 1, '2021-11-03 16:08:27', '2021-11-03 16:08:27'),
(9, 1, 8, 1, '2021-11-16 03:23:58', '2021-11-16 03:23:58'),
(10, 2, 8, 1, '2021-11-16 03:24:00', '2021-11-16 03:24:00'),
(11, 2, 9, 1, '2021-11-16 04:10:14', '2021-11-16 04:10:14'),
(12, 1, 11, 1, '2021-11-16 08:44:41', '2021-11-16 08:44:41'),
(13, 2, 11, 1, '2021-11-16 08:44:43', '2021-11-16 08:44:43'),
(14, 1, 12, 1, '2021-11-28 16:13:45', '2021-11-28 16:13:45'),
(15, 1, 13, 1, '2021-12-01 19:49:44', '2021-12-01 19:49:44'),
(16, 2, 13, 1, '2021-12-01 19:58:54', '2021-12-01 19:58:54'),
(17, 2, 4, 1, '2021-12-11 15:25:26', '2021-12-11 15:25:26'),
(18, 1, 14, 1, '2021-12-13 14:24:51', '2021-12-13 14:24:51'),
(19, 2, 15, 1, '2021-12-13 15:03:38', '2021-12-13 15:03:38'),
(20, 2, 16, 1, '2021-12-13 15:45:31', '2021-12-13 15:45:31'),
(21, 1, 17, 1, '2021-12-13 15:50:31', '2021-12-13 15:50:31'),
(23, 2, 18, 1, '2021-12-14 14:39:31', '2021-12-14 14:39:31'),
(24, 3, 18, 1, '2021-12-14 14:40:12', '2021-12-14 14:40:12'),
(25, 1, 18, 1, '2021-12-14 14:40:13', '2021-12-14 14:40:13'),
(26, 1, 25, 1, '2021-12-17 14:30:42', '2021-12-17 14:30:42'),
(27, 1, 26, 1, '2021-12-20 20:30:47', '2021-12-20 20:30:47'),
(28, 1, 27, 1, '2021-12-21 14:03:00', '2021-12-21 14:03:00'),
(29, 1, 28, 1, '2021-12-21 14:39:05', '2021-12-21 14:39:05'),
(30, 2, 28, 1, '2021-12-21 14:39:05', '2021-12-21 14:39:05'),
(31, 2, 30, 1, '2021-12-23 13:48:29', '2021-12-23 13:48:29'),
(32, 1, 30, 1, '2021-12-23 13:48:29', '2021-12-23 13:48:29'),
(33, 1, 35, 1, '2021-12-28 16:57:44', '2021-12-28 16:57:44'),
(34, 2, 38, 1, '2022-01-01 16:45:09', '2022-01-01 16:45:09'),
(36, 2, 42, 58, '2022-01-24 17:55:28', '2022-01-24 17:55:28'),
(37, 3, 31, 59, '2022-04-02 17:41:17', '2022-04-02 17:41:17'),
(38, 1, 48, 59, '2022-04-12 15:34:53', '2022-04-12 15:34:53'),
(39, 2, 48, 59, '2022-04-12 15:34:54', '2022-04-12 15:34:54'),
(40, 1, 51, 1, '2023-12-05 09:07:47', '2023-12-05 09:07:47'),
(41, 2, 51, 1, '2023-12-05 09:07:52', '2023-12-05 09:07:52'),
(42, 2, 52, 1, '2023-12-05 09:14:19', '2023-12-05 09:14:19'),
(43, 3, 52, 1, '2023-12-05 09:14:19', '2023-12-05 09:14:19'),
(44, 1, 53, 1, '2023-12-05 09:19:59', '2023-12-05 09:19:59'),
(45, 1, 54, 1, '2023-12-05 09:23:54', '2023-12-05 09:23:54'),
(46, 3, 54, 1, '2023-12-05 09:23:58', '2023-12-05 09:23:58'),
(47, 1, 55, 1, '2023-12-05 09:36:40', '2023-12-05 09:36:40'),
(48, 3, 56, 1, '2023-12-05 09:37:23', '2023-12-05 09:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addon_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` int(10) UNSIGNED NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `srsprice` decimal(8,2) UNSIGNED NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_highlight` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physical_rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `addon_name`, `days`, `price`, `srsprice`, `currency`, `category`, `type`, `style`, `overview`, `addon_highlight`, `physical_rating`, `seo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Grady Stein', 4, '280.00', '649.00', 'USD', 'Group', 'Safaris', 'Basic', 'Dicta aut saepe comm', 'Est accusamus neque', 'Average', 'Ea vel omnis quasi aut quidem culpa incidunt eiusmod officia occaecat id quas voluptate voluptas asperiores', 1, '2021-10-29 08:36:22', '2021-10-29 08:36:22'),
(2, 'Lev Blake', 2, '661.00', '876.00', 'USD', 'Private', 'Mt.Trekking', 'Confort', 'Omnis Nam et et occa', 'Quos dolore sunt pla', 'Demanding', 'Excepturi voluptatem itaque dolorem iste blanditiis velit suscipit recusandae', 1, '2021-10-29 08:45:00', '2021-10-29 08:45:00'),
(4, 'Phillip Wright', 2, '234.00', '435.00', 'USD', 'Group', 'Beach Holidays', 'Basic', 'Dignissimos nostrum', 'Magni non consequatu', 'Easy', 'Error temporibus corrupti tempora lorem', 1, '2021-11-01 06:31:25', '2021-11-01 06:31:25'),
(5, 'Francesca Whitaker', 2, '908.00', '566.00', 'USD', 'Private', 'Wildlife Safaris', 'Basic', 'Facere voluptas volu', 'Rerum excepturi ut e', 'Average', 'Deleniti ipsum illum maxime unde laudantium rem similique accusamus pariatur', 1, '2021-11-20 06:45:26', '2021-11-20 06:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` int(11) NOT NULL,
  `commisioner_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hear_about_us` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `first_name`, `last_name`, `photo`, `nationality`, `language`, `phone`, `email`, `pin`, `commisioner_desc`, `status`, `hear_about_us`, `created_at`, `updated_at`) VALUES
(1, 'Lucky', 'Kumar', 'IMG_1811.JPG_6111_2120_1641205727.jpg', 'Indian', 'Indian', '+919634441487', 'mr.luckykumar25@gmail.com', 97896517, 'My name is Lucky kumar and i am pursuing MBA in THM (last year) from Chandigarh University and I completed B.sc in H&HA from IHM Lucknow.', 'Active', 'LinkedIn', '2022-01-03 15:28:47', '2022-01-03 15:28:47'),
(2, 'Martin', 'mremi', '20220121_105438_1642751931.jpg', 'Tanzania', 'English', '0621322551', 'martinmremi2019@gmail.com', 93474866, 'Marketing', 'Active', 'Fa', '2022-01-21 12:58:51', '2022-01-21 12:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` int(10) UNSIGNED NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `destination_id`, `attachment`, `type`, `created_at`, `updated_at`) VALUES
(2, 1, 'th1_1634328517.jpg', 'Destination', '2021-10-15 17:08:37', '2021-10-15 17:08:37'),
(3, 2, 'lion2_1634328535.jpg', 'Destination', '2021-10-15 17:08:55', '2021-10-15 17:08:55'),
(4, 1, 'beach1_1634328604.jpg', 'Accommodation', '2021-10-15 17:10:04', '2021-10-15 17:10:04'),
(5, 2, 'lights_1634328622.jpg', 'Accommodation', '2021-10-15 17:10:22', '2021-10-15 17:10:22'),
(8, 1, 'th1_1635239684.jpg', 'Posts', '2021-10-23 04:03:29', '2021-10-26 06:14:45'),
(9, 1, 'grandMellia2_1635417123.jpg', 'Testimonies', '2021-10-28 07:32:03', '2021-10-28 07:32:03'),
(10, 2, 'imgbox4_1635417132.jpg', 'Testimonies', '2021-10-28 07:32:12', '2021-10-28 07:32:12'),
(11, 3, 'imgbox2_1635507941.jpg', 'addon', '2021-10-29 08:45:42', '2021-10-29 08:45:42'),
(16, 4, 'imgbox5_1635759085.jpg', 'addon', '2021-11-01 06:31:26', '2021-11-01 06:31:26'),
(17, 1, 'grandMellia3_1637005218.jpg', 'Service', '2021-11-15 16:40:18', '2021-11-15 16:40:18'),
(20, 11, 'Screenshot_20211224-174023_Google_1640356885.jpg', 'Programs', '2021-11-16 08:44:11', '2021-12-24 19:41:25'),
(21, 3, 'lion2_1637063430.jpg', 'Destination', '2021-11-16 08:50:30', '2021-11-16 08:50:30'),
(22, 3, 'log1_1637063779.jpg', 'Accommodation', '2021-11-16 08:56:19', '2021-11-16 08:56:19'),
(23, 5, 'lion2_1637401526.jpg', 'addon', '2021-11-20 06:45:26', '2021-11-20 06:45:26'),
(24, 7, 'grandMellia1_1638007049.jpg', 'tailor_made', '2021-11-27 06:57:29', '2021-11-27 06:57:29'),
(25, 20, 'Screenshot_20211214-134130_Google_1639478553.jpg', 'Programs', '2021-11-28 15:59:15', '2021-12-14 15:42:33'),
(28, 4, 'image_b2a84efe-723d-45e4-b268-fc2693335ff920211201_133431_1638366637.jpg', 'Destination', '2021-12-01 18:50:37', '2021-12-01 18:50:37'),
(29, 5, 'image_87f547e5-c68b-4809-8256-b65c2acea17020211201_132356_1638366855.jpg', 'Accommodation', '2021-12-01 18:54:15', '2021-12-01 18:54:15'),
(30, 6, 'image_0207e97f-da5d-405f-a087-940b72efa16120211201_133859_1638367560.jpg', 'Accommodation', '2021-12-01 19:06:00', '2021-12-01 19:06:00'),
(31, 7, 'image_9e6cbc77-8456-453f-8f95-de9f330592e920211201_152101_1638367702.jpg', 'Accommodation', '2021-12-01 19:08:22', '2021-12-01 19:08:22'),
(32, 8, 'grandMellia_1638369630.jpg', 'Accommodation', '2021-12-01 19:40:30', '2021-12-01 19:40:30'),
(34, 9, 'Screenshot_20211206-140619_Google_1638953454.jpg', 'Accommodation', '2021-12-06 16:24:05', '2021-12-08 13:50:55'),
(35, 5, 'Screenshot_20211017-210956_Photos_1639124763.jpg', 'Destination', '2021-12-10 13:26:03', '2021-12-10 13:26:03'),
(36, 6, '578x375_1639293531.webp', 'Destination', '2021-12-12 12:18:51', '2021-12-12 12:18:51'),
(37, 7, '578x386_1639294593.webp', 'Destination', '2021-12-12 12:36:33', '2021-12-12 12:36:33'),
(38, 8, 'barranco-wall-mt-kilimanjaro-2_1639295650.jpg', 'Destination', '2021-12-12 12:54:10', '2021-12-12 12:54:10'),
(39, 9, 'karanga-camp-machame-route-mount-kilimanjaro_4_300_225_1639296430.jpg', 'Destination', '2021-12-12 13:07:10', '2021-12-12 13:07:10'),
(40, 10, '47839494502_433ba140a5_1639296810.jpg', 'Destination', '2021-12-12 13:13:30', '2021-12-12 13:13:30'),
(41, 11, 'karanga-camp-machame-route-mount-kilimanjaro_4_300_225_1639297136.jpg', 'Destination', '2021-12-12 13:18:56', '2021-12-12 13:18:56'),
(42, 12, 'mweka-camp-machame-route-climbing-killimanjaro-tanzania__1920x864_1639298042.jpg', 'Destination', '2021-12-12 13:34:02', '2021-12-12 13:34:02'),
(43, 13, 'Screenshot_20211212-115403_Google_1639299403.jpg', 'Destination', '2021-12-12 13:56:43', '2021-12-12 13:56:43'),
(44, 14, 'Screenshot_20211212-115818_Google_1639299955.jpg', 'Destination', '2021-12-12 14:05:55', '2021-12-12 14:05:55'),
(45, 15, 'Screenshot_20211212-115818_Google_1639300243.jpg', 'Destination', '2021-12-12 14:10:43', '2021-12-12 14:10:43'),
(46, 16, 'Screenshot_20211212-121229_Google_1639300909.jpg', 'Destination', '2021-12-12 14:21:49', '2021-12-12 14:21:49'),
(47, 17, 'Screenshot_20211212-123036_Google_1639301575.jpg', 'Destination', '2021-12-12 14:32:55', '2021-12-12 14:32:55'),
(48, 18, 'Screenshot_20211212-123449_Google_1639301937.jpg', 'Destination', '2021-12-12 14:38:57', '2021-12-12 14:38:57'),
(49, 19, 'Screenshot_20211212-125236_Google_1639302908.jpg', 'Destination', '2021-12-12 14:55:08', '2021-12-12 14:55:08'),
(50, 20, 'Screenshot_20211212-125648_Google_1639303225.jpg', 'Destination', '2021-12-12 15:00:25', '2021-12-12 15:00:25'),
(51, 21, 'Screenshot_20211212-141421_Google_1639307949.jpg', 'Destination', '2021-12-12 16:19:09', '2021-12-12 16:19:09'),
(52, 22, 'Screenshot_20211212-143346_Google_1639309000.jpg', 'Destination', '2021-12-12 16:36:40', '2021-12-12 16:36:40'),
(53, 23, 'barafu_camp__1920x864_1639309220.jpg', 'Destination', '2021-12-12 16:40:20', '2021-12-12 16:40:20'),
(54, 24, 'Screenshot_20211212-125631_Google_1639309379.jpg', 'Destination', '2021-12-12 16:42:59', '2021-12-12 16:42:59'),
(55, 25, 'Screenshot_20211212-125631_Google_1639309564.jpg', 'Destination', '2021-12-12 16:46:04', '2021-12-12 16:46:04'),
(56, 26, 'Screenshot_20211212-144818_Google_1639310091.jpg', 'Destination', '2021-12-12 16:54:51', '2021-12-12 16:54:51'),
(57, 27, 'Screenshot_20211212-145610_Google_1639310501.jpg', 'Destination', '2021-12-12 17:01:41', '2021-12-12 17:01:41'),
(58, 28, 'Screenshot_20211212-145556_Google_1639310634.jpg', 'Destination', '2021-12-12 17:03:54', '2021-12-12 17:03:54'),
(59, 29, 'Screenshot_20211212-150644_Google_1639310904.jpg', 'Destination', '2021-12-12 17:08:24', '2021-12-12 17:08:24'),
(60, 30, 'Screenshot_20211212-151152_Google_1639311384.jpg', 'Destination', '2021-12-12 17:16:24', '2021-12-12 17:16:24'),
(61, 31, 'Screenshot_20211212-152125_Google_1639311884.jpg', 'Destination', '2021-12-12 17:24:44', '2021-12-12 17:24:44'),
(62, 32, 'Screenshot_20211212-152844_Google_1639312242.jpg', 'Destination', '2021-12-12 17:30:42', '2021-12-12 17:30:42'),
(63, 33, 'Screenshot_20211212-153835_Google_1639312835.jpg', 'Destination', '2021-12-12 17:40:35', '2021-12-12 17:40:35'),
(64, 34, 'Screenshot_20211212-154217_Google_1639313140.jpg', 'Destination', '2021-12-12 17:45:40', '2021-12-12 17:45:40'),
(65, 35, 'rongai-route-kilimanjaro-climb-3_1639314174.jpg', 'Destination', '2021-12-12 18:02:54', '2021-12-12 18:02:54'),
(66, 36, 'Screenshot_20211212-160441_Google_1639314569.jpg', 'Destination', '2021-12-12 18:09:29', '2021-12-12 18:09:29'),
(67, 37, 'Screenshot_20211212-160558_Google_1639314701.jpg', 'Destination', '2021-12-12 18:11:41', '2021-12-12 18:11:41'),
(68, 38, 'Screenshot_20211212-161501_Google_1639315113.jpg', 'Destination', '2021-12-12 18:18:33', '2021-12-12 18:18:33'),
(69, 39, 'Screenshot_20211212-125236_Google_1639316411.jpg', 'Destination', '2021-12-12 18:40:11', '2021-12-12 18:40:11'),
(70, 40, 'Screenshot_20211212-164221_Google_1639316797.jpg', 'Destination', '2021-12-12 18:46:37', '2021-12-12 18:46:37'),
(71, 41, 'Screenshot_20211212-164828_Google_1639317127.jpg', 'Destination', '2021-12-12 18:52:07', '2021-12-12 18:52:07'),
(72, 42, 'Screenshot_20211212-165603_Google_1639317581.jpg', 'Destination', '2021-12-12 18:59:41', '2021-12-12 18:59:41'),
(73, 43, 'Screenshot_20211212-170440_Google_1639317988.jpg', 'Destination', '2021-12-12 19:06:28', '2021-12-12 19:06:28'),
(74, 44, 'Screenshot_20211212-171155_Google_1639318547.jpg', 'Destination', '2021-12-12 19:15:47', '2021-12-12 19:15:47'),
(75, 45, 'Screenshot_20211212-172049_Google_1639318991.jpg', 'Destination', '2021-12-12 19:23:11', '2021-12-12 19:23:11'),
(76, 46, 'Screenshot_20211212-172427_Google_1639319301.jpg', 'Destination', '2021-12-12 19:28:21', '2021-12-12 19:28:21'),
(77, 47, 'Screenshot_20211212-174038_Google_1639320093.jpg', 'Destination', '2021-12-12 19:41:33', '2021-12-12 19:41:33'),
(78, 48, 'Screenshot_20211212-172427_Google_1639320572.jpg', 'Destination', '2021-12-12 19:49:32', '2021-12-12 19:49:32'),
(79, 49, 'Screenshot_20211212-125236_Google_1639320857.jpg', 'Destination', '2021-12-12 19:54:17', '2021-12-12 19:54:17'),
(80, 50, 'barafu_camp__1920x864_1639321122.jpg', 'Destination', '2021-12-12 19:58:42', '2021-12-12 19:58:42'),
(81, 51, 'Screenshot_20211212-125236_Google_1639321313.jpg', 'Destination', '2021-12-12 20:01:53', '2021-12-12 20:01:53'),
(82, 52, 'Screenshot_20211212-113539_Google_1639321616.jpg', 'Destination', '2021-12-12 20:06:56', '2021-12-12 20:06:56'),
(83, 53, 'Screenshot_20211212-174038_Google_1639322213.jpg', 'Destination', '2021-12-12 20:16:53', '2021-12-12 20:16:53'),
(84, 54, 'shira_camp_3_850m__1920x864_1639322527.jpg', 'Destination', '2021-12-12 20:22:07', '2021-12-12 20:22:07'),
(85, 55, 'Screenshot_20211212-182437_Google_1639322925.jpg', 'Destination', '2021-12-12 20:28:45', '2021-12-12 20:28:45'),
(86, 56, 'Screenshot_20211212-115818_Google_1639323174.jpg', 'Destination', '2021-12-12 20:32:54', '2021-12-12 20:32:54'),
(87, 57, 'Screenshot_20211212-183531_Google_1639323482.jpg', 'Destination', '2021-12-12 20:38:02', '2021-12-12 20:38:02'),
(88, 58, 'Screenshot_20211212-165603_Google_1639323732.jpg', 'Destination', '2021-12-12 20:42:12', '2021-12-12 20:42:12'),
(89, 59, 'Screenshot_20211212-113539_Google_1639324321.jpg', 'Destination', '2021-12-12 20:52:01', '2021-12-12 20:52:01'),
(90, 11, 'Screenshot_20211212-193224_Google_1639327437.jpg', 'Accommodation', '2021-12-12 21:43:57', '2021-12-12 21:43:57'),
(91, 12, 'Screenshot_20211212-200232_Google_1639328733.jpg', 'Accommodation', '2021-12-12 22:05:33', '2021-12-12 22:05:33'),
(92, 13, 'Screenshot_20211212-193224_Google_1639328861.jpg', 'Accommodation', '2021-12-12 22:07:41', '2021-12-12 22:07:41'),
(93, 14, 'Screenshot_20211212-160441_Google_1639329005.jpg', 'Accommodation', '2021-12-12 22:10:05', '2021-12-12 22:10:05'),
(94, 15, 'lion2_1639380266.jpg', 'Accommodation', '2021-12-13 12:24:26', '2021-12-13 12:24:26'),
(95, 16, 'log1_1639380875.jpg', 'Accommodation', '2021-12-13 12:34:35', '2021-12-13 12:34:35'),
(96, 18, 'Screenshot_20211213-103438_Google_1639381270.jpg', 'Accommodation', '2021-12-13 12:41:10', '2021-12-13 12:41:10'),
(97, 19, 'Screenshot_20211213-103756_Google_1639381522.jpg', 'Accommodation', '2021-12-13 12:45:22', '2021-12-13 12:45:22'),
(98, 20, 'Screenshot_20211213-103809_Google_1639381633.jpg', 'Accommodation', '2021-12-13 12:47:13', '2021-12-13 12:47:13'),
(99, 21, 'Screenshot_20211213-103840_Google_1639381699.jpg', 'Accommodation', '2021-12-13 12:48:19', '2021-12-13 12:48:19'),
(100, 22, 'Screenshot_20211213-105222_Google_1639382453.jpg', 'Accommodation', '2021-12-13 13:00:53', '2021-12-13 13:00:53'),
(101, 23, 'Screenshot_20211213-105300_Google_1639382526.jpg', 'Accommodation', '2021-12-13 13:02:06', '2021-12-13 13:02:06'),
(102, 24, 'Screenshot_20211213-105320_Google_1639382600.jpg', 'Accommodation', '2021-12-13 13:03:20', '2021-12-13 13:03:20'),
(103, 25, 'Screenshot_20211213-105335_Google_1639382779.jpg', 'Accommodation', '2021-12-13 13:06:19', '2021-12-13 13:06:19'),
(104, 26, 'Screenshot_20211213-114947_Google_1639385773.jpg', 'Accommodation', '2021-12-13 13:56:13', '2021-12-13 13:56:13'),
(105, 27, 'Screenshot_20211213-115142_Google_1639385859.jpg', 'Accommodation', '2021-12-13 13:57:39', '2021-12-13 13:57:39'),
(106, 28, 'Screenshot_20211213-115015_Google_1639385952.jpg', 'Accommodation', '2021-12-13 13:59:12', '2021-12-13 13:59:12'),
(107, 29, 'Screenshot_20211213-115003_Google_1639386073.jpg', 'Accommodation', '2021-12-13 14:01:13', '2021-12-13 14:01:13'),
(109, 30, 'Screenshot_20211212-173221_Google_1639390139.jpg', 'Accommodation', '2021-12-13 15:08:59', '2021-12-13 15:08:59'),
(110, 31, 'Screenshot_20211212-170440_Google_1639390229.jpg', 'Accommodation', '2021-12-13 15:10:29', '2021-12-13 15:10:29'),
(111, 32, 'Screenshot_20220110-112052_Google_1641804697.jpg', 'Accommodation', '2021-12-13 15:20:29', '2022-01-10 13:51:37'),
(112, 33, 'Screenshot_20220110-114244_Google_1641804739.jpg', 'Accommodation', '2021-12-13 15:22:03', '2022-01-10 13:52:19'),
(113, 34, 'Screenshot_20211213-132426_Google_1639391204.jpg', 'Accommodation', '2021-12-13 15:26:44', '2021-12-13 15:26:44'),
(114, 35, 'Screenshot_20211213-132844_Google_1639391451.jpg', 'Accommodation', '2021-12-13 15:30:51', '2021-12-13 15:30:51'),
(115, 36, 'Screenshot_20211212-115403_Google_1639392263.jpg', 'Accommodation', '2021-12-13 15:44:23', '2021-12-13 15:44:23'),
(116, 37, 'Screenshot_20211213-133907_Google_1639392921.jpg', 'Accommodation', '2021-12-13 15:55:21', '2021-12-13 15:55:21'),
(117, 38, 'Screenshot_20211213-140611_Google_1639393758.jpg', 'Accommodation', '2021-12-13 16:09:18', '2021-12-13 16:09:18'),
(118, 39, 'Screenshot_20211213-141051_Google_1639393996.jpg', 'Accommodation', '2021-12-13 16:13:16', '2021-12-13 16:13:16'),
(119, 40, 'Screenshot_20211212-150644_Google_1639394250.jpg', 'Accommodation', '2021-12-13 16:17:30', '2021-12-13 16:17:30'),
(120, 41, 'Screenshot_20211213-141917_Google_1639394491.jpg', 'Accommodation', '2021-12-13 16:21:31', '2021-12-13 16:21:31'),
(121, 42, 'Screenshot_20211213-142255_Google_1639394732.jpg', 'Accommodation', '2021-12-13 16:25:32', '2021-12-13 16:25:32'),
(122, 43, 'Screenshot_20220110-115411_Google_1641804975.jpg', 'Accommodation', '2021-12-13 16:31:29', '2022-01-10 13:56:15'),
(123, 45, 'Screenshot_20211213-144745_Google_1639396492.jpg', 'Accommodation', '2021-12-13 16:54:52', '2021-12-13 16:54:52'),
(124, 46, 'Screenshot_20211212-125236_Google_1639396601.jpg', 'Accommodation', '2021-12-13 16:56:41', '2021-12-13 16:56:41'),
(125, 47, 'Screenshot_20211213-145815_Google_1639396930.jpg', 'Accommodation', '2021-12-13 17:02:10', '2021-12-13 17:02:10'),
(126, 48, 'Screenshot_20211213-145929_Google_1639396992.jpg', 'Accommodation', '2021-12-13 17:03:13', '2021-12-13 17:03:13'),
(127, 49, 'Screenshot_20211213-150450_Google_1639397300.jpg', 'Accommodation', '2021-12-13 17:08:20', '2021-12-13 17:08:20'),
(128, 50, 'Screenshot_20211213-150450_Google_1639397377.jpg', 'Accommodation', '2021-12-13 17:09:37', '2021-12-13 17:09:37'),
(129, 51, 'Screenshot_20211213-151527_Google_1639397879.jpg', 'Accommodation', '2021-12-13 17:17:59', '2021-12-13 17:17:59'),
(130, 52, 'Screenshot_20211213-151519_Google_1639397936.jpg', 'Accommodation', '2021-12-13 17:18:56', '2021-12-13 17:18:56'),
(131, 53, 'Screenshot_20211213-152258_Google_1639398374.jpg', 'Accommodation', '2021-12-13 17:26:14', '2021-12-13 17:26:14'),
(132, 54, 'Screenshot_20211213-152848_Google_1639398637.jpg', 'Accommodation', '2021-12-13 17:30:37', '2021-12-13 17:30:37'),
(133, 18, 'image_973ede4e-0fc4-4713-adea-bfb070a845cb20220902_124625_1662373510.jpg', 'Programs', '2021-12-14 14:38:55', '2022-09-05 14:25:11'),
(134, 19, 'Screenshot_20211214-131346_Google_1639476910.jpg', 'Programs', '2021-12-14 15:15:10', '2021-12-14 15:15:10'),
(135, 21, 'Screenshot_20211214-134455_Google_1639479471.jpg', 'Programs', '2021-12-14 15:57:51', '2021-12-14 15:57:51'),
(136, 22, 'Screenshot_20211214-140158_Google_1639480875.jpg', 'Programs', '2021-12-14 16:21:15', '2021-12-14 16:21:15'),
(137, 23, 'Screenshot_20211214-143841_Google_1639482245.jpg', 'Programs', '2021-12-14 16:44:05', '2021-12-14 16:44:05'),
(138, 24, 'Screenshot_20211214-145505_Google_1639483314.jpg', 'Programs', '2021-12-14 17:01:54', '2021-12-14 17:01:54'),
(139, 60, 'Screenshot_20211213-133907_Google_1639492558.jpg', 'Destination', '2021-12-14 19:35:58', '2021-12-14 19:35:58'),
(140, 61, 'uhuru-peak-kilimanjaro-768x512_1639516016.jpg', 'Destination', '2021-12-15 02:06:56', '2021-12-15 02:06:56'),
(141, 55, 'Screenshot_20211215-121640_Google_1639560562.jpg', 'Accommodation', '2021-12-15 13:42:26', '2021-12-15 14:29:22'),
(142, 56, 'Screenshot_20211215-120437_Google_1639559123.jpg', 'Accommodation', '2021-12-15 14:05:23', '2021-12-15 14:05:23'),
(143, 57, 'Screenshot_20211215-140604_Google_1639566541.jpg', 'Accommodation', '2021-12-15 16:09:01', '2021-12-15 16:09:01'),
(144, 62, 'rongai-route-kilimanjaro-climb-3_1639595763.jpg', 'Destination', '2021-12-16 00:16:03', '2021-12-16 00:16:03'),
(145, 63, 'Screenshot_20211216-204609_Google_1639677057.jpg', 'Destination', '2021-12-16 22:50:57', '2021-12-16 22:50:57'),
(146, 64, 'Screenshot_20211216-213448_Google_1639680041.jpg', 'Destination', '2021-12-16 23:40:41', '2021-12-16 23:40:41'),
(147, 65, 'Screenshot_20211216-214627_Google_1639680490.jpg', 'Destination', '2021-12-16 23:48:10', '2021-12-16 23:48:10'),
(148, 66, 'Screenshot_20211216-215123_Google_1639680901.jpg', 'Destination', '2021-12-16 23:55:01', '2021-12-16 23:55:01'),
(149, 58, 'Screenshot_20211216-215813_Google_1639681164.jpg', 'Accommodation', '2021-12-16 23:59:24', '2021-12-16 23:59:24'),
(150, 59, 'Screenshot_20211216-220129_Google_1639681603.jpg', 'Accommodation', '2021-12-17 00:06:43', '2021-12-17 00:06:43'),
(151, 60, 'Screenshot_20211216-222624_Google_1639682963.jpg', 'Accommodation', '2021-12-17 00:29:23', '2021-12-17 00:29:23'),
(152, 61, 'Screenshot_20211216-224938_Google_1639684366.jpg', 'Accommodation', '2021-12-17 00:52:46', '2021-12-17 00:52:46'),
(153, 25, 'Screenshot_20211217-122924_Google_1639733420.jpg', 'Programs', '2021-12-17 14:30:20', '2021-12-17 14:30:20'),
(154, 62, 'Screenshot_20211219-110808_Google_1639901333.jpg', 'Accommodation', '2021-12-19 13:08:53', '2021-12-19 13:08:53'),
(155, 63, 'Screenshot_20211219-112658_Google_1639902483.jpg', 'Accommodation', '2021-12-19 13:28:03', '2021-12-19 13:28:03'),
(156, 26, 'image_7b7cf8c6-9d62-4682-a618-5c7ecc20f2b820220109_112700_1641722030.jpg', 'Programs', '2021-12-20 20:30:27', '2022-01-09 14:53:50'),
(157, 64, 'Screenshot_20211220-184141_Google_1640015774.jpg', 'Accommodation', '2021-12-20 20:56:14', '2021-12-20 20:56:14'),
(158, 67, 'Screenshot_20211220-185425_Google_1640016062.jpg', 'Destination', '2021-12-20 21:01:02', '2021-12-20 21:01:02'),
(159, 65, 'Screenshot_20211220-184141_Google_1640017755.jpg', 'Accommodation', '2021-12-20 21:22:53', '2021-12-20 21:29:15'),
(160, 27, 'Screenshot_20211221-115212_Google_1640077375.jpg', 'Programs', '2021-12-21 14:02:55', '2021-12-21 14:02:55'),
(161, 66, 'Screenshot_20211221-121352_Google_1640078135.jpg', 'Accommodation', '2021-12-21 14:15:35', '2021-12-21 14:15:35'),
(162, 28, 'Screenshot_20220109-122225_Google_1641721991.jpg', 'Programs', '2021-12-21 14:38:41', '2022-01-09 14:53:11'),
(163, 68, 'Screenshot_20211220-125755_Google_1640080546.jpg', 'Destination', '2021-12-21 14:55:46', '2021-12-21 14:55:46'),
(164, 69, 'Screenshot_20211220-162650_Google_1640080671.jpg', 'Destination', '2021-12-21 14:57:51', '2021-12-21 14:57:51'),
(165, 29, 'image_47f9a517-86a7-416f-910a-14f9dc62dfb520211222_151622_1640176111.jpg', 'Programs', '2021-12-22 17:28:31', '2021-12-22 17:28:31'),
(166, 70, 'Screenshot_20211222-170521_Google_1640182141.jpg', 'Destination', '2021-12-22 19:09:01', '2021-12-22 19:09:01'),
(167, 71, 'Screenshot_20211221-121352_Google_1640182485.jpg', 'Destination', '2021-12-22 19:14:45', '2021-12-22 19:14:45'),
(168, 72, 'Screenshot_20211222-160633_Google_1640201628.jpg', 'Destination', '2021-12-23 00:33:48', '2021-12-23 00:33:48'),
(169, 73, 'Screenshot_20211222-223615_Google_1640202923.jpg', 'Destination', '2021-12-23 00:55:23', '2021-12-23 00:55:23'),
(170, 30, '255686613712_status_9a2b0c9e31d24cb1817063f2189cc320_1690881454.jpg', 'Programs', '2021-12-23 13:48:22', '2023-08-01 13:17:34'),
(172, 74, 'Screenshot_20211224-144559_Google_1640346754.jpg', 'Destination', '2021-12-24 16:52:34', '2021-12-24 16:52:34'),
(173, 32, 'Screenshot_20211228-122307_Google_1640683556.jpg', 'Programs', '2021-12-28 14:25:56', '2021-12-28 14:25:56'),
(174, 33, 'Screenshot_20211228-124936_Google_1640685065.jpg', 'Programs', '2021-12-28 14:51:05', '2021-12-28 14:51:05'),
(175, 67, 'Screenshot_20211228-141128_Google_1640690240.jpg', 'Accommodation', '2021-12-28 16:17:20', '2021-12-28 16:17:20'),
(176, 68, 'Screenshot_20211228-141037_Google_1640691530.jpg', 'Accommodation', '2021-12-28 16:38:50', '2021-12-28 16:38:50'),
(177, 36, 'Screenshot_20211228-151211_Google_1640693607.jpg', 'Programs', '2021-12-28 17:13:27', '2021-12-28 17:13:27'),
(178, 37, 'Screenshot_20211228-155621_Google_1640696436.jpg', 'Programs', '2021-12-28 18:00:36', '2021-12-28 18:00:36'),
(180, 69, 'Screenshot_20220103-124356_Google_1641203356.jpg', 'Accommodation', '2022-01-03 14:49:16', '2022-01-03 14:49:16'),
(181, 70, 'Screenshot_20220104-154452_Google_1641300402.jpg', 'Accommodation', '2022-01-04 17:46:42', '2022-01-04 17:46:42'),
(182, 2, 'kil6_1641590429.jpg', 'Service', '2022-01-08 02:20:29', '2022-01-08 02:20:29'),
(183, 3, 'kil7_1641590474.jpg', 'Service', '2022-01-08 02:21:14', '2022-01-08 02:21:14'),
(184, 39, 'Screenshot_20220119-105545_Google_1642579068.jpg', 'Programs', '2022-01-19 12:57:48', '2022-01-19 12:57:48'),
(185, 71, '163382657_1642585725.jpg', 'Accommodation', '2022-01-19 14:48:45', '2022-01-19 14:48:45'),
(186, 40, 'Screenshot_20220119-145950_Google_1642593673.jpg', 'Programs', '2022-01-19 17:01:13', '2022-01-19 17:01:13'),
(187, 41, 'Screenshot_20220124-130714_Photos_1643018909.jpg', 'Programs', '2022-01-24 15:08:29', '2022-01-24 15:08:29'),
(188, 72, 'Screenshot_20220124-095137_Google_1643022044.jpg', 'Accommodation', '2022-01-24 16:00:44', '2022-01-24 16:00:44'),
(189, 42, 'FB_IMG_1642920123631_1643103072.jpg', 'Programs', '2022-01-24 17:54:47', '2022-01-25 14:31:12'),
(190, 73, 'FB_IMG_1642920068172_1643029546.jpg', 'Accommodation', '2022-01-24 18:05:47', '2022-01-24 18:05:47'),
(191, 43, 'Screenshot_20220126-101628_Google_1643181478.jpg', 'Programs', '2022-01-26 12:17:58', '2022-01-26 12:17:58'),
(192, 44, 'Screenshot_20220126-102133_Google_1643181931.jpg', 'Programs', '2022-01-26 12:25:31', '2022-01-26 12:25:31'),
(193, 45, 'Screenshot_20220126-103032_Google_1643182285.jpg', 'Programs', '2022-01-26 12:31:25', '2022-01-26 12:31:25'),
(194, 74, 'Screenshot_20220126-143230_Google_1643197094.jpg', 'Accommodation', '2022-01-26 16:38:14', '2022-01-26 16:38:14'),
(195, 46, 'Screenshot_20220126-144721_1_1644571995.png', 'Programs', '2022-01-26 17:42:56', '2022-02-11 14:33:15'),
(196, 4, 'logo-corp-red_1643711589.png', 'Service', '2022-02-01 15:33:09', '2022-02-01 15:33:09'),
(197, 47, 'image_0355b755-8922-4de4-ae90-66dc1d4730cd20220325_094230_1648222649.jpg', 'Programs', '2022-03-25 19:37:29', '2022-03-25 19:37:29'),
(198, 31, 'tanzania-arusha-national-park-giraffe_1648906866.jpg', 'Addon', '2022-04-02 17:41:06', '2022-04-02 17:41:06'),
(199, 48, 'serengeti-safari-lodges-great-migration-01-786x416_1649763279.jpg', 'Addon', '2022-04-12 15:34:39', '2022-04-12 15:34:39'),
(200, 2, 'download_1660125461.jpg', 'tailor_made', '2022-08-10 13:57:41', '2022-08-10 13:57:41'),
(201, 49, 'image_48db9f8e-7023-428c-a9d9-b90ac2bf0a6920230203_204338_1675599909.jpg', 'Programs', '2023-02-05 17:25:09', '2023-02-05 17:25:09'),
(202, 310, '+255 766 236 222 20230629_130407_1690718441.jpg', 'Testimonies', '2023-07-30 16:00:41', '2023-07-30 16:00:41'),
(203, 6, 'serengeti_1699522402.jpg', 'tailor_made', '2023-11-09 06:33:22', '2023-11-09 06:33:22'),
(204, 50, 'b3f08ec2ed00f99375debbf01010e0a2_1701766280.jpeg', 'Addon', '2023-12-05 05:51:21', '2023-12-05 05:51:21'),
(205, 51, '35ab6efda77f567eb68cf8efdd4d406e_1701778059.jpg', 'Addon', '2023-12-05 09:07:40', '2023-12-05 09:07:40'),
(206, 52, 'logoORG123_1701778454.jpg', 'Addon', '2023-12-05 09:14:14', '2023-12-05 09:14:14'),
(207, 53, '9afd8340466e3af7688d2edf75a1c3af_1701778557.jpeg', 'Addon', '2023-12-05 09:15:57', '2023-12-05 09:15:57'),
(208, 54, '8d464884f838fb963bbd8739274c7211_1701779028.jpeg', 'Addon', '2023-12-05 09:23:48', '2023-12-05 09:23:48'),
(209, 55, 'logoORG123_1701779722.jpg', 'Addon', '2023-12-05 09:35:22', '2023-12-05 09:35:22'),
(210, 56, 'twam-logo_1701779839.png', 'Addon', '2023-12-05 09:37:19', '2023-12-05 09:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attraction_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attraction_description` varchar(4100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_circuit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `attraction_title`, `attraction_description`, `tour_circuit`, `type`, `attachment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Corporis maxime quo', 'Dolorem eum autem co', 'Northern Circuit', '', 'beach1_1635830234.jpg', 1, '2021-11-02 02:17:13', '2021-11-02 02:17:16'),
(2, 'Serengeti national park.', 'In a nutshell, Serengeti National Park in Tanzania is famous for being the location of the Great Wildlife Migration , which sees two million wildebeests, zebras and antelopes stretched across its plains. It\'s also an extremely large and wild game park, and is home to the Big Five .', 'Northern Circuit', 'None', 'kil2_1641914492.jpg', 1, '2021-12-02 17:39:58', '2022-01-11 20:21:32'),
(3, 'Ngorongoro Conservation Area.', 'Although it\'s not technically a part of Serengeti National Park, the Ngorongoro Conservation Area is worth a visit if you\'re in the area. Flanking the eastern edge of the Serengeti, the site houses the Ngorongoro Crater – the world\'s sixth-largest intact volcanic caldera – and Olduvai Gorge.', 'Northern Circuit', '', 'image_9e6cbc77-8456-453f-8f95-de9f330592e920211201_152101_1638449559.jpg', 1, '2021-12-02 17:51:38', '2021-12-02 17:52:39'),
(4, 'Lake Manyara national park.', 'Do you know that Mt. Kilimnjaro is the tallest outstanding volcanic mountain(5895M) in the world.\r\nThe Mountain is found in Tanzania in the Region called Kilimanjaro,This region has called after Mt.Kilimanjoro.\r\nThe word Kilimanjaro is derived from Chagga native word “Kilema Kyaro” means the God mountain', 'Northern Circuit', 'Historical', 'mt21_1642450444.jpg', 1, '2021-12-02 17:58:57', '2022-01-18 01:14:04'),
(5, 'Tarangire national park.', 'The park is named for the Tarangire River that cuts through the park, a life-source for both plans and animals. Tarangire National Park is known for two African giants: elephants and the great baobab trees. Visitors can see colonies of these incredible trees that are more than 100 years old.', 'Northern Circuit', '', 'image_0207e97f-da5d-405f-a087-940b72efa16120211201_133859_1638469457.jpg', 1, '2021-12-02 23:24:17', '2021-12-02 23:24:17'),
(6, 'Arusha national park.', 'With diverse wildlife that includes herbivores such as elephants, hippos, buffalo, zebra, and even the occasional wildebeest, Arusha National Park is also a perfect place to get out and stretch your legs - with both walking safaris and canoe safaris available within the park. ...', 'Northern Circuit', '', 'image_9e6cbc77-8456-453f-8f95-de9f330592e920211201_152101_1638470720.jpg', 1, '2021-12-02 23:45:20', '2021-12-02 23:45:20'),
(7, 'Kilimanjaro mountain National Park', 'Kilimanjaro is very popular with both experienced hikers and first time adventurers because it is considered to be the easiest of the seven summits. ... Kilimanjaro is not only Africa\'s tallest peak, but also the world\'s tallest free standing mountain.', 'Northern Circuit', '', 'image_72f4da4b-926e-40b7-b52a-638e70fc40e820211202_201655_1638471045.jpg', 1, '2021-12-02 23:50:45', '2021-12-02 23:50:45'),
(8, 'Mkomazi national park.', 'Mkomazi is a vital refuge for two highly endangered species, the charismatic black rhino and the sociable African wild dog, both of which were successfully ...', 'Northern Circuit', '', 'Screenshot_20211202-215220_Opera Mini_1638471482.jpg', 1, '2021-12-02 23:58:02', '2021-12-02 23:58:02'),
(9, 'Rubondo Island national park', 'enter Tanzania. Tanzania welcomes you again!\r\nRubondo Island National Park\r\nThe Rubondo Island national park is located on an island in the middle of Lake Victoria, the second largest lake in the world. The island is uninhabited and 90% of the island is still forested. Here you can find native wildlife, such as hippos, crocodiles, antelopes and elephants and giraffes. Birds are also omnipresent on the island and make the Rubondo Island national p', 'Northern Circuit', '', 'rubondo-island-national-croc_1638472195.jpg', 1, '2021-12-03 00:09:55', '2021-12-03 00:09:55'),
(10, 'Saanane Island national park.', 'Saanane Island , the smallest national park in East Africa has a record of being the first to be located within a City center. ... The park is home to mammals ...', 'Northern Circuit', '', 'image_3eb939a2-1d1c-4816-8cbb-2818735564e620211202_201757_1638472534.jpg', 1, '2021-12-03 00:15:34', '2021-12-03 00:15:34'),
(11, 'Saadani national park.', 'Where beach and wilderness meet\r\nSaadani National Park, the park where you can enjoy both the large deserted beaches and the wildlife.', 'Eastern Circuit', '', 'saadani-1920x1280_1638473287.jpg', 1, '2021-12-03 00:28:07', '2021-12-03 00:28:07'),
(12, 'Gombe stream national park.', 'If you consider yourself a safari enthusiast, you must visit Gombe National Park. While it is more remote than other African national parks, you will find the primary enticement to be well worth the travel – chimpanzees! These captivating creatures were what fascinated the renowned researcher, Jane Goodall, for decades.', 'Western Circuit', '', 'Screenshot_20211203-091944_Opera Mini_1638513122.jpg', 1, '2021-12-03 11:32:02', '2021-12-03 11:32:02'),
(13, 'Mahale mountain National Park', 'At the western tip of Tanzania, on the shore of Lake Tanganyika, lies a mountainous region boasting chimpanzees and rich biodiversity. The Greater Mahale ...', 'Western Circuit', '', 'Screenshot_20211203-091935_Opera Mini_1638513418.jpg', 1, '2021-12-03 11:36:58', '2021-12-03 11:36:58'),
(14, 'Katavi national park.', 'Home to the largest herds of buffalo on the planet, Katavi National Park is a relatively untouched wilderness paradise, situated in the western area of Tanzania.\r\n\r\nThe park boasts a wonderful array of habitats, which range from flood plains of thick reeds and dense waterways that teem with hippo and crocodile to woodlands, open grasslands, forests and pristine seasonal lakes.', 'Western Circuit', '', 'image_b44f5ab6-9f32-40fc-a366-5b8554ff76a420211028_161957_1638513808.jpg', 1, '2021-12-03 11:43:28', '2021-12-03 11:43:28'),
(15, 'Mikumi national park.', 'One of Tanzania\'s largest parks is Mikumi National Park, located in the southeastern part of the country. On its own, Mikumi National Park covers roughly ...', 'Southern Circuit', '', 'image_9d9f56da-704a-45c1-9847-509773d01c9920211028_164217_1638541558.jpg', 1, '2021-12-03 19:25:58', '2021-12-03 19:25:58'),
(16, 'Ruwaha national park', 'In Ruaha National Park, you have the animals practically to yourself. There’s plenty of time to enjoy the wildlife for a long time.\r\n\r\nIn Ruaha National Park, you can make safaris by jeep as well as on foot.', 'Southern Circuit', '', 'image_c1a13448-3092-455f-b671-106cc19479b520211201_102306_1638542220.jpg', 1, '2021-12-03 19:37:00', '2021-12-03 19:37:00'),
(17, 'Giraffe', 'Do you know that the giraffe is the tallest animal in the World,Also is the animal which has tallest neck in the World.These animals found nearly all National Parks in Tanzania that\'s is why its photo used as our National symbol. this photo was taken from Manyara National Park', 'None', 'Wildlife', 'giraffe_attr_1642162461.jpg', 1, '2022-01-14 17:14:21', '2022-01-14 17:24:12'),
(18, 'Cheetah', 'Do you know that the Cheetah is the fastest animal in the world, this animal is found in cat group, in Tanzania National Parks we have many cheetahs. The difference between Cheetahs and Leopards is that  Cheetahs  are slender and has black tear Mark while leopards are muscular and hasn\'t  tear mark.Make tour in Tanzania to experience the truth nature of the Earth', 'None', 'Wildlife', 'cheetah3_1642233247.jpg', 1, '2022-01-15 12:54:07', '2022-01-15 13:27:35'),
(19, 'Ostrich', 'Do you know that Ostrich is the biggest bird in the world also is the fastest running bird on the land in the world,Other important feature is that The Ostrich can\'t fly. In Tanzania nearly all parks we have this type of bird mostly found in Savannah area', 'None', 'Wildlife', 'ostrich2_1642236912.jpg', 1, '2022-01-15 13:55:12', '2022-01-15 13:58:02'),
(20, 'Lake Tanganyika', 'Do you know that, Lake Tanganyika is the longest freshwater lake in the World,also Do you know that the Lake is the second Deepest lake in the World behind the Lake Baikal, This Lake is passed by west branch of rift valley,The name Tanganyika was derived from Tanganyika country the former name of Tanzania mainland.In 1964 the name changed from Tanganyika to United Republic of Tanzania after union of Tanganyika and Zanzibar.', 'None', 'Geographical', 'laketanga_1642517551.jpg', 1, '2022-01-16 12:57:49', '2022-01-18 19:52:31'),
(21, 'Lake Victoria', 'Do you know that the Lake Victoria (68,870 km2) is the largest lake in Africa and 3rd Lake by size in the World? The Lake occupies some portion in Uganda, Kenya and Tanzania but the large portion found in Tanzania. This Lake is the source of River Nile (6,693 km) which is the longest River in the World. The Lake was renamed from Nyaza name to Victoria name in 1858 after Queen Victoria by the explorer John Hanning Speke when he was on the way of exploring the source of River Nile.\r\nThe lake has many species of fish that inhabit nowhere else, especially cichlids', 'None', 'Geographical', 'lake victoria_1642517509.jpg', 1, '2022-01-18 19:50:05', '2022-01-18 19:59:40'),
(22, 'Ol Doinyo lengai', 'Do you know that,Mt.Ol doinyo lengai is an active volcanic Mountain found in Tanzani.Ol Doinyo lengai is the Maasai name means “Mountain of God”. The mountain has 3,188M and found in Gregory Rift southern of Lake Natron, the mountain is famous because is still erupting recently erupted in 2019.', 'None', 'Historical', 'oldonyo2 Lengai_1642762667.jpg', 1, '2022-01-21 15:57:47', '2022-01-21 15:59:43'),
(23, 'Maasai culture', 'Do you know that Maasai is only big tribe in East Africa which still preserved their nature until now days.The tribe is firmly partriachal in nature,Maasai men of age 35 are being joined by retired elders,determine most major matters for the maasai tribe.The tribe are Monotheistic(believing in one god) in nature and their God is named Engai or Enkai.', 'Northern Circuit', 'Culture & Belief', 'Screenshot_20220122-150513_1643098184.png', 1, '2022-01-25 13:09:44', '2022-01-25 15:18:36'),
(24, 'Hadzabe Culture', 'Do you know that in Tanzania we still have tribes living in stone age era (Hunting and Gathering), The major is Hadza and Sandawe tribes.These tribes speak tonal languages that uses click consonants, as do the Khoe languages of southern Africa, they are considered one of the last Hunter-gathered tribes in Africa.\r\nThe Sandawe people based in Nchemba district in Dodoma region, their population approximately 60,000 according to sencur of 2012.\r\nThe Hadza people,these tribe found around Lake Eyasi and nearby hills in Northern part of Tanzania and their population approximately to reach 1300 according to sencur of 2012.\r\nThese tribes are polytheistic and patriarchal in nature.They believing in many gods such as Moon,Sun,stars, Mountains,stones etc.', 'Northern Circuit', 'Culture & Belief', 'IMG-20220124-WA0036_1643098870.jpg', 58, '2022-01-25 13:21:10', '2022-01-25 17:39:16'),
(25, 'Datoga culture', 'Did you know that: The Datoga tribe in Tanzania is a semi nomadic and pastoralist tribe of Tanzania who live in the northern part of Tanzania in Manyara,Nothern Singida and Shinyanga regions.Also they live west of Lake Eyasi as well as in the semi-arid areas such as Mang\'ola,Basutu plains and along the West bank of East rift valley west of Mount Hanang\' found in Katesh,Manyara region.\r\nDatogas are also a Nilotic group of people and history said that, they are the first people to reach the East Africa.The scatterings of Datogas in Tanzania now days is because of Masai penetrating and capturing their land.\r\nWhen Masai reach the Datogas Land they found they look like them and they practice the same culture like them. Then they called them Mang’ati which means the respected enemy.\r\nThe Datogas found in Shinyanga and northen Singida are known as Taturu, this name was given by Sukuma people, during hunting or following stolen cow, Datogas were good at tracking foot print by showing the animal’s foot print by saying (Turu,Turu means foot print is here,here,here). But the Datoga(Mang’ati) they refer their self as Barabaig means Beaters of Sticks (bar = to beat, baig = sticks). Also other tribes like Nyaturu people (Arimi means Farmer) people of central Singida who are the Child of Sukuma and Taturu they refer Mang’ati as Barabaig remember Nyaturu and Taturu are two different tribes.\r\nFrom other sources said that, The Barabaig are one of the Nilotic peoples[2] who migrated south to East Africa from the Nile Valley in North Africa more than a thousand years ago. They form the largest group among the Tatoga-speaking people. Linguists tell us they entered what is now Kenya late in the first millennium AD where they congregated around Mount Elgon up until around 250 years ago.[3] In the late 1800s, \r\nGerman explorers found them on the Serengeti plains of German East Africa now Tanzania.[4]\r\n Archaeological evidence suggests that they were still in the Ngorongoro Highlands until around 150 years ago, before they were chased out by the Maasai, who live there to this day, still calling the area Osupuko loo Ltatua (Mountains of the Tatoga).[5]\r\n The Tatoga then headed south along the eastern branch of East Africa\'s Great Rift Valley and eventually split into groups they call emojiga. Those who settled on the plains surrounding Mount Hanang became known as Barabaig – Beaters of Sticks (bar = to beat, baig = sticks) because of the importance they place on sticks as a weapon and percussion instrument at dances but now Datagos came to be invaded by Iraq people which pushed them to southwest or Northern eastern part of Singida Region.\r\nThe Second branch went to lake Eyasi and now days headed west part of Sakenge hills west of Singida region. This Branch Meet with Sukuma people and Sukuma call them Taturu.\r\nPeople of Singida region(Arimi) call them Ant’ant’uu va umwerii means west and Ant’ant’uu va ukiya means Eastern Mang’ati, they refer that all are the same tribe Western and Eastern Mang’ati.\r\n1980s AD, there was a civil war between Mang’ati and Nyaturu of Singida which hindered Nyaturu to be headed northward and Mang’ati southward.\r\nMany Barabaig were forcibly evicted from the Basotu Plains in the 1990s to make room for a large-scale wheat-growing project of the Canadian and Tanzanian governments.', 'Northern Circuit', 'Culture & Belief', 'Screenshot_20220126-144721_1_1644572281.png', 1, '2022-01-26 16:54:46', '2022-02-23 19:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `swift_code`, `country`, `account_name`, `account_no`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'crdb', 'TZ0034', 'TZ', 'Buruhani Wawa', '097347BNM', 'Active', 1, '2023-12-18 03:21:13', '2023-12-18 03:21:13'),
(4, 'CRDB', 'CRDBTZ100', 'Tanzania ltd', 'Buruhani Wawa', 'C097347BNM', 'Active', 1, '2023-12-29 04:18:38', '2023-12-29 04:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `besttimes`
--

CREATE TABLE `besttimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `best_time` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `besttimes`
--

INSERT INTO `besttimes` (`id`, `tour_id`, `best_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Jan', 'active', '2023-04-06 04:43:00', '2023-04-06 07:41:23'),
(2, 4, 'Feb', 'active', '2023-04-06 04:43:00', '2023-04-06 07:41:23'),
(3, 4, 'Apr', 'active', '2023-04-06 04:43:00', '2023-04-06 07:41:23'),
(4, 4, 'May', 'active', '2023-04-06 04:43:00', '2023-04-06 07:41:23'),
(5, 4, 'Jun', 'Inactive', '2023-04-06 04:43:00', '2023-04-06 07:41:23'),
(6, 4, 'Jul', 'Inactive', '2023-04-06 04:43:00', '2023-04-06 07:41:23'),
(7, 4, 'Oct', 'active', '2023-04-06 04:43:01', '2023-04-06 07:41:23'),
(8, 4, 'Nov', 'active', '2023-04-06 04:43:01', '2023-04-06 07:41:23'),
(9, 4, 'Dec', 'Inactive', '2023-04-06 04:43:01', '2023-04-06 07:41:23'),
(10, 5, 'May', 'active', '2023-04-06 05:00:23', '2023-09-28 13:48:58'),
(11, 5, 'Jul', 'active', '2023-04-06 05:00:23', '2023-09-28 13:48:58'),
(12, 5, 'Aug', 'active', '2023-04-06 05:00:23', '2023-09-28 13:48:58'),
(13, 5, 'Sep', 'active', '2023-04-06 05:00:23', '2023-09-28 13:48:58'),
(14, 5, 'Nov', 'active', '2023-04-06 05:00:23', '2023-09-28 13:48:58'),
(15, 1, 'Jun', 'Inactive', '2023-04-06 05:12:20', '2023-09-08 06:43:11'),
(16, 1, 'Jul', 'active', '2023-04-06 05:12:20', '2023-09-08 06:43:12'),
(17, 1, 'Aug', 'active', '2023-04-06 05:15:23', '2023-09-08 06:43:13'),
(18, 1, 'Jan', 'active', '2023-04-06 09:24:07', '2023-09-08 06:43:12'),
(19, 1, 'Feb', 'active', '2023-04-06 09:24:07', '2023-09-08 06:43:12'),
(20, 1, 'Nov', 'active', '2023-04-06 09:24:20', '2023-09-08 06:43:13'),
(21, 1, 'Dec', 'active', '2023-04-06 09:24:20', '2023-09-08 06:43:13'),
(22, 3, 'Mar', 'active', '2023-09-08 05:44:08', '2023-10-13 07:37:26'),
(23, 3, 'May', 'active', '2023-09-08 06:49:20', '2023-10-13 07:37:26'),
(24, 2, 'Apr', 'active', '2023-09-09 02:46:21', '2023-09-20 07:17:59'),
(25, 2, 'May', 'active', '2023-09-09 02:46:21', '2023-09-20 07:17:59'),
(26, 2, 'Jul', 'active', '2023-09-20 06:49:06', '2023-09-20 07:17:59'),
(27, 2, 'Aug', 'active', '2023-09-20 06:49:06', '2023-09-20 07:17:59'),
(28, 2, 'Sep', 'Inactive', '2023-09-20 06:49:06', '2023-09-20 07:17:59'),
(29, 2, 'Oct', 'Inactive', '2023-09-20 06:49:06', '2023-09-20 07:17:59'),
(30, 6, 'Jan', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(31, 6, 'Feb', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(32, 6, 'Mar', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(33, 6, 'Apr', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(34, 6, 'May', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(35, 6, 'Jun', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(36, 6, 'Jul', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(37, 6, 'Aug', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(38, 6, 'Sep', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(39, 6, 'Oct', 'active', '2023-09-28 06:11:33', '2023-09-28 06:11:33'),
(40, 6, 'Nov', 'active', '2023-09-28 06:11:34', '2023-09-28 06:11:34'),
(41, 6, 'Dec', 'active', '2023-09-28 06:11:34', '2023-09-28 06:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_bodies`
--

CREATE TABLE `blog_bodies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_body` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyaddons`
--

CREATE TABLE `buyaddons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED NOT NULL,
  `addon_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `subject`, `comment`, `phone`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Moses lelunye', 'I want to book somthing', 'I want to book somthing', NULL, 'drongosafaris1@gmail.com', 'Active', '2022-03-10 13:59:08', '2022-03-10 13:59:08'),
(3, 'Bram', 'Are you still in business?', 'Dear, \r\n\r\nI came across drongosafaris.com and wanted to share this great free AI tool. \r\nWith this tool you write content 10 times faster and with much higher conversion rates. \r\nYou can use ', '070 6203 9537', 'free@freeaiwriting.com', 'Active', '2022-11-18 03:28:20', '2022-11-18 03:28:20'),
(4, 'NataliaNok', NULL, NULL, '88667611943', 'nataliaNok@mail.com', 'Active', '2022-11-20 08:15:45', '2022-11-20 08:15:45'),
(5, 'Joseph', 'Are you still in business?', 'Dear, \r\n\r\nI came across drongosafaris.com and wanted to share this great free AI tool. \r\n\r\nWith this tool you write blogs and ads 10 times faster and with much higher conversion rates. \r\nYou ', '+1 310-620-8162', 'free@freeaiwriting.com', 'Active', '2023-01-22 00:47:55', '2023-01-22 00:47:55'),
(6, 'wawa gg', 'fff', 'wawa', '4545', 'rrrr@gmail.com', 'Active', '2023-11-09 06:18:38', '2023-11-09 06:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `departures`
--

CREATE TABLE `departures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `depart_id` int(11) DEFAULT NULL,
  `group_tour_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `srs` decimal(8,2) NOT NULL DEFAULT 0.00,
  `seats` int(11) NOT NULL DEFAULT 0,
  `booked` int(11) NOT NULL DEFAULT 0,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departures`
--

INSERT INTO `departures` (`id`, `tour_id`, `depart_id`, `group_tour_category`, `price`, `srs`, `seats`, `booked`, `start_date`, `end_date`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 18, NULL, 'GS', '2500.00', '2200.00', 2300, 0, '2022-10-31', '2022-11-07', 'Inactive', 59, '2022-09-23 21:36:49', '2022-11-08 06:34:31'),
(3, 11, NULL, 'GS', '120.00', '20.00', 24, 0, '2025-12-11', '2025-12-14', 'Active', 1, '2023-11-30 08:02:26', '2023-11-30 08:02:26'),
(4, 18, NULL, 'SO', '90.00', '20.00', 78, 0, '2025-03-11', '2025-03-18', 'Active', 1, '2023-11-30 08:03:43', '2023-11-30 08:03:43'),
(5, 26, NULL, 'GS', '30.00', '20.00', 60, 0, '2024-01-06', '2024-01-07', 'Active', 1, '2023-12-05 03:58:49', '2023-12-05 03:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popularity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `destination_name`, `category`, `popularity`, `destination_description`, `seo`, `photo`, `location_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Manyara National Pack', 'National Park', 'Normal', 'Short brief', 'Lake Manyara', 'image_b2a84efe-723d-45e4-b268-fc2693335ff920211201_133431_1638366637.jpg', 6, 1, '2021-12-01 18:50:37', '2021-12-01 18:50:37'),
(5, 'Mt. Kilimanjaro - lemosho route', 'National Park', 'Normal', 'Top of Africa', 'Drongo safaris', 'Screenshot_20211017-210956_Photos_1639124763.jpg', 9, 1, '2021-12-10 13:26:03', '2021-12-10 13:26:03'),
(6, 'Machame camp', 'National Park', 'Popular', 'Machame camp elevation 9843ft.\r\nCamping on the Machame Route is fully supported and is set amidst the amazing backdrop of Mt Kilimanjaro. You will be sleeping in walk-in tents with camp beds ', 'Drongosafaris.com', '578x375_1639293531.webp', 35, 1, '2021-12-12 12:18:51', '2021-12-12 12:18:51'),
(7, 'Shira cave', 'National Park', 'Normal', 'Shira cave 3845m, To baranco camp 3960m.\r\nWalking now on high moorland, the landscape changes the entire character of the trek. We traverse the southwest side of Kilimanjaro, passing undernea', 'Drongosafaris.com', '578x386_1639294593.webp', 35, 1, '2021-12-12 12:36:33', '2021-12-12 12:37:11'),
(8, 'Baranco camp', 'National Park', 'Popular', 'Baranco camp 3960m, To karanga 3963m.\r\nThe climb is often called the Barranco Breakfast Wall as it is the first thing that you need to do on day four of your trek.\r\n\r\nThe Barranco Wall elevat', 'Drongosafaris.com', 'barranco-wall-mt-kilimanjaro-2_1639295650.jpg', 35, 1, '2021-12-12 12:54:10', '2021-12-12 12:54:10'),
(9, 'Karanga camp', 'National Park', 'Popular', 'Karanga camp 3963m, To Barafu 4640m.\r\nThe Karanga Camp is used by many tourists only for lunch. These climbers go on the day to Barafu Camp since it provides better acclimatization. However, ', 'Drongosafaris.com', 'karanga-camp-machame-route-mount-kilimanjaro_4_300_225_1639296430.jpg', 35, 1, '2021-12-12 13:07:10', '2021-12-12 13:07:10'),
(10, 'Barafu Camp', 'National Park', 'Very Popular', 'Barafu Camp is a campsite on Mount Kilimanjaro, situated at an altitude of 4,673 meters (15,330 feet). It is used as last camp before climbers attempt the final summit push on the Southern Ci', 'Drongosafaris.com', '47839494502_433ba140a5_1639296810.jpg', 35, 1, '2021-12-12 13:13:30', '2021-12-12 13:13:30'),
(11, 'Mweka camp', 'National Park', 'Very Popular', 'Mweka Camp is a descent-only campsite from the Shira, Lemosho, Machame and Umbwe Routes. The Camp is located on the descent route of the Shira, Lemosho, Umbwe and Machame Routes at an elevati', 'Drongosafaris.com', 'karanga-camp-machame-route-mount-kilimanjaro_4_300_225_1639297136.jpg', 35, 1, '2021-12-12 13:18:56', '2021-12-12 13:18:56'),
(12, 'Mweka gate', 'National Park', 'Very Popular', 'The Mweka gate attitude 1640m, An exit point from Kilimanjaro national park that is used by hikers on the Mweka route.\r\n\r\nExit point because the Mweka route is used by descending hikers only,', 'Drongosafaris.com', 'mweka-camp-machame-route-climbing-killimanjaro-tanzania__1920x864_1639298042.jpg', 35, 1, '2021-12-12 13:34:02', '2021-12-12 16:44:58'),
(13, 'Big tree camp', 'National Park', 'Normal', 'Calaveras Big Trees campgrounds might be the most beautiful you’ve ever stayed in. Imagine camping amongst thousand year old giant sequoia trees in a cool, High Sierra campsite located at a 4', 'Drongosafaris.com', 'Screenshot_20211212-115403_Google_1639299403.jpg', 33, 1, '2021-12-12 13:56:43', '2021-12-12 13:56:43'),
(14, 'Shira one camp', 'National Park', 'Normal', 'Altitude: 3510 m.\r\n\r\nAn overnight camping area and resting point that is located along the Lemosho trekking route of mount Kilimanjaro.\r\n\r\nUsed exclusively during the ascent, it is th', 'Drongosafaris.com', 'Screenshot_20211212-115818_Google_1639299955.jpg', 33, 1, '2021-12-12 14:05:55', '2021-12-12 20:13:07'),
(15, 'Shira two camp site', 'National Park', 'Normal', 'Shira Camp Kilimanjaro is the second camp on the Machame Route. There are in fact two camps on the Shira Plateau – Shira Camp 1 on the western side and Shira Camp 2 on the Eastern side. Peopl', 'Drongosafaris.com', 'Screenshot_20211212-115818_Google_1639300243.jpg', 33, 1, '2021-12-12 14:10:43', '2021-12-12 14:10:43'),
(16, 'Baranco camp', 'National Park', 'Popular', 'The Barranco Wall elevation is 257 meters (843 feet) high and is located on the side of Mount Kilimanjaro. The Barranco Wall is what climbers would refer to as a scramble, meaning it does not', 'Drongosafaris.com', 'Screenshot_20211212-121229_Google_1639300909.jpg', 33, 1, '2021-12-12 14:21:49', '2021-12-12 14:21:49'),
(17, 'Karanga camp', 'National Park', 'Popular', 'After a good night’s rest and breakfast, we set off on our walk to Barafu camp at 4640m. The climb will take us across desolate scree slopes with no vegetation around us at all. It’s a tough ', 'Drongosafaris.com', 'Screenshot_20211212-123036_Google_1639301575.jpg', 33, 1, '2021-12-12 14:32:55', '2021-12-12 14:32:55'),
(18, 'Barafu Camp', 'National Park', 'Popular', 'Barafu Camp is a campsite on Mount Kilimanjaro, situated at an altitude of 4,673 meters (15,330 feet). It is used as last camp before climbers attempt the final summit push on the Southern Ci', 'Drongosafaris.com', 'Screenshot_20211212-123449_Google_1639301937.jpg', 33, 1, '2021-12-12 14:38:57', '2021-12-12 14:38:57'),
(19, 'Machame camp', 'National Park', 'Very Popular', 'Mweka Camp is a descent-only campsite from the Shira, Lemosho, Machame and Umbwe Routes. The Camp is located on the descent route of the Shira, Lemosho, Umbwe and Machame Routes at an elevati', 'Drongosafaris.com', 'Screenshot_20211212-125236_Google_1639302908.jpg', 33, 1, '2021-12-12 14:55:08', '2021-12-12 14:55:08'),
(20, 'Mweka gate', 'National Park', 'Very Popular', 'An exit point from Kilimanjaro national park that is used by hikers on the Mweka route.\r\n\r\nExit point because the Mweka route is used by descending hikers only, thus hikers can only exit and ', 'Drongosafaris.com', 'Screenshot_20211212-125648_Google_1639303225.jpg', 33, 1, '2021-12-12 15:00:25', '2021-12-12 15:00:25'),
(21, 'Umbwe cave camp site', 'National Park', 'Normal', 'Altitude: 3040 m.a.m.s.l.\r\n\r\nUmbwe cave camp is an overnight resting point and also the first campsite that is encountered by hikers on the Umbwe route of mt. Kilimanjaro. It is not a large c', 'Drongosafaris.com', 'Screenshot_20211212-141421_Google_1639307949.jpg', 37, 1, '2021-12-12 16:19:09', '2021-12-12 16:43:52'),
(22, 'Baranco camp site', 'National Park', 'Normal', 'Altitude: 3950 m.\r\n\r\nAn overnight campsite/resting point on mt. Kilimanjaro, located near the base of Barranco wall.\r\n\r\nIt is used exclusively by climbers on the Machame, Umbwe, Shira and Lem', 'Drongosafaris.com', 'Screenshot_20211212-143346_Google_1639309000.jpg', 37, 1, '2021-12-12 16:36:40', '2021-12-12 19:48:21'),
(23, 'Barafu Camp site', 'National Park', 'Normal', 'Mweka Camp is a descent-only campsite from the Shira, Lemosho, Machame and Umbwe Routes. The Camp is located on the descent route of the Shira, Lemosho, Umbwe and Machame Routes at an elevati', 'Drongosafaris.com', 'barafu_camp__1920x864_1639309220.jpg', 37, 1, '2021-12-12 16:40:20', '2021-12-12 16:40:20'),
(24, 'Mweka camp site', 'National Park', 'Popular', 'Mweka Camp is a descent-only campsite from the Shira, Lemosho, Machame and Umbwe Routes. The Camp is located on the descent route of the Shira, Lemosho, Umbwe and Machame Routes at an elevati', 'Drongosafaris.com', 'Screenshot_20211212-125631_Google_1639309379.jpg', 37, 1, '2021-12-12 16:42:59', '2021-12-12 16:42:59'),
(25, 'Mweka gate', 'National Park', 'Very Popular', 'The Mweka gate attitude 1640m, An exit point from Kilimanjaro national park that is used by hikers on the Mweka route. Exit point because the Mweka route is used by descending hikers only,', 'Drongosafaris.com', 'Screenshot_20211212-125631_Google_1639309564.jpg', 37, 1, '2021-12-12 16:46:04', '2021-12-12 16:46:04'),
(26, 'Mandara huts', 'National Park', 'Popular', '3 to 4 hours hiking will take you to Mandara Hut, 2700 m from the base of the mountain. From here you can enjoy a short walk to the rim of Maundi Crater (a remnant of a volcanic vent) which o', 'Drongosafaris.com', 'Screenshot_20211212-144818_Google_1639310091.jpg', 34, 1, '2021-12-12 16:54:51', '2021-12-12 16:54:51'),
(27, 'Horombo huts', 'National Park', 'Popular', 'If the weather is clear you should definitely take the opportunity to scramble up the Maundi Crater to get your first full view of Kibo. \r\n\r\nDuring the trek, you will also see giant lobelias ', 'Drongosafaris.com', 'Screenshot_20211212-145610_Google_1639310501.jpg', 34, 1, '2021-12-12 17:01:41', '2021-12-12 17:01:41'),
(28, 'Horombo huts', 'National Park', 'Popular', 'The Horombo Huts Campsite is the second campsite from the beginning of the route that starts right at the Marangu gate. This accommodation is usually ...', 'Drongosafaris.com', 'Screenshot_20211212-145556_Google_1639310634.jpg', 34, 1, '2021-12-12 17:03:54', '2021-12-12 17:03:54'),
(29, 'Horombo huts', 'National Park', 'Popular', 'Marangu gate to Mandara Hut Choosing this route your journey will start at the Marangu gate (1,980 m), where you should sign in at the Park Office.', 'Drongosafaris.com', 'Screenshot_20211212-150644_Google_1639310904.jpg', 34, 1, '2021-12-12 17:08:24', '2021-12-12 17:08:24'),
(30, 'Kibo huts', 'National Park', 'Very Popular', 'Altitude: 4720 m.a.m.s.l.\r\n\r\nA campsite and lodge at the eastern base of Kibo volcanic cone of mt. Kilimanjaro.\r\n\r\nIt is mostly used as a resting point by climbers on the Rongai and Marangu r', 'Drongosafaris.com', 'Screenshot_20211212-151152_Google_1639311384.jpg', 34, 1, '2021-12-12 17:16:24', '2021-12-12 17:16:24'),
(31, 'Marangu gate', 'National Park', 'Very Popular', 'Altitude 1970 m a m s l An entry point into mount Kilimanjaro as well as the start of the Marangu hiking trail of the mountain It also serves as an exit ...', 'Drongosafaris.com', 'Screenshot_20211212-152125_Google_1639311884.jpg', 34, 1, '2021-12-12 17:24:44', '2021-12-12 17:24:44'),
(32, 'Simba camp site', 'National Park', 'Popular', 'Altitude: 2671 m.a.m.s.l.\r\n\r\nSimba campsite Kilimanjaro is an overnight resting point that is situated along the north eastern part of the mountain, it is also the first campsite that one wou', 'Drongosafaris.com', 'Screenshot_20211212-152844_Google_1639312242.jpg', 38, 1, '2021-12-12 17:30:42', '2021-12-12 17:30:42'),
(33, 'Second caves camp site', 'National Park', 'Popular', 'Altitude: 3450 m.a.m.s.l.\r\n\r\nThe second cave campsite is an optional overnight resting point or campsite that is situated along the Rongai hiking route of mt. Kilimanjaro. Here we say \"option', 'Drongosafaris.com', 'Screenshot_20211212-153835_Google_1639312835.jpg', 38, 1, '2021-12-12 17:40:35', '2021-12-12 17:40:35'),
(34, 'Kilelelwa camp site', 'National Park', 'Popular', 'Altitude: 3660 m.a.m.s.l.\r\n\r\nAn overnight resting point situated along the longer - Rongai route of mt. Kilimanjaro.\r\n\r\nIt is exclusively used by those that go through the base of Mawenzi — i', 'Drongosafaris.com', 'Screenshot_20211212-154217_Google_1639313140.jpg', 38, 1, '2021-12-12 17:45:40', '2021-12-12 17:45:40'),
(35, 'Mawenzi tarn huts', 'National Park', NULL, 'The Rongai Route is more scenic than the Marangu Route and easier than other camping route in climbing Kilimanjaro and the success rate on the Rongai Route is very high. Unlike the Marangu Ro', 'Drongosafaris.com', 'rongai-route-kilimanjaro-climb-3_1639314174.jpg', 38, 1, '2021-12-12 18:02:54', '2021-12-12 18:02:54'),
(36, 'Kibo huts', 'National Park', 'Popular', 'Altitude: 4720 m.a.m.s.l.\r\n\r\nA campsite and lodge at the eastern base of Kibo volcanic cone of mt. Kilimanjaro.\r\n\r\nIt is mostly used as a resting point by climbers on the Rongai and Marangu r', 'Drongosafaris.com', 'Screenshot_20211212-160441_Google_1639314569.jpg', 38, 1, '2021-12-12 18:09:29', '2021-12-12 18:09:29'),
(37, 'Horombo huts', 'National Park', 'Popular', 'The Horombo Huts Campsite is the second campsite from the beginning of the route that starts right at the Marangu gate. This accommodation is usually ...', 'Drongosafaris.com', 'Screenshot_20211212-160558_Google_1639314701.jpg', 38, 1, '2021-12-12 18:11:41', '2021-12-12 18:11:41'),
(38, 'Marangu gate', NULL, 'Very Popular', 'Location of Marangu gateMarangu gate lies in the south-eastern foothills of Mt. Kilimanjaro and in the suburb of Marangu. Unlike other gates into the park, ...', 'Drongosafaris.com', 'Screenshot_20211212-161501_Google_1639315113.jpg', 38, 1, '2021-12-12 18:18:33', '2021-12-12 18:18:33'),
(39, 'Simba camp site', 'National Park', 'Popular', 'Altitude: 2671 m.a.m.s.l.\r\n\r\nSimba campsite Kilimanjaro is an overnight resting point that is situated along the north eastern part of the mountain, it is also the first campsite that one wou', 'Drongosafaris.com', 'Screenshot_20211212-125236_Google_1639316411.jpg', 38, 1, '2021-12-12 18:40:11', '2021-12-12 18:40:11'),
(40, 'Second caves camp site', 'National Park', 'Popular', 'The Rongai route is the only route that approaches Kilimanjaro from the north, close to the Kenyan border. Though gaining popularity amongst climbers, this route still experiences low crowds.', 'Drongosafaris.com', 'Screenshot_20211212-164221_Google_1639316797.jpg', 38, 1, '2021-12-12 18:46:37', '2021-12-12 18:46:37'),
(41, 'Third cave camp site', 'National Park', 'Popular', 'Altitude: 3930 m.\r\n\r\nThird cave campsite is an overnight resting point on mount Kilimanjaro that is used by hikers on the Rongai and Northern circuit routes. It is the third campsite', 'Drongosafaris.com', 'Screenshot_20211212-164828_Google_1639317127.jpg', 38, 1, '2021-12-12 18:52:07', '2021-12-12 20:31:31'),
(42, 'School huts', 'National Park', 'Popular', 'Altitude: 4710 mamsl\r\n\r\nSchool huts is a campsite that is located in the alpine desert region of mount Kilimanjaro, at the foot of the Kibo volcanic cone and It is mostly used by ascending cl', 'Drongosafaris.com', 'Screenshot_20211212-165603_Google_1639317581.jpg', 38, 1, '2021-12-12 18:59:41', '2021-12-12 18:59:41'),
(43, 'Horombo huts', 'National Park', 'Very Popular', 'The Horombo Huts Campsite is the second campsite from the beginning of the route that starts right at the Marangu gate. This accommodation is usually ...', 'Drongosafaris.com', 'Screenshot_20211212-170440_Google_1639317988.jpg', 38, 1, '2021-12-12 19:06:28', '2021-12-12 19:06:28'),
(44, 'Marangu gate', 'National Park', 'Very Popular', 'Location of Marangu gateMarangu gate lies in the south-eastern foothills of Mt. Kilimanjaro and in the suburb of Marangu. Unlike other gates into the park, ...', 'Drongosafaris.com', 'Screenshot_20211212-171155_Google_1639318547.jpg', 38, 1, '2021-12-12 19:15:47', '2021-12-12 19:15:47'),
(45, 'Shira one camp site', 'National Park', 'Normal', 'Happy holidays\r\nfrom Africantourer\r\n\r\nShira 1 campsite\r\n kilimanjaro national park, TanzaniaSun17:18GMT+3\r\nNo imageAdd your photo of this place?\r\n Shira 1 campsiteMap\r\n\r\n\r\nAltitude: 3510 m.a.', 'Drongosafaris.com', 'Screenshot_20211212-172049_Google_1639318991.jpg', 36, 1, '2021-12-12 19:23:11', '2021-12-12 19:23:11'),
(46, 'Shira two camp site', 'National Park', 'Popular', 'The Shira Route is a little used trail that begins near Shira Ridge. It is nearly identical to the Lemosho route. In fact, Shira was the original route and Lemosho is the improved variation. ', 'Drongosafaris.com', 'Screenshot_20211212-172427_Google_1639319301.jpg', 36, 1, '2021-12-12 19:28:21', '2021-12-12 19:28:21'),
(47, 'Moir huts', 'National Park', 'Popular', 'Altitude: 4160 m.\r\n\r\nMoir\'s hut camp is an overnight resting point near the Moir\'s hut of mount Kilimanjaro, an old wooden hut. \r\n\r\nLocation of Moirs hut campsite\r\nMoir\'s hut campsite is loca', 'Drongosafaris.com', 'Screenshot_20211212-174038_Google_1639320093.jpg', 36, 1, '2021-12-12 19:41:33', '2021-12-12 19:41:33'),
(48, 'Baranco camp', 'National Park', 'Popular', 'Altitude: 3950 m.\r\n\r\nAn overnight campsite/resting point on mt. Kilimanjaro, located near the base of Barranco wall.\r\n\r\nIt is used exclusively by climbers on the Machame, Umbwe, Shira and Lem', 'Drongosafaris.com', 'Screenshot_20211212-172427_Google_1639320572.jpg', 36, 1, '2021-12-12 19:49:32', '2021-12-12 19:49:32'),
(49, 'Karanga camp', 'National Park', 'Popular', 'After a good night’s rest and breakfast, we set off on our walk to Barafu camp at 4640m. The climb will take us across desolate scree slopes with no vegetation around us at all. It’s a tough', 'Drongosafaris.com', 'Screenshot_20211212-125236_Google_1639320857.jpg', 36, 1, '2021-12-12 19:54:17', '2021-12-12 19:54:17'),
(50, 'Barafu Camp site', 'National Park', 'Popular', 'Barafu Camp is a campsite on Mount Kilimanjaro, situated at an altitude of 4,673 meters (15,330 feet). It is used as last camp before climbers attempt the final summit push on the Southern ci', 'Drongosafaris.com', 'barafu_camp__1920x864_1639321122.jpg', 36, 1, '2021-12-12 19:58:42', '2021-12-12 19:58:42'),
(51, 'Mweka camp site', 'National Park', 'Very Popular', 'Mweka Camp is a descent-only campsite from the Shira, Lemosho, Machame and Umbwe Routes. The Camp is located on the descent route of the Shira, Lemosho, Umbwe and Machame Routes at an elevati', 'Drongosafaris.com', 'Screenshot_20211212-125236_Google_1639321313.jpg', 36, 1, '2021-12-12 20:01:53', '2021-12-12 20:01:53'),
(52, 'Mweka gate', 'National Park', 'Very Popular', 'The Mweka gate attitude 1640m, An exit point from Kilimanjaro national park that is used by hikers on the Mweka route.\r\n\r\nExit point because the Mweka route is used by descending hikers only,', 'Drongosafaris.com', 'Screenshot_20211212-113539_Google_1639321616.jpg', 36, 1, '2021-12-12 20:06:56', '2021-12-12 20:06:56'),
(53, 'Moir huts', 'National Park', 'Normal', 'Altitude: 4160 m.\r\n\r\nMoir\'s hut camp is an overnight resting point near the Moir\'s hut of mount Kilimanjaro, an old wooden hut. \r\n\r\nLocation of Moirs hut campsite\r\nMoir\'s hut campsite is loca', 'Drongosafaris.com', 'Screenshot_20211212-174038_Google_1639322213.jpg', 40, 1, '2021-12-12 20:16:53', '2021-12-12 20:16:53'),
(54, NULL, NULL, NULL, 'Attitude 3510m.\r\n\r\n\r\nShira 1 campsite\r\n kilimanjaro national park, TanzaniaSun18:17GMT+3\r\nNo imageAdd your photo of this place?\r\n Shira 1 campsiteMap\r\n\r\n\r\nAltitude: 3510 m.a.m.s.l.\r\n\r\nAn over', 'Drongosafaris.com', 'shira_camp_3_850m__1920x864_1639322527.jpg', 0, 1, '2021-12-12 20:22:07', '2021-12-12 20:22:07'),
(55, 'Pofu camp site', 'National Park', 'Popular', 'Altitude: 3995 m.\r\n\r\nPofu camp is an overnight resting point or campsite that is located on mount Kilimanjaro, at the base of Kibo volcanic peak. The camp is located on the northern side of U', 'Drongosafaris.com', 'Screenshot_20211212-182437_Google_1639322925.jpg', 40, 1, '2021-12-12 20:28:45', '2021-12-12 20:28:45'),
(56, 'Third cave camp site', 'National Park', 'Popular', 'Altitude: 3930 m.\r\n\r\nThird cave campsite is an overnight resting point on mount Kilimanjaro that is used by hikers on the Rongai and Northern circuit routes. It is the third campsite', 'Drongosafaris.com', 'Screenshot_20211212-115818_Google_1639323174.jpg', 40, 1, '2021-12-12 20:32:54', '2021-12-12 20:32:54'),
(57, 'School huts', 'National Park', 'Popular', 'Attitude 4710m. \r\nSchool huts campsite is located on the eastern base of Kibo volcanic crater and also a few kilometers north of Kibo huts. The campsite is also deep in the alpine desert regi', 'Drongosafaris.com', 'Screenshot_20211212-183531_Google_1639323482.jpg', 40, 1, '2021-12-12 20:38:02', '2021-12-12 20:38:02'),
(58, 'Mweka camp site', 'National Park', 'Very Popular', 'The Mweka gate attitude 1640m, An exit point from Kilimanjaro national park that is used by hikers on the Mweka route.\r\n\r\nExit point because the Mweka route is used by descending hikers only,', 'Drongosafaris.com', 'Screenshot_20211212-165603_Google_1639323732.jpg', 40, 1, '2021-12-12 20:42:12', '2021-12-12 20:42:12'),
(59, 'Mweka gate', 'National Park', 'Very Popular', 'The Mweka gate attitude 1640m, An exit point from Kilimanjaro national park that is used by hikers on the Mweka route.\r\n\r\nExit point because the Mweka route is used by descending hikers only,', 'Drongosafaris.com', 'Screenshot_20211212-113539_Google_1639324321.jpg', 40, 1, '2021-12-12 20:52:01', '2021-12-12 20:52:01'),
(60, 'Machame gate', 'National Park', 'Popular', 'It\'s the route of choice for many people because it provides impressive views  and a variety of habitats.', 'Drongosafaris.com', 'Screenshot_20211213-133907_Google_1639492558.jpg', 35, 1, '2021-12-14 19:35:58', '2021-12-14 19:35:58'),
(61, 'Uhuru peak', 'National Park', 'Very Popular', 'Uhuru Peak, at 5,895 meters above sea level, is the highest free-standing peak in Africa. Located on the volcanic cone Kibo, as part of Mt. Kilimanjaro, reaching Uhuru Peak is the end goal of', 'Drongosafaris - kilimanjaro national park', 'uhuru-peak-kilimanjaro-768x512_1639516016.jpg', 9, 1, '2021-12-15 02:06:56', '2021-12-15 02:06:56'),
(62, 'Nale muru gate', 'National Park', 'Normal', 'The Rongai route is one of the easier routes up Kilimanjaro. Rongai is the only route to approach Kilimanjaro from the north and the descent is via the Marangu Route.Summit night from Kibo Hu', 'Drongosafaris.com', 'rongai-route-kilimanjaro-climb-3_1639595763.jpg', 9, 1, '2021-12-16 00:16:03', '2021-12-16 00:16:03'),
(63, 'Miriakamba huts 🛖', 'National Park', 'Popular', 'Miriakamba Huts Elevation / Altitude: 2514 (meters above mean sea level)\r\n\r\nThe Miriakamba huts camp is the first camp you come across on your way to the top of Mount Meru’s summit.\r\n\r\nMiriak', 'Drongosafaris.com', 'Screenshot_20211216-204609_Google_1639677057.jpg', 41, 1, '2021-12-16 22:50:57', '2021-12-16 22:50:57'),
(64, 'Saddle huts 🛖', 'National Park', 'Popular', 'Each room is capable of housing up to 4 people, and there also is a mess hall, guide and porter accommodations as well as a camp ranger\'s office.\r\n\r\nNo self contained rooms are available, and', 'Drongosafaris.com', 'Screenshot_20211216-213448_Google_1639680041.jpg', 42, 1, '2021-12-16 23:40:41', '2021-12-16 23:48:58'),
(65, 'Miriakamba huts 🛖', 'National Park', 'Popular', 'Mount Meru is a dormant stratovolcano located 70 kilometres (43 mi) west of Mount Kilimanjaro in southeast Arusha Region, Tanzania. At a height of 4,562.13 metres (14,968 ft),[1][4] it is vis', 'Drongosafaris.com', 'Screenshot_20211216-214627_Google_1639680490.jpg', 41, 1, '2021-12-16 23:48:10', '2021-12-16 23:48:10'),
(66, 'Ngngongare gate', 'National Park', 'Popular', 'From the Ngongongare Gate, it is another 17 km to Momella Gate, the starting point of the Mt. Meru hike. The road to Arusha National Park is signposted ...', 'Drongosafaris.com', 'Screenshot_20211216-215123_Google_1639680901.jpg', 44, 1, '2021-12-16 23:55:01', '2021-12-16 23:55:01'),
(67, 'Silale swamp', 'National Park', 'Popular', 'The remote Silale Swamp is one of the top highlights of the Tarangire ecosystem. The swamp acts as a giant sponge during the green season and slowly releases water during the dry season. Huge', 'Drongosafaris.com', 'Screenshot_20211220-185425_Google_1640016062.jpg', 5, 1, '2021-12-20 21:01:02', '2021-12-20 21:27:25'),
(68, 'Tarangire national park', 'National Park', 'Popular', 'The Tarangire National Park is known as a wonderful birding destination and also features large numbers of game, particularly during the dry season, when the Tarangire River is the only sourc', 'Drongosafaris.com', 'image_70837f67-430a-4ccb-9d72-7ab7671878ab20220103_142638_1641299900.jpg', 5, 1, '2021-12-21 14:55:46', '2022-01-04 17:38:20'),
(69, 'Manyara National Pack', 'National Park', 'Popular', 'It is commonly said that Lake Manyara is one of best the parks in Africa for birdwatchers. If you are a bird-watching enthusiast, then going on a lake Manyara safari is a must on your Tanzani', 'Drongosafaris.com', 'image_3f71aa85-ec6d-41cb-b612-b30f25cfb64320211228_224308_1641299846.jpg', 6, 1, '2021-12-21 14:57:51', '2022-01-04 17:37:26'),
(70, NULL, 'National Park', 'Popular', 'Lodge in Mto Wa Mbu\r\nBreathtaking views of Lake Manyara. Manyara’s Secret is on the road to Ngorogoro Crater. 15 min to the gate of Lake Manyara National Park - 40 min to Tarangire and Ngoron', 'Drongosafaris.com', 'Screenshot_20211222-170521_Google_1640182141.jpg', 45, 1, '2021-12-22 19:09:01', '2021-12-22 19:09:01'),
(71, 'Mto wa mbu', 'Attraction', 'Very Popular', 'Lodge in Mto Wa Mbu\r\nBreathtaking views of Lake Manyara. Manyara’s Secret is on the road to Ngorogoro Crater. 15 min to the gate of Lake Manyara National Park - 40 min to Tarangire and Ngoron', 'Drongosafaris.com', 'Screenshot_20211221-121352_Google_1640182485.jpg', 45, 1, '2021-12-22 19:14:45', '2021-12-22 19:14:45'),
(72, 'Serengeti national park', 'National Park', 'Very Popular', 'In the vast plains of Serengeti National Park, comprising 1.5 million hectares of savannah, the annual migration of two million wildebeests plus hundreds of thousands of gazelles and zebras -', 'Drongosafaris.com', 'Screenshot_20211222-160633_Google_1640201628.jpg', 8, 1, '2021-12-23 00:33:48', '2021-12-23 00:33:48'),
(73, 'Ngorongoro conservation Area', 'Attraction', 'Very Popular', 'Ngorongoro Crater is the main attraction of this area. It is home to the highest concentration wildlife in Africa. You can see lions, elephants, zebras, black rhino and so much more. The view', 'Drongosafaris.com', 'Screenshot_20211222-223615_Google_1640202923.jpg', 7, 1, '2021-12-23 00:55:23', '2021-12-23 00:55:23'),
(74, 'Arusha national park', 'National Park', 'Popular', 'This beautiful Park has often been called a \"little germ\" and rightly so. It is only ½ an hour by tarmac road from Arusha town, the safari center of Northern Tanzania. With mountains, valleys', 'Drongosafaris.com', 'Screenshot_20211224-144559_Google_1640346754.jpg', 46, 1, '2021-12-24 16:52:34', '2021-12-24 16:52:34'),
(76, 'Olduvai/Oldupai gorge', 'Mesium', 'Very Popular', 'One of the biggest onsite museum in Africa located at the excavation site of Olduvai Gorge and near Laetoli Footprints site. The museum exhibits the earliest evidence found in Olduvai Gorge a', 'Drongosafaris.com', 'Screenshot_20211228-182134_Google_1640705226.jpg', 7, 1, '2021-12-28 20:27:06', '2021-12-28 20:27:06'),
(77, 'Arusha city', 'Attraction', 'Popular', 'Arusha is a city in East Africa\'s Tanzania, located at the base of volcanic Mt. Meru. It\'s a gateway to safari destinations and to Africa\'s highest peak, 5,895m Mt. Kilimanjaro, lying some 10', 'Drongosafaris.com', 'Screenshot_20211231-221522_Google_1640978411.jpg', 46, 1, '2022-01-01 00:20:11', '2022-01-01 00:20:11'),
(78, 'Airport', 'Attraction', 'Very Popular', 'The airport has 110 square kilometers, which rollout along the Moshi - Arusha road. Closely, it serene and repose to the jaws dropping and breathtaking tourist attractions: Serengeti, Kiliman', 'Drongosafaris.com', 'Screenshot_20220104-172635_Google_1641307070.jpg', 46, 1, '2022-01-04 19:37:50', '2022-01-04 19:37:50'),
(79, 'Saadani national park', 'National Park', 'Normal', 'Saadani is where the beach meets the bush. It is the only park in East Africa with an Indian Ocean beachfront. It\'s the one place where those idle hours of sunbathing might be interrupted by ', 'Drongosafaris.com', 'Screenshot_20220104-182958_Google_1641310759.jpg', 11, 1, '2022-01-04 20:39:19', '2022-01-04 20:39:19'),
(80, 'Kondoa Irangi', 'Attraction', 'Normal', 'See the human cave drawing', 'drongo safaris-Kondoa Irangi', 'oldonyo lengai6_1641634346.jpg', 26, 1, '2022-01-08 14:32:26', '2022-01-08 14:32:26'),
(81, 'West Kilimanjaro', 'Cultural Tour', 'Normal', 'West Kilimanjaro is a remote wilderness area of 250 square kilometres in size.\r\n\r\nThe land is leased from the local Maasai and is a true wilderness area with open plains, acacia woodland and', 'Cultural tour-drongosafaris.com', 'Screenshot_20220122-150611_1643024311.png', 53, 58, '2022-01-24 16:38:31', '2022-01-25 12:57:38'),
(82, 'Mkomazi national park', 'National Park', 'Normal', 'Mkomazi National Park is located in northeastern Tanzania on the Kenyan border, in Kilimanjaro Region and Tanga Region. It was established as a game reserve in 1951 and upgraded to a national', 'Drongosafaris.com', 'image_6c4f8d33-716d-4c6d-ac23-e8c92086561020220106_200230_1643025133.jpg', 0, 1, '2022-01-24 16:52:13', '2022-01-24 16:52:13'),
(83, 'Lake eyasi', 'Cultural Tour', 'Normal', 'Lake Eyasi is a huge soda lake that surpasses Lake Manyara in size, and the saline border extends and shrinks depending on the amount of rain that has dropped there,The main attraction there ', 'Cultural tour -drongosafaris.com', 'IMG-20220124-WA0040_1643026176.jpg', 46, 58, '2022-01-24 17:09:36', '2022-01-24 17:09:36'),
(84, 'Selous game reserve (Nyerere national park)', 'National Park', 'Normal', 'Secluded and off the beaten track, the Selous Game Reserve offers visitors a slice of undisturbed wilderness, teeming with a spectacular array of fauna and flora.\r\n\r\nIt was declared a World H', 'Drongosafaris.com', 'image_c44500af-f6da-4430-84e7-2f9ebdc08cc320220103_170254_1643197510.jpg', 15, 1, '2022-01-26 16:45:10', '2022-01-26 16:45:10'),
(85, 'Zanzibar Island 🏝', 'Beach', 'Very Popular', 'Zanzibar has long been an island of spice and trade even before becoming part of Tanzania. Most itinerary for Tanzania will include this island, not only because of its history but because of', 'Drongosafaris.com', 'image_2e98c725-f543-405f-9f45-14e1311886e320211116_134004_1650292728.jpg', 32, 59, '2022-04-18 18:38:48', '2022-04-18 18:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `accomodation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `teens` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `days` date DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hear_about_us` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grouptours`
--

CREATE TABLE `grouptours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inclusives`
--

CREATE TABLE `inclusives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inclusive` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inclusives`
--

INSERT INTO `inclusives` (`id`, `inclusive`, `created_at`, `updated_at`) VALUES
(1, 'Lunch', '2021-10-15 17:00:24', '2021-10-15 17:00:24'),
(2, 'Breakfast', '2021-10-15 17:00:35', '2021-10-15 17:00:35'),
(3, 'International fare', '2021-12-11 15:23:09', '2021-12-11 15:23:09'),
(4, 'Break fast', '2023-12-17 17:37:07', '2023-12-17 17:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `adults_percent` decimal(10,2) DEFAULT NULL,
  `teens_percent` decimal(10,2) DEFAULT NULL,
  `children_percent` decimal(10,2) DEFAULT NULL,
  `unit_price` decimal(8,2) DEFAULT NULL,
  `children_cost` double(10,2) DEFAULT NULL,
  `teens_cost` double(10,2) DEFAULT NULL,
  `adults_cost` double(10,2) DEFAULT NULL,
  `total_price` decimal(8,2) DEFAULT NULL,
  `addon_price` decimal(8,2) DEFAULT NULL,
  `total_addon_price` decimal(8,2) DEFAULT NULL,
  `total_discount` decimal(10,2) DEFAULT NULL,
  `total_cost` decimal(8,2) DEFAULT NULL,
  `total_amount_paid` decimal(8,2) DEFAULT NULL,
  `amount_remain` decimal(8,2) DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payee_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_id`, `tour_id`, `adults_percent`, `teens_percent`, `children_percent`, `unit_price`, `children_cost`, `teens_cost`, `adults_cost`, `total_price`, `addon_price`, `total_addon_price`, `total_discount`, `total_cost`, `total_amount_paid`, `amount_remain`, `currency`, `payee_status`, `created_at`, `updated_at`) VALUES
(1, 1, 20, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '7875.00', '0.00', '0.00', NULL, '7875.00', '60000.00', '-52125.00', 'USD', 'Paid', '2022-08-10 14:12:50', '2022-08-10 14:19:28'),
(2, 3, 19, NULL, NULL, NULL, '2600.00', NULL, NULL, NULL, '16380.00', '0.00', '0.00', NULL, '16380.00', NULL, NULL, 'USD', NULL, '2023-11-29 03:42:24', '2023-11-29 03:42:24'),
(3, 4, 23, NULL, NULL, NULL, '2700.00', NULL, NULL, NULL, '10530.00', '0.00', '0.00', NULL, '10530.00', NULL, NULL, 'USD', NULL, '2023-11-29 13:55:18', '2023-11-29 13:55:18'),
(4, 5, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '2902.50', '0.00', '0.00', NULL, '2902.50', '4000.00', '-1097.50', 'USD', 'Paid', '2023-12-02 07:29:13', '2023-12-15 04:44:32'),
(5, 6, 22, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '345750.00', '100.00', '13830.00', NULL, '359580.00', NULL, NULL, 'USD', NULL, '2023-12-06 06:27:01', '2023-12-06 06:27:01'),
(6, 7, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '141345.00', '2.00', '209.40', NULL, '141554.40', NULL, NULL, 'USD', NULL, '2023-12-06 07:37:56', '2023-12-06 07:37:56'),
(7, 8, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '207292.50', '2.00', '307.10', NULL, '207599.60', NULL, NULL, 'USD', NULL, '2023-12-06 07:49:54', '2023-12-06 07:49:54'),
(8, 9, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '178132.50', '66.00', '8708.70', NULL, '186841.20', NULL, NULL, 'USD', NULL, '2023-12-06 07:50:21', '2023-12-06 07:50:21'),
(9, 10, 26, NULL, NULL, NULL, '400.00', NULL, NULL, NULL, '55960.00', '0.00', '0.00', NULL, '55960.00', NULL, NULL, 'USD', NULL, '2023-12-06 08:00:05', '2023-12-06 08:00:05'),
(10, 11, 26, NULL, NULL, NULL, '400.00', NULL, NULL, NULL, '55960.00', '0.00', '0.00', NULL, '55960.00', NULL, NULL, 'USD', NULL, '2023-12-06 08:00:13', '2023-12-06 08:00:13'),
(11, 12, 29, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '384000.00', '100.00', '15360.00', NULL, '399360.00', NULL, NULL, 'USD', NULL, '2023-12-06 08:00:47', '2023-12-06 08:00:47'),
(12, 13, 11, NULL, NULL, NULL, '1300.00', NULL, NULL, NULL, '126685.00', '66.00', '6431.70', NULL, '133116.70', NULL, NULL, 'USD', NULL, '2023-12-06 08:18:46', '2023-12-06 08:18:46'),
(13, 14, 11, NULL, NULL, NULL, '1300.00', NULL, NULL, NULL, '126685.00', '66.00', '6431.70', NULL, '133116.70', NULL, NULL, 'USD', NULL, '2023-12-06 08:18:59', '2023-12-06 08:18:59'),
(14, 15, 11, NULL, NULL, NULL, '1300.00', NULL, NULL, NULL, '126685.00', '66.00', '6431.70', NULL, '133116.70', NULL, NULL, 'USD', NULL, '2023-12-06 08:20:51', '2023-12-06 08:20:51'),
(15, 16, 11, NULL, NULL, NULL, '1300.00', NULL, NULL, NULL, '126685.00', '66.00', '6431.70', NULL, '133116.70', NULL, NULL, 'USD', NULL, '2023-12-06 08:23:20', '2023-12-06 08:23:20'),
(16, 17, 20, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '9250.00', '0.00', '0.00', NULL, '9250.00', NULL, NULL, 'USD', NULL, '2023-12-09 04:36:24', '2023-12-09 04:36:24'),
(17, 18, 27, NULL, NULL, NULL, '400.00', NULL, NULL, NULL, '1200.00', '0.00', '0.00', NULL, '1200.00', NULL, NULL, 'USD', NULL, '2023-12-09 04:59:09', '2023-12-09 04:59:09'),
(18, 19, 29, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '50750.00', '0.00', '0.00', NULL, '50750.00', NULL, NULL, 'USD', NULL, '2023-12-11 04:46:21', '2023-12-11 04:46:21'),
(19, 20, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '163080.00', '100.00', '12080.00', NULL, '175160.00', NULL, NULL, 'USD', NULL, '2023-12-11 05:38:29', '2023-12-11 05:38:29'),
(20, 21, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '173205.00', '2.00', '256.60', NULL, '173461.60', NULL, NULL, 'USD', NULL, '2023-12-11 05:42:27', '2023-12-11 05:42:27'),
(21, 22, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '134595.00', '66.00', '6580.20', NULL, '141175.20', NULL, NULL, 'USD', NULL, '2023-12-11 05:50:08', '2023-12-11 05:50:08'),
(22, 23, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '134595.00', '66.00', '6580.20', NULL, '141175.20', NULL, NULL, 'USD', NULL, '2023-12-11 05:52:04', '2023-12-11 05:52:04'),
(23, 24, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '134595.00', '66.00', '6580.20', NULL, '141175.20', NULL, NULL, 'USD', NULL, '2023-12-11 05:53:19', '2023-12-11 05:53:19'),
(24, 25, 29, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '428250.00', '2.00', '342.60', NULL, '428592.60', NULL, NULL, 'USD', NULL, '2023-12-11 05:55:07', '2023-12-11 05:55:07'),
(25, 26, 29, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '389125.00', '2.00', '311.30', NULL, '389436.30', NULL, NULL, 'USD', NULL, '2023-12-11 06:02:08', '2023-12-11 06:02:08'),
(26, 27, 29, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '225125.00', '66.00', '5943.30', NULL, '231068.30', NULL, NULL, 'USD', NULL, '2023-12-11 06:03:04', '2023-12-11 06:03:04'),
(27, 28, 29, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '368875.00', '66.00', '9738.30', NULL, '378613.30', NULL, NULL, 'USD', NULL, '2023-12-11 06:15:02', '2023-12-11 06:15:02'),
(28, 29, 29, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '368875.00', '66.00', '9738.30', NULL, '378613.30', NULL, NULL, 'USD', NULL, '2023-12-11 06:16:27', '2023-12-11 06:16:27'),
(29, 30, 29, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '368875.00', '66.00', '9738.30', NULL, '378613.30', NULL, NULL, 'USD', NULL, '2023-12-11 06:18:48', '2023-12-11 06:18:48'),
(30, 31, 29, NULL, NULL, NULL, '2500.00', NULL, NULL, NULL, '227375.00', '66.00', '6002.70', NULL, '233377.70', NULL, NULL, 'USD', NULL, '2023-12-11 06:20:39', '2023-12-11 06:20:39'),
(31, 32, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '166657.50', '2.00', '246.90', NULL, '166904.40', NULL, NULL, 'USD', NULL, '2023-12-11 06:21:47', '2023-12-11 06:21:47'),
(32, 33, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '125550.00', '0.00', '0.00', NULL, '125550.00', NULL, NULL, 'USD', NULL, '2023-12-11 06:24:11', '2023-12-11 06:24:11'),
(33, 34, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '189540.00', '66.00', '9266.40', NULL, '198806.40', NULL, NULL, 'USD', NULL, '2023-12-11 06:25:55', '2023-12-11 06:25:55'),
(34, 35, 19, NULL, NULL, NULL, '2600.00', NULL, NULL, NULL, '364130.00', '100.00', '14005.00', NULL, '378135.00', NULL, NULL, 'USD', NULL, '2023-12-11 08:56:47', '2023-12-11 08:56:47'),
(35, 36, 18, NULL, NULL, NULL, '2100.00', NULL, NULL, NULL, '6930.00', '0.00', '0.00', NULL, '6930.00', NULL, NULL, 'USD', NULL, '2023-12-15 03:54:02', '2023-12-15 03:54:02'),
(36, 37, 18, NULL, NULL, NULL, '2100.00', NULL, NULL, NULL, '6930.00', '0.00', '0.00', NULL, '6930.00', NULL, NULL, 'USD', NULL, '2023-12-15 04:03:07', '2023-12-15 04:03:07'),
(37, 38, 28, NULL, NULL, NULL, '1350.00', NULL, NULL, NULL, '5467.50', '0.00', '0.00', NULL, '5467.50', '3000.00', '2467.50', 'USD', '', '2023-12-15 04:05:06', '2023-12-15 04:05:06'),
(38, 39, 28, NULL, NULL, NULL, '1350.00', 540.00, 2025.00, 2700.00, '5265.00', '0.00', '0.00', NULL, '5265.00', NULL, NULL, 'USD', NULL, '2023-12-15 06:23:44', '2023-12-15 06:23:44'),
(39, 40, 29, NULL, NULL, NULL, '2500.00', 6000.00, 3750.00, 7500.00, '17250.00', '100.00', '690.00', NULL, '17940.00', NULL, NULL, 'USD', NULL, '2023-12-25 15:07:03', '2023-12-25 15:07:03'),
(40, 41, 29, NULL, NULL, NULL, '2500.00', 6000.00, 3750.00, 7500.00, '17250.00', '100.00', '690.00', NULL, '17940.00', NULL, NULL, 'USD', NULL, '2023-12-25 15:11:32', '2023-12-25 15:11:32'),
(41, 42, 29, NULL, NULL, NULL, '2500.00', 6000.00, 3750.00, 7500.00, '17250.00', '100.00', '690.00', NULL, '17940.00', NULL, NULL, 'USD', NULL, '2023-12-25 15:13:43', '2023-12-25 15:13:43'),
(42, 43, 29, NULL, NULL, NULL, '2500.00', 6000.00, 3750.00, 7500.00, '17250.00', '100.00', '690.00', NULL, '17940.00', NULL, NULL, 'USD', NULL, '2023-12-25 15:14:43', '2023-12-25 15:14:43'),
(43, 44, 29, NULL, NULL, NULL, '2500.00', 6000.00, 3750.00, 7500.00, '17250.00', '100.00', '690.00', '0.00', '17940.00', NULL, NULL, 'USD', NULL, '2023-12-25 15:15:50', '2023-12-25 15:15:50'),
(44, 45, 19, NULL, NULL, NULL, '2600.00', 4680.00, 5850.00, 5200.00, '15730.00', '100.00', '605.00', '900000.00', '16335.00', NULL, NULL, 'USD', NULL, '2023-12-26 04:22:59', '2023-12-26 04:22:59'),
(45, 46, 19, NULL, NULL, NULL, '2700.00', 4860.00, 6075.00, 10800.00, '21735.00', '0.00', '0.00', '900000.00', '21735.00', NULL, NULL, 'USD', NULL, '2023-12-26 05:11:01', '2023-12-26 05:11:01'),
(46, 47, 19, NULL, NULL, NULL, '2700.00', 3240.00, 4050.00, 8100.00, '15390.00', '0.00', '0.00', '450.00', '15390.00', NULL, NULL, 'USD', NULL, '2023-12-26 08:15:48', '2023-12-26 08:15:48'),
(47, 48, 19, NULL, NULL, NULL, '2700.00', 3240.00, 4050.00, 8100.00, '15390.00', '0.00', '0.00', '450.00', '15390.00', NULL, NULL, 'USD', NULL, '2023-12-26 08:20:05', '2023-12-26 08:20:05'),
(48, 49, 19, NULL, NULL, NULL, '2700.00', 3240.00, 4050.00, 8100.00, '15390.00', '0.00', '0.00', '450.00', '15840.00', NULL, NULL, 'USD', NULL, '2023-12-26 08:22:31', '2023-12-26 08:22:31'),
(49, 50, 19, NULL, NULL, NULL, '2700.00', 3240.00, 4050.00, 8100.00, '15390.00', '100.00', '570.00', '450.00', '16410.00', NULL, NULL, 'USD', NULL, '2023-12-26 08:24:16', '2023-12-26 08:24:16'),
(50, 51, 19, NULL, NULL, NULL, '2700.00', 3240.00, 4050.00, 13500.00, '20790.00', '100.00', '770.00', '570.00', '22130.00', NULL, NULL, 'USD', NULL, '2023-12-27 06:09:45', '2023-12-27 06:09:45'),
(51, 52, 50, NULL, NULL, NULL, '100.00', 120.00, 150.00, 500.00, '770.00', '0.00', '0.00', '0.00', '770.00', NULL, NULL, 'USD', NULL, '2023-12-27 06:41:54', '2023-12-27 06:41:54'),
(52, 53, 50, NULL, NULL, NULL, '100.00', 120.00, 150.00, 500.00, '770.00', '0.00', '0.00', '0.00', '770.00', NULL, NULL, 'USD', NULL, '2023-12-27 07:18:01', '2023-12-27 07:18:01'),
(53, 54, 19, NULL, NULL, NULL, '2700.00', 1620.00, 2025.00, 5400.00, '9045.00', '0.00', '0.00', '255.00', '9300.00', NULL, NULL, 'USD', NULL, '2023-12-27 07:19:03', '2023-12-27 07:19:03'),
(54, 55, 19, NULL, NULL, NULL, '2700.00', 3240.00, 4050.00, 8100.00, '15390.00', '100.00', '570.00', '450.00', '16410.00', NULL, NULL, 'USD', NULL, '2023-12-29 03:32:17', '2023-12-29 03:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `itineraries`
--

CREATE TABLE `itineraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `itinerary_summury` varchar(490) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` int(10) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED NOT NULL,
  `tour_addon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itineraries`
--

INSERT INTO `itineraries` (`id`, `itinerary_summury`, `days`, `program_id`, `tour_addon`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Obcaecati nesciunt', 2, 1, 'programs', 1, '2021-10-15 17:11:18', '2021-12-16 18:39:52'),
(2, 'Eum et excepteur qui', 2, 2, 'programs', 1, '2021-10-19 17:27:29', '2021-10-19 17:27:29'),
(3, 'Nihil sint dignissim', 1, 3, 'programs', 0, '2021-10-19 18:46:39', '2021-12-03 14:54:07'),
(4, 'Working around kilimanjaro', 2, 4, 'programs', 1, '2021-10-30 18:44:39', '2021-12-11 15:24:40'),
(5, 'Voluptas labore temp', 1, 5, 'programs', 0, '2021-10-30 18:58:25', '2021-12-13 20:59:22'),
(6, 'Nihil quis dolore di', 1, 6, 'programs', 0, '2021-10-30 19:04:48', '2021-12-03 14:25:27'),
(7, 'Ex aut placeat aspe', 2, 7, 'programs', 1, '2021-10-30 19:05:03', '2021-10-31 03:36:07'),
(8, 'Vel rerum ea expedit', 2, 4, 'addon', 1, '2021-11-01 06:32:19', '2021-11-01 06:32:19'),
(9, 'Officia provident s', 2, 8, 'programs', 1, '2021-11-16 03:25:08', '2021-11-16 03:25:08'),
(10, 'Voluptatibus assumen', 1, 9, 'programs', 1, '2021-11-16 04:11:09', '2021-11-16 04:11:09'),
(11, 'Consectetur qui ali', 2, 10, 'programs', 1, '2021-11-16 05:30:10', '2021-11-28 16:40:50'),
(12, 'We\'d highly recommend combining your stay at a beach-side hotel with a short stay in the historical and cultural capital – Stone Town, which also happens to be a UNESCO World Heritage Site. Most tourists visit Stone Town on a day trip but we recommend spending at least 2-3 days absorbing it\'s sights and sounds.', 3, 11, 'programs', 59, '2021-11-16 09:06:16', '2023-12-05 09:13:02'),
(13, 'Nostrum eum incidunt', 2, 5, 'addon', 0, '2021-11-20 07:02:41', '2021-12-13 21:58:10'),
(14, 'Occaecat vero quo no', 4, 7, 'tailor_made', 1, '2021-11-27 06:57:29', '2021-11-27 06:57:29'),
(15, 'Dolorum dignissimos', 2, 12, 'programs', 1, '2021-11-28 16:14:31', '2021-11-28 16:14:31'),
(16, 'Rur', 2, 13, 'programs', 0, '2021-12-01 20:11:05', '2021-12-10 00:08:03'),
(17, 'The approximately trekking distance for the Machame Route is 62 km or 37 miles the entire climb from trail head up to the summit and all the way down to Mweka gate. The shortest number of days required for Machame Route is 6 days, but by the time you have added on arrival and departure days it is 10.', 7, 18, 'programs', 59, '2021-12-14 19:13:28', '2022-09-05 14:25:10'),
(18, 'On the 8 day Lemosho route, the trek from Barranco to Barafu is broken up into two days, allowing for a short day just prior to the summit attempt. This is important because summit day begins very early, around midnight, so climbers are sleep deprived going into the toughest day on the mountain.', 8, 19, 'programs', 59, '2021-12-15 13:37:33', '2023-08-24 14:29:23'),
(19, 'The Umbwe route is one of the shortest routes to the Southern Glaciers and the Western Breach and its the most challenging route on Mt Kilimanjaro. Approaching from the south, the Umbwe route is a short, steep and direct climb. It is probably the most scenic, non-technical route on Kilimanjaro.', 6, 20, 'programs', 59, '2021-12-15 15:14:40', '2022-04-23 13:46:35'),
(20, 'The Marangu Route is the oldest on Kilimanjaro and is also one of the most popular – mainly because it is the only route on the mountain that has huts provided for hikers. There are 60 bunk beds each at Mandara and Kibo Huts, and 120 bunk beds at Horombo Hut.', 6, 21, 'programs', 59, '2021-12-15 16:34:37', '2022-04-23 14:06:42'),
(21, 'The Rongai route is one of the easier routes up Kilimanjaro. Rongai is the only route to approach Kilimanjaro from the north and the descent is via the Marangu Route.Summit night from Kibo Hu', 7, 22, 'programs', 1, '2021-12-16 00:50:03', '2021-12-16 00:50:03'),
(22, 'The Shira Route is one of the lesser used trails on Mount Kilimanjaro, making it perfect for those wishing to avoid large numbers of climbers on the first few days.', 8, 23, 'programs', 59, '2021-12-16 14:18:30', '2023-02-15 15:13:05'),
(23, 'The Northern Circuit route is one of the best routes on Kilimanjaro, offering nearly 360 degrees of beautiful scenery including the quiet, rarely visited northern slopes.', 7, 24, 'programs', 59, '2021-12-16 15:35:21', '2023-02-15 15:21:34'),
(24, 'You will hike past wildlife, the landscape is spectacular, and sunrise on the summit has Kilimanjaro as the backdrop. Meru is a great preparation hike for climbing Kilimanjaro, or a spectacul', 4, 25, 'programs', 1, '2021-12-17 14:59:21', '2021-12-18 13:09:40'),
(25, 'Limited on time, or looking to experience some lush landscape after your Kilimanjaro Climb? No trip to Tanzania is complete without experiencing one of the our fabulous parks. You will truly', 1, 26, 'programs', 1, '2021-12-20 20:52:13', '2022-04-23 14:51:02'),
(26, 'The park has excellent game densities and is perhaps best known for its tree-climbing lion, often found sprawled in the branches of sausage trees. There are big troops of olive baboon and blu', 1, 27, 'programs', 1, '2021-12-21 14:10:00', '2023-08-01 13:15:43'),
(27, 'You will start your 3 days safari with pick up from the airport by your guide who will welcome you and brief you about your safari. After your briefing, you will get other information about the safari from your welcome tour guide.', 3, 28, 'programs', 1, '2021-12-21 15:12:55', '2022-01-09 14:53:11'),
(28, 'Olduvai Gorge, Olduvai also spelled Olduwai, paleoanthropological site in the eastern Serengeti Plain, within the boundaries of the Ngorongoro Conservation Area in northern Tanzania. It is a steep-sided ravine consisting of two branches that have a combined length of about 30 miles (48 km) and are 295 feet (90 metres) deep. Deposits exposed in the sides of the gorge cover a time span from about 2.1 million to 15,000 years ago. The deposits have yielded the fossil remains of more than 6', 1, 37, 'programs', 1, '2021-12-28 18:09:14', '2021-12-28 18:13:45'),
(29, '5 Days tour Tarangire National Park,Manyara National Park, Ngorongoro crater. The safari will  take you around the best places in Tanzania, visiting places such as Lake Manyara which is famous for its tree climbing lions, The Ngorongoro Crater which is known also as the Garden of Eden and Tarangire national park  known to have high density of elephants and baobab trees.', 5, 29, 'programs', 1, '2022-01-01 00:11:27', '2022-01-04 20:00:44'),
(30, 'days Tanzania safari offers a wildlife tour to Lake Manyara National Park, Serengeti National Park, the Ngorongoro Crater, and Tarangire National Park. This tour is one of the best tours to explore the vast Serengeti plains combined with a visit to Lake Manyara National Park, home of the flamingos, the Ngorongoro crater which is the largest unfilled crater in the world, and Tarangire National Park with several large land mammals.', 7, 30, 'programs', 1, '2022-01-01 02:30:04', '2023-08-01 13:17:34'),
(31, 'Hike on the flanks of Mount Meru, spot wildlife, and explore Arusha National Park on a full-day tour from Arusha. With a morning walking safari led by a park ranger and an afternoon game drive, you’ll see the park on foot and on back roads. This full-day Arusha National Park tour includes pickup and drop-off in Arusha, entrance fees, and a guided tour of the park, with the option to add a canoe safari across the Momella.', 1, 31, 'programs', 1, '2022-01-01 03:01:50', '2022-01-01 03:01:50'),
(32, 'Dolor ut in ut dicta nisi in in obcaecati maxime quod iste illo beatae modi', 1, 36, 'programs', 1, '2022-01-08 14:25:04', '2022-03-31 23:21:02'),
(33, 'West Kilimanjaro is the first authentic Maasai village  in Tanzania. West Kilimanjaro village provides a unique Maasai & wildlife experience in the West-Kilimanjaro Maasailand, Just 85 km from Arusha While at the village you will share the authentic Maasai life & culture. The income obtained from your tour supports local Maasai families with water, food, employment, personal income, medical treatments and education. All Maasai - jewelry .', 1, 42, 'programs', 58, '2022-01-24 18:44:52', '2022-01-25 17:23:30'),
(34, 'You will be picked up from Kilimanjaro Airport  or Kisongo Airstrip(Arusha Airport) by your guide and driven down into the Lake Eyasi basin, characterised by open grasslands, rocky ridges and hundreds of baobab trees. The drive takes approximately 2hrs 11mins from Arusha, and you will arrive in the late afternoon at your fly camp in the Yaeda Valley. Spend the evening learning more about the days to come from your guide, gaining an understanding of the Hadzabe people', 1, 41, 'programs', 58, '2022-01-25 14:55:22', '2022-01-26 18:15:38'),
(35, 'This safari tour will take you to the largest game reserve and 2nd largest conservation area in Africa sized at 5,000 square kilometers. This is 4 times bigger than the Serengeti and larger than the entire country of Switzerland. Welcome to Selous Game Reserve! This reserve is one of the most remote ones in Tanzania, hence least visited parks in Africa.', 3, 43, 'programs', 1, '2022-01-26 17:31:22', '2022-01-26 17:31:22'),
(36, 'Lake Eyasi is the first authentic Datoga region in Tanzania. Lake Eyasi  provides a unique Datoga & wildlife experience in the northern circuit, Just 147km from Arusha While at the Datoga village you will share the authentic Datoga life & culture. The income obtained from your tour supports local Datoga families with water, food, employment, personal income, medical treatments and education. All Datoga - jewelry .', 1, 46, 'programs', 59, '2022-02-11 15:26:38', '2022-02-11 15:26:38'),
(37, 'The paintings varied in size from a few inches to a couple of feet. The Kondoa Irangi Tour brings you to dozens of caves and shelters with paintings of elongated people, animals, hunting scenes, and abstract markings. Most of paintings are recorded to be dated at more than 2,000 years old and they look similar to those which in Eastern and Southern Africa.\r\n\r\nThe Kondoa rock paintings are associated with pastoralist and agriculturalist communities.', 1, 36, 'Addon', 59, '2022-04-02 18:03:03', '2022-04-02 18:05:21'),
(38, 'You will hike past wildlife, the landscape is spectacular, and sunrise on the summit has Kilimanjaro as the backdrop. Meru is a great preparation hike for climbing Kilimanjaro, or a spectaculf', 4, 25, 'Addon', 1, '2022-04-23 14:40:36', '2022-04-23 14:54:57'),
(39, NULL, 2, 6, 'tailor_made', 1, '2023-11-09 06:33:58', '2023-11-09 06:33:58'),
(40, 'Wawa  pooce', 1, 50, 'Addon', 1, '2023-12-05 09:01:28', '2023-12-05 09:02:29'),
(41, NULL, 1, 53, 'Addon', 1, '2023-12-05 09:19:35', '2023-12-05 09:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary_days`
--

CREATE TABLE `itinerary_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `itinerary_id` int(10) UNSIGNED NOT NULL,
  `day` int(10) UNSIGNED NOT NULL,
  `itinerary_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itinerary_description` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination_id` int(10) UNSIGNED NOT NULL,
  `accommodation_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itinerary_days`
--

INSERT INTO `itinerary_days` (`id`, `itinerary_id`, `day`, `itinerary_title`, `distance`, `transport`, `meal`, `itinerary_description`, `destination_id`, `accommodation_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Est pariatur Ea al', 'Magni animi aut lab', 'Safari Land cruiser', 'Lunch', 'Repellendus Officii', 2, 2, '2021-10-15 17:11:18', '2021-10-15 17:11:18'),
(2, 1, 2, 'Est ipsa ex et ut a', 'Quos et et sed deser', 'Overland Truck', 'Breakfast,Lunch,Dinner', 'Ut quis voluptatem q', 1, 1, '2021-10-15 17:11:18', '2021-10-15 17:11:18'),
(3, 2, 1, 'Anim sit ab veniam', 'Ipsum in dolor dicta', 'Overland Truck', 'Lunch', 'Eos recusandae Minu', 2, 2, '2021-10-19 17:27:30', '2021-10-19 17:27:30'),
(4, 2, 2, 'Exercitationem dolor', 'Nesciunt elit et q', 'Overland Truck', 'Breakfast,Lunch', 'Cupidatat voluptas q', 1, 1, '2021-10-19 17:27:30', '2021-10-19 17:27:30'),
(5, 3, 1, 'Sapiente incidunt h', 'Voluptas ut culpa ea', 'Mini-Bus/Min-Van', 'Breakfast,Lunch', 'Consequatur dolorem', 1, 2, '2021-10-19 18:46:39', '2021-10-19 18:46:39'),
(6, 4, 1, 'Et est delectus ist', 'Corrupti aut odit c', 'Safari Land cruiser', 'Lunch', 'Neque sit sit qui p', 1, 2, '2021-10-30 18:44:39', '2021-10-30 18:44:39'),
(7, 4, 2, 'Quia cupiditate fuga', 'Ratione quis dolor d', 'Overland Truck', 'Dinner', 'Labore nulla exercit', 2, 2, '2021-10-30 18:44:39', '2021-10-30 18:44:39'),
(8, 5, 1, 'Blanditiis eum porro', 'Ratione dolorem eu c', 'Safari Land cruiser', 'Breakfast,Lunch,Dinner', 'Officiis lorem sint', 1, 2, '2021-10-30 18:58:25', '2021-10-30 18:58:25'),
(9, 6, 1, 'At eaque sequi exerc', 'Praesentium minim ci', 'Overland Truck', 'Lunch', 'Ut eaque aute except', 1, 2, '2021-10-30 19:04:48', '2021-10-30 19:04:48'),
(10, 7, 1, 'Rerum vel adipisicin', 'Sequi aliqua Facili', 'Safari Land cruiser', 'Lunch', 'Aperiam tempora quis', 2, 1, '2021-10-30 19:05:03', '2021-10-30 19:05:03'),
(11, 7, 2, 'Deserunt do qui itaq', 'In pariatur Quia it', 'Safari Land cruiser', 'Dinner', 'Dolore eligendi est', 2, 1, '2021-10-30 19:05:03', '2021-10-30 19:05:03'),
(12, 8, 1, 'Officia ea sed sed v', 'Optio officia quide', 'Overland Truck', 'Breakfast,Lunch,Dinner', 'Magna ullamco ut eni', 2, 1, '2021-11-01 06:32:19', '2021-11-01 06:32:19'),
(13, 8, 2, 'Nesciunt dolore nem', 'In nostrud animi di', 'Min-Van', 'Breakfast,Lunch', 'Nostrud veniam est', 1, 2, '2021-11-01 06:32:19', '2021-11-01 06:32:19'),
(14, 9, 1, 'Day1', 'Delectus ratione au', 'Mini-Bus/Min-Van', 'Breakfast', 'Quia corrupti qui d', 1, 1, '2021-11-16 03:25:08', '2021-11-16 03:25:08'),
(15, 9, 2, 'Day2', 'Autem voluptatem con', 'Min-Van', 'Breakfast,Lunch,Dinner', 'Sed commodo necessit', 2, 2, '2021-11-16 03:25:08', '2021-11-16 03:25:08'),
(16, 10, 1, 'Molestias necessitat', 'Recusandae Esse al', 'Mini-Bus/Min-Van', 'Lunch', 'Nihil adipisci incid', 1, 2, '2021-11-16 04:11:09', '2021-11-16 04:11:09'),
(17, 10, 2, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(18, 10, 3, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(19, 10, 4, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(20, 10, 5, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(21, 10, 6, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(22, 10, 7, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(23, 10, 8, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(24, 10, 9, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(25, 10, 10, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(26, 10, 11, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(27, 10, 12, 'nill', NULL, NULL, NULL, 'nill', 0, 0, '2021-11-16 05:24:31', '2021-11-16 05:24:31'),
(28, 11, 1, 'Ut adipisicing error', 'Maiores et nihil non', 'Overland Truck', 'Breakfast', 'Et pariatur Magni l', 2, 1, '2021-11-16 05:30:10', '2021-11-16 05:30:10'),
(29, 11, 2, 'Est voluptatem Et a', 'Aut perferendis solu', 'Mini-Bus/Min-Van', 'Breakfast,Lunch', 'Sit quia eiusmod do', 2, 1, '2021-11-16 05:30:10', '2021-11-16 05:30:10'),
(30, 12, 1, 'Manyara Park', '20', 'Safari Land cruiser', 'Breakfast,Lunch', 'See Lion, hot spring,swamming ggsgfds', 3, 3, '2021-11-16 09:06:16', '2021-11-16 09:06:16'),
(31, 12, 2, 'Ngorongoro', '150', 'Safari Land cruiser', 'Dinner', 'See Lion, hot spring,swamming ggsgfds,Rhinos', 1, 1, '2021-11-16 09:06:16', '2021-11-16 09:06:16'),
(32, 12, 3, 'Ngorongoro to Arusha', '300', 'Safari Land cruiser', 'Lunch', 'Masai Bomas,Snack parks,Cuturah heritage', 2, 2, '2021-11-16 09:06:16', '2021-11-16 09:06:16'),
(33, 13, 1, 'Sed porro accusamus', 'Velit itaque nulla', 'Overland Truck', 'Dinner', 'Aspernatur illo dolo', 3, 3, '2021-11-20 07:02:41', '2021-11-20 07:02:41'),
(34, 13, 2, 'Nulla quos magni cup', 'Ex enim et at conseq', 'Overland Truck', 'Breakfast,Lunch', 'Blanditiis quia labo', 2, 3, '2021-11-20 07:02:41', '2021-11-20 07:02:41'),
(35, 14, 1, 'Aquila Callahan', 'William Sanchez', 'Overland Truck', 'Breakfast,Lunch', 'Est eos dolor et mo', 1, 1, '2021-11-27 06:57:29', '2021-11-27 06:57:29'),
(36, 14, 2, 'Tara Anderson', 'Ignatius Phillips', 'Overland Truck', 'Lunch', 'Pariatur Ipsum vel', 1, 1, '2021-11-27 06:57:29', '2021-11-27 06:57:29'),
(37, 14, 3, 'Leonard Dejesus', 'Hiram Miranda', 'Safari Land cruiser', 'Breakfast,Lunch', 'Fugit dicta delectu', 1, 2, '2021-11-27 06:57:29', '2021-11-27 06:57:29'),
(38, 14, 4, 'Abigail Lynn', 'Aspen Church', 'Mini-Bus/Min-Van', 'Lunch', 'Sint assumenda exerc', 1, 2, '2021-11-27 06:57:29', '2021-11-27 06:57:29'),
(39, 15, 1, 'Anim elit quos aper', 'Harum qui aut dolore', 'Min-Van', 'Dinner', 'Et eius magni deseru', 1, 3, '2021-11-28 16:14:31', '2021-11-28 16:14:31'),
(40, 15, 2, 'Dolores est et et cu', 'Praesentium nostrum', 'Mini-Bus/Min-Van', 'Dinner', 'Natus elit qui cum', 2, 3, '2021-11-28 16:14:31', '2021-11-28 16:14:31'),
(41, 16, 1, 'Ea doloribus qui dol', 'Tempore sint id su', 'Safari Land cruiser', 'Dinner', 'Modi qui et soluta b', 3, 6, '2021-12-01 20:11:05', '2021-12-01 20:11:05'),
(42, 16, 2, 'Officiis voluptas qu', 'Natus qui velit aper', 'Min-Van', 'Lunch', 'Mollit qui voluptas', 3, 8, '2021-12-01 20:11:05', '2021-12-01 20:11:05'),
(43, 4, 1, 'Consequat Dolores c', 'Exercitation volupta', 'Mini-Bus/Min-Van', 'Breakfast,Lunch', 'Repudiandae eveniet', 2, 6, '2021-12-03 12:46:28', '2021-12-03 12:46:28'),
(44, 4, 2, 'Necessitatibus amet', 'Asperiores sunt temp', 'Safari Land cruiser', 'Breakfast,Lunch,Dinner', 'Sed tempora cupidita', 4, 1, '2021-12-03 12:46:28', '2021-12-03 12:46:28'),
(45, 6, 1, 'Dignissimos aliquip', 'Voluptate inventore', 'Safari Land cruiser', 'Breakfast,Lunch', 'Ducimus aut autem m', 3, 1, '2021-12-03 14:25:27', '2021-12-03 14:25:27'),
(46, 3, 1, 'Commodi possimus qu', 'Tempor neque qui nem', 'Mini-Bus/Min-Van', 'Lunch', 'Animi ut ut at arch', 2, 6, '2021-12-03 14:54:07', '2021-12-03 14:54:07'),
(47, 1, 1, 'Optio id dignissim', 'Qui distinctio Inci', 'Safari Land cruiser', 'Breakfast,Lunch', 'In eum reiciendis li', 2, 7, '2021-12-03 14:57:44', '2021-12-03 14:57:44'),
(48, 1, 2, 'Nostrud sequi impedi', 'Aut cum sapiente vol', 'Mini-Bus/Min-Van', 'Lunch', 'Fugiat voluptatem', 2, 5, '2021-12-03 14:57:44', '2021-12-03 14:57:44'),
(49, 12, 1, 'Zanzibar Island 🏝', '75km', 'Boat', 'Lunch', 'Arrival at Zanzibar Airport and transfer to Zanzibar Stone Town. The Zanzibar Stone Town is the old city and cultural heart of Zanzibar. Very little has changed in the last 200 years. It is a place of winding alleys, bustling bazaars, mosques and grand Arab houses whose original owners vied with each other over the extravagance of their dwellings.\r', 85, 67, '2021-12-09 15:22:38', '2022-04-18 18:47:20'),
(50, 12, 2, 'Zanzibar Island 🏝', '50km', 'Bus', 'Breakfast,Lunch,Dinner', 'After breakfast, we drive to Jozani Forest. It is home to endangered red colubus monkeys. Wonderful photo opportunities and sightings of these rare creatures living in the forest reserves are possible on the pathways. It is estimated that there are now between 2,000-2,500 monkeys and other small animals.', 85, 68, '2021-12-09 15:22:38', '2022-04-18 19:08:33'),
(51, 12, 3, 'Zanzibar Island 🏝', '75km', 'Boat', 'Breakfast,Lunch,Dinner', 'After breakfast transfer to Zanzibar International Airport to catch your flight to back home.\r\nMain destination: Zanzibar Airport', 85, 68, '2021-12-09 15:22:38', '2022-04-18 18:57:21'),
(52, 16, 1, 'Day1', '78', 'Min-Van', 'Breakfast,Lunch', 'Day1', 4, 7, '2021-12-10 00:07:45', '2021-12-10 00:07:45'),
(53, 16, 2, 'Day2', '80', 'Min-Van', 'Breakfast,Lunch,Dinner', 'Day2', 4, 8, '2021-12-10 00:07:45', '2021-12-10 00:07:45'),
(54, 4, 1, NULL, '5495', 'Safari Land cruiser', 'Breakfast,Lunch,Dinner', 'Walking', 5, 1, '2021-12-10 13:32:59', '2021-12-10 13:32:59'),
(55, 4, 2, NULL, '2000', 'Mini-Bus/Min-Van', 'Breakfast,Lunch', NULL, 5, 5, '2021-12-10 13:32:59', '2021-12-10 13:32:59'),
(56, 5, 1, 'Quo laboriosam quo', 'Dolor repudiandae el', 'Min-Van', 'Breakfast', 'Fugit dolorem conse', 7, 14, '2021-12-13 20:59:22', '2021-12-13 20:59:22'),
(57, 13, 1, 'Facilis harum non eu', 'Consequatur tempor', 'Min-Van', 'Breakfast,Lunch', 'Eius rerum ut neque', 24, 29, '2021-12-13 21:58:10', '2021-12-13 21:58:10'),
(58, 13, 2, 'Non sint voluptas vo', 'In magnam ratione ut', 'Safari Land cruiser', 'Breakfast,Lunch,Dinner', 'Reprehenderit omnis', 58, 36, '2021-12-13 21:58:10', '2021-12-13 21:58:10'),
(59, 17, 1, 'Machame gate', '1,800m /5,905ft  to 3,000m/9,840ft', 'Walking Safaris', 'Breakfast', 'Drive from Arusha to Mt Kilimanjaro National Park, passing by the village of Machame to meet your climb crew at the Machame Gate. As you begin the gentle ascent, the trail winds though the verdant afromontane rainforest that beards Kilimanjaro’s lower slopes.', 6, 34, '2021-12-14 19:13:28', '2022-04-18 19:17:29'),
(60, 17, 2, 'Machame camp site', '3,000m/9840ft to  3840m/12,600', 'Walking Safaris', 'Breakfast', 'After a good nights sleep and a hearty breakfast we emerge from the rain forest and continue on an ascending path, crossing the valley along a steep rocky ridge. The route now turns west onto a river gorge until we arrive at the Shira campsite. Temperatures begin to drop.', 7, 35, '2021-12-14 19:13:28', '2022-04-18 19:22:26'),
(61, 17, 3, 'Shira cave campsite', '3,840m/12,600ft to 3,950m/12,960ft', 'Walking Safaris', 'Breakfast', 'Although you end the day around the same elevation as when you began, this day is very important for acclimatization. From Shira Plateau we continue east up a ridge, passing the junction towards the Kibo peak before we then continue, South East towards the Lava Tower, called the “Shark’s Tooth” (elev. 4650m/15,250ft).', 22, 14, '2021-12-14 19:13:28', '2022-04-18 19:26:33'),
(62, 17, 4, 'Baranco camp site', '3,930m to 3,950m', 'Walking Safaris', 'Lunch', 'Barranco campsite has no cabin accommodation, meaning all of climbers who use it sleep in tents that are carried up the mountain by porters.', 9, 18, '2021-12-14 19:13:28', '2022-04-18 19:27:20'),
(63, 17, 5, 'Karanga camp site', '3,950m/12960ft to 4,600m/15,100ft', 'Walking Safaris', 'Breakfast', 'An overnight resting point located next to the Karanga valley, on the southern side of Kibo, and in Kilimanjaro national park.', 50, 23, '2021-12-14 19:13:28', '2021-12-14 19:13:28'),
(64, 17, 6, 'Barafu camp site', '4,673 meters (15,330 feet)', 'Walking Safaris', 'Dinner', 'Midnight after refreshing tea with cookies, starts walking for summit. The day is tough and looking to make your dream come true. The walk to the summit takes about 6-7hrs. After arriving at the summit of UHURU PEAK 5,895m, take photos for about 20 minutes.', 58, 29, '2021-12-14 19:13:28', '2022-04-18 19:33:52'),
(65, 17, 7, 'Mweka camp site', '4,673m/15,330', 'Safari Land Cruiser', 'Breakfast', 'After breakfast and a heartfelt ceremony of appreciation and team bonding with your crew, it’s time to say goodbye. We continue the descent down to the Mweka Park Gate to receive your summit certificates. As the weather is drastically warmer, the terrain is wet, muddy and steep and we highly recommend trekking poles.', 20, 27, '2021-12-14 19:13:28', '2022-04-18 19:45:46'),
(66, 18, 1, 'Londorossi gate', 'Elevation: 2389m/7838ft to 2785m/9137ft', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'We depart Moshi for Londorossi Gate, roughly a 4-hour drive, where you will complete the entry formalities. We will then drive to the Lemosho trailhead and upon arrival, we will begin the hike through undisturbed forest which winds its way to the first campsite. Keep your eyes peeled for the blue monkeys swinging through the trees!', 13, 36, '2021-12-15 13:37:33', '2022-04-23 12:53:34'),
(67, 18, 2, 'Big tree camp site', 'Elevation: 2389m/7838ft to 2785m/9137ft', 'Walking Safaris', 'Breakfast', 'We continue on the trail leading out of the rainforest and into a savannah of tall grasses, heather, and volcanic rock draped with lichen beards. As we ascend through the lush rolling hills and cross several streams, we reach the Shira Ridge before dropping gently down to Shira 1 Camp. Here we catch our first glimpse of Kibo across the plateau.', 15, 37, '2021-12-15 13:37:33', '2022-04-23 12:55:14'),
(68, 18, 3, 'Shira one camp site', 'Elevation: 3504m/11,496ft to 3895m/12,779ft', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'Today, we will spend the full day exploring the Shira Plateau, one of the highest plateaus on earth. It is a gentle walk east on moorland meadows towards Shira 2 Camp. We then divert from the main trail to Moir Hut, a lesser-used camping site at the base of the Lent Hills.', 15, 38, '2021-12-15 13:37:33', '2022-04-23 12:58:58'),
(69, 18, 4, 'Shira two camp site', 'Elevation: 3895m/12,779ft to 3986m/13,077ft', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'We begin the day climbing up a ridge and then head southeast towards the Lava Tower – a 300 ft tall volcanic rock formation. We descend down to Barranco Camp through the strange but beautiful Senecio Forest to an altitude of 13,000 ft. Although you begin and end the day at the same elevation.', 22, 13, '2021-12-15 13:37:33', '2022-04-23 13:03:25'),
(70, 18, 5, 'Baranco camp site', 'Elevation: 3986m/13,077ft to 4034m/13,235ft', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'We begin the day by descending into a ravine to the base of the Great Barranco Wall. We will then climb the non-technical but steep, nearly 900ft, cliff. The Barranco Wall, also known as the Kissing Wall, is approximately 3 ft. wide.', 22, 22, '2021-12-15 13:37:34', '2022-04-23 13:01:38'),
(71, 18, 6, 'Barafu camp site', 'Elevation: 4034m/13,235ft to 4662m/15,295ft', 'Walking Safaris', 'Breakfast', 'We leave Karanga and hit the junction which connects with the Mweka Trail. We continue up the rocky section to Barafu Hut. At this point, you have completed the Southern Circuit, which offers views of the summit from many different angles. Here we make camp, rest, and enjoy an early dinner to prepare for the summit day.', 24, 56, '2021-12-15 13:37:34', '2022-04-23 13:05:46'),
(72, 18, 7, 'Uhuru peak', 'Elevation: 4662m/15,295ft to 5895m/19,341ft', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'Very early in the morning (around midnight), we begin our push to the summit. This is the most mentally and physically challenging part of the trek. At this elevation and time of day, the wind and cold can be extreme. We ascend in the darkness for several hours while taking frequent but short breaks.', 11, 29, '2021-12-15 13:37:34', '2022-04-23 13:17:18'),
(73, 18, 8, 'Mweka camp site', 'Elevation: 3106m/10,190ft to 1633m/5358ft', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'On our last day, we continue the descent to Mweka Gate where we will be met by our driver who will transport us back to the hotel in Moshi. Here, we can relax with some refreshments, perhaps a local Kilimanjaro beer, while we wait to receive our summit certificates. At lower elevations, it can be wet and muddy,From the gate.', 11, 55, '2021-12-15 13:37:34', '2022-04-23 13:19:09'),
(74, 19, 1, 'Umbwe gate', 'Elevation 1600m to 2900m', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'Departing from Moshi driving to the Kilimanjaro National Park Gate. We will patiently wait for our permits to be issued while watching the hustle and bustle of operations as many crews prepare for the journey ahead Enjoy the beautiful rainforest scenery and windy trails while your guide tells you about the local flora and fauna and natural wildlife', 21, 39, '2021-12-15 15:14:40', '2022-04-23 13:37:38'),
(75, 19, 2, 'Umbwe cave camp site', 'Elevation 2940m to 3970m', 'Walking Safaris', 'Dinner', 'After a good nights sleep and a hearty breakfast we emerge from the rain forest and continue on a steep ascending path, along the Umbwe ridge as it descends slightly to Barranco camp situated in the valley. Temperatures begin to drop.', 21, 21, '2021-12-15 15:14:40', '2022-04-23 13:38:46'),
(76, 19, 3, 'Karanga camp site e', 'Elevation 3950m to 3930m', 'Walking Safaris', 'Breakfast', 'After breakfast, we continue on a steep ridge up the adventurous Barranco Wall to the Karanga Valley and the junction, which connects, with the Mweka Trail. This is one of the most impressive days to see the power, agility, and strength of your crew zip over this wall with what appears such ease. Overnight at Karanga Camp.', 9, 25, '2021-12-15 15:14:40', '2022-04-23 13:39:58'),
(77, 19, 4, 'Barafu camp site', 'Elevation 4,673m to 5,895m', 'Walking Safaris', 'Breakfast', 'We continue up toward Barafu Camp, and once reached you have now completed the South Circuit, which offers a variety of breathtaking views of the summit from many different angles. An early dinner and rest as we prepare for summit night. Overnight at Barafu Camp.', 23, 56, '2021-12-15 15:14:40', '2022-04-23 13:40:50'),
(78, 19, 5, 'Uhuru peak', 'Elevation5895m to 3,100m.', 'Walking Safaris', 'Lunch', 'Congratulations, one step at a time you have now reached Uhuru Peak the highest point on Mount Kilimanjaro and the entire continent of Africa!\r\n\r\nAfter photos, celebrations and maybe a few tears of joy we take a few moments to enjoy this incredible accomplishment. We begin our steep descent down to Mweka Camp.', 61, 29, '2021-12-15 15:14:40', '2022-04-23 13:43:02'),
(79, 19, 6, 'Mweka camp site', 'Elevation 3790m to 1630m', 'Walking Safaris', 'Breakfast,Lunch', 'After breakfast and a heartfelt ceremony of appreciation and team bonding with your crew it’s time to say goodbye. We continue the descent down to the Mweka Park Gate to receive your summit certificates. As the weather is drastically warmer, the terrain is wet, muddy and steep and we highly recommend Gaiters and trekking poles.', 51, 55, '2021-12-15 15:14:40', '2022-04-23 13:45:24'),
(80, 20, 1, 'Moshi town', '25miles', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'Morning after breakfast with picnic lunch and drinking water drive to Marangu Park gate one hour. After check in start walking to Mandara hut. Walking under the shades of heavy rain forest. See monkeys and beautiful birds like Turaco or forest birds. Get picnic lunch at half way. After lunch continue walking to Mandara hut.', 31, 57, '2021-12-15 16:34:37', '2022-04-23 13:53:28'),
(81, 20, 2, 'Marangu gate', 'Elevation 1860m to 2700m', 'Walking Safaris', 'Breakfast', 'After a good nights sleep and a hearty breakfast, we emerge from the rain forest and continue on an ascending path, through heathland, looking for giant lobelias and groundsels. Continue up into open moorlands where small shrubs are the main vegetation. Stop halfway for lunch, to enjoy amazing views of Mawenzi.', 26, 40, '2021-12-15 16:34:37', '2022-04-23 13:57:35'),
(82, 20, 3, 'Mandara hut 🛖', 'Elevation  2700m to horombo 3720m', 'Walking Safaris', 'Breakfast,Lunch', 'You can spend a full day and a second night at Horombo. On this day, you can either rest at the huts or take a stroll up to the Mawenzi base camp then return to the Horombo Huts. This extra day will help your acclimatization, and further your understanding of the mountains weather and altitude. After your pause, you will continue up to the Kibo Hut', 26, 30, '2021-12-15 16:34:37', '2022-04-23 13:59:21'),
(83, 20, 4, 'Horombo huts 🛖', 'Elevation  3720m to 4700', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'After breakfast, we continue on through the dwindling heathland that blends into a moonscape as you enter the sweeping saddle connecting Mawenzi and Kibo. Here while we stop for lunch, and later when you cross this surprisingly large saddle, you can examine the summit climb up Kibo that you will be starting in just a few hours', 29, 33, '2021-12-15 16:34:37', '2022-04-23 14:01:35'),
(84, 20, 5, 'Kibo camp site', 'Elevation  4700m to 3720m', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'Congratulations, one step at a time you have now reached Uhuru Peak the highest point on Mount Kilimanjaro and the entire continent of Africa!\r\n\r\nAfter photos, celebrations and maybe a few tears of joy we take a few moments to enjoy this incredible accomplishment. We begin our steep descent down to Mweka Camp', 30, 31, '2021-12-15 16:34:37', '2022-04-23 14:03:42'),
(85, 20, 6, 'Horombo huts 🛖', 'Elevation  3720m to 1860m', 'Walking Safaris', 'Breakfast,Lunch', 'After breakfast and a heartfelt ceremony of appreciation and team bonding with your crew, it’s time to say goodbye. We continue the descent down stopping at the Mandara Huts for lunch. Remember to tip your guides, cooks, and porters, since you will be leaving them here. You return back to the Marangu Park Gate and receive your summit certificates. ', 28, 57, '2021-12-15 16:34:37', '2022-04-23 14:05:31'),
(86, 21, 1, 'Nale muru gate', 'Elevation  1997m to 2635m', 'Walking Safaris', 'Dinner', 'Mount Kilimanjaro is a dormant volcano in Tanzania. It has three volcanic cones: Kibo, Mawenzi, and Shira. It is the highest mountain in Africa and the highest single free-standing mountain i', 62, 41, '2021-12-16 00:50:03', '2021-12-16 00:50:03'),
(87, 21, 2, 'Simba cave camp site', 'Elevation  2635m to 3487m', 'Walking Safaris', 'Breakfast', 'Simba camp is the first campsite you come across on Mount Kilimanjaro via the Rongai Route. It is located in the North East of the mountain and is an overnight campsite. The campsite is small', 32, 42, '2021-12-16 00:50:03', '2021-12-16 00:50:03'),
(88, 21, 3, 'Second cave camp site', 'Elevation  3487m to 3675m', 'Walking Safaris', 'Breakfast', 'Our options at Second Cave: Taking the path to Mawenzi Tarn. Here the path splits. If we\'ve chosen the shorter, more direct route, then we\'ll continue ...', 42, 33, '2021-12-16 00:50:03', '2022-01-10 13:22:46'),
(89, 21, 4, 'Kikelelwa camp site', 'Elevation  3487m to 4302m', 'Safari Land Cruiser', 'Breakfast', 'Kikelelwa campsite is situated along the Rongai Route on Mount Kilimanjaro and is the third campsite that you come across on your way to the summit. This campsite is an overnight resting poin', 42, 9, '2021-12-16 00:50:03', '2022-01-10 14:31:31'),
(90, 21, 5, 'Mawenzi turn hut 🛖', 'Elevation 4387m to 4714m', NULL, 'Breakfast', 'The Rongai Route is another of the routes of Kilimanjaro that can lead you ... Overnight 3rd Cave Campsite or MAWENZI Turn Hut Campsite [3-4 hours walking].', 42, 33, '2021-12-16 00:50:03', '2021-12-16 00:55:34'),
(91, 21, 6, 'Kibo hut  🛖', 'Elevation  4302m to 3721m', 'Walking Safaris', 'Dinner', 'The Rongai Route is another of the routes of Kilimanjaro that can lead you ... Overnight 3rd Cave Campsite or MAWENZI Turn Hut Campsite [3-4 hours ...', 30, 31, '2021-12-16 00:50:03', '2021-12-16 00:50:03'),
(92, 21, 7, 'Horombo hut 🛖', 'Elevation 3721mto1905m', 'Walking Safaris', 'Lunch', 'You will spend an extra day at the Horombo Huts to allow your body to acclimate to the increasingly high altitude. You must stay at camp and relax if you ...', 43, 57, '2021-12-16 00:50:03', '2021-12-16 00:50:03'),
(93, 22, 1, 'Moshi town', '3000m', 'Safari Land Cruiser', 'Breakfast', 'Leave hotel after breakfast for 8 Days Shira Route Mount Kilimanjaro to shira gate, all the way driving. After we finish with the park gate, start hiking to shira plateau for 4hrs, dinner and', 14, 37, '2021-12-16 14:18:30', '2021-12-16 14:18:30'),
(94, 22, 2, 'Shira one camp site', '3700m', 'Walking Safaris', 'Breakfast', 'Early hike will start after breakfast to shira hut which is 5-6 hrs, lunch will be on the way. Dinner and over night in the camp.[3700m].', 15, 51, '2021-12-16 14:18:30', '2021-12-16 14:18:30'),
(95, 22, 3, 'Moir huts  🛖', '4400m', 'Walking Safaris', 'Breakfast', 'The morning walk is a steady climb away from the moorland of Shira Plateau to reach the broad upland desert beneath the Lent Hills, with expansive views in all directions.', 47, 11, '2021-12-16 14:18:30', '2023-02-15 15:10:16'),
(96, 22, 4, 'Baranco camp site', '3800m', 'Walking Safaris', 'Breakfast', 'This is a very short day and as well is going down to Baranco camp which is [3800m] and this one will help you very much for acclimatizing for the summit. Dinner and over night in the camp.', 8, 19, '2021-12-16 14:18:30', '2021-12-16 14:18:30'),
(97, 22, 5, 'Karanga camp site', '3900m', 'Walking Safaris', 'Breakfast', 'We Begin The Day By Descending Into A Ravine To The Base Of The Great Barranco Wall. Then We Climb The Non-Technical But Steep, Nearly 900 Ft Cliff.', 23, 24, '2021-12-16 14:18:30', '2023-02-15 15:11:13'),
(98, 22, 6, 'Barafu camp site', '4500mū', 'Walking Safaris', 'Breakfast', 'Very Early In The Morning (Around Midnight), We Begin Our Push To The Summit. This Is The Most Mentally And Physically Challenging Portion Of The Trek.', 61, 56, '2021-12-16 14:18:30', '2023-02-15 15:11:40'),
(99, 22, 7, 'Uhuru peak', 'Uhuru Peak (5,895m/19,340ft) to Mweka Camp', 'Walking Safaris', 'Breakfast', 'The final part of the climb to it usually starts just after midnight, reaching the summit just before or after sunrise — depending on fitness.', 61, 28, '2021-12-16 14:18:31', '2023-02-15 15:12:22'),
(100, 22, 8, 'Mweka camp site', 'Mweka Camp (3,100 m) to Mweka Gate (1,640 m)', 'Walking Safaris', 'Lunch', 'We take breakfast at 8.30am and then walk down to Mweka gate, then cash our transport to Moshi or Arusha. End of your 8 Days Shira Route Mount Kilimanjaro.', 24, 55, '2021-12-16 14:18:31', '2021-12-16 14:18:31'),
(101, 23, 1, 'Shira one camp site', '7km/ 4 miles', 'Walking Safaris', 'Breakfast', 'Today is a fairly easy day to help with acclimatization. We begin by exploring the grassy moorland and volcanic rock formations on the plateau.', 14, 38, '2021-12-16 15:35:21', '2023-02-15 15:18:27'),
(102, 23, 2, 'Shira two camp site', '19km/miles', 'Walking Safaris', 'Lunch', 'We continue to the east up a ridge and then head southeast towards the Lava Tower – a 300 ft tall volcanic rock formation.', 15, 51, '2021-12-16 15:35:21', '2023-02-15 15:19:00'),
(103, 23, 3, 'Moir huts', '8km/ 5miles', 'Walking Safaris', 'Breakfast', 'Moir\'s hut is an old, run-down, and ruined pyramid shaped-wooden hut situated along on the magnificent mount Kilimanjaro\'s Shira plateau.', 47, 54, '2021-12-16 15:35:21', '2021-12-16 15:35:21'),
(104, 23, 4, 'Pofu camp site', '8km/5miles', 'Walking Safaris', 'Breakfast', 'Pofu camp is located close to Buffalo camp on the northern side of mount Kilimanjaro\'s tallest peak, Kibo. A bit further from it is third cave camp.', 55, 47, '2021-12-16 15:35:21', '2023-02-15 15:19:42'),
(105, 23, 5, 'Third cave camp site', '5km/ 3miles', 'Walking Safaris', 'Breakfast', 'Third cave campsite is an overnight resting point on mount Kilimanjaro that is used by hikers on the Rongai and Northern circuit routes.', 41, 46, '2021-12-16 15:35:21', '2023-02-15 15:20:08'),
(106, 23, 6, 'School huts 🛖', '6km/3miles', 'Walking Safaris', 'Breakfast', 'Very early in the morning (around midnight), we begin our push to the summit. This is the most mentally and physically challenging portion of the trek.', 51, 26, '2021-12-16 15:35:21', '2023-02-15 15:20:36'),
(107, 23, 7, 'Mweka  camp site', '10km/6miles', 'Walking Safaris', 'Lunch', 'On our last day, we continue the descent to Mweka Gate and collect the summit certificates. At lower elevations, it can be wet and muddy.', 24, 55, '2021-12-16 15:35:21', '2023-02-15 15:21:03'),
(108, 1, 1, 'Voluptatum fuga Acc', 'Do quos magnam sequi', 'Mini-Bus/Min-Van', 'Dinner', 'Atque velit sunt fug', 29, 41, '2021-12-16 18:39:52', '2021-12-16 18:39:52'),
(109, 1, 2, 'Incidunt duis quas', 'Itaque ut quia quos', 'Mini-Bus/Min-Van', 'Breakfast,Lunch,Dinner', 'Reprehenderit nobis', 35, 36, '2021-12-16 18:39:52', '2021-12-16 18:39:52'),
(110, 24, 1, 'Arusha town', 'Arusha National Park Size: 552 sq km (212 sq miles) Established: 1960 Distance from Arusha: 25 km (15 miles)', 'Safari Land Cruiser', 'Breakfast', 'Mount Meru is located just north of the city of Arusha, in the Arusha Region of Tanzania. It is the second-highest mountain in Tanzania, after Mount Kilimanjaro. Mount Meru is also the highes', 66, 58, '2021-12-17 14:59:22', '2021-12-17 14:59:22'),
(111, 24, 2, 'Ngngongare gate', 'Elevation: 11,712 ft to 4,921 ft. Distance: 7 km | 4 miles. Hiking Time: 2-4 hours. Habitat: Rain Forest.', 'Walking Safaris', 'Lunch', 'Following breakfast we transfer through Arusha National Park to Momella Gate and complete \r\nthe registration formalities, thereafter we begin our trek by following the track through the \r\nfor', 65, 61, '2021-12-17 14:59:22', '2021-12-17 14:59:22'),
(112, 24, 3, 'Saddle hut 🛖', 'MIRIAKAMBA HUT (2541 M) – SADDLE HUT (3570 M)', 'Walking Safaris', 'Dinner', 'At around midnight we will leave Saddle Hut to make the trek to the Summit of \r\nMeru via Rhino Point. There really are rhinoceros (kifaru) remains here, but the \r\nreason why baffles everyone.', 64, 61, '2021-12-17 14:59:22', '2021-12-17 14:59:22'),
(113, 24, 4, 'Miriakamba hut 🛖', 'Elevation: 11,712 ft to 4,921 ft. Distance: 7 km | 4 miles. Hiking Time: 2-4 hours. Habitat: Rain Forest.', 'Walking Safaris', 'Lunch', 'From Miriakamba Hut it is a steep but steady descent retracing the track that we ascended. We once again revisit the forest areas and open grassland where zebras and giraffe \r\nare very often ', 63, 58, '2021-12-17 14:59:22', '2021-12-17 14:59:22'),
(114, 25, 1, 'Silale swamp', '3 hr 13 min (150.6 km)', 'Safari Land Cruiser', 'Lunch', 'Tarangire is the least visited of the parks along Tanzania\'s northern circuit, and it\'s a crying shame. The park\'s large elephant population, iconic Baobab trees, and diversity of wildlife ma', 67, 65, '2021-12-20 20:52:13', '2021-12-20 21:31:13'),
(115, 26, 1, 'Lake Manyara national park', '2 hr 31 min (125 km)', NULL, 'Lunch', 'Lake Manyara is a shallow alkaline lake at the base of the western stretches of the Rift Valley Escarpment.', 4, 66, '2021-12-21 14:10:00', '2021-12-21 14:16:25'),
(116, 27, 1, 'Arusha town', '45 min,70', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'Arusha city is located northern part of Tanzania,it known because of its famous to have many national parks and brave tribe of Masai, The tribe known because of maintain of its culture and living with wild animal', 77, 63, '2021-12-21 15:12:55', '2022-01-04 17:44:22'),
(117, 27, 2, 'Tarangire national park', '110km   2hr 50min', NULL, 'Dinner', 'The park named after the Tarangire River which crosses the park from Irangi hills up to lake Burunge, The river supports life for  diversity living organism especially at the height of the dry season, The park is well worth to visit because of high density of elephants and baobab trees.', 68, 63, '2021-12-21 15:12:55', '2022-01-04 17:33:56'),
(118, 27, 3, 'Manyara national park', '2 hr 29 min 124.7', NULL, 'Breakfast,Lunch', 'Watching wildlife in Lake Manyara National Park is good all year, but at its best from late June to October, during the Dry season. However, this very scenic park is at its most beautiful during the year.', 69, 63, '2021-12-21 15:12:55', '2022-01-04 17:24:55'),
(119, 28, 1, 'Arusha', '4 hr 9 min (212.2 km)', NULL, 'Breakfast,Lunch', 'Olduvai Gorge, Olduvai also spelled Olduwai, paleoanthropological site in the eastern Serengeti Plain, within the boundaries of the Ngorongoro Conservation Area in northern Tanzania. It is a', 76, 62, '2021-12-28 18:09:14', '2021-12-28 20:28:44'),
(120, 29, 1, 'Airport', '0', NULL, 'Breakfast,Lunch,Dinner', 'We will pick up at the airport and our drive will brief you about your safari and take you into the hotel.', 78, 63, '2022-01-01 00:11:27', '2022-01-04 20:10:07'),
(121, 29, 2, 'Arusha City-Tarangire', '2 hr 150.6 km', NULL, 'Breakfast,Lunch,Dinner', 'We start our Safari after your breakfast drive to Tarangire National Park home of herds of elephants, Zebra,wildebeest and baobab trees', 68, 62, '2022-01-01 00:11:27', '2022-01-04 20:39:07'),
(122, 29, 3, 'Tarangire national park', '2 hr 56 min (136.3 km)', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'TARANGIRE-NGORONGORE    BE SURE TO WAKE UP EARLY TODAY, SO THERE IS NO DELAY ON YOUR DESCENT INTO THE  NGORONGORO CRATER \r\nYOU WILL BE AMAZED BY THE BEAUTY AROUND YOU.\r\nTHE CRATER IS FAMOUS F', 68, 63, '2022-01-01 00:11:27', '2022-01-01 00:11:27'),
(123, 29, 4, 'Ngorongoro conservation Area', '1 hr 13 min (40.3 km)', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'NGORONGORO (OLDUVAI GORGE AND MAASAI EXPERIENCE)\r\n\r\n AFTER YOUR DELICIOUS BREAKFAST AT THE HOTEL DRIVE TO OLDUVAI GORGE THE SITE OF LOUIS AND MARY LEAKEYS RENOWNED ARCHAEOLOGICAL DISCOVERIES ', 73, 62, '2022-01-01 00:11:27', '2022-01-01 00:11:27'),
(124, 29, 5, 'Manyara national park', '1 hr 9 min (36.9 km)', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'KARATU - MANYARA \r\n BREAKFAST AT YOUR HOTEL DRIVE TO LAKE MANYARA A SODA LAKE LYING IN THE GREAT RIFT VALLEY AMAZING FOR ITS TREE-CLIMBING LIONS  LARGE VARIETY OF ANIMALS INCLUDING GIRAFFE, Z', 69, 63, '2022-01-01 00:11:27', '2022-01-04 19:47:43'),
(125, 30, 1, 'Arusha', '1 hr 5 min (51.9 km)', 'Safari Land Cruiser', 'Dinner', 'Arrival, transfer to Arusha/have a tour in Arusha town', 77, 63, '2022-01-01 02:30:04', '2022-01-01 02:30:04'),
(126, 30, 2, 'Arusha', '2 hr 42 min (159.0 km)', 'Safari Land Cruiser', 'Dinner', 'From Arusha, transfer to Lake Manyara National Park', 69, 62, '2022-01-01 02:30:04', '2022-01-01 02:30:04'),
(127, 30, 3, 'Lake Manyara national park', '422.4 km', 'Safari Land Cruiser', 'Dinner', 'From Lake Manyara transfer to Serengeti National Park', 72, 62, '2022-01-01 02:30:04', '2022-01-01 02:30:04'),
(128, 30, 4, 'Serengeti national park', '1 hr 32 min (62.2 km)', NULL, 'Dinner', 'Full day experience at Serengeti National Park', 72, 69, '2022-01-01 02:30:04', '2022-01-03 14:51:01'),
(129, 30, 5, 'Serengeti national park', '1 hr 32 min (62.2 km)', NULL, 'Dinner', 'Transfer from Serengeti to Ngorongoro Crater', 73, 69, '2022-01-01 02:30:04', '2022-01-03 14:51:40'),
(130, 30, 6, 'Ngorongoro conservation Area', '1 hr 32 min (62.2 km)', 'Safari Land Cruiser', 'Dinner', 'Have Ngorongoro Crater tour, picnic lunch and transfer to Tarangire National Park.', 76, 62, '2022-01-01 02:30:04', '2022-01-01 02:30:04'),
(131, 30, 7, 'Ngorongoro conservation Area', '5 hr 51 min (330.3 km)', 'Safari Land Cruiser', 'Breakfast,Lunch', 'Game drive at Manyara national park return to Arusha by evening.', 69, 62, '2022-01-01 02:30:04', '2022-01-01 02:30:04'),
(132, 31, 1, 'Arusha', '70km/hr', 'Safari Land Cruiser', 'Breakfast', 'Arusha National Park; The home of the endangered species of Black Rhino. At the Crater travelers can spot all the Big 5 animals in the crater rim. The park has a forest and open plains. It\'s ', 74, 58, '2022-01-01 03:01:50', '2022-01-01 03:01:50'),
(133, 32, 1, 'Kondao Irangi', '250', 'Safari Land Cruiser', 'Breakfast,Lunch', 'See cave drawing', 80, 70, '2022-01-08 14:25:04', '2022-01-08 14:35:02'),
(135, 33, 1, 'Arusha to West Kilimanjaro', '85 km', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'You will be picked up at your hotel 0800hrs and transferred to the West Kilimanjaro village.it is roughly at a 1 and a half hour drive from moshi town.While at the village you will be given a tour of the village to get a better understanding of the Maasai culture and tradition.You will also go on a short walking Safari and learn about Maasai huntin', 81, 73, '2022-01-24 18:44:52', '2022-01-24 18:44:52'),
(136, 34, 1, 'Arusha to lake eyasi', '180km', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'You will be picked up from Kilimanjaro Airport  or Kisongo Airstrip(Arusha Airport) by your guide and driven down into the Lake Eyasi basin, characterised by open grasslands, rocky ridges and hundreds of baobab trees. The drive takes approximately 2hrs 11mins from Arusha, and you will arrive in the late afternoon at your fly camp in the Yaeda Valle', 83, 73, '2022-01-25 14:55:22', '2022-01-25 14:55:22'),
(137, 35, 1, 'Dar es salama  to selous game reserve', '3 hr 55 min (220.0 km)', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'Our driver-guide will pick you up from Dar es Salaam and drive you to Selous Game Reserve with picnic lunch to be served on the way. We arrive at the camp early in the afternoon, settle in, and we head for a boat safari along the mighty Rufiji River. The river is formed by the confluence of the Kilombero and Luwegu rivers. It is approximately 600 k', 84, 74, '2022-01-26 17:31:22', '2022-01-26 17:31:22'),
(138, 35, 2, NULL, '40km', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'After breakfast, we depart for morning and afternoon game drive at the Selous Game Reserve. The Selous Game Reserve is the largest in Africa, covering 54,600 square kilometers. The reserve gets its name from the hunter and explorer Frederick Courtney Selous. He was killed here during World War 1. Selous is famous for elephants. Other species common', 84, 74, '2022-01-26 17:31:22', '2022-01-26 17:31:22'),
(139, 35, 3, NULL, '3 hr 55 min (220.0 km)', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'After breakfast, we drive back to Dar Es Salaam with picnic lunch on the way.', 84, 74, '2022-01-26 17:31:22', '2022-01-26 17:31:22'),
(140, 36, 1, 'Datoga region', '147Km', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'We will have a breakfast at Arusha (lodge).Your guide will come and pick up you at the hotel.we continues to Datoga people,in the road you will enjoy the large plantation farms along side the road. The safaris will took us 3hrs from Arusha to Datoga area. We will stay with our Datoga family and spend time with our host\'s exploring the area and the ', 77, 73, '2022-02-11 15:26:38', '2022-02-11 15:26:38'),
(141, 37, 1, 'Arusha - Dodoma', '4 hr (268.2 km) via A104', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'Welcome to the land of ‘Kolo rock paints’ a world class historical heritage site, an ancient rock art are remarkable not just for their quantity and quality, but for their astonishing time span, - million years ago. By your spare time you will stay with us for the very unique cultural tour, where you will experience traditional and customs of the l', 80, 73, '2022-04-02 18:03:03', '2022-04-02 18:03:03'),
(142, 38, 1, NULL, 'Elevation:1597m/5240ft to 2503m/8212ft Altitude gained: 906m', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'After breakfast depart Moshi about 8:30 a.m drive to Momella gate. Make payment and start the climb with picnic lunch to the first hut called Miriakamba hut. Dinner and overnight – Miriakamba hut (3 ½ hrs).', 66, 59, '2022-04-23 14:40:36', '2022-04-23 14:40:36'),
(143, 38, 2, NULL, 'Elevation: 2503m/8212ft to 3560m/11,680ft Altitude gained: 1057m', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'After breakfast we proceed with a climb to second hut called Saddle. This is too steep part compared to the first part (2 ½). During the afternoon, client can decide to attempt climbing little Meru peak and back. Dinner and overnight – Saddle hut.', 63, 61, '2022-04-23 14:40:36', '2022-04-23 14:40:36'),
(144, 38, 3, NULL, 'Elevation: 3560m/11,680ft to 4566m/14980ft Altitude gained: 1006m Descent to 3560m/11680ft Altitude lost: 1006m', 'Walking Safaris', 'Breakfast,Lunch,Dinner', 'Wake up at middle-night and have a cup of tea before starting attempt big Meru peak. Proceed to summit crossing rocky path and back to Saddle hut for full breakfast. The day will be spent resting. Lunch, dinner and overnight at Saddle hut.', 64, 60, '2022-04-23 14:40:36', '2022-04-23 14:40:36'),
(145, 38, 4, NULL, 'Elevation:3560m/11,680ft to 1597m/5240ft Altitude lost:1963m', 'Walking Safaris', 'Breakfast,Lunch', 'Leave Saddle hut and descend down to Momella gate via first hut (Miriakamba) where you will be transferred to Arusha/Moshi.', 65, 58, '2022-04-23 14:40:36', '2022-04-23 14:40:36'),
(146, 39, 1, 'gg', '43', 'Min-Van', 'Breakfast', '2323', 12, 9, '2023-11-09 06:33:58', '2023-11-09 06:33:58'),
(147, 39, 2, '44', '33', 'Mini-Bus/Min-Van', 'Breakfast', '3434', 5, 13, '2023-11-09 06:33:58', '2023-11-09 06:33:58'),
(148, 40, 1, 'hgg', '20', 'Safari Land Cruiser', 'Breakfast,Lunch,Dinner', 'wawa', 78, 2, '2023-12-05 09:01:28', '2023-12-05 09:01:28'),
(149, 41, 1, 'hgg', '20', 'Safari Land Cruiser', 'Lunch', '22', 18, 24, '2023-12-05 09:19:35', '2023-12-05 09:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward_town` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` double(8,2) NOT NULL DEFAULT 0.00,
  `long` double(8,2) NOT NULL DEFAULT 0.00,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `country`, `region`, `district`, `ward_town`, `lat`, `long`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Arusha National Park', 'Tanzania', 'Arusha', 'Momela', 'Momela', 0.00, 0.00, 1, '2021-12-01 13:06:16', '2021-12-01 13:06:16'),
(5, 'Tarangire National Park', 'Tanzania', 'Arusha', 'Tarangire', 'Tarangire', 0.00, 0.00, 1, '2021-12-01 13:15:05', '2021-12-01 13:15:05'),
(6, 'Lake Manyara national park', 'Tanzania', 'Manyara', 'Mto wa mbu.', 'Mto wa mbu.', 0.00, 0.00, 1, '2021-12-01 13:16:45', '2021-12-01 15:10:43'),
(7, 'Ngorongoro conservation Area.', 'Tanzania', 'Arusha', 'Ngorongoro', 'Ngorongoro', 0.00, 0.00, 1, '2021-12-01 13:18:05', '2021-12-01 13:18:05'),
(8, 'Serengeti national park', 'Tanzania', 'Arusha', 'Serengeti', 'Serengeti', 0.00, 0.00, 1, '2021-12-01 13:19:08', '2021-12-01 13:19:08'),
(9, 'Kilimanjaro national park', 'Tanzania', 'Kilimanjaro', 'Moshi', 'Moshi', 0.00, 0.00, 1, '2021-12-01 13:20:04', '2021-12-01 13:20:04'),
(10, 'Mkomazi national park', 'Tanzania', 'Kilimanjaro', 'Same', 'Same', 0.00, 0.00, 1, '2021-12-01 13:20:51', '2021-12-01 13:20:51'),
(11, 'Saadani national park', 'Tanzania', 'Tanga', 'Pwani', 'Pwani', 0.00, 0.00, 1, '2021-12-01 13:22:54', '2021-12-01 13:22:54'),
(12, 'Rubondo Island national park', 'Tanzania', 'Mwanza', 'Rubondo', 'Rubondo', 0.00, 0.00, 1, '2021-12-01 13:35:17', '2021-12-01 13:35:17'),
(13, 'Saanane Island national park', 'Tanzania', 'Mwanza', 'Rubondo', 'Rubondo', 0.00, 0.00, 1, '2021-12-01 13:36:31', '2021-12-01 13:36:31'),
(14, 'Mikumi national park', 'Tanzania', 'Morogoro', 'Mikumi', 'Mikumi', 0.00, 0.00, 1, '2021-12-01 13:37:56', '2021-12-01 13:37:56'),
(15, 'Selous game reserve (Nyerere nationalpark)', 'Tanzania', 'Mkoa wa pwani', 'Kibiti', 'Mloka', 0.00, 0.00, 1, '2021-12-01 13:40:42', '2021-12-01 13:40:42'),
(16, 'Ruwaha national park', 'Tanzania', 'Iringa', 'Ruwaha', 'Ruwaha', 0.00, 0.00, 1, '2021-12-01 13:45:47', '2021-12-01 13:45:47'),
(17, 'Uldizungwa mountain National Park', 'Tanzania', 'Morogoro', 'Igunga', 'Igunga', 0.00, 0.00, 1, '2021-12-01 13:49:03', '2021-12-01 15:08:52'),
(18, 'Kitulo national park', 'Tanzania', 'Mbeya', 'Njombe', 'Njombe', 0.00, 0.00, 1, '2021-12-01 13:50:08', '2021-12-01 13:50:08'),
(19, 'Katavi national park', 'Tanzania', 'Katavi', 'Katavi', 'Katavi', 0.00, 0.00, 1, '2021-12-01 13:50:55', '2021-12-01 13:50:55'),
(20, 'Gombe national park', 'Tanzania', 'Kigoma', 'Gombe', 'Gombe', 0.00, 0.00, 1, '2021-12-01 13:55:03', '2021-12-01 13:55:03'),
(21, 'Mahale montain national park', 'Tanzania', 'Kigoma', 'Lake Tanganyika.', 'Lake Tanganyika.', 0.00, 0.00, 1, '2021-12-01 13:56:09', '2021-12-01 15:10:15'),
(22, 'Bagamoyo national museum', 'Tanzania', 'Dar es salama', 'Bagamoyo', 'Bagamoyo', 0.00, 0.00, 1, '2021-12-01 14:04:48', '2021-12-08 21:32:04'),
(23, 'Amboni  caves', 'Tanzania', 'Tanga', 'Amboni', 'Amboni', 0.00, 0.00, 1, '2021-12-01 14:06:25', '2021-12-08 21:33:08'),
(24, 'Isimila historic site', 'Tanzania', 'Kigoma', 'Ungwachanya village', 'Ugwachanya village', 52.00, 80.00, 1, '2021-12-01 14:10:10', '2021-12-01 18:47:55'),
(25, 'Kilwa kisiwani', 'Tanzania', 'Lindi', 'Kilwa', 'Kilwa', 0.00, 0.00, 1, '2021-12-01 14:14:25', '2021-12-08 21:32:41'),
(26, 'Kondoa Irangi', 'Tanzania', 'Dodoma', 'Kondoa', 'Kondoa', 0.00, 0.00, 1, '2021-12-01 14:15:24', '2021-12-01 14:15:24'),
(27, 'Kigosi national park', 'Tanzania', 'Kigoma', 'Malagarasi', 'Malagarasi', 0.00, 0.00, 1, '2021-12-01 14:29:31', '2021-12-01 14:29:31'),
(28, 'Burigi-Chato national park.', 'Tanzania', 'Geita', 'Chato', 'Chato', 0.00, 0.00, 1, '2021-12-01 14:31:46', '2021-12-01 14:31:46'),
(29, 'Ibanda-kyerwa national park', 'Tanzania', 'Kagera', 'Ibanda', 'Ibanda', 0.00, 0.00, 1, '2021-12-01 14:34:59', '2021-12-01 14:34:59'),
(30, 'Rumanyika- karagwe national park', 'Tanzania', 'Kagera', 'Karagwe', 'Karagwe', 0.00, 0.00, 1, '2021-12-01 14:41:29', '2021-12-01 14:41:29'),
(31, 'Ugalla river national park', 'Tanzania', 'Kigoma', 'Ugalla river', 'Ugalla river', 0.00, 0.00, 1, '2021-12-01 14:46:31', '2021-12-01 14:46:31'),
(32, 'Zanzibar Island', 'Tanzania', 'Zanzibar', 'Stone Town', 'Stone Town', 0.00, 0.00, 1, '2021-12-06 16:14:52', '2021-12-06 16:14:52'),
(33, 'Mt. Kilimanjaro- lemosho route', 'Tanzania', 'Kilimanjaro', 'Moshi', 'Lemosho', 0.00, 0.00, 1, '2021-12-08 21:17:52', '2021-12-08 21:31:15'),
(34, 'Mt.kilimanjaro -Marangu route', 'Tanzania', 'Kilimanjaro', 'Moshi', 'Marangu', 0.00, 0.00, 1, '2021-12-08 21:20:25', '2021-12-08 21:30:44'),
(35, 'Mt.Kilmanjaro-Machame route', 'Tanzania', 'Kilimanjaro', 'Moshi', 'Machame', 0.00, 0.00, 1, '2021-12-08 21:22:39', '2021-12-08 21:30:03'),
(36, 'Mt.kilimanjaro- Shira route', 'Tanzania', 'Kilimanjaro', 'Moshi', 'Ushira', 0.00, 0.00, 1, '2021-12-08 21:24:52', '2021-12-08 21:24:52'),
(37, 'Mt.kilimanjaro- Umbwe route', 'Tanzania', 'Kilimanjaro', 'Moshi', 'Umbwe', 0.00, 0.00, 1, '2021-12-08 21:26:03', '2021-12-08 21:26:03'),
(38, 'Mt.kilimanjaro- Rongai route', 'Tanzania', 'Kilimanjaro', 'Moshi', 'Moshi', 0.00, 0.00, 1, '2021-12-08 21:27:16', '2021-12-08 21:27:16'),
(39, 'Mt.kilimanjaro- Mweka route', 'Tanzania', 'Kilimanjaro', 'Moshi', 'Mweka', 0.00, 0.00, 1, '2021-12-08 21:28:28', '2021-12-08 21:28:28'),
(40, 'Mt.kilimanjaro- Northern circuit route', 'Tanzania', 'Kilimanjaro', 'Moshi', 'Ushira', 0.00, 0.00, 1, '2021-12-12 20:10:10', '2021-12-12 20:10:10'),
(41, 'Mt. Meru miriakamba  hut 🛖', 'Tanzania', 'Arusha', 'Momela', 'Momela', 0.00, 0.00, 1, '2021-12-16 22:38:48', '2021-12-16 22:38:48'),
(42, 'Mt. Meru saddle huts 🛖', 'Tanzania', 'Arusha', 'Momela', 'Momela', 0.00, 0.00, 1, '2021-12-16 22:41:06', '2021-12-16 22:41:06'),
(43, 'Mt. Meru miriakamba huts 🛖', 'Tanzania', 'Arusha', 'Momela', 'Momela', 0.00, 0.00, 1, '2021-12-16 22:42:37', '2021-12-16 22:42:37'),
(44, 'Mt. Meru ngngongare gate', 'Tanzania', 'Arusha', 'Momela', 'Momela', 0.00, 0.00, 1, '2021-12-16 22:43:39', '2021-12-16 22:43:39'),
(45, 'Mto wa mbu', 'Tanzania', 'Mnyara', 'Mto wa mbu.', 'Mto wa mbu.', 0.00, 0.00, 1, '2021-12-22 17:08:12', '2021-12-22 17:08:12'),
(46, 'Arusha', 'Tanzania', 'Arusha', 'Arusha', 'Arusha region', 0.00, 0.00, 1, '2021-12-22 19:07:46', '2021-12-22 19:07:46'),
(47, 'Mwanza', 'Tanzania', 'Mwanza', 'Mwanza town', 'Mwanza', 0.00, 0.00, 1, '2021-12-27 18:53:32', '2021-12-27 18:53:32'),
(48, 'Tanga', 'Tanzania', 'Tanga town', 'Tanga', 'Amboni', 0.00, 0.00, 1, '2021-12-27 18:54:15', '2021-12-27 18:54:15'),
(49, 'Dar es salama', 'Tanzania', 'Dar es salama', 'Dar es salama city', 'Dar es salama', 0.00, 0.00, 1, '2021-12-27 18:56:14', '2021-12-27 18:56:14'),
(50, 'Mtwara', 'Tanzania', 'Mtwara', 'Mtwara region', 'Mtwara', 0.00, 0.00, 1, '2021-12-27 18:57:05', '2021-12-27 18:57:05'),
(51, 'Lindi', 'Tanzania', 'Lindi', 'Lindi region', 'Lindi', 0.00, 0.00, 1, '2021-12-27 18:58:00', '2021-12-27 18:58:00'),
(52, 'Tabora', 'Tanzania', 'Tabora', 'Tabora', 'Tabora Town', 0.00, 0.00, 1, '2021-12-27 18:58:49', '2021-12-27 18:58:49'),
(53, 'West Kilimanjaro', 'Tanzania', 'Arusha', 'Longido', 'Tinga tinga', 0.00, 0.00, 58, '2022-01-24 16:08:48', '2022-01-25 12:46:04'),
(54, 'Manyara', 'Tanzania', 'Arusha', 'Manyara', 'Eyasi', 0.00, 0.00, 58, '2022-01-24 16:18:59', '2022-01-24 17:00:12'),
(55, 'Lake natron', 'Tanzania', 'Arusha', 'Manyara', 'Engaruka', 0.00, 0.00, 58, '2022-01-24 16:20:38', '2022-01-24 16:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_12_085744_create_accommodations_table', 1),
(5, '2021_05_12_085755_create_destinations_table', 1),
(6, '2021_05_12_085808_create_itineraries_table', 1),
(7, '2021_05_12_085827_create_programs_table', 1),
(8, '2021_05_12_085834_create_locations_table', 1),
(9, '2021_05_12_133520_create_itinerary_days_table', 1),
(10, '2021_05_28_091437_create_attachments_table', 1),
(11, '2021_05_29_105133_create_special_offers_table', 1),
(12, '2021_05_29_105450_create_popular_experiences_table', 1),
(13, '2021_06_02_121541_create_sliders_table', 1),
(14, '2021_07_23_224743_create_tours_table', 1),
(15, '2021_07_24_112830_create_tourcostsummaries_table', 1),
(16, '2021_07_27_071832_create_tour_equiry_forms_table', 1),
(17, '2021_08_02_082940_create_socialmedia_table', 1),
(18, '2021_08_02_101320_create_tour_equery_social_media_table', 1),
(19, '2021_08_02_142061_create_departures_table', 1),
(20, '2021_08_03_070820_create_grouptours_table', 1),
(21, '2021_08_04_080841_create_addons_table', 1),
(22, '2021_08_04_100414_create_buyaddons_table', 1),
(23, '2021_08_05_150306_create_blogs_table', 1),
(24, '2021_08_05_150307_create_posts_table', 1),
(25, '2021_08_05_155212_create_blog_bodies_table', 1),
(26, '2021_08_05_155218_create_post_bodies_table', 1),
(27, '2021_08_07_080355_create_testimonies_table', 1),
(28, '2021_08_11_083656_create_tailor_mades_table', 1),
(29, '2021_08_13_044563_create_invoices_table', 1),
(30, '2021_08_25_073518_create_payments_table', 1),
(31, '2021_09_01_082003_create_contacts_table', 1),
(32, '2021_09_21_065716_create_services_table', 1),
(33, '2021_09_22_104730_create_titles_table', 1),
(34, '2021_09_23_140704_create_widgets_table', 1),
(35, '2021_09_23_145225_create_pages_table', 1),
(36, '2021_09_23_150016_create_page_widgets_table', 1),
(37, '2021_09_27_143316_create_attractions_table', 1),
(38, '2021_09_27_185323_create_quick_links_table', 1),
(39, '2021_10_01_191608_create_inclusives_table', 1),
(40, '2021_10_02_121250_create_accommodation_inclusives_table', 1),
(41, '2021_10_09_040117_create_enquiries_table', 1),
(42, '2021_10_04_195237_create_agents_table', 2),
(43, '2021_07_27_071833_create_tour_equiry_forms_table', 3),
(44, '2021_10_09_040118_create_enquiries_table', 3),
(45, '2021_11_03_141416_create_tour_guides_table', 4),
(46, '2021_11_03_141708_create_partners_table', 4),
(47, '2021_11_03_141709_create_partners_table', 5),
(48, '2021_11_03_141417_create_tour_guides_table', 6),
(49, '2021_11_03_141427_create_tour_guides_table', 7),
(50, '2021_09_21_065717_create_services_table', 8),
(51, '2021_09_21_065727_create_services_table', 9),
(52, '2023_12_17_150938_create_people_percents_table', 10),
(53, '2023_12_18_045514_create_banks_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_descriptions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_no` int(11) DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `meta_descriptions`, `meta_keywords`, `section_no`, `attachment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ut perferendis ipsam', NULL, NULL, NULL, NULL, 1, '2021-11-01 16:30:54', '2021-11-01 16:30:54'),
(2, 'Ut perferendis ipsam', 'Molestias omnis quae', 'Aliquid eum quia ut', 2, NULL, 1, '2021-11-01 16:30:54', '2021-11-01 16:30:54'),
(3, 'Cillum consequatur', NULL, NULL, NULL, NULL, 1, '2021-11-18 12:01:28', '2021-11-18 12:01:28'),
(4, 'Cillum consequatur', 'Nostrud qui ut ut fu', 'Magnam deserunt nihi', 2, 'C:\\xampp\\tmp\\php54F3.tmp', 1, '2021-11-18 12:01:28', '2021-11-18 12:01:28'),
(5, 'Odio tenetur et ipsu', NULL, NULL, NULL, NULL, 1, '2021-11-18 12:17:05', '2021-11-18 12:17:05'),
(6, 'Odio tenetur et ipsu', 'Et similique labore', 'Ut explicabo Rem la', 3, 'C:\\xampp\\tmp\\phpA3DB.tmp', 1, '2021-11-18 12:17:05', '2021-11-18 12:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `page_widgets`
--

CREATE TABLE `page_widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `widget_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer` varchar(450) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commisioner_percent` decimal(8,2) NOT NULL DEFAULT 0.00,
  `commisioner_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hear_about_us` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `amount_paid` decimal(8,2) NOT NULL DEFAULT 0.00,
  `payee_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `customer_id`, `tour_id`, `amount_paid`, `payee_date`, `created_at`, `updated_at`) VALUES
(1, 3, 11, '3000.00', '2021-11-18', '2021-11-16 09:25:20', '2021-11-16 09:25:20'),
(2, 1, 20, '60000.00', '2022-08-25', '2022-08-10 14:19:28', '2022-08-10 14:19:28'),
(3, 4, 28, '4000.00', '2023-12-15', '2023-12-15 04:44:32', '2023-12-15 04:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `people_percents`
--

CREATE TABLE `people_percents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `percent_name` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people_percents`
--

INSERT INTO `people_percents` (`id`, `percent_name`, `percent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Adults', '100.00', 1, '2023-12-17 17:40:26', '2023-12-19 04:12:24'),
(2, 'Teens', '75.00', 1, '2023-12-17 17:43:59', '2023-12-25 14:14:02'),
(3, 'Children', '60.00', 1, '2023-12-17 17:55:39', '2023-12-25 14:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `popular_experiences`
--

CREATE TABLE `popular_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popular_experiences`
--

INSERT INTO `popular_experiences` (`id`, `tour_id`, `descriptions`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '2021-10-16 19:00:39', '2021-10-16 19:00:39'),
(2, '2', NULL, '2021-10-25 02:08:18', '2021-10-25 02:08:18'),
(3, '4', NULL, '2021-11-16 07:23:51', '2021-11-16 07:23:51'),
(4, '11', 'Watching wildlife in Lake Manyara National Park is good all year, but at its best from late June to October, during the Dry season. However, this very scenic park is at its most beautiful dur', '2021-11-16 10:21:59', '2021-12-21 16:47:30'),
(5, '19', NULL, '2021-12-23 02:55:14', '2021-12-23 02:55:14'),
(6, '26', NULL, '2022-04-09 12:56:38', '2022-04-09 12:56:38'),
(7, '28', NULL, '2022-04-09 12:57:23', '2022-04-09 12:57:23'),
(8, '41', NULL, '2022-04-09 12:58:12', '2022-04-09 12:58:12'),
(9, '47', NULL, '2022-05-13 13:02:40', '2022-05-13 13:02:40'),
(10, '30', NULL, '2022-06-25 13:02:59', '2022-06-25 13:02:59'),
(11, '27', NULL, '2022-06-25 13:03:40', '2022-06-25 13:03:40'),
(12, '22', NULL, '2022-08-17 22:04:51', '2022-08-17 22:04:51'),
(13, '29', NULL, '2022-08-23 23:36:19', '2022-08-23 23:36:19'),
(14, '18', 'Time to climb on the roof of Africa.', '2022-08-23 23:38:39', '2022-09-05 14:28:08'),
(15, '40', NULL, '2022-08-23 23:39:47', '2022-08-23 23:39:47'),
(16, '21', 'Kilimanjaro is a pretty tricky climb you know, most of it\'s up until you reach the very very top, and then it tends to slope away rather sharply.', '2022-09-23 21:39:47', '2022-09-23 21:39:47'),
(17, '49', NULL, '2023-02-05 17:29:42', '2023-02-05 17:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Slider', 1, '2021-11-02 02:19:13', '2021-11-02 02:19:13'),
(2, 'fg', 1, '2021-11-18 12:17:32', '2021-11-18 12:17:32'),
(3, 'df', 1, '2021-11-18 12:18:07', '2021-11-18 12:18:07'),
(4, 'Testing Page', 1, '2021-11-21 02:47:28', '2021-11-21 02:47:28'),
(5, 'Quick link', 1, '2021-11-21 03:10:39', '2021-11-21 03:10:39'),
(6, 'Welcome message', 1, '2021-11-22 06:46:48', '2021-11-22 06:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `post_bodies`
--

CREATE TABLE `post_bodies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(450) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduction` varchar(450) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` varchar(450) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vission` varchar(450) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objectives` varchar(450) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_bodies`
--

INSERT INTO `post_bodies` (`id`, `category`, `title`, `body`, `introduction`, `mission`, `vission`, `objectives`, `address`, `phone`, `email`, `website`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Welcome message', 'Corona Virus', 'Welcome to Drongo safaris,Happy National bblb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-10-23 04:03:29', '2021-10-26 06:37:28'),
(5, 'Contact', 'Contacts', NULL, NULL, NULL, NULL, NULL, 'Arusha-Tanzania', '+255 (0) 764 706 227', 'info@drongosafaris.com', 'https://www.drongosafaris.com', 1, '2021-11-22 07:06:30', '2021-12-10 12:05:43'),
(8, 'About us', NULL, NULL, 'Established in 2021 ,Drongosafaris & tours is one of the leading specialist in tour safaris. We remain family owned and independent with a specialist team  dedicated to ensuring your trip runs as smoothly and successfully as possible \r\nWith a focus on customer service at Drongosafaris tour we offer a fantastic range of tips to meet your budget,ambitions,and expectations. \r\nAll of us here in Drongo safaris tours team,both at home and abroad,work t', 'Our mission is to implement and provide the best service to our customers.  ... To provide them with unforgettable transportation for all the time they will be with us in our tourism company, to get reliable services that exceed their expectations. To this end, we aim to earn a good reputation as a company with excellent service in this tourism industry.', 'We will be the better travel agency recognized nationally and internationally for always providing excellent customer service that is social and environmentally responsible and that will enable us to remain competitive in tourism industry', 'The specific objectives of our tourism company include, Managing all the needs of the tourist and providing good customer service.  Add value to the tourism industry.  To provide services to visit various attractions Here in Tanzania at very reasonable prices.', NULL, NULL, NULL, NULL, 59, '2021-11-22 07:12:53', '2023-01-24 16:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(10) UNSIGNED NOT NULL,
  `cost` decimal(10,0) NOT NULL,
  `price` decimal(10,0) UNSIGNED NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_circuit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_highlight` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physical_rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popular_experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `tour_name`, `days`, `cost`, `price`, `currency`, `category`, `type`, `style`, `main`, `tour_code`, `tour_circuit`, `overview`, `tour_highlight`, `physical_rating`, `popular_experience`, `seo`, `user_id`, `created_at`, `updated_at`) VALUES
(11, 'Zanzibar Island', 3, '1000', '1500', 'USD', 'Private', 'Beach Holidays', 'Basic', 'Program', '0072', 'Eastern Circuit', 'Yes, it is safe to travel to Zanzibar Islands. This is one of the safest African destinations, even for solo female travellers. The Zanzibar Archipelago is part of Tanzania, which is one of t', 'Zanzibar Island is Africa’s tropical paradise with the world’s most beautiful beaches. It offers laid-back beach life, but also an diversity of activities and a colourful culture and history.', 'Easy', 'Yes', 'Drongo safaris-Zanzibar beach', 1, '2021-11-16 08:44:11', '2023-12-05 09:13:02'),
(18, 'Mt.kilimanjaro Machame Route', 7, '1800', '2100', 'USD', 'Group', 'Hiking & Trekking', 'Basic', 'Program', '5077', 'Northern Circuit', 'Time to climb on the roof of Africa.', 'Time to climb on the roof of Africa.', 'Average', 'Yes', '@drongosafaris', 59, '2021-12-14 14:38:55', '2022-09-05 14:25:10'),
(19, 'Mt.kilimanjaro lemosho route', 8, '2100', '2700', 'USD', 'Private', 'Hiking & Trekking', 'Basic', 'Program', '2373', 'Northern Circuit', 'Lemosho starts in lush, fertile rainforest. It is the first ecological zone you encounter on Kilimanjaro (we will trek through four).', 'The Lemosho Route is considered by many to be one of the prettiest route up Mount Kilimanjaro and our 8 day itinerary is perfect way to experience.', 'Demanding', 'Yes', 'Drongosafaris - Mt.kilimanjaro Lemosho route', 59, '2021-12-14 15:15:10', '2023-08-24 14:29:23'),
(20, 'Mt.kilimanjaro Umbwe route', 6, '2000', '2500', 'USD', 'Private', 'Hiking & Trekking', 'Basic', 'Program', '9912', 'Northern Circuit', 'Umbwe route is one of the shortest routes to the southern glaciers and western breach and it the most hardest and challenging route on Mountain kilimanjaro.', 'We really love the Umbwe Route, and are both surprised – and delighted – that others don’t feel similarly. Indeed, many agencies, out of sheer ignorance, don’t offer treks on this trail at al', 'Challenging', 'Yes', 'Drongosafaris - Mountain kilimanjaro Umbwe route', 1, '2021-12-14 15:42:33', '2021-12-14 15:42:33'),
(21, 'Mt.kilimanjaro Marangu route', 6, '2000', '2500', 'USD', 'Private', 'Hiking & Trekking', 'Basic', 'Program', '7970', 'Northern Circuit', 'The Marangu Route is the oldest on Kilimanjaro and is also one of the most popular – mainly because it is the only route on the mountain that has huts provided for hikers. There are 60 bunk b', 'The Marangu Route is also the only route that uses the same path going up and coming back down. That means that while the trail is a scenic one, trekkers will experience the same sites going ', 'Demanding', 'Yes', 'Drongosafaris - Mt.kilimanjaro Marangu route', 1, '2021-12-14 15:57:51', '2021-12-14 15:57:51'),
(22, 'Mt.kilimanjaro Rongai route', 7, '2100', '2700', 'USD', 'Private', 'Hiking & Trekking', 'Basic', 'Program', '8539', 'Northern Circuit', 'The Rongai route on Mount Kilimanjaro is a seven day camping route; it has the attraction of being a lower traffic and easier route compared to the southern slopes for climbing Kilimanjaro. I', 'The Rongai route considered to be one of the easier route up kilimanjaro the climb is both gradually and sleady.', 'Average', 'Yes', 'Drongosafaris - Mt.kilimanjaro Rongai route', 1, '2021-12-14 16:21:15', '2021-12-14 16:21:15'),
(23, 'Mt.kilimanjaro shira route', 8, '2100', '2700', 'USD', 'Private', 'Hiking & Trekking', 'Basic', 'Program', '8827', 'Northern Circuit', 'The route approaches Mount Kilimanjaro from the west, beginning with a long drive from Moshi to Shira Ridge.', 'Shira route is another trail that approaches Mount Kilimanjaro in the west just a few kilometers a way from the Lemosho route.', 'Average', 'Yes', 'Drongosafaris - Mt.kilimanjaro shira route', 59, '2021-12-14 16:44:05', '2023-02-05 17:11:21'),
(24, 'Mt.kilimanjaro Northern circuit route', 7, '2100', '2700', 'USD', 'Private', 'Hiking & Trekking', 'Basic', 'Program', '8257', 'Northern Circuit', 'The Northern Circuit is the newest and longest route on Mount Kilimanjaro.\r\n\r\nIt begins in the West at the Londorossi Gate and follows the same path as the Lemosho Route for the first two day.', 'The northern circuit route is newest and longest route on mountain. It begins in the west at the londorossi gate.', 'Average', 'Yes', 'Drongosafaris-Mt.kilimanjaro kilimanjaro northern circuit route', 59, '2021-12-14 17:01:54', '2023-02-05 17:12:29'),
(25, 'Mt. Meru ngogongare route', 4, '900', '1300', 'USD', 'Private', 'Hiking & Trekking', 'Basic', 'Addon', '7887', 'Northern Circuit', 'The most important thing Meru prepares you for is altitude acclimatisation. Do not underestimate Meru as it is a challenging climb! It is certainly high enough to bring on altitude sickness.', 'The mountain is the centrepiece of Arusha National Park and its fertile slopes rise above the surrounding savanna and support a forest that hosts diverse wildlife, including nearly 400 specie', 'Average', 'No', 'Ngongongare-Drongosafaris.com', 59, '2021-12-17 14:30:20', '2022-04-23 14:55:41'),
(26, 'Tarangire national park', 1, '300', '500', 'USD', 'Private', 'Day Tours', 'Basic', 'Program', '4266', 'Northern Circuit', 'Huge herds of elephants\r\nIt is the 6th largest National Park in Tanzania and offers some unrivalled elephant sightings - indeed, it is estimated that the Park is home to the largest elephant', 'Alongside the acacia, no plant is quite so synonymous with Africa than the noble baobab. Otherwise known as the Tree of Life, the baobab gets its distinct shape from the fact it can store any', 'Average', 'Yes', 'Drongosafaris.com', 1, '2021-12-20 20:30:27', '2022-01-19 18:33:44'),
(27, 'Manyara national park', 1, '300', '500', 'USD', 'Private', 'Day Tours', 'Basic', 'Program', '7268', 'Northern Circuit', 'Lake Manyara National Park is a protected area in Tanzania\'s Arusha and Manyara Regions, situated between Lake Manyara and the Great Rift Valley.', 'Lake Manyara is most famous for its tree-climbing lions and thousands of flamingos, but it also hosts animals such as elephants, wildebeests, giraffes, buffalo, water bucks, impala and warthog.', 'Average', 'Yes', 'Manyara national park-drongosafaris.com', 59, '2021-12-21 14:02:55', '2023-08-01 13:15:43'),
(28, 'Tarangire & Manyara National Parks', 3, '1013', '1500', 'USD', 'Private', 'Wildlife Safaris', 'Confort', 'Program', '9955', 'Northern Circuit', 'Manyara National Park acts as the home of diversity species of animals, birds and trees,the park located 124KM north of Tarangire National Park,Manyara national Park derived its name from Lake Manyara which acts as core life to living organism in the park,Watching wildlife in Manyara National Park is good all year, but at its best from late June to October, during the Dry season. However, this very scenic park.\r\n\r\n<p>Tarangire National Park, the park is known because of high density of elephants and baobab trees. in East Africa,the Park gets its name from river Tarangire which takes water from Irangi hills crosses the park flows into lake burunge,Tarangire word is a local name derived from local name \"Ngire\"(Warthongs).\r\nHistory said there were many warthongs(Ngire) around river banks  until local people call it \"tarangire=tara(mto/river) + ngire(ngire/warthong)\" it means the \"river of warthongs\".</p>', 'Manyara National Park acts as the home of diversity species of animals, birds and trees,the park located 124KM north of Tarangire National Park,Manyara national Park derived its name from Lake Manyara which acts as core life to living organism in the park,Watching wildlife in Manyara National Park is good all year, but at its best from late June to October, during the Dry season. However, this very scenic park.\r\n\r\n<p>Tarangire National Park, the park is known because of high density of elephants and baobab trees. in East Africa,the Park gets its name from river Tarangire which takes water from Irangi hills crosses the park flows into lake burunge,Tarangire word is a local name derived from local name \"Ngire\"(Warthongs).\r\nHistory said there were many warthongs(Ngire) around river banks  until local people call it \"tarangire=tara(mto/river) + ngire(ngire/warthong)\" it means the \"river of warthongs\".</p>', 'Average', 'Yes', 'Drongosafaris.com', 1, '2021-12-21 14:38:41', '2022-01-09 14:53:11'),
(29, 'Tarangire national park, Manyara national park and  ngorongoro conservation Area', 5, '1910', '2500', 'USD', 'Private', 'Wildlife Safaris', 'Confort', 'Program', '4741', 'Northern Circuit', 'Ngorongoro Conservation Area is found 179KM north west from Arusha city, the conservation marked as one of the UNESCO heritage site because of many uniqueness one of them is only place where found the remains of skull of Homo habilis in the place called Olduvai gorge, the fossils found in 1952 by Dr. Louis leaky and his wife, Ngorongoro is the Caldera type where you find people (Masai tribe) living together with animals, also you can see big 5 animals easily.\r\nTarangire National Park, the park is known because of high density of elephants and baobab trees. in East Africa,the Park gets its name from river Tarangire which takes water from Irangi hills crosses the park flows into lake burunge,Tarangire word is a local name derived from local name \"Ngire\"(Warthongs). History said there were many warthongs(Ngire) around river banks until local people call it \"tarangire=tara(mto/river) + ngire(ngire/warthong)\" it means the \"river of warthongs\"', 'Ngorongoro Conservation Area is found 179KM north west from Arusha city, the conservation marked as one of the UNESCO heritage site because of many uniqueness one of them is only place where found the remains of skull of Homo habilis in the place called Olduvai gorge, the fossils found in 1952 by Dr. Louis leaky and his wife, Ngorongoro is the Caldera type where you find people (Masai tribe) living together with animals, also you can see big 5 animals easily.\r\nTarangire National Park, the park is known because of high density of elephants and baobab trees. in East Africa,the Park gets its name from river Tarangire which takes water from Irangi hills crosses the park flows into lake burunge,Tarangire word is a local name derived from local name \"Ngire\"(Warthongs). History said there were many warthongs(Ngire) around river banks until local people call it \"tarangire=tara(mto/river) + ngire(ngire/warthong)\" it means the \"river of warthongs\"', 'Average', 'Yes', 'Drongo safaris', 1, '2021-12-22 17:28:31', '2022-01-04 19:57:22'),
(30, 'Serengeti and Manyara national parks, Ngorongoro conservation Area', 7, '3472', '4000', 'USD', 'Private', 'Wildlife Safaris', 'Confort', 'Program', '8745', 'Northern Circuit', '7 days Tanzania safari offers a wildlife tour to Lake Manyara National Park, Serengeti National Park, the Ngorongoro Crater, and Tarangire National Park.', '7-day safari in Tanzania is customized especially for tourists who would want to have a great wildebeest migration experience in the Serengeti National Park and visit other parks.', 'Average', 'Yes', 'Drongosafaris.com', 59, '2021-12-23 13:48:22', '2023-08-01 13:17:34'),
(32, 'Bagamoyo historical site', 1, '300', '1200', 'USD', 'Private', 'Historical Site', 'Confort', 'Program', '6405', 'Eastern Circuit', 'Around the 17th century this area began growing in prosperity and by the 18th century it was an important stop in the caravan trade, acquiring the name Bagamoyo. It became the most important', 'Bagamoyo is an incredibly historic town. ... In 1868, the catholic \"Fathers of the Holy Ghost\" established a mission in Bagamoyo, building the first church in East Africa (and I am sure we ha', 'Average', 'Yes', 'Bagamoyo historic site- Drongosafaris.com', 1, '2021-12-28 14:25:56', '2021-12-29 02:31:46'),
(33, 'Isimila historical site', 1, '350', '700', 'USD', 'Private', 'Historical Site', 'Confort', 'Program', '7757', 'Western Circuit', 'Here, in the late 1950s, amid a dramatic landscape of eroded sandstone pillars, archaeologists unearthed one of the most significant Stone Age finds ever identified. Tools found at the site –', 'Isimila is a historical site located almost 21 kilometers (km) southeast of Iringa town. It has a unique artefact in both primary and secondary contexts consisting of thousands of hand axes -', 'Average', 'Yes', 'Drongosafaris.com', 1, '2021-12-28 14:51:05', '2022-04-01 11:23:12'),
(34, 'Amboni caves historical site', 1, '300', '500', 'USD', 'Private', 'Historical Site', 'Confort', 'Program', '7105', 'Eastern Circuit', 'Located 8 km north of the Tanga city, Amboni caves are limestone caves in East Africa. The caves were believed to be built 150 million years ago. The cave is a fascinating historical site and', 'The caves have several mythical and awe-inspiring stories. The locals believe that the caves hold supernatural formations where supernatural powers commonly known as “Mizimu” are believed to', 'Average', 'Yes', 'Drongosafaris.com', 1, '2021-12-28 15:14:13', '2021-12-28 15:15:43'),
(35, 'Kilwa kisiwani', 1, '500', '900', 'USD', 'Private', 'Historical Site', 'Confort', 'Program', '1532', 'Southern Circuit', 'The great mosque of kilwa kisiwani is the oldest standing mosque on the East African coast and with its sixteen domed and vaulted boy\'s has a unique plan. It\'s true great dome dating from the', 'Kilwa Kisiwani is an island, national historic site, and hamlet community located in the township of Kilwa Masoko, the district seat of Kilwa District in the Tanzanian region of Lindi Region ', 'Average', 'Yes', 'Drongosafaris.com', 1, '2021-12-28 16:57:42', '2021-12-28 16:58:34'),
(36, 'Kondoa Irangi historical site', 1, '500', '700', 'USD', 'Private', 'Historical Site', 'Confort', 'Addon', '1770', 'Central Circuit', 'The Kondoa Irangi Rock Paintings are a series of ancient paintings on rockshelter walls in central Tanzania. The Kondoa region was declared a UNESCO World Heritage site in 2006 because of its', 'Cave paintings in the area was first reported in 1908 and a variety of excavations were carried out during the 20th century. The rock art area at Kondoa has never been comprehensively surveye', 'Average', 'No', 'Drongosafaris.com', 59, '2021-12-28 17:13:26', '2022-04-02 17:50:25'),
(37, 'Olduvai/Oldupai gorge', 1, '500', '800', 'USD', 'Private', 'Historical Site', 'Confort', 'Addon', '2837', 'Northern Circuit', 'The Olduvai Gorge or Oldupai Gorge in Tanzania is one of the most important paleoanthropological localities in the world; the many sites exposed by the gorge have proven invaluable in further', 'Olduvai Gorge is a site in Tanzania that holds the earliest evidence of the existence of human ancestors.', 'Average', 'Yes', 'Drongosafaris.com', 59, '2021-12-28 18:00:36', '2022-04-18 17:33:59'),
(39, 'Mkomazi national park', 3, '1000', '1500', 'USD', 'Private', 'Wildlife Safaris', 'Basic', 'Program', '2032', 'Northern Circuit', 'Mkomazi National Park is one of the Tanzania National Park found in Western part of Tanzania, in Kilimanjaro and Tanga regions. The park is famous because has black rhinos and wild dogs which are in endangered. Also park has other animals such as giraffe, elephants, buffalo etc. The Park is visited mostly because has more than 450 different species of bird. You will enjoy when you make the safari to this park.', 'Mkomazi National Park is one of the Tanzania National Park found in Western part of Tanzania, in Kilimanjaro and Tanga regions. The park is famous because has black rhinos and wild dogs which are in endangered. Also park has other animals such as giraffe, elephants, buffalo etc. The Park is visited mostly because has more than 450 different species of bird. You will enjoy when you make the safari to this park.', 'Average', 'No', 'Drongosafaris.com', 1, '2022-01-19 12:57:48', '2022-01-20 12:44:06'),
(40, 'Saadani national park', 3, '1000', '1500', 'USD', 'Private', 'Wildlife Safaris', 'Confort', 'Program', '8036', NULL, 'Saadan National Park is the only wildlife in Eastern Africa which an ocean beachfront. Established in 2005, it extends soe 1,100 sqr km. The name Saadani has a close link to the settlement in the area during the 19 century. The name of a fishing village that originally known as utondwe which changed to Saadani.', 'Saadan National Park is the only wildlife in Eastern Africa which an ocean beachfront. Established in 2005, it extends soe 1,100 sqr km. The name Saadani has a close link to the settlement in the area during the 19 century. The name of a fishing village that originally known as utondwe which changed to Saadani.', 'Average', 'No', 'Drongosafaris.com', 1, '2022-01-19 17:01:13', '2022-01-19 17:01:13'),
(41, 'Hadzabe Culture', 1, '300', '500', 'USD', 'Private', 'Cultural Tour', 'Basic', 'Addon', '2139', 'Northern Circuit', 'The Hadza people are a modern Hunters-gather people living in northern Tanzania.ThebHadza remain an important study focus for anthropologists, as they represent a modern link to ways of human existence and survivals largely abandoned by most of humanity.They create temporary shelter\'s of dried grass and branches, and they own few possessions\r\nThe Hadza are egalitarian, meaning there are no real status differences between individuals. While the elderly receive slightly more respect, within groups of age and sex all individuals are equal, and compared to strictly stratified societies, women are considered fairly equal.', 'The Hadza people are a modern Hunters-gather people living in northern Tanzania.The Hadza remain an important study focus for anthropologists, as they represent a modern link to ways of human existence and survivals largely abandoned by most of humanity.They create temporary shelter\'s of dried grass and branches, and they own few possessions\r\nThe Hadza are egalitarian, meaning there are no real status differences between individuals. While the elderly receive slightly more respect, within groups of age and sex all individuals are equal, and compared to strictly stratified societies, women are considered fairly equal.', 'Average', 'No', 'Cultural tour-Drongosafaris.com', 58, '2022-01-24 15:08:29', '2022-01-26 18:15:38'),
(42, 'Maasai Culture', 1, '300', '500', 'USD', 'Private', 'Cultural Tour', 'Basic', 'Program', '6102', 'Northern Circuit', 'The Hadza people are a modern Hunters-gather people living in northern Tanzania.ThebHadza remain an important study focus for anthropologists, as they represent a modern link to ways of human existence and survivals largely abandoned by most of humanity.They create temporary shelter\'s of dried grass and branches, and they own few possessions\r\nLanguage: The Hadza speak unique language known as Hadzane, which incorporates clicking and popping as well as more familiar sounds, According to their own history, which preserve through oral traditional.', 'The Hadza people are a modern Hunters-gather people living in northern Tanzania.ThebHadza remain an important study focus for anthropologists, as they represent a modern link to ways of human existence and survivals largely abandoned by most of humanity.They create temporary shelter\'s of dried grass and branches, and they own few possessions\r\nLanguage: The Hadza speak unique language known as Hadzane, which incorporates clicking and popping as well as more familiar sounds, According to their own history, which preserve through oral traditional.', 'Average', 'No', 'Cultural tour-drongosafari.com', 58, '2022-01-24 17:54:47', '2022-01-25 17:23:30'),
(43, 'Selous game reserve (Nyerere nationalpark)', 3, '1000', '1800', 'USD', 'Private', 'Wildlife Safaris', 'Confort', 'Program', '6609', 'Southern Circuit', 'The Selous Game Reserve is Africa\'s largest protected game reserve, spanning 54,600 square kilometres and consisting of a vast wilderness of forests, grassy plains, mountains, and open woodlands.', 'The Selous Game Reserve is Africa\'s largest protected game reserve, spanning 54,600 square kilometres and consisting of a vast wilderness of forests, grassy plains, mountains, and open woodlands.', 'Average', 'No', 'Drongosafaris.com', 1, '2022-01-26 12:17:58', '2022-01-26 12:17:58'),
(44, 'Mikumi national park', 3, '900', '1500', 'USD', 'Private', 'Wildlife Safaris', 'Confort', 'Program', '5261', 'Southern Circuit', 'Mikumi is one of the most reliable places in Tanzania for sightings of the eland, the world\'s largest antelope. The equally impressive greater kudu and sable antelope can be found in the miombo woodland-covered foothills of the mountains that rise from the park\'s borders. The Lichtenstein\'s hartebeest is one of the more unusual antelopes found here.', 'Mikumi is one of the most reliable places in Tanzania for sightings of the eland, the world\'s largest antelope. The equally impressive greater kudu and sable antelope can be found in the miombo woodland-covered foothills of the mountains that rise from the park\'s borders. The Lichtenstein\'s hartebeest is one of the more unusual antelopes found here.', 'Average', 'No', 'Drongosafaris.com', 1, '2022-01-26 12:25:31', '2022-01-26 12:25:31'),
(45, 'Kitulo national park', 3, '1000', '1500', 'USD', 'Private', 'Wildlife Safaris', 'Confort', 'Program', '4311', 'Southern Circuit', 'The Kitulo National Park, also known as the “Garden of God”, is one of the leading nature reserves in Africa and consists of mountain meadows and forests on the Kitulo Plateau in the southern highlands of Tanzania. The plateau, known by botanists as the “Serengeti of Flowers”, is home to one of the largest flower deposits in the world', 'The Kitulo National Park, also known as the “Garden of God”, is one of the leading nature reserves in Africa and consists of mountain meadows and forests on the Kitulo Plateau in the southern highlands of Tanzania. The plateau, known by botanists as the “Serengeti of Flowers”, is home to one of the largest flower deposits in the world', 'Average', 'No', 'Drongosafaris.com', 1, '2022-01-26 12:31:25', '2022-01-26 12:31:25'),
(46, 'Datoga', 1, '300', '500', 'USD', 'Group', 'Cultural Tour', 'Basic', 'Program', '9289', 'Northern Circuit', 'Highlights\r\nExperience the authentic African\r\n indigenous cultures as their guest, not a tourist\r\n\r\nImmerse yourself in rich traditions and unique lifestyles\r\n\r\nExplore the extraordinary African nature and view wildlife in the Ngorongoro Crater and Lake Manyara National Park\r\n\r\nDine under the African stars every night in breathtaking nature\r\n\r\nSleeping in a tent in the African bush allows you to enjoy nature in an exceptional  way ', 'Highlights\r\nExperience the authentic African\r\n indigenous cultures as their guest, not a tourist\r\n\r\nImmerse yourself in rich traditions and unique lifestyles\r\n\r\nExplore the extraordinary African nature and view wildlife in the Ngorongoro Crater and Lake Manyara National Park\r\n\r\nDine under the African stars every night in breathtaking nature\r\n\r\nSleeping in a tent in the African bush allows you to enjoy nature in an exceptional  way ', 'Average', 'No', 'Drongosafaris.com', 58, '2022-01-26 17:42:56', '2022-02-11 14:33:25'),
(47, 'Safaris', 3, '900', '1500', 'USD', 'Private', 'Wildlife Safaris', 'Basic', 'Program', '4786', NULL, 'Northern Tanzania is home to some of East Africa\'s most famous parks. The main parks in the north are the Serengeti Game Reserve, the Ngorongoro Conservation Area, Lake Manyara National Park and Tarangire National Park.', 'Northern Tanzania is home to some of East Africa\'s most famous parks. The main parks in the north are the Serengeti Game Reserve, the Ngorongoro Conservation Area, Lake Manyara National Park and Tarangire National Park.', 'Average', 'Yes', 'Drongosafaris', 59, '2022-03-25 19:37:29', '2022-03-25 19:37:29'),
(48, 'National Park safaris', 5, '2000', '2300', 'USD', 'Group', 'Wildlife Safaris', 'Confort', 'Program', '4808', 'Northern Circuit', NULL, NULL, 'Average', 'Yes', 'Drongosafaris', 59, '2022-04-12 15:34:39', '2023-02-15 15:01:12'),
(49, 'Mountain climbing', 7, '2300', '2700', 'USD', 'Group', 'Hiking & Trekking', 'Basic', 'Program', '6451', 'Northern Circuit', 'Reach for the summit.The best view comes after the hardest climb. ', 'Reach for the summit. The best view came after the hardest climb.', 'Average', 'No', 'Drongosafaris.com', 59, '2023-02-05 17:25:09', '2023-02-05 17:25:09'),
(50, 'Olasity-Burka', 1, '100', '100', 'USD', 'Private', 'Wildlife Safaris', 'Basic', 'Addon', '9469', 'Northern Circuit', 'Addon', 'Addon', 'Easy', 'No', 'Palatial testing', 1, '2023-12-05 05:51:20', '2023-12-05 05:51:20'),
(51, 'Olasity-Burka2', 1, '20', '400', 'USD', 'Group', 'Wildlife Safaris', 'Basic', 'Program', '1680', 'Northern Circuit', '44', '434', 'Demanding', 'No', '434', 1, '2023-12-05 09:07:39', '2023-12-05 09:07:39'),
(52, 'jjk', 1, '6', '66', 'USD', 'Private', 'Beach Holidays', 'Confort', 'Program', '3382', 'Northern Circuit', 'tt', 'ty', 'Average', 'No', NULL, 1, '2023-12-05 09:14:13', '2023-12-05 09:14:13'),
(53, 'kll', 1, '2', '2', 'USD', 'Private', 'Wildlife Safaris', 'Basic', 'Addon', '2027', 'Northern Circuit', 'testing', NULL, 'Easy', 'No', 'gg', 1, '2023-12-05 09:15:57', '2023-12-05 09:19:19'),
(54, 'tour t56', 1, '22', '2222', 'USD', 'Private', 'Wildlife Safaris', 'Confort', NULL, '4896', 'Southern Circuit', 'fff', 'tt', 'Easy', 'No', NULL, 1, '2023-12-05 09:23:48', '2023-12-05 09:23:48'),
(55, 'jjk hh', 1, '22', '223', 'USD', 'Private', 'Combined Tours', 'Confort', NULL, '2538', 'Southern Circuit', 'yy', 'yty', 'Average', 'No', NULL, 1, '2023-12-05 09:35:21', '2023-12-05 09:35:21'),
(56, 'hh nn', 1, '6', '66', 'USD', 'Private', 'Combined Tours', 'Confort', 'Addon', '5464', 'Southern Circuit', 'wzrere', NULL, 'Average', 'No', NULL, 1, '2023-12-05 09:37:18', '2023-12-05 09:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `quick_links`
--

CREATE TABLE `quick_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_type` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quick_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quick_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quick_links`
--

INSERT INTO `quick_links` (`id`, `page_type`, `quick_title`, `quick_description`, `url`, `slider`, `attachment`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(17, 'Slider', 'Mt.kilimanjaro', 'The Mountain shown at the back is the Mt. Kilimnjaro, People call it the roof of Africa because is the tallest mountain(5895M) in Africa also is the tallest outstanding volcanic mountain in the world.\r\nThe Mountain is found in Tanzania in the Region called Kilimanjaro,This region has called after Mt.Kilimanjoro.\r\nThe word Kilimanjaro is derived from Chagga native word “Kilema Kyaro” means the God mountain,Note that Chagga is the first tribe to make permanent settlement around the mountain even though some utensils and other remaining found around the mountain dating 1000BC, these people were not chaggas.Hans Meyer is credited with being the first European to reach the summit of Mount Kilimanjaro in 1889.\r\nThe photo of Elephant herd was taken from Kilimanjaro National Park.', '#', 'No', 'download_1673264186.jpeg', NULL, 1, '2021-12-20 15:40:37', '2023-11-10 04:20:09'),
(18, 'Slider', 'Tarangire national park', 'The Elephant is the biggest animal on the land in the world. this photo was taken from Tarangire National Park, the park is known because of high density of elephants,baobab and acacia trees in East Africa,The Park gets its name from river Tarangire which takes water from Irangi hills crosses the park flows into lake burunge,Tarangire word is a local name derived from local name \"Ngire\"(Warthongs). History said there were many warthongs(Ngire) around river banks until native people call it \"tarangire=tara(mto/river) + ngire(ngire/warthong)\" it means the \"river of warthongs\"', '#', 'No', 'download_1673263618.jpeg', NULL, 1, '2021-12-20 15:49:30', '2023-01-15 04:10:26'),
(19, 'Slider', 'Serengeti national park', 'It is best known for its huge herds of plains animals (especially gnu [wildebeests], gazelles, and zebras), and it is the only place in Africa where vast land-animal migrations still take place. The park, an international tourist attraction, was added to the UNESCO World Heritage List in 1989.', '#', 'Yes', 'serengeti_1699600975.jpg', NULL, 1, '2021-12-20 16:04:49', '2023-11-10 04:22:55'),
(20, 'Slider', 'Arusha national park', 'The most populous member of the big five is buffalo, which you can spot roaming around the swamps in the crater in large herds.\r\n\r\nThe highlight of Arusha NP is the abundance of some primates that you wouldn’t see in the other Tanzanian parks.', '#', 'Yes', '98_1650398115.jpg', NULL, 59, '2021-12-20 16:27:17', '2022-04-19 23:55:15'),
(21, 'Slider', 'Ngorongoro conservation Area', 'The Ngorongoro Crater is one of the world’s natural wonders. It is a very special place to visit. It covers quite a lot of land, more or less 8300 km2, but only 230 km2 or 3% from total surface was declared a World Heritage in 1978. Ngorongoro Conservation Area is very divers protected area where you can find from breathtaking outlooks, important archeological sites, awesome mountains, forests, huge grassland plains, extinct volcanoes.', '#', 'Yes', 'Screenshot_20220216-202917_Google_1645033291.jpg', NULL, 59, '2021-12-20 16:34:08', '2022-02-16 22:41:31'),
(22, 'Slider', 'Mkomazi national park', 'The Mkomazi National Park is a spectacular wilderness. Within sight to the northwest is Mount Kilimanjaro, Africa’s highest summit. To the south, the Pare and Usambara Mountains form a dramatic backdrop and, to the north, Kenya’s vast Tsavo National Park shares a border with Mkomazi, making common ground for migratory herds of elephant, oryx and zebra during the wet season.', '#', 'Yes', 'oryx-mkomazi-national-park_1650398624.jpg', NULL, 59, '2021-12-20 17:33:48', '2022-04-20 00:03:44'),
(25, 'Slider', 'Covid 19', 'If you’ve been fully vaccinated against COVID-19, you’ve taken the first step toward protecting yourself and your family and returning to many of the activities you did before the pandemic.\r\nTo maximize protection from the virus that causes COVID-19 and prevent possibly spreading it to others, wear a mask indoors in public if you are in an area of substantial or high transmission.', '#', 'Yes', 'Screenshot_20211220-161531_Google_1640006614.jpg', NULL, 1, '2021-12-20 18:23:34', '2021-12-20 18:23:34'),
(26, 'Slider', 'Ruaha national park', 'Ruaha is now Tanzania\'s second largest national park (after Nyerere NP) and offers excellent wildlife viewing. It is particularly good for spotting predators, including very large prides of lion and the endangered wild dog. Elephants and a variety of antelope species are another big draw to the park. It also has outstanding wilderness appeal, with limited exclusive, luxury camps available.', '#', 'Yes', 'image_e012709c-c656-4e66-a60b-776601bb3cd020220216_165051_1645030854.jpg', NULL, 59, '2021-12-20 18:44:47', '2022-02-16 22:00:55'),
(27, 'Slider', 'Zanzibar Island', 'Zanzibar Island is known as Africa\'s tropical paradise, offering the world\'s most beautiful beaches. ... These islands are also called the Spice Islands because of its rich history in spice trade and many spice plantations.', '#', 'Yes', 'image_2e98c725-f543-405f-9f45-14e1311886e320211116_134004_1650399189.jpg', NULL, 59, '2021-12-23 16:44:57', '2023-08-13 23:46:01'),
(29, 'Quick link', 'Covid-19', 'As we understand the covid-19 is one of the pandemic decease which affects the human health all in the World, As Drongo company we comply with the international health standards to make sure our customers are  safe,We remind them and make sure our customers adhere the health standards such as Mask wearing,Wash hands,using sanitizers and keeping social distance', '#', 'Yes', 'Screenshot_20211220-161531_Google_1640359069.jpg', NULL, 1, '2021-12-24 20:17:49', '2023-03-08 19:31:48'),
(30, 'Slider', 'Kitulo national park', 'The Kitulo National Park, also known as the “Garden of God”, is one of the leading nature reserves in Africa and consists of mountain meadows and forests on the Kitulo Plateau in the southern highlands of Tanzania. The plateau, known by botanists as the “Serengeti of Flowers”, is home to one of the largest flower deposits in the world', '#', 'Yes', 'Screenshot_20220219-160340_Google_1645276458.jpg', NULL, 59, '2022-01-26 12:36:30', '2022-02-19 18:14:18'),
(31, 'Slider', 'Manyara national park', 'This giraffe photo was taken from Manyara Nationa Park, the giraffe is the tallest animal in the world.Manyara National Park is one of the National Park found in Northern part of Tanzania situated between Lake Manyara and Great Rift Valley, The Park acts as the home of diversity species of animals, birds and trees and is located 126KM west of Arusha tourist city.The Park is home of Elephants,Zebra,Girafffe,wildebeest,Gazelle,lions,troops of baboon,python,Birds like (stocks,gees,shoesbirds).Trees like acacia, baubau trees etc. Some of animals migrate from Tarangire to Manyara and back to Tarangire. Manyara National Park called by that name because of the existence of Lake Manyara which served as the core life of the Park. Uniqueness: Watching wildlife in Manyara', '#', 'Yes', 'istockphoto-164497407-612x612_1650397588.jpg', NULL, 59, '2022-02-16 23:09:25', '2022-04-19 23:46:28'),
(32, 'Quick link', 'Travel with us.', 'If there were one more thing I could do, it would be to go on safari once again.', '#', 'Yes', 'FB_IMG_1539937785065_1674562643.jpg', NULL, 1, '2023-01-24 17:17:23', '2023-11-10 04:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_unique` int(11) DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `id_unique`, `category`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 4, 'What We Offer', 'Drongosafaris', 'With deep roots in Tanzania, we offer unique, unique opportunities to engage in wildlife conservation efforts and immerse ourselves in a wide variety of unfamiliar cultures.', 59, '2022-02-01 15:33:09', '2022-02-01 15:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(850) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_id` int(11) NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `tour_id`, `attachment`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Optio id placeat e', 'Sint omnis tenetur h', 2, 'th1_1635027091.jpg', 1, '2021-10-19 17:27:47', '2021-11-01 06:47:48'),
(8, 'Serengeti national park', 'Every summer, in relentless pursuit of new grass, wildebeests cross the watery border to Kenya, before being lured back by rains between October and November and heading hundreds of miles sou', 13, 'crossing-1080x540_1639996116.jpeg', 1, '2021-12-20 15:28:36', '2021-12-20 15:28:36'),
(13, 'Saadani national park', 'The park is home to about 30 species of large mammals including elephant, lion & buffalo. In fact, one unexpected discovery over the years are the huge herds of elephant that move together. The park might have lower numbers in total with fewer herds but greater numbers per herd making an elephant sighting here spectacular.\r\n\r\nAs well as healthy lion prides and large elephant herds, there are decent numbers of buffalo, giraffe, zebra, waterbuck as well as smaller antelope such as red duike and bush buck. A boat safari here is something extra to make a visit to this park well worth it and never fails to please. Enjoy your picnic lunch amongst fantastic hippo pods and crocs lounging on the banks of the Wami river.', 40, 'SADAN4_1650399274.png', 1, '2022-02-16 23:31:46', '2022-04-20 00:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `social_name`, `created_at`, `updated_at`) VALUES
(2, 'Instagram', '2021-10-29 05:42:42', '2021-10-29 05:42:42'),
(11, 'Twitter', '2021-11-17 12:24:18', '2022-01-03 15:21:11'),
(12, 'Facebook', '2021-11-17 17:23:41', '2022-01-03 15:20:51'),
(13, 'Word of Mouth', '2021-12-29 15:28:34', '2022-01-03 15:21:31'),
(15, 'Linkedin', '2022-03-23 11:55:02', '2022-03-23 11:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `special_offers`
--

CREATE TABLE `special_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` int(11) NOT NULL,
  `discount` int(10) UNSIGNED NOT NULL,
  `new_price` int(10) UNSIGNED NOT NULL,
  `save` int(10) UNSIGNED NOT NULL,
  `sales_header` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_deadline` date DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `special_offers`
--

INSERT INTO `special_offers` (`id`, `tour_id`, `discount`, `new_price`, `save`, `sales_header`, `offer_deadline`, `status`, `created_at`, `updated_at`) VALUES
(5, 19, 100, 2600, 100, 'Holiday Season Sale', '2026-01-31', 'Active', '2021-12-23 02:55:13', '2023-11-18 08:41:51'),
(6, 11, 200, 1300, 200, 'Early Booking Offer', '2023-09-28', 'Inactive', '2022-03-10 14:18:12', '2023-12-05 09:13:02'),
(7, 26, 100, 400, 100, 'Early Booking Offer', '2022-09-30', 'Inactive', '2022-04-09 12:56:38', '2023-01-07 14:29:27'),
(8, 28, 150, 1350, 150, 'Last Minute Offer', '2022-09-30', 'Inactive', '2022-04-09 12:57:23', '2022-10-01 06:29:05'),
(9, 41, 100, 400, 100, 'Last Minute Offer', '2022-08-31', 'Inactive', '2022-04-09 12:58:12', '2022-09-01 06:23:05'),
(10, 47, 10, 1490, 10, 'Holiday Season Sale', '2022-05-31', 'Inactive', '2022-05-13 13:02:40', '2022-06-01 04:17:13'),
(11, 30, 120, 3880, 120, 'Early Booking Offer', '2022-09-30', 'Inactive', '2022-06-25 13:02:59', '2023-08-01 13:17:34'),
(12, 27, 100, 400, 100, 'Last Minute Offer', '2022-07-25', 'Inactive', '2022-06-25 13:03:40', '2023-08-01 13:15:43'),
(13, 22, 200, 2500, 200, 'Early Booking Offer', '2022-10-31', 'Inactive', '2022-08-17 22:04:51', '2022-11-01 04:30:12'),
(14, 40, 90, 1410, 90, 'Early Booking Offer', '2022-09-30', 'Inactive', '2022-08-23 23:39:47', '2022-10-01 06:29:05'),
(15, 49, 200, 2500, 200, 'Early Booking Offer', '2024-02-28', 'Active', '2023-02-05 17:29:42', '2023-11-18 08:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `subtitles`
--

CREATE TABLE `subtitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_name` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description` varchar(1200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_photo` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subtitles`
--

INSERT INTO `subtitles` (`id`, `page_title`, `page_name`, `page_subtitle`, `page_description`, `sub_photo`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Dolorem qui dolore o', '<p><br data-mce-bogus=\"1\"></p>', 'grandMellia_1633942222_167873031', 'Active', 1, '2023-03-13 11:58:32', '2023-03-13 11:58:32'),
(2, '2', '2', 'wawaw xxx', '<p>testing page</p>', 'grandMellia_1633942222_167873034', 'Active', 1, '2023-03-13 11:59:02', '2023-03-17 03:08:50'),
(3, '1', '1', 'Optio quidem id mag', '<p>Nisi dolorum labore .</p>', 'maize_1633680864_1679044036.jpg', 'Active', 1, '2023-03-13 11:59:28', '2023-03-17 03:07:16'),
(4, '2', '2', 'Officia autem pariat', NULL, 'grandMellia_1633761170_167873404', 'Active', 1, '2023-03-13 13:00:43', '2023-03-13 13:00:43'),
(5, '1', '1', 'Assumenda eos quia d', '<p>Laudantium, et id, u.</p>\r\n<h2><strong>jjk</strong></h2>', 'beach1_1634101439_1678735017.jpg', 'Active', 1, '2023-03-13 13:01:27', '2023-03-13 13:16:57'),
(6, '2', '2', 'Est autem ut dicta', '<p>Laudantium, et id, u.</p>\r\n<h2><strong>jjk</strong></h2>', 'beach1_1634101439_1678735252.jpg', 'Active', 1, '2023-03-13 13:19:49', '2023-03-13 13:20:52'),
(7, '2', '2', 'Mission Juma k', '<h2>fdfdfdf</h2>\r\n<p>wweee,fdfh</p>', '750milsphoto_1678871121.jpeg', 'Active', 1, '2023-03-13 13:23:32', '2023-03-15 03:05:21'),
(8, '1', '1', 'WAwa Testing page', '<h1>fgfg</h1>\r\n<p>ffffff ghfhgf jfgf</p>\r\n<ul>\r\n<li>tetretrter</li>\r\n<li>eer wawa</li>\r\n</ul>', 'log2_1634031285_1679045593.jpg', 'Active', 1, '2023-03-13 13:49:47', '2023-03-17 03:33:13'),
(11, '1', '1', 'Haja Kubwa', '<p>fdfdf</p>\r\n<p>Testing hee,</p>\r\n<h2>dfdf</h2>', 'lion2_1633333457_1679046221.jpg', 'Active', 1, '2023-03-17 03:43:41', '2023-03-17 03:44:56'),
(12, '1', '1', 'Mission2', NULL, 'maize_1633680864_1679112008.jpg', 'Active', 1, '2023-03-17 22:00:08', '2023-03-18 02:42:14'),
(13, '1', '1', 'Cosmic', '<h2>hawawvvc</h2>\r\n<p>fghfghfgfg</p>\r\n<p>wawa come,bvdfbd wawaw</p>\r\n<ul>\r\n<li>dsdsdd</li>\r\n<li>kk</li>\r\n<li>kl</li>\r\n<li>po</li>\r\n</ul>', 'lights_1634121039_1679121517.jpg', 'Active', 1, '2023-03-18 00:38:37', '2023-03-18 02:31:57'),
(15, '1', '1', 'mission', '<h2>hawawvvc</h2>\r\n<p>fghfghfgfg</p>\r\n<p>wawa come,bvdfbd wawaw</p>\r\n<ul>\r\n<li>dsdsdd</li>\r\n<li>kk</li>\r\n<li>kl</li>\r\n<li>po</li>\r\n</ul>', 'beach1_1634117327_1679131919.jpg', 'Active', 1, '2023-03-18 02:42:33', '2023-03-18 03:31:59'),
(16, '3', '1', 'About Tanzania xx', NULL, 'th_1634197681_1679135921.jpg', 'Active', 1, '2023-03-18 04:11:59', '2023-03-18 04:38:41'),
(17, '1', '1', 'ggg', NULL, 'hakuna matata_1680709186.jpeg', 'Active', 1, '2023-04-05 09:39:46', '2023-04-05 09:39:46'),
(19, '3', NULL, 'Quia velit beatae v', '<p>uu</p>', NULL, 'Active', 1, '2023-04-07 08:37:19', '2023-04-07 08:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `tailor_mades`
--

CREATE TABLE `tailor_mades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `arrival_date` date NOT NULL,
  `days` int(11) DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `teens` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accommodation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_budget` decimal(8,2) DEFAULT NULL,
  `max_budget` decimal(8,2) DEFAULT NULL,
  `calculated_cost` decimal(8,2) DEFAULT NULL,
  `total_amount_paid` decimal(8,2) DEFAULT NULL,
  `amount_remain` decimal(8,2) DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physical_rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payee_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` date NOT NULL,
  `other_information` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hear_about_us` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tailor_mades`
--

INSERT INTO `tailor_mades` (`id`, `first_name`, `last_name`, `nationality`, `email`, `phone`, `arrival_date`, `days`, `adults`, `teens`, `children`, `destination`, `tour_type`, `accommodation`, `min_budget`, `max_budget`, `calculated_cost`, `total_amount_paid`, `amount_remain`, `currency`, `physical_rating`, `pin`, `status`, `payee_status`, `attachment`, `end_date`, `other_information`, `hear_about_us`, `created_at`, `updated_at`) VALUES
(2, 'LAWRENCE', 'Nkurwa', 'TANZANIA', 'nkurwalawrence18@gmail.com', 766236222, '1970-01-01', 5, 2, 1, 1, 'Kilimanjaro mountain', 'Serengeti and Manyara national parks, Ngorongoro conservation Area', NULL, '2500.00', '2300.00', NULL, NULL, NULL, NULL, NULL, 93194325, 'Active', NULL, NULL, '1970-01-06', 'Hello friends. I invite you to visit Tanzania through my company Drongosafaris. for anyone who want', 'Tweeter', '2022-08-10 13:45:03', '2022-08-10 13:57:41'),
(3, 'Joseph', 'Mcdonard', 'Uk', 'uk@gmail.com', 444444444, '2022-09-20', 5, 2, 1, 1, 'Serengeti', 'Serengeti and Manyara national parks, Ngorongoro conservation Area', NULL, '2300.00', '5000.00', NULL, NULL, NULL, NULL, NULL, 55495409, 'Active', NULL, NULL, '2022-09-25', 'Welcome to drongo safaris', NULL, '2022-08-10 13:49:49', '2022-08-10 14:08:07'),
(4, 'ff', 'ff', 'ff', 'qq@fff.com', 33, '1970-01-01', NULL, 1, NULL, NULL, 'Ar', 'Safaris', 'Comfort', '200.00', '395.00', NULL, NULL, NULL, NULL, NULL, 91202351, 'Active', NULL, NULL, '1970-01-01', NULL, NULL, '2023-11-08 02:35:38', '2023-11-08 02:35:38'),
(5, 'ff', 'ff', 'ff', 'qq@fff.com', 33, '1970-01-01', NULL, 1, NULL, NULL, 'Ar', 'Safaris', 'Comfort', '200.00', '395.00', NULL, NULL, NULL, NULL, NULL, 63132560, 'Active', NULL, NULL, '1970-01-01', NULL, NULL, '2023-11-08 02:36:42', '2023-11-08 02:36:42'),
(6, 'bb', 'wawa', 'Rtaa', 'gg@gmai.com', 5666, '2023-10-23', 2, 1, NULL, NULL, 'wawa', 'Mt.kilimanjaro Rongai route', NULL, '400.00', '596.00', NULL, NULL, NULL, '0', '0', 88575550, 'Active', NULL, NULL, '2023-10-25', 'Testing', NULL, '2023-11-09 06:31:49', '2023-11-09 06:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `full_name`, `comments`, `rating`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Rosalyn Mcclure', 'Occaecat sunt aut d', 2, 1, 1, '2021-10-28 07:32:03', '2021-10-29 05:42:15'),
(2, 'Tatum Phelps wawa', 'Mollit tempor molest', 5, 1, 1, '2021-10-28 07:32:12', '2021-10-28 07:59:29'),
(3, 'JaimeGuift', 'Good day!  drongosafaris.com \r\n \r\nDid you know that it is possible to send business offer totally lawful? \r\nWe submit a new legitimate method of sending request through feedback forms. Such f', 5, 0, NULL, '2021-12-07 01:16:59', '2021-12-07 01:16:59'),
(4, 'Donald Cole', 'Good day \r\n \r\nI contacted you some days back seeking your cooperation in a matter regarding funds worth $24 Million, I urge you to get back to me through this email coledd11@cloedcolela.com i', 2, 0, NULL, '2021-12-14 01:51:28', '2021-12-14 01:51:28'),
(5, 'Hassan Hamlin', 'Hi , \r\n\r\nI don’t need to tell you how important it is to optimize every step in your SEO pipeline. \r\n\r\nBut unfortunately, it’s nearly impossible to cut out time or money when it comes to gett', 4, 0, NULL, '2021-12-22 18:37:17', '2021-12-22 18:37:17'),
(6, 'Lachlan Hamlin', 'STOP Trying To Do Everything Yourself,\r\nClone Our $100k PROVEN Affiliate Campaigns\r\n\r\n\r\n=> https://dcas.bizoppsguide.com?traffic_source=cf&cost=0.0\r\n\r\n\r\nWith Everything, Preloaded Into This 3', 1, 0, NULL, '2021-12-23 19:06:31', '2021-12-23 19:06:31'),
(7, 'Spencer Rosengren', 'Free submission of your new website to over 1000 business directories here https://bit.ly/ADDYOURSITE', NULL, 0, NULL, '2021-12-24 19:29:19', '2021-12-24 19:29:19'),
(8, 'Michelle Hinton', 'Add your site to 1000 business directories with one click here-> https://1mdr.short.gy/submityourwebsite', NULL, 0, NULL, '2021-12-29 11:11:02', '2021-12-29 11:11:02'),
(9, 'Ute Helms', 'Hey,\r\n\r\nI\'m sure you\'re excited about the prospect of making $27 everytime you click \"Activate\". \r\n\r\nBut there\'s A LOT more to this than just that.\r\n\r\n������������ It takes less than ten minutes\r\n���������', 1, 0, NULL, '2021-12-30 21:48:13', '2021-12-30 21:48:13'),
(10, 'Tracie Mouret', 'You can submit your site to over 1000 different business/advertising directories for free with one click https://1mdr.short.gy/submityourwebsite', NULL, 0, NULL, '2022-01-02 03:45:16', '2022-01-02 03:45:16'),
(11, 'Buddy Daiton', 'Good job on the new site! Now go ahead and submit it to our free directory here https://1mdr.short.gy/add-your-site', NULL, 0, NULL, '2022-01-03 12:37:42', '2022-01-03 12:37:42'),
(12, 'Inge Kemp', 'As a video marketer, your most powerful tool is YouTube. The world’s most popular video site which is nearly synonymous to video marketing on the Internet.\r\n\r\n YouTube’s domination on the vid', 4, 0, NULL, '2022-01-05 10:44:13', '2022-01-05 10:44:13'),
(13, 'Teodoro Hyder', 'Hi,\r\n\r\nIf you\'re struggling with getting \r\nyour affiliate site off the ground, \r\ncheck this out:\r\n\r\n=> https://videositesfullyautomaticmoney.blogspot.com/\r\n\r\nThis is a brand-new WordPress Pre', 3, 0, NULL, '2022-02-01 04:19:35', '2022-02-01 04:19:35'),
(14, 'Leila McCallum', 'Hi!\r\n\r\nIn just a few hours from now, Tuberank Jeet 4 will be available for purchase. \r\n\r\n=>> https://tuberankjeet4.bizoppsguide.com?traffic_source=cf&cost=0.0\r\n\r\nThis the new and the most pow', 1, 0, NULL, '2022-02-24 12:08:42', '2022-02-24 12:08:42'),
(15, 'Luz Saenger', 'Hi!\r\n\r\nI am sure you know that YouTube comments and backlinks are a sure fire way to drive high quality traffic and boost your YouTube channel rankings.\r\n\r\nAnd if you could find channels and ', 5, 0, NULL, '2022-03-04 11:13:04', '2022-03-04 11:13:04'),
(16, 'Carrol Cornwall', 'Hi!\r\n\r\nI really wanted to share with you about this exciting, \r\nbreakthrough video marketing software that taps\r\ninto video marketing’s biggest secrets to bring\r\nmillions of views to your You', 5, 0, NULL, '2022-03-04 11:14:52', '2022-03-04 11:14:52'),
(17, 'Prince Conger', 'Hey,\r\n\r\nHave you ever heard of Deep Learning and AI?\r\n\r\nCombined Deep Learning and AI included in SPD technology is the pinnacle of the natural voice generation breakthrough.\r\n\r\nThis is why n', 5, 0, NULL, '2022-03-10 06:14:18', '2022-03-10 06:14:18'),
(18, 'Muoi Tye', 'Make your own XVIDEOS porn tube VTUBE Theme allows you to make a real XVIDEOS clone tube.\r\n\r\n=>> https://createporntubesites.blogspot.com/\r\n\r\nOne of the most visited porn site ever and one of', 4, 0, NULL, '2022-03-20 23:34:33', '2022-03-20 23:34:33'),
(19, 'Blythe', 'New Multifunction Anti-theft Waterproof Sling Bag\r\n\r\nThe best ever SUPER Sling Bag: Drop-proof/Anti-theft/Scratch-resistant/USB Charging\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide', 5, 0, NULL, '2022-03-21 15:17:47', '2022-03-21 15:17:47'),
(20, 'Loyd', 'Hello \r\n \r\nPawSafer™ CAN SAFELY TRIM YOUR DOG\'S NAILS IN NO TIME FROM HOME.\r\n\r\nGet it while it\'s still 50% OFF + FREE Shipping\r\n\r\nBuy here: https://pawsafer.shop\r\n \r\nHave a great time, \r\n \r\nL', 4, 0, NULL, '2022-03-22 04:45:32', '2022-03-22 04:45:32'),
(21, 'Roscoe', 'The ultimate smashing machine! Grinding Coffee Beans, Nuts & Spices in seconds.\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time\r\n\r\nOrder here: https://aroma', 1, 0, NULL, '2022-03-24 04:52:44', '2022-03-24 04:52:44'),
(22, 'MichaelGlore', 'drongosafaris.com uriefeodeighrkfldjiijofofjmvkdnsisdiehiusfiajfhweiuioidjsjsbfiadjasifaijdfifijsaaiwghifadja', 4, 0, NULL, '2022-03-25 20:45:23', '2022-03-25 20:45:23'),
(23, 'Lila', 'Good Morning \r\n \r\nCAREDOGBEST™ - Personalized Dog Harness. All sizes from XS to XXL.  Easy ON/OFF in just 2 seconds.  LIFETIME WARRANTY.\r\n\r\nClick here: https://caredogbest.com\r\n \r\nThanks and ', 1, 0, NULL, '2022-03-26 11:47:08', '2022-03-26 11:47:08'),
(24, 'Martha', 'Hey \r\n\r\nAre you Scrambling while opening Jars, Bottles, and Cans?\r\n\r\nThis Jar Opener Takes The Strain & Frustration Out Of Opening Jars & Bottles!  Never Struggle with opening a jar again!\r\n\r', 1, 0, NULL, '2022-03-27 13:19:27', '2022-03-27 13:19:27'),
(25, 'Remona', 'Hey\r\n\r\nOur Medical-Grade Toenail Clippers is the safest and especially recommended for those with troubles with winding nails, hard nails, two nails, nail cracks, deep nails, thickened nails ', 4, 0, NULL, '2022-04-03 04:45:32', '2022-04-03 04:45:32'),
(26, 'Leopoldo Zwar', 'Online shopping is a 586.9 BILLION dollar market and today is your chance to become a highly paid leader and “go-to” person IN that market and earn commissions on autopilot.\r\n\r\nWhen you’re lo', 4, 0, NULL, '2022-04-04 06:48:24', '2022-04-04 06:48:24'),
(27, 'Carley Herrod', 'Randy spent 9 months and only made one thousand dollars UNTIL he got his hands on the Roadmap that took his earnings to Ten Thousand in a matter of weeks\r\n\r\nWanna see the roadmap? \r\n\r\n>>>See ', 1, 0, NULL, '2022-04-04 06:49:13', '2022-04-04 06:49:13'),
(28, 'Herbert', 'New Multifunction Waterproof Backpack\r\n\r\nThe best ever SUPER Backpack: Drop-proof/Scratch-resistant/USB Charging/Large capacity storage\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide ', 4, 0, NULL, '2022-04-05 23:32:57', '2022-04-05 23:32:57'),
(29, 'Sienna', 'World\'s Best Neck Massager Get it Now 50% OFF + Free Shipping!\r\n\r\nWellness Enthusiasts! There has never been a better time to take care of your neck pain! \r\nOur clinical-grade TENS technology', 5, 0, NULL, '2022-04-28 06:38:23', '2022-04-28 06:38:23'),
(30, 'Danae', 'Good Morning \r\n\r\nDon\'t you hate carrying a big bulky backpack when you are only going out for the day? This high quality shoulder bag solves that problem. \r\nCarry enough without bogging yours', 3, 0, NULL, '2022-05-01 18:11:51', '2022-05-01 18:11:51'),
(31, 'Starla', 'Hi there \r\n \r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED \r\n\r\nBuy now: https://tha', 1, 0, NULL, '2022-05-06 01:06:40', '2022-05-06 01:06:40'),
(32, 'Michaeltit', 'электроэпиляция в Екатеринбурге \r\n<a href=https://vk.com/epilyciy_shulepova>https://vk.com/epilyciy_shulepova</a>', 2, 0, NULL, '2022-05-06 19:05:53', '2022-05-06 19:05:53'),
(33, 'Georgecrype', 'Stable income on Pinterest from $15,000 per month https://telegra.ph/How-to-make-money-on-pinterest-from-15000-per-month---id602850-05-05', 2, 0, NULL, '2022-05-07 03:28:04', '2022-05-07 03:28:04'),
(34, 'Rachael', 'Hello, \r\n\r\nI hope you\'re doing well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nThe bags are waterproof and anti-theft, and have a built-in U', 4, 0, NULL, '2022-05-14 10:04:46', '2022-05-14 10:04:46'),
(35, 'Marylyn', 'Hi \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a l', 2, 0, NULL, '2022-05-18 04:01:22', '2022-05-18 04:01:22'),
(36, 'Lynette', 'Hello there \r\n\r\nI understand that you are looking for ways to improve your posture and contribute to a healthy lifestyle. I think our product, Medico Postura™ Body Posture Corrector, can be o', 1, 0, NULL, '2022-05-24 06:09:51', '2022-05-24 06:09:51'),
(37, 'Deangelo', 'EASE YOUR PAIN IN 10 MINUTES EFFORTLESSLY\r\n\r\nBe Free from Neck Pain\r\nTry NeckFlexer & Relieve Neck Pain Effortlessly In 10 Min!\r\nSave 50% OFF + FREE Worldwide Shipping\r\n\r\nShop Now: neckflexer', 5, 0, NULL, '2022-06-03 02:42:30', '2022-06-03 02:42:30'),
(38, 'Debbie', 'Hi there,\r\n\r\nI hope you\'re well. I am excited to tell you about our Full Body Resistance Band Kit that can help you get an amazing workout without having to go to the gym.\r\nThis is the best a', 5, 0, NULL, '2022-06-08 04:16:45', '2022-06-08 04:16:45'),
(39, 'Nan', 'Hi,\r\n\r\nIf you are one of the sufferers of the common problems nails have, then you are in luck! Our Toenail Clippers is here to help. It has a specially designed clip that can help those with', 5, 0, NULL, '2022-06-10 18:27:26', '2022-06-10 18:27:26'),
(40, 'Heidi', 'New Multifunction Anti-theft Waterproof Sling Bag\r\n\r\nThe best ever SUPER Sling Bag: Drop-proof/Anti-theft/Scratch-resistant/USB Charging\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide', 2, 0, NULL, '2022-06-14 19:16:59', '2022-06-14 19:16:59'),
(41, 'Robert', 'Get The Worlds Greatest Magic Sand Free Beach Mat!\r\n\r\nWatch sand, dirt & dust disappear right before your eyes! It\'s perfect for beach, picnic, camping or hiking.\r\n\r\nAct Now And Receive A Spe', 4, 0, NULL, '2022-06-20 22:26:27', '2022-06-20 22:26:27'),
(42, 'AnnaDiox', 'Ηеllо all, guуs! I knоw, mу messаgе may bе tоо specific,\r\nВut my ѕiѕtеr fоund nісe man hеrе аnd theу married, ѕo how about me?! :)\r\nI аm 24 yеаrѕ old, Anna, from Romaniа, Ι knоw Εnglіsh аnd G', 2, 0, NULL, '2022-06-24 11:13:34', '2022-06-24 11:13:34'),
(43, 'Coral', 'Hey \r\n\r\nThe New Powerful LED Flashlight is The Perfect Flashlight For Any Situation!\r\n\r\nThe 3,000 Lumens & Adjustable Zoom gives you the wide field of view and brightness other flashlights do', 1, 0, NULL, '2022-06-26 23:21:02', '2022-06-26 23:21:02'),
(44, 'DavidOnefe', 'Njfhsjdwkdjwfh jiwkdwidwhidjwi jiwkdowfiehgejikdoswfiw https://gehddijiwfugwdjaidheufeduhwdwhduhdwudw.com/fjhdjwksdehfjhejdsdefhe', 5, 0, NULL, '2022-06-29 06:24:45', '2022-06-29 06:24:45'),
(45, 'Don', 'New Multifunction Waterproof Backpack\r\n\r\nThe best ever SUPER Backpack: Drop-proof/Scratch-resistant/USB Charging/Large capacity storage\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide ', 1, 0, NULL, '2022-07-03 10:13:43', '2022-07-03 10:13:43'),
(46, 'Eric Jones', 'Hey, my name’s Eric and for just a second, imagine this…\r\n\r\n- Someone does a search and winds up at drongosafaris.com.\r\n\r\n- They hang out for a minute to check it out.  “I’m interested… but… ', 5, 0, NULL, '2022-07-09 21:13:51', '2022-07-09 21:13:51'),
(47, 'Mae', 'Good day \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we off', 1, 0, NULL, '2022-07-13 22:25:55', '2022-07-13 22:25:55'),
(48, 'Merri', 'Good Morning \r\n\r\nDo you have time to brush your dog\'s teeth every day?\r\n\r\nLet your dog clean his own teeth with our dog dental care brushing stick. Made of eco-friendly natural rubber, this t', 2, 0, NULL, '2022-07-27 00:17:28', '2022-07-27 00:17:28'),
(49, 'Adele', 'Hi there \r\n\r\nI understand that you are looking for ways to improve your posture and contribute to a healthy lifestyle. I think our product, Medico Postura™ Body Posture Corrector, can be of g', 5, 0, NULL, '2022-07-30 19:47:30', '2022-07-30 19:47:30'),
(50, 'Janine', 'Hey there, \r\n\r\nI hope you\'re doing well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nBange is perfect for students, professionals and traveler', 1, 0, NULL, '2022-08-09 10:49:04', '2022-08-09 10:49:04'),
(51, 'CrytoRot', 'The additional income for everyone. https://tub.mir-und-mich.de/', 2, 0, NULL, '2022-08-11 01:37:43', '2022-08-11 01:37:43'),
(52, 'CrytoRot', 'Only one click can grow up your money really fast. https://tub.rbertilsson.se/', 4, 0, NULL, '2022-08-12 04:53:32', '2022-08-12 04:53:32'),
(53, 'CrytoRot', 'Join the society of successful people who make money here. https://tub.rbertilsson.se/', 5, 0, NULL, '2022-08-13 08:32:55', '2022-08-13 08:32:55'),
(54, 'CrytoRot', 'Financial robot is the best companion of rich people. https://tub.rbertilsson.se/', 4, 0, NULL, '2022-08-14 11:43:30', '2022-08-14 11:43:30'),
(55, 'CrytoRot', 'Try out the automatic robot to keep earning all day long. https://tub.rbertilsson.se/', 2, 0, NULL, '2022-08-15 14:21:17', '2022-08-15 14:21:17'),
(56, 'Lilly', 'Morning \r\n \r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED \r\n\r\nBuy now: https://thaw', 2, 0, NULL, '2022-08-23 14:38:26', '2022-08-23 14:38:26'),
(57, 'Jamesmeege', 'TOP-1 in Google for 1 month for all queries https://telegra.ph/TOP-1-of-Google-for-1-month-08-24-67813', 2, 0, NULL, '2022-08-28 05:53:36', '2022-08-28 05:53:36'),
(58, 'Carmine', 'Good Morning,\r\n\r\nIf you are one of the sufferers of the common problems nails have, then you are in luck! Our Toenail Clippers is here to help. It has a specially designed clip that can help ', 1, 0, NULL, '2022-08-31 20:06:38', '2022-08-31 20:06:38'),
(59, 'CrytoRot', 'The online income is your key to success. http://go.tazalus.com/0j0l', 3, 0, NULL, '2022-09-02 15:08:21', '2022-09-02 15:08:21'),
(60, 'CrytoRot', 'Even a child knows how to make money. Do you? http://go.tazalus.com/0j0l', 2, 0, NULL, '2022-09-02 17:37:19', '2022-09-02 17:37:19'),
(61, 'CrytoRot', 'One dollar is nothing, but it can grow into $100 here. http://go.tazalus.com/0j0l', 5, 0, NULL, '2022-09-02 20:06:16', '2022-09-02 20:06:16'),
(62, 'CrytoRot', 'Make thousands of bucks. Financial robot will help you to do it! http://go.tazalus.com/0j0l', 5, 0, NULL, '2022-09-02 22:33:32', '2022-09-02 22:33:32'),
(63, 'CrytoRot', 'No need to work anymore. Just launch the robot. http://go.tazalus.com/0j0l', 4, 0, NULL, '2022-09-03 00:59:54', '2022-09-03 00:59:54'),
(64, 'CrytoRot', 'Most successful people already use Robot. Do you? http://go.tazalus.com/0j0l', 5, 0, NULL, '2022-09-03 03:28:34', '2022-09-03 03:28:34'),
(65, 'CrytoRot', 'Making money in the net is easier now. http://go.tazalus.com/0j0l', 3, 0, NULL, '2022-09-03 05:57:16', '2022-09-03 05:57:16'),
(66, 'CrytoRot', 'No need to worry about the future if your use this financial robot. http://go.tazalus.com/0j0l', 2, 0, NULL, '2022-09-03 08:19:07', '2022-09-03 08:19:07'),
(67, 'CrytoRot', 'Need money? The financial robot is your solution. http://go.tazalus.com/0j0l', 5, 0, NULL, '2022-09-03 10:54:15', '2022-09-03 10:54:15'),
(68, 'CrytoRot', 'Have no financial skills? Let Robot make money for you. http://go.tazalus.com/0j0l', 3, 0, NULL, '2022-09-03 13:21:47', '2022-09-03 13:21:47'),
(69, 'CrytoRot', 'Make your computer to be you earning instrument. http://go.tazalus.com/0j0l', 2, 0, NULL, '2022-09-03 15:49:49', '2022-09-03 15:49:49'),
(70, 'CrytoRot', 'Wow! This Robot is a great start for an online career. http://go.tazalus.com/0j0l', 5, 0, NULL, '2022-09-03 18:21:53', '2022-09-03 18:21:53'),
(71, 'CrytoRot', 'Launch the best investment instrument to start making money today. http://go.tazalus.com/0j0l', 5, 0, NULL, '2022-09-03 20:49:53', '2022-09-03 20:49:53'),
(72, 'CrytoRot', 'Launch the financial Robot and do your business. http://go.tazalus.com/0j0l', 2, 0, NULL, '2022-09-03 23:16:19', '2022-09-03 23:16:19'),
(73, 'CrytoRot', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. http://go.tazalus.com/0j0l', 2, 0, NULL, '2022-09-04 01:44:38', '2022-09-04 01:44:38'),
(74, 'CrytoRot', 'No need to work anymore while you have the Robot launched! http://go.tazalus.com/0j0l', 5, 0, NULL, '2022-09-04 04:04:13', '2022-09-04 04:04:13'),
(75, 'CrytoRot', 'Let your money grow into the capital with this Robot. http://go.tazalus.com/0j0l', 2, 0, NULL, '2022-09-04 06:28:25', '2022-09-04 06:28:25'),
(76, 'CrytoRot', 'Financial Robot is #1 investment tool ever. Launch it! http://go.tazalus.com/0j0l', 3, 0, NULL, '2022-09-04 08:55:22', '2022-09-04 08:55:22'),
(77, 'CrytoRot', 'Need some more money? Robot will earn them really fast. http://go.tazalus.com/0j0l', 3, 0, NULL, '2022-09-04 11:23:14', '2022-09-04 11:23:14'),
(78, 'CrytoRot', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. http://go.tygyguip.com/096s', 5, 0, NULL, '2022-09-04 13:48:09', '2022-09-04 13:48:09'),
(79, 'CrytoRot', 'Need money? Earn it without leaving your home. http://go.tygyguip.com/096s', 2, 0, NULL, '2022-09-04 16:11:45', '2022-09-04 16:11:45'),
(80, 'CrytoRot', 'Make your computer to be you earning instrument. http://go.tygyguip.com/096s', 4, 0, NULL, '2022-09-04 18:36:26', '2022-09-04 18:36:26'),
(81, 'CrytoRot', 'There is no need to look for a job anymore. Work online. https://emdn.cl/promo', 5, 0, NULL, '2022-09-04 21:00:19', '2022-09-04 21:00:19'),
(82, 'CrytoRot', 'Financial independence is what everyone needs. https://emdn.cl/promo', 4, 0, NULL, '2022-09-04 23:26:51', '2022-09-04 23:26:51'),
(83, 'CrytoRot', 'Looking forward for income? Get it online. https://emdn.cl/promo', 3, 0, NULL, '2022-09-05 02:11:58', '2022-09-05 02:11:58'),
(84, 'Zak', 'Hi \r\n \r\nIs your dog\'s nails getting too long? If you\'re tired of going to the vet or groomer to get them trimmed, why not try PawSafer™? \r\nWith PawSafer™, you can trim your dog\'s nails from t', 3, 0, NULL, '2022-09-05 02:29:56', '2022-09-05 02:29:56'),
(85, 'CrytoRot', 'Have no money? It’s easy to earn them online here. https://emdn.cl/promo', 3, 0, NULL, '2022-09-05 04:40:05', '2022-09-05 04:40:05'),
(86, 'CrytoRot', 'Everyone can earn as much as he wants now. https://emdn.cl/promo', 4, 0, NULL, '2022-09-05 07:04:50', '2022-09-05 07:04:50'),
(87, 'Vincent Milerum', 'The three things you need are all about Freedom.\r\n\r\n\r\n\r\nTime Freedom (Make your own schedule)\r\n\r\n\r\n\r\nLocation Freedom (Go where you want)\r\n\r\n\r\n\r\nResource Freedom (Do what you want when you ge', 3, 0, NULL, '2022-09-05 09:22:34', '2022-09-05 09:22:34'),
(88, 'CrytoRot', 'Online earnings are the easiest way for financial independence. https://emdn.cl/promo', 3, 0, NULL, '2022-09-05 09:30:55', '2022-09-05 09:30:55'),
(89, 'CrytoRot', 'One dollar is nothing, but it can grow into $100 here. https://emdn.cl/promo', 4, 0, NULL, '2022-09-05 11:56:56', '2022-09-05 11:56:56'),
(90, 'CrytoRot', 'Buy everything you want earning money online. https://emdn.cl/promo', 2, 0, NULL, '2022-09-05 14:21:40', '2022-09-05 14:21:40'),
(91, 'CrytoRot', 'Turn $1 into $100 instantly. Use the financial Robot. https://emdn.cl/promo', 3, 0, NULL, '2022-09-05 16:48:30', '2022-09-05 16:48:30'),
(92, 'CrytoRot', 'Find out about the easiest way of money earning. https://tiendaskon.com.es/promo', 2, 0, NULL, '2022-09-05 19:16:58', '2022-09-05 19:16:58'),
(93, 'CrytoRot', 'Let the financial Robot be your companion in the financial market. https://tiendaskon.com.es/promo', 5, 0, NULL, '2022-09-05 21:50:09', '2022-09-05 21:50:09'),
(94, 'CrytoRot', 'One click of the robot can bring you thousands of bucks. https://tiendaskon.com.es/promo', 2, 0, NULL, '2022-09-06 00:21:19', '2022-09-06 00:21:19'),
(95, 'CrytoRot', 'No need to work anymore while you have the Robot launched! https://tiendaskon.com.es/promo', 2, 0, NULL, '2022-09-06 02:52:20', '2022-09-06 02:52:20'),
(96, 'CrytoRot', 'Online job can be really effective if you use this Robot. https://tiendaskon.com.es/promo', 5, 0, NULL, '2022-09-06 05:26:19', '2022-09-06 05:26:19'),
(97, 'CrytoRot', 'Try out the best financial robot in the Internet. https://tiendaskon.com.es/promo', 3, 0, NULL, '2022-09-06 07:59:08', '2022-09-06 07:59:08'),
(98, 'CrytoRot', 'Start making thousands of dollars every week. https://tiendaskon.com.es/promo', 5, 0, NULL, '2022-09-06 10:30:00', '2022-09-06 10:30:00'),
(99, 'CrytoRot', 'The success formula is found. Learn more about it. https://tiendaskon.com.es/promo', 3, 0, NULL, '2022-09-06 12:59:04', '2022-09-06 12:59:04'),
(100, 'CrytoRot', 'No need to stay awake all night long to earn money. Launch the robot. https://hierbalimon.es/promo', 2, 0, NULL, '2022-09-06 15:26:08', '2022-09-06 15:26:08'),
(101, 'CrytoRot', 'Need some more money? Robot will earn them really fast. https://hierbalimon.es/promo', 3, 0, NULL, '2022-09-06 17:53:30', '2022-09-06 17:53:30'),
(102, 'CrytoRot', 'No need to work anymore. Just launch the robot. https://hierbalimon.es/promo', 3, 0, NULL, '2022-09-06 20:19:19', '2022-09-06 20:19:19'),
(103, 'CrytoRot', 'Attention! Financial robot may bring you millions! https://hierbalimon.es/promo', 2, 0, NULL, '2022-09-06 22:45:38', '2022-09-06 22:45:38'),
(104, 'CrytoRot', 'The online income is the easiest ways to make you dream come true. https://hierbalimon.es/promo', 4, 0, NULL, '2022-09-07 01:12:08', '2022-09-07 01:12:08'),
(105, 'CrytoRot', 'Financial robot keeps bringing you money while you sleep. https://hierbalimon.es/promo', 4, 0, NULL, '2022-09-07 06:02:00', '2022-09-07 06:02:00'),
(106, 'CrytoRot', 'Looking for additional money? Try out the best financial instrument. https://hierbalimon.es/promo', 3, 0, NULL, '2022-09-07 08:29:18', '2022-09-07 08:29:18'),
(107, 'CrytoRot', 'Need money? Get it here easily? https://hierbalimon.es/promo', 4, 0, NULL, '2022-09-07 10:53:00', '2022-09-07 10:53:00'),
(108, 'CrytoRot', 'Learn how to make hundreds of backs each day. https://hierbalimon.es/promo', 3, 0, NULL, '2022-09-07 13:19:07', '2022-09-07 13:19:07'),
(109, 'CrytoRot', 'The huge income without investments is available, now! https://bodyandsoul.com.es/promo', 5, 0, NULL, '2022-09-07 15:46:10', '2022-09-07 15:46:10'),
(110, 'CrytoRot', 'Financial independence is what this robot guarantees. https://bodyandsoul.com.es/promo', 5, 0, NULL, '2022-09-07 18:14:36', '2022-09-07 18:14:36'),
(111, 'CrytoRot', 'Rich people are rich because they use this robot. https://bodyandsoul.com.es/promo', 2, 0, NULL, '2022-09-07 23:13:21', '2022-09-07 23:13:21'),
(112, 'CrytoRot', 'Financial independence is what this robot guarantees. https://bodyandsoul.com.es/promo', 4, 0, NULL, '2022-09-08 02:00:58', '2022-09-08 02:00:58'),
(113, 'CrytoRot', 'Financial independence is what everyone needs. https://bodyandsoul.com.es/promo', 4, 0, NULL, '2022-09-08 04:25:11', '2022-09-08 04:25:11'),
(114, 'CrytoRot', 'Your money keep grow 24/7 if you use the financial Robot. https://bodyandsoul.com.es/promo', 4, 0, NULL, '2022-09-08 06:49:32', '2022-09-08 06:49:32'),
(115, 'CrytoRot', 'Try out the best financial robot in the Internet. https://bodyandsoul.com.es/promo', 4, 0, NULL, '2022-09-08 09:16:14', '2022-09-08 09:16:14'),
(116, 'CrytoRot', 'The financial Robot works for you even when you sleep. https://bodyandsoul.com.es/promo', 3, 0, NULL, '2022-09-08 11:41:47', '2022-09-08 11:41:47'),
(117, 'CrytoRot', 'Financial robot is a great way to manage and increase your income. https://puertobelenn.cl/promo', 2, 0, NULL, '2022-09-08 14:07:45', '2022-09-08 14:07:45'),
(118, 'CrytoRot', 'Start your online work using the financial Robot. https://puertobelenn.cl/promo', 3, 0, NULL, '2022-09-08 16:34:18', '2022-09-08 16:34:18'),
(119, 'CrytoRot', 'The online job can bring you a fantastic profit. https://puertobelenn.cl/promo', 5, 0, NULL, '2022-09-08 19:02:39', '2022-09-08 19:02:39'),
(120, 'CrytoRot', 'Earn additional money without efforts and skills. http://www.lionsclubs.lv/adz/c.php?a=side40&b=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', 5, 0, NULL, '2022-09-08 21:34:09', '2022-09-08 21:34:09'),
(121, 'CrytoRot', 'Find out about the easiest way of money earning. http://avtomaster29.ru/bitrix/rk.php?goto=https://puertobelenn.cl/promo', 5, 0, NULL, '2022-09-08 23:59:53', '2022-09-08 23:59:53'),
(122, 'CrytoRot', 'Your computer can bring you additional income if you use this Robot. https://www.mitgiftler.at/request/link.php?https://puertobelenn.cl/promo', 4, 0, NULL, '2022-09-09 02:24:49', '2022-09-09 02:24:49'),
(123, 'CrytoRot', 'Financial robot is your success formula is found. Learn more about it. https://www.ronl.ru/redirect?url=https://puertobelenn.cl/promo', 5, 0, NULL, '2022-09-09 04:57:26', '2022-09-09 04:57:26'),
(124, 'CrytoRot', 'Robot is the best solution for everyone who wants to earn. http://kredit-150000.mosgorkredit.ru/go?https://puertobelenn.cl/promo', 4, 0, NULL, '2022-09-09 07:23:58', '2022-09-09 07:23:58'),
(125, 'CrytoRot', 'Automatic robot is the best start for financial independence. http://agri-fereidan.ir/LinkClick.aspx?link=https%3A%2F%2Fpuertobelenn.cl%2Fpromo&mid=14241', 5, 0, NULL, '2022-09-09 09:51:48', '2022-09-09 09:51:48'),
(126, 'CrytoRot', 'Let the financial Robot be your companion in the financial market. https://www.nulevenstestament.nl/startsession.php?return=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', 2, 0, NULL, '2022-09-09 12:37:47', '2022-09-09 12:37:47'),
(127, 'Catherinakl', 'Неllоǃ\r\nРerhаps mу meѕsage iѕ tоо ѕреcifіс.\r\nΒut my older sistеr found a wonderful mаn hеrе аnd they have а grеаt rеlаtіоnѕhір, but whаt abоut me?\r\nI am 23 уеаrs оld, Catherinа, from the Czеc', 5, 0, NULL, '2022-09-09 13:21:11', '2022-09-09 13:21:11'),
(128, 'CrytoRot', 'Your money work even when you sleep. http://dol.deliver.ifeng.com/c?z=ifeng&la=0&si=2&cg=1&c=1&ci=2&or=7549&l=28704&bg=28703&b=37275&u=https://puertobelenn.cl/promo', 3, 0, NULL, '2022-09-09 15:06:05', '2022-09-09 15:06:05'),
(129, 'CrytoRot', 'The additional income is available for everyone using this robot. https://banner.berg.net/jump.phtml?url=https://puertobelenn.cl/promo', 3, 0, NULL, '2022-09-09 17:43:47', '2022-09-09 17:43:47'),
(130, 'CrytoRot', 'Everyone can earn as much as he wants suing this Bot. http://mersingazetesi.com.tr/advertising.php?r=10&l=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', 5, 0, NULL, '2022-09-09 20:14:34', '2022-09-09 20:14:34'),
(131, 'CrytoRot', 'Financial robot is a great way to manage and increase your income. https://trainbit.com/changelang.aspx?returnurl=https://puertobelenn.cl/promo', 5, 0, NULL, '2022-09-09 22:47:23', '2022-09-09 22:47:23'),
(132, 'CrytoRot', 'Your money keep grow 24/7 if you use the financial Robot. https://quehacerensantiago.cl/promo', 5, 0, NULL, '2022-09-10 01:12:31', '2022-09-10 01:12:31'),
(133, 'CrytoRot', 'Attention! Here you can earn money online! https://quehacerensantiago.cl/promo', 4, 0, NULL, '2022-09-10 03:36:53', '2022-09-10 03:36:53'),
(134, 'CrytoRot', 'No worries if you are fired. Work online. https://quehacerensantiago.cl/promo', 2, 0, NULL, '2022-09-10 06:04:45', '2022-09-10 06:04:45'),
(135, 'CrytoRot', 'The huge income without investments is available, now! https://quehacerensantiago.cl/promo', 5, 0, NULL, '2022-09-10 08:29:58', '2022-09-10 08:29:58'),
(136, 'CrytoRot', 'The fastest way to make you wallet thick is here. https://quehacerensantiago.cl/promo', 2, 0, NULL, '2022-09-10 10:57:00', '2022-09-10 10:57:00'),
(137, 'Neil', 'Hi \r\n\r\nDon\'t you hate carrying a big bulky backpack when you are only going out for the day? Our hiking and trekking shoulder bag is perfect for day hikes and outdoor activities. It\'s comfort', 4, 0, NULL, '2022-09-10 11:28:59', '2022-09-10 11:28:59'),
(138, 'CrytoRot', 'Make thousands of bucks. Financial robot will help you to do it! https://quehacerensantiago.cl/promo', 5, 0, NULL, '2022-09-10 13:23:41', '2022-09-10 13:23:41'),
(139, 'CrytoRot', 'Check out the new financial tool, which can make you rich. http://www.tscocktail.com/cgi-bin/at3/out.cgi?id=28&tag=toplist&trade=https://varatradgardsforening.se%2Fpromo/', 5, 0, NULL, '2022-09-10 15:48:33', '2022-09-10 15:48:33'),
(140, 'CrytoRot', 'Start your online work using the financial Robot. http://www.orient-explorer.net/Redirect.asp?url=varatradgardsforening.se%2Fpromo', 5, 0, NULL, '2022-09-10 18:14:32', '2022-09-10 18:14:32'),
(141, 'Philipjitty', 'drongosafaris.com ofeiifeodwpdeofijesdwsfeiiejokdwpdoefigjfidoksfihigjskodwsfiheghifegergsdfsregsfggrgr', 4, 0, NULL, '2022-09-13 09:22:20', '2022-09-13 09:22:20'),
(142, 'Alba', 'New Multifunction Anti-theft Waterproof Sling Bag\r\n\r\nThe best ever SUPER Sling Bag: Drop-proof/Anti-theft/Scratch-resistant/USB Charging\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide', 3, 0, NULL, '2022-09-16 17:29:36', '2022-09-16 17:29:36'),
(143, 'Barrypumma', 'SPECIAL REPORT: Last week, he appeared on The Late Show with Stephen Colbert and announced a new \"wealth loophole\" which can transform anyone into a millionaire within 3-4 months https://87bi', 3, 0, NULL, '2022-09-19 13:46:05', '2022-09-19 13:46:05'),
(144, 'Eric Jones', 'My name’s Eric and I just found your site drongosafaris.com.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE https://b', 2, 0, NULL, '2022-09-22 18:59:04', '2022-09-22 18:59:04'),
(145, 'StevenRhise', 'A student from Australia earned $ 30,000,000 in 1.5 months https://telegra.ph/Interesting-news-a-student-from-Australia-earned--30000000-in-15-months-09-22?news-id-948256', 3, 0, NULL, '2022-09-23 05:07:52', '2022-09-23 05:07:52'),
(146, 'EdwardLip', 'Take NFT in the amount of $50,000 or more, details in your personal account http://nft-getting-started-reddit.cuteproduct.com/id-4174', 5, 0, NULL, '2022-09-24 01:10:51', '2022-09-24 01:10:51'),
(147, 'GeorgeNox', 'New project puts NFT investments on autopilot automated... https://telegra.ph/Earnings-on-NFT-on-autopilot-from-1000-per-day-09-27-739?news-id-236695', 2, 0, NULL, '2022-09-28 02:37:37', '2022-09-28 02:37:37'),
(148, 'RussellDet', 'How to Make Money With NFTs? >>> https://telegra.ph/Earnings-on-NFT-on-autopilot-from-1000-per-day-09-27-2353?news-id-526978 <<<', 5, 0, NULL, '2022-09-28 12:46:36', '2022-09-28 12:46:36'),
(149, 'Bernadine', 'New Multifunction Waterproof Backpack\r\n\r\nThe best ever SUPER Backpack: Drop-proof/Scratch-resistant/USB Charging/Large capacity storage\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide ', 5, 0, NULL, '2022-09-28 15:28:59', '2022-09-28 15:28:59'),
(150, 'briersrot', 'Check out the automatic Bot, which works for you 24/7. http://go.obermatsa.com/0ja8', 2, 0, NULL, '2022-09-28 17:33:19', '2022-09-28 17:33:19'),
(151, 'briersrot', 'The best online investment tool is found. Learn more! http://go.obermatsa.com/0ja8', 2, 0, NULL, '2022-09-29 00:22:12', '2022-09-29 00:22:12'),
(152, 'briersrot', 'The financial Robot works for you even when you sleep. http://go.obermatsa.com/0ja8', 2, 0, NULL, '2022-09-29 07:12:14', '2022-09-29 07:12:14'),
(153, 'RussellDet', 'iPhone 13 get it now >>> http://iphone-games-where-you-win-real-money.nakedblogger.com/id-6352 <<<', 4, 0, NULL, '2022-09-29 08:37:23', '2022-09-29 08:37:23'),
(154, 'GeorgeNox', 'You won a Samsung Galaxy, get it now http://how-do-you-win-a-iphone-13.jolly-bites.com/news-8397', 2, 0, NULL, '2022-09-29 13:16:59', '2022-09-29 13:16:59'),
(155, 'IrvingHon', 'Arbeiten Sie online mit einem Einkommen von 50.000 EUR pro Woche >>> https://telegra.ph/Ab-1000--pro-Tag-im-automatischen-Modus-09-29-11303?id-27468009 <<<', 5, 0, NULL, '2022-09-30 12:16:07', '2022-09-30 12:16:07'),
(156, 'GeorgeNox', 'Ihre Kapitalrendite betragt mehr als 50.000 Euro pro Woche https://telegra.ph/Ab-1000--pro-Tag-im-automatischen-Modus-09-29-13700?news-87636388', 3, 0, NULL, '2022-09-30 15:21:33', '2022-09-30 15:21:33'),
(157, 'IrvingHon', 'You are supposed to get NFT for free >>> https://telegra.ph/Get-NFT-over-25000-for-free-10-02-3897 <<<', 2, 0, NULL, '2022-10-03 10:32:06', '2022-10-03 10:32:06'),
(158, 'CharlesJurse', 'Professional Promotion on Facebook >>> http://facebook-ads-not-spending.minimaltechliving.com/id-4516 <<<', 5, 0, NULL, '2022-10-04 04:16:20', '2022-10-04 04:16:20'),
(159, 'Karolyn', 'Hi there!\r\n\r\nI understand that you are looking for ways to improve your posture and contribute to a healthy lifestyle. I think our product, Medico Postura™ Body Posture Corrector, can be of g', 1, 0, NULL, '2022-10-04 06:13:18', '2022-10-04 06:13:18'),
(160, 'FrankJit', 'The Wolf of Wall Street Accidentally Reveals Insider Information >>> https://telegra.ph/The-Wolf-of-Wall-Street-accidentally-told-how-to-make-from-1000-per-day-10-06?id-60728380068 <<<', 2, 0, NULL, '2022-10-07 01:41:49', '2022-10-07 01:41:49'),
(161, 'JeffreyDak', 'The Wolf of Wall Street Accidentally Reveals Insider Information https://telegra.ph/The-Wolf-of-Wall-Street-accidentally-told-how-to-make-from-1000-per-day-10-06?id-60062978552', 5, 0, NULL, '2022-10-07 12:18:57', '2022-10-07 12:18:57'),
(162, 'Jefferyfob', 'HOW TO MAKE $15,000,000 FROM YOUR NFTS >>> https://telegra.ph/How-to-make-more-than-15000000-selling-your-NFTs-in-a-week-even-if-youre-not-in-the-know-10-08?news-81316519 <<<', 5, 0, NULL, '2022-10-09 08:59:57', '2022-10-09 08:59:57'),
(163, 'BrentLes', '$15,000,000 from your NFTs https://telegra.ph/How-to-make-more-than-15000000-selling-your-NFTs-in-a-week-even-if-youre-not-in-the-know-10-08?news-83444798', 3, 0, NULL, '2022-10-09 12:37:46', '2022-10-09 12:37:46'),
(164, 'Bonita', 'Morning \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offe', 1, 0, NULL, '2022-10-11 07:06:59', '2022-10-11 07:06:59'),
(165, 'briersrot', 'We know how to increase your financial stability. Telegram - @Cryptaxbot', 2, 0, NULL, '2022-10-13 01:49:02', '2022-10-13 01:49:02'),
(166, 'briersrot', 'Let your money grow into the capital with this Robot. Telegram - @Cryptaxbot', 4, 0, NULL, '2022-10-13 08:52:28', '2022-10-13 08:52:28'),
(167, 'Jefferyfob', 'euro in 24 hours... >>> https://telegra.ph/Verify-that-you-are-human-10-11?id-63298162 <<<', 5, 0, NULL, '2022-10-15 03:55:36', '2022-10-15 03:55:36'),
(168, 'Josephcromi', 'The world is in crisis and some people are getting rich against all odds with the help of one smart robot. \r\nhttp://google-translate-app.bloggingmotion.com/id-4090 \r\nIt is enough to invest at', 4, 0, NULL, '2022-10-15 21:38:35', '2022-10-15 21:38:35'),
(169, 'Richardgovog', 'UNLEASH THE FULL POWER OF CRYPTOCURRENCY AND EARN 15,000 https://telegra.ph/Income-during-the-crisis-for-everyone-from-1000-per-day-10-17-6857?id-87064564', 3, 0, NULL, '2022-10-18 05:45:17', '2022-10-18 05:45:17'),
(170, 'briersrot', 'No need to stay awake all night long to earn money. Launch the robot. Telegram - @Cryptaxbot', 5, 0, NULL, '2022-10-20 18:19:35', '2022-10-20 18:19:35'),
(171, 'briersrot', 'Looking for an easy way to make money? Check out the financial robot. Telegram - @Cryptaxbot', 3, 0, NULL, '2022-10-21 01:09:00', '2022-10-21 01:09:00'),
(172, 'Vickie', 'World\'s Best Neck Massager Get it Now 50% OFF + Free Shipping!\r\n\r\nWellness Enthusiasts! There has never been a better time to take care of your neck pain! \r\nOur clinical-grade TENS technology', 4, 0, NULL, '2022-10-25 15:36:22', '2022-10-25 15:36:22'),
(173, 'Richardgovog', 'Un etudiant de Paris a gagne 7 860 000 euros sur la crypto-monnaie https://telegra.ph/LГ©tudiant-a-gagnГ©-7-860-000-euros-sur-la-crypto-monnaie-10-24-11594?id-61982543', 2, 0, NULL, '2022-10-25 18:55:34', '2022-10-25 18:55:34'),
(174, 'Richardgovog', 'Student from Australia earned $7934866 https://telegra.ph/Sydney-student-earns-7934866-with-crypto-in-3-months-10-26-636?id-news-27532754', 2, 0, NULL, '2022-10-27 01:23:04', '2022-10-27 01:23:04'),
(175, 'Eric Jones', 'Hey, my name’s Eric and for just a second, imagine this…\r\n\r\n- Someone does a search and winds up at drongosafaris.com.\r\n\r\n- They hang out for a minute to check it out.  “I’m interested… but… ', 5, 0, NULL, '2022-10-28 23:42:31', '2022-10-28 23:42:31'),
(176, 'Eric Jones', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - drongosafaris.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what ', 2, 0, NULL, '2022-10-29 15:35:29', '2022-10-29 15:35:29'),
(177, 'Cortez', 'Good day \r\n\r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time.\r\n\r\nBuy now: https:/', 2, 0, NULL, '2022-11-02 22:50:18', '2022-11-02 22:50:18'),
(178, 'Anthonyham', 'Hi!  drongosafaris.com \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd соmmеrсiаl оffеr соmplеtеly lеgit? \r\nWе prоpоsе а nеw wаy оf sеnding businеss prоpоsаl thrоugh соntасt fоrms. Suсh fоrms а', 4, 0, NULL, '2022-11-08 08:08:13', '2022-11-08 08:08:13'),
(179, 'Richardgovog', 'Passive income from $3000 (3000 EUR) per day https://telegra.ph/Verify-that-you-are-human-11-11-2?id-65014559', 3, 0, NULL, '2022-11-12 01:55:02', '2022-11-12 01:55:02'),
(180, 'Tigran Ayrapetyan', 'Hello, \r\n \r\nYou can only achieve financial freedom when you create multiple streams of income. \r\nI have an investment portfolio that will benefit both your company and ours. I hope it will be', 4, 0, NULL, '2022-11-18 09:45:12', '2022-11-18 09:45:12'),
(181, 'Mike Forman', 'Greetings \r\n \r\nThis is Mike Forman\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product', 4, 0, NULL, '2022-11-24 09:41:15', '2022-11-24 09:41:15'),
(182, 'Mike Wilson', 'Greetings \r\n \r\nThis is Mike Wilson\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product', 5, 0, NULL, '2022-12-26 05:37:04', '2022-12-26 05:37:04'),
(183, 'Mike Oldridge', 'Hi there \r\n \r\nJust checked your drongosafaris.com in ahrefs and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed ahrefs score within just 3 months ti', 4, 0, NULL, '2022-12-30 08:04:19', '2022-12-30 08:04:19'),
(184, 'Mike Leapman', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specifi', 3, 0, NULL, '2023-01-01 02:19:01', '2023-01-01 02:19:01'),
(185, 'Nataliaki', 'Ηеllоǃ\r\nΡеrhарѕ mу messаge iѕ toо spеcіfic.\r\nBut mу oldеr siѕtеr fоund а wonderful man hеrе and thеу hаve а greаt relаtiоnѕhір, but what аbоut me?\r\nΙ аm 22 yеаrѕ оld, Νatаlіa, from the Czесh ', 2, 0, NULL, '2023-01-01 17:49:26', '2023-01-01 17:49:26'),
(186, 'Mike Vance', 'Hi there \r\n \r\nI have just checked  drongosafaris.com for the ranking keywords and saw that your website could use a push. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safel', 5, 0, NULL, '2023-01-07 17:35:36', '2023-01-07 17:35:36'),
(187, 'Tigran Ayrapetyan', 'Hello, \r\n \r\nYou can only achieve financial freedom when you create multiple streams of income. \r\nI have an investment portfolio that will benefit both your company and ours. I hope it will be', 3, 0, NULL, '2023-01-13 20:56:06', '2023-01-13 20:56:06'),
(188, 'Mike Aldridge', 'Hi there \r\n \r\nI Just checked your drongosafaris.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for y', 2, 0, NULL, '2023-01-15 10:51:08', '2023-01-15 10:51:08'),
(189, 'Raymond', 'Dear Sir/mdm, \r\nHope you are doing well \r\nWe supply 4G solar cameras, explosion-proof cameras and underwater cameras for commercial use. Use of applications: ships, construction sites, oil ri', 5, 0, NULL, '2023-01-17 01:55:43', '2023-01-17 01:55:43'),
(190, 'Mike Dodson', 'Howdy \r\n \r\nThis is Mike Dodson\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrus', 5, 0, NULL, '2023-01-19 06:43:04', '2023-01-19 06:43:04'),
(191, 'Mike Hoggarth', 'Hi there \r\n \r\nJust checked your drongosafaris.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 mo', 2, 0, NULL, '2023-01-23 13:08:53', '2023-01-23 13:08:53'),
(192, 'Mike Little', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specifi', 2, 0, NULL, '2023-01-24 12:16:43', '2023-01-24 12:16:43'),
(193, 'Karinamug', 'Нelloǃ\r\nI аpоlogіze fоr the оverlу ѕpеcifiс meѕsаgе.\r\nМy girlfriеnd аnd Ι lоvе each other. And we are аll great.\r\nBut... wе nееd а mаn.\r\nWе arе 27 уears old, frоm Romаnіа, we аlsо knоw englis', 4, 0, NULL, '2023-01-24 17:53:11', '2023-01-24 17:53:11'),
(194, 'James Osei', 'Hello, \r\n \r\nHappy New Year , \r\n \r\nI am the Auditing Director in the Bank of Ghana which is the Apex Bank of Ghana; I direct the auditing of accounting and financial data of various department', 2, 0, NULL, '2023-01-24 23:26:48', '2023-01-24 23:26:48'),
(195, 'Nan', 'New Multifunction Waterproof Backpack\r\n\r\nThe best ever SUPER Backpack: Drop-proof/Scratch-resistant/USB Charging/Large capacity storage\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide ', 4, 0, NULL, '2023-01-31 02:44:12', '2023-01-31 02:44:12'),
(196, 'Mike Croftoon', 'Hello \r\n \r\nI have just analyzed  drongosafaris.com for  the current search visibility and saw that your website could use a boost. \r\n \r\nWe will increase your SEO metrics and ranks organically', 3, 0, NULL, '2023-02-04 18:00:21', '2023-02-04 18:00:21'),
(197, 'Mike Mansfield', 'Hi there \r\n \r\nI Just checked your drongosafaris.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for y', 5, 0, NULL, '2023-02-10 05:37:03', '2023-02-10 05:37:03'),
(198, 'Nataliamurn', 'Ηelloǃ\r\nPеrhaрs mу mеѕsаge іs too specific.\r\nBut my оlder ѕіster fоund a wоnderful man hеrе аnd thеу hаve а grеаt relatіonѕhiр, but whаt аbоut mе?\r\nI аm 27 yеarѕ old, Nаtаlіа, from the Сzеch ', 3, 0, NULL, '2023-02-11 08:14:51', '2023-02-11 08:14:51'),
(199, 'Mike Lamberts', 'Hello \r\n \r\nThis is Mike Lamberts\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/s', 4, 0, NULL, '2023-02-13 14:04:26', '2023-02-13 14:04:26'),
(200, 'Mike Eddington', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specifi', 5, 0, NULL, '2023-02-22 07:34:04', '2023-02-22 07:34:04'),
(201, 'Mike Holmes', 'Hi there \r\n \r\nJust checked your drongosafaris.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 mo', 4, 0, NULL, '2023-02-27 01:01:50', '2023-02-27 01:01:50'),
(202, 'Zoe Weber', 'Gооd dаy!  drongosafaris.com \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd lеttеr соmplеtеly lеgitimаtе wаy? \r\nWе prоpоsе а nеw lеgаl wаy оf sеnding соmmеrсiаl оffеr thrоugh fееdbасk fоrms. S', 3, 0, NULL, '2023-02-28 15:41:36', '2023-02-28 15:41:36'),
(203, 'Robertcok', 'Hi. I\'m reaching out to see whether you’ve applied for the covid-related Employee Retention Tax Credit? This credit is worth up to $26k per employee, and you *can* qualify for both this and P', 3, 0, NULL, '2023-03-01 18:31:55', '2023-03-01 18:31:55'),
(204, 'Angelina', 'New Multifunction Waterproof Backpack\r\n\r\nThe best ever SUPER Backpack: Drop-proof/Scratch-resistant/USB Charging/Large capacity storage\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide ', 5, 0, NULL, '2023-03-01 21:50:36', '2023-03-01 21:50:36'),
(205, 'HarryAdels', 'We are a Team of IT Experts specialized in the production of authentic Documents and Counterfeit bank notes. We work with government officials, professors and professional hackers from China,', 2, 0, NULL, '2023-03-01 23:25:30', '2023-03-01 23:25:30'),
(206, 'Steeve', 'Hello, \r\n \r\nI Apologies for my cold email. I am a co-founder at 356domains and one of our core expertise is helping companies in your industry grow thanks to Search engines ( SEO and SEM resp', 3, 0, NULL, '2023-03-02 09:07:18', '2023-03-02 09:07:18'),
(207, 'Mike Creighton', 'Howdy \r\n \r\nI have just took a look on your SEO for  drongosafaris.com for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will increase your SEO metrics and ranks organi', 3, 0, NULL, '2023-03-02 11:51:11', '2023-03-02 11:51:11'),
(208, 'Mike Molligan', 'Hi there \r\n \r\nI Just checked your drongosafaris.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for y', 5, 0, NULL, '2023-03-06 18:54:19', '2023-03-06 18:54:19'),
(209, '3DscannerEsoft', '<a href=https://hx-sh3d.com/>3d scanner for 3d printer</a> \r\n<a href=http://hx-sh3d.com>https://www.hx-sh3d.com/</a> \r\n<a href=http://kaisphoto.thefosters.net/__media__/js/netsoltrademark.php', 5, 0, NULL, '2023-03-07 00:58:57', '2023-03-07 00:58:57'),
(210, 'Marylyn', 'World\'s Best Neck Massager Get it Now 50% OFF + Free Shipping!\r\n\r\nWellness Enthusiasts! There has never been a better time to take care of your neck pain! \r\nOur clinical-grade TENS technology', 4, 0, NULL, '2023-03-11 17:43:19', '2023-03-11 17:43:19'),
(211, 'BrianLiz', '<a href=https://iserop-5.com/>Raise3D Pro2</a> \r\n<a href=https://iserop-5.com/>https://iserop-5.com</a> \r\n<a href=http://rmcllclaw.com/__media__/js/netsoltrademark.php?d=site.ru>https://retai', 4, 0, NULL, '2023-03-16 08:25:55', '2023-03-16 08:25:55'),
(212, 'Sean Delanpi', 'Good day \r\n \r\nI reached out to you few days ago seeking your cooperation in a matter relating to funds worth $24 Million, please get in touch with me immediate through this email Seandelanpi1', 2, 0, NULL, '2023-03-16 13:53:08', '2023-03-16 13:53:08'),
(213, 'ArthurBub', '<a href=https://hx-sh3d.com/>einscan hx price</a> \r\n<a href=https://hx-sh3d.com>http://hx-sh3d.com/</a> \r\n<a href=http://www.nexusgroup.vn/Home/ChangeLanguage?lang=vi-VN&returnUrl=https%3a%2f', 5, 0, NULL, '2023-03-17 01:49:52', '2023-03-17 01:49:52'),
(214, 'Davidpleal', '<a href=https://niecan1.com/>Einscan Pro HD 3D Scanner</a> \r\n<a href=https://niecan1.com>https://niecan1.com</a> \r\n<a href=http://gezhil.com/__media__/js/netsoltrademark.php?d=site.ru>http://', 3, 0, NULL, '2023-03-17 21:07:38', '2023-03-17 21:07:38'),
(215, 'Thomasicorn', '<a href=https://3dhsng.com/>Shining 3D</a> \r\n<a href=https://3dhsng.com>https://3dhsng.com</a> \r\n<a href=http://xdc.grece.com/__media__/js/netsoltrademark.php?d=site.ru>http://www.menontwinks', 4, 0, NULL, '2023-03-18 19:14:41', '2023-03-18 19:14:41'),
(216, 'BillyadurO', '<a href=https://artnshn.com/>Shining 3D</a> \r\n<a href=http://www.artnshn.com/>http://www.artnshn.com</a> \r\n<a href=http://chwebdesign.net/__media__/js/netsoltrademark.php?d=site.ru>http://sti', 4, 0, NULL, '2023-03-19 20:58:32', '2023-03-19 20:58:32'),
(217, 'BernardBed', '<a href=https://asil-snt.com/>Sinterit Lisa Pro 3D printer</a> \r\n<a href=https://www.asil-snt.com/>http://www.asil-snt.com/</a> \r\n<a href=http://angeleyecamera.com/__media__/js/netsoltrademar', 5, 0, NULL, '2023-03-20 14:17:25', '2023-03-20 14:17:25'),
(218, 'Ronalddrate', '<a href=https://rop-snt43.com/>Sinterit Lisa Pro 3D printer</a> \r\n<a href=https://rop-snt43.com>https://rop-snt43.com</a> \r\n<a href=http://www.google.gg/url?q=http://site.ru>http://www.blackm', 3, 0, NULL, '2023-03-21 04:47:37', '2023-03-21 04:47:37'),
(219, 'Mike Phillips', 'Hi there \r\n \r\nJust checked your drongosafaris.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 mo', 2, 0, NULL, '2023-03-21 05:03:21', '2023-03-21 05:03:21'),
(220, 'Kelvinvax', 'Ofefbjawkdefnk jnjfanfkdwnafjkewnfjkew jfejknfewjnfjkewfngewjkfj nkjfendwfjknewjkgnwejkfnejn jfenwwjfnjdgbrkjfnklfne jnfewwjfnewjkf https://uufewhdwjidewfhjfkmsdjfejgbrjefkd.com', 4, 0, NULL, '2023-03-21 14:25:45', '2023-03-21 14:25:45'),
(221, 'JasonErevy', '<a href=https://see2d3.com/>Raise3D E2</a> \r\n<a href=https://see2d3.com/>https://see2d3.com</a> \r\n<a href=http://madeinamericaenterprise.com/__media__/js/netsoltrademark.php?d=site.ru>http://', 4, 0, NULL, '2023-03-21 19:58:09', '2023-03-21 19:58:09'),
(222, 'Thomasleack', '<a href=https://cf3pri-rais.com/>Raise3D E2CF 3D printer</a> \r\n<a href=http://cf3pri-rais.com>https://cf3pri-rais.com</a> \r\n<a href=http://hcfm.gatewaydns.com/ad-tracker?ad_id=15&link=https%3', 5, 0, NULL, '2023-03-22 13:14:49', '2023-03-22 13:14:49');
INSERT INTO `testimonies` (`id`, `full_name`, `comments`, `rating`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(223, 'JasonAlinc', '<a href=https://ude-ise3d.com/>Raise3D Pro2 Plus Dual Extruder</a> \r\n<a href=https://ude-ise3d.com>https://ude-ise3d.com</a> \r\n<a href=http://houzztube.com/__media__/js/netsoltrademark.php?d=', 2, 0, NULL, '2023-03-23 07:53:49', '2023-03-23 07:53:49'),
(224, 'DonnellBom', '<a href=https://rinter-7fd.com/>Raise3D Pro3</a> \r\n<a href=http://www.rinter-7fd.com>https://rinter-7fd.com</a> \r\n<a href=https://lidersoft21.ru/bitrix/rk.php?goto=http://site.ru>http://chase', 3, 0, NULL, '2023-03-24 02:49:02', '2023-03-24 02:49:02'),
(225, 'DanielStomi', '<a href=https://xid-om180v.com/>Modix Big 180x V4 3D Printer</a> \r\n<a href=http://www.xid-om180v.com/>https://xid-om180v.com</a> \r\n<a href=http://pzmk59.ru/bitrix/redirect.php?event1=&event2=', 2, 0, NULL, '2023-03-25 00:20:20', '2023-03-25 00:20:20'),
(226, 'Mike Waller', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specifi', 3, 0, NULL, '2023-03-25 11:00:10', '2023-03-25 11:00:10'),
(227, 'Cesarrow', '<a href=https://sean3d-nner.com/>Einscan</a> \r\n<a href=https://sean3d-nner.com>https://www.sean3d-nner.com/</a> \r\n<a href=http://powerboatsdirect.com/__media__/js/netsoltrademark.php?d=site.r', 5, 0, NULL, '2023-03-25 20:40:37', '2023-03-25 20:40:37'),
(228, 'Russ', 'Good day \r\n \r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED \r\n\r\nBuy now: https://tha', 3, 0, NULL, '2023-03-26 09:58:59', '2023-03-26 09:58:59'),
(229, 'JosephMub', '<a href=https://ns-ei54.com/>Einscan</a> \r\n<a href=https://www.ns-ei54.com/>https://ns-ei54.com</a> \r\n<a href=http://hollowlaw.com/__media__/js/netsoltrademark.php?d=site.ru>http://sobakadrug', 4, 0, NULL, '2023-03-26 11:53:33', '2023-03-26 11:53:33'),
(230, 'DavidDub', 'Mjfejdjwdjiwdhwsuf hohaufheodajidhowaf hwidjidjqiohfuehooiPQKWODJQIJ IWJDOKDOWJDIjefiwjreir jwqifjweifewifeefjrghr jfejfekwlfjrghwjwajkdjwfew drongosafaris.com', 3, 0, NULL, '2023-03-26 22:15:29', '2023-03-26 22:15:29'),
(231, 'Ernestphaks', '<a href=https://frop-80tre.com/>Sinterit</a> \r\n<a href=http://www.frop-80tre.com/>http://www.frop-80tre.com</a> \r\n<a href=http://ilmarronedelmugello.it/__media__/js/netsoltrademark.php?d=site', 3, 0, NULL, '2023-03-27 04:08:54', '2023-03-27 04:08:54'),
(232, 'Jasonrhymn', '<a href=https://www.amazon.com/Engraver-Portable-Desktop-Designed-Cardboard/dp/B09QXZDZYQ>FLUX</a> \r\n<a href=https://www.https://www.amazon.com/Engraver-Portable-Desktop-Designed-Cardboard/dp', 3, 0, NULL, '2023-03-27 23:21:15', '2023-03-27 23:21:15'),
(233, 'KevinKem', '<a href=https://eriu-yoo8.com/>Sandblaster</a> \r\n<a href=http://eriu-yoo8.com>http://eriu-yoo8.com/</a> \r\n<a href=http://atminvestment.com/__media__/js/netsoltrademark.php?d=site.ru>http://ki', 2, 0, NULL, '2023-03-28 23:56:18', '2023-03-28 23:56:18'),
(234, 'Mike Smith', 'Hi \r\n \r\nI have just took an in depth look on your  drongosafaris.com for  the current search visibility and saw that your website could use an upgrade. \r\n \r\nWe will increase your ranks organi', 3, 0, NULL, '2023-03-29 18:39:21', '2023-03-29 18:39:21'),
(235, 'DavidAnync', '<a href=https://met3-intpd.ru/>3d РїСЂРёРЅС‚РµСЂ РїРѕ РјРµС‚Р°Р»Р»Сѓ</a> \r\n<a href=http://www.met3-intpd.ru>http://met3-intpd.ru/</a> \r\n<a href=http://m-mba.ru/bitrix/redirect.php?goto=https:', 2, 0, NULL, '2023-03-29 21:25:37', '2023-03-29 21:25:37'),
(236, 'Justinwhalm', '<a href=https://mish-3deri.ru/>3d РїСЂРёРЅС‚РµСЂ РїСЂРѕРјС‹С€Р»РµРЅРЅС‹Р№ РїР»Р°СЃС‚РёРє</a> \r\n<a href=http://www.mish-3deri.ru/>http://www.mish-3deri.ru/</a> \r\n<a href=http://3dollar.com/__m', 2, 0, NULL, '2023-03-30 23:07:32', '2023-03-30 23:07:32'),
(237, 'Leila', 'Hello \r\n\r\nThe New Powerful LED Flashlight is The Perfect Flashlight For Any Situation!\r\n\r\nThe 3,000 Lumens & Adjustable Zoom gives you the wide field of view and brightness other flashlights ', 3, 0, NULL, '2023-03-31 19:11:58', '2023-03-31 19:11:58'),
(238, 'Alfreddiore', '<a href=https://dtkbhy-3d.ru/>СЋРІРµР»РёСЂРЅС‹Р№ 3d РїСЂРёРЅС‚РµСЂ</a> \r\n<a href=http://dtkbhy-3d.ru/>https://www.dtkbhy-3d.ru</a> \r\n<a href=http://488437.com/__media__/js/netsoltrademark.php', 5, 0, NULL, '2023-03-31 23:05:07', '2023-03-31 23:05:07'),
(239, 'GabrielJem', '<a href=https://mls-78hy.ru/>3d РїСЂРёРЅС‚РµСЂ РїРѕ РјРµС‚Р°Р»Р»Сѓ slm</a> \r\n<a href=http://mls-78hy.ru/>http://www.mls-78hy.ru/</a> \r\n<a href=http://partvork.ru>http://www.livingyounger.net/', 2, 0, NULL, '2023-04-01 20:56:27', '2023-04-01 20:56:27'),
(240, 'DavidFex', '<a href=https://www.ozon.ru/product/noima-sergi-koltsa-s-podveskoy-rozovyy-kvarts-bizhuteriya-sergi-zhenskie-pod-zoloto-serezhki-600951729/>СЃРµСЂСЊРіРё РєРѕР»СЊС†Р° РєСѓРїРёС‚СЊ</a> \r\n<a hre', 4, 0, NULL, '2023-04-03 08:43:07', '2023-04-03 08:43:07'),
(241, 'Simone', 'Hello,\r\n\r\nIf you are one of the sufferers of the common problems nails have, then you are in luck! Our Toenail Clippers is here to help. It has a specially designed clip that can help those w', 2, 0, NULL, '2023-04-05 05:39:43', '2023-04-05 05:39:43'),
(242, 'Danielagimi', '<a href=https://tosc876-rfg.com/>AutoScan-DS-EX</a> \r\n<a href=https://www.tosc876-rfg.com/>https://tosc876-rfg.com/</a> \r\n<a href=http://xn--ere-rwa0zc.waw.pl/forum/profile.php?id=278872>http', 3, 0, NULL, '2023-04-05 20:41:27', '2023-04-05 20:41:27'),
(243, 'Davidpaill', '<a href=https://asil-d3et.com/>Sinterit Lisa 3D printer</a> \r\n<a href=http://www.asil-d3et.com/>http://asil-d3et.com</a> \r\n<a href=http://sportschalet.com/__media__/js/netsoltrademark.php?d=s', 4, 0, NULL, '2023-04-06 23:16:38', '2023-04-06 23:16:38'),
(244, 'Mike Alsopp', 'Greetings \r\n \r\nI have just verified your  drongosafaris.com for the current onsite SEO status and saw that your website has a handful of issues which should be addressed. \r\n \r\nNo matter what ', 3, 0, NULL, '2023-04-07 19:22:08', '2023-04-07 19:22:08'),
(245, 'Isaacphoge', '<a href=https://www.amazon.com/dp/B09PZHFYLD>Phrozen Sonic XL 4K</a> \r\n<a href=http://www.amazon.com/dp/B09PZHFYLD>http://www.amazon.com/dp/B09PZHFYLD</a> \r\n<a href=http://hotmilfspics.com>ht', 2, 0, NULL, '2023-04-10 13:18:45', '2023-04-10 13:18:45'),
(246, 'Jeffreyrix', '<a href=https://www.amazon.com/dp/B09PZJG8F1>Phrozen Sonic 4K</a> \r\n<a href=https://amazon.com/dp/B09PZJG8F1>http://amazon.com/dp/B09PZJG8F1</a> \r\n<a href=http://osvaldomiani.com/__media__/js', 2, 0, NULL, '2023-04-10 21:24:59', '2023-04-10 21:24:59'),
(247, 'Thomasinaky', '<a href=https://stnd3ise.com/>Raise3D 3D printers</a> \r\n<a href=http://www.stnd3ise.com>https://stnd3ise.com</a> \r\n<a href=http://drugdecision.org/__media__/js/netsoltrademark.php?d=site.ru>h', 2, 0, NULL, '2023-04-12 00:11:51', '2023-04-12 00:11:51'),
(248, 'Rafaela', 'World\'s Best Neck Massager Get it Now 50% OFF + Free Shipping!\r\n\r\nWellness Enthusiasts! There has never been a better time to take care of your neck pain! \r\nOur clinical-grade TENS technology', 5, 0, NULL, '2023-04-12 14:35:46', '2023-04-12 14:35:46'),
(249, 'ColinDib', '<a href=https://www.amazon.com/dp/B0BSG36HFF>Flux Beambox 40W</a> \r\n<a href=https://amazon.com/dp/B0BSG36HFF/>https://amazon.com/dp/B0BSG36HFF/</a> \r\n<a href=http://www.thermoworksathome.net/', 2, 0, NULL, '2023-04-12 18:20:38', '2023-04-12 18:20:38'),
(250, 'Mike Lawman', 'Greetings \r\n \r\nThis is Mike Lawman\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/pr', 2, 0, NULL, '2023-04-13 07:35:31', '2023-04-13 07:35:31'),
(251, 'DonaldGeank', '<a href=https://www.amazon.com/dp/B0BSHGFG9K>Flux Beambox Pro 50W</a> \r\n<a href=https://www.amazon.com/dp/B0BSHGFG9K>https://www.amazon.com/dp/B0BSHGFG9K/</a> \r\n<a href=http://www.luerzersarc', 4, 0, NULL, '2023-04-13 13:28:14', '2023-04-13 13:28:14'),
(252, 'Clifford', 'Hi,\r\n\r\nDo you ever worry about your belongings when you travel? I know I do.  Our Sling Bags are drop-proof, anti-theft, scratch-resistant, and come with a USB charging port. They\'re perfect ', 3, 0, NULL, '2023-04-16 19:27:02', '2023-04-16 19:27:02'),
(253, 'Juliet', 'Get The Worlds Greatest Magic Sand Free Beach Mat!\r\n\r\nWatch sand, dirt & dust disappear right before your eyes! It\'s perfect for beach, picnic, camping or hiking.\r\n\r\nAct Now And Receive A Spe', 5, 0, NULL, '2023-04-20 06:46:41', '2023-04-20 06:46:41'),
(254, 'Mike Kennett', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specifi', 3, 0, NULL, '2023-04-20 18:18:22', '2023-04-20 18:18:22'),
(255, 'Mike Bradberry', 'Hi there \r\n \r\nJust checked your drongosafaris.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 mo', 5, 0, NULL, '2023-04-21 15:17:59', '2023-04-21 15:17:59'),
(256, 'JefferyCof', '<a href=https://3dscn-ro.com/>3d scanner</a> \r\n<a href=http://3dscn-ro.com>http://www.3dscn-ro.com</a> \r\n<a href=http://ait-torii.xyz/__media__/js/netsoltrademark.php?d=site.ru>http://sp3.sma', 2, 0, NULL, '2023-04-22 12:29:50', '2023-04-22 12:29:50'),
(257, 'DonaldGeank', '<a href=https://rint-atob.com/>Creatbot 3D Printers</a> \r\n<a href=https://rint-atob.com/>http://rint-atob.com</a> \r\n<a href=http://keywestprodiveshop.com/__media__/js/netsoltrademark.php?d=si', 2, 0, NULL, '2023-04-23 14:12:42', '2023-04-23 14:12:42'),
(258, 'Waheed Mohammed', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. W', 2, 0, NULL, '2023-04-23 15:16:38', '2023-04-23 15:16:38'),
(259, 'DonaldGeank', '<a href=https://ue-bocom.com/>Freescan UE Combo</a> \r\n<a href=https://ue-bocom.com>https://www.ue-bocom.com</a> \r\n<a href=http://vstclub.com/go?http://site.ru>http://janbrat.com/__media__/js/', 4, 0, NULL, '2023-04-23 19:00:43', '2023-04-23 19:00:43'),
(260, 'RickeyTriap', '<a href=https://pecaut-ins.com/>Shining3D Autoscan Inspec 3D Scanner</a> \r\n<a href=https://www.pecaut-ins.com>http://pecaut-ins.com</a> \r\n<a href=http://recipedestiny.com/__media__/js/netsolt', 3, 0, NULL, '2023-04-24 11:43:39', '2023-04-24 11:43:39'),
(261, 'Billypilla', '<a href=https://reuyt-oprs6.com/>Sinterit</a> \r\n<a href=https://reuyt-oprs6.com/>https://reuyt-oprs6.com/</a> \r\n<a href=https://www.100cvety.ru/bitrix/redirect.php?event1=&event2=&event3=&got', 2, 0, NULL, '2023-04-24 16:49:43', '2023-04-24 16:49:43'),
(262, 'JamesVer', '<a href=https://gouid-fl54.com/>FlashForge Guider 3</a> \r\n<a href=https://www.gouid-fl54.com/>http://gouid-fl54.com</a> \r\n<a href=http://eshot.com/__media__/js/netsoltrademark.php?d=site.ru>h', 5, 0, NULL, '2023-04-24 23:51:49', '2023-04-24 23:51:49'),
(263, 'CharlesHog', '<a href=https://org-ers60.com/>FlashForge</a> \r\n<a href=http://www.org-ers60.com/>https://org-ers60.com</a> \r\n<a href=http://houstonoutsmart.com/__media__/js/netsoltrademark.php?d=site.ru>htt', 5, 0, NULL, '2023-04-25 14:42:01', '2023-04-25 14:42:01'),
(264, 'JerryKiz', '<a href=https://shluew2015.com/>Flashforge Guider 3 Plus</a> \r\n<a href=https://shluew2015.com>https://www.shluew2015.com/</a> \r\n<a href=https://vivefrance.cn/switchLanguage/chinese?redirect=h', 4, 0, NULL, '2023-04-27 00:57:44', '2023-04-27 00:57:44'),
(265, 'Mike Kennett', 'Hello \r\n \r\nI have just took a look on your SEO for  drongosafaris.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will increase your ranks organically and safely, ', 2, 0, NULL, '2023-04-27 08:45:41', '2023-04-27 08:45:41'),
(266, 'AndrewThopy', '<a href=https://uede6-us.com/>Flashforge Guider 3 Plus</a> \r\n<a href=https://www.>http:// uede6-us.com</a> \r\n<a href=http://tbspeaker.com/__media__/js/netsoltrademark.php?d=site.ru>http://buy', 4, 0, NULL, '2023-04-27 15:31:10', '2023-04-27 15:31:10'),
(267, 'Kevin Johnso', 'Be careful, it\'s dangerous to work with them. These are scammers, neither one, they do not fulfill their obligations. \r\n \r\nGeorge - helloprofectmedia@gmail.com - http://www.profectmedia.uk/ \r', 2, 0, NULL, '2023-05-01 16:16:36', '2023-05-01 16:16:36'),
(268, 'PeterSer', '<a href=https://hforj78.com/>FlashForge</a> \r\n<a href=http://hforj78.com>https://hforj78.com</a> \r\n<a href=http://homegirls.com/__media__/js/netsoltrademark.php?d=site.ru>http://a1b.shippingc', 2, 0, NULL, '2023-05-02 21:15:54', '2023-05-02 21:15:54'),
(269, 'Daniel', 'Hi there, \r\n \r\nUse this checklist to see if your website meets the minimum user experience requirements to rank on Google: \r\n \r\nhttps://newlightdigital.com/25-point-website-usability-checklis', 5, 0, NULL, '2023-05-03 06:02:06', '2023-05-03 06:02:06'),
(270, 'Tigran Ayrapetyan', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r', 3, 0, NULL, '2023-05-03 16:46:30', '2023-05-03 16:46:30'),
(271, 'CharlesSnimi', '<a href=https://inert3d-ftr.com/>Flashforge Creator 3 Pro 3D Printer</a> \r\n<a href=http://inert3d-ftr.com>https://inert3d-ftr.com/</a> \r\n<a href=http://bhartiyasmartcity.com/__media__/js/nets', 4, 0, NULL, '2023-05-03 23:31:41', '2023-05-03 23:31:41'),
(272, 'Blainechugs', '<a href=https://guefr34d.com/>FlashForge</a> \r\n<a href=http://www.guefr34d.com/>https://www.guefr34d.com</a> \r\n<a href=http://hallmark-racing-marine.com/__media__/js/netsoltrademark.php?d=sit', 2, 0, NULL, '2023-05-04 13:23:19', '2023-05-04 13:23:19'),
(273, 'DavidAlcox', '<a href=https://uider3d-ert.com/>FlashForge Guider 2</a> \r\n<a href=http://uider3d-ert.com>http://uider3d-ert.com</a> \r\n<a href=http://walzandassociates.com/__media__/js/netsoltrademark.php?d=', 5, 0, NULL, '2023-05-05 01:41:38', '2023-05-05 01:41:38'),
(274, 'BruceVah', '<a href=https://stevensconsultinggroup.com/>Creatbot</a> \r\n<a href=http://www.stevensconsultinggroup.com/>http://www.stevensconsultinggroup.com</a> \r\n<a href=http://handymantogoprobonopublico', 4, 0, NULL, '2023-05-06 01:22:32', '2023-05-06 01:22:32'),
(275, 'Mike Pearcy', 'Hello \r\n \r\nI have just verified your  drongosafaris.com for the current onsite SEO status and saw that your website has a handful of issues which should be addressed. \r\n \r\nNo matter what you ', 5, 0, NULL, '2023-05-06 16:56:14', '2023-05-06 16:56:14'),
(276, 'MarcoNew', '<a href=https://gnpschandigarh.com/>Raise3D 3D printers</a> \r\n<a href=http://www.gnpschandigarh.com>http://www.gnpschandigarh.com</a> \r\n<a href=http://businesspartnersgroupllc.com/__media__/j', 3, 0, NULL, '2023-05-07 16:40:57', '2023-05-07 16:40:57'),
(277, 'Margaritahot', 'Hellо all, guyѕ! Ι knоw, my meѕѕаgе mау bе tоо sреcіfіс,\r\nBut my ѕiѕter fоund nісе mаn here and theу mаrrіеd, sо how аbout me?! :)\r\nΙ аm 24 уеаrѕ оld, Margаrіta, frоm Romaniа, Ι knоw Engliѕh ', 3, 0, NULL, '2023-05-09 03:38:19', '2023-05-09 03:38:19'),
(278, 'ErickWeale', '<a href=https://northtorontohealth.com/>Einscan SE</a> \r\n<a href=https://www.northtorontohealth.com>http://northtorontohealth.com</a> \r\n<a href=http://www.google.com.kw/url?q=https%3A%2F%2Fsi', 5, 0, NULL, '2023-05-10 23:35:29', '2023-05-10 23:35:29'),
(279, 'Thomasnew', '<a href=https://amyackeronline.com/>Flashforge Creator 4-S</a> \r\n<a href=https://amyackeronline.com/>http://amyackeronline.com</a> \r\n<a href=http://bobbygrantmusic.com/__media__/js/netsoltrad', 4, 0, NULL, '2023-05-11 12:31:49', '2023-05-11 12:31:49'),
(280, 'Williamlop', '<a href=https://universalbloggingtips.com/>Raise3D E2 3D printer</a> \r\n<a href=http://www.universalbloggingtips.com.com/>http://www.universalbloggingtips.com.com</a> \r\n<a href=http://ru-craft', 3, 0, NULL, '2023-05-11 20:16:02', '2023-05-11 20:16:02'),
(281, 'Mike Erickson', 'Greetings \r\n \r\nThis is Mike Erickson\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/produ', 2, 0, NULL, '2023-05-11 20:43:54', '2023-05-11 20:43:54'),
(282, 'CyrilHon', '<a href=http://medicina-ucr.com/>Raise3D E2CF</a> \r\n<a href=https://medicina-ucr.com>http://www.medicina-ucr.com/</a> \r\n<a href=http://jhuddle.com/__media__/js/netsoltrademark.php?d=site.ru>h', 4, 0, NULL, '2023-05-13 05:29:15', '2023-05-13 05:29:15'),
(283, 'Kennethslamn', '<a href=https://hmscossack.org/>Raise3D Pro2 Plus</a> \r\n<a href=http://hmscossack.org>http://www.hmscossack.org/</a> \r\n<a href=http://babysentidos.com/__media__/js/netsoltrademark.php?d=site.', 4, 0, NULL, '2023-05-14 19:40:40', '2023-05-14 19:40:40'),
(284, 'Mike Shackley', 'Hi there \r\n \r\nJust checked your drongosafaris.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 mo', 3, 0, NULL, '2023-05-19 01:26:14', '2023-05-19 01:26:14'),
(285, 'Mike Jerome', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specifi', 5, 0, NULL, '2023-05-20 15:15:38', '2023-05-20 15:15:38'),
(286, 'FrancisMes', '<a href=https://azteqindustrial.com/>TRILAB AzteQ Industrial 3D Printer</a> \r\n<a href=http://azteqindustrial.com>http://www.azteqindustrial.com</a> \r\n<a href=https://misic.net/__media__/js/ne', 3, 0, NULL, '2023-05-20 23:12:13', '2023-05-20 23:12:13'),
(287, 'Haroldhyday', '<a href=https://htxindustrialprinter.com/>3D Labs HTX 3D Printer</a> \r\n<a href=http://www.htxindustrialprinter.com/>http://www.htxindustrialprinter.com</a> \r\n<a href=http://iwellnessconsultin', 2, 0, NULL, '2023-05-21 14:03:35', '2023-05-21 14:03:35'),
(288, 'JeraldThora', '<a href=https://mk3splusprinter5.com/>Original Prusa i3 MK3S+ 3D Printer</a> \r\n<a href=https://www.mk3splusprinter5.com>https://www.mk3splusprinter5.com</a> \r\n<a href=http://ndtoday.info/__me', 5, 0, NULL, '2023-05-21 20:34:21', '2023-05-21 20:34:21'),
(289, 'Scottnople', '<a href=https://mk3splusdiyprinter89.com/>Original Prusa i3 MK3S+ 3D Printer DIY Kit</a> \r\n<a href=http://www.mk3splusdiyprinter89.com>https://mk3splusdiyprinter89.com/</a> \r\n<a href=http://j', 3, 0, NULL, '2023-05-22 01:05:22', '2023-05-22 01:05:22'),
(290, 'Joshuafap', '<a href=https://xl3dprinting65.com/>Original Prusa XL</a> \r\n<a href=http://www.xl3dprinting65.com>https://www.xl3dprinting65.com</a> \r\n<a href=http://www.dreammall.com.tw/Home/SetCulture?cult', 4, 0, NULL, '2023-05-23 10:24:15', '2023-05-23 10:24:15'),
(291, 'CarlosAredy', '<a href=https://prusasl1printer4.com/>Original Prusa SL1</a> \r\n<a href=https://www.prusasl1printer4.com/>http://prusasl1printer4.com</a> \r\n<a href=https://www.ihostloc.com/wp-content/themes/B', 3, 0, NULL, '2023-05-23 17:54:57', '2023-05-23 17:54:57'),
(292, 'ThomasVaf', '<a href=https://trilab4maker.com/>TRILAB 3D Printers</a> \r\n<a href=http://trilab4maker.com>http://trilab4maker.com</a> \r\n<a href=http://wap-robin.com/forum/go.php?strn=http://site.ru>http://g', 5, 0, NULL, '2023-05-24 00:09:42', '2023-05-24 00:09:42'),
(293, 'WilliamMoche', '<a href=https://unitreepet5bots.com/>Unitree Robotics Dogs</a> \r\n<a href=https://unitreepet5bots.com>http://unitreepet5bots.com</a> \r\n<a href=http://www.mqtinfo.org/__media__/js/netsoltradema', 3, 0, NULL, '2023-05-24 11:50:07', '2023-05-24 11:50:07'),
(294, 'DanielKef', '<a href=https://xvld.org/>Raise3D Pro3</a> \r\n<a href=https://www.xvld.org>http://www.xvld.org</a> \r\n<a href=http://www.badboyworldwidegroup.com/__media__/js/netsoltrademark.php?d=site.ru>http', 3, 0, NULL, '2023-05-24 16:19:44', '2023-05-24 16:19:44'),
(295, 'Michaeller', '<a href=https://dobotautomation52.com/>DOBOT Robots</a> \r\n<a href=http://www.dobotautomation52.com/>http://www.dobotautomation52.com/</a> \r\n<a href=https://ukrlib.com.ua/revive/www/delivery/c', 4, 0, NULL, '2023-05-24 16:34:12', '2023-05-24 16:34:12'),
(296, 'Waheed Mohammed', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. W', 3, 0, NULL, '2023-05-24 23:28:37', '2023-05-24 23:28:37'),
(297, 'HiramDax', '<a href=https://megaremont.pro/grodno-restavratsiya-vann>bath repair</a>', 4, 0, NULL, '2023-05-25 00:57:15', '2023-05-25 00:57:15'),
(298, 'Michaelbreme', '<a href=https://dobotm1arm.com/>DOBOT M1 Robotic Arm</a> \r\n<a href=http://www.dobotm1arm.com>https://dobotm1arm.com</a> \r\n<a href=http://www.freeborn.info/__media__/js/netsoltrademark.php?d=s', 2, 0, NULL, '2023-05-25 12:24:00', '2023-05-25 12:24:00'),
(299, 'Jamesvardy', '<a href=https://dobotarm7tech.com/>DOBOT Magician Basic Model Arm</a> \r\n<a href=http://dobotarm7tech.com>https://www.dobotarm7tech.com/</a> \r\n<a href=http://radar-groupe.ru>http://mytelusphon', 4, 0, NULL, '2023-05-25 20:38:41', '2023-05-25 20:38:41'),
(300, 'Roberthox', '<a href=https://dobotarm7tech.com/>DOBOT Magician Basic Model Arm</a> \r\n<a href=https://dobotarm7tech.com/>http://dobotarm7tech.com</a> \r\n<a href=http://0799gt.net/__media__/js/netsoltrademar', 3, 0, NULL, '2023-05-26 00:58:15', '2023-05-26 00:58:15'),
(301, 'Vernonamisa', '<a href=https://kingssutton.net/>Einscan HX 3D Scanner</a> \r\n<a href=https://www.kingssutton.net/>https://kingssutton.net/</a> \r\n<a href=https://www.f5jeans.ru/bitrix/rk.php?goto=http://site.', 5, 0, NULL, '2023-05-26 07:48:30', '2023-05-26 07:48:30'),
(302, 'WillieVot', '<a href=https://prusa65speed3d.com/>Original Prusa SL1S</a> \r\n<a href=http://prusa65speed3d.com>http://prusa65speed3d.com</a> \r\n<a href=http://steelbytes.net/?wptouch_switch=desktop&redirect=', 2, 0, NULL, '2023-05-26 16:02:21', '2023-05-26 16:02:21'),
(303, 'KennethJirty', '<a href=https://magicianeducationalarm5.com/>DOBOT Magician Educational Model Arm</a> \r\n<a href=https://magicianeducationalarm5.com>http://www.magicianeducationalarm5.com/</a> \r\n<a href=http:', 3, 0, NULL, '2023-05-26 22:42:34', '2023-05-26 22:42:34'),
(304, 'Anthonyrib', '<a href=https://dobotmg400arm.com/>DOBOT MG400 Robotic Arm</a> \r\n<a href=http://dobotmg400arm.com>https://dobotmg400arm.com</a> \r\n<a href=http://www.facilitiesgroupinc.com/__media__/js/netsol', 4, 0, NULL, '2023-05-27 21:09:39', '2023-05-27 21:09:39'),
(305, 'Brianlit', '<a href=https://b1roboticsolutions.com/>Unitree Robotics B1</a> \r\n<a href=http://b1roboticsolutions.com>https://b1roboticsolutions.com</a> \r\n<a href=http://jeffreymcgrath.biz/__media__/js/net', 5, 0, NULL, '2023-05-28 14:24:24', '2023-05-28 14:24:24'),
(306, 'Jamesavelp', '<a href=https://robotic54gofree.com/>Unitree Robotics Go1 Air</a> \r\n<a href=http://robotic54gofree.com>http://robotic54gofree.com</a> \r\n<a href=http://ww17.knoblin.com/__media__/js/netsoltrad', 2, 0, NULL, '2023-05-28 22:18:14', '2023-05-28 22:18:14'),
(307, 'Mike Hardman', 'Greetings \r\n \r\nI have just took a look on your SEO for  drongosafaris.com for  the current search visibility and saw that your website could use a boost. \r\n \r\nWe will increase your ranks orga', 2, 0, NULL, '2023-05-28 23:16:31', '2023-05-28 23:16:31'),
(308, 'Kathaleen', 'Good day \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we off', 5, 0, NULL, '2023-05-30 10:55:22', '2023-05-30 10:55:22'),
(309, 'Gilbertjew', '<a href=https://ocoeezipz.com/>Einscan-SP 3D Scanner</a> \r\n<a href=https://ocoeezipz.com>https://www.ocoeezipz.com</a> \r\n<a href=http://ihatecarmaxscion.com/__media__/js/netsoltrademark.php?d', 5, 0, NULL, '2023-05-30 22:14:12', '2023-05-30 22:14:12'),
(310, 'Drongosafaris', 'Life is better in Tanzania.Travel with us.', 5, 1, 59, '2023-07-30 16:00:41', '2023-08-01 13:14:04'),
(311, 'MichaelMic', '<a href=https://elementarymathonline.com/>online math programs for elementary schools</a> \r\n<a href=https://www.elementarymathonline.com>https://www.elementarymathonline.com</a> \r\n<a href=htt', 3, 0, NULL, '2023-08-03 14:00:14', '2023-08-03 14:00:14'),
(312, 'MichaelHak', '<a href=https://globalreach45school.com/>International School</a> \r\n<a href=https://www.globalreach45school.com>http://www.globalreach45school.com</a> \r\n<a href=https://hkjebn.queue-it.net/?c', 5, 0, NULL, '2023-08-04 19:06:02', '2023-08-04 19:06:02'),
(313, 'RobertSaxia', '<a href=https://middle-schoolonlineguide.com/>What You Need to Know About Online Middle School</a> \r\n<a href=http://www.middle-schoolonlineguide.com>http://www.middle-schoolonlineguide.com/</', 4, 0, NULL, '2023-08-05 19:47:26', '2023-08-05 19:47:26'),
(314, 'Rhys', 'Hey there \r\n\r\nLooking to improve your posture and live a healthier life? Our Medico Postura™ Body Posture Corrector is here to help!\r\n\r\nExperience instant posture improvement with Medico Post', NULL, 0, NULL, '2023-08-06 12:11:12', '2023-08-06 12:11:12'),
(315, 'DavidDeLry', '<a href=https://onlineedu34elementary.com/>online elementary school curriculum</a> \r\n<a href=https://www.onlineedu34elementary.com/>http://www.onlineedu34elementary.com</a> \r\n<a href=http://u', 3, 0, NULL, '2023-08-07 01:18:54', '2023-08-07 01:18:54'),
(316, 'LeroyVed', '<a href=https://impresoras3dshop-65.com/>Tienda en lГ­nea de impresoras 3D</a> \r\n<a href=http://www.impresoras3dshop-65.com/>http://impresoras3dshop-65.com</a> \r\n<a href=http://files.feelcool', 3, 0, NULL, '2023-08-07 19:46:17', '2023-08-07 19:46:17'),
(317, 'Domenic', 'Hey, \r\n\r\nI hope you\'re doing well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nBange is perfect for students, professionals and travelers. The', 3, 0, NULL, '2023-08-08 07:20:16', '2023-08-08 07:20:16'),
(318, 'Donaldjuism', '<a href=https://flash44forgeimpresoras3d.com/>Impresoras 3D FlashForge</a> \r\n<a href=https://flash44forgeimpresoras3d.com>https://www.flash44forgeimpresoras3d.com/</a> \r\n<a href=https://dalho', 4, 0, NULL, '2023-08-08 17:53:49', '2023-08-08 17:53:49'),
(319, 'Calvinfep', '<a href=https://impresora-3d65flashforgecreator4s.com/>Impresora 3D Flashforge Creator 4-S</a> \r\n<a href=http://impresora-3d65flashforgecreator4s.com>https://www.impresora-3d65flashforgecreat', 5, 0, NULL, '2023-08-09 07:49:13', '2023-08-09 07:49:13'),
(320, 'Frankvaf', '<a href=https://impresora-3d-flashforgecreator4a.com/>Impresora 3D Flashforge Creator 4-A</a> \r\n<a href=http://impresora-3d-flashforgecreator4a.com>http://www.impresora-3d-flashforgecreator4a', 5, 0, NULL, '2023-08-09 14:15:26', '2023-08-09 14:15:26'),
(321, 'FloydMer', '<a href=https://impresora3d-flashforgeguider3.com/>Impresora 3D FlashForge Guider 3</a> \r\n<a href=https://impresora3d-flashforgeguider3.com//>http://www.impresora3d-flashforgeguider3.com/</a>', 5, 0, NULL, '2023-08-09 17:44:58', '2023-08-09 17:44:58'),
(322, 'Williamnig', '<a href=https://impresora-3d-guider3plus.com/>Impresora 3D Flashforge Guider 3 Plus</a> \r\n<a href=http://www.impresora-3d-guider3plus.com/>https://impresora-3d-guider3plus.com/</a> \r\n<a href=', 5, 0, NULL, '2023-08-10 19:34:47', '2023-08-10 19:34:47'),
(323, 'PetercEf', '<a href=https://impresora-guider2s.com/>Impresora 3D FlashForge Guider 2s</a> \r\n<a href=https://www.impresora-guider2s.com/>https://impresora-guider2s.com/</a> \r\n<a href=http://referless.com/', 2, 0, NULL, '2023-08-12 00:26:02', '2023-08-12 00:26:02'),
(324, 'Alenawog', 'Hі!\r\nI\'vе nоticed that many guys prefer rеgulаr girls.\r\nI applаudе the men out thеre who had the bаlls to enϳоу thе lоve оf manу wоmеn аnd chоoѕe the оnе that hе knew wоuld be his bеst friеnd', 3, 0, NULL, '2023-08-12 18:27:16', '2023-08-12 18:27:16'),
(325, 'Charlesblipt', '<a href=https://flashforge-83creator3.com/>Impresora 3D Flashforge Creator 3</a> \r\n<a href=https://flashforge-83creator3.com/>https://www.flashforge-83creator3.com/</a> \r\n<a href=http://igmco', 5, 0, NULL, '2023-08-12 20:22:41', '2023-08-12 20:22:41'),
(326, 'RichardFroca', '<a href=https://3dflash-creator3pro.com/>Impresora 3D Flashforge Creator 3 Pro</a> \r\n<a href=http://3dflash-creator3pro.com>http://3dflash-creator3pro.com</a> \r\n<a href=http://mail.mystar.com', 2, 0, NULL, '2023-08-14 15:24:42', '2023-08-14 15:24:42'),
(327, 'Harryerasy', '<a href=https://imp-flashforge-guider2.com/>Impresora 3D FlashForge Guider 2</a> \r\n<a href=https://www.imp-flashforge-guider2.com/>http://imp-flashforge-guider2.com/</a> \r\n<a href=http://bpv.', 3, 0, NULL, '2023-08-14 16:46:04', '2023-08-14 16:46:04'),
(328, 'EddieKef', '<a href=https://impresoras3d-2creatbot.com/>Impresoras 3D Creatbot</a> \r\n<a href=http://www.impresoras3d-2creatbot.com/>https://impresoras3d-2creatbot.com/</a> \r\n<a href=http://dbaengineered.', 4, 0, NULL, '2023-08-17 14:23:13', '2023-08-17 14:23:13'),
(329, 'Marvinbem', '<a href=https://imp-atbotd600pro.com/>Creatbot D600 Pro</a> \r\n<a href=http://imp-atbotd600pro.com/>http://imp-atbotd600pro.com/</a> \r\n<a href=https://pentecostalhouseofworship.com/clipart/mai', 4, 0, NULL, '2023-08-18 23:54:06', '2023-08-18 23:54:06'),
(330, 'ArthurGralf', '<a href=https://443-creatbotf430.com/>Creatbot F430</a> \r\n<a href=http://443-creatbotf430.com>http://www.443-creatbotf430.com/</a> \r\n<a href=http://leadertoday.org/topframe2014.php?goto=http:', 3, 0, NULL, '2023-08-19 11:22:27', '2023-08-19 11:22:27'),
(331, 'Robertvaple', 'Hi, kam dashur të di çmimin tuaj', 5, 0, NULL, '2023-09-01 09:54:33', '2023-09-01 09:54:33'),
(332, 'ScottSlody', '<a href=https://impresorasraise3d4es.com/>Raise3D Impresoras 3D</a> \r\n<a href=https://www.impresorasraise3d4es.com/>https://www.impresorasraise3d4es.com/</a> \r\n<a href=https://budconsult.ru/b', 2, 0, NULL, '2023-09-05 10:31:12', '2023-09-05 10:31:12'),
(333, 'HarryFUM', '<a href=https://raise3dprintere2.com/>Raise3D E2</a> \r\n<a href=http://raise3dprintere2.com/>http://raise3dprintere2.com/</a> \r\n<a href=http://maps.google.es/url?sa=t&url=http%3A%2F%2Fsite.ru>', 3, 0, NULL, '2023-09-06 13:52:54', '2023-09-06 13:52:54'),
(334, 'Georgecix', '<a href=https://aise-e2cfprinter.com/>Raise3D E2CF</a> \r\n<a href=http://aise-e2cfprinter.com/>https://www.aise-e2cfprinter.com/</a> \r\n<a href=http://picturephone.us/__media__/js/netsoltradema', 2, 0, NULL, '2023-09-07 18:18:49', '2023-09-07 18:18:49'),
(335, 'Malcolmshoob', 'Hi there! drongosafaris.com \r\n \r\nDid you know that it is possible to send letter completely legitimately? We introduce a legal and legitimate method of sending messages through feedback forms', 5, 0, NULL, '2023-09-08 08:45:02', '2023-09-08 08:45:02'),
(336, 'CharlesOrets', '<a href=https://pro3-aise38d.com/>Raise3D Pro3</a> \r\n<a href=https://pro3-aise38d.com/>https://pro3-aise38d.com/</a> \r\n<a href=http://spartan-ega.com/__media__/js/netsoltrademark.php?d=site.r', 2, 0, NULL, '2023-09-08 22:00:55', '2023-09-08 22:00:55'),
(337, 'Robertvaple', 'Salut, ech wollt Äre Präis wëssen.', 5, 0, NULL, '2023-09-19 02:16:14', '2023-09-19 02:16:14'),
(338, 'Raymondcog', 'Hey there! drongosafaris.com \r\n \r\nDid you know that it is possible to send appeal perfectly legitimate way? We make available a new, legitimate method of sending appeals through feedback form', 2, 0, NULL, '2023-09-20 17:43:07', '2023-09-20 17:43:07'),
(339, 'Philvaple', 'Dia duit, theastaigh uaim do phraghas a fháil.', 5, 0, NULL, '2023-09-22 21:39:31', '2023-09-22 21:39:31'),
(340, 'AnnaButt', 'Неllо!\r\nI ароlоgizе fоr the overlу sресific mеѕѕage.\r\nМy gіrlfrіеnd аnd Ι love each other. And wе аre аll greаt.\r\nBut... wе nееd a man.\r\nԜе аrе 27 уеarѕ оld, frоm Rоmaniа, wе also knоw englіs', 2, 0, NULL, '2023-09-23 04:37:30', '2023-09-23 04:37:30'),
(341, 'Eric Jones', 'Dear, Eric here with a quick thought about your website drongosafaris.com Webmaster.\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have gr', 5, 0, NULL, '2023-09-26 12:12:19', '2023-09-26 12:12:19'),
(342, 'CatherinaOred', 'Ηіǃ\r\nΙ\'ve noticеd that manу guyѕ prеfеr regular gіrls.\r\nΙ aрplаudе thе mеn out there who hаd the balls to enϳоy thе love of mаnу wоmen аnd сhоosе thе onе that he knew would be hіs bеѕt frіend', 2, 0, NULL, '2023-09-29 07:58:40', '2023-09-29 07:58:40'),
(343, 'MariaOred', 'Hi!\r\nΙ\'ve nоtісed that many guyѕ prеfer rеgular gіrls.\r\nΙ apрlаudе the mеn оut thеre who had thе ballѕ to enjoy thе lovе of many womеn аnd chооѕе thе оne that he knеw would bе hiѕ bеѕt frіend', 5, 0, NULL, '2023-10-03 13:15:16', '2023-10-03 13:15:16'),
(344, 'Eric Jones', 'Hi drongosafaris.com Administrator. this is Eric and I ran across drongosafaris.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website', 3, 0, NULL, '2023-10-04 01:10:20', '2023-10-04 01:10:20'),
(345, 'Ana', 'Hey there \r\n\r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time.\r\n\r\nBuy now: https:', 1, 0, NULL, '2023-10-04 04:36:10', '2023-10-04 04:36:10'),
(346, 'Mike Ferguson', 'Hi there \r\n \r\nThis is Mike Ferguson\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/produc', 2, 0, NULL, '2023-10-10 04:06:43', '2023-10-10 04:06:43'),
(347, 'Tobiasned', 'Hi there! drongosafaris.com \r\n \r\nDid you know that it is possible to send commercial offer legitimately? We provide a legitimate method of sending proposals through contact forms. Such forms ', 3, 0, NULL, '2023-10-11 13:47:15', '2023-10-11 13:47:15'),
(348, 'Mariel McQuade', 'Dear drongosafaris.com Administrator!\r\n\r\nMy name’s Mariel, I came across drongosafaris.com after doing a swift search – you showed up near the peak of the rankings, so whichever you’re doing ', NULL, 0, NULL, '2023-10-12 13:57:59', '2023-10-12 13:57:59'),
(349, 'Tigran Ayrapetyan', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r', 3, 0, NULL, '2023-10-16 17:55:02', '2023-10-16 17:55:02'),
(350, 'RaymondNUB', '<a href=https://pro3plusrai890.com/>Raise3D Pro3 Plus</a> \r\n<a href=https://pro3plusrai890.com/>https://pro3plusrai890.com/</a> \r\n<a href=http://makeupsaver.com/__media__/js/netsoltrademark.p', 3, 0, NULL, '2023-10-16 18:01:29', '2023-10-16 18:01:29'),
(351, 'Mike Adderiy', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliat', 5, 0, NULL, '2023-10-16 19:46:47', '2023-10-16 19:46:47'),
(352, 'Shanel Renwick', 'Dear to the drongosafaris.com Owner. This is Shanel and I have just come across your webpage at drongosafaris.com...\r\n\r\nI located it after a quick search, so your SEO’s performing well…\r\n\r\nTh', 1, 0, NULL, '2023-10-16 22:09:13', '2023-10-16 22:09:13'),
(353, 'MisScern', 'Hello. I hope this message finds you well. I am reaching out to introduce you to a ground-breaking service that is set to redefine the SEO landscape: duckctr.com. \r\nMany platforms claim to en', 4, 0, NULL, '2023-10-19 11:58:02', '2023-10-19 11:58:02'),
(354, 'Mike Charlson', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score ', 2, 0, NULL, '2023-10-21 02:38:31', '2023-10-21 02:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `body`, `attachment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'What We Offer', 'Drongosafaris offers an authentic East African safari experience that leaves a positive impact on Africa\'s crucial wilderness areas.', '+255 766 236 222 20230629_130407_1691954642.jpg', 59, '2021-11-15 16:39:41', '2023-08-13 23:24:02'),
(2, 'Day Tours', 'The park is named for the Tarangire River that cuts through the park, a life-source for both plans and animals.', 'artistic-fantastic-african-sunset-landscape-african-elephants-serengeti-national-park-tanzania-africa-sunset_136401-3683_1661282922.jpg', 59, '2021-11-16 03:41:57', '2023-08-13 23:26:26'),
(4, 'Combined Tours', 'Drongosafaris.com', 'Screenshot_20211221-123613_Google_1641720541.jpg', 59, '2021-11-22 08:13:24', '2023-08-13 23:43:21'),
(5, 'Wildlife Safaris', 'Enjoy the Safaris with Drongo Safaris,Wherever you want to go we will take you there.', 'serengeti_1699520007.jpg', 1, '2021-12-20 21:56:12', '2023-11-09 05:53:28'),
(6, 'Beach Holidays', 'Zanzibar is magical: the spice-scented, quintessential Indian Ocean idyll. Tropical, turquoise waters lap miles of palm-fringed, sandy beaches.', 'beach1_1645633187.jpg', 1, '2021-12-21 00:16:59', '2022-02-23 21:19:47'),
(7, 'Uniqueness', 'Tanzania is home of tourism. Wildlife,Geographical,Historical,culture & Belief. The roof of Oldonyo Lengai the active volicanic mountan', 'kilx_1641915167.jpg', 1, '2022-01-11 20:25:33', '2022-01-11 20:32:47'),
(8, 'Hiking & Trekking', 'The Mountain shown at the back is the Mt. Kilimnjaro, People call it the roof of Africa because is the tallest mountain(5895M) in Africa also is the tallest outstanding volcanic mountain in the world.\r\nThe Mountain is found in Tanzania in the Region called Kilimanjaro,This region has called after Mt.Kilimanjoro.\r\nThe word Kilimanjaro is derived from Chagga native word “Kilema Kyaro” means the God mountain,Note that Chagga is the first tribe to make permanent settlement around the mountain even though some utensils and other remaining found around the mountain dating 1000BC, these people were not chaggas.\r\nThe photo of Elephant was taken from Kilimanjaro National Park. The Park served as the ecology of Mt. Kilimanjaro and other surrounding area, The Elephant is the biggest animal on the land in the world', 'tanzania-mount-kilimanjaro_1642778525.jpg', 1, '2022-01-21 20:22:05', '2022-01-21 20:46:29'),
(9, 'Addons', 'From taking a safari through Africa’s stunning National Parks to visiting one of the last surviving tribes on the planet, Tanzania offers some of the most awe-inspiring experiences in the world - and there’s something to suit every travel style!', 'FB_IMG_1691779789051_1691955235.jpg', 59, '2022-01-23 12:11:04', '2023-08-13 23:33:55'),
(10, 'Cultural Tours', 'The cultural tour is not only for the maasai tribe but it includes some of others tribes such as  Hadzabe of lake eyasi and Sonjo of lake natron.Each tribe has its own uniqueness', 'IMG-20220124-WA0033_1643032592.jpg', 58, '2022-01-24 18:56:32', '2022-01-25 12:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `tourcostsummaries`
--

CREATE TABLE `tourcostsummaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `season` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twopax` int(10) UNSIGNED NOT NULL,
  `threepax` int(10) UNSIGNED NOT NULL,
  `fourpax` int(10) UNSIGNED NOT NULL,
  `fivepax` int(10) UNSIGNED NOT NULL,
  `sixpax` int(10) UNSIGNED NOT NULL,
  `srs` int(10) UNSIGNED NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourcostsummaries`
--

INSERT INTO `tourcostsummaries` (`id`, `program`, `season`, `status`, `twopax`, `threepax`, `fourpax`, `fivepax`, `sixpax`, `srs`, `currency`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Zanzibar Island', 'Low Season(April & May)', 'Basic', 1000, 1200, 1400, 1600, 1900, 20, 'USD', 1, '2023-12-30 05:38:12', '2023-12-30 05:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_equery_social_media`
--

CREATE TABLE `tour_equery_social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_equery_id` int(10) UNSIGNED NOT NULL,
  `social_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_equery_social_media`
--

INSERT INTO `tour_equery_social_media` (`id`, `tour_equery_id`, `social_name`, `from_name`, `created_at`, `updated_at`) VALUES
(1, 11, 'Instagram', 'Agents', '2021-11-04 04:59:15', '2021-11-04 04:59:15'),
(2, 11, '66', 'Agents', '2021-11-04 04:59:16', '2021-11-04 04:59:16'),
(3, 1, 'facebook', 'Partners', '2021-11-04 05:00:43', '2021-11-04 05:00:43'),
(4, 1, 'Instagram', 'Partners', '2021-11-04 05:00:43', '2021-11-04 05:00:43'),
(5, 1, 'rtrt', 'Partners', '2021-11-04 05:00:44', '2021-11-04 05:00:44'),
(6, 1, '66', 'Partners', '2021-11-04 05:00:44', '2021-11-04 05:00:44'),
(7, 2, 'facebook', 'Partners', '2021-11-04 05:01:47', '2021-11-04 05:01:47'),
(8, 2, 'Instagram', 'Partners', '2021-11-04 05:01:47', '2021-11-04 05:01:47'),
(9, 2, 'rtrt', 'Partners', '2021-11-04 05:01:47', '2021-11-04 05:01:47'),
(10, 2, '66', 'Partners', '2021-11-04 05:01:47', '2021-11-04 05:01:47'),
(11, 3, 'facebook', 'Partners', '2021-11-04 05:02:23', '2021-11-04 05:02:23'),
(12, 3, 'rtrt', 'Partners', '2021-11-04 05:02:23', '2021-11-04 05:02:23'),
(13, 5, 'Instagram', 'Partners', '2021-11-04 05:03:25', '2021-11-04 05:03:25'),
(14, 6, 'Instagram', 'Partners', '2021-11-04 05:03:50', '2021-11-04 05:03:50'),
(15, 5, 'facebook', 'tourGuides', '2021-11-06 02:07:19', '2021-11-06 02:07:19'),
(16, 6, 'kl', 'tourGuides', '2021-11-06 02:14:36', '2021-11-06 02:14:36'),
(17, 7, 'facebook', 'tourGuides', '2021-11-06 02:38:52', '2021-11-06 02:38:52'),
(18, 7, 'kl', 'tourGuides', '2021-11-06 02:38:52', '2021-11-06 02:38:52'),
(19, 1, 'facebook', 'tourGuides', '2021-11-06 03:07:28', '2021-11-06 03:07:28'),
(20, 1, 'Instagram', 'tourGuides', '2021-11-06 03:07:28', '2021-11-06 03:07:28'),
(21, 1, 'rtrt', 'tourGuides', '2021-11-06 03:07:28', '2021-11-06 03:07:28'),
(22, 2, 'Instagram', 'tourGuides', '2021-11-06 04:54:25', '2021-11-06 04:54:25'),
(23, 2, 'kl', 'tourGuides', '2021-11-06 04:54:25', '2021-11-06 04:54:25'),
(24, 3, 'Instagram', 'tourGuides', '2021-11-06 05:34:12', '2021-11-06 05:34:12'),
(25, 3, 'kl', 'tourGuides', '2021-11-06 05:34:12', '2021-11-06 05:34:12'),
(26, 4, 'Instagram', 'tourGuides', '2021-11-06 09:07:22', '2021-11-06 09:07:22'),
(27, 3, 'Google', NULL, '2021-11-16 09:19:44', '2021-11-16 09:19:44'),
(28, 4, 'Google', NULL, '2021-11-16 09:20:30', '2021-11-16 09:20:30'),
(29, 12, 'facebook', 'Agents', '2021-11-16 09:35:28', '2021-11-16 09:35:28'),
(30, 5, 'Instagram', NULL, '2021-11-20 09:23:54', '2021-11-20 09:23:54'),
(31, 5, 'Google', NULL, '2021-11-20 09:23:54', '2021-11-20 09:23:54'),
(32, 5, 'Instagram', 'tourGuides', '2021-11-22 10:47:14', '2021-11-22 10:47:14'),
(33, 5, 'Linkedin', 'tourGuides', '2021-11-22 10:47:15', '2021-11-22 10:47:15'),
(34, 5, 'Kermit Larson', 'tourGuides', '2021-11-22 10:47:15', '2021-11-22 10:47:15'),
(35, 6, 'Instagram', 'tourGuides', '2021-11-22 10:48:46', '2021-11-22 10:48:46'),
(36, 6, 'Linkedin', 'tourGuides', '2021-11-22 10:48:46', '2021-11-22 10:48:46'),
(37, 6, 'Kermit Larson', 'tourGuides', '2021-11-22 10:48:46', '2021-11-22 10:48:46'),
(38, 7, 'Instagram', 'tourGuides', '2021-11-22 10:49:08', '2021-11-22 10:49:08'),
(39, 7, 'Linkedin', 'tourGuides', '2021-11-22 10:49:08', '2021-11-22 10:49:08'),
(40, 7, 'Kermit Larson', 'tourGuides', '2021-11-22 10:49:08', '2021-11-22 10:49:08'),
(41, 8, 'Instagram', 'tourGuides', '2021-11-22 10:49:41', '2021-11-22 10:49:41'),
(42, 8, 'Linkedin', 'tourGuides', '2021-11-22 10:49:41', '2021-11-22 10:49:41'),
(43, 8, 'Kermit Larson', 'tourGuides', '2021-11-22 10:49:41', '2021-11-22 10:49:41'),
(44, 9, 'Instagram', 'tourGuides', '2021-11-22 10:50:56', '2021-11-22 10:50:56'),
(45, 9, 'Linkedin', 'tourGuides', '2021-11-22 10:50:56', '2021-11-22 10:50:56'),
(46, 9, 'Kermit Larson', 'tourGuides', '2021-11-22 10:50:56', '2021-11-22 10:50:56'),
(47, 10, 'Instagram', 'tourGuides', '2021-11-27 06:47:25', '2021-11-27 06:47:25'),
(48, 10, 'Linkedin', 'tourGuides', '2021-11-27 06:47:25', '2021-11-27 06:47:25'),
(49, 10, 'Kermit Larson', 'tourGuides', '2021-11-27 06:47:25', '2021-11-27 06:47:25'),
(50, 10, 'bn', 'tourGuides', '2021-11-27 06:47:25', '2021-11-27 06:47:25'),
(51, 7, 'Tweeter', 'tailor_made', '2021-11-27 06:55:42', '2021-11-27 06:55:42'),
(52, 6, 'Google', NULL, '2021-11-30 14:11:54', '2021-11-30 14:11:54'),
(53, 6, 'Word of Mouth', NULL, '2021-11-30 14:11:54', '2021-11-30 14:11:54'),
(54, 1, 'Instagram', 'tourGuides', '2021-12-29 14:30:09', '2021-12-29 14:30:09'),
(55, 1, 'Kermit Larson', 'tourGuides', '2021-12-29 14:30:09', '2021-12-29 14:30:09'),
(56, 1, 'Instagram', 'Agents', '2021-12-29 14:31:58', '2021-12-29 14:31:58'),
(57, 2, 'Instagram', 'Agents', '2021-12-29 14:32:17', '2021-12-29 14:32:17'),
(58, 2, 'Instagram', 'tourGuides', '2021-12-29 14:39:37', '2021-12-29 14:39:37'),
(59, 2, 'Kermit Larson', 'tourGuides', '2021-12-29 14:39:37', '2021-12-29 14:39:37'),
(60, 3, 'Instagram', 'tourGuides', '2021-12-29 14:45:28', '2021-12-29 14:45:28'),
(61, 1, 'Instagram', 'Partners', '2021-12-29 14:52:32', '2021-12-29 14:52:32'),
(62, 1, 'Linkedin', 'Partners', '2021-12-29 14:52:32', '2021-12-29 14:52:32'),
(63, 4, 'Instagram', 'tourGuides', '2021-12-29 14:54:09', '2021-12-29 14:54:09'),
(64, 5, 'bn', 'tourGuides', '2021-12-29 14:54:56', '2021-12-29 14:54:56'),
(65, 6, 'Instagram', 'tourGuides', '2021-12-29 15:14:26', '2021-12-29 15:14:26'),
(66, 6, 'Kermit Larson', 'tourGuides', '2021-12-29 15:14:26', '2021-12-29 15:14:26'),
(67, 7, 'Kermit Larson', 'tourGuides', '2021-12-29 15:24:46', '2021-12-29 15:24:46'),
(68, 7, 'bn', 'tourGuides', '2021-12-29 15:24:46', '2021-12-29 15:24:46'),
(69, 8, 'Instagram', 'tourGuides', '2021-12-29 15:26:39', '2021-12-29 15:26:39'),
(70, 8, 'Linkedin', 'tourGuides', '2021-12-29 15:26:39', '2021-12-29 15:26:39'),
(71, 8, 'bn', 'tourGuides', '2021-12-29 15:26:39', '2021-12-29 15:26:39'),
(72, 9, 'Instagram', 'tourGuides', '2021-12-29 15:26:57', '2021-12-29 15:26:57'),
(73, 9, 'Linkedin', 'tourGuides', '2021-12-29 15:26:57', '2021-12-29 15:26:57'),
(74, 9, 'bn', 'tourGuides', '2021-12-29 15:26:57', '2021-12-29 15:26:57'),
(75, 10, 'Instagram', 'tourGuides', '2021-12-29 15:27:41', '2021-12-29 15:27:41'),
(76, 10, 'Linkedin', 'tourGuides', '2021-12-29 15:27:41', '2021-12-29 15:27:41'),
(77, 10, 'bn', 'tourGuides', '2021-12-29 15:27:41', '2021-12-29 15:27:41'),
(78, 11, 'Instagram', 'tourGuides', '2021-12-29 15:28:07', '2021-12-29 15:28:07'),
(79, 11, 'Linkedin', 'tourGuides', '2021-12-29 15:28:07', '2021-12-29 15:28:07'),
(80, 11, 'bn', 'tourGuides', '2021-12-29 15:28:07', '2021-12-29 15:28:07'),
(81, 12, 'Instagram', 'tourGuides', '2021-12-29 15:28:34', '2021-12-29 15:28:34'),
(82, 12, 'Linkedin', 'tourGuides', '2021-12-29 15:28:34', '2021-12-29 15:28:34'),
(83, 12, 'bn', 'tourGuides', '2021-12-29 15:28:34', '2021-12-29 15:28:34'),
(84, 13, 'orral covasetion.', 'tourGuides', '2021-12-29 15:40:48', '2021-12-29 15:40:48'),
(85, 3, 'Kermit Larson', 'Agents', '2022-01-03 14:46:39', '2022-01-03 14:46:39'),
(86, 4, 'Kermit Larson', 'Agents', '2022-01-03 14:47:24', '2022-01-03 14:47:24'),
(87, 5, 'Kermit Larson', 'Agents', '2022-01-03 14:48:42', '2022-01-03 14:48:42'),
(88, 6, 'Kermit Larson', 'Agents', '2022-01-03 14:49:08', '2022-01-03 14:49:08'),
(89, 7, 'Instagram', 'Agents', '2022-01-03 14:54:20', '2022-01-03 14:54:20'),
(90, 8, 'Instagram', 'Agents', '2022-01-03 14:54:27', '2022-01-03 14:54:27'),
(91, 8, 'Linkedin', 'Agents', '2022-01-03 14:54:27', '2022-01-03 14:54:27'),
(92, 8, 'bn', 'Agents', '2022-01-03 14:54:27', '2022-01-03 14:54:27'),
(93, 1, 'Instagram', 'Agents', '2022-01-03 14:59:36', '2022-01-03 14:59:36'),
(94, 1, 'Kermit Larson', 'Agents', '2022-01-03 14:59:36', '2022-01-03 14:59:36'),
(95, 1, 'oral conversation', 'Agents', '2022-01-03 14:59:36', '2022-01-03 14:59:36'),
(96, 2, 'Instagram', 'Partners', '2022-01-03 15:07:26', '2022-01-03 15:07:26'),
(97, 1, 'Linkedin', 'Agents', '2022-01-03 15:28:47', '2022-01-03 15:28:47'),
(98, 14, 'Instagram', 'tourGuides', '2022-01-18 15:38:09', '2022-01-18 15:38:09'),
(99, 14, 'Facebook', 'tourGuides', '2022-01-18 15:38:09', '2022-01-18 15:38:09'),
(100, 1, 'Google', NULL, '2022-01-19 17:51:03', '2022-01-19 17:51:03'),
(101, 2, 'Word of Mouth', 'Agents', '2022-01-21 12:58:51', '2022-01-21 12:58:51'),
(102, 1, 'Facebook', 'tailor_made', '2022-01-21 19:47:05', '2022-01-21 19:47:05'),
(103, 3, 'Instagram', 'tailor_made', '2022-08-10 13:49:49', '2022-08-10 13:49:49'),
(104, 1, 'Facebook', NULL, '2022-08-10 14:12:50', '2022-08-10 14:12:50'),
(105, 3, 'Instagram', NULL, '2023-11-29 03:42:24', '2023-11-29 03:42:24'),
(106, 4, 'Facebook', NULL, '2023-11-29 13:55:18', '2023-11-29 13:55:18'),
(107, 5, 'Google', NULL, '2023-12-02 07:29:13', '2023-12-02 07:29:13'),
(108, 6, 'Facebook', NULL, '2023-12-06 06:27:01', '2023-12-06 06:27:01'),
(109, 6, 'Instagram', NULL, '2023-12-06 06:27:02', '2023-12-06 06:27:02'),
(110, 6, 'Word of Mouth', NULL, '2023-12-06 06:27:02', '2023-12-06 06:27:02'),
(111, 7, 'Instagram', NULL, '2023-12-06 07:37:57', '2023-12-06 07:37:57'),
(112, 7, 'Google', NULL, '2023-12-06 07:37:57', '2023-12-06 07:37:57'),
(113, 7, 'Word of Mouth', NULL, '2023-12-06 07:37:57', '2023-12-06 07:37:57'),
(114, 8, 'Google', NULL, '2023-12-06 07:49:54', '2023-12-06 07:49:54'),
(115, 9, 'Instagram', NULL, '2023-12-06 07:50:21', '2023-12-06 07:50:21'),
(116, 9, 'Google', NULL, '2023-12-06 07:50:21', '2023-12-06 07:50:21'),
(117, 10, 'Facebook', NULL, '2023-12-06 08:00:05', '2023-12-06 08:00:05'),
(118, 10, 'Instagram', NULL, '2023-12-06 08:00:05', '2023-12-06 08:00:05'),
(119, 10, 'Word of Mouth', NULL, '2023-12-06 08:00:05', '2023-12-06 08:00:05'),
(120, 11, 'Facebook', NULL, '2023-12-06 08:00:13', '2023-12-06 08:00:13'),
(121, 11, 'Instagram', NULL, '2023-12-06 08:00:13', '2023-12-06 08:00:13'),
(122, 11, 'Word of Mouth', NULL, '2023-12-06 08:00:13', '2023-12-06 08:00:13'),
(123, 12, 'Facebook', NULL, '2023-12-06 08:00:47', '2023-12-06 08:00:47'),
(124, 12, 'Word of Mouth', NULL, '2023-12-06 08:00:47', '2023-12-06 08:00:47'),
(125, 13, 'Instagram', NULL, '2023-12-06 08:18:46', '2023-12-06 08:18:46'),
(126, 13, 'Word of Mouth', NULL, '2023-12-06 08:18:46', '2023-12-06 08:18:46'),
(127, 14, 'Instagram', NULL, '2023-12-06 08:18:59', '2023-12-06 08:18:59'),
(128, 14, 'Word of Mouth', NULL, '2023-12-06 08:18:59', '2023-12-06 08:18:59'),
(129, 15, 'Instagram', NULL, '2023-12-06 08:20:51', '2023-12-06 08:20:51'),
(130, 15, 'Word of Mouth', NULL, '2023-12-06 08:20:51', '2023-12-06 08:20:51'),
(131, 16, 'Instagram', NULL, '2023-12-06 08:23:20', '2023-12-06 08:23:20'),
(132, 16, 'Word of Mouth', NULL, '2023-12-06 08:23:20', '2023-12-06 08:23:20'),
(133, 17, 'Instagram', NULL, '2023-12-09 04:36:24', '2023-12-09 04:36:24'),
(134, 18, 'Instagram', NULL, '2023-12-09 04:59:09', '2023-12-09 04:59:09'),
(135, 19, 'Google', NULL, '2023-12-11 04:46:22', '2023-12-11 04:46:22'),
(136, 20, 'Facebook', NULL, '2023-12-11 05:38:29', '2023-12-11 05:38:29'),
(137, 20, 'Google', NULL, '2023-12-11 05:38:29', '2023-12-11 05:38:29'),
(138, 20, 'Word of Mouth', NULL, '2023-12-11 05:38:29', '2023-12-11 05:38:29'),
(139, 21, 'Facebook', NULL, '2023-12-11 05:42:27', '2023-12-11 05:42:27'),
(140, 21, 'Instagram', NULL, '2023-12-11 05:42:27', '2023-12-11 05:42:27'),
(141, 21, 'Google', NULL, '2023-12-11 05:42:27', '2023-12-11 05:42:27'),
(142, 21, 'Word of Mouth', NULL, '2023-12-11 05:42:27', '2023-12-11 05:42:27'),
(143, 25, 'Google', NULL, '2023-12-11 05:55:07', '2023-12-11 05:55:07'),
(144, 26, 'Google', NULL, '2023-12-11 06:02:08', '2023-12-11 06:02:08'),
(145, 27, 'Facebook', NULL, '2023-12-11 06:03:04', '2023-12-11 06:03:04'),
(146, 27, 'Google', NULL, '2023-12-11 06:03:04', '2023-12-11 06:03:04'),
(147, 27, 'Word of Mouth', NULL, '2023-12-11 06:03:04', '2023-12-11 06:03:04'),
(148, 28, 'Instagram', NULL, '2023-12-11 06:15:02', '2023-12-11 06:15:02'),
(149, 28, 'Google', NULL, '2023-12-11 06:15:02', '2023-12-11 06:15:02'),
(150, 28, 'Word of Mouth', NULL, '2023-12-11 06:15:02', '2023-12-11 06:15:02'),
(151, 29, 'Instagram', NULL, '2023-12-11 06:16:27', '2023-12-11 06:16:27'),
(152, 29, 'Google', NULL, '2023-12-11 06:16:27', '2023-12-11 06:16:27'),
(153, 29, 'Word of Mouth', NULL, '2023-12-11 06:16:27', '2023-12-11 06:16:27'),
(154, 30, 'Instagram', NULL, '2023-12-11 06:18:48', '2023-12-11 06:18:48'),
(155, 30, 'Google', NULL, '2023-12-11 06:18:48', '2023-12-11 06:18:48'),
(156, 30, 'Word of Mouth', NULL, '2023-12-11 06:18:48', '2023-12-11 06:18:48'),
(157, 31, 'Facebook', NULL, '2023-12-11 06:20:39', '2023-12-11 06:20:39'),
(158, 31, 'Instagram', NULL, '2023-12-11 06:20:39', '2023-12-11 06:20:39'),
(159, 32, 'Facebook', NULL, '2023-12-11 06:21:47', '2023-12-11 06:21:47'),
(160, 32, 'Instagram', NULL, '2023-12-11 06:21:47', '2023-12-11 06:21:47'),
(161, 33, 'Word of Mouth', NULL, '2023-12-11 06:24:11', '2023-12-11 06:24:11'),
(162, 34, 'Facebook', NULL, '2023-12-11 06:25:55', '2023-12-11 06:25:55'),
(163, 34, 'Google', NULL, '2023-12-11 06:25:55', '2023-12-11 06:25:55'),
(164, 35, 'Facebook', NULL, '2023-12-11 08:56:48', '2023-12-11 08:56:48'),
(165, 35, 'Google', NULL, '2023-12-11 08:56:48', '2023-12-11 08:56:48'),
(166, 36, 'Instagram', NULL, '2023-12-15 03:54:02', '2023-12-15 03:54:02'),
(167, 36, 'Google', NULL, '2023-12-15 03:54:02', '2023-12-15 03:54:02'),
(168, 37, 'Instagram', NULL, '2023-12-15 04:03:07', '2023-12-15 04:03:07'),
(169, 37, 'Google', NULL, '2023-12-15 04:03:07', '2023-12-15 04:03:07'),
(170, 38, 'Instagram', NULL, '2023-12-15 04:05:06', '2023-12-15 04:05:06'),
(171, 39, 'Facebook', NULL, '2023-12-15 06:23:44', '2023-12-15 06:23:44'),
(172, 39, 'Instagram', NULL, '2023-12-15 06:23:44', '2023-12-15 06:23:44'),
(173, 40, 'Word of Mouth', NULL, '2023-12-25 15:07:03', '2023-12-25 15:07:03'),
(174, 41, 'Word of Mouth', NULL, '2023-12-25 15:11:32', '2023-12-25 15:11:32'),
(175, 42, 'Word of Mouth', NULL, '2023-12-25 15:13:43', '2023-12-25 15:13:43'),
(176, 43, 'Word of Mouth', NULL, '2023-12-25 15:14:43', '2023-12-25 15:14:43'),
(177, 44, 'Word of Mouth', NULL, '2023-12-25 15:15:50', '2023-12-25 15:15:50'),
(178, 45, 'Google', NULL, '2023-12-26 04:22:59', '2023-12-26 04:22:59'),
(179, 46, 'Word of Mouth', NULL, '2023-12-26 05:11:01', '2023-12-26 05:11:01'),
(180, 47, 'Instagram', NULL, '2023-12-26 08:15:48', '2023-12-26 08:15:48'),
(181, 48, 'Google', NULL, '2023-12-26 08:20:05', '2023-12-26 08:20:05'),
(182, 49, 'Google', NULL, '2023-12-26 08:22:32', '2023-12-26 08:22:32'),
(183, 50, 'Word of Mouth', NULL, '2023-12-26 08:24:16', '2023-12-26 08:24:16'),
(184, 51, 'Google', NULL, '2023-12-27 06:09:45', '2023-12-27 06:09:45'),
(185, 52, 'Google', NULL, '2023-12-27 06:41:54', '2023-12-27 06:41:54'),
(186, 53, 'Google', NULL, '2023-12-27 07:18:01', '2023-12-27 07:18:01'),
(187, 54, 'Word of Mouth', NULL, '2023-12-27 07:19:03', '2023-12-27 07:19:03'),
(188, 55, 'Google', NULL, '2023-12-29 03:32:17', '2023-12-29 03:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `tour_equiry_forms`
--

CREATE TABLE `tour_equiry_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `depart_id` int(10) UNSIGNED NOT NULL,
  `tour_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accommodation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adults` int(10) UNSIGNED NOT NULL,
  `teens` int(10) UNSIGNED NOT NULL,
  `children` int(10) UNSIGNED NOT NULL,
  `tour_date` date DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `pin` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_information` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hear_about_us` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_equiry_forms`
--

INSERT INTO `tour_equiry_forms` (`id`, `first_name`, `last_name`, `email`, `phone`, `country`, `tour_id`, `depart_id`, `tour_type`, `accommodation`, `adults`, `teens`, `children`, `tour_date`, `travel_date`, `pin`, `status`, `additional_information`, `hear_about_us`, `created_at`, `updated_at`) VALUES
(1, 'Brian', 'John', 'nkurwalawrence18@gmail.com', 788451568, 'Japan', 20, 0, 'Private', 'Mix', 2, 1, 1, '1970-01-01', '2022-08-31', 278876, 'Active', 'Nothing', NULL, '2022-08-10 14:12:50', '2022-08-10 14:12:50'),
(2, 'LAWRENCE', 'Lawrence', 'nkurwalawrence18@gmail.com', 766236222, 'Tanzania', 26, 0, 'Private', 'Comfort', 25, 0, 0, '1970-01-01', '2023-08-31', 770357, 'Active', 'I know nothing', NULL, '2023-08-24 14:40:02', '2023-08-24 14:40:02'),
(3, 't', 't', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 19, 0, 'Private', 'Deluxe', 4, 2, 2, '1970-01-01', '1970-01-01', 473154, 'Active', '44', '34', '2023-11-29 03:42:24', '2023-11-29 03:42:24'),
(4, 'Noel', 'Mambya', 'mambyasospeter@gmail.com', 255, 'Tanzania', 23, 0, 'Private', 'Basic', 2, 2, 1, '1970-01-01', '2024-01-01', 779974, 'Active', NULL, NULL, '2023-11-29 13:55:18', '2023-11-29 13:55:18'),
(5, 'tt', 'tt', 'rrrr@gmail.com', 255, 'Tanzania ltd', 28, 0, 'Private', 'Comfort', 1, 1, 1, '1970-01-01', '1970-01-01', 268723, 'Active', NULL, NULL, '2023-12-02 07:29:13', '2023-12-02 07:29:13'),
(6, 'Rachel', 'Henderson', 'wago@mailinator.com', 1, '04-Jun-1977', 22, 0, 'Private', '0', 62, 74, 52, '1970-01-01', '2022-09-27', 384119, 'Active', 'Deserunt est veniam', '12-May-2005', '2023-12-06 06:27:01', '2023-12-06 06:27:01'),
(7, 'Quynn', 'Marshall', 'cowyzygud@mailinator.com', 1, '22-Nov-1998', 28, 0, 'Private', '0', 55, 14, 98, '1970-01-01', '2009-05-13', 158814, 'Active', 'Reiciendis quis haru', '20-Jun-2014', '2023-12-06 07:37:56', '2023-12-06 07:37:56'),
(8, 'Tamara', 'Norton', 'simu@mailinator.com', 1, '26-May-1971', 28, 0, 'Private', 'Basic', 97, 29, 87, '1970-01-01', '1981-05-16', 244466, 'Active', 'Ipsum ea ut magna nu', '15-Aug-2012', '2023-12-06 07:49:54', '2023-12-06 07:49:54'),
(9, 'Emma', 'Kramer', 'bepyr@mailinator.com', 1, '30-Nov-2016', 28, 0, 'Private', '0', 58, 97, 3, '1970-01-01', '2015-08-08', 645901, 'Active', 'Quis elit dolores d', '18-Jul-2004', '2023-12-06 07:50:21', '2023-12-06 07:50:21'),
(10, 'Christine', 'Morse', 'hiqiqad@mailinator.com', 1, '17-Jun-2012', 26, 0, 'Private', 'Mix', 36, 98, 76, '1970-01-01', '2013-07-18', 412445, 'Active', 'Quis amet cillum ma', '13-Jan-2016', '2023-12-06 08:00:05', '2023-12-06 08:00:05'),
(11, 'Christine', 'Morse', 'hiqiqad@mailinator.com', 1, '17-Jun-2012', 26, 0, 'Private', 'Mix', 36, 98, 76, '1970-01-01', '2013-07-18', 840090, 'Active', 'Quis amet cillum ma', '13-Jan-2016', '2023-12-06 08:00:13', '2023-12-06 08:00:13'),
(12, 'Thane', 'Dixon', 'lujolol@mailinator.com', 1, '06-Jun-2019', 29, 0, 'Private', 'Comfort', 93, 52, 54, '1970-01-01', '1996-09-23', 316226, 'Active', 'Laudantium consecte', '30-Jul-2023', '2023-12-06 08:00:46', '2023-12-06 08:00:46'),
(13, 'Ursa', 'Turner', 'vimenud@mailinator.com', 1, '02-Jul-1982', 11, 0, 'Private', 'Comfort', 60, 27, 43, '1970-01-01', '1990-06-17', 270529, 'Active', 'Quasi maiores placea', '07-Jul-1973', '2023-12-06 08:18:45', '2023-12-06 08:18:45'),
(14, 'Ursa', 'Turner', 'vimenud@mailinator.com', 1, '02-Jul-1982', 11, 0, 'Private', 'Comfort', 60, 27, 43, '1970-01-01', '1990-06-17', 308047, 'Active', 'Quasi maiores placea', '07-Jul-1973', '2023-12-06 08:18:58', '2023-12-06 08:18:58'),
(15, 'Ursa', 'Turner', 'vimenud@mailinator.com', 1, '02-Jul-1982', 11, 0, 'Private', 'Comfort', 60, 27, 43, '1970-01-01', '1990-06-17', 583527, 'Active', 'Quasi maiores placea', '07-Jul-1973', '2023-12-06 08:20:51', '2023-12-06 08:20:51'),
(16, 'Ursa', 'Turner', 'vimenud@mailinator.com', 1, '02-Jul-1982', 11, 0, 'Private', 'Comfort', 60, 27, 43, '1970-01-01', '1990-06-17', 345269, 'Active', 'Quasi maiores placea', '07-Jul-1973', '2023-12-06 08:23:20', '2023-12-06 08:23:20'),
(17, 'Buruhani', 'Wawa', 'rrrr@gmail.com', 255, 'Tanzania ltd', 20, 0, 'Private', 'Deluxe', 1, 2, 3, '1970-01-01', '2024-01-01', 304377, 'Active', NULL, NULL, '2023-12-09 04:36:24', '2023-12-09 04:36:24'),
(18, 'test', 'waa', 'buruwawa@gmail.com', 333, 'TZ', 27, 0, 'Private', 'Comfort', 3, 0, 0, '1970-01-01', '2023-12-08', 299841, 'Active', NULL, NULL, '2023-12-09 04:59:09', '2023-12-09 04:59:09'),
(19, 'gg wawa', 'wawa', 'buruwawa@gmail.com', 323, 'Tz', 29, 0, 'Private', 'Comfort', 3, 22, 2, '1970-01-01', '2024-01-01', 847962, 'Active', '2', '2', '2023-12-11 04:46:20', '2023-12-11 04:46:20'),
(20, 'Maya', 'Page', 'rykylekusi@mailinator.com', 1, '10-Sep-2009', 28, 0, 'Private', 'Mix', 80, 32, 42, '1970-01-01', '1989-01-26', 675512, 'Active', 'Culpa ea dolore ut i', '16-Nov-2009', '2023-12-11 05:38:29', '2023-12-11 05:38:29'),
(21, 'Cyrus', 'Miles', 'pesihug@mailinator.com', 1, '01-May-2007', 28, 0, 'Private', 'Comfort', 72, 66, 17, '1970-01-01', '1987-12-11', 503574, 'Active', 'Animi et magna sed', '12-Jun-2007', '2023-12-11 05:42:27', '2023-12-11 05:42:27'),
(22, 'Vincent', 'Kerr', 'relalaseze@mailinator.com', 1, '28-Apr-1991', 28, 0, 'Private', 'Deluxe', 27, 50, 88, '1970-01-01', '1979-10-05', 126675, 'Active', 'Omnis reiciendis ips', '02-Sep-1999', '2023-12-11 05:50:08', '2023-12-11 05:50:08'),
(23, 'Vincent', 'Kerr', 'relalaseze@mailinator.com', 1, '28-Apr-1991', 28, 0, 'Private', 'Deluxe', 27, 50, 88, '1970-01-01', '1979-10-05', 574970, 'Active', 'Omnis reiciendis ips', '02-Sep-1999', '2023-12-11 05:52:04', '2023-12-11 05:52:04'),
(24, 'Vincent', 'Kerr', 'relalaseze@mailinator.com', 1, '28-Apr-1991', 28, 0, 'Private', 'Deluxe', 27, 50, 88, '1970-01-01', '1979-10-05', 260744, 'Active', 'Omnis reiciendis ips', '02-Sep-1999', '2023-12-11 05:53:19', '2023-12-11 05:53:19'),
(25, 'Emma', 'Russo', 'naramyqas@mailinator.com', 1, '05-Apr-2016', 29, 0, 'Private', 'Comfort', 97, 98, 2, '1970-01-01', '2007-09-09', 275077, 'Active', 'Itaque vitae quis an', '13-May-2005', '2023-12-11 05:55:07', '2023-12-11 05:55:07'),
(26, 'Willow', 'Gay', 'buruwawa@gmail.com', 1, '25-Oct-2005', 29, 0, 'Private', 'Comfort', 54, 95, 76, '1970-01-01', '1989-04-01', 243677, 'Active', 'Qui ut et sint qui', '16-Apr-1999', '2023-12-11 06:02:08', '2023-12-11 06:02:08'),
(27, 'Kevyn', 'Spence', 'buruwawa@yahoo.com', 1, '06-Mar-1983', 29, 0, 'Private', 'Deluxe', 22, 79, 22, '1970-01-01', '2008-12-01', 168434, 'Active', 'Impedit eaque aut q', '30-Jun-1979', '2023-12-11 06:03:04', '2023-12-11 06:03:04'),
(28, 'Shaeleigh', 'Greer', 'buruwawa@yahoo.com', 1, '05-Sep-1995', 29, 0, 'Private', 'Basic', 83, 53, 62, '1970-01-01', '1993-09-01', 252196, 'Active', 'Commodo quos ut temp', '11-Apr-2012', '2023-12-11 06:15:02', '2023-12-11 06:15:02'),
(29, 'Shaeleigh', 'Greer', 'buruwawa@yahoo.com', 1, '05-Sep-1995', 29, 0, 'Private', 'Basic', 83, 53, 62, '1970-01-01', '1993-09-01', 448124, 'Active', 'Commodo quos ut temp', '11-Apr-2012', '2023-12-11 06:16:27', '2023-12-11 06:16:27'),
(30, 'Shaeleigh', 'Greer', 'buruwawa@yahoo.com', 1, '05-Sep-1995', 29, 0, 'Private', 'Basic', 83, 53, 62, '1970-01-01', '1993-09-01', 308613, 'Active', 'Commodo quos ut temp', '11-Apr-2012', '2023-12-11 06:18:47', '2023-12-11 06:18:47'),
(31, 'Shoshana', 'Lara', 'buruwawa@yahoo.com', 1, '08-Aug-1972', 29, 0, 'Private', 'Mix', 34, 61, 28, '1970-01-01', '2013-07-31', 988578, 'Active', 'Eu excepturi ut ut d', '18-Aug-2010', '2023-12-11 06:20:38', '2023-12-11 06:20:38'),
(32, 'Uta', 'Stephenson', 'buruwawa@yahoo.com', 1, '09-Jun-1984', 28, 0, 'Private', '0', 66, 75, 3, '1970-01-01', '2018-02-14', 124291, 'Active', 'Voluptas perferendis', '13-Aug-2014', '2023-12-11 06:21:47', '2023-12-11 06:21:47'),
(33, 'Serina', 'Davidson', 'buruwawa@yahoo.com', 1, '14-Nov-2001', 28, 0, 'Private', '0', 27, 56, 60, '1970-01-01', '2009-03-19', 799981, 'Active', 'Deserunt aliquip dol', '08-Jun-1979', '2023-12-11 06:24:11', '2023-12-11 06:24:11'),
(34, 'Tad', 'Smith', 'buruwawa@yahoo.com', 1, '07-Jun-1992', 28, 0, 'Private', 'Basic', 73, 84, 11, '1970-01-01', '1975-11-28', 436115, 'Active', 'Velit commodi ea aut', '16-Apr-1993', '2023-12-11 06:25:55', '2023-12-11 06:25:55'),
(35, 'Stacy', 'Tran', 'zuquzekyn@mailinator.com', 1, '10-Sep-1985', 19, 0, 'Private', 'Comfort', 37, 91, 87, '1970-01-01', '1988-06-14', 544596, 'Active', 'Reprehenderit dignis', '08-Aug-2013', '2023-12-11 08:56:47', '2023-12-11 08:56:47'),
(36, 'Haha', 'wawa', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 18, 0, 'Group', 'Basic', 1, 2, 2, '1970-01-01', '2023-12-16', 304047, 'Active', 'Rate', 'eae', '2023-12-15 03:54:02', '2023-12-15 03:54:02'),
(37, 'Haha', 'wawa', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 18, 0, 'Group', 'Basic', 1, 2, 2, '1970-01-01', '2023-12-16', 316566, 'Active', 'Rate', 'eae', '2023-12-15 04:03:06', '2023-12-15 04:03:06'),
(38, 'Buruhani', 'Wawa', 'buruwawa@gmail.com', 255, 'Tanzania', 28, 0, 'Private', 'Deluxe', 1, 3, 2, '1970-01-01', '2023-12-22', 852908, 'Active', 'rer', 'rer', '2023-12-15 04:05:06', '2023-12-15 04:05:06'),
(39, 'babu hgf', 'wawa', 'buruwawa@gmail.com', 4333, '5rere', 28, 0, 'Private', 'Deluxe', 2, 2, 1, '1970-01-01', '2023-12-15', 344948, 'Active', 'teting', 'we', '2023-12-15 06:23:44', '2023-12-15 06:23:44'),
(40, 'Nurain', 'Wawa', 'buruwawa@gmail.com', 764706227, 'Tanzania ltd', 29, 0, 'Private', 'Comfort', 3, 2, 4, '1970-01-01', '2023-12-30', 255786, 'Active', 'testing booking', NULL, '2023-12-25 15:07:03', '2023-12-25 15:07:03'),
(41, 'Nurain', 'Wawa', 'buruwawa@gmail.com', 764706227, 'Tanzania ltd', 29, 0, 'Private', 'Comfort', 3, 2, 4, '1970-01-01', '2023-12-30', 131486, 'Active', 'testing booking', NULL, '2023-12-25 15:11:32', '2023-12-25 15:11:32'),
(42, 'Nurain', 'Wawa', 'buruwawa@gmail.com', 764706227, 'Tanzania ltd', 29, 0, 'Private', 'Comfort', 3, 2, 4, '1970-01-01', '2023-12-30', 352678, 'Active', 'testing booking', NULL, '2023-12-25 15:13:43', '2023-12-25 15:13:43'),
(43, 'Nurain', 'Wawa', 'buruwawa@gmail.com', 764706227, 'Tanzania ltd', 29, 0, 'Private', 'Comfort', 3, 2, 4, '1970-01-01', '2023-12-30', 452627, 'Active', 'testing booking', NULL, '2023-12-25 15:14:43', '2023-12-25 15:14:43'),
(44, 'Nurain', 'Wawa', 'buruwawa@gmail.com', 764706227, 'Tanzania ltd', 29, 0, 'Private', 'Comfort', 3, 2, 4, '1970-01-01', '2023-12-30', 479124, 'Active', 'testing booking', NULL, '2023-12-25 15:15:49', '2023-12-25 15:15:49'),
(45, 'Swedi', 'Mohamedi', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 19, 0, 'Private', 'Comfort', 2, 3, 3, '1970-01-01', '2023-12-30', 709035, 'Active', NULL, NULL, '2023-12-26 04:22:59', '2023-12-26 04:22:59'),
(46, 'kasimu', 'wawa', 'buruwawa@gmail.com', 255, 'Tanzania ltdx', 19, 0, 'Private', 'Deluxe', 4, 3, 3, '1970-01-01', '2023-12-31', 720440, 'Active', NULL, NULL, '2023-12-26 05:11:01', '2023-12-26 05:11:01'),
(47, 'Mandi', 'Mohamedi', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 19, 0, 'Private', 'Comfort', 3, 2, 2, '1970-01-01', '2023-12-31', 568196, 'Active', 'wa', 'w', '2023-12-26 08:15:48', '2023-12-26 08:15:48'),
(48, 'popoy', 'Wawa', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 19, 0, 'Private', 'Comfort', 3, 2, 2, '1970-01-01', '2023-12-31', 823112, 'Active', '323', NULL, '2023-12-26 08:20:05', '2023-12-26 08:20:05'),
(49, 'Salima', 'Wawa', 'buruwawa@gmail.com', 255, 'Tanzania ltdx', 19, 0, 'Private', 'Deluxe', 3, 2, 2, '1970-01-01', '2023-12-31', 552205, 'Active', 'ty', NULL, '2023-12-26 08:22:31', '2023-12-26 08:22:31'),
(50, 'Buruhani', 'waa', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 19, 0, 'Private', 'Basic', 3, 2, 2, '1970-01-01', '2023-12-31', 911917, 'Active', 'we', NULL, '2023-12-26 08:24:16', '2023-12-26 08:24:16'),
(51, 'Buruhani', '+255 (0) 753 216 267', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 19, 0, 'Private', 'Basic', 5, 2, 2, '1970-01-01', '2023-12-27', 643667, 'Active', 'er', NULL, '2023-12-27 06:09:45', '2023-12-27 06:09:45'),
(52, 'Buruhani', 'popo', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 50, 0, 'Private', 'Comfort', 5, 2, 2, '1970-01-01', '2023-12-27', 393223, 'Active', NULL, NULL, '2023-12-27 06:41:54', '2023-12-27 06:41:54'),
(53, 'Buruhani', 'popo', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 50, 0, 'Private', 'Comfort', 5, 2, 2, '1970-01-01', '2023-12-27', 900175, 'Active', NULL, NULL, '2023-12-27 07:18:00', '2023-12-27 07:18:00'),
(54, 'test', 'Wawa', 'buruwawa@gmail.com', 255, 'Tanzania ltd', 19, 0, 'Private', 'Basic', 2, 1, 1, '1970-01-01', '2023-12-28', 578062, 'Active', '1', NULL, '2023-12-27 07:19:03', '2023-12-27 07:19:03'),
(55, 'Buruhani', 'fgf', 'buruwawa@gmail.com', 255, 'TZ', 19, 0, 'Private', 'Basic', 3, 2, 2, '1970-01-01', '2023-12-29', 454481, 'Active', NULL, NULL, '2023-12-29 03:32:17', '2023-12-29 03:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `tour_guides`
--

CREATE TABLE `tour_guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driving_license` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_level` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_experience` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hear_about_us` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_guides`
--

INSERT INTO `tour_guides` (`id`, `first_name`, `last_name`, `phone`, `email`, `birth`, `nationality`, `photo`, `cv`, `language`, `other_language`, `pin`, `status`, `driving_license`, `education_level`, `professional`, `work_experience`, `hear_about_us`, `created_at`, `updated_at`) VALUES
(13, 'Juma', 'Nassoro', '0752233325', 'Jmfaume648@mail.com', '1995-10-21', 'Tanzania', 'FB_IMG_16396723284371407_1640774448.jpg', 'FB_IMG_16396723284371407_1640774448.jpg', 'English', 'Germany', '7701627', 'Active', 'Driving licence class c', NULL, NULL, 'Moonlight expedition,Jimbiza Camp as tour guide and driver for two years', 'Oral conversation', '2021-12-29 15:40:48', '2021-12-29 15:40:48'),
(14, 'Josephat', 'George', '0621353038', 'josephatg8@gmail.com', '1990-01-03', 'Tanzanian', 'profile_picture_20211227183749_1642502289.jpg', 'profile_picture_20211227183749_1642502289.jpg', 'English', 'English', '8762973', 'Active', 'D', NULL, NULL, NULL, NULL, '2022-01-18 15:38:09', '2022-01-18 15:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(122) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Buruhani Wawa', 'buruwawa@gmail.com', NULL, '$2y$10$uwC4JPUEUI5DJz3jIR9sl.7Ak6KSXOgbsmOByqZaX3oa409WIlMMy', 'Admin', '1', 'logo-corp-red_1643706022.png', 'wKTSGEVm4AChNw8l4IsfnOwW4l545LAuVmzIKZ719Yp9ZdY02BJ13E7Bf2pU', '2021-10-14 16:34:11', '2022-02-01 14:00:22'),
(54, 'wawa', 'wawa@gmail.com', NULL, '$2y$10$DDzJKRKlRGrIpQJ3dwofFuvLYRl.fw7UuMm1ufD0KUHo7EJwYVqPy', 'Tour Guide', '1', 'imgbox5_1639566480.jpg', NULL, '2021-12-15 08:08:00', '2021-12-15 08:09:05'),
(59, 'Lawrence J.N.M', 'nkurwalawrence18@gmail.com', NULL, '$2y$10$uwC4JPUEUI5DJz3jIR9sl.7Ak6KSXOgbsmOByqZaX3oa409WIlMMy', 'Admin', '1', 'IMG-20230610-WA0005_1690880759.jpg', NULL, '2022-02-01 14:03:41', '2023-08-01 13:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `widget_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `widget_descriptions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodations`
--
ALTER TABLE `accommodations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accommodation_inclusives`
--
ALTER TABLE `accommodation_inclusives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attractions_attraction_title_unique` (`attraction_title`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_bodies`
--
ALTER TABLE `blog_bodies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyaddons`
--
ALTER TABLE `buyaddons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departures`
--
ALTER TABLE `departures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grouptours`
--
ALTER TABLE `grouptours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inclusives`
--
ALTER TABLE `inclusives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itinerary_days`
--
ALTER TABLE `itinerary_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_widgets`
--
ALTER TABLE `page_widgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people_percents`
--
ALTER TABLE `people_percents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_experiences`
--
ALTER TABLE `popular_experiences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `popular_experiences_tour_id_unique` (`tour_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_category_unique` (`category`);

--
-- Indexes for table `post_bodies`
--
ALTER TABLE `post_bodies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_bodies_category_unique` (`category`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programs_tour_name_unique` (`tour_name`);

--
-- Indexes for table `quick_links`
--
ALTER TABLE `quick_links`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `quick_links_quick_title_unique` (`quick_title`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sliders_tour_id_unique` (`tour_id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_offers`
--
ALTER TABLE `special_offers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `special_offers_tour_id_unique` (`tour_id`);

--
-- Indexes for table `tailor_mades`
--
ALTER TABLE `tailor_mades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titles_title_unique` (`title`);

--
-- Indexes for table `tourcostsummaries`
--
ALTER TABLE `tourcostsummaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_equery_social_media`
--
ALTER TABLE `tour_equery_social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_equiry_forms`
--
ALTER TABLE `tour_equiry_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_guides`
--
ALTER TABLE `tour_guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `widgets_widget_name_unique` (`widget_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodations`
--
ALTER TABLE `accommodations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `accommodation_inclusives`
--
ALTER TABLE `accommodation_inclusives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_bodies`
--
ALTER TABLE `blog_bodies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyaddons`
--
ALTER TABLE `buyaddons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departures`
--
ALTER TABLE `departures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grouptours`
--
ALTER TABLE `grouptours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inclusives`
--
ALTER TABLE `inclusives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `itineraries`
--
ALTER TABLE `itineraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `itinerary_days`
--
ALTER TABLE `itinerary_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_widgets`
--
ALTER TABLE `page_widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `people_percents`
--
ALTER TABLE `people_percents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `popular_experiences`
--
ALTER TABLE `popular_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_bodies`
--
ALTER TABLE `post_bodies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `quick_links`
--
ALTER TABLE `quick_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `special_offers`
--
ALTER TABLE `special_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tailor_mades`
--
ALTER TABLE `tailor_mades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tourcostsummaries`
--
ALTER TABLE `tourcostsummaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_equery_social_media`
--
ALTER TABLE `tour_equery_social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `tour_equiry_forms`
--
ALTER TABLE `tour_equiry_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tour_guides`
--
ALTER TABLE `tour_guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
