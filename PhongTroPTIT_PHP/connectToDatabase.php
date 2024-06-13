<?php
	//kết nối đến CSDL
	//  $conn = new mysqli($servername, $username, $password, $dbname);
	$conn = mysqli_connect("localhost", "root", "", "phongtroptit");
	if (!$conn) { //kiểm tra xem đã kết nối đến CSDL được chưa
		die("Connection failed: " . mysqli_connect_error());
	}
	mysqli_set_charset($conn, 'UTF8');
?>