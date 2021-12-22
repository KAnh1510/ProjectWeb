-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 22, 2021 lúc 07:09 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h4_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `h5_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `h4_content`, `h5_content`) VALUES
(44, 'Bàn Ghế', 'Trong một đám cưới hoặc đám hỏi một điều không thể bỏ qua đó là chuẩn bị bàn ghế đám cưới cho khách mời tham dự. Kiểu dáng bàn ghế đơn giản hay sang trọng một phần dựa vào tính chất của sự kiện và một phần do yêu cầu của gia chủ. Theo xu hướng hiện nay thường dùng bàn ghế xuân hòa với 2 loại chính bàn ghế đám cưới thường và bàn ghế quây với các tông tím trắng, đỏ trắng…..', 'Cưới hỏi trọn gói abc với sự đầu tư 100% bàn ghế đám cưới mới phục vụ cưới hỏi, cùng với kinh nghiệm lâu năm trong lĩnh vực cưới hỏi trọn gói và tổ chức sự kiện, đã tạo được uy tín với khách hàng quanh khu vực phía Bắc, đặc biệt là tại Hà Nội. Hiện nay chúng tôi đang cung cấp và cho thuê bàn ghế cưới hỏi với nhiều tông màu cùng với rất nhiều kiểu dáng khác nhau đáp ứng mọi nhu cầu của quý khách.'),
(46, 'Phông Bạt', '<span style=\"color:#cf1b15;\">Phông bạt đám cưới</span> thường được sử dụng khi gia đình ở mặt phố hay ngõ có diện tích eo hẹp không đủ chỗ để tiếp đón khách mời cưới. Mục đích chính của <span style=\"color:#cf1b15;\">phông bạt đám cưới</span> là để che nắng che mưa, ngoài ra nhà rạp còn là đặc điểm đầu tiên gây chú ý đến khách mời. Chính vì vậy, những đôi uyên ương muốn cho ngày cưới của mình sẽ được nhiều quan khách nhớ đến rất chú trọng đến việc trang trí nhà bạt đám cưới tạo điểm nhấn ấn tượng.', 'Những dịch vụ cho thuê <span style=\"color:#cf1b15;\">phông bạt đám cưới</span> trước đây chủ yếu dùng những rạp che mái xanh này thì không có tính thẩm mỹ. Đối với những khách hàng yêu cầu tính thẩm mỹ cao thì những nhà bạt này không thể đáp ứng được nhu cầu của họ. Nắm bắt được nhu cầu đó Cưới hỏi trọn gói <span style=\"color:#cf1b15;\">ABC</span> luôn cho ra những sản phẩm nhà bạt đám cưới cao cấp với độ thẩm mỹ cao nhất.'),
(48, 'Phương Tiện', '<div>Cách đặt dịch vụ</div>\n\n<p>** Quý khách thanh toán 50% khi đặt và 50% sau khi chuyến đi kết thúc.</p>\n\n<p>Giá bên dưới là giá cho cưới hỏi</p>\n<ul style=\"padding-left: 30px;\">\n<li style=\"padding: 10px 0;\">Giá bên dưới là giá cho cưới hỏi</li>\n<li style=\"padding: 10px 0;\">Giá áp dụng cho xe đi du lịch – lễ hội quý khách vui lòng cung cấp lịch trình và thời gian để nhận báo giá cụ thể và chính xác nhất.</li>\n</ul>', '<p>*Lịch trình áp dụng cho thuê xe cưới tại nội thành:</p>\n<p>– Không chờ tiệc: Nhà trai – Nhà gái – Nhà Trai – Nhà hàng.</p>\n<p>– Có chờ tiệc: Nhà trai – Nhà gái – Nhà Trai – Nhà hàng – Nhà Trai.</p>\n<p>– Thời gian :</p>\n<p style=\"padding-left: 10px;\">Không chờ tiệc: Ca sáng từ đầu giờ sáng đến 11h00. Ca chiều từ đầu giờ chiều đến 17h00.</p>\n<p style=\"padding-left: 10px;\">Có chờ tiệc: Ca sáng từ đầu giờ sáng đến 13h30. Ca chiều từ đầu giờ chiều đến 19h30.</p>'),
(50, 'Trang Phục', '', ''),
(86, 'Nhân sự', '', ''),
(90, 'Phụ kiện', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `fullname`, `email`, `note`, `created_at`, `phone_number`) VALUES
(5, 'Nguyễn Thị Kim Anh', 'nguyenkimanh15102000@gmail.com', 'abc', '2021-11-16 17:14:36', 2147483647);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `phone_number`, `email`, `address`, `note`, `total`, `create_time`) VALUES
(23, 56, 'Nguyễn Thị Kim Anh', '+84359127610', 'nguyenkimanh15102000@gmail.com', 'Ha Noi', '12', 5390000, '2021-12-19 08:57:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_user`
--

