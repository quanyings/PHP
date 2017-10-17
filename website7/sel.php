<?php 
function selectData($sql){
	$mysqli=new mysqli("localhost","root","","people");
	if ($mysqli->connect_errno) {
		die($mysqli->connect_error);
	}
	$mysqli->query("set names utf8");
	$result=$mysqli->query($sql);
	if ($result->num_rows) {
		$data=$result->fetch_all(MYSQLI_ASSOC);
		echo json_encode($data);
	}
	$mysqli->close();
}
$sql="SELECT*FROM customers";
selectData($sql);

 ?>