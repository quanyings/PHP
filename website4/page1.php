<?php 
 
 if (isset($_POST['submit'])) {
 	 session_start();
     $_SESSION['name']=$_POST['name'];
     $_SESSION['email']=$_POST['email'];
     header("location:page2.php");
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>page1</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="email" placeholder="enter email">
		<input type="submit" name="submit" placeholder="提交">
	</form>
</body>
</html>



