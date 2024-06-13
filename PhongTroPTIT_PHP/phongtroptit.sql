-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2024 lúc 07:59 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phongtroptit`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh_phong_tro`
--

CREATE TABLE `hinh_anh_phong_tro` (
  `IDimage` int(11) NOT NULL,
  `IDPhongTro` int(11) NOT NULL,
  `DuongDan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinh_anh_phong_tro`
--

INSERT INTO `hinh_anh_phong_tro` (`IDimage`, `IDPhongTro`, `DuongDan`) VALUES
(3, 28, 'uploads/12.jpg'),
(4, 29, 'uploads/29.jpg'),
(5, 30, 'uploads/13.jpg'),
(6, 30, 'uploads/14.jpg'),
(9, 32, 'uploads/29.jpg'),
(10, 32, 'uploads/11.jpg'),
(11, 32, 'uploads/12.jpg'),
(12, 33, 'uploads/14.jpg'),
(14, 33, 'uploads/15.jpg'),
(15, 33, 'uploads/13.jpg'),
(16, 34, 'uploads/15.jpg'),
(17, 34, 'uploads/16.jpg'),
(18, 34, 'uploads/17.jpg'),
(19, 34, 'uploads/18.jpg'),
(20, 35, 'uploads/19.jpg'),
(21, 36, 'uploads/21.jpg'),
(22, 36, 'uploads/22.jpg'),
(25, 39, 'uploads/24.jpg'),
(26, 40, 'uploads/25.jpg'),
(27, 41, 'uploads/17.jpg'),
(28, 41, 'uploads/27.jpg'),
(29, 41, 'uploads/28.jpg'),
(30, 41, 'uploads/29.jpg'),
(31, 42, 'uploads/30.jpg'),
(32, 43, 'uploads/31.jpg'),
(33, 43, 'uploads/22.jpg'),
(34, 43, 'uploads/13.jpg'),
(35, 43, 'uploads/25.jpg'),
(38, 47, 'uploads/ktx3.jpg'),
(39, 47, 'uploads/ktx2.jpg'),
(40, 47, 'uploads/ktx1.jpg'),
(41, 48, 'uploads/ktx5.jpg'),
(44, 51, 'uploads/ktx4.jpg'),
(45, 52, 'uploads/16.jpg'),
(47, 54, 'uploads/ktx6.jpg'),
(48, 54, 'uploads/ktx6.jpg'),
(49, 55, 'uploads/30.jpg'),
(50, 55, 'uploads/31.jpg'),
(51, 55, 'uploads/12.jpg'),
(54, 58, 'uploads/29.jpg'),
(55, 55, 'uploads/11.jpg'),
(56, 52, 'uploads/17.jpg'),
(57, 46, 'uploads/26.jpg'),
(59, 7, 'uploads/12.jpg'),
(60, 8, 'uploads/13.jpg'),
(61, 15, 'uploads/14.jpg'),
(62, 20, 'uploads/15.jpg'),
(63, 21, 'uploads/16.jpg'),
(65, 26, 'uploads/18.jpg'),
(66, 27, 'uploads/19.jpg'),
(67, 38, 'uploads/27.jpg'),
(69, 60, 'uploads/302147094_3213261402249855_592448984977293628_n.jpg'),
(71, 62, 'uploads/302149490_3213261422249853_1948328481092680102_n.jpg'),
(79, 22, 'uploads/17.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_tro`
--

CREATE TABLE `phong_tro` (
  `IDPhongTro` int(11) NOT NULL,
  `user_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'admin',
  `DiaChi` tinytext NOT NULL,
  `XaPhuong` varchar(40) NOT NULL,
  `QuanHuyen` varchar(40) NOT NULL,
  `TenChuTro` varchar(50) NOT NULL DEFAULT 'Không xác định',
  `Sdt` varchar(11) NOT NULL,
  `TieuDe` tinytext NOT NULL,
  `KieuPhong` varchar(40) NOT NULL,
  `KieuVeSinh` varchar(40) NOT NULL DEFAULT 'Chưa xác định',
  `GiaChoThue` int(11) NOT NULL,
  `DienTich` double NOT NULL,
  `GiaDien` varchar(30) NOT NULL,
  `GiaNuoc` varchar(30) NOT NULL,
  `DoiTuong` varchar(50) NOT NULL DEFAULT 'Chưa xác định',
  `TienIch` tinytext DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `ThoiGianDang` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(100) NOT NULL DEFAULT 'Chưa cho thuê'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong_tro`
--

INSERT INTO `phong_tro` (`IDPhongTro`, `user_name`, `DiaChi`, `XaPhuong`, `QuanHuyen`, `TenChuTro`, `Sdt`, `TieuDe`, `KieuPhong`, `KieuVeSinh`, `GiaChoThue`, `DienTich`, `GiaDien`, `GiaNuoc`, `DoiTuong`, `TienIch`, `MoTa`, `ThoiGianDang`, `Status`) VALUES
(7, 'chinh', '- Địa chỉ: Số 30 ngõ 394 Phạm Văn Đồng, Cầu Giấy.', 'Phường Dịch Vọng', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0835152108', 'Cho thuê phòng SIÊU ĐẸP, MỚI 100% Phạm Văn Đồng', 'Phòng trọ', 'Khép kín', 3000000, 25, '4000/số', '30000/khối', 'Gia đình', 'Chỗ để xe , Sân phơi , Internet , Điều hòa , Bình nóng lạnh , Máy giặt , Truyền hình cáp.', '- Địa chỉ: Số 30 ngõ 394 Phạm Văn Đồng, Cầu Giấy.\r\n- Vị trí: Gần Bộ Công an, Cao đẳng Du lịch, Đại họcĐiện lực,, Đại học Tài chính, Đại học Sư phạm.\r\n- Nhà gồm 5 tầng, mỗi tầng 2 phòng, diện tích mỗiphòng: 25 – 30m2, vệ sinh giữa.\r\n- Nhà mới 100%, rất đẹp. Tất cả các phòng đều có cửasổ thoáng mát.\r\n- Phòng được trang bị đầy đủ: giường, tủ, điều hòa,nóng lạnh, máy giặt, bếp ăn tiện nghi, camera…\r\n- Để xe free tầng 1. Giờ giấc thoải mái, không chungchủ.\r\n- Dịch vụ:\r\n+ Điện: 3,5k/số (tính điện mỗi phòng, riêng điệnchung: nóng lạnh, máy giặt free).\r\n+ Nước: 100k/ người.\r\n+ Mạng: 50k/ phòng.\r\n- Giá thuê: 3tr – 3.5tr/ phòng (đóng 1 tháng cọc 1tháng)\r\n- Bạn nào quan tâm liên hệ: Ms Hương 0835 152 108(mình khá bận nên hạn chế về thời gian inbox, khuyến khích các bạn quan tâm qua\r\nxem để cảm nhận đầy đủ về nhà). LIÊN HỆ TRƯỚC ĐỂ QUA MỞ CỬA.', '2024-05-08 18:31:07', 'Chưa cho thuê'),
(8, 'linhhp', 'nhà 7 ngách 11 ngõ 39 Hồ Tùng Mậu Cầu Giấy, Hà Nội', 'Phường Mai Dịch', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0394879549', 'TÌm Nam ở ghép', 'Phòng trọ', 'Khép kín', 2700000, 30, '3500/số', '150 nghìn/người', 'Sinh viên', 'Chỗ để xe , Sân phơi , Internet , Điều hòa , Bình nóng lạnh , Truyền hình cáp.', '- Tìm Nam ở ghép tại nhà 7 ngách 11 ngõ 39 Hồ TÙng Mậu Cầu GIấy, Hà Nội., gần các trường ĐH như thương mại, QUốc Gia, DU lịch, SƯ Phạm, Múa,...- Hiện tại mình đang có 2 người cần tìm thêm 1 người để chia sẻ tiền phòng, Ưu tiên các bạn còn đang là sinh viên.\r\n+ Tiền phòng : 2tr7\r\n+ Điện: 3.000d/1so\r\n+ Nước : 150k/1 người\r\n+ Mạng : 50k/1 người\r\n+ Phòng rộng tầm 30m2\r\n+ Có chỗ để xe thoải má ở Tầng 1, và phơi quần áo ở tầng 5 ( tầng thượng) \r\n+ Nhà vệ sinh,đầy đủ nóng lạnh, Bếp nấu ăn.\r\n+ Chu kì đóng tiền nhà 1 tháng 1 vào ngày mùng 8 đầu tháng\r\n+ Có thể chuyển vào ở luôn vào đầu tháng 4 này\r\n* liên hệ: Điện thoại : 0394879549', '2024-05-09 08:55:23', 'Chưa cho thuê'),
(15, 'nguyendv99', ' 75 ngõ 120 trần cung, Trần Cung, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0836314397', 'cho thuê phòng trọ trần cung , hoàng quốc việt.\r\n', 'Phòng trọ', 'Khép kín', 2800000, 23, '3500/số', '80000/người', 'Gia đình', 'Chỗ để xe , Sân phơi , Internet , Điều hòa , Bình nóng lạnh , Máy giặt', '++cho thuê phòng trọ 75/120 trần cung\r\n++nhà gần các trường đại học, cao đẳng sp tw, điện lực, học viên ktqs, cao đẳng du lịch\r\n++nhà k chung chủ đủ đồ , kệ giường, nóng lạnh điều hòa, ...\r\n++ có phòng 15m2-2.8tr, phòng to 23m2, giá 3,2tr\r\n++ có phòng khép kín, và không khép kín\r\n++ chỉ cho nữ, nhóm nữ, cặp đôi, hộ gd thuê\r\n++LH chủ nhà 0339869997', '2024-05-08 18:31:32', 'Chưa cho thuê'),
(20, 'admin', 'Số 9, ngách 18, ngõ 133 Xuân Thủy, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0904563287', 'Cho thuê phòng trọ 25m2 tại ngõ 133 Xuân Thủy', 'Phòng trọ', 'Khép kín', 2400000, 25, '4000/số', '35000/khối', 'Sinh viên', 'bình nóng lạnh, chỗ để xe, sân phơi thoáng mát, internet tốc độ cao.', NULL, '2024-05-08 18:31:43', 'Chưa cho thuê'),
(21, 'admin', 'Số 21, ngõ 133 Xuân Thủy, Cầu Giấy, Hà Nội ', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '033765924', 'Cho thuê căn hộ tại số 21 ngõ 133 Xuân Thủy.', 'Nhà nguyên căn', 'Khép kín', 4500000, 40, '3500/số', '30000/khối', 'Người đi làm', 'Internet tốc độ cao, điều hòa, nóng lạnh', 'Gần ĐHGQHN, ĐHSP, Học viện Báo chí Tuyên truyền, các tòa nhà như IPH, HITC, tòa Richland Southern', '2024-05-08 18:31:56', 'Chưa cho thuê'),
(22, 'ngovantrong1308', 'số 9, đường Quan Hoa, Cầu Giấy, Hà Nội', 'Phường Cổ Nhuế 2', 'Quận Bắc Từ Liêm', 'Ngọ Văn Trọng', '033645982', 'Cho thuê văn phòng làm việc ', 'Nhà nguyên căn', 'Không khép kín', 4000000, 20, '3000/số', '350000/khối', 'Tất cả', '                        ', 'Cách Quận Ủy Cầu Giấy chỉ 50m, gần ĐH Giao thông Vận  tải', '2024-06-12 17:11:11', 'Đã cho thuê'),
(26, 'admin', 'nhà 14, ngách 2/133, ngõ 133 Xuân Thủy, Cầu Giấy', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '033876529', 'Tìm người ở ghép tại nhà 14, ngách 2/133, ngõ 133 Xuân Thủy, Cầu Giấy.', 'Phòng trọ', 'Khép kín', 2200000, 25, '3500đ/số', '90000đ/tháng', 'Tất cả', 'có bình nóng lạnh, chỗ để xe rộng rãi, Internet tốc độ cao', 'Thuận tiện đi lại cho sinh viên ĐHQGHN, ĐH Sư phạm, Học viện Báo chí Tuyên truyền, nhân viên làm việc tại HITC, IPH', '2024-05-09 08:56:15', 'Chưa cho thuê'),
(27, 'admin', 'Số nhà 27, ngõ 269 Lạc Long Quân, Cầu Giấy', 'Phường Nghĩa Đô', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0904876392', 'Tìm người ở ghép tại số nhà 27, ngõ 269 Lạc Long Quân, Cầu Giấy.', 'Phòng trọ', 'Không khép kín', 1650000, 20, '2500đ/số', '30000k/khối', 'Tất cả', 'Có nóng lạnh, Internet, có chỗ để xe', 'Vị trí ngay gần Hồ Tây', '2024-05-09 08:56:48', 'Chưa cho thuê'),
(28, 'nguyendv99', 'Số 12, Trần Quốc Vượng, Cầu Giấy, Dịch Vọng Hậu, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '01687899848', 'Cho thuê phòng trọ Số 12, Trần Quốc Vượng, Cầu Giấy, Hà Nội.', 'Phòng trọ', 'Không khép kín', 1600000, 20, '3000/số', '100000/tháng', 'Tất cả', 'Chỗ để xe , Sân phơi , Internet , Điều hòa , Bình nóng lạnh', 'không chung chủ, không khép kín, nấu ăn riêng, ngay trong phòng có kệ nấu rửa, phòng rộng 20m2 đi về tự quản vì có chìa khóa riêng', '2024-05-08 18:32:36', 'Chưa cho thuê'),
(29, 'nguyendv99', 'số nhà 126A, ngõ 28 Cốm Vòng, Cầu Giấy', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0977601628', 'Tìm nữ ở ghép Trần Thái Tông, Cầu Giấy.', 'Phòng trọ', 'Không khép kín', 1000000, 25, '4000/số', 'Nhà nước quy định', 'Người đi làm', 'chỗ để xe, sân phơi, Internet, nóng lạnh.', 'Mình hiện cần tìm 1-2 bạn nữ ở ghép vào tháng 3, ưu tiên chuyển đến vào cuối tháng 2 luôn. Cầu thang gỗ, bậc thấp, chuyển đồ rất tiện. Phòng khép kín rộng 20m2, có cửa sổ to, nhà tắm rộng, có nóng lạnh, khá thoáng và mát, có bồn rửa mặt, vòi hoa sen, có kệ bếp và quạt thông gió. Có wifi, có mạng dây, chỗ để xe rộng, có camera quan sát, ko chung chủ, bạn bè thoải mái, phơi đồ tầng 7. Toàn người đi làm nên rất yên tĩnh. Gần chợ, giặt là…', '2024-05-09 08:57:04', 'Chưa cho thuê'),
(30, 'nguyendv99', 'Số 42, Ngõ 165, Xuân Thủy, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '01686937831', 'Cho thuê nhà số 42, ngõ 165 Xuân Thủy, Cầu Giấy.', 'Nhà nguyên căn', 'Khép kín', 3000000, 25, '4500/số', '35000/khối', 'Người đi làm', 'Chỗ để xe , Internet tốc độ cao, truyền hình K+', '- Để xe ở tầng 1 nhưng hơi hẹp.\r\n- Nhà sàn gỗ nên không sợ ẩm mốc nhé', '2024-05-08 18:33:40', 'Chưa cho thuê'),
(32, 'admin', 'Số 24, ngõ 30 Phan Văn Trường, Cầu Giấy', '', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0984709138', 'Cho thuê nhà 3 tầng', 'Nhà nguyên căn', 'Khép kín', 3500000, 0, '3500/số', '35000/khối', 'Gia đình', '', '', '2024-05-08 18:34:25', 'Chưa cho thuê'),
(33, 'ngovantrong1308', 'số 29C, ngõ 79 Cầu Giấy, Cầu Giấy, Hà Nội', 'Phường Yên Hòa', 'Quận Cầu Giấy', 'Ngọ Văn Trọngttt', '01664309898', 'Cho thuê phòng trọ số 29C, ngõ 79 Cầu Giấy.', 'Phòng trọ', 'Khép kín', 1500000, 15, '3500/số', '80000', 'Sinh viên', 'Chỗ để xe , Sân phơi , Internet , Bình nóng lạnh', '-Diện tích sử dụng 15 M2,không khép kín,2 phòng chung nhau 1 vs,không chung chủ.\\\\r\\\\n-Giá : 15 00.000/ tháng, đặt cọc 1 tháng ,đóng 2 tháng 1 lần.\\\\r\\\\n-phòng ở tầng 2 ,nhà 2 tầng,có nóng lanh …\\\\r\\\\n-An ninh tốt ,nhà chỉ có 2 phòng cho thuê nên yên tĩnh,không ai làm phiền ai vì phòng bên cũng thuê đi làm sáng đi tối về…\\\\r\\\\n-Trong phòng có giường,quạt tường,gương,kệ kính…\\\\r\\\\n-phòng thông thoáng,có chỗ nấu ăn ở ngoài,phơi quần áo không bị mưa,có chỗ để xe miễn phí không mưa nắng,WIFI – internet cáp quang,chợ cách mấy bước chân,mua bán đi lại thuận tiện …\\\\r\\\\n- Điện 3,5k/số,nước 80k/người/tháng,mạng chia đầu người…\\\\r\\\\n-Gần trạm trung chuyển cầu giấy đi lại thuận tiện,ĐH GTVT,Ngoại thương,sư phạm, quốc gia,điện lực…..', '2024-05-22 02:25:52', 'Chưa cho thuê'),
(34, 'newmember', 'số nhà 16, ngách 32/27, 233 Xuân Thủy, Cầu Giấy', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '01639123122', 'Cho thuê phòng tại số nhà 16, ngách 32/27, 233 Xuân Thủy, Cầu Giấy.', 'Phòng trọ', 'Không khép kín', 1300000, 16, '4000/số', '25000/khối', 'Sinh viên', 'Chỗ để xe, sân phơi, Internet', 'phòng trong nhà 6 tầng, vị trí gần ĐHQGHN, ĐHSPHN, Học viện Báo chí Tuyên truyền.', '2024-05-08 18:34:54', 'Chưa cho thuê'),
(35, 'thangnm', 'Số 5, Ngõ 168 , Trần Thái Tông, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0986797907', 'Cho thuê phòng trọ số 5, Ngõ 168 Trần Thái Tông, Cầu Giấy.', 'Phòng trọ', 'Khép kín', 2500000, 25, 'Nhà nước quy định', 'Nhà nước quy định', 'Tất cả', 'Chỗ để xe , Sân phơi , Internet , Điều hòa , Bình nóng lạnh , Tivi', 'Chính chủ có phòng cho thuê, tiện nghi đầy đủ, vệ sinh khép kín (giường có đệm ga đầy đủ, bình nóng lạnh, điều hòa, tivi, tủ đựng quần áo, bàn ghế), khu vực an ninh tốt, tòa nhà có bảo vệ, thời gian đi về thoải mái. Ai có nhu cầu liên hệ chính chủ:Hải Anh. Địa chỉ: 5/168 Trần Thái Tông, Cầu Giấy, Hà Nội', '2024-05-08 18:35:04', 'Chưa cho thuê'),
(36, 'ndt0123', 'Số 39A, Ngõ 28, Trần Thái Tông, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0934576604', 'Cho thuê phòng trọ số 39A, Ngõ 28 Trần Thái Tông.', 'Phòng trọ', 'Khép kín', 3800000, 20, '3500/số', '25000/khối', 'Người đi làm', 'Chỗ để xe, sân phơi, Internet', '+Vị trí: Tòa nhà 7 tầng tọa lạc tại số 39A ngõ 28 Đường “ TRẦN THÁI TÔNG ”, cách mặt đường “ TRẦN THÁI TÔNG” khoảng 200m. Ngõ thông ra đường Đồng Bông\r\n+ Tòa nhà mới xây dựng: Thiết kế đẹp, đầy đủ tiện nghi, không gian thoáng mát, Thỏa sức mua sắm tại trung tâm thương mại Lotte Mart với 6 phút di chuyển. \r\n+ Tiện nghi: Tòa nhà trang bị đầy đủ thiết bị bao gồm điều hòa,nóng lạnh,giường, tủ quần áo, bàn làm việc, chậu rửa bếp, kệ bếp, máy giặt chung của tòa nhà được free điện nươc sử dụng giặt máy. Internet & cáp truyền hình đến tận phòng, thang máy tốc độ cao…Mỗi phòng được thiết kế hợp lý, phòng rộng 20 m2 – 22 m2, có ban công phơi đồ, không gian thoáng tận hưởng không khí trong lành, View đẹp. Không gian sinh hoạt chung: các phòng có hành lang sinh hoạt chung rộng rãi, trang trí cây xanh dịu mát.\r\n+ Giao thông: Đường vào nhà rộng thoáng, ngay đằng sau nhà là bãi gửi xe ô tô.', '2024-05-08 18:35:14', 'Chưa cho thuê'),
(38, 'ndt0123', 'Số 65, Ngõ 98, Xuân Thủy, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '01675273191', 'Cho thuê phòng trọ số 65, Ngõ 98 Xuân Thủy.', 'Phòng trọ', 'Không khép kín', 2100000, 25, '3500/số', '50000/người', 'Tất cả', 'Chỗ để xe , Sân phơi , Internet , Điều hòa , Bình nóng lạnh', 'Còn 1 phòng cho thuê tại ngõ 98 Xuân Thủy, riêng chủ, đủ đồ, giờ giấc tự quản\r\nPhòng nhà mình trong nhà riêng 5 tầng, ngay phía sau trường báo trí tuyên truyền, đi từ Nguyễn Phong Sắc hoặc Xuân Thủy đều vào được. Thuận tiện xe bus, xung quanh rất nhiều trường đại học: ĐH Sư Phạm, ĐH Quốc Gia, Giao Thông Vận Tải…..\r\nNhà riêng chủ, đồ đạc đầy đủ: Giường ngủ, tủ quần áo, điều hòa, nóng lạnh, wiffi…. Chỗ để xe FREE, ban công thoáng mát.\r\nGiá 2.6 triệu (thanh toán 3 tháng/lần)', '2024-05-08 18:35:38', 'Chưa cho thuê'),
(39, 'ndt0123', 'Số 10A, Ngõ 155/43 Cầu Giấy, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '01655990877', 'Cho thuê phòng trọ số 10A, Ngõ 155/43 Cầu Giấy.', 'Phòng trọ', 'Không khép kín', 2000000, 20, '4000/số', '30000/khối', 'Tất cả', 'chỗ để xe, sân phơi, Internet, nóng lạnh', 'Có chỗ để xe rộng rãi. Điện 4k, nước 30k, đặt cọc 1 tháng thanh toán hàng tháng. ưu tiên ở lâu dài. Giá 2tr, phòng tầng 5 địa chỉ ngõ 155/43 nhà 10A gần bưu điện cầu giấy. Liên hệ mình 01655990877 để xem phòng.', '2024-05-08 18:35:49', 'Chưa cho thuê'),
(40, 'ndt0123', 'Số 67, Ngõ 165 Cầu Giấy, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0968896718', 'Cho thuê phòng trọ số 67, Ngõ 165 Cầu Giấy.', 'Phòng trọ', 'Khép kín', 1500000, 15, '4000/số', '100000/tháng', 'Tất cả', 'Chỗ để xe, sân phơi, Internet', 'CHO THUÊ PHÒNG!!!\r\nMình có 1 phòng gần cuối tháng này cho thuê lại. Ở 165 cầu giấy. Giá 1.5tr. Khép kín . Điên 4k 1 số. Nc khoảng 100k 1 ng. 11h đóng cửa. Ai có nhu cầu ib mình. Giờ mà tìm đc phòng khep kin tr5 ở khu đấy là hiếm đấy nhé.Nhanh tay kẻo hết.!', '2024-05-08 18:36:01', 'Chưa cho thuê'),
(41, 'ngovantrong1308', 'Số 34, Ngõ 329, Cầu Giấy, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '01626871722', 'Cho thuê phòng trọ số 34, Ngõ 329 Cầu Giấy.', 'Phòng trọ', 'Khép kín', 2300000, 20, 'Nhà nước quy định', 'Nhà nước quy định', 'Sinh viên', 'Chỗ để xe, sân phơi, Internet', 'phòng đẹp kiểu CCMN. giá 2,3tr. rộng hơn 20m2. khép kín. \r\nan ninh tốt. \r\ngần các trường đh lớn như báo chí, sư phạm, quốc gia, gtvt,...\r\ncách đh thương mại gần 2km.\r\ngần sở công thương Cầu Giấy. gần chợ. siêu thị. các trung tâm thương mại lớn. gần công viên cầu giấy, cv nghĩa đô,..\r\nđầu ngõ có phòng tập nhảy hiện đại cho b nữ nào đam mê nhé..', '2024-05-17 17:16:18', 'Chưa cho thuê'),
(42, 'admin', 'Số 39A, Trần Thái Tông, Cầu Giấy, Hà Nội', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0961035321', 'Cho thuê phòng trọ tại sô 39A, Trần Thái Tông, Cầu Giấy, Hà Nội.', 'Phòng trọ', 'Khép kín', 1900000, 20, '3500/số', '30000/khối', 'Sinh viên', 'Internet, sân phơi rộng rãi, bình nóng lạnh', 'Cho thuê phòng trọ tại sô 39A, Trần Thái Tông, Cầu Giấy, Hà Nội, gần Học viện Báo chí, ĐHSPHN, ĐHQGHN.', '2024-05-08 18:36:21', 'Chưa cho thuê'),
(43, 'admin', 'số 235 Yên Hòa, Cầu Giấy, Hà Nội', 'Phường Yên Hòa', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0972531108', 'Cho thuê văn phòng tại số 235 Yên Hòa, Cầu Giấy.', 'Nhà nguyên căn', 'Không khép kín', 4200000, 30, '3500/số', '30000/khối', 'Người đi làm', 'Chỗ để xe , Sân phơi , Internet , Điều hòa , Bình nóng lạnh , Máy giặt , Tivi', 'Cho thuê văn phòng tại số 235 Yên Hòa, Cầu Giấy, diện tích 30m2, đầy đủ tiện nghi', '2024-05-08 18:36:31', 'Chưa cho thuê'),
(46, 'newsignUp', '36 phố yên bình , phúc la , hà đông , hà nội', 'Phường Mộ Lao', 'Quận Hà Đông', 'Ngọ Văn Trọng', '01646153382', 'tìm nam ở ghép ở số 9, ngõ 299 đường Cầu Giấy .', 'Phòng trọ', 'Không khép kín', 2700000, 25, '4000/số', '35000/khối', 'Sinh viên', 'sân để xe rộng rãi, Internet ổn định, phòng có bình nóng lạnh', 'Tìm một nam ở ghép luôn và ngay vì bạn mình mới chuyển đi gấp.\r\n- Cần một bạn Nam ở sạch sẽ, không hút thuốc. \r\n- Phòng đã có 2 người ở đầy đủ đồ dùng hết rồi, chỉ cần mang theo đồ cá nhân theo là đủ.\r\n- Phòng trọ gần ĐH Thương Mại, Công Nghiệp, QUốc gia, Sư phạm, Cao đẳng du lịch .\r\n- Nhanh tay đăng ký gọi điện  với mình qua số ( 0945.803.765) vì số lượng có hạn', '2024-05-09 08:57:27', 'Chưa cho thuê'),
(47, 'newsignUp', 'KTX nằm Trong PTIT THUỘC ĐƯỜNG Trần phú hà đông hà nội', 'Phường Mộ Lao', 'Quận Hà Đông', 'Trọng', '0941944943', 'Phòng 101 Kí túc xá B5 Học viện công nghệ bưu chính viễn thông', 'Kí túc xá', 'Khép kín', 180000, 35, '3500/số', '30000/khối', 'Sinh viên', 'Tiện ích đầy đủ ', 'Phòng phù hợp với nữ , đang ở 5 bạn ', '2024-05-09 18:14:15', 'Chưa cho thuê'),
(48, 'ndt0123', 'ngõ 6 nguyễn văn trỗi mộ lao hà đông hà nội', 'Phường Mộ Lao', 'Quận Hà Đông', 'Ngọ Văn Trọng', '01648909525', 'Phòng 501 , kí túc xá B1 Học viện bưu chính PTIT HÀ ĐÔNG', 'Kí túc xá', 'Khép kín', 1500000, 25, '4000/số', '25000/khối', 'Sinh viên', 'Tiện ích đầy đủ , điều hòa nóng lạnh', 'phòng nam đang ở 4 bạn thiếu 4 bạn', '2024-05-09 09:00:56', 'Chưa cho thuê'),
(51, 'admin', 'ngõ 6 , Nguyễn Văn Trỗi , Mộ Lao ,Hà Đông', 'Phường Mộ Lao', 'Quận Hà Đông', 'Ngọ Văn Trọng', '01694117237', 'Phòng 202 , kí túc xá B5 PTIT HÀ NỘI ', 'Kí túc xá', 'Không khép kín', 200000, 15, '3000/số', '60000/người', 'Sinh viên', 'Đầy đủ tiện ích ', 'Phòng nữ còn thiếu 3 bạn đến ở', '2024-05-09 18:14:48', 'Chưa cho thuê'),
(52, 'chinh', 'dãy 3 kHU TẬP THỂ c2 ngõ 9 Dịch vọng Cầu Giấy  hà nội', 'Phường Dịch Vọng', 'Quận Cầu Giấy', 'Trọng', '0438339363', 'Nhà tập thể chung cư ', 'Phòng trọ', 'Không khép kín', 2500000, 16, '4000/số', '70000/người', 'Sinh viên', 'ĐẦY ĐỦ TIỆN ÍCH', 'PHÒNG NAM THIẾU 1 BẠN ĐẾN Ở', '2024-05-09 18:16:23', 'Chưa cho thuê'),
(54, 'thangnm', 'Ngõ 6 Nguyễn Văn Trỗi , Mộ lao, Hà Đông, Hà Nội ', 'Phường Mộ Lao', 'Quận Hà Đông', 'Ngọ Văn Trọng', '0904708498', 'Phòng 309 Kí túc xá B2 Học Viện Công Nghệ Bưu Chính Viễn Thông', 'Kí túc xá', 'Khép kín', 900000, 22, 'Nhà nước quy định', 'Free', 'Sinh viên', 'Tiện ích đầy đủ, không gian thoáng mát', 'Phòng đã có 2 người, đồ đạc đầy đủ, yêu cầu trung thực, sạch sẽ. ', '2024-05-09 08:35:52', 'Chưa cho thuê'),
(55, 'diepdx', 'số 4, ngách 24/133, ngõ 133 Xuân Thủy, Cầu Giấy', 'Phường Dịch Vọng Hậu', 'Quận Cầu Giấy', 'Trọng', '0336842913', 'Cho thuê phòng trọ tại số 4, ngách 24/133, ngõ 133 Xuân Thủy, Cầu Giấy.', 'Phòng trọ', 'Khép kín', 2500000, 25, '4000/số', '30000/khối', 'Sinh viên', 'bình nóng lạnh, wifi, sân phơi rộng rãi', 'Cho thuê phòng trọ tại nhà số 4, ngách 24/133, ngõ 133 Xuân Thủy, Cầu Giấy. Phòng có cửa sổ rộng, tiện nghi đầy đủ, thích hợp với những bạn sinh viện đang học tại ĐHQGHN, ĐHSPHN, Học viện Báo chí,', '2024-05-09 03:40:18', 'Chưa cho thuê'),
(56, 'thangnm', 'số 11A, Ngách 24, Ngõ 165 Cầu Giấy', 'Phường Dịch Vọng', 'Quận Cầu Giấy', 'Ngọ Văn Trọng', '0969633422', 'Cho thuê phòng trọ số 11A, Ngách 24, Ngõ 165 Cầu Giấy.', 'Phòng trọ', 'Khép kín', 2000000, 20, 'Nhà nước quy định', 'Nhà nước quy định', 'Tất cả', 'Chỗ để xe , Sân phơi , Internet , Bình nóng lạnh', 'phòng đầy đủ tiện nghi', '2024-05-09 03:39:25', 'Chưa cho thuê'),
(58, 'ngovantrong1308', 'số 3 trần phú', 'Phường Mộ Lao', 'Quận Hà Đông', 'Trọng', '0904709498', 'trọng', 'Phòng trọ', 'Khép kín', 2000000, 20, '3000/số', '20k/khối', 'Sinh viên', 'bình nóng lạnh , điều hòa', 'không', '2024-05-08 17:24:07', 'Chưa cho thuê'),
(60, 'ngovantrong1308', 'ngõ 6 Nguyễn Văn Trỗi Mộ Lao Hà Đông', 'Phường Mộ Lao', 'Quận Hà Đông', 'Nguyễn Quang Khải', '0987234567', 'Phòng Nam 309 Kí túc xá B2 Học viện Công nghệ bưu chính viễn thông', 'Kí túc xá', 'Không khép kín', 150000, 40, 'Giá nhà nước ', 'Giá nhà nước', 'Sinh viên', 'có đầy đủ nhà tắm , nhà vệ sinh , giường , quạt , chiếu', 'ktx cách trường 500m , gần , không cho nấu ăn , an ninh đảm bảo', '2024-05-16 16:49:22', 'Chưa cho thuê'),
(62, 'ngovantrong1308', 'ngõ 6 Nguyễn Văn Trỗi Mộ Lao Hà Đông', 'Phường Mộ Lao', 'Quận Hà Đông', 'Nguyễn Quang Khải', '09356782234', 'ttt', 'Phòng trọ', 'Khép kín', 1300000, 30, 'Giá nhà nước ', 'Giá nhà nước', 'Sinh viên', 'có đầy đủ nhà tắm , nhà vệ sinh , giường , quạt , chiếu', ': Khu nhà có vị trí thuận lợi: Gần công viên, gần trường học ', '2024-05-18 17:47:18', 'Chưa cho thuê');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'images/icon-account.png',
  `dob` date DEFAULT NULL,
  `cccd` char(12) DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_name`, `password`, `avatar`, `dob`, `cccd`, `FullName`) VALUES
('admin', '123456', 'images/icon-account.png', NULL, NULL, NULL),
('chinh', '123456', 'images/icon-account.png', NULL, NULL, NULL),
('diepdx', '123456', 'images/icon-account.png', NULL, NULL, NULL),
('hoangnv', '123456', 'images/icon-account.png', NULL, NULL, NULL),
('hung63', '12345678', 'images/icon-account.png', NULL, NULL, NULL),
('imanewbie', 'k62ie9uet', 'images/icon-account.png', NULL, NULL, NULL),
('linhhp', '123456', 'images/icon-account.png', NULL, NULL, NULL),
('ndt0123', '123456', 'images/icon-account.png', NULL, NULL, NULL),
('newaccount', '12345678', 'images/icon-account.png', NULL, NULL, NULL),
('newmember', 'k62ie9uet', 'images/icon-account.png', NULL, NULL, NULL),
('newsignUp', 'k62ie9uet', 'images/icon-account.png', NULL, NULL, NULL),
('ngovantrong1308', 'trong123', 'uploads/avatars/avatar.jpg', '2003-08-13', '038203022253', 'Ngọ Trọng'),
('nguyendv99', '123456', 'images/icon-account.png', NULL, NULL, NULL),
('phanthi123', '12345678', 'images/icon-account.png', NULL, NULL, NULL),
('tam0123', '123456', 'images/icon-account.png', NULL, NULL, NULL),
('thangnm', '123456', 'images/icon-account.png', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hinh_anh_phong_tro`
--
ALTER TABLE `hinh_anh_phong_tro`
  ADD PRIMARY KEY (`IDimage`),
  ADD KEY `IDPhongTro` (`IDPhongTro`);

--
-- Chỉ mục cho bảng `phong_tro`
--
ALTER TABLE `phong_tro`
  ADD PRIMARY KEY (`IDPhongTro`),
  ADD KEY `user_name` (`user_name`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hinh_anh_phong_tro`
--
ALTER TABLE `hinh_anh_phong_tro`
  MODIFY `IDimage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `phong_tro`
--
ALTER TABLE `phong_tro`
  MODIFY `IDPhongTro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hinh_anh_phong_tro`
--
ALTER TABLE `hinh_anh_phong_tro`
  ADD CONSTRAINT `hinh_anh_phong_tro_ibfk_1` FOREIGN KEY (`IDPhongTro`) REFERENCES `phong_tro` (`IDPhongTro`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phong_tro`
--
ALTER TABLE `phong_tro`
  ADD CONSTRAINT `phong_tro_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user` (`user_name`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
