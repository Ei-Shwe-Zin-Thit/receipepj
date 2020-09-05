-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 05, 2020 at 11:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hellreceipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(14, 'bacon', '2020-08-14 19:11:09', '2020-08-14 19:11:09'),
(15, 'salad', '2020-08-14 19:23:36', '2020-08-14 19:23:36'),
(16, 'pizza', '2020-08-17 00:14:49', '2020-08-17 00:14:49'),
(17, 'sushi', '2020-08-26 01:45:36', '2020-08-26 01:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `recipe_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2020-08-07 11:10:22', '2020-08-07 11:10:22'),
(2, 2, 4, '2020-08-07 11:10:37', '2020-08-07 11:10:37'),
(3, 2, 5, '2020-08-07 11:10:49', '2020-08-07 11:10:49'),
(4, 2, 5, '2020-08-07 11:10:57', '2020-08-07 11:10:57'),
(5, 1, 4, '2020-08-07 11:48:37', '2020-08-07 11:48:37'),
(6, 1, 11, '2020-08-14 22:15:07', '2020-08-14 22:15:07'),
(7, 1, 5, '2020-08-15 00:03:15', '2020-08-15 00:03:15'),
(8, 5, 15, '2020-08-17 00:21:54', '2020-08-17 00:21:54'),
(9, 12, 12, '2020-09-05 02:11:53', '2020-09-05 02:11:53'),
(10, 12, 12, '2020-09-05 02:11:58', '2020-09-05 02:11:58'),
(11, 12, 12, '2020-09-05 02:12:13', '2020-09-05 02:12:13'),
(12, 12, 12, '2020-09-05 02:17:40', '2020-09-05 02:17:40'),
(13, 12, 18, '2020-09-05 02:18:05', '2020-09-05 02:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_07_31_101853_create_newsletters_table', 1),
(7, '2020_08_04_194144_create_categories_table', 2),
(8, '2020_08_05_100635_create_categories_table', 3),
(10, '2020_08_06_084202_create_recipes_table', 4),
(11, '2014_10_12_100000_create_password_resets_table', 5),
(12, '2020_08_07_163734_create_favourites_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Sayargyi', 'info@kabargyi.com', 'fadsf dsase', '2020-07-31 04:42:37', '2020-07-31 04:42:37'),
(3, 'nay min', 'admin@admin.com', 'ko ko nyi nyi', '2020-08-04 23:05:02', '2020-08-04 23:05:02'),
(4, 'Ei Shwe Zin Thit', 'yajoho2450@lagsixtome.com', 'update more recipes', '2020-08-14 19:28:59', '2020-08-14 19:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `howtocook` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `serving` smallint(6) NOT NULL,
  `fav` int(11) DEFAULT 0,
  `count` int(11) DEFAULT 0,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `img`, `time`, `ingredient`, `howtocook`, `serving`, `fav`, `count`, `publisher`, `cat_id`, `created_at`, `updated_at`) VALUES
