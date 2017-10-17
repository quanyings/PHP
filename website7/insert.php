<?php 
  /*
   操作数据库:
     1.连接数据库
     2.执行sql语句
     3.获取数据并使用
     4.断开连接
  */


function insertData($sql){
	$mysqli=new mysqli("localhost","root","","people");
# 测试是否连接成功
if ($mysqli->connect_errno) {
	die($mysqli->connect_error);
	//mysqli_connect_error（）返回上一次连接错误的字符串描述
}

# 设置utf-8
$mysqli->query("set names utf8");
#执行sql语句
$result=$mysqli->query($sql);
if ($result) {
	echo "插入成功";
}else{
	echo "插入失败";
}
#断开连接
$mysqli->close();
 
}
#准备sql语句
$sql="INSERT INTO customers(name,email,address,city,state) VALUES('小雨','260@qq.com','定泗路','北京','昌平区')";
$sql2="INSERT INTO customers(name,email,address,city,state) VALUES('静静','243@qq.com','回龙观','北京','昌平区')";
insertData($sql);
insertData($sql2);
?>

