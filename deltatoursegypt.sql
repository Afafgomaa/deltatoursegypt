-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2019 at 06:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deltatoursegypt`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodations`
--

CREATE TABLE `accommodations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `small_iamge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_iamge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tripadvisor_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accommodations`
--

INSERT INTO `accommodations` (`id`, `small_iamge`, `thumbnail_iamge`, `gallery_image`, `name`, `location`, `tripadvisor_link`, `brief`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '/storage/1/hotel.jpg', '/storage/1/hotel.jpg', '"a:3:{i:0;s:20:\\"\\/storage\\/2\\/lobby.jpg\\";i:1;s:20:\\"\\/storage\\/2\\/lobby.jpg\\";i:2;s:20:\\"\\/storage\\/2\\/lobby.jpg\\";}"', 'Holiday In Cairo', 'cairo', 'https://www.tripadvisor.com.eg/Hotel_Review-g294202-d1503662-Reviews-Barcelo_Cairo_Pyramids-Giza_Giza_Governorate.html', '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved</span><br></p>', NULL, '2019-06-30 15:02:55', '2019-06-30 15:12:53'),
(2, '/storage/1/hotel.jpg', '/storage/1/hotel.jpg', '"a:2:{i:0;s:20:\\"\\/storage\\/2\\/lobby.jpg\\";i:1;s:20:\\"\\/storage\\/2\\/lobby.jpg\\";}"', 'Barcelo Pyramids Hotel', 'cairo', NULL, '<p><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">the great light and sound show bring them to life again. Thousands of years have passed since the Pharaohs walked on this Earth, but with your imagination and our show, we bring the history alive to you; every show provides attendees with a learning experience about ancient Egypt as of its significant beginning</span><br></p>', NULL, '2019-06-30 15:11:08', '2019-06-30 15:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `accommodations_programs`
--

CREATE TABLE `accommodations_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accommodations_id` int(11) NOT NULL,
  `programs_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accommodations_programs`
--

INSERT INTO `accommodations_programs` (`id`, `accommodations_id`, `programs_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, NULL, NULL),
(3, 1, 2, NULL, NULL),
(4, 1, 3, NULL, NULL),
(5, 1, 4, NULL, NULL),
(6, 2, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `image`, `title`, `price`, `desc`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'http://www.deltatoursegypt.com/img/add-ons/soundandlightpyramids.png', 'Sound and Light show at Pyramids', 250, '<p><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">Every day when the sun sets, the bustling city of Cairo , the famous pyramids on the Giza plateau south of Cairo are absorbed in the darkness of the night, however, the great light and sound show bring them to life again. Thousands of years have passed since the Pharaohs walked on this Earth, but with your imagination and our show, we bring the history alive to you; every show provides attendees with a learning experience about ancient Egypt as of its significant beginning,&nbsp;</span><br></p>', NULL, '2019-06-30 15:15:22', '2019-06-30 15:15:22'),
(2, 'http://www.deltatoursegypt.com/img/add-ons/Dinner-Cruise2.png', 'Cairo Nile Dinner Cruise', 35, '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">It is a fabulous way to enjoy a night on the Nile while you are in Cairo. So, you are invited to dinner on a cruise boat for two hours sailing trip on the Nile with belly dancer, folklore show, Oriental music and dinner on a 5 star cruise. All the time, you''ll be delighted in our Chef''s menu along with a selection of Egyptian favorites, made with the freshest ingredients, and prepared to make it a memorable dining experience...</span><br></p>', NULL, '2019-06-30 15:16:38', '2019-06-30 15:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `addon_programs`
--

CREATE TABLE `addon_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addon_id` int(11) NOT NULL,
  `programs_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addon_programs`
--

INSERT INTO `addon_programs` (`id`, `addon_id`, `programs_id`, `created_at`, `updated_at`) VALUES
(3, 1, 2, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 1, 1, NULL, NULL),
(6, 2, 1, NULL, NULL),
(7, 1, 4, NULL, NULL),
(8, 2, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

CREATE TABLE `highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highlights`
--

INSERT INTO `highlights` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '3 Nights Cairo .', NULL, '2019-06-30 15:17:06', '2019-06-30 15:17:06'),
(2, '4 Breakfasts and 2 Lunches', NULL, '2019-06-30 15:17:16', '2019-06-30 15:17:16'),
(3, 'Meet at airport Upon arrival .', NULL, '2019-06-30 15:17:27', '2019-06-30 15:17:27'),
(4, 'all Transfers by AC Minibus .', NULL, '2019-06-30 15:18:56', '2019-06-30 15:18:56'),
(5, 'Multi Lingua tour leader guide', NULL, '2019-06-30 15:19:06', '2019-06-30 15:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `highlight_programs`
--

CREATE TABLE `highlight_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `programs_id` int(11) NOT NULL,
  `highlight_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highlight_programs`
--

INSERT INTO `highlight_programs` (`id`, `programs_id`, `highlight_id`, `created_at`, `updated_at`) VALUES
(5, 1, 1, NULL, NULL),
(6, 1, 5, NULL, NULL),
(9, 2, 5, NULL, NULL),
(10, 2, 4, NULL, NULL),
(11, 1, 4, NULL, NULL),
(12, 1, 3, NULL, NULL),
(13, 1, 2, NULL, NULL),
(14, 4, 5, NULL, NULL),
(15, 4, 4, NULL, NULL),
(16, 4, 3, NULL, NULL),
(17, 4, 2, NULL, NULL),
(18, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-06-30 14:50:23', '2019-06-30 14:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `manipulations` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsive_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\images', 1, 'tour', 'hotel', 'hotel.jpg', 'image/jpeg', 'public', 13635, '[]', '[]', '[]', 1, '2019-06-30 15:07:37', '2019-06-30 15:07:37'),
(2, 'App\\images', 1, 'tour', 'lobby', 'lobby.jpg', 'image/jpeg', 'public', 91972, '[]', '[]', '[]', 2, '2019-06-30 15:07:51', '2019-06-30 15:07:51'),
(3, 'App\\images', 1, 'tour', 'Excursions', 'Excursions.jpg', 'image/jpeg', 'public', 118001, '[]', '[]', '[]', 3, '2019-06-30 20:44:21', '2019-06-30 20:44:21'),
(4, 'App\\images', 1, 'tour', 'abu-simbel', 'abu-simbel.jpg', 'image/jpeg', 'public', 40294, '[]', '[]', '[]', 4, '2019-06-30 20:44:33', '2019-06-30 20:44:33'),
(5, 'App\\images', 1, 'tour', 'karnak-temple', 'karnak-temple.jpg', 'image/jpeg', 'public', 18676, '[]', '[]', '[]', 5, '2019-07-01 12:33:18', '2019-07-01 12:33:18');

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
(60, '2019_06_26_001125_create_add_ons_table', 4),
(65, '2019_06_27_160300_create_ighlight_program_table', 8),
(70, '2019_06_27_183900_create_sight_programs_table', 11),
(71, '2019_06_27_184308_create_accommodation_programs_table', 12),
(75, '2019_06_27_192826_create_programs_accommodation_table', 16),
(80, '2019_06_29_180351_create_promo_table', 19),
(261, '2014_10_12_000000_create_users_table', 20),
(262, '2014_10_12_100000_create_password_resets_table', 20),
(263, '2019_06_16_163041_create_media_table', 20),
(264, '2019_06_17_115027_create_images_table', 20),
(265, '2019_06_17_173110_create_sliders_table', 20),
(266, '2019_06_17_223352_create_posts_table', 20),
(267, '2019_06_22_145000_create_pages_table', 20),
(268, '2019_06_23_161321_create_accommodations_table', 20),
(269, '2019_06_25_103241_create_programs_table', 20),
(270, '2019_06_26_001125_create_addons_table', 20),
(271, '2019_06_26_104327_create_highlights_table', 20),
(272, '2019_06_26_125934_create_sights_table', 20),
(273, '2019_06_27_160300_create_highlight_programs_table', 20),
(274, '2019_06_27_184555_create_addon_programs_table', 20),
(275, '2019_06_27_191302_create_programs_sights_table', 20),
(276, '2019_06_27_193952_create_accommodations_programs_table', 20),
(277, '2019_06_27_213432_create_sections_table', 20),
(278, '2019_06_29_190035_create_referrals_table', 20),
(279, '2019_06_29_203250_create_promos_table', 20),
(280, '2019_06_30_162332_create_related_table', 20),
(281, '2019_06_30_163111_create_programs_related_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `slug`, `breif`, `image`, `parent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Egypt Programs', 'Egypt Tour Packages', 'egypt-tour-packages', '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);">Experience all that Egypt has to offer with an exclusive private group holiday. We offer tour packages to suit any taste, mixing classic tours of Ancient Egypt with city tours, diving holidays, and adventures in the desert..</span><br></p>', NULL, 0, NULL, '2019-06-30 14:54:41', '2019-06-30 14:54:41'),
(2, 'Classical Tour Packages', 'Egypt Tours and Travel Packages to Egypt', 'egypt-tours-and-travel-packages-to-egypt', '<p><span style="" open="" sans",="" arial,="" sans-serif;="" font-size:="" 16.8px;="" background-color:="" rgb(255,="" 255,="" 255);"="">Our Egypt Tours and Holidays Packages are based on the flexibility of its operation and can be adjusted according to your needs, if you need to tail your own holiday please contact our Tailor</span><br></p>', 'images/egypt-classical-tours.jpg', 1, NULL, '2019-06-30 14:56:22', '2019-06-30 14:58:55'),
(3, 'Nile River Cruises', 'Egypt Nile Cruise Holidays .', 'egypt-nile-cruise-holidays', '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16.8px;">Egypt is known from a long of years ago with its magnificent Nile and its fertile banks. we organize for Egypt lovers a trip on the wonderful Nile helping them to relieve all their sadness, feeling the spirit of pharaohs &amp; the&nbsp;</span><br></p>', NULL, 0, NULL, '2019-06-30 20:42:46', '2019-06-30 20:42:46'),
(4, 'Lake Nasser Cruise', 'Lake Nasser Cruise title', 'lake-nasser-cruise-title', '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16.8px; color: rgb(66, 66, 66);">lovers a trip on the wonderful Nile helping them to relieve all their sadness, feeling the spirit of pharaohs &amp; the mystery of the Nile</span><br></p>', '/storage/4/abu-simbel.jpg', 3, NULL, '2019-06-30 20:45:24', '2019-06-30 20:45:24'),
(5, 'Egypt Excurions', 'Egypt Excursions  title', 'egypt-excursions-title', '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16.8px;">its fertile banks. we organize for Egypt lovers a trip on the wonderful Nile helping them to relieve all their sadness, feeling the spirit of pharaohs</span><br></p>', NULL, 0, NULL, '2019-06-30 20:47:15', '2019-06-30 20:47:15'),
(6, 'Egypt', 'egypt toures travel', 'egypt-toures-travel', '<p><span style="color: rgb(255, 255, 255);" open="" sans",="" arial,="" sans-serif;="" font-size:="" 18px;="" background-color:="" rgb(255,="" 255,="" 255);="" color:="" 255);"="">all their sadness, feeling the spirit of pharaohs &amp; the mystery of the Nile</span><br></p>', '/storage/3/Excursions.jpg', 5, NULL, '2019-06-30 20:53:37', '2019-06-30 20:54:46');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_to_home_page` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` int(11) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `nights` int(11) DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_gallery` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci,
  `itinerary_heading` text COLLATE utf8mb4_unicode_ci,
  `itinerary` text COLLATE utf8mb4_unicode_ci,
  `pricing` text COLLATE utf8mb4_unicode_ci,
  `price_children` text COLLATE utf8mb4_unicode_ci,
  `pages_id` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `main_image`, `price`, `name`, `kind`, `days`, `nights`, `brief`, `place`, `image_gallery`, `overview`, `itinerary_heading`, `itinerary`, `pricing`, `price_children`, `pages_id`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '/storage/4/abu-simbel.jpg', 250, 'Test of Egypt', 0, 4, 3, '<p><span style="font-family: "Open Sans", Arial, sans-serif; font-size: 14px;">4 Days Holiday tour package in Cairo staying in a 4 stars superior hotel and visiting the great pyramids of giza , Egyptian museum, Old Cairo , Coptic museum as well felucca ride on the Nile</span><br></p>', 'cairo', 'a:4:{i:0;s:55:"http://localhost:8000/images/egyptbduget/abu-simbel.jpg";i:1;s:50:"http://localhost:8000/images/egyptbduget/cairo-day";i:2;s:58:"http://localhost:8000/images/egyptbduget/karnak-temple.jpg";i:3;s:58:"http://localhost:8000/images/egyptbduget/karnak-temple.jpg";}', '<div class="program_box_data" id="desc" open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;"="" style="margin-top: 15px;"><p style="margin-bottom: 20px; line-height: 26px; padding-top: 3em;">4 Days Holiday tour package in Cairo staying in a 4 stars superior hotel and visiting the great<br>pyramids of giza , Egyptian museum, Old Cairo , Coptic museum as well felucca ride on the Nile</p></div><div class="program_box_title" id="include" open="" sans",="" arial,="" sans-serif;"="" style="font-weight: bold; font-size: 20px; margin: 15px; width: 1140px;">Included:</div><div class="program_box_data" open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;"="" style="margin-top: 15px;"><ul style="margin-bottom: 1rem;"><li style="line-height: 24px; list-style: none;">3 Nights 4 Stars superior Hotel on Bed and Breakfast</li><li style="line-height: 24px; list-style: none;">3 Nights 4 Stars superior Hotel on Bed and Breakfast</li><li style="line-height: 24px; list-style: none;">3 Nights 4 Stars superior Hotel on Bed and Breakfast</li></ul></div><div class="program_box_title" id="exclude" open="" sans",="" arial,="" sans-serif;"="" style="font-weight: bold; font-size: 20px; margin: 15px; width: 1140px;">Excluded:</div><div class="program_box_data" open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;"="" style="margin-top: 15px;"><ul style="margin-bottom: 1rem;"><li style="line-height: 24px; list-style: none;">Entry visa to Egypt.</li><li style="line-height: 24px; list-style: none;">Entry visa to Egypt.</li><li style="line-height: 24px; list-style: none;">Entry visa to Egypt</li></ul></div>', 'a:4:{i:0;s:16:"Day 01 : Arrival";i:1;s:36:"Day 02: Pyramids and Egyptian Museum";i:2;s:30:"Day 03 : Sakkara and Old Cairo";i:3;s:17:"Day 4 : Departure";}', 'a:4:{i:0;s:2657:"<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);">Meet at&nbsp;</span><span class="text-primary" style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253); color: rgb(0, 136, 204) !important;">Cairo airport</span><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);">&nbsp;upon arrival by Delta Representative who will assist you through airport customs and formalities.</span><br style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);"><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);">You will be escorted immediately to your</span><span class="text-primary" style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253); color: rgb(0, 136, 204) !important;">&nbsp;4 Stars Hotel</span><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);">&nbsp;by elta AC Modern Fleet.</span><br style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);"><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);">Meet up with your&nbsp;</span><span class="text-primary" style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253); color: rgb(0, 136, 204) !important;">Tour Guide and Tour manager&nbsp;</span><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);">to review your holiday itinerary and confirm pick-up times for each tour.&nbsp;</span><br style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);"><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);">Overnight in Cairo.</span><br style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);"><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253); font-weight: 700 !important;">Welcome Drink</span><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; background-color: rgb(253, 253, 253);">.</span><br></p>";i:1;s:800:"Day 01 : Arrival  Day 02: Pyramids and Egyptian Museum\r\nAfter Breakfast\r\nyou will be accompanied by your friendly expert Egyptologist guide to explore the City of Cairo.\r\nTransfer to visit the Egyptian museum where you can see 250.000 piece of art dated back to 5000 years ago . The most important display is the Fabulous Treasures of King Tut Ank Amon especially the solid Golden Mask.\r\nLunch at a good quality local restaurant \r\nTransfer to Giza Plateau where rise the three Pyramids of Cheops, chephren and Mycrenos which is considered one of the seven wonders of the world and the Sphinx The steadfast guard of the land of Pharaohs , featuring the mask of Chephren and the body of a Lion keeps watch over them.\r\nPM Felucca ride on the majestic Nile \r\nOvernight in Hotel\r\n\r\nMeals: Breakfast, Lunch";i:2;s:611:"After Breakfast\r\nTour To Visit Sakkara The first capital of ancient Egypt where exists the Step Pyramid built by king Zoser in 2700 B.C the first accomplished pyramid in Egypt and some other Toombs \r\nLunch at a good quality local restaurant \r\nThen proceed to Old Cairo where you can visit the Hanging Church , Coptic Museum and ben Ezra Synagogue\r\nThen Proceed to explore Khan el Khalili Cairo’s old bazaar which is one of the most impressive oriental markets comprises a large number of shops which expose fabulous collection of Gold and Silver Jewelry.\r\nTransfer Back to your Hotel \r\nMeals: Breakfast, Lunch";i:3;s:178:"<p>After Breakfast\r\nTransfer to the airport for final Departure .\r\n\r\nMeals: Breakfast</p><p>After Breakfast Transfer to the airport for final Departure . Meals: Breakfast<br></p>";}', '<p><span style="font-family: "Open Sans", Arial, sans-serif; font-size: 14px;">NHANCE YOUR TRIP WITH THESE AMAZING ADDED EXTRAS AND BOLT-ONS</span><br></p>', '<div class="program_box_title text-blue active" id="PriceAndChildrenPolicy" style="font-weight: bold; font-size: 20px; margin: 15px; width: 1140px; font-family: " open="" sans",="" arial,="" sans-serif;="" color:="" rgb(23,="" 80,="" 238)="" !important;"=""><br></div><div class="tab-pane" style="font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;"=""><div class="row" style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;"><div class="col-md-12" style="width: 1170px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%;"><h4 style="margin: 0px 0px 14px; font-weight: 600; line-height: 27px; font-size: 1.4em; color: rgb(33, 37, 41); letter-spacing: -0.05em; -webkit-font-smoothing: antialiased;">Prices</h4><p style="margin-bottom: 20px; line-height: 26px;">Prices are quoted in US Dollars per person per tour and valid only during the selected dates of the offer.</p><hr style="height: 1px; overflow: visible; margin: 22px 0px; border-top: 0px; background: rgba(0, 0, 0, 0.06);"></div><div class="col-md-12" style="width: 1170px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%;"><h4 style="margin: 0px 0px 14px; font-weight: 600; line-height: 27px; font-size: 1.4em; color: rgb(33, 37, 41); letter-spacing: -0.05em; -webkit-font-smoothing: antialiased;">Children Policy</h4><ul style="margin-bottom: 1rem;"><li style="line-height: 24px; list-style: none;">0 - 01.99 Free of Charge</li><li style="line-height: 24px; list-style: none;">2 - 5.99 pay 25% of tour price</li><li style="line-height: 24px; list-style: none;">6 - 11.99 pay 50% of tour price</li><li style="line-height: 24px; list-style: none;">12+ pay full tour price as per adult person</li></ul><hr style="height: 1px; overflow: visible; margin: 22px 0px; border-top: 0px; background: rgba(0, 0, 0, 0.06);"></div><div class="col-md-12" style="width: 1170px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%;"><h4 style="margin: 0px 0px 14px; font-weight: 600; line-height: 27px; font-size: 1.4em; color: rgb(33, 37, 41); letter-spacing: -0.05em; -webkit-font-smoothing: antialiased;">Nots:</h4><p style="margin-bottom: 20px; line-height: 26px;">Children policy is applied to children who share rooms with their parents ( Maximum 1 Child sharing parent''s room )</p><p style="margin-bottom: 20px; line-height: 26px;">If your tour includes airfare, additional charges for your children may apply.</p><p style="margin-bottom: 20px; line-height: 26px;"><br></p></div></div></div>', 2, 'test-of-egypt', NULL, '2019-06-30 15:28:07', '2019-07-01 14:26:39'),
(2, 'https://via.placeholder.com/150', 3, 'execureser', 0, 3, 3, '<p>dc </p>', 'edf', 'a:2:{i:0;s:31:"https://via.placeholder.com/150";i:1;s:31:"https://via.placeholder.com/150";}', '<p>dc</p>', 'a:1:{i:0;s:1:"c";}', 'a:1:{i:0;s:10:"<p>dfv</p>";}', NULL, NULL, 2, 'execureser', NULL, '2019-06-30 16:43:27', '2019-06-30 20:15:46'),
(3, '/storage/3/Excursions.jpg', 240, 'Test Of City', 0, NULL, NULL, '<div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-duration: 1s; animation-fill-mode: both; opacity: 1; animation-name: fadeInUpShorter; font-family: "Open Sans", Arial, sans-serif; font-size: 14px; animation-delay: 400ms;"><span class="sub-title text-4 mt-4" style="margin: 0px; font-size: 1.2em; display: block; opacity: 0.8;">Egypt is known from a long of years ago with its magnificent Nile and its fertile banks. we organize for Egypt lovers a trip on the wonderful Nile helping them to relieve all their sadness, feeling the spirit of pharaohs & the mystery of the Nile.</span></div><div class="appear-animation d-inline-block animated" data-appear-animation="rotateInUpRight" data-appear-animation-delay="500" style="animation-duration: 1s; animation-fill-mode: both; opacity: 0; font-family: "Open Sans", Arial, sans-serif; font-size: 14px; display: inline-block !important;"><span class="arrow hlt" style="background-image: url("../img/arrows.png"); background-position: -209px 0px; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120px; height: 47px; display: inline-block; position: relative; top: 40px;"></span></div>', 'cairo | luxour', 'a:3:{i:0;s:46:"http://localhost:8000/storage/3/Excursions.jpg";i:1;s:46:"http://localhost:8000/storage/3/Excursions.jpg";i:2;s:46:"http://localhost:8000/storage/3/Excursions.jpg";}', '<div class="program_box_title" id="include" style="font-weight: bold; font-size: 20px; margin: 15px; width: 1140px; font-family: "Open Sans", Arial, sans-serif;">Included:</div><div class="program_box_data" style="margin-top: 15px; font-family: "Open Sans", Arial, sans-serif; font-size: 14px;"><ul style="margin-bottom: 1rem;"><li style="line-height: 24px; list-style: none;">3 Nights 4 Stars superior Hotel on Bed and Breakfast</li><li style="line-height: 24px; list-style: none;">3 Nights 4 Stars superior Hotel on Bed and Breakfast</li><li style="line-height: 24px; list-style: none;">3 Nights 4 Stars superior Hotel on Bed and Breakfast</li></ul></div><div class="program_box_title" id="exclude" style="font-weight: bold; font-size: 20px; margin: 15px; width: 1140px; font-family: "Open Sans", Arial, sans-serif;">Excluded:</div><div class="program_box_data" style="margin-top: 15px; font-family: "Open Sans", Arial, sans-serif; font-size: 14px;"><ul style="margin-bottom: 1rem;"><li style="line-height: 24px; list-style: none;">Entry visa to Egypt.</li><li style="line-height: 24px; list-style: none;">Entry visa to Egypt.</li><li style="line-height: 24px; list-style: none;">Entry visa to Egypt.</li></ul></div>', 'a:2:{i:0;s:5:"day 1";i:1;s:5:"day 2";}', 'a:2:{i:0;s:481:"<div class="program_box_data" style="margin-top: 15px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;"><ul style="margin-bottom: 1rem;"><li style="line-height: 24px; list-style: none;">all their sadness, feeling the spirit of pharaohs &amp; the mystery of the Nile<br></li></ul></div><div class="program_box_data" style="margin-top: 15px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;"><ul style="margin-bottom: 1rem;"></ul></div>";i:1;s:75:"all their sadness, feeling the spirit of pharaohs & the mystery of the Nile";}', NULL, NULL, 6, 'test-of-city', NULL, '2019-06-30 20:59:40', '2019-06-30 21:01:15'),
(4, 'http://www.deltatoursegypt.com/img/egypt-tours/saint-catherine1.jpg', 1300, 'Nile Sharq', 0, 12, 11, '<p><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">12 Days holiday tour of egypt covering all major cities and historical sight in Cairo, Luxor, Aswan as well visiting Hurghada</span><br></p>', 'Cairo - Aswan - Luxor - Sharm- - Cairo', 'a:5:{i:0;s:83:"http://www.deltatoursegypt.com/img/egypt-packages/Nile-Valley/Edfu_Temple/edfu4.jpg";i:1;s:83:"http://www.deltatoursegypt.com/img/egypt-packages/Nile-Valley/Edfu_Temple/edfu4.jpg";i:2;s:80:"http://www.deltatoursegypt.com/img/egypt-packages/luxor/Luxor_Temple/luxor06.jpg";i:3;s:80:"http://www.deltatoursegypt.com/img/egypt-packages/luxor/Luxor_Temple/luxor06.jpg";i:4;s:95:"http://www.deltatoursegypt.com/img/egypt-packages/luxor/Hatshepsut_Temple/Hatshepsut_Temple.jpg";}', '<h2 style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; line-height: 42px; color: rgb(14, 14, 14); margin: 0px 0px 32px; font-size: 2.2em; letter-spacing: -1px;">Included</h2><div class="col-md-6" style="padding-right: 15px; padding-left: 15px; width: 569px; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;"><ul class="list icons list-unstyled" style="padding-right: 0px;"><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;3 Nights 4 stars Superior Hotel in Cairo on Bed and Breakfast .</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;3 Nights Deluxe Dahabya Cruise Full Board .</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;2 Nights 4 Stars Hotel in Sharm All Inclusive .</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;1 Night 4 Stars Hotel in Luxor Bed &amp; Breakfast .</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;1 overnight trains: Cairo - Aswan (2 berth, 1st class sleeper cabin).</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;Day Tour to Egptian museum and Giza Pyramids</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;Flight Ticket Luxor / Sharm</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;Day Tour to Sakkara and old Cairo</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;day Tour to Philae temple , High Dam and Unfinished obelisk</li><li style="line-height: 24px; margin-bottom: 3px;">Tour To Edfu and Komombo</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;Day Tour to Valley of the Kings and Hatshepsut Temple</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;Day tour to Karnack and Luxor Temples</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;Felucca Ride on the Nile .</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;All entrance fees to mentioned sights in our program .</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;All relevant transfers related to our Program by Delta AC Modern Fleet .</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-check-square-o" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>Multi lingua expert Egyptologist guide who will accompany you from your first day of arrival till your departure day</li></ul><h2 style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; line-height: 42px; color: rgb(14, 14, 14); margin: 0px 0px 32px; font-size: 2.2em; letter-spacing: -1px;">Not Included</h2><div class="col-md-6" style="padding-right: 15px; padding-left: 15px; width: 569px;"><ul class="list icons list-unstyled" style="padding-right: 0px;"><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-close (alias)" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;Entry visa to Egypt.</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-close (alias)" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;any extra item not mentioned in our Program</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-close (alias)" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;any extra visit in sight like Mummeis Room and enreting the pyramids</li></ul></div><div class="col-md-6" style="padding-right: 15px; padding-left: 15px; width: 569px;"><ul class="list icons list-unstyled" style="padding-right: 0px;"><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-close (alias)" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;Tip for your tour guide. We recommend you allow $3 - 5 USD per day, per traveller. Tipping your guide is an entirely personal gesture</li><li style="line-height: 24px; margin-bottom: 3px;"><span class="fa fa-close (alias)" style="color: rgb(0, 136, 204); margin-right: 5px;"></span>&nbsp;Personal Expenses</li></ul></div></div>', 'a:11:{i:0;s:16:"Day 01 : Arrival";i:1;s:36:"Day 02: Pyramids and Egyptian Museum";i:2;s:30:"Day 03 : Sakkara and Old Cairo";i:3;s:13:"Day 04 :Aswan";i:4;s:25:"Day 05 : Edfu and Komombo";i:5;s:16:"Day 06 : Komombo";i:6;s:24:"Day 07 : Valley of Kings";i:7;s:24:"Day 08 : Sharm el Sheikh";i:8;s:24:"Day 09 : Sharm el sheikh";i:9;s:14:"Day 10 : Cairo";i:10;s:18:"Day 12 : Departure";}', 'a:11:{i:0;s:2267:"<p><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">Meet at&nbsp;</span><span class="text-primary" style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">Cairo airport</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">&nbsp;upon arrival by Delta Representative who will assist you through airport customs and formalities.</span><br style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;"><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">You will be escorted immediately to your</span><span class="text-primary" style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">&nbsp;4 Stars Hotel</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">&nbsp;by elta AC Modern Fleet.</span><br style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;"><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">Meet up with your&nbsp;</span><span class="text-primary" style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">Tour Guide and Tour manager</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">&nbsp;to review your holiday itinerary and confirm pick-up times for each tour.&nbsp;</span><br style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;"><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">Overnight in Cairo.</span><br style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;"><strong style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">Welcome Drink</strong><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">.</span><br></p>";i:1;s:744:"After Breakfast\r\nyou will be accompanied by your friendly expert Egyptologist guide to explore the City of Cairo.\r\nTransfer to visit the Egyptian museum where you can see 250.000 piece of art dated back to 5000 years ago . The most important display is the Fabulous Treasures of King Tut Ank Amon especially the solid Golden Mask.\r\nLunch at a good quality local restaurant \r\nTransfer to Giza Plateau where rise the three Pyramids of Cheops, chephren and Mycrenos which is considered one of the seven wonders of the world and the Sphinx The steadfast guard of the land of Pharaohs , featuring the mask of Chephren and the body of a Lion keeps watch over them.\r\nPM Felucca ride on the majestic Nile \r\nOvernight in Hotel\r\n\r\nMeals: Breakfast, Lunch";i:2;s:693:"After Breakfast\r\nTour To Visit Sakkara The first capital of ancient Egypt where exists the Step Pyramid built by king Zoser in 2700 B.C the first accomplished pyramid in Egypt and some other Toombs \r\nLunch at a good quality local restaurant \r\nThen proceed to Old Cairo where you can visit the Hunging Church , Coptic Museum and ben Ezra Sinagogue\r\nThen Proceed to explore Khan el Khalili Cairo’s old bazaar which is one of the most impressive oriental markets comprises a large number of shops which expose fabulous collection of Gold and Silver Jewelry.\r\nTransfer to the railway station to travel to Aswan by 1st Class Sleeper Train. \r\nOvernight in Train \r\n\r\nMeals: Breakfast, Lunch, Dinner";i:3;s:821:"Meet at Aswan Railway station upon arrival and transfer to your Dahabiya Cruise For embarkation \r\nTransfer to your Dahabya for embarkation \r\nyou will be accompanied by your Egyptologist guide to enjoy a day tour in Aswan \r\nTour to visit the world famous High Dam an engineering miracle, it was built in 1960 & it provides electricity and irrigation for the whole of Egypt.\r\nProceed to visit Philae Temple dedicated to the Goddesses Isis and Hathor it includes various shrines and sanctuaries.\r\nLater proceed to the largest known ancient obelisk unfinished Oblisque ( The Granite Quarries ) located in the northern region of the stone quarries of ancient Egypt,\r\nTransfer back to your Nile Cruise\r\nLunch Onboard of your Dahabya\r\nSail to Komombo\r\nPM International buffet Dinner \r\nOvernight on Cruise\r\n\r\nMeals: Lunch, Dinner";i:4;s:402:"After Breakfast \r\nTour to visit Komombo Temple a double temple dedicated to 2 Gods , The right hand Temple dedicated to the crocodile God Sebek ,while the Left Hand Temple dedicated to Haeroris The Great .\r\nTransfer back to your Dahabiya for Lunch\r\nSail to Edfu \r\nDinner will be served on the upper deck whilst soaking up the tranquil atmosphere \r\nDinner and overnight \r\nMeals: Breakfast, Lunch, Dinner";i:5;s:364:"After Breakfast \r\nTour By Carriages to visit Edfu Temple dedicated to God Horus The Great , The Solar God of war.\r\nLunch onboard of your Dahabiya while Sailing to a Nile island \r\nDinner will be served in the edge of the Nile according to weather status or will be served on Sun Deck.\r\nPM enjoy Galabia Party and oriental Dinner \r\n. >Meals: Breakfast, Lunch, Dinner";i:6;s:1003:"Disembarkation from Dahabiya After breakfastin Esna \r\nTransfer to Luxor by Private AC minibus ( about 1 Hour Drive )\r\nCross the river Nile to the West Bank of the Nile in the heart of west bank mountains to Visit the Royal burial place for egypt’s most splendid pharos The valley of the kings which was a complex of burial chambers for the Pharaohs from Tutmose 1 .\r\nThen Proceed to visit the mortuary Hatshepsut Temple El Deir El Bahari witch it was dedicated to the goddess Hathour god of beauty and love .\r\nOn our way back we stop to visit the Colossi of Memnon The two gigantic statues.\r\nLunch in a Good Quality Restaurant in Luxor \r\nTour to visit the East bank of the Nile\r\nVisit The Temple of Luxor dedicated to Amoun-Ra the king of Goods in pharos time and And the Great Karnak Temple witch is considered the world’s largest religious complex. Which were linked together by an avenue ram-headed Sphinxes.\r\nPM Transfer to your Hotel For Check in \r\nOvernight in Hotel\r\n\r\nMeals: Breakfast, Lunch";i:7;s:436:"Check out from your Hotel after breakfast \r\nFree Day at Leisure \r\nLunch in a Good quality local restaurant \r\nTransfer to Luxor airport to fly to Sharm el Sheikh \r\nArrive Sharm el Sheikh the most famous tourist resort in the Red Sea coast and an international center for aquatic sports .\r\nyou will be escorted to your all Inclusive 4 Stars Hotel \r\nDinner will be served in the Hotel\r\nOvernight in Hotel\r\n\r\nMeals: Breakfast, Lunch, Dinner";i:8;s:311:"After Breakfast \r\nFree Day at leisure where you can enjoy all kinds of water Sports like windsurfing, sailing,deep-sea fishing\r\nor you can relax on the beach with your family enjoying the sun and the warm water\r\nLunch And Dinner will be served in the Hotel\r\nOvernight in Hotel\r\n\r\nMeals: Breakfast, Lunch, Dinner";i:9;s:299:"Check out From Hotel After breakfast, \r\nFree Day at leisure to explore the City of Sharm \r\nLunch in A good Quality Restaurant \r\nTransfer back to Cairo by AC modern Bus ( 6 Hours Drive )\r\nArrive Cairo and transfer to your Hotel by Delta AC modern fleet \r\nOvernight in Hotel\r\n\r\nMeals: Breakfast, Lunch";i:10;s:83:"After Breakfast \r\nTransfer to the airport for final Departure .\r\n\r\nMeals: Breakfast";}', '<table class="table table-striped push-top" style="background-color: rgb(255, 255, 255); width: 1108px; margin-top: 35px; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;"><tbody><tr><th style="line-height: 1.42857;">Per person In Double</th><td style="line-height: 1.42857;">1300USD</td></tr><tr><th style="line-height: 1.42857;">Single Suplement over 2 Persons</th><td style="line-height: 1.42857;">620USD</td></tr><tr><th style="line-height: 1.42857;">Child between 3 &amp; 6 Years</th><td style="line-height: 1.42857;">150USD</td></tr><tr><th style="line-height: 1.42857;">Child between 6 &amp; 12 Years</th><td style="line-height: 1.42857;">740USD</td></tr><tr><th style="line-height: 1.42857;">Child Under 3 Years</th><td style="line-height: 1.42857;">30</td></tr></tbody></table>', '<p><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">however, the great light and sound show bring them to life again. Thousands of years have passed since the Pharaohs walked on this Earth, but with your imagination and our show, we bring the history alive to you; every show provides attendees with a learning experience abo</span><br></p>', 2, 'nile-sharq', NULL, '2019-07-01 14:43:19', '2019-07-01 14:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `programs_related`
--

CREATE TABLE `programs_related` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `programs_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs_related`
--

INSERT INTO `programs_related` (`id`, `programs_id`, `related_id`, `created_at`, `updated_at`) VALUES
(4, 2, 1, NULL, NULL),
(5, 1, 2, NULL, NULL),
(6, 2, 3, NULL, NULL),
(7, 4, 1, NULL, NULL),
(8, 4, 2, NULL, NULL),
(9, 4, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `programs_sights`
--

CREATE TABLE `programs_sights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sights_id` int(11) NOT NULL,
  `programs_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs_sights`
--

INSERT INTO `programs_sights` (`id`, `sights_id`, `programs_id`, `created_at`, `updated_at`) VALUES
(13, 1, 1, NULL, NULL),
(14, 2, 1, NULL, NULL),
(15, 1, 4, NULL, NULL),
(16, 2, 4, NULL, NULL),
(17, 3, 4, NULL, NULL),
(18, 4, 4, NULL, NULL),
(19, 5, 4, NULL, NULL),
(20, 6, 4, NULL, NULL),
(21, 7, 4, NULL, NULL),
(22, 8, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `related`
--

CREATE TABLE `related` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sights`
--

CREATE TABLE `sights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sights`
--

INSERT INTO `sights` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Egyptian museum', NULL, '2019-06-30 15:17:40', '2019-06-30 15:17:40'),
(2, 'Mohamed ali mosque', NULL, '2019-06-30 15:17:47', '2019-06-30 15:17:47'),
(3, 'Giza Pyramids', NULL, '2019-06-30 15:17:55', '2019-06-30 15:17:55'),
(4, 'Sakkara', NULL, '2019-06-30 15:18:02', '2019-06-30 15:18:02'),
(5, 'Hanging Church', NULL, '2019-06-30 15:18:09', '2019-06-30 15:18:09'),
(6, 'Coptic Museum', NULL, '2019-06-30 15:18:16', '2019-06-30 15:18:16'),
(7, 'Nile Felucca', NULL, '2019-06-30 15:18:23', '2019-06-30 15:18:23'),
(8, 'Khan el Khalili', NULL, '2019-06-30 15:18:30', '2019-06-30 15:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_1`, `title_1`, `description_1`, `slider_2`, `title_2`, `description_2`, `slider_3`, `title_3`, `description_3`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost:8000/images/slider_bg_1.jpg', 'Egypt HOLIDAYS', 'all inclusive holidays to egypt on a budget price.', 'http://localhost:8000/images/slider_bg_2.jpg', 'Nile Cruise Holidays ', 'Discover the Mystery of', 'http://localhost:8000/images/slider_bg_3.jpg', 'Red Sea Holidays', 'Combine your Visit to egypt with a Relaxing stay on the red sea Shore', '2019-06-30 14:50:23', '2019-06-30 14:50:23');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$n3esSytHSneNpTVJ7JFtqO8eNKqT2FI6fVXFz21KEihHrKXEQ6BR2', NULL, '2019-06-30 14:50:23', '2019-06-30 14:50:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodations`
--
ALTER TABLE `accommodations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accommodations_programs`
--
ALTER TABLE `accommodations_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addon_programs`
--
ALTER TABLE `addon_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highlight_programs`
--
ALTER TABLE `highlight_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs_related`
--
ALTER TABLE `programs_related`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs_sights`
--
ALTER TABLE `programs_sights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related`
--
ALTER TABLE `related`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sights`
--
ALTER TABLE `sights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `accommodations`
--
ALTER TABLE `accommodations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `accommodations_programs`
--
ALTER TABLE `accommodations_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `addon_programs`
--
ALTER TABLE `addon_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `highlights`
--
ALTER TABLE `highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `highlight_programs`
--
ALTER TABLE `highlight_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `programs_related`
--
ALTER TABLE `programs_related`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `programs_sights`
--
ALTER TABLE `programs_sights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `related`
--
ALTER TABLE `related`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sights`
--
ALTER TABLE `sights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