(11, 'Bacon Wrapped ', '5f43829bb4f3d_Bacon Wrapped Jalapeno Popper Stuffed Chicken.jpg', '30minutes', '<ul>\r\n	<li><em><strong>4 small chicken breasts, pounded thin&quot;, &quot;salt and pepper to taste&quot;, &quot;4 jalapenos, diced&quot;, </strong></em></li>\r\n	<li><em><strong>&quot;4 ounces cream cheese, room temperature&quot;, &quot;1 cup cheddar cheese, shredded&quot;, &quot;8 slices bacon&quot;</strong></em></li>\r\n</ul>', 'Lay the chicken flat, season the outside with salt and pepper, spread 1/4 of the mixture of the jalapenos and the cheeses on the chicken breasts, roll them up and wrap each in 2 slices of bacon Grill over indirect medium heat, with the lid down, until the bacon is crispy and the chicken is cooked (160F to 165F), about 20-30 minutes, or bake in a preheated 400F/200C oven on a wire rack on a baking pan until cooked, about 20-30 minutes, turning the oven to broil for the last few minutes to ensure that the bacon is crispy.', 4, 0, 3, 'Closet Cooking', 14, '2020-08-14 19:19:43', '2020-09-05 02:47:20'),
(12, 'papaya salad', '5f373f6882cd9_Bacon Wrapped Jalapeno Popper Stuffed Chicken.jpg', '30minutes', 'lime', 'Lay the chicken flat, season the outside with salt and pepper, spread 1/4 of the mixture of the jalapenos and the cheeses on the chicken breasts, roll them up and wrap each in 2 slices of bacon Grill over indirect medium heat, with the lid down, until the bacon is crispy and the chicken is cooked (160F to 165F), about 20-30 minutes, or bake in a preheated 400F/200C oven on a wire rack on a baking pan until cooked, about 20-30 minutes, turning the oven to broil for the last few minutes to ensure that the bacon is crispy.', 4, 0, 6, 'Closet Cooking', 15, '2020-08-14 19:20:32', '2020-09-05 02:44:26'),
(15, 'cheese pizza', '5f4b24ef175db_cheese.jpg', '30minutes', '<p>lime</p>', 'Lay the chicken flat, season the outside with salt and pepper, spread 1/4 of the mixture of the jalapenos and the cheeses on the chicken breasts, roll them up and wrap each in 2 slices of bacon Grill over indirect medium heat, with the lid down, until the bacon is crispy and the chicken is cooked (160F to 165F), about 20-30 minutes, or bake in a preheated 400F/200C oven on a wire rack on a baking pan until cooked, about 20-30 minutes, turning the oven to broil for the last few minutes to ensure that the bacon is crispy.', 4, 5, 4, 'The Pioneer Woman', 16, '2020-08-17 00:17:03', '2020-09-05 02:47:32'),
(16, 'Homemade pizza', '5f4a90a74929f_Screenshot (92).png', '20minutes', '<ul>\r\n	<li>1 1/2 cups (355 ml) warm water (105&deg;F-115&deg;F)</li>\r\n	<li>1 package (2 1/4 teaspoons) of active dry yeast</li>\r\n	<li>3 3/4 cups (490 g) bread flour</li>\r\n	<li>2 tablespoons extra virgin olive oil (omit if cooking pizza in a wood-fired pizza oven)</li>\r\n	<li>2 teaspoons salt</li>\r\n	<li>1 teaspoon sugar</li>\r\n</ul>', '<ul>\r\n	<li>1 1/2 cups (355 ml) warm water (105&deg;F-115&deg;F)</li>\r\n	<li>1 package (2 1/4 teaspoons) of active dry yeast</li>\r\n	<li>3 3/4 cups (490 g) bread flour</li>\r\n	<li>2 tablespoons extra virgin olive oil (omit if cooking pizza in a wood-fired pizza oven)</li>\r\n	<li>2 teaspoons salt</li>\r\n	<li>1 teaspoon sugar</li>\r\n</ul>', 4, 0, 1, 'pink', 16, '2020-08-29 11:00:15', '2020-08-29 11:00:44'),
(17, 'Sushi bowl', '5f4b1d1d6269d_Screenshot (101).png', '30minutes', '<ul>\r\n	<li>2&nbsp;(4-inch) square sheets nori seaweed</li>\r\n	<li>6&nbsp;ounces&nbsp;extra-firm tofu</li>\r\n	<li>grated zest and juice of one orange</li>\r\n	<li>grated zest and juice of 1/2 lemon</li>\r\n	<li>2&nbsp;tablespoons&nbsp;(raw) brown sugar (reg. sugar is ok too)</li>\r\n	<li>2&nbsp;tablespoons&nbsp;shoyu sauce (or soy sauce)</li>\r\n	<li>2&nbsp;tablespoons&nbsp;(brown) rice vinegar</li>\r\n	<li>4&nbsp;cups&nbsp;cooked brown rice, warm</li>\r\n	<li>4&nbsp;green onions, chopped</li>\r\n	<li>1&nbsp;avocado, peeled, pitted, and thinly sliced</li>\r\n	<li>3&nbsp;tablespoons&nbsp;sesame seeds, toasted</li>\r\n</ul>', '<ul>\r\n	<li>2&nbsp;(4-inch) square sheets nori seaweed</li>\r\n	<li>6&nbsp;ounces&nbsp;extra-firm tofu</li>\r\n	<li>grated zest and juice of one orange</li>\r\n	<li>grated zest and juice of 1/2 lemon</li>\r\n	<li>2&nbsp;tablespoons&nbsp;(raw) brown sugar (reg. sugar is ok too)</li>\r\n	<li>2&nbsp;tablespoons&nbsp;shoyu sauce (or soy sauce)</li>\r\n	<li>2&nbsp;tablespoons&nbsp;(brown) rice vinegar</li>\r\n	<li>4&nbsp;cups&nbsp;cooked brown rice, warm</li>\r\n	<li>4&nbsp;green onions, chopped</li>\r\n	<li>1&nbsp;avocado, peeled, pitted, and thinly sliced</li>\r\n	<li>3&nbsp;tablespoons&nbsp;sesame seeds, toasted</li>\r\n</ul>', 4, 0, 0, 'pink', 17, '2020-08-29 20:59:33', '2020-08-30 00:21:37'),
(18, 'sushi roll', '5f4b2454d8ab2_Screenshot (103).png', '30minutes', '<ul>\r\n	<li>⅔ cup uncooked short-grain white rice</li>\r\n	<li>3 tablespoons rice vinegar</li>\r\n	<li>3 tablespoons white sugar</li>\r\n	<li>1&thinsp;&frac12; teaspoons salt</li>\r\n	<li>4 sheets nori seaweed sheets</li>\r\n	<li>&frac12; cucumber, peeled, cut into small strips</li>\r\n	<li>2 tablespoons pickled ginger</li>\r\n	<li>1 avocado</li>\r\n	<li>&frac12; pound imitation crabmeat, flaked</li>\r\n</ul>', '<ul>\r\n	<li>⅔ cup uncooked short-grain white rice</li>\r\n	<li>3 tablespoons rice vinegar</li>\r\n	<li>3 tablespoons white sugar</li>\r\n	<li>1&thinsp;&frac12; teaspoons salt</li>\r\n	<li>4 sheets nori seaweed sheets</li>\r\n	<li>&frac12; cucumber, peeled, cut into small strips</li>\r\n	<li>2 tablespoons pickled ginger</li>\r\n	<li>1 avocado</li>\r\n	<li>&frac12; pound imitation crabmeat, flaked</li>\r\n</ul>', 4, 1, 1, 'ei', 17, '2020-08-29 21:30:20', '2020-09-05 02:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `fav_list` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rank`, `fav_list`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'ei', 'ei@gmail.com', NULL, '$2y$10$sk9DN3094RhXXkhb/e5aJu3BFF16GIKbAqEgiQvBh1w5m4XAReBY6', 'user', NULL, NULL, '2020-08-17 00:19:00', '2020-08-17 00:19:00'),
(9, 'eishwe', 'eishwe@gmail.com', NULL, '$2y$10$XyuX0NKEk0nD91NsUbsF1ealZwOjd7L/71VAmvfezDkd6SXi36Ati', 'user', NULL, NULL, '2020-08-26 01:40:50', '2020-08-26 01:40:50'),
(10, 'one', 'one@gmail.com', NULL, '$2y$10$luml1C2rM5umr3crjJTCPuEQZomQBIn59DQb4x1ponTeXY1.b4JjW', 'user', NULL, NULL, '2020-08-26 03:55:27', '2020-08-26 03:55:27'),
(11, 'two', 'two@gmail.com', NULL, '$2y$10$mki6bdHVEeE9X4Pgi06gJ.fpgeO7WofmA9W2lkyTvXV6A0eUy/XO2', 'user', NULL, NULL, '2020-08-26 03:56:24', '2020-08-26 03:56:24'),
(12, 'three', 'three@gmail.com', NULL, '$2y$10$Lq9XDARbNZVruU4vFAdfdeUQRCftAwv/40DoglUZVio2BAje6Z7fC', 'user', NULL, NULL, '2020-08-26 03:57:17', '2020-08-26 03:57:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
