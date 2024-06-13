<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	//kết nối đến CSDL
	include('connectToDatabase.php');

	//Câu lệnh sql lấy tất cả các phòng thỏa mãn điều kiện của bộ lọc
	$sql_select_all_action = 'SELECT * FROM phong_tro WHERE 1=1';
	if(isset($_GET['kieuPhong'])) {
		if($_GET['kieuPhong'] != "Tất cả") {
			$sql_select_all_action = $sql_select_all_action . ' AND phong_tro.KieuPhong="' . $_GET['kieuPhong'] . '"';

		}
	}
	if(isset($_GET['kieuVeSinh'])) {
		if($_GET['kieuVeSinh'] != "Tất cả") {
			$sql_select_all_action = $sql_select_all_action . ' AND phong_tro.KieuVeSinh="' . $_GET['kieuVeSinh'] . '"';
		}
	}
	if(isset($_GET['quanHuyen'])) {
		if($_GET['quanHuyen']!="") {
			$sql_select_all_action = $sql_select_all_action . ' AND phong_tro.QuanHuyen="' . $_GET['quanHuyen'] . '"';
		}
	}
	if(isset($_GET['xaPhuong'])) {
		if($_GET['xaPhuong']!="") {
			$sql_select_all_action = $sql_select_all_action .  ' AND phong_tro.XaPhuong="' . $_GET['xaPhuong'] . '"';
		}
	}
	if(isset($_GET['price_from']) && isset($_GET['price_to'])) {
		if($_GET['price_from']!="" && $_GET['price_to']!="") {
			$sql_select_all_action = $sql_select_all_action . ' AND phong_tro.GiaChoThue BETWEEN ' . $_GET['price_from'] . ' AND ' . $_GET['price_to'];
		}
	}

	if(!isset($_GET['sorting_time']) && !isset($_GET['sorting_price'])) {
		$sql_select_all_action = $sql_select_all_action . ' ORDER BY phong_tro.ThoiGianDang DESC';
	}

	if(isset($_GET['sorting_time'])) { //lấy giá trị (nếu có) của phần sắp xếp phòng trọ theo thời gian và thêm vào câu lệnh sql
		if($_GET['sorting_time'] == "Mới nhất") {
			$sql_select_all_action = $sql_select_all_action . ' ORDER BY phong_tro.ThoiGianDang DESC';
		} else if($_GET['sorting_time'] == "Cũ nhất") {
			$sql_select_all_action = $sql_select_all_action . ' ORDER BY phong_tro.ThoiGianDang ASC';
		}
	}
	if(isset($_GET['sorting_price'])) { //Lấy giá trị (nếu có) của phần sắp xếp phòng trọ theo giá và thêm vào câu lệnh sql
		if($_GET['sorting_price'] == "Rẻ nhất") {
			$sql_select_all_action = $sql_select_all_action . ' ORDER BY phong_tro.GiaChoThue ASC';
		} else if($_GET['sorting_price'] == "Đắt nhất") {
			$sql_select_all_action = $sql_select_all_action . ' ORDER BY phong_tro.GiaChoThue DESC';
		}
	}

	$row_of_results = 0;
	if($result_all = mysqli_query($conn, $sql_select_all_action)) {
		$row_of_results = mysqli_num_rows($result_all); //Số lượng căn phòng đã đăng
	}


	$result_per_page = 9; //Số lượng bài đăng của một trang

	$number_of_pages = ceil($row_of_results/$result_per_page); //Số trang hiển thị

	//Kiểm tra nếu trang không có biến page thì là trang số 1
	if(!isset($_GET['page'])) {
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	//Kết quả đầu tiên trả về của trang
	$this_page_first_result = ($page-1)*$result_per_page;

	$sql_select_each_page = $sql_select_all_action . ' LIMIT ' . $this_page_first_result  . ',' .$result_per_page;
	$result_each_page = mysqli_query($conn, $sql_select_each_page);

	//Hiển thị các phòng tương ứng
	while($row = mysqli_fetch_assoc($result_each_page)) {
		?>
		<div class="col-xs-12">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
					<a href="ChiTietCanPhong.php?id=<?php echo $row['IDPhongTro']; ?>&type=<?php echo $row['KieuPhong']; ?>" class="thumbnail">
						<?php
							$sql_select_image = 'SELECT DuongDan FROM hinh_anh_phong_tro WHERE IDPhongTro=' .$row['IDPhongTro']. ' LIMIT 1';
							$result_img = mysqli_query($conn, $sql_select_image);
							if(mysqli_num_rows($result_img) > 0) {
								while ($row_img = mysqli_fetch_assoc($result_img)) {
									echo '<img src="' .$row_img['DuongDan']. '" style="width: 100%; height: 180px;">';
								}
							}
							// nếu phòng không có ảnh thì dùng logo
							else echo '<img src="images/icon-account.png" style="width: 100%; height: 100%;">';
						?>
					</a>
				</div>
				<div class="col-lg-9col-md-8 col-sm-8 col-xs-12">
					<div class="row">
						<a href="ChiTietCanPhong.php?id=<?php echo $row['IDPhongTro']; ?>&type=<?php echo $row['KieuPhong']; ?>" class="col-xs-12 link simple_room_info_line">
							<h3 style="margin-top: 10px;"><?php echo $row['TieuDe']; ?></h3>
						</a>
						<b class="col-xs-12 simple_room_info_line"> 
							<span style="color: blue;">Địa chỉ: </span> 
							<span><?php echo $row['DiaChi']; ?></span>
						</b>
						<b class="col-sm-6 col-xs-12 simple_room_info_line">
							<span style="color:blue">Diện tích: </span>
							<span><?php echo $row['DienTich']; ?> m<sup>2</sup></span>
						</b>
						<b class="col-sm-6 col-xs-12 simple_room_info_line">
							<span style="color: blue;">Vệ sinh: </span>
							<span><?php echo $row['KieuVeSinh']; ?></span>
						</b>
						<b class="col-sm-6 col-xs-12 simple_room_info_line">
							<span style="color: blue;">Tên chủ trọ: </span>
							<span><?php echo $row['TenChuTro']; ?></span>
						</b>
						<b class="col-sm-6 col-xs-12 simple_room_info_line">
							<span style="color: blue;">Sđt liên hệ: </span>
							<span><?php echo $row['Sdt']; ?></span>
						</b>
						<b class="col-sm-6 col-xs-12 simple_room_info_line">
							<span style="color: blue;">Giá: </span>
							<span><?php echo $row['GiaChoThue']; ?> đồng/tháng</span>
						</b>
						<b class="col-sm-6  col-xs-12 simple_room_info_line">
							<span style="color: blue;">Trạng thái: </span>
							<span><?php echo $row['Status']; ?> </span>
						</b>
						<p class="col-xs-12 text-right simple_room_info_line" style="color: gray">
							<?php 
								$ThoiGian = $row['ThoiGianDang'];
								$now =  date('Y-m-d H:i:s');
								$diff = strtotime($now) - strtotime($ThoiGian);
								if($diff < 60) {
									echo round($diff) ;
									echo " giây trước";
								} else if($diff < 60*60) {
									echo round($diff/60);
									echo " phút trước";
								} else if($diff < 60*60*24) {
									echo round($diff/60/60);
									echo " giờ trước";
								} else if($diff < 60*60*24*30) {
									echo round($diff/60/60/24);
									echo " ngày trước";
								} else if($diff < 60*60*24*30*12) {
									echo round($diff/60/60/24/30);
									echo " tháng trước";
								} else {
									echo round($diff/60/60/24/30/12);
									echo " năm trước";
								}
							?> 
						</p>
					</div>
				</div>
			</div>
		</div> <!-- Hết 1 bài đăng -->
		<?php
	}
	//Phần pagination hiển thị số lượng trang
	$path = ''; //các điều kiện bộ lọc trên url
	if(isset($_GET['kieuPhong'])) {
		$path = $path. '&kieuPhong=' . $_GET['kieuPhong'];
	}
	if(isset($_GET['kieuVeSinh'])) {
		$path = $path. '&kieuVeSinh=' . $_GET['kieuVeSinh'];
	}
	if(isset($_GET['quanHuyen'])) {
		$path = $path. '&quanHuyen=' . $_GET['quanHuyen'];
	}
	if(isset($_GET['xaPhuong'])) {
		$path = $path. '&xaPhuong=' . $_GET['xaPhuong'];
	}
	if(isset($_GET['price_from'])) {
		$path = $path. '&price_from=' . $_GET['price_from'];
	}
	if(isset($_GET['price_to'])) {
		$path = $path. '&price_to=' . $_GET['price_to'];
	}
	if(isset($_GET['sorting_time'])) {
		$path = $path. '&sorting_time=' .$_GET['sorting_time'];
	} else if(isset($_GET['sorting_price'])) {
		$path = $path. '&sorting_price=' .$_GET['sorting_price'];
	}

	$pre_page = $page;//kiểm tra xem nút previous có thể click được không, nếu click được thì chuyển trang

	$next_page = $page; //kiểm tra xem nút next có thể click được k nếu click được thì chuyển trang

	echo '<div class="col-xs-12">
		<ul class="pagination pull-right">';
	if($page>1) {
		$pre_page = $page - 1;
		echo '<li><a style="margin: 0px 3px;" type="button" class="btn btn-default" href="KetQuaTimKiem.php?page=' .$pre_page.$path. '"><</a></li>';
	} else {
		echo '<li class="disabled"> <span><</span> </li>';
	}

	for($pos_page=1; $pos_page<=$number_of_pages; $pos_page++) {
		if($pos_page == $page) {
			echo '<li class="active"><span>' .$pos_page. '</span></li>';
		} else {
			echo '<li><a style="margin: 0px 3px;" type="button" class="btn btn-default" href="KetQuaTimKiem.php?page=' .$pos_page.$path. '">' .$pos_page. '</a></li>';
		}

	}

	if($page<$number_of_pages) {
		$next_page = $page + 1;
		echo '<li><a style="margin: 0px 3px;" type="button" class="btn btn-default" href="KetQuaTimKiem.php?page=' .$next_page.$path. '">></a></li>';
	} else {
		echo '<li class="disabled"> <span>></span> </li>';
	}
	echo '</ul>
		</div>';

?>
