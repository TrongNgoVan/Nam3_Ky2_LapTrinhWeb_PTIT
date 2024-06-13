<?php 
	if(isset($_POST['display_name']) && isset($_POST['signIn_password']) && isset($_POST['signIn_password_again'])) {
		//kết nối đến CSDL
		include('connectToDatabase.php');

		$sql_select_user_name = 'SELECT user_name FROM user WHERE user_name = "' .$_POST['display_name']. '"';
		if($result_user_name = mysqli_query($conn, $sql_select_user_name)) {
			if(mysqli_num_rows($result_user_name) == 0) {
				$sql_insert_acount = 'INSERT INTO user(user_name, password) VALUE ("' .$_POST['display_name']. '", "' .$_POST['signIn_password']. '")';
				if(mysqli_query($conn, $sql_insert_acount)) {
					$_SESSION['user_name'] = $_POST['display_name'];
				} else {
					echo "Lỗi: " . $sql_insert_acount . "<br>" . mysqli_error($conn);
				}	
			}
		}
	}
?>