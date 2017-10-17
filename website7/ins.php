<?php 
function insertData($sql){
	$mysqli=new mysqli("localhost","root","","people");
	if ($mysqli->connect_errno) {
		die($mysqli->connect_error);
	}
	$mysqli->query("set names utf8");
	$result=$mysqli->query($sql);
	if ($result) {
		echo "插入成功";
	}else{
		echo "插入失败";
	}
	$mysqli->close();
}
$sql="INSERT INTO customers(name,email,address,city,state) VALUES('全','quan@qq.com','上地','北京','海淀')";
insertData($sql);


 ?>