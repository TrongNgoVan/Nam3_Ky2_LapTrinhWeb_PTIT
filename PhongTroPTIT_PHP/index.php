<?php
    session_start();
?>

<!-- Include file xử lý thêm dữ liệu vào csdl khi đăng tin -->
<?php 
	include('addroom.php');
?>
<!-- Include file xử lý tác vụ đăng nhập -->
<?php 
	include('logIn.php');
?>

<!-- Include file xử lý tác vụ đăng ký -->
<?php 
	include('signIn.php');
?>

<!-- include file xử lý tác vụ đăng xuất -->
<?php 
	include('logOut.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <link rel ="icon" href ="images/tieude.png" type="image/x-icon">
   <title>Phòng Trọ PTIT</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="styles/CSS.css">
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

	<!-- Khung tìm kiếm của trang chủ -->
	<?php
		include('filterOfIndex.php');
	?>

	<!-- Phần hiển thị đường dẫn các trang -->
	<div class="container">
		<p id="path">
			<a href="index.php" class="link">Trang chủ</a>
		</p>
	</div>

	<!-- Phần thân để hiển thị các tin bài đăng -->
	<div class="container" style="">
		<div class="row">
			<!-- phần khung các tin đã đăng -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-sx-12" id="room_main_content">
				<div class="row">
					<?php
						include('newRoomOfIndex.php');
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Phần chân trang -->
	<?php
		include('footer.php');
	?>

	<!-- Nhúng file javascript -->
	<script type="text/javascript" src="scripts/JavaScript.js"></script> 

	<?php
		include('displayLogInBackground.php');
	?>


</body>
</html>