CREATE TABLE `order_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_user`
--

INSERT INTO `order_user` (`id`, `user_id`, `product_id`, `count`, `status`) VALUES
(26, 56, 41, 1, 1),
(28, 56, 62, 1, 1),
(29, 56, 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `thumbnail` blob DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `thumbnail`, `description`) VALUES
(1, 44, 'Bàn ghế Louis', 590000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f30322f494d475f303331332d31303330783737322e6a7067, '<ul style=\"padding-left: 30px;\">\n<li style=\"padding: 10px 0;\">1 bộ bao gồm 1 bàn 6 ghế: <span style=\"color: #b02b2c;\">500.000/bộ</span></li>\n<li style=\"padding: 10px 0;\">1 bộ ấm chén VIP có hoa văn bao gồm 1 ấm – 6 chén tách – 1 đĩa bánh kẹo ba tầng – 1 gạt tàn: <span style=\"color: #b02b2c;\">50.000/bộ</span></li>\n<li style=\"padding: 10px 0;\">Hoa lụa để bàn : <span style=\"color: #b02b2c;\">40.000/bàn</span></li>\n</ul>\n</br>Ghế này được làm theo lệnh của vua Louis XVI mang phong cách tân cổ điển Pháp có lưng ghế hình bầu dục và thường có đệm nhung hoặc đệm vải lanh tự nhiên. Ghế Louis hướng đến phục vụ trong những nhà hàng, hội nghị, sự kiện cưới sang trọng.'),
(24, 44, 'Bàn ghế Chiavari', 540000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f30322f494d475f303634382d31303330783737322e6a7067, '<ul style=\"padding-left : 30px;\">\n	<li style=\"padding: 10px 0;\">1 bộ bao gồm 1 bàn 6 ghế và decor trang trí ghế : <span style=\"color: #b02b2c;\">300.000/bộ</span></li>\n	<li style=\"padding: 10px 0;\">1 bộ ấm chén thường bao gồm 1 ấm – 6 chén tách – 1 đĩa bánh kẹo ba tầng – 1 gạt tàn: <span style=\"color: #b02b2c;\">30.000/bộ</span></li>\n	<li style=\"padding: 10px 0;\">1 bộ ấm chén VIP có hoa văn bao gồm 1 ấm – 6 chén tách – 1 đĩa bánh kẹo ba tầng – 1 gạt tàn: <span style=\"color: #b02b2c;\">50.000/bộ</span></li>\n	<li style=\"padding: 10px 0;\">Hoa lụa để bàn : <span style=\"color: #b02b2c;\">40.000/bàn</span></li>\n	</ul> </br>\n<strong  style=\"color: #b02b2c;\">Ghế Chiavari</strong> hay còn gọi là <span style=\"color: #b02b2c;\"><strong> ghế Tiffany</strong></span> là loại ghế chuyên sử dụng trong các loại tiệc và đám cưới đẳng cấp. Ưu điểm của loại ghế Chiavari là ghế có thiết kế rất đẹp, phù hợp với cả phong cách tiệc cưới thanh lịch hiện đại.\r</br> \r Trang trí: <strong  style=\"color: #b02b2c;\">Ghế Chiavari</strong> để trần không trang trí gì lẫn kết hợp với các loại phụ kiện như hoa, phale, ruy băng đều đẹp và tôn không gian phòng tiệc cưới lên rất nhiều.'),
(39, 50, 'Váy cưới Mori Lee', 10000000, 0x68747470733a2f2f7777772e6d617272792e766e2f696d616765732f7468756d626e61696c732f3738302f3430302f64657461696c65642f3238312f35313537382d303031395f2d5f436f70792e6a7067, '<span style = \"color:red;\">Thương hiệu Mori Lee</span> đã có mặt trên thế giới trong ngành thời trang váy cưới hơn 50 năm qua và được biết đến như một trong những thương hiệu hàng đầu về các mẫu thiết kế cho những dịp đặc biệt như đám cưới và dạ tiệc.'),
(41, 48, 'XE HOA - MERCEDES 450', 3000000, 0x687474703a2f2f63756f69686f696c6f6e677068756e672e636f6d2f55706c6f6164732f696d616765732f586543756f692f494d475f32303231303630365f3039353334392e6a7067, 'Chiếc xe hoa  đám cưới  Mesrcedes S 450  sang chảnh ,trắng tinh khôi góp phần làm cho đám cưới của bạn thêm quý tộc'),
(58, 44, 'Bàn tròn – Ghế Chiavary ', 760000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f31302f494d475f303337372e6a7067, '<ul style =\"padding-left: 30px;\">\n	<li style=\"padding: 10px 0;\">1 bộ bao gồm 1 bàn tron 1,2m + 8 ghế và decor trang trí ghế : <span style=\"color: #b02b2c;\">600.000/bộ</span></li>\n	<li style=\"padding: 10px 0;\">1 bộ ấm chén thường bao gồm 1 ấm – 8 chén tách – 1 đĩa bánh kẹo ba tầng – 1 gạt tàn: <span style=\"color:#b02b2c;\">50.000/bộ</span></li>\n	<li style=\"padding: 10px 0;\">1 bộ ấm chén VIP có hoa văn bao gồm 1 ấm – 8 chén tách – 1 đĩa bánh kẹo ba tầng – 1 gạt tàn: <span style=\"color: #b02b2c;\">70.000/bộ</span></li>\n	<li style=\"padding: 10px 0;\">Hoa lụa để bàn : <span style=\"color:#b02b2c;\">40.000/bàn</span></li>\n	</ul>\n</br><span style=\"color:#b02b2c;\"><strong>Ghế Chiavari</strong></span> kết hợp bàn tròn dành cho các bữa tiệc đẳng cấp.'),
(59, 44, 'Bàn ghế tựa lưng cao ', 320000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f30382f3131373338333732305f333130353832353235363133393733345f353135363131333639383430303739333535325f6f2d31303330783738322e6a7067, '<ul style=\"padding-left: 30px;\">\n<li style=\"padding: 10px 0;\">1 bộ bao gồm 1 bàn 6 ghế đã bao gồm áo nơ : <span style=\"color: #b02b2c;\">200.000/bộ</span></li>\n<li style=\"padding: 10px 0;\">1 Ấm chén bao gồm : 1 ấm – 6 chén tách – đĩa 3 tầng – 1 gạt tàn: <span style=\"color: #b02b2c;\">30.000/bộ</span></li>\n<li style=\"padding: 10px 0;\">1 Ấm chén VIP có hoa văn bao gồm : 1 ấm – 6 chén tách – đĩa 3 tầng – 1 gạt tàn: <span style=\"color: #b02b2c;\">50.000/bộ</span></li>\n<li style=\"padding: 10px 0;\">Hoa lụa để bàn :&nbsp;<span style=\"color: #b02b2c;\">40.000/bàn</span></li>\n</ul>\n</br>Đây là loại ghế thường được sử dụng trong các khách sạn sang trọng và rất được yêu thích sử dụng trong mùa cưới hỏi từ 2017. Ưu điểm của <strong style=\"color: #b02b2c;\">Ghế Banquet</strong> là sự chắc chắn, có đệm êm ái, có tựa lưng cao kết hợp với kiểu dáng tối ưu giúp cho khách mời vô cùng thoải mái khi sử dụng.'),
(60, 44, 'Bàn ghế nhựa nơ váy', 170000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f66616365755f313538313430373237323234362d31303330783737332e6a706567, '<ul style=\"padding-left: 30px;\">\n<li style=\"padding: 10px 0;\">1 bộ bao gồm 1 bàn 6 ghế và áo nơ bọc ghế :&nbsp;<span style=\"color: #b02b2c;\">100.000/bộ</span></li>\n<li style=\"padding: 10px 0;\">1 Ấm chén bao gồm 1 ấm 6 chén tách 2 đĩa bánh kẹo 1 gạt tàn:&nbsp;<span style=\"color: #b02b2c;\">30.000/bộ</span></li>\n<li style=\"padding: 10px 0;\">Hoa lụa để bàn :&nbsp;<span style=\"color: #b02b2c;\">40.000/bàn</span></li>\n</ul>\n</br>Với những không gian hẹp và cần nhiều bàn ghế để tiếp khách thì Bàn ghế nhựa áo nơ là sự lựa chọn hoàn hảo cho mọi nhà. Với giá thành rẻ, vận chuyển tiện lợi thi Bàn ghế nhựa áo nơ cũng mang lại nhiều tiện lợi cho khách hàng.'),
(61, 46, 'Phông Bạt VIP', 2000000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323032312f31322f3235383434303833365f343435363231353531343433343032385f383737313033313330343535323830323333335f6e2d53616f2d636865702d31303330783737332e6a7067, '<p style=\"color:#cf1b15;\">Kích thước Cao 3m – Rộng 4m</p>\n<p style=\"color:#cf1b15;\">Phông trên 4m thêm 500.000/m</p>\n<p style=\"color:#cf1b15;\">Khuyến mãi đèn led mưa sau phông\nhoặc đèn chiếu phông</p>'),
(62, 46, 'Phông bạt thường', 1800000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f30382f3131373538313935335f333130353832353239393437333036335f343635353436363938313938313634383339385f6f2d31303330783737332e6a7067, '<p style=\"color:#cf1b15;\">Kích thước Cao 3m – Rộng 4m</p>\n<p style=\"color:#cf1b15;\">Phông trên 4m thêm 500.000/m</p>\n<p style=\"color:#cf1b15;\">Khuyến mãi đèn led mưa sau phông\nhoặc đèn chiếu phông</p>'),
(63, 48, 'XE 7 CHỖ XPANDER', 1200000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f494d475f303834302d333030783232352e6a7067, '<p>Cưới – Hỏi nội thành: <span style=\"color: #cf1b15;\"> 600.000 VNĐ (2-4 tiếng)</span></br>\nCưới ngoại thành (đi tỉnh): 9.000/km (Điều kiện 2 chiều > 200km)</br>\nĐón, tiễn sân bay: <span style=\"color: #cf1b15;\">400.000</span></br>\nĐợi ăn:  <span style=\"color: #cf1b15;\">200.000(2 tiếng)</span></br>\nĐi Tour: liên hệ</p>'),
(64, 48, 'Rollroyce Phantom Mầu : Bạc', 50000000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f32392e6a7067, '<p>- Cưới Nội Thành HN (tối đa 4h, không tiệc) :<span style=\"color: #cf1b15;\"> 50.000.000 đ </span></br>\n- Ngoài giờ :<span style=\"color: #cf1b15;\">  2.500.000 đ/h</span>\n-  Cưới ngoại thành : Call'),
(65, 48, 'Lamborghini Aventador Mầu : Trắng', 50000000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f33322e6a7067, '<p>- Cưới Nội Thành HN (tối đa 4h, không tiệc): <span style=\"color: #cf1b15;\"> 50.000.000 đ </span></br>\n- Ngoài giờ :<span style=\"color: #cf1b15;\">  2.500.000 đ/h</span>\n-  Cưới ngoại thành : Call'),
(66, 48, 'Audi S5 Mầu : Trắng', 5000000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f33372e6a7067, '<p>- Cưới Nội Thành HN (tối đa 4h, không tiệc) :<span style=\"color: #cf1b15;\"> 5.000.000 đ </span></br>\n- Ngoài giờ :<span style=\"color: #cf1b15;\"> 400.000 đ/h</span>\n-  Cưới ngoại thành : Call'),
(67, 46, 'NHÀ BẠT CƯỚI THẢ PHÔNG ', 5000000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f66616365755f313538313430373237323234362d31303330783737332e6a706567, '<ul style=\"padding-left : 30px;\">\n<li style=\"padding:  5px 0;\">Nhà bạt lụa với đầy đủ màu sắc cơ bản</li>\n<li style=\"padding:  5px 0;\">Khung rạp bằng sắt, linh hoạt, tùy chọn kích thước</li>\n<li style=\"padding:  5px 0;\">Trang trí phông lụa thẳng xếp ly – đèn thả cách đoạn</li>\n<li style=\"padding:  5px 0;\">Túm trang trí theo tone màu</li>\n<li style=\"padding:  5px 0;\">Trần vải kèm đèn chùm</li>\n<li style=\"padding:  5px 0;\">Mái quây bằng bạt trắng</li>\n<li style=\"padding:  5px 0;\">Thảm cỏ trải sàn</li>\n</ul>\n<p>Giá thành: <span style=\"color:#cf1b15;\">150.000</span>đ/m2</p>\n<p>Dưới 20m2 tính = 20m2 (<span style=\"color:#cf1b15;\">3.000.000/nhà </span>)</p>\n<p>Ưu đãi:</p>\n<ul style=\"padding-left : 30px;\">\n<li style=\"padding:  5px 0;\">Miễn phí khảo sát, tư vấn</li>\n<li style=\"padding:  5px 0;\">Miễn phí vận chuyển Nội thành Hà Nội</li>\n<li style=\"padding:  5px 0;\">Miễn phí lắp đặt</li>\n</ul>'),
(68, 46, 'NHÀ BẠT CAO CẤP VÁCH TÚM – DECOR', 4000000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f30322f66616365755f313537373639393232373736322d31303330783737332e6a7067, '<ul style=\"padding-left : 30px;\">\n<li style=\"padding:  5px 0;\">Nhà bạt lụa hoặc kim tuyến với đầy đủ màu sắc hiện đại</li>\n<li style=\"padding:  5px 0;\">Khung rạp bằng sắt không rỉ, dễ dàng lắp đặt, linh động kích thước</li>\n<li style=\"padding:  5px 0;\">Khung sắt hình sơn nhũ vàng</li>\n<li style=\"padding:  5px 0;\">Trang trí viền dây led và đèn chùm cao cấp</li>\n<li style=\"padding:  5px 0;\">Quanh nhà rạp trang trí trụ hoa lụa – bồn hoa trắng</li>\n<li style=\"padding:  5px 0;\">Có trần bằng vải lụa trắng và đèn chùm</li>\n<li style=\"padding:  5px 0;\">Thảm cỏ trải sàn</li>\n</ul>\n<p>Giá thành: <span style=\"color:#cf1b15;\">150.000</span>đ/m2</p>\n<p>Dưới 20m2 tính = 20m2 (<span style=\"color:#cf1b15;\">4.000.000/nhà </span>)</p>\n<p>Ưu đãi:</p>\n<ul style=\"padding-left : 30px;\">\n<li style=\"padding:  5px 0;\">Miễn phí khảo sát, tư vấn</li>\n<li style=\"padding:  5px 0;\">Miễn phí vận chuyển Nội thành Hà Nội</li>\n<li style=\"padding:  5px 0;\">Miễn phí lắp đặt</li>\n</ul>'),
(69, 50, 'Áo cưới công chúa', 6000000, 0x68747470733a2f2f7777772e616f63756f69636f6461752e636f6d2f696d6167652f63616368652f636174616c6f672f2543332541316f2532306e682545312542412541447025323031312d253230323031392f622f494d475f373634392d373830783936302e6a7067, 'Phong cách lộng lẫy thanh lịch sang trọng quyến rũ'),
(70, 50, 'Áo vest cưới 1 khuy ', 5000000, 0x68747470733a2f2f656c792e636f6d2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f30382f766573742d63756f692d312d6b6875792e6a7067, 'Những bộ <span style=\"color: red;\"> áo vest cưới 1 khuy</span> mặc nên sẽ mang đến sự trẻ trung & năng động. </br> Với kiểu dáng này thường phù hợp với chú rể có dáng người gầy vì sẽ giúp thân hình trở nên đầy đặn hơn. Ngoài ra, Áo vest  <span style=\"color: red;\"> áo vest cưới 1 khuy</span> còn mang đến sự thoải mái cho người mặc.'),
(71, 50, 'Áo vest cưới kết hợp ghi lê', 3500000, 0x68747470733a2f2f656c792e636f6d2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f30382f766573742d63756f692d6b65742d686f702d6768692d6c652e6a7067, 'Phong cách  <span style=\"color: red;\">áo vest kết hợp ghi lê</span>  luôn phù hợp ở mọi thời đại bởi sự trẻ trung, cá tính mà nó mang lại cho người mặc.</br>\nVới kiểu dáng áo vest này bạn có thể thoải mái phá cách trong việc kết hợp màu sắc vest  mà áo ghi lê để tạo nên sự nổi bật riêng trong ngày trọng đại của mình, chỉ cần bạn đảm bảo các quy tắc về kết hợp màu sắc.'),
(72, 86, 'Đội bê tráp đám cưới', 500000, 0x687474703a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f696d616765312d31303234783732382e6a7067, '<ul style = \"padding-left: 30px;\">\n	<li style=\"padding: 5px 0 ;\">Đội nữ đỡ tráp: áo dài bê tráp, tự trang điểm với chiều cao từ 1,60m :<span style=\"color: red;\"> 80.000</span>/1 người/1 buổi</li>\n<li style=\"padding: 5px 0 ;\">Đội nam bê tráp: áo trắng, quần âu, cà vạt hoặc nơ, dày đen với chiều cao từ 1,70m :<span style=\"color: red;\"> 80.000</span>/1 người/1 buổi</li>\n<li style=\"padding: 5px 0 ;\"Riêng đội nam nữ mặc trang phục áo dài khăn xếp truyền thống  :<span style=\"color: red;\"> 100.000</span>/1 người/1 buổi</li>\n</ul>\n<p>-Thái độ phục vụ: thân thiện, chuyên nghiệp. Sau khi bê xong các bạn nữ sẽ tiếp nước cho chủ nhà. Chụp ảnh với cô dâu chú rể.</p>\n<p>-Thời gian: luôn luôn đúng hẹn.</p>'),
(73, 86, 'MC đám cưới chuyên nghiệp', 1500000, 0x68747470733a2f2f73756b69656e67726f75702e766e2f696d616765732f323032302f31302f32392f756e6e616d65642e706e67, '<ul style =\"padding-left: 30px;\">\n	<li>MC được đào tạo chuyên nghiệp, có kinh nghiệm dẫn dắt nhiều chương trình lớn nhỏ</li>\n	<li  style=\"padding: 5px 0 ;\">Nhiều gương mặt MC nổi tiếng, được yêu thích trên truyền hình</li>\n	<li  style=\"padding: 5px 0 ;\">MC, ca sĩ hiều mức cát xê khác nhau, phù hợp với mức chi phí của khách hàng</li>\n</ul>'),
(74, 86, 'Ban nhạc đám cưới', 4500000, 0x687474703a2f2f63686f7468756562616e6768652e636f6d2e766e2f75706c6f61642f62616e2d6e6861632d64616d2d63756f692f63756e672d6361702d62616e2d6e6861632d64616d2d63756f692d747068636d2e6a7067, '<span>Từ các vùng quê cho đến thành phố thì hình thức nhạc sóng này vẫn còn phổ biến. Ở các làng quê thì những <b><i><span style=\"color:red;\">bài hát đám cưới</span></i></b>bình dân được thể hiện thường xuyên thể hiện sự dân dã, mộc mạc đậm chất thôn quê. Còn ở trong các <b><i><span style=\"color:red;\"><span style=\"font-style:italic\">đám cưới tổ chức nhà hàng</span></span></i></b>&nbsp;hay thành phố hiện đại thì thể loại <b><i><span style=\"color:red;\"><span style=\"font-style:italic\">nhạc đám cưới bằng Tiếng Anh, nhạc đám cưới trẻ, nhạc đám cưới hòa tấu</span></span></i></b>&nbsp;thường được yêu thích được biểu diễn vào từng thời điểm trong tiệc cưới.</span>'),
(75, 90, 'Pháo giấy kim tuyến', 25000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f646f776e6c6f6164312e6a7067, 'Pháo giấy kim tuyến dài 1m'),
(76, 90, 'Sân Khấu cao 30m', 100000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f494d475f313930372e6a7067, ' Phù hợp lắp đặt trong nhà bạt – vỉa hè ngoài trời. '),
(77, 90, 'THÁP LY- BÁNH CƯỚI', 2000000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031392f30342f494d475f303438332d31303330783737332e6a7067, 'Tháp ly 5 tầng và bánh cưới 3 tầng.'),
(78, 90, 'Biển WELCOM', 200000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f31302f3132303234353434365f333236343537323937303236343936315f393030323432373531323031393130333832365f6f2d37373378313033302e6a7067, ''),
(79, 90, 'Bàn lễ tân', 3000000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323032302f30322f494d475f303733382d31303330783737322e6a7067, ''),
(80, 90, 'Dàn âm thanh đám cưới', 2500000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f494d475f303633362d31303330783737332e6a7067, ''),
(81, 90, 'Thùng tiền mừng', 200000, 0x68747470733a2f2f63756f69686f69686f616e677175616e2e766e2f77702d636f6e74656e742f75706c6f6164732f323031372f31302f64303937633063333833313937643437323430382d31303330783933332e6a7067, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(40, 'Nguyễn Thị Kim Anh', 'nguyenkimanh15102000@gmail.com', '+84359127610', 'Ha Noi', '86d8a1d9a25b6223dda803b5c0339b56', 1, '2021-11-11 15:34:59', '2021-11-11 18:14:16'),
(56, 'kanh', 'k11a@gmail.com', NULL, NULL, '86d8a1d9a25b6223dda803b5c0339b56', 2, '2021-12-19 08:51:49', '2021-12-19 08:51:49'),
(60, 'anh', 'anh@gmail.com', NULL, NULL, '123123', 1, '2021-12-21 12:21:39', '2021-12-21 12:21:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
