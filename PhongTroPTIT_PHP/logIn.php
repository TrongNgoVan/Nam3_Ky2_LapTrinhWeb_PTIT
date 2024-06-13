

<?php
	if(isset($_POST['logIn_user_name']) && isset($_POST['logIn_password'])) {
		//kết nối đến CSDL
		include('connectToDatabase.php');

		//Câu lệnh sql lấy tài khoản
		$sql_select_acount = 'SELECT * FROM user WHERE user_name = "' .$_POST['logIn_user_name']. '" AND password = "' .$_POST['logIn_password']. '"';
		if($result_acount = mysqli_query($conn, $sql_select_acount)) {
			if(mysqli_num_rows($result_acount) > 0) {
				$_SESSION['user_name'] = $_POST['logIn_user_name'];
			}
		}

	}
?>