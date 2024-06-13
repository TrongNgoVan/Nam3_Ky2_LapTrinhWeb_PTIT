<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>   
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel ="icon" href ="images/tieude.png" type="image/x-icon">
	    <title id="title_room_page"><?php
		include('connectToDatabase.php');
		$room_id = $_GET['id'];
		$sql_select_room_title = 'SELECT TieuDe FROM phong_tro WHERE IDPhongTro=' .$room_id;
		$room_type = $_GET['type'];
		if($result_title = mysqli_query($conn, $sql_select_room_title)) {
			while ($row_title = mysqli_fetch_assoc($result_title)) {
				echo $row_title['TieuDe'];
			}
		}
	?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script type="text/javascript" src="vendor/bootstrap.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/CSS.css">
	<style type="text/css">
		.room_info {
			border: solid 1px #d2cdcd;
			margin: 0px;
			padding: 5px 15px;
		}
		.room_content {
			background-color: #f8f8f8;
		}
		.item > img { 
			margin: 0 auto; 
		}

	</style>

</head>
<body>
	<!-- Khung đăng ký, đăng nhập -->
	<?php 
		include('LogInAndSignIn.php');
	?>

	<!-- Menu hiển thị ra khi scroll màn hình -->
	<?php
		include('menuScroll.php');
	?>

	<!-- Header -->
	<?php
		include('header.php');
	?>

	<!-- Menu chính -->
	<?php
		include('menu.php');
	?>

	<!-- Phần hiển thị đường dẫn các trang -->
	<div class="container">
		<p id="path">
			<a href="index.php" class="link">Trang chủ / </a>
			<a href="LoaiPhong.php?action=<?php echo $room_type; ?>" class="link"><?php echo $room_type; ?> / </a>
			<a class = "link">Chi tiết</a>
		</p>
	</div>

	<!-- Phần thân để hiển thị filter và chi tiết căn phòng -->
	<div class="container" style="">
		<div class="row">
			<!-- Phần chi tiết của căn phòng -->
			<?php
				include('roomDetail.php');
			?>

			<!-- Phần filter bên phải trang -->
			<?php
				include('filterRight.php');
			?>

			<!-- Phần hiển thị thêm các tin có liên quan -->
		</div>
	</div>
</div>

<!-- Phần chân trang -->
	<?php
		include('footer.php');
	?>

<!-- Nhúng file javascript -->
<script type="text/javascript" src="scripts/JavaScript.js"></script> 

</body>
</html>
