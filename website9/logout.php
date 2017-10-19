<?php 
	session_start();
	//unset() 销毁指定的变量。
	unset($_SESSION['username']);
	unset($_SESSION['success']);
	header("location: login.php");
 ?>