<div class="container">
	<?php 
	//检查sbqname是否能获取到
	/*
	//$_GET
	if (isset($_GET["sbqname"])&&isset($_GET["sbqemail"])) {
	  # echo $_GET["sbqname"];
		$name=$_GET["sbqname"];
		$email=$_GET["sbqemail"];
		echo $name.":".$email;
	};

	//$_POST
	if (isset($_POST["sbqname"])&&isset($_POST["sbqemail"])) {
	  # echo $_POST["sbqname"];
		$name=$_POST["sbqname"];
		$email=$_POST["sbqemail"];		
		if (!empty($name)&&!empty($email)) {
			echo $name.":".$email;
		}
		print_r($_POST);
	};
	*/
	// $_REQUEST
	if (isset($_REQUEST["sbqname"])&&isset($_REQUEST["sbqemail"])) {
	  # echo $_GET["sbqname"];
		$name=$_REQUEST["sbqname"];
		$email=$_REQUEST["sbqemail"];		
		if (!empty($name)&&!empty($email)) {
			echo $name.":".$email;
		}
		print_r($_REQUEST);
	};

	# 查询url地址后面的参数
	// echo $_SERVER["QUERY_STRING"];
	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get post</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="get_post.php" method="GET">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="sbqname">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="sbqemail">
			</div>
			<input type="submit" value="提交" class="btn btn-primary btn-block">
		</form>

		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER["PHP_SELF"]."?name=赵帅"; ?>" class="btn btn-success btn-block">赵帅</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER["PHP_SELF"]."?name=郜超"; ?>" class="btn btn-info btn-block">郜超</a>
			</li>
		</ul>
		<h1>
			<?php if (isset($_GET["name"])){echo $_GET["name"];} ?>
		</h1>
	</div>
</body>
</html>
<!-- get 和 post请求的区别:
get在url(文件路径)后会用?号把用户所填表单内容展示出来;存储内存小.
post 更安全,内存也大 -->





