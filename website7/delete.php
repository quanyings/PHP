<?php 
  /*
   操作数据库:
     1.连接数据库
     2.执行sql语句
     3.获取数据并使用
     4.断开连接
  */


function deleteData($sql){
	$mysqli=new mysqli("localhost","root","","people");
# 测试是否连接成功
if ($mysqli->connect_errno) {
	die($mysqli->connect_error);
}

# 设置utf-8
$mysqli->query("set names utf8");
#执行sql语句
$result=$mysqli->query($sql);
if ($result) {
	echo "删除成功";
}else{
	echo "删除失败";
}
#断开连接
$mysqli->close();
 
}
#准备sql语句
$sql="DELETE FROM customers WHERE id=2";
deleteData($sql);

?>

