

<script type="text/javascript">
	<?php 
		if(!isset($_SESSION['user_name'])) {
			if(isset($_POST['logIn_user_name']) && isset($_POST['logIn_password'])) {
				echo   '$("#login_background").css("display", "block");
						$("#logIn_area").css("display", "block");
						$("#signIn_area").css("display", "none");
						$(".logIn_menu_button").css("color", "green");
						$(".signIn_menu_button").css("color", "black");
						$("#error_input_logIn").text("Tài khoản hoặc mật khẩu bị sai!");';
			} else if(isset($_POST['display_name']) && isset($_POST['signIn_password']) && isset($_POST['signIn_password_again'])) {
				echo   '$("#login_background").css("display", "block");
						$("#logIn_area").css("display", "none");
						$("#signIn_area").css("display", "block");
						$(".logIn_menu_button").css("color", "black");
						$(".signIn_menu_button").css("color", "green");
						$("#error_input_signIn").text("Tên tài khoản đã tồn tại, vui lòng chọn tên khác!");';
			}
		}
	?>
</script>