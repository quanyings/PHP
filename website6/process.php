<?php 
 // echo "你好";
// if (isset($_GET['name'])) {
// 	echo "你的名字是:".$_GET['name'];

//   }

# 1.连接数据库
$conn=mysqli_connect("localhost","root","","ajaxtest");


if (isset($_POST['name'])) {
	// echo "你的名字是:".$_POST['name'];
    $name=$_POST['name'];
    $query="INSERT INTO users(name) VALUES('$name')";
    $result=mysqli_query($conn,$query);
    //"set names utf8" 解决输入中文出现乱码的问题
    if ($result) {
    	echo "数据插入成功";
    }else{
    	echo "数据插入失败".mysqli_error($conn);
    }
  }



 ?>




