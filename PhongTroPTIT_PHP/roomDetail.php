<?php
	//kết nối đến CSDL
	include('connectToDatabase.php');

	$room_id = $_GET['id'];

	$sql_select_room_content = 'SELECT * FROM phong_tro WHERE phong_tro.IDPhongTro='.$room_id;
    
	$sql_select_room_image = 'SELECT DuongDan FROM hinh_anh_phong_tro WHERE IDPhongTro='.$room_id;
	$num_of_images = 0;
	if($result_images = mysqli_query($conn, $sql_select_room_image)) {
		$num_of_images = mysqli_num_rows($result_images);
	}

	if($result_content = mysqli_query($conn, $sql_select_room_content)) {
		while($row_content = mysqli_fetch_assoc($result_content)) {

?>

<!-- phần hiển thị chi tiết của phòng -->
<div class="col-lg-9 col-md-9 col-sm-12 col-sx-12" style="margin-bottom: 20px;">
	<div class="row">
		<div class="col-xs-12">
			<h3><?php echo $row_content['TieuDe']; ?></h3>
		</div>
		<div class="col-xs-12">
			<b class="col-sm-2 col-xs-4 room_info room_content">Địa chỉ</b>
			<p class="col-sm-10 col-xs-8 room_info"><?php echo $row_content['DiaChi']; ?></p>
		</div>
		<div class="col-xs-12">
			<b class="col-sm-2 col-xs-4 room_info room_content">Loại phòng</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php echo $row_content['KieuPhong']; ?></p>
			<b class="col-sm-2 col-xs-4 room_info room_content">Kiểu vệ sinh</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php echo $row_content['KieuVeSinh']; ?></p>
		</div>
		<div class="col-xs-12">
			<b class="col-sm-2 col-xs-4 room_info room_content">Giá cho thuê</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php echo $row_content['GiaChoThue']; ?> VNĐ/tháng</p>
			<b class="col-sm-2 col-xs-4 room_info room_content">Diện tích</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php echo $row_content['DienTich']; ?> m²</p>
		</div>
		<div class="col-xs-12">
			<b class="col-sm-2 col-xs-4 room_info room_content">Giá điện</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php 
				if($row_content['GiaDien']!='') {
					echo $row_content['GiaDien'];
				} else {
					echo 'Chưa xác định';
				} ?></p>
			<b class="col-sm-2 col-xs-4 room_info room_content">Giá nước</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php
				if($row_content['GiaNuoc']!='') {
					echo $row_content['GiaNuoc'];
				} else {
					echo 'Chưa xác định';
				} ?></p>
		</div>
		<div class="col-xs-12">
			<b class="col-sm-2 col-xs-4 room_info room_content">Đối tượng</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php 
				if($row_content['DoiTuong']!='') {
					echo $row_content['DoiTuong'];
				} else {
					echo 'Chưa xác định';
				} ?></p>
			<b class="col-sm-2 col-xs-4 room_info room_content">Ngày đăng</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php
				if($row_content['ThoiGianDang']!='') {
					echo $row_content['ThoiGianDang'];
				} else {
					echo 'Chưa xác định';
				} ?></p>
		</div>
		<div class="col-xs-12">
			<b class="col-sm-2 col-xs-4 room_info room_content">Tiện ích</b>
			<p class="col-sm-10 col-xs-8 room_info"><?php
				if($row_content['TienIch']!='') {
					echo $row_content['TienIch'];
				} else {
					echo 'Chưa xác định';
				} ?></p>
		</div>
		<div class="col-xs-12">
			<h4>Thông tin liên hệ</h4>
		</div>
		<div class="col-xs-12">
			<b class="col-sm-2 col-xs-4 room_info room_content">Tên chủ trọ</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php
				if($row_content['TenChuTro']!='') {
					echo $row_content['TenChuTro'];
				} else {
					echo 'Chưa xác định';
				} ?></p>
			<b class="col-sm-2 col-xs-4 room_info room_content">Số điện thoại</b>
			<p class="col-sm-4 col-xs-8 room_info"><?php echo $row_content['Sdt']; ?></p>
		</div>
		<div class="col-xs-12">
			<h4>Mô tả chi tiết</h4>
		</div>
		<div class="col-xs-12">
			<p class="col-xs-12 room_info" style="font-weight: normal; background-color: #f8f8f8;">
				<?php echo $row_content['MoTa']; ?>
			</p>
		</div>
		<div class="col-xs-12">
			<h4>Trạng thái</h4>
		</div>
		<div class="col-xs-12">
			<p class="col-xs-12 room_info" style="font-weight: normal; background-color: #f8f8f8;">
				<?php echo $row_content['Status']; ?>
			</p>
		</div>
		<div class="col-xs-12">
			<h4>Hình ảnh</h4>
		</div>
		<div class="col-xs-12">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php
						for($i=0; $i<$num_of_images; $i++) {
							if($i==0) {
								echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
							} else {
								echo '<li data-target="#myCarousel" data-slide-to="' .$i. '"></li>';
							}
						}
					?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?php 
						if($result_images = mysqli_query($conn, $sql_select_room_image)) {
							$count = 0;
							while($row_images = mysqli_fetch_assoc($result_images)) {
								if($count==0) {
									echo '<div class="item active">
									<img src="' .$row_images['DuongDan']. '" alt="">
									</div>';
								} else {
									echo '<div class="item">
									<img src="' .$row_images['DuongDan']. '" alt="">
									</div>';
								}
								$count++;
							}
						} else {
							echo "ERROR";
						}
					?>
				</div>

				<!--  Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">&lsaquo;</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">&rsaquo;</span>
				</a>
			</div>
		</div>
		<div class="col-xs-12" style="margin-top: 20px;">
    <!-- Nút Thuê Phòng Trọ -->
	     
        </div>

    <!-- Container cho form hợp đồng -->
    

	</div>
</div>

<?php
		}
	}
?>