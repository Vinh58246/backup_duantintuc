-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2024 at 03:55 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `la_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ten`, `slug`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'lmht', 'lmht', 1, NULL, '2024-12-26 15:53:06'),
(2, 'liên quân mobile', 'lien-quan-mobile', 1, NULL, '2024-12-26 15:53:11'),
(3, 'lmht tốc chiến', 'lmht-toc-chien', 1, NULL, NULL),
(4, 'game online', 'game-online', 1, NULL, '2024-10-08 21:48:04'),
(5, 'manga/film', 'manga-film', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2024_09_24_154421_edit_table', 3),
(16, '2024_09_24_152500_create_category', 4),
(17, '2024_09_24_162231_create_new', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `idcategory` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hots` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `idcategory`, `title`, `slug`, `status`, `content`, `avatar`, `views`, `date`, `hots`, `created_at`, `updated_at`) VALUES
(1, 1, 'Từng lên ngôi CKTG, tuyển thủ này lại kết thúc sự nghiệp theo cách đau lòng', 'tung-len-ngoi-cktg-tuyen-thu-nay-lai-ket-thuc-su-nghiep-theo-cach-dau-long', 0, 'Vào năm 2022, sau khi trận chung kết CKTG 2022 kết thúc với chiến thắng được đánh giá là \"không một ai có thể tin nổi\" của DRX, mọi lời tán dương được dành cho đoàn quân mang biệt danh \"Rồng Xanh\". Đặc biệt, tuyển thủ được quan tâm nhất lúc đó, chính là Deft - tuyển thủ cũng đã cao tuổi và trước năm 2023, anh vẫn là tuyển thủ lớn tuổi nhất từng vô địch CKTG. Thậm chí, Riot còn phát hành một bài hát cho kỳ CKTG 2023 ngay sau đó - bài GODS, để tôn vinh hành trình đầy thăng trầm của Deft.', 'https://gamek.mediacdn.vn/zoom/252_142/133514250583805952/2024/9/15/kt-t1-vodichcktg-5-17263734856112009666017-0-0-375-600-crop-17263734928841366488397.png', 0, '2024-10-08 21:46:51', 0, NULL, NULL),
(2, 1, 'Faker tiếp tục làm nên lịch sử, nghi vấn T1 cũng có hệ \"tâm linh\"', 'faker-tiep-tuc-lam-nen-lich-su-nghi-van-T1-cung-co-he-tam-linh', 0, 'Không phụ lòng mong đợi của fan T1 (và có lẽ là của cả cộng đồng LMHT toàn thế giới), Faker đã cùng với các đồng đội hoàn thành nhiệm vụ giành lấy chiếc vé cuối cùng đến với CKTG 2024. Hành trình của các nhà đương kim vô địch CKTG thực sự vô cùng khó khăn ở giai đoạn Mùa Hè 2024 lần này và thậm chí còn có không ít khoảnh khắc mà chính fan T1 cũng lo lắng cho mục tiêu của đội nhà. Nhưng cuối cùng, T1 đã hoàn thành nhiệm vụ đồng thời giúp Faker tiếp tục lập nên một cột mốc lịch sử nữa.', 'https://gamek.mediacdn.vn/zoom/252_142/133514250583805952/2024/9/14/avatar1726313992628-17263139931701199400128.png', 2, '2024-10-08 21:46:51', 1, NULL, NULL),
(3, 1, 'Faker \"phá dớp\" quan trọng lịch sử, T1 hoàn thành nhiệm vụ', 'faker-pha-dop-quan-trong-lich-su-t1-hoan-thanh-nhiem-vu', 0, 'Đối đầu với KT Rolster trong nhiều mùa giải gần đây chưa bao giờ là nhiệm vụ dễ dàng cho các thành viên T1. Bởi lẽ, dù sở hữu đội hình lớn tuổi nhưng các thành viên KT luôn sở hữu khả năng gây đột biến rất cao. Chính vì vậy, T1 vẫn phải thận trọng hết mức. Thực tế trận đấu cũng cho thấy: KT luôn sẵn sàng cho T1 \"ôm hận\", nhất là Bdd. Tuy nhiên, ở ván đấu quyết định, một T1 bình tĩnh, lạnh lùng, macro khoa học của trước đây quay trở lại và nhà đương kim vô địch cuối cùng cũng lấy được suất còn lại tham dự CKTG 2024. Ngoài ra, Faker cũng lập nên một cột mốc mới cho bản thân mình.', 'https://gamek.mediacdn.vn/zoom/252_142/133514250583805952/2024/9/14/avatar1726310017730-1726310018225165713357.png', 3, '2024-10-08 21:46:51', 0, NULL, NULL),
(4, 2, 'Ca sĩ “J” bất ngờ bị fan Liên Quân “chế ảnh”, lý do thật sự đằng sau là gì?', 'ca-si-j-bat-ngo-bi-fan-lien-quan-che-anh-ly-do-that-su-dang-sau-la-gi', 0, 'Vừa qua, xuất hiện nhiều hình ảnh của một nam ca sĩ nổi tiếng, cosplay thành các vị tướng của tựa game Liên Quân Mobile. Vốn là một tên tuổi lớn trong showbiz Việt, những hình ảnh này nhanh chóng thu hút sự chú ý của rất nhiều game thủ và được lan truyền với tốc độ chóng mặt trên MXH. Tuy nhiên, dường như đây có thể chỉ là những hình ảnh “chế”, được cắt ghép và sử dụng AI để định hình khuôn mặt.', 'https://gamek.mediacdn.vn/zoom/252_142/133514250583805952/2024/7/12/0deda515fd51140f4d40-17207534663222030649443-3-0-315-499-crop-17207534695821134009031.jpg', 0, '2024-10-08 21:46:51', 1, NULL, NULL),
(5, 2, 'Choáng váng với một trận đấu Liên Quân kéo dài tới hơn 70 phút', 'choang-vang-voi-mot-tran-dau-lien-quan-keo-dai-toi-hon-70-phut', 0, 'Là một người chơi Liên Quân lâu năm, chắc hẳn bất cứ ai cũng hiểu rằng thời gian thi đấu của một ván không bao giờ diễn ra quá dài. Ngược lại, với những ai chưa biết, thì trung bình một trận đấu của Liên Quân sẽ kéo dài từ khoảng 8 đến 25 phút mà thôi. Có rất ít trường hợp dài hơn khoảng thời gian trung bình này tính tới hiện tại, bởi trò chơi này đã thiết lập nhiều “rào cản” khác nhau để ngăn chặn điều đó xảy ra.', 'https://gamek.mediacdn.vn/zoom/252_142/133514250583805952/2024/7/10/tro-thu-lien-quan-1720584912898663284261-0-98-675-1178-crop-17205849231201463314856.jpg', 3, '2024-10-08 21:46:51', 0, NULL, NULL),
(6, 2, 'Quỳnh Alee khoe ảnh đọ dáng, bị gái lạ chiếm sóng ngay trên \"sân nhà\"', 'quynh-alee-khoe-anh-do-dang-bi-gai-la-chiem-song-ngay-tren-san-nha', 0, 'Quỳnh Alee - nữ streamer không còn xa lạ trong cộng đồng mạng, mới đây đã thu hút sự chú ý khi đăng tải loạt ảnh khoe dáng xinh đẹp của mình. Tuy nhiên, thay vì chỉ nhận được những lời khen ngợi, spotlight trong loạt ảnh lại bất ngờ bị \"giật\" mất bởi một cô gái lạ mặt xuất hiện cùng.', 'https://gamek.mediacdn.vn/zoom/252_142/133514250583805952/2024/6/30/photo-1719737553663-17197375538672125015501-577-0-1537-1536-crop-1719737789386995075595.png', 8, '2024-10-08 21:46:51', 0, NULL, NULL),
(7, 3, 'Riot lại tạo ra Bug game quá đáng sợ, nháy mắt biến “con cưng” thành game 1 người', 'riot-lại-tao-ra-bug-game-qua-dang-so-nhay-mat-bien-con-cung-thanh-game-1-nguoi', 0, 'Đó chính là quyết định bổ sung thêm chế độ Hextech Aram ở trong tựa game Tốc Chiến trong thời gian vừa qua. Tuy nhiên, sự bổ sung này của Riot dường như lại thiếu đi tính chính xác và vẹn toàn. Bởi lẽ, rất nhiều bug game khó chịu đã xuất hiện và huỷ hoạt trải nghiệm chiến đấu của game thủ một cách nặng nề. Với những ai chưa biết thì Hextech Aram là một chế độ kết hợp mới được Riot thiết kế độc quyền cho Tốc Chiến. Ở chế độ này, game thủ sẽ tiếp tục thi đấu ở bản đồ Aram thông thường. Bù lại, khi đạt các cấp độ chỉ định thì hệ thống sẽ phân phát ngẫu nhiên thẻ nâng cấp. Các thẻ này sẽ mang tới sức mạnh không tưởng cho tướng, biến những cuộc giao tranh về sau trở nên ác chiến và thú vị gấp bội. Hiểu một cách đơn giản, Hextech Aram chính là sự kết hợp giữa Aram và Võ Đài.', 'https://gamek.mediacdn.vn/zoom/252_142/133514250583805952/2024/9/4/photo-1725418941540-17254189417891048765436-0-0-400-640-crop-17254189565841106352537.png', 5, '2024-10-08 21:46:51', 1, NULL, NULL),
(8, 3, 'Vị tướng hiếm hoi của Tốc Chiến “yếu nhớt” khi vừa ra mắt, fan khẩn thiết đòi Riot buff mạnh', 'vi-tuong-hiem-hoi-cua-toc-chien-yeu-nhot-khi-vua-ra-mat-fan-khan-thiet-doi-riot-buff-manh', 0, 'Vị tướng được nhắc tên chính là Mordekaiser - Ác Quỷ Thiết Giáp. Dù mới chỉ ra mắt vào ngày hôm kia (23/08) ở Việt Nam và sớm hơn một chút ở Trung Quốc, thế nhưng vị tướng này đã khiến cộng đồng Tốc Chiến phải la ó không ngừng vì sở hữu sức mạnh yếu đến “phi lý”. Về tổng quan, bộ kỹ năng của Mordekaiser không có quá nhiều thay đổi so với phiên bản gốc. Điểm đáng chú ý nhất chính là việc chiêu cuối của hắn chỉ cướp được 8% chỉ số của đối thủ chỉ định, thay vì 10% như trên PC.', 'https://gamek.mediacdn.vn/zoom/252_142/133514250583805952/2024/8/25/hq720-11-1724552684080889006669-0-36-386-654-crop-1724552686893680253021.jpg', 0, '2024-10-08 21:46:51', 1, NULL, NULL),
(9, 3, 'Gái xinh mê game khiến cộng đồng game thủ của VNG \"chạnh lòng\"', 'gai-xinh-me-game-khien-cong-dong-game-thu-cua-vng-chanh-long', 0, 'Triệu Lộ Tư - hot girl sở hữu nhan sắc và sự nghiệp ngày càng thăng hạng, được cho đã là đỉnh lưu so với dàn đồng nghiệp cùng lứa. Suốt 7 tháng đầu năm 2024, dù không có phim lên sóng nhưng cô vẫn liên tục xuất hiện trên bảng \"hot search\". Người đẹp đạt top 1 chỉ số tìm kiếm trên Douyin năm 2024, top 1 chỉ số Wechat trung bình trong năm.', 'https://gamek.mediacdn.vn/zoom/252_142/133514250583805952/2024/8/18/27170972514392942064856767979205594590646187n-1642824648032331112858-1723947952845829451166-711-0-1720-1615-crop-17239479605711097557895.jpg', 7, '2024-10-08 21:46:51', 0, NULL, NULL),
(10, 4, 'Game hay nhất 2022 bất ngờ bị hủy hoại nặng nề bởi hacker, người chơi chưa làm gì đã \"phá đảo\"', 'game-hay-nhat-2022-bat-ngo-bi-huy-hoai-nang-ne-boi-hacker-nguoi-choi-chua-lam-gi-da-pha-dao', 0, 'Sau thành công đầy thuyết phục vào năm 2022, Elden Ring đã trở lại trong năm 2024 thông qua bản DLC đầy hoành tráng mang tên Shadow of the Erdtree. Chất lượng và tuyệt vời, đó chính xác là những gì có thể mô tả về bản DLC này. Tới mức mà nhiều người cho rằng nếu như không mang tính chất là bản cập nhật, Shadow of the Erdtree hoàn toàn có thể là ứng cử viên nặng ký cạnh tranh với Black Myth: Wukong cho danh hiệu Game of the Year. Thế nhưng mới đây thôi, các game thủ Elden Ring lại đang phải chịu một đợt tàn phá nặng nề.', 'https://gamek.mediacdn.vn/zoom/192_129/133514250583805952/2024/9/11/photo-1726028562070-17260285651421857377426-0-0-1080-1728-crop-17260286708971054953383.png', 0, '2024-10-08 21:46:51', 1, NULL, NULL),
(11, 4, 'Rockstar có động thái mới, liệu GTA 6 vẫn sẽ ra mắt đúng \"kế hoạch\"?', 'rockstar-co-đong-thai-moi-lieu-gta-6-van-se-ra-mat-dung-ke-hoach', 0, 'Vào đầu tháng 9 vừa qua, tin đồn về việc GTA 6 có thể trì hoãn ngày phát hành sang năm 2026 đã khiến cho cộng đồng game thủ trên toàn thế giới không khỏi hoang mang. Cũng dễ hiểu khi phần lớn người chơi đều đã chờ đợi dự án này hơn 10 năm, đồng thời GTA 6 cũng được quảng cáo là có mức đầu tư lớn nhất trong lịch sử, cũng như hứa hẹn mang tới một chuẩn mực mới cho ngành công nghiệp game thế giới.', 'https://gamek.mediacdn.vn/zoom/192_129/133514250583805952/2024/9/12/photo-1726113768563-1726113768771921559547-0-0-421-674-crop-1726113794061138817126.png', 1, '2024-10-08 21:46:51', 0, NULL, NULL),
(12, 4, 'Xuất hiện vô số \"tool\" siêu cần thiết của Black Myth: Wukong, hữu ích với mọi game thủ', 'xuat-hien-vo-so-tool-sieu-can-thiet-cua-black-myth-wukong-huu-ich-voi-moi-game-thu', 0, 'Cộng đồng mod của Black Myth: Wukong tuy không phổ biến như nhiều bom tấn khác nhưng đang lớn mạnh theo từng ngày. Và mặc dù đã chơi game đủ lâu, thế nhưng không phải ai cũng biết tới những bản mod này, khi chúng được ví như những công cụ rất hữu ích cho mọi người chơi. Chống giật hình cho game thủ Black Myth: Wukong Bản mod Anti-Stutter cung cấp một bản sửa lỗi đơn giản cho các vấn đề về hiệu suất mà nhiều người chơi gặp phải trên PC cấp thấp. Mặc dù nó không thể phủ nhận nhu cầu xử lý của Unreal Engine 5, nhưng bù lại, bản mod này có thể khởi tạo một bản chỉnh sửa đơn giản cho phép nâng cao đáng kể trải nghiệm của người chơi.', 'https://gamek.mediacdn.vn/zoom/192_129/133514250583805952/2024/9/12/photo-1726102447010-17261024471311155796713-0-0-1080-1728-crop-1726102922322837372962.png', 0, '2024-10-08 21:46:51', 0, NULL, NULL),
(13, 5, 'Một trong \"tứ Trụ của Shonen Jump\" sắp được chuyển thể thành phim live-action?', 'mot-trong-tu-tru-cua-shonen-jump-sap-duoc-chuyen-the-thanh-phim-live-action', 0, 'Bleach hiện đang trong thời gian kỷ niệm 20 năm ra mắt và người hâm mộ đang chờ đợi bộ anime này trở lại với Bleach: Thousand-Year Blood War Part 3 vào cuối mùa thu này. Trong khi người hâm mộ đang háo hức muốn xem những gì có thể xảy ra trong giai đoạn tiếp theo của anime, thì đây có thể không phải là dự án Bleach mới duy nhất đáng mong đợi trong tương lai.', 'https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2024/9/15/avatar1726377309024-1726377309431725832761.jpg', 11, '2024-10-08 21:46:51', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_idcategory_foreign` (`idcategory`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_idcategory_foreign` FOREIGN KEY (`idcategory`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
