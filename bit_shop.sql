-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 05:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bit_shop`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_16_000624_create_products_table', 1),
(5, '2020_09_16_201914_create_typeproduct_table', 1),
(6, '2020_09_23_234819_add_admin_field', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `typeproduct_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `price`, `typeproduct_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'LENOVO NOTEBOOK IDEAPAD YOGA SLIM 7 14IIL05-82A1003RTA GREY', 'บางเบาประสิทธิภาพสูงด้วย CPU Intel Gen10 พบกับ Yoga Slim 7 ที่รวมเอาพลังของ Intel Core i5-1035G1 Processorsพร้อมแบตเตอรี่ที่ใช้งานได้ยาวนาน สร้างมาเพื่ออยู่ระดับแนวหน้าของโน้ตบุ๊กแบบพกพา', '31990.00', 3, 'ouxUwdX3p2.jpg', '2020-09-25 14:44:34', '2020-09-25 15:27:26'),
(2, 'HP NOTEBOOK 15S-DU2001TX SILVER', 'HP 15S-du2001TX โน๊ตบุ๊คดีไซน์เรียบหรู สีเงิน ดูภูมิฐาน บางเบา พกพาสะดวก มีหน้าจอ Full HD 15.6 นื้ว ให้ภาพคม กว้างสบายตา ใช้ CPU Intel Core i5-1035G1 และ RAM 8GB รองรับการทำงานพื้นฐานได้อย่างดี สามารถทำงานด้านกราฟิกหรือเล่นเกมเก่าๆ ได้ด้วย GPU NVIDIA GeForce MX330 โน๊ตบุ๊ค HP 15S-du2001TX จัดเก็บข้อมูลใน HDD ขนาด 1 TB จัดเก็บไฟล์ต่างๆ และ ติดตั้งซอฟต์แวร์ได้มากมาย มาพร้อม Windows 10 Home ลิขสิทธิ์แท้ มีประกัน Onsite 2 ปี', '18610.00', 3, 'ta3BWfMFMY.jpg', '2020-09-25 14:45:38', '2020-09-25 14:49:09'),
(3, 'iPhone 8 Plus', 'มาพร้อมดีไซน์แบบกระจกทั้งหมดและขอบอะลูมิเนียมเกรดเดียวกับที่ใช้ในอุตสาหกรรมอวกาศ, การชาร์จแบบไร้สาย1, ความสามารถในการทนน้ำและฝุ่น2, จอภาพ Retina HD ขนาด 5.5 นิ้ว พร้อมการแสดงผลแบบ True Tone3, กล้องคู่ความละเอียด 12MP พร้อมโหมดภาพถ่ายบุคคล และคุณสมบัติ \"การจัดแสงภาพถ่ายบุคคล\", ขับเคลื่อนโดยชิพ A11 Bionic รวมถึงรองรับประสบการณ์ความจริงเสริมในเกมและแอพต่างๆ และมีระบบปฏิบัติการบนมือถือที่ล้ำสมัยที่สุดอย่าง iOS 12 ซึ่งมาพร้อมเครื่องมือใหม่ๆ อันทรงพลังที่จะทำให้ iPhone ของคุณเป็นส่วนตัวยิ่งกว่าครั้งไหนๆ', '18128.00', 1, 'NJWHkdiod3.jpg', '2020-09-25 14:46:05', '2020-09-25 14:49:17'),
(4, 'APPLE IPHONE 7 32GB ROSE GOLD', 'iPhone 7 สีโรสโกลด์ หน่วยความจำ 32GB มาพร้อมดีไซน์ใหม่ที่ดูสบายตาขึ้น ไม่มีเส้นเสาสัญญาณที่หลังตัวเครื่อง ชิป A10 Fusion แรม 2 GB รวมถึงมีการยกเลิกช่องเสียบหูฟังออก เปลี่ยนไปใช้พอร์ต Lightning แทน, ตัวเครื่องกันน้ำ, และกล้องความละเอียด 12MP', '9490.00', 1, 'skSV1vi8QF.jpg', '2020-09-25 14:50:38', '2020-09-25 14:51:38'),
(5, 'APPLE iPhone 11 Pro Max (64GB,Midnight Green)', 'จอภาพ OLED แบบ Super Retina XDR ขนาด 6.5 นิ้วทนน้ำและฝุ่น (ความลึก 4 เมตร ภายในระยะเวลาสูงสุด 30 นาที ที่ระดับ IP68) ระบบสามกล้องที่ประกอบด้วยกล้องอัลตร้าไวด์, ไวด์ และเทเลโฟโต้ ความละเอียด 12MP พร้อมโหมดกลางคืน, โหมดภาพถ่ายบุคคล และวิดีโอระดับ 4K สูงสุด 60 fps กล้องหน้า TrueDepth ความละเอียด 12MP พร้อมโหมดภาพถ่ายบุคคล, วิดีโอระดับ 4K และโหมดสโลว์โมชั่น', '32900.00', 1, 'HWM52KFyVj.jpg', '2020-09-25 14:53:54', '2020-09-25 14:53:54'),
(6, 'SAMSUNG Galaxy Note 20 Ultra (512GB, สี Mystic Bronze)', 'ขนาดจอ(นิ้ว):6.9 จอแสดงผล:Dynamic AMOLED CHIPSET:Exynos 990 ระบบปฏิบัติการ:Android 10, One UI 2.1', '42900.00', 1, 'FK70ehHhHi.jpg', '2020-09-25 14:54:27', '2020-09-25 14:54:27'),
(7, 'APPLE iPad Pro WI-Fi (11\", 512GB, Silver) 2020', 'จอภาพ Liquid Retina แบบขอบจรดขอบขนาด 11 นิ้ว พร้อมเทคโนโลยี ProMotion, การแสดงผลแบบ True Tone และขอบเขตสีกว้างแบบ P31 ชิพ A12Z Bionic พร้อม Neural Engine กล้องไวด์ ความละเอียด 12MP, กล้องอัลตร้าไวด์ ความละเอียด 10MP และ LiDAR Scanner กล้องหน้า TrueDepth ความละเอียด 7MP', '38400.00', 4, 'l4a4YtLIAY.jpg', '2020-09-25 14:55:07', '2020-09-25 14:57:28'),
(8, 'ASUS คอมพิวเตอร์ ออล-อิน-วัน (23.8\", AMD Ryzen 5, RAM 8 GB, 1 TB) รุ่น M241DAKBA017TS', 'CPU:AMD Ryzen 5 3500U  SPEED(GHZ):2.3  RAM(GB):8  TYPE:DDR4', '20990.00', 2, 'iZjuZQFOfU.jpg', '2020-09-25 14:56:18', '2020-09-25 14:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `typeproduct`
--

CREATE TABLE `typeproduct` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `typeproduct`
--

INSERT INTO `typeproduct` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'โทรศัพท์มือถือ', '2020-09-25 14:28:17', '2020-09-25 14:28:17'),
(2, 'คอมพิวเตอร์ PC', '2020-09-25 14:28:28', '2020-09-25 14:28:28'),
(3, 'โน๊ตบุ๊ค', '2020-09-25 14:28:35', '2020-09-25 14:28:35'),
(4, 'แท็บแล็ต', '2020-09-25 14:55:21', '2020-09-25 14:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `isAdmin`, `email_verified_at`, `remember_token`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'wk996110', '$2y$10$xK6JDGVoj7WvY7JUUACf0epkHU6dTBaZUykk2fLWHLLhkp7i4vKWW', 'อาจารย์วัชระ เกตุแก้ว', 'wk996110@gmail.com', 1, NULL, NULL, 'วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์ จ.นนทบุรี', '092-274-9328', '2020-09-25 15:48:49', '2020-09-25 15:48:49'),
(2, 'admin', '$2y$10$.MJs06lHDCe8xMe5UDlWOukWIyHZFZbzNwKh.7Mz7vfAuawS/cvym', 'Admin', 'admin@gmail.com', 1, NULL, NULL, 'วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์ จ.นนทบุรี', '098-999-8562', '2020-09-25 15:50:08', '2020-09-25 15:50:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typeproduct`
--
ALTER TABLE `typeproduct`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `typeproduct`
--
ALTER TABLE `typeproduct`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
