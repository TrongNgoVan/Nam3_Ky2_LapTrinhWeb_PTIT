
<script type="text/javascript">
	function validateSearchingForm() {
		var checkboxKieuPhong = document.getElementsByName("kieuPhong");
		var KieuPhongChecked = false;
		for (var i = 0; i < checkboxKieuPhong.length; i++){
			if (checkboxKieuPhong[i].checked === true){
				KieuPhongChecked = true;
			}
		}
		var truePrice = false;
		if( document.getElementById("price_from").value != ""
			&& document.getElementById("price_to").value != "") {
			truePrice = true;

		}
		if (document.getElementById("district_select").value == ""
			&& document.getElementById("xaPhuongSelect").value == ""
			&& truePrice == false
			&& KieuPhongChecked == false) {
			return false;
		}
}
</script>

<!-- Phần hiển thị filter tìm kiếm -->
<div class="container-fluid" style="background-image: url(images/ptit.jpg); background-repeat: no-repeat; background-size: cover; margin-bottom: 20px;">
	<div class="container">
	
		<h2 class="text-center" style="padding: 30px 0px 40px 0px ;font-weight: bold; font-size: 32px; color: black;">Bộ lọc tìm kiếm</h2>
		<div class="row" style="background-color: #2e3339; opacity: 0.9; margin: 0px 15px 15px 20px;">
			<form action="./KetQuaTimKiem.php" method="GET" onsubmit="return validateSearchingForm()">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<h3 style="font-weight: bold;  color:  rgb(190, 0, 0);">Chọn khu vực</h3>
					<select class="filter_option select_tags" name="quanHuyen" onchange="setUpXaPhuongFilter(this)" id="district_select">
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
					<select class="filter_option select_tags" id="xaPhuongSelect" name="xaPhuong">
						<option class="select_filter" value="">Chọn xã, phường</option>
						
					</select>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<h3 style="font-weight: bold;  color:  rgb(190, 0, 0);">Chọn loại phòng</h3>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: white; padding: 5px 0px;">
						<input name="kieuPhong" type="radio" value="Phòng trọ" /> Phòng trọ
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: white; padding: 5px 0px;">
						<input name="kieuPhong" type="radio" value="Nhà nguyên căn" /> Nhà nguyên căn
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: white; padding: 5px 0px;">
						<input  name="kieuPhong" type="radio" value="Kí túc xá"> Kí túc xá
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: white; padding: 5px 0px;">
						<input  name="kieuPhong" type="radio" value="Tất cả"> Tất cả
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<h3 style="font-weight: bold;  color:  rgb(190, 0, 0);">Chọn khoảng giá</h3>
					<div class="row col-lg-12" style="margin: 0px; padding: 0px;">
						<input class="col-lg-4 col-md-4 col-sm-4 col-xs-4 price_filter" type="number" min="0" value="" id="price_from" name="price_from">
						<p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="color: white;">Đến</p>
						<input class="col-lg-4 col-md-4 col-sm-4 col-xs-4 price_filter" type="number" min="0" value="" id="price_to" name="price_to">
					</div>
				</div>
				<div class="col-xs-12 filter_option" style="width: 100%; text-align: center;"  >
					<button id="searching_button" type="submit" class="btn btn-danger" name="searching_button"style="background-color: rgb(175, 0, 0); border-color: rgb(175, 0, 0);">Tìm kiếm</button>
				</div>
			</form>
		</div>
	</div>
</div>
