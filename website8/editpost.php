<?php 
require("config/config.php");
require("config/db.php");
mysqli_query($conn,"set names utf8");
#编辑博客
if (isset($_POST['submit'])) {
	#获取input中的数据
	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$author=mysqli_real_escape_string($conn,$_POST['author']);
	$body=mysqli_real_escape_string($conn,$_POST['body']);
	#获取update_id
	$update_id=mysqli_real_escape_string($conn,$_POST['update_id']);
	var_dump($update_id);
	#sql语句
	$query="UPDATE posts SET title='$title',author='$author',body='$body' WHERE id={$update_id}";
	if (mysqli_query($conn,$query)) {
		header("location:index.php");
	}else{
		echo "数据编辑失败".mysqli_error($conn);
	}
}

$id=mysqli_real_escape_string($conn,$_GET['id']);
$query="SELECT * FROM posts WHERE id={$id}";
#执行语句
$result=mysqli_query($conn,$query);
#获取数据
$post=mysqli_fetch_assoc($result);	
// var_dump($post);
#释放数据
mysqli_free_result($result);
#断开连接
mysqli_close($conn);



 ?>
<?php include("inc/header.php"); ?>
<div class="container">
	<h1 class="text-muted">编辑博客</h1>
	<br>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="form-group">
			<label>标题</label>
			<input value="<?php echo $post['title']; ?>" type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label>作者</label>
			<input value="<?php echo $post['author']; ?>" type="text" name="author" class="form-control">
		</div>
		<div class="form-group">
			<label>内容</label>
			<input value="<?php echo $post['body']; ?>" type="text" name="body" class="form-control">
		</div>
		<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
		<input type="submit" name="submit" value="确认" class="btn btn-primary">
	</form>
</div>
<?php include("inc/footer.php"); ?>