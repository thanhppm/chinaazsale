-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 27, 2021 lúc 03:36 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chinaazsale`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2021_01_26_043725_create_role_permission_table', 1),
(17, '2021_01_26_051127_create_user_role_table', 1),
(21, '2021_01_25_045823_create_users_table', 2),
(22, '2021_01_25_051252_create_roles_table', 2),
(23, '2021_01_25_063222_create_permissions_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'kho-ha-noi', 'Kho Hà Nội', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(2, 'kho-trung-quoc', 'Kho TQ', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(3, 'thu-chi', 'Thu Chi', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(4, 'chi-phi', 'Chi Phí', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(5, 'tao-phieu-chi', 'Tạo Phiếu Chi', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(6, 'duyet-phieu-chi', 'Duyệt Phiếu Chi', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(7, 'xem-danh-sach-kh', 'Xem Danh Sách KH', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(8, 'tai-khoan-user', 'Tài Khoản User', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(9, 'vai-tro', 'Vai Trò', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(10, 'tai-khoan', 'Tài Khoản', '2021-01-25 22:39:43', '2021-01-25 22:39:43'),
(11, 'bieu-mau', 'Biểu Mẫu', '2021-01-25 22:39:43', '2021-01-25 22:39:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '2021-01-25 22:39:43', '2021-01-27 00:02:21'),
(2, 'ke-toan', 'Kế Toán', '2021-01-25 22:39:43', '2021-01-27 00:19:32'),
(3, 'kho-van', 'Kho Vận', '2021-01-25 22:39:43', '2021-01-27 02:17:23'),
(4, 'kho-trung-quoc', 'Kho TQ', '2021-01-25 22:39:43', '2021-01-27 02:17:47'),
(5, 'nhan-vien-kinh-doanh', 'NVKD', '2021-01-25 22:39:43', '2021-01-27 02:18:29'),
(6, 'ke-toan-truong', 'Kế Toán Trưởng', '2021-01-25 22:39:43', '2021-01-27 02:18:57'),
(7, 'quan-ly', 'Quản Lý', '2021-01-25 22:39:43', '2021-01-27 02:39:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_permission`
--

CREATE TABLE `role_permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_permission`
--

INSERT INTO `role_permission` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, NULL, NULL),
(5, 1, 2, NULL, NULL),
(6, 1, 3, NULL, NULL),
(7, 1, 4, NULL, NULL),
(8, 1, 5, NULL, NULL),
(9, 1, 6, NULL, NULL),
(10, 1, 7, NULL, NULL),
(11, 1, 8, NULL, NULL),
(12, 1, 9, NULL, NULL),
(13, 1, 10, NULL, NULL),
(14, 1, 11, NULL, NULL),
(15, 2, 1, NULL, NULL),
(16, 2, 2, NULL, NULL),
(17, 2, 3, NULL, NULL),
(18, 2, 4, NULL, NULL),
(19, 3, 1, NULL, NULL),
(20, 3, 2, NULL, NULL),
(21, 4, 2, NULL, NULL),
(22, 5, 5, NULL, NULL),
(23, 5, 6, NULL, NULL),
(24, 5, 7, NULL, NULL),
(25, 6, 3, NULL, NULL),
(26, 6, 4, NULL, NULL),
(27, 6, 5, NULL, NULL),
(28, 6, 6, NULL, NULL),
(29, 6, 7, NULL, NULL),
(35, 7, 5, NULL, NULL),
(36, 7, 6, NULL, NULL),
(37, 7, 7, NULL, NULL),
(38, 7, 8, NULL, NULL),
(39, 7, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 3, 3, NULL, NULL),
(7, 4, 4, NULL, NULL),
(8, 5, 5, NULL, NULL),
(9, 6, 6, NULL, NULL),
(10, 7, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '19191919101', NULL, '$2y$10$RSsgDg5cNOc9Qyrs.yP3BOzQ7kn0HJpOzeuZB.EfphQfVinBqgrQm', 1, NULL, '2021-01-25 22:39:43', '2021-01-27 00:18:55'),
(2, 'Kế Toán', 'kế toán', 'ketoan@gmail.com', '404104140141041', NULL, '$2y$10$7a9UTb9m2QbTmCKb/RBj..AcvXo.U308ZBcpEDhhGSxVEhtWOVN8S', 1, NULL, '2021-01-25 22:39:43', '2021-01-27 00:19:43'),
(3, 'Kho Vận', 'kho vận', 'khovan@gmail.com', '19141941477', NULL, '$2y$10$saf7ZsxP307FqMPHF3brv..InTt.nTsNVumPMYBX81Zf5pGvZiUk.', 1, NULL, '2021-01-25 22:39:43', '2021-01-27 02:23:56'),
(4, 'Kho TQ', 'kho tq', 'khotq@gmail.com', '256259257510', NULL, '$2y$10$ksLM5ksASZ8lKtB4nVhp7uzcOcGKsV9x2iD8Mb3l0yGjQz2lNgRe6', 1, NULL, '2021-01-25 22:39:43', '2021-01-27 02:24:05'),
(5, 'NVKD', 'nvkd', 'nvkd@gmail.com', '9019147104', NULL, '$2y$10$O7qIe1bAE4W.sXhcU2QZRu/v4J0ItJJgzQnyRWaNlhOn6piGQQ7sS', 1, NULL, '2021-01-25 22:39:43', '2021-01-27 02:24:10'),
(6, 'Kế Toán Trưởng', 'kế toán trưởng', 'ketoantruong@gmail.com', '14194149147', NULL, '$2y$10$jkoFEGSeuoTcuVr7cBmAmeISFf1BDWxOSKlaJQqdP.NEDEBF6BWAu', 1, NULL, '2021-01-25 22:39:43', '2021-01-27 02:24:19'),
(7, 'Quản Lý', 'quản lý', 'quanly@gmail.com', '10410410411', NULL, '$2y$10$6nPqw5.kNoMJ389ABQ6B2OE.zjCwvYZC3djX2vGRmmWos8bey..ZC', 1, NULL, '2021-01-25 22:39:43', '2021-01-27 02:24:25');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `role_permission`
--
ALTER TABLE `role_permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
