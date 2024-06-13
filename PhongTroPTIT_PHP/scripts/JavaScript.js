function setUpXaPhuongFilter(obj) {

	var BaDinh = ["Phường Phúc Xá", "Phường Trúc Bạch", "Phường Vĩnh Phúc", "Phường Cống Vị", "Phường Liễu Giai", "Phường Nguyễn Trung Trực", "Phường Quán Thánh", "Phường Ngọc Hà", "Phường Điện Biên", "Phường Đội Cấn", "Phường Ngọc Khánh", "Phường Kim Mã", "Phường Giảng Võ", "Phường Thành Công"];
	var HoanKiem = ["Phường Phúc Tân", "Phường Đồng Xuân", "Phường Hàng Mã", "Phường Hàng Buồm", "Phường Hàng Đào", "Phường Hàng Bồ", "Phường Cửa Đông", "Phường Lý Thái Tổ", "Phường Hàng Bạc", "Phường Hàng Gai", "Phường Chương Dương Độ", "Phường Hàng Trống", "Phường Cửa Nam", "Phường Hàng Bông", "Phường Tràng Tiền", "Phường Trần Hưng Đạo", "Phường Phan Chu Trinh", "Phường Hàng Bài"];
	var TayHo = ["Phường Phú Thượng", "Phường Nhật Tân", "Phường Tứ Liên", "Phường Quảng An", "Phường Xuân La", "Phường Yên Phụ", "Phường Bưởi", "Phường Thụy Khê"];
	var LongBien = ["Phường Thượng Thanh", "Phường Ngọc Thụy", "Phường Giang Biên", "Phường Đức Giang", "Phường Việt Hưng", "Phường Gia Thụy", "Phường Ngọc Lâm", "Phường Phúc Lợi", "Phường Bồ Đề", "Phường Sài Đồng", "Phường Long Biên", "Phường Thạch Bàn", "Phường Phúc Đồng", "Phường Cự Khối"];
	var CauGiay = ["Phường Nghĩa Đô", "Phường Nghĩa Tân", "Phường Mai Dịch", "Phường Dịch Vọng", "Phường Dịch Vọng Hậu", "Phường Quan Hoa", "Phường Yên Hòa", "Phường Trung Hòa"];
	var DongDa = ["Phường Cát Linh", "Phường Văn Miếu", "Phường Quốc Tử Giám", "Phường Láng Thượng", "Phường Ô Chợ Dừa", "Phường Văn Chương", "Phường Hàng Bột", "Phường Láng Hạ", "Phường Khâm Thiên", "Phường Thổ Quan", "Phường Nam Đồng", "Phường Trung Phụng", "Phường Quang Trung", "Phường Trung Liệt", "Phường Phương Liên", "Phường Thịnh Quang", "Phường Trung Tự", "Phường Kim Liên", "Phường Phương Mai", "Phường Ngã Tư Sở", "Phường Khương Thượng"];
	var HaiBaTrung = ["Phường Nguyễn Du", "Phường Bạch Đằng", "Phường Phạm Đình Hổ", "Phường Bùi Thị Xuân", "Phường Ngô Thì Nhậm", "Phường Lê Đại Hành", "Phường Đồng Nhân", "Phường Phố Huế", "Phường Đống Mác", "Phường Thanh Lương", "Phường Thanh Nhàn", "Phường Cầu Dền", "Phường Bách Khoa", "Phường Đồng Tâm", "Phường Vĩnh Tuy", "Phường Bạch Mai", "Phường Bạch Lôi", "Phường Quỳnh Lôi", "Phường Minh Khai", "Phường Trương Định"];
	var HoangMai = ["Phường Thanh Trì", "Phường Vĩnh Hưng", "Phường Định Công", "Phường Mai Động", "Phường Tương Mai","Phường Đại Kim", "Phường Tân Mai", "Phường Hoàng Văn Thụ", "Phường Giáp Bát", "Phường Lĩnh Nam", "Phường Thịnh Liệt", "Phường Trần Phú", "Phường Hoàng Liệt", "Phường Yên Sở"];
	var ThanhXuan = ["Phường Nhân Chính", "Phường Thượng Đình", "Phường Khương Trung", "Phường Khương Mai", "Phường Thanh Xuân Trung", "Phường Phương Liệt", "Phường Hạ Đình", "Phường Khương Đình", "Phường Thanh Xuân Bắc", "Phường Thanh Xuân Nam", "Phường Kim Giang"];
	var SocSon = ["Thị trấn Sóc Sơn", "Xã Bắc Sơn", "Xã Minh Trí", "Xã Hồng Kì", "Xã Nam Sơn", "Xã Trung Giã", "Xã Tân Hưng", "Xã Minh Phú", "Xã Phù Linh", "Xã Bắc Sơn", "Xã Tân Minh", "Xã Quang Tiến", "Xã Hiền Linh", "Xã Tân Dân", "Xã Tiên Dược", "Xã Việt Long", "Xã Xuân Giang", "Xã Mai Đình", "Xã Đức hòa", "Xã Thanh Xuân", "Xã Đông Xuân", "Xã Kim Lũ", "Xã Phú Cường", "Xã Phú Minh", "Xã Phù Lỗ", "Xã Xuân Thu"];
	var DongAnh = ["Thị trấn Đông Anh", "Xã Xuân Nộn", "Xã Thụy Lâm", "Xã Bắc Hồng", "Xã Nguyên Khê", "Xã Nam Hồng", "Xã Tiên Dương", "Xã Vân Hà", "Xã Uy Nỗ", "Xã Vân Nội", "Xã Liên Hà", "Xã Việt Hùng", "Xã Kim Nỗ", "Xã Kim Chung", "Xã Dục Tú", "Xã Đại Mạch", "Xã Vĩnh Ngọc", "Xã Cỗ Loa", "Xã Hải Bối", "Xã Xuân Canh", "Xã Võng La", "Xã Tầm Xá", "Xã Mai Lâm", "Xã Đông Hội"];
	var GiaLam = ["Thị trấn Yên Viên", "Thị trấn Trâu Quỳ", "Xã Yên Thường", "Xã Yên Viên", "Xã Ninh Hiệp", "Xã Đình Xuyên", "Xã Dương Hà", "Xã Phù Đổng", "Xã Trung Mầu", "Xã Lệ Chi", "Xã Cổ Bi", "Xã Đặng Xá", "Xã Phú Thị", "Xã Kim Sơn", "Xã Dương Quang", "Xã Dương Xá", "Xã Đông Dư", "Xã Đa Tốn", "Xã Kiêu Kỵ", "Xã Bát Tràng", "Xã Kim Lan", "Xã Văn Đức"];
	var NamTuLiem = ["Phường Cầu Diễn", "Phường Đại Mỗ", "Phường Mễ Trì", "Phường Mỹ Đình 1", "Phường Mỹ Đình 2", "Phường Phú Đô", "Phường Phương Canh", "Phường Tây Mỗ", "Phường Trung Văn", "Phường Xuân Phương"];
	var ThanhTri = ["Thị trấn Văn Điển", "Xã Tân Triều", "Xã Thanh Liệt", "Xã Tả Thanh Oai", "Xã Hữu Hòa", "Xã Tam Hiệp", "Xã Tứ Hiệp", "Xã Yên Mỹ", "Xã Vĩnh Quỳnh", "Xã Ngũ Hiệp", "Xã Duyên Hà", "Xã Ngọc Hồi", "Xã Vạn Phúc", "Xã Đại Áng", "Xã Liên Ninh", "Xã Đông Mỹ"];
	var BacTuLiem = ["Phường Cổ Nhuế 1", "Phường Cổ Nhuế 2", "Phường Đông Ngạc", "Phường Đức Thắng", "Phường Liên Mạc", "Phường Minh Khai", "Phường Phú Diễn", "Phường Phúc Diễn", "Phường Tây Tựu", "Phường Thụy Phương", "Phường Thượng Cát", "Phường Xuân Đỉnh", "Phường Xuân Tảo"];
	var MeLinh = ["Xã Đại Thịnh", "Xã Kim Hoa", "Xã Thạch Đà", "Xã Tiến Thắng", "Xã Tự Lập", "Xã Quang Minh", "Xã Thanh Lâm", "Xã Tam Đồng", "Xã Liên Mạc", "Xã Vạn Yên", "Xã Chu Phan", "Xã Tiến Thịnh", "Xã Mê Linh", "Xã Văn Khê", "Xã Hoàng Kim", "Xã Tiền Phong", "Xã Tráng Việt", "Xã Thị trấn Đông Chi"];
	var HaDong = ["Phường Nguyễn Trãi", "Phường Văn Mỗ", "Phường Vạn Phúc", "Phường Yết Kiêu", "Phường Quang Trung", "Phường Văn Quán", "Phường Hà Cầu", "Phường La Khê", "Phường Yên Nghĩa", "Phường Kiến Hưng", "Phường Phú Lãm", "Phường Phú Lương", "Phường Dương Nội", "Phường Đồng Mai", "Phường Biên Giang", "Phường Mộ Lao", "Phường Phú La"];
	var SonTay = ["Xã Lê Lợi", "Xã Phú Thịnh", "Xã Ngô Quyền", "Xã Quang Trung", "Xã Sơn Lộc", "Xã Xuân Khanh", "Xã Đường Lâm", "Xã Viên Sơn", "Xã Xuân Sơn", "Xã Trung Hưng", "Xã Thanh Mỹ", "Xã Trung Sơn Trầm", "Xã Kim Sơn", "Xã Sơn Đông", "Xã Cổ Đông"];
	var BaVi = ["Thị trấn Tây Đằng", "Xã Khánh Thượng", "Xã Phú Cường", "Xã Cổ Đô", "Xã Tản Hồng", "Xã Vạn Thắng", "Xã Châu Sơn", "Xã Phong Vân", "Xã Phú Đông", "Xã Phú Phương", "Xã Phú Châu", "Xã Thái Hòa", "Xã Đồng Thái", "Xã Phú Sơn", "Xã Minh Châu", "Xã Vật Lại", "Xã Chu Minh", "Xã Tòng Bạt", "Xã Cẩm Lĩnh", "Xã Sơn Đà", "Xã Đông Quang", "Xã Tiên Phong", "Xã Thụy An", "Xã Cam Thượng", "Xã Thuần Mỹ", "Xã Tản Lĩnh", "Xã Ba Trại", "Xã Minh Quang", "Xã Ba Vì", "Xã Vân Hòa", "Xã Yên Bài"];
	var PhucTho = ["Thị trấn Phúc Thọ", "Xã Vân Hà", "Xã Vân Phúc", "Xã Vân Nam", "Xã Xuân Phú", "Xã Phương Độ", "Xã Sen Chiểu", "Xã Cẩm Đình", "Xã Võng Xuyên", "Xã Thọ Lộc", "Xã Long Xuyên", "Xã Thượng Cốc", "Xã Hát Môn", "Xã Tích Giang", "Xã Thanh Đa", "Xã Trạch Mỹ Lộc", "Xã Phúc Hòa", "Xã Ngọc Tảo", "Xã Phụng Thượng", "Xã Am Thuấn", "Xã Tam Hiệp", "Xã Hiệp Thuận", "Xã Liên Hiệp"];
	var DanPhuong = ["Thị trấn Phùng", "Xã Trung Châu", "Xã Thọ An", "Xã Thọ Xuân", "Xã Hồng Hà", "Xã Liên Hồng", "Xã Liên Hà", "Xã Hạ Mỗ", "Xã Liên Trung", "Xã Phương Đình", "Xã Thượng Mỗ", "Xã Tân Hội", "Xã Tân Lập", "Xã Đan Phượng", "Xã Đồng Tháp", "Xã Song Phượng"];
	var HoaiDuc = ["Thị trấn Trạm Trôi", "Xã Đức Thượng", "Xã Minh Khai", "Xã Dương Liễu", "Xã Di Trạch", "Xã Đức Giang", "Xã Cát Quế", "Xã Kim Chung", "Xã Yên Sở", "Xã Sơn Đồng", "Xã Vân Canh", "Xã Đắc Sở", "Xã Lại Yên", "Xã Tiến Yên", "Xã Song Phương", "Xã An Khánh", "Xã An Thượng", "Xã Vân Côn", "Xã La Phù", "Xã Đông La"];
	var QuocOai = ["Thị trấn Quốc Oai", "Xã Sài Sơn", "Xã Thượng Cách", "Xã Yên Sơn", "Xã Ngọc Liệp", "Xã Ngọc Mỹ", "Xã Liệp Tuyết", "Xã Thạch Thán", "Xã Đồng Quang", "Xã Phú Cát", "Xã Tuyết Nghĩa", "Xã Nghĩa Hương", "Xã Cộng Hòa", "Xã Tân Phú", "Xã Đại Thành", "Xã Phú Mãn", "Xã Cấn Hữu", "Xã Tân Hòa", "Xã Hòa Thạch", "Xã Đông Yên", "Xã Đông Xuân"];
	var ThachThat = ["Thị trấn Liên Quan", "Xã Đại Đồng", "Xã Cẩm Yên", "Xã Lại Thượng", "Xã Phú Kim", "Xã Hương Ngải", "Xã Canh Nậu", "Xã Kim Quan", "Xã Dị Nậu", "Xã Bình Yên", "Xã Chàng Sơn", "Xã Thạch Hòa", "Xã Cần Kiệm", "Xã Hữu Bằng", "Xã Phùng Xá", "Xã Tân Xã", "Xã Thạch Xá", "Xã Bình Phú", "Xã Hạ Bằng", "Xã Đồng Trúc", "Xã Yên Trung", "Xã Yên Bình", "Xã Tiến Xuân"];
	var ChuongMy = ["Thị trấn Chúc Sơn", "Thị trấn Xuân Mai", "Xã Phụng Châu", "Xã Tiên Phương", "Xã Đông Sơn", "Xã Đông Phương Yên", "Xã Phú Nghĩa", "Xã Trường Yên", "Xã Ngọc Hòa", "Xã Thủy Xuân Tiên", "Xã Thanh Bình", "Xã Trung Hòa", "Xã Đại Yên", "Xã Thụy Hương", "Xã Tốt Động", "Xã Lam Điền", "Xã Tân Tiến", "Xã Nam Phương Tiến", "Xã Hợp Đồng", "Xã Hoàng Văn Thụ", "Xã Hoàng Diệu", "Xã Hữu Văn", "Xã Quảng Bị", "Xã Mỹ Lương", "Xã Thượng Vực", "Xã Hồng Phong", "Xã Đồng Phú", "Xã Trần Phú", "Xã Văn Võ", "Xã Đồng Lạc", "Xã Hòa Chính", "Xã Phú Nam An"];
	var ThanhOai = ["Thị trấn Kim Bài", "Xã Cự Khê", "Xã Bích Hòa", "Xã Mỹ Hưng", "Xã Cao Viên", "Xã Bình Minh", "Xã Tam Hưng", "Xã Thanh Cao", "Xã Thanh Thùy", "Xã Thanh Mai", "Xã Thanh Văn", "Xã Đỗ Động", "Xã Kim An", "Xã Kim Thư", "Xã Phương Trung", "Xã Tân Ước", "Xã Dân Hòa", "Xã Liên Châu", "Xã Cao Dương"];
	var ThuongTin = ["Thị trấn Thường Tín", "Xã Ninh Sở", "Xã Nhị Khê", "Xã Duyên Thái", "Xã Khánh Hà", "Xã Hòa Bình", "Xã Văn Bình", "Xã Hiền Giang", "Xã Hồng Vân", "Xã Vân Tảo", "Xã Liên Phương", "Xã Văn Phú", "Xã Tự Nhiên", "Xã Tiền Phong", "Xã Hà Hồi", "Xã Thư Phú", "Xã Nguyễn Trãi", "Xã Quất Động", "Xã Chương Dương", "Xã Tân Minh", "Xã Lê Lợi", "Xã Thắng Lợi", "Xã Dũng Tiến", "Xã Thống Nhất", "Xã Nghiêm Xuyên", "Xã Tô Hiệu", "Xã Văn Tự", "Xã Vạn Điểm", "Xã Minh Cường"];
	var PhuXuyen = ["Thị trấn Phú Minh", "Thị trấn Phú Xuyên", "Xã Hồng Minh", "Xã Phượng Dực", "Xã Văn Nhân", "Xã Thụy Phú", "Xã Tri Trung", "Xã Đại Thắng", "Xã Phú Túc", "Xã Văn Hoàng", "Xã Hồng Thái", "Xã Hoàng Long", "Xã Quang Trung", "Xã Nam Phong", "Xã Nam Chiều", "Xã Tân Dân", "Xã Sơn Hà", "Xã Chuyên Mỹ", "Xã Khai Thái", "Xã Phúc Tiến", "Xã Vân Từ", "Xã Chi Thủy", "Xã Đại Xuyên", "Xã Phú Yên", "Xã Bạch Hạ", "Xã Quang Lãn", "Xã Châu Can", "Xã Minh Tân"];
	var UngHoa = ["Thị trấn Vân Đình", "Xã Viên An", "Xã Viên Nội", "Xã Hoa Sơn", "Xã Quảng Phú Cầu", "Xã Trường Thịnh", "Xã Cao Thành", "Xã Liên Bạt", "Xã Sơn Công", "Xã Đồng Tiến", "Xã Phương Tú", "Xã Trung Tú", "Xã Đồng Tân", "Xã Tảo Dương Văn", "Xã Vạn Thái", "Xã Minh Đức", "Xã Hòa Lâm", "Xã Hòa Xá", "Xã Trầm Lộng", "Xã Kim Đường", "Xã Hòa Nam", "Xã Hòa Phú", "Xã Đội Bình", "Xã Đại Hùng","Xã Đông Lỗ", "Xã Phù Lưu", "Xã Đại Cường", "Xã Lưu Hoàng", "Xã Hồng Quang"];
	var MyDuc = ["Thị trấn Đại Nghĩa", "Xã Đồng Tâm", "Xã Thượng Lâm", "Xã Tuy Lai", "Xã Phúc Lâm", "Xã Mỹ Thành", "Xã Bột Xuyên", "Xã An Mỹ", "Xã Hồng Sơn", "Xã Lê Thanh", "Xã Xuy Xá", "Xã Phùng Xá", "Xã Phù Lưu Tế", "Xã Đại Hưng", "Xã Vạn Kim", "Xã Đốc Tín", "Xã Hương Sơn", "Xã Hùng Tiến", "Xã An Tiến", "Xã Hợp Tiến", "Xã Hợp Thanh", "Xã An Phú"];

	var message = document.getElementById('xaPhuongSelect');
	var value = obj.value;
	switch(value) 
	{
		case 'Quận Ba Đình': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<BaDinh.length; i++) {
				content += "<option value='" + BaDinh[i] + "'>" + BaDinh[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Hoàn Kiếm': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<HoanKiem.length; i++) {
				content += "<option value='" + HoanKiem[i] + "'>" + HoanKiem[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Tây Hồ': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<TayHo.length; i++) {
				content += "<option value='" + TayHo[i] + "'>" + TayHo[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Long Biên': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<LongBien.length; i++) {
				content += "<option value='" + LongBien[i] + "'>" + LongBien[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Cầu Giấy': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<CauGiay.length; i++) {
				content += "<option value='" + CauGiay[i] + "'>" + CauGiay[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Đống Đa': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<DongDa.length; i++) {
				content += "<option value='" + DongDa[i] + "'>" + DongDa[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Hai Bà Trưng': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<HaiBaTrung.length; i++) {
				content += "<option value='" + HaiBaTrung[i] + "'>" + HaiBaTrung[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Hoàng Mai': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<HoangMai.length; i++) {
				content += "<option value='" + HoangMai[i] + "'>" + HoangMai[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Thanh Xuân': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<ThanhXuan.length; i++) {
				content += "<option value='" + ThanhXuan[i] + "'>" + ThanhXuan[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Sóc Sơn': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<SocSon.length; i++) {
				content += "<option value='" + SocSon[i] + "'>" + SocSon[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Đông Anh': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<DongAnh.length; i++) {
				content += "<option value='" + DongAnh[i] + "'>" + DongAnh[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Gia Lâm': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<GiaLam.length; i++) {
				content += "<option value='" + GiaLam[i] + "'>" + GiaLam[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Nam Từ Liêm': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<NamTuLiem.length; i++) {
				content += "<option value='" + NamTuLiem[i] + "'>" + NamTuLiem[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Thanh Trì': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<ThanhTri.length; i++) {
				content += "<option value='" + ThanhTri[i] + "'>" + ThanhTri[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Bắc Từ Liêm': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<BacTuLiem.length; i++) {
				content += "<option value='" + BacTuLiem[i] + "'>" + BacTuLiem[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Mê Linh': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<MeLinh.length; i++) {
				content += "<option value='" + MeLinh[i] + "'>" + MeLinh[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Quận Hà Đông': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<HaDong.length; i++) {
				content += "<option value='" + HaDong[i] + "'>" + HaDong[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Thị xã Sơn Tây': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<SonTay.length; i++) {
				content += "<option value='" + SonTay[i] + "'>" + SonTay[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Ba Vì': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<BaVi.length; i++) {
				content += "<option value='" + BaVi[i] + "'>" + BaVi[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Phúc Thọ': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<PhucTho.length; i++) {
				content += "<option value='" + PhucTho[i] + "'>" + PhucTho[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Đan Phượng': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<DanPhuong.length; i++) {
				content += "<option value='" + DanPhuong[i] + "'>" + DanPhuong[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Hoài Đức': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<HoaiDuc.length; i++) {
				content += "<option value='" + HoaiDuc[i] + "'>" + HoaiDuc[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Quốc Oai': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<QuocOai.length; i++) {
				content += "<option value='" + QuocOai[i] + "'>" + QuocOai[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Thạch Thất': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<ThachThat.length; i++) {
				content += "<option value='" + ThachThat[i] + "'>" + ThachThat[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Chương Mỹ': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<ChuongMy.length; i++) {
				content += "<option value='" + ChuongMy[i] + "'>" + ChuongMy[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Thanh Oai': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<ThanhOai.length; i++) {
				content += "<option value='" + ThanhOai[i] + "'>" + ThanhOai[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Thường Tín': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<ThuongTin.length; i++) {
				content += "<option value='" + ThuongTin[i] + "'>" + ThuongTin[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Phú Xuyên': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<PhuXuyen.length; i++) {
				content += "<option value='" + PhuXuyen[i] + "'>" + PhuXuyen[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Ứng Hòa': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<UngHoa.length; i++) {
				content += "<option value='" + UngHoa[i] + "'>" + UngHoa[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case 'Huyện Mỹ Đức': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			var i=0;
			for( i=0; i<MyDuc.length; i++) {
				content += "<option value='" + MyDuc[i] + "'>" + MyDuc[i] + "</option>";
			}
			message.innerHTML = content;
			break;
		}
		case '': {
			var content = "<option value=\"\">Chọn xã, phường</option>";
			message.innerHTML = content;
			break;
		}
	}
}

/*Hiển thị khung đăng ký, đăng nhập khi click vào */
$("#button_demo").click( function() { 
	$("#login_background").css("display", "block");
});


/*Điều chỉnh chiều rộng của khung đăng nhập, đăng ký với các màn hình khác nhau*/
if($(window).width() > 1200) {
	$("#logIn_area").css("width", "35%");
	$("#signIn_area").css("width", "35%");
} else if ($(window).width() > 992) {
	$("#logIn_area").css("width", "40%");
	$("#signIn_area").css("width", "40%");
} else if ($(window).width() > 768) {
	$("#logIn_area").css("width", "45%");
	$("#signIn_area").css("width", "45%");
}  else {
	$("#logIn_area").css("width", "80%");
	$("#signIn_area").css("width", "80%");
}
$(window).resize(function() {
	if($(window).width() > 1200) {
		$("#logIn_area").css("width", "35%");
		$("#signIn_area").css("width", "35%");
	} else if ($(window).width() > 992) {
		$("#logIn_area").css("width", "45%");
		$("#signIn_area").css("width", "45%");
	} else if ($(window).width() > 768) {
		$("#logIn_area").css("width", "50%");
		$("#signIn_area").css("width", "50%");
	}  else {
		$("#logIn_area").css("width", "70%");
		$("#signIn_area").css("width", "70%");
	}
});


 /*Xử lý việc hiển thị khung đăng nhập, đăng ký khi click*/
$("#signIn_button").click( function() { /*click vào nút đăng ký trên màn hình chính*/
	$("#login_background").css("display", "block");
	$("#logIn_area").css("display", "none");
	$("#signIn_area").css("display", "block");
	$(".logIn_menu_button").css("color", "black");
	$(".signIn_menu_button").css("color", "blue");
});
$("#logIn_button").click( function() { /*click vào nút đăng nhập trên màn hình chính*/
	$("#login_background").css("display", "block");
	$("#logIn_area").css("display", "block");
	$("#signIn_area").css("display", "none");
	$(".logIn_menu_button").css("color", "blue");
	$(".signIn_menu_button").css("color", "black");
});
$(".logIn_menu_button").click( function() { /*click vào nút đăng nhập trên khung đăng nhập*/
	$("#logIn_area").css("display", "block");
	$("#signIn_area").css("display", "none");
	$(".logIn_menu_button").css("color", "blue");
	$(".signIn_menu_button").css("color", "black");
});
$(".signIn_menu_button").click( function() { /*click vào nút đăng ký trên khung đăng nhập*/
	$("#logIn_area").css("display", "none");
	$("#signIn_area").css("display", "block");
	$(".logIn_menu_button").css("color", "black");
	$(".signIn_menu_button").css("color", "blue");
});

/*Tắt khung đăng nhập, đăng ký*/
$(".close_login_icon").click( function() {
	$("#login_background").css("display", "none");
});

//Hàm kiểm tra các lỗi trong khi đăng ký tài khoản và cài đặt thuộc tính onsubmit
function validateSignInForm() {
	var user_name_signIn = $("#display_name").val();
	var password_signIn = $("#signIn_password").val();
	var password_again = $("#signIn_password_again").val();
	if(user_name_signIn == "" && password_signIn == "") {
		$("#error_input_signIn").text("Bạn chưa nhập tài khoản, mật khẩu!");
		return false;
	} else if(user_name_signIn != "" && password_signIn == "") {
		$("#error_input_signIn").text("Bạn chưa nhập mật khẩu!");
		return false;
	} else if(user_name_signIn == "" && password_signIn != "") {
		$("#error_input_signIn").text("Bạn chưa nhập tên tài khoản!");
		return false;
	}  else if(password_signIn != password_again) {
		$("#error_input_signIn").text("Nhập lại mật khẩu sai!");
		return false;
	} else {
		$("#error_input_signIn").text("");
	}
}
//Hàm kiểm tra các lỗi trong khi đăng nhập và cài đặt thuộc tính onsubmit
function ValidateLogIn() {
	var user_name = $("#logIn_user_name").val();
	var password = $("#logIn_password").val();
    if (user_name == "" && password == "") {
        $("#error_input_logIn").text("Bạn chưa nhập tài khoản, mật khẩu!");
        return false;
    } else if(user_name == "" && password != "") { 
    	$("#error_input_logIn").text("Bạn chưa nhập tên tài khoản!");
    	return false;
    } else if(password == "" && user_name != "") {
    	$("#error_input_logIn").text("Bạn chưa nhập mật khẩu!");
    	return false;
    } else {
    	$("#error_input_logIn").text("");
    }
}

/*Điều khiển hiển thị của phần menu*/
if($('html,body').scrollTop()>50){
	$('#menu_scroll').css("display", "block");
}
else {
	$('#menu_scroll').css("display", "none");
}
$(window).scroll( function(event) {
	var pos_body = $('html,body').scrollTop();
      // console.log(pos_body);
      if(pos_body>50){
      	$('#menu_scroll').css("display", "block");
      }
      else {
      	$('#menu_scroll').css("display", "none");
      }
  });

