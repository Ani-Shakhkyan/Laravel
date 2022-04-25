-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 25 2020 г., 15:28
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nairobi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2020_06_10_144240_create_casa_table', 2),
(11, '2020_06_10_151511_create_product_table', 2),
(12, '2020_06_10_154430_create_nor_table', 2),
(13, '2020_06_18_113633_create_blogs_tablle', 2),
(14, '2020_06_22_101726_create_products_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Cute motivational Pillow', 'Get to know the materials. Down pillows tend to be the fluffiest, but a combination of down with feather will be firmer and often less expensive. Down alternative pillows can still feel soft and offer good support, but they\'re usually made with synthetic fill and are be more affordable than down. Either way, make sure the outer fabric is tightly woven with no fibers or feathers poking out. Memory foam pillows are thicker and firmer.', '25$', '1593030859.jpg', NULL, NULL),
(10, 'Cute Cat meow Pillow', 'This pillow lets you create your own personalized fill: It comes with extra stuffing that you can add or remove at home to make sure you\'re getting the best fit. It not only saves you the time and effort of searching for your perfect height, but it also lets you test it out in the comfort of your own bed. The fill is a blend of shredded memory foam and microfiber clusters so it feels both supportive and plush. Just be cautious when you\'re adjusting the fill; it can get a bit messy and it\'s not something you\'ll want to adjust on a regular basis. We love that the cover is machine washable and the foam is CertiPUR-US certified.', '26$', '1593030924.jpg', NULL, NULL),
(11, 'Cute Pillows', 'To get the most bang for your buck, you can snag this set of two pillows from Amazon\'s own brand for a fraction of the cost of other individual pillows. The down alternative style is made entirely of polyester so it\'s machine washable and good for those with allergies. This variation has a soft density, so it feels plush and is ideal for stomach or back sleepers that need a flatter pillow.', '25$', '1593031402.jpg', NULL, NULL),
(12, 'Modern Talking Pillow', 'It\'s pricey, but the luxoriously lofty down fill makes this pillow feel supportive yet not too hard. It comes in two variations: soft and medium/firm, which is surprisingly high so it’ll keep your head and neck aligned when you’re lying on your side. It uses a chamber construction to help keep its shape and the outer fabric is tightly woven to keep down inside. On top of that, the down is ethically sourced and the cover is made of 100% organic cotton. The brand also offers a 30-day trial so you can make sure you love it or you get your money back.', '30$', '1593031468.jpg', NULL, NULL),
(13, 'Cute Kitty Pillow', 'This Home Depot option has a unique double-pillow design: there’s an inner chamber of feathers for support with an outer layer of down for a soft, fluffy feel. It has a medium density so it\'s designed to work with most sleep positions – i.e. it\'s not too soft or too firm. Even better: it\'s backed by the Good Housekeeping Seal – so if it’s defective within two years of purchasing, Good Housekeeping will give you a refund. Like the previous pillow, the down is certified by the Responsible Down Standard for ethics and the outer cover is made of cotton.', '29$', '1593031515.jpg', NULL, NULL),
(14, 'Cute Creature Pillow', 'If you like firm support, this is the pillow for you. It’s made of solid memory foam and is ergonomically-designed to give you proper alignment if you sleep on your side or back. The shape is contoured so it’ll fit the curve around your head, neck, and shoulders. It also has a lower profile so it won’t feel too high, though it does fit pillowcases a bit awkwardly. Still, it held up to our pressure tests and those who prefer firm pillows said it felt supportive and great to lie on. The polyester outer cover is removable and can be machine washed.', '28.9$', '1593031584.jpg', NULL, NULL),
(15, 'Cute Cup Pillow', 'It\'s technically a memory foam pillow, yet it feels fluffy and soft thanks to its blend of shredded foam and kapok (a natural fiber that’s similar to cotton). You get the best of both worlds: a pillow that\'s both supportive and plush. The brand doesn\'t specify an intended position, but it’s not too high or too low and we\'ve found that the structure works with multiple sleep styles or for people who often change positions. The cover has copper in it to help prevent you from overheating, but note that the grey color of the pillow is visible through some white pillowcases.', '26$', '1593031622.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ani jan', 'gggghcoe.a@gmail.com', NULL, 'user', '', '$2y$10$27edvffzouEB9jTZf93YDeOghVWA5eTMHgRaqHl1qsz1Evqzbya1G', NULL, '2020-06-18 08:34:11', '2020-06-18 10:04:50'),
(5, 'wesa', 'aaaa@hk.ru', NULL, 'user', '', '$2y$10$e.Ns9bq/bvH7kq35hSJ9meU/yHmaCQyHFLZLv3OqXYjEkSvze1uj.', NULL, '2020-06-19 11:46:14', '2020-06-19 11:46:14'),
(6, 'aass', 'aas.ah@ru', NULL, 'user', '', '$2y$10$6KeJ68bY.Oi0e3bLPIStt.Xw3mEHTZ96q40nwd6TQpjTImALzhBtK', NULL, '2020-06-19 11:47:18', '2020-06-19 11:47:18'),
(7, 'ANI', 'ani.shakhkyan@gmail.com', NULL, 'admin', '', '$2y$10$W8hIRhs8V7UwT0F5qVk55uOFtd9GGmxBjJPs0IQMAEgcMAnH2WHW2', 'mXyACVtGGGYNgkJjHqcfJoGhBJOBo7QwbgYQZ3FLdjLWqB2Ee6mpLXbGcKyd', '2020-06-19 11:49:00', '2020-06-19 11:49:00'),
(8, 'huoi', 'huih@gysgg.di', NULL, 'User', '', '$2y$10$c0ElRa.wKy986nbAhgrPUOWpc1U.IJLGnW2QTdHc7hwAi617flks.', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
