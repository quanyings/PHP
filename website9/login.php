<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册 登录系统</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<header>
			<h2 class="text-muted text-center">登录</h2>
		</header>
		<form action="login.php" method="POST">
			<?php include("errors.php"); ?>
			<div class="form-group">
				<label>账号</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>密码</label>
				<input type="password" name="password" class="form-control">
			</div>
			<input type="submit" name="login_user" value="登录" class="btn btn-success">
			<a href="register.php" class="btn btn-info pull-right">没有账号,请注册</a>
		</form>
	</div>
</body>
</html>