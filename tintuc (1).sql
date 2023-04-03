-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 11:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `description`, `image`, `status`) VALUES
(1, 'xã hội', 'xã hội1', '1679626216IMG_2417.JPG', 1),
(2, 'thời sự', 'thời sự', '1679626223IMG_2404.JPG', 1),
(6, 'chính trị', 'chính trị', '1679633114anh1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `brand_id`, `image`, `status`) VALUES
(2, 'Thời sự-Lao động - Việc làm', 'Sau rà soát, khoảng 20% lao động đủ điều kiện hưởng chế độ lương hưu, tử tuất và BHXH một lần thì được giải quyết. Trường hợp lao động chưa đóng đủ số năm BHXH có thể đóng một lần cho số năm còn thiếu để hưởng lương hưu.  Khoảng 40% lao động đang làm việc ở đơn vị mới và tiếp tục đóng BHXH sẽ được cộng dồn thời gian tham gia, song chỉ giải quyết trên thời gian thực đóng, không cộng số tháng bị nợ. Sau này nếu khoản nợ thu hồi được thì cơ quan Bảo hiểm xã hội sẽ xác nhận bổ sung và điều chỉnh mức hưởng cho lao động.  20% lao động nghỉ việc, chưa tiếp tục tham gia BHXH sẽ được bảo lưu thời gian đóng để cộng nối tiếp khi đi làm trở lại hoặc đóng BHXH tự nguyện. Khoảng 20% còn lại là trường hợp phát sinh do điều chỉnh tăng tiền lương hoặc đã quyết toán khi chuyển việc.  Về đề xuất lấy ngân sách hoặc tiền lãi đầu tư Quỹ bảo hiểm xã hội để giải quyết quyền lợi cho lao động, ông Cường nói các khoản này để thực thi các chế độ như tăng lương hưu, trợ cấp chứ không dùng giải quyết tình huống phát sinh như trên.  Trong dự thảo Luật Bảo hiểm xã hội sửa đổi, Ban soạn thảo cũng không đề xuất biện pháp này bởi có thể thành công cụ khuyến khích chủ doanh nghiệp chậm, trốn đóng BHXH với tâm lý', 2, '16793824591679310076.jpg', 1),
(5, 'những vụ án nghiêm trọng?', 'Cô cho biết từ khi hoạt động nghệ thuật đến nay luôn đề cao cảm xúc thật, không màu mè về hình thức, lạm dụng kỹ xảo khiến chất giọng kém tự nhiên. Theo nghệ sĩ, việc biết rõ mục tiêu theo đuổi khiến cô xây dựng được phong cách riêng, khán giả đón nhận.  Nghệ sĩ gặp nhiều áp lực về tiền bạc, thời gian trong nửa năm thực hiện dự án. Bùi Lan Hương đặt ra quy định mỗi bài chỉ quay bốn lần, chọn phần thể hiện tốt nhất, bởi quay nhiều sẽ bị chai cảm xúc.  Cô dùng số tiền tích góp từ việc đi hát để đầu tư sản phẩm. Bùi Lan Hương thuê phim trường, mua 525 kg vải trắng để dựng sân khấu, huy động ban nhạc gần 10 người để thực hiện sáu tập, phát hành mỗi tuần.  Nhà sản xuất âm nhạc Thành Chu nhận xét Bùi Lan Hương không phải nghệ sĩ Việt đầu tiên áp dụng hình thức live session, tuy nhiên cô có sự đầu tư, các sản phẩm mang tính thống nhất. Nhạc công Quân Keyboard nói: \"Dù thực hiện theo phiên bản nào, Bùi Lan Hương đều tạo màu sắc riêng\".', 1, '1679632799anh1.jpg', 1),
(6, 'Quang Dũng: \'Trấn Thành, Mai Tài Phến đóng Đất rừn', 'Với tôi, dự án này rất áp lực, nhưng đồng thời cũng có điểm lợi là được công chúng sớm quan tâm. Diễn viên giống nhân vật là một thế mạnh, nhưng nghề đóng phim cũng cần người có khả năng thay đổi, biến hóa, nếu không một người chỉ có thể đóng được một vài dạng vai. Ví dụ, Leonardo Dicaprio có thể diễn các vai rất khác anh ấy ngoài đời. Tôi nghĩ một nền điện ảnh muốn phát triển cần những người thích trải nghiệm, thử thách mới trong nghề.  Có những ý kiến đại loại phim truyền hình năm 1997 đã quá hoàn hảo, không nên làm lại, nhưng chúng tôi muốn tiếp cận một thế hệ khán giả mới. Như Tây Du Ký năm 1986 đã là tác phẩm huyền thoại, sau đó vẫn nhiều phiên bản ra đời. Tôi vẫn bám theo tinh thần của bản cũ, không quay ngoắt 180 độ để các khán giả ngày xưa phải khó chịu. Chúng tôi kỳ vọng tái hiện được hành trình của An - cậu bé mồ côi mẹ, đi tìm cha. Trên chuyến đi ấy, cậu học cách sống tự lập, trải nghiệm thiên nhiên kỳ thú. Cậu trưởng thành hơn giữa phong trào đấu tranh của những người Nam bộ giàu nghĩa khí, từ đó hiểu được vì sao cha rời xa cậu.', 1, '16796329721679501268.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'kieudao', 'admin@gmail.com', 'admin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
