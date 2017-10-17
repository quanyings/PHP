<?php 
function updateData($sql){
	$mysqli=new mysqli("localhost","root","","people");
	if ($mysqli->connect_errno) {
		die($mysqli->connect_error);
	}
	$mysqli->query("set names utf8");
	$result=$mysqli->query($sql);
	if ($result) {
		echo "更新成功";
	}else{
		echo "更新失败";
	}
	$mysqli->close();
}
$sql="UPDATE customers SET name='晶莹',city='南阳' WHERE id=3";
updateData($sql);


 ?>