<?php 
	if(isset($_GET['action'])) {
		session_unset();
		header('Location: index.php');
	}
?>
