
<!-- Phần nhập thông tin -->
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	<div class="row">
		<form method="POST" action="index.php" onsubmit="return validateForm()"  enctype="multipart/form-data">
			<!-- Phần các thông tin cơ bản -->
			<div class="col-xs-12">
				<h3>Các thông tin cơ bản</h3>
			</div>

			<div class="col-xs-12"> <!-- Tiêu đề tin -->
				<div class="col-xs-12">
					<h4>Tiêu đề tin <span>* </span> <span class="error_input" id="error_input_title"></span></h4>
				</div>
				<div class="col-xs-12">
					<input id="input_title" type="text" name="title" maxlength="80" style="width: 100%" placeholder="Hãy đặt tiêu đề đầy đủ ý nghĩa, khách sẽ quan tâm hơn" title="Tiêu đề">
				</div>
			</div>

			<div class="col-xs-12"> <!-- Chọn loại phòng -->
				<h4 class="col-xs-12">Chọn loại phòng <span>*</span> <span class="error_input" id="error_input_kind_of_room"></span></h4>
				<div class="col-sm-6 col-xs-12">
					<input name="KieuPhong" type="radio" value="Phòng trọ" style="width: 13px;"/> Phòng trọ
				</div>
				<div class="col-sm-6 col-xs-12">
					<input name="KieuPhong" type="radio" value="Nhà nguyên căn" style="width: 13px;"/> Nhà thuê nguyên căn
				</div>
				<div class="col-sm-6 col-xs-12">
					<input  name="KieuPhong" type="radio" value="Kí túc xá" style="width: 13px;"> Kí túc xá
				</div>
			</div>

			<div class="col-xs-12"> <!-- Kiểu vệ sinh -->
				<h4 class="col-xs-12">Kiểu vệ sinh <span>*</span> <span class="error_input" id="error_input_kind_of_toilet"></span></h4>
				<div class="col-sm-6 col-xs-12">
					<input name="VeSinh" type="radio" value="Khép kín" style="width: 13px;" /> Khép kín
				</div>
				<div class="col-sm-6 col-xs-12">
					<input name="VeSinh" type="radio" value="Không khép kín" style="width: 13px;"/> Không khép kín
				</div>
			</div>

			<div class="col-xs-6"> <!-- Mức giá cho thuê -->
				<div class="col-xs-12">
					<h4>Giá cho thuê <span>*</span> <span class="error_input" id="error_input_room_price"></span></h4>
				</div>
				<div class="col-xs-12">
					<input id="input_room_price" type="number" name="price" min="0" placeholder="Giá cho thuê(VNĐ)" title="Giá thuê phòng">
				</div>
			</div>

			<div class="col-xs-6"> <!-- Diện tích căn phòng -->
				<div class="col-xs-12">
					<h4>Diện tích <span>*</span> <span class="error_input" id="error_input_room_area"></span></h4>
				</div>
				<div class="col-xs-12">
					<input id="input_room_area" type="number" name="area" min="0" placeholder="Diện tích(đơn vị m²)" title="Diện tích căn phòng">
				</div>
			</div>

			<div class="col-xs-6"> <!-- Mức giá cho thuê sử dụng điện-->
				<div class="col-xs-12">
					<h4>Giá sử dụng điện</h4>
				</div>
				<div class="col-xs-12">
					<input type="text" name="electricPrice" min="0" placeholder="Ghi rõ VNĐ/số hay VNĐ/tháng" title="Giá điện">
				</div>
			</div>

			<div class="col-xs-6"> <!-- Mức giá sử dụng nước -->
				<div class="col-xs-12">
					<h4>Giá sử dụng nước</h4>
				</div>
				<div class="col-xs-12">
					<input type="text" name="waterPrice" min="0" placeholder="Ghi rõ VNĐ/số hay VNĐ/tháng" title="Giá nước">
				</div>
			</div>

			<div class="col-xs-6"> <!-- Đối tượng cho thuê -->
				<div class="col-xs-12">
					<h4>Đối tượng cho thuê</h4>
				</div>
				<div class="col-xs-12">
					<select name="doiTuong">
						<option value="Tất cả">Tất cả</option>
						<option value="Sinh viên">Sinh viên</option>
						<option value="Người đi làm">Người đi làm</option>
						<option value="Gia đình">Gia đình</option>
					</select>
				</div>
			</div>

			<div class="col-xs-12"> <!-- Tiện ích căn phòng -->
				<div class="col-xs-12">
					<h4>Các tiện ích</h4>
				</div>
				<div class="col-xs-12">
					<input type="text" name="tienIch" maxlength="80" style="width: 100%" placeholder="VD: có bình nóng lạnh, điều hòa, chỗ để xe,..." title="Tiện ích">
				</div>
			</div>

			<!-- Phần địa chỉ -->
			<div class="col-xs-12">
				<h3>Địa chỉ</h3>
			</div>

			<div class="col-sm-6 col-xs-12"> <!-- Chọn quận huyện -->
				<div class="col-xs-12">
					<h4>Quận/huyện <span>*</span> <span class="error_input" id="error_input_district"></span></h4>
				</div>
				<div class="col-xs-12">
					<select onchange="setUpXaPhuongFilter(this)" id="quan_huyen_select" name="quanHuyen">
						<option value="">Chọn quận, huyện</option>
						<option value="Quận Ba Đình">Quận Ba Đình</option>
						<option value="Huyện Ba Vì">Huyện Ba Vì</option>
						<option value="Quận Bắc Từ Liêm">Quận Bắc Từ Liêm</option>
						<option value="Quận Cầu Giấy">Quận Cầu Giấy</option>
						<option value="Huyện Chương Mỹ">Huyện Chương Mỹ</option>
						<option value="Huyện Đan Phượng">Huyện Đan Phượng</option>
						<option value="Huyện Đông Anh">Huyện Đông Anh</option>
						<option value="Quận Đống Đa">Quận Đống Đa</option>
						<option value="Huyện Gia Lâm">Huyện Gia Lâm</option>
						<option value="Quận Hà Đông">Quận Hà Đông</option>
						<option value="Quận Hai Bà Trưng">Quận Hai Bà Trưng</option>
						<option value="Huyện Hoài Đức">Huyện Hoài Đức</option>
						<option value="Quận Hoàn Kiếm">Quận Hoàn Kiếm</option>
						<option value="Quận Hoàng Mai">Quận Hoàng Mai</option>
						<option value="Quận Long Biên">Quận Long Biên</option>
						<option value="Huyện Mê Linh">Huyện Mê Linh</option>
						<option value="Huyện Mỹ Đức">Huyện Mỹ Đức</option>
						<option value="Quận Nam Từ Liêm">Quận Nam Từ Liêm</option>
						<option value="Huyện Phú Xuyên">Huyện Phú Xuyên</option>
						<option value="Huyện Phúc Thọ">Huyện Phúc Thọ</option>
						<option value="Huyện Quốc Oai">Huyện Quốc Oai</option>
						<option value="Huyện Sóc Sơn">Huyện Sóc Sơn</option>
						<option value="Thị xã Sơn Tây">Thị xã Sơn Tây</option>
						<option value="Quận Tây Hồ">Quận Tây Hồ</option>
						<option value="Huyện Thạch Thất">Huyện Thạch Thất</option>
						<option value="Huyện Thanh Oai">Huyện Thanh Oai</option>
						<option value="Huyện Thanh Trì">Huyện Thanh Trì</option>
						<option value="Quận Thanh Xuân">Quận Thanh Xuân</option>
						<option value="Huyện Thường Tín">Huyện Thường Tín</option>
						<option value="Huyện Ứng Hòa">Huyện Ứng Hòa</option>
					</select>
				</div>
			</div>

			<div class="col-sm-6 col-xs-12"> <!-- Chọn xã phường -->
				<div class="col-xs-12">
					<h4>Xã/phường <span>*</span> <span class="error_input" id="error_input_xaPhuong"></span></h4>
				</div>
				<div class="col-xs-12">
					<select id="xaPhuongSelect" name="xaPhuong">
						<option value="" class="select_filter">Chọn xã, phường</option>
					</select>
				</div>
			</div>

			<div class="col-xs-12"> <!-- Nhập địa chỉ chính xác -->
				<div class="col-xs-12">
					<h4>Địa chỉ chính xác <span>*</span> <span class="error_input" id="error_input_address"></span></h4>
				</div>
				<div class="col-xs-12">
					<input type="text" name="diaChi" placeholder="Hãy nhập địa chỉ chính xác để khách dễ tìm hơn" id="input_exacly_address" title="Địa chỉ">
				</div>
			</div>

			<!-- Phần thông tin liên lạc -->
			<div class="col-xs-12">
				<h3>Thông tin liên lạc</h3>
			</div>

			<div class="col-sm-6 col-xs-12"> <!-- Họ và tên chủ trọ -->
				<div class="col-xs-12">
					<h4>Tên chủ trọ</h4>
				</div>
				<div class="col-xs-12">
					<input type="text" name="tenChuTro" maxlength="40" title="Tên chủ trọ">
				</div>
			</div>

			<div class="col-sm-6 col-xs-12"> <!-- Số điện thoại chủ trọ -->
				<div class="col-xs-12">
					<h4>Số điện thoại <span>*</span> <span class="error_input" id="error_input_phone_number"></span></h4>
				</div>
				<div class="col-xs-12">
					<input id="input_phone_number" type="text" name="sdt" pattern="[0-9]*" title="Số điện thoại">
				</div>
			</div>

			<!-- Phần miêu tả chi tiết căn phòng -->
			<div class="col-xs-12">
				<h3>Thông tin mô tả</h3>
			</div>

			<div class="col-xs-12"> <!-- Mô tả chi tiết căn phòng -->
				<div class="col-xs-12">
					<h4>Mô tả <span>*</span> <span class="error_input" id="error_input_describle"></span></h4>
				</div>
				<div class="col-xs-12">
					<p class="notes">Giới thiệu mô tả về tin đăng của bạn. Ví dụ: Khu nhà có vị trí thuận lợi: Gần công viên, gần trường học ... Tổng diện tích 52m2, đường đi ô tô vào tận cửa</p>
				</div>
				<div class="col-xs-12">
					<textarea id="input_room_describle" rows="5" title="Mô tả căn phòng" name="moTa"></textarea>
				</div>
			</div>

			<div class="col-xs-12"> <!-- Hình ảnh của căn phòng -->
				<div class="col-xs-12">
					<h4>Hình ảnh <span>*</span> <span class="error_input" id="error_input_image"></span></h4>
				</div>
				<div class="col-xs-12">
					<p class="notes">Tin đăng có hình ảnh rõ ràng sẽ được xem và gọi gấp nhiều lần so với tin rao không có ảnh. Hãy đăng ảnh để được giao dịch nhanh chóng!</p>
				</div>
				<div class="col-xs-12">
				  <input type="file" id="upload_images" style="border: none;" name="fileToUpload[]" onchange="previewImages()"  multiple="multiple">
                 </div>
				<div class="col-sm-4  col-xs-12">					
					<div class="preview_images  col-xs-12" id="preview_images" style="margin: 15px 0px; padding: 0px;"></div>
				</div>
			</div>

			<div class="col-xs-12" style="width: 100%; text-align: center;">
                <button id="upload_room_button" type="submit" class="btn btn-success" name="DangTin" style="background-color: rgb(175, 0, 0); border-color: red;">Đăng tin</button>
            </div>

		</form>
	</div>
</div>


