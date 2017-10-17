<?php 
//连接数据库
$conn=mysqli_connect("localhost","root","","ajaxtest");
//查询
$query="SELECT*FROM users";
$result=mysqli_query($conn,$query);
$users=mysqli_fetch_all($result,MYSQLI_ASSOC); //获取所有数据内容
// print_r($users); //是一个数组
echo json_encode($users);

 ?>



